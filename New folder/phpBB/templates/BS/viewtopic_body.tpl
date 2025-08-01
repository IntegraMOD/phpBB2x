  <div class="container-fluid mx-0 px-0">
    <div class="row px-0"> 
	  <div class="col">
        <div>
          <div class="row mx-0"> 
        	<div class="col text-start"><a class="maintitle" href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><br /><span class="gensmall"><b>{PAGINATION}</b><br />&nbsp; </span></div>
          </div>
        </div>
        <div class="row mb-1 py-1 mx-0"> 
		  <div class="col d-flex align-items-center">
		    <a href="{U_POST_NEW_TOPIC}"><button class="pbtn bg-secondary-subtle btn-sm bdr-cat btnwrapper" type="button" alt="{L_POST_NEW_TOPIC}"><i class="fa-solid fa-file-pen"></i>&nbsp;{L_BUTTON_TOPIC_NEW}</button></a>&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><button class="pbtn bg-secondary-subtle btn-sm bdr-cat btnwrapper" type="button" alt="{L_POST_NEW_TOPIC}"><i class="fa-solid fa-file-signature"></i>&nbsp;{L_BUTTON_TOPIC_REPLY}</button></a>
            <span class="navbr">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="navbr">{L_INDEX}</a> -> <a href="{U_VIEW_FORUM}" class="navbr">{FORUM_NAME}</a></span>
          </div>
        </div>
	    <div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	      <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center">
        	<div class="col py-2 d-flex align-items-center text-end navbr bg-body-secondary rounded-2 bdr-cat"><a href="{U_VIEW_OLDER_TOPIC}">{L_VIEW_PREVIOUS_TOPIC}</a> :: <a href="{U_VIEW_NEWER_TOPIC}">{L_VIEW_NEXT_TOPIC}</a> &nbsp;</div>
          </div>
          {POLL_DISPLAY} 
	      <div class="row mx-0">
        	<div class="col bg-body-secondary rounded-2 bdr-cat">
			  <div class="row mx-0 py-2 nav">
				<div class="col-2 pt-1">{L_AUTHOR}</div>
				<div class="col pt-1 text-center">{L_MESSAGE}</div>
			  </div>
			  <!-- BEGIN postrow -->
			  <div class="row mx-0"> 
			    <div class="col-2 pb-1"><span class="pname"><a name="{postrow.U_POST_ID}"></a><b>{postrow.POSTER_NAME}</b></span><br /><span class="postdetails">{postrow.POSTER_RANK}<br />{postrow.RANK_IMAGE}{postrow.POSTER_AVATAR}<br /><br />{postrow.POSTER_JOINED}<br />{postrow.POSTER_POSTS}<br />{postrow.POSTER_FROM}</span><br /></div>
				<div class="col hr4 rounded-2 pb-1">
				  <div class="row d-flex align-items-center">
				    <div class="col-9 text-start"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" /></a><span class="postdetails">{L_POSTED}: {postrow.POST_DATE}<span class="gen">&nbsp;</span>&nbsp; &nbsp;{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></div>
					<div class="col pt-2 text-end">{postrow.QUOTE_IMG} {postrow.EDIT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG}</div>
				  </div>
				  <div class="row"> 
					<div class="col"><hr /></div>
				  </div>
				  <div class="row">
				    <div class="col text-start"><span class="postbody">{postrow.MESSAGE}{postrow.SIGNATURE}</span><span class="gensmall">{postrow.EDITED_MESSAGE}</span></div>
				  </div>
				</div>
			  </div>
			  <div class="row py-0 mx-0"> 
			    <div class="col-2 pt-2 pb-1"><a href="#top" title="{L_BACK_TO_TOP}"><i class="fa-solid fa-circle-up fa-2x"></i></a></div>
			    <div class="col pt-2 pb-1 gen text-start">{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.FB_IMG} {postrow.IG_IMG} {postrow.PT_IMG} {postrow.TWR_IMG} {postrow.SKP_IMG} {postrow.TG_IMG} {postrow.LI_IMG} {postrow.TT_IMG} {postrow.DC_IMG}</div>
			  </div>
			  <!-- END postrow -->
			</div>			  
			<div class="row d-flex align-items-center text-center bdrw mx-0"> 
			  <div class="col py-1">
			    <form method="post" action="{S_POST_DAYS_ACTION}"><div class="col mx-0"><span class="gensmall">{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;<input type="submit" value="{L_GO}" class="mainoption" name="submit" /></span></div></form>
			  </div>
			</div> 
          </div>
		</div>
        <div class="row mb-1 py-2 mx-0"> 
	      <div class="col d-flex align-items-center">
	      <a href="{U_POST_NEW_TOPIC}"><button class="pbtn bg-secondary-subtle btn-sm bdr-cat btnwrapper" type="button" alt="{L_POST_NEW_TOPIC}"><i class="fa-solid fa-file-pen"></i>&nbsp;{L_BUTTON_TOPIC_NEW}</button></a>&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><button class="pbtn bg-secondary-subtle btn-sm bdr-cat btnwrapper" type="button" alt="{L_POST_NEW_TOPIC}"><i class="fa-solid fa-file-signature"></i>&nbsp;{L_BUTTON_TOPIC_REPLY}</button></a>
          <span class="navbr">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="navbr">{L_INDEX}</a> -> <a href="{U_VIEW_FORUM}" class="navbr">{FORUM_NAME}</a></span>
          </div>
        </div>
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