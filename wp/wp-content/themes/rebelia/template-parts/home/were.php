<?php
    $article = get_field('were__article');
    $image = get_field('were__image');
?>
    <div class="c-were anim anim--up">
        <div class="o-section o-section--paddings">
            <div class="o-wrap o-wrap--narrow2">
                
            <?php if ($article) : ?>
            
                <article class="o-article o-article--margin o-article--big aligncenter">
                    
                    <?= $article; ?>
                    
                </article>
                
            <?php endif; ?>
            
            <?php                
                if ($image) {
                    $alt = $image['alt'];

                    $size = 'office';
                    $size2x = 'office@2x';
                    
                    $thumb = $image['sizes'][ $size ];
                    $thumb2x = $image['sizes'][ $size2x ];
                } ?>

                <img srcset="<?php echo esc_url($thumb); ?> 1x, <?php echo esc_url($thumb2x); ?> 2x" src="<?php echo esc_url($thumb); ?>" alt="<?= $alt; ?>">
                
                <div class="o-more anim anim--up">
                    <a href="about/" class="o-btn">Learn more</a>
                </div>
            </div>
        </div>
    </div>
