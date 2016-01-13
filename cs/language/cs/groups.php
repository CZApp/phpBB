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
	'ALREADY_DEFAULT_GROUP'		                       => 'Vybraná skupina je již tvojí výchozí skupinou.',
	'ALREADY_IN_GROUP'			                         => 'Již jsi členem vybrané skupiny.',
	'ALREADY_IN_GROUP_PENDING'	                     => 'Již jsi požádal o členství ve vybrané skupině.',

	'CANNOT_JOIN_GROUP'			                         => 'Do této skupiny nemůžeš vstoupit. Vstoupit můžeš pouze do veřejných či otevřených skupin.',
	'CANNOT_RESIGN_GROUP'		                         => 'Z této skupiny nemůžeš vystoupit. Vystoupit můžeš pouze z veřejných či otevřených skupin.',
	'CHANGED_DEFAULT_GROUP'		                       => 'Výchozí skupina byla úspěšně změněna.',

	'GROUP_AVATAR'						                       => 'Profilová fotka skupiny',
	'GROUP_CHANGE_DEFAULT'				                   => 'Opravdu chceš změnit výchozí skupinu na “%s”?',
	'GROUP_CLOSED'						                       => 'Soukromá',
	'GROUP_DESC'						                         => 'Popis skupiny',
	'GROUP_HIDDEN'						                       => 'Skrytá',
	'GROUP_INFORMATION'					                     => 'Informace o skupině',
	'GROUP_IS_CLOSED'					                       => 'Tato skupina je soukromá. Automaticky do ní nelze vstoupit.',
	'GROUP_IS_FREE'						                       => 'Tato skupina je otevřená. Můžeš do ní vstoupit.',
	'GROUP_IS_HIDDEN'					                       => 'Tato skupina je skrytá. Pouze její členové mohou vidět seznam členů skupiny.',
	'GROUP_IS_OPEN'						                       => 'Tato skupina je veřejná. Můžeš požádat o členství ve skupině.',
	'GROUP_IS_SPECIAL'					                     => 'Tato skupina je speciální a spravována administrátory.',
	'GROUP_JOIN'						                         => 'Vstoupit do skupiny',
	'GROUP_JOIN_CONFIRM'				                     => 'Opravdu chceš vstoupit do vybrané skupiny?',
	'GROUP_JOIN_PENDING'				                     => 'Zažádat o členství',
	'GROUP_JOIN_PENDING_CONFIRM'		                 => 'Opravdu chceš zažádat o členství ve vybrané skupině?',
	'GROUP_JOINED'						                       => 'Úspěšně jsi se stal členem skupiny.',
	'GROUP_JOINED_PENDING'				                   => 'Úspěšně jsi zaslal žádost o členství ve skupině. Nyní vyčkej než ji vedoucí skupiny spracuje.',
	'GROUP_LIST'						                         => 'Spravovat členy',
	'GROUP_MEMBERS'						                       => 'Členové skupiny',
	'GROUP_NAME'						                         => 'Název skupiny',
	'GROUP_OPEN'						                         => 'Veřejná',
	'GROUP_RANK'						                         => 'Hodnost skupiny',
	'GROUP_RESIGN_MEMBERSHIP'			                   => 'Odejít ze skupiny',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	               => 'Opravdu chceš odejít z vybrané skupiny?',
	'GROUP_RESIGN_PENDING'				                   => 'Zrušit žádost o členství',
	'GROUP_RESIGN_PENDING_CONFIRM'		               => 'Opravdu chceš zrušit žádost o členství ve vybrané skupině?',
	'GROUP_RESIGNED_MEMBERSHIP'			                 => 'Odchod ze skupiny byl úspěšný.',
	'GROUP_RESIGNED_PENDING'			                   => 'Žádost o členství ve skupině byla úspěšně stažena.',
	'GROUP_TYPE'						                         => 'Typ skupiny',
	'GROUP_UNDISCLOSED'					                     => 'Skrytá',
	'FORUM_UNDISCLOSED'					                     => 'Moderuje skryté sekce',

	'LOGIN_EXPLAIN_GROUP'	                           => 'Pro zobrazení podrobností o skupině se musíš nejprve přihlásit.',

	'NO_LEADERS'					                           => 'Nejsi vedoucím žádné skupiny.',
	'NOT_LEADER_OF_GROUP'			                       => 'Požadavek nelze provést, protože nejsi vedoucím skupiny.',
	'NOT_MEMBER_OF_GROUP'			                       => 'Požadavek nelze provést, protože nejsi členem skupiny.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	                 => 'Nemůžeš odejít z výchozí skupiny.',

	'PRIMARY_GROUP'		                               => 'Výchozí skupina',

	'REMOVE_SELECTED'		                             => 'Vyhodit vybrané',

	'USER_GROUP_CHANGE'			                         => 'Ze skupiy “%1$s” do “%2$s”',
	'USER_GROUP_DEMOTE'			                         => 'Odstoupit z vedení',
	'USER_GROUP_DEMOTE_CONFIRM'	                     => 'Opravdu chceš odstoupit z vedení vybrané skupiny?',
	'USER_GROUP_DEMOTED'		                         => 'Odstup z vedení proběhl úspěšně.',
));
