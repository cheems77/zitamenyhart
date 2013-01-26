<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<title>
<?php 
      if ( is_front_page() || is_home() ) { 
	echo bloginfo('description');
} elseif ( is_single() || is_page() ) {
	echo wp_title('');
} elseif (is_404()) {
	echo '404 Not Found';
} elseif (is_category()) {
	echo 'Category:'; wp_title('');
} elseif (is_search()) {
	echo 'Search Results: '; the_search_query();
} elseif ( is_day() || is_month() || is_year() ) {
	echo 'Archives:'; wp_title('');
} else {
	echo wp_title(''); } ?>
     &raquo; <?php bloginfo('name'); ?>
</title>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<style type="text/css">
@font-face {
 font-family: "Agency FB";
 src: url("/fonts/AGENCYB.eot") /* EOT file for IE */
}
@font-face {
 font-family: "Agency FB";
 src: url("/fonts/AGENCYB.TTF") /* TTF file for CSS3 browsers */
}
</style>
</head>

<body <?php body_class(); ?>>
<div id="page">

    <div id="header">
	<span style="display: block; text-align: right;">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Header_Window")) : ""; 
endif; ?>		
	</span>
	<br clear="both" />
        <?php get_search_form(); ?>
	<div id="sitename">
        <?php bloginfo('name'); ?>
	<span id="divider">&nbsp;</span>
	</div>


    </div>
