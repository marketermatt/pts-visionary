<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU* @subpackage visionary
 */
 
// Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");
?>
<table id="showcasewrapper" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="showcaseleft" style="background:#<?php echo $pts_scleftbg; ?><?php if ($pts_sclines<>"Disable") { ?> url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/showcase-pattern.png') repeat<?php } ?>;">&nbsp;</td>
    <td id="showcase" style="background:#<?php echo $pts_scbg; ?>"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Showcase Widget')) : ?><?php endif; ?></td>
    <td id="showcaseright" style="background:#<?php echo $pts_scrightbg; ?><?php if ($pts_sclines<>"Disable") { ?> url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/showcase-pattern.png') repeat<?php } ?>;">&nbsp;</td>
  </tr>
</table>
