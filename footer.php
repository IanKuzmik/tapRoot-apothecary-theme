<?php
/*
  @package tapRoot_apothecary
  ==========
    FOOTER
  ==========
*/
 ?>

    <footer class="tr-apoth-footer">
      <div class="container-fluid">
        <div class="row">

          <div class="col-12 col-sm-6 col-md-2 mt-3 mt-md-0">
            <nav class="tr-apoth-navbar-footer-nav">
              <span class="tr-apoth-footer-cat-title">Map</span>
              <div class="tr-apoth-navbar-footer-container">
                <?php
                wp_nav_menu( array(
                  'menu'        => 'primary',
                  'link_before' => '<span class="tr-apoth-nav-footer-item">',
                  'link_after'  => '</span>'
                ) );
                ?>
              </div>
            </nav>
          </div>

          <div class="col-12 col-sm-6 col-md-4 mt-3 mt-md-0">
              <span class="tr-apoth-footer-cat-title">Find Us on Etsy</span>
              <div class="tr-apoth-footer-etsy-container text-center">
                <span class="tr-apoth-footer-etsy-item tr-apoth-footer-etsy-icon tr-icon-etsy"></span>
                <a class="tr-apoth-footer-etsy-item tr-apoth-footer-etsy-link" href="https://www.etsy.com/shop/XochisApothecary" target="_blank">etsy.com/shop/XochisApothecary</a>
                <hr class="tr-apoth-footer-etsy-item tr-apoth-footer-etsy-hr">
                <a href="https://www.etsy.com/shop/XochisApothecary" target="_blank"><button class="tr-apoth-footer-etsy-item tr-apoth-footer-etsy-shop-link mx-auto">Shop</button></a>
              </div>
          </div>

          <div class="col-12 col-sm-6 col-md-3 mt-3 mt-md-0">
            <span class="tr-apoth-footer-cat-title">Contact</span>
            <div class="tr-apoth-footer-contact-container text-center">
              <img class="tr-apoth-footer-logo" src="<?php echo get_template_directory_uri().'/img/xoch-logo.png'; ?>" alt="Xochis">
              <hr class="tr-apoth-footer-contact-hr">
              <p class="tr-apoth-footer-contact-address">Red Lodge, MT 59068</p>
              <a class="tr-apoth-footer-email-link" href="mailto:xochis.apothecary@gmail.com" target="_blank">xochis.apothecary@gmail.com</a>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-3 mt-3 mt-md-0">
            <span class="tr-apoth-footer-cat-title">Follow Us</span>
            <div class="tr-apoth-footer-social-container text-center">
              <div class="tr-apoth-footer-social-links">
                <a class="tr-apoth-footer-social-link tr-icon-facebook" href="https://www.facebook.com/xochis.apothecary/" target="_blank"></a>
                <a class="tr-apoth-footer-social-link tr-icon-twitter" href="https://twitter.com/xochis_apoth" target="_blank"></a>
                <a class="tr-apoth-footer-social-link tr-icon-instagram" href="https://www.instagram.com/xochis.apothecary/" target="_blank"></a>
              </div>
            </div>
          </div>

        </div>

        <div class="row tr-apoth-bottom-bar">
          <div class="col-12 col-sm-8 col-md-6 order-sm-2">
            <div class="tr-apoth-bottom-bar-nav">
              <?php
              wp_nav_menu( array(
                'menu'        => 'primary',
                'link_before' => '<span class="tr-apoth-bottom-bar-nav-item">',
                'link_after'  => '</span>'
              ) );
              ?>
            </div>
          </div>
          <div class="col-12 col-sm-4 col-md-6 order-sm-1">
            <p>Copyright <?php echo date('Y'); ?> - Xochis Apothecary</p>
          </div>
        </div>

      </div>
    </footer>
    <?php wp_footer(); ?>

  </body>
</html>
