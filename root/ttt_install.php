<?php

/**
*
* @author RMcGirr83 (Rich McGirr) rmcgirr83@gmail.com
* @package Tweet This topic
* @version $Id ttt_install.php 1.0.2 2011-05-31
* @copyright (c) 2011 RMcGirr83 ( http://www.phpbbmodders.net/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

/*
* The language file which will be included when installing
* Language entries that should exist in the language file for UMIL (replace $mod_name with the mod's name you set to $mod_name above)
* $mod_name
* 'INSTALL_' . $mod_name
* 'INSTALL_' . $mod_name . '_CONFIRM'
* 'UPDATE_' . $mod_name
* 'UPDATE_' . $mod_name . '_CONFIRM'
* 'UNINSTALL_' . $mod_name
* 'UNINSTALL_' . $mod_name . '_CONFIRM'
*/
$language_file = 'mods/info_acp_tweet_this';

// The name of the mod to be displayed during installation.
$mod_name = 'ACP_TWEET_THIS_TITLE';

/*
* The name of the config variable which will hold the currently installed version
* You do not need to set this yourself, UMIL will handle setting and updating the version itself.
*/
$version_config_name = 'tweet_topic_version';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(
	// Version 1.0.0
	'1.0.0'	=> array(
		//Nothing to do
	),
	'1.0.1' => array(
		// Lets add a config setting and set it to empty
		'config_add' => array(
			array('tweet_hash', ''),
		),
	),
	// Version 1.0.2
	'1.0.2'	=> array(
		'cache_purge' => array(''),
	),	
);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>