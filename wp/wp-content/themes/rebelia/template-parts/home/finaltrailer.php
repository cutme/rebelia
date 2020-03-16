<?php
    $image = get_field('final__image');
    $details = get_field('final__details');
    $article = $details['article'];
    $youtube_link = $details['youtube_link'];

    if ($image) {
        $alt = $image['alt'];
    
        $size = 'already-played-small';
        $size2x = 'already-played-small@2x';
               
        $thumb = $image['sizes'][ $size ];
        $thumb2x = $image['sizes'][ $size2x ];
    } ?>

                        <article class="o-article">
                            <h2>Watch the Final Trailer</h2>
                            <p>It’s hard to explain what business on the Junk Yard looks like.</p>
                            <p>That’s why we made a game about it.</p>
                        </article>
        
                        
                        <div class="o-trailer">                    
                            <a href="<?= $youtube_link; ?>?controls=0" class="o-trailer__video o-trailer__video--small o-trailer__video--youtube  js-video">
                                <img srcset="<?php echo esc_url($thumb); ?> 1x,
                				             <?php echo esc_url($thumb2x); ?> 2x"
                				     src="<?php echo esc_url($thumb); ?>" alt="<?= $alt; ?>">
                            </a>                      
        
                            <div class="o-more">
                                <a href="junkyard/" class="o-btn">Take a tour</a>
                            </div>
                        </div>
