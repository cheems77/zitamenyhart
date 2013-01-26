<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<br clear="all" />
<div class="sidebar" id="sidebar-home">
      <?php wp_nav_menu( array( 'theme_location' => 'home-navigation') ); ?>
</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">        
        <div class="entry">
<div id="home-page-content">
		<?php the_content(''); ?>
        </div>
    </div>
    
    <?php endwhile; endif; ?>
    
</div>



<?php get_footer(); ?>
