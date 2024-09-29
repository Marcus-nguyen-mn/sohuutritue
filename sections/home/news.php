<section class="mc_news">
    <div class="mc-container">
        <div class="title-bor-read-more">
            <div class="title-bor">
                Tin tức mới nhất
            </div>
            <a href="#" class="read-more">
                Xem thêm &nbsp; &#8594;
            </a>
        </div>
        <div class="mc_news_cover">
            <div class="mc_news_row">
                <div class="news-col-left">
                    <div class="news-left-cover">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'cat' => 2,
                            'posts_per_page' => 6,
                        );
                        $post_news = new WP_Query($args);
                        if ($post_news->have_posts()) :
                            while ($post_news->have_posts()) : $post_news->the_post();
                        ?>
                                <a href="<?php echo get_the_permalink(); ?>" class="item-col">
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
                <div class="news-col-right">
                    <div class="news-right-cover">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'cat' => 2,
                            'posts_per_page' => 6,
                            'offset' => 6,
                        );
                        $post_news2 = new WP_Query($args);
                        if ($post_news2->have_posts()) :
                            while ($post_news2->have_posts()) : $post_news2->the_post();
                        ?>
                                <a href="<?php echo get_the_permalink(); ?>" class="item-right">
                                    <div class="item-right-thumb-co">
                                        <div class="thumb-post">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                        </div>
                                    </div>
                                    <div class="item-right-content">
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
        </div>
    </div>
</section>