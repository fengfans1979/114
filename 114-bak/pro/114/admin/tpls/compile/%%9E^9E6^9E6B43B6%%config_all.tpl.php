<?php /* Smarty version 2.6.25, created on 2010-08-06 12:35:25
         compiled from config_all.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'config_all.tpl', 56, false),array('modifier', 'default', 'config_all.tpl', 84, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
            <div class="con box-green">
                <form method="post" action="?c=config&a=index">
                <div class="box-header">
                    <h4>�������� </h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">ϵͳ���⣺</th>
                            <td><input type="text" class="textinput w360" name="config[sysname]" value="<?php echo $this->_tpl_vars['config']['yl_sysname']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>ϵͳ��ַ��</th>
                            <td><input type="text" class="textinput w360" name="config[sysurl]" value="<?php echo $this->_tpl_vars['config']['yl_sysurl']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>��ϵ����URL��</th>
                            <td><input type="text" class="textinput w360" name="config[ceoconnect]" value="<?php echo $this->_tpl_vars['config']['yl_ceoconnect']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>����Ա���䣺</th>
                            <td><input type="text" class="textinput w360" name="config[ceoemail]" value="<?php echo $this->_tpl_vars['config']['yl_ceoemail']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>ICP������Ϣ��</th>
                            <td><input type="text" class="textinput w360" name="config[icp]" value="<?php echo $this->_tpl_vars['config']['yl_icp']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>ICP�������ӵ�ַ��</th>
                            <td><input type="text" class="textinput w360" name="config[icpurl]" value="<?php echo $this->_tpl_vars['config']['yl_icpurl']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th>keywords��</th>
                            <td><input type="text" class="textinput w360" name="config[metakeyword]" value="<?php echo $this->_tpl_vars['config']['yl_metakeyword']; ?>
"  /></td>
                        </tr>
                        <tr>
                            <th  style="vertical-align:top;">description��</th>
                            <td><textarea class="w360" name="config[metadescrip]"><?php echo $this->_tpl_vars['config']['yl_metadescrip']; ?>
</textarea></td>
                        </tr>
                        <!--  -->
                    </table>
                </div>
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
                <div class="box-header">
                    <h4>�����ʼ����� </h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[sendemail]",'options' => $this->_tpl_vars['option_toggle'],'checked' => $this->_tpl_vars['config']['yl_sendemail'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>�����ʼ����ͷ�ʽ</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[sendemailtype]",'options' => $this->_tpl_vars['option_sendmailtype'],'checked' => $this->_tpl_vars['config']['yl_sendemailtype'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                   </table>
                </div>
                <div class="box-header">
                    <h4>���������ַ</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120"> </th>
                            <td>
                                <input class="textinput w270" name="config[fromemail]" value="<?php echo $this->_tpl_vars['config']['yl_fromemail']; ?>
" /><br />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>smtp��������ַ</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120"> </th>
                            <td>
                                <input type="text"  class="textinput w270"  name="config[smtpserver]" value="<?php echo $this->_tpl_vars['config']['yl_smtpserver']; ?>
" /><br />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>�Ƿ�����������</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[proxy]",'options' => $this->_tpl_vars['option_proxy'],'checked' => $this->_tpl_vars['config']['yl_proxy'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
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
                <div class="box-header">
                    <h4>����Ϊ����ֹ��IP</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td><textarea class="w360" name="ip_deny_list"><?php echo $this->_tpl_vars['ip_deny_list']; ?>
</textarea></td>
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