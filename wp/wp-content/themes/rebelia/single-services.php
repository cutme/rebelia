<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

        <section class="c-welcome" id="welcome">
			<div class="o-container__left js-leftColumn">
    			
				<?php get_template_part('template-parts/sidebar'); ?>
				
			</div>

<?php
    $background = get_field('background');
    
    $color = $background['background__color'];
    $image = $background['background__image']; 
    
    if( $image ) {
            
        $size = 'homecarousel';
        $thumb = $image['sizes'][ $size ];
    }
    
    if ($image) : ?>

			<div class="o-container__right js-rightColumn bg-<?= $color; ?>" style="background-image: url(<?= $thumb; ?>);">
    			
    <?php else :  ?>
    
            <div class="o-container__right js-rightColumn bg-<?= $color; ?>">
    
    <?php endif; ?>

    			<div class="c-post c-post--standard">
					<article class="o-article">
    					
					<?php
    					if (has_post_thumbnail( $post->ID ) ):
                        	$thumbnail_id = get_post_thumbnail_id( $post->ID );
                            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                        	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'service-featured' );
                        endif; ?>

                        <img src="<?= $image[0]; ?>" alt="<?= $alt; ?>" class="alignright">
						
						<h1><?php the_title(); ?></h1>
						
						<?php the_content(); ?>						
						
					</article>
				</div>
    			
			</div>
        </section>


        <div class="o-container__left o-container__left--floating js-leftColumn">

			<?php get_template_part('template-parts/sidebar'); ?>

		</div>

<?php endwhile; ?>                                              
		
		<div class="o-container__right js-rightColumn">


			<?php get_footer(); ?>
		</div>
	</main>
	
	<?php get_template_part('template-parts/sidemenu'); ?>
    <?php get_template_part('template-parts/nav'); ?>


<?php wp_footer(); ?>

</body>
</html>
