<div class="container-fluid">
	<div class="row">
	  <div class="col">

  <div class="row px-0 mb-2"> 
	<div class="col text-start">
	    <span class="gensmall">
	        <!-- BEGIN switch_user_logged_in -->
	        {LAST_VISIT_DATE}<br />
	        <!-- END switch_user_logged_in -->
	        {CURRENT_TIME}<br />
	    </span>
	    <span class="navbr"><a href="{U_INDEX}" class="navbr">{L_INDEX}</a></span>
	</div>
	<div class="col text-end gensmall">
		<!-- BEGIN switch_user_logged_in -->
		<a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a><br /><a href="{U_SEARCH_SELF}">{L_SEARCH_SELF}</a><br />
		<!-- END switch_user_logged_in -->
		<a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a>
	</div>
  </div>

<div class="forumline mx-0 text-nowrap">
  <div class="row th mx-0 pl-2 d-flex flex-row align-items-center"> 
	<div class="col-6 px-0 text-center">{L_FORUM}</div>
	<div class="col-1 px-0 text-center topics">{L_TOPICS}</div>
	<div class="col-1 px-0 text-center posts">{L_POSTS}</div>
	<div class="col-4 px-0 text-center lastpost">{L_LASTPOST}</div>
  </div>
  <!-- BEGIN catrow -->
  <div class="row d-flex catHead align-items-center m-0"> 
	<div class="col"><a href="{catrow.U_VIEWCAT}" class="cattitle">{catrow.CAT_DESC}</a></div>
  </div>
  <!-- BEGIN forumrow -->
  <div class="row mx-0 my-auto hr1 row1"> 
	<div class="col-1 px-0 hr3 text-center my-auto"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /></div>
	<div class="col-5 hr3"><span class="forumlink"><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink">{catrow.forumrow.FORUM_NAME}</a><br /></span><span class="genmed">{catrow.forumrow.FORUM_DESC}<br /></span><span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span></div>
	<div class="col-1 row2 hr3 text-center mx-0 topp2 topics"><span class="gensmall">{catrow.forumrow.TOPICS}</span></div>
	<div class="col-1 row2 hr3 text-center mx-0 topp2 posts"><span class="gensmall">{catrow.forumrow.POSTS}</span></div>
	<div class="col row2 text-start topp lastpost"> <span class="gensmall">{catrow.forumrow.LAST_POST}</span></div>
  </div>
  <!-- END forumrow -->
  <!-- END catrow -->
</div>

  <div class="row mx-0"> 
 	<div class="col text-start">
 	<!-- BEGIN switch_user_logged_in -->
 		<span class="gensmall"><a href="{U_MARK_READ}" class="gensmall">{L_MARK_FORUMS_READ}</a></span>
 	<!-- END switch_user_logged_in -->
 	</div>
	<div class="col text-end"><span class="gensmall">{S_TIMEZONE}</span></div>
  </div>

<div class="forumline row1">
  <div class="row catHead mx-0"> 
	<div class="col d-flex align-items-center"><a class="cattitle" href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></div>
  </div>
  <div class="row mx-0 px-0 hr1">
    <div class="col-1 text-center px-0 my-auto"><a href="{U_VIEWONLINE}"><button class="btn fa- d-inline-block"><span class="fa-solid fa-network-wired" alt="{L_WHO_IS_ONLINE}"  title="{L_WHO_IS_ONLINE}"></span></button></a></div>
    <div class="col hr5">
      <div class="row">
	    <div class="col gensmall"><small>{TOTAL_POSTS}<br />{TOTAL_USERS}<br />{NEWEST_USER}</small></div>
      </div>
      <div class="row">
	    <div class="col hr1 gensmall"><small>{TOTAL_USERS_ONLINE} &nbsp;<span class="text-nowrap">[ {L_WHOSONLINE_ADMIN} ]</span>&nbsp;<span class="text-nowrap">[ {L_WHOSONLINE_MOD} ]</span><br />{RECORD_USERS}<br />{LOGGED_IN_USER_LIST}</small></div>
      </div>
     </div>
  </div>
</div>
<div>
  <div class="row mx-0">
	<div class="col"><span class="gensmall">{L_ONLINE_EXPLAIN}</span></div>
  </div>
</div>

<!-- BEGIN switch_user_logged_out -->
<form method="post" action="{S_LOGIN_ACTION}">
  <div class="forumline row1">
    <div class="row catHead mx-0"> 
	  <div class="col d-flex align-items-center"><a name="login"></a><span class="cattitle">{L_LOGIN_LOGOUT}</span></div>
	</div>
	<div class="row mx-0">
	  <div class="col-1 px-0 text-center my-auto"><button class="btn fa- d-inline-block"><span class="fa-solid fa-right-to-bracket" alt="{L_LOGIN}"  title="{L_LOGIN}"></span></button></div>
	  <div class="col hr5  py-2"><span class="gensmall">{L_USERNAME}: 
		<input class="post" type="text" name="username" size="10" />
		&nbsp;&nbsp;&nbsp;{L_PASSWORD}: 
		<input class="post" type="password" name="password" size="10" maxlength="32" />
		<!-- BEGIN switch_allow_autologin -->
		&nbsp;&nbsp; &nbsp;&nbsp;{L_AUTO_LOGIN} 
		<input class="text" type="checkbox" name="autologin" />
		<!-- END switch_allow_autologin -->
		&nbsp;&nbsp;&nbsp; 
		<input type="submit" class="mainoption" name="login" value="{L_LOGIN}" />
		</span> </div>
	</div>
  </div>
</form>
<!-- END switch_user_logged_out -->

<br clear="all" />
<div class="text-center">
  <div class="row mx-0">
	<div class="col gensmall text-nowrap px-2"><button class="btn" alt="{L_NEW_POSTS}"><i class="fa-regular fa-file-lines" style="color: #ff8000;"></i></button>&nbsp;{L_NEW_POSTS}</div>
	<div class="col gensmall text-nowrap px-2"><button class="btn" alt="{L_NO_NEW_POSTS}"><i class="fa-regular fa-file"></i></button>&nbsp;{L_NO_NEW_POSTS}</div>
	<div class="col gensmall text-nowrap px-2"><button class="btn" alt="{L_FORUM_LOCKED}"><i class="fa-regular fa-file-zipper"></i></button>&nbsp;{L_FORUM_LOCKED}</div>	    
  </div>
</div>
    </div>
  </div>
</div>