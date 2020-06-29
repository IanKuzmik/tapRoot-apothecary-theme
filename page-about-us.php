<?php
  /*
    @package tapRoot_apothecary
    ==============
      PAGE: About Us
    ==============
  */
  ?>

<?php get_header();?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="container-fluid tr-apoth-about-hero">
      <div class="row">
        <div class="col-5 tr-apoth-about-ipa-logo"></div>
        <div class="col-2 tr-apoth-floating-flower">
          <div class="tr-apoth-floating-flower-img"></div>
          <hr>
        </div>
        <div class="col-12 col-lg-5 text-center my-auto tr-apoth-about-hero-info-box">
          <h1>Who We Are</h1>
          <p>Shortly after moving to the Mountains of Montana from the City of New Orleans in 2016, we were struck by the wild beauty of the Gallatin National Forest. Walking through those woods, you feel like you’ve entered another world. Behind the lens of foliage is a wealth of diverse life full of potential. We learned just how useful a field guide can be…</p>
          <p>Thus, Xochis Apothecary was founded in 2017 in an effort to fund a quickly developing passion, and it has grown into so much more than that. We started out just making lip balm, and we’ve since delved into Tea, Incense, Syrups, and even Jewelry! Anything we can do with the herbs we try, and what goes to market is the best of our discoveries.</p>
        </div>
      </div>
    </div>

    <?php $image_array = explode( ',', esc_attr ( get_option('tr-apoth-images-about-setting') ) ); ?>

    <a name="source-anchor"></a>
    <div class="container-fluid tr-apoth-about-section source">
      <div class="row">
        <div class="col-12 col-lg-6 order-lg-2 tr-apoth-about-image" data-src="<?php echo $image_array[0]; ?>"></div>
        <div class="col-12 col-lg-6 order-lg-1 tr-apoth-about-info-box">
          <h1>Getting Close to the Source</h1>
          <hr>
          <p>You can tell the difference. And it’s easy to see why wild foraged ingredients, which grow in such a diverse ecosystem, free from the limits of monoculture, pack a richer, more layered flavor, and a potent effect.</p>
          <p>In addition to foraging, we work with extremely talented, local farmers and growers to access some of our best ingredients. Not only does quality make a difference, but supporting our farmers helps our community flourish.</p>
        </div>
      </div>
    </div>

    <a name="curiosity-anchor"></a>
    <div class="container-fluid tr-apoth-about-section curiosity black">
      <div class="row">
        <div class="col-12 col-lg-6 tr-apoth-about-image" data-src="<?php echo $image_array[1]; ?>"></div>
        <div class="col-12 col-lg-6 tr-apoth-about-info-box">
          <h1>Curiosity</h1>
          <hr>
          <p>Curiosity, if we had to pick one, is our main driving force. We’ve already discovered so much, and we learn something new everyday, like a new flavor combination for Tea, or a different technique for extracting Herbal Oils. With each new product we develop, it seems like our possibilities are endless.</p>
        </div>
      </div>
    </div>

    <a name="wisdom-anchor"></a>
    <div class="container-fluid tr-apoth-about-section wisdom">
      <div class="row">
        <div class="col-12 col-lg-6 order-lg-2 tr-apoth-about-image" data-src="<?php echo $image_array[2]; ?>"></div>
        <div class="col-12 col-lg-6 order-lg-1 tr-apoth-about-info-box">
          <h1>Wisdom</h1>
          <hr>
          <p>Much of our inspiration comes not only from what history has to offer us, but also from what our community has to offer us. We’re always grateful to find a story, and we’ve learned so much, from canning techniques to old folk remedies; we are surrounded by incredible artisans willing to teach anyone who is willing to learn.</p>
        </div>
      </div>
    </div>

    <a name="connection-anchor"></a>
    <div class="container-fluid tr-apoth-about-section connection black">
      <div class="row">
        <div class="col-12 col-lg-6 tr-apoth-about-image" data-src="<?php echo $image_array[3]; ?>"></div>
        <div class="col-12 col-lg-6 tr-apoth-about-info-box">
          <h1>Connection</h1>
          <hr>
          <p>We value the relationships we’ve developed with our local farmers, in fact, some of our best Tea ingredients come from farms around the Red Lodge area. Supporting local farmers is one of the best things you can do for the health of your community!</p>
        </div>
      </div>
    </div>

    <a name="craftsmanship-anchor"></a>
    <div class="container-fluid tr-apoth-about-section craftsmanship">
      <div class="row">
        <div class="col-12 col-lg-6 order-lg-2 tr-apoth-about-image" data-src="<?php echo $image_array[4]; ?>"></div>
        <div class="col-12 col-lg-6 order-lg-1 tr-apoth-about-info-box">
          <h1>Craftsmanship</h1>
          <hr>
          <p>Blending tea, making salves or syrups, rolling incense, it’s all a form of cooking, and cooking is more than just piecing together a recipe. Cooking involves all of our senses, from tastes and textures, to colors and fragrances, even the sounds of a subtle bubbling may instruct the process. We take all of this into consideration when developing a product, and the cooking process doesn’t stop until we’ve created something incredible.</p>
        </div>
      </div>
    </div>

    <a name="markets-anchor"></a>
    <div class="container-fluid tr-apoth-about-section black">
      <div class="row">
        <div class="col-12 col-lg-6 order-lg-2 tr-apoth-about-info-box">
          <div class="">
            <h1>Find us in Red Lodge, MT</h1>
            <hr>
            <p>Every Friday evening from 3:30-6:00, we set up with a great group of vendors at Lion's Park in our hometown of Red Lodge.</p>
          </div>
          <div class="left">
            <h1 class="left" >Find us in Cody, WY</h1>
            <hr class="left">
            <p class="left" >Barring a not-so-infrequent snowstorm, we drive down to Cody, WY every Saturday for the Farmers Market. In the summer, find us in the parking lot at 13th & Beck. In the winter, we’ll be in a building right across the street!</p>
          </div>
        </div>
        <div class="col-12 col-lg-6 order-lg-1 tr-apoth-about-map-container">
          <div class="tr-apoth-about-map" id="tr-apoth-about-map">
          </div>
        </div>
      </div>
    </div>

  </main>
</div>

<?php get_footer(); ?>
