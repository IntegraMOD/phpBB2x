<div class="container-fluid">
  <div class="row">
	<div class="col">
      <div class="row pb-2 px-0">
		<div class="col maintitle">{L_SEARCH_MATCHES}</div>
	  </div>
	  <div class="row pb-2 px-0">
		<div class="col mx-0 navbr"><a href="{U_INDEX}">{L_INDEX}</a></div>
	  </div>
	  <div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
  	    <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center">
		  <div class="col-2 text-start">{L_FORUM}</div>
		  <div class="col-4 text-start">{L_TOPICS}</div>
		  <div class="col-1 text-center">{L_AUTHOR}</div>
		  <div class="col-1 text-center">{L_REPLIES}</div>
		  <div class="col-1 text-center">{L_VIEWS}</div>
		  <div class="col-3 text-start">{L_LASTPOST}</div>
	    </div>
	    <!-- BEGIN searchresults -->
	    <div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1"> 
		  <div class="col-2 text-start py-2 pl-0 ml-0 d-flex align-items-center hr3"><img src="{searchresults.TOPIC_FOLDER_IMG}" alt="{searchresults.L_TOPIC_FOLDER_ALT}" title="{searchresults.L_TOPIC_FOLDER_ALT}" />&nbsp;<span class="forumlink text-end"><a href="{searchresults.U_VIEW_FORUM}" class="forumlink">{searchresults.FORUM_NAME}</a></span></div>
		 <div class="col-4 text-start py-2 d-flex align-items-center hr3 mx-0"><span class="topictitle">{searchresults.NEWEST_POST_IMG}{searchresults.TOPIC_TYPE}<a href="{searchresults.U_VIEW_TOPIC}" class="topictitle">{searchresults.TOPIC_TITLE}</a></span><br /><span class="gensmall">{searchresults.GOTO_PAGE}</span></div>
		  <div class="col-1 text-center pt-2 hr3 mx-0"><span class="navbr genbig">{searchresults.TOPIC_AUTHOR}</span></div>
		  <div class="col-1 text-center pt-2 hr3 mx-0"><span class="postdetails">{searchresults.REPLIES}</span></div>
		  <div class="col-1 text-center pt-2 hr3 mx-0"><span class="postdetails">{searchresults.VIEWS}</span></div>
		  <div class="col-3 text-start pt-2 mx-0"><span class="postdetails">{searchresults.LAST_POST_TIME}<br />{searchresults.LAST_POST_AUTHOR} {searchresults.LAST_POST_IMG}</span></div>
	    </div>
	    <!-- END searchresults -->
	    <div class="row mx-0"> 
		  <div class="col">&nbsp; </div>
	    </div>
	  </div>
	  <div class="row mx-0 py-1">
	    <div class="col text-start navbr">{PAGE_NUMBER}</div>
	    <div class="col text-end px-0"><span class="navbr">{PAGINATION}</span><br /><span class="gensmall">{S_TIMEZONE}</span></div>
	  </div>
	  <div class="row pb-2">
	    <div class="col mx-0 px-0 text-end">{JUMPBOX}</div>
	  </div>
    </div>
  </div>	
</div>