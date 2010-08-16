/**
 * ==========================================
 * config.js
 * Copyright (c) 2009 wwww.114la.com
 * Author: cai@115.com
 * ==========================================
 */

var Config = {

    Search: {
        s115: {
            action: "http://115.com/s",
            name: "q",
            btn: "聚 搜",
            img: ["static/images/sl/115.gif", "115.com"],
            url: "http://115.com/",
            params: {

            }
        },
        web: {
            action: "http://www.baidu.com/s",
            name: "wd",
            btn: "百度一下",
            img: ["static/images/sl/logox3.gif", "百度首页"],
            url: "http://www.baidu.com/index.php?tn=hkxs_pg&ch=500",
            params: {
                tn: "hkxs_pg",
				ch: "500"
            }
        },
        mp3: {
            action: "http://mp3.baidu.com/m",
            name: "word",
            btn: "百度MP3",
            img: ["static/images/sl/logo_mp3.gif", "百度MP3"],
            url: "http://mp3.baidu.com/",
            params: {
                tn: "hkxs_pg",
				ch: "500",
				f:"ms",
				ct:"134217728"
            }
        },
        v115: {
            action: "http://v.115.com/",
            name: "q",
            btn: "影视聚搜",
            img: ["static/images/sl/v115.gif", "影视聚搜"],
            url: "http://v.115.com/",
            params: {
            }
        },
        image: {
            action: "http://image.baidu.com/i",
            name: "word",
            btn: "百度图片",
            img: ["static/images/sl/logo_pic.gif", "百度图片"],
            url: "http://image.baidu.com/",
            params: {
				
                tn:"baiduimage",
				ct:"201326592",
				cl:"2",
				pv:"",
				lm:"-1"
            }
        },
        zhidao: {
            action: "http://zhidao.baidu.com/q",
            name: "word",
            btn: "百度知道",
            img: ["static/images/sl/logo_zhidao.gif", "百度知道"],
            url: "http://zhidao.baidu.com/",
            params: {
                tn: "ikaslist",
                ct: "17",
                pt: "ylmf_ik"
            }
        }
		
    },
    Mail: [{
        val: 0
    },
    { //163.com
        action: "http://reg.163.com/CheckUser.jsp",
        params: {
            url: "http://fm163.163.com/coremail/fcg/ntesdoor2?lightweight=1&verifycookie=1&language=-1&style=15",
            username: "#{u}",
            password: "#{p}"
        }
    },
    { //126.com
        action: "https://reg.163.com/logins.jsp",
        params: {
            domain: "126.com",
            username: "#{u}@126.com",
            password: "#{p}",
            url: "http://entry.mail.126.com/cgi/ntesdoor?lightweight%3D1%26verifycookie%3D1%26language%3D0%26style%3D-1"
        }
    },
	{ //vip.163.com
        action: "https://ssl1.vip.163.com/logon.m",
        params: {
            username: "#{u}",
            password: "#{p}",
			enterVip:true
        }
    },
	
    { //sina.com
        action: "http://mail.sina.com.cn/cgi-bin/login.cgi",
        params: {
            u: "#{u}",
            psw: "#{p}"
        }
    },
    { //2008.sina.com
        action: "http://mail.2008.sina.com.cn/cgi-bin/login.php",
        params: {
            u: "#{u}",
            psw: "#{p}",
            product: "mail"
        }
    },
    { //vip.sina.com
        action: "http://vip.sina.com.cn/cgi-bin/login.cgi",
        params: {
            user: "#{u}",
            pass: "#{p}"
        }
    },

    { //yahoo.com.cn
        action: "https://edit.bjs.yahoo.com/config/login",
        params: {
            login: "#{u}@yahoo.com.cn",
            passwd: "#{p}",
            domainss: "yahoo",
            ".intl": "cn",
            ".src": "ym"
        }
    },
    { //yahoo.cn
        action: "https://edit.bjs.yahoo.com/config/login",
        params: {
            login: "#{u}@yahoo.cn",
            passwd: "#{p}",
            domainss: "yahoocn",
            ".intl": "cn",
            ".done": "http://mail.cn.yahoo.com/inset.html"
        }
    },
    { //sohu.com
        action: "http://passport.sohu.com/login.jsp",
        params: {
            loginid: "#{u}@sohu.com",
            passwd: "#{p}",
            fl: "1",
            vr: "1|1",
            appid: "1000",
            ru: "http://login.mail.sohu.com/servlet/LoginServlet",
            ct: "1173080990",
            sg: "5082635c77272088ae7241ccdf7cf062"
        }
    },
    { //tom.com
        action: "http://bjweb.163.net/cgi/163/login_pro.cgi",
        params: {
            user: "#{u}",
            pass: "#{p}"
        }
    },
	{ //139.com
        action: "https://mail.139.com/default.aspx",
        params: {
            txtUserName: "#{u}",
            txtPassword: "#{p}"
        }
    },
	
    { //188.com
        action: "http://reg.mail.188.com/servlet/coremail/login?language=0&style=1",
        params: {
            user: "#{u}",
            pass: "#{p}"
        }
    },
	
    { //21cn.com
        action: "http://passport.21cn.com/maillogin.jsp",
        params: {
            UserName: "#{u}@21cn.com",
            passwd: "#{p}",
            domainname: "21cn.com"
        }
    },
    { //yeah.net
        action: "https://reg.163.com/logins.jsp",
        params: {
            domain: "yeah.net",
            username: "#{u}@yeah.net",
            password: "#{p}",
            url: "http://entry.mail.yeah.net/cgi/ntesdoor?lightweight%3D1%26verifycookie%3D1%26style%3D-1"
        }
    },
    {
        val: 0
    },
    { //tianya
        action: "http://www.tianya.cn/user/loginsubmit.asp",
        params:{
			vwriter: "#{u}",
			vpassword: "#{p}"
        }
    },
    { //百度帐号
        action: "http://passport.baidu.com/?login",
        params: {
            u: "http://passport.baidu.com/center",
            username: "#{u}",
            password: "#{p}"
        }
    },
    { //chinaren
        action: "http://passport.sohu.com/login.jsp",
        params: {
            loginid: "#{u}@chinaren.com",
            passwd: "#{p}",
            fl: "1",
            vr: "1|1",
            appid: "1005",
            ru: "http://profile.chinaren.com/urs/setcookie.jsp?burl=http://alumni.chinaren.com/",
            ct: "1174378209",
            sg: "84ff7b2e1d8f3dc46c6d17bb83fe72bd"
        }
		
    },
    { //renren
        action: "http://passport.renren.com/PLogin.do",
        params: {
            email: "#{u}",
            password: "#{p}"
        }
    },
    { //51.com
        action: "http://passport.51.com/login.5p",
        params: {
            passport_51_user: "#{u}",
            passport_51_password: "#{p}",
            gourl: "http%3A%2F%2Fmy.51.com%2Fwebim%2Findex.php"
        }
    }]
}

var  CityArr = [
["CategoryName","ParentId","Id"],
["华北地区","0","1"],
["北京","1","109"],
["北京","109","101010100"],
["天津","1","110"],
["天津","110","101030100"],
["河北","1","111"],
["石家庄","111","101090101"],
["保定","111","101090201"],
["张家口","111","101090301"],
["承德市","111","101090402"],
["唐山","111","101090501"],
["廊坊","111","101090601"],
["沧州","111","101090701"],
["衡水","111","101090801"],
["邢台","111","101090901"],
["邯郸","111","101091001"],
["秦皇岛","111","101091101"],
["山西","1","112"],
["太原","112","101100101"],
["大同","112","101100201"],
["阳泉","112","101100301"],
["晋中","112","101100401"],
["长治","112","101100501"],
["晋城","112","101100601"],
["临汾","112","101100701"],
["运城","112","101100801"],
["朔州","112","101100901"],
["忻州","112","101101001"],
["吕梁","112","101101100"],
["内蒙古","1","113"],
["呼和浩特","113","101080101"],
["包头","113","101080201"],
["乌海","113","101080301"],
["集宁","113","101080401"],
["通辽","113","101080501"],
["赤峰","113","101080601"],
["鄂尔多斯","113","101080701"],
["临河","113","101080801"],
["锡林浩特","113","101080901"],
["呼伦贝尔","113","101081000"],
["乌兰浩特","113","101081101"],
["阿拉善左旗","113","101081201"],
["东北地区","0","2"],
["辽宁","2","114"],
["沈阳","114","101070101"],
["大连","114","101070201"],
["鞍山","114","101070301"],
["抚顺","114","101070401"],
["本溪","114","101070501"],
["丹东","114","101070601"],
["锦州","114","101070701"],
["营口","114","101070801"],
["阜新","114","101070901"],
["辽阳","114","101071001"],
["铁岭","114","101071101"],
["朝阳","114","101071201"],
["盘锦","114","101071301"],
["葫芦岛","114","101071401"],
["吉林","2","115"],
["长春","115","101060101"],
["吉林","115","101060201"],
["延吉","115","101060301"],
["四平","115","101060401"],
["通化","115","101060501"],
["白城","115","101060601"],
["辽源","115","101060701"],
["松原","115","101060801"],
["白山","115","101060901"],
["黑龙江","2","116"],
["哈尔滨","116","101050101"],
["齐齐哈尔","116","101050201"],
["牡丹江","116","101050301"],
["佳木斯","116","101050401"],
["绥化","116","101050501"],
["黑河","116","101050601"],
["大兴安岭","116","101050701"],
["伊春","116","101050801"],
["大庆","116","101050901"],
["七台河","116","101051002"],
["鸡西","116","101051101"],
["鹤岗","116","101051201"],
["双鸭山","116","101051301"],
["华东地区","0","3"],
["上海","3","117"],
["上海","117","101020100"],
["山东","3","118"],
["济南","118","101120101"],
["青岛","118","101120201"],
["淄博","118","101120301"],
["德州","118","101120401"],
["烟台","118","101120501"],
["潍坊","118","101120601"],
["济宁","118","101120701"],
["泰安","118","101120801"],
["临沂","118","101120901"],
["菏泽","118","101121001"],
["滨州","118","101121101"],
["东营","118","101121201"],
["威海","118","101121301"],
["枣庄","118","101121401"],
["日照","118","101121501"],
["莱芜","118","101121601"],
["聊城","118","101121701"],
["安徽","3","119"],
["合肥","119","101220101"],
["蚌埠","119","101220201"],
["芜湖","119","101220301"],
["淮南","119","101220401"],
["马鞍山","119","101220501"],
["安庆","119","101220601"],
["宿州","119","101220701"],
["阜阳","119","101220801"],
["亳州","119","101220901"],
["黄山","119","101221001"],
["滁州","119","101221101"],
["淮北","119","101221201"],
["铜陵","119","101221301"],
["宣城","119","101221401"],
["六安","119","101221501"],
["巢湖","119","101221601"],
["池州","119","101221701"],
["江苏","3","120"],
["南京","120","101190101"],
["无锡","120","101190201"],
["镇江","120","101190301"],
["苏州","120","101190401"],
["南通","120","101190501"],
["扬州","120","101190601"],
["盐城","120","101190701"],
["徐州","120","101190801"],
["淮安","120","101190901"],
["连云港","120","101191001"],
["常州","120","101191101"],
["泰州","120","101191201"],
["宿迁","120","101191301"],
["浙江","3","121"],
["杭州","121","101210101"],
["湖州","121","101210201"],
["嘉兴","121","101210301"],
["宁波","121","101210401"],
["绍兴","121","101210501"],
["台州","121","101210601"],
["温州","121","101210701"],
["丽水","121","101210801"],
["金华","121","101210901"],
["衢州","121","101211001"],
["舟山","121","101211101"],
["江西","3","122"],
["南昌","122","101240101"],
["九江","122","101240201"],
["上饶","122","101240301"],
["抚州","122","101240401"],
["宜春","122","101240501"],
["吉安","122","101240601"],
["赣州","122","101240701"],
["景德镇","122","101240801"],
["萍乡","122","101240901"],
["新余","122","101241001"],
["鹰潭","122","101241101"],
["福建","3","123"],
["福州","123","101230101"],
["厦门","123","101230201"],
["宁德","123","101230301"],
["莆田","123","101230401"],
["泉州","123","101230501"],
["漳州","123","101230601"],
["龙岩","123","101230701"],
["三明","123","101230801"],
["南平","123","101230901"],
["中南地区","0","4"],
["河南","4","124"],
["郑州","124","101180101"],
["安阳","124","101180201"],
["新乡","124","101180301"],
["许昌","124","101180401"],
["平顶山","124","101180501"],
["信阳","124","101180601"],
["南阳","124","101180701"],
["开封","124","101180801"],
["洛阳","124","101180901"],
["商丘","124","101181001"],
["焦作","124","101181101"],
["鹤壁","124","101181201"],
["濮阳","124","101181301"],
["周口","124","101181401"],
["漯河","124","101181501"],
["驻马店","124","101181601"],
["三门峡","124","101181701"],
["济源","124","101181801"],
["湖北","4","125"],
["武汉","125","101200101"],
["襄樊","125","101200201"],
["鄂州","125","101200301"],
["孝感","125","101200401"],
["黄冈","125","101200501"],
["黄石","125","101200601"],
["咸宁","125","101200701"],
["荆州","125","101200801"],
["宜昌","125","101200901"],
["恩施","125","101201001"],
["十堰","125","101201101"],
["神农架","125","101201201"],
["随州","125","101201301"],
["荆门","125","101201401"],
["天门","125","101201501"],
["仙桃","125","101201601"],
["潜江","125","101201701"],
["湖南","4","126"],
["长沙","126","101250101"],
["湘潭","126","101250201"],
["株洲","126","101250301"],
["衡阳","126","101250401"],
["郴州","126","101250501"],
["常德","126","101250601"],
["益阳","126","101250701"],
["娄底","126","101250801"],
["邵阳","126","101250901"],
["岳阳","126","101251001"],
["张家界","126","101251101"],
["怀化","126","101251201"],
["黔阳","126","101251301"],
["永州","126","101251401"],
["吉首","126","101251501"],
["广东","4","127"],
["广州","127","101280101"],
["韶关","127","101280201"],
["惠州","127","101280301"],
["梅州","127","101280401"],
["汕头","127","101280501"],
["深圳","127","101280601"],
["珠海","127","101280701"],
["佛山","127","101280800"],
["肇庆","127","101280901"],
["湛江","127","101281001"],
["江门","127","101281101"],
["河源","127","101281201"],
["清远","127","101281301"],
["云浮","127","101281401"],
["潮州","127","101281501"],
["东莞","127","101281601"],
["中山","127","101281701"],
["阳江","127","101281801"],
["揭阳","127","101281901"],
["茂名","127","101282001"],
["汕尾","127","101282101"],
["东沙岛","127","101282105"],
["广西","4","128"],
["南宁","128","101300101"],
["崇左","128","101300201"],
["柳州","128","101300301"],
["来宾","128","101300401"],
["桂林","128","101300501"],
["梧州","128","101300601"],
["贺州","128","101300701"],
["贵港","128","101300801"],
["玉林","128","101300901"],
["百色","128","101301001"],
["钦州","128","101301101"],
["河池","128","101301201"],
["北海","128","101301301"],
["防城港","128","101301401"],
["海南","4","129"],
["海口","129","101310101"],
["琼山","129","101310102"],
["三亚","129","101310201"],
["东方","129","101310202"],
["临高","129","101310203"],
["澄迈","129","101310204"],
["儋州","129","101310205"],
["昌江","129","101310206"],
["白沙","129","101310207"],
["琼中","129","101310208"],
["定安","129","101310209"],
["屯昌","129","101310210"],
["琼海","129","101310211"],
["文昌","129","101310212"],
["清兰","129","101310213"],
["保亭","129","101310214"],
["万宁","129","101310215"],
["陵水","129","101310216"],
["西沙","129","101310217"],
["珊瑚岛","129","101310218"],
["永署礁","129","101310219"],
["南沙岛","129","101310220"],
["乐东","129","101310221"],
["通什","129","101310222"],
["西北地区","0","5"],
["陕西","5","130"],
["西安","130","101110101"],
["咸阳","130","101110200"],
["延安","130","101110300"],
["榆林","130","101110401"],
["渭南","130","101110501"],
["商洛","130","101110601"],
["安康","130","101110701"],
["汉中","130","101110801"],
["宝鸡","130","101110901"],
["铜川","130","101111001"],
["甘肃","5","131"],
["兰州","131","101160101"],
["定西","131","101160201"],
["平凉","131","101160301"],
["庆阳","131","101160401"],
["武威","131","101160501"],
["金昌","131","101160601"],
["张掖","131","101160701"],
["酒泉","131","101160801"],
["天水","131","101160901"],
["武都","131","101161001"],
["临夏","131","101161101"],
["合作","131","101161201"],
["白银","131","101161301"],
["宁夏","5","132"],
["银川","132","101170101"],
["石嘴山","132","101170201"],
["吴忠","132","101170301"],
["固原","132","101170401"],
["中卫","132","101170501"],
["青海","5","133"],
["西宁","133","101150101"],
["海东","133","101150201"],
["黄南","133","101150301"],
["海南","133","101150401"],
["果洛","133","101150501"],
["玉树","133","101150601"],
["海西","133","101150701"],
["海北","133","101150801"],
["新疆","5","134"],
["乌鲁木齐","134","101130101"],
["克拉玛依","134","101130201"],
["石河子","134","101130301"],
["昌吉","134","101130401"],
["吐鲁番","134","101130501"],
["库尔勒","134","101130601"],
["阿拉尔","134","101130701"],
["阿克苏","134","101130801"],
["喀什","134","101130901"],
["伊宁","134","101131001"],
["塔城","134","101131101"],
["哈密","134","101131201"],
["和田","134","101131301"],
["阿勒泰","134","101131401"],
["阿图什","134","101131501"],
["博乐","134","1011301601"],
["西南地区","0","6"],
["重庆","6","135"],
["重庆","135","101040100"],
["四川","6","136"],
["成都","136","101270101"],
["攀枝花","136","101270201"],
["自贡","136","101270301"],
["绵阳","136","101270401"],
["南充","136","101270501"],
["达州","136","101270601"],
["遂宁","136","101270701"],
["广安","136","101270801"],
["巴中","136","101270901"],
["泸州","136","101271001"],
["宜宾","136","101271101"],
["内江","136","101271201"],
["资阳","136","101271301"],
["乐山","136","101271401"],
["眉山","136","101271501"],
["凉山","136","101271601"],
["雅安","136","101271701"],
["甘孜","136","101271801"],
["阿坝","136","101271901"],
["德阳","136","101272001"],
["广元","136","101272101"],
["贵州","6","137"],
["贵阳","137","101260101"],
["遵义","137","101260201"],
["安顺","137","101260301"],
["都匀","137","101260401"],
["凯里","137","101260501"],
["铜仁","137","101260601"],
["毕节","137","101260701"],
["六盘水","137","101260801"],
["黔西","137","101260901"],
["云南","6","138"],
["昆明","138","101290101"],
["大理","138","101290201"],
["红河","138","101290301"],
["曲靖","138","101290401"],
["保山","138","101290501"],
["文山","138","101290601"],
["玉溪","138","101290701"],
["楚雄","138","101290801"],
["思茅","138","101290901"],
["昭通","138","101291001"],
["临沧","138","101291101"],
["怒江","138","101291201"],
["中甸","138","101291301"],
["丽江","138","101291401"],
["德宏","138","101291501"],
["景洪","138","101291601"],
["西藏","6","139"],
["拉萨","139","101140101"],
["日喀则","139","101140201"],
["山南","139","101140301"],
["林芝","139","101140401"],
["昌都","139","101140501"],
["那曲","139","101140601"],
["阿里","139","101140701"],
["港澳台","0","7"],
["香港","7","140"],
["香港","140","101320101"],
["澳门","7","141"],
["澳门","141","101330101"],
["台湾","7","142"],
["台北县","142","101340101"],
["高雄","142","101340201"],
["台南","142","101340301"],
["台中","142","101340401"],
["桃园","142","101340501"],
["新竹县","142","101340601"],
["宜兰","142","101340701"],
["马公","142","101340801"],
["嘉义","142","101340901"],
["花莲","142","101341001"],
["台东","142","101341101"],
["彭佳屿","142","101341201"]
]



