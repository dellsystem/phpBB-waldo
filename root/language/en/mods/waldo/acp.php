<?php
/**
*
* @package Dynamo (Dynamic Avatar MOD for phpBB3)
* @version $Id: acp.php ilostwaldo@gmail.com$
* @copyright (c) 2011 dellsystem (www.dellsystem.me)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'PROBABILITY_ERROR'			=> 'The probability needs to be between 0 and 100.',
	'WAIT_TIME_ERROR'			=> 'The wait time needs to be a non-negative integer.',
	'WALDO_SUMMARY'				=> "Here you can view and change the settings for the Where's Waldo MOD. This MOD can optionally be integrated with the Ultimate Points MOD (or another compatible points MOD). Note that you do not need Ultimate Points in order to use this MOD; it simply provides extra features.",
	'WALDO_STATUS'				=> "Where's Waldo MOD status",
	'POINTS_STATUS'				=> 'Ultimate Points MOD status',
	'WALDO_PROBABILITY'			=> 'Probability of finding Waldo on any page',
	'WALDO_PROBABILITY_EXPLAIN'	=> 'Enter a percentage between 0 and 100. To disable this MOD, enter 0. To ensure that Waldo appears on every page, enter 100.',
	'WALDO_URL'					=> 'Make Waldo a hyperlink',
	'WALDO_URL_EXPLAIN'			=> "The image of Waldo can be made into a hyperlink, so that clicking on it leads the user to another page. To enable this, enter the URL here (include the http:// if it's an off-site link); to disable, leave this field blank.",
	'UP_EXTENSION'				=> 'Ultimate Points MOD extension',
	'WALDO_POINTS'				=> 'Points to award',
	'WALDO_POINTS_EXPLAIN'		=> 'The number of points to be awarded to each user who stumbles upon Waldo. Set to 0 to disable. Only registered users will be able to receive points.',
	'WALDO_POINTS_ERROR'		=> 'Please enter a non-negative number for the number of points to award',
	'WALDO_POINTS_DISABLED'		=> 'Note: the points system is currently disabled - please enable it if you wish to use this feature.',
	'WALDO_MOUSEOVER'			=> 'Mouseover text',
	'WALDO_MOUSEOVER_EXPLAIN'	=> 'The text that will appear when a user hovers over Waldo. Set to blank to disable.',
	'WALDO_IMAGE'				=> 'URL to Waldo image',
	'WALDO_IMAGE_EXPLAIN'		=> "The URL, relative to the root of your phpBB installation, of the image you want to use. By default this is 'images/waldo_body.png', which comes with this MOD.",
	'WALDO_EXCLUDE'				=> "Pages to exclude",
	'WALDO_EXCLUDE_EXPLAIN'		=> "Enter the filenames of the pages that you don't want Waldo to ever appear on, separated by a space. e.g. 'index.php viewonline.php memberlist.php'",
));

?>
