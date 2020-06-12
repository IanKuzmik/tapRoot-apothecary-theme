<?php
/*
  @package tapRoot_apothecary
  =================================
    ADMIN INSTAGRAM PAGE TEMPLATE
  =================================
*/?>

<h1>Customize the Instagram Feed</h1>
<?php settings_errors(); ?>
<form class="tr-apoth-admin-form" action="options.php" method="post">
  <?php settings_fields('tr-apoth-instagram-option-group'); ?>
  <?php do_settings_sections( 'xochis_instagram' ); ?>
  <?php submit_button(); ?>
</form>
