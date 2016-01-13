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
	'ADD_ATTACHMENT'			                            => 'Nahrát přílohu',
	'ADD_ATTACHMENT_EXPLAIN'	                        => 'Zde máš možnost k příspěvku připojit i přílohu, kterou si ostatní uživatelé mohou stáhnout.',
	'ADD_FILE'					                              => 'Přidat soubor',
	'ADD_POLL'					                              => 'Hlasování',
	'ADD_POLL_EXPLAIN'			                          => 'Zde máš možnost k tématu připojit hlasování.<br /><strong>Pokud nechceš přidávat hlasování, ponech všechna pole prázdná.</strong>',
	'ALREADY_DELETED'			                            => 'Příspěvek byl již smazán.',
	'ATTACH_DISK_FULL'			                          => 'Na disku serveru není dostatek místa pro uložení přílohy.',
	'ATTACH_QUOTA_REACHED'		                        => 'Byl dosažen limit citací.',
	'ATTACH_SIG'				                              => 'Připojit podpis',

	'BBCODE_A_HELP'				                            => 'Pro umístění přílohy do příspěvku použij BBKód následovně: [attachment=číslo přílohy]název_přílohy.přípona přílohy[/attachment]',
	'BBCODE_B_HELP'				                            => 'Pro vytvoření tučného písma použij BBKód následovně: [b]text[/b]',
	'BBCODE_C_HELP'				                            => 'Pro vytvoření kódu použij BBKód následovně: [code]kód[/code]',
	'BBCODE_D_HELP'				                            => 'Pro vložení Flash prvku použij BBKód následovně: [flash=šířka,výška]http://domena.cz/nazev_prvku.swf[/flash]',
	'BBCODE_F_HELP'				                            => 'Pro změnu velikosti písma použij BBKód následovně: [size=85]malé písmo[/size]',
	'BBCODE_IS_OFF'				                            => '%sBBKódy%s - <em>zakázané</em>',
	'BBCODE_IS_ON'				                            => '%sBBKódy%s - <em>povolené</em>',
	'BBCODE_I_HELP'				                            => 'Pro vytvoření nakloněného písma použij BBKód následovně: [i]text[/i]',
	'BBCODE_L_HELP'				                            => 'Pro vytvoření seznamu použij BBKód následovně: [list][*]text[/list]',
	'BBCODE_LISTITEM_HELP'		                        => 'Pro vytvoření nové odrážky seznamu použij BBKód následovně: [*]text',
	'BBCODE_O_HELP'				                            => 'Pro vytvoření číslovaného seznamu použij BBKód následovně: [list=1][*]text[/list] nebo [list=a][*]text[/list]',
	'BBCODE_P_HELP'				                            => 'Pro vložení obrázku použij BBKód následovně: [img]http://domena.cz/nazev_obrazku.png[/img]',
	'BBCODE_Q_HELP'				                            => 'Pro citování textu použij BBKód následovně: [quote]citovaný text[/quote]',
	'BBCODE_S_HELP'				                            => 'Pro obarvení písma použij BBKód následovně: [color=red]text[/color] nebo [color=#FF0000]text[/color]',
	'BBCODE_U_HELP'				                            => 'Pro vytvoření podtrhnutého písma použij BBKód následovně: [u]text[/u]',
	'BBCODE_W_HELP'				                            => 'Pro vytvoření odkazu použij BBKód následovně: [url]http://domena.cz[/url] nebo [url=http://domena.cz]název odkazu[/url]',
	'BBCODE_Y_HELP'				                            => 'Seznam: Přidat položku seznamu',
	'BUMP_ERROR'				                              => 'Nelze oživit téma tak brzy po posledním příspěvku.',

	'CANNOT_DELETE_REPLIED'		                        => 'Smazat lze jen příspěvek na který nebylo odpovězeno.',
	'CANNOT_EDIT_POST_LOCKED'	                        => 'Příspěvek je uzamčený. Nelze ho tedy upravit.',
	'CANNOT_EDIT_TIME'			                          => 'Časový limit pro úpravu či smazání příspěvku již vypršel.',
	'CANNOT_POST_ANNOUNCE'		                        => 'Nemáš dostatečná oprávnění pro odeslání oznámení.',
	'CANNOT_POST_STICKY'		                          => 'Nemáš dostatečná oprávnění pro odeslání důležitého tématu.',
	'CHANGE_TOPIC_TO'			                            => 'Změnit téma na',
	'CHARS_POST_CONTAINS'		=> array(
		1	    => 'Text obsahuje %1$d znak.',
		2	    => 'Text obsahuje %1$d znaky.',
    3	    => 'Text obsahuje %1$d znaků.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	    => 'Podpis obsahuje %1$d znak.',
		2	    => 'Podpis obsahuje %1$d znaky.',
    3	    => 'Podpis obsahuje %1$d znaků.',
	),
	'CLOSE_TAGS'				                              => 'Uzavřít BBKódy',
	'CURRENT_TOPIC'				                            => 'Aktuální téma',

	'DELETE_FILE'				                              => 'Smazat',
	'DELETE_MESSAGE'			                            => 'Smazat',
	'DELETE_MESSAGE_CONFIRM'	                        => 'Opravdu chceš soukromou zprávu smazat?',
	'DELETE_OWN_POSTS'			                          => 'Smazat můžeš jenom svůj vlastní příspěvek.',
	'DELETE_PERMANENTLY'		                          => 'Důkladně smazat',
	'DELETE_POST_CONFIRM'		                          => 'Opravdu chceš příspěvek smazat?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	                => 'Opravdu chceš <strong>důkladně</strong> smazat příspěvek?',
	'DELETE_POST_PERMANENTLY'	                        => 'Takto smazaný příspěvek již nepůjde obnovit!',
	'DELETE_POSTS_CONFIRM'		                        => 'Opravdu chceš příspěvky smazat?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	              => 'Opravdu chceš <strong>důkladě</strong> smazat příspěvky?',
	'DELETE_REASON'				                            => 'Důvod smazání',
	'DELETE_REASON_EXPLAIN'		                        => 'Důvod smazání viditelný pro moderátory',
	'DELETE_POST_WARN'			                          => 'Smazat příspěvek',
	'DELETE_TOPIC_CONFIRM'		                        => 'Opravdu chceš téma smazat?',
	'DELETE_TOPIC_PERMANENTLY'	                      => 'Takto smazané téma již nepůjde obnovit!',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	              => 'Opravdu chceš <strong>důkladně</strong> smazat téma?',
	'DELETE_TOPICS_CONFIRM'		                        => 'Opravdu chceš témata smazat?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	              => 'Opravdu chceš <strong>důkladě</strong> smazat témata?',
	'DISABLE_BBCODE'			                            => 'Zakázat BBKódy',
	'DISABLE_MAGIC_URL'			                          => 'Zakázat vytváření URL adres',
	'DISABLE_SMILIES'			                            => 'Zakázat smajlíky',
	'DISALLOWED_CONTENT'		                          => 'Nahrávání bylo ukončeno, protože soubor byl identifikován jako možný útok na server.',
	'DISALLOWED_EXTENSION'		                        => 'Typ souboru %s není povolený.',
	'DRAFT_LOADED'				                            => 'Koncept byl úspěšně načten a nyní můžeš příspěvek dokončit.<br />Po odeslání příspěvku bude koncept automaticky smazán.',
	'DRAFT_LOADED_PM'			                            => 'Koncept byl úspěšně načten a nyní můžeš soukromou zprávu dokončit.<br />Po odeslání soukromé zprávy bude koncept automaticky smazán.',
	'DRAFT_SAVED'				                              => 'Koncept byl úspěšně uložen.',
	'DRAFT_TITLE'				                              => 'Název konceptu',

	'EDIT_REASON'				                              => 'Důvod úpravy',
	'EMPTY_FILEUPLOAD'			                          => 'Nahrávaný soubor je prázdný.',
	'EMPTY_MESSAGE'				                            => 'Pro odeslání musíš nejprve vyplnit text.',
	'EMPTY_REMOTE_DATA'			                          => 'Soubor se nepodařilo nahrát, zkus nahrátí provést ručně.',

	'FLASH_IS_OFF'				                            => 'Flash - <em>zakázaný</em>',
	'FLASH_IS_ON'				                              => 'Flash - <em>povolený</em>',
	'FLOOD_ERROR'				                              => 'Nemůžeš zaslat nový příspěvek tak brzy po posledním příspěvku.',
	'FONT_COLOR'				                              => 'Paleta barev',
	'FONT_COLOR_HIDE'			                            => 'Skrýt paletu',
	'FONT_HUGE'					                              => 'Obrovské',
	'FONT_LARGE'				                              => 'Velké',
	'FONT_NORMAL'				                              => 'Standartní',
	'FONT_SIZE'					                              => 'Velikost písma',
	'FONT_SMALL'				                              => 'Malé',
	'FONT_TINY'					                              => 'Drobné',

	'GENERAL_UPLOAD_ERROR'		                        => 'Nepodařilo se nahrát přílohu do %s.',

	'IMAGES_ARE_OFF'			                            => 'Obrázky - <em>zakázané</em>',
	'IMAGES_ARE_ON'				                            => 'Obrázky - <em>povolené</em>',
	'INVALID_FILENAME'			                          => '%s je neplatný název souboru',

	'LOAD'						                                => 'Načíst',
	'LOAD_DRAFT'				                              => 'Načíst koncept',
	'LOAD_DRAFT_EXPLAIN'		                          => 'Zde si můžeš vybrat koncept, který chceš nahrát. Tvůj aktuální příspěvek bude konceptem nahrazen.',
	'LOGIN_EXPLAIN_BUMP'		                          => 'Pro oživení tématu se musíš nejprve přihlásit.',
	'LOGIN_EXPLAIN_DELETE'		                        => 'Pro smazání příspěvku či tématu se musíš nejprve přihlásit.',
	'LOGIN_EXPLAIN_POST'		                          => 'Pro vytvoření tématu se musíš nejprve přihlásit.',
	'LOGIN_EXPLAIN_QUOTE'		                          => 'Pro citování příspěvku se musíš nejprve přihlásit.',
	'LOGIN_EXPLAIN_REPLY'		                          => 'Pro odpovězení do tématu se musíš nejprve přihlásit.',

	'MAX_FONT_SIZE_EXCEEDED'	                        => 'Můžeš použít maximální velikost písma %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	    => 'Flash objekt může být vysoký nejvýše %dpx.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	    => 'Flash objekt může být široký nejvýše %dpx.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	    => 'Obrázek může být vysoký nejvýše %1$dpx.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	    => 'Obrázek může být široký nejvýše %dpx.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	    => '', // tato položka se zobrazuje pokud je text neomezen
		1	    => 'Zde zadej text. Může obsahovat maximálně <strong>%d</strong> znak.',
		2	    => 'Zde zadej text. Může obsahovat maximálně <strong>%d</strong> znaky.',
    3	    => 'Zde zadej text. Může obsahovat maximálně <strong>%d</strong> znaků.',
	),
	'MESSAGE_DELETED'			                            => 'Zpráva byla úspěšně smazána.',
	'MORE_SMILIES'				                            => 'Zobrazit další smajlíky',

	'NOTIFY_REPLY'				                            => 'Upozornit na odpověď',
	'NOT_UPLOADED'				                            => 'Soubor nemohl být nahrán.',
	'NO_DELETE_POLL_OPTIONS'	                        => 'Nemůžeš smazat volbu hlasování, která již dostala hlas.',
	'NO_PM_ICON'				                              => 'Žádná ikona SZ',
	'NO_POLL_TITLE'				                            => 'Musíš zadat hlasovací otázku.',
	'NO_POST'					                                => 'Požadovaný příspěvek bohužel neexistuje.',
	'NO_POST_MODE'				                            => 'Nevybral jsi typ příspěvku.',
	'NO_TEMP_DIR'				                              => 'Dočasný adresář se nepodařilo najít nebo do něj nelze zapisovat.',

	'PARTIAL_UPLOAD'			                            => 'Příloha byla nahrána jen z části.',
	'PHP_UPLOAD_STOPPED'		                          => 'Nahrávání bylo ukončeno php.',
	'PHP_SIZE_NA'				                              => 'Příloha je příliš veliká.<br />Nelze ignorovat maximální velikost definovanou PHP v souboru php.ini.',
	'PHP_SIZE_OVERRUN'			                          => 'Příloha je příliš veliká, maximální povolená velikost je %1$d %2$s.<br />Tato velikost je definována v souboru php.ini a nelze ji přepsat.',
	'PLACE_INLINE'				                            => 'Umístit',
	'POLL_DELETE'				                              => 'Smazat hlasování',
	'POLL_FOR'					                              => 'Ukončit hlasování za',
	'POLL_FOR_EXPLAIN'			                          => 'Zadej <strong>0</strong> pro nekonečné hlasování.',
	'POLL_MAX_OPTIONS'			                          => 'Možností na uživatele',
	'POLL_MAX_OPTIONS_EXPLAIN'	                      => 'Zde máš možnost nastavit pro kolik možností může jeden uživatel hlasovat.',
	'POLL_OPTIONS'				                            => 'Hlasovací možnosti',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	    => 'Můžeš zadat <strong>%d</strong> možnost.',
		2	    => 'Můžeš zadat <strong>%d</strong> možnosti, každou na samostatný řádek.',
    3	    => 'Můžeš zadat <strong>%d</strong> možností, každou na samostatný řádek.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	    => 'Zadat můžeš <strong>%d</strong> možnost. Pokud možnosti nějak upravíš, dojde k vynulování hlasování.',
		2	    => 'Každou možnost umísti na samostatný řádek. Zadat můžeš <strong>%d</strong> možnosti. Pokud možnosti nějak upravíš, dojde k vynulování hlasování.',
    3	    => 'Každou možnost umísti na samostatný řádek. Zadat můžeš <strong>%d</strong> možností. Pokud možnosti nějak upravíš, dojde k vynulování hlasování.',
	),
	'POLL_QUESTION'				                            => 'Hlasovací otázka',
	'POLL_TITLE_TOO_LONG'		                          => 'Hlasovací otázka musí obsahovat méně než <strong>100</strong> znaků.',
	'POLL_TITLE_COMP_TOO_LONG'	                      => 'Zpracovaná hlasovací otázka je příliš dlouhá. Zkus smazat nějaké smajlíky a BBKódy.',
	'POLL_VOTE_CHANGE'			                          => 'Povolit změnu hlasu',
	'POLL_VOTE_CHANGE_EXPLAIN'	                      => 'Zde máš možnost povolit uživatelům změnit jejich hlas.',
	'POSTED_ATTACHMENTS'		                          => 'Zveřejněné přílohy',
	'POST_APPROVAL_NOTIFY'		                        => 'O schválení či zamítnutí příspěvku budeš upozorněn.',
	'POST_CONFIRMATION'			                          => 'Ověření',
	'POST_CONFIRM_EXPLAIN'		                        => 'Pro zamezení automatického psaní příspěvků je nutné provést tvé ověření pomocí zobrazeného kódu. Pokud se kód nezobrazuje, kontaktuj %sadministrátora%s.',
	'POST_DELETED'				                            => 'Příspěvek byl úspěšně smazán.',
	'POST_EDITED'				                              => 'Příspěvek byl úspěšně upraven.',
	'POST_EDITED_MOD'			                            => 'Příspěvek byl úspěšně upraven, ale před zveřejněním musí být schválen moderátorem.',
	'POST_GLOBAL'				                              => 'Globální',
	'POST_ICON'					                              => 'Ikony tématu',
	'POST_NORMAL'				                              => 'Standartní',
	'POST_REVIEW'				                              => 'Přehodnocení příspěvku',
	'POST_REVIEW_EDIT'			                          => 'Přehodnocení příspěvku',
	'POST_REVIEW_EDIT_EXPLAIN'	                      => 'Mezitím, kdy jsi příspěvek upravoval, ho stihl upravit jiný uživatel. Opravdu chceš příspěvek odeslat a přepsat jeho změny?',
	'POST_REVIEW_EXPLAIN'		                          => 'Do tématu stihl přispět jiný uživatel. Nyní máš možnost svůj příspěvek upravit, aby byl aktuální k novým příspěvekům.',
	'POST_STORED'				                              => 'Příspěvek byl úspěšně odeslán.',
	'POST_STORED_MOD'			                            => 'Příspěvek byl úspěšně odeslán, ale před zveřejněním musí být schválen moderátorem.',
	'POST_TOPIC_AS'				                            => 'Odeslat téma jako',
	'PROGRESS_BAR'				                            => 'Ukazatel postupu',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	    => 'Citace nemůže obsahovat další vnořenou citaci.',
		2	    => 'Citace může obsahovat pouze %d vnořené citace.',
    3	    => 'Citace může obsahovat pouze %d vnořených citací.',
	),
	'QUOTE_NO_NESTING'			                          => 'Nemůžeš vkládat citace do jiných citací.',

	'REMOTE_UPLOAD_TIMEOUT'		                        => 'Soubor nemohl být nahrát, protože vypršel časový limit.',
	'SAVE'						                                => 'Uložit',
	'SAVE_DATE'					                              => 'Uložit jako',
	'SAVE_DRAFT'				                              => 'Uložit koncept',
	'SAVE_DRAFT_CONFIRM'		                          => 'V konceptu je uložený pouze předmět a text. Přílohy a hlasování uloženy nebudou. Opravdu chceš koncept uložit?',
	'SMILIES'					                                => 'Smajlíci',
	'SMILIES_ARE_OFF'			                            => 'Smajlíci - <em>zakázaní</em>',
	'SMILIES_ARE_ON'			                            => 'Smajlíci - <em>povolení</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'                      => 'Časový limit důležitého / globálního tématu',
	'STICK_TOPIC_FOR'			                            => 'Změnit na standartní po',
	'STICK_TOPIC_FOR_EXPLAIN'	                        => 'Zadej <strong>0</strong> pro nezměnení na standartní. Měj na paměti, že funkce je vázána k datu odeslání.',
	'STYLES_TIP'				                              => 'Rada: Pro rychlejší aplikaci BBKódů označ text.',

	'TOO_FEW_CHARS'				                            => 'Text obsahuje příliš málo znaků.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	    => 'Text musí obsahovat minimálně %1$d znak.',
		2	    => 'Text musí obsahovat minimálně %1$d znaky.',
    3	    => 'Text musí obsahovat minimálně %1$d znaků.',
	),
	'TOO_FEW_POLL_OPTIONS'		                        => 'Musíš zadat minimálně dvě hlasovací možnosti.',
	'TOO_MANY_ATTACHMENTS'  => array(
		1	    => 'Do příspěvku můžeš nahrát maximálně %d přílohu.',
		2	    => 'Do příspěvku můžeš nahrát maximálně %d přílohy.',
    3	    => 'Do příspěvku můžeš nahrát maximálně %d příloh.',
	),
	'TOO_MANY_CHARS'			                            => 'Text obsahuje příliš mnoho znaků.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	    => 'Text může obsahovat maximálně %1$d znaky.',
    3	    => 'Text může obsahovat maximálně %1$d znaků.',
	),
	'TOO_MANY_POLL_OPTIONS'		                        => 'Zadal jsi příliš mnoho hlasovacích možností.',
	'TOO_MANY_SMILIES'		=> array(  
    1	    => 'Text může obsahovat maximálně %d smajlíka.',  
		2	    => 'Text může obsahovat maximálně %d smajlíky.',
    3	    => 'Text může obsahovat maximálně %d smajlíků.',
	),
	'TOO_MANY_URLS'		=> array(  
    1	    => 'Text může obsahovat maximálně %d webovou adresu.',  
		2	    => 'Text může obsahovat maximálně %d webové adresy.',
    3	    => 'Text může obsahovat maximálně %d webových adres.',
	),
	'TOO_MANY_USER_OPTIONS'		                        => 'Nemůžeš uživatelům povolit hlasování pro více možností, než jich v hlasování je.',
	'TOPIC_BUMPED'				                            => 'Téma bylo úspěšně oživeno.',

	'UNAUTHORISED_BBCODE'		                          => 'Následující BBKódy nemůžeš použít: %s.',
	'UNGLOBALISE_EXPLAIN'		                          => 'Pro změnu tématu z globálního musíš vybrat sekci ve které se bude téma zobrazovat.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	                => 'Text obsahuje nepovolené znaky:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	                => 'Předmět obsahuje nepovolené znaky:<br />%s',
	'UPDATE_COMMENT'			                            => 'Aktualizovat popis',
	'URL_INVALID'				                              => 'Zadaná webová adresa je neplatná.',
	'URL_NOT_FOUND'				                            => 'Požadovaný soubor se nepodařilo najít.',
	'URL_IS_OFF'				                              => 'Webové adresy - <em>zakázané</em>',
	'URL_IS_ON'					                              => 'Webové adresy - <em>povolené</em>',
	'USER_CANNOT_BUMP'			                          => 'Nemáš dostatečná oprávnění pro oživování témat.',
	'USER_CANNOT_DELETE'		                          => 'Nemáš dostatečná oprávnění pro mazání příspěvků.',
	'USER_CANNOT_EDIT'			                          => 'Nemáš dostatečná oprávnění pro úpravu příspěvků.',
	'USER_CANNOT_REPLY'			                          => 'Nemáš dostateční oprávnění pro odpovídání do témat.',
	'USER_CANNOT_FORUM_POST'	                        => 'Nelze psát příspěvky do sekce, která to nepodporuje.',

	'VIEW_MESSAGE'				                            => '%sPřejít na příspěvek%s',
	'VIEW_PRIVATE_MESSAGE'		                        => '%sPřejít na soukromou zprávu%s',

	'WRONG_FILESIZE'			                            => 'Soubor je příliš veliký, maximální povolená velikost je %1$d %2$s.',
	'WRONG_SIZE'				                              => 'Obrázek s rozměry %6$s x %5$s (výšky x šířky) nelze vložit. Musí mít velikost od %2$s x %1$s do %4$s x %3$s.',
));
