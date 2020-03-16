<?php
/**
 * Template Name: JunkYard
 */
get_header(); ?>

        <?php get_template_part('template-parts/top'); ?>
        <?php get_template_part('template-parts/topbar'); ?>
        <?php get_template_part('template-parts/header'); ?>
	
	<div class="o-container">
    	
    	<?php get_template_part('template-parts/junkyard/watchtrailers'); ?>
    	<?php get_template_part('template-parts/junkyard/story'); ?>
    	
	</div>

	<?php get_template_part('template-parts/junkyard/mechanics'); ?>
	
	<div class="o-container">

        <div class="c-trailers c-trailers--big c-trailers--dark anim anim--up">
            <div class="o-section o-section--paddings">
            
                <?php get_template_part('template-parts/already'); ?>
        
            </div>
        </div>
        
        <?php get_template_part('template-parts/junkyard/reviews'); ?>
        <?php get_template_part('template-parts/junkyard/technical'); ?>
        <?php get_template_part('template-parts/newsletter'); ?>
    	
	</div>
	
	
    <?php get_footer(); ?>
    <?php get_template_part('template-parts/cookies'); ?>
    	

<?php wp_footer(); ?>

</body>
</html>

