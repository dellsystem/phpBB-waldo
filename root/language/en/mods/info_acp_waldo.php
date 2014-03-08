<?php
/**
*
* @package Where's Waldo MOD
* @version $Id: info_acp_waldo.php ilostwaldo@gmail.com$
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

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_WALDO_MOD'			=> "Where's Waldo MOD",
	'LOG_WALDO_UPDATE'		=> "<strong>Altered Where's Waldo MOD settings</strong>",
));

?>
