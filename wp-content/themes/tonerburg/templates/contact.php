<?php get_header();
/*
 Template Name: Контакты
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
<div class="contacts-contact margin-bottom">
  <div class="wrap">

    <p class="contacts-contact__title heading">Наши контакты</p>

    <div class="contacts-contact-wrap">


      <div class="contacts-contacts-item">
        <div class="contacts-contacts-item__info">
          <div class="contacts-contacts-item__title subtitle-font"><div class="contacts-contacts-item__img"><img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/address.svg"></div>Адрес</div>
          <div class="contacts-contacts-item__description text-font">г.Санкт-Петербург Рижский пр. д.37Т</div>
        </div>
      </div>

      <div class="contacts-contacts-item">
        <div class="contacts-contacts-item__info">
          <div class="contacts-contacts-item__title subtitle-font"><div class="contacts-contacts-item__img"><img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/phone.svg"></div>Телефон</div>
          <div class="contacts-contacts-item__description text-font">+7(953)363-50-50</div>
        </div>
      </div>

      <div class="contacts-contacts-item">
        <div class="contacts-contacts-item__info">
          <div class="contacts-contacts-item__title subtitle-font"><div class="contacts-contacts-item__img"><img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/mail-contact.svg"></div>Почта</div>
          <div class="contacts-contacts-item__description text-font">info@tonerburg.ru</div>
        </div>
      </div>

      <div class="contacts-contacts-item">
        <div class="contacts-contacts-item__info">
          <div class="contacts-contacts-item__title subtitle-font"><div class="contacts-contacts-item__img"><img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/time.svg"></div>Часы работы</div>
          <div class="contacts-contacts-item__description text-font">Пн-Пт С 10 До 18 Сб-Вс выходной</div>
        </div>
      </div>
      <div class="contacts-contact-icons">

      <div class="contacts-icons">
        <div class="contacts-icons__item">
          <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/tg.svg"></a>
        </div>
        <div class="contacts-icons__item">
          <a href="#"><img src="../<?php bloginfo('template_url'); ?>/assets/images/icons/whats.svg"></a>
        </div>
      </div>

      </div>

    </div>

  </div>
</div>
<div class="location-img">
  <div class="wrap">
    <p class="location-imt__title heading">Где мы находимся</p>
    <div class="location-img-cards">
      <div class="location-img-cards__item">
        <img src="../<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
      <div class="location-img-cards__item">
        <img src="../<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
      <div class="location-img-cards__item">
        <img src="../<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
      <div class="location-img-cards__item">
        <img src="../<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
      <div class="location-img-cards__item">
        <img src="../<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
      <div class="location-img-cards__item">
        <img src="../<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
    </div>
  </div>
</div>
<div class="location-map margin-bottom">
  <div class="wrap">
    <div class="location-map-wrap">
      <img src="../<?php bloginfo('template_url'); ?>/assets/images/others/location-card.png">
    </div>
  </div>
</div>

<?php include get_template_directory() . "/moduls/rating.php"; ?>
<?php include get_template_directory() . "/moduls/feedback.php"; ?>
<?php get_footer(); ?>
