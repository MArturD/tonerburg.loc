
<div class="accept margin-bottom" id="accept">
    <div class="wrap">
        <div class="accept-wrap">
            <p class="accept-wrap-title heading"><?php echo get_field("accept_title", "options") ?></p>
            <div class="acceptance-conditions">
                <div class="accept-approval">
                    <div class="accept-approval__title subtitle-font"><?php echo get_field("accept_subtitle_one", "options") ?></div>

                    <?php if( have_rows("accept_approval", "options") ): ?>


                        <?php while( have_rows('accept_approval', 'options') ): the_row();

                            // переменные
                            $image = get_sub_field('approval_img');
                            $description = get_sub_field('accept_approval_description');

                            ?>
                            <div class="accept-approval__items">
                                <div class="accept-approval__img">
                                    <img src="<?php echo $image; ?>">
                                </div>
                                <p class="accept-approval__item text-font"><?php echo $description; ?></p>
                            </div>


                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>
                <div class="accept-rejection">
                    <div class="accept-rejection__title subtitle-font"><?php echo get_field("accept_subtitle_two", "options") ?></div>

                    <?php if( have_rows("accept_rejection", "options") ): ?>


                        <?php while( have_rows('accept_rejection', 'options') ): the_row();

                            // переменные
                            $image = get_sub_field('rejection_img');
                            $description = get_sub_field('accept_rejection_description');

                            ?>
                            <div class="accept-rejection__items">
                                <div class="accept-rejection__img">
                                    <img src="<?php echo $image; ?>">
                                </div>
                                <p class="accept-rejection__item text-font"><?php echo $description; ?></p>
                            </div>


                        <?php endwhile; ?>

                    <?php endif; ?>


                </div>
            </div>
            <div class="accept-more"><a href="<?php echo get_field("accept_more_link", "options")["url"] ?>" class="text-font"><?php echo get_field("accept_more_link", "options")["title"] ?></a></div>
        </div>
    </div>
</div>

