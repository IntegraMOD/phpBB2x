<form action="{S_MODCP_ACTION}" method="post">
  <div class="container-fluid">
    <div class="row my-auto"> 
      <div class="col nav pl-0"><a href="{U_INDEX}">{L_INDEX}</a></div>
    </div>
  </div>

  <div class="container-fluid forumline mx-0">
    <div class="row th">
      <div class="col pt-1 ctr"><b>{MESSAGE_TITLE}</b></div>
    </div>
    <div class="row">
      <div class="col row1">
        <div class="row py-2">
          <div class="col">
	      {L_MOVE_TO_FORUM} &nbsp; {S_FORUM_SELECT}
	      </div>
        </div>
        <div class="row py-2">
          <div class="col">
	      <input type="checkbox" name="move_leave_shadow" checked="checked" />{L_LEAVESHADOW}
	      </div>
        </div>
        <div class="row py-2">
          <div class="col">
		  {MESSAGE_TEXT}
		  {S_HIDDEN_FIELDS} 
	      </div>
        </div>
        <div class="row catBottom pt-1">
          <div class="col ctr">
	 	  <input class="mainoption" type="submit" name="confirm" value="{L_YES}" />
		  &nbsp; 
		  <input class="liteoption" type="submit" name="cancel" value="{L_NO}" />
	      </div>
        </div>
	  </div>
    </div>
  </div>

  <div class="container-fluid mx-0 pr-0">
    <div class="row">
      <div class="col gensmall text-right">{S_TIMEZONE}</div>
    </div>
  </div>
</form>