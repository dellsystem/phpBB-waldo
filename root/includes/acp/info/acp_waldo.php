<?php

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
