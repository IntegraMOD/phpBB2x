<script>
	//
	// Should really check the browser to stop this whining ...
	//
	function select_switch(status)
	{
		for (i = 0; i < document.privmsg_list.length; i++)
		{
			document.privmsg_list.elements[i].checked = status;
		}
	}
</script>
<div class="container-fluid">
	<div class="row">
	  <div class="col">

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="row navbr">
	      <div class="col nw">{INBOX_IMG}&nbsp;{INBOX}</div>
	      <div class="col nw">{SENTBOX_IMG}&nbsp;{SENTBOX}</div>
	      <div class="col nw">{OUTBOX_IMG}&nbsp;{OUTBOX}</div>
	      <div class="col nw">{SAVEBOX_IMG}&nbsp;{SAVEBOX}</div>
        </div>
      </div>
	  <!-- BEGIN switch_box_size_notice -->
	  <div class="col-3 bodyline row1">
        <div class="row py-1">
	      <div class="col gensmall">{BOX_SIZE_STATUS}</div>
	    </div>
        <div class="row py-1">
	      <div class="col row2 px-0">
			<table cellspacing="0" cellpadding="1" border="0">
			  <tr> 
				<td bgcolor="{T_TD_COLOR2}"><img src="images/spacer.gif" width="{INBOX_LIMIT_IMG_WIDTH}" height="8" alt="{INBOX_LIMIT_PERCENT}" /></td>
			  </tr>
			</table>
	      </div>
	    </div>
        <div class="row gensmall">
	      <div class="col px-0 text-start">0%</div>
	      <div class="col px-0 ctr">50%</div>
	      <div class="col px-0 text-end">100%</div>
	    </div>
	  </div>
	  <!-- END switch_box_size_notice -->
    </div>
  </div>
  <br clear="all" />

  <form method="post" name="privmsg_list" action="{S_PRIVMSGS_ACTION}">
  <div class="row mx-0">
    <div class="col pl-0 mb-0 pl-0 text-center navbr"><a href="{U_INDEX}" class="navbr">{L_INDEX}</a></div>
  </div>
  <div class="row mx-0">
    <div class="col py-1 pl-0 d-flex nw btntxt"><span class="pbtn postbtn"><i class="fa-solid fa-pen-to-square"></i>&nbsp;{POST_PM}</span></div>
    <div class="col p-1 text-end"><span class="navbr gensmall">{L_DISPLAY_MESSAGES}: <select name="msgdays">{S_SELECT_MSG_DAYS}</select><input type="submit" value="{L_GO}" name="submit_msgdays" class="liteoption" /></span></div>
  </div>
  <div class="container-fluid forumline mx-0">
    <div class="row th"> 
      <div class="col-1 pl-1 py-1 ctr thCornerL">{L_FLAG}</div>
      <div class="col-6 p-0 py-1 thTop ml-0 text-start">{L_SUBJECT}</div>
      <div class="col-2 p-0 py-1 ctr thTop">{L_FROM_OR_TO}</div>
      <div class="col-2 p-0 py-1 ctr thTop">{L_DATE}</div>
      <div class="col-1 p-0 py-1 ctr thCornerR">{L_MARK}</div>
	</div>
	<!-- BEGIN listrow -->
    <div class="row"> 
      <div class="col-1 pl-1 py-1 ctr {listrow.ROW_CLASS}"><img src="{listrow.PRIVMSG_FOLDER_IMG}" width="19" height="18" alt="{listrow.L_PRIVMSG_FOLDER_ALT}" title="{listrow.L_PRIVMSG_FOLDER_ALT}" /></div>
      <div class="col-6 p-0 py-1 ml-0 text-start {listrow.ROW_CLASS} topictitle"><a href="{listrow.U_READ}" class="topictitle">{listrow.SUBJECT}</a></div>
      <div class="col-2 p-0 py-1 ctr {listrow.ROW_CLASS} name"><a href="{listrow.U_FROM_USER_PROFILE}" class="name">{listrow.FROM}</a></div>
      <div class="col-2 p-0 py-1 ctr {listrow.ROW_CLASS} postdetails">{listrow.DATE}</div>
      <div class="col-1 p-0 py-1 ctr {listrow.ROW_CLASS} postdetails"><input type="checkbox" name="mark[]2" value="{listrow.S_MARK_ID}" /></div>
	</div>
	<!-- END listrow -->
	<!-- BEGIN switch_no_messages -->
    <div class="row"> 
      <div class="col ctr gen">{L_NO_MESSAGES}</div>
    </div>
	<!-- END switch_no_messages -->
    <div class="row catBottom">{S_HIDDEN_FIELDS} 
      <div class="col pt-1 ctr"><input type="submit" name="save" value="{L_SAVE_MARKED}" class="mainoption" /></div>
      <div class="col pt-1 ctr"><input type="submit" name="delete" value="{L_DELETE_MARKED}" class="liteoption" /></div>
      <div class="col pt-1 ctr"><input type="submit" name="deleteall" value="{L_DELETE_ALL}" class="liteoption" /></div>
	</div>
  </div>
  <div class="row mx-0 pb-2">
    <div class="col py-1 pl-0 d-flex nw btntxt"><span class="pbtn postbtn"><i class="fa-solid fa-pen-to-square"></i>&nbsp;{POST_PM}</span></div>
    <div class="col text-start">
      <span class="navbr">{PAGE_NUMBER}</span>
    </div>
    <div class="col text-end">
      <div class="row">
        <div class="col">
          <span class="gensmall font-weight-bold"><a href="javascript:select_switch(true);" class="gensmall">{L_MARK_ALL}</a> :: <a href="javascript:select_switch(false);" class="gensmall">{L_UNMARK_ALL}</a></span>
        </div>
      </div>
      <div class="row">
        <div class="col text-end">
          <span class="navbr">{PAGINATION}</span>
        </div>
      </div>
      <div class="row">
        <div class="col text-end">
          <span class="gensmall">{S_TIMEZONE}</span>
        </div>
      </div>
    </div>
  </div>
  </form>

  <div class="container-fluid px-0">
    <div class="row">
      <div class="col gen px-0 text-end">{JUMPBOX}</div>
    </div>
  </div>

    </div>
  </div>
</div>