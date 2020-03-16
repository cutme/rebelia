<?php

	$args = array(
		'post_type' => 'post',
	);
	
    $wp_query = new WP_Query($args);	

	$i = 0; $j = 1; $k = 0; ?>
	
	<?php if ( $wp_query->have_posts() ) :  ?>
	
            <section class="c-blog anim anim--up">
									
				<div class="glide" id="blogCarousel">
					
					<header class="o-header o-header--indent">
						<h2 class="o-lead o-lead--1">Blog</h2>
						
						<div class="glide__bullets glide__bullets--black" data-glide-el="controls[nav]">
    						
    						<button class="glide__bullet" data-glide-dir="=<?= $k ?>"></button>
    						
                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                        <?php if ($j%3 == 0) : $k ++; ?>
                        
							<button class="glide__bullet" data-glide-dir="=<?= $k; ?>"></button>
				
                        <?php endif; ?>
                        <?php $j ++ ; ?>
                    <?php endwhile; ?>

						</div>
					</header>

		            <div class="glide__track" data-glide-el="track">
		                <ul class="glide__slides">
    		                

                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
    		            
    		            <?php if ($i === 0) : ?>
    		            
		                    <li class="glide__slide">
								<div class="o-cols o-cols--3">
    								
                        <?php endif; ?>


                        <?php get_template_part('template-parts/content/blog'); ?>
                        

                        <?php if ($i === 2) : $i = 0; ?>
                        
								</div>				
		                    </li>
		                    
                        <?php else : $i ++; endif; ?>              
                    <?php endwhile; ?>
                    
    		                    </div>			
		                    </li>
		                </ul>
		            </div>
		            
		            
				</div>
			</section>

    <?php endif; ?>
    <?php wp_reset_query(); ?>

