<?php
/**
 * 站内搜索
 *
 * @since 2009-7-11
 * @copyright http://www.114la.com
 */
require 'init.php';

header("content-type:text/html; charset=GBK");

if(!function_exists('iconv'))
{
    function iconv($code_in, $code_out, $content)
    {
        return '';
    }
}
$keyword = trim(iconv('UTF-8', 'GBK', (empty($_GET['keyword'])) ? '' : $_GET['keyword']));
if (empty($keyword))
{
    exit;
}

//搜索
$output = '';

$key = 0;
// 找站点
$rs = app_db::select('ylmf_site', 'name, url, namecolor, class', "name LIKE '%{$keyword}%' LIMIT 55");
if (!empty($rs))
{
    // 缓存
    $cache_main_class = mod_class::get_class_list();

    foreach ($rs as $row)
    {
        if (empty($cache_main_class[$row['class']]))
        {
            continue;
        }
        $pid = $cache_main_class[$row['class']]['parentid'];
    	if (!empty($pid))
    	{
    		$classname = $cache_main_class[$pid]['classname'] . ' - ' . $cache_main_class[$row['class']]['classname'];
    	}
    	else
    	{
    		$classname = $cache_main_class[$row['class']]['classname'];
    	}
    	//
    	$row['showname'] = preg_replace("/($keyword)/is", '<font color="red">$1</font>', $row['name']);

    	$style = (empty($row['namecolor'])) ? '' : " style=\"color:{$row['namecolor']}\"";
    	$output .= "<li><a href=\"{$row['url']}\" target=\"_blank\" title=\"类别:{$classname}\r\n名称:{$row['name']}\"{$style}>{$row['showname']}</a></li>";
    	$key++;
    }
}

$num = 38 - $key;
// 找工具
if ($num > 0)
{
	$rs = app_db::select('ylmf_tool', '*', "name LIKE '%{$keyword}%' LIMIT {$num}");
	if (!empty($rs))
	{

        $tool_class = mod_zhuanti_class::get_list();
	    foreach ($rs as $row)
	    {
            if (empty($tool_class['data'][$row['class']]))
            {
                continue;
            }
    		$classname = $tool_class['data'][$row['class']]['name'];
	        $row['showname'] = preg_replace("/($keyword)/is", '<font color="red">$1</font>', $row['name']);
		    $output .= "<li><a href=\"{$row['url']}\" target=\"_blank\" title=\"类别:{$classname}\r\n名称:{$row['name']}\">{$row['showname']}</a></li>";
	    }
	}
}
exit($output);
?>
