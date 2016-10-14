<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
 * Theme for WordPress: Visionary* @subpackage visionary
 */
  
// Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");
//get_template_part('includes/submit','index');
?>


		</div><!-- end w960-->  
	</div>
<?php get_template_part('includes/topwidget','index'); ?>
<?php get_template_part('includes/bottomwidgets','index'); ?>

<div id="footerwrapper">
  <div class="w960 clearfix">
    <?php if ($pts_footermenu<>"Disable") { ?>
		<div id="footermenu">
			<?php wp_nav_menu( array( 'theme_location' => 'Footer Menu', 'sort_column' => 'menu_order' ) ); ?> 
		</div>
	<?php } ?>
    <div id="footer"><?php echo $pts_copyright ?></div>
  </div>
</div>
<div id="bottom"></div>
</div> <!-- end 1200 or full -->
<?php echo $pts_google ?>
<?php wp_footer(); ?>

</body>
</html>
