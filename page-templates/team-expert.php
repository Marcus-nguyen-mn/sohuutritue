<?php

/**
 * template name: Đội ngũ chuyên gia
 */
get_header();
?>

<section class="team_experts">
    <div class="mc-archive">
        <div class="mc-container">
            <div class="mc-archive-cover">
                <div class="mc-title-archive">
                    <?php echo get_field("title_dnch_page"); ?>
                </div>
                <div class="mc-desc-dncg">
                    <?php echo get_field("desc_dnch_page"); ?>
                </div>
                <div class="list-post-archive">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'doi-ngu-chuyen-gia',
                        'post_status' => 'publish',
                        'posts_per_page' => 12,
                        'paged'          => $paged,
                    );
                    $post_team = new WP_Query($args);
                    if ($post_team->have_posts()) :
                        while ($post_team->have_posts()) : $post_team->the_post();
                    ?>
                            <a href="<?php echo get_the_permalink(); ?>" class="item">
                                <div class="thumb-post">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                </div>
                                <div class="mc-common-title">
                                    <?php echo get_the_title(); ?>
                                </div>
                                <div class="mc-position">
                                    <?php echo get_field("vt_cv_chuyen_gia"); ?>
                                </div>
                                <div class="mc-common-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 24, '...'); ?>
                                </div>
                            </a>
                    <?php
                        endwhile;
                        // Hiển thị phân trang
                        $pagination_args = array(
                            'total'        => $post_team->max_num_pages,
                            'current'      => $paged,
                            'prev_text'    => __('«'),
                            'next_text'    => __('»'),
                        );

                    endif;

                    // Reset Post Data
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="mc_nav">
                    <?php echo paginate_links($pagination_args); ?>
                </div>
            </div>
        </div>
    </div>
</section>





<?php get_footer(); ?>