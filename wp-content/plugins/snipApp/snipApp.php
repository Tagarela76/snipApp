<?php
/*
Plugin Name: SnipApp
Plugin URI: http://localhost
Description: plug-in to search for documents
Version: 1.0
Author: Tagarela
Author URI: http://localhost
*/

/*  Copyright 2014  Tagarela  (email: denis.kv76@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

global $snipGeneral;
global $snipAppManager;

define( 'WP_SNIP_APP_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
//include js scripts
wp_register_script('snipFiles', '/wp-content/plugins/snipApp/includes/js/snipFiles.js');
wp_register_script('kendo', '/wp-content/plugins/snipApp/includes/js/kendo.web.min.js');
wp_enqueue_script('snipFiles');
wp_enqueue_script('kendo');

//include css scripts
wp_register_style('snipApp', '/wp-content/plugins/snipApp/includes/css/snipApp.css');
wp_register_style('kendo.common', '/wp-content/plugins/snipApp/includes/css/kendo.common.min.css');
wp_register_style('kendo.bootstrap', '/wp-content/plugins/snipApp/includes/css/kendo.bootstrap.min.css');
wp_enqueue_style('snipApp');
wp_enqueue_style('kendo.common');
wp_enqueue_style('kendo.bootstrap');

require_once WP_SNIP_APP_PLUGIN_DIR . '/settings.php';





?>