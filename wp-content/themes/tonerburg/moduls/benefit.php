<div class="benefit margin-bottom">
    <div class="wrap">
        <div class="benefit-wrap">
            <p class="benefit-wrap__title heading"> <?php echo get_field("benefit_title", "options") ?> </p>
            <div class="benefit-cards">
                <?php if( have_rows("benefit_cards", "options") ): ?>


                    <?php while( have_rows('benefit_cards', 'options') ): the_row();

                        // переменные
                        $image = get_sub_field('benefit_img');
                        $title = get_sub_field('benefit_subtitle');
                        $description = get_sub_field('benefit_description');

                        ?>
                        <div class="benefit-cards__item">
                            <div class="benefit-cards__img"><img src="<?php echo $image; ?>"></div>
                            <div class="benefit-cards__description">
                                <p class="benefit-cards__title subtitle-font"><?php echo $title; ?></p>
                                <p class="benefit-cards__info text-font"><?php echo $description; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

