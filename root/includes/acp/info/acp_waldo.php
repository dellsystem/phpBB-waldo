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
class acp_waldo_info
{
    function module()
    {
        return array(
            'filename'    => 'acp_waldo',
            'title'        => 'ACP_WALDO_MOD',
            'version'    => '0.0.1',
            'modes'        => array(
            	// Maybe add actual permissions later
                'index'     => array('title' => 'ACP_GENERAL_CONFIGURATION', 'auth' => 'acl_a_board', 'cat' => array('')),
            ),
        );
    }
 
    function install()
    {
    }
 
    function uninstall()
    {
    }
}
?>
