
                        <?php 
                            $categories = get_the_category();
                            	
                            if ($categories) : ?>

                            <p class="category">
                            	<?php 
                                    foreach($categories as $term) {
                                        echo $term->name;
                                    }
                                ?>
                            </p>
                            
                        <?php endif; ?>
