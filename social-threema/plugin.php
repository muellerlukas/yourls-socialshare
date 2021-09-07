<?php
/**
Plugin Name: Social - Threema
Description: Adds Threema as sharing option
Version: 1.0
Author: Lukas Mueller
Author URI: https://mulu.at
Author URI: https://muellerlukas.de
**/

yourls_add_action( 'share_links', function($args) {
    list( $longurl, $shorturl, $title, $text ) = $args;
	
	$text = rawurlencode( htmlspecialchars_decode( $title ) . ' ' . $shorturl );
	$shorturl = rawurlencode( $shorturl );
	$linktitle = yourls_s( 'Share with Threema' );
	
	echo <<<SOCIAL
	<a href="https://threema.id/compose?text=$text"
	data-shareurl="https://threema.id/compose?text=#share#"
	title="$linktitle"
	style="background:transparent url('https://threema.ch/favicon.ico') left center no-repeat; background-size: 16px;"
	onclick="mulushare(this, 'toolbar=no,width=1000,height=550');return false;">Threema</a>

SOCIAL;
});