
    <nav class="c-sidemenu" id="sideMenu">
		<div class="c-sidemenu__sections" id="sideMenuSections">

		
<?php
    $custom_terms = get_terms('categoryservice');

    foreach($custom_terms as $custom_term) {
        wp_reset_query();
        
        $args = array('post_type' => 'services',
            'tax_query' => array(
                array(
                    'taxonomy' => 'categoryservice',
                    'field' => 'slug',
                    'terms' => $custom_term->slug,
                ),
            ),
         );
    
         $loop = new WP_Query($args);
         
         if($loop->have_posts()) : ?>

            <section class="c-sidemenu__section js-section">
				<h2 class="o-lead--0 js-closeNav"><?= $custom_term->name; ?></h2>

				<ul>
    				
				<?php while($loop->have_posts()) : $loop->the_post(); ?>
				
					<li>
						<a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a>
					</li>

                <?php
                    endwhile; ?>
					
				</ul>
			</section>

<?php         
         endif;
    }
?>	

		</div>
		
		
		<div class="o-hamburger is-active is-hidden js-closeNav"><i></i></div>
	</nav>
