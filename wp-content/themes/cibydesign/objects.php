<?php
/**
 * Template Name: Product Objects
 * The template for displaying product categories.
 *
 *
 * @package CIBD
 * @subpackage CIBD-ZM
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<!-- css -->
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.7.2/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.7.2/build/cssfonts/cssfonts-min.css">
<style type="text/css">
@font-face {
 font-family: "Agency FB";
 src: url("/fonts/AGENCYB.eot") /* EOT file for IE */
}
@font-face {
 font-family: "Agency FB";
 src: url("/fonts/AGENCYB.TTF") /* TTF file for CSS3 browsers */
}

@font-face {
    font-family: 'agencyfbregular';
    src: url('/fonts/afb-reg-webfont.eot');
    src: url('/fonts/afb-reg-webfont.eot?#iefix') format('embedded-opentype'),
         url('/fonts/afb-reg-webfont.woff') format('woff'),
         url('/fonts/afb-reg-webfont.ttf') format('truetype'),
         url('/fonts/afb-reg-webfont.svg#agencyfbregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
</style>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	wp_head();
?>
</head>

<body>

<!-- begin container to center layout in middle of page -->
<div id="container">

<!-- begin header which contains our heading and navigation -->
<div id="header">

<h1><a title="<?php bloginfo( 'name' ); ?>" href="//zitamenyhart.com"><?php bloginfo( 'name' ); ?></a></h1>

</div><!-- end header -->
			
<!-- begin content which houses our two columns and footer -->
<div id="content" class="clearfix">

<!-- begin side column -->
<div id="side-products"><div id="side-inner">	
<!-- begin navigation -->
<div id="nav">
	<?php wp_nav_menu( array( 'theme_location' => 'products') ); ?>	
</div><!-- end navigation -->		
	
</div></div><!-- end side column -->
<!-- begin main column -->
<div id="main-products">

<div id="main-inner">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'gallery' ); ?>
	<?php endwhile; // end of the loop. ?>
</div>
</div><!-- end side column -->
<?php get_footer(); ?>
