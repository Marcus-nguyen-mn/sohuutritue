<?php
function post_type_document()
{
    $label = array(
        'name' => __('Tài liệu'),
        'singular_name' => __('Tài liệu'),

    );
    $args = array(
        'labels' => $label,
        'description' => 'Tài liệu',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
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
        'menu_icon' => 'dashicons-media-document',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('danh-sach-tai-lieu', $args);
}
add_action('init', 'post_type_document');
