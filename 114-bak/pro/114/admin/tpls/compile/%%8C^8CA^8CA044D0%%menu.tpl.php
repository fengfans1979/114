<?php /* Smarty version 2.6.25, created on 2010-08-01 16:52:24
         compiled from menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'menu.tpl', 4, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=@$this->_tpl_vars['charset'])) ? $this->_run_mod_handler('default', true, $_tmp, 'GBK') : smarty_modifier_default($_tmp, 'GBK')); ?>
" />
<title></title>
<link href="static/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="static/js/sidebar.js"></script>
</head>
<body id="sidebar_page">
<div class="wrap">
    <div class="cotainer">
        <div id="sidebar">
        <div class="home">
            <a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_blank">��վ��ҳ</a> - <a href="http://www.ylmf.net/thread.php?fid=346" target="_blank">��̳ר��</a>
        </div>
        <div class="con">
        <!--����-->
        <h2>������ҳ</h2>
        <p class="userpanel">       
        �û�����<?php echo @USERNAME; ?>
<br />
        ������<?php if (1 == @If_manager): ?>��������Ա<?php else: ?>����Ա<?php endif; ?><br />
        <a href="?c=member&a=member_password&name=<?php echo @USERNAME; ?>
" target='main'>�� ��</a> |
        <a href="?c=login&a=welcome" target='main'>�� ҳ</a>|
        <a href="?c=login&a=logout" target="_parent">�� ��</a>
        </p>
        <?php echo $this->_tpl_vars['data']; ?>

        </div><!--/ .con-->
        </div><!--/ sidebar-->
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    var aArr = $(".con").find("li:first a");
    if (aArr && aArr.html() == "һ������ѡ��")
	//if (aArr)
    {
		//alert(aArr.html())
        aArr.addClass("active");
        $('#main', window.parent.document).attr('src', aArr.attr('href'));
    }
})
</script>
</body>
</html>