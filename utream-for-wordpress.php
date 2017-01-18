<?php
/*
 Plugin Name: UStream for WordPress
 Plugin URI: https://www.hoyce.com/wordpress-plugins/
 Description: Add easy to use functionality to embed UStrem videos and broadcasts.
 Version: 2.2
 Author: Niklas Olsson
 Author URI: https://www.hoyce.com
 License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
 */

class ustream_for_wordpress {

    function oembed_provider() {
        wp_oembed_add_provider( '#http://(www\.)?ustream.tv/*#i', 'http://www.ustream.tv/oembed', true );
    }

    // Maintain backward compatibility of this plugin
    function get_ustream_code($atts, $content=null) {
        extract(shortcode_atts(array('cid' => '', 'vid' => ''), $atts));

        if (is_numeric($cid)) {
            return wp_oembed_get('http://www.ustream.tv/channel/'.$cid);
        } else if (is_numeric($vid)) {
            return wp_oembed_get('http://www.ustream.tv/recorded/'.$vid);
        } else {
          return 'Error: Neither the "cid" nor the "vid" was passed to the ustream tag!';
        }
    }
}

add_action( 'init', array('ustream_for_wordpress', 'oembed_provider') );
// Maintain backward compatibility of this plugin
add_shortcode('ustream', array('ustream_for_wordpress', 'get_ustream_code'));
