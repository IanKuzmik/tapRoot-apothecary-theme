<?php
  /*
    @package tapRoot_apothecary
    =========================
      SECTION: Featured Products Carousel
    =========================
  */
?>

<div id="tr-apoth-bs-carousel" class="carousel slide tr-apoth-featured-products-carousel" data-ride="carousel">

  <ol class="carousel-indicators tr-apoth-carousel-dots">
    <li data-target="#tr-apoth-bs-carousel" data-slide-to="0" class="tr-apoth-dot active"></li>
    <li data-target="#tr-apoth-bs-carousel" data-slide-to="1" class="tr-apoth-dot"></li>
    <li data-target="#tr-apoth-bs-carousel" data-slide-to="2" class="tr-apoth-dot"></li>
    <li data-target="#tr-apoth-bs-carousel" data-slide-to="3" class="tr-apoth-dot"></li>
  </ol>

  <div class="carousel-inner tr-apoth-carousel-container" role="listbox">

    <div class="carousel-item tr-apoth-carousel-item active">
      <div class="d-block w-100">
        <div class="container-fluid tr-apoth-featured-product-container">
          <div class="row justify-content-center">
            <div class="col-5">
              <span class="tr-icon-coffee"></span>
              <h1>Rip Van Winkler</h1>
              <hr>
              <p class="desc">~Sleepy Herbal Tea~</p>
              <p class="price">$20</p>
              <p class="ingredients">A pairing of sedative and muscle relaxers come together to produce a most restful slumber</p>
              <a href="#tea-anchor"><button>Learn More</button></a>
            </div>
            <div class="col-5 text-center">
              <img src="<?php echo wp_get_upload_dir()['baseurl'].'/2020/03/Rip-Van-Winkler-Front-e1585693020154.jpeg'; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item tr-apoth-carousel-item">
      <div class="d-block w-100">
        <div class="container-fluid tr-apoth-featured-product-container">
          <div class="row justify-content-center">
            <div class="col-5">
              <span class="tr-icon-fire-2"></span>
              <h1>Lunar Lavender</h1>
              <hr>
              <p class="desc">~Handcrafted Herbal Incense~</p>
              <p class="price">$6</p>
              <p class="ingredients">Ingredients: Lavender Flower, Frankincense Tears, Hibiscus Flower, Rosehip Seed, Gum Arabic</p>
              <a href="#incense-anchor"><button>Learn More</button></a>
            </div>
            <div class="col-5 text-center">
                <img src="<?php echo wp_get_upload_dir()['baseurl'].'/2020/03/Lunar-Lavender-e1585685834182.jpeg'; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item tr-apoth-carousel-item">
      <div class="d-block w-100">
        <div class="container-fluid tr-apoth-featured-product-container">
          <div class="row justify-content-center">
            <div class="col-5">
              <span class="tr-icon-diamond-1"></span>
              <h1>Gris Gris</h1>
              <hr>
              <p class="desc">~Handcrafted Herbal Jewelry~</p>
              <p class="price">$25</p>
              <p class="ingredients">Garlic & Marigold</p>
              <a href="#jewelry-anchor"><button>Learn More</button></a>
            </div>
            <div class="col-5 text-center">
              <img src="<?php echo wp_get_upload_dir()['baseurl'].'/2020/03/Gris-Gris-e1585693042377.jpeg'; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item tr-apoth-carousel-item">
      <div class="d-block w-100">
        <div class="container-fluid tr-apoth-featured-product-container">
          <div class="row justify-content-center">
            <div class="col-6">
              <span class="tr-icon-leaf"></span>
              <h1>Juniper & Comfrey Healing Oil</h1>
              <hr>
              <p class="desc">~With Wild-Foraged Juniper and Local Comfrey~</p>
              <p class="price">$32</p>
              <p class="ingredients">You’ll find that just a few drops of this potent oil goes a long way. Ideal for repairing scraped and damaged skin, soothing sore muscles, or simply a daily moisturization, you really can’t go wrong.</p>
              <a href="#body-anchor"><button>Learn More</button></a>
            </div>
            <div class="col-4 text-center">
              <img src="<?php echo wp_get_upload_dir()['baseurl'].'/2020/03/Juniper-and-Comfrey-Oil-e1585693072692.jpeg'; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <a class="carousel-control-prev tr-apoth-carousel-control" href="#tr-apoth-bs-carousel" role="button" data-slide="prev">
    <span class="tr-icon-left-open tr-apoth-carousel-arrow" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next tr-apoth-carousel-control" href="#tr-apoth-bs-carousel" role="button" data-slide="next">
    <span class="tr-icon-right-open tr-apoth-carousel-arrow" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
