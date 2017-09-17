<?php
	if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Accueil',
	'before_widget' => '<div class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));
	register_sidebar(array(
        'name' => 'Calendrier_spectacles',
	'before_widget' => '<div class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));
	register_sidebar(array(
        'name' => 'Calendrier_cours',
	'before_widget' => '<div class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));
	register_nav_menus( array(
        'gauche' => 'Spectacles',
        'droite' => 'Pédagogie',
        'compagnie' => 'Menu Cie',
        'footer' => 'Footer',
    ) );
	add_theme_support( 'custom-header' );
	add_theme_support( 'post-thumbnails' );
	/*add_action('after_theme_setup','gkp_add_post_thumbnail');
    function gkp_add_post_thumbnail() {
    add_theme_support( 'post-thumbnails', array( 'post', 'page', 'portfolio' ) );
    }*/
    
    add_shortcode('lang_en', 'votre_fonction');
function votre_fonction($param) {
  extract(
    shortcode_atts(
      array(
        'title' => '<img class="alignnone size-full wp-image-381 lang" src="http://www.ticoet.fr/drmgalerie/wp-content/themes/drmgalerie/images/lang_en.png" width="18" height="18" />'
      ),
      $param
    )
   );
   return $title;
 };
    
    
    add_action('init', 'mylink_button');
function mylink_button() {
 
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
     return;
   }
 
   if ( get_user_option('rich_editing') == 'true' ) {
     add_filter( 'mce_external_plugins', 'add_plugin' );
     add_filter( 'mce_buttons', 'register_button' );
   }
 
}
function register_button( $buttons ) {
 array_push( $buttons, "|", "englishversion" );
 return $buttons;
}
function add_plugin( $plugin_array ) {
   $plugin_array['englishversion'] = get_bloginfo( 'template_url' ) . '/js/mybuttons.js';
   return $plugin_array;
}
    
  function my_theme_add_editor_styles() {
    add_editor_style( get_bloginfo( 'template_url' ).'/custom-editor-style.css' );
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );  
    
add_image_size('vignette',237,237,array( 'center', 'center' ));
?>