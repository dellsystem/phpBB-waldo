<?php
/**
*
* @package acp
* @version $Id$
* @copyright (c) 2005 phpBB Group
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
                'index'     => array('title' => 'General configuration', 'auth' => 'acl_a_board', 'cat' => array('')),
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
