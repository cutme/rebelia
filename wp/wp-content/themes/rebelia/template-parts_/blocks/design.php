<?php
	
	/**
	 * Block Name: Design blocks
	 *
	 */

?>

<?php if( have_rows('designblocks') ): $i = 0; ?>

                        <table>
                            
        <?php while( have_rows('designblocks') ): the_row();
    
        	$image = get_sub_field('designblocks__image'); 
        	$title = get_sub_field('designblocks__title'); 
        	
            if( $image ) {
            
                $size = 'design-block';
                $thumb = $image['sizes'][ $size ];
                $alt = $image['alt'];
            } ?>

                    <?php if ($i === 0) : ?>
                    
							<tr>
    							
                    <?php endif; ?>
                    
								<td>
								<?php if ($image) : ?>
								
									<img src="<?= $thumb; ?>" alt="<?= $alt; ?>">
								
								<?php endif; ?>
								<?php if ($title) : ?>

									<h3><?= $title; ?></h3>
								<?php endif; ?>
								
								</td>

                    <?php if ($i === 1) : $i = 0; ?>
                    
							</tr>
							
                    <?php else : $i ++; endif; ?>


            <?php endwhile; ?>
							
						</table>

<?php endif; ?>
