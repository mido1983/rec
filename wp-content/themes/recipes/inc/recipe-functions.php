<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 8/9/2018
 * Time: 6:49 PM
 */


/**
Редирект записи, когда поисковый запрос выдает один результат
 */
add_action('template_redirect', 'single_result');
function single_result() {
  if (is_search()) {
    global $wp_query;
    if ($wp_query->post_count == 1) {
      wp_redirect( get_permalink( $wp_query->posts['0']->ID ) );
    }
  }
}

/**
 *  Отображение миниатюры при редактировании записи и обзоре страницы
 */
if ( !function_exists('fb_AddThumbColumn') && function_exists('add_theme_support') ) {
// for post and page
  add_theme_support('post-thumbnails', array( 'post', 'page' ) );
  function fb_AddThumbColumn($cols) {
    $cols['thumbnail'] = __('Thumbnail');
    return $cols;
  }
  
  function fb_AddThumbValue($column_name, $post_id) {
    $width = (int) 35;
    $height = (int) 35;
    if ( 'thumbnail' == $column_name ) {
      // thumbnail of WP 2.9
      $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
      
      // image from gallery
      $attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
      
      if ($thumbnail_id)
        $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
      elseif ($attachments) {
        foreach ( $attachments as $attachment_id => $attachment ) {
          $thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
        }
      }
      if ( isset($thumb) && $thumb ) { echo $thumb; }
      else { echo __('None'); }
    }
  }

// for posts
  add_filter( 'manage_posts_columns', 'fb_AddThumbColumn' );
  add_action( 'manage_posts_custom_column', 'fb_AddThumbValue', 10, 2 );

// for pages
  add_filter( 'manage_pages_columns', 'fb_AddThumbColumn' );
  add_action( 'manage_pages_custom_column', 'fb_AddThumbValue', 10, 2 );
}

/**
 * Добавление своего поля при публикации записи / страницы
 */
add_action('publish_page', 'add_custom_field_automatically');
add_action('publish_post', 'add_custom_field_automatically');

function add_custom_field_automatically($post_ID) {
  global $wpdb;
  if(!wp_is_post_revision($post_ID)) {
    add_post_meta($post_ID, 'field-name', 'GHFHHHFHFHDJKSHSJDHSKJGHSKGJH', true);
  }
}

/**
 * Скрываем визуальный редактор в админке для шаблона "POST"
 *
 */
function onwp_disable_content_editor() {
$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  $template_file = get_post_meta($post_id, '_wp_page_template', true);
    remove_post_type_support( 'post', 'editor' );
}

add_action( 'admin_init', 'onwp_disable_content_editor' );

/*
 * настройки плагина "рейтинг"
 */
//
//add_filter( 'wp_postratings_schema_itemtype', 'wp_postratings_schema_itemtype' );
//function wp_postratings_schema_itemtype( $itemtype ) {
//  return 'itemscope itemtype="http://schema.org/Recipe"';
//}
//add_filter( 'wp_postratings_site_logo', 'wp_postratings_site_logo' );
//function wp_postratings_site_logo( $url ) {
//  return 'http://placehold.it/350/150.png';
//}
function custom_rating_image_extension() {
  return 'png';
}
add_filter( 'wp_postratings_image_extension', 'custom_rating_image_extension' );

add_action('admin_head', 'acf_table_styles');
add_action('admin_head', 'acf_table_styles');

function acf_table_styles() {
  echo '<style>
    .acf-table-header-cont,
    .acf-table-body-cont {
        white-space: pre-line;
    }
  </style>';
}