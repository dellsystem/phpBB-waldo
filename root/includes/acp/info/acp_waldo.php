<?php
/**
*
* @package Where's Waldo MOD
* @version $Id: acp_dynamo.php ilostwaldo@gmail.com$
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
            'title'        => 'ACP_WALDO',
            'version'    => '0.0.1',
            'modes'        => array(
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
