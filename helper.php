<?php

function baseurl() {

	$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	$result = parse_url($url);
	
	return $result['scheme']."://".$result['host'];
}
