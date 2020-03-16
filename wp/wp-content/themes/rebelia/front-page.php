<?php
/**
 * Template Name: Front page
 */
get_header(); ?>

        <?php get_template_part('template-parts/top'); ?>
        <?php get_template_part('template-parts/topbar'); ?>
        <?php get_template_part('template-parts/header'); ?>
        
	
	<div class="o-container">
    	
    	<?php get_template_part('template-parts/home/hometrailers'); ?>
    	<?php get_template_part('template-parts/home/shortnews-carousel'); ?>
    	<?php get_template_part('template-parts/home/were'); ?>
    	<?php get_template_part('template-parts/jobs'); ?>
    	<?php get_template_part('template-parts/newsletter'); ?>
        	
	</div>
	
	
    <?php get_footer(); ?>
    <?php get_template_part('template-parts/cookies'); ?>
    	

<?php wp_footer(); ?>

</body>
</html>

