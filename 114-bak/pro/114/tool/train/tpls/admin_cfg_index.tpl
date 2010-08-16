                <form method="post" action="?c=plugin&a=index&p=train&do=cfg">
                <div class="box-header">
                    <h4>API密钥 <span class="green font-n">(该API密钥可以通过登录 <a target='_blank' href='http://my.115.com'>my.115.com</a> 注册115站长获得)</span></h4>
                </div>
                &nbsp;&nbsp;<span class="green font-n"> API密钥为一串字符串，如O6yexjSnw9aC4pRSBxZTZClrRgnMFX96yexdzPmsdga=</span>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <input name='plugin[train_key]' size='100' value=<{$plugin.yl_plugin_train_key}> />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-header">
                    <h4>API地址 </h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <input name='plugin[train_api]' size='100' value=<{$plugin.yl_plugin_train_api}> />
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="保存更改" />
                    </div>
                </div>
                </form>
