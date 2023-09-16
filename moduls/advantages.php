<div class="advantages margin-bottom">
    <div class="wrap">
        <div class="advantages-wrap">
            <p class="advantages-wrap__title heading"><?php echo get_field("advantages_title", "options") ?></p>
            <div class="advantages-cards">

                <?php if( have_rows("advantages", "options") ): ?>


                        <?php while( have_rows('advantages', 'options') ): the_row();

                            // переменные
                            $image = get_sub_field('advantages_img');
                            $subtitle = get_sub_field('advantages_subtitle');
                            $description = get_sub_field('advantages_description');

                            ?>


                        <div class="advantages-cards__item">
                            <div class="advantages-cards__img">
                                <img src="<?php echo $image; ?>">
                            </div>
                            <div class="advantages-cards__info">
                                <p class="advantages-cards__title subtitle-font">
                                    <?php echo $subtitle; ?>
                                </p>
                                <p class="advantages-cards__description text-font"><?php echo $description; ?></p>
                            </div>

                        </div>

                        <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
