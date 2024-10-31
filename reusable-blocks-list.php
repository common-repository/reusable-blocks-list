<?php
/*
Plugin Name: Reusable Blocks List
Plugin URI:  https://example.org
Description: This plugin is used to add a menu that lists all the reusable blocks in the admin.
Version:     1.0
Author:      DM Steve Smith
Author URI:  https://www.flixnary.com
License:     GPLv2
*/

if (!defined('ABSPATH')) {
    exit;
}

/*Add Reusable Blocks Menu START*/
add_action( 'admin_menu', 'rbl_reusable_blocks_admin_menu' );
function rbl_reusable_blocks_admin_menu() {
    add_menu_page( 'Reusable Blocks', 'Reusable Blocks', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
}
/*Add Reusable Blocks Menu END*/
?>