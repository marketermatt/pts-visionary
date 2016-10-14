<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php wp_title('|',true,'right');?></title>
<style type="text/css">
<!--
/* System styles 404 */
body, html {margin:0; padding:0;}
#error .row1 {background:#000; height:100px;}
#error .row2 {background:#3b2a2a; height:20px;}
#error .row3 {background:#f2f2f2;}
#error .row4 {background:#000; height:27px; text-align:center; color:#fff; font-size:1em; padding-top:3px;}
body#error {background:#291e1e;}
#error .box {width:600px; margin:0 auto;color:#555;}
#error h1, #error h2 {line-height:120px; font-size:120px; color:#88676D; margin: 10px auto; text-align: center;}
#error h2 {font-size: 40px; margin: 0 0 20px; line-height: 40px; color:#555;}
#error p {border-bottom: 1px solid #555; padding-bottom: 6px; margin: 24px 0 12px 0;}
p.adminmessage { text-align:center; background: #918E5D; border: 1px solid #121212; padding: 6px 10px; margin:30px 0; color: #fff; }
#techinfo { padding:5px; }
#techinfo p {  margin:0; padding:4px 0; font-weight:bold; font-size: 10px; text-transform: uppercase; border-top: 1px solid #f3f3f3; border-bottom: 1px solid #f3f3f3; text-align: center; }
a, a:visited, a:focus {text-decoration:none; color:#704537; outline:none;}
a:hover {color:#333;}
-->
</style>
</head>

<body id="error">
<div class="row1"></div>
<div class="row2"></div>
<div class="row3">
  <div class="box">
  <h1>404</h1>
	<h2><?php _e( 'Not Found', 'visionary' ); ?></h2>	
		 <p><strong><?php _e('You are not able to visit this page because of one or more of the following:','visionary' ); ?></strong></p>
		 <ol>
			  <li><?php _e('you have an  <strong>out-of-date bookmark </strong>for this page;','visionary' ); ?></li>
			  <li><?php _e('a search engine has an <strong>out-of-date listing</strong> for this site;','visionary' ); ?></li>
			  <li><?php _e('a <strong>mistyped or misspelled address</strong>;','visionary' ); ?></li>
			  <li><?php _e('a website owner missed something;','visionary' ); ?></li>
			  <li><?php _e('this page was renamed but not redirected to the new one;','visionary' ); ?></li>
			  <li><?php _e('this page was moved to another location or simply removed;','visionary' ); ?> </li>
			  <li><?php _e('An error has occurred while processing your request.','visionary' ); ?></li>
		 </ol>
		 <p><strong><?php _e('Please try one of the following pages:','visionary' ); ?></strong></p>
		 <ol>
			  <li>
				   <a href="<?php bloginfo('siteurl'); ?>" title="<?php _e('Go to the Home Page','visionary' ); ?>"><?php _e('HOME PAGE','visionary' ); ?></a>
			  </li>
		 </ol>
		 <p class="adminmessage"><?php _e('If difficulties persist, please contact the System Administrator of this site.','visionary' ); ?></p>
		 <div id="techinfo">
			  <p></p>											 
		 </div>
	</div>
</div>

<div class="row4"><?php _e('Content not found','visionary' ); ?></div>
</body>
</html>