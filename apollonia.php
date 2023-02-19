<?php

/*
Plugin Name: Apollonia
Description: Customizations for the install apollonia.
Version: 17.6
Author: Surbma
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_script( 'apollonia-scripts', plugins_url( '', __FILE__ ) . '/js/apollonia-min.js', array( 'jquery' ), '17.4', true );
	wp_enqueue_style( 'apollonia-styles', plugins_url( '', __FILE__ ) . '/css/apollonia.css', array(), '17.4.4' );
}, 99999999 );
