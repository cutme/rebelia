    
    <?php if( have_rows('homecarousel') ): ?>
    
                <div class="c-homecarousel">
    				<div class="glide" id="homeCarousel">
    		            <div class="glide__track" data-glide-el="track">
    		
    		                <ul class="glide__slides">
    
    	<?php while( have_rows('homecarousel') ): the_row(); 
    
        	$image = get_sub_field('homecarousel__image');
    
            if( $image ) {
            
                $size = 'homecarousel';
                $thumb = $image['sizes'][ $size ];
            }
        
            $text = get_sub_field('text');
    		$firstline = $text['homecarousel__first'];
    		$secondline = $text['homecarousel__second'];
    		$thirdline = $text['homecarousel__third']; ?>
                
    		                    <li class="glide__slide" style="background-image: url(<?php echo esc_url($thumb); ?>)">
    								<article class="c-homecarousel__text">
        								
                                    <?php if ($firstline) : ?>
    	                                
    	                                <h4 class="first"><?= $firstline; ?></h4>
    	                            
    	                            <?php endif; ?>
    
                                    <?php if ($secondline) : ?>
    	                                
    	                                <h4 class="second"><?= $secondline; ?></h4>
    	                            
    	                            <?php endif; ?>
    
                                    <?php if ($thirdline) : ?>
                                    
    	                                <p class="third"><?= $thirdline; ?></p>
                                    
                                    <?php endif; ?>
    
    			                    </article>
    		                    </li>
    
        <?php endwhile; ?>
        
                            </ul>
    		            </div>
    				</div>
    			</div>
        
    <?php endif; ?>
