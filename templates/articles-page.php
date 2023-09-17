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
	        <?php
	        global $post;

	        $myposts = get_posts([
//                'numberposts' => 5,
//                'offset'      => 1,
		        'category'    => 'articles'
	        ]);

	        if( $myposts ){
		        foreach( $myposts as $post ){
			        setup_postdata( $post );
			        ?>

                    <div class="articles-cards__item">
                        <a href="#">
                            <img src="<?php the_post_thumbnail_url(); ?>">
                            <div class="articles-cards__opacity"></div>
                            <div class="articles-cards__info">
                                <div class="articles-cards__title subtitle-font"><?php the_title(); ?></div>
                                <div class="articles-cards__description text-font">
	                                <?php
	                                $text = get_the_content();
	                                echo wp_trim_words( $text, 3, ' ...' );
	                                ?>
                                </div>
                            </div>
                        </a>
                    </div>

			        <?php
		        }
	        } else {
		        // Постов не найдено
	        }

	        wp_reset_postdata(); // Сбрасываем $post
	        ?>
        </div>
    </div>
</div>
<?php include get_template_directory() . "/moduls/cartridge-brands.php"; ?>
<?php include get_template_directory() . "/moduls/feedback.php"; ?>



<?php get_footer(); ?>
