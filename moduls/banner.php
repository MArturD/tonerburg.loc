<div class="banner margin-bottom">
    <div class="wrap">
        <div class="banner-wrap">
            <div class="banner-wrap-left">
                <div class="banner-wrap-left__title "><?php echo get_field("title", "options") ?>
                </div>
                <div class="banner-wrap-left__information"><?php echo get_field("title", "options") ?></div>
                <div class="banner-wrap-left__description">
                    <div class="banner-wrap-left__img">
                        <img src="<?php echo get_field("img_small", "options") ?>">
                    </div>
                    <div class="banner-wrap-left__description-title text-font">
                        <?php echo get_field("description", "options") ?>
                    </div>
                </div>
                <div class="banner-contacts">
                    <div class="contacts-icons">
                        <div class="contacts-icons__item">
                            <a href="mailto:<?php echo get_field("mail_link", "options")?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/mail.svg"></a>
                        </div>
                        <div class="contacts-icons__item">
                            <a href="<?php echo get_field("tg_link", "options")?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/tg.svg"></a>
                        </div>
                        <div class="contacts-icons__item">
                            <a href="<?php echo get_field("whats_link", "options")?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/whats.svg"></a>
                        </div>
                    </div>

                    <div class="banner-contacts__phone">
                        <a href="#" class="banner-contacts__buttom btn-hover button-font popmake-2319">Позвонить нам</a>
                        <div class="banner-contacts__number">
                            <div class="contacts__img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/phone.svg">
                            </div>
                            <a href="tel:<?php echo get_field("number_link", "options")?>"><?php echo get_field("number_link", "options")?></a>
                        </div>
                        </a>
                    </div>

                </div>


            </div>
            <div class="banner-wrap-right">
                <img src="<?php echo get_field("banner_img", "options") ?>">
            </div>

        </div>
    </div>
</div>
