<?php if( have_rows('improve') ): $i = 0; $j = 1; $k = 0; ?>

            <section class="c-improve anim anim--up">
				<div class="o-wrap">
					
					<div class="glide" id="improveCarousel">
						<header class="o-header o-header--indent">
							<h2 class="o-lead o-lead--1"><?php the_field('improve__title'); ?></h2>
							
							<div class="glide__bullets glide__bullets--black" data-glide-el="controls[nav]">
								
								<button class="glide__bullet" data-glide-dir="=<?= $k ?>"></button>
    						
	                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
	                        <?php if ($j%8 == 0) : $k ++; ?>
	                        
								<button class="glide__bullet" data-glide-dir="=<?= $k; ?>"></button>
					
	                        <?php endif; ?>
	                        <?php $j ++ ; ?>
	                    <?php endwhile; ?>
								
							</div>
						</header>

						<div class="glide__track" data-glide-el="track">
			                <ul class="glide__slides">
				                
	<?php while( have_rows('improve') ): the_row(); ?>
		
		<?php
			$improve_object = get_sub_field('improve__service');
			
			if( $improve_object ): 
			
				$post = $improve_object;
				setup_postdata( $post ); 
				
			?>			
			<?php if ($i === 0) : ?>

			                    <li class="glide__slide">			
									<section class="c-boxes">
										<div class="o-cols o-cols--4">

			<?php endif; ?>			
			
			<?php get_template_part('template-parts/content/service'); ?>

			<?php if ($i === 7) : $i = 0; ?>
											
										</div>
									</section>
								</li>
								
            <?php else : $i ++; endif; ?>

			<?php wp_reset_postdata(); ?>
		<?php endif; ?>	
						
	<?php endwhile; ?> 

										</div>
									</section>
								</li>
								
							</ul>
						</div>
					</div>		
				</div>
			</section>
            
<?php endif; ?>