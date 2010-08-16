<?php /* Smarty version 2.6.25, created on 2010-08-01 16:52:31
         compiled from index_footer.tpl */ ?>
<div id="footer"> <a href="http://www.114la.com/114la/index.html" target="_blank">关于114啦建站系统V1.13</a> | <a href="<?php echo $this->_tpl_vars['URL']; ?>
/url-submit/" target="_blank">网站提交</a> | <a href="<?php echo $this->_tpl_vars['URL']; ?>
/feedback" target="_blank">意见反馈</a> | <a href="http://www.114la.com/gongyihuodong/index.htm" target="_blank">公益活动</a> 
            <div class="hr"></div>
            <p> Powered by 114啦网址导航&copy;2005-2009 . All Rights Reserved. <br /><a target="_blank" href="<?php echo $this->_tpl_vars['icpurl']; ?>
"><?php echo $this->_tpl_vars['icp']; ?>
</a>
        </div>
        <!--/ footer-->
        <div style="display: none;" class="bd" id="weatherBox">
            <div class="head"><a title="关闭" id="closeWTBOX" class="close">关闭</a><span style="float:left;">#{postTime}</span></div>
            <h2>#{city} #{more}</h2>
            #{weather} </div>
        <div id="setting-box" class="bd" style="display:none">
            <h2 id="setting2">个性设置</h2>
            <ul>
                <li id="layout-setting"> <strong>屏幕设置：</strong> <a rel="0" class="a">经典版</a> <a rel="1" class="b">标准版</a> <a rel="2" class="c">宽屏版</a> </li>
                <li id="style-setting" class="theme"> <strong>风格设置：</strong> <a rel="0" class="blue">0</a> <a rel="1" class="orange">1</a> <a rel="2" class="green">2</a> <a rel="3" class="purple">3</a> <a rel="4" class="blue2">4</a> </li>
                <li id="font-setting"> <strong>字体颜色：</strong> <a rel="default" class="default">蓝</a> <a rel="gray" class="gray">灰</a> <a rel="black" class="black">黑</a> <a rel="green" class="green">绿</a> <a rel="pink" class="pink">粉红</a> <a rel="red" class="red">红色</a> </li>
                <li id="bg-setting"> <strong>背景图片：</strong>
                    <div id="bg-item" class="con"> <a rel="default" class="default">无</a> <a rel="1.gif">1</a> <a rel="2.gif">2</a> <a rel="3.gif">3</a> <a rel="4.gif">4</a> <a rel="5.jpg">5</a> <a rel="6.jpg">6</a> <a rel="7.gif">6</a> </div>
                </li>
            </ul>
            <div class="center">
                <button id="setting-reset" onclick="Skinselector.Reset()" class="button">恢复默认</button>
                &nbsp;&nbsp;
                <button id="setting-close" class="button">完 成</button>
            </div>
        </div>
        <!--/ settingBox-->
        
        <!-- clock start -->
        <div id="clockBox" class="bd alertbox" style="display:none;">
            <h2 id="closeClock">闹钟</h2>
            <div class="conBox">
                <div class="cloBox">
                    <div class="todays bd"></div>
                    <div class="tools" style="display:block;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width="28%">提醒时间：</th>
                                <td width="72%"><select id="selectHour">
                                        23
                                    </select>
                                    时
                                    <select id="selectMinute">
                                        60
                                    </select>
                                    分 </td>
                            </tr>
                            <tr>
                                <th>闹钟铃声：</th>
                                <td><label>
                                        <select id="selectMusic" name="selectMusic">
                                            <option value='static/media/clock/1.mid'>爱如潮水</option>
                                            <option value='static/media/clock/2.mid'>春江花月夜</option>
                                            <option value='static/media/clock/3.mid'>二泉映月</option>
                                            <option value='static/media/clock/4.mid'>回家</option>
                                            <option value='static/media/clock/5.mid'>卡农</option>
                                            <option value='static/media/clock/6.mid'>梁祝</option>
                                            <option value='static/media/clock/7.mid'>浏阳河</option>
                                            <option value='static/media/clock/8.mid'>茉莉花</option>
                                            <option value='static/media/clock/9.mid'>南泥湾</option>
                                            <option value='static/media/clock/10.mid'>起床号</option>
                                            <option value='static/media/clock/11.mid'>千里之外</option>
                                            <option value='static/media/clock/12.mid'>上海滩</option>
                                            <option value='static/media/clock/13.mid'>水边的阿迪丽娜</option>
                                            <option value='static/media/clock/14.mid'>天仙配</option>
                                            <option value='static/media/clock/15.mid'>甜蜜蜜</option>
                                            <option value='static/media/clock/16.mid'>土耳其进行曲</option>
                                            <option value='static/media/clock/17.mid'>我只在乎你</option>
                                            <option value='static/media/clock/18.mid'>星语心愿</option>
                                            <option value='static/media/clock/19.mid'>致爱丽丝</option>
                                            <option value='static/media/clock/20.mid'>猪八戒背媳妇</option>
                                            <option value='static/media/clock/21.mid'>最浪漫的事</option>
                                        </select>
                                        &nbsp;
                                        <button id='alarm_music_button' style="height:22px; padding:0;">试听</button>
                                    </label></td>
                                <BGSOUND id='alarm_player' src='' autostart=true  loop=2>
                            </tr>
                            <tr>
                                <th>提示文字：</th>
                                <td><input id="alarm_textarea" maxlength=40 value="休息，休息一下吧！"></td>
                            </tr>
                            <tr>
                                <th>重复提醒：
                                    </td>
                                <td><div id="is_single">
                                        <label for="noRepeat" style="cursor:pointer">
                                            <input type="radio" id="noRepeat" name="alarm_is_single" checked value="1" />
                                            不重复</label>
                                        <label for="repeatDaily" style="cursor:pointer">
                                            <input type="radio" name="alarm_is_single" id="repeatDaily" value="0" />
                                            每天提醒</label>
                                    </div></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a id="confirmed" onclick="Ylclock.set()" href="javascript:void(0)" target="_parent">添加提醒</a> <a id="cancelBtn" href="javascript:void(0)" target="_parent">关闭</a></td>
                            </tr>
                        </table>
                        <ul class="listC">
                        </ul>
                    </div>
                    <div class="point bd">
                        <h3><strong>114啦小秘书温馨提示：</strong></h3>
                        <p>·如关闭114啦网址导航首页，闹钟功能将失效。</p>
                        <p>·需要打开音响或佩戴耳机，以便听到提示铃声。</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- clock end -->
        
        
    </div>
    <!--/ wrap-->
</div>
<!--/ home-->
<script type="text/javascript" src="themes/default/js/home.js"></script>
<div style="display:none"><?php echo $this->_tpl_vars['tongji']; ?>
</div>
</body>
</html>