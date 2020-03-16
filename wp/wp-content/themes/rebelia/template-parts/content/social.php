
            <?php if( have_rows('social', 'Options') ): ?>
            
                <div class="c-social anim anim--up">
                    <ul>

                    <?php while( have_rows('social', 'Options') ): the_row(); ?>
                        
                        <li>
                            <a href="<?= get_sub_field('social__link'); ?>" class="<?= get_sub_field('social__class'); ?>"></a>
                        </li>
                        
                    <?php endwhile; ?>

                    </ul>
                </div>

            <?php endif; ?>
