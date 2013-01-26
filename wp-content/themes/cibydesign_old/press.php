<?php
/*
Template Name: Press Release
*/
?>
<?php get_header(); ?>
<br clear="all" />
<div class="sidebar">
      <?php wp_nav_menu( array( 'theme_location' => 'home-navigation') ); ?>
</div>   
<div id="page-press-content">			
<?php wp_carousel(1);?>    
</div>



<?php get_footer(); ?>

