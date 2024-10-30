{LOCBAR}
<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr> 
	<th class="thHead" colspan="2">{L_FILE} - {FILE_NAME}</th>
  </tr>
<tr> 
	<td class="row2" valign="middle" width="20%">{L_DESC}:</td>
	<td class="row1" valign="middle" width="80%">{FILE_LONGDESC}</td>
  </tr>
{CREATOR}
{VERSION}
{SSURL}
{DOCSURL} 
<tr> 
	<td class="row2" valign="middle">{L_DATE}:</td>
	<td class="row1" valign="middle">{TIME}</td>
  </tr>
  <tr> 
	<td class="row2" valign="middle">{L_LASTTDL}:</td>
	<td class="row1" valign="middle">{LAST}</td>
  </tr>
  <tr> 
	<td class="row2" valign="middle">{L_RATING}:</td>
	<td class="row1" valign="middle">{RATING}/10 ({FILE_VOTES} {L_VOTES})</td>
  </tr>
  <tr> 
	<td class="row2" valign="middle">{L_DLS}:</td>
	<td class="row1" valign="middle">{FILE_DLS}</td>
  </tr>
<!-- BEGIN custom_field -->
  <tr>
	<td class="row2" valign="middle">{custom_field.CUSTOM_NAME}:</td>
	<td class="row1" valign="middle">{custom_field.DATA}</td>
  </tr>
<!-- END custom_field -->
<!-- BEGIN switch_user_logged_out -->
  <tr> 
	<td class="catBottom" align="center" colspan="2">You have to <a href="login.php">Log In</a> to download this file</td>
  </tr>
<!-- END switch_user_logged_out -->
</table>

<table width="100%" cellpadding="2" cellspacing="0">
  <tr>
<!-- BEGIN auth_post -->
	<td width="33%" align="center"><a href="{U_DOWNLOAD}"><img src="{DOWNLOAD_IMG}" border="0" alt="{L_DOWNLOAD}" /></a></td>
<!-- END auth_post -->
	<td width="34%" align="center"><a href="{U_RATE}"><img src="{RATE_IMG}" border="0" alt="{L_RATE}" /></a></td>
	<td width="33%" align="center"><a href="{U_EMAIL}"><img src="{EMAIL_IMG}" border="0" alt="{L_EMAIL}" /></a></td>
  </tr>
</table>
<br />
{COMMENT}
