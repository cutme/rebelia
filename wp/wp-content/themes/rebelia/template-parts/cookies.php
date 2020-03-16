
    <div class="c-cookies move-out" id="cookies">
        <div class="c-cookies__text">
            
            <img srcset="<?php echo get_template_directory_uri(); ?>/img/assets/cookie.png, <?php echo get_template_directory_uri(); ?>/img/assets/cookie@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/img/assets/cookie.png" alt="cookie">
            
            <?php the_field('cookies', 'Options'); ?>

        </div>
        
        <div class="c-cookies__btn">
            <a href="#" class="o-btn o-btn--small js-accept"><?php pll_e('I accept'); ?></a>
        </div>
    </div>
