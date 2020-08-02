<?php
/*
  @package tapRoot_apothecary
  ==============
    ADMIN PAGE
  ==============
*/

/*
    GENERATE PAGES
  ===================
*/
function tr_apoth_add_admin_page() {
  // generate menu
  add_menu_page( 'Xochis Options', 'Xochis', 'manage_options', 'xochis', 'tr_apoth_create_admin_image_page', 'dashicons-buddicons-replies', 110 );
  // generate subpages
  add_submenu_page( 'xochis', 'Xochis Image Options', 'Images', 'manage_options', 'xochis_images', 'tr_apoth_create_admin_image_page' );
  add_submenu_page( 'xochis', 'Xochis Announcements Options', 'Announcements', 'manage_options', 'xochis_announcements', 'tr_apoth_create_admin_announcements_page' );
  add_submenu_page( 'xochis', 'Xochis Instagram Options', 'Instagram', 'manage_options', 'xochis_instagram', 'tr_apoth_create_admin_instagram_page' );
  add_submenu_page( 'xochis', 'Xochis Google Maps', 'Google Maps', 'manage_options', 'xochis_google_maps', 'tr_apoth_create_admin_googe_maps_page' );

  // generate settings
  add_action( 'admin_init', 'tr_apoth_custom_settings' );
}
add_action( 'admin_menu', 'tr_apoth_add_admin_page' );
/*
    PAGE TEMPLATE CALLBACKS
  ===========================
*/
function tr_apoth_create_admin_image_page() { require_once( get_template_directory().'/inc/admin-templates/tr-apoth-admin-image.php' ); }
function tr_apoth_create_admin_announcements_page() { require_once( get_template_directory().'/inc/admin-templates/tr-apoth-admin-announcements.php' ); }
function tr_apoth_create_admin_instagram_page() { require_once( get_template_directory().'/inc/admin-templates/tr-apoth-admin-instagram.php' ); }
function tr_apoth_create_admin_googe_maps_page() { require_once( get_template_directory().'/inc/admin-templates/tr-apoth-admin-google-maps.php' ); }

/*
    SETTINGS
  ============
*/
function tr_apoth_custom_settings() {
  // --- IMAGES ---
  // Products
  add_settings_section( 'tr-apoth-images-products-settings-section', 'Manage Product Section Images', 'tr_apoth_images_products_settings_section', 'xochis_images' );
  do_settings_tr_apoth_home_product_images( ['tea', 'incense', 'body', 'syrup', 'jewelry', 'sundries'] );
  // About
  add_settings_section( 'tr-apoth-images-about-settings-section', 'Manage About Us Images', 'tr_apoth_images_about_settings_section', 'xochis_images_about' );
  register_setting( 'tr-apoth-images-about-option-group', 'tr-apoth-images-about-setting' );
  add_settings_field( 'tr-apoth-images-about-field', 'Pictures', 'tr_apoth_images_about_field', 'xochis_images_about', 'tr-apoth-images-about-settings-section' );
  // --- ANNOUNCEMENTS ---
  add_settings_section( 'tr-apoth-announcements-settings-section', 'Manage What\'s New', 'tr_apoth_announcements_settings_section', 'xochis_announcements' );
  // what's new
  register_setting( 'tr-apoth-announcements-option-group', 'tr-apoth-whats-new-setting-head-1' );
  register_setting( 'tr-apoth-announcements-option-group', 'tr-apoth-whats-new-setting-body-1' );
  register_setting( 'tr-apoth-announcements-option-group', 'tr-apoth-whats-new-setting-head-2' );
  register_setting( 'tr-apoth-announcements-option-group', 'tr-apoth-whats-new-setting-body-2' );
  register_setting( 'tr-apoth-announcements-option-group', 'tr-apoth-whats-new-setting-head-3' );
  register_setting( 'tr-apoth-announcements-option-group', 'tr-apoth-whats-new-setting-body-3' );
  add_settings_field( 'tr-apoth-whats-new-field', 'What\'s New!', 'tr_apoth_whats_new_field', 'xochis_announcements', 'tr-apoth-announcements-settings-section' );
  // featured product
  register_setting( 'tr-apoth-announcements-option-group', 'tr-apoth-featured-product-category-setting' );
  register_setting( 'tr-apoth-announcements-option-group', 'tr-apoth-featured-product-setting' );
  add_settings_field( 'tr-apoth-featured-product-field', 'Featured Product!', 'tr_apoth_featured_product_field', 'xochis_announcements', 'tr-apoth-announcements-settings-section' );
  // price
  register_setting( 'tr-apoth-announcements-option-group', 'tr-apoth-featured-price-setting' );
  add_settings_field( 'tr-apoth-featured-price-field', 'Price', 'tr_apoth_featured_price_field', 'xochis_announcements', 'tr-apoth-announcements-settings-section' );

  // --- INSTAGRAM ---
  add_settings_section( 'tr-apoth-instagram-settings-section', 'Instagram Feed', 'tr_apoth_instagram_settings_section', 'xochis_instagram' );
  // max count
  register_setting( 'tr-apoth-instagram-option-group', 'tr-apoth-instagram-max-count-setting' );
  add_settings_field( 'tr-apoth-instagram-max-count-field', 'Number of Posts to Display', 'tr_apoth_set_instagram_max_count', 'xochis_instagram', 'tr-apoth-instagram-settings-section' );
  // instagram user id
  register_setting( 'tr-apoth-instagram-option-group', 'tr-apoth-instagram-user-setting' );
  add_settings_field( 'tr-apoth-instagram-user-field', 'Instagram User ID', 'tr_apoth_set_instagram_user', 'xochis_instagram', 'tr-apoth-instagram-settings-section' );
  // instagram access token
  register_setting( 'tr-apoth-instagram-option-group', 'tr-apoth-instagram-access-setting' );
  add_settings_field( 'tr-apoth-instagram-access-field', 'Instagram Access Token', 'tr_apoth_set_instagram_access', 'xochis_instagram', 'tr-apoth-instagram-settings-section' );
  // instagram link
  register_setting( 'tr-apoth-instagram-option-group', 'tr-apoth-instagram-link-setting' );
  add_settings_field( 'tr-apoth-instagram-link-field', 'Instagram URL', 'tr_apoth_set_instagram_link', 'xochis_instagram', 'tr-apoth-instagram-settings-section' );
  // refresh/hidden url div
  register_setting( 'tr-apoth-instagram-option-group', 'tr-apoth-instagram-img-urls' );
  add_settings_field( 'tr-apoth-instagram-img-urls-field', 'Refresh Feed', 'tr_apoth_store_instagram_urls', 'xochis_instagram', 'tr-apoth-instagram-settings-section' );

  // --- GOOGLE MAPS ---
  add_settings_section( 'tr-apoth-google-maps-settings-section', 'Google Maps', 'tr_apoth_google_maps_settings_section', 'xochis_google_maps');
  // api key
  register_setting( 'tr-apoth-google-maps-option-group', 'tr-apoth-google-maps-key-setting' );
  add_settings_field( 'tr-apoth-google-maps-key-field', 'API Key', 'tr_apoth_set_google_maps_key', 'xochis_google_maps', 'tr-apoth-google-maps-settings-section' );
}

/*
    SETTINGS SECTION CALLBACKS
  ==============================
*/
function tr_apoth_images_products_settings_section() { echo ''; }
function tr_apoth_images_about_settings_section() { echo ''; }
function tr_apoth_instagram_settings_section() {
  echo 'Save after each setting change for best results';
}
function tr_apoth_google_maps_settings_section() {
  echo 'Manage your Maps';
}

/*
    SETTINGS FIELDS
  ====================
*/
// --- IMAGES ---
// products
function tr_apoth_images_products_tea_field()        { tr_apoth_set_product_preview_images( 'tea' ); }
function tr_apoth_images_products_incense_field()    { tr_apoth_set_product_preview_images( 'incense' ); }
function tr_apoth_images_products_body_field()       { tr_apoth_set_product_preview_images( 'body' ); }
function tr_apoth_images_products_syrup_field()      { tr_apoth_set_product_preview_images( 'syrup' ); }
function tr_apoth_images_products_jewelry_field()    { tr_apoth_set_product_preview_images( 'jewelry' ); }
function tr_apoth_images_products_sundries_field()   { tr_apoth_set_product_preview_images( 'sundries' ); }
// about us
function tr_apoth_images_about_field() { tr_apoth_set_about_preview_images(); }

// --- ANNOUNCEMENTS ---
function tr_apoth_whats_new_field() { 
  $head_1 = get_option('tr-apoth-whats-new-setting-head-1');
  $body_1 = get_option('tr-apoth-whats-new-setting-body-1');
  $head_2 = get_option('tr-apoth-whats-new-setting-head-2');
  $body_2 = get_option('tr-apoth-whats-new-setting-body-2');
  $head_3 = get_option('tr-apoth-whats-new-setting-head-3');
  $body_3 = get_option('tr-apoth-whats-new-setting-body-3');
  $output  = '';
  $output .= '<div class="tr-apoth-whats-new-fields">';
  $output .=  '<label for="head-1">Heading 1</label>';
  $output .=  '<input id="head-1" name="tr-apoth-whats-new-setting-head-1" value="'.esc_html($head_1).'" size="55">';
  $output .=  '<label for="body-1">Body 1</label>';
  $output .=  '<textarea id="boy-1" name="tr-apoth-whats-new-setting-body-1" rows="6" cols="50">'.esc_html($body_1).'</textarea>';
  $output .=  '<label for="head-2">Heading 2</label>';
  $output .=  '<input id="head-2" name="tr-apoth-whats-new-setting-head-2" value="'.esc_html($head_2).'" size="55">';
  $output .=  '<label for="body-2">Body 2</label>';
  $output .=  '<textarea id="boy-2" name="tr-apoth-whats-new-setting-body-2" rows="6" cols="50">'.esc_html($body_2).'</textarea>';
  $output .=  '<label for="head-3">Heading 3</label>';
  $output .=  '<input id="head-3" name="tr-apoth-whats-new-setting-head-3" value="'.esc_html($head_3).'" size="55">';
  $output .=  '<label for="body-3">Body 3</label>';
  $output .=  '<textarea id="boy-3" name="tr-apoth-whats-new-setting-body-3" rows="6" cols="50">'.esc_html($body_3).'</textarea>';
  $output .= '</div>';
  echo $output;
 }
 
/* Choose product to feature on homepage. Two dropdowns: Category | Products.  */
function tr_apoth_featured_product_field() { 
  $featured_product_category = get_option('tr-apoth-featured-product-category-setting');
  $featured_product = get_option('tr-apoth-featured-product-setting');
  $tax_array = array_map( function($tax) { return $tax->name; }, get_terms('product_type') ); // get array of published product types
  $product_loop = get_product_posts( $featured_product_category );                            // get all product posts of selected category 
  $output  = '';
  $output .= '<select id="tr-apoth-featured-product-category-field" name="tr-apoth-featured-product-category-setting" data-url="'.admin_url( 'admin-ajax.php' ).'">';
  foreach ( $tax_array as $tax ) {
    $output .= '<option value="'.$tax.'" '.( ($featured_product_category == $tax)  ? 'selected' : '' ).' >'.$tax.'</option>';
  }
  $output .= '</select>';
  $output .= '<select id="tr-apoth-featured-product-field" name="tr-apoth-featured-product-setting">'; // dropdown for individual products. This is updated either by the Submit button or by AJAX. 
  while( $product_loop->have_posts() ){
    $product_loop->the_post();
    $output .= '<option value="'.get_field('name').'" '.( ($featured_product == get_field('name'))  ? 'selected' : '' ).' >'.get_field('name').'</option>';
  }
  $output .= '</select>';
  echo $output;
  }
/* choose price for featured product (include $) */
function tr_apoth_featured_price_field() {
$price = esc_attr( get_option('tr-apoth-featured-price-setting') );
echo '<input type="text" class="tr-admin-textbox" name="tr-apoth-featured-price-setting" value="'.esc_html($price).'" placeholder="Price...">';
}

// --- INSTAGRAM ---
function tr_apoth_set_instagram_max_count() {
  $selected_count = get_option('tr-apoth-instagram-max-count-setting');
  $output  = '';
  $output .= '<select id="tr-apoth-instagram-max-count-field" name="tr-apoth-instagram-max-count-setting">';
  $output .= '<option value="4" '.  ( ($selected_count == 4)  ? 'selected' : '' ) .' >4</option>';
  $output .= '<option value="8" '.  ( ($selected_count == 8)  ? 'selected' : '' ) .' >8</option>';
  $output .= '<option value="12" '. ( ($selected_count == 12) ? 'selected' : '' ) .' >12</option>';
  $output .= '<option value="16" '. ( ($selected_count == 16) ? 'selected' : '' ) .' >16</option>';
  $output .= '<option value="20" '. ( ($selected_count == 20) ? 'selected' : '' ) .' >20</option>';
  $output .= '<option value="24" '. ( ($selected_count == 24) ? 'selected' : '' ) .' >24</option>';
  $output .= '</select>';
  echo $output;
}
function tr_apoth_set_instagram_user() {
  $instagram_user = esc_attr( get_option('tr-apoth-instagram-user-setting') );
  echo '<input type="text" class="tr-admin-textbox" name="tr-apoth-instagram-user-setting" value="'.esc_html($instagram_user).'" placeholder="Instagram User ID...">';
}
function tr_apoth_set_instagram_access() {
  $instagram_access = esc_attr( get_option('tr-apoth-instagram-access-setting') );
  echo '<input type="text" class="tr-admin-textbox" name="tr-apoth-instagram-access-setting" value="'.esc_html($instagram_access).'" placeholder="Instagram Access Token...">';
}
function tr_apoth_set_instagram_link() {
  $instagram_link = esc_attr( get_option('tr-apoth-instagram-link-setting') );
  echo '<input type="text" class="tr-admin-textbox" name="tr-apoth-instagram-link-setting" value="'.esc_html($instagram_link).'" placeholder="Instagram Link...">';
}

function tr_apoth_store_instagram_urls() {
  $image_urls = esc_attr( get_option('tr-apoth-instagram-img-urls') );
  $output  = '';
  $output .= '<button id="tr-apoth-js-instagramRefresh" class="tr-apoth-instagram-refresh-button" type="button" name="button" data-url="'.admin_url( 'admin-ajax.php' ).'">Refresh</button>';
  $output .= '<span class="tr-apoth-instagram-refresh-spinner tr-icon-spin6 animate-spin" ></span>';
  $output .= '<textarea id="tr-apoth-instagram-img-urls-field" name="tr-apoth-instagram-img-urls" style="display: none; visibility: hidden;">'.esc_html($image_urls).'</textarea>';
  echo $output;
}

// --- GOOGLE MAPS ---
function tr_apoth_set_google_maps_key() {
  $api_key = esc_attr( get_option('tr-apoth-google-maps-key-setting') );
  echo '<input type="text" class="tr-admin-textbox" name="tr-apoth-google-maps-key-setting" value="'.esc_html($api_key).'" placeholder="API Key...">';
}
