<div class="about margin-bottom">
    <div class="wrap">
        <div class="about-wrap">
            <p class="about-wrap__title heading"><?php echo get_field("about_title", "options") ?></p>
            <div class="about-wrap__info text-font ">


                <?php if( have_rows("about_description", "options") ): ?>


                    <?php while( have_rows('about_description', 'options') ): the_row();

                        $description = get_sub_field('about_text');

                        ?>
                        <p><?php echo $description; ?></p>
                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

