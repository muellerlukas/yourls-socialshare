<?php
/**
Plugin Name: Social - Telegram
Description: Adds telegram as sharing option
Version: 1.0
Author: Lukas Mueller
Author URI: https://mulu.at
Author URI: https://muellerlukas.de
**/

yourls_add_action( 'share_links', function($args) {
    list( $longurl, $shorturl, $title, $text ) = $args;
	
	$text = rawurlencode( htmlspecialchars_decode( $title ) . ' ' . $shorturl );
	$shorturl = rawurlencode( $shorturl );
	$linktitle = yourls_s( 'Share with Telegram' );
	
	echo <<<SOCIAL
	<a href="https://t.me/share/url?text=$text&url=$shorturl"
	data-shareurl="https://t.me/share/url?text=#share#&url=$shorturl"
	title="$linktitle"
	style="background:transparent url('https://web.telegram.org/favicon.ico') left center no-repeat; background-size: 16px;"
	onclick="mulushare(this, 'width=800,height=550');return false;">Telegram</a>

SOCIAL;
});