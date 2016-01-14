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
	'ALL_AVAILABLE'			                              => 'Všechny dostupné',
	'ALL_RESULTS'			                                => 'Všechny výsledky',

	'DISPLAY_RESULTS'		                              => 'Zobrazit výsledky jako',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	    => 'Nalezen %d odpovídající záznam',
		2	    => 'Nalezeny %d odpovídající záznamy',
    3	    => 'Nalezeno %d odpovídajících záznamů',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	    => 'Nalezeno více jak %d odpovídající záznam',
		2	    => 'Nalezeno více jak %d odpovídající záznamy',
    3	    => 'Nalezeno více jak %d odpovídajících záznamů',
	),

	'GLOBAL'				                                  => 'Globální oznámení',

	'IGNORED_TERMS'			                              => 'vynecháno',
	'IGNORED_TERMS_EXPLAIN'	                          => 'Následující slova byla vynechána kvůli svému častému výskytu: <strong>%s</strong>.',

	'JUMP_TO_POST'			                              => 'Přejít na příspěvek',

	'LOGIN_EXPLAIN_EGOSEARCH'	                        => 'Pro vyhledání tvých příspěvků se musíš nejdříve přihlásit.',
	'LOGIN_EXPLAIN_UNREADSEARCH'                      => 'Pro vyhledání nepřečtených příspěvků se musíš nejdříve přihlásit.',
	'LOGIN_EXPLAIN_NEWPOSTS'	                        => 'Pro vyhledání nových příspěvků se musíš nejdříve přihlásit.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	    => 'Bohužel jsi zadal příliš mnoho slov k vyhledání. Nejvýše lze zadat %1$d slovo.',
		2	    => 'Bohužel jsi zadal příliš mnoho slov k vyhledání. Nejvýše lze zadat %1$d slova.',
    3	    => 'Bohužel jsi zadal příliš mnoho slov k vyhledání. Nejvýše lze zadat %1$d slov.',
	),

	'NO_KEYWORDS'			                                => 'Pro vyhledávání musíš zadat minimálně jedno klíčové slovo o délce v rozmezí %s až %s znaků. Zástupný znak <strong>*</strong> se nepočítá.',
	'NO_RECENT_SEARCHES'	                            => 'Nebylo nalezeno žádné předchozí vyhledávání.',
	'NO_SEARCH'				                                => 'Nemáš dostatečná oprávnění pro vyhledávání.',
	'NO_SEARCH_RESULTS'		                            => 'Bohužel se nepodařilo najít žádné odpovídající výsledky.',
	'NO_SEARCH_LOAD'		                              => 'Je nám líto, ale kvůli zátěži serveru je vyhledávání dočasně nedostupné.',
	'NO_SEARCH_TIME'		=> array(
		1	    => 'Nemůžeš vyhledávat tak brzy po předchozím vyhledávání. Zkus to znovu za %d vteřinu.',
		2	    => 'Nemůžeš vyhledávat tak brzy po předchozím vyhledávání. Zkus to znovu za %d vteřiny.',
    3	    => 'Nemůžeš vyhledávat tak brzy po předchozím vyhledávání. Zkus to znovu za %d vteřin.',
	),
	'NO_SEARCH_UNREADS'		                            => 'Vyhledávání nepřečtených příspěvků je bohužel zakázané.',
	'WORD_IN_NO_POST'		                              => 'Vyhledávání bylo neúspěšné, protože slovo <strong>%s</strong> není obsaženo v žádném příspěvku.',
	'WORDS_IN_NO_POST'		                            => 'Vyhledávání bylo neúspěšné, protože slova <strong>%s</strong> nejsou obsažena v žádném příspěvku.',

	'POST_CHARACTERS'		                              => 'prvních znaků příspěvku',
	'PHRASE_SEARCH_DISABLED'	                        => 'Vyhledávání přesné schody je bohužel zakázáné.',

	'RECENT_SEARCHES'		                              => 'Nejčastější vyhledávání',
	'RESULT_DAYS'			                                => 'Vyhledávat v období za poslední',
	'RESULT_SORT'			                                => 'Seřadit podle',
	'RETURN_FIRST'			                              => 'Zobrazit',
	'GO_TO_SEARCH_ADV'	                              => 'Přejít na rozšířené vyhledávání',

	'SEARCHED_FOR'				                            => 'Vyledávaný text',
	'SEARCHED_TOPIC'			                            => 'Prohledávané téma',
	'SEARCHED_QUERY'			                            => 'Vyhledávaný dotaz',
	'SEARCH_ALL_TERMS'			                          => 'Vyhledávat všechna slova či přesnou schodu s dotazem',
	'SEARCH_ANY_TERMS'			                          => 'Vyhledávat kterékoliv slovo',
	'SEARCH_AUTHOR'				                            => 'Autor',
	'SEARCH_AUTHOR_EXPLAIN'		                        => 'Jako zástupný znak lze použít <strong>*</strong>.',
	'SEARCH_FIRST_POST'			                          => 'Prvním příspěvku tématu',
	'SEARCH_FORUMS'				                            => 'Vyhledávat v sekcích',
	'SEARCH_FORUMS_EXPLAIN'		                        => 'Zde můžeš vybrat sekce, ve kterých chceš vyhledávat. Podřazené sekce jsou prohledávány automaticky, pokud nevypneš možnost "Prohledávat podřazené sekce".',
	'SEARCH_IN_RESULTS'			                          => 'Vyhledávat ve výsledkách',
	'SEARCH_KEYWORDS_EXPLAIN'	                        => 'Zde zadej klíčová slova pro vyhledávání. Pokud musí být slovo ve vyhledávání přítomno, umísti před něj znak <strong>+</strong>. Pokud slovo nemusí být přítomno, zadej znak <strong>-</strong>. Pro schodu alespoň s jedním klíčovým slovem, je nutné je umístit do závorem a oddělit znakem <strong>|</strong>. Pro náhradu části slova lze použít znak <strong>*</strong>.',
	'SEARCH_MSG_ONLY'			                            => 'Obsahu',
	'SEARCH_OPTIONS'			                            => 'Možnosti vyhledávání',
	'SEARCH_QUERY'				                            => 'Dotaz k vyhledání',
	'SEARCH_SUBFORUMS'			                          => 'Prohledávat podřazené sekce',
	'SEARCH_TITLE_MSG'			                          => 'Předmětu i obsahu',
	'SEARCH_TITLE_ONLY'			                          => 'Předmětu tématu',
	'SEARCH_WITHIN'				                            => 'Vyhledávat v',
	'SORT_ASCENDING'			                            => 'Vzestupně',
	'SORT_AUTHOR'				                              => 'Autora',
	'SORT_DESCENDING'			                            => 'Sestupně',
	'SORT_FORUM'				                              => 'Sekce',
	'SORT_POST_SUBJECT'			                          => 'Předmětu',
	'SORT_TIME'					                              => 'Času odeslání',
	'SPHINX_SEARCH_FAILED'		                        => 'Vyhledávání se bohužel nezdařilo: %s',
	'SPHINX_SEARCH_FAILED_LOG'	                      => 'Je nám líto, ale vyhledávání nebylo úspěšné. Více informací je v chybovém záznamu.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	    => 'Musíš zadat minimálně %d znak z přezdívky autora.',
		2	    => 'Musíš zadat minimálně %d znaky z přezdívky autora.',
    3	    => 'Musíš zadat minimálně %d znaků z přezdívky autora.',
	),
));
