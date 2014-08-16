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

define( 'WP_SNIP_APP_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );

//wp_register_script('jquery', '/wp-content/plugins/snipApp/includes/js/jquery-1.11.1.min.js');
wp_register_script('snipFiles', '/wp-content/plugins/snipApp/includes/js/snipFiles.js');

//wp_enqueue_script('jquery');
wp_enqueue_script('snipFiles');

require_once WP_SNIP_APP_PLUGIN_DIR . '/settings.php';

?>