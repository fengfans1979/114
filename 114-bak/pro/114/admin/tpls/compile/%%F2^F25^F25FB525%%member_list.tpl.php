<?php /* Smarty version 2.6.25, created on 2010-08-01 20:51:38
         compiled from member_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'member_list.tpl', 89, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<script type="text/javascript">
	var list;
	$(document).ready(function(){
		list = $("#tb1").find("input[type='checkbox']").not("[rel]");
		list.each(function(i){
			$(this).bind("click",function(){
				CheckHanler();
			});
		});
	});
	
	var CheckHanler = function(){
		list.each(function(i){
			var input = $(this);
			if(this.checked){
				input.parent().parent().addClass("checked");
			}
			else{
				input.parent().parent().removeClass("checked");
			}
		});
	}
	
	var checkTb1 = function(selectType){
		CheckInit("tb1",selectType);
	}
	
	var CheckInit = function(tabelId,selectType){
		if(list == undefined){
			list = $("#" + tabelId).find("input[type='checkbox']").not("[rel]");
		}
		CheckControl(list,selectType,CheckHanler)
	}
	
	var CheckControl = function(childs,selectType,checkHandler){
		for(var i = 0,len = childs.length; i < len; i++){
			switch(selectType){
				case 1:	//ȫѡ
					childs[i].checked = true;
					break;
				case 2:	//��ѡ
					childs[i].checked = false;
					break;
				case 3:	//��ѡ
					childs[i].checked = !childs[i].checked;
					break;
			}
		}
		if(checkHandler){
			checkHandler();
		}
	}
</script>


    <div class="container">

        <div id="main">
            
            <div class="con ">
            	<form action="<?php echo $this->_tpl_vars['sys']['formurl']; ?>
" method="post">
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                    	  <input type="button" value="����¹���Ա" onClick="location.href='?c=member&a=member_add'" />&nbsp;</div>
                    </div>
                    <table class="admin-tb" id="tb1">
                    <tr>
                    	<th width="41" class="text-center"><input type="checkbox" rel="control" onClick="this.checked?checkTb1(1):checkTb1(2);" /></th>
                    	<th width="97">�û���</th>
                        <th width="448">�ȼ�</th>
                        <th width="324">����¼ʱ��</th>
                        <th width="261">����¼IP</th>
                        <th width="225">����</th>
                        
                    </tr>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    <tr>  <!-- <tr class="checked">Ĭ��ѡ�� -->
                    <td class="text-center">
                    <?php if ('��������Ա' != $this->_tpl_vars['v']['levelshow']): ?>
                    <input name="id[]" type="checkbox" id="id[]" value="<?php echo $this->_tpl_vars['v']['name']; ?>
"  />
                    <?php endif; ?>
                    </td>
                    <td><?php echo $this->_tpl_vars['v']['name']; ?>
&nbsp;</td>
                    <td><?php echo $this->_tpl_vars['v']['levelshow']; ?>
</td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['lastvisit'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format'])); ?>
&nbsp;</td>
                    <td><?php echo $this->_tpl_vars['v']['lastip']; ?>
&nbsp;</td>
                    <td>
                    <?php if ('��������Ա' != $this->_tpl_vars['v']['levelshow']): ?>
                    <a href="?c=member&a=member_edit&name=<?php echo $this->_tpl_vars['v']['name']; ?>
">Ȩ��</a>
                    <?php endif; ?>
                                        <?php if ('��������Ա' != $this->_tpl_vars['v']['levelshow']): ?>
                    <a href="?c=member&a=member_password&name=<?php echo $this->_tpl_vars['v']['name']; ?>
">����</a>
                    <?php endif; ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if ('��������Ա' != $this->_tpl_vars['v']['levelshow']): ?>
                    <a href="?c=member&a=member_delete&id=<?php echo $this->_tpl_vars['v']['name']; ?>
">ɾ��</a>
                    <?php endif; ?>
                    </td>
                    </tr>
<?php endforeach; endif; unset($_from); ?>
                    
                    <tr class="foot-ctrl">
                    <td colspan="6" class="gray">ѡ��: <a href="#" onClick="checkTb1(1);">ȫѡ</a> - <a href="#" onClick="checkTb1(3);">��ѡ</a> - <a href="#" onClick="checkTb1(2);">��</a></td>
                    </tr>

                    
                    </table>

                    <div class="th"><!--/ pages-->
                            
                            
                    	<div class="form">
                        <input name="�ύ" type="submit" value="ɾ ��" />
                    	</div>
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