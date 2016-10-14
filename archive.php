<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
* @subpackage visionary
 */
// Get theme settings
get_template_part('includes/submit','index');

get_header(); ?>
    <?php if ($pts_blogleft<>"Disable") { ?>
	<div id="blogleft">
	<?php get_template_part('includes/blogleftcolumn','index'); ?>
	</div>
	<?php } ?>
	
    <div id="content" style="width:<?php echo get_content_width(); ?>px;">
<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h1 class="page-title">
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Articles from: <span>%s</span>', 'visionary' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Articles from: <span>%s</span>', 'visionary' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Articles from: <span>%s</span>', 'visionary' ), get_the_date('Y') ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'visionary' ); ?>
<?php endif; ?>
			</h1>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the archives page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-archives.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'archive' );
?>

	  <!-- Post navigation -->
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }else{ wp_pagenavi_custom(); } ?>
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
