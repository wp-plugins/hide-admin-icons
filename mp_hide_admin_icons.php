<?php
/*
Plugin Name: Hide Admin Icons
Plugin URI: http://multipop.org/hide-admin-icons
Description: Removes the icons from the Admin menu (when expanded).
Version: 1.2
Author: Barry Ceelen
Author URI: http://multipop.org


This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function mp_remove_icons() {
    $url = get_settings('siteurl');
    $url = $url . '/wp-content/plugins/hide-admin-icons/mp_hide_admin_icons.css';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '" />';
}

add_action('admin_head', 'mp_remove_icons');
	
?>