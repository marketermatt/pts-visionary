<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
 * Theme for WordPress: Visionary* @subpackage visionary
 */

get_header(); 

// Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");
?>
    <?php if ($pts_blogleft<>"Disable") { ?>
	<div id="blogleft">
	<?php get_template_part('includes/blogleftcolumn','index'); ?>
	</div>
	<?php } ?>
	
    <div id="content" style="width:<?php echo get_content_width(); ?>px;"><?php get_template_part( 'loop', 'index' ); ?></div>
	<?php if ($pts_bloginset<>"Disable") { ?>
	<div id="bloginset">
	<?php get_template_part('includes/bloginsetcolumn','index'); ?>
	</div>
	<?php } ?>
	<?php if ($pts_blogright<>"Disable") { ?>
    <div id="blogright">
	<?php get_template_part('includes/blogrightcolumn','index'); ?>
	</div>
	<?php } ?>



<?php get_footer(); ?>