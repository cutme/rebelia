
                            <?php
                                $author_id = get_the_author_meta('ID');
                                $image = get_field('avatar', 'user_'. $author_id );
                                
                                if ($image) {
                                    $alt = $image['alt'];
                
                                    $size = 'avatar-user';
                                    $size2x = 'avatar-user@2x';
                                    
                                    $thumb = $image['sizes'][ $size ];
                                    $thumb2x = $image['sizes'][ $size2x ];
                                } 
                            ?>

                            <div class="image">
                                <img srcset="<?php echo esc_url($thumb); ?> 1x, <?php echo esc_url($thumb2x); ?> 2x" src="<?php echo esc_url($thumb); ?>" alt="<?= $alt; ?>">
                            </div>
