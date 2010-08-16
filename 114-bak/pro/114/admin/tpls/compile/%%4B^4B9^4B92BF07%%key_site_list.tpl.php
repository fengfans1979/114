<?php /* Smarty version 2.6.25, created on 2010-08-06 12:29:17
         compiled from key_site_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'key_site_list.tpl', 59, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action="?c=key&a=list_edit" method="post">
                    <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                        <input type="button" value="添加关键字" onclick="self.location='?c=key&a=edit&action=add'"/>&nbsp;
                        <label for="alltopic">按分类查看</label>&nbsp;
                        <script>
                        	var onChangeHandler = function(ele)
							{
								
								location='?c=key&classid=' + ele.value
							}
                        </script>
                        <select id="alltopic" onchange="onChangeHandler(this);">
                            <?php $_from = $this->_tpl_vars['class_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
?>
                                <optgroup label="<?php echo $this->_tpl_vars['k']; ?>
">
                                    <?php $_from = $this->_tpl_vars['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                                    <option<?php if ($this->_tpl_vars['i']['id'] == $this->_tpl_vars['class_id']): ?> selected="selected"<?php endif; ?> value='<?php echo $this->_tpl_vars['i']['id']; ?>
' ><?php echo $this->_tpl_vars['i']['name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </optgroup>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>&nbsp;
                        &nbsp;&nbsp;<a href="?c=key">查看全部</a>&nbsp;
                        &nbsp;&nbsp;<a href="?c=key&inindex=1">查看在首页显示的站点</a>&nbsp;
                        &nbsp;&nbsp;<a href="?c=key&isend=1">查看过期站点</a>&nbsp;
                        </div>
                    </div>
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    	<th width="41" class="text-center">删除</th>    
                          
                        <th width="70">排序</th>
                        <th>网站</th>
                        <th width="150">分类</th>
                        <th width="80">开始时间</th>      
                        <th width="80">结束时间</th>                              
                        <th width="60">操作</th>
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
                        <td><a  href="?c=key&a=edit&action=modify&id=<?php echo $this->_tpl_vars['i']['id']; ?>
" ><?php echo $this->_tpl_vars['i']['name']; ?>
</a></td>
                        <td> <?php echo $this->_tpl_vars['i']['class_name']; ?>
</td>
                        <td><?php if ($this->_tpl_vars['i']['starttime'] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['i']['starttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?></td>              
                        <td><?php if ($this->_tpl_vars['i']['endtime'] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['i']['endtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?></td>      
                        <td><a href="?c=key&a=edit&action=modify&id=<?php echo $this->_tpl_vars['i']['id']; ?>
">修改</a></td>
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
										$(input).attr("checked","");
										$(input).attr("disabled","disabled");
									}
									else{
										$(input).attr("disabled","");
									}
								});								
							});
                            						});
                    </script>
                    <div class="th">
                        <?php if ($this->_tpl_vars['pages']): ?>
                        <div class="pages">
                            <?php if ($this->_tpl_vars['pages']['prev'] > -1): ?>                            
                            <a href="<?php echo $this->_tpl_vars['page_url']; ?>
&start=<?php echo $this->_tpl_vars['pages']['prev']; ?>
">&laquo; 上一页</a>
                            <?php else: ?>
                            <span class="nextprev">&laquo; 上一页</span>
                            <?php endif; ?>
                            <?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                                <?php if ($this->_tpl_vars['k'] != 'prev' && $this->_tpl_vars['k'] != 'next'): ?>
                                    <?php if ($this->_tpl_vars['k'] == 'omitf' || $this->_tpl_vars['k'] == 'omita'): ?>
                                    <span>…</span>
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
">下一页 &raquo;</a>
                            <?php else: ?>
                            <span class="nextprev">下一页 &raquo;</span>
                            <?php endif; ?>
                        </div>                
                        <?php endif; ?>
                        
                    	<div class="form">
                        <input value="提交修改" type="submit"/>&nbsp;
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