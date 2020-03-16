<?php
/**
 * Template for displaying search forms
 *
 */
?>

        <form class="c-searchform" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
        	<div class="c-searchform__content" id="searchform__content">
                <input type="text" name="s" placeholder="Search for...">
                <button type="submit">
                    <i class="icon-search"></i>
                </button>
            </div>
        </form>
