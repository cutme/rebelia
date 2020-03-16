<?php
    global $jobsCount;
?>

    <footer class="c-footer">
        <div class="o-wrap o-wrap--narrow">
            
            
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="o-logo">
                <img srcset="<?php echo get_template_directory_uri(); ?>/img/assets/logo-rebelia.png, <?php echo get_template_directory_uri(); ?>/img/assets/logo-rebelia@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/img/assets/logo-rebelia.png" alt="Rebelia">
            </a>


            <aside>
                <nav class="c-navfooter">
                    <h6><?php pll_e('Company'); ?></h6>
                    
                    <?php
                        wp_nav_menu( array(
                            'container'       => 'ul',
                            'menu_class'      => '',
                            'theme_location'  => 'Company',
                        ) );
                    ?>

                </nav>
            </aside> 
            
            <aside>
                <nav class="c-navfooter">
                    <h6><?php pll_e('Games'); ?></h6>
                    
                    <?php
                        wp_nav_menu( array(
                            'container'       => 'ul',
                            'menu_class'      => '',
                            'theme_location'  => 'Games',
                        ) );
                    ?>

                </nav>
            </aside> 
            
            <aside>
                <nav class="c-navfooter">
                    <h6><?php pll_e('Follow us'); ?></h6>
                    
                    <?php
                        wp_nav_menu( array(
                            'container'       => 'ul',
                            'menu_class'      => '',
                            'theme_location'  => 'Social',
                        ) );
                    ?>
                    
                </nav>
            </aside>
            
            <aside>
                
                <ul class="o-lang">
                    <li class="is-active">
                        <a href="#">en</a>
                    </li>
                    
                    <li>
                        <a href="#">pl</a>
                    </li>
                </ul>

                
                <p class="copyrights">&copy; <?php the_time('Y'); ?> <?php pll_e('Rebelia Games'); ?></p>
                
                <ul class="logotypes">
                    <li>
                        <i class="icon-playway"></i>
                    </li>
                    
                    <li>
                        <i class="icon-steam-footer"></i>
                    </li>
                    
                    <li>
                        <i class="icon-unreal"></i>
                    </li>
                </ul>
            </aside>
        </div>
    </footer>

    <script>
        var jobsCount = <?php echo $jobsCount ? (int) $jobsCount : '0' ?>;
    </script>

    <div class="o-apla js-apla"></div>
