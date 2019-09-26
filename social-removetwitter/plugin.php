<?php
/**
Plugin Name: Social - Remove Twitter
Description: Removs twitter as sharing option
Version: 1.0
Author: Lukas Mueller
Author URI: https://mulu.at
Author URI: https://muellerlukas.de
**/

yourls_add_action( 'share_links', 'mulu_yourls_share_removetwitter' );
function mulu_yourls_share_removetwitter( $args ) {
    echo '<style type="text/css"> #share_tw { display: none; } </style>';
}