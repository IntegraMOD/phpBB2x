<div class="container-fluid">
  <div class="row">
    <div class="col mx-0">
	      
	<form action="{S_GROUPCP_ACTION}" method="post">
	<div class="container-fluid px-0 pb-2">
	  <div class="row">
		<div class="col navbr"><a href="{U_INDEX}">{L_INDEX}</a></div>
	  </div>
	</div>

	<div class="my-2 text-center bg-light rounded-2 bdr-lt boxwrapper px-3 py-2">
	  <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center">
		<div class="col text-start">{L_GROUP_INFORMATION}</div>
	  </div>
	  <div class="row text-start">
		<div class="col d-flex flex-column bg-body-secondary rounded-2 bdr-cat mx-1 text-start"> 
		  <span class="p-2">{L_GROUP_NAME}:</span>
		  <span class="p-2">{L_GROUP_DESC}:</span>
		  <span class="p-2">{L_GROUP_MEMBERSHIP}:</span>
		  <!-- BEGIN switch_mod_option -->
		  <span class="p-2">{L_GROUP_TYPE}:</span>
		  <!-- END switch_mod_option -->
		</div>
		<div class="col d-flex flex-column bg-body-secondary rounded-2 bdr-cat mx-1 text-start"> 
		  <span class="p-2"><b>{GROUP_NAME}</b></span>
		  <span class="p-2">{GROUP_DESC}</span>
		  <span class="p-2">{GROUP_DETAILS} &nbsp;&nbsp;
		  <!-- BEGIN switch_subscribe_group_input -->
		  <input class="mainoption" type="submit" name="joingroup" value="{L_JOIN_GROUP}" />
		  <!-- END switch_subscribe_group_input -->
		  <!-- BEGIN switch_unsubscribe_group_input -->
		  <input class="mainoption" type="submit" name="unsub" value="{L_UNSUBSCRIBE_GROUP}" />
		  <!-- END switch_unsubscribe_group_input -->
		  </span>
		  <!-- BEGIN switch_mod_option -->
		  <span class="p-2"><input type="radio" name="group_type" value="{S_GROUP_OPEN_TYPE}" {S_GROUP_OPEN_CHECKED} /> {L_GROUP_OPEN} &nbsp;&nbsp;<input type="radio" name="group_type" value="{S_GROUP_CLOSED_TYPE}" {S_GROUP_CLOSED_CHECKED} />	{L_GROUP_CLOSED} &nbsp;&nbsp;<input type="radio" name="group_type" value="{S_GROUP_HIDDEN_TYPE}" {S_GROUP_HIDDEN_CHECKED} />	{L_GROUP_HIDDEN} &nbsp;&nbsp; <input class="mainoption" type="submit" name="groupstatus" value="{L_UPDATE}" /></span>
		  <!-- END switch_mod_option -->
		</div>
	  </div>
	</div>
	{S_HIDDEN_FIELDS}
	</form>

	<form action="{S_GROUPCP_ACTION}" method="post" name="post">
	<div class="my-2 text-center bg-light rounded-2 boxwrapper px-3 py-2">
	  <div class="row nav mx-0 pb-1 d-flex flex-row align-items-center">
		<div class="col-md-3 text-center">{L_PM}</div>
		<div class="col-md-3 text-start">{L_USERNAME}</div>
		<div class="col-md-1 text-start">{L_POSTS}</div>
		<div class="col-md-2 text-center">{L_FROM}</div>
		<div class="col-md-1 text-center">{L_EMAIL}</div>
		<div class="col-md-1 text-start">{L_WEBSITE}</div>
		<div class="col-md-1 text-end">{L_SELECT}</div>
	  </div>
	  <div class="row my-2 text-center bg-light rounded-2 boxwrapper mx-2 py-2">
		<div class="col cattitle">{L_GROUP_MODERATOR}</div>
	  </div>
	  <div class="row d-flex flex-row align-items-center bg-body-secondary rounded-2 bdr-cat py-2 mx-1"> 
		<div class="col-md-3 text-center">{MOD_PM_IMG}</div>
		<div class="col-md-3 text-start"><a href="{U_MOD_VIEWPROFILE}">{MOD_USERNAME}</a></div>
		<div class="col-md-1 text-start">{MOD_POSTS}</div>
		<div class="col-md-2 text-center">{MOD_FROM}</div>
		<div class="col-md-1 text-center">{MOD_EMAIL_IMG}</div>
		<div class="col-md-1 text-start">{MOD_WWW_IMG}</div>
		<div class="col-md-1 text-end">&nbsp;</div>
	  </div>
	  <div class="row my-2 text-center bg-light rounded-2 boxwrapper mx-2 py-2">
		<div class="col cattitle">{L_GROUP_MEMBERS}</div>
	  </div>
	  <!-- BEGIN member_row -->
	  <div class="row d-flex flex-row align-items-center bg-body-secondary rounded-2 bdr-cat py-2 mx-1"> 
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
	  <div class="row d-flex flex-row align-items-center bg-body-secondary rounded-2 bdr-cat py-2 mx-1 text-center"> 
		<div class="col gen">{L_NO_MEMBERS}</div>
	  </div>
	  <!-- END switch_no_members -->
	  <!-- BEGIN switch_hidden_group -->
	  <div class="row d-flex flex-row align-items-center bg-body-secondary rounded-2 bdr-cat py-2 mx-1 text-center"> 
		<div class="col gen">{L_HIDDEN_MEMBERS}</div>
	  </div>
	  <!-- END switch_hidden_group -->
	  <!-- BEGIN switch_mod_option -->
	  <div class="row"> 
		<div class="col navbr text-end"><input type="submit" name="remove" value="{L_REMOVE_SELECTED}" class="mainoption" /></div>
	  </div>
	  <!-- END switch_mod_option -->
	</div>
	<div class="container-fluid px-0">
	  <div class="row">
		<div class="col-md-8 py-1" align="left">
		<!-- BEGIN switch_mod_option -->
		  <span class="genmed"><input type="text"  class="post" name="username" maxlength="50" size="20" /> <input type="submit" name="add" value="{L_ADD_MEMBER}" class="mainoption" /> <input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="mainoption" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" /></span><br /><br />
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