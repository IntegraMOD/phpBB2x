<?php
/***************************************************************************
 *								  rules.php
 *                              -------------------
 *     begin                : Jan 24 2003
 *     copyright            : Morpheus
 *     email                : morpheus@2037.biz
 *
 *     $Id: rules.php,v 1.85.2.9 2003/01/24 18:31:54 Moprheus Exp $
 *
 *     Log user actions with improved security and PHP 5.4-8.3 compatibility
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/


if ( defined('IN_PHPBB') )
{
	die('Hacking attempt');
	exit;
}

define('IN_PHPBB', TRUE);
$phpbb_root_path = './../';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

$mode = ( isset($HTTP_GET_VARS['mode']) ) ? $HTTP_GET_VARS['mode'] : '';

//
// Start Session Management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);

if ( $userdata['user_level'] != ADMIN )
{
	message_die(GENERAL_ERROR, 'You are not allowed to view this page (only viewable by Administrators)');
}

$template->set_filenames(array(
	'body' => 'rules_body.tpl')
);

$gen_simple_header = TRUE;
include('page_header.' . $phpEx);


$template->assign_vars(array(
	'L_CLOSE_WINDOW' => $lang['Close_window'])
	);

switch ( $mode )
{
	case 'Lock' :
		$image = '<img src = "' . $phpbb_root_path . $images['topic_mod_lock'] . '" alt = "' . $lang['Locking_topic'] . '" title = "' . $lang['Locking_topic'] . '">';
		
		$explication = $lang['Lock_Explication'];
	break;

	case 'Unlock' :
		$image = '<img src = "' . $phpbb_root_path . $images['topic_mod_unlock'] . '" alt = "' . $lang['Unlocking_topic'] . '" title = "' . $lang['Unlocking_topic'] . '">';

		$explication = $lang['Unlock_Explication'];
	break;

	case 'Split' :
		$image = '<img src = "' . $phpbb_root_path . $images['topic_mod_split'] . '" alt = "' . $lang['Spliting_topic'] . '" title = "' . $lang['Spliting_topic'] . '">';

		$explication = $lang['Split_Explication'];
	break;

	case 'Move' :
		$image = '<img src = "' . $phpbb_root_path . $images['topic_mod_move'] . '" alt = "' . $lang['Moving_topic'] . '" title = "' . $lang['Moving_topic'] . '">';

		$explication = $lang['Move_Explication'];
	break;

	case 'Delete' :
		$image = '<img src = "' . $phpbb_root_path . $images['topic_mod_delete'] . '" alt = "' . $lang['Deleting_topic'] . '" title = "' . $lang['Deleting_topic'] . '">';

		$explication = $lang['Delete_Explication'];
	break;

	case 'Edit' :
		$image = '<img src = "' . $phpbb_root_path . $images['icon_edit'] . '" alt = "' . $lang['Editing_topic'] . '" title = "' . $lang['Editing_topic'] . '">';

		$explication = $lang['Edit_Explication'];
	break;


	default :

		$explication = $lang['No_action_specified'];
	break;
}



$template->assign_block_vars('rules_row', array(
	'L_RULES_TITLE' => sprintf($lang['Rules_title'], $mode),
	'IMG' => $image,
	'EXPLICATION' => $explication)
	);



$template->pparse('body');