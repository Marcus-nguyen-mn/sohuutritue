<?php
function post_type_qa()
{
    $label = array(
        'name' => __('Hỏi đáp'),
        'singular_name' => __('Hỏi đáp'),

    );
    $args = array(
        'labels' => $label,
        'description' => 'Hỏi đáp',
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
        'menu_icon' => 'dashicons-format-chat',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => false,
        'capability_type' => 'post',
    );
    register_post_type('hoi-dap', $args);
}
add_action('init', 'post_type_qa');
