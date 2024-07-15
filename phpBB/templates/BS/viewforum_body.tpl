<div class="container-fluid">
  <div class="row">
    <div class="col px-0">
    <form method="post" action="{S_POST_DAYS_ACTION}">
      <div class="row mx-0"> 
        <div class="col text-start"><a class="maintitle" href="{U_VIEW_FORUM}">{FORUM_NAME}</a><br /><span class="gensmall"><b>{L_MODERATOR}: {MODERATORS}<br /><br />{LOGGED_IN_USER_LIST}</b></span><span class="gensmall float-right"><b>{PAGINATION}</b></span></div>
      </div>
      <div class="row mb-1 py-1 mx-0"> 
        <div class="col-3"><a href="{U_POST_NEW_TOPIC}"><button class="pbtn bg-secondary-subtle btn-sm bdr-cat btnwrapper" type="button" alt="{L_POST_NEW_TOPIC}"><i class="fa-solid fa-file-pen"></i>&nbsp;{L_BUTTON_TOPIC_NEW}</button></a></div>
        <div class="col navbr">
		  <div class="genbig text-start"><a href="{U_INDEX}">{L_INDEX}</a> -> <a href="{U_VIEW_FORUM}">{FORUM_NAME}</a></div>
		  <div class="gensmall text-end"><a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></div>
		</div>
      </div>    	
	  <div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	    <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center">
		  <div class="fixed" style="width:50px"></div>
     	  <div class="col-5 text-start">&nbsp;{L_TOPICS}&nbsp;</div>
    	  <div class="col-1 px-0 text-center">&nbsp;{L_REPLIES}&nbsp;</div>
    	  <div class="col-2 px-0 text-center">&nbsp;{L_AUTHOR}&nbsp;</div>
    	  <div class="col-1 px-0 text-center">&nbsp;{L_VIEWS}&nbsp;</div>
    	  <div class="col-2 px-0 text-center">&nbsp;{L_LASTPOST}&nbsp;</div>
    	</div>
    	<!-- BEGIN topicrow -->
	    <div class="row mx-0 px-0 d-flex align-items-center flex-nowrap bg-body-secondary rounded-2 bdr-cat"> 
    	  <div class="fixed px-0 d-flex align-items-start" style="width:50px;"><img src="{topicrow.TOPIC_FOLDER_IMG}" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></div>
    	  <div class="col-5 pl-2 pt-3 pb-1 text-start hr3"><span class="topictitle">{topicrow.NEWEST_POST_IMG}{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span><span class="gensmall"><br />{topicrow.GOTO_PAGE}</span></div>
    	  <div class="col-1 px-0 pt-3 pb-1 text-center hr3"><span class="postdetails">{topicrow.REPLIES}</span></div>
    	  <div class="col-2 px-0 pt-3 pb-1 text-center hr3"><span class="author">{topicrow.TOPIC_AUTHOR}</span></div>
    	  <div class="col-1 px-0 pt-3 pb-1 text-center hr3"><span class="postdetails">{topicrow.VIEWS}</span></div>
    	  <div class="col-2 px-0 pt-3 pb-1 text-center"><span class="postdetails">{topicrow.LAST_POST_TIME}<br />{topicrow.LAST_POST_AUTHOR} {topicrow.LAST_POST_IMG}</span></div>
    	</div>
    	<!-- END topicrow -->
    	<!-- BEGIN switch_no_topics -->
    	<div class="row mx-0"> 
    	  <div class="col"><span class="gen">{L_NO_TOPICS}</span></div>
    	</div>
      	<!-- END switch_no_topics -->
    	<div class="row d-flex align-items-center text-center bdrw mx-0"> 
          <div class="col"><span class="genmed">{L_DISPLAY_TOPICS}:&nbsp;{S_SELECT_TOPIC_DAYS}&nbsp;<input type="submit" class="mainoption" value="{L_GO}" name="submit" /></span></div>
    	</div>
      </div>
      <div class="row mb-1 py-1 my-2 mx-0"> 
        <div class="col-3"><a href="{U_POST_NEW_TOPIC}"><button class="pbtn bg-secondary-subtle btn-sm bdr-cat btnwrapper" type="button" alt="{L_POST_NEW_TOPIC}"><i class="fa-solid fa-file-pen"></i>&nbsp;{L_BUTTON_TOPIC_NEW}</button></a></div>
        <div class="col navbr">
		  <div class="col navbr text-end"><span class="gensmall">{S_TIMEZONE}</span><br /><span class="nav">{PAGINATION}</span></div>
		  <div class="genbig text-start"><a href="{U_INDEX}">{L_INDEX}</a> -> <a href="{U_VIEW_FORUM}">{FORUM_NAME}</a></div>
		</div>
      </div> 
    </form>
      <div>
        <div class="row mx-0"> 
          <div class="col text-end px-0 py-1">{JUMPBOX}</div>
        </div>
      </div>
      <div class="container-fluid mx-0 px-0">
        <div class="row mx-0">
          <div class="col-7 mx-0 gensmall">
            <div class="row py-1 nw"> 
      	      <div class="col"><img src="{FOLDER_ANNOUNCE_IMG}" alt="{L_ANNOUNCEMENT}" />&nbsp;{L_ANNOUNCEMENT}</div>
    	      <div class="col"><img src="{FOLDER_STICKY_IMG}" alt="{L_STICKY}" />&nbsp;{L_STICKY}</div>
    	    </div>
    	    <div class="row py-1 nw"> 
    	      <div class="col"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" />&nbsp;{L_NEW_POSTS}</div>
    	      <div class="col"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" />&nbsp;{L_NO_NEW_POSTS}</div>
    	    </div>
    	    <div class="row py-1 nw"> 
    	      <div class="col"><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}" />&nbsp;{L_NEW_POSTS_HOT}</div>
    	      <div class="col"><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}" />&nbsp;{L_NO_NEW_POSTS_HOT}</div>
    	    </div>
    	    <div class="row py-1 nw"> 
    	      <div class="col"><img src="{FOLDER_LOCKED_NEW_IMG}" alt="{L_NEW_POSTS_LOCKED}" />&nbsp;{L_NEW_POSTS_LOCKED}</div>
    	      <div class="col"><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_LOCKED}" />&nbsp;{L_NO_NEW_POSTS_LOCKED}</div>
    	    </div>
      	  </div>
          <div class="col-5 gensmall text-end mx-0">{S_AUTH_LIST}</div>
        </div>
      </div>
    </div>
  </div>
</div>  