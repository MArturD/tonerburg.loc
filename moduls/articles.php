<div class="articles margin-bottom">
    <div class="wrap">
        <p class="articles-title heading">Полезные статьи</p>
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
<!--                        --><?php //var_dump(); ?>
                    <div class="articles-cards__item">
                        <a href="<?php the_permalink() ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>">
                            <div class="articles-cards__opacity"></div>
                            <div class="articles-cards__info">
                                <div class="articles-cards__title subtitle-font"><?php the_title(); ?></div>
                                <div class="articles-cards__description text-font"><?php the_content(); ?></div>
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
