<?php /* Smarty version 2.6.25, created on 2010-08-06 12:37:37
         compiled from zhuanti_site_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'zhuanti_site_list.tpl', 73, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action="?c=zhuanti&a=search" method="get">
                    <input type="hidden" name="c" value="zhuanti"/>
                    <input type="hidden" name="a" value="search"/>
                  <div class="table">
                    <div class="th">
                        վ������: <input type="text" value="<?php echo $this->_tpl_vars['keyword']; ?>
" id="keyword" name="keyword"/>
                          <select name="search_type">
                            <option value="name">����</option>
                            <option value="url" <?php if ($this->_tpl_vars['search_type'] == 'url'): ?>selected<?php endif; ?>>��ַ</option>
                          </select>
                          <input type="submit" value="����" />
                    </div>
                  </div>
                </form>
            	<form action="?c=zhuanti&a=list_edit" method="post">
                    <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                        <input type="button" value="�����ַ" onclick="self.location='?c=zhuanti&a=edit&action=add'"/>&nbsp;
                        <?php if ($this->_tpl_vars['class_list']): ?>
                        <label for="alltopic">������鿴</label>&nbsp;
                        <script type="text/javascript">
							var onChangeHandler = function(ele){
								window.location='?c=zhuanti&classid=' + ele.value;
							}
						</script>
                        <select id="alltopic" onchange="onChangeHandler(this);">                            
                        	<option onclick="self.location='?c=zhuanti'";>����ר��</option>
                            <?php $_from = $this->_tpl_vars['class_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
?>
                                <optgroup label="<?php echo $this->_tpl_vars['k']; ?>
">
                                    <?php $_from = $this->_tpl_vars['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                                    <option<?php if ($this->_tpl_vars['i']['id'] == $this->_tpl_vars['class_id']): ?> selected="selected"<?php endif; ?> value='<?php echo $this->_tpl_vars['i']['id']; ?>
'><?php echo $this->_tpl_vars['i']['name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </optgroup>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>&nbsp;
                        <?php endif; ?>
                        &nbsp;&nbsp;<a href="?c=zhuanti">�鿴ȫ��</a>&nbsp;
                       <!-- &nbsp;&nbsp;<a href="?c=zhuanti&inindex=1">�鿴����ҳ��ʾ��վ��</a>&nbsp;-->
                        &nbsp;&nbsp;<a href="?c=zhuanti&isend=1">�鿴����վ��</a>&nbsp;
                        </div>
                    </div>
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    	<th width="41" class="text-center">ɾ��</th>    
                           
                        <th width="70">����</th>            	
                        <th width="150">��վ</th>
                        <th width="220">��ַ</th>
                        <th width="150">����ר�� &raquo; ����</th>
                        <th width="80">��ʼʱ��</th>      
                        <th>����ʱ��</th>                              
                    </tr>
                    <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                    <tr>
                        <td class="text-center"><input rel="del" type="checkbox" name="delete[<?php echo $this->_tpl_vars['i']['id']; ?>
]"  /></td>
                          
                        <td><input type="text" name="order[<?php echo $this->_tpl_vars['i']['id']; ?>
]" class="textinput" tabindex="11" value="<?php echo $this->_tpl_vars['i']['displayorder']; ?>
" /></td>                 
                        <td><a href="?c=zhuanti&a=edit&action=modify&id=<?php echo $this->_tpl_vars['i']['id']; ?>
" style="color:<?php echo $this->_tpl_vars['i']['namecolor']; ?>
;"><?php echo $this->_tpl_vars['i']['name']; ?>
</a></td>
                        <td><div style="width:220px;" class="hideText" title="<?php echo $this->_tpl_vars['i']['url']; ?>
"><?php echo $this->_tpl_vars['i']['url']; ?>
</div></td>
                        <td><a title="�鿴��ר�����з���" href="?c=zhuanti_class&type=<?php echo $this->_tpl_vars['i']['type']; ?>
"><?php echo $this->_tpl_vars['i']['zhuanti_name']; ?>
</a> &raquo; <a title="�鿴�÷���������ַ" href="?c=zhuanti&classid=<?php echo $this->_tpl_vars['i']['class_id']; ?>
"><?php echo $this->_tpl_vars['i']['class_name']; ?>
</a></td>
                        <td><?php if ($this->_tpl_vars['i']['starttime'] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['i']['starttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?></td>              
                        <td><?php if ($this->_tpl_vars['i']['endtime'] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['i']['endtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?></td>      
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    </table>
                    <script type="text/javascript">
                    	$(document).ready(function(){
							$("#js_data_source").find("input[rel='del']").each(function(i){
								$(this).bind("click",function(){
									var tr = $(this).parent().parent();
									var input = tr.find("input[rel='dis']");
									if(this.checked){
										$(input).attr("oledchecked",$(input).attr("checked"));
										$(input).attr("checked","");
										$(input).attr("disabled","disabled");
									}
									else{
										$(input).attr("disabled","");
										$(input).attr("checked",$(input).attr("oledchecked"));
									}
									
									$(".admin-tb").find("input[rel='del']").each(function(i){
										var tr2 = $(this).parent().parent();
										if(this.checked){
											tr2.addClass("checked");
										}
										else{
											tr2.removeClass("checked");
										}
									})
								});								
							});
							$("#js_data_source").find("input[rel='dis']").change(function(){
                                if ($(this).next('input[type="hidden"]').val() == 1) $(this).next('input[type="hidden"]').val(0);
                                else $(this).next('input[type="hidden"]').val(1);
							});
						});
                    </script>
                    <div class="th">
                        <?php if ($this->_tpl_vars['pages']): ?>
                        <div class="pages">
                            <?php if ($this->_tpl_vars['pages']['prev'] > -1): ?>                            
                            <a href="<?php echo $this->_tpl_vars['page_url']; ?>
&start=<?php echo $this->_tpl_vars['pages']['prev']; ?>
">&laquo; ��һҳ</a>
                            <?php else: ?>
                            <span class="nextprev">&laquo; ��һҳ</span>
                            <?php endif; ?>
                            <?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                                <?php if ($this->_tpl_vars['k'] != 'prev' && $this->_tpl_vars['k'] != 'next'): ?>
                                    <?php if ($this->_tpl_vars['k'] == 'omitf' || $this->_tpl_vars['k'] == 'omita'): ?>
                                    <span>��</span>
                                    <?php else: ?>
                                        <?php if ($this->_tpl_vars['i'] > -1): ?>
                                        <a href="<?php echo $this->_tpl_vars['page_url']; ?>
&start=<?php echo $this->_tpl_vars['i']; ?>
"><?php echo $this->_tpl_vars['k']; ?>
</a>
                                        <?php else: ?>
                                        <span class="current"><?php echo $this->_tpl_vars['k']; ?>
</span>                                        
                                        <?php endif; ?>
                                    <?php endif; ?>   
                                <?php endif; ?>                             
                            <?php endforeach; endif; unset($_from); ?>
                            <?php if ($this->_tpl_vars['pages']['next'] > -1): ?>                            
                            <a href="<?php echo $this->_tpl_vars['page_url']; ?>
&start=<?php echo $this->_tpl_vars['pages']['next']; ?>
">��һҳ &raquo;</a>
                            <?php else: ?>
                            <span class="nextprev">��һҳ &raquo;</span>
                            <?php endif; ?>
                        </div>                
                        <?php endif; ?>
                        
                    	<div class="form">
                        <input value="�ύ�޸�" type="submit"/>&nbsp;
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