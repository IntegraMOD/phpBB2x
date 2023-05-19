
<form action="{S_PROFILE_ACTION}" {S_FORM_ENCTYPE} method="post">
<div class="container-fluid">
{ERROR_BOX}
  <div class="row">
	  <div class="col"><span class="nowrap"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></div>
  </div>
  <div class="row forumline mx-0">
	<div class="col">
      <div class="row thHead">
        <div class="col th pt-1">{L_REGISTRATION_INFO}</div>
      </div>
      <div class="row row2">
        <div class="col gensmall">{L_ITEMS_REQUIRED}</div>
      </div>
	<!-- BEGIN switch_namechange_disallowed -->
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_USERNAME}: *</div>
        <div class="col-8 row2 py-1"><input type="hidden" name="username" value="{USERNAME}" /><b>{USERNAME}</b></div>
      </div>
	<!-- END switch_namechange_disallowed -->
	<!-- BEGIN switch_namechange_allowed -->
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_USERNAME}: *</div>
        <div class="col-8 row2 py-1"><input type="text" class="post" style="width:200px" name="username" size="25" maxlength="25" value="{USERNAME}" /></div>
      </div>
	<!-- END switch_namechange_allowed -->
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_EMAIL_ADDRESS}: *</div>
        <div class="col-8 row2 py-1"><input type="text" class="post" style="width:200px" name="email" size="25" maxlength="255" value="{EMAIL}" /></div>
      </div>
	<!-- BEGIN switch_edit_profile -->
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_CURRENT_PASSWORD}: *<br /><span class="gensmall">{L_CONFIRM_PASSWORD_EXPLAIN}</span></div>
        <div class="col-8 row2 py-1"><input type="password" class="post" style="width: 200px" name="cur_password" size="25" maxlength="32" value="{CUR_PASSWORD}" /></div>
      </div>
	<!-- END switch_edit_profile -->
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_NEW_PASSWORD}: *<br /><span class="gensmall">{L_PASSWORD_CONFIRM_IF_CHANGED}</span></div>
        <div class="col-8 row2 py-1"><input type="password" class="post" style="width: 200px" name="new_password" size="25" maxlength="32" value="{NEW_PASSWORD}" /></div>
      </div>
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_CONFIRM_PASSWORD}: *<br /><span class="gensmall">{L_PASSWORD_CONFIRM_IF_CHANGED}</span></div>
        <div class="col-8 row2 py-1"><input type="password" class="post" style="width: 200px" name="password_confirm" size="25" maxlength="32" value="{PASSWORD_CONFIRM}" /></div>
      </div>
	<!-- Visual Confirmation -->
	<!-- BEGIN switch_confirm -->
      <div class="row gensmall">
        <div class="col row1 py-1">{L_CONFIRM_CODE_IMPAIRED}</span><br /><br /><div class="d-block ctr">{CONFIRM_IMG}</div><br /></div>
      </div>
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_CONFIRM_CODE}: *<br /><span class="gensmall">{L_CONFIRM_CODE_EXPLAIN}</span></div>
        <div class="col-8 row2 py-1"><input type="text" class="post" style="width: 200px" name="confirm_code" size="8" maxlength="8" value="" /></div>
      </div>
	<!-- END switch_confirm -->
      <div class="row thBottom">
        <div class="col catHead pt-1">&nbsp;</div>
      </div>

      <div class="row thHead">
        <div class="col th pt-1">{L_PROFILE_INFO}</div>
      </div>
      <div class="row row2">
        <div class="col gensmall">{L_PROFILE_INFO_NOTICE}</div>
      </div>

      <div class="row gen">
        <div class="col-4 row1 py-1">{L_ICQ_NUMBER}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="icq" class="post" style="width: 200px"  size="10" maxlength="255" value="{ICQ}" /></div>
      </div>

      <div class="row gen">
        <div class="col-4 row1 py-1">{L_AIM}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="aim" class="post" style="width: 200px"  size="10" maxlength="255" value="{AIM}" /></div>
      </div>

      <div class="row gen">
        <div class="col-4 row1 py-1">{L_MESSENGER}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="msn" class="post" style="width: 200px"  size="10" maxlength="255" value="{MSN}" /></div>
      </div>
      
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_YAHOO}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="yim" class="post" style="width: 200px"  size="10" maxlength="255" value="{YIM}" /></div>
      </div>  

      <div class="row gen">
        <div class="col-4 row1 py-1">{L_FACEBOOK}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="fb" class="post" style="width: 200px"  size="10" maxlength="255" value="{FB}" /></div>
      </div>

      <div class="row gen">
        <div class="col-4 row1 py-1">{L_INSTAGRAM}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="ig" class="post" style="width: 200px"  size="10" maxlength="255" value="{IG}" /></div>
      </div>

      <div class="row gen">
        <div class="col-4 row1 py-1">{L_PINTEREST}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="pt" class="post" style="width: 200px"  size="10" maxlength="255" value="{PT}" /></div>
      </div>
      
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_TWITTER}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="twr" class="post" style="width: 200px"  size="10" maxlength="255" value="{TWR}" /></div>
      </div>      
      
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_SKYPE}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="skp" class="post" style="width: 200px"  size="10" maxlength="255" value="{SKP}" /></div>
      </div>
      
       <div class="row gen">
        <div class="col-4 row1 py-1">{L_PINTEREST}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="pt" class="post" style="width: 200px"  size="10" maxlength="255" value="{PT}" /></div>
      </div>
      
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_TELEGRAM}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="tg" class="post" style="width: 200px"  size="10" maxlength="255" value="{TG}" /></div>
      </div>      
 
        <div class="row gen">
        <div class="col-4 row1 py-1">{L_LINKEDIN}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="li" class="post" style="width: 200px"  size="10" maxlength="255" value="{LI}" /></div>
      </div>
      
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_TIKTOK}&nbsp;{L_USERNAME}:</div>
        <div class="col-8 row2 py-1"><input type="text" name="tt" class="post" style="width: 200px"  size="10" maxlength="255" value="{TT}" /></div>
      </div>     
      
     
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_WEBSITE}:</div>
        <div class="col-8 row2 py-1"><input type="text" class="post" style="width: 200px"  name="website" size="25" maxlength="255" value="{WEBSITE}" /></div>
      </div>
      
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_LOCATION}:</div>
        <div class="col-8 row2 py-1"><input type="text" class="post" style="width: 200px"  name="location" size="25" maxlength="100" value="{LOCATION}" /></div>
      </div>
   
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_OCCUPATION}:</div>
        <div class="col-8 row2 py-1"><input type="text" class="post" style="width: 200px"  name="occupation" size="25" maxlength="100" value="{OCCUPATION}" /></div>
      </div>
     
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_INTERESTS}:</div>
        <div class="col-8 row2 py-1"><input type="text" class="post" style="width: 200px"  name="interests" size="35" maxlength="150" value="{INTERESTS}" /></div>
      </div>
      
      <div class="row gen">
        <div class="col-4 row1 py-1">{L_SIGNATURE}:<br /><span class="gensmall">{L_SIGNATURE_EXPLAIN}<br /><br />{HTML_STATUS}<br />{BBCODE_STATUS}<br />{SMILIES_STATUS}</span></div>
        <div class="col-8 row2 py-1"><textarea name="signature" style="width: 100%" rows="6" cols="30" class="post">{SIGNATURE}</textarea></div>
      </div>

      <div class="row thBottom">
        <div class="col catHead pt-1">&nbsp;</div>
      </div>

      <div class="row thHead">
        <div class="col th pt-1">{L_PREFERENCES}</div>
      </div>

      <div class="row gen">
        <div class="col-8 row1 py-1">{L_PUBLIC_VIEW_EMAIL}:</div>
        <div class="col-4 row2 py-1">
		  <input type="radio" name="viewemail" value="1" {VIEW_EMAIL_YES} />
		  <span class="gen">{L_YES}</span>&nbsp;&nbsp; 
		  <input type="radio" name="viewemail" value="0" {VIEW_EMAIL_NO} />
		  <span class="gen">{L_NO}</span>
	    </div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_HIDE_USER}:</div>
        <div class="col-4 row2 py-1">
          <input type="radio" name="hideonline" value="1" {HIDE_USER_YES} />
		  <span class="gen">{L_YES}</span>&nbsp;&nbsp; 
		  <input type="radio" name="hideonline" value="0" {HIDE_USER_NO} />
		  <span class="gen">{L_NO}</span>
	    </div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_NOTIFY_ON_REPLY}:<br /><span class="gensmall">{L_NOTIFY_ON_REPLY_EXPLAIN}</span></div>
        <div class="col-4 row2 py-1">
		  <input type="radio" name="notifyreply" value="1" {NOTIFY_REPLY_YES} />
		  <span class="gen">{L_YES}</span>&nbsp;&nbsp; 
		  <input type="radio" name="notifyreply" value="0" {NOTIFY_REPLY_NO} />
		  <span class="gen">{L_NO}</span>
	    </div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_NOTIFY_ON_PRIVMSG}:</div>
        <div class="col-4 row2 py-1">
		  <input type="radio" name="notifypm" value="1" {NOTIFY_PM_YES} />
		  <span class="gen">{L_YES}</span>&nbsp;&nbsp; 
		  <input type="radio" name="notifypm" value="0" {NOTIFY_PM_NO} />
		  <span class="gen">{L_NO}</span>
		</div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_POPUP_ON_PRIVMSG}:<br /><span class="gensmall">{L_POPUP_ON_PRIVMSG_EXPLAIN}</span></div>
        <div class="col-4 row2 py-1">
		  <input type="radio" name="popup_pm" value="1" {POPUP_PM_YES} />
		  <span class="gen">{L_YES}</span>&nbsp;&nbsp; 
		  <input type="radio" name="popup_pm" value="0" {POPUP_PM_NO} />
		  <span class="gen">{L_NO}</span>
		</div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_ALWAYS_ADD_SIGNATURE}:</div>
        <div class="col-4 row2 py-1">
		  <input type="radio" name="attachsig" value="1" {ALWAYS_ADD_SIGNATURE_YES} />
		  <span class="gen">{L_YES}</span>&nbsp;&nbsp; 
		  <input type="radio" name="attachsig" value="0" {ALWAYS_ADD_SIGNATURE_NO} />
		  <span class="gen">{L_NO}</span>
		</div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_ALWAYS_ALLOW_BBCODE}:</div>
        <div class="col-4 row2 py-1">
		<input type="radio" name="allowbbcode" value="1" {ALWAYS_ALLOW_BBCODE_YES} />
		<span class="gen">{L_YES}</span>&nbsp;&nbsp; 
		<input type="radio" name="allowbbcode" value="0" {ALWAYS_ALLOW_BBCODE_NO} />
		<span class="gen">{L_NO}</span>
		</div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_ALWAYS_ALLOW_HTML}:</div>
        <div class="col-4 row2 py-1">
	  	  <input type="radio" name="allowhtml" value="1" {ALWAYS_ALLOW_HTML_YES} />
		  <span class="gen">{L_YES}</span>&nbsp;&nbsp; 
		  <input type="radio" name="allowhtml" value="0" {ALWAYS_ALLOW_HTML_NO} />
		  <span class="gen">{L_NO}</span>
		</div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_ALWAYS_ALLOW_SMILIES}:</div>
        <div class="col-4 row2 py-1">
		  <input type="radio" name="allowsmilies" value="1" {ALWAYS_ALLOW_SMILIES_YES} />
		  <span class="gen">{L_YES}</span>&nbsp;&nbsp; 
		  <input type="radio" name="allowsmilies" value="0" {ALWAYS_ALLOW_SMILIES_NO} />
		  <span class="gen">{L_NO}</span>
		</div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_BOARD_LANGUAGE}:</div>
        <div class="col-4 row2 py-1 gensmall">{LANGUAGE_SELECT}</div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_BOARD_STYLE}:</div>
        <div class="col-4 row2 py-1 gensmall">{STYLE_SELECT}</div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_TIMEZONE}:</div>
        <div class="col-4 row2 py-1 gensmall">{TIMEZONE_SELECT}</div>
      </div>
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_DATE_FORMAT}:<br /><span class="gensmall">{L_DATE_FORMAT_EXPLAIN}</span></div>
        <div class="col-4 row2 py-1 gensmall"><input type="text" name="dateformat" value="{DATE_FORMAT}" maxlength="14" class="post" /></div>
      </div>
	<!-- BEGIN switch_avatar_block -->
      <div class="row thHead">
        <div class="col th pt-1">{L_AVATAR_PANEL}</div>
      </div>
      <div class="row gensmall">
        <div class="col-8 row1 py-1">{L_AVATAR_EXPLAIN}</div>
        <div class="col-4 row2 py-1 ctr">{L_CURRENT_IMAGE}</span><br />{AVATAR}<br /><input type="checkbox" name="avatardel" />&nbsp;<span class="gensmall">{L_DELETE_AVATAR}</span></div>
      </div>
	<!-- BEGIN switch_avatar_local_upload -->
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_UPLOAD_AVATAR_FILE}:</div>
        <div class="col-4 row2 py-1"><input type="hidden" name="MAX_FILE_SIZE" value="{AVATAR_SIZE}" /><input type="file" name="avatar" class="post" style="width:200px" /></div>
      </div>
	<!-- END switch_avatar_local_upload -->
	<!-- BEGIN switch_avatar_remote_upload -->
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_UPLOAD_AVATAR_URL}:<br /><span class="gensmall">{L_UPLOAD_AVATAR_URL_EXPLAIN}</span></div>
        <div class="col-4 row2 py-1"><input type="text" name="avatarurl" size="40" class="post" style="width:200px" /></div>
      </div>
	<!-- END switch_avatar_remote_upload -->
	<!-- BEGIN switch_avatar_remote_link -->
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_LINK_REMOTE_AVATAR}:<br /><span class="gensmall">{L_LINK_REMOTE_AVATAR_EXPLAIN}</span></div>
        <div class="col-4 row2 py-1"><input type="text" name="avatarremoteurl" size="40" class="post" style="width:200px" /></div>
      </div>
	<!-- END switch_avatar_remote_link -->
	<!-- BEGIN switch_avatar_local_gallery -->
      <div class="row gen">
        <div class="col-8 row1 py-1">{L_AVATAR_GALLERY}:</div>
        <div class="col-4 row2 py-1"><input type="submit" name="avatargallery" value="{L_SHOW_GALLERY}" class="liteoption" /></div>
      </div>
	<!-- END switch_avatar_local_gallery -->
	<!-- END switch_avatar_block -->
      <div class="row gen">
        <div class="col-8 row1 py-1"></div>
        <div class="col-4 row2 py-1"></div>
      </div>
      <div class="row thBottom">
        <div class="col catBottom ctr pt-1">{S_HIDDEN_FIELDS}<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="{L_RESET}" name="reset" class="liteoption" /></div>
      </div>
    </div>
  </div>
</div>
<br />
</div>
</form>