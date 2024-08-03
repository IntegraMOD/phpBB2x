<?php
/***************************************************************************
 *                           blocks_imp_search.php
 *                            -------------------
 *   begin                : Saturday, March 20, 2004
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

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

define('imp_search_block_func', 'imp_search_block_func');

if(!function_exists(imp_search_block_func))
{
	function imp_search_block_func()
	{
		global $lang, $template, $portal_config, $board_config;

		$template->assign_vars(array(
			"L_ADVANCED_SEARCH" => $lang['Advanced_search'],
			"L_FORUM_OPTION" => (!empty($portal_config['md_search_option_text'])) ? $portal_config['md_search_option_text'] : $board_config ['sitename']
			)
		);
	}
}

imp_search_block_func();
?>