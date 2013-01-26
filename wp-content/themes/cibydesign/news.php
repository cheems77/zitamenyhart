<?php /**
 * Template Name: News Template
 *
 * This is the template that displays all news related posts.
 *
 * @package CIBD
 * @subpackage CIBD-ZM
 */

get_header();
 ?>

<div id="main-inner">
	<?php query_posts( array ( 'category_name' => 'news-section', 'posts_per_page' => -1 ) ); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
<span class="thumbnail-container">
<?php the_post_thumbnail('news-thumbnail'); ?>
</span>
<table class="news-item clearfix">
	<tr>
		<td><h2><?php the_title(); ?></h2></td>
	</tr>
	<tr>
		<td>
<span class="single-post-content">
<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
</span>
		</td>
	</tr>
</table>
    <?php endwhile; endif; ?>
</div>

</div><!-- end side column -->
<?php get_footer(); ?>
