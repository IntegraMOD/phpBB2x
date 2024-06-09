  <div class="container-fluid mx-0 px-0">
    <div class="row px-0"> 
	  <div class="col">
        <div>
          <div class="row mx-0"> 
        	<div class="col text-start"><a class="maintitle" href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><br /><span class="gensmall"><b>{PAGINATION}</b><br />&nbsp; </span></div>
          </div>
        </div>
		<span class="row my-2 mx-0 align-items-center"> 
          <span class="col-sm-7 col-md-7 my-2"><a href="{U_POST_NEW_TOPIC}" class="pbtn gen"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" />&nbsp;{L_BUTTON_TOPIC_NEW}</a></span>
          <span class="col-sm-4 offset-sm-1 col-md-5 offset-md-0 my-2"><span class="navbr">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}">{L_INDEX}</a> -> <a href="{U_VIEW_FORUM}" class="navbr">{FORUM_NAME}</a></span></span>
		</span>
        <div class="forumline p-0 mx-1">
          <div class="row m-0">
        	<div class="col catHead d-flex align-items-center text-end navbr"><a href="{U_VIEW_OLDER_TOPIC}">{L_VIEW_PREVIOUS_TOPIC}</a> :: <a href="{U_VIEW_NEWER_TOPIC}">{L_VIEW_NEXT_TOPIC}</a> &nbsp;</div>
          </div>
          {POLL_DISPLAY} 
          <div class="row th hr1 mx-0 pt-1">
        	<div style="height: 28px;" class="col-2 pt-1 hr3">{L_AUTHOR}</div>
        	<div style="height: 28px;" class="col pt-1 text-center">{L_MESSAGE}</div>
          </div>
        	<!-- BEGIN postrow -->
        	<div class="row mx-0 row1"> 
        	  <div class="col-2 hr4 pb-1"><span class="name"><a name="{postrow.U_POST_ID}"></a><b>{postrow.POSTER_NAME}</b></span><br /><span class="postdetails">{postrow.POSTER_RANK}<br />{postrow.RANK_IMAGE}{postrow.POSTER_AVATAR}<br /><br />{postrow.POSTER_JOINED}<br />{postrow.POSTER_POSTS}<br />{postrow.POSTER_FROM}</span><br /></div>
        	  <div class="col hr4 pb-1">
        	    <div class="row d-flex align-items-center">
        	  	  <div class="col-9"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" /></a><span class="postdetails">{L_POSTED}: {postrow.POST_DATE}<span class="gen">&nbsp;</span>&nbsp; &nbsp;{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></div>
        		  <div class="col pt-2 text-end">{postrow.QUOTE_IMG} {postrow.EDIT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG}</div>
        		</div>
        		<div class="row"> 
        		  <div class="col"><hr /></div>
        		</div>
        		<div class="row">
        		  <div class="col"><span class="postbody">{postrow.MESSAGE}{postrow.SIGNATURE}</span><span class="gensmall">{postrow.EDITED_MESSAGE}</span></div>
        		</div>
        	  </div>
        	</div>
        	<div class="row py-0 mx-0 row1"> 
        	  <div class="col-2 pt-2 pb-1 hr3"><a href="#top" title="{L_BACK_TO_TOP}"><i class="fa-solid fa-circle-up fa-2x"></i></a></div>
        	  <div class="col pt-2 pb-1 gen">{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.FB_IMG} {postrow.IG_IMG} {postrow.PT_IMG} {postrow.TWR_IMG} {postrow.SKP_IMG} {postrow.TG_IMG} {postrow.LI_IMG} {postrow.TT_IMG} {postrow.DC_IMG} {postrow.ICQ_IMG}</div>
        	</div>
         	<!-- END postrow -->
		  <div class="row d-flex catBottom align-items-center text-center bdrw mx-0"> 
		    <div class="col">
			  <form method="post" action="{S_POST_DAYS_ACTION}"><div class="col mx-0"><span class="gensmall">{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;<input type="submit" value="{L_GO}" class="liteoption" name="submit" /></span></div></form>
			</div>
		  </div>        	
		</div>
		<span class="row my-2 mx-0 align-items-center"> 
          <span class="col-sm-7 col-md-7 my-2"><a href="{U_POST_NEW_TOPIC}" class="pbtn gen"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" />&nbsp;{L_BUTTON_TOPIC_NEW}</a>&nbsp;&nbsp;&nbsp<a href="{U_POST_REPLY_TOPIC}" class="pbtn gen"><img src="{REPLY_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" />&nbsp;{L_BUTTON_TOPIC_REPLY}</a></span>
          <span class="col-sm-4 offset-sm-1 col-md-5 offset-md-0 my-2"><span class="navbr">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}">{L_INDEX}</a> -> <a href="{U_VIEW_FORUM}" class="navbr">{FORUM_NAME}</a></span></span>
		</span>
		<div class="row mx-0">
		  <div class="col"><span class="navbr">{PAGE_NUMBER}</span><span class="gensmall text-end">{S_TIMEZONE}</span><br /><span class="navbr">{PAGINATION}</span></div>
		</div>
        <div class="row pt-1 mx-0"> 
          <div class="col-3"><span class="gensmall">{S_WATCH_TOPIC}</span><br /><br />{S_TOPIC_ADMIN}</div>
          <div class="col text-end">{JUMPBOX}<span class="gensmall">{S_AUTH_LIST}</span></div>
        </div>
      </div>
    </div>        
  </div>        