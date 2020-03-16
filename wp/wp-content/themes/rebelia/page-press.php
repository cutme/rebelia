<?php
/**
 * Template Name: Press
 */
get_header(); ?>

    <?php get_template_part('template-parts/top'); ?>
    <?php get_template_part('template-parts/topbar'); ?>

    <div class="o-container">

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <div class="c-press u-toppadding">
            <div class="o-section o-section--toppadding">
                <div class="o-wrap o-wrap--narrow2">
                    
                    <article class="o-article o-article--margin o-article--big aligncenter">
                        <h1><?php the_title(); ?></h1>
                        
                        <?php the_content(); ?>

                    </article>
                    
                    <?php get_template_part('template-parts/press/download'); ?>
                    <?php get_template_part('template-parts/press/latest'); ?>

                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

        <?php get_template_part('template-parts/shortnews-static'); ?>
        <?php get_template_part('template-parts/newsletter'); ?>

    </div>
    

    <?php get_footer(); ?>
    <?php get_template_part('template-parts/cookies'); ?>
    	

<?php wp_footer(); ?>

</body>
</html>
