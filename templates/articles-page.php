<?php get_header();
/*
 Template Name: Статьи
 */
?>


<div class="pages">
    <div class="wrap">
        <div class="pages-name">
            <a href="#">Главная</a>
            <span>|</span>
            <a href="#">Прайс</a>
        </div>
    </div>
</div>
<div class="useful-articles">
    <div class="wrap">
        <p class="useful-articles__title heading">Полезные статьи </p>
        <p class="useful-articles__description text-font">В этом разделе можно найти статьи, посвященные различным аспектам использования и утилизации картриджей, включая инструкции по экономичному использованию, советы по подбору подходящих картриджей для разных моделей принтеров и полезные рекомендации по продлению срока службы картриджей.</p>
    </div>
</div>
<div class="articles margin-bottom">
    <div class="wrap">
        <div class="articles-cards">
            <div class="articles-cards__item">
                <a href="#">
                    <img src="../<?php bloginfo('template_url'); ?>/assets/images/others/purchase1.svg">
                    <div class="articles-cards__opacity"></div>
                    <div class="articles-cards__info">
                        <div class="articles-cards__title subtitle-font">Заголовок</div>
                        <div class="articles-cards__description text-font">Текст, текст текст текст текст ...</div>
                    </div>
                </a>
            </div>
            <div class="articles-cards__item">
                <a href="#">
                    <img src="../<?php bloginfo('template_url'); ?>/assets/images/others/purchase1.svg">
                    <div class="articles-cards__opacity"></div>
                    <div class="articles-cards__info">
                        <div class="articles-cards__title subtitle-font">Заголовок</div>
                        <div class="articles-cards__description text-font">Текст, текст текст текст текст ...</div>
                    </div>
                </a>
            </div>
            <div class="articles-cards__item">
                <a href="#">
                    <img src="../<?php bloginfo('template_url'); ?>/assets/images/others/purchase1.svg">
                    <div class="articles-cards__opacity"></div>
                    <div class="articles-cards__info">
                        <div class="articles-cards__title subtitle-font">Заголовок</div>
                        <div class="articles-cards__description text-font">Текст, текст текст текст текст ...</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include get_template_directory() . "/moduls/cartridge-brands.php"; ?>
<?php include get_template_directory() . "/moduls/feedback.php"; ?>



<?php get_footer(); ?>
