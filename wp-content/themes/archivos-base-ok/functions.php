<?php

function apk_load_slyles(){
	wp_register_style('theme_style', get_stylesheet_uri(),'', '1.0', 'all');
	wp_enqueue_style('theme_style');
}
add_action('wp_enqueue_scripts', 'apk_load_slyles');


function apk_register_sidebar(){
	register_sidebar( array(
		'name'             => __('Sidebar principal','apk'),
		'id'               => 'main_sidebar',
		'description'      => __(' Este es el Sidebar principal','apk'),
		'before_widget'    => '<div id="%1$s" class="widget %2$s">',
		'after_widget'     => '</div>',
		'before_title'     => '	<h3 class="widget-title">',
		'after_title'      => '</h3>',
	));

}
add_action('widgets_init', 'apk_register_sidebar');

function my_custom_login()
{
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-style.css" />';
}
add_action('login_head', 'my_custom_login');

function custom_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );

function custom_login_logo_url_title() {
	return 'Default Site Title';
}
add_filter( 'login_headertitle', 'custom_login_logo_url_title' );

function custom_login_error_message()
{
	return 'Please enter valid login credentials.';
}
add_filter('login_errors', 'custom_login_error_message');

function custom_login_head() {
	remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'custom_login_head');



?>