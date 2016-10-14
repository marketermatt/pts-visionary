<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
* @subpackage visionary
 */

get_header(); 

// Get theme settings
get_template_part('includes/submit','index');
?>
    <?php if ($pts_blogleft<>"Disable") { ?>
	<div id="blogleft">
	<?php get_template_part('includes/blogleftcolumn','index'); ?>
	</div>
	<?php } ?>
    <div id="content" style="width:<?php echo get_content_width(); ?>px;">
		<h1 class="page-title"><?php printf( __( 'Category Archives: %s', 'visionary' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
			<?php $category_description = category_description(); 
			if ( ! empty( $category_description ) )
			echo '<div class="archive-meta">' . $category_description . '</div>';
			get_template_part( 'loop', 'category' );
?>
	
	</div>
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