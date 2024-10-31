=== Recently Viewed Products ===

Contributors: rajarora795
Donate link: PayPal.me/rajarora795
Tags: Woocommerce recently viewed products, Recently viewed products, Wc Recently viewed products, Recent Products
Requires at least: 4.0
Tested up to: 5.8.1
Stable tag: trunk
Requires PHP: 7.0
WC requires at least: 3.0
WC tested up to: 5.8
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Shows recently viewed products by logged/unlogged user with/without slider on a Woocommerce store

== Description ==

* Shows recently viewed products by user on your Woocommerce store
        (i) on product page  (ii) on shop page (iii) on cart page
* Products can be wrapped in a slider(slick slider)
* If the user is logged in then it will create an entry for that particular user_id
    and can retrieve all the products viewed by that user.
* If however user is not logged in it would create a COOKIE to store ids of the viewed products.
* You can use
  [rvp_show no_products="4" slider_use="true"]
  In this case no_products is the the no of slides in view.
  Replace 4 with the number of slides/products required in view.
  You can set slider_use="true" or slider_use="false"

  Also you can use the shortcode
  [rvp_show]
  In this case the shortcode takes settings from the Settings Page i.e.
     1)Slider is to be used or not
     2)How many slides to view etc.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Plugin Name screen to configure the plugin

== Frequently Asked Questions ==

= How to show all viewed products =

 Set the number of products on the settings page to -1.If using Slider set Total no of products in slider to -1

= No arrows are visible / slider not working =

Please ensure Total no of products in slider > No of slides in the view

= Some text-boxes are not filled n the Settings Page

If some value are not filled , defaults are taken. For eg. default value of no of products is 3


== Screenshots ==

1. Plugin Settings page
2. Recently Viewed Products
2. Recently Viewed Products (with slider)


== Changelog ==
Version 1.1


== Upgrade Notice ==

Minor Upgrade
