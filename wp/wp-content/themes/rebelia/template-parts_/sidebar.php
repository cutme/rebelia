    
                <aside class="c-sidebar js-sidebar">
    				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="o-logo">
    					<span class="on-black">
    						<img src="<?php echo get_template_directory_uri(); ?>/img/logo/cpd--onblack.svg" width="250" height="145" alt="Colour Print Direct">
    					</span>
    					
    					<span class="on-white">
    						<img src="<?php echo get_template_directory_uri(); ?>/img/logo/cpd--onwhite.svg" width="250" height="145" alt="Colour Print Direct">
    					</span>
    					
    					<span class="negative">
    						<img src="<?php echo get_template_directory_uri(); ?>/img/logo/cpd--negative.svg" width="250" height="145" alt="Colour Print Direct">
    					</span>
    				</a>



<?php
  
    $terms = get_terms([
        'taxonomy' => 'categoryservice',
        'hide_empty' => true,
    ]);

    if ($terms) : ?>
        
                    <nav class="c-sidenav" id="sideNav">
    					<ul>

    <?php
        foreach($terms as $term) : ?>
        
                            <li class="<?= $term->slug; ?> js-openMenu">
    							<a href="#"><?= $term->name; ?></a>
    						</li>
<?php
        endforeach;
    endif; ?>	
		
		
    					</ul>
                    </nav>
    				
    				<div>&nbsp;</div>
    				
    			</aside>
