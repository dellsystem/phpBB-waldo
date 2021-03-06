<?php
/**
*
* @package Where's Waldo MOD
* @version $Id: acp_waldo.php ilostwaldo@gmail.com$
* @copyright (c) 2011 dellsystem (www.dellsystem.me)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_waldo
{
	var $u_action;
	var $new_config;
	function main($id, $mode)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		$user->add_lang('mods/waldo/acp');
		
		$submit = ( isset($_POST['submit']) ) ? TRUE : FALSE;
		
		switch($mode)
		{
			case 'index':
			$this->page_title = 'ACP_WALDO_MOD';
 			$this->tpl_name = 'acp_waldo';
	
			$error = array();

			if ($submit)
			{
				// First store all the post variables
				$new_probability = request_var('waldo_probability', 0.0);
				$new_url_link = utf8_normalize_nfc(request_var('waldo_url_link', '', true));
				$new_image_link = utf8_normalize_nfc(request_var('waldo_image_link', '', true));
				$new_mouseover = utf8_normalize_nfc(request_var('waldo_mouseover', '', true));
				$new_points = request_var('waldo_points', 0.0);
				$new_exclude = request_var('waldo_exclude', '');
				$new_wait_time = request_var('waldo_wait_time', 0);

				if ($new_probability >= 0 && $new_probability <= 100)
				{
					set_config('waldo_probability', $new_probability);
				}
				else
				{
					$error[] = $user->lang['PROBABILITY_ERROR'];
				}

				if ($new_wait_time >= 0)
				{
					set_config('waldo_wait_time', $new_wait_time);
				}
				else
				{
					$error[] = $user->lang['WAIT_TIME_ERROR'];
				}

				set_config('waldo_url_link', $new_url_link);
				set_config('waldo_mouseover', $new_mouseover);
				set_config('waldo_image_link', $new_image_link);
				set_config('waldo_exclude', $new_exclude);

				if ($new_points >= 0)
				{
					set_config('waldo_points', $new_points);
				}
				else
				{
					$error[] = $user->lang['WALDO_POINTS_ERROR'];
				}

				// If there are no errors, display a success message; else, show the error box
				if (!sizeof($error))
				{
					add_log('admin', 'LOG_WALDO_UPDATE');
					trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
				}
			}

			$template->assign_vars(array(
				'S_UP_INSTALLED'		=> defined('IN_ULTIMATE_POINTS'),
				'S_UP_ENABLED'			=> $config['points_enable'],

				'S_ERROR'				=> (sizeof($error)) ? true : false,
				'ERROR_MSG'				=> implode('<br />', $error),
				'U_ACTION'				=> $this->u_action,

				'WALDO_PROBABILITY'		=> $config['waldo_probability'],
				'WALDO_URL_LINK'		=> $config['waldo_url_link'],
				'WALDO_IMAGE_LINK'		=> $config['waldo_image_link'],
				'WALDO_MOUSEOVER'		=> $config['waldo_mouseover'],
				'WALDO_EXCLUDE'			=> $config['waldo_exclude'],
				'WALDO_POINTS'			=> $config['waldo_points'],
				'POINTS_NAME'			=> $config['points_name'],
				'WALDO_WAIT_TIME'		=> $config['waldo_wait_time'],
				)
			);
			break;
		
		}
	}
}
    ?>
