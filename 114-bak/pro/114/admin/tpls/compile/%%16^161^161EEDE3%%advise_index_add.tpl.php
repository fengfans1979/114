<?php /* Smarty version 2.6.25, created on 2010-08-06 12:28:30
         compiled from advise_index_add.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body id="main_page">

<div class="wrap">
    <div class="container">
        
        <div id="main">
            
            
            <div class="con box-green">
                <form action="<?php echo $this->_tpl_vars['sys']['subform']; ?>
" method="post" enctype="multipart/form-data">
                
                
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">���˳��</th>
                            <td><span class="b">
                              <input type=text name="vieworder" value="<?php echo $this->_tpl_vars['data']['vieworder']; ?>
" size="5">
                            
                              <input name="step2" type="hidden" id="step2" value="2">
                            <input name="action" type="hidden" id="action" value="<?php echo $this->_supers['request']['action']; ?>
">
                            </span></td>
                        </tr><tr>
                            <th class="w120">������ͣ�</th>
                            <td>
                                <select name="varname" id="bannerType">
<?php if ('header' == $this->_supers['request']['action'] || 'header' == $this->_tpl_vars['data']['varname']): ?>
                                    <option value="header" 	<?php if ('header' == $this->_supers['request']['action'] || 'header' == $this->_tpl_vars['data']['varname']): ?> selected <?php endif; ?> 	>�������</option>
<?php endif; ?><?php if ('footer' == $this->_supers['request']['action'] || 'footer' == $this->_tpl_vars['data']['varname']): ?>
                                    <option value="footer" 		<?php if ('footer' == $this->_supers['request']['action'] || 'footer' == $this->_tpl_vars['data']['varname']): ?> selected <?php endif; ?> 	>��վ�Ϸ��Ƽ���</option>
<?php endif; ?><?php if ('notice' == $this->_supers['request']['action'] || 'notice' == $this->_tpl_vars['data']['varname']): ?>
                                    <option value="notice" 		<?php if ('notice' == $this->_supers['request']['action'] || 'notice' == $this->_tpl_vars['data']['varname']): ?> selected <?php endif; ?> 	>��վ�·��Ƽ���</option>
<?php endif; ?>

                                </select>&nbsp;&nbsp;
                                <a href="#" id="viewBanner">���λ�鿴</a>
                                <a href="#" id="hideBanner" style="display:none;">֪���ˣ��ر�</a>
                              <div class="clear"></div>
                                <div class="bannerOffset"  style="display:none" id="header"><img src="static/images/banner.gif" width="364" height="271" /></div>
                                <div class="bannerOffset" style="display:none" id="footer"><img src="static/images/keyword_1.gif" width="364" height="271" /></div>
                                <div class="bannerOffset" style="display:none" id="notice"><img src="static/images/keyword_2.gif" width="364" height="271" /></div>
                                <script type="text/javascript">

									$("#viewBanner,#hideBanner").bind("click",function(){
										$(this).hide();
										if(this.id=="viewBanner"){
											$("#hideBanner").show();
										}else{
											$("#viewBanner").show();
										}
										$("#"+$("#bannerType").val()).toggle()
									});
									$("body").bind("click",function(e){
										var obj = e.srcElement || e.target;
										if(obj.id!=="viewBanner"){
											$("#"+$("#bannerType").val()).hide();
											$("#hideBanner").hide();
											$("#viewBanner").show();
										}
									})
									
									
                                </script>
                          </td>
                        </tr>
                        <tr>
                            <th>���ʱ�䣺</th>
                            <td><input name="config[starttime]" type="text" class="textinput w120" id="starttime" value="<?php echo $this->_tpl_vars['data']['config']['starttime']; ?>
" />&nbsp; �� <input name="config[endtime]" type="text" class="textinput w120" id="endtime" value="<?php echo $this->_tpl_vars['data']['config']['endtime']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th style="vertical-align:top;">���������</th>
                            <td>
                                <textarea name="title" class="w270" id="title"><?php echo $this->_tpl_vars['data']['title']; ?>
</textarea>
                          </td>
                        </tr>
                        <tr>
                            <th>չʾ��ʽ��</th>
                            <td>
                                <input name="config[style]" type="radio" id="display_0" onclick="showTable(0)" value="code" <?php if ('header' == $this->_supers['request']['action'] || 'code' == $this->_tpl_vars['data']['config']['style']): ?> checked="checked" <?php endif; ?>  /> <label for="display_0">����</label>
                                <input name="config[style]" type="radio" id="display_1" onclick="showTable(1)" value="txt" 
                                <?php if (( ! $this->_tpl_vars['data']['config']['style'] && ( 'footer' == $this->_supers['request']['action'] || 'notice' == $this->_supers['request']['action'] ) ) || $this->_tpl_vars['data']['config']['style'] == 'txt'): ?> 
                                checked="checked" 
                                <?php endif; ?>  /> 
                                <label for="display_1">����</label>
                                <input name="config[style]" type="radio" id="display_2" onclick="showTable(2)" value="img" 
                                <?php if (( ! $this->_tpl_vars['data']['config']['style'] && 'footer' != $this->_supers['request']['action'] && 'notice' != $this->_supers['request']['action'] && 'header' != $this->_supers['request']['action'] ) || 'img' == $this->_tpl_vars['data']['config']['style']): ?> 
                                checked="checked" 
                                <?php endif; ?> 
                                 /> <label for="display_2">ͼƬ</label>
                                <input name="config[style]" type="radio" id="display_3" onclick="showTable(3)" value="flash" <?php if ('flash' == $this->_tpl_vars['data']['config']['style']): ?> checked="checked" <?php endif; ?>  /> <label for="display_3">Flash</label>
                          </td>
                        </tr>
                    </table>
                    <div id="js_show_box"></div>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="<?php if ($this->_supers['request']['id']): ?>����<?php else: ?>���<?php endif; ?>" /> �� <a href="<?php echo $this->_tpl_vars['sys']['goback']; ?>
">ȡ��</a>
     
                      <input name="step" type="hidden" id="step" value="2">
                        <input name="id" type="hidden" id="id" value="<?php echo $this->_tpl_vars['data']['id']; ?>
">
                    </div>
                </div>
                </form>
                <div id="js_cache_box" style="display:none;">
                	<table class="table-font" id="table_0">
                      <tr>
                            <th  class="w120" style="vertical-align:top;">�����룺</th>
                            <td>
                                <textarea name="config[htmlcode]" class="w270" style="height: 300px; float:left; margin-right:15px;" id="config[htmlcode]"><?php echo $this->_tpl_vars['data']['config']['htmlcode']; ?>
</textarea>
                                <?php if ('header' == $this->_supers['request']['action'] || 'header' == $this->_tpl_vars['data']['varname']): ?>
                                <div style=" float:left;"><a id="view_example" href="javascript:void(0)" target="_parent">����鿴���÷���</a></div>
                             
                             
              
<div id="setting_example" style="border:1px solid #ccc; padding:10px; width:520px; top:50px; left:430px; padding-top:30px; position:absolute; background-color:#fff; display:none;">
<a id="close_example" style="position:absolute; top:10px; right:10px;">�ر� X</a>
<strong>����һ</strong><br>

�����������ͼƬ������Ӧ��ȣ�������أ�                                <br>

<code style="background:#FFF2BF; padding:5px; display:block;">
&lt;a href=&quot;http://www.114la.com/&quot;&gt;&lt;img src=&quot;http://www.114la.com/image/115-u_1.gif&quot; /&gt;&lt;/a&gt;<br />
&lt;a href=&quot;http://u.115.com/&quot;&gt;&lt;img src=&quot;http://www.114la.com/image/115-u_1.gif&quot; /&gt;&lt;/a&gt;<br />
&lt;a href=&quot;http://www.114la.com/&quot;&gt;&lt;img src=&quot;http://www.114la.com/image/115-u_1.gif&quot; /&gt;&lt;/a&gt;
</code>
<br>
<br>
<strong>������</strong><br>

CSS��������ĸ�������Ӧ��ȣ�������أ�                                
<code style="background:#FFF2BF; padding:5px; display:block;">
&lt;ul class=&quot;clearfix&quot;&gt;<br>
&lt;li style=&quot;width:600px; height:60px; float:left;&quot;&gt;<br>
&lt;div style=&quot;float:left; width:120px; height:60px; overflow:hidden; margin-right:5px;&quot;&gt; ����������Ĺ����� 120x60 &lt;/div&gt;<br>
&lt;div style=&quot;float:left; width:468px; height:60px; overflow:hidden;&quot;&gt; ����������Ĺ����� 468x60 &lt;/div&gt;<br>
&lt;/li&gt;<br>
&lt;li style=&quot;width:120; height:60px; float:left;&quot;&gt; ����������Ĺ����� 120x60 &lt;/li&gt;<br>
&lt;li style=&quot;width:78px; height:60px; float:left;&quot;&gt; ����������Ĺ����� 78x60 &lt;/li&gt;<br>
&lt;/ul&gt;
</code>
<br>

<p style="color:red;">ע������桢��׼�桢������  �Ĺ��λ��ȷֱ���  618px�� 720px�� 798px<br>
����Ĳ�ֹ��λ���������������ɷ��ӡ�
</p>
                           
                                </div>
                                
                                <script type="text/javascript">
                             	$("#view_example").bind("click",function(){
										
										$("#setting_example").show();
					
								
								});
								$("#close_example").bind("click",function(){
									$("#setting_example").hide();
	
								})
                             </script> 
                    
                            <?php endif; ?>
                                
                            </td>
                            
                        </tr>
                    </table>
                  <table class="table-font" id="table_1">
                        <tr>
                            <th class="w120">�������֣�</th>
                            <td><input name="config[title]" type="text" class="textinput w270" id="config[title]" value="<?php echo $this->_tpl_vars['data']['config']['title']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th class="w120">������ӣ�</th>
                            <td><input name="config[link]" type="text" class="textinput w270" id="config[link]" value="<?php echo $this->_tpl_vars['data']['config']['link']; ?>
" /></td>
                        </tr>
                        <tr>
                            <th class="w120">������ɫ��</th>
                            <td>
                                <span id="js_link_color" style="margin-right:10px;"></span>
                                Ч��Ԥ����<a href="#"  id="js_test_link" >��վ����</a>
                                
                                <input id="js_test_input" name="config[color]" type="hidden" value="<?php echo $this->_tpl_vars['data']['config']['color']; ?>
" />
                            </td>
                        </tr>
                    </table>
                  <table class="table-font" id="table_2" >
                            <tr>
                                <th  class="w120" >ͼƬ��ַ��</th>
                                <td>
                                    <input name="config[url]" type="text" class="textinput w270" id="config[url]" value="<?php echo $this->_tpl_vars['data']['config']['url']; ?>
" />
                                </td>
                            </tr>
                            <tr>
                                <th>������ӣ�</th>
                                <td>
                                    <input name="config[link]" type="text" class="textinput w270" id="config[link]" value="<?php echo $this->_tpl_vars['data']['config']['link']; ?>
" />
                                </td>
                            </tr>
                            <tr>
                                <th style="vertical-align:top;">ͼƬ������</th>
                                <td>
                                    <textarea name="config[descrip]" class="w270" id="config[descrip]"><?php echo $this->_tpl_vars['data']['config']['descrip']; ?>
</textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>ͼƬ��ȣ�</th>
                                <td>
                                    <input name="config[width]" type="text" class="textinput w60" id="config[width]" value="<?php echo $this->_tpl_vars['data']['config']['width']; ?>
" /> px
                                </td>
                            </tr>
                            <tr>
                                <th>ͼƬ�߶ȣ�</th>
                                <td>
                                    <input name="config[height]" type="text" class="textinput w60" id="config[height]" value="<?php echo $this->_tpl_vars['data']['config']['height']; ?>
" /> px
                                </td>
                            </tr>
                        </table>
                  <table class="table-font" id="table_3">
                            <tr>
                                <th class="w120">Flash��ַ��</th>
                                <td>
                                    <input name="config[link]" type="text" class="textinput w270" id="config[link]" value="<?php echo $this->_tpl_vars['data']['config']['link']; ?>
" /> px
                                </td>
                            </tr>
                            <tr>
                                <th class="w120">Flash��ȣ�</th>
                                <td>
                                    <input name="config[width]" type="text" class="textinput w60" id="config[width]" value="<?php echo $this->_tpl_vars['data']['config']['width']; ?>
" /> px
                                </td>
                            </tr>
                            <tr>
                                <th class="w120">Flash�߶ȣ�</th>
                                <td>
                                    <input name="config[height]" type="text" class="textinput w60" id="config[height]" value="<?php echo $this->_tpl_vars['data']['config']['height']; ?>
" /> px
                                </td>
                            </tr>
                        </table>
                        
                </div>
                <script type="text/javascript">
					var showTable = function(key){
						$("#js_show_box").find("table").each(function(i){
							$(this).appendTo("#js_cache_box");
						});
						$("#table_" + key).appendTo("#js_show_box");
						/*for(var i = 0; i < 4; i++){
							var tb = document.getElementById("table_" + i);
							tb.style.display = "none";
						}
						document.getElementById("table_" + key).style.display = "";*/
					}
					/*$(document).ready(function(){
						var inputArr = document.getElementsByName("display");
						for(var i = 0; i < inputArr.length; i++){
							if(inputArr[i].checked){
								var id = inputArr[i].id;
								showTable(id.substring(id.length-1,id.length));
							}
						}
					});*/
				</script>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="static/datapicker/css/jquery-ui-1.7.1.custom.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="static/datapicker/ui.core.js"></script>
<script type="text/javascript" src="static/datapicker/jquery-ui-1.7.1.custom.min.js"></script>

<script type="text/javascript" src="static/qrx/qrxpcom.js"></script>
<script type="text/javascript" src="static/qrx/qrcpicker.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#starttime").datepicker();
	$("#endtime").datepicker();
	showTable(<?php if ('header' == $this->_supers['request']['action'] || $this->_tpl_vars['data']['config']['style'] == 'code'): ?>0<?php elseif (( ! $this->_tpl_vars['data']['config']['style'] && ( 'footer' == $this->_supers['request']['action'] || 'notice' == $this->_supers['request']['action'] ) ) || $this->_tpl_vars['data']['config']['style'] == 'txt'): ?>1<?php elseif (( ! $this->_tpl_vars['data']['config']['style'] && 'footer' != $this->_supers['request']['action'] && 'notice' != $this->_supers['request']['action'] && 'header' != $this->_supers['request']['action'] ) || 'img' == $this->_tpl_vars['data']['config']['style']): ?>2<?php elseif ($this->_tpl_vars['data']['config']['style'] == 'flash'): ?>3<?php endif; ?>);

	var colorstr = "";
	colorstr = document.getElementById("js_test_input").value;
	var cp = new QrColorPicker(colorstr);
	cp.onChange = function(color){
		document.getElementById("js_test_link").style.color = color;
		document.getElementById("js_test_input").value = color;
	}
	document.getElementById("js_link_color").innerHTML = cp.getHTML();
});
</script>