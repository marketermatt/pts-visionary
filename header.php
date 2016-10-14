<?php
/**
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('|',true,'right');?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
<?php // Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");
?>
<!--[if IE 7]>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<style type="text/css">
<!--
a, a:visited, a:focus, .wp-pagenavi span.current {color:#<?php echo $pts_linkcolour ?>;}
a:hover, .wp-pagenavi a:hover {color:#<?php echo $pts_linkhcolour ?>;}
#menuwrapper a, #menuwrapper ul li.current-menu-item:first-child > a {color:#<?php echo $pts_menucolour ?>;}
#menuwrapper li:hover > a {color:#<?php echo $pts_menuhcolour ?>;}
#breadcrumbwrapper {background:#<?php echo $pts_breadcbg; ?>;}
#contentwrapper, #topwidgetwrapper {background:#<?php echo $pts_contentbg; ?>;}
#group3 {background:#<?php echo $pts_group3bg; ?>;}
#footerwrapper {background:#<?php echo $pts_footerbg; ?>;}
#bottom {background:#<?php echo $pts_bottombg; ?>;}
.slide-intro {background:#<?php echo $pts_introbg; ?>; width:<?php echo $pts_introwidth; ?>px; height:<?php echo $pts_imgheight; ?>px;}
-->
</style>
</head>

<body style="background:#<?php echo $pts_pagebg; ?>;" <?php body_class(); ?>>
<?php if ($pts_width<>"Boxed") { ?>
	<div>
		<?php } else { ?>
	<div class="w1200">
<?php } ?>

<div id="topbar" style="background:#<?php echo $pts_topbg; ?>;"></div>
<div id="header" style="background:#<?php echo $pts_headerbg; ?>;">
  <div class="w960 clearfix">
	<div id="logo">
	<?php if ($pts_sitetitle=="Disable") { ?>
	<a href="<?php echo home_url(); ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="<?php echo $pts_alt; ?>" width="43" height="42" />
	<h1><?php bloginfo('name'); ?></h1><h2><?php bloginfo('description'); ?></h2></a>
	<?php } else { ?>
        <a href="<?php echo home_url(); ?>"><img src="<?php echo $pts_logo; ?>" alt="<?php echo $pts_alt; ?>" /></a>
	<?php } ?>
	</div>
	
	<div id="menuwrapper">
	<?php wp_nav_menu( array( 'theme_location' => 'Main Menu', 'sort_column' => 'menu_order' ) ); ?>
	</div>
	
  </div>
</div>

<?php if (is_front_page()) { ?>		
<?php
switch ($pts_sctype) {
	case "Widget Showcase":
        get_template_part('includes/showcase1','index');
		break;
	case "Content Slideshow":
        get_template_part('includes/showcase2','index');
		break;
}
?>
<?php } else { ?>
<?php get_template_part('includes/showcase1','index'); ?>
<?php } ?>

<div id="breadcrumbwrapper"><div class="w960"><?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb(); }else{if (function_exists('pts_breadcrumbs')) pts_breadcrumbs(); } ?></div></div>
<div id="contentwrapper">
  <div class="w960">