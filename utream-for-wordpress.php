<?php
/*
 Plugin Name: UStream for WordPress
 Plugin URI: http://www.geckosolutions.se/blog/wordpress-plugins/
 Description: Add easy to use functionality to embed UStrem videos and broadcasts.
 Version: 1.1.0
 Author: Niklas Olsson
 Author URI: http://www.geckosolutions.se
 License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
 */

class ustream_for_wordpress {
    
	function get_ustream_code($atts, $content=null) {
	    
    	extract(shortcode_atts(array('cid' => '', 'vid' => '', 'width' => '480', 'height' => '296'), $atts));

	    if (is_numeric($cid)) {
	      return '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="'.$width.'" height="'.$height.'">
									<param name="flashvars" value="autoplay=false&amp;brand=embed&amp;cid='.$cid.'&amp;v3=1"/>
									<param name="allowfullscreen" value="true"/>
									<param name="allowscriptaccess" value="always"/>
									<param name="movie" value="http://www.ustream.tv/flash/viewer.swf"/>
									<embed flashvars="autoplay=false&amp;brand=embed&amp;cid='.$cid.'&amp;v3=1" width="'.$width.'" height="'.$height.'" allowfullscreen="true" allowscriptaccess="always" src="http://www.ustream.tv/flash/viewer.swf" type="application/x-shockwave-flash" /></object>';
	    } else if (is_numeric($vid)) {
	      return '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="'.$width.'" height="296">
	      					<param name="flashvars" value="loc=%2F&amp;autoplay=false&amp;vid='.$vid.'&amp;locale=en_US&amp;hasticket=false&amp;id='.$vid.'&amp;v3=1" />
	      					<param name="allowfullscreen" value="true" />
	      					<param name="allowscriptaccess" value="always" />
	      					<param name="src" value="http://www.ustream.tv/flash/viewer.swf" />
	      					<embed flashvars="loc=%2F&amp;autoplay=false&amp;vid='.$vid.'&amp;locale=en_US&amp;hasticket=false&amp;id='.$vid.'&amp;v3=1" width="'.$width.'" height="'.$height.'" allowfullscreen="true" allowscriptaccess="always" src="http://www.ustream.tv/flash/viewer.swf" type="application/x-shockwave-flash" />
	      			  </object>';
	    } else {
	      return 'Error: Nore the "cid" or the "vid" is given to the ustream tag!';
	    }
    }
}

add_shortcode('ustream', array('ustream_for_wordpress', 'get_ustream_code'));
?>
