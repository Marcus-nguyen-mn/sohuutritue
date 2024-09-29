<?php
get_header();
?>
<section class="single_projects">
    <div class="head-single-project">
        <div class="sing-container">
            <div class="hsp-row">
                <div class="left-content">
                    <div class="sub-title">
                        <?php echo "Bài viết" ?>
                    </div>
                    <div class="main-title">
                        <?php echo get_the_title(); ?>
                    </div>
                    <div class="sub-desc">
                        <?php echo get_field("hsp_sub_descripts"); ?>
                    </div>
                    <div class="desc">
                        <?php echo get_the_excerpt(); ?>
                    </div>
                </div>
                <div class="right-img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Thumb">
                </div>
            </div>
        </div>
    </div>
    <div class="hsp-content-cover">
        <div class="sing-container">
            <div class="hsc-row">
                <div class="left-content">
                    <?php the_content(); ?>
                </div>

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>