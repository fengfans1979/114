<?php
/**
 * ģ�����
 *
 * @copyright http://www.114la.com
 * @version    $Id: ctl_template_manage.php 1093 2009-11-28 02:50:16Z syh $
 */
!defined('PATH_ADMIN') && exit('Forbidden');

class ctl_template_manage
{
    /**
     * ǰ̨ģ��Ŀ¼
     * @var string
     */
    private static $dir_tpl_main;

	/**
	 * pre����
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
	 * ģ�����
	 *
	 * @return void
	 */
	public static function index()
	{
		try
		{
            app_tpl::assign( 'npa', array('ģ�����', 'ģ��༭') );
			$action = (empty($_GET['action'])) ? '' : $_GET['action'];

			defined('TPLS_BACKUP_EXT') || define(TPLS_BACKUP_EXT, '.bak');

			// ���ļ���ָ���Ĭ��ģ��
			if ($action == 'modify' || $action == 'restore')
			{
			    $ini_filename = (empty($_GET['filename'])) ? '' : $_GET['filename'];
			    if (empty($ini_filename))
			    {
			        throw new Exception('�ļ� ' . $ini_filename . ' ������');
			    }

				$filename = PATH_TPLS_MAIN . '/' . self::$dir_tpl_main . '/' . $ini_filename;
				if ($action == 'restore')
				{
				    $filename .= TPLS_BACKUP_EXT;
				}

				if (!file_exists($filename))
				{
					throw new Exception('�ļ� ' . $ini_filename . ' ������');
				}
				if ($action == 'modify')
				{
    				// ����ԭʼ�ļ�
    				if (!file_exists($filename . TPLS_BACKUP_EXT) && !@copy($filename, $filename . TPLS_BACKUP_EXT))
    				{
    					throw new Exception('�ļ� ' . $ini_filename . TPLS_BACKUP_EXT . ' ����ʧ��');
    				}
				}
				else
				{
				    // �ָ�ģ��
				    $old_filename = substr($filename, 0, -strlen((TPLS_BACKUP_EXT)));
				    $bak_filename = $filename;
				    if (!mod_file::write($old_filename, mod_file::read($bak_filename)))
				    {
				        throw new Exception('�ļ�' . $ini_filename . ' �ָ�ʧ��');
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
			// д�ļ�
			elseif ($action == 'save')
			{
			    $content = (empty($_POST['content'])) ? '' : htmlspecialchars_decode(stripslashes($_POST['content']));
			    if (empty($content))
			    {
			        throw new Exception('������ģ������', 10);
			    }

			    $ini_filename = (empty($_POST['filename'])) ? '' : $_POST['filename'];
			    if (empty($ini_filename))
			    {
			        throw new Exception('�ļ� ' . $ini_filename . ' ������');
			    }

				$filename = PATH_TPLS_MAIN . '/' . self::$dir_tpl_main . '/' . $ini_filename;
				// �����޸�ԭʼ�����ļ�
				if (!file_exists($filename) || substr($filename, -(strlen(TPLS_BACKUP_EXT))) == TPLS_BACKUP_EXT)
				{
					throw new Exception('�ļ� ' . $ini_filename . ' ������');
				}

				if (false == mod_file::write($filename, $content, 'wb+'))
				{
					throw new Exception('�ļ�' . $ini_filename . ' ����ʧ��');
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

				mod_login::message('�����ɹ�', (empty($_POST['referer'])) ? '?c=template_manage' : $_POST['referer']);
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
	 * ģ��ѡ��
	 *
	 * @return void
	 */
	public static function cur_tpl()
	{
        app_tpl::assign( 'npa', array('ģ�����', 'ģ��ѡ��') );
	    // ɾ��
        if(!empty($_GET['delete']))
        {
            $tpl = PATH_TPLS_MAIN . '/' . $_GET['delete'];
            if(is_dir($tpl))
            {
                mod_file::rm_recurse($tpl);
                mod_login::message('�����ɹ�', '?c=template_manage&a=cur_tpl');
            }
        }
        // ����
        elseif(!empty($_GET['apply']))
        {
            mod_config::set_configs(array('yl_dirtplmain' => $_GET['apply']));
            if(!empty($_GET['mkhtml']))
            {
                mod_make_html::flush('����������ҳ����');
                mod_make_html::make_html_index();
                mod_make_html::flush($ok);
            }
            mod_login::message('�����ɹ�', '?c=template_manage&a=cur_tpl');
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
                //��ģ��
                //��ʾ���ҳ���˳�
            }
        }

        //��ʾ����ģ��
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
                $cur_tpl = $tpl; // ��ǰģ�������
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
