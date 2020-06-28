<?php
  /*
    @package tapRoot_apothecary
    =========================
      SECTION: Product Tabs
    =========================
  */
?>

<div class="tr-apoth-home-products-tabs-container">

  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active tr-apoth-home-products-tab" id="tea-tab" data-toggle="tab" href="#tea" role="tab" aria-controls="tea" aria-selected="true">Tea</a>
    </li>
    <li class="nav-item">
      <a class="nav-link tr-apoth-home-products-tab" id="incense-tab" data-toggle="tab" href="#incense" role="tab" aria-controls="incense" aria-selected="false">Incense</a>
    </li>
    <li class="nav-item">
      <a class="nav-link tr-apoth-home-products-tab" id="body-products-tab" data-toggle="tab" href="#body-products" role="tab" aria-controls="body-products" aria-selected="false">Body Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link tr-apoth-home-products-tab" id="syrup-tab" data-toggle="tab" href="#syrup" role="tab" aria-controls="syrup" aria-selected="false">Syrup</a>
    </li>
    <li class="nav-item">
      <a class="nav-link tr-apoth-home-products-tab" id="jewelry-tab" data-toggle="tab" href="#jewelry" role="tab" aria-controls="jewelry" aria-selected="false">Jewelry</a>
    </li>
    <li class="nav-item">
      <a class="nav-link tr-apoth-home-products-tab" id="sundries-tab" data-toggle="tab" href="#sundries" role="tab" aria-controls="sundries" aria-selected="false">Sundries</a>
    </li>
  </ul>

  <div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="tea" role="tabpanel" aria-labelledby="tea-tab">
      <div class="containe-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-info-box">
              <span class="tr-icon-coffee"></span>
              <h1>Tea</h1>
              <hr>
              <p>We design our handcrafted herbal blends with a  number of factors in mind, from traditional uses of herbs, to medicinal properties, to a complex and thematic flavor profile. Every blend is built for a purpose, be it immune boosting, relaxing and sleepy, or just simply to feature an awesome ingredient or flavor. Most importantly, we strive for each blend to be perfectly unique, so that every tea you have from us is unlike any you’ve had before</p>
              <?php if ( !empty( get_product_gallery( 'tea' ) ) ): ?>
                <a href="products/#tea-anchor"><button href="#">View Teas</button></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-img-container">
              <?php $imageArray = explode( ',', esc_attr( get_option('tr-apoth-images-products-tea-setting') ) ) ?>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[0]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[1]; ?>" alt="">
              <br>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[2]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[3]; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="incense" role="tabpanel" aria-labelledby="incense-tab">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-info-box">
              <span class="tr-icon-fire-2"></span>
              <h1>Incense</h1>
              <hr>
              <p>Our all natural, hand-rolled incense contains no volatile oils or fake colors. We start by grinding up real herbs, resins, and barks into a fine powder. Then we soak our bamboo sticks in a hot honey solution and roll them through. After they’ve gotten a few coats, they go onto a sheet pan, we crust them with extra herbs, and bake them for 3-4 hours. The result is a clean incense with scent that comes from its actual material, and not just the oil it was soaked in.<br><br>We're now selling loose Incense Powder as well! Everything the same, just not on a stick.</p>
              <?php if ( !empty( get_product_gallery( 'incense' ) ) ): ?>
                <a href="products/#incense-anchor"><button href="#">View Incense</button></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-img-container">
              <?php $imageArray = explode( ',', esc_attr( get_option('tr-apoth-images-products-incense-setting') ) ) ?>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[0]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[1]; ?>" alt="">
              <br>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[2]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[3]; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="body-products" role="tabpanel" aria-labelledby="body-products-tab">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-info-box">
              <span class="tr-icon-leaf"></span>
              <h1>Body Products</h1>
              <hr>
              <p>Our Salves and Creams are made with our own cold-pressed herbal oils. This process can take anywhere from 3 months to a year, but the result is a potent product built to tackle the cold, dry winters of Montana.<br><br>We also enjoy indulging in seasonal Bath Salts and Clay Masks for those ever necessary ‘spa days’. As a wise man once told me his mama told him, “treat yourself, don’t cheat yourself”</p>
              <?php if ( !empty( get_product_gallery( 'body' ) ) ): ?>
                <a href="products/#body-anchor"><button href="#">View Body Products</button></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-img-container">
              <?php $imageArray = explode( ',', esc_attr( get_option('tr-apoth-images-products-body-setting') ) ) ?>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[0]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[1]; ?>" alt="">
              <br>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[2]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[3]; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="syrup" role="tabpanel" aria-labelledby="syrup-tab">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-info-box">
              <span class="tr-icon-tint"></span>
              <h1>Syrup</h1>
              <hr>
              <p>We simmer Herbs, Berries, and Spices with fresh, local Honey for a minimum of three days before straining and canning our syrup, no added sugars, colors, or preservatives. These syrup are a wonderful way to weave herbals into your life, be it a spoonful at night, or as an ingredient for baking or cocktails, and even perfect for pancakes!<br><br>Right now, our Syrups are seasonal specialty items and extremely small batch. We make a Wild Elderberry Syrup every Fall; come grab some at the farmers market, we sell out quickly!</p>
              <?php if ( !empty( get_product_gallery( 'syrup' ) ) ): ?>
                <a href="products/#syrup-anchor"><button>View Syrup</button></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-img-container">
              <?php $imageArray = explode( ',', esc_attr( get_option('tr-apoth-images-products-syrup-setting') ) ) ?>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[0]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[1]; ?>" alt="">
              <br>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[2]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[3]; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="jewelry" role="tabpanel" aria-labelledby="jewelry-tab">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-info-box">
              <span class="tr-icon-diamond-1"></span>
              <h1>Jewelry</h1>
              <hr>
              <p>Herbal charms to keep your spirit happy and your style fly. Because we make them with repurposed, vintage chains and stones, each pair is unique by virtue, and features different wild-foraged and farm-sourced herbs and flowers</p>
              <?php if ( !empty( get_product_gallery( 'jewelry' ) ) ): ?>
                <a href="products/#jewelry-anchor"><button href="#">View Jewelry</button></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-img-container">
              <?php $imageArray = explode( ',', esc_attr( get_option('tr-apoth-images-products-jewelry-setting') ) ) ?>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[0]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[1]; ?>" alt="">
              <br>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[2]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[3]; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="sundries" role="tabpanel" aria-labelledby="sundries-tab">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-info-box">
              <span class="tr-icon-moon"></span>
              <h1>Sundries</h1>
              <hr>
              <p>Miscellaneous gris-gris and such to keep the good vibes flowing, because you can never have too many herbs in your life</p>
              <?php if ( !empty( get_product_gallery( 'sundries' ) ) ): ?>
                <a href="products/#sundries-anchor"><button href="#">View Sundries</button></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-12 col-lg-6 text-center">
            <div class="tr-apoth-home-product-img-container">
              <?php $imageArray = explode( ',', esc_attr( get_option('tr-apoth-images-products-sundries-setting') ) ) ?>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[0]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[1]; ?>" alt="">
              <br>
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[2]; ?>" alt="">
              <img class="tr-apoth-home-product-img" src="<?php echo $imageArray[3]; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
