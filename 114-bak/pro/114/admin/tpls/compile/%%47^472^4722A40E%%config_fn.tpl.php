<?php /* Smarty version 2.6.25, created on 2010-08-06 12:35:19
         compiled from config_fn.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'config_fn.tpl', 17, false),array('modifier', 'default', 'config_fn.tpl', 55, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
            
            
            <div class="con box-green">
                <form method="post" action="?c=config&a=fn">
                <div class="box-header">
                    <h4>�����Ż� <span class="green font-n">(����15��������1000�����ϴ򿪴�ѡ��)</span></h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[lp]",'options' => $this->_tpl_vars['option_toggle'],'checked' => $this->_tpl_vars['config']['yl_lp'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>GZIP ѹ�����<span class="green font-n">(ѡ����������ϵͳͨ��gzip���ҳ��,���Ժ����Եؽ��ʹ�������,��ֻ���ڿͻ���֧�ֵ�����²ſ�ʹ��,����Ӵ������ϵͳ����)</span></h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[obstart]",'options' => $this->_tpl_vars['option_toggle'],'checked' => $this->_tpl_vars['config']['yl_obstart'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>�Ƿ�����֤��<span class="green font-n">������֤�룬�����ṩϵͳ��ȫ�ԡ� <font color="red">ע���˹�����ҪGD��֧�֡�</font></span></h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[verify_code]",'options' => $this->_tpl_vars['option_toggle'],'checked' => $this->_tpl_vars['config']['yl_verify_code'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>�Ƿ����汾������ʾ: <span class="green font-n">(���ٷ����°汾����ʱ����ʾ������ʾ)</span></h4>
  
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                              <label>
                                <?php echo smarty_function_html_radios(array('name' => "config[display_update_info]",'options' => $this->_tpl_vars['option_toggle'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['config']['yl_display_update_info'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => "<br />"), $this);?>

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