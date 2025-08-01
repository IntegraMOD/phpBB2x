  <div class="container-fluid">
	<div class="row">
	  <div class="col">
        <div class="row pb-2 px-0">
	      <div class="col maintitle">{L_SEARCH_MATCHES}</div>
        </div>
		<div class="row pb-2 px-0 mx-0">
		  <div class="col nav"><a href="{U_INDEX}">{L_INDEX}</a></div>
		</div>

	    <div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
		  <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center"> 
		    <div class="col-2 pt-2">{L_AUTHOR}</div>
		    <div class="col pt-2">{L_MESSAGE}</div>
	      </div>
	      <!-- BEGIN searchresults -->
	      <div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1"> 
		    <div class="col text-start pt-1"><span class="topictitle"><img src="templates/subSilver/images/folder.gif" align="absmiddle" />&nbsp; {L_TOPIC}:&nbsp;<a href="{searchresults.U_TOPIC}" class="topictitle">{searchresults.TOPIC_TITLE}</a></span></div>
	      </div>
	      <div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1"> 
		    <div class="col-2 text-start pb-1 pl-2 hr3"><span class="navbr genbig"><b>{searchresults.POSTER_NAME}</b></span><br /><br />
		      <span class="postdetails">
		      {L_REPLIES}: <b>{searchresults.TOPIC_REPLIES}</b><br />
		      {L_VIEWS}: <b>{searchresults.TOPIC_VIEWS}</b>
		      </span><br />
		    </div>
		    <div class="col text-start">	
		      <div class="row hr1 py-1 pl-1"><div class="col text-start"><img src="{searchresults.MINI_POST_IMG}" height="9" alt="{searchresults.L_MINI_POST_ALT}" title="{searchresults.L_MINI_POST_ALT}" /><span class="postdetails">{L_FORUM}:&nbsp;<b><a href="{searchresults.U_FORUM}" class="postdetails">{searchresults.FORUM_NAME}</a></b>&nbsp; &nbsp;{L_POSTED}: {searchresults.POST_DATE}&nbsp; &nbsp;{L_SUBJECT}: <b><a href="{searchresults.U_POST}">{searchresults.POST_SUBJECT}</a></b></span></div></div>
		      <div class="row hr1 py-1 pl-1"><span class="postbody">{searchresults.MESSAGE}</span></div>
		    </div>
	      </div>
	      <!-- END searchresults -->
	      <div class="row row1 mx-0"> 
		    <div class="col">&nbsp; </div>
	      </div>
        </div>
        <div class="row mx-0 py-1">
	      <div class="col text-start nav">{PAGE_NUMBER}</div>
	      <div class="col text-end px-0"><span class="nav">{PAGINATION}</span><br /><span class="gensmall">{S_TIMEZONE}</span></div>
        </div>
        <div class="row pb-2">
	      <div class="col mx-0 px-0 text-end">{JUMPBOX}</div>
        </div>
      </div>
    </div>	
  </div>