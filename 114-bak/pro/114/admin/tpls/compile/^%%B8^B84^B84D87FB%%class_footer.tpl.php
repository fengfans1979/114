<?php /* Smarty version 2.6.25, created on 2010-08-01 16:52:31
         compiled from class_footer.tpl */ ?>
    <div id="meta" class="clearfix bd">
        <p>
        <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="back" target="_parent"><span>返回</span><em class="fl">返回</em></a>
        <a class="close" href="javascript:closeWin()" target="_self"><span>关闭</span><em class="fl">关闭</em></a>
        </p>
    </div>
    <div id="gotop" class="clearfix">
    	<a href="#page" target="_parent">返回顶部</a><br /><br />
    </div>
    
    <a href="javascript:void(0)" target="_self" id="addmyfav" style="display:none;" title="添加到自定义收藏夹">加入首页自定义收藏</a>
    
    </div><!--/ wrap-->
</div><!--/ page-->
<script type="text/javascript">
	function closeWin(){
	   window.open("","_self");
	   window.top.opener=null;
	   window.top.close();
	 }
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/themes/default/js/page.js"></script>
<div style="display:none"><?php echo $this->_tpl_vars['tongji']; ?>
</div>
</body>
</html>