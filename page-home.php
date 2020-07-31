<?php
  /*
    @package tapRoot_apothecary
    ==============
      PAGE: Home
    ==============
  */
  ?>

<?php get_header();?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="container-fluid tr-apoth-home-hero">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-7 table tr-apoth-home-hero-left text-center align-self-center">
          <div class="tr-apoth-home-hero-title-container table-cell">
            <h1 class="tr-apoth-home-hero-title tr-text-xochis">Xochis</h1>
            <h1 class="tr-apoth-home-hero-title tr-text-apothecary">Apothecary</h1>
          </div>
        </div>
        <div class="col-12 col-md-5 tr-apoth-home-hero-right text-center">
          <?php include( 'inc/section-templates/home-carousel.php' ); ?>
        </div>
      </div>
    </div>

    <div class="container-fluid tr-apoth-home-feature">
      <div class="row">
        <div class="col-12 col-md-6 my-auto">
          <div class="tr-apoth-whats-new">
            <?php echo get_option('tr-apoth-whats-new-setting'); ?>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <?php get_featured_product( get_option('tr-apoth-featured-product-setting') ); ?>
        </div>
      </div>
    </div>

    <div class="container-fluid tr-apoth-home-quote">
      <div class="row justify-content-center">
        <div class="col-10 text-center">
          <span class="tr-apoth-home-quote-text ">“In the Presence of Living Organisms... Never Forget that Life Demands to Have its Characterisitcs Recognized, and its Potential Channeled”</span>
        </div>
      </div>
    </div>

    <div class="container-fluid tr-apoth-home-products">
      <div class="row justify-content-center">
        <div class="tr-apoth-product-intro-text col-11 col-sm-10 col-md-8 text-center">
          <h1 class="tr-apoth-h1-text">Discover Our Products</h1>
          <p>	All of our products are designed and handcrafted personally by Katy herself. We only use the best parts of ingredients we forage or find to minimize unnecessary filler in our final product and ensure potency. We use absolutely no artificial flavors, colors, scents, anything. And whatever is left over after this pruning process is recycled for other purposes, the most common being food for our rabbits. Nothing goes to waste here.</p>
	        <p>We take pride in being a small batch company. Every batch of herbs is different, especially ones we’ve foraged from the wild or gathered from gardens. As any chef will tell you, ‘salt to taste’ can make or break a recipe. We treat our creations in the same regard, and no batch is complete without a final taste test or smell test or feel test, often resulting in a small tweak of ratios until we get it just right. Part of this approach means we don't keep a consistent inventory. We work with what we have, using it to drive the creative process. Some of our product categories may be empty for a time; our syrups for example, are very seasonal. Be sure to check back (or send us an email) if you're interested in a particular product we do't have currently listed!</p>
	        <p>Working with herbs is both a business and a hobby for us. Mixing and tasting tea, experimenting with new scents, seeing how many different ways we can process the same herb, it’s fun for us. And there's something satisfying about drinking a tea, or using a salve, and knowing that everything that went into it is something that can be found in the wild, made in a simple kitchen. We hope some of that energy translates, whether you're brewing yourself a cup, creating an atmosphere, or treating yourself to a spa day.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12">
          <?php include( 'inc/section-templates/product-tabs.php' ); ?>
        </div>
      </div>
    </div>

    <div class="container-fluid tr-apoth-home-quote">
      <div class="row justify-content-center">
        <div class="col-10 text-center">
          <span class="tr-apoth-home-quote-text ">“Change Returns Sucess”</span>
        </div>
      </div>
    </div>

    <div class="container-fluid tr-apoth-home-instagram">
      <div class="row justify-content-center">
        <div class="col-8 text-center">
          <h1 class="tr-apoth-h1-text">Follow Our Journey</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 text-center tr-apoth-instagram-images-container p-0">
          <?php echo tr_apoth_display_home_instagram(); ?>
        </div>
      </div>
    </div>

    <div class="container-fluid tr-apoth-home-info">

      <div class="row">
        <div class="col-12 col-md-4 text-center">
          <div class="tr-apoth-home-info-box">
            <span class="tr-icon-envelope-open-o"></span>
            <h1>Contact Us</h1>
            <a class="tr-apoth-email-link" href="mailto:xochis.apothecary@gmail.com">xochis.apothecary@gmail.com</a>
          </div>
        </div>
        <div class="col-12 col-md-4 text-center">
          <div class="tr-apoth-home-info-box">
            <span class="tr-icon-handshake-o tr-apoth-handshake-icon-fix"></span>
            <h1>Come Visit</h1>
            <p>Find us at the Farmers Market</p>
            <a href="about/#markets-anchor"><button type="button" name="button">Learn More</button></a>
          </div>
        </div>
        <div class="col-12 col-md-4 text-center">
          <div class="tr-apoth-home-info-box">
            <span class="tr-icon-emo-coffee"></span>
            <h1>Drink Tea!</h1>
            <p>Always a Good Idea</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="tr-apoth-home-map-container">
            <div class="tr-apoth-home-map" id="tr-apoth-home-map">
            </div>
          </div>
        </div>
      </div>

    </div>

  </main>
</div>

<?php get_footer(); ?>
