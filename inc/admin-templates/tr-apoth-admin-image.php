<?php
/*
  @package tapRoot_apothecary
  ========================
    ADMIN PAGE TEMPLATE
  ========================
*/?>

<h1>Gerneral Options</h1>

<div class="tr-apoth-admin-general-tabs-container">

  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link tr-apoth-admin-products-tab active" id="products-tab" data-toggle="tab" href="#products" role="tab" aria-controls="products" aria-selected="true">Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link tr-apoth-admin-about-tab" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
    </li>
  </ul>

  <div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="products" role="tabpanel" aria-labelledby="products-tab">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <?php settings_errors(); ?>
            <form class="tr-apoth-admin-form" action="options.php" method="post">
              <?php settings_fields('tr-apoth-images-products-option-group'); ?>
              <?php do_settings_sections( 'xochis_images' ); ?>
              <?php submit_button(); ?>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <?php settings_errors(); ?>
            <form class="tr-apoth-admin-form" action="options.php" method="post">
              <?php settings_fields('tr-apoth-images-about-option-group'); ?>
              <?php do_settings_sections( 'xochis_images_about' ); ?>
              <?php submit_button(); ?>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
