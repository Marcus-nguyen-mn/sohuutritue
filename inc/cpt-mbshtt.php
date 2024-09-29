<?php
function post_type_mbshttdp()
{
    $label = array(
        'name' => __('Sở hữu trí tuệ địa phương'),
        'singular_name' => __('Sở hữu trí tuệ địa phương'),

    );
    $args = array(
        'labels' => $label,
        'description' => 'Sàn mua bán sở hữu trí tuệ địa phương',
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
        'menu_icon' => 'dashicons-editor-paste-word',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('so-huu-tri-tue-dp', $args);
}
add_action('init', 'post_type_mbshttdp');

function taxonomy_mbshttdp()
{
    $labels = array(
        'name' => 'Các địa phương',
        'singular' => 'Các địa phương',
        'menu_name' => 'Các địa phương'
    );
    $args = array(
        'labels'                   => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy('cac-dia-phuong', 'so-huu-tri-tue-dp', $args);
}
add_action('init', 'taxonomy_mbshttdp', 0);
