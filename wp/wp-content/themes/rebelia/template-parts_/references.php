
<?php if( have_rows('references', 'Options') ):

    $i = 0; $j = 1; $k = 0;
    $title = get_field('references__title', 'Options'); ?>
 
 
			<section class="c-references anim anim--up">
				
				<?php if ($title) :?>
				
				<header class="o-header">
					<h2 class="o-lead o-lead--1"><?= $title; ?></h2>
				</header>
				
				<?php endif; ?>
				
				<div class="glide" id="referencesCarousel">
		            <div class="glide__track" data-glide-el="track">
		                <ul class="glide__slides">
    		                
    		                
                    <?php while( have_rows('references', 'Options') ): the_row(); 
                            
                        $cite = get_sub_field('references__cite');
                        $author = get_sub_field('references__author'); ?>
                            
                        <?php if ($i === 0) : ?>

		                    <li class="glide__slide">
		                    	<div class="o-cols o-cols--3">
    		                    	
                        <?php endif; ?>

									<blockquote class="o-cols__item">
										<p><?= $cite; ?></p>
										
										<p class="author"><?= $author; ?></p>
									</blockquote>
									
                        <?php if ($i === 2) : $i = 0; ?>
                        
								</div>				
		                    </li>
		                    
                        <?php else : $i ++; endif; ?>

                    <?php endwhile; ?>
		                    
		                </ul>
		            </div>
		            
		            <div class="glide__bullets" data-glide-el="controls[nav]">
						    						
                <?php while( have_rows('references', 'Options') ): the_row(); ?>
                    <?php if ($j%3 == 0) : ?>
                    
						<button class="glide__bullet" data-glide-dir="=<?= $k; ?>"></button>
			
                    <?php $k ++; endif; ?>
                    <?php $j++ ; ?>
                
                <?php endwhile; ?>
						
					</div>
				</div>
			</section>

<?php endif; ?>

