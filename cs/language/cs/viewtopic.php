<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* Následující kód neměnit
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

$lang = array_merge($lang, array(
	'APPROVE'								                                   => 'Approve',
	'ATTACHMENT'						                                   => 'Příloha',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	                       => 'Funkce příloh je dočasně nedostupná.',

	'BOOKMARK_ADDED'		                                       => 'Téma bylo úspěšně přidáno do záložek.',
	'BOOKMARK_ERR'			                                       => 'Při přidávání tématu do záložek se objevila chyba. Zkus to prosím znovu.',
	'BOOKMARK_REMOVED'		                                     => 'Téma bylo úšpěšně odebráno ze záložek.',
	'BOOKMARK_TOPIC'		                                       => 'Přidat do záložek',
	'BOOKMARK_TOPIC_REMOVE'	                                   => 'Odebrat ze záložek',
	'BUMPED_BY'				                                         => 'Obnovil %1$s, %2$s',
	'BUMP_TOPIC'			                                         => 'Oživit téma',

	'CODE'					                                           => 'Kód',

	'DELETE_TOPIC'			                                       => 'Smazat téma',
	'DELETED_INFORMATION'	                                     => 'Smazal %1$s, %2$s',
	'DISAPPROVE'					=> 'Disapprove',
	'DOWNLOAD_NOTICE'		=> 'You do not have the required permissions to view the files attached to this post.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Last edited by %2$s on %3$s, edited %1$d time in total.',
		2	=> 'Last edited by %2$s on %3$s, edited %1$d times in total.',
	),
	'EMAIL_TOPIC'			                                         => 'Zaslat na e-mail',
	'ERROR_NO_ATTACHMENT'	=> 'The selected attachment does not exist anymore.',

	'FILE_NOT_FOUND_404'	=> 'The file <strong>%s</strong> does not exist.',
	'FORK_TOPIC'			=> 'Copy topic',
	'FULL_EDITOR'			                                         => 'Editor &amp; Náhled',

	'LINKAGE_FORBIDDEN'		=> 'You are not authorised to view, download or link from/to this site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'You have been notified about this topic, please login to view it.',
	'LOGIN_VIEWTOPIC'		=> 'The board requires you to be registered and logged in to view this topic.',

	'MAKE_ANNOUNCE'				                                     => 'Změnit na “Ozámení”',
	'MAKE_GLOBAL'				                                       => 'Změnit na “Globální oznámení”',
	'MAKE_NORMAL'				                                       => 'Změnit na “Standartní téma”',
	'MAKE_STICKY'				                                       => 'Změnit na “Důležité”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	          => 'You may select <strong>%d</strong> option',
		2	          => 'You may select up to <strong>%d</strong> options',
    3	          => 'You may select up to <strong>%d</strong> options',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'The attachment <strong>%s</strong> is no longer available',
	'MOVE_TOPIC'				                                       => 'Přesunout téma',

	'NO_ATTACHMENT_SELECTED'=> 'You haven’t selected an attachment to download or view.',
	'NO_NEWER_TOPICS'		=> 'There are no newer topics in this forum.',
	'NO_OLDER_TOPICS'		=> 'There are no older topics in this forum.',
	'NO_UNREAD_POSTS'		=> 'There are no new unread posts for this topic.',
	'NO_VOTE_OPTION'		=> 'You must specify an option when voting.',
	'NO_VOTES'				=> 'No votes',

	'POLL_ENDED_AT'			                                        => 'Anketa byla ukončena %s',
	'POLL_RUN_TILL'			                                        => 'Anketa bude ukončena %s',
	'POLL_VOTED_OPTION'		=> 'You voted for this option',
	'POST_DELETED_RESTORE'	=> 'This post has been deleted. It can be restored.',
	'PRINT_TOPIC'			=> 'Print view',

	'QUICK_MOD'				                                          => 'Rychlé nástroje',
	'QUICKREPLY'			                                          => 'Rychlá odpověď',
	'QUOTE'					                                            => 'Citovat',

	'REPLY_TO_TOPIC'		                                        => 'Odpovědět',
	'RESTORE'				                                            => 'Obnovit',
	'RESTORE_TOPIC'			                                        => 'Obnovit téma',
	'RETURN_POST'			=> '%sReturn to the post%s',

	'SUBMIT_VOTE'			=> 'Submit vote',

	'TOPIC_TOOLS'			                                          => 'Nástroje tématu',
	'TOTAL_VOTES'			=> 'Total votes',

	'UNLOCK_TOPIC'			                                        => 'Odemknout téma',

	'VIEW_INFO'				=> 'Post details',
	'VIEW_NEXT_TOPIC'		                                        => 'Následující téma',
	'VIEW_PREVIOUS_TOPIC'	                                      => 'Předchozí téma',
	'VIEW_RESULTS'			=> 'View results',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d post',
		2	=> '%d posts',
	),
	'VIEW_UNREAD_POST'		=> 'First unread post',
	'VOTE_SUBMITTED'		=> 'Your vote has been cast.',
	'VOTE_CONVERTED'		=> 'Changing votes is not supported for converted polls.',

));
