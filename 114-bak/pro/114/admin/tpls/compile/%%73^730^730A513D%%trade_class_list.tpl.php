<?php /* Smarty version 2.6.25, created on 2010-08-06 12:37:45
         compiled from trade_class_list.tpl */ ?>
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
                <form action="?c=trade_class&a=add" method='post'>
                <div class="box-header">
                    <h4>添加行业分类</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">分类名称：</th>
                            <td><input type="text" name="classnewname" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>外链地址：</th>
                            <td><input type="text" name="path" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>分类排序：</th>
                            <td><input name="orderid" type="text" id="orderid" class="textinput" onkeyup="value=value.replace(/[^\d]/g,'') "/></td>
                        </tr>
                        <tr>
                            <th>keywords：</th>
                            <td><input type="text" name='keywords' class="textinput w360" /></td>
                        </tr>
                        <tr>
                            <th  style="vertical-align:top;">description：</th>
                            <td><textarea name='description' class="w360"></textarea></td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="添加" /> 或 <a href="?c=trade_class&a=index">取消</a>
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
                <form action="?c=trade_class&a=edit" method='post'>
                  <input name="id" type="hidden"  value="<?php echo $this->_tpl_vars['info']['classid']; ?>
" />
                  <input name="type" type="hidden"  value="<?php echo $this->_tpl_vars['type']; ?>
" />
                  <input name="returnid" type="hidden"  value="<?php echo $this->_tpl_vars['returnid']; ?>
" />
                <div class="box-header">
                    <h4>编辑行业分类</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">分类名称：</th>
                            <td><input type="text" name="classnewname" value="<?php echo $this->_tpl_vars['info']['classname']; ?>
" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>外链地址：</th>
                            <td><input type="text" name="path" value="<?php echo $this->_tpl_vars['info']['path']; ?>
" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>keywords：</th>
                            <td><input type="text" name='keywords' value='<?php echo $this->_tpl_vars['info']['keywords']; ?>
' class="textinput w360" /></td>
                        </tr>
                        <tr>
                            <th  style="vertical-align:top;">description：</th>
                            <td><textarea name='description' class="w360"><?php echo $this->_tpl_vars['info']['description']; ?>
</textarea></td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="修改" /> <input name="mkhtml" type="submit" value="修改并生成分类" />或 <a href="?c=trade_class&a=index">取消</a>
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
            	<form action='?c=trade_class&a=index&type=<?php echo $this->_tpl_vars['type']; ?>
&classid=<?php echo $this->_tpl_vars['classid']; ?>
' method='post'>
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                        <div class="fl">
                           <input type="button" onclick="window.location='?c=trade_class&a=add'" value="添加行业分类" />
                              &nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        </div>
                    </div>
                    <table class="admin-tb">
                    <tr>
                    	<th width="41" class="text-center">选择</th>
                    	<th width="97">排序</th>
                        <th width="248">分类名称</th>
                        <th width="300">外链地址</th>
                    	<th width="100">站点数量</th>
                        <th width="161">操作</th>
                    </tr>

                    <?php $_from = $this->_tpl_vars['class_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['class']):
?>
                    <tr>
                    <td class="text-center"><input name="rmid[<?php echo $this->_tpl_vars['class']['classid']; ?>
]" type="checkbox" rel="del"  /></td>
                    <td><input name="order[]" type="text" id="order[]" class="textinput" tabindex="11" value="<?php echo $this->_tpl_vars['class']['displayorder']; ?>
" size="4" />
                   <input name="orderid[]" type="hidden" id="orderid[]" value="<?php echo $this->_tpl_vars['class']['classid']; ?>
" /></td>
                    <td><a href='?c=trade_site&classid=<?php echo $this->_tpl_vars['class']['classid']; ?>
'><?php echo $this->_tpl_vars['class']['classname']; ?>
</a></td>
                    <td><input name="path[<?php echo $this->_tpl_vars['class']['classid']; ?>
]" type="text" class="textinput" style="width: 200px;" id="path[<?php echo $this->_tpl_vars['class']['classid']; ?>
]" value="<?php echo $this->_tpl_vars['class']['path']; ?>
" /></td>
                    <td><?php echo $this->_tpl_vars['class']['sitenum']; ?>
</td>
                    <td>[<a href="?c=trade_class&a=edit&id=<?php echo $this->_tpl_vars['class']['classid']; ?>
&type=<?php echo $this->_tpl_vars['type']; ?>
&classid=<?php echo $this->_tpl_vars['classid']; ?>
&path=<?php echo $this->_tpl_vars['class']['class_path']; ?>
">修改</a>] </td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    
                    </table>
                    <div class="th">
                    	<div class="form">
                        <input type='hidden' name='commit' value='1' />
                        <input type='radio' name='action' value='del' />删除
                        <input type='radio' name='action' value='update' checked />其他更改
                        <input type="submit" value="保存" />&nbsp;
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
