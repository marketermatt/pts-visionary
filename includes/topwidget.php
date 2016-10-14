<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU* @subpackage visionary
 */
?>
<div id="topwidgetwrapper">
<div id="topwidget" class="clearfix">
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Top Widget')) : ?><?php endif; ?>
</div>
</div>