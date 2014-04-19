=== Plugin Name ===

Contributors: hoyce
Donate link: http://ustream.tv/
Tags: embed, oembed, video, ustream, player, viewer, broadcast, live
Requires at least: 3.0
Tested up to: 3.9
Stable tag: 1.1.0

== Description ==

Ustream for WordPress is a plugin that enables the user to add tags (short codes) on the format [ustream cid="xxxxx"] or [ustream vid="xxxxx"] in blog posts/pages and have them replaced by their video content from UStream.

This really comes in handy when your blog is on a multi site WordPress instance where you are not allowed to add iframe code etc.

This plugin uses short codes and automatically replaces the [ustream cid="xxxxx"] or [ustream vid="xxxxx"] tags with the embeded video related to the given cid or vid.

The [ustream cid="xxxxx"] tag is used when you want to stream a live broad cast and the [ustream vid="xxxxx"] is used when to publish a recorded video.

== Installation ==

Using the Plugin Manager

1. Click Plugins
2. Click Add New
3. Search for ustream-for-wordpress
4. Click Install
5. Click Install Now
6. Click Activate Plugin

Manually

1. Upload `ustream-for-wordpress` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

You should now be able to paste use the [ustream cid="xxxxxxx"] tag in blog posts/pages and have them replaced by their video content from UStream.

== Changelog ==

= 1.0 =
* Initial release

= 1.0.1 =
* Tested up to 3.8.1
* Added information in plugin description

= 1.1.0 =
* Added this plugin to Github https://github.com/hoyce/ustream-for-wordpress
* Tested stability up to Wordpress 3.9
