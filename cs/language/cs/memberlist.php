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
	'ABOUT_USER'			                                => 'Profil',
	'ACTIVE_IN_FORUM'		                              => 'Nejaktivnější v sekci',
	'ACTIVE_IN_TOPIC'		                              => 'Nejaktivnější v tématu',
	'ADD_FOE'				                                  => 'Přidat nepřítele',
	'ADD_FRIEND'			                                => 'Přidat přítele',
	'AFTER'					                                  => 'Po',

	'ALL'					                                    => 'Vše',

	'BEFORE'				                                  => 'Před',

	'CC_SENDER'				                                => 'Zaslat mi kopii.',
	'CONTACT_ADMIN'			                              => 'Kontaktovat administrátora',

	'DEST_LANG'				                                => 'Jazyk',
	'DEST_LANG_EXPLAIN'		                            => 'Zde můžeš vybrat preferovaný jazyk příjemce zprávy.',

	'EDIT_PROFILE'			                              => 'Upravit profil',

	'EMAIL_BODY_EXPLAIN'	                            => 'Zde popiš problém, který chceš sdělit administrátorovi. Zpráva bude odeslána jako prostý text, takže nepoužívej HTML ani BBKódy.',
	'EMAIL_DISABLED'		                              => 'Je nám líto, ale funkce e-mailů je vypnuta.',
	'EMAIL_SENT'			                                => 'E-mail byl úspěšně odeslán.',
	'EMAIL_TOPIC_EXPLAIN'	                            => 'Zpráva bude odeslána jako prostý text, takže nepoužívej HTML ani BBKódy. Všechny důležité informace o tématu jsou vloženy automaticky.',
	'EMPTY_ADDRESS_EMAIL'	                            => 'Musíš vyplnit e-mailovou adresu příjemce.',
	'EMPTY_MESSAGE_EMAIL'	                            => 'Musíš vyplnit text e-mailu.',
	'EMPTY_MESSAGE_IM'		                            => 'Musíš vyplnit text zprávy.',
	'EMPTY_NAME_EMAIL'		                            => 'Musíš vyplnit jméno příjemce.',
	'EMPTY_SENDER_EMAIL'	                            => 'Musíš vyplnit e-mailovou zprávu odesílatele.',
	'EMPTY_SENDER_NAME'		                            => 'Musíš vyplnit jméno odesílatele.',
	'EMPTY_SUBJECT_EMAIL'	                            => 'Musíš vyplnit předmět e-mailu.',
	'EQUAL_TO'				                                => 'Rovná se',
                                                                                                         
	'FIND_USERNAME_EXPLAIN'	                          => 'Zde máš možnost vyhledat členy podle zadaných kritérií. Jako zástupný znak lze použít <strong>*</strong> a pro datum použij formát <strong>ROK-MĚSÍC-DEN</strong>, např.: <em>2016-01-18</em>. Pro výběr více členů můžeš použít zaškrtávací políčka.',
	'FLOOD_EMAIL_LIMIT'		                            => 'Nemůžeš odeslat e-mail tak brzy po předchozím.',

	'GROUP_LEADER'			                              => 'Vedoucí skupiny',

	'HIDE_MEMBER_SEARCH'	                            => 'Skrýt vyhledávání',

	'IM_ADD_CONTACT'		                              => 'Přidat do kontaktů',
	'IM_DOWNLOAD_APP'		                              => 'Stáhnou aplikaci',
	'IM_JABBER'				                                => 'Vezmi na vědomí, že příjemce může mít zakázané přijímání zpráv od uživatelů, kteří nejsou v jeho kontaktech.',
	'IM_JABBER_SUBJECT'		                            => 'Toto je automaticky zaslaná zpráva z %2$s od %1$s. Na tuto zprávu neodpovídej!',
	'IM_MESSAGE'			                                => 'Má zpráva',
	'IM_NAME'				                                  => 'Mé jméno',
	'IM_NO_DATA'			                                => 'Je nám líto, ale není zde žádný kontakt na člena.',
	'IM_NO_JABBER'			                              => 'Je nám líto, ale funkce zasílání Jabber zpráv přes fórum je vypnuta.',
	'IM_RECIPIENT'			                              => 'Příjemce',
	'IM_SEND'				                                  => 'Zaslat zprávu',
	'IM_SEND_MESSAGE'		                              => 'Odeslat zprávu',
	'IM_SENT_JABBER'		                              => 'Zpráva pro %1$s byla úspěšně odeslána.',
	'IM_USER'				                                  => 'Zaslat zprávu',

	'LAST_ACTIVE'				                              => 'Naposledy aktivní',
	'LESS_THAN'					                              => 'Méně než',
	'LIST_USERS'				=> array(
		1	    => '%d člen',
		2	    => '%d členi',
    3	    => '%d členů',
	),
	'LOGIN_EXPLAIN_TEAM'		                          => 'Pro zobrazení členů týmu se musíš nejprve přihlásit.',
	'LOGIN_EXPLAIN_MEMBERLIST'	                      => 'Pro zobrazení seznamu členů se musíš nejprve přihlásit.',
	'LOGIN_EXPLAIN_SEARCHUSER'	                      => 'Pro vyhledání člena se musíš nejprve přihlásit.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	                      => 'Pro zobrazení profilu člena se musíš nejprve přihlásit.',

	'MANAGE_GROUP'			                              => 'Spravovat skupinu',
	'MORE_THAN'				                                => 'Více jak',

	'NO_CONTACT_FORM'		                              => 'Je nám líto, ale formulář pro kontaktování administrátora je vypnutý.',
	'NO_CONTACT_PAGE'		                              => 'Je nám líto, ale stránka pro kontaktování administrátora je vypnuta.',
	'NO_EMAIL'				                                => 'Nemáš dostatečná oprávnění pro odeslání e-mailu.',
	'NO_VIEW_USERS'			                              => 'Nemáš dostatečná oprávnění pro zobrazení seznamu členů či jejich profilů.',

	'ORDER'					                                  => 'Seřadit',
	'OTHER'					                                  => 'Ostatní',

	'POST_IP'				                                  => 'IP adresa či doména',

	'REAL_NAME'				                                => 'Jméno příjemce',
	'RECIPIENT'				                                => 'Příjemce',
	'REMOVE_FOE'			                                => 'Odebrat nepřítele',
	'REMOVE_FRIEND'			                              => 'Odebrat přítele',

	'SELECT_MARKED'			                              => 'Vybrat označené',
	'SELECT_SORT_METHOD'	                            => 'Vybrat způsob řazení',
	'SENDER_EMAIL_ADDRESS'	                          => 'Má e-mailová zpráva',
	'SENDER_NAME'			                                => 'Mé jméno',
	'SEND_ICQ_MESSAGE'		                            => 'Zaslat ICQ zprávu',
	'SEND_IM'				                                  => 'Rychlá zpráva',
	'SEND_JABBER_MESSAGE'	                            => 'Zaslat Jabber zprávu',
	'SEND_MESSAGE'			                              => 'Zpráva',
	'SEND_YIM_MESSAGE'		                            => 'Zaslat YIM zprávu',
	'SORT_EMAIL'			                                => 'E-mailu',
	'SORT_LAST_ACTIVE'		                            => 'Poslední aktivity',
	'SORT_POST_COUNT'		                              => 'Počtu příspěvků',

	'USERNAME_BEGINS_WITH'	                          => 'Přezdívka začíná na',
	'USER_ADMIN'			                                => 'Spravovat',
	'USER_BAN'				                                => 'Zakázat přístup',
	'USER_FORUM'			                                => 'Statistiky',
	'USER_LAST_REMINDED'	=> array(
		0		   => 'Zatím nebylo odesláno žádné upozornění',
		1		   => 'Upozornění odesláno: %1$dx<br />» %2$s',
	),
	'USER_ONLINE'			                                => 'Připojen',
	'USER_PRESENCE'			                              => 'Přítomnost na fóru',
	'USERS_PER_PAGE'		                              => 'Členů na stránku',

	'VIEWING_PROFILE'		                              => 'Profil člena - %s',
	'VIEW_FACEBOOK_PROFILE'	                          => 'Zobrazit profil na Facebooku',
	'VIEW_SKYPE_PROFILE'	                            => 'Zobrazit profil na Skypu',
	'VIEW_TWITTER_PROFILE'	                          => 'Zobrazit profil na Twitteru',
	'VIEW_YOUTUBE_CHANNEL'	                          => 'Zobrazit profil na YouTube',
	'VIEW_GOOGLEPLUS_PROFILE'                         => 'Zobrazit profil na Google+',
));
