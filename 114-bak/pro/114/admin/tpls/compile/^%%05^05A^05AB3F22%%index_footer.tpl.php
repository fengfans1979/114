<?php /* Smarty version 2.6.25, created on 2010-08-01 16:52:31
         compiled from index_footer.tpl */ ?>
<div id="footer"> <a href="http://www.114la.com/114la/index.html" target="_blank">����114����վϵͳV1.13</a> | <a href="<?php echo $this->_tpl_vars['URL']; ?>
/url-submit/" target="_blank">��վ�ύ</a> | <a href="<?php echo $this->_tpl_vars['URL']; ?>
/feedback" target="_blank">�������</a> | <a href="http://www.114la.com/gongyihuodong/index.htm" target="_blank">����</a> 
            <div class="hr"></div>
            <p> Powered by 114����ַ����&copy;2005-2009 . All Rights Reserved. <br /><a target="_blank" href="<?php echo $this->_tpl_vars['icpurl']; ?>
"><?php echo $this->_tpl_vars['icp']; ?>
</a>
        </div>
        <!--/ footer-->
        <div style="display: none;" class="bd" id="weatherBox">
            <div class="head"><a title="�ر�" id="closeWTBOX" class="close">�ر�</a><span style="float:left;">#{postTime}</span></div>
            <h2>#{city} #{more}</h2>
            #{weather} </div>
        <div id="setting-box" class="bd" style="display:none">
            <h2 id="setting2">��������</h2>
            <ul>
                <li id="layout-setting"> <strong>��Ļ���ã�</strong> <a rel="0" class="a">�����</a> <a rel="1" class="b">��׼��</a> <a rel="2" class="c">������</a> </li>
                <li id="style-setting" class="theme"> <strong>������ã�</strong> <a rel="0" class="blue">0</a> <a rel="1" class="orange">1</a> <a rel="2" class="green">2</a> <a rel="3" class="purple">3</a> <a rel="4" class="blue2">4</a> </li>
                <li id="font-setting"> <strong>������ɫ��</strong> <a rel="default" class="default">��</a> <a rel="gray" class="gray">��</a> <a rel="black" class="black">��</a> <a rel="green" class="green">��</a> <a rel="pink" class="pink">�ۺ�</a> <a rel="red" class="red">��ɫ</a> </li>
                <li id="bg-setting"> <strong>����ͼƬ��</strong>
                    <div id="bg-item" class="con"> <a rel="default" class="default">��</a> <a rel="1.gif">1</a> <a rel="2.gif">2</a> <a rel="3.gif">3</a> <a rel="4.gif">4</a> <a rel="5.jpg">5</a> <a rel="6.jpg">6</a> <a rel="7.gif">6</a> </div>
                </li>
            </ul>
            <div class="center">
                <button id="setting-reset" onclick="Skinselector.Reset()" class="button">�ָ�Ĭ��</button>
                &nbsp;&nbsp;
                <button id="setting-close" class="button">�� ��</button>
            </div>
        </div>
        <!--/ settingBox-->
        
        <!-- clock start -->
        <div id="clockBox" class="bd alertbox" style="display:none;">
            <h2 id="closeClock">����</h2>
            <div class="conBox">
                <div class="cloBox">
                    <div class="todays bd"></div>
                    <div class="tools" style="display:block;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width="28%">����ʱ�䣺</th>
                                <td width="72%"><select id="selectHour">
                                        23
                                    </select>
                                    ʱ
                                    <select id="selectMinute">
                                        60
                                    </select>
                                    �� </td>
                            </tr>
                            <tr>
                                <th>����������</th>
                                <td><label>
                                        <select id="selectMusic" name="selectMusic">
                                            <option value='static/media/clock/1.mid'>���糱ˮ</option>
                                            <option value='static/media/clock/2.mid'>��������ҹ</option>
                                            <option value='static/media/clock/3.mid'>��Ȫӳ��</option>
                                            <option value='static/media/clock/4.mid'>�ؼ�</option>
                                            <option value='static/media/clock/5.mid'>��ũ</option>
                                            <option value='static/media/clock/6.mid'>��ף</option>
                                            <option value='static/media/clock/7.mid'>�����</option>
                                            <option value='static/media/clock/8.mid'>����</option>
                                            <option value='static/media/clock/9.mid'>������</option>
                                            <option value='static/media/clock/10.mid'>�𴲺�</option>
                                            <option value='static/media/clock/11.mid'>ǧ��֮��</option>
                                            <option value='static/media/clock/12.mid'>�Ϻ�̲</option>
                                            <option value='static/media/clock/13.mid'>ˮ�ߵİ�������</option>
                                            <option value='static/media/clock/14.mid'>������</option>
                                            <option value='static/media/clock/15.mid'>������</option>
                                            <option value='static/media/clock/16.mid'>�����������</option>
                                            <option value='static/media/clock/17.mid'>��ֻ�ں���</option>
                                            <option value='static/media/clock/18.mid'>������Ը</option>
                                            <option value='static/media/clock/19.mid'>�°���˿</option>
                                            <option value='static/media/clock/20.mid'>��˽䱳ϱ��</option>
                                            <option value='static/media/clock/21.mid'>����������</option>
                                        </select>
                                        &nbsp;
                                        <button id='alarm_music_button' style="height:22px; padding:0;">����</button>
                                    </label></td>
                                <BGSOUND id='alarm_player' src='' autostart=true  loop=2>
                            </tr>
                            <tr>
                                <th>��ʾ���֣�</th>
                                <td><input id="alarm_textarea" maxlength=40 value="��Ϣ����Ϣһ�°ɣ�"></td>
                            </tr>
                            <tr>
                                <th>�ظ����ѣ�
                                    </td>
                                <td><div id="is_single">
                                        <label for="noRepeat" style="cursor:pointer">
                                            <input type="radio" id="noRepeat" name="alarm_is_single" checked value="1" />
                                            ���ظ�</label>
                                        <label for="repeatDaily" style="cursor:pointer">
                                            <input type="radio" name="alarm_is_single" id="repeatDaily" value="0" />
                                            ÿ������</label>
                                    </div></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a id="confirmed" onclick="Ylclock.set()" href="javascript:void(0)" target="_parent">�������</a> <a id="cancelBtn" href="javascript:void(0)" target="_parent">�ر�</a></td>
                            </tr>
                        </table>
                        <ul class="listC">
                        </ul>
                    </div>
                    <div class="point bd">
                        <h3><strong>114��С������ܰ��ʾ��</strong></h3>
                        <p>����ر�114����ַ������ҳ�����ӹ��ܽ�ʧЧ��</p>
                        <p>����Ҫ�����������������Ա�������ʾ������</p>
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