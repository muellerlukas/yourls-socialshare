<?php
/**
Plugin Name: Social - Base Plugin
Description: Base plugin for social share
Version: 1.0
Author: Lukas Mueller
Author URI: https://mulu.at
Author URI: https://muellerlukas.de
**/

yourls_add_action( 'html_head', function ($context) {
echo <<<JS

	<script type="text/javascript">
	function mulushare(src, options) {
		var new_url = $(src).data('shareurl');
		
		new_url = new_url.replace('#share#', encodeURI($('#tweet_body').val())); // replace keyword with current text
		$(src).attr('href', new_url);
		window.open(new_url, '_blank', options);
	}
</script>
JS;
});