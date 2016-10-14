<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
* @subpackage visionary
 */

// Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");

get_header(); 

?>

    <div id="content">
		<?php get_template_part( 'page-content' ); ?>
	</div>

<?php get_footer(); ?>