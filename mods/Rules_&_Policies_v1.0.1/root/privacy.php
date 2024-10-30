<?php
/***************************************************************************
 *                          lang_privacy.php [english]
 *                            -------------------
 *   written              : Wednesday March 15, 2006
 *   author               : ~HG~
 *   email                : admin@galahscorner.com
 *
 *   $Id: lang_privacy.php,v 1.0.0 2006/03/15
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
$userdata = session_pagestart($user_ip, PAGE_PRIVACY);
init_userprefs($userdata);
//
// End session management
//

//
// Load the appropriate privacy file
//
$lang_file = 'lang_privacy';
$l_title = $lang['Privacy'];

//
// Include the privacy settings
//
include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/' . $lang_file . '.' . $phpEx);

//
// Pull the array data from the lang pack
//
$j = 0;
$counter = 0;
$counter_2 = 0;
$privacy_block = array();
$privacy_block_titles = array();

for($i = 0; $i < count($privacy); $i++)
{
	if( $privacy[$i][0] != '--' )
	{
		$privacy_block[$j][$counter]['id'] = $counter_2;
		$privacy_block[$j][$counter]['question'] = $privacy[$i][0];
		$privacy_block[$j][$counter]['answer'] = $privacy[$i][1];

		$counter++;
		$counter_2++;
	}
	else
	{
		$j = ( $counter != 0 ) ? $j + 1 : 0;

		$privacy_block_titles[$j] = $privacy[$i][1];

		$counter = 0;
	}
}

//
// Lets build a page ...
//
$page_title = $l_title;
include($phpbb_root_path . 'includes/page_header.'.$phpEx);


$template->set_filenames(array(
	'body' => 'privacy_body.tpl')
);
make_jumpbox('viewforum.'.$phpEx);

$template->assign_vars(array(
	'L_PRIVACY_TITLE' => $l_title, 
	'L_BACK_TO_TOP' => $lang['Back_to_top'])
);

for($i = 0; $i < count($privacy_block); $i++)
{
	if( count($privacy_block[$i]) )
	{
		$template->assign_block_vars('privacy_block', array(
			'BLOCK_TITLE' => $privacy_block_titles[$i])
		);
		$template->assign_block_vars('privacy_block_link', array( 
			'BLOCK_TITLE' => $privacy_block_titles[$i])
		);

		for($j = 0; $j < count($privacy_block[$i]); $j++)
		{
			$row_color = ( !($j % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
			$row_class = ( !($j % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

			$template->assign_block_vars('privacy_block.privacy_row', array(
				'ROW_COLOR' => '#' . $row_color,
				'ROW_CLASS' => $row_class,
				'PRIVACY_QUESTION' => $privacy_block[$i][$j]['question'], 
				'PRIVACY_ANSWER' => $privacy_block[$i][$j]['answer'], 

				'U_PRIVACY_ID' => $privacy_block[$i][$j]['id'])
			);

			$template->assign_block_vars('privacy_block_link.privacy_row_link', array(
				'ROW_COLOR' => '#' . $row_color,
				'ROW_CLASS' => $row_class,
				'PRIVACY_LINK' => $privacy_block[$i][$j]['question'], 

				'U_PRIVACY_LINK' => '#' . $privacy_block[$i][$j]['id'])
			);
		}
	}
}

$template->pparse('body');

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>