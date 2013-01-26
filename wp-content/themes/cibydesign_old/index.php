<?php get_header(); ?>
<br clear="all" />
	<?php get_sidebar(); ?>
<div id="content">
	<?php if (have_posts()) : $counter = 0; ?>
    
    <?php while (have_posts()) : the_post(); $counter++; ?>
    
    <div id="post-<?php the_ID(); ?>">
        
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                
        <div class="entry">
			<?php the_post_thumbnail(); ?>
			<?php the_content('Read the rest of this entry &raquo;'); ?>
        </div>
    </div>
    
    <?php endwhile; ?>    
    <?php else : ?>
    
    <h1>Not Found</h1>
    
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>
    
    <?php endif; ?>

</div>

<?php get_footer(); ?>
