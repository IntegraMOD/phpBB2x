<?php
/***************************************************************************
 *                          lang_rules.php [english]
 *                            -------------------
 *   written              : Wednesday March 15, 2006
 *   author               : ~HG~
 *   email                : admin@galahscorner.com
 *
 *   $Id: lang_rules.php,v 1.0.0 2006/03/15
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
$userdata = session_pagestart($user_ip, PAGE_RULES);
init_userprefs($userdata);
//
// End session management
//

//
// Load the appropriate rules file
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
			$lang_file = 'lang_rules';
			$l_title = $lang['Rules'];
			break;
	}
}
else
{
	$lang_file = 'lang_rules';
	$l_title = $lang['Rules'];
}
include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/' . $lang_file . '.' . $phpEx);

//
// Pull the array data from the lang pack
//
$j = 0;
$counter = 0;
$counter_2 = 0;
$rules_block = array();
$rules_block_titles = array();

for($i = 0; $i < count($rules); $i++)
{
	if( $rules[$i][0] != '--' )
	{
		$rules_block[$j][$counter]['id'] = $counter_2;
		$rules_block[$j][$counter]['question'] = $rules[$i][0];
		$rules_block[$j][$counter]['answer'] = $rules[$i][1];

		$counter++;
		$counter_2++;
	}
	else
	{
		$j = ( $counter != 0 ) ? $j + 1 : 0;

		$rules_block_titles[$j] = $rules[$i][1];

		$counter = 0;
	}
}

//
// Lets build a page ...
//
$page_title = $l_title;
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

$template->set_filenames(array(
	'body' => 'rules_body.tpl')
);
make_jumpbox('viewforum.'.$phpEx);

$template->assign_vars(array(
	'L_RULES_TITLE' => $l_title, 
	'L_BACK_TO_TOP' => $lang['Back_to_top'])
);

for($i = 0; $i < count($rules_block); $i++)
{
	if( count($rules_block[$i]) )
	{
		$template->assign_block_vars('rules_block', array(
			'BLOCK_TITLE' => $rules_block_titles[$i])
		);
		$template->assign_block_vars('rules_block_link', array( 
			'BLOCK_TITLE' => $rules_block_titles[$i])
		);

		for($j = 0; $j < count($rules_block[$i]); $j++)
		{
			$row_color = ( !($j % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
			$row_class = ( !($j % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

			$template->assign_block_vars('rules_block.rules_row', array(
				'ROW_COLOR' => '#' . $row_color,
				'ROW_CLASS' => $row_class,
				'RULES_QUESTION' => $rules_block[$i][$j]['question'], 
				'RULES_ANSWER' => $rules_block[$i][$j]['answer'], 

				'U_RULES_ID' => $rules_block[$i][$j]['id'])
			);

			$template->assign_block_vars('rules_block_link.rules_row_link', array(
				'ROW_COLOR' => '#' . $row_color,
				'ROW_CLASS' => $row_class,
				'RULES_LINK' => $rules_block[$i][$j]['question'], 

				'U_RULES_LINK' => '#' . $rules_block[$i][$j]['id'])
			);
		}
	}
}

$template->pparse('body');

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>