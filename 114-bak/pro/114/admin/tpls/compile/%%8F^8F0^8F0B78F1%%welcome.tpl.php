<?php /* Smarty version 2.6.25, created on 2010-08-01 16:52:24
         compiled from welcome.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body id="main_page">

<div id="nav" style="display:none">
<dl>
    <dt>��ǰλ�ã�</dt>
    <dd class="link"><a href="#">��ҳ����</a></dd>
    <dd>����̨</dd>
</dl>
</div>
<script type="text/javascript">
	var nav = document.getElementById("nav");
	var pnav = window.parent.document.getElementById("nav")
	pnav.innerHTML = nav.innerHTML;
</script>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con">
                <?php if ($this->_tpl_vars['data']['site_new']): ?>
                <div class="tips" style="margin-top:10px; border-top:1px solid #F93">
                                            Ŀǰ�� <strong class="red"><?php echo $this->_tpl_vars['data']['site_new']; ?>
</strong> �����������¼���� <a href="<?php echo $this->_tpl_vars['data']['site_url']; ?>
">�������� &raquo;</a>
                </div>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['data']['safe_notice']): ?>

		  <div class="table">
                    <h2 class="th">114����ַ������վϵͳ  ������Ϣ</h2>       
                    <table><tr><td>
                        <p>
                            ��ӭʹ������ľ��114����ַ������վϵͳ����ǰ�汾�ţ�V<?php echo $this->_tpl_vars['curver']; ?>
��������ʱ�䣺<?php echo $this->_tpl_vars['curtime']; ?>
��
                            <br />
                           <!-- <a href='http://www.ylmf.net/thread.php?fid=346' target='_blank'>114����ַ������վϵͳ��Դ����ר��&gt;&gt;</a>-->
                        </p>
                        <div class="table" id="version_notice" style="display:none;background-color:#fff">            
                            <p class="tips"></p>
                        </div>
                    </td></tr></table>
                </div>

                <div class="table">
                    <h2 class="th">��ȫ��ʾ</h2>       
                    <div class="tips">
                        <p>Ϊ��ʹ�ø���ȫ������������̨����Ŀ¼������Ĭ�ϵ�  <strong>admin</strong>���޸�Ϊ����Ŀ¼���� <strong>�޸Ĳ������£�</strong></p>
			 <p>1���޸�ftp��Ŀ¼�µ� <strong>init.php</strong> �ļ������� <strong>10</strong> �У����������һ��������� <strong>admin</strong>��Сд��ĸ�� �޸�Ϊ�µ�Ŀ¼����</p>
                        <p>2���޸�ftp��Ŀ¼�µ� <strong>admin</strong> Ŀ¼��Ϊ�µ�Ŀ¼����</p>
                    </div>
                </div>
                <?php endif; ?>
                
              
                
                <div class="table">
                    <h2 class="th">������������Ϣ <span class="head"><?php echo $this->_supers['server']['SERVER_NAME']; ?>
<?php echo $this->_tpl_vars['data']['serverip']; ?>
 &nbsp;<?php echo $this->_tpl_vars['data']['systime']; ?>
</span></h2>                
                    <table>
                        <tr>
                        <td colspan="2"> System:<?php echo $this->_tpl_vars['data']['sysinfo']; ?>
</td>
                        <td colspan="2">Web server:<span class="b"><?php echo $this->_supers['server']['SERVER_SOFTWARE']; ?>
</span></td>
                        <td colspan="2">PHP Version:<?php echo $this->_tpl_vars['data']['phpversion']; ?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">Mysql  Version:<?php echo $this->_tpl_vars['data']['dbversion']; ?>
</td>
                        <td colspan="2"> display_errors:<?php echo $this->_tpl_vars['data']['dispalyerror']; ?>
</td>
                        <td colspan="2">Server API:<?php echo $this->_tpl_vars['data']['serverapi']; ?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">PHP Safe: <?php echo $this->_tpl_vars['data']['phpsafe']; ?>
 </td>
                        <td colspan="2">Session Support:<?php echo $this->_tpl_vars['data']['sessionsp']; ?>
</td>
                        <td colspan="2">Cookie Support:<?php echo $this->_tpl_vars['data']['cookiesp']; ?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">Zend Optimizer Support:<?php echo $this->_tpl_vars['data']['zendoptsp']; ?>
</td>
                        <td colspan="2">eAccelerator Support:<?php echo $this->_tpl_vars['data']['eaccsp']; ?>
</td>
                        <td colspan="2">Xcache Support:<?php echo $this->_tpl_vars['data']['xcachesp']; ?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">register_globals:<?php echo $this->_tpl_vars['data']['registerglobal']; ?>
</td>
                        <td colspan="2">magic_quotes_gpc:<?php echo $this->_tpl_vars['data']['mqqsp']; ?>
</td>
                        <td colspan="2">magic_quotes_runtime:<?php echo $this->_tpl_vars['data']['mprsp']; ?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">upload_max_filesize:<?php echo $this->_tpl_vars['data']['maxupsize']; ?>
</td>
                        <td colspan="2">post_max_size:<?php echo $this->_tpl_vars['data']['maxpostsize']; ?>
</td>
                        <td colspan="2">max_execution_time:<?php echo $this->_tpl_vars['data']['maxexectime']; ?>
</td>
                        </tr>
                        <tr>
                        <td width="12%">allow_url_fopen:<?php echo $this->_tpl_vars['data']['allowurlopen']; ?>
</td>
                        <td width="13%">Curl Support:<?php echo $this->_tpl_vars['data']['curlsp']; ?>
</td>
                        <td width="12%">Iconv Support:<?php echo $this->_tpl_vars['data']['iconvsp']; ?>
</td>
                        <td width="13%">Zlib Support:<?php echo $this->_tpl_vars['data']['zlibsp']; ?>
</td>
                        <td width="12%">GD Support:<?php echo $this->_tpl_vars['data']['gdsp']; ?>
</td>
                        <td width="13%">DBA Support:<?php echo $this->_tpl_vars['data']['dbasp']; ?>
</td>
                        </tr>
                    </table>
                </div>                
                <div class="table">
                    <h2 class="th">ͳ����Ϣ</h2>                
                    <table>
                    <tr>
                    <td> ��ǰվ����:<?php echo $this->_tpl_vars['data']['sitesum']; ?>
</td>
                    <td>���ݿ��С:<?php echo $this->_tpl_vars['data']['datasize']; ?>
</td>
                    </tr>
                    </table>
                </div>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
</div><!--/ wrap-->
<script type="text/javascript">
$(document).ready(function()
{
    $.get('?c=update&t', function(data)
    {
        if(data.length < 50)
        {
            return ;
        }
        var result = eval("(" + data + ")");
        var tpl = nstyle = '';
        if( result.upitems != null )
        {
            tpl += "<div style='width:98%'><form name='fup' action='?c=update&a=getlist' method='post'>";
			      tpl += "<input type='hidden' name='lasttime' value='"+ result.lasttime +"' />";
			      tpl += "<input type='hidden' name='upitems' value='"+ result.upitems +"' />";
			      tpl += "<div class='upinfotitle'><strong>��ǰ���õĸ����У�</strong></div>";
			      for(i=0; i<result.vers.length; i++)
			      {
				        nstyle = result.vers[i].issafe==1 ? "color:red;" : "";
				        tpl += "<div style='border-bottom:1px dashed #bbb;"+ nstyle +"' class='verline'>��" + (result.vers[i].issafe==1 ? "��ȫ����" : "��ͨ����") + "��";
				        tpl += result.vers[i].vtime + "������˵����"+ result.vers[i].vmsg +"</div>";
			      }
			      tpl += "<div style='line-height:32px'><input type='submit' name='sb1' value=' ����˻�ȡ���и����ļ���Ȼ��ѡ��װ ' class='coolbg' style='cursor:pointer' />\r\n";
			      tpl += " &nbsp; <input type='button' name='sb2' value=' ������Щ���� ' onclick=\"location='?c=update&a=skinupdate&lasttime="+result.lasttime+"'\" class='coolbg'  style='cursor:pointer' /></div>\r\n";
			      tpl += "</form></div>";
			      $('#version_notice .tips').html(tpl);
            $('#version_notice').slideDown('slow');
        }
   });
});
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>