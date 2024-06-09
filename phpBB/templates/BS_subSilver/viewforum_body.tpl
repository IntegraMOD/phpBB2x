<div class="container-fluid">
  <div class="row">
    <div class="col px-0">
        
   <form method="post" action="{S_POST_DAYS_ACTION}">
      <div class="row mx-0"> 
        <div class="col text-start"><a class="maintitle" href="{U_VIEW_FORUM}">{FORUM_NAME}</a><br /><span class="gensmall"><b>{L_MODERATOR}: {MODERATORS}<br /><br />{LOGGED_IN_USER_LIST}</b></span><span class="gensmall float-right"><b>{PAGINATION}</b></span></div>
      </div>

      <div class="row mb-1 py-1 mx-0"> 
        <div class="col-4 mt-2"><a href="{U_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}" class="pbtn gen"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" />&nbsp;{L_BUTTON_TOPIC_NEW}</a></div>
        <div class="col text-end navbr"><a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></div>
      </div>    	
      <div class="forumline px-0 m-2">
        <div class="bdrw">
          <div class="row d-flex th align-items-center hr1 mx-0"> 
    	    <div class="col-6 px-0 text-center">&nbsp;{L_TOPICS}&nbsp;</div>
    	    <div class="col-1 px-0 text-center replies">&nbsp;{L_REPLIES}&nbsp;</div>
    	    <div class="col-2 px-0 text-center author">&nbsp;{L_AUTHOR}&nbsp;</div>
    	    <div class="col-1 px-0 text-center views">&nbsp;{L_VIEWS}&nbsp;</div>
    	    <div class="col px-0 text-center lastpost">&nbsp;{L_LASTPOST}&nbsp;</div>
    	  </div>
    	  <!-- BEGIN topicrow -->
    	  <div class="row mx-0 hr1"> 
    	    <div class="col-1 d-flex align-items-center row1 hr3"><img src="{topicrow.TOPIC_FOLDER_IMG}" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></div>
    	    <div class="col-5 pl-2 pt-3 pb-1 text-start row1 hr3"><span class="topictitle">{topicrow.NEWEST_POST_IMG}{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span><span class="gensmall"><br />{topicrow.GOTO_PAGE}</span></div>
    	    <div class="col-1 px-0 pt-3 pb-1 text-center row2 hr3 replies"><span class="postdetails">{topicrow.REPLIES}</span></div>
    	    <div class="col-2 px-0 pt-3 pb-1 text-center row3 hr3 author"><span class="name">{topicrow.TOPIC_AUTHOR}</span></div>
    	    <div class="col-1 px-0 pt-3 pb-1 text-center row2 hr3 views"><span class="postdetails">{topicrow.VIEWS}</span></div>
    	    <div class="col px-0 pt-3 pb-1 text-center row3 lastpost"><span class="postdetails">{topicrow.LAST_POST_TIME}<br />{topicrow.LAST_POST_AUTHOR} {topicrow.LAST_POST_IMG}</span></div>
    	  </div>
    	  <!-- END topicrow -->
    	  <!-- BEGIN switch_no_topics -->
    	  <div class="row mx-0"> 
    	    <div class="col"><span class="gen">{L_NO_TOPICS}</span></div>
    	  </div>
      	  <!-- END switch_no_topics -->
    	  <div class="row d-flex catBottom align-items-center text-center bdrw mx-0"> 
    	    <div class="col"><span class="genmed">{L_DISPLAY_TOPICS}:&nbsp;{S_SELECT_TOPIC_DAYS}&nbsp;<input type="submit" class="liteoption" value="{L_GO}" name="submit" /></span></div>
    	  </div>
        </div>
      </div>
      <div class="row mb-1 py-1 mx-0"> 
        <div class="col-4 mt-1"><a href="{U_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}" class="pbtn gen"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" />&nbsp;{L_BUTTON_TOPIC_NEW}</a></div>
        <div class="col navbr text-end gensmall">{S_TIMEZONE}<br />{PAGINATION}</div>
      </div>   
      </form>
	  <br />
<div class="container-fluid">
  <div class="row px-6">
    <div class="col-sm-4 col-lg-3">
    	<div class="row"> 
    	    <div class="mb-1"><img src="{FOLDER_ANNOUNCE_IMG}" alt="{L_ANNOUNCEMENT}" />&nbsp;{L_ANNOUNCEMENT}</div>
	        <div class="mb-1"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" />&nbsp;{L_NEW_POSTS}</div>
    	    <div class="mb-1"><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}" />&nbsp;{L_NEW_POSTS_HOT}</div>
    	    <div class="mb-1"><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_LOCKED}" />&nbsp;{L_NO_NEW_POSTS_LOCKED}</div>
	    </div>
    </div>
    <div class="col-sm-4 col-lg-3">
    	<div class="row"> 
    	    <div class="mb-1"><img src="{FOLDER_STICKY_IMG}" alt="{L_STICKY}" />&nbsp;{L_STICKY}</div>
    	    <div class="mb-1"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" />&nbsp;{L_NO_NEW_POSTS}</div>
    	    <div class="mb-1"><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}" />&nbsp;{L_NO_NEW_POSTS_HOT}</div>
    	    <div class="mb-1"><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_LOCKED}" />&nbsp;{L_NO_NEW_POSTS_LOCKED}</div>
	    </div>
	</div>
    <div class="col-sm-4 col-lg-6 text-end">
        <div class="row"> 
    	  <div class="pb-2">{JUMPBOX}</div>
          <div class="small">{S_AUTH_LIST}</div>
	</div>
  </div>
</div>
	  
    </div>
  </div>
</div>  