<div class="container-fluid">
  <div class="row pb-2">
    <div class="col"><span class="nowrap"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></div>
  </div>
  <form method="post" action="{S_LOGIN_ACTION}">

  <div class="forumline row1">
    <div class="row catHead mx-0"> 
	  <div class="col th text-center pt-2">{L_ENTER_PASSWORD}</div>
    </div>
    <div class="row row1 mx-0">
      <div class="col text-center">
        <div class="py-1">{L_USERNAME}:<input class="post" type="text" name="username" size="10" /></div>
		<div class="py-1 pl-1">{L_PASSWORD}:<input class="post" type="password" name="password" size="10" maxlength="32" /></div>
		<!-- BEGIN switch_allow_autologin -->
		<div class="mb-2">{L_AUTO_LOGIN}<input class="text" type="checkbox" name="autologin" /></div>
		<!-- END switch_allow_autologin -->
		<div class="">{S_HIDDEN_FIELDS}<input type="submit" class="mainoption" name="login" value="{L_LOGIN}" /></div>
	  </div>
    </div>
    <div class="row row1 mx-0 py-2">
      <div class="col text-center pt-2"><a href="{U_SEND_PASSWORD}" class="gensmall">{L_SEND_PASSWORD}</a></div>
    </div>
    <div class="row catBottom mx-0">
      <div class="col text-center pt-2"><a href="{U_REGISTER}"><span><i class="fa-solid fa-door-open fa-fade"></i>&nbsp;{L_REGISTER}</span></a></div>
    </div>
  </div>
  </form>
</div>
<br clear="all" />