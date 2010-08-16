<?php
/**
 * 114啦列车时刻查询工具
 *
 * @since      2009-8-4
 * @copyright  http://www.114la.com
 */

function get_data( $url = '', $verify_code = '' )
{
    if( empty( $url ) || empty( $verify_code ) )
    {
        return -1;
    }

    $data_xml = '';
    if( $data_xml = get_cache( $url ) )
    {
        return $data_xml;
    }

    for( $i = 0; $i < 5 && empty( $data_xml ); $i++)
    {
        if( function_exists( 'curl_init' ) )
        {
            if( !isset($ch) )
            {
                $ch = curl_init ();
                curl_setopt ( $ch, CURLOPT_URL, $url . '&key=' . urlencode($verify_code) );
                curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt ( $ch, CURLOPT_USERAGENT, 'Mozilla/5.0' );
            }
            $data_xml = curl_exec ( $ch );
        }
        elseif( function_exists( 'fsockopen' ) )
        {
            $data_xml = get_contents_by_socket( $url . '&key=' . urlencode($verify_code)  );
        }
        elseif( function_exists( 'file_get_contents' ) )
        {
            if( !get_cfg_var('allow_url_fopen') )
            {
                return -2;
            }
            $data_xml = @file_get_contents($url . '&key=' . urlencode($verify_code) );
        }
        else
        {
            return -3; 
        }
    }

    if( ! $data_xml )
    {
        return -4;
    }
    else
    {
        set_cache( $url, $data_xml, 86400 );
        return $data_xml;
    }
}


function train_admin_cfg_index()
{
    if( isset($_POST['plugin']['train_key']) )
    {
        $config = array();
        mod_config::set_configs( array('plugin_train_key' => $_POST['plugin']['train_key'] , 'plugin_train_api' => $_POST['plugin']['train_api'] )  );
        mod_login::message("修改成功!");
    }
    app_tpl::assign( 'plugin', mod_config::get_configs( array('yl_plugin_train_key', 'yl_plugin_train_api') ) );
}

function get_contents_by_socket( $url )
{
    $params = parse_url( $url );
    $host = $params['host'];
    $path = $params['path'];
    $query = $params['query'];
    $fp = @fsockopen($host, 80, $errno, $errstr, 30);
    if (!$fp) 
    {
        return false;
    }
    else 
    {
        $result = '';
        $out = "GET /" . $path . '?' . $query . " HTTP/1.0\r\n";
        $out .= "Host: $host\r\n";
        $out .= "Connection: Close\r\n\r\n";
        @fwrite($fp, $out);
        while (!@feof($fp)) 
        {
            if ($get_info) 
            {
                $result .= @fread($fp, 1024);
            } 
            else 
            {
                if (@fgets($fp, 1024) == "\r\n") 
                {
                    $get_info = true;
                }
            }

        }
        @fclose($fp);
        return $result;
    }
}

function get_cache( $url )
{
    $path = PATH_ROOT . '/admin/data/cache/train/'; 
    $key = md5( $url );
    if( !file_exists( $path . $key . '.xml' ) )
    {
        return false;
    } 

    if( ($data = @file_get_contents( $path . $key . '.xml') ) == false )
    {
        return false;
    }

    preg_match( '/<expire>(?P<expire>.*?)<\/expire>/', $data, $matches);
    $expire = $matches['expire'];
    if( $expire && $_SERVER['REQUEST_TIME'] < intval($expire) )
    {
        return $data;
    }
    else
    {
        return false;
    }

}

function set_cache( $url, $data, $expire = 86400 )
{
    $path = PATH_ROOT . '/admin/data/cache/train/'; 
    $key = md5( $url );
    $expire += $_SERVER['REQUEST_TIME'];
    $expire = "<expire>$expire</expire>";
    $data = substr_replace($data, $expire, -11, 0);
    if( !is_dir($path) )
    {
        if(!@mkdir( $path, 0777, true ))
        {
            exit("无法创建缓存目录$path，请检查是否具有相应目录的写权限");
        }
    }

    if( !is_writable( $path ) )
    {
        exit("缓存目录$path没有写权限，请为此目录加上写权限");
    }
    @file_put_contents ( $path . $key . '.xml', $data, LOCK_EX );
}
?>
