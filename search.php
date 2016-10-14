<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
* @subpackage visionary
 */

get_header(); ?>

<div class="c960">
    <div id="content">

	<?php if (have_posts()) : ?>
<div class="nopost" style="margin-top:0;"><h1 class="pagetitle"><?php _e('Search Results','visionary' ); ?></h1></div>
<?php while (have_posts()) : the_post(); ?>
<div class="postwrap" style="margin-bottom: 30px;">
        <div class="posttop"></div>
        <div class="postmeta"><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		<div class="postmetadata"><?php $get_year = get_the_time('Y'); $get_month = get_the_time('m'); ?>
		<span><?php _e('Posted by:','visionary' ); ?></span> <?php the_author_posts_link(); ?>   <span><?php _e('Date:','visionary' ); ?></span> <a href="<?php echo get_month_link($get_year, $get_month); ?>"><?php the_time(get_option( 'date_format' )) ?></a>    <span><?php if ( count(($categories=get_the_category())) > 1 || $categories[0]->cat_ID != 1 ) : ?>:</span> <?php the_category(', ') ?> <?php endif; ?>    <span><?php _e('Comments:','visionary' ); ?></span> <?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></div>
        </div>
        <div class="post"><?php the_excerpt(); ?>
<a class="more-link" href="<?php the_permalink(); ?>"><?php _e('Continue Reading','visionary' ); ?></a>
<?php // wp_link_pages('before=<div id="page-links">Pages: &after=</div>'); ?>

       </div>

        <div class="posttags"><span><?php _e('Tags:','visionary' ); ?></span> <?php the_tags('', ', ', ''); ?></div>
        <div class="postbottom"></div>
      </div>
	  
	  <?php endwhile; ?>
	  <div class="page-link">
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php else : ?>
		<h2 class="center"><?php _e('No posts found. Try a different search?','visionary' ); ?></h2>
		<h2><?php printf( __( 'Search Results for: %s','visionary' ), '<span>' . esc_html( get_search_query() ) . '</span>'); ?></h2>
		<?php get_search_form(); ?>
	<?php endif; ?>	
	</div>

</div>
</div>

<?php get_footer(); ?>