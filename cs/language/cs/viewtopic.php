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
	'APPROVE'							=> 'Schválit',
	'ATTACHMENT'						        => 'Příloha',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	                       	=> 'Funkce příloh je dočasně nedostupná.',
	'BOOKMARK_ADDED'		                                => 'Téma bylo úspěšně přidáno do záložek.',
	'BOOKMARK_ERR'			                                => 'Při přidávání tématu do záložek se objevila chyba. Zkus to prosím znovu.',
	'BOOKMARK_REMOVED'		                                => 'Téma bylo úšpěšně odebráno ze záložek.',
	'BOOKMARK_TOPIC'		                                => 'Přidat do záložek',
	'BOOKMARK_TOPIC_REMOVE'	                                   	=> 'Odebrat ze záložek',
	'BUMPED_BY'				                        => 'Obnovil %1$s, %2$s',
	'BUMP_TOPIC'			                                => 'Oživit téma',

	'CODE'					                        => 'Kód',

	'DELETE_TOPIC'			                                => 'Smazat téma',
	'DELETED_INFORMATION'	                                     	=> 'Smazal %1$s, %2$s',
	'DISAPPROVE'							=> 'Zamítnout',
	'DOWNLOAD_NOTICE'						=> 'Nemáš dostatečná oprávnění pro zobrazení přílohy.',

	'EDITED_TIMES_TOTAL'		=> array(
		1		=> 'Celkem upraveno %1$dx. Naposledy upravil %2$s dne %3$s.',
	),
	'EMAIL_TOPIC'			                                => 'Zaslat na e-mail',
	'ERROR_NO_ATTACHMENT'						=> 'Vybraná příloha již neexistuje.',

	'FILE_NOT_FOUND_404'						=> 'Soubor <strong>%s</strong> již neexistuje.',
	'FORK_TOPIC'							=> 'Zkopírovat téma',
	'FULL_EDITOR'			                                => 'Editor &amp; Náhled',

	'LINKAGE_FORBIDDEN'		=> 'You are not authorised to view, download or link from/to this site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'You have been notified about this topic, please login to view it.',
	'LOGIN_VIEWTOPIC'		=> 'The board requires you to be registered and logged in to view this topic.',

	'MAKE_ANNOUNCE'				                        => 'Změnit na “Ozámení”',
	'MAKE_GLOBAL'				                        => 'Změnit na “Globální oznámení”',
	'MAKE_NORMAL'				                        => 'Změnit na “Standartní téma”',
	'MAKE_STICKY'				                       	=> 'Změnit na “Důležité”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	          => 'You may select <strong>%d</strong> option',
		2	          => 'You may select up to <strong>%d</strong> options',
    		3	          => 'You may select up to <strong>%d</strong> options',
	),
	'MISSING_INLINE_ATTACHMENT'					=> 'Příloha <strong>%s</strong> již neexistuje.',
	'MOVE_TOPIC'				                        => 'Přesunout téma',

	'NO_ATTACHMENT_SELECTED'=> 'You haven’t selected an attachment to download or view.',
	'NO_NEWER_TOPICS'		=> 'There are no newer topics in this forum.',
	'NO_OLDER_TOPICS'		=> 'There are no older topics in this forum.',
	'NO_UNREAD_POSTS'		=> 'There are no new unread posts for this topic.',
	'NO_VOTE_OPTION'		=> 'You must specify an option when voting.',
	'NO_VOTES'							=> 'Zatím žádný hlas',

	'POLL_ENDED_AT'			                                => 'Anketa byla ukončena %s',
	'POLL_RUN_TILL'			                                => 'Anketa bude ukončena %s',
	'POLL_VOTED_OPTION'						=> 'Hlasoval jsi pro tuhle volbu',
	'POST_DELETED_RESTORE'						=> 'Příspěvek byl smazán, ale je možné jej obnovit.',
	'PRINT_TOPIC'							=> 'Vytisknout',

	'QUICK_MOD'				                        => 'Rychlé nástroje',
	'QUICKREPLY'			                                => 'Rychlá odpověď',
	'QUOTE'					                        => 'Citovat',

	'REPLY_TO_TOPIC'		                                => 'Odpovědět',
	'RESTORE'				                        => 'Obnovit',
	'RESTORE_TOPIC'			                                => 'Obnovit téma',
	'RETURN_POST'							=> '%sVrátit se do příspěvku%s',

	'SUBMIT_VOTE'							=> 'Odeslat hlas',

	'TOPIC_TOOLS'			                                => 'Nástroje tématu',
	'TOTAL_VOTES'							=> 'Celkem hlasů',

	'UNLOCK_TOPIC'			                                => 'Odemknout téma',

	'VIEW_INFO'							=> 'Podrobnosti o příspěvku',
	'VIEW_NEXT_TOPIC'		                                => 'Následující téma',
	'VIEW_PREVIOUS_TOPIC'	                                      	=> 'Předchozí téma',
	'VIEW_RESULTS'							=> 'Výsledek ankety',
	'VIEW_TOPIC_POSTS'		=> array(
		1		=> '%d příspěvek',
		2		=> '%d příspěvky',
		3		=> '%d příspěvků',
	),
	'VIEW_UNREAD_POST'						=> 'První nepřečtený příspěvek',
	'VOTE_SUBMITTED'						=> 'Tvůj hlas byl započítán.',
	'VOTE_CONVERTED'						=> 'U převedených anket není možné změnit volbu v anketě.',

));
