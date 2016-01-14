<?php
/**
 *
 * Jazykový soubor phpBB systému.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Plný copyright a licence se nachází v souboru
 * docs/CREDITS.txt.
 *
 */

/**
 * 
 * Informace překladatele
 * 
 * @copyright (c) CZApp <http://www.czapp.cz>
 * @license GNU General Public License, version 2 (GPL-2.0)
 * 
 * Pro hlášení chyb v překladu použij náš reportní
 * systém <http://www.czapp.cz/report>
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
	'ACTIVE_TOPICS'			                              => 'Aktivní témata',
	'ANNOUNCEMENTS'			                              => 'Oznámení',

	'FORUM_PERMISSIONS'		                            => 'Má oprávnění',

	'ICON_ANNOUNCEMENT'		                            => 'Oznámení',
	'ICON_STICKY'			                                => 'Důležité',

	'LOGIN_NOTIFY_FORUM'	                            => 'Byl jsi upozorněn na tuto sekci, pro její zobrazení se musíš nejdříve přihlásit.',

	'MARK_TOPICS_READ'		                            => 'Označit témata jako přečtená',

	'NEW_POSTS_HOT'			                              => 'Nové příspěvky [ Populární ]', // Dále nepoužito
	'NEW_POSTS_LOCKED'		                            => 'Nové příspěvky [ Uzamknuto ]', // Dále nepoužito
	'NO_NEW_POSTS_HOT'		                            => 'Žádné nové příspěvky [ Populární ]', // Dále nepoužito
	'NO_NEW_POSTS_LOCKED'	                            => 'Žádné nové příspěvky [ Uzamkknuto ]',  // Dále nepoužito
	'NO_READ_ACCESS'		                              => 'Nemáš dostatečná oprávnění pro čtení témat v této sekci.',
	'NO_UNREAD_POSTS_HOT'		                          => 'Žádné nepřečtené příspěvky [ Populární ]',
	'NO_UNREAD_POSTS_LOCKED'	                        => 'Žádné nepřečtené příspěvky [ Uzamknuto ]',

	'POST_FORUM_LOCKED'		                            => 'Fórum je uzamknuto',

	'TOPICS_MARKED'			                              => 'Témata byla úspěšně označena jako přečtená.',

	'UNREAD_POSTS_HOT'		                            => 'Nepřečtené příspěvky [ Populární ]',
	'UNREAD_POSTS_LOCKED'	                            => 'Nepřečtené příspěvky [ Uzamknuto ]',

	'VIEW_FORUM'			                                => 'Prohlídnout fórum',
	'VIEW_FORUM_TOPICS'		=> array(
		1     => '%d téma',
		2	    => '%d témata',
    3	    => '%d témat',
	),
));
