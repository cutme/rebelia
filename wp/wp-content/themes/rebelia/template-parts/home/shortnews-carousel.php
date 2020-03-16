<?php
    $article = get_field('news__article');
?>

    <div class="c-shortnews c-shortnews--carousel anim anim--up">
        <div class="o-section o-section--paddings">
            <div class="o-wrap o-wrap--narrow2">
                
            <?php if ($article) : ?>
            
                <article class="o-article o-article--margin o-article--big aligncenter">
                    
                    <?= $article; ?>
                    
                </article>
            
            <?php endif; ?>
            
            
        <?php
            $args = array(
                'post_type' => 'post',
        		'posts_per_page' => -1,
        	);
        
        	$the_query = new WP_Query($args);
        
        	if ( $the_query->have_posts() ) : ?>

                <div class="main-carousel main-carousel--twocols main-carousel--withmobile anim anim--up" id="news">
                
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>	
      		
                    <div class="carousel-cell">
                        
                        <a href="<?php the_permalink(); ?>" class="o-box">
                            <div class="content">
                                
                                <?php get_template_part('template-parts/content/thumbnail-small'); ?>

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
                
                
                <div class="o-controls">
                    
                    <div class="flickity-page-dots js-group--dots">
                        
                <?php 
                    $i = 1;
                    
                    while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php if ($the_query->current_post % 2 != 0): ?>
                        
                        <i class="dot <?php if ($i === 2) { echo 'is-selected'; } ?>"></i>
                        
                        <?php endif; ?>
                        
                <?php $i++; endwhile; ?>

                    </div>

                    <div class="arrows">
                        <i class="icon-arrow-left js-previous"></i>
                        <i class="icon-arrow-right js-next"></i>
                    </div>
                </div>
                
        <?php
          	wp_reset_query(); 
        	endif; ?>

                
                <div class="o-more">
                    <a href="news/" class="o-btn">Read all news</a>
                </div>
            </div>
        </div>
    </div>
