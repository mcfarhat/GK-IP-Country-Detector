=== Plugin Name ===

Plugin Name: GK IP Country Detector
Contributors: mcfarhat
Donate link:
Tags: Wordpress, IP, Country, Detect
Requires at least: 4.3
Tested up to: 4.9
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

=== Short Summary ===

The GK IP Country Detector is a simple and lightweight wordpress plugin that allows proper detection of both the IP and the relevant country based on one of 2 available API services online for IP filtering: https://freegeoip.net/ and https://www.geoplugin.net/

== Description ==

Often times websites require proper detection of visitors and relevant actions to be taken. Whether to redirect the user to a specific page, a subdomain, or simply display relevant country tags and information, ... the options are limitless.

This plugin does just that! It allows wordpress developers to easily have access to the function gk_map_ip_country() which handles the proper detection of the IP, while returning the relevant 2 letter country. Sample returned country names include 'US', 'CA', 'GB', 'IN',...

GK IP Country Detector utilizes the $_SERVER content to grab the relevant IP, and then connects to the available IP for country info.

API connectivity initially aims for https://freegeoip.net/ as our core data source. In case it fails, or in case the daily quota for IP lookups is consumed (yes public APIs have daily limits), we turn over to the alternative API of https://www.geoplugin.net/

If you would like some custom work done, or have an idea for a plugin you're ready to fund, check our site at www.greateck.com or contact us at info@greateck.com

== Installation ==

1. Upload the plugin files to the /wp-content/plugins/GK-IP-Country-Detector, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. That's it! Now you can easily utilize the function gk_map_ip_country() anywhere in your script to grab your visitors' IP and country information.

== Changelog ==

= 1.0.0 =

* Initial Version of the plugin *
