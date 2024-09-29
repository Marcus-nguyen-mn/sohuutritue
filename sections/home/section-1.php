<div class="news-highlight">
    <div class="mc-container">
        <div class="nsh-row">
            <div class="nsh-col-left">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => 4,
                    'posts_per_page' => 1,
                );
                $post_nes_h1 = new WP_Query($args);
                if ($post_nes_h1->have_posts()) :
                    while ($post_nes_h1->have_posts()) : $post_nes_h1->the_post();
                ?>
                        <a href="<?php echo get_the_permalink(); ?>" class="post-left">
                            <div class="thumb-post">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                            </div>
                            <div class="date">
                                <?php echo get_the_date(); ?>
                            </div>
                            <div class="title">
                                <?php echo get_the_title(); ?>
                            </div>
                            <div class="excerpt">
                                <?php echo get_the_excerpt(); ?>
                            </div>
                        </a>
                <?php
                    endwhile;
                endif;

                // Reset Post Data
                wp_reset_postdata();
                ?>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => 4,
                    'posts_per_page' => 2,
                    'offset' => 1,
                );
                $post_nes_left_child = new WP_Query($args);
                if ($post_nes_left_child->have_posts()) :
                    while ($post_nes_left_child->have_posts()) : $post_nes_left_child->the_post();
                ?>
                        <a href="<?php echo get_the_permalink(); ?>" class="post-left-child">
                            <div class="title">
                                <?php echo get_the_title(); ?>
                            </div>
                        </a>
                <?php
                    endwhile;
                endif;

                // Reset Post Data
                wp_reset_postdata();
                ?>
            </div>

            <div class="nsh-col-right">
                <div class="title-bor">
                    Tin tức nổi bật
                </div>
                <div class="list-post-news-h">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'cat' => 4,
                        'posts_per_page' => 2,
                        'offset' => 3,
                    );
                    $post_nes_h2 = new WP_Query($args);
                    if ($post_nes_h2->have_posts()) :
                        while ($post_nes_h2->have_posts()) : $post_nes_h2->the_post();
                    ?>
                            <a href="<?php echo get_the_permalink(); ?>" class="item">
                                <div class="thumb-post">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                </div>
                                <div class="date">
                                    <?php echo get_the_date(); ?>
                                </div>
                                <div class="title">
                                    <?php echo get_the_title(); ?>
                                </div>
                                <div class="excerpt">
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