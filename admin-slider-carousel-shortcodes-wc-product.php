<?php

/*

  Plugin Name: Slider-Carousel-Shortcodes-WC-Product

  Description: Include a Slider / Carousel effect in WooCommerce Shortcodes

  Author: Marco Barbadoro

  Author URI: https://www.marcobarbadoro.it

  Plugin URI: https://www.marcobarbadoro.it/woo/owl-carousel/

  License:     GPL2

  License URI: https://www.gnu.org/licenses/gpl-2.0.html

  Version: 1.0.2

Tested up to: 5.8
Stable tag: 1.0.2
WC requires at least: 4.0


 */








/*  check network activation */



if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {





			







 include( 'slider-carousel-shortcodes-wc-product.php' );











		



}



