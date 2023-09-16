<div class="cartridge-brands margin-bottom">
    <div class="wrap">
        <div class="cartridge-brands-wrap">
            <p class="cartridge-brands-wrap__title heading">Покупаем картриджи следующих брендов</p>
            <div class="cartridge-cards">
                <?php
                $terms = get_field('logo', 'options');
                if( $terms ): ?>
                    <ul>
                        <?php foreach( $terms as $term ): ?>
                            <li>
                                <?php var_dump($term); ?>
                                <h2><?php echo esc_html( $term->name ); ?></h2>
                                <p><?php echo esc_html( $term->description ); ?></p>
                                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">View all '<?php echo esc_html( $term->name ); ?>' posts</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="cartridge-cards-item">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/others/cartrige1.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/others/cartrige2.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/others/cartrige3.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/others/cartrige4.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/others/cartrige5.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/others/cartrige6.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/others/cartrige7.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/others/cartrige8.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/others/cartrige9.png"></a>
                </div>
                <div class="cartridge-cards-item">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/others/cartrige10.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>

