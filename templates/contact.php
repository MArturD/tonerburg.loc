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
          <div class="contacts-contacts-item__title subtitle-font"><div class="contacts-contacts-item__img"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/address.svg"></div>Адрес</div>
          <div class="contacts-contacts-item__description text-font"><?php echo get_field('adress', 'options') ?></div>
        </div>
      </div>

      <div class="contacts-contacts-item">
        <div class="contacts-contacts-item__info">
          <div class="contacts-contacts-item__title subtitle-font"><div class="contacts-contacts-item__img"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/phone.svg"></div>Телефон</div>
          <div class="contacts-contacts-item__description text-font"><?php echo get_field('number_link', 'options') ?></div>
        </div>
      </div>

      <div class="contacts-contacts-item">
        <div class="contacts-contacts-item__info">
          <div class="contacts-contacts-item__title subtitle-font"><div class="contacts-contacts-item__img"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/mail-contact.svg"></div>Почта</div>
          <div class="contacts-contacts-item__description text-font"><?php echo get_field('mail_link', 'options') ?></div>
        </div>
      </div>

      <div class="contacts-contacts-item">
        <div class="contacts-contacts-item__info">
          <div class="contacts-contacts-item__title subtitle-font"><div class="contacts-contacts-item__img"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/time.svg"></div>Часы работы</div>
          <div class="contacts-contacts-item__description text-font"><?php echo get_field('time_jobs', 'options') ?></div>
        </div>
      </div>
      <div class="contacts-contact-icons">

      <div class="contacts-icons">
        <div class="contacts-icons__item">
          <a href="<?php echo get_field('tg_link', 'options') ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/tg.svg"></a>
        </div>
        <div class="contacts-icons__item">
          <a href="<?php echo get_field('whats_link', 'options') ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/whats.svg"></a>
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
        <img src="<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
      <div class="location-img-cards__item">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
      <div class="location-img-cards__item">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
      <div class="location-img-cards__item">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
      <div class="location-img-cards__item">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
      <div class="location-img-cards__item">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/others/location-img.png">
      </div>
    </div>
  </div>
</div>
<div class="location-map margin-bottom">
  <div class="wrap">
    <div class="location-map-wrap">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A182d713dca0ce66309c9c50b07b26a0f41f3eb4b62a4a5fb96fe1118a5a26b5d&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
  </div>
</div>

<?php include get_template_directory() . "/moduls/rating.php"; ?>
<?php include get_template_directory() . "/moduls/feedback.php"; ?>
<?php get_footer(); ?>
