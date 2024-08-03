<?php

/***************************************************************************
 *                        blocks_imp_recents_topic.php
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

if (!defined('IN_PHPBB')) {
    die("Hacking attempt");
}

define('imp_recent_topics_block_func', 'imp_recent_topics_block_func');

if(!function_exists(imp_recent_topics_block_func)) {
    function imp_recent_topics_block_func()
    {
        global $template, $portal_config, $userdata, $board_config, $db, $phpEx, $var_cache;

        $forum_data = array();
        if($portal_config['cache_enabled']) {
            $forum_data = $var_cache->get('forum', 90000, 'forum');
        }
        if(!$forum_data) {
            $sql = "SELECT * FROM ". FORUMS_TABLE . " ORDER BY forum_id";
            if (!$result1 = $db->sql_query($sql)) {
                message_die(GENERAL_ERROR, 'Could not query forums information', '', __LINE__, __FILE__, $sql);
            }
            while($row1 = $db->sql_fetchrow($result1)) {
                $forum_data[] = $row1;
            }
            if($portal_config['cache_enabled']) {
                $var_cache->save($forum_data, 'forum', 'forum');
            }
        }

        $is_auth_ary = array();
        $is_auth_ary = auth(AUTH_ALL, AUTH_LIST_ALL, $userdata, $forum_data);

        if($portal_config['md_except_forum_id'] == '') {
            $except_forum_id = '\'start\'';
        } else {
            $except_forum_id = $portal_config['md_except_forum_id'];
        }
        for ($i = 0; $i < count($forum_data); $i++) {
            if ((!$is_auth_ary[$forum_data[$i]['forum_id']]['auth_read']) or (!$is_auth_ary[$forum_data[$i]['forum_id']]['auth_view'])) {
                if ($except_forum_id == '\'start\'') {
                    $except_forum_id = $forum_data[$i]['forum_id'];
                } else {
                    $except_forum_id .= ',' . $forum_data[$i]['forum_id'];
                }
            }
        }

        $current_time = time();
        $extra = "AND t.topic_time <= $current_time";

        if ($portal_config['md_approve_mod_installed']) {
            $sql = "SELECT t.topic_id, t.topic_title, t.topic_last_post_id, t.forum_id, p.post_id, p.poster_id, p.post_time, u.user_id, u.username, p.post_username 
				FROM " . TOPICS_TABLE . " AS t LEFT OUTER JOIN " . APPROVE_POSTS_TABLE . " AS a ON (t.topic_first_post_id = a.post_id), " . POSTS_TABLE . " AS p, " . USERS_TABLE . " AS u 
				WHERE t.forum_id NOT IN (" . $except_forum_id . ") 
					AND t.topic_status <> 2 
					AND p.post_id = t.topic_last_post_id 
					AND p.poster_id = u.user_id 
					AND a.post_id is NULL
					$extra
				ORDER BY p.post_time DESC 
				LIMIT " . $portal_config['md_num_recent_topics'];
        } else {
            $sql = "SELECT t.topic_id, t.topic_title, t.topic_last_post_id, t.forum_id, p.post_id, p.poster_id, p.post_time, u.user_id, u.username
				FROM " . TOPICS_TABLE . " AS t, " . POSTS_TABLE . " AS p, " . USERS_TABLE . " AS u
				WHERE t.forum_id NOT IN (" . $except_forum_id . ")
					AND t.topic_status <> 2
					AND p.post_id = t.topic_last_post_id
					AND p.poster_id = u.user_id
					$extra
				ORDER BY p.post_time DESC
				LIMIT " . $portal_config['md_num_recent_topics'];
        }

        if (!$result1 = $db->sql_query($sql)) {
            message_die(GENERAL_ERROR, 'Could not query recent topics information', '', __LINE__, __FILE__, $sql);
        }
        $number_recent_topics = $db->sql_numrows($result1);
        $recent_topic_row = array();
        while ($row1 = $db->sql_fetchrow($result1)) {
            $recent_topic_row[] = $row1;
        }

        if($portal_config['md_recent_topics_style']) {
            $style_row = 'scroll';
        } else {
            $style_row = 'static';
        }

        $template->assign_block_vars($style_row, "");

        for ($i = 0; $i < $number_recent_topics; $i++) {
            $orig_word = array();
            $replacement_word = array();
            obtain_word_list($orig_word, $replacement_word);

            if (!empty($orig_word)) {
                $recent_topic_row[$i]['topic_title'] = (!empty($recent_topic_row[$i]['topic_title'])) ? preg_replace($orig_word, $replacement_word, $recent_topic_row[$i]['topic_title']) : '';
            }
            if ($recent_topic_row[$i]['user_id'] != -1)
            {
                $template->assign_block_vars($style_row . '.recent_topic_row', array(
                        'U_TITLE' => append_sid("viewtopic.$phpEx?" . POST_POST_URL . '=' . $recent_topic_row[$i]['post_id']) . '#' .$recent_topic_row[$i]['post_id'],
                        'L_TITLE' => smilies_pass($recent_topic_row[$i]['topic_title']),
                        'L_BY' => $lang['By'],
                        'U_POSTER' => append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $recent_topic_row[$i]['user_id']),
                        'S_POSTER' => $recent_topic_row[$i]['username'],
                        'S_POSTTIME' => create_date($board_config['default_dateformat'], $recent_topic_row[$i]['post_time'], $board_config['board_timezone'])
                    )
                );
            }
            else {
                $template->assign_block_vars($style_row . '.recent_topic_row', array(
                        'U_TITLE' => append_sid("viewtopic.$phpEx?" . POST_POST_URL . '=' . $recent_topic_row[$i]['post_id']) . '#' .$recent_topic_row[$i]['post_id'],
                        'L_TITLE' => smilies_pass($recent_topic_row[$i]['topic_title']),
                        'L_BY' => $lang['By'],
                        'U_POSTER' => append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $recent_topic_row[$i]['user_id']),
                        'S_POSTER' => $recent_topic_row[$i]['post_username'],
                        'S_POSTTIME' => create_date($board_config['default_dateformat'], $recent_topic_row[$i]['post_time'], $board_config['board_timezone'])
                    )
                );
            }
        }
    }
}

imp_recent_topics_block_func();
                    