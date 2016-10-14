<?php
/**
 * Template Name: Page with Right Column
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>* @subpackage visionary
 */

// Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");

get_header(); 

?>
    <div id="content" class="right-only">
		<?php get_template_part( 'page-content' ); ?>
	</div>
	<div id="right"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Right Column')) : ?><?php endif; ?></div>
<?php get_footer(); ?>