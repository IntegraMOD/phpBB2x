<?php

define('imp_poll_block_func', 'imp_poll_block_func');
if(!function_exists(imp_poll_block_func))
		$template->assign_block_vars('PORTAL_POLL', array());
		$sql = 'SELECT
		if(!$result = $db->sql_query($sql))
		//	if(!$total_posts = $db->sql_numrows($result))
		if($total_posts = $db->sql_numrows($result))
		$topic_id = $pollrow[0]['topic_id'] ;
			$sql = "SELECT vd.vote_id, vd.vote_text, vd.vote_start, vd.vote_length, vr.vote_option_id, vr.vote_option_text, vr.vote_result
			if( $vote_options = $db->sql_numrows($result) )
				$sql = "SELECT vote_id
				$user_voted = ( $db->sql_numrows($result) ) ? TRUE : 0;
				if( isset($HTTP_GET_VARS['vote']) || isset($HTTP_POST_VARS['vote']) )
				$poll_expired = ( $vote_info[0]['vote_length'] ) ? ( ( $vote_info[0]['vote_start'] + $vote_info[0]['vote_length'] < time() ) ? TRUE : 0 ) : 0;
				if( $user_voted || $view_result || $poll_expired || $forum_row['topic_status'] == TOPIC_LOCKED )
					$vote_results_sum = 0;
					for($i = 0; $i < $vote_options; $i++)
					$vote_graphic = 0;
					for($i = 0; $i < $vote_options; $i++)
						$vote_graphic_img = $images['voting_graphic'][$vote_graphic];
//						if( count($orig_word) )
						$template->assign_block_vars("poll_option", array(
					$template->assign_vars(array(
					for($i = 0; $i < $vote_options; $i++)
						$template->assign_block_vars("poll_option", array(
					$s_hidden_fields = '<input type="hidden" name="topic_id" value="' . $topic_id . '"><input type="hidden" name="mode" value="vote">';
				if( count($orig_word) )
				$template->assign_vars(array(
				$template->assign_var_from_handle("PORTAL_POLL", "pollbox");
imp_poll_block_func();
?>