<?php
/**
*
* @author dellsystem
* @package umil
* @copyright (c) 2008 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The name of the mod to be displayed during installation.
$mod_name = 'Where\'s Waldo MOD';

/*
* The name of the config variable which will hold the currently installed version
* You do not need to set this yourself, UMIL will handle setting and updating the version itself.
*/
$version_config_name = 'waldo_version';

/*
* The language file which will be included when installing
* Language entries that should exist in the language file for UMIL (replace $mod_name with the mod's name you set to $mod_name above)
* $mod_name
* 'INSTALL_' . $mod_name
* 'INSTALL_' . $mod_name . '_CONFIRM'
* 'UPDATE_' . $mod_name
* 'UPDATE_' . $mod_name . '_CONFIRM'
* 'UNINSTALL_' . $mod_name
* 'UNINSTALL_' . $mod_name . '_CONFIRM'
*/
//$language_file = 'mods/umil_auto_example';

/*
* Options to display to the user (this is purely optional, if you do not need the options you do not have to set up this variable at all)
* Uses the acp_board style of outputting information, with some extras (such as the 'default' and 'select_user' options)
*/

/*
* Optionally we may specify our own logo image to show in the upper corner instead of the default logo.
* $phpbb_root_path will get prepended to the path specified
* Image height should be 50px to prevent cut-off or stretching.
*/
$logo_img = 'images/waldo_body.png';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(
	'0.1.1'	=> array(
	),

	'0.1.0'	=> array(
		// Needs to be updated because it is now a value from 0 to 100
		'config_update' => array(
			array('waldo_probability', 1),
		),
		'config_remove' => array(
			array('waldo_horizontal'),
			array('waldo_vertical'),
		),
		'config_add' => array(
			array('waldo_exclude', 'viewonline.php'),
			// Amount of time you have to wait before seeing Waldo again
			array('waldo_wait_time', 86400),
		),
		'table_column_add' => array(
			// Timestamp for the last time that waldo was seen
			array(USERS_TABLE, 'user_waldo_time', array('TIMESTAMP', 0)),
		),
	),

	'0.0.5'	=> array(
	),
	
	'0.0.4'	=> array(
	),
	
	'0.0.3'	=> array(
	),
	
	'0.0.2'	=> array(
		'config_add'	=> array(
			array('waldo_mouseover', ''),
			array('waldo_image_link', 'images/waldo_body.png'),
		),
	),
		
	'0.0.1'	=> array(
		'config_add'	=> array(
			array('waldo_probability', '0.04'),
			array('waldo_horizontal', 1000),
			array('waldo_vertical', 400),
			array('waldo_url_link', ''),
			array('waldo_points', 0),
		),

		'module_add' => array(
			// Add category Where's Waldo MOD under the .MODs tab
			array('acp', 'ACP_CAT_DOT_MODS', 'ACP_WALDO_MOD'),

			// Add module General Configuration under the Where's Waldo category
			array('acp', 'ACP_WALDO_MOD', array(
					'module_basename'		=> 'waldo',
					'modes'				=> array('index'),
				),
			),
		),
	),
);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

/*
* Here is our custom function that will be called for version 0.9.1.
*
* @param string $action The action (install|update|uninstall) will be sent through this.
* @param string $version The version this is being run for will be sent through this.
*/
function umil_auto_example($action, $version)
{
	global $db, $table_prefix, $umil;

	if ($action == 'uninstall')
	{
		// Run this when uninstalling
		$umil->table_row_remove('phpbb_test', array('test_text' => 'This is a test message. (Edited)'));
		$umil->table_row_remove('phpbb_test', array('test_text' => 'This is another test message.'));
	}

	/**
	* Return a string
	* 	The string will be shown as the action performed (command).  It will show any SQL errors as a failure, otherwise success
	*/
	// return 'EXAMPLE_CUSTOM_FUNCTION';

	/**
	* Return an array
	* 	With the keys command and result to specify the command and the result
	*	Returning a result (other than SUCCESS) assumes a failure
	*/
	/* return array(
		'command'	=> 'EXAMPLE_CUSTOM_FUNCTION',
		'result'	=> 'FAIL',
	);*/

	/**
	* Return an array
	* 	With the keys command and result (same as above) with an array for the command.
	*	With an array for the command it will use sprintf the first item in the array with the following items.
	*	Returning a result (other than SUCCESS) assumes a failure
	*/
	/* return array(
		'command'	=> array(
			'EXAMPLE_CUSTOM_FUNCTION',
			$username,
			$number,
			$etc,
		),
		'result'	=> 'FAIL',
	);*/
}

?>
