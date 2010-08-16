<?php /* Smarty version 2.6.25, created on 2010-08-06 12:37:35
         compiled from zhuanti_class_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action="?c=zhuanti_class&a=list_edit" method="post">
                    <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                        <input type="button" value="添加专题" onclick="window.location='?c=zhuanti_class&a=edit&action=add'" />&nbsp;
                        <label for="alltopic">按分类查看</label>&nbsp;
                        <script type="text/javascript">
							var onChangeHandler = function(ele){
								window.location='?c=zhuanti_class&type=' + ele.value;
							}
						</script>
                        <select id="alltopic" onchange="onChangeHandler(this);">
                            <option selected="selected" onclick="window.location='?c=zhuanti_class'">所有专题</option>
                            <?php $_from = $this->_tpl_vars['class_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                            <option<?php if ($this->_tpl_vars['k'] == $this->_tpl_vars['key']): ?> selected="selected"<?php endif; ?> value='<?php echo $this->_tpl_vars['k']; ?>
'><?php echo $this->_tpl_vars['i']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                        &nbsp;&nbsp;<a href="?c=zhuanti_class">查看全部</a>&nbsp;
                        </div>
                    </div>
                   
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    	<th width="41" class="text-center">删除</th>    
                        <th width="80">首页显示</th>    
                        <th width="70">排序</th>            	
                        <th width="180">分类</th>
                        <th width="80">所属专题</th>                        
                        <th>操作</th>
                        
                    </tr>
                    <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                    <tr>
                        <td class="text-center"><input rel="del" type="checkbox" name="delete[<?php echo $this->_tpl_vars['i']['id']; ?>
]"  /></td>
                        <td class="text-center">
                            <input rel="dis" type="checkbox" name="inindex[<?php echo $this->_tpl_vars['i']['id']; ?>
]" <?php if ($this->_tpl_vars['i']['inindex'] == 1): ?>checked="checked"<?php endif; ?>/>
                            <input type="hidden" name="noindex[<?php echo $this->_tpl_vars['i']['id']; ?>
]" value="<?php if ($this->_tpl_vars['i']['inindex'] == 1): ?>0<?php else: ?>1<?php endif; ?>"/>
                        </td>
                        <td><input type="text" name="order[<?php echo $this->_tpl_vars['i']['id']; ?>
]" value="<?php echo $this->_tpl_vars['i']['displayorder']; ?>
" class="textinput" tabindex="11" /></td>                 
                        <td><a title="查看该分类下的网站" href="?c=zhuanti&classid=<?php echo $this->_tpl_vars['i']['id']; ?>
"><?php echo $this->_tpl_vars['i']['name']; ?>
</a></td>
                        <td><?php echo $this->_tpl_vars['i']['type_zh']; ?>
</td>                        
                        <td><a href="?c=zhuanti_class&a=edit&action=modify&id=<?php echo $this->_tpl_vars['i']['id']; ?>
">修改</a></td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>                    
                    </table>
                    <script type="text/javascript">
                        $(document).ready(function(){
							$(".admin-tb").find("input[rel='del']").each(function(i){
								$(this).bind("click",function(){
									
									
								})
							});	
							
							
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
                    	<div class="form">
                        <input type="submit" value="提交修改" />&nbsp;
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