<?php
/***************************************************************************
 *                            functions_portal.php
 *                            -------------------
 *   begin                : Sunday, April 25, 2004
 *   copyright            : (C) 2004 masterdavid - Ronald John David
 *   website              : http://www.integramod.com
 *   email                : webmaster@integramod.com
 *
 *   note: removing the original copyright is illegal even you have modified
 *         the code.  Just append yours if you have modified it.
 ***************************************************************************/
/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

// Hack Fixes  280806 //
$phpEx = 'php';

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt#27");
}
$phpbb_root_path = './';
// Hack Fixes  280806 //

include_once($phpbb_root_path . 'includes/lite.'.$phpEx);
$options = array(
    'cacheDir' => $phpbb_root_path . 'var_cache/',
);

$var_cache = new Cache_Lite($options);

function portal_assign_var_from_handle($template_var, $handle)
{
	ob_start();
	$template_var->pparse($handle);

//	echo 'Handle = ' . $handle;
	$str = ob_get_contents();
	ob_end_clean();

	return $str;
}

function portal_config_init(&$portal_config)
{
	global $db;

	$portal_config = array();
	$sql = "SELECT * FROM " . PORTAL_CONFIG_TABLE;
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(CRITICAL_ERROR, "Could not query portal config table", "", __LINE__, __FILE__, $sql);
	}
	while ($row = $db->sql_fetchrow($result))
	{
		$portal_config[$row['config_name']] = $row['config_value'];
	}
}

function block_config_init(&$block_config)
{
	global $db;

	$block_config = array();
	$sql = "SELECT * FROM " . BLOCK_CONFIG_TABLE;
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(CRITICAL_ERROR, "Could not query block config table", "", __LINE__, __FILE__, $sql);
	}
	while ($row = $db->sql_fetchrow($result))
	{
		$block_config[$row['config_name']] = $row['config_value'];
	}
}

function portal_blocks_view($type=true)
{
	global $userdata;

	if ($userdata['user_id'] == ANONYMOUS)
	{
		$bview = '(0,1)';
		$append = '01';
	}else
	{
		switch($userdata['user_level'])
		{
			case USER:
				$bview = '(0,2)';
				$append = '02';
				break;
			case MOD:
				$bview = '(0,2,3)';
				$append = '023';
				break;
			case ADMIN:
				$bview = '(0,2,3,4)';
				$append = '0234';
				break;
			default:
				$bview = '(0)';
				$append = '0';
		}
	}
	if ($type)
		return $bview;
	else
		return $append;
}

function portal_groups($user_id)
{
	global $db;
	static $layout_groups;

	if (!isset($layout_groups))
	{
		$sql = "SELECT group_id FROM " . USER_GROUP_TABLE . " WHERE user_id = '" . $user_id . "' AND user_pending = 0";
		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(CRITICAL_ERROR, "Could not query user group information", "", __LINE__, __FILE__, $sql);
		}

		$layout_groups = array();
		$i=0;
		while ($row = $db->sql_fetchrow($result))
		{
			$layout_groups[$i] = intval($row['group_id']);
			$i++;
		}
	}
	return $layout_groups;
}

function portal_parse_blocks($layout, $forum_wide = FALSE, $type='')
{
	global $db, $template, $userdata, $phpbb_root_path, $phpEx, $board_config, $lang, $var_cache, $portal_config, $images;

	include_once( $phpbb_root_path . 'includes/bbcode.' . $phpEx );

	if (!$forum_wide)
    {
        $layout_pos = array();

        if ($portal_config['cache_enabled'])
        {
            $layout_pos = $var_cache->get('lp' . strval($layout), 86400, 'layout_pos');
        }

        if (!is_array($layout_pos)) // Check if $layout_pos is not an array
        {
            $layout_pos = array(); // Initialize it as an empty array if it is not
        }

        $sql_pos = "SELECT * FROM " . BLOCK_POSITION_TABLE . " WHERE layout ='" . $layout . "'";
        if (!($block_pos_result = $db->sql_query($sql_pos)))
        {
            message_die(CRITICAL_ERROR, "Could not query portal blocks position", "", __LINE__, __FILE__, $sql);
        }
        while ($block_pos_row = $db->sql_fetchrow($block_pos_result))
        {
            $layout_pos[$block_pos_row['bposition']] = $block_pos_row['pkey'];
        }

        if ($portal_config['cache_enabled'])
        {
            $var_cache->save($layout_pos, 'lp' . strval($layout), 'layout_pos');
        }
    }

	$block_info=array();

	if ($forum_wide)
	{
		$temp_type = $type;
	}
	else
	{
		$temp_type = 's' . strval($layout);
	}
	if ($portal_config['cache_enabled'])
	{
		$block_info=$var_cache->get('bi' . portal_blocks_view(false) . $temp_type, 86400, 'block_info');
	}

	if (!$block_info)
	{
		if (!$forum_wide)
		{
			$sql = "SELECT *
				FROM " . BLOCKS_TABLE . "
				WHERE layout ='" . $layout . "'
				AND active = '1'
				AND view IN " . portal_blocks_view() . "
				AND bposition NOT IN ('@','*')
				ORDER BY weight";
		}
		else
		{
			if ($type=='header')
			{
				$temp_pos = '@';
			}
			else
			{
				$temp_pos = '*';
			}
			$sql = "SELECT *
				FROM " . BLOCKS_TABLE . "
				WHERE layout = '0'
				AND active = '1'
				AND view IN " . portal_blocks_view() . "
				AND bposition = '" . $temp_pos . "'
				ORDER BY weight";
		}
		if (!($block_im_result = $db->sql_query($sql)))
		{
			message_die(CRITICAL_ERROR, "Could not query portal blocks information", "", __LINE__, __FILE__, $sql);
		}
		$block_info = $db->sql_fetchrowset($block_im_result);

		if ($portal_config['cache_enabled'])
		{
			$var_cache->save($block_info, 'bi' . portal_blocks_view(false) . $temp_type, 'block_info');
		}
	}

	$block_count = count($block_info);

	for ($b_counter = 0; $b_counter < $block_count; $b_counter++)
	{
		$is_group_allowed = TRUE;
		if (!empty($block_info[$b_counter]['groups']))
		{
			$is_group_allowed = FALSE;
			$group_content = explode(",",$block_info[$b_counter]['groups']);

			for ($i = 0; $i < count($group_content); $i++)
			{
				if (in_array(intval($group_content[$i]), portal_groups($userdata['user_id'])))
				{
					$is_group_allowed = TRUE;
				}
			}
		}
		if ($is_group_allowed)
		{
			if ($forum_wide)
			{
				$position = $type;
			}
			else
			{
				$position = $layout_pos[$block_info[$b_counter]['bposition']];
			}
			$lang_exist = FALSE;

			$block_name = str_replace('blocks_imp_','',$block_info[$b_counter]['blockfile']);

			if (file_exists('blocks/language/lang_' . $board_config['default_lang'] . '/lang_' . $block_name . '_block.' . $phpEx))
			{
				$lang_exist = TRUE;
				include($phpbb_root_path . 'blocks/language/lang_' . $board_config['default_lang'] . '/lang_' . $block_name . '_block.' . $phpEx);
			}
			if (!empty($block_info[$b_counter]['blockfile']))
			{
				$template->set_filenames(array(
					$block_name . '_block'         => 'blocks/' . $block_name . '_block.tpl')
				);

				$output_block='';

				if (($portal_config['cache_enabled'])&&($block_info[$b_counter]['cache']))
				{
					$output_block = $var_cache->get('b' . strval($block_info[$b_counter]['bid']), $block_info[$b_counter]['cache_time'], 'block');
				}

				if (!$output_block)
				{
					include($phpbb_root_path . 'blocks/' . $block_info[$b_counter]['blockfile'] . '.' . $phpEx);

					$output_block = portal_assign_var_from_handle($template, $block_name . '_block');

					if (($portal_config['cache_enabled'])&&($block_info[$b_counter]['cache']))
					{
						$var_cache->save($output_block, 'b' . strval($block_info[$b_counter]['bid']), 'block');
					}
				}

				$template->assign_block_vars($position . '_blocks_row',array(
					'OUTPUT' => $output_block,
					'BLOCKID' => $block_info[$b_counter]['bid']
				));

				if ($block_info[$b_counter]['titlebar'] == 1 && $block_info[$b_counter]['title_image'] == '')
				{
					if (($lang_exist) && ($block_info[$b_counter]['local'] == 1))
					{
						$template->assign_block_vars($position . '_blocks_row.title',array(
							'TITLE' => ($lang['Title_' . $block_name] ?? null)
						));
					}
					else
					{
						$template->assign_block_vars($position . '_blocks_row.title',array(
							'TITLE' => $block_info[$b_counter]['title']
						));
					}
				}
				elseif ($block_info[$b_counter]['titlebar'] == 1 && $block_info[$b_counter]['title_image'] != '')
				{
					$template->assign_block_vars($position . '_blocks_row.title_image',array(
						'TITLE' => $block_info[$b_counter]['title_image']
					));
				}


				if ($block_info[$b_counter]['border'] == 1)
				{
					$template->assign_block_vars($position . '_blocks_row.border','');
				}

				if ($block_info[$b_counter]['openclose'] == 1)
				{
					$template->assign_block_vars($position . '_blocks_row.openclose',array(
						'OPEN_IMG' => ($images['block_open'] ?? null),
						'CLOSE_IMG' => ($images['block_close'] ?? null)
					));
				}

				if ($block_info[$b_counter]['background'] == 1)
				{
					$template->assign_block_vars($position . '_blocks_row.background','');
				}

			}
			else
			{
				$text = $block_info[$b_counter]['content'];

				/*
					Helter...
					This should not be needed but I cant see any code to do it...
					Must examine old code to see where/why it is not done...

					This code will parse all block text and replace language variables...
					31 October 2012 Mike

					Also, I removed the css line that makes these links lower case...
				*/

				// parse block text replacing language variables... //
				for ($i = 0; $i < strlen($text); $i++)
				{
					$findword = '';
					$j = 0;

					if($text[$i] == '{' && $text[$i+1] == 'L' && $text[$i+2] == '_')
					{
						$j = $i;
						while($text[$j] != '}')
						{
							$findword .= $text[$j++];
						}
						$findword .= $text[$j];

						$lang_word = $findword;

						$lang_word = str_replace('{L_', "", $lang_word);
						$lang_word = str_replace('}', "", $lang_word);

						/*
							use proper case as language vars are proper case, Note this could be done
							with a php function but that function is not always available...
						 */

						$lang_word = strtolower($lang_word);
						$lang_word[0] = strtoupper($lang_word[0]);

						$text = str_replace($findword, $lang[$lang_word], $text);
					}

				}


				if ($block_info[$b_counter]['type'])
				{
					$text = preg_replace('#(<)([\/]?.*?)(>)#is', "&lt;\\2&gt;", $text);
					if ($block_info[$b_counter]['block_bbcode_uid'] != '')
					{
						$text = bbencode_second_pass($text, $block_info[$b_counter]['block_bbcode_uid']);
					}

					$text = make_clickable($text);
					$text = smilies_pass($text);
					$text = str_replace("\n", "\n<br />\n", $text);
					$text = '<span class="postbody">' . $text . '</span>';
				}

				$template->assign_block_vars($position . '_blocks_row',array(
					'OUTPUT' => $text,
					'BLOCKID' => $block_info[$b_counter]['bid']
				));

				if ($block_info[$b_counter]['titlebar'] == 1 && $block_info[$b_counter]['title_image'] == '')
				{
					if (($lang_exist) && ($block_info[$b_counter]['local'] == 1))
					{
						$template->assign_block_vars($position . '_blocks_row.title',array(
							'TITLE' => $lang['Title_' . $block_name]
						));
					}
					else
					{
						$template->assign_block_vars($position . '_blocks_row.title',array(
							'TITLE' => $block_info[$b_counter]['title']
						));
					}
				}
				elseif ($block_info[$b_counter]['titlebar'] == 1 && $block_info[$b_counter]['title_image'] != '')
				{
					$template->assign_block_vars($position . '_blocks_row.title_image',array(
						'TITLE' => $block_info[$b_counter]['title_image']
						)
					);
				}

				if ($block_info[$b_counter]['border'] == 1)
				{
					$template->assign_block_vars($position . '_blocks_row.border','');
				}
				if ($block_info[$b_counter]['openclose'] == 1)
				{
					$template->assign_block_vars($position . '_blocks_row.openclose',array(
						'OPEN_IMG' => ($images['block_open'] ?? null),
						'CLOSE_IMG' => ($images['block_close'] ?? null)
					));
				}
				if ($block_info[$b_counter]['background'] == 1)
				{
					$template->assign_block_vars($position . '_blocks_row.background','');
				}
			}
		}
	}
}