<?php
/**
 * Template Name: About
 */
get_header(); ?>

    <?php get_template_part('template-parts/top'); ?>
    <?php get_template_part('template-parts/topbar'); ?>

    <div class="o-container">

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <div class="c-about u-toppadding">
            <div class="o-section o-section--paddings">
                <div class="o-wrap o-wrap--narrow2">
                    
                    <article class="o-article o-article--margin o-article--big aligncenter">

                        <h1><?php the_title(); ?></h1>
                        
                        <?php the_excerpt(); ?>

                    </article>
                    
                    
                    <article class="o-article o-article--single">
                    
                        <?php get_template_part('template-parts/content/thumbnail-office'); ?>
                        
                        <?php the_content(); ?>
                        
                    </article>
      
                    <?php get_template_part('template-parts/content/social'); ?>
    
                </div>
            </div>
        </div>  

    <?php endwhile; ?>
<?php endif; ?>

        <?php get_template_part('template-parts/newsletter'); ?>

    </div>
    

    <?php get_footer(); ?>
    <?php get_template_part('template-parts/cookies'); ?>
    	

<?php wp_footer(); ?>

</body>
</html>
