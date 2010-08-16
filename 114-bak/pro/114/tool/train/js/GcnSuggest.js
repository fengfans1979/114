/**
 * A controller that typeahead-enable a HTML text input box similar to Google suggest
 * @param inputBox, the HTML element for the input box
 * @param server side 
  *@param  callback: this function will be called when user makes a selection
 */
function GcnSuggest(inputBox, suggestUrl, transform, initSuggs, callback) {
	this._suggestUrl = suggestUrl;
	this._inputBox = inputBox;
	this._callback = callback;
	if (transform)
		this._tranformFunc = transform;
	
	this._initSuggs = initSuggs;
	
	
	// remember this in the text input box because in text box's event handler context, "this" means the box
	this._inputBox.suggController = this;
	// for IE only, in Mozilla need to have <input type="text" autocomplete="off" ...>
    this._inputBox.autocomplete = "off";
	
	// event handlers	
	this._inputBox.onkeyup    = this.keyupHandler;
	this._inputBox.onkeydown  = noenter;
	this._inputBox.onblur     = this.onblurHandler;
	this._inputBox.onclick     = this.inputOnClick;
	
	var sugg = this;
	this._inputBox.onsubmit= function() {
		  sugg.completeSugg();
	  };
    
    this._timeoutAdjustment = 1;
	this.suggs = [];
	
	// create the suggs div
	this.createSuggsDiv();
	this.setUpStyles();
	
	// remember curr entered text
    this._textEnteredSoFar = this._inputBox.value;
    this._prevTextEntered = this._textEnteredSoFar;

    this._highlightedSuggIndex = -1;
    this._resultCache = [];
  
    // start main timer loop monitoring 
    this.mainLoop();
}
function noenter(e) {
  if (!e) 
    e = window.event;
	if (e.keyCode && e.keyCode != 13) {
		return true;
	}  
    return false;
}


GcnSuggest.SUGG_SPAN_CLASS = "suggWord";


// This function sets itself up and gets called over and over (timeout driven)

GcnSuggest.prototype.mainLoop = 
function() {
  // see if user entered new text or deleted text (backspaced)
  if (this._textEnteredSoFar == "") {
   //   this.hideSuggs();
  } else  if(this._prevTextEntered != this._textEnteredSoFar) {
      var cached =this._resultCache[this._textEnteredSoFar] ;
      if(cached){
        // Found in our cache...
        //DBG.println(AjxDebug.DBG2, "Found sugg results in cache " + cached);
        this.suggReceived(this._textEnteredSoFar,cached);
      }else{
        this._timeoutAdjustment++;
		this.getSuggsFromServer(escapeURI(this._textEnteredSoFar))
      }
      this._inputBox.focus()
  }
  this._prevTextEntered = this._textEnteredSoFar;
  var suggController = this;
  setTimeout( function() {
		  		suggController.mainLoop();
             } ,recalculateTimeout(this._timeoutAdjustment));
  return true;
}


GcnSuggest.prototype.onblurHandler =
function(e) {
  if (!e) 
    e = window.event;

  // we may blur the box when arrow up down is pressed, but then we don't want to hide suggs
  if(!this.suggController._upDownKeyPressed){
      this.suggController.hideSuggs();
  }
  this.suggController._upDownKeyPressed=false;
}



/**
 * create the div for showing the list of suggs and add it as a sibling of input DOM node, 
 * the div is initially hidden (display style set to none)
 */
GcnSuggest.prototype.createSuggsDiv =
function() {
  this._completeDiv=document.createElement("DIV");
  scl(this._completeDiv,"completeDiv");
  this._completeDiv.style.zIndex="1";
  this._completeDiv.style.paddingRight="0";
  this._completeDiv.style.paddingLeft="3";
  this._completeDiv.style.paddingTop="3";
  this._completeDiv.style.paddingBottom="0";
  this.setCompleteDivSize();
  this._completeDiv.style.display="none";
  this._completeDiv.style.position="absolute";
  this._completeDiv.style.backgroundColor="white";
 
  document.body.appendChild(this._completeDiv);
}

// was ba...
GcnSuggest.prototype.setCompleteDivSize = 
function () {
  if(this._completeDiv){
    this._completeDiv.style.left = calculateOffsetLeft(this._inputBox)+"px";
    this._completeDiv.style.top = calculateOffsetTop(this._inputBox)+this._inputBox.offsetHeight+4+"px";
   // this._completeDiv.style.width = "140px";
  }
}

GcnSuggest.prototype.keyupHandler=
function(e) {
  // this is the text box now
  if (!e) 
    e = window.event;
  this.suggController.keyPressed(e.keyCode);
//  e.stopPropagation();
}

function setSubmitButtonFocus(){
  _submitButton.focus()
}

// strip CR from string...
function stripCRFromString(va){
  for(var f=0,oa="",zb="\n\r"; f<va.length; f++) {
    if (zb.indexOf(va.charAt(f))==-1) {
      oa+=va.charAt(f);
    } else {
      oa+=" ";
    }
  }
return oa
}

// Find span value with className = dc...
// Was Qa
function findSpanValueForClass(i,dc){
  var ga= i.getElementsByTagName("span");
  if (!ga)
    return"";
    
	for(var f=0; f<ga.length; ++f){
	  if(ga[f].className==dc){
	    var value=ga[f].innerHTML;
	    if(value=="&nbsp;") {
	      return "";
	    } else {
	      var z=stripCRFromString(value);
	      return z;
	    }
	  }
	}
}


// Was F
GcnSuggest.prototype.hideSuggs = 
function (){
  this._completeDiv.style.display="none";
}

GcnSuggest.prototype.showCompleteDiv = 
function () {
  this._completeDiv.style.display="block";
  this.setCompleteDivSize();
}

// We get the following javascript code dynamically returned from google:
// suggReceived(frameElement, "fast bug", 
// new Array("fast bug track", "fast bugs", "fast bug", "fast bugtrack"), 
// new Array("793,000 results", "2,040,000 results", "6,000,000 results", "7,910 results"), 
// new Array(""));
GcnSuggest.prototype.suggReceived=
function(prefix, suggestedWords ){
  if(this._timeoutAdjustment>0) {
    this._timeoutAdjustment--;
  }
  // cache the suggs for a given prefix
  this._resultCache[prefix] = suggestedWords;
  // show suggs
  this.refreshSuggList(suggestedWords);
  this.updateSuggListVisiblity();
  // 
  this._completeDivDivList = this._completeDiv.getElementsByTagName("div");
  this._numCompleteRows = this._completeDivDivList.length;
  
  // adjust the sugg div's height to show all suggs
  if(this._numCompleteRows>0) {
    this._completeDiv.height= 16 * this._numCompleteRows+4;
  } else {
    this.hideSuggs();
  }
}

/**
 * keyup handler, updates the variable that stores current input text 
 */
GcnSuggest.prototype.keyPressed=
function (keyCode){
  if (keyCode ==0) 
  	return;
  
  // 38 is up cursor key, 40 is down cursor key...
  if(keyCode==40||keyCode==38) {
  	// arrow key pressed, blurs focus, then sets focus again... 
	this._upDownKeyPressed = true;
 	var suggController = this;
    setTimeout(function () { suggController._inputBox.focus();} ,10);
  }
  
	switch (keyCode) {
	// enter key or left right arrows pressed, user has picked a suggested word
	// then unhighlight the suggested part of the text so the full suggested word is now in the box
		 case 13 : // enter
	     case 33: // 
	     case 34: // PgDn
	     case 35:  // Home
	     case 36: //  end
	     case 37: // left
	     case 39: // right 
	     case 45: // insert 
	     case 46: // delete
		  var d = this._inputBox; 
		  if (keyCode == 13) {
			  if(d.createTextRange){
			    var t=d.createTextRange();
			    t.moveStart("character",d.value.length);
			    t.select();
			  } else if (d.setSelectionRange){
			    d.setSelectionRange(d.value.length,d.value.length)				
			  }
			this.completeSugg();
		  }
		  this.hideSuggs();
		  break;
	 // down arrow  update the input box text to be that of new selected sugg
	  case  40:
	    this.suggCursorKeyOver(this._highlightedSuggIndex+1);
	    break;
	  case 38 :
	    this.suggCursorKeyOver(this._highlightedSuggIndex-1);
	    break;
	  
	   
      default: 	
		// regular key or backspace (8), then update what's the user input   
   	    var len1 = getHighlightedTextLen(this._inputBox);
		var len2 = getUnhighlightedTextLen(this._inputBox);
		 // part of the text highlighted (from suggested words), what user typed so far is the unhighlighted portion
		 if(len1 > 0 && len2 != -1) {
		    this._textEnteredSoFar = this._inputBox.value.substring(0,len2);
		 }  else {
		    this._textEnteredSoFar = this._inputBox.value;
		 }
   }
}

/**
 * based on current user input and sugg list result hide or show the sugg list div
 */
GcnSuggest.prototype.updateSuggListVisiblity =
function () {
  var suggRows = this._completeDiv.getElementsByTagName("div");
  // show completion Div unless user backspaced all text or there's no sugg
  if(suggRows.length <= 0){
    this.hideSuggs();
  } else {
	this.showCompleteDiv();
  }
}


GcnSuggest.prototype.completeSugg = function() {
  this.hideSuggs();
  if (this.getSuggestedWord() != null) {
	  if (this.getSuggestedWord() == "其他...") {
		  this._inputBox.value ="请输入拼音或汉字";
		  this._inputBox.focus();
		  this._inputBox.select();
		  this._inputBox.style.color='#ff0000';
  	  } else {
		  this.setInputBoxText(this.getSuggestedWord());  
	  }
  }
  // need to clear selection
  this._highlightedSuggDiv = null;
  this._highlightedSuggIndex = -1;
}



// Go read about encodeURIComponent here: http://msdn.microsoft.com/library/default.asp?url=/library/en-us/script56/html/js56jsmthencodeuricomponent.asp
// Basically converts a string to a valid uri... (spaces become %20, etc, etc..)
function escapeURI(La){
  if(encodeURIComponent) {
    return encodeURIComponent(La);
  }
  if(escape) {
    return escape(La);
  }
}

// If Mb is 0, will return 150...
// If Mb is 3, will return 250...
// If Mb is 4, will return 450...
// If Mb is X, will return 850...
function recalculateTimeout(Mb){
  var H=100;
  for(var o=1; o<=(Mb-2)/2; o++){
    H=H*2;
  }
  H=H+50;
  return H;
}

function suggMouseDown(){
    this.suggController._highlightedSuggDiv = this;
    this.suggController.completeSugg();
}

// on mouseover...
function suggMouseOver(){
   // unhighlight prev sugg 
  if(this._highlightedSuggDiv) {
    scl(this._highlightedSuggDiv,"suggR");
  }
  // highlight the one under mouse
  scl(this,"currSugg");
}

GcnSuggest.prototype.inputOnClick =
function (e) {
	this.value='';
 	if (this.suggController._initSuggs) {
       this.suggController.suggReceived("", this.suggController._initSuggs);
	} else {
		this.suggController.getSuggsFromServer("_all_");
	}
}


// On Mouse out...
var suggMouseOut =function(){
  scl(this,"suggR");
}


// Called when cursor up/down pressed... selects new entry in completeDiv...
// update the input box text to be that of selected sugg
GcnSuggest.prototype.suggCursorKeyOver =
function (suggIndex){
  if(!this._completeDivDivList||this._numCompleteRows<=0) {
    return;
  }
  // ### 
  //  we need to reshow here even if it's already visible because the content changed to newly fetched
//  this.showCompleteDiv();
  if(suggIndex >= this._numCompleteRows){
    suggIndex = this._numCompleteRows-1;
  } else if(suggIndex < 0){
	suggIndex = 0;
  }  
  // already at first or last sugg
  if (this._highlightedSuggIndex == suggIndex) {
  	 return;
  }
  // unhighlight the previous selected sugg in the list
  if(this._highlightedSuggIndex != -1) {
    scl(this._highlightedSuggDiv,"suggR"); 
    this._highlightedSuggIndex = -1;
  }
  
  // highlight the new selected sugg
  this._highlightedSuggIndex = suggIndex;
  this._highlightedSuggDiv= this._completeDivDivList.item(suggIndex);
  if (this._highlightedSuggDiv)
	  scl(this._highlightedSuggDiv,"currSugg");
  
  // update the input box text to be that of selected sugg
}


GcnSuggest.prototype.getSuggestedWord = 
function () {
  if(!this._highlightedSuggDiv) {
    return null;
  }
  var t = findSpanValueForClass(this._highlightedSuggDiv, GcnSuggest.SUGG_SPAN_CLASS);
  // call back to transform sugg str to real intended input str
  if (this._tranformFunc) {
	  t = this._tranformFunc(t);
  }
  return t;
}
	

// Called as:
// calculateOffsetLeft(this._inputBox)
function calculateOffsetLeft(r){
  return getOffsetToWindow(r,"offsetLeft");
}

// Called as:
// calculateOffsetTop(this._inputBox)
function calculateOffsetTop(r){
  return getOffsetToWindow(r,"offsetTop");
}

function getOffsetToWindow(r,attr){
  var kb=0;
  while(r){
    kb+=r[attr]; 
    r=r.offsetParent;
  }
  return kb;
}

// Was Ha
function setInputFieldSize(){
  var xa=document.body.scrollWidth-220;
  xa=0.73*xa;
  this._inputBox.size=Math.floor(xa/6.18);
}

/*
 * find highlighted text in an input box and return its length
 */
function getHighlightedTextLen(n){
  var N=-1;
  if(n.createTextRange){
    var fa=document.selection.createRange().duplicate();
    N=fa.text.length;
  }else if(n.setSelectionRange){
    N=n.selectionEnd-n.selectionStart;
  }
  return N;
}

function getUnhighlightedTextLen(n){
  var v=0;
  if(n.createTextRange){
    var fa=document.selection.createRange().duplicate();
    fa.moveEnd("textedit",1);
    v=n.value.length-fa.text.length;
  }else if(n.setSelectionRange){
    v=n.selectionStart;
  }else{
    v=-1;
  }
  return v;
}

function scl(c, styleName){
  c.className = styleName;
}


GcnSuggest.prototype.setUpStyles =
function (){
  this.insertCSSRule(".suggDiv", "width:390px;border:2px #6699cc solid;  height:auto; font-size: 13px; color:#333333; padding:2px; line-height:20px; font-family: arial,sans-serif; word-wrap:break-word; ");
  
  // for the sugg list row div
  this.insertCSSRule(".suggR *", "background-color:#ffffff;");
  // active row
  this.insertCSSRule(".currSugg *", "background-color: #2c5c9c;  color: white ! important; ");
  // the word column in the row, we can have other cols in the future
  this.insertCSSRule("." + GcnSuggest.SUGG_SPAN_CLASS, "padding:2px;display: block; width:90px  !important; float:left;   cursor:pointer;");
  scl(this._completeDiv,"suggDiv");
}


function suggDivMouseOut() {
	alert("out of sugg div");
    this.style.display = "none";	
}

GcnSuggest.prototype.refreshSuggList =
function (suggs){
  // clear old sugg list
  while(this._completeDiv.childNodes.length>0) {
    this._completeDiv.removeChild(this._completeDiv.childNodes[0]);
  }


  for(var f=0; f< suggs.length; ++f){
    var u=document.createElement("DIV");
    scl(u,"suggR");
    u.suggController = this;
    u.onmousedown=suggMouseDown;
    u.onmouseover=suggMouseOver;
    u.onmouseout= suggMouseOut;
    
    var ua=document.createElement("SPAN");
    ua.innerHTML= suggs[f]; // the text for the suggested result...
    scl(ua, GcnSuggest.SUGG_SPAN_CLASS);
    u.appendChild(ua);
    this._completeDiv.appendChild(u);
  }
  
//   this._completeDiv.onmouseout = suggDivMouseOut;

}

GcnSuggest.prototype.insertCSSRule =
function(name,gb){
    var I = document.styleSheets[0];
    if(I.addRule){
      I.addRule(name,gb);
    }else if(I.insertRule){
      I.insertRule(name+" { "+gb+" }",I.cssRules.length);
    }
}

// Was function jb...
// returns an XMLHttp object... gets it in an IE/Mozilla friendly way..
function getXMLHTTP(){
  var A=null;
  try{
    A=new ActiveXObject("Msxml2.XMLHTTP");
  }catch(e){
    try{
      A=new ActiveXObject("Microsoft.XMLHTTP");
    } catch(oc){
      A=null;
    }
  }
  if(!A && typeof XMLHttpRequest != "undefined") {
    A=new XMLHttpRequest();
  }
  return A;
}





// This is the call:
// http://www.google.com/complete/search?hl=en&js=true&qu=fast%20bug
// And we get back:
// suggReceived(frameElement, "fast bug", new Array("fast bug track", "fast bugs", "fast bug", "fast bugtrack"), new Array("793,000 results", "2,040,000 results", "6,000,000 results", "7,910 results"), new Array(""));
GcnSuggest.prototype.getSuggsFromServer =
function (prefix){
	if (!prefix || prefix.length == 0) {
    	return;
   }
   // abort the previous request if it's still ongoing
  if(this._xmlHttp &&this._xmlHttp.readyState!=0){
    this._xmlHttp.abort();
  }
  
  if ( ! this._xmlHttp) {
	  this._xmlHttp=getXMLHTTP();
  }
  
	this._xmlHttp.open("GET", this._suggestUrl + prefix, true);
	var suggController = this;
	this._xmlHttp.onreadystatechange=function() {
	  if (suggController._xmlHttp.readyState==4 && suggController._xmlHttp.responseText) {
 	      var value = eval(suggController._xmlHttp.responseText);
	      suggController.suggReceived(prefix, value);
	  } 
	};
	this._xmlHttp.send(null);
}

// Select suggested entry by setting the text in the input box to that word
GcnSuggest.prototype.setInputBoxText =
function (word) {
  this._inputBox.value = word;  
     if (this._callback) 
      this._callback(word);
}

addEvent(window, "load", initSugg);
