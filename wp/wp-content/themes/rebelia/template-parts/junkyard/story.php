<?php
    $article_big = get_field('story__big');
    $article_normal = get_field('story__normal');
?>

    <div class="c-story anim anim--up">
        <div class="o-section o-section--paddings">
            <div class="o-wrap o-wrap--narrow">
                
                <article class="o-article o-article--big">
                    
                <?php if ($article_big) : ?>
                
                    <section class="big js-split" data-splitting>
                        
                        <?= $article_big; ?>
                        
                    </section>
                    
                <?php endif; ?>

                <?php if ($article_normal) : ?>
                    
                    <section class="normal anim anim--up">
                        
                        <?= $article_normal; ?>
                        
                    </section>
                    
                <?php endif; ?>

                </article>                
            </div>
        </div>
    </div>
