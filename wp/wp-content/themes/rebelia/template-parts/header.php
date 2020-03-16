<?php

    $image = get_field('header__image');
    $text = get_field('text');
    $firstline = $text['first_line'];
    $secondline = $text['second_line'];
    $buy_on_steam_link = get_field('buy_on_steam_link', 'Options');
    
    if ($image) {
        $size = 'header';
        $thumb = $image['sizes'][ $size ];
    } ?>    

    <div class="c-header <?php if (get_page_template_slug( $post->ID ) === 'page-junkyard.php') { echo 'c-header--junkyard'; } ?>" style="background-image: url(<?php echo esc_url($thumb); ?>)">
        <div class="o-wrap o-wrap--narrow">
            <div class="c-header__title">
                
                <figure>
                    <div class="logo">
                        <img srcset="<?php echo get_template_directory_uri(); ?>/img/assets/logo-junk.png, <?php echo get_template_directory_uri(); ?>/img/assets/logo-junk@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/img/assets/logo-junk.png" alt="Junkyard simulator">
                    </div>
    
                    <figcaption>
                    
                    <?php if ($firstline) : ?>
                    
                        <p class="first"><?= $firstline; ?></p>
                        
                    <?php endif; ?>
                    
                    <?php if ($secondline) : ?>
                    
                        <p class="second"><?= $secondline; ?></p>
                        
                    <?php endif; ?>
                    
                    </figcaption>
                </figure>
            </div>
            
            <div class="c-header__cta">
                
            <?php if ($buy_on_steam_link) : ?>
                
                <a href="<?= $buy_on_steam_link; ?>" class="o-btn"><?php pll_e('Buy on'); ?> <i class="icon-steam-button js-buybtn"></i></a>
                
            <?php endif; ?>
            
            <?php if (is_front_page()) : ?>
            
                <div class="o-more o-more--arrowright">
                    <a href="junkyard/" class="more"><?php pll_e('Learn more'); ?></a>
                </div>
                
            <?php else : ?>
            
                <div class="o-more o-more--arrowdown">
                    <a href="#watchtrailersholder" class="icon-arrow-right js-goto" data-offset="50"></a>
                </div>
            
            <?php endif; ?>

            </div>
        </div>
    </div>
