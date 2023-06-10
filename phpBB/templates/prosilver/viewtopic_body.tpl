
		<h2><a href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a></h2><br />
		<div class="topic-actions">
			<div class="lbuttons"><a href="{U_POST_NEW_TOPIC}" class="button icon-button post-icon" title="{L_POST_NEW_TOPIC}">{L_BUTTON_TOPIC_NEW}</a><a href="{U_POST_REPLY_TOPIC}" class="button icon-button post-icon" title="{L_POST_REPLY_TOPIC}">{L_BUTTON_TOPIC_REPLY}</a></div>
			<div class="pagination">{PAGE_NUMBER}&nbsp; <span>{PAGINATION}</span></div>
		</div>
		<div class="clear"></div>
		{POLL_DISPLAY}
		<!-- BEGIN postrow -->
		<div id="{postrow.U_POST_ID}" class="post {postrow.ROW_CLASS}">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div class="postbody">
				<ul class="post-buttons">
					<li><a href="{postrow.U_QUOTE}" title="{L_QUOTE}" class="button icon-button quote-icon"><span>{L_QUOTE}</span></a></li>
					<li><a href="{postrow.U_EDIT}" title="{L_EDIT_POST}" class="button icon-button edit-icon"><span>{L_EDIT_POST}</span></a></li>
					<li><a href="{postrow.U_DELETE}" title="{L_DELETE_POST}" class="button icon-button delete-icon"><span>{L_DELETE_POST}</span></a></li>
					<li><a href="{postrow.U_VIEW_IP}" title="{L_VIEW_IP}" class="button icon-button info-icon"><span>{L_VIEW_IP}</span></a></li>
				</ul>
				<h3 class="first"><a href="{postrow.U_MINI_POST}">{postrow.POST_SUBJECT}</a></h3>
				<p class="author"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" alt="" /></a> <strong>{postrow.POSTER_NAME}</strong> &raquo; {postrow.POST_DATE}</p>
				<div class="content">{postrow.MESSAGE}</div>
				{postrow.EDITED_MESSAGE}{postrow.SIGNATURE}
			</div>
			<dl class="postprofile">
				<dt>{postrow.POSTER_AVATAR}</a><br /><strong>{postrow.POSTER_NAME}</strong></dt>
				<dd>{postrow.POSTER_RANK}<br />{postrow.RANK_IMAGE}</dd>
				<dd>&nbsp;</dd>
				<dd>{postrow.POSTER_POSTS}</dd>
				<dd>{postrow.POSTER_JOINED}</dd>
				<dd>{postrow.POSTER_FROM}</dd>
				<dd><ul class="profile-icons">
					{postrow.PM_IMG}
					{postrow.PROFILE_IMG}
					{postrow.EMAIL_IMG}
					{postrow.WWW_IMG}
					{postrow.MSN_IMG}
					{postrow.ICQ_IMG}
					{postrow.YIM_IMG}
					{postrow.AIM_IMG}
					{postrow.FB_IMG}
					{postrow.IG_IMG}
					{postrow.PT_IMG}
					{postrow.TWR_IMG}
					{postrow.SKP_IMG}
					{postrow.TG_IMG}
					{postrow.LI_IMG}
					{postrow.TT_IMG}					
				</ul></dd>
			</dl>
			<div class="back2top"><a href="#wrap" class="top" title="{L_BACK_TO_TOP}">{L_BACK_TO_TOP}</a></div>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		<hr class="divider" />
		<!-- END postrow -->
		<form method="post" action="{S_POST_DAYS_ACTION}">
		<fieldset class="display-options" style="margin-top: 0; ">
			<label>{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;<span class="res"><input type="submit" name="sort" value="{L_GO}" class="button2" /></span></label>
		</fieldset>
		</form>
		<hr />
		<div class="topic-actions">
			<div class="lbuttons"><a href="{U_POST_NEW_TOPIC}" class="button icon-button post-icon" title="{L_POST_NEW_TOPIC}">{L_BUTTON_TOPIC_NEW}</a><a href="{U_POST_REPLY_TOPIC}" class="button icon-button post-icon" title="{L_POST_REPLY_TOPIC}">{L_BUTTON_TOPIC_REPLY}</a></div>
			<div class="pagination">{PAGE_NUMBER}&nbsp; <span>{PAGINATION}</span></div>
		</div>
		<p></p><p><a href="{U_VIEW_FORUM}" class="left-box left">{FORUM_NAME}</a></p>
		{JUMPBOX}
		{S_TOPIC_ADMIN}
		<p>{S_AUTH_LIST}</p>
