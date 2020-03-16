<?php
    $article = get_field('watch__article');
?>

    <div class="c-watchtrailers anim anim--up" id="watchtrailersholder">
        <div class="o-section o-section--paddings">
            
        <?php if ($article) : ?>
            <div class="o-wrap o-wrap--narrow2">
            
                <article class="o-article o-article--big o-article--margin aligncenter">
                    
                    <?= $article; ?>
                    
                </article>
            </div>
            
        <?php endif; ?>

            <?php if( have_rows('watch__videos') ): $i = 0; ?>
            
                <div class="main-carousel main-carousel--withmobile anim anim--up" id="watchtrailers">
                
                <?php while( have_rows('watch__videos') ): the_row(); 
                     
                    $image = get_sub_field('image');
                    $youtube_link = get_sub_field('youtube_link');
                    
                    if ($image) {
                        $alt = $image['alt'];
                        $size = 'already-played';
                        $size2x = 'already-played@2x';
                        
                        $thumb = $image['sizes'][ $size ];
                        $thumb2x = $image['sizes'][ $size2x ];
                    } ?>

                    <div class="carousel-cell">
                        <a href="<?= $youtube_link; ?>?controls=0" class="o-trailer js-video">
                            <div class="o-trailer__video o-trailer__video--youtube o-trailer__video o-trailer__video--shadow o-trailer__video--youtube o-trailer__video--big">
                                <img srcset="<?php echo esc_url($thumb); ?>, 
                                             <?php echo esc_url($thumb2x); ?> 2x" src="<?php echo esc_url($thumb); ?>" alt="<?= $alt; ?>">
                            </div>
                        </a>
                    </div>
                    
                <?php endwhile; ?>

                </div>
                
            <?php endif; ?>
 
            <div class="o-wrap o-wrap--narrow2">
                
                <div class="o-controls">
                    
                    <div class="flickity-page-dots js-group--dots">

            <?php if( have_rows('watch__videos') ): $i = 1; ?>
        
                <?php while( have_rows('watch__videos') ): the_row(); ?>
        
                    <i class="dot <?php if ($i === 1) { echo 'is-selected'; } ?>"></i>
                        
                <?php $i++; endwhile; ?>

            <?php endif; ?>

                    </div>
                    
                    <div class="arrows">
                        <i class="icon-arrow-left js-previous"></i>
                        <i class="icon-arrow-right js-next"></i>
                    </div>
                </div>
                
                

            </div>
        </div>
    </div>
