<?php
/*
 Plugin Name: UStream for WordPress
 Plugin URI: https://www.hoyce.com/wordpress-plugins/
 Description: Add easy to use functionality to embed UStrem videos and broadcasts.
 Version: 2.3
 Author: Niklas Olsson
 Author URI: https://www.hoyce.com
 License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
 */

Class ustream_for_wordpress {

    function secure_embed_handler($matches, $attr, $url, $rawattr) {
        $request = new WP_Http;
        $result = $request->request( 'https://www.ustream.tv/oembed?url='.$url );
        $ustream = json_decode($result['body']);
        if(isset($ustream->html)) {
            return str_replace('http://www.ustream.tv/embed/', 'https://www.ustream.tv/embed/', $ustream->html);
        }
    }

    function oembed_provider() {
        if(is_ssl()) {
            wp_embed_register_handler( 'ustream', '/http(s)?:\/\/(www\.)?ustream\.tv\/.{0,}/i', array('ustream_for_wordpress', 'secure_embed_handler'));
        } else {
            wp_oembed_add_provider( '/http(s)?:\/\/(www\.)?ustream\.tv\/.{0,}/i', 'http://www.ustream.tv/oembed', true );
        }
    }

    // Maintain backward compatibility of this plugin
    function get_ustream_code($atts, $content=null) {
        extract(shortcode_atts(array('cid' => '', 'vid' => ''), $atts));
        if (is_numeric($cid)) {
            return ustream_for_wordpress::secure_embed_handler(null, null, 'http://www.ustream.tv/channel/'.$cid, null);
        } else if (is_numeric($vid)) {
            return ustream_for_wordpress::secure_embed_handler(null, null, 'http://www.ustream.tv/recorded/'.$vid, null);
        } else {
          return 'Error: Neither the "cid" nor the "vid" was passed to the ustream tag!';
        }
    }
}

add_action( 'init', array('ustream_for_wordpress', 'oembed_provider') );
// Maintain backward compatibility of this plugin
add_shortcode('ustream', array('ustream_for_wordpress', 'get_ustream_code'));
