<?php
    $article = get_field('mechanics__article');
?>

    <div class="c-mechanics anim anim--up">
        <div class="o-section o-section--paddings">
            
        <?php if ($article) : ?>
            
            <div class="o-wrap o-wrap--narrow2">
                <article class="o-article o-article--big o-article--margin aligncenter">
                    
                    <?= $article; ?>
                    
                </article>
            </div>
            
        <?php endif; ?>

        <?php if( have_rows('mechanics__videos') ): $i = 1; ?>
        
            <div class="c-mechanics__videos">
                <div class="main-carousel main-carousel--withmobile anim anim--up" id="mechanics">
                    
                <?php while( have_rows('mechanics__videos') ): the_row(); 
                    
                    $video = get_sub_field('video');
                    $image = $video['image'];
                    $file = $video['video'];
                    
                    if ($image) {
                        $alt = $image['alt'];
                        $size = 'mechanics';
                        $size2x = 'mechanics@2x';
                        
                        $thumb = $image['sizes'][ $size ];
                        $thumb2x = $image['sizes'][ $size2x ];
                    } ?>
                    
                    <div class="carousel-cell">
                        <div class="o-trailer o-trailer--mechanics">
                            <a href="<?= $file; ?>" class="o-trailer__video o-trailer__video--mp4 o-trailer__video--shadow o-trailer__video js-video">                                                                
                                <img srcset="<?php echo esc_url($thumb); ?>, <?php echo esc_url($thumb2x); ?> 2x" src="<?php echo esc_url($thumb); ?>g" alt="<?= alt; ?>">
                            </a>
                        </div>
                    </div>
                    
                <?php endwhile; ?>

                </div>
                
                <div class="o-wrap o-wrap--narrow2">
                    
                    <div class="o-controls">
                        
                        <div class="flickity-page-dots js-group--dots">
                        
                        <?php while( have_rows('mechanics__videos') ): the_row(); ?>
                        
                            <i class="dot <?php if ($i === 1) { echo 'is-selected'; } ?>"></i>
                        
                        <?php $i++; endwhile; ?>
                        
                        </div>
                        
                        <div class="arrows">
                            <i class="icon-arrow-left js-previous"></i>
                            <i class="icon-arrow-right js-next"></i>
                        </div>
                    </div>

                </div>
            </div>
   
            <div class="c-mechanics__info">
                <div class="o-wrap o-wrap--narrow2">
                    <div class="main-carousel" id="mechanicsInfo">
                        
                    <?php
                        while( have_rows('mechanics__videos') ): the_row(); 
                        $article = get_sub_field('article'); ?>
                        
                        <div class="carousel-cell">
                            <article class="o-article o-article--single">
                                
                                <?= $article; ?>

                            </article>
                        </div>
                        
                    <?php endwhile; ?>
                        
                    </div>
                </div>
            </div>
            
        <?php endif; ?>

        </div>
    </div>