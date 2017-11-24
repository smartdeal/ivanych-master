<?
/* 
* Add custom posts
*/

add_action( 'init', 'custom_post_type', 0 );
function custom_post_type() {



    $labels = array(
        'name'                => _x( 'Полезное', 'Post Type General Name', 'ivanych' ),
        'singular_name'       => _x( 'Полезное', 'Post Type Singular Name', 'ivanych' ),
        'menu_name'           => __( 'Полезное', 'ivanych' ),
        'parent_item_colon'   => __( 'Родит. Статья', 'ivanych' ),
        'all_items'           => __( 'Все Статьи', 'ivanych' ),
        'view_item'           => __( 'Смотреть Статью', 'ivanych' ),
        'add_new_item'        => __( 'Добавить новую Статью', 'ivanych' ),
        'add_new'             => __( 'Добавить новую', 'ivanych' ),
        'edit_item'           => __( 'Редактировать Статью', 'ivanych' ),
        'update_item'         => __( 'Обновить Статью', 'ivanych' ),
        'search_items'        => __( 'Искать Статью', 'ivanych' ),
        'not_found'           => __( 'Не найдено', 'ivanych' ),
        'not_found_in_trash'  => __( 'Не найдено в корзине', 'ivanych' ),
    );

    $args = array(
        'label'               => __( 'Полезное', 'ivanych' ),
        'description'         => __( '', 'ivanych' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments'),
        'taxonomies'          => array('post_tag'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    // register_post_type( 'stati', $args );

    $labels = array(
        'name'                => _x( 'Портфолио', 'Post Type General Name', 'ivanych' ),
        'singular_name'       => _x( 'Портфолио', 'Post Type Singular Name', 'ivanych' ),
        'menu_name'           => __( 'Портфолио', 'ivanych' ),
        'parent_item_colon'   => __( 'Родит. Портфолио', 'ivanych' ),
        'all_items'           => __( 'Все Портфолио', 'ivanych' ),
        'view_item'           => __( 'Смотреть Портфолио', 'ivanych' ),
        'add_new_item'        => __( 'Добавить новою Портфолио', 'ivanych' ),
        'add_new'             => __( 'Добавить новою', 'ivanych' ),
        'edit_item'           => __( 'Редактировать Портфолио', 'ivanych' ),
        'update_item'         => __( 'Обновить Портфолио', 'ivanych' ),
        'search_items'        => __( 'Искать Портфолио', 'ivanych' ),
        'not_found'           => __( 'Не найдено', 'ivanych' ),
        'not_found_in_trash'  => __( 'Не найдено в корзине', 'ivanych' ),
    );

    $args = array(
        'label'               => __( 'Услуги', 'ivanych' ),
        'description'         => __( '', 'ivanych' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
        'taxonomies'          => array('post_tag'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // register_post_type( 'portfolio', $args );

    $labels = array(
        'name'                => _x( 'Контент-блоки', 'Post Type General Name', 'ivanych' ),
        'singular_name'       => _x( 'Контент-блок', 'Post Type Singular Name', 'ivanych' ),
        'menu_name'           => __( 'Контент-блоки', 'ivanych' ),
        'parent_item_colon'   => __( 'Родит. Контент-блок', 'ivanych' ),
        'all_items'           => __( 'Все Контент-блоки', 'ivanych' ),
        'view_item'           => __( 'Смотреть Контент-блок', 'ivanych' ),
        'add_new_item'        => __( 'Добавить новый Контент-блок', 'ivanych' ),
        'add_new'             => __( 'Добавить новый', 'ivanych' ),
        'edit_item'           => __( 'Редактировать Контент-блок', 'ivanych' ),
        'update_item'         => __( 'Обновить Контент-блок', 'ivanych' ),
        'search_items'        => __( 'Искать Контент-блок', 'ivanych' ),
        'not_found'           => __( 'Не найдено', 'ivanych' ),
        'not_found_in_trash'  => __( 'Не найдено в корзине', 'ivanych' ),
    );

    $args = array(
        'label'               => __( 'Контент-блоки', 'ivanych' ),
        'description'         => __( '', 'ivanych' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'revisions', ),
        'taxonomies'          => array(''),
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => false,
        'menu_position'       => 20,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'capability_type'     => 'page',
    );

    register_post_type( 'block', $args );


    unregister_post_type( 'forms' );

    // register_taxonomy('race-type', array('team-ivanych'), array(
    //     'labels'                => array(
    //         'name'              => 'Тип гонок',
    //         'singular_name'     => 'Тип гонок',
    //         'search_items'      => 'Искать Тип гонок',
    //         'all_items'         => 'Все Типы гонок',
    //         'parent_item'       => 'Родит. Тип гонок',
    //         'parent_item_colon' => 'Родит. Тип гонок:',
    //         'edit_item'         => 'Ред. Тип гонок',
    //         'update_item'       => 'Обновить Тип гонок',
    //         'add_new_item'      => 'Добавить Тип гонок',
    //         'new_item_name'     => 'Новый Тип гонок',
    //         'menu_name'         => 'Тип гонок',
    //     ),
    //     'description'           => 'Типы гонок',
    //     'public'                => true,
    //     'show_tagcloud'         => true,
    //     'hierarchical'          => true,
    //     'show_admin_column'     => true,
    // ) );    

}

