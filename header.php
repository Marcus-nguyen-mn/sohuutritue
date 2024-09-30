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

    <section class="mc_header">
        <div class="container-head">
            <div class="mc_header_cover">
                <div class="row-header">
                    <div class="logo-head">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo get_field("logo_main", "option"); ?>" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-head">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                        ));
                        ?>
                    </div>
                    <div class="right-search style-search">
                        <form role="search" method="get" class="search_form_footer" action="<?php echo esc_url(home_url('/')); ?>">
                            <div class="search_form_page_wrap">
                                <input type="search" class="search-field" placeholder="Điền từ khóa" value="<?php echo get_search_query(); ?>" name="s" />
                                <button type="submit" class="search_submit_search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="mc-header-mobile">
        <div class="container-head">
            <div class="row-header-mob">
                <div class="logo-head-mob">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_field("logo_main", "option"); ?>" alt="Logo">
                    </a>
                </div>
                <div class="bar-mob bar-mob-open-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </section>
    <div class="menu-mobile menu-mobile-hanlder fade-in-left">
        <div class="cls-menu-mob">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="logo-menu-mob">
            <img src="<?php echo get_field("logo_main", "option"); ?>" alt="Logo">
        </div>
        <div class="menu-mob-cover">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
            ));
            ?>
        </div>
        <div class="search-menu-mob">
            <div class="style-search">
                <form role="search" method="get" class="search_form_footer" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="search_form_page_wrap">
                        <input type="search" class="search-field" placeholder="Điền từ khóa" value="<?php echo get_search_query(); ?>" name="s" />
                        <button type="submit" class="search_submit_search"><i class="fa fa-search"></i></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="overlay-menu-mob">

    </div>