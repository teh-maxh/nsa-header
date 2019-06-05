<?php
/**
Plugin Name: NSA Header
Version: 2.7
Description: Adds an NSA-Keywords HTTP header to reduce the effectiveness of mass spying operations.
Author: Max Harmony
Author URI: https://www.maxh.me.uk/
License: DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE, Version 2
License URI: http://www.wtfpl.net/txt/copying/
*/

function build_nsa_header($nKeywords = 7){
	$keywords_master = ["amtrak", "biological", "border", "breach", "chemical", 
	"closure", "command", "critical infrastructure", "detection", "dndo",
	"drill", "emergency", "epidemic", "evacuation", "exercise", "facility",
	"injection", "interstate", "landing", "maritime domain",
	"national operations ctr", "nuclear", "ops", "radiological", "recovery",
	"response", "riot", "security"];
	$keywords = array_rand($keywords_master, $nKeywords);
	foreach($keywords as &$i){
		$i = $keywords_master[$i];
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