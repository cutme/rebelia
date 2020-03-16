
    <div class="c-shortnews c-shortnews--static anim anim--up">
        <div class="o-section o-section--paddings">
            <div class="o-wrap o-wrap--narrow2">
                
                <article class="o-article o-article--big">
                    <h3><?php pll_e('Read news'); ?></h3>
                </article>
                
        <?php
            $args = array(
                'post_type' => 'post',
        		'posts_per_page' => 2,
        	);
        
        	$the_query = new WP_Query($args);
        
        	if ( $the_query->have_posts() ) : ?>

                <div class="main-carousel main-carousel--twocols main-carousel--withmobile anim anim--up" id="news">
                
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
                    <div class="carousel-cell">
                        <a href="<?php the_permalink(); ?>" class="o-box">
                            <div class="content">
                                <div class="o-photo">
                                    
                                    <?php get_template_part('template-parts/content/thumbnail-small'); ?>
                                    
                                </div>
                                
                                <div class="caption">
                                    
                                    <?php get_template_part('template-parts/content/categories'); ?>
                                    <h3 class="title"><?php the_title(); ?></h3>

                                </div>                                    
                            </div>
                            
                            <p class="date"><?php the_time('F j, Y'); ?></p>
                        </a>
                    </div>
                    
                <?php endwhile; ?>

                </div>
                
            <?php
              	wp_reset_query(); 
            	endif; ?>
                
                <div class="o-more">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>news/" class="o-btn"><?php pll_e('Read all news'); ?></a>
                </div>
            </div>
        </div>
    </div>
