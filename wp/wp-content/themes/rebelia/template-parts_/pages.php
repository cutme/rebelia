<?php
    $title = get_field('pages__title');
?>

            <section class="c-pages anim anim--up">
				<div class="o-wrap">
					
					<?php if ($title) : ?>
					
					<header class="o-header o-header--indent">
						<h2 class="o-lead o-lead--1"><?= $title; ?></h2>
					</header>
					
					<?php endif; ?>
					
					
				<?php if( have_rows('pages') ): ?>
    					
					<div class="o-cols o-cols--3">
					
					<?php while( have_rows('pages') ): the_row(); 
					
					    $post_object = get_sub_field('page');
					    
					    if( $post_object ): 

                        	$post = $post_object;
                        	setup_postdata( $post );  ?>
                        
                        <?php get_template_part('template-parts/content/page'); ?>
						
						<?php wp_reset_postdata(); ?>
                        <?php endif; ?>
						
				    <?php endwhile; ?>
											
					</div>
					
				<?php endif; ?>
					
				</div>
			</section>
