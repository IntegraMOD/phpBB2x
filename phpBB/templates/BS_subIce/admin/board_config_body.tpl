				<h1>{L_CONFIGURATION_TITLE}</h1>
				<p>{L_CONFIGURATION_EXPLAIN}</p>
				<form action="{S_CONFIG_ACTION}" method="post">
				<fieldset>
					<legend>{L_GENERAL_SETTINGS}</legend>
					<dl>
						<dt><label>{L_SERVER_NAME}:</label></dt>
						<dd><input type="text" maxlength="255" size="40" name="server_name" value="{SERVER_NAME}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SERVER_PORT}:</label><br /><span>{L_SERVER_PORT_EXPLAIN}</span></dt>
						<dd><input type="text" maxlength="5" size="5" name="server_port" value="{SERVER_PORT}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SCRIPT_PATH}:</label><br /><span>{L_SCRIPT_PATH_EXPLAIN}</span></dt>
						<dd><input type="text" maxlength="255" name="script_path" value="{SCRIPT_PATH}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SITE_NAME}:</label><br /><span>{L_SITE_NAME_EXPLAIN}</span></dt>
						<dd><input type="text" size="25" maxlength="100" name="sitename" value="{SITENAME}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SITE_DESCRIPTION}:</label></dt>
						<dd><input type="text" size="40" maxlength="255" name="site_desc" value="{SITE_DESCRIPTION}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_DISABLE_BOARD}:</label><br /><span>{L_DISABLE_BOARD_EXPLAIN}</span></dt>
						<dd><input type="radio" class="radio" name="board_disable" value="1" {S_DISABLE_BOARD_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="board_disable" value="0" {S_DISABLE_BOARD_NO} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_ACCT_ACTIVATION}:</label></dt>
						<dd><input type="radio" class="radio" name="require_activation" value="{ACTIVATION_NONE}" {ACTIVATION_NONE_CHECKED} /> {L_NONE}&nbsp; <input type="radio" class="radio" name="require_activation" value="{ACTIVATION_USER}" {ACTIVATION_USER_CHECKED} /> {L_USER}&nbsp; <input type="radio" class="radio" name="require_activation" value="{ACTIVATION_ADMIN}" {ACTIVATION_ADMIN_CHECKED} /> {L_ADMIN}</dd>
					</dl>
					<dl>
						<dt><label>{L_VISUAL_CONFIRM}:</label><br /><span>{L_VISUAL_CONFIRM_EXPLAIN}</span></dt>
						<dd><input type="radio" class="radio" name="enable_confirm" value="1" {CONFIRM_ENABLE} /> {L_YES}&nbsp; <input type="radio" class="radio" name="enable_confirm" value="0" {CONFIRM_DISABLE} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_ALLOW_AUTOLOGIN}:</label><br /><span>{L_ALLOW_AUTOLOGIN_EXPLAIN}</span></dt>
						<dd><input type="radio" class="radio" name="allow_autologin" value="1" {ALLOW_AUTOLOGIN_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="allow_autologin" value="0" {ALLOW_AUTOLOGIN_NO} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_AUTOLOGIN_TIME}:</label><br /><span>{L_ALLOW_AUTOLOGIN_EXPLAIN}</span></dt>
						<dd><input type="text" size="3" maxlength="4" name="max_autologin_time" value="{AUTOLOGIN_TIME}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_BOARD_EMAIL_FORM}:</label><br /><span>{L_BOARD_EMAIL_FORM_EXPLAIN}</span></dt>
						<dd><input type="radio" class="radio" name="board_email_form" value="1" {BOARD_EMAIL_FORM_ENABLE} /> {L_ENABLED}&nbsp; <input type="radio" class="radio" name="board_email_form" value="0" {BOARD_EMAIL_FORM_DISABLE} /> {L_DISABLED}</dd>
					</dl>
					<dl>
						<dt><label>{L_FLOOD_INTERVAL}:</label><br /><span>{L_FLOOD_INTERVAL_EXPLAIN}</span></dt>
						<dd><input type="text" size="3" maxlength="4" name="flood_interval" value="{FLOOD_INTERVAL}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SEARCH_FLOOD_INTERVAL}:</label><br /><span>{L_SEARCH_FLOOD_INTERVAL_EXPLAIN}</span></dt>
						<dd><input type="text" size="3" maxlength="4" name="search_flood_interval" value="{SEARCH_FLOOD_INTERVAL}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_MAX_LOGIN_ATTEMPTS}:</label><br /><span>{L_MAX_LOGIN_ATTEMPTS_EXPLAIN}</span></dt>
						<dd><input type="text" size="3" maxlength="4" name="max_login_attempts" value="{MAX_LOGIN_ATTEMPTS}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_LOGIN_RESET_TIME}:</label><br /><span>{L_LOGIN_RESET_TIME_EXPLAIN}</span></dt>
						<dd><input type="text" size="3" maxlength="4" name="login_reset_time" value="{LOGIN_RESET_TIME}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_TOPICS_PER_PAGE}:</label></dt>
						<dd><input type="text" name="topics_per_page" size="3" maxlength="4" value="{TOPICS_PER_PAGE}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_POSTS_PER_PAGE}:</label></dt>
						<dd><input type="text" name="posts_per_page" size="3" maxlength="4" value="{POSTS_PER_PAGE}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_HOT_THRESHOLD}:</label></dt>
						<dd><input type="text" name="hot_threshold" size="3" maxlength="4" value="{HOT_TOPIC}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_DEFAULT_STYLE}:</label></dt>
						<dd>{STYLE_SELECT}</dd>
					</dl>
					<dl>
						<dt><label>{L_OVERRIDE_STYLE}:</label><br /><span>{L_OVERRIDE_STYLE_EXPLAIN}</span></dt>
						<dd><input type="radio" class="radio" name="override_user_style" value="1" {OVERRIDE_STYLE_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="override_user_style" value="0" {OVERRIDE_STYLE_NO} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_DEFAULT_LANGUAGE}:</label></dt>
						<dd>{LANG_SELECT}</dd>
					</dl>
					<dl>
						<dt><label>{L_DATE_FORMAT}:</label><br /><span>{L_DATE_FORMAT_EXPLAIN}</span></dt>
						<dd><input type="text" name="default_dateformat" value="{DEFAULT_DATEFORMAT}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SYSTEM_TIMEZONE}:</label></dt>
						<dd>{TIMEZONE_SELECT}</dd>
					</dl>
					<dl>
						<dt><label>{L_ENABLE_GZIP}:</label></dt>
						<dd><input type="radio" class="radio" name="gzip_compress" value="1" {GZIP_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="gzip_compress" value="0" {GZIP_NO} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_ENABLE_PRUNE}:</label></dt>
						<dd><input type="radio" class="radio" name="prune_enable" value="1" {PRUNE_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="prune_enable" value="0" {PRUNE_NO} /> {L_NO}</dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_COOKIE_SETTINGS}</legend>
					<dl>
						<dt><label>{L_COOKIE_DOMAIN}:</label></dt>
						<dd><input type="text" maxlength="255" name="cookie_domain" value="{COOKIE_DOMAIN}" /</dd>
					</dl>
					<dl>
						<dt><label>{L_COOKIE_NAME}:</label></dt>
						<dd><input type="text" maxlength="16" name="cookie_name" value="{COOKIE_NAME}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_COOKIE_PATH}:</label></dt>
						<dd><input type="text" maxlength="255" size="40" name="server_name" value="{SERVER_NAME}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_COOKIE_SECURE}:</label><br /><span>{L_COOKIE_SECURE_EXPLAIN}</span></dt>
						<dd><input type="radio" class="radio" name="cookie_secure" value="0" {S_COOKIE_SECURE_DISABLED} /> {L_DISABLED}&nbsp; <input type="radio" class="radio" name="cookie_secure" value="1" {S_COOKIE_SECURE_ENABLED} /> {L_ENABLED}</dd>
					</dl>
					<dl>
						<dt><label>{L_SESSION_LENGTH}:</label></dt>
						<dd><input type="text" maxlength="5" size="5" name="session_length" value="{SESSION_LENGTH}" /></dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_PRIVATE_MESSAGING}</legend>
					<dl>
						<dt><label>{L_DISABLE_PRIVATE_MESSAGING}:</label></dt>
						<dd><input type="radio" class="radio" name="privmsg_disable" value="0" {S_PRIVMSG_ENABLED} /> {L_ENABLED}&nbsp; <input type="radio" class="radio" name="privmsg_disable" value="1" {S_PRIVMSG_DISABLED} /> {L_DISABLED}</dd>
					</dl>
					<dl>
						<dt><label>{L_INBOX_LIMIT}:</label></dt>
						<dd><input type="text" maxlength="4" size="4" name="max_inbox_privmsgs" value="{INBOX_LIMIT}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SENTBOX_LIMIT}:</label></dt>
						<dd><input type="text" maxlength="4" size="4" name="max_sentbox_privmsgs" value="{SENTBOX_LIMIT}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SAVEBOX_LIMIT}:</label></dt>
						<dd><input type="text" maxlength="4" size="4" name="max_savebox_privmsgs" value="{SAVEBOX_LIMIT}" /></dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_ABILITIES_SETTINGS}</legend>
					<dl>
						<dt><label>{L_MAX_POLL_OPTIONS}:</label></dt>
						<dd><input type="text" name="max_poll_options" size="4" maxlength="4" value="{MAX_POLL_OPTIONS}" /></dd>
					</dl>
					<dl style="display:none">
						<dt><label>{L_ALLOW_HTML}:</label></dt>
						<dd><input type="radio" class="radio" name="allow_html" value="1" /> {L_YES}&nbsp; <input type="radio" class="radio" name="allow_html" value="0" checked="checked" /> {L_NO}</dd>
					</dl>
					<dl style="display:none">
						<dt><label>{L_ALLOWED_TAGS}:</label><br /><span>{L_ALLOWED_TAGS_EXPLAIN}</span></dt>
						<dd><input type="text" size="30" maxlength="255" name="allow_html_tags" value="" /></dd>
					</dl>
					<dl>
						<dt><label>{L_ALLOW_BBCODE}:</label></dt>
						<dd><input type="radio" class="radio" name="allow_bbcode" value="1" {BBCODE_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="allow_bbcode" value="0" {BBCODE_NO} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_ALLOW_SMILIES}:</label></dt>
						<dd><input type="radio" class="radio" name="allow_smilies" value="1" {SMILE_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="allow_smilies" value="0" {SMILE_NO} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_SMILIES_PATH}:</label><br /><span>{L_SMILIES_PATH_EXPLAIN}</span></dt>
						<dd><input type="text" size="20" maxlength="255" name="smilies_path" value="{SMILIES_PATH}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_ALLOW_SIG}:</label></dt>
						<dd><input type="radio" class="radio" name="allow_sig" value="1" {SIG_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="allow_sig" value="0" {SIG_NO} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_MAX_SIG_LENGTH}:</label><br /><span>{L_MAX_SIG_LENGTH_EXPLAIN}</span></dt>
						<dd><input type="text" size="5" maxlength="4" name="max_sig_chars" value="{SIG_SIZE}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_ALLOW_NAME_CHANGE}:</label></dt>
						<dd><input type="radio" class="radio" name="allow_namechange" value="1" {NAMECHANGE_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="allow_namechange" value="0" {NAMECHANGE_NO} /> {L_NO}</dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_AVATAR_SETTINGS}</legend>
					<dl>
						<dt><label>{L_ALLOW_LOCAL}:</label></dt>
						<dd><input type="radio" class="radio" name="allow_avatar_local" value="1" {AVATARS_LOCAL_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="allow_avatar_local" value="0" {AVATARS_LOCAL_NO} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_ALLOW_REMOTE}:</label><br /><span>{L_ALLOW_REMOTE_EXPLAIN}</span></dt>
						<dd><input type="radio" class="radio" name="allow_avatar_remote" value="1" {AVATARS_REMOTE_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="allow_avatar_remote" value="0" {AVATARS_REMOTE_NO} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_ALLOW_UPLOAD}:</label></dt>
						<dd><input type="radio" class="radio" name="allow_avatar_upload" value="1" {AVATARS_UPLOAD_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="allow_avatar_upload" value="0" {AVATARS_UPLOAD_NO} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_MAX_FILESIZE}:</label><br /><span>{L_MAX_FILESIZE_EXPLAIN}</span></dt>
						<dd><input type="text" size="4" maxlength="10" name="avatar_filesize" value="{AVATAR_FILESIZE}" /> Bytes</dd>
					</dl>
					<dl>
						<dt><label>{L_MAX_AVATAR_SIZE}:</label><br /><span>{L_MAX_AVATAR_SIZE_EXPLAIN}</span></dt>
						<dd><input type="text" size="3" maxlength="4" name="avatar_max_height" value="{AVATAR_MAX_HEIGHT}" /> x <input type="text" size="3" maxlength="4" name="avatar_max_width" value="{AVATAR_MAX_WIDTH}"></dd>
					</dl>
					<dl>
						<dt><label>{L_AVATAR_STORAGE_PATH}:</label><br /><span>{L_AVATAR_STORAGE_PATH_EXPLAIN}</span></dt>
						<dd><input type="text" size="20" maxlength="255" name="avatar_path" value="{AVATAR_PATH}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_AVATAR_GALLERY_PATH}:</label><br /><span>{L_AVATAR_GALLERY_PATH_EXPLAIN}</span></dt>
						<dd><input type="text" size="20" maxlength="255" name="avatar_gallery_path" value="{AVATAR_GALLERY_PATH}" /></dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_COPPA_SETTINGS}</legend>
					<dl>
						<dt><label>{L_COPPA_FAX}:</label></dt>
						<dd><input type="text" size="25" maxlength="100" name="coppa_fax" value="{COPPA_FAX}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_COPPA_MAIL}:</label><br /><span>{L_COPPA_MAIL_EXPLAIN}</span></dt>
						<dd><textarea name="coppa_mail" rows="5" cols="40">{COPPA_MAIL}</textarea></dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_EMAIL_SETTINGS}</legend>
					<dl>
						<dt><label>{L_ADMIN_EMAIL}:</label></dt>
						<dd><input type="text" size="25" maxlength="100" name="board_email" value="{EMAIL_FROM}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_EMAIL_SIG}:</label><br /><span>{L_EMAIL_SIG_EXPLAIN}</span></dt>
						<dd><textarea name="board_email_sig" rows="5" cols="40">{EMAIL_SIG}</textarea></dd>
					</dl>
					<dl>
						<dt><label>{L_USE_SMTP}:</label><br /><span>{L_USE_SMTP_EXPLAIN}</span></dt>
						<dd><input type="radio" class="radio" name="smtp_delivery" value="1" {SMTP_YES} /> {L_YES}&nbsp; <input type="radio" class="radio" name="smtp_delivery" value="0" {SMTP_NO} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_SMTP_SERVER}:</label></dt>
						<dd><input type="text" name="smtp_host" value="{SMTP_HOST}" size="25" maxlength="50" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SMTP_USERNAME}:</label><br /><span>{L_SMTP_USERNAME_EXPLAIN}</span></dt>
						<dd><input type="text" name="smtp_username" value="{SMTP_USERNAME}" size="25" maxlength="255" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SMTP_PASSWORD}:</label><br /><span>{L_SMTP_PASSWORD_EXPLAIN}</span></dt>
						<dd><input type="password" name="smtp_password" value="{SMTP_PASSWORD}" size="25" maxlength="255" /></dd>
					</dl>
				</fieldset>
				<fieldset class="submit-buttons">
					<legend>{L_SUBMIT}</legend>
					{S_HIDDEN_FIELDS}
					<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp; 
					<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />
				</fieldset>
				</form>