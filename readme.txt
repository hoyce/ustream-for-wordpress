=== Plugin Name ===

Contributors: hoyce, signalfade
Donate link: http://ustream.tv/
Tags: embed, oembed, video, ustream, player, viewer, broadcast, live
Requires at least: 3.0
Tested up to: 4.7.1
Stable tag: 2.1.0

== Description ==

Ustream for WordPress is a plugin that enables the user to embed Ustream live and recorded embeds. Put the url for the ustream video you'd like between the embed tags.

    [embed]http://www.ustream.tv/recorded/98889950[/embed]
    [embed]http://www.ustream.tv/channel/iss-hdev-payload[/embed]

This really comes in handy when your blog is on a multi site WordPress instance where you are not allowed to add iframe code etc.

### Deprecated shortcode embed method

The deprecated method for embedding Ustream still works, but ignores all non-oembed info. One can add tags (short codes) on the format `[ustream cid="xxxxx"]` or `[ustream vid="xxxxx"]` in blog posts/pages and have them replaced by their video content from UStream.

This deprecated method uses short codes and automatically replaces the [ustream cid="xxxxx"] or [ustream vid="xxxxx"] tags with the embedded video related to the given cid or vid.

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

You should now be able to paste use the plugin using the `[embed][/embed]` tags.

== Changelog ==

= 1.0 =
* Initial release

= 1.0.1 =
* Tested up to 3.8.1
* Added information in plugin description

= 1.1.0 =
* Added this plugin to Github https://github.com/hoyce/ustream-for-wordpress
* Tested stability up to Wordpress 3.9

= 2.0 =
* Changed embed code due to new code from UStream
* Tested in WordPress 4.0

= 2.1 =
* Changed embed code use oEmbed specification and service
* Tested in WordPress 4.7.1