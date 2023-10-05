<!DOCTYPE html>
<html lang="ru">
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
<body background="<?php bloginfo('template_url'); ?>/assets/images/icons/background.svg" <?php body_class(); // все классы для body ?>>
<header>
    <div class="wrap">
        <div class="header-wrap ">
            <!--оставляем логотип при отображении поиска -->
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>

            <nav class="menu  menu-font">
                <?php
                wp_nav_menu([
                   'theme_location' => 'top',
                    'container' => '',
                    'menu_class' => '',
                    'menu_id' => ''
                ]);
                ?>
            </nav>
            <form action="#" class="form-search" method="post">
<!--                --><?php // get_search_form() ?>
                <input name="s" value="<?php echo $_REQUEST['s']; ?>" type="text" class="form-search__input" placeholder="Поиск" autocomplete="off">
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
                    <a href="#" class="menu-font popmake-2319" >ЗАКАЗАТЬ ЗВОНОК</a>
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



            <div class="burger-wrap">
                <div class="search__img">
                    <img alt="" src="<?php bloginfo('template_url'); ?>/assets/images/icons/search.svg">
                </div>
                <div class="burger-btn open">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/open.svg" alt="">
                </div>
                <div class="burger-btn close">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/close.svg" alt="">
                </div>

                <div class="burger-menu">
                    <nav class="menu  menu-font">
		                <?php
		                wp_nav_menu([
			                'theme_location' => 'top',
			                'container' => '',
			                'menu_class' => '',
			                'menu_id' => ''
		                ]);
		                ?>
                    </nav>
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
                </div>
            </div>


        </div>
    </div>
</header>

