<?php

require_once WP_SNIP_APP_PLUGIN_DIR . '/includes/shortcodes.php';
require_once WP_SNIP_APP_PLUGIN_DIR . '/includes/functions.php';

if (!class_exists('snipGenerateClass'))
    require_once( WP_SNIP_APP_PLUGIN_DIR . '/includes/snipGenerateClass.php');
if (!class_exists('SnipAppManagerClass'))
    require_once( WP_SNIP_APP_PLUGIN_DIR . '/includes/snipAppManagerClass.php');

$snipGeneral = new snipGenerateClass();
$shortManager = new Snip_App_ShortCode_Manager();
$snipAppManager = new SnipAppManagerClass();

register_activation_hook(WP_SNIP_APP_PLUGIN_DIR . '/snipApp.php', 'snipPluginActivate');
register_deactivation_hook(WP_SNIP_APP_PLUGIN_DIR . '/snipApp.php', 'snipPluginDeActivate');

add_action('admin_menu', 'createSnipMenu'); 

function snipPluginActivate()
{
    global $snipGeneral;
    $snipGeneral->activate();
}

function snipPluginDeActivate()
{
    global $snipGeneral;
    $snipGeneral->deactivate();
}