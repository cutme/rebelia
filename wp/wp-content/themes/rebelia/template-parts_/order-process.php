
                <div class="c-process">	

					<header class="c-process__title">
						<h1 class="o-lead--1"><?php the_title(); ?></h1>
					</header>
					
<?php if( have_rows('process') ): ?>

					<table>
    					
                <?php while( have_rows('process') ): the_row(); 
                    
                    $details = get_sub_field('process__details');
                    
                    $icon = $details['icon'];
                    $name = $details['name'];
                    $description = get_sub_field('description'); ?>

						<tr class="<?= str_replace(' ', '-', strtolower($name)); ?> anim anim--up">
							<td>
								<i class="<?= $icon; ?>"></i>
								<h3 class="o-lead--3"><?= $name; ?></h3>
							</td>
							
							<td>
								<section>
									<?= $description; ?>
									
								</section>
							</td>
						</tr>
                
                <?php endwhile; ?>
				
					</table>

<?php endif; ?>	

				</div>
