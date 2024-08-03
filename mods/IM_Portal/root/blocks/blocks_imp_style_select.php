<?php
/***************************************************************************
 *                           blocks_imp_links.php
 *                            -------------------
 *   begin                : Saturday, March 20, 2004
 *   copyright            : (C) 2004 dnL - Jason Maloney
 *   website              : http://www.ejdude.com
 *   email                : TheWizard101[at]SBCGlobal[dot]net
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

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

if(!function_exists('imp_style_select_block_func'))
{
	function imp_style_select_block_func()
	{
		global $template, $lang, $board_config, $phpbb_root_path, $phpEx, $db, $portal_config, $var_cache;
		global $HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_COOKIE_VARS;
		// BEGIN Style Select MOD
		if(isset($HTTP_POST_VARS['STYLE_URL']) || isset($HTTP_GET_VARS['STYLE_URL']))
		{
			$style = urldecode((isset($HTTP_POST_VARS['STYLE_URL'])) ? $HTTP_POST_VARS['STYLE_URL'] : $HTTP_GET_VARS['STYLE_URL']);
			if ( intval($style) == 0 )
			{
				$sql = "SELECT themes_id
						FROM " . THEMES_TABLE . "
						WHERE style_name = '$style'";
				if( ($result = $db->sql_query($sql)) && ($row = $db->sql_fetchrow($result)) )
				{
					$style = $row['themes_id'];
				}
				else
				{
					message_die(GENERAL_ERROR, "Could not find style name $style.");
				}
			}
		}
		elseif (isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_style']) )
		{
			$style = $HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_style'];
		}
		else
		{
			$style = $board_config['default_style'];
		}
		//
		// Style details
		//
		$sql = "SELECT t.themes_id, tdi.* 
				FROM ( " . THEMES_TABLE . "  t
				LEFT JOIN " . THEMES_SELECT_INFO_TABLE . " tdi ON t.themes_id = tdi.themes_id )
				WHERE t.themes_id = " . $style;
		if( ($result = $db->sql_query($sql)) && ($row = $db->sql_fetchrow($result)) )
		{
			$style_author = $row['style_author'];
			$style_version = $row['style_version'];
			$style_website = $row['style_website'];
			//$style_views = ( !empty($row['style_views']) ) ? $row['style_views'] : '0&nbsp;';
			$style_dlurl = $row['style_dlurl'];
			$style_dls = ( !empty($row['style_dls']) ) ? $row['style_dls'] : '0';
			$style_loaclurl = $row['style_loaclurl'];
			$style_ludls = $row['style_ludls'];
		}
		else
		{
		//	$style_views = '&nbsp';
		//	$style_dls = '&nbsp';
		}
		if(!empty($style_website))
		{
			$style_author = '<a href=' .  $style_website . ' target="_blank">' . $style_author . '<a>';
		}
		if ($style_loaclurl)
		{
			if ($style_loaclurl == "included")
			{
				$select_style_localurl = $lang['Style_select_loaclurl_included'];
			}
			else
			{
				$select_style_localurl = "<a href=select_style.$phpEx?".DL_LOCAL."=". $style ." target=\"_blank\">".$lang['Style_select_loaclurl']."</a>";	
			}
		}
		
		//
		// Update the view counter
		//
		//$sql = "UPDATE " . THEMES_SELECT_INFO_TABLE . "
		//	SET style_views = style_views + 1
		//	WHERE themes_id = $style";
		//if( !$db->sql_query($sql) )
		//{
		//	message_die(GENERAL_ERROR, "Could not update style views.", '', __LINE__, __FILE__, $sql);
		//}

		//if( $db->sql_affectedrows() == 0 )
		//{
			//
			// Update the view counter
			//
		//	$sql = "INSERT INTO " . THEMES_SELECT_INFO_TABLE . " (themes_id, style_views)
		//		VALUES ($style, 1)";
		//	if( !$db->sql_query($sql) )
		//	{
		//		message_die(GENERAL_ERROR, "Could not insert style views.", '', __LINE__, __FILE__, $sql);
		//	}
		//}
		
		//
		// Styles list
		//
		$sql = "SELECT themes_id, style_name
			FROM " . THEMES_TABLE . "
			ORDER BY style_name";
		
		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, "Could not get list of styles!", "", __LINE__, __FILE__, $sql);
		}
		
		$select_theme = "<select onChange=\"this.form.submit();\" name=\"STYLE_URL\" class=\"gensmall\">\n";
		while( $row = $db->sql_fetchrow($result) )
		{
			$selected = ($row['themes_id'] == $style) ? " selected=\"selected\"" : "";
			$select_theme .= "<option value=\"" . $row['themes_id'] . "\"$selected>" . $row['style_name'] . "</option>";
		}
		$select_theme .= "</select>\n";
		$template->assign_vars(array(
			'L_STYLE_SITENAME' => $board_config['sitename'],
			'S_SELECT_STYLE' => $select_theme)
		);
		//$template->assign_vars(array('S_SELECT_STYLE' => $select_theme));
	    $style_author = isset($style_author) ? $style_author : 0; // Initialize $style_author if not set
		if ( $style_author )
		{
			$template->assign_block_vars('switch_style_author', array());
			$template->assign_vars(array('L_STYLE_AUTHOR' => $lang['Style_select_author'] . $style_author));
		}
	    $style_dlurl = isset($style_dlurl) ? $style_dlurl : 0; // Initialize $style_dlurl if not set
		if ( $style_dlurl )
		{
			$template->assign_block_vars('switch_style_dlurl', array());
			$template->assign_vars(array('L_STYLE_DLURL' => "<a href=select_style.$phpEx?".DL_STYLE."=". $style ." target=\"_blank\">".$lang['Style_select_dlurl']."</a>:&nbsp;".$style_dls));
		}
	    $style_loaclurl = isset($style_loaclurl) ? $style_loaclurl : 0; // Initialize $style_loaclurl if not set
		if ( $style_loaclurl )
		{
			$template->assign_block_vars('switch_style_loaclurl', array());
			$template->assign_vars(array('L_STYLE_LOCALURL' => $select_style_localurl));
		}
	    $style_version = isset($style_version) ? $style_version : 0; // Initialize $style_version if not set
		if ( $style_version )
		{
			$template->assign_block_vars('switch_style_version', array());
			$template->assign_vars(array('L_STYLE_VERSION' => $lang['Style_select_version'] . $style_version));
		}
	    $style_views = isset($style_views) ? $style_views : 0; // Initialize $style_views if not set
        if ( $style_views ) {
            $template->assign_block_vars('switch_style_views', array());
            $template->assign_vars(array('L_STYLE_VIEWINGS' => $lang['Style_select_viewings'] . $style_views));
        }
		// END Style Select MOD
	}
}

imp_style_select_block_func();
?>