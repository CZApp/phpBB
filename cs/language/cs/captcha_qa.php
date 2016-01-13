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
	'CAPTCHA_QA'				                              => 'Otázka a odpověď',
	'CONFIRM_QUESTION_EXPLAIN'	                      => 'Pro zamezení automatických registrací je nutné, aby jsi svojí registraci ověřil odpovězením na otázku.',
	'CONFIRM_QUESTION_WRONG'	                        => 'Zadal jsi špatnou odpověď na otázku.',

	'QUESTION_ANSWERS'			                          => 'Odpovědi',
	'ANSWERS_EXPLAIN'			                            => 'Zde zadej správné odpovědi na otázku. Každou na samostatný řádek.',
	'CONFIRM_QUESTION'			                          => 'Otázka',

	'ANSWER'					                                => 'Odpověď',
	'EDIT_QUESTION'				                            => 'Upravit otázku',
	'QUESTIONS'					                              => 'Otázky',
	'QUESTIONS_EXPLAIN'			                          => 'Zde nastav doplněk Otázka a odpověď, který ověřuje uživatele pomocí položení otázky na kterou uživatel musí odpovědět. Otázku by měl uživatel zvládnou zodpovědět a přitom by neměla být dobře vyhledatelná ve vyhledávačích. Odpověď by měla být složená z mezer a znaků různých velikostí. Pro plnou funkčnost je nutné pro každý použitý jazyk definovat alespoň jednu otázku.',
	'QUESTION_DELETED'			                          => 'Otázka byla úspěšně smazána.',
	'QUESTION_LANG'				                            => 'Jazyk',
	'QUESTION_LANG_EXPLAIN'		                        => 'Zde vyber v jakém jazyce se má otázka zobrazovat.',
	'QUESTION_STRICT'			                            => 'Důrazná kontrola',
	'QUESTION_STRICT_EXPLAIN'	                        => 'Zde povol či zakaž zda má být kontrolována i velikost písmen, mezery a podobně.',

	'QUESTION_TEXT'				                            => 'Otázka',
	'QUESTION_TEXT_EXPLAIN'		                        => 'Zde zadej otázku, která bude uživatelům zobrazena při ověření.',

	'QA_ERROR_MSG'				                            => 'Vyplň všechna pole a zadej alespoň jednu odpověď.',
	'QA_LAST_QUESTION'			                          => 'Nemůžeš smazat všechny otázky pokud je pro ověření používán tento doplněk.',
));