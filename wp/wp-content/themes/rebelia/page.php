<?php
/**
 * The template for displaying pages
 *
 */

get_header(); ?>

    <?php get_template_part('template-parts/top'); ?>
    <?php get_template_part('template-parts/topbar'); ?>        

	<div class="o-container">
    	
    <?php while ( have_posts() ) : the_post(); ?>

    <div class="c-join u-toppadding">
        <div class="o-section o-section--paddings">
            <div class="o-wrap o-wrap--narrow2">
                
                <article class="o-article o-article--margin o-article--big aligncenter">
                    <h1><?php the_title(); ?></h1>
                    
                </article>
                
                <article class="o-article o-article--single">
                    
                    <?php the_content(); ?>
                    
                </article>

            </div>
            
            <?php get_template_part('template-parts/jobs/appform'); ?>
        </div>
    </div>
        
    <?php endwhile; ?>
    	
    	<?php get_template_part('template-parts/newsletter'); ?>
        	
	</div>
	
	
    <?php get_footer(); ?>
    <?php get_template_part('template-parts/cookies'); ?>
    	

<?php wp_footer(); ?>

</body>
</html>
