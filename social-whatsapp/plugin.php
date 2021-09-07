<?php
/**
Plugin Name: Social - Whatsapp
Description: Adds whatsapp as sharing option
Version: 1.0
Author: Lukas Mueller
Author URI: https://mulu.at
Author URI: https://muellerlukas.de
**/

yourls_add_action( 'share_links', function($args) {
    list( $longurl, $shorturl, $title, $text ) = $args;
	
	$text = rawurlencode( htmlspecialchars_decode( $title ) . ' ' . $shorturl );
	$shorturl = rawurlencode( $shorturl );
	$linktitle = yourls_s( 'Share with WhatsApp' );
	
	echo <<<SOCIAL
	<a href="https://api.whatsapp.com/send?text=$text"
	data-shareurl="https://api.whatsapp.com/send?text=#share#"
	title="$linktitle"
	style="background:transparent url('https://whatsapp.com/favicon.ico') left center no-repeat; background-size: 16px;"
	onclick="mulushare(this, 'width=800,height=550');return false;">WhatsApp</a>

SOCIAL;
});