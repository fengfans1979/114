
function cityChanged(str) {
	city = stripParen(str);

 	var old = window.location.href;
 	var f = old.indexOf("cityName=");
	var u = old.substring(0, f) + "cityName=" + city + "&price=" + "" + "&k=" + "" + "&submit=" ;
	window.location = u;
 }


function citySugg(inputId) {
	citySuggCore(inputId, cityChanged);
}// JavaScript Document



function citySuggCore(inputId, callback, url) {
  var is = ['上海(SH)' ,'北京(BJ)' ,'南京(NJ)' ,'杭州(HZ)' ,'广州(GZ)' ,'成都(CD)' ,'武汉(WH)' ,'青岛(QD)' ,'天津(TJ)' ,'沈阳(SY)' ,  '重庆(CQ)' , '深圳(SZ)'  ,'郑州(ZZ)' ,'西安(XA)' ,
            '黄山(HS)', '大连(DL)' , '昆明(KM)' ,  '桂林(GL)' ,'洛阳(LY)' ,'宁波(NB)' ,'济南(JN)', '其他...' ];

  var el = document.getElementById(inputId);
  var c = new GcnSuggest(el, url, stripParen, is, callback);
}// JavaScript Document


