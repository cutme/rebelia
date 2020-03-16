<?php get_header(); ?>

    <?php get_template_part('template-parts/top'); ?>
    <?php get_template_part('template-parts/topbar'); ?>        

	<div class="o-container">
    	
    <?php while ( have_posts() ) : the_post(); ?>

    <div class="c-join u-toppadding">
        <div class="o-section o-section--paddings">
            <div class="o-wrap o-wrap--narrow2">
                
                <article class="o-article o-article--margin o-article--big aligncenter">
                    <h1><?php pll_e('Join the Rebelia'); ?></h1>
                    
                    <p><?php pll_e("We're a small team based in Katowice. Learn more about working in Rebelia Games."); ?></p>
                </article>
                
                <article class="o-article o-article--single">
                    
                    <?php the_content(); ?>
                    
                </article>
                
                <div class="o-more">
                    <a href="#" class="o-btn js-apply"><?php pll_e('Apply now'); ?></a>
                </div>
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
