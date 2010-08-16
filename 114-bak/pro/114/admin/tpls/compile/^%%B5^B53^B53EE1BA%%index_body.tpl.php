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
                    <li><a rel="s115">115聚搜<?php echo $this->_tpl_vars['URL']; ?>
</a></li>
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
        <div id="keywords"><?php $_from = $this->_tpl_vars['advert_search_footer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?><?php echo $this->_tpl_vars['i']['code']; ?>
<?php endforeach; endif; unset($_from); ?></div>
        <div id="content" class="clearfix">
            <div id="main">
                <div class="r1 clearfix">
                    <div id="board">
                        <ul  id="board-menu" class="clearfix">
                            <li id="bored-menu-def" class="current"><a rel="fmsite">名站导航</a></li>
                            <?php $_from = $this->_tpl_vars['famous_tab']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['tab']):
?>
                            <li><a rel="board-box<?php echo $this->_tpl_vars['i']; ?>
" url="<?php echo $this->_tpl_vars['tab']['url']; ?>
" nocache=<?php echo $this->_tpl_vars['tab']['nocache']; ?>
><?php echo $this->_tpl_vars['tab']['name']; ?>
</a></li>
                            <?php endforeach; endif; unset($_from); ?>
                            <li><a rel="favBox">我的收藏</a></li>
                            <li><a rel="history">浏览记录</a></li>
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
                        <h2><span>实用工具</span><a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/catalog/tool.htm">更多...</a></h2>
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
            <h2><a id="clalign" href="javascript:void(0)" target="_self" title="左对齐/居中">左对齐/居中</a>酷站导航 </h2>
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
.htm">更多...</a></span>
        </li>
        <?php endforeach; endif; unset($_from); ?>
        <li class="bd">
<strong>地方服务</strong> 
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/beijing.htm" title="北京">北京</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/tianjin.htm" title="天津">天津</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/hebei.htm" title="河北">河北</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/shanxi.htm" title="山西">山西</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/neimenggu.htm" title="内蒙古">内蒙古</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/liaoning.htm" title="辽宁">辽宁</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/jilin.htm" title="吉林">吉林</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/heilongjiang.htm" title="黑龙江">黑龙江</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/shanghai.htm" title="上海">上海</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/jiangsu.htm" title="江苏">江苏</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/zhejiang.htm" title="浙江">浙江</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/anhui.htm" title="安徽">安徽</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/fujian.htm" title="福建">福建</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/jiangxi.htm" title="江西">江西</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/shandong.htm" title="山东">山东</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/henan.htm" title="河南">河南</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/hubei.htm" title="湖北">湖北</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/hunan.htm" title="湖南">湖南</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/guangdong.htm" title="广东">广东</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/guangxi.htm" title="广西">广西</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/hainan.htm" title="海南">海南</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/chongqing.htm" title="重庆">重庆</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/sichuan.htm" title="四川">四川</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/guizhou/.htm" title="贵州">贵州</a>
<a  href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/yunnan.htm" title="云南">云南</a>
<span class="more"><a href="<?php echo $this->_tpl_vars['URL_HTML']; ?>
/local/">更多...</a></span>
        </li>
        
    </ul>
</div><!--/ location-->