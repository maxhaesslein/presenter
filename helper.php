<?php

function baseurl() {

	$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	$result = parse_url($url);

	return $result['scheme']."://".$result['host'];
}


function get_images( $path, $recursive = false ) {

	$handle = opendir($path);

	if( ! $handle ) return [];

	$files = [];

	while( false !== ($entry = readdir($handle)) ){

		if( substr($entry, 0, 1) == '.' ) continue;

		if( is_dir($path.$entry) ) {
			
			$files = array_merge( $files, get_images($path.$entry.'/', $recursive) );

			continue;
		}

		$files[] = $path.$entry;
	}

	closedir($handle);

	return $files;

}
