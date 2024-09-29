<section class="mc_mbshtt">
    <div class="mc-container">
        <div class="mbshtt-row">
            <div class="mbshtt-col-left">
                <?php
                $args = array(
                    'post_type' => 'so-huu-tri-tue-dp',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                );
                $post_trademark = new WP_Query($args);
                if ($post_trademark->have_posts()) :
                    while ($post_trademark->have_posts()) : $post_trademark->the_post();
                ?>
                        <a href="<?php echo get_the_permalink(); ?>" class="item">
                            <div class="thumb-post">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                            </div>
                            <div class="item-left-cover">
                                <div class="mc-common-date">
                                    <?php echo get_the_date(); ?>
                                </div>
                                <div class="mc-common-title">
                                    <?php echo wp_trim_words(get_the_title(), 15, '...'); ?>
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
            <div class="mbshtt-col-right">
                <div class="title-bor">
                    Sàn mua bán sở hữu trí tuệ
                </div>
                <?php
                $args = array(
                    'post_type' => 'so-huu-tri-tue-dp',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'offset' => 1,
                );
                $post_trademark = new WP_Query($args);
                if ($post_trademark->have_posts()) :
                    while ($post_trademark->have_posts()) : $post_trademark->the_post();
                ?>
                        <a href="<?php echo get_the_permalink(); ?>" class="item-right">
                            <div class="item-right-col1">
                                <div class="thumb-post">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                </div>
                            </div>
                            <div class="item-right-col2">
                                <div class="mc-common-date">
                                    <?php echo get_the_date(); ?>
                                </div>
                                <div class="mc-common-title">
                                    <?php echo get_the_title(); ?>
                                </div>
                                <div class="mc-common-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 24, '...'); ?>
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
    </div>
</section>