<?php
    $instagram = get_field('social__instagram', 'Options');  
    $facebook = get_field('social__facebook', 'Options');
    $linkedin = get_field('social__linkedin', 'Options');
?>

        <ul class="c-social" id="social">
            
            <?php if ($instagram) : ?>
            
	        <li>
	        	<a href="<?= $instagram; ?>" class="icon-instagram" target="_blank" rel="noopener"></a>
	        </li>
	        
	        <?php endif; ?>
	        <?php if ($facebook) : ?>
	        
	        <li>
	        	<a href="<?= $facebook; ?>" class="icon-facebook" target="_blank" rel="noopener"></a>
	        </li>
	        
	        <?php endif; ?>
	        <?php if ($linkedin) : ?>
	        
	        <li>
	        	<a href="<?= $linkedin; ?>" class="icon-linkedin" target="_blank" rel="noopener"></a>
	        </li>
	        
	        <?php endif; ?>

        </ul>
