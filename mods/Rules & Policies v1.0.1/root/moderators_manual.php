<?php
/***************************************************************************
 *                          lang_moderators_manual.php [english]
 *                            -------------------
 *   written              : Wednesday March 15, 2006
 *   author               : ~HG~
 *   email                : admin@galahscorner.com
 *
 *   $Id: lang_moderators_manual.php,v 1.0.0 2006/03/15
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if (!defined('IN_PHPBB'))
{
    define( 'IN_PHPBB', true);
}
$phpbb_root_path = './';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_MODERATORS_MANUAL);
init_userprefs($userdata);
//
// End session management
//

// Set vars to prevent naughtiness
$moderators_manual = array();

//
// Load the appropriate moderators_manual file
//
if( isset($HTTP_GET_VARS['mode']) )
{
	switch( $HTTP_GET_VARS['mode'] )
	{
		case 'bbcode':
			$lang_file = 'lang_bbcode';
			$l_title = $lang['BBCode_guide'];
			break;
		default:
			$lang_file = 'lang_moderators_manual';
			$l_title = $lang['Moderators_Manual'];
			break;
	}
}
else
{
	$lang_file = 'lang_moderators_manual';
	$l_title = $lang['Moderators_Manual'];
}
include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/' . $lang_file . '.' . $phpEx);

//
// Pull the array data from the lang pack
//
$j = 0;
$counter = 0;
$counter_2 = 0;
$moderators_manual_block = array();
$moderators_manual_block_titles = array();

for($i = 0; $i < count($moderators_manual); $i++)
{
	if( $moderators_manual[$i][0] != '--' )
	{
		$moderators_manual_block[$j][$counter]['id'] = $counter_2;
		$moderators_manual_block[$j][$counter]['question'] = $moderators_manual[$i][0];
		$moderators_manual_block[$j][$counter]['answer'] = $moderators_manual[$i][1];

		$counter++;
		$counter_2++;
	}
	else
	{
		$j = ( $counter != 0 ) ? $j + 1 : 0;

		$moderators_manual_block_titles[$j] = $moderators_manual[$i][1];

		$counter = 0;
	}
}

//
// Lets build a page ...
//
$page_title = $l_title;
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

$template->set_filenames(array(
	'body' => 'moderators_manual_body.tpl')
);
make_jumpbox('viewforum.'.$phpEx);

$template->assign_vars(array(
	'L_MODERATORS_MANUAL_TITLE' => $l_title, 
	'L_BACK_TO_TOP' => $lang['Back_to_top'])
);

for($i = 0; $i < count($moderators_manual_block); $i++)
{
	if( count($moderators_manual_block[$i]) )
	{
		$template->assign_block_vars('moderators_manual_block', array(
			'BLOCK_TITLE' => $moderators_manual_block_titles[$i])
		);
		$template->assign_block_vars('moderators_manual_block_link', array( 
			'BLOCK_TITLE' => $moderators_manual_block_titles[$i])
		);

		for($j = 0; $j < count($moderators_manual_block[$i]); $j++)
		{
			$row_color = ( !($j % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
			$row_class = ( !($j % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

			$template->assign_block_vars('moderators_manual_block.moderators_manual_row', array(
				'ROW_COLOR' => '#' . $row_color,
				'ROW_CLASS' => $row_class,
				'MODERATORS_MANUAL_QUESTION' => $moderators_manual_block[$i][$j]['question'], 
				'MODERATORS_MANUAL_ANSWER' => $moderators_manual_block[$i][$j]['answer'], 

				'U_MODERATORS_MANUAL_ID' => $moderators_manual_block[$i][$j]['id'])
			);

			$template->assign_block_vars('moderators_manual_block_link.moderators_manual_row_link', array(
				'ROW_COLOR' => '#' . $row_color,
				'ROW_CLASS' => $row_class,
				'MODERATORS_MANUAL_LINK' => $moderators_manual_block[$i][$j]['question'], 

				'U_MODERATORS_MANUAL_LINK' => '#' . $moderators_manual_block[$i][$j]['id'])
			);
		}
	}
}

$template->pparse('body');

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>