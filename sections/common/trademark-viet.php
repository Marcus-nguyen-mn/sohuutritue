<section class="trademark_viet">
    <div class="mc-container">
        <div class="title-bor-read-more">
            <div class="title-bor">
                Thương hiệu Việt
            </div>
            <a href="#" class="read-more">
                Xem thêm &nbsp; &#8594;
            </a>
        </div>
        <div class="slide-trademark-viet-cover">
            <div class="slide-trademark-viet">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => 3,
                    'posts_per_page' => 9,
                );
                $post_trademark = new WP_Query($args);
                if ($post_trademark->have_posts()) :
                    while ($post_trademark->have_posts()) : $post_trademark->the_post();
                ?>
                        <a href="<?php echo get_the_permalink(); ?>" class="item">
                            <div class="item-cover">
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