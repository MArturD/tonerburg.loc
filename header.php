<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); // кодировка ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php /* RSS и всякое */ ?>
    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--    --><?php //wp_head(); // необходимо для работы плагинов и функционала ?>
    <title><?php the_title() ?></title>
<!--    <link rel="stylesheet" href="--><?php //= bloginfo("template_url") ?><!--/assets/css/main.css" type="text/css" media="screen">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@700&family=Montserrat:wght@400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body background="<?php bloginfo('template_url'); ?>/assets/images/icons/background.svg" class="body"  <?php body_class(); // все классы для body ?>>
<header>
    <div class="wrap">
        <div class="header-wrap ">
            <!--оставляем логотип при отображении поиска -->
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>

            <nav class="menu  menu-font">
<!--                <ul>-->
<!--                    <li><a href="#">Главная</a></li>-->
<!--                    <li class="menu__item_drop-down"><a>Прайс <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icons/arrow1.svg"></a>-->
<!---->
<!--                        <div class="menu__item_drop-down_block-close">-->
<!--                            <ul>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!---->
<!--                    </li>-->
<!---->
<!--                    <li><a href="#">Статьи</a></li>-->
<!--                    <li><a href="#">Контакты</a></li>-->
<!--                    <li><a href="#conditions">Условия-->
<!--                            приемки</a></li>-->
<!--                </ul>-->
                <?php
                wp_nav_menu([
                   'theme_location' => 'top',
                    'container' => '',
                    'menu_class' => '',
                    'menu_id' => ''
                ]);
                ?>
            </nav>
            <form action="<?php esc_url( home_url( '/' ) ); ?>" class="form-search " method="post">
<!--                --><?php // get_search_form() ?>
                <input name="s" value="<?php get_search_query(); ?>" type="text" class="form-search__input" placeholder="Поиск" autocomplete="off">
                <div class="form-search__img">
                    <img alt="" src="<?php bloginfo('template_url'); ?>/assets/images/icons/search.svg">
                </div>
                <div class="form-search__result">
                </div>
            </form>


            <div class="contacts">
                <div class="contacts__number">
                    <div class="contacts__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/phone.svg">
                    </div>
                    <a href="tel:<?php echo get_field("number_link", "options")?>" class="text-font"><?php echo get_field("number_link", "options")?></a>
                </div>
                <div class="contacts__button">
                    <a href="#" class="menu-font popmake-168" >ЗАКАЗАТЬ ЗВОНОК</a>
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
            </div>

            <div class="burger-btn menu-triger menu-close">
                <span></span>
            </div>
<!--            <div class="burger-wrap">-->
<!--                <nav class="menu-burger  menu-font">-->
<!--                    <ul>-->
<!--                        <li><a href="../index.php">Главная</a></li>-->
<!--                        <li><a href="templates/articles-page.php">Статьи</a></li>-->
<!--                        <li><a href="templates/contact.php">Контакты</a></li>-->
<!--                        <li><a href="#conditions">Условия-->
<!--                                приемки</a></li>-->
<!--                        <li class="menu__item_drop-down"><a href="templates/catalog.php">Прайс <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icons/arrow1.svg"></a>-->
<!---->
<!--                            <div class="menu__item_drop-down_block-close">-->
<!--                                <ul>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                    <li><a href="#">Прайс-лист БРЕНД</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!---->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </nav>-->
<!--                <div class="contacts-burger">-->
<!--                    <div class="contacts__number">-->
<!--                        <div class="contacts__img">-->
<!--                            <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icons/phone.svg">-->
<!--                        </div>-->
<!--                        <a href="tel:" class="text-font">+7(953)363-50-50</a>-->
<!--                    </div>-->
<!--                    <div class="contacts__button">-->
<!--                        <a href="#" class="menu-font">ЗАКАЗАТЬ ЗВОНОК</a>-->
<!--                    </div>-->
<!--                    <div class="contacts-icons">-->
<!--                        <div class="contacts-icons__item">-->
<!--                            <a href="#"><img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icons/mail.svg"></a>-->
<!--                        </div>-->
<!--                        <div class="contacts-icons__item">-->
<!--                            <a href="#"><img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icons/tg.svg"></a>-->
<!--                        </div>-->
<!--                        <div class="contacts-icons__item">-->
<!--                            <a href="#"><img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icons/whats.svg"></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--                <div class="menua">-->
<!--                    <a class="menu-triger" href="#"></a>-->
<!--                    <div class="menu-popup">-->
<!--                        <a class="menu-close" href="#"></a>-->
<!--                        <ul>-->
<!--                            <li><a href="#">О компании</a></li>-->
<!--                            <li><a href="#">Услуги</a></li>-->
<!--                            <li><a href="#">Прайс-лист</a></li>-->
<!--                            <li><a href="#">Услуги</a></li>-->
<!--                            <li><a href="#">Гарантии</a></li>-->
<!--                            <li><a href="#">Контакты</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->

        </div>
    </div>
</header>
<hr>

<?php the_title(); ?>