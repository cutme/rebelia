<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php
    	if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            wpcf7_enqueue_scripts();
        }
     
        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        }
    ?>
    
<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-159911830-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
    
	<?php wp_head(); ?>
</head>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
</head>

<body style="overflow: hidden" <?php body_class(); ?>>

<div id="cover" class="u-cover" style="position: absolute; left: 0; top: 0; z-index: 200; width: 100%; height: 100%; background-color: #060606; background-image: url(<?php echo get_template_directory_uri(); ?>/img/assets/logo-rebelia@2x.png); background-size: 136px auto; background-repeat: no-repeat; background-position: center"></div>

