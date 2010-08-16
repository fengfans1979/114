<{include file='train_header.tpl'}>
        
        <div id="content">
                <div id="search" class="box">
                	<div id="search-menu">
                    	<ul class="cl">
                        	<li><a class="current" rel="form0">站站查询</a></li>
                            <li><a rel="form1">车站查询</a></li>
                            <li><a rel="form2">车次查询</a></li>
                        </ul>
                    </div>
                    
                    <div id="search-form">
                    	<div id="form0" class="con">
                            <form>
                            	<div class="cl">
                                <label for="k1">输入车站名</label>
                                <input type="hidden" name='a' value='3' />
                                <input type="text" id="k1" name='k1' class="int" autocomplete="off" style="width:150px" value="北京" />
                                <label for="k2" class="to">到</label>
                                <input type="text" id="k2" name='k2' class="int" autocomplete="off" style="width:150px; margin-left:10px;"  value="哈尔滨" />
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
                        <div id="form1" class="con" style="display:none">
                            <form>
                            	<div class="cl">
                                <label for="zhan">输入车站名</label>
                                <input type="hidden" name='a' value='1' />
                                <input type="text" name='k' id="zhan" class="int" autocomplete="off"  value="北京站" />
                                <input type="submit" class="btn" value="查 询" />
                                </div>
                            </form>
                            <div class="tags">
                            	<span>热门城市：</span>
                                <a href="?a=1&k=北京站">北京站</a>
                                <a href="?a=1&k=上海站">上海站</a>
                                <a href="?a=1&k=广州站">广州站</a>
                                <a href="?a=1&k=深圳站">深圳站</a>
                                <a href="?a=1&k=西安站">西安站</a>
                                <a href="?a=1&k=杭州站">杭州站</a>
                                <a href="?a=1&k=成都站">成都站</a>
                            </div>
                        </div>
                        <div id="form2" class="con" style="display:none;">
                        	<form>
                            	<div class="cl">
                                <label for="num">输入车次</label>
                                <input type="hidden" name='a' value='2' />
                                <input type="text" id="num" name='k' class="int" value='T7' autocomplete="off" onmouseover="this.select();this.focus();"onfocus="this.select();"  />
                                <input type="submit" class="btn" value="查 询" />
                                </div>
                            </form>
                            <div class="tags">
                            	<span>热门站点：</span>
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
                    
                    
                </div>
                
                <div class="text">
                本站最新列车时刻表目前可以查询涵盖 33 个省、市所属的 4071个火车站、2986条火车运营线路，主要指标包括列车车次、站点名称、到达时间、发车时间、累计用时、累计距离、价格等。（部分数据可能有所出入，如有变化请以车站公布为准）。                
                </div>
      
        </div>
        
<{include file='train_footer.tpl'}>
