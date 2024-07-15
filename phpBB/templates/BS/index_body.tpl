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
		  <span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span>
		</div>
		<div class="col text-end gensmall">
		  <!-- BEGIN switch_user_logged_in -->
		  <a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a><br /><a href="{U_SEARCH_SELF}">{L_SEARCH_SELF}</a><br />
		  <!-- END switch_user_logged_in -->
		  <a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a>
		</div>
	  </div>
	  


	<div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	  <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center">
	    <div class="fixed" style="width:50px"></div>
		<div class="col-5 text-start">{L_FORUM}</div>
		<div class="col-1 px-0 text-center">{L_TOPICS}</div>
		<div class="col-1 px-0 text-center">{L_POSTS}</div>
		<div class="col-4 px-0 text-start">{L_LASTPOST}</div>
	  </div>
	  <!-- BEGIN catrow -->
	  <div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1"> 
		<div class="col"><a href="{catrow.U_VIEWCAT}" class="cattitle">{catrow.CAT_DESC}</a></div>
	  </div>
	  
	  <!-- BEGIN forumrow -->
	  <div class="row mx-0 px-0 d-flex align-items-center flex-nowrap bg-body-secondary rounded-2 bdr-cat"> 
		<div class="fixed px-0 d-flex align-items-start" style="width:50px;"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /></div>
		<div class="col-5 text-start pt-1 hr3"><span class="forumlink"><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink">{catrow.forumrow.FORUM_NAME}</a><br /></span><span class="genmed">{catrow.forumrow.FORUM_DESC}<br /></span><span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span></div>
		<div class="col-1 hr3 text-center"><span class="gensmall text-center">{catrow.forumrow.TOPICS}</span></div>
		<div class="col-1 hr3 text-center"><span class="gensmall">{catrow.forumrow.POSTS}</span></div>
		<div class="col-4 text-start"> <span class="gensmall">{catrow.forumrow.LAST_POST}</span></div>
	  </div>
	  <!-- END forumrow -->
	  <!-- END catrow -->
	</div>
	
	  <div class="row mx-0"> 
		<div class="col text-start">
		<!-- BEGIN switch_user_logged_in -->
			<a href="{U_MARK_READ}" class="gensmall">{L_MARK_FORUMS_READ}</a>
		<!-- END switch_user_logged_in -->
		</div>
		<div class="col text-end"><span class="gensmall">{S_TIMEZONE}</span></div>
	  </div>

<br>

	<div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	  <div class="row nav mx-0 pl-2">
		<div class="col pb-1 text-center"><a class="cattitle" href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></div>
	  </div>
	  <div class="row rounded-2 mx-0 px-0 hr1 bdr-cat">
		<div class="col-1 px-0 text-center my-auto"><a href="{U_VIEWONLINE}"><button class="btn fa- d-inline-block"><span class="fa-solid fa-network-wired" alt="{L_WHO_IS_ONLINE}"  title="{L_WHO_IS_ONLINE}"></span></button></a></div>
		<div class="col hr5">
		  <div class="row pt-2">
			<div class="col text-start small"><small>{TOTAL_POSTS}<br />{TOTAL_USERS}<br />{NEWEST_USER}</small></div>
		  </div>
		  <div class="row">
			<div class="col text-start hr1 small"><small>{TOTAL_USERS_ONLINE} &nbsp;<span class="text-nowrap">[ {L_WHOSONLINE_ADMIN} ]</span>&nbsp;<span class="text-nowrap">[ {L_WHOSONLINE_MOD} ]</span><br />{RECORD_USERS}<br />{LOGGED_IN_USER_LIST}</small></div>
		  </div>
		 </div>
	  </div>
	</div>
	
	<div>
	  <div class="row mx-0">
		<div class="col small">{L_ONLINE_EXPLAIN}</div>
	  </div>
	</div>
<!-- BEGIN switch_user_logged_out -->
   <br>
    <div id="formContent text-center">
	  <form method="post" action="{S_LOGIN_ACTION}">
	  <div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	    <div class="row nav mx-0 pl-2"> 
		  <div class="col text-center"><a name="login"></a><span class="cattitle">{L_LOGIN_LOGOUT}</span></div>
		</div>
		<div class="row mx-0">
		  <div class="col-1 px-0 text-center my-auto"><button class="btn fa- d-inline-block"><span class="fa-solid fa-right-to-bracket" alt="{L_LOGIN}"  title="{L_LOGIN}"></span></button></div>
		  <div class="col hr5 py-2">
	        <span class="d-flex align-items-center fadeIn second form-field"><i class="far fa-user"></i><input class="text-center" type="text" name="username" id="username" placeholder="{L_USERNAME}"></span>
            <span class="d-flex align-items-center fadeIn third form-field"><i class="fas fa-key"></i><input class="text-center" type="password" name="password" id="password" placeholder="{L_PASSWORD}"></span>	  
		    <input type="submit" class="fadeIn fourth mainoption"  name="login" value="{L_LOGIN}">
		    <!-- BEGIN switch_allow_autologin -->
		    <div class="autologin">{L_AUTO_LOGIN} <input class="text" type="checkbox" name="autologin" /></div>
		    <!-- END switch_allow_autologin -->	
		  </div>
		</div>
	  </div>
	  </form>
    </div>
	<!-- END switch_user_logged_out -->

	<br clear="all" />
	<div class="p-2 text-center">
	  <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center"> 
	  	<div class="col-sm-2 text-start">&nbsp;</div>
		<div class="col text-nowrap px-2"><button class="btn" alt="{L_NEW_POSTS}"><i class="fa-regular fa-file-lines"></i></button>&nbsp;{L_NEW_POSTS}</div>
		<div class="col text-nowrap px-2"><button class="btn" alt="{L_NO_NEW_POSTS}"><i class="fa-regular fa-file"></i></button>&nbsp;{L_NO_NEW_POSTS}</div>
		<div class="col text-nowrap px-2"><button class="btn" alt="{L_FORUM_LOCKED}"><i class="fa-regular fa-file-zipper"></i></button>&nbsp;{L_FORUM_LOCKED}</div>	    
 	  	<div class="col-sm-2 text-end">&nbsp;</div>
	  </div>
	</div>
    </div>	

  </div>
</div>