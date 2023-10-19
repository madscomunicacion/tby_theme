<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

  $logo_url = get_theme_mod('custom_logo'); // Obtiene la ID de la imagen del logo
  $logo_image = wp_get_attachment_image_src($logo_url, 'full'); // Obtiene la URL de la imagen del logo
?>
<div class="fluid-header">

 
  
  <div class="logo-header">
    <a href="<?php echo home_url(); ?>">

      <?php
        if ($logo_image) {
          echo '<img src="' . esc_url($logo_image[0]) . '" alt="Logo">';
        } 
      ?>      
    </a>
  </div>  
  
  <div class="menu-header">

    <?php  
        wp_nav_menu(array(
          'theme_location' => 'menu-1',
          'menu_id' => 'headerMenu',
          'container' => 'div', 
          'menu_class' => 'menu-list'
      ));
    ?>

    <div>
      <div class="menu-toggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-1',
          'menu_id' => 'smartMenu',
          'container' => 'div',
          'menu_class' => 'smart-list'
        ));
      ?>
    </div>

  </div>

  <?php 
    //get_template_part( 'template-parts/head/social','media' ); 
  ?>
      
</div>
    