<?php
get_header();
?>
<div class="mc_archive_shttdp">
    <div class="mc-container">
        <div class="mc_archive_shttdp_cover">
            <div class="left-dp">
                <div class="list-dp">
                    <?php
                    $terms = get_terms('cac-dia-phuong');
                    if (! empty($terms) && ! is_wp_error($terms)) {
                        foreach ($terms as $term) {
                    ?>
                            <a href="<?php echo get_term_link($term); ?>" class="item-dp">
                                <?php echo $term->name; ?>
                            </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="right-shtt">
                <div class="title-shtt">
                    <?php echo get_the_archive_title(); ?>
                </div>
                <div class="list-posts">
                    <?php $count = 1;
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php
                            if ($count <= 2) {
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
                            } else {
                            ?>
                                <a href="<?php echo get_the_permalink(); ?>" class="item2">
                                    <div class="item-cover">
                                        <div class="item-thumb">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                        </div>
                                        <div class="item-content">
                                            <div class="mc-common-title">
                                                <?php echo wp_trim_words(get_the_title(), 15, '...'); ?>
                                            </div>
                                            <div class="mc-common-excerpt">
                                                <?php echo wp_trim_words(get_the_excerpt(), 24, '...'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>
                    <?php $count++;
                        endwhile;
                    endif; ?>
                </div>
                <?php
                the_posts_pagination(array(
                    'prev_text' => __('Trước', 'textdomain'),
                    'next_text' => __('Sau', 'textdomain'),
                ));
                ?>
            </div>
        </div>
    </div>
</div>
<?php
get_template_part('sections/common/service-and-form');
?>
<?php get_footer(); ?>