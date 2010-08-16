<?php /* Smarty version 2.6.25, created on 2010-08-06 12:37:24
         compiled from member_password.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<div class="wrap">
    <div class="container">
        
        <div id="main"><!--/ con--><!--/ con-->
            
            <div class="con box-green">
                <form action="<?php echo $this->_tpl_vars['sys']['subform']; ?>
" method="post" enctype="multipart/form-data">         
                <div class="box-header">
                    <h4>修改密码</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">

<?php if (@USERNAME == $this->_supers['request']['name']): ?>
<tr>
    <th class="w120">原始密码：</th>
    <td><input name="oldpassword" type="password" class="textinput w270" id="oldpassword" /></td>
</tr>
<?php endif; ?>

                        <tr>
                            <th class="w120">新密码：</th>
                            <td><input name="password" type="password" class="textinput w270" id="password" /></td>
                        </tr>
                        <tr>
                            <th>确定新密码：</th>
                            <td><input name="repassword" type="password" class="textinput w270" id="repassword" /></td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                  <div class="box-footer-inner">
                   	  <input type="submit" value="保存更改" /> 或 <a href="<?php echo $this->_tpl_vars['sys']['goback']; ?>
">取消</a>
                      <input name="step" type="hidden" id="step" value="2">
                    <input name="name" type="hidden" id="name" value="<?php echo $this->_supers['request']['name']; ?>
">
                    </div>
                </div>
                </form>
          </div><!--/ con-->
            
      </div>    
    </div><!--/ container-->


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>