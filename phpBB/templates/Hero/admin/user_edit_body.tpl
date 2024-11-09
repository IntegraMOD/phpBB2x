				<h1>{L_USER_TITLE}</h1>
				<p>{L_USER_EXPLAIN}</p>
				{ERROR_BOX}
				<form action="{S_PROFILE_ACTION}" {S_FORM_ENCTYPE} method="post">
				<fieldset>
					<legend>{L_REGISTRATION_INFO}</legend>
					<p>{L_ITEMS_REQUIRED}</p>
					<dl>
						<dt><label>{L_USERNAME}: *</label></dt>
						<dd><input type="text" name="username" maxlength="40" value="{USERNAME}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_EMAIL_ADDRESS}: *</label></dt>
						<dd><input id="user_email" type="text" name="email" maxlength="100" value="{EMAIL}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_NEW_PASSWORD}: *</label><br /><span>{L_PASSWORD_IF_CHANGED}</span></dt>
						<dd><input type="password" name="password"maxlength="255" value="" /></dd>
					</dl>
					<dl>
						<dt><label>{L_CONFIRM_PASSWORD}: *</label><br /><span>{L_PASSWORD_CONFIRM_IF_CHANGED}</span></dt>
						<dd><input type="password" name="password_confirm" maxlength="255" value="" /></dd>
					</dl>
				</fieldset>
				<fieldset>
				    <legend>{L_PROFILE_INFO}</legend>
				    <p>{L_PROFILE_INFO_NOTICE}</p>
					<dl>
						<dt><label>{L_ICQ_NUMBER}:</label></dt>
						<dd><input type="text" name="icq" maxlength="15" value="{ICQ}" class="inputbox" placeholder="{L_USER_ID_EXPLAIN}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_DISCORD}:</label></dt>
						<dd><input type="text" name="dc" maxlength="255" value="{DC}" class="inputbox" placeholder="{L_USER_ID_EXPLAIN}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_FACEBOOK}:</label></dt>
						<dd><input type="text" name="fb" maxlength="255" value="{FB}" class="inputbox" /></dd>
					</dl>
					<dl>
						<dt><label>{L_INSTAGRAM}:</label></dt>
						<dd><input type="text" name="ig" maxlength="255" value="{IG}" class="inputbox" /></dd>
					</dl>
					<dl>
						<dt><label>{L_LINKEDIN}:</label></dt>
						<dd><input type="text" name="li" maxlength="255" value="{LI}" class="inputbox" /></dd>
					</dl>						
					<dl>
						<dt><label>{L_PINTEREST}:</label></dt>
						<dd><input type="text" name="pt" maxlength="255" value="{PT}" class="inputbox" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SKYPE}:</label></dt>
						<dd><input type="text" name="skp" maxlength="255" value="{SKP}" class="inputbox" /></dd>
					</dl>
					<dl>
						<dt><label>{L_TELEGRAM}:</label></dt>
						<dd><input type="text" name="tg" maxlength="255" value="{TG}" class="inputbox" /></dd>
					</dl>
					<dl>
						<dt><label>{L_TIKTOK}:</label></dt>
						<dd><input type="text" name="tt" maxlength="255" value="{TT}" class="inputbox" /></dd>
					</dl>						
					<dl>
						<dt><label>{L_TWITTER}:</label></dt>
						<dd><input type="text" name="twr" maxlength="255" value="{TWR}" class="inputbox" /></dd>
					</dl>
					<dl>
						<dt><label>{L_WEBSITE}:</label></dt>
						<dd><input type="text" name="website" maxlength="255" value="{WEBSITE}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_LOCATION}:</label></dt>
						<dd><input type="text" name="location" maxlength="255" value="{LOCATION}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_OCCUPATION}:</label></dt>
						<dd><textarea name="occupation" rows="3" cols="30">{OCCUPATION}</textarea></dd>
					</dl>
					<dl>
						<dt><label>{L_INTERESTS}:</label></dt>
						<dd><textarea name="interests" rows="3" cols="30">{INTERESTS}</textarea></dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_SIGNATURE}</legend>
					<p>{L_SIGNATURE_EXPLAIN}<p/>
					<dl>
						<dt>{BBCODE_STATUS}<br />
						{SMILIES_STATUS}</dt>
						<dd><textarea name="signature" rows="6" cols="76">{SIGNATURE}</textarea></dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_PREFERENCES}</legend>
					<dl>
						<dt><label>{L_PUBLIC_VIEW_EMAIL}:</label></dt>
						<dd><input type="radio" class="radio" name="viewemail" value="1" {VIEW_EMAIL_YES} /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="viewemail" value="0" {VIEW_EMAIL_NO} /> 
						{L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_HIDE_USER}:</label></dt>
						<dd><input type="radio" class="radio" name="hideonline" value="1" {HIDE_USER_YES} /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="hideonline" value="0" {HIDE_USER_NO} /> 
						{L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_NOTIFY_ON_REPLY}:</label></dt>
						<dd><input type="radio" class="radio" name="notifyreply" value="1" {NOTIFY_REPLY_YES} /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="notifyreply" value="0" {NOTIFY_REPLY_NO} /> 
						{L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_NOTIFY_ON_PRIVMSG}:</label></dt>
						<dd><input type="radio" class="radio" name="notifypm" value="1" {NOTIFY_PM_YES} /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="notifypm" value="0" {NOTIFY_PM_NO} /> 
						{L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_POPUP_ON_PRIVMSG}:</label></dt>
						<dd><input type="radio" class="radio" name="popup_pm" value="1" {POPUP_PM_YES} /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="popup_pm" value="0" {POPUP_PM_NO} /> 
						{L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_ALWAYS_ADD_SIGNATURE}:</label></dt>
						<dd><input type="radio" class="radio" name="attachsig" value="1" {ALWAYS_ADD_SIGNATURE_YES} /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="attachsig" value="0" {ALWAYS_ADD_SIGNATURE_NO} /> 
						{L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_ALWAYS_ALLOW_BBCODE}:</label></dt>
						<dd><input type="radio" class="radio" name="allowbbcode" value="1" {ALWAYS_ALLOW_BBCODE_YES} /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="allowbbcode" value="0" {ALWAYS_ALLOW_BBCODE_NO} /> 
						{L_NO}</dd>
					</dl>
					<dl style="display:none">
						<dt><label>{L_ALWAYS_ALLOW_HTML}:</label></dt>
						<dd><input type="radio" class="radio" name="allowhtml" value="1" /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="allowhtml" value="0" checked="checked" /> 
						{L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_ALWAYS_ALLOW_SMILIES}:</label></dt>
						<dd><input type="radio" class="radio" name="allowsmilies" value="1" {ALWAYS_ALLOW_SMILIES_YES} /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="allowsmilies" value="0" {ALWAYS_ALLOW_SMILIES_NO} /> 
						{L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_BOARD_LANGUAGE}:</label></dt>
						<dd>{LANGUAGE_SELECT}</dd>
					</dl>
					<dl>
						<dt><label>{L_BOARD_STYLE}:</label></dt>
						<dd>{STYLE_SELECT}</dd>
					</dl>
					<dl>
						<dt><label>{L_TIMEZONE}:</label></dt>
						<dd>{TIMEZONE_SELECT}</dd>
					</dl>
					<dl>
						<dt><label>{L_DATE_FORMAT}:</label><br />
						<span>{L_DATE_FORMAT_EXPLAIN}</span></dt>
						<dd><input type="text" name="dateformat" value="{DATE_FORMAT}" maxlength="16" /></dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_AVATAR_PANEL}</legend>
					<dl>
						<dt><label>{L_CURRENT_IMAGE}:</label><br /><span>{L_AVATAR_EXPLAIN}</span></dt>
						<dd>{AVATAR}</dd>
						<dd><label><input type="checkbox" name="avatardel" /> {L_DELETE_AVATAR}</label></dd>
					</dl>
					<!-- BEGIN avatar_local_upload -->
						<dl>
							<dt><label>{L_UPLOAD_AVATAR_FILE}:</label></dt>
							<dd><input type="hidden" name="MAX_FILE_SIZE" value="{AVATAR_SIZE}" /><input type="file" name="avatar" /></dd>
						</dl>
					<!-- END avatar_local_upload -->
					<!-- BEGIN avatar_remote_upload -->
						<dl>
							<dt><label>{L_UPLOAD_AVATAR_URL}:</label><br /><span>{L_UPLOAD_AVATAR_URL_EXPLAIN}</span></dt>
							<dd><input type="text" name="avatarurl" value="{AVATAR_URL}" /></dd>
						</dl>
					<!-- END avatar_remote_upload -->
					<!-- BEGIN avatar_remote_link -->
						<dl>
							<dt><label>{L_LINK_REMOTE_AVATAR}:</label><br /><span>{L_LINK_REMOTE_AVATAR_EXPLAIN}</span></dt>
							<dd><input type="text" name="avatarremoteurl" value="{AVATAR_REMOTE}" /></dd>
						</dl>
					<!-- END avatar_remote_link -->
					<!-- BEGIN avatar_local_gallery -->
						<dl>
							<dt><label>{L_AVATAR_GALLERY}:</label><br /><span>{L_UPLOAD_AVATAR_URL_EXPLAIN}</span></dt>
							<dd><input type="submit" name="avatargallery" value="{L_SHOW_GALLERY}" class="button2" /></dd>
						</dl>
					<!-- END avatar_local_gallery -->
					</fieldset>
				<fieldset>
					<legend>{L_SPECIAL}</legend>
					<p>{L_SPECIAL_EXPLAIN}</p>
					<dl>
						<dt><label>{L_USER_ACTIVE}:</label></dt>
						<dd><input type="radio" class="radio" name="user_status" value="1" {USER_ACTIVE_YES} /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="user_status" value="0" {USER_ACTIVE_NO} /> 
						{L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_ALLOW_PM}:</label></dt>
						<dd><input type="radio" class="radio" name="user_allowpm" value="1" {ALLOW_PM_YES} /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="user_allowpm" value="0" {ALLOW_PM_NO} /> 
						{L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_ALLOW_AVATAR}:</label></dt>
						<dd><input type="radio" class="radio" name="user_allowavatar" value="1" {ALLOW_AVATAR_YES} /> 
						{L_YES}&nbsp; 
						<input type="radio" class="radio" name="user_allowavatar" value="0" {ALLOW_AVATAR_NO} /> 
						{L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_SELECT_RANK}:</label></dt>
						<dd><select name="user_rank">{RANK_SELECT_BOX}</select></dd>
					</dl>
					<dl>
						<dt><label>{L_DELETE_USER}?</label></dt>
						<dd><input type="checkbox" name="deleteuser">
						{L_DELETE_USER_EXPLAIN}</dd>
					</dl>
				</fieldset>
				<p class="submit-buttons">
					{S_HIDDEN_FIELDS}
					<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" /> <input type="reset" value="{L_RESET}" class="button2" />
				</p>
				</form>