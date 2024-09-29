<section class="service-and-form">
    <div class="mc-container">
        <div class="ser_and_form">
            <div class="left-service">
                <div class="title-bor-read-more">
                    <div class="title-bor">
                        Dịch vụ
                    </div>
                    <a href="#" class="read-more">
                        Xem thêm &nbsp; &#8594;
                    </a>
                </div>
                <div class="list-post-service">
                    <div class="list-post-service-1">
                        <?php
                        $args = array(
                            'post_type' => 'dich-vu',
                            'post_status' => 'publish',
                            'posts_per_page' => 2,
                        );
                        $post_service = new WP_Query($args);
                        if ($post_service->have_posts()) :
                            while ($post_service->have_posts()) : $post_service->the_post();
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
                    <div class="list-post-service-2">
                        <?php
                        $args = array(
                            'post_type' => 'dich-vu',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                            'offset' => 2,
                        );
                        $post_service = new WP_Query($args);
                        if ($post_service->have_posts()) :
                            while ($post_service->have_posts()) : $post_service->the_post();
                        ?>
                                <a href="<?php echo get_the_permalink(); ?>" class="item">
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
                        <?php
                            endwhile;
                        endif;

                        // Reset Post Data
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <div class="right-form">
                <div class="right-form-cover">
                    <div class="title-form">
                        <?php echo get_field("title_form", "option"); ?>
                    </div>
                    <div class="desc-form">
                        <?php echo get_field("desc_form", "option"); ?>
                    </div>
                    <form>
                        <div class="one-inpt">
                            <label>Tên</label>
                            <input type="text" placeholder="Nhập họ và tên" />
                        </div>
                        <div class="one-inpt">
                            <label>Số điện thoại</label>
                            <input type="text" placeholder="Nhập số điện thoại" />
                        </div>
                        <div class="one-inpt">
                            <label>Email</label>
                            <input type="text" placeholder="Nhập Email" />
                        </div>
                        <div class="one-inpt">
                            <label>Lời nhắn</label>
                            <textarea name="" id="" placeholder="Để lại lời nhắn cho chúng tôi"></textarea>
                        </div>
                        <div class="sub-cover">
                            <button type="submit" class="mc-sub-form">Gửi ngay</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>