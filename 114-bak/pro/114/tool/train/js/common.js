var Dom = {};
Dom.get=function(el){return(typeof el=='object')?el:document.getElementById(el);}
Browser ={
	ie:/msie/.test(window.navigator.userAgent.toLowerCase()),
	ie6:/msie 6.0/.test(window.navigator.userAgent.toLowerCase()),
	moz:/gecko/.test(window.navigator.userAgent.toLowerCase()),
	opera:/opera/.test(window.navigator.userAgent.toLowerCase()),
	safari:/safari/.test(window.navigator.userAgent.toLowerCase())
}


window.onload = function(){
	selectTab("search-menu",["form0","form1","form2"]);
	
}

var ieHover = function(tags){

	for(var i=0,len = tags.length; i<len;++i){
		tags[i].onmouseover=function(){
			this.tmpClass = this.className;
			this.className ="iehover";
		}
		tags[i].onmouseout=function(){
			this.className = this.tmpClass;
		}
	}
	
}




function selectTab(id,boxarr){
	var Items = document.getElementById(id).getElementsByTagName("a");
	var MouseDelayTime=500;
	var waitInterval;
	var evts = ["click","mouseover"];
	var lastItem;
	for(var i=0,len = Items.length;i<len;i++){
		(function(){
			var item = Items[i];
			selectItem(item);
		})();
	}
	function selectItem(obj){
		for(var i=0,len = evts.length;i<len;i++){
			(function(){
				var evt = evts[i];
				if(evt=="click"){
					obj["on"+evt] =run;
				}else if(evt =="mouseover"){
					obj["on"+evt] = function(){
					waitInterval = window.setTimeout(run,MouseDelayTime);
				}
					obj.onmouseout = function(){
						if(waitInterval!=undefined){
							window.clearTimeout(waitInterval);
						}
					};
				}
				
				
				function run(){
					for(var j=0,len = Items.length;j<len;j++){
						if(Items[j].className){
							Items[j].className = "";
						}
					}

					obj.className = "current";
					var box = document.getElementById(obj.getAttribute("rel"));
					for(var k = 0, len = boxarr.length; k<len;k++){
						document.getElementById(boxarr[k]).style.display = "none";
					}
					box.style.display = "block"
				}
				
				
			})();
		}
	}
}//selectTab

function addFav() {
	var title = document.getElementsByTagName("title")[0].innerHTML;
	if( document.all ) {
		window.external.AddFavorite( location.href, title);
	}else if (window.sidebar) {
		window.sidebar.addPanel(title, location.href,"");
	} else if( window.opera && window.print ) {
		return true;
	}
}




