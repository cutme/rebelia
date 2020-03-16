
                        <?php if (has_post_thumbnail( $post->ID ) ): 
                            
                        	$thumbnail_id = get_post_thumbnail_id( $post->ID );
                            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                        	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'news-small' );
                        	$image2x = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'news-small@2x' ); ?>
   
                                <div class="o-photo">
                                    <img srcset="<?= $image[0]; ?>, <?= $image2x[0]; ?> 2x" src="<?= $image[0]; ?>" alt="<?= $alt; ?>">
                                </div>
                        
                        <?php endif; ?>
