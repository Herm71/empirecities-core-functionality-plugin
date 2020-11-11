<?php
/**
 * Taxonomies
 *
 * This file registers any custom taxonomies
 *
 * @package      Core_Functionality
 * @since        0.0.0
 * @link         https://github.com/Herm71/blackbird-core-functionality-plugin.git
 * @author       Jason Chafin
 * @copyright    Copyright (c) 2011, Jason Chafin
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */


/**
 * Create Location Taxonomy
 * @since 0.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

function bb_register_business_category() {
	$labels = array(
		'name' => 'Business Categories',
		'singular_name' => 'Business Category',
		'search_items' =>  'Search Business Categories',
		'all_items' => 'All Business Categories',
		'parent_item' => 'Parent Business Category',
		'parent_item_colon' => 'Parent Business Category:',
		'edit_item' => 'Edit Business Category',
		'update_item' => 'Update Business Category',
		'add_new_item' => 'Add New Business Category',
		'new_item_name' => 'New Business Category Name',
		'menu_name' => 'Business Category'
	); 	

	register_taxonomy( 'business-category', array('directory'), 
		array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'business-category' ),
		)
	);
}
add_action( 'init', 'bb_register_business_category' );