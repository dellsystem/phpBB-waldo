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
	'HORIZONTAL_MAX_ERROR'		=> 'Please enter an integer greater than zero for the horizontal maximum.',
	'VERTICAL_MAX_ERROR'		=> 'Please enter an integer greater than zero for the vertical maximum.',
	'WALDO_SUMMARY'				=> "Here you can view and change the settings for the Where's Waldo MOD.",
	'WALDO_STATUS'				=> 'This MOD is currently <strong>%s</strong>.',
	'ENABLED'					=> 'enabled',
	'DISABLED'					=> 'disabled',
	'UP_STATUS'					=> 'The Ultimate Points MOD is <strong>%s</strong>. (Note that you do not need Ultimate Points in order to use this MOD; it simply provides extra features.)',
	'INSTALLED'					=> 'installed',
	'NOT_INSTALLED'				=> 'not installed',
	'WALDO_PROBABILITY'			=> 'Probability of finding Waldo on any page',
	'WALDO_PROBABILITY_EXPLAIN'	=> 'Enter a number between 0 and 100 for the percent probability of finding Waldo on any page. To disable this MOD, enter 0. To ensure that Waldo appears on every page, enter 100.',
	'WALDO_URL'					=> 'Make Waldo a hyperlink',
	'WALDO_URL_EXPLAIN'			=> "The image of Waldo can be made into a hyperlink, so that clicking on it leads the user to another page. To enable this, enter the URL here (include the http:// if it's an off-site link); to disable, leave this field blank.",
	'WALDO_WINDOW'				=> 'Window parameters',
	'WALDO_WINDOW_EXPLAIN'		=> 'Set the vertical and horizontal parameters of the area in which Waldo can appear on a page. Waldo can appear anywhere between the left-hand side of the window and the horizontal maximum (as defined here) horizontally, and the top of the page and the vertical maximum (as defined here) vertically. Use the default parameters if confused.',
	'HORIZONTAL_MAX'			=> 'Horizontal maximum',
	'VERTICAL_MAX'				=> 'Vertical maximum',
	'UP_EXTENSION'				=> 'Ultimate Points MOD extension',
	'WALDO_POINTS'				=> 'Points to award',
	'WALDO_POINTS_EXPLAIN'		=> 'The number of points to be awarded to each user who stumbles upon Waldo. Set to 0 to disable. Only registered users will be able to receive points.',
	'WALDO_POINTS_ERROR'		=> 'Please enter a non-negative number for the number of points to award',
	'WALDO_MOUSEOVER'			=> 'Mouseover text',
	'WALDO_MOUSEOVER_EXPLAIN'	=> 'The text that will appear when a user hovers over Waldo. Set to blank to disable.',
	'WALDO_IMAGE'				=> 'URL to Waldo image',
	'WALDO_IMAGE_EXPLAIN'		=> "The URL, relative to the root of your phpBB installation, of the image you want to use. By default this is 'images/waldo_body.png', which comes with this MOD.",
));

?>
