<!doctype html>
<html id="no_margin" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" href="<?php //echo get_template_directory_uri(); 
                            ?>/images/favico.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/lib/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/lib/slick-theme.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id='top'>

    <section class="header">
        <?php
        // wp_nav_menu(array(
        //     'theme_location' => 'main_menu',
        // ));
        ?>
    </section>