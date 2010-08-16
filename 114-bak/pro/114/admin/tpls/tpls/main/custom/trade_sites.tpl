<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<{$class_meta_keyword}>" />
<meta name="description" content="<{$class_meta_description}>" />
<title><{$title}></title>
<link href="<{$URL}>/themes/custom/page.css" rel="stylesheet" type="text/css" />
<link id="skin" href="/themes/custom/skins/blue/page.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<{$URL}>/themes/custom/js/ylmf.cai.js"></script>
<script type="text/javascript" src="<{$URL}>/themes/custom/js/config.js"></script>
<script type="text/javascript" src="<{$URL}>/themes/custom/js/base.js"></script>

<style type="text/css">
			#hangye { width:940px; margin:10px auto;}
			#hangye th { width:120px; text-align:center;border-left:1px solid #fff;border-right:1px solid #fff;}
			#hangye th.more2 { width:80px; font-weight:normal;  }
            #hangye th a{color:#07519A }
			#hangye td { text-align:center}
			#hangye td a { margin: 0 15px;}
			#hangye .bk { background-color:#EAF5FF;}
			#hangye tr { height:30px; line-height:30px;}
		</style>
<base target="_blank" />
</head>
<body>
<div id="page">
    <div class="wrap">
        <div id="header" class="clearfix">
                <div id="search" class="clearfix">
        	<div id="notice"></div>
            <div id="search-menu" class="clearfix">
                <ul class="clearfix">
                    <li><a rel="s115">115聚搜</a></li>
                    <li class="current"><a rel="baidu">百 度</a></li>
                    <li><a rel="google">谷 歌</a></li>
                </ul>
                <ul  class="clearfix" style="margin:0">
                    <li id="search-menu-more"><span><a class="more" id="smore">更 多</a></span>
                        <div id="smp"> <a href="http://115.com">115.com</a> <a href="http://115.com">115.com</a> <a href="http://115.com">115.com</a></div>
                    </li>
                </ul>
            </div>
            <div id="search-form" class="bd">
                <div class="search-bg">
                    <div class="con">
                        <div id="sengine">
                        
                        
                            <div id="sf_s115" class="search_box clearfix" style="display:none">
                                <form id="searchForm" action="http://115.com/s" method="get" target="_blank">
                                    <label for="baidu"><a href="#"><img src="static/images/sl/115.gif" width="79" height="27" /></a></label>
                                    <div class="input">
                                        <input type="text" id="searchInput" name="q" autocomplete="off" />
                                    </div>
                                    <input type="submit" id="searchBtn" class="btn" value="聚 搜" />
                                    <input type="hidden" name="tn" value="utf-8" />
                                </form>
                            </div>
                            
                            
                            <div id="sf_baidu" class="search_box">
                            	<div style=" margin-left:10px;">
                                    <iframe id="baiduframe" marginwidth="0" marginheight="0" scrolling="no"
                        framespacing="0" vspace="0" hspace="0" frameborder="0" width="640" height="40" 
                        src="http://unstat.baidu.com/bdun.bsc?tn=9bin&cv=0&cid=192116&csid=103&bgcr=EAF4FF&urlcr=0000ff&tbsz=230&sropls=1,2,3,4,5,6,7,9,10&defid=2"></iframe>
                    			</div>
                   
                            </div>
                         
                            <div id="sf_google" class="search_box" style="display:none">
                            	<div style="margin-top:2px; margin-left:10px;">
									<script type="text/javascript"><!--
                                    google_ad_client = "pub-1126544791540222";
                                    google_ad_format = "js_sdo";
									google_color_bg = "EAF4FF";
                                    google_cts_mode ="hq";
                                    google_num_cts = "2";
                                    google_searchbox_width = 215;
                                    google_searchbox_height = 26;
                                    google_link_target = 2;
                                    google_logo_pos = "left";
                                    google_rs_pos = "right";
                                    google_ad_height = 35;
                                    google_ad_width = 640;
                                    //-->
                                    </script>
                                    <script type="text/javascript"
                                    src="http://pagead2.googlesyndication.com/pagead/show_sdo.js">
                                    </script>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        <!--/ se-->
                       
                    </div>
                </div>
            </div>
            <!--/ searchform-->
        </div>
            <h1 id="logo"><a href="#"><img src="/static/images/logo.gif" height="69" width="117" /></a></h1>
            <div id="city" style="display:none">
               
            </div><!--/ city-->
            
            
        </div><!--/ header-->
        
        <div id="guide" class="bd">
    <dl>
    <dt>您当前的位置：</dt>
    <dd><a href="<{$URL}>" target="_parent">首页</a><em>&gt;</em></dd>
    <dd>行业网站</dd>

    </dl>
    <ul>
    <li class="sethome"><a href="javascript:void(0)"  onclick="Yl.setHome(this,'<{$URL}>')" target="_parent" class="gray6">设本站为主页</a></li>
    <li class="feedback"><a href="<{$URL}>/feedback/" class="gray6">网友留言</a></li>
    </ul>
    </div><!--/ guide-->
        
    <div class="bd" id="cate">
    <h3>行业网站</h2>
    <table border="0" id="hangye" cellspacing="0" cellpadding="0">

<tbody>
<{foreach from = $trade_class_list key = k item = parent name = n}>
  <tr <{if $smarty.foreach.n.iteration % 2 eq 0}> class="bk"<{/if}>>
    <th><a><{$parent.classname}></a></th>
    <td>
    <{foreach from = $parent.sites.data item = v}>
        <a href="<{$v.url}>" target="_blank" <{if $v.namecolor}> style="color:<{$v.namecolor}>"<{/if}>><{$v.name}></a>
    <{/foreach}>
    </td>
  </tr>
<{/foreach}>
</tbody>
</table>

    	
    
    
	</div>

        
        <div id="meta" class="clearfix bd">
        	<p>
            <a href="<{$URL}>" class="back"><span>返回</span><em class="fl">返回</em></a>
        	<a class="close" href="javascript:closeWin()" target="_self"><span>关闭</span><em class="fl">关闭</em></a>
            </p>

        </div>
        <div id="gotop" class="clearfix"><a href="#page" target="_parent">返回顶部</a><br />
<br />
</div>
     
      
        
        <a href="javascript:void(0)" target="_self" id="addmyfav" style="display:none;" title="添加到自定义收藏夹">加入首页自定义收藏</a>
        
        
    </div><!--/ wrap-->
</div>
<!--/ page-->
<script type="text/javascript">
	function closeWin(){
	   window.open("","_self");
	   window.top.opener=null;
	   window.top.close();
	 }
</script>
<script type="text/javascript" src="/themes/custom/js/page.js"></script>
<div style="display:none"><{$tongji}></div>
</body>
</html>
