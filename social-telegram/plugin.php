<?php
/**
Plugin Name: Social - Telegram
Description: Adds telegram as sharing option
Version: 1.0
Author: Lukas Mueller
Author URI: https://mulu.at
Author URI: https://muellerlukas.de
**/

yourls_add_action( 'share_links', 'mulu_yourls_share_telegram' );
function mulu_yourls_share_telegram( $args ) {
    list( $longurl, $shorturl, $title, $text ) = $args;
	
	$text = rawurlencode( htmlspecialchars_decode( $title ) . ' ' . $shorturl );
	$shorturl = rawurlencode( $shorturl );
	$linktitle = yourls_s( 'Share with Telegram' );
	
	echo <<<SOCIAL
	<a href="tg://msg_url?text=$text"
	data-shareurl="tg://msg_url?text=#share#"
	title="$linktitle"
	style="background:transparent url('https://web.telegram.org/favicon.ico') left center no-repeat; background-size: 16px;"
	onclick="share(this);return false;">Telegram</a>

SOCIAL;

}