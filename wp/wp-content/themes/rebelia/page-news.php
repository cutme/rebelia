<?php
/**
 * Template Name: News
 */

get_header(); ?>

    <?php get_template_part('template-parts/top'); ?>
    <?php get_template_part('template-parts/topbar'); ?>

    <div class="o-container">
        
        <div class="c-news u-toppadding">
            <div class="o-section o-section--paddings">
                <div class="o-wrap o-wrap--narrow2">
                
                <?php while ( have_posts() ) : the_post(); ?>
                        
                    <article class="o-article o-article--margin o-article--big aligncenter">
                        <h1><?php the_title(); ?></h1>
                        
                        <?php the_content(); ?>

                    </article>
                    
                <?php endwhile; ?>

                <?php get_template_part('template-parts/content/filters-light'); ?>

            <?php
            	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            
                $args = array(
                    'post_type' => 'post',
            		'paged' => $paged,
            	);
            
            	$the_query = new WP_Query($args);
            
            	if ( $the_query->have_posts() ) : ?>
                    
                    <ul class="c-news__list">
                    
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <li class="c-news__item anim anim--up">
                            <div class="o-box">
                                <div class="o-avatar">
                                    
                                    <?php get_template_part('template-parts/content/avatar-image'); ?>
                                    <?php get_template_part('template-parts/content/categories'); ?>

                                </div>
                                
                                <h2 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                
                                <a href="<?php the_permalink(); ?>">
                                    
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>

                                <div class="photo">
                                    
                                    <?php get_template_part('template-parts/content/thumbnail-big'); ?>
                                    
                                </div>
        
                        <?php endif; ?>
                                    
                                </a>
    
                                <article class="o-article">
                                    
                                    <?php the_content(); ?>
                                    
                                </article>
                                
                                <?php get_template_part('template-parts/content/meta'); ?>
                                <?php get_template_part('template-parts/content/share'); ?>

                            </div>
                        </li>
                        
                    <?php endwhile; ?>

                    </ul>
                    
                                      
                    <?php
                        
                        
                    ?>
                    
  
                    <div class="c-pagination">
        
                        <span class="previous">
                            <?php next_posts_link( 'Older posts', $the_query->max_num_pages ); ?>
                        </span>
                        
                        <span class="next">
                            <?php previous_posts_link( 'Newer posts' ); ?>
                        </span>
                        
                    </div>            		
                    
            
            <?php
              	wp_reset_query(); 
            	endif; ?>

                    
                </div>
            </div>
        </div>
        
        <?php get_template_part('template-parts/newsletter'); ?>

    </div>
    

    <?php get_footer(); ?>
    <?php get_template_part('template-parts/cookies'); ?>
    	

<?php wp_footer(); ?>

</body>
</html>
