<?php
/*
Plugin Name: Grey Admin Color Schemes
Plugin URI: http://toolstack.com/grey-admin-color-schemes
Description: Grey color schemes for WordPress 3.8's admin area.
Version: 1.5
Author: Greg Ross
Author URI: http://toolstack.com/

Compatible with WordPress 3.8+.

Read the accompanying readme.txt file for instructions and documentation.

Copyright (c) 2013 by Greg Ross

This software is released under the GPL v2.0, see license.txt for details
*/

/*
	Register color schemes.
*/
function GACSAddColorSchemes() 
	{
	$rtl = is_rtl() ? '-rtl' : '';

	wp_admin_css_color(	'classicgrey', __('Classic Grey'), plugins_url("classic/colors$rtl.css", __FILE__ ), array( '#464646', '#6D6D6D', '#F1F1F1', '#21759B' ) );
	wp_admin_css_color(	'moderngrey', __('Modern Grey'), plugins_url("modern/colors$rtl.css", __FILE__ ), array( '#464646', '#6D6D6D', '#D6D6D6', '#21759B' ) );
	wp_admin_css_color( 'atouchofblue', __('A Touch of Blue'), plugins_url("atouchofblue/colors$rtl.css", __FILE__ ), array( '#464646', '#6D6D6D', '#D6D6D6', '#0074A2' ) );
	wp_admin_css_color( 'postmodern', __('Post Modern Grey'), plugins_url("postmodern/colors$rtl.css", __FILE__ ), array( '#464646', '#6D6D6D', '#D6D6D6', '#F1F1F1' ) );
	}

add_action( 'admin_init' , 'GACSAddColorSchemes' );
