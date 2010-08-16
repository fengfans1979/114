<?php
/**
 * 模块管理
 *
 * @copyright http://www.114la.com
 * @version    $Id: ctl_template_manage.php 1093 2009-11-28 02:50:16Z syh $
 */
!defined('PATH_ADMIN') && exit('Forbidden');

class ctl_template_manage
{
    /**
     * 前台模板目录
     * @var string
     */
    private static $dir_tpl_main;

	/**
	 * pre钩子
	 *
	 * @return void
	 */
    public static function pre()
    {
        if(!self::$dir_tpl_main = mod_config::get_one_config('yl_dirtplmain'))
        {
            self::$dir_tpl_main = 'default';
        }
    }

	/**
	 * 模板管理
	 *
	 * @return void
	 */
	public static function index()
	{
		try
		{
            app_tpl::assign( 'npa', array('模板管理', '模板编辑') );
			$action = (empty($_GET['action'])) ? '' : $_GET['action'];

			defined('TPLS_BACKUP_EXT') || define(TPLS_BACKUP_EXT, '.bak');

			// 读文件或恢复到默认模板
			if ($action == 'modify' || $action == 'restore')
			{
			    $ini_filename = (empty($_GET['filename'])) ? '' : $_GET['filename'];
			    if (empty($ini_filename))
			    {
			        throw new Exception('文件 ' . $ini_filename . ' 不存在');
			    }

				$filename = PATH_TPLS_MAIN . '/' . self::$dir_tpl_main . '/' . $ini_filename;
				if ($action == 'restore')
				{
				    $filename .= TPLS_BACKUP_EXT;
				}

				if (!file_exists($filename))
				{
					throw new Exception('文件 ' . $ini_filename . ' 不存在');
				}
				if ($action == 'modify')
				{
    				// 备份原始文件
    				if (!file_exists($filename . TPLS_BACKUP_EXT) && !@copy($filename, $filename . TPLS_BACKUP_EXT))
    				{
    					throw new Exception('文件 ' . $ini_filename . TPLS_BACKUP_EXT . ' 备份失败');
    				}
				}
				else
				{
				    // 恢复模板
				    $old_filename = substr($filename, 0, -strlen((TPLS_BACKUP_EXT)));
				    $bak_filename = $filename;
				    if (!mod_file::write($old_filename, mod_file::read($bak_filename)))
				    {
				        throw new Exception('文件' . $ini_filename . ' 恢复失败');
				    }

    				if (preg_match('/index\_(header|footer|body)\.tpl/i', $filename))
    			    {
    			        mod_make_html::auto_update('index');
    			    }
    			    elseif (preg_match('/other\_(header|footer|body)\.tpl/i', $filename))
    			    {
    			        mod_make_html::auto_update('other');
    			    }
				}

				app_tpl::assign('content', htmlspecialchars(mod_file::read($filename), ENT_QUOTES));
				app_tpl::assign('filename', $ini_filename);
				app_tpl::assign('back', '?c=template_manage&action=modify&filename=' . $ini_filename);
			}
			// 写文件
			elseif ($action == 'save')
			{
			    $content = (empty($_POST['content'])) ? '' : htmlspecialchars_decode(stripslashes($_POST['content']));
			    if (empty($content))
			    {
			        throw new Exception('请输入模块内容', 10);
			    }

			    $ini_filename = (empty($_POST['filename'])) ? '' : $_POST['filename'];
			    if (empty($ini_filename))
			    {
			        throw new Exception('文件 ' . $ini_filename . ' 不存在');
			    }

				$filename = PATH_TPLS_MAIN . '/' . self::$dir_tpl_main . '/' . $ini_filename;
				// 不能修改原始备份文件
				if (!file_exists($filename) || substr($filename, -(strlen(TPLS_BACKUP_EXT))) == TPLS_BACKUP_EXT)
				{
					throw new Exception('文件 ' . $ini_filename . ' 不存在');
				}

				if (false == mod_file::write($filename, $content, 'wb+'))
				{
					throw new Exception('文件' . $ini_filename . ' 保存失败');
				}
				@chmod($filename, 0777);

				if (preg_match('/index\_(header|footer|body)\.tpl/i', $filename))
			    {
			        mod_make_html::auto_update('index');
			    }
			    elseif (preg_match('/other\_(header|footer|body)\.tpl/i', $filename))
			    {
			        mod_make_html::auto_update('other');
			    }

				mod_login::message('操作成功', (empty($_POST['referer'])) ? '?c=template_manage' : $_POST['referer']);
			}
		}
		catch (Exception $e)
		{
			app_tpl::assign('error', $e->getMessage());
		}
        if (preg_match('/class\_(header|footer|body)\.tpl/i', $ini_filename))
        {
            app_tpl::assign('show_msg', 1);
        }
		app_tpl::display('template_manage.tpl');
	}

	/**
	 * 模板选择
	 *
	 * @return void
	 */
	public static function cur_tpl()
	{
        app_tpl::assign( 'npa', array('模板管理', '模板选择') );
	    // 删除
        if(!empty($_GET['delete']))
        {
            $tpl = PATH_TPLS_MAIN . '/' . $_GET['delete'];
            if(is_dir($tpl))
            {
                mod_file::rm_recurse($tpl);
                mod_login::message('操作成功', '?c=template_manage&a=cur_tpl');
            }
        }
        // 启用
        elseif(!empty($_GET['apply']))
        {
            mod_config::set_configs(array('yl_dirtplmain' => $_GET['apply']));
            if(!empty($_GET['mkhtml']))
            {
                mod_make_html::flush('正在生成首页……');
                mod_make_html::make_html_index();
                mod_make_html::flush($ok);
            }
            mod_login::message('操作成功', '?c=template_manage&a=cur_tpl');
        }

        $dirs = mod_file::ls(PATH_TPLS_MAIN, 'dir');
        if(file_exists(PATH_TPLS_MAIN . '/' . self::$dir_tpl_main))
        {
            $cur_dir = self::$dir_tpl_main;
        }
        else
        {
            $cur_dir = current($dirs);
            if($cur_dir === false)
            {
                //无模板
                //显示相关页，退出
            }
        }

        //显示正常模板
        $other_tpls = array();
        foreach($dirs as $dir)
        {
            $name_filename = PATH_TPLS_MAIN . '/' . $dir . '/NAME';
            if(is_file($name_filename))
            {
                $cur_name = @file_get_contents($name_filename);
                if(empty($cur_name))
                {
                    $cur_name = $dir;
                }
            }
            else
            {
                $cur_name = $dir;
            }

            $tpl = array('path' => $dir, 'name' => $cur_name, 'preview' => ADMIN . '/tpls/tpls/main/' . $dir . '/PREVIEW.jpg');
            if($dir == $cur_dir)
            {
                $cur_tpl = $tpl; // 当前模板的数据
            }
            else
            {
                $other_tpls[] = $tpl;
            }
        }

        if(!empty($cur_tpl))
        {
            app_tpl::assign('cur_tpl', $cur_tpl);
        }
        if(!empty($other_tpls))
        {
            app_tpl::assign('other_tpls', $other_tpls);
        }

        app_tpl::display('template_select.tpl');
    }
}
?>
