<{include file='train_header.tpl'}>
        <div id="content">
                <div id="search" class="box">
                	<div id="search-menu">
                    	<ul class="cl">
                        	<li><a href="javascript:void(0)" <{if $a eq '3'}>class="current"<{/if}> rel="form0">站站查询</a></li>
                            <li><a href="javascript:void(0)" <{if $a eq '1'}>class="current"<{/if}> rel="form1">车站查询</a></li>
                            <li><a href="javascript:void(0)" <{if $a eq '2'}>class="current"<{/if}> rel="form2">车次查询</a></li>
                        </ul>
                    </div>
                    
                    <div id="search-form">
                    	<div id="form0" class="con" <{if $a ne '3'}>style="display:none"<{/if}> >
                            <form>
                            	<div class="cl">
                                <input type="hidden"  name='a' value='3' />                            
                                <label for="k1">输入车站名</label>
                                <input type="text" name='k1' id="k1" class="int" autocomplete="off" style="width:150px" value="<{$keyword1|default:'请输入拼音或汉字'}>" />
                                <label for="k2" class="to">到</label>
                                <input type="text" name='k2' id="k2" class="int" autocomplete="off" style="width:150px; margin-left:10px;"  value="<{$keyword2|default:'请输入拼音或汉字'}>" />
                                <input type="submit" class="btn" value="查 询" />
                                </div>
                            </form>
                            <div class="tags">
                            	<span>热门站点：</span>
                                <a href="?a=3&k1=%E5%8C%97%E4%BA%AC&k2=%E5%93%88%E5%B0%94%E6%BB%A8">北京到哈尔滨</a>
                                <a href="?a=3&k1=北京&k2=上海">北京到上海</a>
                                <a href="?a=3&k1=深圳&k2=武昌">深圳到武昌</a>
                                <a href="?a=3&k1=广州&k2=重庆">广州到重庆</a>
                                <a href="?a=3&k1=深圳&k2=长沙">深圳到长沙</a>
                            </div>
                        </div>
                        <div id="form1" class="con" <{if ($a ne '1') and ($a ne '5') and ($a ne '6')}>style="display:none"<{/if}>>
                            <form>
                            	<div class="cl">
                                <label for="zhan">输入车站名</label>
                                <input type="hidden"  name='a' value='1' />
                                <input type="text" name='k' id="zhan" class="int" autocomplete="off"  value="<{$keyword3|default:'请输入拼音或汉字'}>" />
                                <input type="submit" class="btn" value="查 询" />
                                </div>
                            </form>
                            <div class="tags">
                            	<span>热门城市：</span>
                                <a href="?a=1&k=北京">北京站</a>
                                <a href="?a=1&k=上海">上海站</a>
                                <a href="?a=1&k=广州">广州站</a>
                                <a href="?a=1&k=深圳">深圳站</a>
                                <a href="?a=1&k=西安">西安站</a>
                                <a href="?a=1&k=杭州">杭州站</a>
                                <a href="?a=1&k=成都">成都站</a>
                            </div>
                        </div>
                        <div id="form2" class="con" <{if $a ne '2'}>style="display:none"<{/if}> >
                        	<form>
                            	<div class="cl">
                                <label for="num">输入车次</label>
                                <input type="hidden"  name='a' value='2' />                            
                                <input type="text" name='k' id="num" class="int" autocomplete="off" value="<{$keyword4|default:'请输入车次'}>" />
                                <input type="submit" class="btn" value="查 询" />
                                </div>
                            </form>
                            <div class="tags">
                            	<span>热门车次：</span>
                                <a href="?a=2&k=T9">T9</a>
                                <a href="?a=2&k=T69">T69</a>
                                <a href="?a=2&k=T61">T61</a>
                                <a href="?a=2&k=T5">T5</a>
                                <a href="?a=2&k=T17">T17</a>
                                <a href="?a=2&k=T87">T87</a>
                                <a href="?a=2&k=K339">K339</a>
                            </div>
                        </div>
                    </div><!--/ search-form-->
                    
                    
                </div><!--/ search-->
                
                <div class="layout grid-m0s6">
                	<div id="main" class="col-main">
                    	<div id="result" class="main-wrap">
<{if $error ne ''}>
<{$error}>
<{else}>
<{include file=$content}>
<{/if}>
<{$logo}>
<!--
<p style=" height:22px; text-align:right;">以上结果 <a href="http://115.com/"><img src="images/115.gif" alt="115.com" align="absmiddle" /></a> <a href="http://huoche.com"><img src="images/huoche.gif" alt="火车网" align="absmiddle" /></a> 联合提供。</p>
-->
<div class="meta box">

<div class="red">温馨提示：本结果仅供参考，如有变动，请以火车站售票处当日火车时刻表为准，预订火车票请到正规售票点。</div>

	

</div>
                        </div><!--/ result-->
                    </div><!--/ main-->	
					
                </div>
                
				
        </div><!--/ content-->
        
<script>
if(Browser.ie6){
		var trs = document.getElementById("result").getElementsByTagName("tr");
		ieHover(trs);
}
</script>
<{include file='train_footer.tpl'}>
