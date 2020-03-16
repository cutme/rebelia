
    <div class="c-top">
        <div class="c-top__bar">
            <div class="o-wrap o-wrap--narrow padding">
                
                
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="o-logo">
                    <img srcset="<?php echo get_template_directory_uri(); ?>/img/assets/logo-rebelia.png, <?php echo get_template_directory_uri(); ?>/img/assets/logo-rebelia@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/img/assets/logo-rebelia.png" alt="Rebelia">
                </a>
    
                    
                <nav class="c-nav js-nav">
                    
                    <?php
                        wp_nav_menu( array(
                            'container'       => 'ul',
                            'menu_class'      => 'c-nav__menu js-menu',
                            'theme_location'  => 'Top',
                        ) );
                    ?>
                    
                    
                    <?php
                        $disable_switcher = get_field('disable_lang_switcher', 'Options');
                            
                        if ($disable_switcher[0] != 'yes') : ?>
                    
                    <ul class="o-lang">                        
                        
                        <?php pll_the_languages(array(
                            'show_flags' => 0,
                            'show_names' =>1 ,
                            'display_names_as' => 'slug',
                            'hide_current' => 0)); ?>                       
                            
                    </ul>
                    
                     <?php endif; ?>
    
                </nav>
    
    
                <a href="javascript:window.history.back();" class="o-back">Back</a>
                
                <div class="o-hamburger">
                    <div class="hamburger hamburger--slider js-hamburger">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
