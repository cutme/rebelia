
<?php

    $args = array(
        'post_type' => 'job',
		'posts_per_page' => -1,
	);

	$the_query = new WP_Query($args);

	if ( $the_query->have_posts() ) : ?>
      
                <div  class="c-jobs__list">
                    
                <?php if (!is_front_page()) : ?>
                    
                    <h2 class="title"><?php pll_e('Open positions'); ?></h2>
                    
                <?php endif; ?>
                    
                    <ul class="job-items" id="job-list">
                        
		<?php
      		while( $the_query->have_posts() ) : $the_query->the_post(); ?>                
                        
                        <li class="anim anim--up">
                            
                            <a href="<?php the_permalink(); ?>" class="c-jobs__item">
                                    
                                <p class="name"><?php the_title(); ?></p>
                                <p class="time"><?php pll_e('Full time'); ?></p>

                            </a>
                        </li>
                    
		<?php
          	endwhile; ?>
          	
                  	</ul>
                </div>

<?php
  	wp_reset_query(); 
	endif; ?>
	
    
