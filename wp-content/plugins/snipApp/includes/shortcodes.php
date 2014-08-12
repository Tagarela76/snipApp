<?php

class Snip_App_ShortCode_Manager {

    function __construct()
    {
        if (function_exists ('add_shortcode') )
        {
            add_shortcode('searchSnipFile', array (&$this, 'viewSearchSnipFile'));
        }
    }
    
    function viewSearchSnipFile($attr) {

        ob_start();
        //get_template_part(WP_SNIP_APP_PLUGIN_DIR . '/views/searchSnipFile.php');
        include(WP_SNIP_APP_PLUGIN_DIR . '/views/searchSnipFile.php');
        $content = ob_get_contents();
        //ob_get_clean();
        ob_end_clean();
        
        return $content;
    }

}
