<?php
  /*
    @package tapRoot_apothecary
    ==============
      PAGE: Products
    ==============
  */
  ?>

<?php get_header();?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <!-- <div class="container-fluid tr-apoth-products-featured">
      <div class="row">
        <div class="col-12">
          <?php //include( 'inc/section-templates/featured-products-carousel.php' ); ?>
        </div>
      </div>
    </div> -->

    <a name="tea-anchor"></a>
    <div class="container-fluid tr-apoth-products-tea tr-apoth-product-section">
      <div class="row">
        <div class="col-12 col-lg-6 order-lg-2 text-center my-auto">
          <div class="tr-apoth-product-img-container">
            <?php $image_array = explode( ',', esc_attr( get_option('tr-apoth-images-products-tea-setting') ) ) ?>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[0]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[1]; ?>" alt="">
            <br>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[2]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[3]; ?>" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-6 order-lg-1 text-center">
          <div class="tr-apoth-product-info-box">
            <span class="tr-icon-coffee"></span>
            <h1>Tea</h1>
            <hr>
            <p>We design our handcrafted herbal blends with a  number of factors in mind, from traditional uses of herbs, to medicinal properties, to a complex and thematic flavor profile. Every blend is built for a purpose, be it immune boosting, relaxing and sleepy, or just simply to feature an awesome ingredient or flavor. Most importantly, we strive for each blend to be perfectly unique, so that every tea you have from us is unlike any you’ve had before</p>
            <?php if ( !empty( get_product_gallery( 'tea' ) ) ): ?>
              <button id="tea" class="view-products-button">View Tea</button>
            <?php else: ?>
              <button class="product-not-available">Check Back Later!</button>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid tr-apoth-products-gallery tea">
      <div class="row">
        <div class="col-12">
          <?php echo get_product_gallery( 'tea' ); ?>
        </div>
      </div>
    </div>

    <a name="incense-anchor"></a>
    <div class="container-fluid tr-apoth-products-incense tr-apoth-product-section">
      <div class="row">
        <div class="col-12 col-lg-6 text-center my-auto">
          <div class="tr-apoth-product-img-container">
            <?php $image_array = explode( ',', esc_attr( get_option('tr-apoth-images-products-incense-setting') ) ) ?>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[0]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[1]; ?>" alt="">
            <br>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[2]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[3]; ?>" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-6 text-center">
          <div class="tr-apoth-product-info-box white">
            <span class="tr-icon-fire-2"></span>
            <h1>Incense</h1>
            <hr>
            <p>Our all natural, hand-rolled incense contains no volatile oils or fake colors. We start by grinding up real herbs, resins, and barks into a fine powder. Then we soak our bamboo sticks in a hot honey solution and roll them through. After they’ve gotten a few coats, they go onto a sheet pan, we crust them with extra herbs, and bake them for 3-4 hours. The result is a clean incense with scent that comes from its actual material, and not just the oil it was soaked in.</p>
            <?php if ( !empty( get_product_gallery( 'incense' ) ) ): ?>
              <button id="incense" class="view-products-button">View Incense</button>
            <?php else: ?>
              <button class="product-not-available">Check Back Later!</button>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid tr-apoth-products-gallery incense">
      <div class="row">
        <div class="col-12">
          <?php echo get_product_gallery( 'incense' ); ?>
        </div>
      </div>
    </div>

    <a name="body-anchor"></a>
    <div class="container-fluid tr-apoth-products-body tr-apoth-product-section">
      <div class="row">
        <div class="col-12 col-lg-6 order-lg-2 text-center my-auto">
          <div class="tr-apoth-product-img-container">
            <?php $image_array = explode( ',', esc_attr( get_option('tr-apoth-images-products-body-setting') ) ) ?>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[0]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[1]; ?>" alt="">
            <br>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[2]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[3]; ?>" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-6 order-lg-1 text-center">
          <div class="tr-apoth-product-info-box">
            <span class="tr-icon-leaf"></span>
            <h1>Body Products</h1>
            <hr>
            <p>Our Salves and Creams are made with our own cold-pressed herbal oils. This process can take anywhere from 3 months to a year, but the result is a potent product built to tackle the cold, dry winters of Montana.<br><br>We also enjoy indulging in seasonal Bath Salts and Clay Masks for those ever necessary ‘spa days’. As a wise man once told me his mama told him, “treat yourself, don’t cheat yourself”</p>
            <?php if ( !empty( get_product_gallery( 'body' ) ) ): ?>
              <button id="body" class="view-products-button">View Body Products</button>
            <?php else: ?>
              <button class="product-not-available">Check Back Later!</button>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid tr-apoth-products-gallery body">
      <div class="row">
        <div class="col-12">
          <?php echo get_product_gallery( 'body' ); ?>
        </div>
      </div>
    </div>

    <a name="syrup-anchor"></a>
    <div class="container-fluid tr-apoth-products-syrup tr-apoth-product-section">
      <div class="row">
        <div class="col-12 col-lg-6 text-center my-auto">
          <div class="tr-apoth-product-img-container">
            <?php $image_array = explode( ',', esc_attr( get_option('tr-apoth-images-products-syrup-setting') ) ); ?>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[0]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[1]; ?>" alt="">
            <br>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[2]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[3]; ?>" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-6 text-center">
          <div class="tr-apoth-product-info-box white">
            <span class="tr-icon-tint"></span>
            <h1>Syrup</h1>
            <hr>
            <p>We simmer Herbs, Berries, and Spices with fresh, local Honey for a minimum of three days before straining and canning our syrup, no added sugars, colors, or preservatives. These syrup are a wonderful way to weave herbals into your life, be it a spoonful at night, or as an ingredient for baking or cocktails, and even perfect for pancakes!<br><br>Right now, our Syrups are seasonal specialty items and extremely small batch. We make a Wild Elderberry Syrup every Fall; come grab some at the farmers market, we sell out quickly!</p>
            <?php if ( !empty( get_product_gallery( 'syrup' ) ) ): ?>
              <button id="syrup" class="view-products-button">View Syrup</button>
            <?php else: ?>
              <button class="product-not-available">Check Back Later!</button>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid tr-apoth-products-gallery syrup">
      <div class="row">
        <div class="col-12">
          <?php echo get_product_gallery( 'syrup' ); ?>
        </div>
      </div>
    </div>

    <a name="jewelry-anchor"></a>
    <div class="container-fluid tr-apoth-products-jewelry tr-apoth-product-section">
      <div class="row">
        <div class="col-12 col-lg-6 order-lg-2 text-center my-auto">
          <div class="tr-apoth-product-img-container">
            <?php $image_array = explode( ',', esc_attr( get_option('tr-apoth-images-products-jewelry-setting') ) ) ?>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[0]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[1]; ?>" alt="">
            <br>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[2]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[3]; ?>" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-6 order-lg-1 text-center">
          <div class="tr-apoth-product-info-box">
            <span class="tr-icon-diamond-1"></span>
            <h1>Jewelry</h1>
            <hr>
            <p>Herbal charms to keep your spirit happy and your style fly. Because we make them with repurposed, vintage chains and stones, each pair is unique by virtue, and features different wild-foraged and farm-sourced herbs and flowers</p>
            <?php if ( !empty( get_product_gallery( 'jewelry' ) ) ): ?>
              <button id="jewelry" class="view-products-button">View Jewelry</button>
            <?php else: ?>
              <button class="product-not-available">Check Back Later!</button>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid tr-apoth-products-gallery jewelry">
      <div class="row">
        <div class="col-12">
          <?php echo get_product_gallery( 'jewelry' ); ?>
        </div>
      </div>
    </div>

    <a name="sundries-anchor"></a>
    <div class="container-fluid tr-apoth-products-sundries tr-apoth-product-section">
      <div class="row">
        <div class="col-12 col-lg-6 text-center my-auto">
          <div class="tr-apoth-product-img-container">
            <?php $image_array = explode( ',', esc_attr( get_option('tr-apoth-images-products-sundries-setting') ) ) ?>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[0]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[1]; ?>" alt="">
            <br>
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[2]; ?>" alt="">
            <img class="tr-apoth-home-product-img" src="<?php echo $image_array[3]; ?>" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-6 text-center">
          <div class="tr-apoth-product-info-box white">
            <span class="tr-icon-moon"></span>
            <h1>Sundries</h1>
            <hr>
            <p>Miscellaneous gris-gris and such to keep the good vibes flowing, because you can never have too many herbs in your life</p>
            <?php if ( !empty( get_product_gallery( 'sundries' ) ) ): ?>
              <button id="sundries" class="view-products-button">View Sundries</button>
            <?php else: ?>
              <button class="product-not-available">Check Back Later!</button>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid tr-apoth-products-gallery sundries">
      <div class="row">
        <div class="col-12">
          <?php echo get_product_gallery( 'sundries' ); ?>
        </div>
      </div>
    </div>

    <div class="tr-apoth-product-modal">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-10 col-md-5 my-auto">
            <img class="product-modal-image" src="" alt="">
          </div>
          <div class="col-10 col-md-5 my-auto">
            <div class="modal-info-container">
              <h1></h1>
              <h2></h2>
              <hr>
              <p id="description"></p>
              <p id="ingredients"></p>
              <p id="instructions"></p>
              <a href="#" target="_blank"><button>Buy On Etsy</button></a>
            </div>
          </div>
          <span class="tr-icon-cancel-1 close-product-modal"></span>
        </div>
      </div>
    </div>

  </main>
</div>


<?php get_footer(); ?>
