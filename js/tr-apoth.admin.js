/*
  @package tapRoot_apothecary
  ==================
    MYSCRIPT:ADMIN
  ==================
*/
jQuery(document).ready(function($) {

  // Media Upload for Product Images
  $('.tr-apoth-images-products-setting-field button.tr-apoth-js-uploadMedia').on('click', function(e) {
    e.preventDefault();
    // save clicked button
    var $that = $(this);
    // create a media uploader
    let mediaUploader = wp.media({
      title: 'Select your Images',
      button: {
        text: 'Use these Images'
      },
      multiple: true
    });
    // define media uploader selection save behavior
    mediaUploader.on( 'select', function() {
      let attachment = mediaUploader.state().get('selection').map( function( attachment ) {
        attachment.toJSON();
        return attachment;
      });
      // retrieve button id to identify preivew div
      let id = $that.attr('id');
      // set preview images and save urls
      let hiddenDivValue = '';
      $.each( attachment, function( i, val ) {
        $('.tr-apoth-admin-image-preview-container#'+id).find('img#'+i).attr( 'src', val.attributes.url );
        hiddenDivValue += val.attributes.url+',';
      });
      // save urls in hidden div
      $('.tr-apoth-admin-image-preview-container#'+id).find('.tr-apoth-admin-image-preview-hidden-div').attr( 'value', hiddenDivValue );
    });
    // open media uploader
    mediaUploader.open();
  });
  // Media Upload for Product Images
  $('.tr-apoth-image-container button.tr-apoth-js-uploadMedia').on('click', function(e) {
    e.preventDefault();
    // save clicked button
    let $that = $(this);
    // create a media uploader
    let mediaUploader = wp.media({
      title: 'Select your Image',
      button: {
        text: 'Use this Image'
      },
      multiple: false
    });
    // define media uploader selection save behavior
    mediaUploader.on( 'select', function() {
      let attachment = mediaUploader.state().get('selection').map( function( attachment ) {
        attachment.toJSON();
        return attachment;
      });
      // set preview image
      $that.siblings('img').attr( 'src', attachment[0].attributes.url );
      // save urls in hidden div
      let hiddenDivValue = '';
      $('.tr-apoth-image-container').find('img').each( function() {
        hiddenDivValue += $(this).attr('src') +',';
      });
      $('#tr-apoth-images-about-field').attr( 'value', hiddenDivValue );
    });
    // open media uploader
    mediaUploader.open();
  });

  // Instagram Refresh
  $('#tr-apoth-js-instagramRefresh').on('click', function() {
    // retrieve data-url attribute from refresh button (@ inc/templates/tr-apoth-admin-instagram.php)
    var ajaxUrl = $(this).data('url');
    // reveal spinner
    $('.tr-apoth-instagram-refresh-spinner').css('opacity', '1');
    // execute cURL requests for instagram images. response = string of media urls
    $.ajax({
      url: ajaxUrl,
      dataType: 'text',
      data: {
        action: 'tr_apoth_instagram_curl_request'
      },
      error: function( response ) {
        console.log( 'AJAX ERROR: ' + response );
        $('.tr-apoth-instagram-refresh-spinner-container').css('opacity', '0');
      },
      success: function ( response ) {
        // update hidden div
        $('#tr-apoth-instagram-img-urls-field').text(response);
        // hide spinner
        $('.tr-apoth-instagram-refresh-spinner').css('opacity', '0');
      }
    });
  });

// END OF JQUERY
});
