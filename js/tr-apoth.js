/*
  @package tapRoot_apothecary
  ===========
    MYSCRIPT
  ===========
*/

// LAZY LOAD
const images = document.querySelectorAll('.tr-apoth-about-image');
const observerOptions = {
  threshold  : 0,
  rootMargin : '0px 0px -150px 0px'
};
// about images
const imgObserver = new IntersectionObserver( (entries, imgObserver) => {
  entries.forEach( entry => {
    if ( !entry.isIntersecting ) return;
    entry.target.setAttribute( 'style', 'background-image:url('+entry.target.getAttribute('data-src')+'); opacity: 1;');
    imgObserver.unobserve(entry.target);
  })
}, observerOptions );
images.forEach( (image) => {
  imgObserver.observe(image);
});
// home page quotes
const quotes = document.querySelectorAll('.tr-apoth-home-quote-text');
const quoteObserver = new IntersectionObserver( (entries, quoteObserver) => {
  entries.forEach( entry => {
    if ( !entry.isIntersecting ) return;
    entry.target.setAttribute( 'style', 'opacity: 1; color: black;');
    quoteObserver.unobserve(entry.target);
  })
}, observerOptions );
quotes.forEach((quote) => {
  quoteObserver.observe(quote);
});
// home page icons
const homeIcons = document.querySelectorAll('.tr-apoth-home-info-box span');
const homeIconsObserver = new IntersectionObserver( (entries, homeIconsObserver) => {
  entries.forEach( entry => {
    if ( !entry.isIntersecting ) return;
    entry.target.setAttribute( 'style', 'opacity: 1;');
    homeIconsObserver.unobserve(entry.target);
  })
}, observerOptions );
homeIcons.forEach((icon) => {
  homeIconsObserver.observe(icon);
});
// home page instagram
const instaObserverOptions = {
  threshold  : 0,
  rootMargin : '0px 0px 300px 0px'
};
const instagramImages = document.querySelectorAll('.tr-apoth-instagram-item');
const instaObserver = new IntersectionObserver( (entries, instaObserver) => {
  entries.forEach( entry => {
    if ( !entry.isIntersecting ) return;
    if ( entry.target.querySelector('source') != null ) {
      entry.target.querySelector('source').setAttribute( 'src', entry.target.getAttribute('data-src') );
      entry.target.querySelector('video').load();
      instaObserver.unobserve(entry.target);
    } else {
      entry.target.setAttribute( 'style', 'background-image:url('+entry.target.getAttribute('data-src')+');');
      instaObserver.unobserve(entry.target);
    }
  });
}, instaObserverOptions );
instagramImages.forEach((insta) => {
  instaObserver.observe(insta);
});


jQuery(document).ready(function($) {

  // STICKY HEADER
  var savedScrollTop = 0;
  $(window).scroll( function() {
    if ( $('header').offset().top > 0 ) {
      $('.tr-apoth-header').addClass('sticky');
      $('.tr-apoth-mobile-menu').addClass('sticky');
    } else {
      $('.tr-apoth-header').removeClass('sticky');
      $('.tr-apoth-mobile-menu').removeClass('sticky');
    }
    let currentScrollTop = $(this).scrollTop();
    if ( currentScrollTop > savedScrollTop ) {
      //$('.tr-apoth-header.sticky').css( 'transform', 'translateY(-100px)' );
      $('.tr-apoth-header.sticky').addClass('hide');
      $('.tr-apoth-header').removeClass('black');
      $('.tr-apoth-logo-container img.white').hide();
      $('.tr-apoth-logo-container img.black').show();
      $('.tr-apoth-mobile-menu').hide();
    } else {
     // $('.tr-apoth-header.sticky').css( 'transform', 'unset' );
      $('.tr-apoth-header.sticky').removeClass('hide');
    }
    savedScrollTop = currentScrollTop; 
  });


  // PRODUCTS
  $('.view-products-button').on( 'click', function() {
    let id = $(this).attr('id');
    // capatalize first letter for button text
    let name = (id == 'body') ? 'Body Products' : id.substr(0,1).toUpperCase()+id.substr(1);
    $('.tr-apoth-products-gallery.'+id).slideToggle(400);
    // update button text
    $(this).html( ( $(this).html() == 'View '+name ) ? 'Hide '+name : 'View '+name );
  });
  $('.tr-apoth-hide-product-gallery').on( 'click', function() {
    let type = $(this).data('type');
    let name = (type == 'body') ? 'Body Products' : type.substr(0,1).toUpperCase()+type.substr(1);
    $('.tr-apoth-products-gallery.'+type).slideToggle(400);
    $('.view-products-button#'+type).html( 'View '+name );
  });

  // BUILD/REVEAL MODAL
  $('.tr-apoth-open-product-modal').on( 'click', function() {
    // retrieve json and build modal
    let json = JSON.parse( decodeURIComponent( $(this).parent().data('json') ) );
    $modal = $('.tr-apoth-product-modal');
    console.log(json);
    $modal.find('img').attr( 'src', json.featured_image );
    $modal.find('h1').html(json.name);
    $modal.find('h2').html(json.tagline);
    $modal.find('p#description').html(json.description);
    $modal.find('p#ingredients').html(json.ingredients);
    $modal.find('p#instructions').html(json.instructions);
    $modal.find('a').attr( 'href', json.etsy_link );
    $modal.fadeIn(400);
  });
  $('.close-product-modal').on( 'click', function() {
    $modal.fadeOut(400);
  });

  // CONTACT FORM
  $('.tr-apoth-contact-form').on('submit', function(e) {
    e.preventDefault();
    // clear possible leftover messages
    $('.tr-apoth-submit-msg').fadeOut(0);
    // retrieve info
    let form    = $(this),
        name    = form.find('#name').val(),
        email   = form.find('#email').val(),
        message = form.find('#message').val(),
        ajaxUrl = form.data('url');
    // security check
    $('.is-invalid').removeClass('is-invalid');
    if ( name === '' )    { $('#name').addClass('is-invalid'); return; }
    if ( email === '' )   { $('#email').addClass('is-invalid'); return; }
    if ( message === '' ) { $('#message').addClass('is-invalid'); return; }
    // disable form during submission
    form.find('input, button, textarea').attr( 'disabled', 'disabled' ); // BUG: this doesn't do anything for some reason
    $('.js-formSubmission').fadeIn(400).css( "display", "block" );
    // AJAX
    $.ajax({
      url: ajaxUrl,
      type: 'post',
      dataType: 'text',
      data: {
        name: name,
        email: email,
        message: message,
        action: 'tr_apoth_contact_form_submit'
      },
      error: function( response ) {
        $('.js-formSubmission').fadeOut(0);
        $('.js-formError').fadeIn(400).css( "display", "block" );
        form.find('input, button, textarea').removeAttr( 'disabled' );
        console.log( 'AJAX ERROR: ' + response );
      },
      success: function( response ) {
        setTimeout( function() {
          $('.is-invalid').removeClass('is-invalid');
          $('.js-formSubmission').fadeOut(0);
          $('.js-formSuccess').fadeIn(400).css( "display", "block" );
          form.find('input, button, textarea').removeAttr( 'disabled' ).val('');
        }, 1200);
      }
    });
  });

  // RESPONSIVE MENU
  $('.js-navMenuToggle').on('click', function() {
    // toggle menu
    $('.tr-apoth-mobile-menu').slideToggle(400);
    // toggle header class for black color.
    $('.tr-apoth-header').toggleClass('black');
    // toggle between black logo and white logo
    $('.tr-apoth-logo-container img').toggle();
  });
  // This keeps the menu in a defaut state when resizing to avoid breakpoint errors
  $(window).resize( function() {
    $('.tr-apoth-header').removeClass('black');
    $('.tr-apoth-logo-container img.white').hide();
    $('.tr-apoth-logo-container img.black').show();
    $('.tr-apoth-mobile-menu').hide();
  });

// END OF JQUERY
});
