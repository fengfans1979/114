		<div id="search" class="clearfix">
            <div id="search-menu" class="clearfix">
            	<div id="notice">
                    <{foreach from = $notice_list item = i}>
                        <p><a href="<{$i.url}>"<{if $i.color}> style="color:<{$i.color}>"<{/if}>><{$i.name}></a></p>
                    <{/foreach}>
                </div>
                <ul class="clearfix">
                    <li><a rel="s115">115聚搜<{$URL}></a></li>
                    <li class="current"><a rel="web">网 页</a></li>
                    <li><a rel="mp3">MP3</a></li>
                    <li><a rel="v115">影 视</a></li>
                    <li><a rel="image">图 片</a></li>
                    <li><a rel="zhidao">知 道</a></li>
                </ul>
                <ul  class="clearfix" style="margin:0">
                    <li><a id="localsearch">站内搜</a></li>
                    <li id="search-menu-more"><span><a class="more" id="smore">更 多</a></span>
                        <div id="smp"> <a href=" http://video.baidu.com/?tn=hkxs_pg&ch=500">视 频</a> <a href=" http://tieba.baidu.com/?source=114la.com">贴 吧</a> <a href=" http://baike.baidu.com/?source=114la.com">百 科</a> <a href=" http://stock.baidu.com/?source=114la.com">股 票</a> <a href=" http://u.115.com/?11413">网 盘</a>  <a href=" http://fav.115.com/?source=114la.com">收藏夹</a>  <a href=" http://tool.115.com/?11413">工具箱</a></div>
                    </li>
                </ul>
            </div>
            <div id="search-form" class="bd">
                <div class="search-bg">
                    <div class="con">
                        <div id="sengine" class="clearfix">
                            <form id="searchForm" action="http://www.baidu.com/baidu" method="get" target="_blank">
                                <label for="baidu"><a href="http://www.baidu.com/index.php?tn=hkxs_pg&ch=500"><img src="static/images/sl/logox3.gif" width="79" height="27" /></a></label>
                                <div class="input">
                                    <input type="text" id="searchInput" name="wd" onmousemove="this.focus()" autocomplete="off" />
                                </div>
                                <input type="submit" id="searchBtn" class="btn" value="百度一下" />
                                <input type="hidden" name="tn" value="hkxs_pg" />
		
                                <div id="search-word" class="search-word">
                                    <p id="sw_s115" style="display:none;">
                                    <{*115 聚搜关键字*}>                        
                                    <{$search_keyword.10}>
                                    </p><!--/ keywords-->
                                    <p id="sw_web">
                                    <{*百度搜索关键字*}>
                                    <{$search_keyword.9}>
                                    </p><!--/ keywords-->
                                    <p id="sw_mp3" style="display:none;">
                                    <{*百度MP3关键字*}>
                                    <{$search_keyword.28}>
                                    </p><!--/ keywords-->
                                    <p id="sw_v115" style="display:none;">
                                    <{*115视频关键字*}>
                                    <{$search_keyword.33}>
                                    </p><!--/ keywords-->
                                    <p id="sw_image" style="display:none;">
                                    <{*百度图片关键字*}>
                                    <{$search_keyword.29}>
                                    </p><!--/ keywords-->
                                    <p id="sw_zhidao" style="display:none;">
                                    <{*百度知道关键字*}>
                                    <{$search_keyword.31}>
                                    </p><!--/ keywords-->
                            	</div>
                            </form>
                        </div>
                        <!--/ sengine-->
                        <div id="lsBox" class="clearfix" style="display:none">
                            <div class="input">
                                <input type="text" onblur="this.value==''?this.value='输入关键字搜索':''" onclick="this.select();" onfocus="this.value=='输入关键字搜索'?this.value='':''; " onmouseover="this.focus();" value="输入关键字搜索" id="localInput" autocomplete="off" />
                            </div>
                            <div style="clear:both; overflow:hidden; height:0;"></div>
                            <ul class="clearfix" style="display:none;">
                            </ul>
                        </div>
                    </div>
                    <!--/ con-->
                </div>
                <!--/ search-bg-->
            </div>
            <div id="suggest" style="display:none;"></div>
        </div>
        <div id="keywords"><{*名站上方广告*}><{foreach from = $advert_search_footer item = i}><{$i.code}><{/foreach}></div>
        <div id="content" class="clearfix">
            <div id="main">
                <div class="r1 clearfix">
                    <div id="board">
                        <ul  id="board-menu" class="clearfix">
                            <li id="bored-menu-def" class="current"><a rel="fmsite">名站导航</a></li>
                            <{foreach from = $famous_tab item = tab key = i}>
                            <li><a rel="board-box<{$i}>" url="<{$tab.url}>" nocache=<{$tab.nocache}>><{$tab.name}></a></li>
                            <{/foreach}>
                            <li><a rel="favBox">我的收藏</a></li>
                            <li><a rel="history">浏览记录</a></li>
                        </ul>
                        <div id="board-box" class="bd">
                            <div id="fmsite">
                            	<div style="line-height:30px;">
                                <ul class="top clearfix">
                                    <{*TOP 名站*}>
                                    <{foreach from = $mz_top item = i}>
                                    <{$i.html}>
                                    <{/foreach}>
                                </ul>
                                </div>
                                <ul class="list clearfix">
                                    <{*名站*}>
                                    <{foreach from = $mz_list item = i}>
                                        <li><a href="<{$i.url}>"<{if $i.namecolor}> style="color:<{$i.namecolor}>"<{/if}>><{$i.name}></a></li>
                                    <{/foreach}>
								</ul>
                                <div style="height:30px;">
                                <ul id="RandomPlay" class="list clearfix">
                                   	<{*名站轮播*}>
                                    
                                </ul>
                                </div>
                                 
                                    
                                <ul class="list clearfix">    	
                                    <{*名站*}>
                                    <{foreach from = $mz_list2 item = i}>
                                        <li><a href="<{$i.url}>"<{if $i.namecolor}> style="color:<{$i.namecolor}>"<{/if}>><{$i.name}></a></li>
                                    <{/foreach}>
                                </ul>
                                
                                <ul id="RandomPlayItems" style="display:none">
                                 	<{$famous_loop}>
                                </ul>
                            </div>
                            <!--/ fmsite-->
                            <div id="favBox" style="display:none;" >
                                <ul id="Collbox" class="line_30"></ul>
                                <div id="addColl">
                                    <form onsubmit="return MyFav.add(this);">
                                        <label for="urlName">添加自定义收藏</label>
                                        <input type="text" value="站名" id="urlName" class="int" onblur="favoFuninput(this,0)" onfocus="favoFuninput(this,1)" name="urlName"/>
                                        <input type="text" value="网址" class="int" onblur="favoFuninput(this,0)" onfocus="favoFuninput(this,1)" id="Url" name="Url"/>
                                        <input type="submit" class="btn button" value="添 加" />
                                        <input type="button" class="btn button" onclick="MyFav.show()" value="刷 新" />
                                    </form>
                                </div>
                                <div id="addCollmsg" style="display:none"></div>
                            </div>
                            <div id="history" class="line_30" style="display:none">
                                <ul id="historyBox" class="clearfix">
                                    <li class="none">对不起，您没有任何浏览记录</li>
                                </ul>
                                <ul class="clearfix">
                                    <li class="del"><a id="delHistory">删除记录</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ board-box-->
                    </div>
                    <!--/ board-->
                    <div id="tool" class="bd">
                        <h2><span>实用工具</span><a href="<{$URL_HTML}>/catalog/tool.htm">更多...</a></h2>
                        <ul class="clearfix">
                        <{*实用工具*}>
                        <{foreach from = $tools item = i}>
                            <li><a href="<{$i.url}>"<{if $i.color}> style="color:<{$i.color}>"<{/if}>><{$i.name}></a></li>
                        <{/foreach}>
                        </ul>
                    </div><!--/ tool-->
                </div><!--/ r1-->
        <div id="key2">
            <{*名站下方广告*}>
            <{$advert_notice}>
        </div>
        <div id="coolsite" class="bd">
            <h2><a id="clalign" href="javascript:void(0)" target="_self" title="左对齐/居中">左对齐/居中</a>酷站导航 </h2>
            <div id="list">
            <{*酷站导航*}>
            <{foreach from = $kz_list key = k item = parent name = n}>
                <dl<{if $smarty.foreach.n.iteration % 2 eq 0}> class="alt"<{/if}>><dt><a href="<{$parent.url}>" >[<{$k}>]</a></dt>
                    <{foreach from = $parent.son item = v}>
                    <dd><a href="<{$v.url}>"<{if $v.namecolor}> style="color:<{$v.namecolor}>"<{/if}>><{$v.name}></a></dd>
                    <{/foreach}>
                </dl>
            <{/foreach}>
            </div>
            <!--/ list-->
        </div><!--/ coolsite-->
    </div><!--/ main-->
    <div id="cate" class="bd">
        <{*网站分类*}>
        <{foreach from = $site_class key = k item = parent}>
        <h2><{$k}></h2>
        <ul<{if $parent.0.classname_len > 4}> class="c2"<{/if}>>
            <{foreach from = $parent item = i}>
            <li ><a href="<{$i.urlpath}>"><{$i.classname}></a></li>
            <{/foreach}>
        </ul>
        <{/foreach}>
            
    </div><!--/ cate-->
</div><!--/ content-->
<div id="location">
    <ul>
        <{*专题*}>
        <{foreach from = $zhuanti key = k item = parent}>
        <li class="bd">
            <strong><{$parent.name}></strong>
            <{foreach from = $parent.son item = v}>
            <a href="<{$URL_HTML}>/catalog/<{$k}>.htm#<{$v.id}>"><{$v.name}></a>
            <{/foreach}>
            <span class="more"><a href="<{$URL_HTML}>/catalog/<{$k}>.htm">更多...</a></span>
        </li>
        <{/foreach}>
        <li class="bd">
<strong>地方服务</strong> 
<a  href="<{$URL_HTML}>/local/beijing.htm" title="北京">北京</a>
<a  href="<{$URL_HTML}>/local/tianjin.htm" title="天津">天津</a>
<a  href="<{$URL_HTML}>/local/hebei.htm" title="河北">河北</a>
<a  href="<{$URL_HTML}>/local/shanxi.htm" title="山西">山西</a>
<a  href="<{$URL_HTML}>/local/neimenggu.htm" title="内蒙古">内蒙古</a>
<a  href="<{$URL_HTML}>/local/liaoning.htm" title="辽宁">辽宁</a>
<a  href="<{$URL_HTML}>/local/jilin.htm" title="吉林">吉林</a>
<a  href="<{$URL_HTML}>/local/heilongjiang.htm" title="黑龙江">黑龙江</a>
<a  href="<{$URL_HTML}>/local/shanghai.htm" title="上海">上海</a>
<a  href="<{$URL_HTML}>/local/jiangsu.htm" title="江苏">江苏</a>
<a  href="<{$URL_HTML}>/local/zhejiang.htm" title="浙江">浙江</a>
<a  href="<{$URL_HTML}>/local/anhui.htm" title="安徽">安徽</a>
<a  href="<{$URL_HTML}>/local/fujian.htm" title="福建">福建</a>
<a  href="<{$URL_HTML}>/local/jiangxi.htm" title="江西">江西</a>
<a  href="<{$URL_HTML}>/local/shandong.htm" title="山东">山东</a>
<a  href="<{$URL_HTML}>/local/henan.htm" title="河南">河南</a>
<a  href="<{$URL_HTML}>/local/hubei.htm" title="湖北">湖北</a>
<a  href="<{$URL_HTML}>/local/hunan.htm" title="湖南">湖南</a>
<a  href="<{$URL_HTML}>/local/guangdong.htm" title="广东">广东</a>
<a  href="<{$URL_HTML}>/local/guangxi.htm" title="广西">广西</a>
<a  href="<{$URL_HTML}>/local/hainan.htm" title="海南">海南</a>
<a  href="<{$URL_HTML}>/local/chongqing.htm" title="重庆">重庆</a>
<a  href="<{$URL_HTML}>/local/sichuan.htm" title="四川">四川</a>
<a  href="<{$URL_HTML}>/local/guizhou/.htm" title="贵州">贵州</a>
<a  href="<{$URL_HTML}>/local/yunnan.htm" title="云南">云南</a>
<span class="more"><a href="<{$URL_HTML}>/local/">更多...</a></span>
        </li>
        
    </ul>
</div><!--/ location-->
