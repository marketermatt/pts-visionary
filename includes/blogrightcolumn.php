<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU* @subpackage visionary
 */
 
 // Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");
?>

<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Right Column')) : ?><?php endif; ?>