<?php
/**
 * The template for displaying search results pages
 *
 */

get_header(); ?>


        <section class="c-welcome" id="welcome">
			<div class="o-container__left js-leftColumn">
    			
				<?php get_template_part('template-parts/sidebar'); ?>
				
			</div>
    
            <div class="o-container__right js-rightColumn bg-white">
    			<div class="c-post c-post--page c-post--search">
						
					<?php if ( have_posts() ) : $i = 0; $j = 0; $k = 0; $services_length = 0; $page_length = 0; $post_length = 0; ?>
						
						<h1><?php _e( 'Search results for: ', 'cutme' ); ?><?php the_search_query(); ?></h1>
						
					<?php 
						while ( have_posts() ) : the_post(); 
							
							$type = get_post_type();

							switch($type) {
								case 'services' : $services_length++; break;
								case 'page' : $page_length++; break;
								case 'post' : $post_length++; break;
							}
						endwhile; ?>						

					<?php 
						while ( have_posts() ) : the_post(); 

							$type = get_post_type();

							switch($type) {
								case 'services' : 
										
									if ($i === 0) : ?>
									<section class="c-improve anim anim--up" style="margin-bottom: 60px">
										<section class="c-boxes">
											<div class="o-cols o-cols--4">
										
									<?php endif; $i ++;  ?>
										
									<?php get_template_part('template-parts/content/service'); ?>
										
									<?php if ($i === $services_length) : ?>
										
											</div>
										</section>
									</section>
										
									<?php endif; ?>											
										
								<?php
									break;
									
									
									
								case 'page' : 
								
									if ($j === 0) : ?>
									
									<div class="c-pages anim anim--up">
										<div class="o-cols o-cols--3">
									
									<?php endif; $j ++; ?>
								
									<?php get_template_part('template-parts/content/page'); ?>
									
									
									<?php if ($j === $page_length) : ?>
										
										</div>
									</div>

									<?php endif; ?>	
								
								
								<?php
									break;
								

								case 'post' : 

									if ($k === 0) : ?>
									
									<div class="c-blog anim anim--up">
										<div class="o-cols o-cols--3">
									
									<?php endif; $k ++; ?>
									
									<?php get_template_part('template-parts/content/blog'); ?>
									
									<?php if ($k === $post_length) : ?>
										
										</div>
									</div>

									<?php endif; ?>	
									
								<?php
									break;
								}
							?>

						<?php endwhile; ?> 
							
						</div>
						
    				<?php else : ?>
    				
    				    <h1>Nothing found</h1>
    				
    				<?php endif; ?>

				</div>
    			
			</div>
        </section>


        <div class="o-container__left o-container__left--floating js-leftColumn">

			<?php get_template_part('template-parts/sidebar'); ?>

		</div>

                                             
		
		<div class="o-container__right js-rightColumn">


			<?php get_footer(); ?>
		</div>
	</main>
	
	<?php get_template_part('template-parts/sidemenu'); ?>
    <?php get_template_part('template-parts/nav'); ?>


<?php wp_footer(); ?>

</body>
</html>
