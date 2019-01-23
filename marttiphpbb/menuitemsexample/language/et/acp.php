<?php

/**
* phpBB Extension - marttiphpbb menuitems
* @copyright (c) 2014 - 2019 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [

	'ACP_MARTTIPHPBB_MENUITEMS_SETTINGS_SAVED'
	=> 'Seaded on edukalt salvestatud!',

	'ACP_MARTTIPHPBB_MENUITEMS_ENABLE'
	=> 'Luba menüü asukoht',
	'ACP_MARTTIPHPBB_MENUITEMS_PRIORITY'
	=> 'Prioriteet',
	'ACP_MARTTIPHPBB_MENUITEMS_LOCATIONS'
	=> 'Menüü asukoht',

	'ACP_MARTTIPHPBB_MENUITEMS_OVERALL_HEADER_NAVIGATION_PREPEND'
	=> 'Overall header navigation prepend',
	'ACP_MARTTIPHPBB_MENUITEMS_OVERALL_HEADER_NAVIGATION_APPEND'
	=> 'Overall header navigation append',
	'ACP_MARTTIPHPBB_MENUITEMS_NAVBAR_HEADER_QUICK_LINKS_BEFORE'
	=> 'Navigeerimisreal enne kiirlinkide menüüd',
	'ACP_MARTTIPHPBB_MENUITEMS_NAVBAR_HEADER_QUICK_LINKS_AFTER'
	=> 'Navigeerimisreal peale kiirlinkide menüüd',
	'ACP_MARTTIPHPBB_MENUITEMS_OVERALL_HEADER_BREADCRUMBS_BEFORE'
	=> 'Päises enne breadcrumbs menüüd',
	'ACP_MARTTIPHPBB_MENUITEMS_OVERALL_HEADER_BREADCRUMBS_AFTER'
	=> 'Päises peale breadcrumbs menüüd',
	'ACP_MARTTIPHPBB_MENUITEMS_OVERALL_FOOTER_TIMEZONE_BEFORE'
	=> 'Jaluses enne ajatsooni',
	'ACP_MARTTIPHPBB_MENUITEMS_OVERALL_FOOTER_TIMEZONE_AFTER'
	=> 'Jaluses peale ajatsooni',
	'ACP_MARTTIPHPBB_MENUITEMS_OVERALL_FOOTER_TEAMLINK_BEFORE'
	=> 'Jaluses enne Meeskonna linki',
	'ACP_MARTTIPHPBB_MENUITEMS_OVERALL_FOOTER_TEAMLINK_AFTER'
	=> 'Jaluses peale Meeskonna linki',
]);
