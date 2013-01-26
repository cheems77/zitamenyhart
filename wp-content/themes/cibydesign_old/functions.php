<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 275, 375, true ); // Normal post thumbnails
add_image_size('index-thumbnail', 120, 75,true); // for front page thumbnails
add_image_size('news-thumbnail', auto, 120, true); // for news page thumbnails
add_image_size('single-post-thumbnail', 275, 375); // a different thumbnail size on single post pages
automatic_feed_links();

add_action( 'init', 'register_my_menus' );
function register_my_menus() {
register_nav_menus(
array(
'home-navigation' => __( 'Home Page Navigation' ),
'primary-navigation' => __( 'Primary Navigation' ),
'products-navigation' => __( 'Products Navigation' ),
'footer-navigation' => __( 'Footer Navigation' )
)
);
}

register_sidebar(array('name' => 'Header_Window',		
		'before_widget' => '',		
		'after_widget' => '',
		'before_title' => '<h4">',
		'after_title' => '</h4>',		
		));

$content_width = 560;
$GLOBALS['content_width'] = 770;

?>
