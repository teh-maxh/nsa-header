<?php
/**
Plugin Name: Add NSA Header
Version: 2.7182
Description: Adds an NSA-Keywords HTTP header to reduce the effectiveness of mass spying operations.
Author: Max Harmony
Author URI: https://www.maxh.me.uk/
License: DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE, Version 2
License URI: http://www.wtfpl.net/txt/copying/
*/

function build_nsa_header($nKeywords = 9){
	$keywords_source = ["2600", "641a", "amtrak", "biological", "border",
		"breach", "bullrun", "chemical", "closure", "command", "consulate",
		"conus", "critical infrastructure", "cryptanalysis", "detection",
		"disaster", "dndo", "drill", "echelon", "emergency", "epidemic",
		"evacuation", "exercise", "facility", "five eyes", "fornsat", "g7",
		"government", "injection", "interstate", "keyhole", "landing",
		"maritime domain", "mystic", "national operations ctr", "nbic",
		"nuclear", "ops", "plot", "prism", "radiological", "rapid reaction",
		"recovery", "response", "riot", "schengen", "security", "swift",
		"target", "xkeyscore"];
	$keywords = array_rand($keywords_source, $nKeywords);
	foreach($keywords as &$i){
		$i = $keywords_source[$i];
	}
	shuffle($keywords);
	$header = "NSA-Keywords: " . implode(", ", $keywords);
	return $header;
}

function add_nsa_header(){
	header(build_nsa_header());
}
add_action('send_headers', 'add_nsa_header');
?>