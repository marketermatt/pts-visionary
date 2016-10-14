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
	
    <div id="content" style="width:<?php echo get_content_width(); ?>px;">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-meta">
						<?php visionary_posted_on(); ?>&nbsp;
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'visionary' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->



					<div class="entry-utility">
						<?php visionary_posted_in(); ?>
						<?php edit_post_link( __( 'Edit', 'visionary' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<a class="Logo-Text" href="javascript:javascript:history.go(-1)"><?php _e('Return to Previous Page', 'visionary' ); ?></a>
				</div><!-- #nav-below -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

	</div></div>
	
	<?php if ($pts_bloginset<>"Disable") { ?>
	<div id="bloginset">
	<?php get_template_part('includes/bloginsetcolumn','index');  ?>
	</div>
	<?php } ?>
	<?php if ($pts_blogright<>"Disable") { ?>
    <div id="blogright">
	<?php get_template_part('includes/blogrightcolumn','index'); ?>
	</div>
	<?php } ?>
  </tr>
</table>

<?php get_footer(); ?>