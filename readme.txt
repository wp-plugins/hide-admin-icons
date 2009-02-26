=== Hide Admin Icons ===
Contributors: mendezki
Tags: admin, remove, menu, header, icon
Requires at least: 2.7
Tested up to: 2.7.1
Stable tag: trunk

Hides the icons in the expanded WordPress 2.7 admin menu.

== Description ==

The wonderful WordPress 2.7 admin interface sports nice icons in its navigation menu and page titles. Quite possibly WordPress 2.7.1 will have an option to turn these off, in line with, I suppose, the functionality to switch between the two icon sets selected during [Project Icon](http://wordpress.org/development/2008/11/the-results-of-project-icon/ "Project Icon").

In the meantime, Hide Admin Icons hides the admin page title icons & navigation menu icons.
Note: The menu icons remain visible when the menu is in its collapsed state.

In addition, some padding is added to navigation menu sub-items. To keep the arrow that highlights the current item centered appropriately after the padding is added, a custom image is loaded. This might lead to problems with right to left languages as I haven't had the chance to test and/or implement this.

If you'd prefer to keep the big icons next to the page titles just delete a few lines from the mp_hide_admin_icons.css file, the code to be removed has been highlighted.

**A few menu and icon related tips:**

* If you're looking to modify the icons in stead of removing them, try the [Tangofy](http://op111.net/p65 "Tangofy") plugin.
* The more horizontally inclined might like Ozh's [Admin Drop Down](http://planetozh.com/blog/my-projects/wordpress-admin-menu-drop-down-css/ "Admin Drop Down") plugin, all freshened up for 2.7.

**updates**

* 1.3.1 Nothing fancy, just edited the way the Hide Admin Icons css file is included in the admin header, you shouldn't notice any change really.
* 1.3 Now also removes the icons from admin page headers.
* 1.2 CSS fixed to reflect the 2.7-beta3-9826 html structure.
* 1.1 Fix for code error, tried to retrieve the .css file from incorrect directory. Thanks [Lecactus](http://lecactus.ru "Lecactus") ;)


== Screenshots ==

1. Before and after.

== Installation ==

1. Download and unzip the mp-hide-admin-icons.zip file
2. Copy the hide-admin-icons folder to your Wordpress plugin directory
3. Activate the plugin via the 'Plugins' menu in WordPress




