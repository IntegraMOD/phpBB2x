

		<!-- BEGIN switch_user_logged_in -->
		<p class="rightside">{LAST_VISIT_DATE}</p>
		<!-- END switch_user_logged_in -->
		<p>{CURRENT_TIME}</p>
		<ul class="linklist">
			<li><a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a>
			<!-- BEGIN switch_user_logged_in -->
			 &bull; <a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a></li>
			<li class="rightside"><a href="{U_MARK_FORUMS}">{L_MARK_FORUMS_READ}</a></li>
			<!-- END switch_user_logged_in -->
		</ul>
		<!-- BEGIN catrow -->
		<div class="forabg">
			<div class="inner"><span class="corners-top"><span></span></span>
			<ul class="topiclist">
				<li class="header">
					<dl class="icon">
						<dt><a href="{catrow.U_VIEWCAT}">{catrow.CAT_DESC}</a></dt>
						<dd class="topics">{L_TOPICS}</dd>
						<dd class="posts">{L_POSTS}</dd>
						<dd class="lastpost"><span>{L_LASTPOST}</span></dd>
					</dl>
				</li>
			</ul>
			<ul class="topiclist forums">
				<!-- BEGIN forumrow -->
				<li class="row">
					<dl class="icon" style="background-image: url({catrow.forumrow.FORUM_FOLDER_IMG}); background-repeat: no-repeat;">
						<dt title="{catrow.forumrow.L_FORUM_FOLDER_ALT}">
							<a href="{catrow.forumrow.U_VIEWFORUM}" class="forumtitle">{catrow.forumrow.FORUM_NAME}</a><br />
							{catrow.forumrow.FORUM_DESC}<br />{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}
						</dt>
						<dd class="topics">{catrow.forumrow.TOPICS}</dd>
						<dd class="posts">{catrow.forumrow.POSTS}</dd>
						<dd class="lastpost"><span>{catrow.forumrow.LAST_POST}</span></dd>
					</dl>
				</li>
				<!-- END forumrow -->
			</ul>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		<!-- END catrow -->
		<!-- BEGIN switch_user_logged_out -->
		<form method="post" action="{S_LOGIN_ACTION}" class="headerspace">
		<h3><a href="{U_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a>&nbsp; &bull; &nbsp;<a href="{U_REGISTER}">{L_REGISTER}</a></h3>
		<fieldset class="quick-login">
			<label>{L_USERNAME}:</label>&nbsp;<input type="text" name="username" size="10" class="inputbox" title="{L_USERNAME}" />  
			<label>{L_PASSWORD}:</label>&nbsp;<input type="password" name="password" size="10" class="inputbox" title="{L_PASSWORD}" />
				| <label>{L_LOG_ME_IN} <input type="checkbox" name="autologin" /></label>
			<input type="submit" name="login" value="{L_LOGIN}" class="button2" />
		</fieldset>
		</form>
		<h3>{L_WHO_IS_ONLINE}</h3>
		<!-- END switch_user_logged_out -->
		<!-- BEGIN switch_user_logged_in -->
		<h3><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></h3>
		<!-- END switch_user_logged_in -->
		<p>{TOTAL_USERS_ONLINE} ({L_ONLINE_EXPLAIN})<br />{RECORD_USERS}<br />{LOGGED_IN_USER_LIST}</p>
		<p>{TOTAL_POSTS} &bull; {TOTAL_USERS} &bull; {NEWEST_USER}</p>

