<section class="mc-footer">
    <div class="mc-container">
        <div class="footer-row">
            <div class="ft-left">
                <div class="logo">
                    <img src="<?php echo get_field("logo_main", "option"); ?>" alt="Logo">
                </div>
                <div class="shtt-foter">
                    <?php echo get_field("shtt_footer_txt", "option"); ?>
                </div>
                <div class="info-footer">
                    <div class="one-info">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="content-info">
                            Địa chỉ: <?php echo get_field("address_footer", "option"); ?>
                        </div>
                    </div>
                    <div class="one-info">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="content-info">
                            Hotline: <?php echo get_field("phone_footer", "option"); ?>
                        </div>
                    </div>
                    <div class="one-info">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="content-info">
                            Email: <?php echo get_field("email_footer", "option"); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft-right">
                <?php echo get_field("content_2ligh_fote", "option"); ?>
            </div>
        </div>
    </div>
</section>
<div class="copyright">
    <?php echo get_field("content_copyright", "option"); ?>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/lib/slick.min.js"></script>
<?php wp_footer() ?>
</body>

</html>