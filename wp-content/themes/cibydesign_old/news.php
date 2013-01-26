<?php
/*
Template Name: News
 */
get_header(); ?>
<br clear="all" />
<div class="sidebar">
      <?php wp_nav_menu( array( 'theme_location' => 'home-navigation') ); ?>
</div>
<div id="page-content">
	<?php query_posts('cat=7');?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
<div class="page-standard-content">
<?php the_post_thumbnail('news-thumbnail'); ?>     
<table>
	<tr>
		<td align="left"></td><td align="left" width="100%"><strong><?php the_title(); ?></strong></td>
	</tr>
	<tr>
		<td colspan="2">
<span class="single-post-content">
<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
</span>
		</td>
	</tr>
</table>
</div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
