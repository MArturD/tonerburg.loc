<div class="rating margin-bottom">
    <div class="wrap">
        <div class="rating-wrap">
            <div class="rating-wrap__title heading"> <?php echo get_field("slider_title", "options") ?>
            </div>
            <div class="rating-wrap__info">
                <div class="rating-wrap__img"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/check-mark.svg"></div>
                <p class="rating-wrap__description"><a href="<?php echo get_field("slider_link", "options")["url"] ?>" class="text-font"><?php echo get_field("slider_link", "options")["title"] ?></a></p>
            </div>
        </div>
        <div class="rating-slider">

            <div class="slider-wrap">

                <div class="rating-slider__items autoplay">

                    <?php if( have_rows("slider", "options") ): ?>


                        <?php while( have_rows('slider', 'options') ): the_row();

                            // переменные
                            $image = get_sub_field('slider_star');
                            $title = get_sub_field('slider_name');
                            $description = get_sub_field('slider_description');

                            ?>


                            <div class="rating-slider__item">
                                <div class="rating-slider__stars">
                                    <div class="star">
                                        <img src="<?php echo $image; ?>">
                                    </div>
                                </div>
                                <div class="rating-slider__title subtitle-font"><?php echo $title; ?></div>
                                <div class="rating-slider__description text-font-two"><?php echo $description; ?>
                                </div>
                            </div>


                        <?php endwhile; ?>

                    <?php endif; ?>
<!---->
<!--                    <div class="rating-slider__item">-->
<!--                        <div class="rating-slider__stars">-->
<!--                            <div class="star">-->
<!--                                <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icons/stars.png">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="rating-slider__title subtitle-font">Сергей</div>-->
<!--                        <div class="rating-slider__description text-font-two">Продавал картриджи как то. Приятная-->
<!--                            контора. Быстро ответили-->
<!--                            на запрос и согласовали встречу в удобное время. Сравнил цены с другими и у них оказались-->
<!--                            самые-->
<!--                            интересные. Рекомендую! Нравится-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="rating-slider__item">-->
<!--                        <div class="rating-slider__stars">-->
<!--                            <div class="star">-->
<!--                                <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icons/stars.png">-->
<!--                            </div>-->
<!--                            <div class="star">-->
<!--                                <img src="" alt="">-->
<!--                            </div>-->
<!--                            <div class="star">-->
<!--                                <img src="" alt="">-->
<!--                            </div>-->
<!--                            <div class="star">-->
<!--                                <img src="" alt="">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="rating-slider__title subtitle-font">Даниил</div>-->
<!--                        <div class="rating-slider__description text-font-two">Это третья скупка в Питере, куда я возил-->
<!--                            картриджи. Честно,-->
<!--                            цена самая лучшая. Закупщик свое дело знает, все по времени четко. Однозначно можно с ними-->
<!--                            работать-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="rating-slider__item">-->
<!--                        <div class="rating-slider__stars">-->
<!--                            <div class="star">-->
<!--                                <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icons/stars.png">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="rating-slider__title subtitle-font">Павел</div>-->
<!--                        <div class="rating-slider__description text-font-two">Приезжал только из-за цен. далеко было-->
<!--                            ехать, но приемщик-->
<!--                            повеселил, даже кофе угостил-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="rating-slider__item">-->
<!--                        <div class="rating-slider__stars">-->
<!--                            <div class="star">-->
<!--                                <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icons/stars.png">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="rating-slider__title subtitle-font">Павел</div>-->
<!--                        <div class="rating-slider__description text-font-two">Приезжал только из-за цен. далеко было-->
<!--                            ехать, но приемщик-->
<!--                            повеселил, даже кофе угостил-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>

            <div class="rating-slider-arrow">
                <div class="prev btn-hover">
                    <!--                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/prev.svg">-->
                </div>

                <div class="next btn-hover">
                    <!--                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/next.svg">-->
                </div>
            </div>
        </div>
    </div>
</div>
