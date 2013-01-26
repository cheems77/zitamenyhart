<?php
/*
Template Name: Objects
*/
?>
<?php get_header(); ?>
<br clear="all" />
<div class="sidebar">
      <?php wp_nav_menu( array( 'theme_location' => 'home-navigation') ); ?>
</div>         
<div id="page-content" class="page-element-content">			
    <h1>Error 404 - Page Not Found</h1>
    	<p>Sorry, but this page doesn't exist on <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> at this time. If it once existed here then it may have been moved, renamed or deleted.</p>
        

        <h2>Possible Causes?</h2>
        
        <p><strong>If you typed the address (URL), be sure to check your spelling!</strong></p>
        <p>Please visit the <a href="<?php bloginfo('url'); ?>/">home page</a> and use the navigation links to find what you are looking for.</p>
        </div>
<?php get_footer(); ?>