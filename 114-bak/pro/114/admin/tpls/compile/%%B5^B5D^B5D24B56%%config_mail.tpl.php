<?php /* Smarty version 2.6.25, created on 2010-08-06 12:35:23
         compiled from config_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'config_mail.tpl', 17, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
            
            
            <div class="con box-green">
                <form method="post" action="?c=config&a=mail">
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
                    <h4>smtp�������˿�(Ĭ��:25)</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120"> </th>
                            <td>
                                <input  class="textinput w270" type="text" name="config[smtpport]" value="<?php echo $this->_tpl_vars['config']['yl_smtpport']; ?>
" /><br />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>SMTP�������Ƿ���Ҫ��ȫ����(SSL) <span class="green font-n">(һ�㲻��ҪSSL����,GMAIL��Ҫ,PHP��Ҫ����openssl)</span></h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[smtpssl]",'options' => $this->_tpl_vars['option_toggle'],'checked' => $this->_tpl_vars['config']['yl_smtpssl'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>SMTP�������Ƿ���Ҫ�û���֤</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <?php echo smarty_function_html_radios(array('name' => "config[smtpauth]",'options' => $this->_tpl_vars['option_toggle'],'checked' => $this->_tpl_vars['config']['yl_smtpauth'],'separator' => "<br />"), $this);?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>SMTP��������֤�û��� <span class="green font-n">(��ͨ�ʼ���֤����Ҫ��@����)</span></h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120"> </th>
                            <td>
                                <input type="text"  name="config[smtpid]"  class="textinput w270"  value="<?php echo $this->_tpl_vars['config']['yl_smtpid']; ?>
"  /><br />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>SMTP��������֤����</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120"> </th>
                            <td>
                               <input type="password" class="textinput w270"   id="config[smtppass]" name="config[smtppass]" value="<?php echo $this->_tpl_vars['config']['yl_smtppass']; ?>
" /><br />
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