<?php /* Smarty version 2.6.25, created on 2010-08-01 16:52:31
         compiled from index_header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['index_meta_keyword']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['index_meta_description']; ?>
" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link href="themes/default/base.css" rel="stylesheet" type="text/css" />
<link id="skin" href="themes/default/skins/blue/style.css" rel="stylesheet" type="text/css" />
<link id="font" href="" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="themes/default/js/ylmf.cai.js"></script>
<script type="text/javascript" src="themes/default/js/config.js"></script>
<script type="text/javascript" src="themes/default/js/base.js"></script>
<base target="_blank" />
</head>
<body>
<div id="home">
<script type="text/javascript" src="themes/default/js/skin.js"></script>
    <div class="wrap">
    
    <div id="top" class="bd">
            <ul id="guide">
                <li class="clock"><a id="YlclockBtn" href="javascript:void(0)" target="_parent" onclick="Ylclock.Init()">����</a></li>
                <li class="feedback"><a href="feedback">��������</a></li>
                <li class="sethome"><a href="javascript:void(0)" target="_parent" onclick="Yl.setHome(this)">��Ϊ��ҳ</a></li>
                <li class="theme" id="style-quick"> <a rel="0" class="blue">0</a> <a rel="1" class="orange">1</a> <a rel="2" class="green">2</a> <a rel="3" class="purple">3</a> <a rel="4" class="blue2">4</a> </li>
                <li class="setSkin"><a href="javascript:void(0)" id="setting" target="_parent">��������</a></li>
            </ul>
            <ul id="meta" class="clearfix">
                <li id="date"></li>
                <li id="weather">
                    <p style="display:none"><a title="����鿴����" id="wet" onclick="Weather.more()"><strong>#{city}</strong> #{img} #{title}</a> <a onclick="Weather.set()" href="javascript:void(0)" target="_parent">[���Ƴ���]</a></p>
                </li>
                <li id="setCity" style="display:none">
                    <select id="w_pro" name="w_pro" onchange="Weather.loadCity(this.value)">
                        <option value="141">A ����</option>
                        <option value="119">A ����</option>
                        <option value="109">B ����</option>
                        <option value="135">C ����</option>
                        <option value="123">F ����</option>
                        <option value="127">G �㶫</option>
                        <option value="128">G ����</option>
                        <option value="137">G ����</option>
                        <option value="131">G ����</option>
                        <option value="111">H �ӱ�</option>
                        <option value="124">H ����</option>
                        <option value="125">H ����</option>
                        <option value="126">H ����</option>
                        <option value="129">H ����</option>
                        <option value="116">H ������</option>
                        <option value="122">J ����</option>
                        <option value="120">J ����</option>
                        <option value="115">J ����</option>
                        <option value="114">L ����</option>
                        <option value="132">N ����</option>
                        <option value="113">N ���ɹ�</option>
                        <option value="133">Q �ຣ</option>
                        <option value="117">S �Ϻ�</option>
                        <option value="118">S ɽ��</option>
                        <option value="112">S ɽ��</option>
                        <option value="130">S ����</option>
                        <option value="136">S �Ĵ�</option>
                        <option value="110">T ���</option>
                        <option value="142">T ̨��</option>
                        <option value="139">X ����</option>
                        <option value="134">X �½�</option>
                        <option value="140">X ���</option>
                        <option value="138">Y ����</option>
                        <option value="121">Z �㽭</option>
                    </select>
                    <select name="w_city" id="w_city">
                    </select>
                    <a class="set button" onclick="Weather.tick()">ȷ ��</a> <a class="auto button" onclick="Weather.init(1)">�Զ��ж�</a> </li>
            </ul>
        </div>
        <div id="header" class="clearfix">
            <div id="banner"><script type="text/javascript" src="static/js/header.js"></script></div>
            <h1 id="logo"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent" title="114����ַ����"><img src="static/images/logo.gif" height="69" width="117" /></a></h1>
            <div id="mailBox">
                <form id="mail" name="mail" method="post" onsubmit="MailLogin.sendMail();return false;" action="" target="_blank">
                    <ul>
                        <li>
                            <label for="mail_username">�ʺţ�</label>
                            <input type="text" class="int" id="mail_username" onmousemove="this.focus()" name="mail_username" value="">
                        </li>
                        <li>
                            <label for="mail_options">���䣺</label>
                            <select id="mail_options" style="padding-left:0" class="int">
                                <option selected="selected">--��ѡ������--</option>
                                <option>@163.com ����</option>
                                <option>@126.com ����</option>
                                <option>@vip.163.com ����</option>
                                <option>@sina.com ����</option>
                                <option>@2008.sina.com ����</option>
                                <option>@vip.sina.com ����</option>
                                <option>@yahoo.com.cn</option>
                                <option>@yahoo.cn</option>
                                <option>@sohu.com �Ѻ�</option>
                                <option>@tom.com</option>
                                <option style="color:#03C">@139.com</option>
                                <option>@188.com</option>
                                <option>@21cn.com</option>
                                <option>@yeah.net</option>
                                <option>------------------</option>
                                <option>�����ʺ�</option>
                                <option>�ٶ��ʺ�</option>
                                <option>ChinaRenУ��¼</option>
                                <option>У����</option>
                                <option>51.com</option>
                            </select>
                        </li>
                        <li>
                            <label for="mail_passwd">���룺</label>
                            <input class="int" id="mail_passwd" name="mail_passwd" onmousemove="this.focus()" type="password" value=""><input id="mail_btn" type="submit" value="�� ¼" />
                        </li>
                    </ul>
                </form>
            </div>
        </div><!--/ header-->