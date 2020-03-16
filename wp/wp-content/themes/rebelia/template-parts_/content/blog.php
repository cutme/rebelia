
						<?php
                            if (has_post_thumbnail( $post->ID ) ):
                            	$thumbnail_id = get_post_thumbnail_id( $post->ID );
                                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                            	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog' );
                            	$imageRetina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog--retina' );
                            endif; ?>

									<a href="<?php the_permalink(); ?>" class="o-cols__item">
										<figure>
											<div class="photo">
												<img srcset="<?= $image[0]; ?>, <?= $imageRetina[0]; ?> 2x" src="<?= $image[0]; ?>" width="468" alt="<?= $alt; ?>">
											</div>
											
											<figcaption>
												<h3 class="o-lead o-lead--3"><?php the_title(); ?></h3>
												
												<?php
    												if ( has_excerpt( $post->ID ) ) {
                                                		the_excerpt();
                                                    } ?>

                                                <?php 
                                                    global $post; 
                                                    $author_id=$post->post_author; ?>

												<h6 class="o-lead--6"><?php the_time('d.j.Y'); ?>, <?php the_author_meta( 'nickname', $author_id ); ?></h6>
											</figcaption>
										</figure>
									</a>
