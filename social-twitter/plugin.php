<?php
/**
Plugin Name: Social - Twitter
Description: Adds twitter as sharing option
Version: 1.0
Author: Lukas Mueller
Author URI: https://mulu.at
Author URI: https://muellerlukas.de
**/

yourls_add_action( 'share_links', 'mulu_yourls_share_twitter' );
function mulu_yourls_share_twitter( $args ) {
    list( $longurl, $shorturl, $title, $text ) = $args;
	
	$text = rawurlencode( htmlspecialchars_decode( $title ) . ' ' . $shorturl );
	$shorturl = rawurlencode( $shorturl );
    $iconpath = YOURLS_PLUGINURL . '/' . yourls_plugin_basename( dirname(__FILE__) );

	$linktitle = yourls_s( 'Tweet this!' );
	
	echo <<<SOCIAL
	<a href="https://twitter.com/intent/tweet?text=$text"
	data-shareurl="https://twitter.com/intent/tweet?text=#share#"
	title="$linktitle"
	style="background:transparent url('$iconpath/twitter.png') left center no-repeat;"
	onclick="share(this, 'toolbar=no,toolbar=no,width=1000,height=470');return false;">Twitter</a>

SOCIAL;

}