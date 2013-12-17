<?php
/*
Plugin Name: Grey Admin Color Scheme
Plugin URI: http://wordpress.org/plugins/grey-admin-color-schemes
Description: Grey color schemes for WordPress 3.8's admin area.
Version: 1.2
Author: Greg Ross
Author URI: http://ToolStack.com/

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
	wp_admin_css_color(	'classicgrey', __('Classic Grey'), plugins_url("classic/colors.css", __FILE__ ), array( '#464646', '#6D6D6D', '#F1F1F1', '#21759B' ) );
	wp_admin_css_color(	'moderngrey', __('Modern Grey'), plugins_url("modern/colors.css", __FILE__ ), array( '#464646', '#6D6D6D', '#D6D6D6', '#21759B' ) );
	}

add_action( 'admin_init' , 'GACSAddColorSchemes' );
