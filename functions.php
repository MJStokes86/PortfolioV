<?php 

function bkny_theme_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/mysiteIII_theme.css', array(), '4.5.3', 'all');

	// wp_enqueue_style('customstyle-2', get_template_directory_uri() . '/css/bkny_theme.css', array(), '4.5.3', 'all');

	wp_enqueue_style('responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), '4.5.3', 'all');

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');

	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.7', 'all');

	wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css', array(), '3.3.7', 'all');

	// wp_enqueue_style('et-line-icons-css', get_template_directory_uri() . '/css/et-line-icons.css', array(), '3.3.7', 'all');

	// wp_enqueue_style('extralayers-css', get_template_directory_uri() . '/css/extralayers.css', array(), '3.3.7', 'all');

	wp_enqueue_style('effects-css', get_template_directory_uri() . '/css/effects.css', array(), '', 'all');


	wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/css/magnific-popup.css', array(), '3.3.7', 'all');

	// wp_enqueue_style('text-effect-css', get_template_directory_uri() . '/css/text-effect.css', array(), '3.3.7', 'all');

	// wp_enqueue_style('settings-css', get_template_directory_uri() . '/css/settings.css', array(), '3.3.7', 'all');

	wp_enqueue_style('owl-css', '//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css');

	wp_enqueue_style('owl-theme-css', '//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css');	

	wp_enqueue_style('devicons', '//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css');

	wp_enqueue_style('glyphicons', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css');

	wp_enqueue_style('fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
	
	wp_enqueue_script('jquery', get_template_directory_uri() .'/js/jquery.min.js', array(), '2.2.4', true);

	wp_enqueue_script('jquery-tools', get_template_directory_uri() .'/js/jquery.tools.min.js', array('jquery'), '', true);


	wp_enqueue_script('jquery-mixitup', get_template_directory_uri() .'/js/jquery.mixitup.js', array('jquery'), '', true);

	wp_enqueue_script('jquery-stellar', get_template_directory_uri() .'/js/jquery.stellar.min.js', array(), '0.6.2', true);

	wp_enqueue_script('jquery-waypoints', get_template_directory_uri() .'/js/jquery.waypoints.min.js', array('jquery'), '', true);

	wp_enqueue_script('jquery-counterup', get_template_directory_uri() .'/js/jquery.counterup.min.js', array('jquery'), '', true);

	wp_enqueue_script('jquery-revolution', get_template_directory_uri() .'/js/jquery.revolution.js', array('jquery'), '', true);

	wp_enqueue_script('jquery-viewport', get_template_directory_uri() .'/js/jquery.viewport.mini.js', array('jquery'), '', true);

	wp_enqueue_script('jquery-isotope', get_template_directory_uri() .'/js/jquery.isotope.min.js', array('jquery'), '', true);

	wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri() .'/js/jquery.magnific-popup.min.js', array('jquery'), '', true);

	wp_enqueue_script('jquery-appear', get_template_directory_uri() .'/js/jquery.appear.js', array('jquery'), '', true);

	wp_enqueue_script('jquery-countTo', get_template_directory_uri() .'/js/jquery.countTo.js', array('jquery'), '', true);

	wp_enqueue_script('jquery-easing', get_template_directory_uri() .'/js/jquery.easing.1.3.js', array('jquery'), '', true);

	wp_enqueue_script('jquery-easypiechart', get_template_directory_uri() .'/js/jquery.easypiechart.js', array('jquery'), '', true);

	wp_enqueue_script('jquery-color', get_template_directory_uri() .'/js/jquery.color.min.js', array('jquery'), '', true);

	// wp_enqueue_script('jquery-fitvids', get_template_directory_uri() .'/js/jquery.fitvids.js', array('jquery'), '', true);

	wp_enqueue_script('ajax-popup-slider-js', get_template_directory_uri() .'/js/ajax-popup-slider.js', array(), '', true);

	wp_enqueue_script('classie-js', get_template_directory_uri() .'/js/classie.js', array(), '', true);

	wp_enqueue_script('imagesloaded-js', get_template_directory_uri() .'/js/imagesloaded.pkgd.min.js', array(), '', true);

	wp_enqueue_script('modernizr-js', get_template_directory_uri() .'/js/modernizr.js', array(), '', true);

	// wp_enqueue_script('one-page-main', get_template_directory_uri() .'/js/one-page-main.js', array(), '', true);

	// wp_enqueue_script('page-scroll', get_template_directory_uri() .'/js/page-scroll.js', array(), '', true);

	// wp_enqueue_script('skrollr', get_template_directory_uri() .'/js/skrollr.min.js', array(), '', true);

	// wp_enqueue_script('smooth-scroll', get_template_directory_uri() .'/js/smooth-scroll.js', array(), '', true);

	wp_enqueue_script('text-effect-js', get_template_directory_uri() .'/js/text-effect.js', array(), '', true);

	wp_enqueue_script('velocity-animation-js', get_template_directory_uri() .'/js/velocity-animation.js', array(), '', true);

	wp_enqueue_script('velocity-js', get_template_directory_uri() .'/js/velocity.min.js', array(), '', true);

	wp_enqueue_script('parallax','//cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js');
	
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bkny_theme.js', array(), '4.5.3', true);

	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);

	wp_enqueue_script('typedjs', get_template_directory_uri() . '/js/typed.js', array(), '', true);

	wp_enqueue_script('owljs', '//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js');

	wp_enqueue_script('wowjs', get_template_directory_uri() . '/js/wow.min.js', array(), '', true);

	wp_enqueue_script('font-awesomejs', "https://use.fontawesome.com/a46e157fb6.js");

	

}

add_action(wp_enqueue_scripts, 'bkny_theme_script_enqueue');




function bkny_theme_setup() {
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'bkny_theme_setup'); 

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video' ));
add_theme_support('html5', array('search-form'));


function bkny_widget_setup() {

	register_sidebar(
		array(
			'name' 	=> 'Sidebar',
			'id' 	=> 'sidebar-1', 
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title'	=> '</h1>',
			 )

		);
}
add_action('widgets_init','bkny_widget_setup');

function add_taxonomies_to_pages() {
	register_taxonomy_for_object_type('post_tag', 'page');
	register_taxonomy_for_object_type('category', 'page');
}

add_action('init', 'add_taxonomies_to_pages');





function custom_excerpt_length() {
	return 55;
}

add_filter('excerpt_length', 'custom_excerpt_length');


function awesome_remove_version() {
	return '';


}

add_filter('the_generator', 'awesome_remove_version');


add_filter('wp_mail_content_type', 'set_content_type');


function set_content_type($content_type) {
	return 'text/html';

}

if (get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
}

function mytheme_comment($comment, $args, $depth) {
   ?>

   <?php comment_text(); ?>
    
        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ,$comment->comment_ID, $comment->comment_post_ID); ?>
  
    <?php
    }

    @ini_set( 'upload_max_size' , '64M' );

	@ini_set( 'post_max_size', '64M');

	@ini_set( 'max_execution_time', '300' );




// function preprocess_new_comment($commentdata) {
// 	if(!isset($_POST['is_legit'])) {
// 		die('Not interested!');
// 	}

// 	return $commentdata;

// }

// if(function_exists('add_action')) {
// 	add_action('preprocess_comment', 'preprocess_new_comment');
// }


  
   



 ?>
