<?php /* Smarty version 2.6.25, created on 2010-08-01 18:49:21
         compiled from template_manage.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=template_manage&action=save" method="post">
                <input type="hidden" name="filename" value="<?php echo $this->_tpl_vars['filename']; ?>
"/>
                <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['back']; ?>
"/>
                
                <div class="box-content">
                    <div class="pb5">
                        <input type="button" value="�ָ���Ĭ��ģ��" onclick="self.location = '?c=template_manage&action=restore&filename=<?php echo $this->_tpl_vars['filename']; ?>
'" />
                    </div>
                    <div>
                        <textarea name="content" style="width:98%; height:420px; border:1px solid #ccc; overflow:hidden; overflow-y:scroll;"><?php echo $this->_tpl_vars['content']; ?>
</textarea>
                    </div>
                    <?php if ($this->_tpl_vars['show_msg']): ?><p>��ʾ���޸�ģ������ֶ����¾�̬ҳ��</p><?php endif; ?>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="�������" /> �� <a href="<?php echo $this->_tpl_vars['back']; ?>
">ȡ��</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
</div><!--/ wrap-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>