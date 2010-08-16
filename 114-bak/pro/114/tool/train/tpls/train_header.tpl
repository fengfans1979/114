<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<{if $a eq '1'}>
<{$station[0]->station_query}>火车站火车时刻表 - 
<{elseif $a eq '2'}>
<{$traininfo->train_name}>车次(<{$traininfo->station_begin}>到<{$traininfo->station_end}>)时刻表 - 
<{elseif $a eq '3'}>
<{$schemes[0]->station_begin_query|default:$miniprice->station1}>站到<{$schemes[0]->station_end_query|default:$miniprice->station3}>站火车时刻表 - 
<{elseif $a eq '4'}>
<{$station1}>站到<{$station3}>火车时刻表 - 
<{elseif $a eq '5'}>
<{$price->train_name}>车次的火车票票价 - 
<{elseif $a eq '6'}>
<{$price->station_begin_query}>站到<{$price->station_end_query}>站火车票票价 - 
<{/if}>
火车时刻表查询 - 114啦网址导航
</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script language="JavaScript" type="text/javascript">
function initSugg() {
	  citySuggCore("k1", null, "do.php?prefix=");
	  citySuggCore("k2", null, "do.php?prefix=");
	  citySuggCore("zhan", null, "do.php?prefix=");
}
</script>			
<script type="text/javascript" src="js/GcnSuggest.js"> </script>
<script type="text/javascript" src="js/Gcselect.js"> </script>
</head>

<body>
<div id="page" class="w950">
	<div class="wrap">
        <div id="header" class="cl">
            <div id="top" class="box"><a href="http://www.114la.com/">返回114啦网址导航</a> | <a href="http://tool.115.com">查看所有工具</a> | <a href="javascript:void(0)" onclick="addFav();">加入收藏夹</a></div>
            <div id="logo">
                <a href="http://www.114la.com/" title="114啦网址导" class="la">114啦网址导航</a>
                <a href="index.php" title="114啦火车查询专题" class="hc">114啦火车查询专题</a>
            </div>
            <ul id="banner">
                <li><script language="javascript" src="js/aaddtop.js"></script></li>
            </ul>
        </div>
