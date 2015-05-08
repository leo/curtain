=== Curtain ===

Contributors: mindrun
Tags: maintenance, mode, curtain, coming soon, under construction, unavailable, 503 error, admin, landing page
Requires at Least: 4.0
Tested Up To: 4.2
Stable tag: 1.0.2
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Hide your website behind something fluffy.

== Description ==

This plugin adds a tiny option to your WordPress Back-End which allows you to control the maintenance mode. It's perfect if you would like to change something on your site without everyone noticing.

**Unique features:**

* Informs search engines about the maintenance
* Clean & simple interface
* Change the maintenance mode status in the admin bar
* Automatically adapts to your theme's look
* Theme- and plugin-developers are able to add custom stylesheets/scripts
* Allow specific visitors (based on IP) to skip the maintenance notice

After enabling the maintenance mode, all visitors will see a small page which shows a short notice about why your site is maintenance. If you don't like the default look of this page, you can change all the texts and some other things like the background or the user roles which are allowed to manage it's status right in the admin-area.

All aspects of the plugin are optimized for the highest performance. It's also possible for other theme- or plugin-developers to customize the appereance of the page by [hooking](faq) into curtain's code and adding custom stylesheets.

== Frequently Asked Questions ==

= How can I support you? =
You can help me by leaving a [review](/support/view/plugin-reviews/curtain) (so that I know what I can do better) or by telling your friends how great this plugin actually is. If you own a blog or something similar you're also free to write some words about it. Thanks! :)

= What about search engines? =
You don't need to worry about that they might stop crawling your website because they can't access it (that's usually the case). Curtain is sending the error-code **503** to all clients and bots that are visiting your site. This helps search engines to unterstand that you site is just in maintenance and not really down.

= How can I (as dev) hook into the notice page? =
If you want to load a stylesheet within a template or plugin you usually do that by hooking into **wp_head**, right? And if you would like to add custom stylesheets or scripts to curtain, just use **ct_head** as function to hook into.

= Which languages do you support? =
Currently **German** and **English**, more will follow soon.

== Screenshots ==

1. Admin bar option
2. Settings
3. Visitor notice

== Changelog ==

= 1.0.2 =
* A security bug which allowed users to enable/disable the maintenance mode without logging in has been fixed
* The admin bar icon will now also be shown on the front-end
* A bug was fixed which disallowed some users to activate the maintenance mode

= 1.0.1 =
* Reset button now appears also when the background is being changed
* Better compatibility with PHP versions (> 5.4)
* You can now allow visitors with specific IPs to skip the maintenance mode
* The login link is now also visible on small Tablets like the iPad mini
* Now supports Jetpack's Centralized Site Management (thanks to Ben B. @ Automattic)

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 1.0.2 =
This version is a security release, please update immediately.

= 1.0.1 =
This version fixes a few bugs and makes curtain more compatible.

= 1.0.0 =
This version contains the initial parts of the plugin.