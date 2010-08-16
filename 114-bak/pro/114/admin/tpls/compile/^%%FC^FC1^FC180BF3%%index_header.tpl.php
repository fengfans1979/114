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
                <li class="clock"><a id="YlclockBtn" href="javascript:void(0)" target="_parent" onclick="Ylclock.Init()">闹钟</a></li>
                <li class="feedback"><a href="feedback">网友留言</a></li>
                <li class="sethome"><a href="javascript:void(0)" target="_parent" onclick="Yl.setHome(this)">设为主页</a></li>
                <li class="theme" id="style-quick"> <a rel="0" class="blue">0</a> <a rel="1" class="orange">1</a> <a rel="2" class="green">2</a> <a rel="3" class="purple">3</a> <a rel="4" class="blue2">4</a> </li>
                <li class="setSkin"><a href="javascript:void(0)" id="setting" target="_parent">个性设置</a></li>
            </ul>
            <ul id="meta" class="clearfix">
                <li id="date"></li>
                <li id="weather">
                    <p style="display:none"><a title="点击查看更多" id="wet" onclick="Weather.more()"><strong>#{city}</strong> #{img} #{title}</a> <a onclick="Weather.set()" href="javascript:void(0)" target="_parent">[定制城市]</a></p>
                </li>
                <li id="setCity" style="display:none">
                    <select id="w_pro" name="w_pro" onchange="Weather.loadCity(this.value)">
                        <option value="141">A 澳门</option>
                        <option value="119">A 安徽</option>
                        <option value="109">B 北京</option>
                        <option value="135">C 重庆</option>
                        <option value="123">F 福建</option>
                        <option value="127">G 广东</option>
                        <option value="128">G 广西</option>
                        <option value="137">G 贵州</option>
                        <option value="131">G 甘肃</option>
                        <option value="111">H 河北</option>
                        <option value="124">H 河南</option>
                        <option value="125">H 湖北</option>
                        <option value="126">H 湖南</option>
                        <option value="129">H 海南</option>
                        <option value="116">H 黑龙江</option>
                        <option value="122">J 江西</option>
                        <option value="120">J 江苏</option>
                        <option value="115">J 吉林</option>
                        <option value="114">L 辽宁</option>
                        <option value="132">N 宁夏</option>
                        <option value="113">N 内蒙古</option>
                        <option value="133">Q 青海</option>
                        <option value="117">S 上海</option>
                        <option value="118">S 山东</option>
                        <option value="112">S 山西</option>
                        <option value="130">S 陕西</option>
                        <option value="136">S 四川</option>
                        <option value="110">T 天津</option>
                        <option value="142">T 台湾</option>
                        <option value="139">X 西藏</option>
                        <option value="134">X 新疆</option>
                        <option value="140">X 香港</option>
                        <option value="138">Y 云南</option>
                        <option value="121">Z 浙江</option>
                    </select>
                    <select name="w_city" id="w_city">
                    </select>
                    <a class="set button" onclick="Weather.tick()">确 定</a> <a class="auto button" onclick="Weather.init(1)">自动判断</a> </li>
            </ul>
        </div>
        <div id="header" class="clearfix">
            <div id="banner"><script type="text/javascript" src="static/js/header.js"></script></div>
            <h1 id="logo"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent" title="114啦网址导航"><img src="static/images/logo.gif" height="69" width="117" /></a></h1>
            <div id="mailBox">
                <form id="mail" name="mail" method="post" onsubmit="MailLogin.sendMail();return false;" action="" target="_blank">
                    <ul>
                        <li>
                            <label for="mail_username">帐号：</label>
                            <input type="text" class="int" id="mail_username" onmousemove="this.focus()" name="mail_username" value="">
                        </li>
                        <li>
                            <label for="mail_options">邮箱：</label>
                            <select id="mail_options" style="padding-left:0" class="int">
                                <option selected="selected">--请选择邮箱--</option>
                                <option>@163.com 网易</option>
                                <option>@126.com 网易</option>
                                <option>@vip.163.com 网易</option>
                                <option>@sina.com 新浪</option>
                                <option>@2008.sina.com 新浪</option>
                                <option>@vip.sina.com 新浪</option>
                                <option>@yahoo.com.cn</option>
                                <option>@yahoo.cn</option>
                                <option>@sohu.com 搜狐</option>
                                <option>@tom.com</option>
                                <option style="color:#03C">@139.com</option>
                                <option>@188.com</option>
                                <option>@21cn.com</option>
                                <option>@yeah.net</option>
                                <option>------------------</option>
                                <option>天涯帐号</option>
                                <option>百度帐号</option>
                                <option>ChinaRen校友录</option>
                                <option>校内网</option>
                                <option>51.com</option>
                            </select>
                        </li>
                        <li>
                            <label for="mail_passwd">密码：</label>
                            <input class="int" id="mail_passwd" name="mail_passwd" onmousemove="this.focus()" type="password" value=""><input id="mail_btn" type="submit" value="登 录" />
                        </li>
                    </ul>
                </form>
            </div>
        </div><!--/ header-->