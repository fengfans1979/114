<?php /* Smarty version 2.6.25, created on 2010-08-06 12:36:45
         compiled from config_cc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'config_cc.tpl', 28, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
            
            
            <div class="con box-green">
                <form method="post" action="?c=security&a=cc">
                <div class="box-header">
                    <h4>ϵͳ���ؿ��Ʋ��� <span class="green font-n">(����ֵ��3�����������ĸ��ز����������ֵʱ���Զ�����CC����ģʽ������linux,unix,FREEBSDϵͳ��Ч)</span></h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120"> </th>
                            <td><input name='config[loadavg]' value='<?php echo $this->_tpl_vars['config']['yl_loadavg']; ?>
' /></td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>CC��������</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
<?php echo smarty_function_html_radios(array('name' => "config[cc]",'options' => $this->_tpl_vars['option_cc'],'checked' => $this->_tpl_vars['config']['yl_cc'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="�������" />
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