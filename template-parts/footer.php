<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$logo_url = get_theme_mod('custom_logo'); // Obtiene la ID de la imagen del logo
$logo_image = wp_get_attachment_image_src($logo_url, 'full'); // Obtiene la URL de la imagen del logo

?>
<footer class="fluid-container">
    <div id="footer-main" >        
        <div class="container footer-flex">
            <div class="columna1">
                <div>
                    <?php
                        if ($logo_image) {
                        echo '<img src="' . esc_url($logo_image[0]) . '" alt="Logo">';
                        }
                    ?>
                </div>
                <div class="footer-list">
                    <p class="footer-titulo">
                        The Best You
                    </p>
                    <?php
                        wp_nav_menu(array
                            (
                                'theme_location' => 'footer_legal',
                                'menu_id' => 'footer-legar',
                                'container'      => false,
                                'depth'          => 1,
                                'fallback_cb'    => false,
                        )); ?>
            
                </div>
            </div>
            <div class="columna2">
                <div class="footer-list">
                    <p class="footer-titulo">
                        Contact
                    </p>
                    <?php
                        wp_nav_menu(array
                            (
                                'theme_location' => 'footer_contact',
                                'menu_id' => 'footer-contact',
                                'container'      => false,
                                'depth'          => 1,
                                'fallback_cb'    => false,
                        ));
                    ?>
                </div>
            </div>
        </div>     
    </div>
    <div id="footer-legal" >
        <div class="container">
            <?php
                if (is_active_sidebar('footer_legal_widget')) {
                    dynamic_sidebar('footer_legal_widget');
                }
            ?>
        </div>
    </div>
</footer>