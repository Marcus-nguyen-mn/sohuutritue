<?php
get_header();
?>
<section class="mc_single">
    <div class="mc-container">
        <div class="mc_single_contain">
            <div class="mc_single_left">
                <div class="title">
                    <?php echo get_the_title(); ?>
                </div>
                <div class="thumb">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                </div>
                <div class="content">
                    <?php the_content(); ?>
                </div>
                <div class="info_contact">
                    <div class="info_contact_content">
                        <?php echo get_field("info_contact_single", "option"); ?>
                    </div>
                    <a href="tel: <?php echo get_field("button_contact_phone_single_page", "option"); ?>">Liên hệ ngay</a>
                </div>
            </div>
            <div class="mc_single_right">
                <div class="mc_single_right_cover">
                    <div class="news">
                        <div class="title-news">
                            Tin tức
                        </div>
                        <div class="list-post-news">
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'cat' => 3,
                                'posts_per_page' => 4,
                            );
                            $post_trademark = new WP_Query($args);
                            if ($post_trademark->have_posts()) :
                                while ($post_trademark->have_posts()) : $post_trademark->the_post();
                            ?>
                                    <a href="<?php echo get_the_permalink(); ?>" class="item">
                                        <div class="item-cover">
                                            <div class="thumb">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                            </div>
                                            <div class="right-cover">
                                                <div class="mc-common-date">
                                                    <?php echo get_the_date(); ?>
                                                </div>
                                                <div class="mc-common-title">
                                                    <?php echo wp_trim_words(get_the_title(), 15, '...'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                            <?php
                                endwhile;
                            endif;

                            // Reset Post Data
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="service_in_single">
                        <div class="title_service">
                            Dịch vụ
                        </div>
                        <div class="list-post-service-in-single">
                            <?php
                            $args = array(
                                'post_type' => 'dich-vu',
                                'post_status' => 'publish',
                                'posts_per_page' => 4,
                            );
                            $post_trademark = new WP_Query($args);
                            if ($post_trademark->have_posts()) :
                                while ($post_trademark->have_posts()) : $post_trademark->the_post();
                            ?>
                                    <a href="<?php echo get_the_permalink(); ?>" class="item">
                                        <div class="thumb-post">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                        </div>
                                        <div class="mc-common-date">
                                            <?php echo get_the_date(); ?>
                                        </div>
                                        <div class="mc-common-title">
                                            <?php echo wp_trim_words(get_the_title(), 15, '...'); ?>
                                        </div>
                                        <div class="mc-common-excerpt">
                                            <?php echo wp_trim_words(get_the_excerpt(), 24, '...'); ?>
                                        </div>
                                    </a>
                            <?php
                                endwhile;
                            endif;

                            // Reset Post Data
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_template_part('sections/common/trademark-viet');
?>
<?php get_footer(); ?>