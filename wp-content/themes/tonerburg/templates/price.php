<?php get_header();
/*
 Template Name: Прайс
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
<div class="price-info margin-bottom">
    <div class="wrap">
        <div class="price-info__title heading">Прайс лист</div>
        <div class="price-info__description text-font">Все актуальные цены и ассортимент в прайсе, но окончательное решение о покупке принимается только после согласования ассортимента, количества и состояния предлагаемого товара с нашими менеджерами</div>
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
<div class="accept margin-bottom">
    <div class="wrap">
        <div class="accept-wrap">
            <p class="accept-wrap-title heading">Какие картриджи</p>

            <div class="acceptance-conditions">
                <div class="accept-approval">
                    <div class="accept-approval__title subtitle-font">Принимаем</div>
                    <div class="accept-approval__items">
                        <div class="accept-approval__img">
                            <img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/check-mark.svg">
                        </div>
                        <p class="accept-approval__item text-font">Новые и в заводской коробке</p>
                    </div>
                    <div class="accept-approval__items">
                        <div class="accept-approval__img">
                            <img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/check-mark.svg">
                        </div>
                        <p class="accept-approval__item text-font">Официальные и оригинальные</p>
                    </div>
                    <div class="accept-approval__items">
                        <div class="accept-approval__img">
                            <img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/check-mark.svg">
                        </div>
                        <p class="accept-approval__item text-font">Картриджи до 2020 года включительно.
                            (Старше приобретаем с уценкой)
                        </p>
                    </div>

                </div>
                <div class="accept-rejection">
                    <div class="accept-rejection__title subtitle-font">Не принимаем</div>
                    <div class="accept-rejection__items">
                        <div class="accept-rejection__img">
                            <img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/the-cross.svg">
                        </div>
                        <p class="accept-rejection__item text-font">Б/У и использованные картриджи</p>
                    </div>
                    <div class="accept-rejection__items">
                        <div class="accept-rejection__img">
                            <img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/the-cross.svg">
                        </div>
                        <p class="accept-rejection__item text-font">Совместимые, подделки и реплики</p>
                    </div>
                    <div class="accept-rejection__items">
                        <div class="accept-rejection__img">
                            <img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/the-cross.svg">
                        </div>
                        <p class="accept-rejection__item text-font">Заправленные и восстановленные</p>
                    </div>
                </div>
            </div>

            <div class="accept-more "><a href="#" class="text-font">Подробные условия приемки и уценки</a></div>

        </div>
    </div>
</div>
<div class="application margin-bottom">
    <div class="wrap">
        <div class="application-wrap">
            <form action="" class="application-form">
                <div class="application-form__info">
                    <p class="application-form__title heading">Оставьте свою заявку</p>
                    <p class="application-form__description text-font">и наш менеджер свяжется с вами в течение 10 минут</p>
                </div>
                <div class="application-form-left">
                    <input type="text" placeholder="Имя" class="application-form__name input-hover">
                    <input type="email" placeholder="Email" class="application-form__email input-hover">
                    <textarea placeholder="Ваше предложение" class="application-form__proposal input-hover"></textarea>
                </div>

                <div class="application-form-right">

                    <input type="number" placeholder="Телефон" class="application-form__phone input-hover">
                    <input type="text" placeholder="Регион" class="application-form__region input-hover">


                    <input type="file" id="file" hidden="hidden">
                    <label for="file" class="application-form__file"><span class="application-form__proposal_left">Добавить файл</span><span
                                class="application-form__proposal_right btn-hover">Обзор</span></label>
                    <div class="application-form__button btn-hover button-font">
                        <input type="submit" value="Оставить заявку">
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>
<div class="articles margin-bottom">
    <div class="wrap">
        <p class="articles-title heading">Полезные статьи</p>
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


<?php get_footer(); ?>
