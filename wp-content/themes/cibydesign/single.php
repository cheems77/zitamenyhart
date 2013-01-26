<?php
/**
 * The template for displaying all single posts.
 *
 *
 * @package CIBD
 * @subpackage CIBD-ZM
 */

get_header(); ?>

<div id="main-inner">

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'single' ); ?>

<?php endwhile; // end of the loop. ?>

</div></div><!-- end side column -->
<?php get_footer(); ?>