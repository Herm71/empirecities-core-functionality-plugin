<?php
/**
 * Advnced Custom Fields setup
 *
 * This file registers ACF groups and fields
 * requires Advanced Custom Fields plugin
 *
 * @package      BB_Custom_Functionality
 * @since        0.0.0
 * @link         https://github.com/Herm71/blackbird-core-functionality-plugin.git
 * @author       Jason Chafin
 * @copyright    Copyright (c) 2015, Blackbird Consulting
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */


function bb_add_acf_groups_fields(){
  if( function_exists('acf_add_local_field_group') ):
  acf_add_local_field_group(array(
    'key' => 'group_5e6ecd914101d',
    'title' => 'Business Directory',
    'fields' => array(
      array(
        'key' => 'field_5e7bce18ce709',
        'label' => 'Website',
        'name' => 'website',
        'type' => 'url',
        'instructions' => 'Enter the business website',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '35',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
      array(
        'key' => 'field_5e7bd1550194c',
        'label' => 'Phone',
        'name' => 'phone',
        'type' => 'intl_tel_input',
        'instructions' => 'Enter phone number',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'separateDialCode' => 0,
        'allowDropdown' => 1,
        'initialCountry' => 'auto',
        'excludeCountries' => '',
        'onlyCountries' => '',
        'preferredCountries' => '',
      ),
      array(
        'key' => 'field_5e7bd2eeaa35e',
        'label' => 'Street Address',
        'name' => 'street_address',
        'type' => 'text',
        'instructions' => 'Enter the business street address.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5e7bd35df54b7',
        'label' => 'City',
        'name' => 'city',
        'type' => 'text',
        'instructions' => 'Enter business city',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5e7bd39b8d66d',
        'label' => 'State',
        'name' => 'state',
        'type' => 'text',
        'instructions' => 'Enter state, if not California',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 'CA',
        'placeholder' => 'CA',
        'prepend' => '',
        'append' => '',
        'maxlength' => 2,
      ),
      array(
        'key' => 'field_5e7bd3f38d66e',
        'label' => 'Zip',
        'name' => 'zip',
        'type' => 'number',
        'instructions' => 'Enter business zip code.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'directory',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
endif;
if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
    'key' => 'group_1',
    'title' => 'My Group',
    'fields' => array (
      array (
        'key' => 'field_1',
        'label' => 'Sub Title',
        'name' => 'sub_title',
        'type' => 'text',
        'prefix' => '',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
        'readonly' => 0,
        'disabled' => 0,
      )
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
  ));
  
  endif;
}


/**
 * ACF test -- Is Active? 
 * Only run code if Advanced Custom Field is active
 * Otherwise, got on with your day
 * */
function bb_acf_test(){
  if(in_array('advanced-custom-fields-pro/acf.php', apply_filters('active_plugins', get_option('active_plugins')))){
    add_action('acf/init', 'bb_add_acf_groups_fields');
  }
  else {
    print_r('ACF is not active');
  }
}

bb_acf_test();