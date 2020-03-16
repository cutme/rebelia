    
            <?php 
                $categories = get_categories();

                if ($categories) : ?>
                        
                    <div class="c-filters c-filters--light c-filters--static">
                        <div class="c-filters__content">
                            
                            <div class="c-filters__trace js-trace">
                                <ul>
                                    
                                <?php 
                                    global $post;
                                    $post_slug = $post->post_name; ?>
                                
                                    <li <?php if ($post_slug === 'news') { echo 'class="is-active"'; } ?>>
                                        <a href="<?= esc_url(home_url( '/' )); ?>news/" class="item js-item">All news</a>
                                    </li>

                        <?php
                            
                            $term = get_queried_object();
                            $term_current = $term->slug;

                        	foreach($categories as $term) : ?>
                            
                                    <li <?php if ($term_current === $term->slug) { echo 'class="is-active"'; } ?>>
                                        <a class="item" href="<?= get_category_link( $term->term_id ); ?>" title="<?php echo sprintf( __( "Zobacz wszystkie wpisy w kategorii %s" ), $term->name ) ?>"><?= $term->name; ?></a>
                                    
                                    </li>
                        <?php
                        	endforeach;
                        ?>

                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    
                <?php endif; ?>
