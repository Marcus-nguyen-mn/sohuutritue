<?php

/**
 * template name: Hỏi đáp
 */
get_header();
?>
<section class="quest_and_answer">
    <div class="mc-container">
        <div class="mc-title-hd">
            <?php echo "Hỏi - Đáp"; ?>
        </div>
        <div class="faq-container">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'hoi-dap',
                'post_status' => 'publish',
                'posts_per_page' => 10,
                'paged'          => $paged,
            );
            $post_qa = new WP_Query($args);
            if ($post_qa->have_posts()) :
                while ($post_qa->have_posts()) : $post_qa->the_post();
            ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="thumb">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" />
                            </div>
                            <div class="title">
                                <?php echo get_the_title(); ?>
                            </div>
                            <span class="arrow">&#9660;</span>
                        </div>
                        <div class="faq-answer">
                            <div class="answer">
                                Giải đáp:
                            </div>
                            <?php the_content(); ?>
                        </div>
                    </div>
            <?php
                endwhile;
                // Hiển thị phân trang
                $pagination_args = array(
                    'total'        => $post_qa->max_num_pages,
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
</section>






<?php get_footer(); ?>