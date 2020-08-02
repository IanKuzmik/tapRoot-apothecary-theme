<?php
/*
  @package tapRoot_apothecary
  =================
    THEME SUPPORT
  =================
*/

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
/*
This function grabs a string of image urls from the option {tr-apoth-instagram-img-urls},
and maps them to HTML elements on the home page. Each image links to the instagram profile,
which is retrieved from the option {tr-apoth-instagram-link-setting}
*/
function tr_apoth_display_home_instagram() {
  $img_urls = explode(',', esc_attr( get_option('tr-apoth-instagram-img-urls') ) );
  $insta_link = esc_attr( get_option('tr-apoth-instagram-link-setting') );
  $output = '';
  foreach ($img_urls as $url) {
    if ( $url == '' ) continue;
    $output .= '<div class="tr-apoth-instagram-item" data-src="'.$url.'">';
    $output .=    '<a class="tr-apoth-instagram-item-link" href="'.$insta_link.'" target="_blank">';
    $output .=      '<div class="tr-apoth-intagram-overlay">';
    $output .=        '<span class="tr-icon-instagram tr-apoth-home-instagram-preview-logo"></span>';
    $output .=      '</div>';
    $output .=    '</a>';
    $output .= '</div>';
  }
  return $output;
}

/*
  PRODUCTS
  ------------------
*/

/*
Input: (String) category of products to return. (return products of all categories if null), (String) name of product to return. (return all products if null)
Output: a WordPress 'loop' that contains Product custom post types. 
*/
function get_product_posts( $type = null, $name = null ) {
  $args = array(                       // get, by deafult, all product posts
    'post_type'      => 'products',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
  );
  if ($type) {                         // get posts of a specific type if $type is specified
    $args['tax_query'] = array(        
      array(
        'taxonomy' => 'product_type',
        'field'    => 'slug',
        'terms'    => $type
      )
    );
  }
  if ($name) {                         // get post of a specific name if $name is specified
    $args['name'] = $name;
  }
  return new WP_Query($args); 
}

function get_product_gallery( $type ) {
  // get posts for category $type
  $loop = get_product_posts( $type );
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
        'featured_image' => get_field('featured_image')['url'],
        'image_alt'      => get_field('featured_image')['alt'],
        'etsy_link'      => get_field('etsy_link'),
        'gallery'        => get_field('gallery')
      ];
      // prepare json for html data attr
      $json = rawurlencode( json_encode($json) );
    }
    $output .= '<div class="tr-apoth-individual-product" data-json="'.(isset($json) ? $json : '').'">'; // Save modal information
    $output .= '<img src="'.get_field('featured_image')['url'].'" alt="'.get_field('featured_image')['alt'].'">';
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

/*
  ANNOUNCEMENTS
  ------------------
*/
/* Generate HTML markup for What's New section*/
function get_whats_new() {
  $head_1 = get_option('tr-apoth-whats-new-setting-head-1');
  $body_1 = get_option('tr-apoth-whats-new-setting-body-1');
  $head_2 = get_option('tr-apoth-whats-new-setting-head-2');
  $body_2 = get_option('tr-apoth-whats-new-setting-body-2');
  $head_3 = get_option('tr-apoth-whats-new-setting-head-3');
  $body_3 = get_option('tr-apoth-whats-new-setting-body-3');
  $output = '';
  $output .= '<div class="tr-apoth-whats-new">';
  $output .=  '<h1>What\'s New!</h1>';
  $output .=  '<ul>';
  $output .=    '<li>';
  $output .=      '<h3>'.$head_1.'</h3>';
  $output .=      '<p>'.$body_1.'</p>';
  $output .=    '</li>';
  $output .=    '<li>';
  $output .=      '<h3>'.$head_2.'</h3>';
  $output .=      '<p>'.$body_2.'</p>';
  $output .=    '</li>';
  $output .=    '<li>';
  $output .=      '<h3>'.$head_3.'</h3>';
  $output .=      '<p>'.$body_3.'</p>';
  $output .=    '</li>';
  $output .=  '</ul>';
  $output .= '</div>';
  return $output; 
}


/* 
Generate HTML markup for Featured Product section 
*/
function get_featured_product() {
  $featured_product = get_option('tr-apoth-featured-product-setting');
  $price = get_option('tr-apoth-featured-price-setting');
  $loop = get_product_posts(null, $featured_product);
  $output  = '';
  while( $loop->have_posts() ){
    $loop->the_post();
    $id = get_the_id();                                                 // get post ID
    $product_type = wp_get_post_terms( $id, 'product_type' )[0]->slug;  // get product type. Get list of terms for this post the match 'product type'. This should return a single element array of objects. the 'slug' or 'name' can be used to retrieve the product type.
    $icon = '';
    switch ( $product_type ) {                                          // determine which icon to use based on $product_type
      case 'tea':
        $icon = 'tr-icon-coffee';
        break;
      case 'incense':
        $icon = 'tr-icon-fire-2';
        break;
      case 'body':
        $icon = 'tr-icon-leaf';
        break;
      case 'syrup':
        $icon = 'tr-icon-tint';
        break;
      case 'jewelry':
        $icon = 'tr-icon-diamond-1';
        break;
      case 'sundries':
        $icon = 'tr-icon-moon';
        break;
      default:
        $icon = 'tr-icon-moon';
        break;
    }          

    $output .= '<div class="tr-apoth-featured-product">';
    $output .=  '<div class="tr-apoth-featured-product-img-icon-container">';
    $output .=    '<img src="'.get_field('featured_image')['url'].'" alt="">';
    $output .=    '<span class="'.$icon.'"></span>';
    $output .=  '</div>';
    $output .=  '<h1>'.get_field('name').'</h1>';
    $output .=  '<hr>';
    $output .=  '<p class="tagline">'.get_field('tagline').'</p>';
    $output .=  '<p class="price">'.$price.'</p>';
    $output .=  '<p class="desc">'.get_field('description').'</p>';
    $output .=  '<a href="'.get_field('etsy_link').' target="_blank"><button>Shop Etsy</button></a>';
    $output .= '</div>';
  }
  wp_reset_postdata();
  return $output;

}
