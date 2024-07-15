
		<h2>{L_PROFILE}</h2>
		<div class="panel bg3">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div style="width:100%">
			<div id="cp-menu">
				<div id="navigation">
					<ul>
						<li>{INBOX}</li>
						<li>{SENTBOX}</li>
						<li>{OUTBOX}</li>
						<li>{SAVEBOX}</li>
					</ul>
				</div>
			</div>
			<div id="cp-main" class="ucp-main">
				<h2>{BOX_NAME} : {L_MESSAGE}</h2>
				<form method="post" action="{S_PRIVMSGS_ACTION}">
				<div class="post pm">
					<div class="inner"><span class="corners-top"><span></span></span>
					<div class="lbuttons"><a href="{U_REPLY_PM}" class="button icon-button reply-icon" title="{L_POST_REPLY_PM}">{L_BUTTON_PM_REPLY}</a></div>
					<div class="postbody">
						<ul class="post-buttons">
							<li><a href="{U_QUOTE}" title="{L_QUOTE_PM}" class="button icon-button quote-icon"><span>{L_QUOTE_PM}</span></a></li>
							<li><a href="{U_EDIT}" title="{L_EDIT_MESSAGE}" class="button icon-button edit-icon"><span>{L_EDIT_MESSAGE}</span></a></li>
						</ul>
						<h3 class="first">{POST_SUBJECT}</h3>
						<p class="author">
							<strong>{L_POSTED}:</strong> {POST_DATE}
							<br /><strong>{L_FROM}:</strong> {MESSAGE_FROM}
							<br /><strong>{L_TO}:</strong> {MESSAGE_TO}
						</p>
						<div class="content">{MESSAGE}</div>
					</div>
					<dl class="postprofile">
						<dt><strong>{MESSAGE_FROM}</strong></dt>
						<dd><ul class="profile-icons">
							{PM_IMG}
							{PROFILE_IMG}
							{EMAIL_IMG}
							{WWW_IMG}
							{MSN_IMG}
							{ICQ_IMG}
							{YIM_IMG}
							{AIM_IMG}
						</ul></dd>
					</dl>
					<span class="corners-bottom"><span></span></span></div>
				</div>
				<fieldset class="display-options">
					{S_HIDDEN_FIELDS}<input type="submit" name="save" value="{L_SAVE_MSG}" class="button2" />&nbsp; <input type="submit" name="delete" value="{L_DELETE_MSG}" class="button2" />
				</fieldset>
				</form>
			</div>
			<div class="clear"></div>
			</div>
			<span class="corners-bottom"><span></span></span></div>
		</div>
