<?php
function post_type_teams()
{
    $label = array(
        'name' => __('Đội ngũ chuyên gia'),
        'singular_name' => __('Đội ngũ chuyên gia'),

    );
    $args = array(
        'labels' => $label,
        'description' => 'Đội ngũ chuyên gia',
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
        'menu_icon' => 'dashicons-universal-access',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => false,
        'capability_type' => 'post',
    );
    register_post_type('doi-ngu-chuyen-gia', $args);
}
add_action('init', 'post_type_teams');
