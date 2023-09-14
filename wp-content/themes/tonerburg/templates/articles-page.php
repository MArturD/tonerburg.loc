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
<div class="cartridge-brands margin-bottom">
    <div class="wrap">
        <div class="cartridge-brands-wrap">
            <p class="cartridge-brands-wrap__title heading">Покупаем картриджи следующих брендов</p>
            <div class="cartridge-cards">
                <div class="cartridge-cards-item">
                    <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/others/cartrige1.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/others/cartrige2.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/others/cartrige3.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/others/cartrige4.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/others/cartrige5.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/others/cartrige6.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/others/cartrige7.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/others/cartrige8.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/others/cartrige9.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/others/cartrige10.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="feedback margin-bottom">
    <div class="wrap">
        <form action="" class="feedback-form">
            <div class="feedback-form__info">
                <div class="feedback-form__title heading">Остались вопросы?</div>
                <div class="feedback-form__description text-font">Оставьте свои контактные данные и наш менеджер вам
                    перезвонит в течение 10
                    минут
                </div>
            </div>
            <div class="feedback-form__input">

                <input type="text" placeholder="Имя" class="feedback-form__name input-hover">
                <input type="number" placeholder="Телефон" class="feedback-form__number input-hover">
                <div class="feedback-form__button  btn-hover button-font">
                    <input type="submit" value="Оставить">
                </div>
            </div>
        </form>
    </div>
</div>


<?php get_footer(); ?>
