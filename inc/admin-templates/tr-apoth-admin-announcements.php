<?php
/*
  @package tapRoot_apothecary
  =====================================
    ADMIN ANNOUNCEMENTS PAGE TEMPLATE
  =====================================
*/?>

<h1>Customize the What's New! Section</h1>
<?php settings_errors(); ?>
<form class="tr-apoth-admin-form" action="options.php" method="post">
  <?php settings_fields('tr-apoth-announcements-option-group'); ?>
  <?php do_settings_sections( 'xochis_announcements' ); ?>
  <?php submit_button(); ?>
</form>
