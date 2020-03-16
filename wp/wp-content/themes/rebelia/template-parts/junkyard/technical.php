<?php
    $technical = get_field('technical__article'); 
    
    if ($technical) : ?>

        <div class="c-technical">
            <div class="o-section o-section--paddings">
                <div class="o-wrap o-wrap--narrow2">
    
                    <div class="o-box anim anim--up">
                        <article class="o-article">
                            
                            <?= $technical; ?>
                            
                        </article>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>
