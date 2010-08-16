<?php
/**
 * 114啦列车时刻查询工具
 *
 * @since      2009-8-4
 * @copyright  http://www.114la.com
 */
header('Content-Type: text/html; charset=utf-8');
require_once( '../../init.php' );
require_once( 'function.php' );

$verify_code = mod_config::get_one_config( 'yl_plugin_train_key' );
if( !$verify_code )
{
    exit( '请先到后台输入授权码^_^' );
}

if( empty($_GET['a']) )
{
    app_tpl::display('index.tpl', PATH_ROOT . '/tool/train/tpls' );
}
else
{
    $input_error = false;
    switch( $_GET['a'] )
    {
    case 1:
    case 2:
    case 5:
        if( empty( $_GET['k'] ) )
        {
            $input_error = true;
            app_tpl::assign( 'error', '请输入要查询的关键字^_^',  PATH_ROOT . '/tool/train/tpls' );
        }
        if( mb_detect_encoding($_GET['k'], 'UTF-8,GBK') != 'UTF-8' )
        {
            $_GET['k'] = mb_convert_encoding($_GET['k'], 'UTF-8', 'GBK');
        }
        break;
    case 3:
        if( empty( $_GET['k1'] ) || empty($_GET['k2']) )
        {
            $input_error = true;
            app_tpl::assign( 'error', '请输入要查询的关键字^_^',  PATH_ROOT . '/tool/train/tpls' );
        }
        if( mb_detect_encoding($_GET['k1'], 'UTF-8,GBK') != 'UTF-8' )
        {
            $_GET['k1'] = mb_convert_encoding($_GET['k1'], 'UTF-8', 'GBK');
        }
        if( mb_detect_encoding($_GET['k2'], 'UTF-8,GBK') != 'UTF-8' )
        {
            $_GET['k2'] = mb_convert_encoding($_GET['k2'], 'UTF-8', 'GBK');
        }
        break;
    case 4:
        if(  empty($_GET['sid1']) || empty($_GET['sid2']) || empty($_GET['sid3']) )
        {
            $input_error = true;
            app_tpl::assign( 'error', '查询的关键字出错^_^',  PATH_ROOT . '/tool/train/tpls' );
        }
        break;
    case 6:
        if( empty( $_GET['k1'] ) || empty($_GET['k2']) || empty($_GET['k2']) )
        {
            if( mb_detect_encoding($_GET['k1'], 'UTF-8,GBK') != 'UTF-8' )
            {
                $_GET['k1'] = mb_convert_encoding($_GET['k1'], 'UTF-8', 'GBK');
            }
            if( mb_detect_encoding($_GET['k2'], 'UTF-8,GBK') != 'UTF-8' )
            {
                $_GET['k2'] = mb_convert_encoding($_GET['k2'], 'UTF-8', 'GBK');
            }
            $input_error = true;
            app_tpl::assign( 'error', '查询的关键字出错^_^',  PATH_ROOT . '/tool/train/tpls' );
        }
        break;
    }
    if( $input_error )
    {
        app_tpl::assign( 'a', $_GET['a'], PATH_ROOT . '/tool/train/tpls' );
        app_tpl::display('result.tpl', PATH_ROOT . '/tool/train/tpls' );
        exit;
    }
    $url = mod_config::get_one_config( 'yl_plugin_train_api' );
    if( empty($url) )
    {
        exit( '未设定API地址' );
    }
    $url .=  "?a=". $_GET['a'] . '&k=' . $_GET['k'] . '&k1=' . $_GET['k1'] . '&k2=' . $_GET['k2']. '&sid1=' . $_GET['sid1']. '&sid2=' . $_GET['sid2']. '&sid3=' . $_GET['sid3'] . '&p=' . $_GET['p'];
    if( ( $xmlstr =  get_data($url, $verify_code) ) < 0 )
    {
        switch( $xmlstr )
        {
        case -1:
            $error = '访问参数不完整';
            break;
        case -2:
            $error = '您的主机未开启PHP的 “allow_url_fopen” 设定';
            break;
        case -3:
            $error = '您的主机不支持curl,fsockopen和file_get_con';
            break;
        case -4:
            $error = '数据读取出错';
            break;
        }
        app_tpl::assign( 'error', $error,  PATH_ROOT . '/tool/train/tpls' );
        exit( $error );
    }
    else
    {
        $xml = new SimpleXMLElement($xmlstr);
        switch( $_GET['a'] )
        {
        case 1:
            if( !empty( $xml->error ) )
            {
                app_tpl::assign( 'error', $xml->error,  PATH_ROOT . '/tool/train/tpls' );
            }
            else
            {

                app_tpl::assign( 'station', $xml->item, PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'pageCount', $xml->pageCount, PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'recordCount', $xml->recordCount, PATH_ROOT . '/tool/train/tpls' );
                $p = empty( $_GET['p'] ) ? 1 : $_GET['p'];
                app_tpl::assign( 'page', $p, PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'k', $_GET['k'], PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'content', 'station.tpl', PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'keyword3', $_GET['k'], PATH_ROOT . '/tool/train/tpls' );
            }
            break;
        case 2:
            if( !empty( $xml->error ) )
            {
                app_tpl::assign( 'error', $xml->error,  PATH_ROOT . '/tool/train/tpls' );
            }
            else
            {
                app_tpl::assign( 'traininfo', $xml->trainInfo, PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'train', $xml->item, PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'content', 'train.tpl', PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'keyword4', $_GET['k'], PATH_ROOT . '/tool/train/tpls' );
            }
            break;
        case 3:
            if( !empty( $xml->error ) )
            {
                app_tpl::assign( 'error', $xml->error,  PATH_ROOT . '/tool/train/tpls' );
            }
            else
            {
                if( $xml->tag == 1 )
                {
                    app_tpl::assign( 'schemes', $xml->item, PATH_ROOT . '/tool/train/tpls' );
                    app_tpl::assign( 'content', 'guide1.tpl', PATH_ROOT . '/tool/train/tpls' );
                }
                else
                {
                    app_tpl::assign( 'miniprice', $xml->miniPrice, PATH_ROOT . '/tool/train/tpls' );
                    app_tpl::assign( 'minitime', $xml->miniTime, PATH_ROOT . '/tool/train/tpls' );
                    app_tpl::assign( 'minidistance', $xml->miniDistance, PATH_ROOT . '/tool/train/tpls' );
                    app_tpl::assign( 'schemes', $xml->other->item, PATH_ROOT . '/tool/train/tpls' );
                    app_tpl::assign( 'content', 'guide2.tpl', PATH_ROOT . '/tool/train/tpls' );
                }
                app_tpl::assign( 'keyword1', $_GET['k1'], PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'keyword2', $_GET['k2'], PATH_ROOT . '/tool/train/tpls' );
            }
            break;
        case 4:
            if( !empty( $xml->error ) )
            {
                app_tpl::assign( 'error', $xml->error,  PATH_ROOT . '/tool/train/tpls' );
            }
            else
            {
                app_tpl::assign( 'station1', $xml->station1, PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'station2', $xml->station2, PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'station3', $xml->station3, PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'first', $xml->first->item, PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'second', $xml->second->item, PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'content', 'guide3.tpl', PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'keyword1', $_GET['k1'], PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'keyword2', $_GET['k2'], PATH_ROOT . '/tool/train/tpls' );
            }
            break;
        case 5:
            if( !empty( $xml->error ) )
            {
                app_tpl::assign( 'error', $xml->error,  PATH_ROOT . '/tool/train/tpls' );
            }
            else
            {
                app_tpl::assign( 'price', $xml->trainInfo, PATH_ROOT . '/tool/train/tpls' );
                app_tpl::assign( 'content', 'price.tpl', PATH_ROOT . '/tool/train/tpls' );
            }
            break;
        case 6:
            if( !empty( $xml->error ) )
            {
                app_tpl::assign( 'error', $xml->error,  PATH_ROOT . '/tool/train/tpls' );
            }
            else
            {
                foreach( $xml->item as $price )
                {
                    if( $price->train_name == trim($_GET['k']) )
                    {
                        app_tpl::assign( 'price', $price, PATH_ROOT . '/tool/train/tpls' );
                        break;
                    }
                }
                app_tpl::assign( 'content', 'price.tpl', PATH_ROOT . '/tool/train/tpls' );
            }
            break;
        }
    }
    app_tpl::assign( 'a', $_GET['a'], PATH_ROOT . '/tool/train/tpls' );
    app_tpl::assign( 'logo', $xml->logo, PATH_ROOT . '/tool/train/tpls' );
    app_tpl::display('result.tpl', PATH_ROOT . '/tool/train/tpls' );
}
?>
