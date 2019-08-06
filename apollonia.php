<?php

/*
Plugin Name: Apollonia
Description: Customizations for the install apollonia.
Version: 16.1
Author: Surbma
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

function apollonia_enqueue_scripts() {
	wp_enqueue_script( 'apollonia-scripts', plugins_url( '', __FILE__ ) . '/js/apollonia-min.js', array( 'jquery' ), '16.1', true );
	wp_enqueue_style( 'apollonia-styles', plugins_url( '', __FILE__ ) . '/css/apollonia.css', array(), '16.1' );
}
add_action( 'wp_enqueue_scripts', 'apollonia_enqueue_scripts', 999 );
