<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr>
    <td align="left" class="nav">
      <a href="{U_INDEX}" class="nav">{L_INDEX}</a>
    </td>
  </tr>
</table>

<form method="post" action="{S_LOGIN_ACTION}">
  <table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
    <tr>
      <th class="thHead" colspan="2">{L_ENTER_PASSWORD}</th>
    </tr>

    <tr>
      <td class="row1" width="35%"><span class="gen">{L_USERNAME}:</span></td>
      <td class="row2"><input class="post" type="text" name="username" size="25" /></td>
    </tr>

    <tr>
      <td class="row1"><span class="gen">{L_PASSWORD}:</span></td>
      <td class="row2"><input class="post" type="password" name="password" size="25" maxlength="32" /></td>
    </tr>

    <!-- BEGIN switch_allow_autologin -->
    <tr>
      <td class="row1"><span class="gen">{L_AUTO_LOGIN}</span></td>
      <td class="row2"><input class="text" type="checkbox" name="autologin" /></td>
    </tr>
    <!-- END switch_allow_autologin -->

    <tr>
      <td class="row1">&nbsp;</td>
      <td class="row2">
        <input type="hidden" name="redirect" value="{S_LOGIN_REDIRECT}" />
        {S_HIDDEN_FIELDS}
        <input type="submit" name="login" class="mainoption" value="{L_LOGIN}" />
      </td>
    </tr>

    <tr>
      <td class="catBottom" colspan="2" align="center">
        <a href="{U_SEND_PASSWORD}" class="gensmall">{L_SEND_PASSWORD}</a>
      </td>
    </tr>
  </table>
</form>