<?php /* Smarty version 2.6.25, created on 2010-08-01 16:52:31
         compiled from index_body.tpl */ ?>
		<div id="search" class="clearfix">
            <div id="search-menu" class="clearfix">
            	<div id="notice">
                    <?php $_from = $this->_tpl_vars['notice_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                        <p><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
"<?php if ($this->_tpl_vars['i']['color']): ?> style="color:<?php echo $this->_tpl_vars['i']['color']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a></p>
                    <?php endforeach; endif; unset($_from); ?>
                </div>
                <ul class="clearfix">
                    <li><a rel="s115">115����<?php echo $this->_tpl_vars['URL']; ?>
</a></li>
                    <li class="current"><a rel="web">�� ҳ</a></li>
                    <li><a rel="mp3">MP3</a></li>
                    <li><a rel="v115">Ӱ ��</a></li>
                    <li><a rel="image">ͼ Ƭ</a></li>
                    <li><a rel="zhidao">֪ ��</a></li>
                </ul>
                <ul  class="clearfix" style="margin:0">
                    <li><a id="localsearch">վ����</a></li>
                    <li id="search-menu-more"><span><a class="more" id="smore">�� ��</a></span>
                        <div id="smp"> <a href=" http://video.baidu.com/?tn=hkxs_pg&ch=500">�� Ƶ</a> <a href=" http://tieba.baidu.com/?source=114la.com">�� ��</a> <a href=" http://baike.baidu.com/?source=114la.com">�� ��</a> <a href=" http://stock.baidu.com/?source=114la.com">�� Ʊ</a> <a href=" http://u.115.com/?11413">�� ��</a>  <a href=" http://fav.115.com/?source=114la.com">�ղؼ�</a>  <a href=" http://tool.115.com/?11413">������</a></div>
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
                                <input type="submit" id="searchBtn" class="btn" value="�ٶ�һ��" />
                                <input type="hidden" name="tn" value="hkxs_pg" />
		
                                <div id="search-word" class="search-word">
                                    <p id="sw_s115" style="display:none;">
                                                            
                                    <?php echo $this->_tpl_vars['search_keyword']['10']; ?>

                                    </p><!--/ keywords-->
                                    <p id="sw_web">
                                                                        <?php echo $this->_tpl_vars['search_keyword']['9']; ?>

                                    </p><!--/ keywords-->
                                    <p id="sw_mp3" style="display:none;">
                                                                        <?php echo $this->_tpl_vars['search_keyword']['28']; ?>

                                    </p><!--/ keywords-->
                                    <p id="sw_v115" style="display:none;">
                                                                        <?php echo $this->_tpl_vars['search_keyword']['33']; ?>

                                    </p><!--/ keywords-->
                                    <p id="sw_image" style="display:none;">
                                                                        <?php echo $this->_tpl_vars['search_keyword']['29']; ?>

                                    </p><!--/ keywords-->
                                    <p id="sw_zhidao" style="display:none;">
                                                                        <?php echo $this->_tpl_vars['search_keyword']['31']; ?>

                                    </p><!--/ keywords-->
                            	</div>
                            </form>
                        </div>
                        <!--/ sengine-->
                        <div id="lsBox" class="clearfix" style="display:none">
                            <div class="input">
                                <input type="text" onblur="this.value==''?this.value='����ؼ�������':''" onclick="this.select();" onfocus="this.value=='����ؼ�������'?this.value='':''; " onmouseover="this.focus();" value="����ؼ�������" id="localInput" autocomplete="off" />
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
        <div id="keywords"><?php $_from = $this->_tpl_vars['advert_search_footer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?><?php echo $this->_tpl_vars['i']['code']; ?>
<?php endforeach; endif; unset($_from); ?></div>
        <div id="content" class="clearfix">
            <div id="main">
                <div class="r1 clearfix">
                    <div id="board">
                        <ul  id="board-menu" class="clearfix">
                            <li id="bored-menu-def" class="current"><a rel="fmsite">��վ����</a></li>
                            <?php $_from = $this->_tpl_vars['famous_tab']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['tab']):
?>
                            <li><a rel="board-box<?php echo $this->_tpl_vars['i']; ?>
" url="<?php echo $this->_tpl_vars['tab']['url']; ?>
" nocache=<?php echo $this->_tpl_vars['tab']['nocache']; ?>
><?php echo $this->_tpl_vars['tab']['name']; ?>
</a></li>
                            <?php endforeach; endif; unset($_from); ?>
                            <li><a rel="favBox">�ҵ��ղ�</a></li>
                            <li><a rel="history">�����¼</a></li>
                        </ul>
                        <div id="board-box" class="bd">
                            <div id="fmsite">
                            	<div style="line-height:30px;">
                                <ul class="top clearfix">
                                                                        <?php $_from = $this->_tpl_vars['mz_top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                                    <?php echo $this->_tpl_vars['i']['html']; ?>

                                    <?php endforeach; endif; unset($_from); ?>
                                </ul>
                                </div>
                                <ul class="list clearfix">
                                                                        <?php $_from = $this->_tpl_vars['mz_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                                        <li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
"<?php if ($this->_tpl_vars['i']['namecolor']): ?> style="color:<?php echo $this->_tpl_vars['i']['namecolor']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a></li>
                                    <?php endforeach; endif; unset($_from); ?>
								</ul>
                                <div style="height:30px;">
                                <ul id="RandomPlay" class="list clearfix">
                                   	                                    
                                </ul>
                                </div>
                                 
                                    
                                <ul class="list clearfix">    	
                                                                        <?php $_from = $this->_tpl_vars['mz_list2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                                        <li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
"<?php if ($this->_tpl_vars['i']['namecolor']): ?> style="color:<?php echo $this->_tpl_vars['i']['namecolor']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a></li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </ul>
                                
                                <ul id="RandomPlayItems" style="display:none">
                                 	<?php echo $this->_tpl_vars['famous_loop']; ?>

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
                        <h2><span>ʵ�ù���</span><a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/catalog/tool.htm">����...</a></h2>
                        <ul class="clearfix">
                                                <?php $_from = $this->_tpl_vars['tools']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                            <li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
"<?php if ($this->_tpl_vars['i']['color']): ?> style="color:<?php echo $this->_tpl_vars['i']['color']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a></li>
                        <?php endforeach; endif; unset($_from); ?>
                        </ul>
                    </div><!--/ tool-->
                </div><!--/ r1-->
        <div id="key2">
                        <?php echo $this->_tpl_vars['advert_notice']; ?>

        </div>
        <div id="coolsite" class="bd">
            <h2><a id="clalign" href="javascript:void(0)" target="_self" title="�����/����">�����/����</a>��վ���� </h2>
            <div id="list">
                        <?php $_from = $this->_tpl_vars['kz_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['n'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['n']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
        $this->_foreach['n']['iteration']++;
?>
                <dl<?php if ($this->_foreach['n']['iteration'] % 2 == 0): ?> class="alt"<?php endif; ?>><dt><a href="<?php echo $this->_tpl_vars['parent']['url']; ?>
" >[<?php echo $this->_tpl_vars['k']; ?>
]</a></dt>
                    <?php $_from = $this->_tpl_vars['parent']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <dd><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
"<?php if ($this->_tpl_vars['v']['namecolor']): ?> style="color:<?php echo $this->_tpl_vars['v']['namecolor']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['v']['name']; ?>
</a></dd>
                    <?php endforeach; endif; unset($_from); ?>
                </dl>
            <?php endforeach; endif; unset($_from); ?>
            </div>
            <!--/ list-->
        </div><!--/ coolsite-->
    </div><!--/ main-->
    <div id="cate" class="bd">
                <?php $_from = $this->_tpl_vars['site_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
?>
        <h2><?php echo $this->_tpl_vars['k']; ?>
</h2>
        <ul<?php if ($this->_tpl_vars['parent']['0']['classname_len'] > 4): ?> class="c2"<?php endif; ?>>
            <?php $_from = $this->_tpl_vars['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
            <li ><a href="<?php echo $this->_tpl_vars['i']['urlpath']; ?>
"><?php echo $this->_tpl_vars['i']['classname']; ?>
</a></li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
        <?php endforeach; endif; unset($_from); ?>
            
    </div><!--/ cate-->
</div><!--/ content-->
<div id="location">
    <ul>
                <?php $_from = $this->_tpl_vars['zhuanti']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
?>
        <li class="bd">
            <strong><?php echo $this->_tpl_vars['parent']['name']; ?>
</strong>
            <?php $_from = $this->_tpl_vars['parent']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/catalog/<?php echo $this->_tpl_vars['k']; ?>
.htm#<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a>
            <?php endforeach; endif; unset($_from); ?>
            <span class="more"><a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/catalog/<?php echo $this->_tpl_vars['k']; ?>
.htm">����...</a></span>
        </li>
        <?php endforeach; endif; unset($_from); ?>
        <li class="bd">
<strong>�ط�����</strong> 
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/beijing.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/tianjin.htm" title="���">���</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/hebei.htm" title="�ӱ�">�ӱ�</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/shanxi.htm" title="ɽ��">ɽ��</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/neimenggu.htm" title="���ɹ�">���ɹ�</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/liaoning.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/jilin.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/heilongjiang.htm" title="������">������</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/shanghai.htm" title="�Ϻ�">�Ϻ�</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/jiangsu.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/zhejiang.htm" title="�㽭">�㽭</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/anhui.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/fujian.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/jiangxi.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/shandong.htm" title="ɽ��">ɽ��</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/henan.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/hubei.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/hunan.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/guangdong.htm" title="�㶫">�㶫</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/guangxi.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/hainan.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/chongqing.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/sichuan.htm" title="�Ĵ�">�Ĵ�</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/guizhou/.htm" title="����">����</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/yunnan.htm" title="����">����</a>
<span class="more"><a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/">����...</a></span>
        </li>
        
    </ul>
</div><!--/ location-->