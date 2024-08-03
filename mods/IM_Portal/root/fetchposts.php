<?php
/***************************************************************************
 *                            fetchposts.php
 *                           -------------------
 *   begin              : Tuesday, August 13, 2002
 *   copyright          : (C) 2002 Smartor
 *   email              : smartor_xp@hotmail.com
 *   original work      : Volker Rattel <ca5ey@clanunity.net>
 *
 *   $Id: fetchposts.php,v 1.1 2004/04/25 09:00:38 RJ Exp $
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

/***************************************************************************
 *
 *   Some code in this file I borrowed from the phpBB Fetch Posts MOD by Ca5ey
 *   and Mouse Hover Topic Preview MOD by Shannado
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
    $mqr=get_magic_quotes_runtime();
    set_magic_quotes_runtime(0);
}

include_once($phpbb_root_path . 'includes/bbcode.'.$phpEx);


function phpbb_fetch_posts($forum_sql, $number_of_posts, $text_length)
{
	global $db, $board_config;

	$sql = 'SELECT
			  t.topic_id,
			  t.topic_time,
			  t.topic_title,
			  pt.post_text,
			  u.username,
			  u.user_id,
			  t.topic_replies,
			  pt.bbcode_uid,
			  t.forum_id,
			  t.topic_poster,
			  t.topic_first_post_id,
			  t.topic_status,
			  pt.post_id,
			  p.post_id,
			  p.enable_smilies
			FROM
			  ' . TOPICS_TABLE . ' AS t,
			  ' . USERS_TABLE . ' AS u,
			  ' . POSTS_TEXT_TABLE . ' AS pt,
			  ' . POSTS_TABLE . ' AS p
			WHERE
			  t.forum_id IN (' . $forum_sql . ') AND
			  t.topic_time <= ' . time() . ' AND
			  t.topic_poster = u.user_id AND
			  t.topic_first_post_id = pt.post_id AND
			  t.topic_first_post_id = p.post_id AND
			  t.topic_type in ('.POST_ANNOUNCE.')
			ORDER BY
			  t.topic_time DESC';
	if ($number_of_posts != 0)
	{
		$sql .= '
			LIMIT
			  0,' . $number_of_posts;
	}
	//
	// query the database
	//
	if(!($result = $db->sql_query($sql)))
	{
		message_die(GENERAL_ERROR, 'Could not query announcements information', '', __LINE__, __FILE__, $sql);
	}
	//
	// fetch all postings
	//
	$posts = array();
	if ($row = $db->sql_fetchrow($result))
	{
		$i = 0;
		do
		{
			$posts[$i]['bbcode_uid'] = $row['bbcode_uid'];
			$posts[$i]['enable_smilies'] = $row['enable_smilies'];
			$posts[$i]['post_text'] = $row['post_text'];
			$posts[$i]['topic_id'] = $row['topic_id'];
			$posts[$i]['topic_replies'] = $row['topic_replies'];
			$posts[$i]['topic_time'] = create_date($board_config['default_dateformat'], $row['topic_time'], $board_config['board_timezone']);
			$posts[$i]['topic_title'] = $row['topic_title'];
			$posts[$i]['user_id'] = $row['user_id'];
			$posts[$i]['username'] = $row['username'];

			//
			// do a little magic
			// note: part of this comes from mds' news script and some additional magics from Smartor
			//
			stripslashes($posts[$i]['post_text']);
			if (($text_length == 0) or (strlen($posts[$i]['post_text']) <= $text_length))
			{				
				$posts[$i]['post_text'] = bbencode_second_pass($posts[$i]['post_text'], $posts[$i]['bbcode_uid']);
				$posts[$i]['striped'] = 0;
			}
			else // strip text for news
			{
				$posts[$i]['post_text'] = bbencode_strip($posts[$i]['post_text'], $posts[$i]['bbcode_uid']);
				$posts[$i]['post_text'] = substr($posts[$i]['post_text'], 0, $text_length) . '...';
				$posts[$i]['striped'] = 1;
			}
			//
			// Smilies
			//
			if ($posts[$i]['enable_smilies'] == 1)
			{
				$posts[$i]['post_text'] = smilies_pass($posts[$i]['post_text']);
			}
			$posts[$i]['post_text'] = make_clickable($posts[$i]['post_text']);
			//
			// define censored word matches
			//
			$orig_word = array();
			$replacement_word = array();
			obtain_word_list($orig_word, $replacement_word);
			//
			// censor text and title
			//
			if (count($orig_word))
			{
				$posts[$i]['topic_title'] = preg_replace($orig_word, $replacement_word, $posts[$i]['topic_title']);
				$posts[$i]['post_text'] = preg_replace($orig_word, $replacement_word, 	$posts[$i]['post_text']);
			}
			$posts[$i]['post_text'] = nl2br($posts[$i]['post_text']);
			$i++;
		}
		while ($row = $db->sql_fetchrow($result));
	}
	//
	// return the result
	//
	return $posts;
} // phpbb_fetch_posts

function phpbb_fetch_poll($forum_sql)
{
	global $db;

	$sql = 'SELECT
			  t.*,
			  vd.*
			FROM
			  ' . TOPICS_TABLE	 . ' AS t,
			  ' . VOTE_DESC_TABLE  . ' AS vd
			WHERE
			  t.forum_id IN (' . $forum_sql . ') AND
			  t.topic_status <> 1 AND
			  t.topic_status <> 2 AND
			  t.topic_vote = 1 AND
			  t.topic_id = vd.topic_id
			ORDER BY
			  t.topic_time DESC
			LIMIT
			  0,1';

	if (!$query = $db->sql_query($sql))
	{
		message_die(GENERAL_ERROR, 'Could not query poll information', '', __LINE__, __FILE__, $sql);
	}

	$result = $db->sql_fetchrow($query);

	if ($result)
	{
		$sql = 'SELECT
				  *
				FROM
				  ' . VOTE_RESULTS_TABLE . '
				WHERE
				  vote_id = ' . $result['vote_id'] . '
				ORDER BY
				  vote_option_id';

		if (!$query = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, 'Could not query vote result information', '', __LINE__, __FILE__, $sql);
		}

		while ($row = $db->sql_fetchrow($query))
		{
			$result['options'][] = $row;
		}		
	}

	return $result;
} // end func phpbb_fetch_poll

//
// Function strip all BBcodes (borrowed from Mouse Hover Topic Preview MOD)
//
function bbencode_strip($text, $uid)
{
	// pad it with a space so we can distinguish between FALSE and matching the 1st char (index 0).
	// This is important; bbencode_quote(), bbencode_list(), and bbencode_code() all depend on it.
	$text = " " . $text;

	// First: If there isn't a "[" and a "]" in the message, don't bother.
	if (! (strpos($text, "[") && strpos($text, "]")) )
	{
		// Remove padding, return.
		$text = substr($text, 1);
		return $text;
	}

	// [CODE] and [ /CODE ] for posting code (HTML, PHP, C etc etc) in your posts.
	$text = str_replace("[code:1:$uid]","", $text);
	$text = str_replace("[/code:1:$uid]", "", $text);
	$text = str_replace("[code:$uid]", "", $text);
	$text = str_replace("[/code:$uid]", "", $text);

	// [QUOTE] and [/QUOTE] for posting replies with quote, or just for quoting stuff.
	$text = str_replace("[quote:1:$uid]","", $text);
	$text = str_replace("[/quote:1:$uid]", "", $text);
	$text = str_replace("[quote:$uid]", "", $text);
	$text = str_replace("[/quote:$uid]", "", $text);
	// New one liner to deal with opening quotes with usernames...
	// replaces the two line version that I had here before..
	$text = preg_replace("/\[quote:$uid=(?:\"?([^\"]*)\"?)\]/si", "", $text);
	$text = preg_replace("/\[quote:1:$uid=(?:\"?([^\"]*)\"?)\]/si", "", $text);
	
	// [list] and [list=x] for (un)ordered lists.
	// unordered lists
	$text = str_replace("[list:$uid]", "", $text);
	// li tags
	$text = str_replace("[*:$uid]", "", $text);
	// ending tags
	$text = str_replace("[/list:u:$uid]", "", $text);
	$text = str_replace("[/list:o:$uid]", "", $text);
	// Ordered lists
	$text = preg_replace("/\[list=([a1]):$uid\]/si", "", $text);

	// colours
	$text = preg_replace("/\[color=(\#[0-9A-F]{6}|[a-z]+):$uid\]/si", "", $text);
	$text = str_replace("[/color:$uid]", "", $text);

	// url #2
	$text = str_replace("[url]","", $text);
	$text = str_replace("[/url]", "", $text);

	// url /\[url=([a-z0-9\-\.,\?!%\*_\/:;~\\&$@\/=\+]+)\](.*?)\[/url\]/si
	$text = preg_replace("/\[url=([a-z0-9\-\.,\?!%\*_\/:;~\\&$@\/=\+]+)\]/si", "", $text);
	$text = str_replace("[/url:$uid]", "", $text);

	// img
	$text = str_replace("[img:$uid]","", $text);
	$text = str_replace("[/img:$uid]", "", $text);

	// email
	$text = str_replace("[email:$uid]","", $text);
	$text = str_replace("[/email:$uid]", "", $text);

	// size
	$text = preg_replace("/\[size=([\-\+]?[1-2]?[0-9]):$uid\]/si", "", $text);
	$text = str_replace("[/size:$uid]", "", $text);
	
	// align
	$text = preg_replace("/\[align=(left|right|center|justify):$uid\]/si", "", $text);
	$text = str_replace("[/align:$uid]", "", $text);

	// [b] and [/b] for bolding text.
	$text = str_replace("[b:$uid]","", $text);
	$text = str_replace("[/b:$uid]", "", $text);

	// [u] and [/u] for underlining text.
	$text = str_replace("[u:$uid]", "", $text);
	$text = str_replace("[/u:$uid]", "", $text);

	// [i] and [/i] for italicizing text.
	$text = str_replace("[i:$uid]", "", $text);
	$text = str_replace("[/i:$uid]", "", $text);
   	
	// Remove our padding from the string..
	$text = substr($text, 1);

	return $text;
}

?>
