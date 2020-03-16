<?php get_header(); ?>

    <?php get_template_part('template-parts/top'); ?>
    <?php get_template_part('template-parts/topbar'); ?>        

	<div class="o-container">
    	
    <?php while ( have_posts() ) : the_post(); ?>

        <div class="c-news u-toppadding">
            <div class="o-section o-section--paddings">
                <div class="o-wrap o-wrap--narrow2">
                    
                    <div class="o-box">
                        <div class="o-avatar">

                            <?php get_template_part('template-parts/content/avatar-image'); ?>
                            <?php get_template_part('template-parts/content/categories'); ?>
                            
                        </div>
                        
                        <h1 class="title"><?php the_title(); ?></h1>
                        
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
      
                        <div class="photo">
                            
                            <?php get_template_part('template-parts/content/thumbnail-big'); ?>
                            
                        </div>

                <?php endif; ?>

                        <article class="o-article">
                            
                            <?php the_content(); ?>
                            
                        </article>
                        
                        <?php get_template_part('template-parts/content/meta'); ?>
                        <?php get_template_part('template-parts/content/share'); ?>
    
                    </div>
                </div>
            </div>
        </div>
        
    <?php endwhile; ?>
    	
    	<?php get_template_part('template-parts/shortnews-static'); ?>
    	<?php get_template_part('template-parts/newsletter'); ?>
        	
	</div>
	
	
    <?php get_footer(); ?>
    <?php get_template_part('template-parts/cookies'); ?>
    	

<?php wp_footer(); ?>

</body>
</html>
