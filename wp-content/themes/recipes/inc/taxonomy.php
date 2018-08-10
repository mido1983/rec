<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 8/9/2018
 * Time: 6:45 PM
 */

add_action('init', 'create_taxonomy');
function create_taxonomy()
{
  // список параметров:
  register_taxonomy('products_taxonomy', array('post'), array(
  'label'                 => '', // определяется параметром $labels->name
  'labels'                => array(
  'name'              => 'Продукты',
  'singular_name'     => 'Продукт',
  'all_items'         => 'Все продукты',
  'view_item '        => 'Показать продукт',
  'parent_item'       => 'Родительская статья',
  'parent_item_colon' => 'Родительская :',
  'edit_item'         => 'Изменить Продукт',
  'update_item'       => 'Обновить продукт',
  'add_new_item'      => 'Добавить продукт',
  'new_item_name'     => 'Новый продукт',
  'menu_name'         => 'Продукты',
  ),
  'description'           => 'Продукты', // описание таксономии
  'public'                => TRUE,
  'publicly_queryable'    => NULL, // равен аргументу public
  'show_in_nav_menus'     => TRUE, // равен аргументу public
  'show_ui'               => TRUE, // равен аргументу public
  'show_in_menu'          => TRUE, // равен аргументу show_ui
  'show_tagcloud'         => TRUE, // равен аргументу show_ui
  'show_in_rest'          => NULL, // добавить в REST API
  'rest_base'             => NULL, // $taxonomy
  'hierarchical'          => FALSE,
  'update_count_callback' => '',
  'rewrite'               => TRUE,
    //'query_var'             => $taxonomy, // название параметра запроса
  'capabilities'          => array(),
  'meta_box_cb'           => FALSE, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
  'show_admin_column'     => FALSE, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
  '_builtin'              => FALSE,
  'show_in_quick_edit'    => NULL, // по умолчанию значение show_ui
  ));
  
  
  register_taxonomy('kitchen_taxonomy', array('post'), array(
  'label'                 => '', // определяется параметром $labels->name
  'labels'                => array(
  'name'              => 'Кухни',
  'singular_name'     => 'Кухня',
  'all_items'         => 'Все кухни',
  'view_item '        => 'Показать кухни',
  
  'edit_item'         => 'Изменить Кухню',
  'update_item'       => 'Обновить Кухню',
  'add_new_item'      => 'Добавить Кухню',
  'new_item_name'     => 'Новая Кухня',
  'menu_name'         => 'Кухни',
  ),
  'description'           => 'Кухню', // описание таксономии
  'public'                => TRUE,
  'publicly_queryable'    => NULL, // равен аргументу public
  'show_in_nav_menus'     => TRUE, // равен аргументу public
  'show_ui'               => TRUE, // равен аргументу public
  'show_in_menu'          => TRUE, // равен аргументу show_ui
  'show_tagcloud'         => TRUE, // равен аргументу show_ui
  'show_in_rest'          => NULL, // добавить в REST API
  'rest_base'             => NULL, // $taxonomy
  'hierarchical'          => FALSE,
  'update_count_callback' => '',
  'rewrite'               => TRUE,
    //'query_var'             => $taxonomy, // название параметра запроса
  'capabilities'          => array(),
  'meta_box_cb'           => FALSE, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
  'show_admin_column'     => FALSE, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
  '_builtin'              => FALSE,
  'show_in_quick_edit'    => NULL, // по умолчанию значение show_ui
  ));
  
  register_taxonomy('type_of_dish', array('post'), array(
  'label'                 => '', // определяется параметром $labels->name
  'labels'                => array(
  'name'              => 'Типы блюд',
  'singular_name'     => 'Тип блюда',
  'all_items'         => 'Все Типы блюд',
  'view_item '        => 'Показать Типы блюд',
  
  'edit_item'         => 'Изменить Тип блюда',
  'update_item'       => 'Обновить Тип блюда',
  'add_new_item'      => 'Добавить Тип блюда',
  'new_item_name'     => 'Новый Тип блюда',
  'menu_name'         => 'Типы блюд',
  ),
  'description'           => 'Типы блюд', // описание таксономии
  'public'                => TRUE,
  'publicly_queryable'    => NULL, // равен аргументу public
  'show_in_nav_menus'     => TRUE, // равен аргументу public
  'show_ui'               => TRUE, // равен аргументу public
  'show_in_menu'          => TRUE, // равен аргументу show_ui
  'show_tagcloud'         => TRUE, // равен аргументу show_ui
  'show_in_rest'          => NULL, // добавить в REST API
  'rest_base'             => NULL, // $taxonomy
  'hierarchical'          => FALSE,
  'update_count_callback' => '',
  'rewrite'               => TRUE,
    //'query_var'             => $taxonomy, // название параметра запроса
  'capabilities'          => array(),
  'meta_box_cb'           => FALSE, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
  'show_admin_column'     => FALSE, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
  '_builtin'              => FALSE,
  'show_in_quick_edit'    => NULL, // по умолчанию значение show_ui
  ));
  
  register_taxonomy('Occasion', array('post'), array(
  'label'                 => '', // определяется параметром $labels->name
  'labels'                => array(
  'name'              => 'Повод',
  'singular_name'     => 'Повод',
  
  'edit_item'         => 'Изменить Повод',
  'update_item'       => 'Обновить Повод',
  'add_new_item'      => 'Добавить Повод',
  'new_item_name'     => 'Новый Повод',
  'menu_name'         => 'Повод',
  ),
  'description'           => 'Повод', // описание таксономии
  'public'                => TRUE,
  'publicly_queryable'    => NULL, // равен аргументу public
  'show_in_nav_menus'     => TRUE, // равен аргументу public
  'show_ui'               => TRUE, // равен аргументу public
  'show_in_menu'          => TRUE, // равен аргументу show_ui
  'show_tagcloud'         => TRUE, // равен аргументу show_ui
  'show_in_rest'          => NULL, // добавить в REST API
  'rest_base'             => NULL, // $taxonomy
  'hierarchical'          => FALSE,
  'update_count_callback' => '',
  'rewrite'               => TRUE,
    //'query_var'             => $taxonomy, // название параметра запроса
  'capabilities'          => array(),
  'meta_box_cb'           => FALSE, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
  'show_admin_column'     => FALSE, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
  '_builtin'              => FALSE,
  'show_in_quick_edit'    => NULL, // по умолчанию значение show_ui
  ));
  
  register_taxonomy('source', array('post'), array(
  'label'                 => '', // определяется параметром $labels->name
  'labels'                => array(
  'name'              => 'Источник',
  'singular_name'     => 'Источник',
  
  'edit_item'         => 'Изменить Источник',
  'update_item'       => 'Обновить Источник',
  'add_new_item'      => 'Добавить Источник',
  'new_item_name'     => 'Новый Источник',
  'menu_name'         => 'Источник',
  ),
  'description'           => 'Источник', // описание таксономии
  'public'                => TRUE,
  'publicly_queryable'    => NULL, // равен аргументу public
  'show_in_nav_menus'     => TRUE, // равен аргументу public
  'show_ui'               => TRUE, // равен аргументу public
  'show_in_menu'          => TRUE, // равен аргументу show_ui
  'show_tagcloud'         => TRUE, // равен аргументу show_ui
  'show_in_rest'          => NULL, // добавить в REST API
  'rest_base'             => NULL, // $taxonomy
  'hierarchical'          => FALSE,
  'update_count_callback' => '',
  'rewrite'               => TRUE,
    //'query_var'             => $taxonomy, // название параметра запроса
  'capabilities'          => array(),
  'meta_box_cb'           => FALSE, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
  'show_admin_column'     => FALSE, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
  '_builtin'              => FALSE,
  'show_in_quick_edit'    => NULL, // по умолчанию значение show_ui
  ));
  
  
  
  
  
  
  /* End of function */
}
