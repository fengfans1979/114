
<div id="search" class="clearfix">
    <div id="notice">
        <{foreach from = $notice_list item = i}>
            <p><a href="<{$i.url}>"<{if $i.color}> style="color:<{$i.color}>"<{/if}>><{$i.name}></a></p>
        <{/foreach}>
    </div>
    <div id="search-menu" class="clearfix">
        <ul class="clearfix">
            <li><a rel="s115">115����</a></li>
            <li class="current"><a rel="baidu">�� ��</a></li>
            <li><a rel="google">�� ��</a></li>
        </ul>
        <ul  class="clearfix" style="margin:0">
            <li><a id="localsearch">վ����</a></li>
            <li id="search-menu-more"><span><a class="more" id="smore">�� ��</a></span>
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
                            <input type="submit" id="searchBtn" class="btn" value="�� ��" />
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
        
        
        
        <div id="keywords"><{*��վ�Ϸ����*}><{foreach from = $advert_search_footer item = i}><{$i.code}><{/foreach}></div>
        <div id="content" class="clearfix">
            <div id="main">
                <div class="r1 clearfix">
                    <div id="board">
                        <ul  id="board-menu" class="clearfix">
                            <li id="bored-menu-def" class="current"><a rel="fmsite">��վ����</a></li>
                            <{foreach from = $famous_tab item = tab key = i}>
                            <li><a rel="board-box<{$i}>" url="<{$tab.url}>" nocache=<{$tab.nocache}>><{$tab.name}></a></li>
                            <{/foreach}>
                            <li><a rel="favBox">�ҵ��ղ�</a></li>
                            <li><a rel="history">�����¼</a></li>
                        </ul>
                        <div id="board-box" class="bd">
                            <div id="fmsite">
                            	<div style="line-height:30px;">
                                <ul class="top clearfix">
                                    <{*TOP ��վ*}>
                                    <{foreach from = $mz_top item = i}>
                                    <{$i.html}>
                                    <{/foreach}>
                                </ul>
                                </div>
                                <ul class="list clearfix">
                                    <{*��վ*}>
                                    <{foreach from = $mz_list item = i}>
                                        <li><a href="<{$i.url}>"<{if $i.namecolor}> style="color:<{$i.namecolor}>"<{/if}>><{$i.name}></a></li>
                                    <{/foreach}>
								</ul>
                                <div style="height:30px;">
                                <ul id="RandomPlay" class="list clearfix">
                                   	<{*��վ�ֲ�*}>
                                    
                                </ul>
                                </div>
                                 
                                    
                                <ul class="list clearfix">    	
                                    <{*��վ*}>
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
                                        <label for="urlName">����Զ����ղ�</label>
                                        <input type="text" value="վ��" id="urlName" class="int" onblur="favoFuninput(this,0)" onfocus="favoFuninput(this,1)" name="urlName"/>
                                        <input type="text" value="��ַ" class="int" onblur="favoFuninput(this,0)" onfocus="favoFuninput(this,1)" id="Url" name="Url"/>
                                        <input type="submit" class="btn button" value="�� ��" />
                                        <input type="button" class="btn button" onclick="MyFav.show()" value="ˢ ��" />
                                    </form>
                                </div>
                                <div id="addCollmsg" style="display:none"></div>
                            </div>
                            <div id="history" class="line_30" style="display:none">
                                <ul id="historyBox" class="clearfix">
                                    <li class="none">�Բ�����û���κ������¼</li>
                                </ul>
                                <ul class="clearfix">
                                    <li class="del"><a id="delHistory">ɾ����¼</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ board-box-->
                    </div>
                    <!--/ board-->
                    <div id="tool" class="bd">
                        <h2><span>ʵ�ù���</span><a href="<{$URL_HTML}>/catalog/tool.htm">����...</a></h2>
                        <ul class="clearfix">
                        <{*ʵ�ù���*}>
                        <{foreach from = $tools item = i}>
                            <li><a href="<{$i.url}>"<{if $i.color}> style="color:<{$i.color}>"<{/if}>><{$i.name}></a></li>
                        <{/foreach}>
                        </ul>
                    </div><!--/ tool-->
                </div><!--/ r1-->
        <div id="key2">
            <{*��վ�·����*}>
            <{$advert_notice}>
        </div>
        <div id="coolsite" class="bd">
            <h2><a id="clalign" href="javascript:void(0)" target="_self" title="�����/����">�����/����</a>��վ���� </h2>
            <div id="list">
            <{*��վ����*}>
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
        <{*��վ����*}>
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
        <{*ר��*}>
        <{foreach from = $zhuanti key = k item = parent}>
        <li class="bd">
            <strong><{$parent.name}></strong>
            <{foreach from = $parent.son item = v}>
            <a href="<{$URL_HTML}>/catalog/<{$k}>.htm#<{$v.id}>"><{$v.name}></a>
            <{/foreach}>
            <span class="more"><a href="<{$URL_HTML}>/catalog/<{$k}>.htm">����...</a></span>
        </li>
        <{/foreach}>
        <li class="bd">
<strong>�ط�����</strong> 
<a  href="<{$URL_HTML}>/local/beijing.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/tianjin.htm" title="���">���</a>
<a  href="<{$URL_HTML}>/local/hebei.htm" title="�ӱ�">�ӱ�</a>
<a  href="<{$URL_HTML}>/local/shanxi.htm" title="ɽ��">ɽ��</a>
<a  href="<{$URL_HTML}>/local/neimenggu.htm" title="���ɹ�">���ɹ�</a>
<a  href="<{$URL_HTML}>/local/liaoning.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/jilin.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/heilongjiang.htm" title="������">������</a>
<a  href="<{$URL_HTML}>/local/shanghai.htm" title="�Ϻ�">�Ϻ�</a>
<a  href="<{$URL_HTML}>/local/jiangsu.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/zhejiang.htm" title="�㽭">�㽭</a>
<a  href="<{$URL_HTML}>/local/anhui.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/fujian.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/jiangxi.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/shandong.htm" title="ɽ��">ɽ��</a>
<a  href="<{$URL_HTML}>/local/henan.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/hubei.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/hunan.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/guangdong.htm" title="�㶫">�㶫</a>
<a  href="<{$URL_HTML}>/local/guangxi.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/hainan.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/chongqing.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/sichuan.htm" title="�Ĵ�">�Ĵ�</a>
<a  href="<{$URL_HTML}>/local/guizhou/.htm" title="����">����</a>
<a  href="<{$URL_HTML}>/local/yunnan.htm" title="����">����</a>
<span class="more"><a href="<{$URL_HTML}>/local/">����...</a></span>
        </li>
        
    </ul>
</div><!--/ location-->
