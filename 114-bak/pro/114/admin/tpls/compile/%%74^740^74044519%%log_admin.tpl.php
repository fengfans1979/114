<?php /* Smarty version 2.6.25, created on 2010-08-06 12:36:51
         compiled from log_admin.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<body id="main_page">

<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action="<?php echo $this->_tpl_vars['sys']['formurl']; ?>
" method="get">
                  <div class="table">
                  	<div class="th">
                    	<div class="form"><strong>����Ա������־&nbsp;</strong></div>
                    </div>
                    <table class="admin-tb" id="tb1">
                    <tr>
                    	<th width="41" class="text-center">�û���</th>
                        <th width="300">������־</th>
                        <th width="300">����¼ʱ��</th>
                        <th width="200">����¼IP</th>
                        <th>����</th>
                        
                    </tr>

<?php echo $this->_tpl_vars['data']['0']; ?>


                    
                  

                    
                    </table>
                    
                    
                    <div class="th"><!--/ pages-->
                            
                            <div class="pages">
                            	<?php echo $this->_tpl_vars['data']['1']; ?>

                            </div>
                    	<div class="form">
                        	<input type="button" value="ɾ�����������־" onClick="location.href='?c=log&a=log_admin_delete&delete=yes'"   />&nbsp;&nbsp;&nbsp;[&nbsp;ϵͳ���������100������&nbsp;]
                        
                        </div>
                    </div>
                    
                </div>

				</form>
            </div><!--/ con-->
            
            
            
            
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>