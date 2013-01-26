<?php get_header(); ?>
<br clear="all" />
<div class="sidebar">
      <?php wp_nav_menu( array( 'theme_location' => 'home-navigation') ); ?>
</div>
	<?php query_posts($query_string . '&cat=8'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
      
        <div class="entry">
<div id="page-content" style="display: block;">
<?php the_title('<h1>','</h1>'); ?>
	<?php the_post_thumbnail('single-post-thumbnail');?>
		<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>            
<div class="navigation">
<div class="alignright">Next: &nbsp;<?php previous_post_link('%link', '%title', TRUE, '13'); ?> </div>
</div>
	</div>
    </div>
    
    <?php endwhile; else: ?>
    
    <p>Sorry, no articles matched your criteria.</p>
    
    <?php endif; ?>
    
</div>

<?php get_footer(); ?>
