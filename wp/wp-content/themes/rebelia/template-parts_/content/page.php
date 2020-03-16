						<?php
                        	$image = get_sub_field('page__icon');
                        	
                        	if ($image) {
	                        	$size = 'pages-icon';
	                            $thumb = $image['sizes'][ $size ];
	                            
	                            $sizeRetina = 'pages-icon--retina';
	                            $thumbRetina = $image['sizes'][ $sizeRetina ];
	                        } ?>
					
						<a href="<?php the_permalink(); ?>" class="o-cols__item anim anim--up">
							<figure>

							<?php if ($image) : ?>
							 
								<img 
								    srcset="<?php echo esc_url($thumb); ?>, <?php echo esc_url($thumbRetina); ?> 2x" 
								    src="<?php echo esc_url($thumb); ?>" width="58" alt="">
								    
							<?php endif; ?>

								<figcaption>
									<h5 class="o-lead o-lead--4"><?php the_title(); ?> <i class="icon-arrow-right"></i></h5>
									
							<?php 
								if ( has_excerpt( $post->ID ) ) : ?>
									
									<?php the_excerpt(); ?>

							<?php endif; ?>

								</figcaption>
							</figure>
						</a>
