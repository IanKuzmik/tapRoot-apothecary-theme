<?php
  /*
    @package tapRoot_apothecary
    ========
      AJAX
    ========
  */


/*
    INSTAGRAM
  =============
*/
function tr_apoth_instagram_curl_request() {
  $post_limit    = get_option('tr-apoth-instagram-max-count-setting');
  $USER_ID       = esc_attr( get_option('tr-apoth-instagram-user-setting') );
  $ACCESS_TOKEN  = esc_attr( get_option('tr-apoth-instagram-access-setting') );

  // retrieve media_ids
  $cURL_connection = curl_init( 'https://graph.instagram.com/'.$USER_ID.'/media?access_token='.$ACCESS_TOKEN );
  curl_setopt($cURL_connection, CURLOPT_RETURNTRANSFER, true);
  $cURL_response = curl_exec($cURL_connection);
  curl_close($cURL_connection);
  $json_array_response = json_decode($cURL_response);
  // parse for specified amount of media_ids
  $media_ids = $json_array_response->data;
  $media_ids = array_slice( $media_ids, 0, $post_limit );
  // map $media_ids, extracting the ids from the objects, so I just have an array of strings
  $media_ids = array_map( function($e) { return $e->id; }, $media_ids );

  // retrieve images from media_ids
  $multi_curl = array();
  $mh = curl_multi_init();
  $image_urls = '';
  // for each media_id, build a cURL_request, set its options, and add it to the cURL_multi_handler
  foreach ( $media_ids as $i => $media_id ) {
    $fetch_url = 'https://graph.instagram.com/'.$media_id.'?fields=media_url,media_type,thumbnail_url&access_token='.$ACCESS_TOKEN;
    $multi_curl[$i] = curl_init( $fetch_url );
    curl_setopt( $multi_curl[$i], CURLOPT_RETURNTRANSFER, true );
    curl_multi_add_handle( $mh, $multi_curl[$i] );
  }
  // execute the cURL_multi_handler
  $running = null;
  do {
    curl_multi_exec($mh, $running);
  } while ($running);
  // extraxt the media_url/thumbnail_url from the cURL response and add it to the $image_urls string
  foreach ($multi_curl as $ch) {
    $response = curl_multi_getcontent( $ch );
    // check if i'm looking for a thumbnail_url (VIDEO), or a media_url (IMAGE, CAROUSEL_ALBUM)
    if ( json_decode($response)->media_type == 'VIDEO' ) { 
      $image_urls .= json_decode($response)->thumbnail_url.',';
    } else {
      $image_urls .= json_decode($response)->media_url.',';
    }
    // close the individual cURL_handler
    curl_multi_remove_handle( $mh, $ch );
    curl_close( $ch );
  }
  // close the cURL_multi_handler
  curl_multi_close( $mh );
  // return string of image urls
  echo $image_urls;
  // kill ajax
  wp_die();
}
add_action( 'wp_ajax_nopriv_tr_apoth_instagram_curl_request', 'tr_apoth_instagram_curl_request' ); //for everyone
add_action( 'wp_ajax_tr_apoth_instagram_curl_request', 'tr_apoth_instagram_curl_request' );        //for logged-in users

/*
    CONTACT FORM
  ================
*/
function tr_apoth_contact_form_submit() {
  $title   = wp_strip_all_tags( $_POST['name'] );
  $email   = wp_strip_all_tags( $_POST['email'] );
  $message = wp_strip_all_tags( $_POST['message'] );

  $args = array(
    'post_title'   => $title,
    'post_content' => $message,
    'post_author'  => 1,
    'post_status'  => 'publish',
    'post_type'    => 'messages',
    'meta_input'   => array(
      'email' => $email
    )
  );
  wp_insert_post( $args );
  // kill ajax
  wp_die();
}
add_action( 'wp_ajax_nopriv_tr_apoth_contact_form_submit', 'tr_apoth_contact_form_submit' );
add_action( 'wp_ajax_tr_apoth_contact_form_submit', 'tr_apoth_contact_form_submit' );

/*
    FEATURED PRODUCT DROPDOWN
  =============================
*/
/* When featured category is selected, generate a new list of products that fit the new category, and return HTML as a string */
function tr_apoth_update_featured_product_dropdown() {
  $featured_product = get_option('tr-apoth-featured-product-setting'); // case: user selects a category that contains the featured product. this product should be 'selected', so we get it here to check later
  $type = $_POST['type'];                                              // get the product category that was selected
  $output  = '';
  $args = array(                                                       // generate arguments for WP_Query. We want all published products of a specific product_type
    'post_type'      => 'products',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'tax_query'       => array(                                        // limit products to a taxonomy
      array(                                                           // the '$type' term is the product category sleected, which will match the 'slug' field of the 'product_type' taxonomy
        'taxonomy' => 'product_type',
        'field'    => 'slug',                                         
        'terms'    => $type
      )
    )
  );
  $loop = new WP_Query($args); 
  while( $loop->have_posts() ){
    $loop->the_post();
    $output .= '<option value="'.get_field('name').'" '.( ($featured_product == get_field('name'))  ? 'selected' : '' ).' >'.get_field('name').'</option>';
  }
  echo $output; 
  wp_die();
}
add_action( 'wp_ajax_nopriv_tr_apoth_update_featured_product_dropdown', 'tr_apoth_update_featured_product_dropdown' );
add_action( 'wp_ajax_tr_apoth_update_featured_product_dropdown', 'tr_apoth_update_featured_product_dropdown' );