<div class="cartridge-brands margin-bottom">
    <div class="wrap">
        <div class="cartridge-brands-wrap">
            <p class="cartridge-brands-wrap__title heading">Покупаем картриджи следующих брендов</p>
            <div class="cartridge-cards">
	            <?php
	            $brands = get_terms(array('taxonomy' => 'brand', 'hide_empty' => false));
	            //var_dump($brands);


	            //var_dump(get_field('logo', 'brand_2'));


	            foreach ($brands as $brand) {
		            $link = get_term_link($brand->term_id);
		            $srcImage = get_image('logo', 'brand_' . $brand->term_id);
		            ?>
                    <div class="cartridge-cards-item">
                        <a href="<?php echo $link ?>"><img src="<?php echo $srcImage; ?>" alt="<?php echo $brand->name?>" title="<?php echo $brand->name?>"></a>
                    </div>

<!--                    <a href="">-->
<!--                        <img src="" alt="--><?php //echo $brand->name?><!--" title="--><?php //echo $brand->name?><!--">-->
<!--                    </a>-->
		            <?php


	            }
	            ?>
            </div>
        </div>
    </div>
</div>

