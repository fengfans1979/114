<?php /* Smarty version 2.6.25, created on 2010-08-01 18:49:14
         compiled from advise_index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
                    	$(document).ready(function(){
							$("#js_data_source").find("input[rel='del']").each(function(i){
								$(this).bind("click",function(){
									var tr = $(this).parent().parent();
									var input = tr.find("input[rel='dis']");
									if(this.checked){
										$(input).attr("checked","");
										$(input).attr("disabled","disabled");
									}
									else{
										$(input).attr("disabled","");
									}
								});								
							});
							$("#js_data_source").find("input[rel='dis']").change(function(){
                                if ($(this).next('input[type="hidden"]').val() == 1) $(this).next('input[type="hidden"]').val(0);
                                else $(this).next('input[type="hidden"]').val(1);
							});
						});
                    </script>

<div class="wrap">
    <div class="container">

        <div id="main">
            <div id="nav" style="display:none">
            <dl>
	            <dt>��ǰλ�ã�</dt>
	            <dd class="link"><a href="#">��ҳ����</a></dd>
	            <dd>ר�����</dd>
            </dl>
            </div>
            <div class="con ">
            	<form action="<?php echo $this->_tpl_vars['sys']['subform']; ?>
" method="post">
            	  <div class="table">
               	  <div class="th">
                    	<div class="form">
                        <input type="button" value="��ӹ��" onclick="location.href='?c=advise_index&a=advise_index_add&action=<?php echo $this->_supers['request']['action']; ?>
'"/>&nbsp;</div>
                    </div>
                    
                   
                    
<table class="admin-tb" id="js_data_source">
<tr><td colspan="11" class=head>������</td></tr>
<tr align="center">
    <td class=cbg width="5%">ɾ��</td>
    <td class=cbg width="10%">����</td>
    <td class=cbg width="10%">˳��</td>
    <td class=cbg width="10%">�������</td>
    <td class=cbg width="41%">�������</td>
    <td width="9%" class=cbg>����ʱ��</td>		
    <td class=cbg width="5%">����</td>
    
</tr>
                
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
<tr align="center" class=b>
    <td  class="text-center" ><input name="id[]" type="checkbox" id="id[]" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"></td>
    <td > <input type="checkbox" name="applyid[]" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" <?php if (1 == $this->_tpl_vars['v']['state']): ?>checked<?php endif; ?>  >
    	  <input name="select_id_all[]" type="hidden" id="select_id_all[]" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"/>
    </td>
    <td ><?php echo $this->_tpl_vars['v']['vieworder']; ?>
</td>
    <td ><?php echo $this->_tpl_vars['v']['varname']; ?>
</td>
    <td ><?php echo $this->_tpl_vars['v']['title']; ?>
</td>
    <td ><?php echo $this->_tpl_vars['v']['endtime']; ?>
</td>
    
    <td ><a href="?c=advise_index&a=advise_index_save&id=<?php echo $this->_tpl_vars['v']['id']; ?>
&action=<?php echo $this->_supers['request']['action']; ?>
">�༭</a></td>
		
</tr>
<?php endforeach; endif; unset($_from); ?>

</table>
               
<script>
$("#js_data_source").find("input[rel='dis']").change(function(){
                                if ($(this).next('input[type="hidden"]').val() == 1) $(this).next('input[type="hidden"]').val(0);
                                else $(this).next('input[type="hidden"]').val(1);
							});
</script>
                    
                    <div class="th">
                        
                        
                   	  <div class="form">
                        <div class="form">
<label><input type="radio" name="subaction" value="delete">ɾ��</label> &nbsp; 
<label><input name="subaction" type="radio" value="display" checked>����</label> &nbsp; 
  &nbsp;&nbsp;&nbsp;
  <input type="submit" name="Submit3" value="�ύ�޸�"><input name="action" type="hidden" id="action" value="<?php echo $this->_supers['request']['action']; ?>
">

                    	
                    	<input name="step" type="hidden" id="step" value="2">
                    	</div>&nbsp;
                        </div>
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