<?php
/* Plugin Name: Floating Theme List

Plugin URI: http://www.eshel.us/wordpress/plugins/Floating_Theme_List
Description: Based on Theme Switcher and Theme Switcher Reloaded, this plugin detects the existing active plugin and uses it to display a floating list of available themes, to enable creating a Theme demo site
Version: 1.0
Author: Moshe Eshel
Author URI: http://www.eshel.us

Copyright 2012  Moshe Eshel  (email : moshe@eshel.us)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/
function filter_themeswitchstyle () 
{
	if (function_exists('wp_theme_switcher')) {
		echo "<style>
			   #themeswitcher {
					position:absolute;
					top:30px;
					left:0px;
					z-index:9999;
					list-style:none;
					display:inline;
				}
			  </style>";
	} 
	
}
add_filter ( 'wp_head', 'filter_themeswitchstyle', 998);

function filter_themeswitchdiv () 
{
	if (function_exists('wp_theme_switcher')) {
		echo  wp_theme_switcher('dropdown');
	} 
}
add_filter ( 'wp_head', 'filter_themeswitchdiv', 999);
?>