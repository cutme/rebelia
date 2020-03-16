
	<nav class="c-nav js-nav">
		
		<?php
            wp_nav_menu( array(
                'container'       => 'ul',
                'menu_class'      => 'c-nav__menu js-menu',
                'theme_location'  => 'primary',
            ) );
        ?>
		
		<?php get_search_form(); ?>
        <?php get_template_part('template-parts/social'); ?>

	</nav>
	
	<div class="o-hamburger js-hamburger"><i></i></div>
	<div class="o-bigarrow js-bigarrow"></div>
	<div class="o-bigarrow js-bigarrow"></div>
