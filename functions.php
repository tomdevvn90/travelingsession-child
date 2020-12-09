<?php 
/**
 * Traveling Session Child - Functions 
 * 
 */

{
  /**
   * Define
   */
  define( 'TSC_VER', wp_get_theme()->get('Version') );
  define( 'TSC_DIR', get_stylesheet_directory() );
  define( 'TSC_URI', get_stylesheet_directory_uri() );
}

{
  /**
   * Include 
   */
  require( TSC_DIR . '/inc/static.php' );
  require( TSC_DIR . '/inc/helpers.php' );
  require( TSC_DIR . '/inc/ajax.php' );
}