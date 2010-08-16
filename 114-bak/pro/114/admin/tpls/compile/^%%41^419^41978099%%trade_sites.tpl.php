<?php /* Smarty version 2.6.25, created on 2010-08-01 16:52:44
         compiled from trade_sites.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['class_meta_keyword']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['class_meta_description']; ?>
" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link href="<?php echo $this->_tpl_vars['URL']; ?>
/themes/default/page.css" rel="stylesheet" type="text/css" />
<link id="skin" href="/themes/default/skins/blue/page.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/themes/default/js/ylmf.cai.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/themes/default/js/config.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['URL']; ?>
/themes/default/js/base.js"></script>
<script type="text/javascript">
var PageSkin = (function(){
	var PageskinCookie = userCookie.init();
	if(PageskinCookie.is("style")){
		var skins = ["blue","orange","green","purple","blue2"];
		var skinName = skins[Number(PageskinCookie.get("style"))];
		document.getElementById("skin").href = "<?php echo $this->_tpl_vars['URL']; ?>
/themes/default/skins/"+skinName+"/page.css";
	}
	return{
		cookie:PageskinCookie
	}
})()

</script>

<style type="text/css">
			#hangye { width:940px; margin:10px auto;}
			#hangye th { width:120px; text-align:center;border-left:1px solid #fff;border-right:1px solid #fff;}
			#hangye th.more2 { width:80px; font-weight:normal;  }
            #hangye th a{color:#07519A }
			#hangye td { text-align:center}
			#hangye td a { margin: 0 15px;}
			#hangye .bk { background-color:#EAF5FF;}
			#hangye tr { height:30px; line-height:30px;}
		</style>
<base target="_blank" />
</head>
<body>
<div id="page">
<script type="text/javascript">
	(function(){
		if(PageSkin.cookie.is("bg")){
			var value = PageSkin.cookie.get("bg");
			var img = "<?php echo $this->_tpl_vars['URL']; ?>
/themes/default/images/bg/"+Yl.trim(value);
			if(Yl.trim(value)!=="default"){
				$("#page").setStyle("background","url("+img+")");
			}else{
				$("#page").setStyle("background","");
			}
		}else{
			return;
		}
	})()
</script>
    <div class="wrap">
        <div id="header" class="clearfix">
                <div id="search" class="clearfix">
                <div id="search-menu" class="clearfix">
                    <ul class="clearfix">
                        <li><a rel="s115">115聚搜</a></li>
                        <li class="current"><a rel="web">网 页</a></li>
                        <li><a rel="mp3">MP3</a></li>
                        <li><a rel="v115">影 视</a></li>
                        <li><a rel="image">图 片</a></li>
                        <li><a rel="zhidao">知 道</a></li>
                    </ul>
                    <ul  class="clearfix" style="margin:0">
                        <li id="search-menu-more"><span><a class="more" id="smore">更 多</a></span>
                            <div id="smp"> <a href=" http://video.baidu.com/?tn=lqowen_1_pg">视 频</a> <a href=" http://tieba.baidu.com/?source=114la.com">贴 吧</a> <a href=" http://baike.baidu.com/?source=114la.com">百 科</a> <a href=" http://stock.baidu.com/?source=114la.com">股 票</a> <a href=" http://u.115.com/?11413">网 盘</a>  <a href=" http://fav.115.com/?source=114la.com">收藏夹</a>  <a href=" http://tool.115.com/?11413">工具箱</a></div>
                        </li>
                    </ul>
                </div>
                <div id="search-form" class="bd">
                <div class="search-bg">
                    <div class="con">
                    <div id="sengine" class="clearfix">
                        <form id="searchForm" action="http://www.baidu.com/baidu" method="get" target="_blank">
                            <label for="baidu"><a href="#"><img src="<?php echo $this->_tpl_vars['URL']; ?>
/static/images/sl/logox3.gif" width="79" height="27" /></a></label>
                            <div class="input">
                                <input type="text" id="searchInput" name="wd" autocomplete="off" />
                            </div>
                            <input type="submit" id="searchBtn" class="btn" value="百度一下" />
                            <input type="hidden" name="tn" value="lqowen_1_pg" />
                           
                        </form>
                     </div></div>   
                        
                        
                    </div>
                    <!--/ sengine-->
                    
                </div>
            </div>
            <h1 id="logo"><a href="#"><img src="/static/images/logo.gif" height="69" width="117" /></a></h1>
            <div id="city" style="display:none">
               
            </div><!--/ city-->
            
            
        </div><!--/ header-->
        
        <div id="guide" class="bd">
    <dl>
    <dt>您当前的位置：</dt>
    <dd><a href="<?php echo $this->_tpl_vars['URL']; ?>
" target="_parent">首页</a><em>&gt;</em></dd>
    <dd>行业网站</dd>

    </dl>
    <ul>
    <li class="sethome"><a href="javascript:void(0)"  onclick="Yl.setHome(this,'<?php echo $this->_tpl_vars['URL']; ?>
')" target="_parent" class="gray6">设本站为主页</a></li>
    <li class="feedback"><a href="<?php echo $this->_tpl_vars['URL']; ?>
/feedback/" class="gray6">网友留言</a></li>
    </ul>
    </div><!--/ guide-->
        
    <div class="bd" id="cate">
    <h3>行业网站</h2>
    <table border="0" id="hangye" cellspacing="0" cellpadding="0">

<tbody>
<?php $_from = $this->_tpl_vars['trade_class_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['n'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['n']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['parent']):
        $this->_foreach['n']['iteration']++;
?>
  <tr <?php if ($this->_foreach['n']['iteration'] % 2 == 0): ?> class="bk"<?php endif; ?>>
    <th><a><?php echo $this->_tpl_vars['parent']['classname']; ?>
</a></th>
    <td>
    <?php $_from = $this->_tpl_vars['parent']['sites']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
        <a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" target="_blank" <?php if ($this->_tpl_vars['v']['namecolor']): ?> style="color:<?php echo $this->_tpl_vars['v']['namecolor']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['v']['name']; ?>
</a>
    <?php endforeach; endif; unset($_from); ?>
    </td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
</tbody>
</table>

    	
    
    
	</div>

        
        <div id="meta" class="clearfix bd">
        	<p>
            <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="back"><span>返回</span><em class="fl">返回</em></a>
        	<a class="close" href="javascript:closeWin()" target="_self"><span>关闭</span><em class="fl">关闭</em></a>
            </p>

        </div>
        <div id="gotop" class="clearfix"><a href="#page" target="_parent">返回顶部</a><br />
<br />
</div>
     
      
        
        <a href="javascript:void(0)" target="_self" id="addmyfav" style="display:none;" title="添加到自定义收藏夹">加入首页自定义收藏</a>
        
        
    </div><!--/ wrap-->
</div>
<!--/ page-->
<script type="text/javascript">
	function closeWin(){
	   window.open("","_self");
	   window.top.opener=null;
	   window.top.close();
	 }
</script>
<script type="text/javascript" src="/themes/default/js/page.js"></script>
<div style="display:none"><?php echo $this->_tpl_vars['tongji']; ?>
</div>
</body>
</html>