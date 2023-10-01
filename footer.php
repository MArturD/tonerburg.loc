<footer>
    <div class="wrap">
        <div class="footer-menu">
            <nav>
<!--                <ul class="footer-navigation footer-font">-->
<!--                    <li><a href="#">Главная</a></li>-->
<!--                    <li><a href="#">Статьи</a></li>-->
<!--                    <li><a href="#">О нас</a></li>-->
<!--                    <li><a href="#">Прайс</a></li>-->
<!--                    <li><a href="#">Контакты</a></li>-->
<!--                    <li><a href="#">Бренды</a></li>-->
<!--                    <li><a href="#">Полезные статьи</a></li>-->
<!--                    <li><a href="#">Нам доверяют</a></li>-->
<!--                    <li><a href="#">Формат работы</a></li>-->
<!--                </ul>-->
	                <?php
	                wp_nav_menu([
		                'theme_location' => 'bottom-navigation',
		                'container' => '',
		                'menu_class' => 'footer-navigation footer-font',
		                'menu_id' => ''
	                ]);
	                ?>

                <div class="footer-politics">
                    <a href="#" class="politic-font">Все права защищены</a>
                    <a href="#" class="politic-font">Политика конфиденциальности </a>
                </div>
            </nav>
            <div class="footer-line__one"></div>

            <div class="footer-cartridges footer-font">
                <div class="footer-cartridges__title footer-font-title">Представленные бренды</div>
	            <?php
	            wp_nav_menu([
		            'theme_location' => 'bottom-brands',
		            'container' => '',
		            'menu_class' => 'footer-cartridges__navigation',
		            'menu_id' => ''
	            ]);
	            ?>
            </div>

            <div class="footer-line__two"></div>

            <div class="footer-info">
                <div class="footer-info__description">
                    <div class="logo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/footer-logo.svg">
                    </div>
                    <div class="footer-info__title">
                        <div class="footer-info__title_img"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/stark-footer.png"></div>
                        <p> Открой новые горизонты с нами!</p></div>
                    <div class="footer-info__address"><?php echo get_field('adress', 'options') ?></div>
                    <div class="footer-info__mode"><?php echo get_field('time_jobs', 'options') ?></div>
                </div>
                <div class="footer-contacts">
                    <div class="contacts__number">
                        <div class="contacts__img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/phone.svg">
                        </div>
                        <a href="tel:<?php echo get_field("number_link", "options")?>" class="text-font"><?php echo get_field("number_link", "options")?></a>
                    </div>
                    <div class="contacts__button">
                        <a href="#" class="menu-font popmake-2319">ЗАКАЗАТЬ ЗВОНОК</a>
                    </div>
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
                    <div class="footer-contacts__mail">
                        <div class="footer-contacts__mail-img"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/mail-icon.png" alt="">
                        </div>
                        <a href="mailto:<?php echo get_field("mail_link", "options")?>" class="text-font"><?php echo get_field("mail_link", "options")?></a>
                    </div>
                    <div class="footer-politics-phone">
                        <a href="#" class="politic-font">Все права защищены</a>
                        <a href="#" class="politic-font">Политика конфиденциальности </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?php wp_footer() ?>
</body>
</html>
