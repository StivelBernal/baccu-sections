<?php
/*
 * Plugin Name: Ser Sections
 * Description: plugin para agregar templates reutilizables a las páginas
 * Version: 1.0
 * Author: Ser Soluciones SAS
 * Author URI: https://sersoluciones.com/   
 * Text Domain: ser_baccu
 */

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

/**Setup */




/**Includes */
include( 'includes/activate.php ' );
include( 'includes/shortcodes/sections.php' );
include( 'includes/shortcodes/visualcomposer.php' );
/**activa un custom type post colegio*/
include( 'includes/init.php ' );

/**Hooks */
register_activation_hook(__FILE__, 'ser_activate_plugin');
add_action( 'init', 'ser_baccu_init'); 

/**Shortcodes */

add_shortcode( 'carrusel-clientes' , 'ser_section_carrusel_clientes' );
add_shortcode( 'ser-price-container' , 'ser_section_price_container' );
add_shortcode( 'ser-price-container-end' , 'ser_section_price_container_end' );
add_shortcode( 'ser-price-item' , 'ser_section_price_item' );

