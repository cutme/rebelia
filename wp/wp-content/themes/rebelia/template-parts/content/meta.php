
                        <div class="meta">

                        <?php 
                            global $post; 
                            $author_id=$post->post_author; ?>
						                            
                            <p class="author"><?php the_author_meta( 'first_name', $author_id ); ?> <?php the_author_meta( 'last_name', $author_id ); ?> on <?php the_time('F j, Y'); ?></p>
                        </div>
