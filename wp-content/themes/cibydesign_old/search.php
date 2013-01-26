<?php get_header(); ?>
<br clear="all" />
	<?php get_sidebar(); ?>

	<?php if (have_posts()) : ?>
<div id="page-content">
    <?php while (have_posts()) : the_post(); ?>

    <div class="e">        
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<p>			
<?php the_excerpt() ?>
        </p>
    </div>
    
    <?php endwhile; ?>

    <?php else : ?>
    
    <h1>No matching results found.</h1>
    
    <p>Try a different search?</p>
    <?php get_search_form(); ?>
    
    <?php endif; ?>
    
	</div>
</div>
<?php get_footer(); ?>