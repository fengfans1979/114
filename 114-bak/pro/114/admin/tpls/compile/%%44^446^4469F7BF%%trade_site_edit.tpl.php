<?php /* Smarty version 2.6.25, created on 2010-08-06 12:37:51
         compiled from trade_site_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'trade_site_edit.tpl', 17, false),array('modifier', 'date_format', 'trade_site_edit.tpl', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=trade_site&a=save" method="post">
                <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
"/>
                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['data']['id']; ?>
"/>
                <input type="hidden" name="referer" value="<?php echo $this->_tpl_vars['referer']; ?>
"/>
                <div class="box-header">
                    <h4><?php if ($this->_tpl_vars['action'] == 'modify'): ?>�޸�<?php else: ?></>���<?php endif; ?>��ַ</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">��վ���ƣ�</th>
                            <td><input style="color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['data']['namecolor'])) ? $this->_run_mod_handler('default', true, $_tmp, '#000') : smarty_modifier_default($_tmp, '#000')); ?>
;" type="text" id="js_test_link" name="site_name" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" class="textinput w270" /><span style="margin-left:10px;">������ɫ��</span><span id="js_link_color" style="margin-right:10px;"></span><input id="js_test_input" name="color" type="hidden" value="<?php echo $this->_tpl_vars['data']['namecolor']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th>��վ��ַ��</th>
                            <td><input type="text" name="site_url" value="<?php echo $this->_tpl_vars['data']['url']; ?>
" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>��ʼʱ�䣺</th>
                            <td><input type="text" id="start_time" name="start_time" value="<?php if ($this->_tpl_vars['data']['starttime']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['starttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?>" class="textinput w80" /></td>
                        </tr>
                        <tr>
                            <th>����ʱ�䣺</th>
                            <td><input type="text" id="end_time" name="end_time" value="<?php if ($this->_tpl_vars['data']['endtime']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['endtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_ymd']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_ymd'])); ?>
<?php endif; ?>" class="textinput w80" /></td>
                        </tr>
                        <tr>
                            <th>����</th>
                            <td><input type="text" name="order" value="<?php echo $this->_tpl_vars['data']['displayorder']; ?>
" class="textinput w60" /></td>
                        </tr>
                        <tr>
                            <th style="vertical-align:top;">��ע��</th>
                            <td>
                                <textarea class="w270" name="remark"><?php echo $this->_tpl_vars['data']['remark']; ?>
</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th  style="vertical-align:top;">���ࣺ</th>
                            <td>                               
                                <select id="class_id" name="class_id">
                                    <option value="0">��ѡ��</option>
                                    <?php $_from = $this->_tpl_vars['class_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['class']):
?>
                                        <option value="<?php echo $this->_tpl_vars['class']['classid']; ?>
" <?php if ($this->_tpl_vars['class']['classid'] == $this->_tpl_vars['class_id']): ?>selected<?php endif; ?> ><?php echo $this->_tpl_vars['class']['classname']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                                <span id="class_id_span" style="display:none;"><?php echo $this->_tpl_vars['class_id']; ?>
</span>
                                <script>
                                    document.getElementById("class_id").value = document.getElementById("class_id_span").innerHTML;
                                </script>
                            </td>
                        </tr>                        
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="�ύ" /></a> �� <a href="?c=trade_site&a=index&classid=<?php echo $this->_tpl_vars['class_id']; ?>
">ȡ��</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->

<link href="static/datapicker/css/jquery-ui-1.7.1.custom.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="static/datapicker/ui.core.js"></script>
<script type="text/javascript" src="static/datapicker/jquery-ui-1.7.1.custom.min.js"></script>

<script type="text/javascript" src="static/qrx/qrxpcom.js"></script>
<script type="text/javascript" src="static/qrx/qrcpicker.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#start_time").datepicker();
	$("#end_time").datepicker();

	var colorstr = "";
	colorstr = document.getElementById("js_test_input").value;
	var cp = new QrColorPicker(colorstr);
	cp.onChange = function(color){
		document.getElementById("js_test_link").style.color = color;
		document.getElementById("js_test_input").value = color;
	}
	cp.onSelect = function(color){
		document.getElementById("js_test_link").style.color = color;
		document.getElementById("js_test_input").value = color;
	}
	document.getElementById("js_link_color").innerHTML = cp.getHTML();
});
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>