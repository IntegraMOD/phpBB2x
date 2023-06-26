<form method="post" action="{S_MODCP_ACTION}">
  <div class="container-fluid">
    <div class="row my-auto"> 
      <div class="col nav pl-0"><a href="{U_INDEX}">{L_INDEX}</a> -> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></div>
    </div>
  </div>

  <div class="container-fluid forumline mx-0">
    <div class="row catHead">
      <div class="col cattitle pt-1 ctr">{L_MOD_CP}</div>
    </div>
    <div class="row spaceRow">
      <div class="col gensmall py-2">{L_MOD_CP_EXPLAIN}</div>
    </div>

    <div class="row th pt-2 text-end">
      <div class="col-1 px-0 thLeft text-start">&nbsp;</div>
      <div class="col px-0 text-start">{L_TOPICS}</div>
      <div class="col-1 px-0 ctr">{L_REPLIES}</div>
      <div class="col-2 px-0 ctr">{L_LASTPOST}</div>
      <div class="col-1 thRight text-end pl-0">{L_SELECT}</div>
    </div>
	<!-- BEGIN topicrow -->
    <div class="row text-end row1 hr">
      <div class="col-1 px-0 pt-2 ctr"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="19" height="18" alt="" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></div>
      <div class="col px-r pt-2 text-start topictitle">{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></div>
      <div class="col-1 row2 px-0 pt-2 ctr postdetails">{topicrow.REPLIES}</div>
      <div class="col-2 px-0 pt-2 ctr postdetails">{topicrow.LAST_POST_TIME}</div>
      <div class="col-1  row2 pt-2 text-end"><input type="checkbox" name="topic_id_list[]" value="{topicrow.TOPIC_ID}" /></div>
    </div>
	<!-- END topicrow -->
    <div class="row catBottom my-auto" height="28px"> 
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
  </div>
  <div class="container-fluid mx-0 pr-0">
    <div class="row">
      <div class="col-7 nav">{PAGE_NUMBER}</div>
      <div class="col-5 gensmall text-end">{S_TIMEZONE}<br /><span class="nav">{PAGINATION}</span></div>
    </div>
  </div>
</form>
  <div class="container-fluid mx-0 pr-0">
    <div class="row">
      <div class="col gen pr-0 text-end">{JUMPBOX}</div>
    </div>
  </div>