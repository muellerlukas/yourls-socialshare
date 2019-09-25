<?php
/**
Plugin Name: Social - Facebook
Description: Adds facebook as sharing option
Version: 1.0
Author: Lukas Mueller
Author URI: https://mulu.at
Author URI: https://muellerlukas.de
**/

yourls_add_action( 'share_links', 'mulu_yourls_share_facebook' );
function mulu_yourls_share_facebook( $args ) {
    list( $longurl, $shorturl, $title, $text ) = $args;
	
	$text = rawurlencode( htmlspecialchars_decode( $title ) . ' ' . $shorturl );
	$shorturl = rawurlencode( $shorturl );
	$iconpath = YOURLS_PLUGINURL . '/' . yourls_plugin_basename( dirname(__FILE__) );
	$linktitle = yourls_s( 'Share on Facebook' );
	
	echo <<<SOCIAL
	<a href="http://www.facebook.com/share.php?u=$shorturl&quote=$text"
	data-shareurl="http://www.facebook.com/share.php?u=$shorturl&quote=#share#"
	title="$linktitle"
	style="background:transparent url('$iconpath/facebook.png') left center no-repeat;"
	onclick="share(this, 'toolbar=no,width=800,height=550');return false;">Facebook</a>

SOCIAL;

}