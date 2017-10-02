<?php

/// rigester js | css in your Site bootstrap-slider.min
function rew_enqueue_scripts(){
  // wp_enqueue_style( handel 'bootstrap-css', '', false );wp_enqueue_style();
	//css

	wp_enqueue_style('botstrap-min-rew-css',get_theme_file_uri('/assets/css/bootstrap.min.css'),
		 '' );
	wp_enqueue_style('botstrap-rew-css',get_theme_file_uri('/assets/css/bootstrap.css'),
		 '' );
	wp_enqueue_style(   'isotope-rew-css',  get_theme_file_uri('/assets/css/isotope.css'),'3.3.7' );
	wp_enqueue_style('fancybox-rew-css',get_theme_file_uri('/assets/js/fancybox/jquery.fancybox.css'),'',false,'screen' );
	wp_enqueue_style('animate-rew-css', get_theme_file_uri('/assets/css/animate.css'),'',false,'screen' );
	wp_enqueue_style( 'owl-rew-css',  get_theme_file_uri('/assets/js/owl-carousel/owl.carousel.css') );
	
	wp_enqueue_style(   'font-awesome-css',  get_theme_file_uri('/assets/font/css/font-awesome.min.css'));
	//wp_enqueue_style(   'media-screen-css',  get_theme_file_uri('/assets/css/media-screen.css'),array());
	wp_enqueue_style(   'style-css',  get_theme_file_uri('/style.css') );

/// js
	//wp_enqueue_script('jquery-3.1.1-js', get_theme_file_uri('/assets/js/jquery-3.1.1.min.js'),array(),'',true);
	wp_enqueue_script('jquery-js', get_theme_file_uri('/assets/js/modernizr-latest.js'),array(),'',true);
	
	wp_enqueue_script('bootstrap-js', get_theme_file_uri('/assets/js/jquery-1.8.2.min.js'),array(),'',true);

	wp_enqueue_script('plugins-js', get_theme_file_uri('/assets/js/bootstrap.min.js'),array(),'',true);
	wp_enqueue_script('isotope-rew-js', get_theme_file_uri('/assets/js/jquery.isotope.min.js'),array(),'',true);

wp_enqueue_script('fancybox-rew-js', get_theme_file_uri('/assets/js/fancybox/jquery.fancybox.pack.js'),array(),'',true);
wp_enqueue_script('nav-rew-js', get_theme_file_uri('/assets/js/jquery.nav.js'),array(),'',true);
wp_enqueue_script('fittext-rew-js', get_theme_file_uri('/assets/js/jquery.fittext.js'),array(),'',true);
wp_enqueue_script('waypoints-rew-js', get_theme_file_uri('/assets/js/waypoints.js'),array(),'',true);
wp_enqueue_script('bootstrap-slider-rew-js', get_theme_file_uri('/assets/js/bootstrap-slider.js'),array(),'',true);
wp_enqueue_script('custom-rew-js', get_theme_file_uri('/assets/js/custom.js'),array(),'',true);
wp_enqueue_script('carousel-rew-js', get_theme_file_uri('/assets/js/owl-carousel/owl.carousel.js'),array(),'',true);



	//wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' )
}

add_action( 'wp_enqueue_scripts', 'rew_enqueue_scripts' );//( this  static 'wp_enqueue_scripts' , 'name function')







