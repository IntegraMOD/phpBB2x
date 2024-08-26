<div class="container-fluid">
	<div class="row">
	  <div class="col mx-0">
	      
<form action="{S_GROUPCP_ACTION}" method="post">
<div class="container-fluid px-0 pb-2">
  <div class="row">
    <div class="col navbr"><a href="{U_INDEX}">{L_INDEX}</a></div>
  </div>
</div>

<div class="container-fluid forumline">
  <div class="row th thH">
    <div class="col-md-4">{L_GROUP_INFORMATION}</div>
  </div>
  <div class="row thH pr-2">
    <div class="col-md-3 row1 gen" align="left">{L_GROUP_NAME}:</div>
    <div class="col-md row2 gen" align="left"><b>{GROUP_NAME}</b></div>
  </div>
  <div class="row thH">
    <div class="col-md-3 row1 gen" align="left">{L_GROUP_DESC}:</div>
    <div class="col-md row2 gen" align="left">{GROUP_DESC}</div>
  </div>
  <div class="row thH">
    <div class="col-md-3 row1 gen" align="left">{L_GROUP_MEMBERSHIP}:</div>
    <div class="col-md row2 gen" align="left">
      {GROUP_DETAILS} &nbsp;&nbsp;
	  <!-- BEGIN switch_subscribe_group_input -->
	  <input class="mainoption" type="submit" name="joingroup" value="{L_JOIN_GROUP}" />
	  <!-- END switch_subscribe_group_input -->
	  <!-- BEGIN switch_unsubscribe_group_input -->
	  <input class="mainoption" type="submit" name="unsub" value="{L_UNSUBSCRIBE_GROUP}" />
	  <!-- END switch_unsubscribe_group_input -->
    </div>
  </div>
  <!-- BEGIN switch_mod_option -->
  <div class="row thH">
    <div class="col-md-3 row1 gen" align="left">{L_GROUP_TYPE}:</div>
    <div class="col-md row2 gen" align="left"><input type="radio" name="group_type" value="{S_GROUP_OPEN_TYPE}" {S_GROUP_OPEN_CHECKED} /> {L_GROUP_OPEN} &nbsp;&nbsp;<input type="radio" name="group_type" value="{S_GROUP_CLOSED_TYPE}" {S_GROUP_CLOSED_CHECKED} />	{L_GROUP_CLOSED} &nbsp;&nbsp;<input type="radio" name="group_type" value="{S_GROUP_HIDDEN_TYPE}" {S_GROUP_HIDDEN_CHECKED} />	{L_GROUP_HIDDEN} &nbsp;&nbsp; <input class="mainoption" type="submit" name="groupstatus" value="{L_UPDATE}" /></div>
  </div>
  <!-- END switch_mod_option -->
</div>
{S_HIDDEN_FIELDS}
</form>

<form action="{S_GROUPCP_ACTION}" method="post" name="post">
<div class="container-fluid forumline">
  <div class="row th thH">
    <div class="col-md-3 thCornerL">{L_PM}</div>
    <div class="col-md-3 thTop text-start">{L_USERNAME}</div>
    <div class="col-md-1 thTop text-start">{L_POSTS}</div>
    <div class="col-md-2 thTop ctr">{L_FROM}</div>
    <div class="col-md-1 thTop ctr">{L_EMAIL}</div>
    <div class="col-md-1 thTop ctr">{L_WEBSITE}</div>
    <div class="col-md-1 thCornerR">{L_SELECT}</div>
  </div>
  <div class="row th thH">
    <div class="col-md catSides cattitle">{L_GROUP_MODERATOR}</div>
  </div>
  <div class="row th thH gen">
    <div class="col-md-3 row1">{MOD_PM_IMG}</div>
    <div class="col-md-3 row1 text-start"><a href="{U_MOD_VIEWPROFILE}">{MOD_USERNAME}</a></div>
    <div class="col-md-1 row1 text-start">{MOD_POSTS}</div>
    <div class="col-md-2 row1 ctr">{MOD_FROM}</div>
    <div class="col-md-1 row1 ctr">{MOD_EMAIL_IMG}</div>
    <div class="col-md-1 row1 ctr">{MOD_WWW_IMG}</div>
    <div class="col-md-1 row1">&nbsp;</div>
  </div>
  <div class="row th thH">
    <div class="col catSides cattitle">{L_GROUP_MEMBERS}</div>
  </div>
  <!-- BEGIN member_row -->
  <div class="row thH gen">
    <div class="col-md-3 {member_row.ROW_CLASS}">{member_row.PM_IMG}</div>
    <div class="col-md-3 {member_row.ROW_CLASS} text-start"><a href="{member_row.U_VIEWPROFILE}" class="gen">{member_row.USERNAME}</a></div>
    <div class="col-md-1 {member_row.ROW_CLASS} text-start">{member_row.POSTS}</div>
    <div class="col-md-2 {member_row.ROW_CLASS} ctr">{member_row.FROM}</div>
    <div class="col-md-1 {member_row.ROW_CLASS} ctr">{member_row.EMAIL_IMG}</div>
    <div class="col-md-1 {member_row.ROW_CLASS} ctr">{member_row.WWW_IMG}</div>
    <div class="col-md-1 {member_row.ROW_CLASS}">
	  <!-- BEGIN switch_mod_option -->
	  <input type="checkbox" name="members[]" value="{member_row.USER_ID}" /> 
	  <!-- END switch_mod_option -->
    </div>
  </div>
  <!-- END member_row -->
  <!-- BEGIN switch_no_members -->
  <div class="row th thH"> 
    <div class="col row1 gen">{L_NO_MEMBERS}</div>
  </div>
  <!-- END switch_no_members -->
  <!-- BEGIN switch_hidden_group -->
  <div class="row th thH"> 
    <div class="col row1 gen">{L_HIDDEN_MEMBERS}</div>
  </div>
  <!-- END switch_hidden_group -->
  <!-- BEGIN switch_mod_option -->
  <div class="row"> 
    <div class="col catBottom thH cattitle text-end"><input type="submit" name="remove" value="{L_REMOVE_SELECTED}" class="mainoption" /></div>
  </div>
  <!-- END switch_mod_option -->
</div>


<div class="container-fluid px-0">
  <div class="row">
    <div class="col-md-8 py-1" align="left">
	<!-- BEGIN switch_mod_option -->
      <span class="genmed"><input type="text"  class="post" name="username" maxlength="50" size="20" /> <input type="submit" name="add" value="{L_ADD_MEMBER}" class="mainoption" /> <input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="liteoption" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" /></span><br /><br />
    <!-- END switch_mod_option -->
      <span class="navbr">{PAGE_NUMBER}</span>
    </div>
    <div class="col-md-4 py-1" align="right"><span class="gensmall">{S_TIMEZONE}</span><br /><span class="navbr">{PAGINATION}</span></div>
  </div>
</div>

{PENDING_USER_BOX}

{S_HIDDEN_FIELDS}
</form>

<div class="container-fluid px-0">
  <div class="row">
    <div class="col pr-0" align="right">{JUMPBOX}</div>
  </div>
</div>

    </div>
  </div>
</div>