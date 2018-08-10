<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 8/9/2018
 * Time: 6:51 PM
 */


/*
 *  ACF Options Page
 **/

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
  'page_title' 	=> 'Theme General Settings',
  'menu_title'	=> 'Theme Settings',
  'menu_slug' 	=> 'theme-general-settings',
  'capability'	=> 'edit_posts',
  'redirect'		=> false
  ));
  
  acf_add_options_sub_page(array(
  'page_title' 	=> 'Theme Header Settings',
  'menu_title'	=> 'Header',
  'parent_slug'	=> 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
  'page_title' 	=> 'Theme Footer Settings',
  'menu_title'	=> 'Footer',
  'parent_slug'	=> 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
  'page_title' 	=> 'Post Social Media  Settings',
  'menu_title'	=> 'Post Social Media',
  'parent_slug'	=> 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
  'page_title' 	=> 'Home Page Settings',
  'menu_title'	=> 'Home Page Settings',
  'parent_slug'	=> 'theme-general-settings',
  ));
  
}