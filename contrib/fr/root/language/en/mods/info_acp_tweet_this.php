<?php

/**
*
* @package - Tweet This Topic
* @version $Id: info_acp_tweet_this.php 2010-12-04
* @copyright (c) 2010 RMcGirr83 ( http://www.phpbbmodders.net/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, array(

	// UMIL stuff
	'ACP_TWEET_THIS_TITLE'			=> 'Tweet This Topic',

	// ACP entries
	'ACP_TWEET_HASH'			=> 'Board Hash',
	'ACP_TWEET_HASH_EXPLAIN'	=> 'Input the board hash that you want to see at the end of twittered topics/posts.<br />For example, mysite',
));

?>