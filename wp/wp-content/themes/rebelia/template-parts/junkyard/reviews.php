<?php
    $article = get_field('reviews__article'); ?>

        <div class="c-reviews anim anim--up">
            <div class="o-section o-section--paddings">
                <div class="o-wrap o-wrap--narrow2">
                    
                <?php if ($article) : ?>
                
                    <article class="o-article o-article--margin o-article--big aligncenter">
                        
                        <?= $article; ?>
                        
                    </article>
                    
                <?php endif; ?>
                
                
                <?php if( have_rows('reviews') ): $i = 1; ?>
                
                    <div class="main-carousel main-carousel--twocols main-carousel--withmobile anim anim--up" id="reviews">
    
                    <?php while( have_rows('reviews') ): the_row(); 
                         
                        $image = get_sub_field('avatar');
                        $review = get_sub_field('review');
                        $review__content = $review['review'];
                        $name = $review['name'];
                        $link = $review['link'];
                        
                        if ($image) {
                            $alt = $image['alt'];
                            $size = 'avatar-review';
                            $size2x = 'avatar-review@2x';
                            
                            $thumb = $image['sizes'][ $size ];
                            $thumb2x = $image['sizes'][ $size2x ];
                        } ?>
                        
                        <div class="carousel-cell">
                            <div class="c-reviews__item">
                                <div class="o-box">                            
                                    <div class="content">
                                        <div class="o-avatar o-avatar--thumb">
                                            <div class="image">
                                                <img srcset="<?php echo esc_url($thumb); ?>, <?php echo esc_url($thumb2x); ?> 2x" src="<?php echo esc_url($thumb); ?>" alt="">
                                            </div>
                                            
                                            <p class="name"><?= $name; ?></p>
                                        </div>
                                    
                                        <p class="review">“<?= $review__content; ?>”</p>
                                    </div>
    
                                <?php
                                    $steam_reviews = get_field('read_reviews_on_steam', 'Options'); ?>
    
                                <?php // if ($steam_reviews) : ?>
                                <?php if ($link) : ?>
                                
                                    <p class="more-reviews">
                                        <a href="<?= $link; ?>" target="_blank"><?= $steam_reviews['name']; ?></a>
                                    </p>
                                
                                <?php endif; ?>
                                    
                                </div>
                            </div>
                        </div>
                        
                    <?php endwhile; ?>
                        
                    </div>
                    
                    
                    <div class="o-controls">
                        
                        <div class="flickity-page-dots js-group--dots">
                            
                    <?php while( have_rows('reviews') ): the_row(); ?>
                        
                        <?php if ($i % 2 != 0): ?>
    
                            <i class="dot <?php if ($i === 1) { echo 'is-selected'; } ?>"></i>
    
                    <?php endif; ?>

                    <?php $i ++; endwhile; ?>
    
                        </div>
                        
                        <div class="arrows">
                            <i class="icon-arrow-left js-previous"></i>
                            <i class="icon-arrow-right js-next"></i>
                        </div>
                    </div>
                
                <?php endif; ?>
                
                </div>
            </div>
        </div>
        
        <hr>
    
