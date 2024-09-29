<?php
function post_type_services()
{
    $label = array(
        'name' => __('Dịch vụ'),
        'singular_name' => __('Dịch vụ'),

    );
    $args = array(
        'labels' => $label,
        'description' => 'Dịch vụ',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
        ),
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-schedule',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('dich-vu', $args);
}
add_action('init', 'post_type_services');
