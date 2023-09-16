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
<?php include get_template_directory() . "/moduls/cartridge-brands.php"; ?>
<?php include get_template_directory() . "/moduls/accept.php"; ?>
<?php include get_template_directory() . "/moduls/application.php"; ?>
<?php include get_template_directory() . "/moduls/articles.php"; ?>



<?php get_footer(); ?>
