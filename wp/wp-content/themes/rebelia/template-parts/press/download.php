
                <?php if( have_rows('boxes') ): $i = 0; ?>

                    <div class="c-download">
                        <div class="o-cols o-cols--2">
                            
                        <?php while( have_rows('boxes') ): the_row(); 
                            
                            $header = get_sub_field('header');
                            $title = $header['title'];
                            $subtitle = $header['subtitle'];
                            
                            $article = get_sub_field('article');
                            $button = get_sub_field('button');
                            $button_name = $button['name'];
                            $button_link = $button['file'];
                        ?>    
                        
                            <div class="o-cols__item">
                                <div class="o-box">                            
                                    <header class="o-header">
                                        <h4 class="title"><?= $title; ?></h4>
                                        <h6 class="subtitle"><?= $subtitle; ?></h6>
                                    </header>
                                    
                                    <article class="o-article">
                                        
                                        <?= $article; ?>
                                        
                                    </article>
                                    
                                    <a href="<?= $button_link; ?>" class="o-btn">
                                        <span><?= $button_name; ?></span>
                                        <i class="icon-download"></i>
                                    </a>
                                </div>
                            </div>
                            
                        <?php endwhile; ?>

                        </div>
                    </div>

                <?php endif; ?>