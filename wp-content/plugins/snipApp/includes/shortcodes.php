<?php

require( dirname(__FILE__) . '/../../../../wp-load.php' );

class Snip_App_ShortCode_Manager
{
    /**
     * construct
     */
    function __construct()
    {
        if (function_exists('add_shortcode')) {
            add_shortcode('searchSnipFile', array(&$this, 'viewSearchSnipFile'));
        }
    }

    /**
     * 
     * @global type $snipGeneral
     * @param type $attr
     * 
     * @return type
     */
    function viewSearchSnipFile($attr)
    {
        global $snipGeneral;
        //get options
        $options = $snipGeneral->getOptions();
        $treeUrl = $options['snipAppUrl'].'/apiSnip/getFolderTreeArray?folderId=1';
        ob_start();
        //get_template_part(WP_SNIP_APP_PLUGIN_DIR . '/views/searchSnipFile.php');
        include(WP_SNIP_APP_PLUGIN_DIR . '/views/searchSnipFile.php');
        $content = ob_get_contents();
        //ob_get_clean();
        ob_end_clean();
        
        return $content;
    }

}
