<?php
class acp_waldo
{
	var $u_action;
	var $new_config;
	function main($id, $mode)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		switch($mode)
		{
			case 'index':
			$this->page_title = 'Where\'s Waldo MOD';
 			$this->tpl_name = 'acp_waldo';
	
			$submit = ( isset($_POST['submit']) ) ? TRUE : FALSE;
			$error = array();//find out why later

			if ( $submit )
			{
				//First, validate stuff, then set_config
				//This is a long and rather inefficient way of writing this but, screw it, fix later
				$new_probability = request_var('waldo_probability', '');//has to be a string to allow for decimals lol
				if ( $new_probability >= 0 && $new_probability <= 1 )//Must be a number between 0 and 1 (inclusive)
				{
					set_config('waldo_probability', $new_probability);
				}
				else
				{
					$error[] = 'Probability needs to be between 0 and 1.';
				}

				//CREATE A LOOP FOR THIS AND FIX THIS CRAPPY CODE KTHX
				$new_url_link = request_var('waldo_url_link', '');//It's a string (obviously)
				set_config('waldo_url_link', $new_url_link); 

				$new_horizontal = request_var('waldo_horizontal', 0);
				$new_vertical = request_var('waldo_vertical', 0);
				$new_points = request_var('waldo_points', '');//also has to be a string to allow for decimals
				if ( $new_horizontal > 0 )
				{
					set_config('waldo_horizontal', $new_horizontal);
				}
				else
				{
					//only integers allowed teehee
					$error[] = 'Please enter an integer greater than zero for the horizontal maximum';
				}

				if ( $new_vertical > 0 )
				{
					set_config('waldo_vertical', $new_vertical);
				}
				else
				{
					$error[] = 'Please enter an integer greater than zero for the vertical maximum';
				}

				if ( $waldo_points >= 0 )
				{
					set_config('waldo_points', $new_points);
				}
				else
				{
					$error[] = 'Please enter a non-negative number for the number of points to award';
				}
				
			}

			$template->assign_vars(array(
				'WALDO_ENABLED_DISABLED'	=> ( $config['waldo_probability'] > 0 ) ? 'enabled' : 'disabled',
				'S_UP_INSTALLED'		=> ( defined('IN_ULTIMATE_POINTS') ) ? TRUE : FALSE,

				'S_ERROR'			=> (sizeof($error)) ? true : false,
				'ERROR_MSG'			=> implode('<br />', $error),
				'U_ACTION'			=> $this->u_action,

				'WALDO_PROBABILITY'		=> $config['waldo_probability'],
				'WALDO_URL_LINK'		=> $config['waldo_url_link'],
				'WALDO_HORIZONTAL'		=> $config['waldo_horizontal'],
				'WALDO_VERTICAL'		=> $config['waldo_vertical'],
				'WALDO_POINTS'			=> $config['waldo_points'],
				'POINTS_NAME'			=> $config['points_name'],
				)
			);
			break;
		
		}
	}
}
    ?>
