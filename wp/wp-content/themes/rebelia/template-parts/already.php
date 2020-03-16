<?php
    
    $header = get_field('already__header', 'Options');
    $footer = get_field('already__footer', 'Options'); ?>

                        <article class="o-article <?php if( !is_front_page() ) { echo 'o-article--margin o-article--big'; } ?>">
                            <h2 class="o-lead o-leaad--2"><?= $header; ?></h2> 
                        </article>

                        <div class="o-trailer <?php if( !is_front_page() ) { echo 'o-trailer--big'; } ?>">                                
                            
                        <?php if( have_rows('already__videos', 'Options') ): $i = 0; ?>
                        
                            <div class="c-filters c-filters--dark" id="filters">
                                <div class="c-filters__content">
                                    
                                    <div class="c-filters__trace js-trace">
                                        <ul class="js-nav">
                                            
                                        <?php while( have_rows('already__videos', 'Options') ): the_row(); 
                                            
                                            $details = get_sub_field('details');
                                            $name = $details['name']; ?>

                                            <li <?php if ($i === 0) { echo 'class="is-active"'; } ?>>
                                                <a href="#" class="item js-item"><?= $name; ?></a>
                                            </li>
                                            
                                         <?php $i ++; endwhile; ?>
 
                                        </ul>
                                        
                                        <span class="c-filters__target js-target"></span>
                                    </div>                                    
                                </div>
                            </div>
                            
                        <?php endif; ?>
                        
                        
                        <?php if( have_rows('already__videos', 'Options') ): ?>                        
                        
                            <div class="main-carousel" id="played">
                                
                                <?php while( have_rows('already__videos', 'Options') ): the_row(); 
                            
                                    $image = get_sub_field('image');
                                    $details = get_sub_field('details');
                                    $youtube_link = $details['youtube_link']; 
                                    
                                    if ($image) {
                                        $alt = $image['alt'];
                                    
                                        if (is_front_page()) {
                                            $size = 'already-played-small';
                                            $size2x = 'already-played-small@2x';
                                        
                                        } else {
                                            $size = 'already-played';
                                            $size2x = 'already-played@2x';
                                        }
                                        
                                        $thumb = $image['sizes'][ $size ];
                                        $thumb2x = $image['sizes'][ $size2x ];
                                    }
                                ?>
                                
                                <div class="carousel-cell">
                                    <a href="<?= $youtube_link; ?>?controls=0" class="o-trailer__video o-trailer__video--<?php if( !is_front_page() ) { echo 'big'; } else { echo 'small'; } ?> o-trailer__video--youtube  js-video">
                                    <img srcset="<?php echo esc_url($thumb); ?> 1x,
                    				             <?php echo esc_url($thumb2x); ?> 2x"
                    				     src="<?php echo esc_url($thumb); ?>" alt="<?= $alt; ?>">
                                    </a>
                                </div>
                                
                                <?php endwhile; ?>
                                
                            </div>
                            
                        <?php endif; ?>


                        
                        <?php if ($footer) : ?>

                            <article class="o-article o-article--big">
                            
                                <?= $footer; ?>

                            </article>                    
                            
                        <?php endif; ?>

                        </div>
