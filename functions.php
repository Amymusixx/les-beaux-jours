<?php
// Chargement des fichiers CSS
function my_theme_enqueue_styles() {
wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );
wp_enqueue_style('my-theme-extra-style', get_theme_file_uri('style.css') );
wp_enqueue_style('single-projet-style', get_theme_file_uri('/assets/css/single-projet.css') );
wp_enqueue_style('header-style', get_theme_file_uri('/assets/css/header.css') );
wp_enqueue_style('burger-menu-style', get_theme_file_uri('/assets/css/elements/burger-menu.css') );
wp_enqueue_style('footer-style', get_theme_file_uri('/assets/css/footer.css') );
wp_enqueue_style('archives-style', get_theme_file_uri('/assets/css/archives.css') );
wp_enqueue_style('projet-template-style', get_theme_file_uri('/assets/css/elements/projet-template.css') );
wp_enqueue_style('carousel-style', get_theme_file_uri('/assets/css/sliders/carousel-slider.css') );
wp_enqueue_style('home-style', get_theme_file_uri('/assets/css/home.css') );
wp_enqueue_style('contact-style', get_theme_file_uri('/assets/css/elements/contact-form.css') );
wp_enqueue_style('filtres-style', get_theme_file_uri('/assets/css/elements/filtres.css') );
wp_enqueue_style('methodologies-style', get_theme_file_uri('/assets/css/methodologies.css') );
wp_enqueue_style('agence-style', get_theme_file_uri('/assets/css/agence.css') );
wp_enqueue_style('modale-style', get_theme_file_uri('/assets/css/elements/modale.css') );
wp_enqueue_style('equipe-style', get_theme_file_uri('/assets/css/elements/equipe.css') );
wp_enqueue_style('posts-style', get_theme_file_uri('/assets/css/sliders/posts-slider.css') );

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


// Chargement des fichiers JS
function add_scripts() {
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), 1.1, true );
  wp_enqueue_script( 'menu', get_stylesheet_directory_uri() . '/assets/js/menu.js', array(), 1.1, true );
  wp_enqueue_script( 'carousel', get_stylesheet_directory_uri() . '/assets/js/sliders/carousel-slider.js', array(), 1.1, true );
  wp_enqueue_script( 'temoignage', get_stylesheet_directory_uri() . '/assets/js/sliders/temoignage-slider.js', array(), 1.1, true );
  wp_enqueue_script( 'filtres', get_stylesheet_directory_uri() . '/assets/js/filtres.js', array(), 1.1, true );
  wp_enqueue_script( 'modale', get_stylesheet_directory_uri() . '/assets/js/modale.js', array(), 1.1, true );
  wp_enqueue_script( 'posts-slider', get_stylesheet_directory_uri() . '/assets/js/sliders/posts-slider.js', array(), 1.1, true );
  wp_enqueue_script( 'single-projet-slider', get_stylesheet_directory_uri() . '/assets/js/sliders/single-projet-slider.js', array(), 1.1, true );
}
add_action( 'wp_enqueue_scripts', 'add_scripts' );

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'amyxdesign' ) );
}
 
require get_template_directory() . '/formation-query.php';
