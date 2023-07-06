<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="{S_CONTENT_DIRECTION}" lang="en" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset={S_CONTENT_ENCODING}" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-style-type" content="text/css" />
<meta name="copyright" content="2001, 2005 phpBB Group" />
{META}
<title>{SITENAME} &bull; {PAGE_TITLE}</title>
<!-- fontawesome 6.4.0 CSS-->  
<link rel="stylesheet" href="templates/assets/css/all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="templates/prosilver/{T_HEAD_STYLESHEET}" type="text/css" media="screen, projection" />
<link rel="icon" type="image/x-icon" href="images/favicon.ico">
<script src="templates/prosilver/forum_fn.js"></script>

<!-- BEGIN switch_enable_pm_popup -->
<script>
if ({ PRIVATE_MESSAGE_NEW_FLAG }) {
  window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'height=225, resizable=yes, width=400')
}
</script>
<!-- END switch_enable_pm_popup -->
</head>
<body id="phpbb" class="section-index {S_CONTENT_DIRECTION}">
<div id="wrap">
	<a id="top" name="top" accesskey="t"></a>
	<div id="page-header">
		<div class="headerbar">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div id="site-description">
				<a href="{U_INDEX}" title="{L_INDEX}" id="logo"><img src="templates/prosilver/images/site_logo.gif" width="139" height="52" alt="" title="{SITENAME}" /></a>
				<h1>{SITENAME}</h1>
				<p>{SITE_DESCRIPTION}</p>
			</div>
			<div id="search-box">
				<form action="{U_SEARCH}" method="get" id="search">
				<fieldset>
					<input name="search_keywords" id="keywords" type="text" maxlength="128" title="" class="inputbox search" value="{L_SEARCH}" onclick="if(this.value=='{L_SEARCH}')this.value='';" onblur="if(this.value=='')this.value='{L_SEARCH}';" /> 
					<input class="button2" value="{L_SEARCH}" type="submit" />
					{S_HIDDEN_FIELDS}
				</fieldset>
				</form>
			</div>
			<span class="corners-bottom"><span></span></span></div>
		</div>

		<div class="navbar">
			<div class="inner"><span class="corners-top"><span></span></span>
			<ul class="linklist navlinks">
				<li class="icon-home"><a href="{U_INDEX}">{L_INDEX}</a><span class="breadcrumbs">&nbsp;&bull;&nbsp;{PAGE_TITLE}</span></li>
			</ul>
			<!-- BEGIN switch_user_logged_in -->
			<ul class="linklist leftside">
				<li class="icon-ucp">
					<a href="{U_PROFILE}" title="{L_PROFILE}">{L_PROFILE}</a>
					 (<a href="{U_PRIVATEMSGS}">{PRIVATE_MESSAGE_INFO}</a>) &bull; 
					<a href="{U_SEARCH_SELF}">{L_SEARCH_SELF}</a>
				</li>
			</ul>
			<!-- END switch_user_logged_in -->
			<ul class="linklist rightside">
				<li class="icon-faq"><a href="{U_FAQ}">{L_FAQ}</a></li>
				<li class="icon-search"><a href="{U_SEARCH}">{L_SEARCH}</a</li>
				<!-- BEGIN switch_user_logged_in -->
				<li class="icon-members"><a href="{U_MEMBERLIST}">{L_MEMBERLIST}</a></li>
				<!-- END switch_user_logged_in -->
				<!-- BEGIN switch_user_logged_out -->
				<li class="icon-register"><a href="{U_REGISTER}">{L_REGISTER}</a></li>
				<!-- END switch_user_logged_out -->
				<li class="icon-logout"><a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a></li>
			</ul>
			<span class="corners-bottom"><span></span></span></div>
		    </div>
		</div>
	<div id="page-body">