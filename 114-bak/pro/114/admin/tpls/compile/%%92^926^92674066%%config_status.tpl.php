<?php /* Smarty version 2.6.25, created on 2010-08-06 12:35:15
         compiled from config_status.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'config_status.tpl', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
            
            
            <div class="con box-green">
                <form method="post" action="?c=config&a=status">
                <div class="box-header">
                    <h4>Debug ģʽ����ϵͳ <span class="green font-n">(�����γ��򱨴���Ϣ,ϵͳ�����쳣ʱ�򿪴�ģʽ,��������Ϣ�ύ�����򿪷�Ա,�Ա㾡��õ����)</span></h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                              <label>
                                <?php echo smarty_function_html_radios(array('name' => "config[debug]",'options' => $this->_tpl_vars['option_toggle'],'checked' => $this->_tpl_vars['config']['yl_debug'],'separator' => "<br />"), $this);?>

                              </label>
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