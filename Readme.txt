=== Kw LiveStream Plugin ===

Contributors: KwarK
Donate link: http://kwark.allwebtuts.net/
Tags: livestream, livestream.com, live tv, direct streaming, plugin, wordpress
Tested up to: 3.2.1
Stable tag: 1.0.1

A simple plugin for streaming (live tv) with livestream.com and shortcode with WordPress. Multiple livestream possibility

== Description ==

An ultra light way (4 ko) to connect your Livestream live channel from your livestream account to your Wordpress site and your users. Multiple channel possible if is necessary with multiple shortcode

shortcode is an avantage for a multi-site system (Wordpress network) and your users with admin role

shortcode

`[Livestream]`

may take parameters

* channel (required)
* layout
* autoplay
* width
* height
* visibility
* message
* color
* mute
* iconover
* iconcolor
* allowchat

e.g.

`[livestream channel="stylecataclysm" layout="0" visibility="user only" width="800" height="550"]`

parameters definitions and code:

* channel: channel name of your livestream (required)
* layout: can be set from "0" to "6" (7 layout to test)
* some quick example for layout : 0 = full livestream with integrated chat area, 4 = only livestream
* autoplay: can take "true" or "false" (true livestream starts. false, tuser has to press play button)
* width: width in pixels
* height: height in pixels
* visibility: can be set to "user only" or "public" (visible to all visitors or only for people connected to your wordpress site)
* color: change background color + background color stream videos embed
* mute: can be set to "true" or "false" (start sound off or not)
* iconover: color icons to mouseover
* iconcolor: color icons
* allowchat: can be set to "true" or "false" (true to hide the chat area)
* message: your special message for user not logged in (if you want when use "user only" visibility)

comment

* Some parameters work only with some layout. Don't worry if you have no change.
* colors must be expressed as html without #

prerequisites

* Create livestream account https://secure.livestream.com/myaccount/launchchannel 
* and download livestream procaster http://www.livestream.com/platform/procaster

contact : http://kwark.allwebtuts.net

== Installation ==

1. Upload 'kw-livestream-plugin' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. add shortcode in a page or in article or in a zone support html and more.
4. prerequisites : Create livestream account and download livestream procaster


== Screenshots ==

1. Screenshot no screenshot actually - no administration - configuration needed


== Frequently Asked Questions ==

View forum support on Wordpress for more information


== Upgrade Notice ==

1. Use the Wordpress automatic upgrade notice or upgrade this plugin manually


== Changelog ==

= 1.0.1 =

* Fix bug for display message="..." with visibility="user only"

= 1.0 =

* Original review