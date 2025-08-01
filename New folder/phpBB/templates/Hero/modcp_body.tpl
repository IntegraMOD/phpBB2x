<div class="container-fluid">
  <div class="row">
    <div class="col">

	  <form method="post" action="{S_MODCP_ACTION}">
	  <div class="container-fluid mx-2 mb-2">
		<div class="row my-auto"> 
		  <div class="col nav pl-0"><a href="{U_INDEX}">{L_INDEX}</a> -> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></div>
		</div>
	  </div>

	  <div class="container-fluid forumline px-0">
		<div class="row catHead mx-0">
		  <div class="col cattitle pt-1 text-center">{L_MOD_CP}</div>
		</div>
		<div class="row spaceRow mx-0">
		  <div class="col gensmall py-2">{L_MOD_CP_EXPLAIN}</div>
		</div>

		<div class="row mx-0 th d-flex flex-row align-items-center"> 
		  <div class="col-1 px-0">&nbsp;</div>
		  <div class="col ps-3 pe-0 text-start">{L_TOPICS}</div>
		  <div class="col-2 px-0 text-center replies">{L_REPLIES}</div>
		  <div class="col-2 px-0 text-center lastpost">{L_LASTPOST}</div>
		  <div class="col-1 px-0 text-center">{L_SELECT}</div>
		</div>

		<!-- BEGIN topicrow -->
		<div class="row mx-0 hr1 row1"> 
		  <div class="col-1 px-0 hr3 text-center my-auto"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="19" height="18" alt=""></div>
		  <div class="col hr3 text-start my-2 topictitle">{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></div>
		  <div class="col-2 row2 hr3 text-center mx-0 py-2 postdetails replies"><span class="gensmall">{topicrow.REPLIES}</span></div>
		  <div class="col-2 row2 hr3 text-center mx-0 py-2 postdetails lastpost"><span class="gensmall">{topicrow.LAST_POST_TIME}</span></div>
		  <div class="col-1 row2 text-center py-2"><input type="checkbox" name="topic_id_list[]" value="{topicrow.TOPIC_ID}"></div>
		</div>
		<!-- END topicrow -->

		<div class="row catBottom my-auto mx-0" height="28px"> 
		  <div class="col text-end pt-1">
			{S_HIDDEN_FIELDS} 
			<input type="submit" name="delete" class="liteoption" value="{L_DELETE}" />
			&nbsp; 
			<input type="submit" name="move" class="liteoption" value="{L_MOVE}" />
			&nbsp; 
			<input type="submit" name="lock" class="liteoption" value="{L_LOCK}" />
			&nbsp; 
			<input type="submit" name="unlock" class="liteoption" value="{L_UNLOCK}" />
		  </div>
		</div>

		<div class="row mx-0 py-2">
		  <div class="col nav ms-2">{PAGE_NUMBER}</div>
		  <div class="col gensmall text-end">{S_TIMEZONE}<br /><span class="nav">{PAGINATION}</span></div>
		</div>

	  </div>
	  </form>
	  <div class="container-fluid mx-0 mt-2">
		<div class="row">
		  <div class="col gen text-end">{JUMPBOX}</div>
		</div>
	  </div>
  
    </div>
  </div>
</div>  