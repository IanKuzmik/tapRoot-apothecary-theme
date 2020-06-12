<?php
/*
  @package tapRoot_apothecary
  ===================================
    ADMIN GOOGLE MAPS PAGE TEMPLATE
  ===================================
*/?>

<h1>Customize Google Maps</h1>
<?php settings_errors(); ?>
<form class="tr-apoth-admin-form" action="options.php" method="post">
  <?php settings_fields('tr-apoth-google-maps-option-group'); ?>
  <?php do_settings_sections( 'xochis_google_maps' ); ?>
  <?php submit_button(); ?>
</form>
