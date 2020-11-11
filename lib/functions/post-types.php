<?php
/**
 * Post Types
 *
 * This file registers any custom post types
 *
 * @package      Core_Functionality
 * @since        0.0.0
 * @link         https://github.com/Herm71/blackbird-core-functionality-plugin.git
 * @author       Jason Chafin
 * @copyright    Copyright (c) 2011, Jason Chafin
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Create Business Directory post type
 * @since 0.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function bb_register_directory_post_type() {
	$labels = array(
		'name' => 'Directory Entries',
		'singular_name' => 'Directory Entry',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Directory Entry',
		'edit_item' => 'Edit Directory Entry',
		'new_item' => 'New Directory Entry',
		'view_item' => 'View Directory Entry',
		'search_items' => 'Search Directory Entries',
		'not_found' =>  'No Directory Entries found',
		'not_found_in_trash' => 'No Directory Entries found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'Directory'
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
    'hierarchical' => false,
    'menu_icon' => 'dashicons-id',
		'menu_position' => null,
		'supports' => array('title','thumbnail','excerpt')
	); 

	register_post_type( 'directory', $args );
}
add_action( 'init', 'bb_register_directory_post_type' );	
