<?php /* Smarty version 2.6.25, created on 2010-08-06 12:32:41
         compiled from config_info.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
  
            
            <div class="con box-green">
                <form method="post" action="?c=config&a=info">
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
                        <tr>
                            <th  style="vertical-align:top;">ͳ�ƴ��룺</th>
                            <td><textarea class="w360" name="config[ipstat]"><?php echo $this->_tpl_vars['config']['yl_ipstat']; ?>
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