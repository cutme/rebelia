<?php
				$terms = get_the_terms( $post->ID, 'categoryservice' );
				$primarycolor = get_field('services__primarycolor', $terms[0]);
				$image = get_field('services__primaryicon', $terms[0]);
				
				
				if( $image ) {

				    $alt = $image['alt'];
				
				    $size = 'improve';
				    $sizeRetina = 'improve--retina';
				    $thumb = $image['sizes'][ $size ];
					$thumbRetina = $image['sizes'][ $sizeRetina ];
				}
			?>
											<a href="<?php the_permalink(); ?>" class="o-cols__item" style="background-color: <?= $primarycolor; ?>; color: white">
												
												<figure>
												<?php if ($image) : ?>
												
													<img srcset="<?php echo esc_url($thumb); ?>, <?php echo esc_url($thumbRetina); ?> 2x" src="<?php echo esc_url($thumb); ?>" width="48" alt="<?php echo esc_attr($alt); ?>">
													
												<?php endif; ?>
												     
													<figcaption>
														<h5 class="o-lead--4"><?= $post->post_title; ?></h5>
													</figcaption>
												</figure>
											</a>
