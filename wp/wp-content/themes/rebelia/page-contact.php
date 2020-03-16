<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

    <?php get_template_part('template-parts/top'); ?>
    <?php get_template_part('template-parts/topbar'); ?>

    <div class="o-container">

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <div class="c-contact u-toppadding">
            <div class="o-section o-section--toppadding">
                <div class="o-wrap o-wrap--narrow2">
                    
                    <article class="o-article o-article--big aligncenter">
                        <h1><?php the_title(); ?></h1>
                        
                        <?php the_content(); ?>

                    </article>
    
                    <div class="o-more">
                        
                        <?php 
                            $button = get_field('join_rebelia_discord', 'Options');
                            $name = $button['name'];
                            $link = $button['link'];
                        ?>
                            
                        <a href="<?= $link; ?>" class="o-btn o-btn--violet">
                            <i class="icon-discord-button"></i>
                            <span><?= $name; ?></span>
                        </a>
                    </div>
                </div>
                
                <?php get_template_part('template-parts/contact/map'); ?>           
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
