<?php /* Smarty version 2.6.25, created on 2010-08-06 12:37:40
         compiled from local_class_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['action'] == 'add'): ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
  
            
            <div class="con box-green">
                <form action="?c=local_class&a=add" method='post'>
                <div class="box-header">
                    <h4>��ӵط��������</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">�������ƣ�</th>
                            <td><input type="text" name="classnewname" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>��������</th>
                            <td><input name="orderid" type="text" id="orderid" class="textinput" onkeyup="value=value.replace(/[^\d]/g,'') "/></td>
                        </tr>
                        <tr>
                            <th>keywords��</th>
                            <td><input type="text" name='keywords' class="textinput w360" /></td>
                        </tr>
                        <tr>
                            <th  style="vertical-align:top;">description��</th>
                            <td><textarea name='description' class="w360"></textarea></td>
                        </tr>
                        <tr>
                            <th  style="vertical-align:top;">�����ķ����ǣ�</th>
                            <td>
                               <select name="classid">
                                    <option value="">��ѡ�񡭡�</option>
                                    <?php $_from = $this->_tpl_vars['class_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                                        <option value="<?php echo $this->_tpl_vars['i']['classid']; ?>
"><?php echo $this->_tpl_vars['i']['classname']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                               </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="���" /> �� <a href="?c=local_class&a=index">ȡ��</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<?php elseif ($this->_tpl_vars['action'] == 'edit'): ?>
<div class="wrap">
    <div class="container">
        
        <div id="main">
  
            
            <div class="con box-green">
                <form action="?c=local_class&a=edit" method='post'>
                  <input name="id" type="hidden"  value="<?php echo $this->_tpl_vars['info']['classid']; ?>
" />
                  <input name="type" type="hidden"  value="<?php echo $this->_tpl_vars['type']; ?>
" />
                  <input name="returnid" type="hidden"  value="<?php echo $this->_tpl_vars['returnid']; ?>
" />
                <div class="box-header">
                    <h4>�༭�ط��������</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">�������ƣ�</th>
                            <td><input type="text" name="classnewname" value="<?php echo $this->_tpl_vars['info']['classname']; ?>
" class="textinput w270" <?php if ($this->_tpl_vars['info']['parentid'] == 0): ?>readonly<?php endif; ?> /></td>
                        
                        </tr>
                        <tr>
                            <th>keywords��</th>
                            <td><input type="text" name='keywords' value='<?php echo $this->_tpl_vars['info']['keywords']; ?>
' class="textinput w360" /></td>
                        </tr>
                        <tr>
                            <th  style="vertical-align:top;">description��</th>
                            <td><textarea name='description' class="w360"><?php echo $this->_tpl_vars['info']['description']; ?>
</textarea></td>
                        </tr>
                        <?php if ($this->_tpl_vars['info']['parentid'] != 0): ?>
                        <tr>
                            <th  style="vertical-align:top;">�����ķ����ǣ�</th>
                            <td>
                                <select name="classid" id="classid">
                                    <option value="">��ѡ�񡭡�</option>
                                    <?php $_from = $this->_tpl_vars['class_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                                        <option<?php if ($this->_tpl_vars['info']['parentid'] == $this->_tpl_vars['i']['classid']): ?> selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['i']['classid']; ?>
"><?php echo $this->_tpl_vars['i']['classname']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="�޸�" /> <input name="mkhtml" type="submit" value="�޸Ĳ����ɷ���" />�� <a href="?c=local_class&a=index">ȡ��</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->

<?php else: ?>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action='?c=local_class&a=index&type=<?php echo $this->_tpl_vars['type']; ?>
&classid=<?php echo $this->_tpl_vars['classid']; ?>
' method='post'>
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                            <div class="fl">
                               <input type="button" onclick="window.location='?c=local_class&a=add&classid=<?php echo $this->_tpl_vars['class_id']; ?>
'" value="��ӵط��������" />
                                  &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                    <table class="admin-tb" id="datatable">
                    <tr>
                    	<th width="41" class="text-center">ѡ��</th>
                    	<th width="97">����</th>
                        <th width="248">��������</th>
                        <th width="300">����ҳ���ַ</th>
                    	<th width="100">վ������</th>
                        <th width="161">����</th>
                    </tr>

                    <?php $_from = $this->_tpl_vars['class_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['class']):
?>
                    <tr sitenum='<?php echo $this->_tpl_vars['class']['sitenum']; ?>
' sub_sitenum="<?php echo $this->_tpl_vars['class']['sub_sitenum']; ?>
" classid="<?php echo $this->_tpl_vars['class']['classid']; ?>
" classnum='<?php echo $this->_tpl_vars['class']['sub_classnum']; ?>
' childindex="1">
                    <td class="text-center"><input name="rmid[<?php echo $this->_tpl_vars['class']['classid']; ?>
]" type="checkbox" rel="del"  /></td>
                    <td><?php echo $this->_tpl_vars['class']['displayorder']; ?>
</td>
                    <td rel="classname"><a href="javascript://"><?php echo $this->_tpl_vars['class']['classname']; ?>
</a></td>
                    <td><?php echo $this->_tpl_vars['class']['path']; ?>
.htm</td>
                    <td><?php echo $this->_tpl_vars['class']['sub_sitenum']; ?>
</td>
                    <td>[<a href="?c=local_class&a=edit&id=<?php echo $this->_tpl_vars['class']['classid']; ?>
&type=<?php echo $this->_tpl_vars['type']; ?>
&classid=<?php echo $this->_tpl_vars['classid']; ?>
&path=<?php echo $this->_tpl_vars['class']['class_path']; ?>
">�޸�</a>] </td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    
                    </table>
                    <div class="th">
                    	<div class="form">
                        <input type='hidden' name='commit' value='1' />
                        <input type='radio' name='action' value='del' />ɾ��
                        <input type='radio' name='action' value='update' checked />��������
                        <input type="submit" value="����" />&nbsp;
                        &nbsp;
                        </div>
                    </div>
                </div>

				</form>
            </div><!--/ con-->
            
            
            
            
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->

<?php endif; ?>
<div id="js_search_msg" class="js_search_msg" style="display:none;"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
	.js_search_msg{ position:absolute; background:#fff; border:1px solid #CEDEAE;}
	.js_search_msg li{ padding:3px 5px; cursor:pointer;}
	.js_search_msg li.active{ background:#EBF4D8}}
</style>
<!-- 09.11.18 -->
<script type="text/javascript" src="static/js/catgorymanager.js"></script>
<script type="text/javascript">
    CatgoryManager.AjaxUrl = "?c=local_class&a=ajax_get_list&id=";
	CatgoryManager.SetDisplayFun(function(data,parentNode,childIndex){
		var pexyText = "��-";
		for(var i = 0; i < childIndex; i++){
			pexyText = "&nbsp;&nbsp;&nbsp;&nbsp;" + pexyText;
		}
		childIndex = Number(childIndex) + 1;
		var html = "";
		for(var key in data){
			var item = data[key];
			html += '<tr sitenum="'+item["sitenum"]+'" classnum="'+item["sub_classnum"]+'" sub_sitenum="'+item["sub_sitenum"]+'" classid="'+item["classid"]+'" childindex="'+childIndex+'" parent="'+parentNode.attr("classid")+'">';
			html += '<td class="text-center"><input name="rmid['+item["classid"]+']" type="checkbox" rel="del"  /></td>';
			html += '<td>'+pexyText+'<input name="order[]" type="text" id="order[]" class="textinput" tabindex="11" value="'+item["displayorder"]+'" size="4" />';
			html += '<input name="orderid[]" type="hidden" id="orderid[]" value="'+item["classid"]+'" /></td>';
			if(Number(item["sitenum"]) > 0){
				html += '<td rel="classname">' + pexyText + item["classname"] + ' <a href="?c=local_site&classid='+item["classid"]+'" style="color:red;">[ ��ַ�б�]</a></td>';
			}
			else{
				html += '<td rel="classname">' + pexyText + '<a href="javascript://">' + item["classname"]+'</a></td>';
			}
			
			html += '<td>&nbsp;</td>';
			html += '<td>'+ (item["sitenum"] == 0? (item["sub_sitenum"] || 0 ) : item["sitenum"])+'</td>';
			html += '<td>[<a href="?c=local_class&a=edit&id='+item["classid"]+'&type=<?php echo $this->_tpl_vars['type']; ?>
&classid='+item["classid"]+'&path='+item["path"]+'">�޸�</a>]</td>';
			html += '</tr>';
		}
		//alert(html);
		var col = $(html);
		col.find("td[rel='classname'] a").each(function(i){
			CatgoryManager._bindEvent($(this));
		});
		parentNode.after(col);
		return col;
	});
	CatgoryManager.Init($("#datatable"));
</script>