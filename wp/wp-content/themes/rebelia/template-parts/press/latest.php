
<?php if( have_rows('latest') ): ?>

                    <div class="c-press__latest anim anim--up"  id="press">
                        
                        <article class="o-article">
                            <h4 class="title"><?php pll_e('Latest Press Releases'); ?></h4>
        
                            <table>
                                
                                
                            <?php while( have_rows('latest') ): the_row(); 
                                
                                $date = get_sub_field('latest__date');
                                $info = get_sub_field('latest__info');
                                
                                $link = $info['link'];
                                $title = $info['title']; ?>
                                
                                <tr class="anim anim--up js-item">
                                    <th><?= $date; ?></th>
                                    
                                    <td>
                                        <a target="_blank" href="<?= $link; ?>"><?= $title; ?></a>
                                    </td>
                                </tr>  
                                
                            <?php endwhile; ?>
                                                         
                            </table>
                            
                        </article>
                        
<!--
                        <div class="c-press__pagination">
                            <a href="#" class="previous">Older posts</a>
                            <a href="#" class="next">Newer posts</a>
                        </div>
-->
                    </div>

<?php endif; ?>