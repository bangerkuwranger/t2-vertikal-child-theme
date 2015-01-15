<?php
//allow vCard uploads in media manager
add_filter('upload_mimes','add_custom_mime_types');
function add_custom_mime_types($mimes){
	return array_merge($mimes,array (
		'vcf' => 'text/vcard',
		)
	);
}

if(defined('PICTUREFILL_WP_VERSION') && '2' === substr(PICTUREFILL_WP_VERSION, 0, 1)) {
	
	function register_vertikal_srcsets(){
	  picturefill_wp_register_srcset('full-bg', array('medium', 'large', 'hd-background', 'full'), 'full');
	}

	add_filter('picturefill_wp_register_srcset', 'register_vertikal_srcsets');
	
}