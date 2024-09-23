<?php 
/*
	Plugin Name: Disable Lazy Load
	Plugin URI: https://perishablepress.com/wordpress-disable-lazy-loading/
	Description: Activate this plugin to disable WP Lazy Loading.
	Tags: lazy load, lazyload, images, lazy, load
	Author: Jeff Starr
	Author URI: https://plugin-planet.com/
	Donate link: https://monzillamedia.com/donate.html
	Contributors: specialk
	Requires at least: 5.4
	Tested up to: 6.6
	Stable tag: 2.1
	Version:    2.1
	Requires PHP: 5.6.20
	Text Domain: disable-lazy-loading
	Domain Path: /languages
	License: GPL v2 or later
*/

/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 
	2 of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	with this program. If not, visit: https://www.gnu.org/licenses/
	
	Copyright 2024 Monzilla Media. All rights reserved.
*/

if (!defined('ABSPATH')) die();

add_filter('wp_lazy_loading_enabled', '__return_false');

function disable_lazy_load_featured_images($attr, $attachment = null) {
	$attr['loading'] = 'eager';
	return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'disable_lazy_load_featured_images');