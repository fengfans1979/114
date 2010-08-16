<?php /* Smarty version 2.6.25, created on 2010-08-01 16:52:31
         compiled from class_body.tpl */ ?>
    <div id="guide" class="bd">
    <dl>
    <dt>您当前的位置：</dt>
    <dd><a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent">首页</a></dd>
    <?php if ($this->_tpl_vars['parent_class_name']): ?><dd><em>&gt;</em><?php echo $this->_tpl_vars['parent_class_name']; ?>
</dd><?php endif; ?>
    <?php if ($this->_tpl_vars['current_class_name']): ?><dd><em>&gt;</em><?php echo $this->_tpl_vars['current_class_name']; ?>
</dd><?php endif; ?>
    </dl>
    <ul>
    <li class="sethome"><a href="javascript:void(0)" onclick="Yl.setHome(this,'<?php echo $this->_tpl_vars['URL']; ?>
')" target="_parent" class="gray6">设本站为主页</a></li>
    <li class="feedback"><a href="<?php echo $this->_tpl_vars['URL']; ?>
/feedback/" class="gray6">网友留言</a></li>
    </ul>
    
    </div><!--/ guide-->
        
    <div id="catenav">
    	<ul class="clearfix">
        <?php $_from = $this->_tpl_vars['key_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['class_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['class_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
        $this->_foreach['class_list']['iteration']++;
?>
        	<li<?php echo $this->_tpl_vars['i']['txtclass']; ?>
><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
" target="_parent"><?php echo $this->_tpl_vars['k']; ?>
</a> <?php if (! ($this->_foreach['class_list']['iteration'] == $this->_foreach['class_list']['total'])): ?>|<?php endif; ?> </li>
        <?php endforeach; endif; unset($_from); ?>
        </ul>
    </div><!--/ catenav-->
<div class="bd" id="cate">
<?php $_from = $this->_tpl_vars['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
?>
	<h3 id="<?php echo $this->_tpl_vars['key_list'][$this->_tpl_vars['k']]['classid']; ?>
"><?php echo $this->_tpl_vars['k']; ?>
</h3>
    <ul class="clearfix">
    <?php $_from = $this->_tpl_vars['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
        <?php if ($this->_tpl_vars['i']['name'] == 'NULL'): ?>
            <li><a href=""></a></li>
        <?php elseif ($this->_tpl_vars['i']['domain']): ?>
            <li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
" target="_blank"<?php if ($this->_tpl_vars['i']['namecolor']): ?> style="color:<?php echo $this->_tpl_vars['i']['namecolor']; ?>
;"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a><?php echo $this->_tpl_vars['i']['good']; ?>
</li>
        <?php else: ?>
            <li><a href="<?php echo $this->_tpl_vars['i']['url']; ?>
" target="_blank"<?php if ($this->_tpl_vars['i']['namecolor']): ?> style="color:<?php echo $this->_tpl_vars['i']['namecolor']; ?>
;"<?php endif; ?>><?php echo $this->_tpl_vars['i']['name']; ?>
</a><?php echo $this->_tpl_vars['i']['good']; ?>
</li>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
     </ul>
<?php endforeach; endif; unset($_from); ?>
</div>