<?php
/*****************************************
 * GLOBAL SITE CONTENT
 *
 * Data is stored in .yaml files and parsed at runtime.
 *****************************************/

// Load compoaser dependencies
include( __dir__ . '/../vendor/autoload.php');

/**
 * Globally load site content for access across views.
 * See '/content.yaml' for the values
 */

use Symfony\Component\Yaml\Parser;
use League\Csv\Reader;

// Using the yaml parser to read content files
global $yaml;
$yaml = new Parser();


/**
 *
 */
function getContent($parser, $path) {
		return $parser->parse(file_get_contents( __dir__ . '/../content/' .$path));
}

$global = getContent($yaml, 'global.yaml');
$albumglobal = getContent($yaml, 'albumglobal.yaml');

// Content for main landing pages
$info = getContent($yaml, 'info.yaml');
$sixteen = getContent($yaml, 'sixteen.yaml');
$cases = [
	'copa-america' => getContent($yaml, 'work/copa-america.yaml'),
	'stikwood' => getContent($yaml, 'work/stikwood.yaml'),
	'pandora-advertising' => getContent($yaml, 'work/pandora-advertising.yaml'),
	'i-am-empire' => getContent($yaml, 'work/i-am-empire.yaml'),
	'visit-humboldt' => getContent($yaml, 'work/visit-humboldt.yaml'),
	// 'clif-bar-cykelscramble' => getContent($yaml, 'work/clif-bar-cykelscramble.yaml'),
];

// $albums = [
// 	'ten' => getContent($yaml, 'albums/ten.yaml'),
// 	'nine' => getContent($yaml, 'albums/nine.yaml'),
// 	'eight' => getContent($yaml, 'albums/eight.yaml'),
// 	'seven' => getContent($yaml, 'albums/seven.yaml'),
// 	'six' => getContent($yaml, 'albums/six.yaml'),
// 	'five' => getContent($yaml, 'albums/five.yaml'),
// 	'four' => getContent($yaml, 'albums/four.yaml'),
// 	'three' => getContent($yaml, 'albums/three.yaml'),
// 	'two' => getContent($yaml, 'albums/two.yaml'),
// 	'one' => getContent($yaml, 'albums/one.yaml'),
// ];
