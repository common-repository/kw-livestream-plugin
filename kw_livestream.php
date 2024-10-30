<?php 
/*
Plugin Name: Kw livestream for Wordpress
Plugin URI: http://kwark.allwebtuts.net
Description: An ultra light way to connect your Livestream live channel from your livestream account to your Wordpress site and your users. Multiple channel possible if is necessary.
Author: Laurent (KwarK) Bertrand
Version: 1.0
Author URI: http://kwark.allwebtuts.net
*/

/*  
	Copyright 2011  Laurent (KwarK) Bertrand  (email : kwark@allwebtuts.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/**Hook Shortcode for Wordpress **/

add_shortcode('livestream','kw_livestream_shortcode');

/**Get channels abd width from Shortcode **/

function kw_livestream_shortcode( $atts, $content = null )
{

    	extract( shortcode_atts( array(
        'layout' => '0',
		'autoplay' => 'true',
		'width' => '890',
		'height' => '639',
		'visibility' => 'public',
		'channel' => '',
		'color' => 'ffffff',
		'mute' => 'false',
		'iconover' => 'e7e7e7',
		'iconcolor' => 'cccccc',
		'message' => '',
		'allowchat' => 'false'
      	), $atts ) );
	  
		$layout = trim($layout);
		$autoplay = trim($autoplay);
		$width = trim($width);
		$height = trim($height);
		$visibility = trim($visibility);
		$channel = trim($channel);
		$color = trim($color);
		$mute = trim($mute);
		$iconover = trim($iconover);
		$iconcolor = trim($iconcolor);
		$allowchat = trim($allowchat);
		$message = trim($message);
	
		$color = str_replace(array('#','A','E','F','D','C','B'),array('','a','e','f','d','c','b'),$color);
		$iconcolor = str_replace(array('#','A','E','F','D','C','B'),array('','a','e','f','d','c','b'),$iconcolor);
		$iconover = str_replace(array('#','A','E','F','D','C','B'),array('','a','e','f','d','c','b'),$iconover);

		if ($visibility == "user only"){
			if ( !is_user_logged_in() ) {
				return ''.$message.'';
				}
			if ( is_user_logged_in() ) {
				return '<div style="width:'.$width.'px;height:'.$height.'px;border:3px solid #'.$color.'; border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;-khtml-border-radius:5px"><iframe src="http://cdn.livestream.com/embed/'.$channel.'?layout='.$layout.'&color=0x'.$color.'&autoPlay='.$autoplay.'&mute='.$mute.'&iconColorOver=0x'.$iconover.'&iconColor=0x'.$iconcolor.'&allowchat='.$allowchat.'&width='.$width.'&height='.$height.'" width="'.$width.'" height="'.$height.'" style="border:0;outline:0" frameborder=0 scrolling=no></iframe></div>&nbsp;';
				}
			}
		else {
				return '<div style="width:'.$width.'px;height:'.$height.'px;border:3px solid #'.$color.'; border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;-khtml-border-radius:5px"><iframe src="http://cdn.livestream.com/embed/'.$channel.'?layout='.$layout.'&color=0x'.$color.'&autoPlay='.$autoplay.'&mute='.$mute.'&iconColorOver=0x'.$iconover.'&iconColor=0x'.$iconcolor.'&allowchat='.$allowchat.'&width='.$width.'&height='.$height.'" width="'.$width.'" height="'.$height.'" style="border:0;outline:0" frameborder=0 scrolling=no></iframe></div>&nbsp;';
			}
		
}
?>