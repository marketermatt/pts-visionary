<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU* @subpackage visionary
 */
 
// Get theme settings
include (TEMPLATEPATH . "/includes/settings.php"); ?>

<table id="showcasewrapper" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="showcaseleft" style="background:#<?php echo $pts_scleftbg; ?><?php if ($pts_sclines<>"Disable") { ?> url('<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/showcase-pattern.png') repeat<?php } ?>;">&nbsp;</td>
    <td id="showcase" style="background:#<?php echo $pts_scbg; ?>">	
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/js/jquery.innerfade.js"></script>
		<script type="text/javascript">
	   $(document).ready(
				function(){
									
					$('ul#slideshow').innerfade({
						speed: 1000,
						timeout: 5000,
						type: 'sequence',
						containerheight: ''
					});

			});
  	</script>
<!-- Content slideshow -->
<div id="slideshow-wrapper" style="height:<?php echo $pts_imgheight; ?>px;">
	<ul id="slideshow">
	<!-- slide 1 -->

	<?php if ($pts_slide1<>"Disable") { ?>
		<li class="active">
			<a href="#"><img src="<?php echo $pts_slide1img; ?>" width="<?php echo $pts_imgwidth; ?>" height="<?php echo $pts_imgheight; ?>" alt="<?php echo $pts_slide1alt; ?>" class="slide-image" /></a>
			<?php if ($pts_slideintro<>"Disable") { ?>
			<div class="slide-intro">
				<h1 style="color:#<?php echo $pts_introtitle; ?>"><?php echo $pts_slide1title; ?></h1>
				
				<p style="color:#<?php echo $pts_introtext; ?>"><?php echo $pts_slide1text; ?></p>
				<?php if ($pts_button<>"Disable") { ?>
				<a href="<?php echo $pts_slide1link; ?>" class="readmore-<?php echo $pts_buttonstyle; ?>"><?php echo $pts_slide1btext; ?></a>
				<?php } ?>
			</div>
			<?php } ?>
		</li>
	<?php } ?>
	 <!-- slide 2 -->
	 <?php if ($pts_slide2<>"Disable") { ?>
		<li class="active">
			<a href="#"><img src="<?php echo $pts_slide2img; ?>" width="<?php echo $pts_imgwidth; ?>" height="<?php echo $pts_imgheight; ?>" alt="<?php echo $pts_slide2alt; ?>" class="slide-image" /></a>
			<?php if ($pts_slideintro<>"Disable") { ?>
			<div class="slide-intro">
				<h1 style="color:#<?php echo $pts_introtitle; ?>"><?php echo $pts_slide2title; ?></h1>
				
				<p style="color:#<?php echo $pts_introtext; ?>"><?php echo $pts_slide2text; ?></p>
				<?php if ($pts_button<>"Disable") { ?>
				<a href="<?php echo $pts_slide2link; ?>" class="readmore-<?php echo $pts_buttonstyle; ?>"><?php echo $pts_slide2btext; ?></a>
				<?php } ?>
			</div>
			<?php } ?>
		</li>
	<?php } ?>
		
	  <!-- slide 3 -->
   	<?php if ($pts_slide3<>"Disable") { ?>
		<li class="active">
			<a href="#"><img src="<?php echo $pts_slide3img; ?>" width="<?php echo $pts_imgwidth; ?>" height="<?php echo $pts_imgheight; ?>" alt="<?php echo $pts_slide3alt; ?>" class="slide-image" /></a>
			<?php if ($pts_slideintro<>"Disable") { ?>
			<div class="slide-intro">
				<h1 style="color:#<?php echo $pts_introtitle; ?>"><?php echo $pts_slide3title; ?></h1>
				
				<p style="color:#<?php echo $pts_introtext; ?>"><?php echo $pts_slide3text; ?></p>
				<?php if ($pts_button<>"Disable") { ?>
				<a href="<?php echo $pts_slide3link; ?>" class="readmore-<?php echo $pts_buttonstyle; ?>"><?php echo $pts_slide3btext; ?></a>
				<?php } ?>
			</div>
			<?php } ?>
		</li>
	<?php } ?>
	<!-- slide 4 -->
	<?php if ($pts_slide4<>"Disable") { ?>
		<li class="active">
			<a href="#"><img src="<?php echo $pts_slide4img; ?>" width="<?php echo $pts_imgwidth; ?>" height="<?php echo $pts_imgheight; ?>" alt="<?php echo $pts_slide4alt; ?>" class="slide-image" /></a>
			<?php if ($pts_slideintro<>"Disable") { ?>
			<div class="slide-intro">
				<h1 style="color:#<?php echo $pts_introtitle; ?>"><?php echo $pts_slide4title; ?></h1>
				
				<p style="color:#<?php echo $pts_introtext; ?>"><?php echo $pts_slide4text; ?></p>
				<?php if ($pts_button<>"Disable") { ?>
				<a href="<?php echo $pts_slide4link; ?>" class="readmore-<?php echo $pts_buttonstyle; ?>"><?php echo $pts_slide4btext; ?></a>
				<?php } ?>
			</div>
			<?php } ?>
		</li>
	<?php } ?>
	<!-- slide 5 -->
	<?php if ($pts_slide5<>"Disable") { ?>
		<li class="active">
			<a href="#"><img src="<?php echo $pts_slide5img; ?>" width="<?php echo $pts_imgwidth; ?>" height="<?php echo $pts_imgheight; ?>" alt="<?php echo $pts_slide5alt; ?>" class="slide-image" /></a>
			<?php if ($pts_slideintro<>"Disable") { ?>
			<div class="slide-intro">
				<h1 style="color:#<?php echo $pts_introtitle; ?>"><?php echo $pts_slide5title; ?></h1>
				
				<p style="color:#<?php echo $pts_introtext; ?>"><?php echo $pts_slide5text; ?></p>
				<?php if ($pts_button<>"Disable") { ?>
				<a href="<?php echo $pts_slide5link; ?>" class="readmore-<?php echo $pts_buttonstyle; ?>"><?php echo $pts_slide5btext; ?></a>
				<?php } ?>
			</div>
			<?php } ?>
		</li>
	<?php } ?>
	</ul>
	
</div>
<!-- end slideshow -->
	</td>
    <td id="showcaseright" style="background:#<?php echo $pts_scrightbg; ?><?php if ($pts_sclines<>"Disable") { ?> url('<?php echo esc_url( get_template_directory_uri()); ?>/images/showcase-pattern.png') repeat<?php } ?>;">&nbsp;</td>
  </tr>
</table>