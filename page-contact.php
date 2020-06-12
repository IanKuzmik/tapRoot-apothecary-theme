<?php
  /*
    @package tapRoot_apothecary
    ==============
      PAGE: Contact
    ==============
  */
  ?>

<?php get_header();?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="container-fluid tr-apoth-contact-info-container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-2 order-md-2 tr-apoth-contact email">
          <span class="tr-icon-envelope-open-o"></span>
        </div>
        <div class="col-12 col-md-3 order-md-1 tr-apoth-contact email text-center">
          <h1>By Email</h1>
          <a class="tr-apoth-email-link" href="mailto:xochis.apothecary@gmail.com">xochis.apothecary@gmail.com</a>
        </div>
        <div class="col-12 col-md-2 order-md-3 tr-apoth-contact person">
          <span class="tr-icon-handshake-o tr-apoth-handshake-icon-fix"></span>
        </div>
        <div class="col-12 col-md-3 order-md-4 tr-apoth-contact person text-center">
          <h1>In Person</h1>
          <p>Find us at the Farmers Market</p>
          <a href="about/#markets-anchor"><button type="button" name="button">Learn More</button></a>
        </div>
      </div>

    </div>
    <div class="tr-apoth-contact-form-container text-center">
      <form class="tr-apoth-contact-form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

        <h1>Or Write us a Message!</h1>

        <div class="tr-apoth-form-group">
          <input type="text" class="tr-apoth-form-control tr-apoth-form-control" placeholder="Your Name..." id="name" name="name">
          <small class="invalid-feedback tr-apoth-form-control-msg">Your Name is Required</small>
        </div>

        <div class="tr-apoth-form-group">
          <input type="email" class="tr-apoth-form-control tr-apoth-form-control" placeholder="Your Email..." id="email" name="email">
          <small class="invalid-feedback tr-apoth-form-control-msg">Your Email is Required</small>
        </div>

        <div class="tr-apoth-form-group">
          <textarea class="tr-apoth-form-control tr-apoth-form-control" name="message" placeholder="Your Message..." id="message"></textarea>
          <small class="invalid-feedback tr-apoth-form-control-msg">Your Comment is Required</small>
        </div>

        <div>
          <button type="submit" class="" name="button">Submit</button>
          <small class="valid-feedback tr-apoth-form-control-msg tr-apoth-submit-msg js-formSubmission">Submission in process, please wait...</small>
          <small class="valid-feedback tr-apoth-form-control-msg tr-apoth-submit-msg js-formSuccess">Message sent. Thank You!</small>
          <small class="invalid-feedback tr-apoth-form-control-msg tr-apoth-submit-msg js-formError">Something seems to have gone wrong</small>
        </div>

      </form>
    </div>
  </main>
</div>


<?php get_footer(); ?>
