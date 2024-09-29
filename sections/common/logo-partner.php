<section class="logo_partner">
    <div class="mc-container">
        <div class="logo-partner-contain">
            <div class="list-logo">
                <?php
                // Check rows exists.
                if (have_rows('list_logo_partner', 'option')):

                    // Loop through rows.
                    while (have_rows('list_logo_partner', 'option')) : the_row();
                ?>
                        <div class="item">
                            <img src="<?php echo get_sub_field("logo_item_hom", "option"); ?>" alt="Logo Partner">
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>