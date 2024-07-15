<!-- BEGIN switch_user_logged_in -->
<table border="0" cellpadding="0" cellspacing="1" width="100%">
<tr> 
<td align="center" class="row1"><br />
{AVATAR_IMG}<br /><br />
<span class="name">{U_NAME_LINK}<br /></span>
<span class="gensmall">{LAST_VISIT_DATE}<br />
{CURRENT_TIME}<br />
<a href="{U_SEARCH_NEW}">{L_NEW_SEARCH}</a><br />
<a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a><br />
<a href="{U_SEARCH_SELF}">{L_SEARCH_SELF}</a></span></td>
</tr>
</table>
<!-- END switch_user_logged_in -->
<!-- BEGIN switch_user_logged_out -->
<form method="post" action="{S_LOGIN_ACTION}">
<table border="0" cellpadding="0" cellspacing="1" width="100%">
<tr> 
<td align="center" class="row1"><span class="gensmall"> 
<input type="hidden" name="redirect" value="{U_PORTAL}" />
{L_USERNAME}:<br />
<input class="post" type="text" name="username" size="15" />
<br />
{L_PASSWORD}:<br />
<input class="post" type="password" name="password" size="15" />
<br />
</span> <table border="0" cellspacing="0" cellpadding="0">
<tr> 
<td><input class="text" type="checkbox" name="autologin" /></td>
<td class="gensmall">&nbsp;{L_REMEMBER_ME}</td>
</tr>
</table>
<br/> <input type="submit" class="mainoption" name="login" value="{L_LOGIN}" /> 
<br /> <br /> <a href="{U_SEND_PASSWORD}" class="gensmall">{L_SEND_PASSWORD}</a><br /> 
<br /><p class="gensmall">{L_REGISTER_NEW_ACCOUNT}</p></td>
</tr>
</table>
</form>
<!-- END switch_user_logged_out -->