<?php 
/**
 * Static
 */

/**
 * Enqueue scripts
 */
function tsc_enqueue_styles() {
  /**
   * Load parent theme style
   */
  $theme = wp_get_theme();
  wp_enqueue_style( 'newspaper-parent-style', get_template_directory_uri() . '/style.css', [], $theme->parent()->get('Version') );

  /**
   * Load child script
   */
  wp_enqueue_style( 'traveling-session-child-style', get_stylesheet_uri(), [], TSC_VER );
  wp_enqueue_script( 'traveling-session-child-script', TSC_URI . '/dist/traveling-session.frontend.bundle.js', [ 'jquery' ], true );
  
  wp_localize_script( 'traveling-session-child-script', 'phpdata', [
    'ajax_url' => admin_url( 'admin-ajax.php' ),
    'lang' => []
  ] );
}

add_action( 'wp_enqueue_scripts', 'tsc_enqueue_styles' );