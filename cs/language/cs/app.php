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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CONTROLLER_ARGUMENT_VALUE_MISSING'	              => 'Chybá hodnota pro argument #%1$s: <strong>%3$s</strong> ve třídě <strong>%2$s</strong>',
	'CONTROLLER_NOT_SPECIFIED'			                  => 'Nebyl specifikován žádný kontrolor.',
	'CONTROLLER_METHOD_NOT_SPECIFIED'	                => 'Nebyla specifikována metoda pro kontrolora.',
	'CONTROLLER_SERVICE_UNDEFINED'		                => 'Služba pro kontrolora "<strong>%s</strong>" není definována v ./config/services.yml.',
));
