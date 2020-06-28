<?php
/*
  @package tapRoot_apothecary
  =================
    THEME SUPPORT
  =================
*/

/*
  HTTP Headers
  --------------------------------
*/
function tr_apoth_add_headers() {
  $cps  = "";
  $cps .= "frame-ancestors 'self';";
  $cps .= "default-src 'self';";
  $cps .= "script-src 'self' https://maps.googleapis.com 'unsafe-inline';";
  $cps .= "style-src 'self' https://fonts.googleapis.com 'unsafe-inline';";
  $cps .= "font-src 'self' https://fonts.gstatic.com;";
  $cps .= "img-src 'self' https://*.googleapis.com https://maps.gstatic.com  *.cdninstagram.com data:;";
  $cps .= "media-src 'self' *.fbcdn.net *.cdninstagram.com;";
  $cps .= "object-src 'none'";
  header( 'Content-Security-Policy: '.$cps );

	header( 'X-Content-Type-Options: nosniff' );
	header( 'Referrer-Policy: strict-origin-when-cross-origin' );
	header( 'Strict-Transport-Security: max-age=31540000; includeSubDomains' );
	header( 'Timing-Allow-Origin: *' );
	header_remove('Expires');
}
add_action( 'send_headers', 'tr_apoth_add_headers' );

/*
  Navigation Menus
  --------------------------------
*/
function tr_apoth_register_nav_menu() {
  register_nav_menus(
    // add custom locations. if you want...
  );
}
add_action( 'after_setup_theme', 'tr_apoth_register_nav_menu' );

/*
  ASYNC & DEFER FOR SCRIPTS
  --------------------------------
*/
// Add async and defer to enqueued scripts by adding '#tr-async' in the src
function tr_apoth_async_defer_scripts( $url )
{
  // if the tag in not present in the enqueued script url, do nothing and bail
  if ( strpos( $url, '#tr-async-defer') === false )return $url;
  // if we're in an admin area, remove the tag and bail. Note: something probably went wrong if this happens.
  else if ( is_admin() ) return str_replace( '#tr-async-defer', '', $url );
  // if tag is present, add the attributes to the enqueued script element
  else return str_replace( '#tr-async-defer', '', $url ).'\' async="async" defer="defer"';
  }
add_filter( 'clean_url', 'tr_apoth_async_defer_scripts' );

/*
  WEBSITE PHOTOS
  ------------------
*/
function do_settings_tr_apoth_home_product_images( $array ) {
  foreach ($array as $type) {
    register_setting( 'tr-apoth-images-products-option-group', 'tr-apoth-images-products-'.$type.'-setting' );
    add_settings_field( 'tr-apoth-images-products-'.$type.'-field', 'Product Photos: '.$type, 'tr_apoth_images_products_'.$type.'_field', 'xochis_images', 'tr-apoth-images-products-settings-section' );
  }
}
function tr_apoth_set_product_preview_images( $type ) {
  $saved_images = esc_attr( get_option('tr-apoth-images-products-'.$type.'-setting') );
  $saved_images_array = explode( ',', $saved_images );
  $output  = '';
  $output .= '<div class="container tr-apoth-images-products-setting-field">';
  $output .=  '<div class="row">';
  $output .=    '<div class="col-10">';
  $output .=      '<button id="'.$type.'" class="tr-apoth-js-uploadMedia" type="button" name="button">Edit</button>';
  $output .=      '<div id="'.$type.'" class="tr-apoth-admin-image-preview-container">';
  $output .=        '<img id="0" class="tr-apoth-admin-image-preview" src="'. ( array_key_exists(0, $saved_images_array) ? $saved_images_array[0] : '' ) .'">';
  $output .=        '<img id="1" class="tr-apoth-admin-image-preview" src="'. ( array_key_exists(1, $saved_images_array) ? $saved_images_array[1] : '' ) .'">';
  $output .=        '<img id="2" class="tr-apoth-admin-image-preview" src="'. ( array_key_exists(2, $saved_images_array) ? $saved_images_array[2] : '' ) .'">';
  $output .=        '<img id="3" class="tr-apoth-admin-image-preview" src="'. ( array_key_exists(3, $saved_images_array) ? $saved_images_array[3] : '' ) .'">';
  $output .=        '<input type="text" id="tr-apoth-images-products-'.$type.'-field" name="tr-apoth-images-products-'.$type.'-setting" class="tr-apoth-admin-image-preview-hidden-div" style="display:none;" value="'.$saved_images.'">';
  $output .=      '</div>';
  $output .=    '</div>';
  $output .=  '</div>';
  $output .= '</div>';
  echo $output;
}
function tr_apoth_set_about_preview_images() {
  $saved_images = esc_attr( get_option('tr-apoth-images-about-setting') );
  $saved_images_array = explode( ',', $saved_images );
  $output  = '';
  $output .= '<div class="container tr-apoth-images-about-field">';
  $output .= '<input type="text" id="tr-apoth-images-about-field" name="tr-apoth-images-about-setting" class="tr-apoth-admin-images-about-hidden-div" style="display:none;" value="'.$saved_images.'">';
  $output .=  '<div class="row">';
  $output .=    '<div class="col-10 tr-apoth-images-about-field-container">';
  $output .=      '<div class="tr-apoth-image-container source">';
  $output .=        '<img class="tr-apoth-admin-image-preview" src="'.$saved_images_array[0].'">';
  $output .=        '<button class="tr-apoth-js-uploadMedia" type="button" name="button">Source</button>';
  $output .=      '</div>';
  $output .=      '<div class="tr-apoth-image-container curiosity">';
  $output .=        '<img class="tr-apoth-admin-image-preview" src="'.$saved_images_array[1].'">';
  $output .=        '<button class="tr-apoth-js-uploadMedia" type="button" name="button">Curiosity</button>';
  $output .=      '</div>';
  $output .=      '<div class="tr-apoth-image-container wisdom">';
  $output .=        '<img class="tr-apoth-admin-image-preview" src="'.$saved_images_array[2].'">';
  $output .=        '<button class="tr-apoth-js-uploadMedia" type="button" name="button">Wisdom</button>';
  $output .=      '</div>';
  $output .=      '<div class="tr-apoth-image-container connection">';
  $output .=        '<img class="tr-apoth-admin-image-preview" src="'.$saved_images_array[3].'">';
  $output .=        '<button class="tr-apoth-js-uploadMedia" type="button" name="button">Connection</button>';
  $output .=      '</div>';
  $output .=      '<div class="tr-apoth-image-container craftsmanship">';
  $output .=        '<img class="tr-apoth-admin-image-preview" src="'.$saved_images_array[4].'">';
  $output .=        '<button class="tr-apoth-js-uploadMedia" type="button" name="button">Craftsmanship</button>';
  $output .=      '</div>';
  $output .=    '</div>';
  $output .=  '</div>';
  $output .= '</div>';
  echo $output;
}


/*
  INSTAGRAM
  ------------------
*/
function tr_apoth_display_home_instagram() {
  $img_urls = explode(',', esc_attr( get_option('tr-apoth-instagram-img-urls') ) );
  $insta_link = esc_attr( get_option('tr-apoth-instagram-link-setting') );
  $output = '';
  foreach ($img_urls as $url) {
    if ( $url == '' ) continue;
    if ( strpos($url, 'video') ) {
      $output .= '<div class="tr-apoth-instagram-item" data-src="'.$url.'">';
      $output .=    '<a class="tr-apoth-instagram-item-link" href="'.$insta_link.'" target="_blank">';
      $output .=      '<video class="tr-apoth-instagram-media" autoplay loop muted name="media">';
      $output .=          '<source type="video/mp4">';
      $output .=      '</video>';
      $output .=      '<div class="tr-apoth-intagram-overlay">';
      $output .=        '<span class="tr-icon-instagram tr-apoth-home-instagram-preview-logo"></span>';
      $output .=      '</div>';
      $output .=    '</a>';
      $output .=  '</div>';
    } else {
      $output .= '<div class="tr-apoth-instagram-item" data-src="'.$url.'">';
      $output .=    '<a class="tr-apoth-instagram-item-link" href="'.$insta_link.'" target="_blank">';
      $output .=      '<div class="tr-apoth-intagram-overlay">';
      $output .=        '<span class="tr-icon-instagram tr-apoth-home-instagram-preview-logo"></span>';
      $output .=      '</div>';
      $output .=    '</a>';
      $output .= '</div>';
    }
  }
  return $output;
}

/*
  PRODUCTS
  ------------------
*/
function get_product_gallery( $type ) {
  // retrieve posts loop
  $args = array(
    'post_type'      => 'products',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'tax_query'      => array(
      array(
        'taxonomy' => 'product_type',
        'field'    => 'slug',
        'terms'    => $type
      )
    )
  );
  $loop = new WP_Query($args);
  // return nothing if there are no products
  if ( !($loop->have_posts()) ) return;
  // build gallery
  $output  = '';
  $output .= '<div class="tr-apoth-products-gallery-container '.$type.' text-center">';
  while( $loop->have_posts() ){
    $loop->the_post();
    if ($type == 'tea' OR $type == 'body') {
      //create json for modal
      $json = (object) [
        'name'           => get_field('name'),
        'tagline'        => get_field('tagline'),
        'description'    => get_field('description'),
        'ingredients'    => get_field('ingredients'),
        'instructions'   => get_field('instructions'),
        'vibe'           => get_field('vibe'),
        'featured_image' => get_field('featured_image'),
        'etsy_link'      => get_field('etsy_link'),
        'gallery'        => get_field('gallery')
      ];
      // prepare json for html data attr
      $json = rawurlencode( json_encode($json) );
    }
    $output .= '<div class="tr-apoth-individual-product" data-json="'.(isset($json) ? $json : '').'">'; // Save modal information
    $output .= '<img src="'.get_field('featured_image').'" alt="'.get_field('name').'">';
    $output .= '<h1>'.get_field('name').'</h1>';
    $output .= '<hr>';
    $output .= '<p>'.( ($type == 'tea' OR $type == 'body') ? get_field('tagline') : get_field('ingredients') ).'</p>';
    if ($type == 'tea' OR $type == 'body') {
      $output .= '<button id="'.str_replace( ' ', '-', strtolower(get_field('name')) ).'" class="tr-apoth-open-product-modal" href="#">View</button>';
    } else {
      $output .= '<a href="'.get_field('etsy_link').'" target="_blank"><button id="'.str_replace( ' ', '-', strtolower(get_field('name')) ).'">Buy on Etsy</button></a>';
    }
    $output .= '</div>';
  }
  wp_reset_postdata();
  $output .= '</div>';
  // add hide button with capitalized product name
  $name = ( $type == 'body' ? 'Body Products' : strtoupper(substr($type,0,1)).substr($type,1) );
  $output .= '<button class="tr-apoth-hide-product-gallery" type="button" name="button" data-type="'.$type.'">Hide '.$name.'</button>';

  return $output;
}
