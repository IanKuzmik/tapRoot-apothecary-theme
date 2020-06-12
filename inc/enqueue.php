<?php
/*
  @package tapRoot_apothecary
  =========================
    ENQUEUE SCRIPTS/STYLES
  =========================
*/
function tr_apoth_load_admin_scripts() {
  // media uploader
  wp_enqueue_media();

  // bootstrap
  wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '4.4.1', 'true' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.4.1', 'all' );

  // icons
  wp_enqueue_style( 'tap-root-icon', get_template_directory_uri().'/css/tap-root-font-icon.css' );

  // custom
  wp_enqueue_style( 'tapRoot-apothecary-mystyle', get_template_directory_uri().'/css/admin/tr-apoth.admin.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'tapRoot-apothecary-myscript', get_template_directory_uri().'/js/tr-apoth.admin.js', array('jquery'), '1.0.0', 'true' );
}
add_action('admin_enqueue_scripts','tr_apoth_load_admin_scripts');

function tr_apoth_load_scripts() {
  // jquery
  wp_deregister_script( 'jquery' );
  wp_register_script('jquery',get_template_directory_uri().'/js/jquery-3.5.1.min.js', false, '3.5.1', true);
  wp_enqueue_script('jquery');

  // bootstrap
  wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '4.4.1', 'true' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.4.1', 'all' );

  // fonts
  wp_enqueue_style( 'Alegreya Sans', 'https://fonts.googleapis.com/css?family=Alegreya+Sans:100,400,800&display=swap' );
  wp_enqueue_style( 'Henny Penny', 'https://fonts.googleapis.com/css?family=Henny+Penny&display=swap' );

  // icons
  wp_enqueue_style( 'tap-root-icon', get_template_directory_uri().'/css/tap-root-font-icon.css' );

  // custom
  wp_enqueue_script( 'tr-apoth-myscript', get_template_directory_uri().'/js/tr-apoth.js', array('jquery'), '1.0.0', 'true' );
  wp_enqueue_style( 'tr-apoth-mystyle', get_template_directory_uri().'/css/tr-apoth.css', array(), '1.0.0', 'all' );

  // google maps
  if ( is_page('home') ) {
    $js_fucntion = 'xochisGoogleMapInitHome';
    $api_key = esc_attr( get_option('tr-apoth-google-maps-key-setting') );
    wp_enqueue_script( 'tr-apoth-google-maps', get_template_directory_uri().'/js/inc/tr-apoth-google-maps.js', array(), false, true );
    wp_enqueue_script( 'tr-apoth-google-maps-api', 'https://maps.googleapis.com/maps/api/js?key='.$api_key.'&callback='.$js_fucntion.'#tr-async-defer', array('tr-apoth-google-maps'), false, true);
  }
  if ( is_page('about-us') ) {
    $js_fucntion = 'xochisGoogleMapInitAbout';
    $api_key = esc_attr( get_option('tr-apoth-google-maps-key-setting') );
    wp_enqueue_script( 'tr-apoth-google-maps', get_template_directory_uri().'/js/inc/tr-apoth-google-maps.js', array(), false, true );
    wp_enqueue_script( 'tr-apoth-google-maps-api', 'https://maps.googleapis.com/maps/api/js?key='.$api_key.'&callback='.$js_fucntion.'#tr-async-defer', array('tr-apoth-google-maps'), false, true);
  }
}
add_action('wp_enqueue_scripts','tr_apoth_load_scripts');
