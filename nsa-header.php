<?php
/**
Plugin Name: Add NSA Header
Version: 2.71
Description: Adds an NSA-Keywords HTTP header to reduce the effectiveness of mass spying operations.
Author: Max Harmony
Author URI: https://www.maxh.me.uk/
License: DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE, Version 2
License URI: http://www.wtfpl.net/txt/copying/
*/

function build_nsa_header($nKeywords = 9){
	$keywords_source = ["2600", "amtrak", "biological", "border", "breach",
	"chemical", "closure", "command", "consulate", "critical infrastructure",
	"detection", "disaster", "dndo", "drill", "emergency", "epidemic",
	"evacuation", "exercise", "facility", "g7", "injection", "interstate",
	"landing", "maritime domain", "national operations ctr", "nbic", "nuclear",
	"ops", "plot", "radiological", "recovery", "response", "riot", "security",
	"target"];
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