
<div id="search" class="clearfix">
    <div id="notice">
        <{foreach from = $notice_list item = i}>
            <p><a href="<{$i.url}>"<{if $i.color}> style="color:<{$i.color}>"<{/if}>><{$i.name}></a></p>
        <{/foreach}>
    </div>
    <div id="search-menu" class="clearfix">
        <ul class="clearfix">
            <li><a rel="s115">115聚搜</a></li>
            <li class="current"><a rel="baidu">百 度</a></li>
            <li><a rel="google">谷 歌</a></li>
        </ul>
        <ul  class="clearfix" style="margin:0">
            <li><a id="localsearch">站内搜</a></li>
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
                        <div style="margin-left:20px;">
                        <iframe id="baiduframe" marginwidth="0" marginheight="0" scrolling="no"
            framespacing="0" vspace="0" hspace="0" frameborder="0" width="920" height="40" 
            src="http://unstat.baidu.com/bdun.bsc?tn=9bin&cv=0&cid=192116&csid=103&bgcr=EAF4FF&urlcr=0000ff&tbsz=230&sropls=1,2,3,4,5,6,7,9,10&defid=2"> </iframe>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div id="sf_google" class="search_box" style="display:none">
                    	<div style="margin-left:20px; margin-top:4px;">
                        <script type="text/javascript"><!--
							google_ad_client = "pub-1126544791540222";
							google_ad_format = "js_sdo";
							google_color_bg = "EAF4FF";
							google_cts_mode ="hq";
							google_num_cts = "2";
							google_searchbox_width = 215;
							google_searchbox_height = 26;
							google_link_target = 5;
							google_logo_pos = "left";
							google_rs_pos = "right";
							google_ad_height = 35;
							google_ad_width = 920;
							//-->
							</script>
							<script type="text/javascript"
							src="http://pagead2.googlesyndication.com/pagead/show_sdo.js">
							</script>
                        </div>
                    </div>
                    
                    
                    
                    
                </div>
                <!--/ se-->
                <div id="lsBox" class="clearfix" style="display:none">
                    <div class="input">
                        <input type="text" id="localInput" autocomplete="off" />
                    </div>
                    <div style="clear:both; overflow:hidden; height:0;"></div>
                    <ul class="clearfix" style="display:none;">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/ searchform-->
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
