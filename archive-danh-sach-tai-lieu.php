<?php
get_header();
?>
<div class="mc-archive">
    <div class="mc-container">
        <div class="mc-archive-cover">
            <div class="mc-title-archive">
                <?php echo get_the_archive_title(); ?>
            </div>
            <div class="list-post-archive">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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


<?php get_footer(); ?>