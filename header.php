<?php
  /*
    @package tapRoot_apothecary
    ==========
      HEADER
    ==========
  */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> dir="ltr">

  <head>
   <title><?php bloginfo( 'name' ); wp_title(); ?></title>
   <meta name="description" content="<?php bloginfo( 'description' ); ?>">
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
       <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
   <?php endif; ?>
   <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >
    <header class="tr-apoth-header">
      <div class="container-fluid tr-apoth-header-container">
        <div class="row">

          <div class="col-12 col-md-4 col-lg-2 my-auto">
            <div class="tr-apoth-logo-container">
              <a href="<?php echo get_home_url(); ?>">
                <img class="tr-apoth-header-logo black" src="<?php echo get_template_directory_uri().'/img/xoch-logo.png'; ?>" alt="Xochis">
                <img class="tr-apoth-header-logo white" src="<?php echo get_template_directory_uri().'/img/xoch-logo-white.png'; ?>" alt="Xochis">
              </a>
            </div>
          </div>

          <div class="col-4 col-md-2 col-lg-6 my-auto">
            <nav class="tr-apoth-navbar">
              <span class="tr-icon-menu-1 tr-apoth-nav-toggle-icon js-navMenuToggle"></span>
              <div class="tr-apoth-navbar-container m-auto">
                <?php
                wp_nav_menu( array(
                  'menu'        => 'primary',
                  'link_before' => '<span class="nav-item nav-link tr-apoth-nav-item">',
                  'link_after'  => '</span>'
                ) );
                ?>
              </div>
            </nav>
          </div>

          <div class="col-8 col-md-6 col-lg-4 my-auto">
            <div class="tr-apoth-header-external-links">
              <a class="tr-apoth-external-link tr-apoth-etsy-external-link" href="https://www.etsy.com/shop/XochisApothecary" target="_blank">Shop Our Etsy</a>
              <a class="tr-apoth-external-link tr-icon-facebook" href="https://www.facebook.com/xochis.apothecary/" target="_blank"></a>
              <a class="tr-apoth-external-link tr-icon-twitter" href="https://twitter.com/xochis_apoth" target="_blank"></a>
              <a class="tr-apoth-external-link tr-icon-instagram" href="https://www.instagram.com/xochis.apothecary/" target="_blank"></a>
            </div>
          </div>

        </div>
      </div>

      <div class="contanier-fluid tr-apoth-mobile-menu">
        <div class="row">
          <div class="col-12">
            <div class="tr-apoth-mobile-navbar-container m-auto">
              <?php
              wp_nav_menu( array(
                'menu'        => 'primary',
                'link_before' => '<span class="nav-item nav-link tr-apoth-nav-item">',
                'link_after'  => '</span>'
              ) );
              ?>
            </div>
          </div>
        </div>
      </div>

    </header>
