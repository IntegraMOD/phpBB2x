<?php
if ( !defined('IN_PHPBB') )
define('imp_forum_block_func', 'imp_forum_block_func');
if(!function_exists(imp_forum_block_func))
		include_once($phpbb_root_path . 'fetchposts.'.$phpEx);
		$template->assign_vars(array(
		//
			$fetchposts = phpbb_fetch_posts($portal_config['md_news_forum_id'], $portal_config['md_num_news'], $portal_config['md_news_length']);
			for ($i = 0; $i < count($fetchposts); $i++)
				$template->assign_block_vars('fetchpost_row', array(
			$i = intval($HTTP_GET_VARS['article']);
			$template->assign_block_vars('fetchpost_row', array(
imp_forum_block_func();
?>