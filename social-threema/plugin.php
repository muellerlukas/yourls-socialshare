<?php
/**
Plugin Name: Social - Threema
Description: Adds Threema as sharing option
Version: 1.0
Author: Lukas Mueller
Author URI: https://mulu.at
Author URI: https://muellerlukas.de
**/

yourls_add_action( 'share_links', 'mulu_yourls_share_threema' );
function mulu_yourls_share_threema( $args ) {
    list( $longurl, $shorturl, $title, $text ) = $args;
	
	$text = rawurlencode( htmlspecialchars_decode( $title ) . ' ' . $shorturl );
	$shorturl = rawurlencode( $shorturl );
	$linktitle = yourls_s( 'Share with Threema' );
	
	echo <<<SOCIAL
	<a href="threema://compose?text=$text"
	data-shareurl="threema://compose?text=#share#"
	title="$linktitle"
	style="background:transparent url('https://threema.ch/favicon.ico') left center no-repeat; background-size: 16px;"
	onclick="share(this);return false;">Threema</a>

SOCIAL;

}