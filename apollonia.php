<?php

/*
Plugin Name: Apollonia
Description: Customizations for the install apollonia.
Version: 1.14.0
Author: Surbma
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

function apollonia_enqueue_scripts() {
	wp_enqueue_script( 'apollonia-scripts', plugins_url( '', __FILE__ ) . '/js/apollonia-min.js', array( 'jquery' ), '1.13.0', true );
	wp_enqueue_style( 'apollonia-styles', plugins_url( '', __FILE__ ) . '/css/apollonia.css', array(), '1.13.0' );
}
add_action( 'wp_enqueue_scripts', 'apollonia_enqueue_scripts', 999 );
