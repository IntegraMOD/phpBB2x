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
        <!-- BEGIN switch_groups_joined -->
	    <div class="row my-2 text-center bg-light rounded-2 bdr-lt boxwrapper px-3 mx-2 py-2">
		  <div class="col text-center">{L_GROUP_MEMBERSHIP_DETAILS}</div>
	    </div>
		
 		<!-- BEGIN switch_groups_member --> 
	    <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center"> 
		  <div class="col"><span class="gen">{L_YOU_BELONG_GROUPS}</span></div>
		  <div class="col"> 
		    <div>
			  <div class="row">
			  <form method="get" action="{S_USERGROUP_ACTION}">
				<div class="col"><span class="gensmall">{GROUP_MEMBER_SELECT}</span></div>
				<div class="col"> 
				  <input type="submit" value="{L_VIEW_INFORMATION}" class="mainoption" />{S_HIDDEN_FIELDS}
				</div>
			  </form>
			  </div>
		    </div>
		  </div>
	    </div> 
	    <!-- END switch_groups_member -->
		<!-- BEGIN switch_groups_pending -->
	    <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center"> 
		  <div class="col"><span class="gen">{L_PENDING_GROUPS}</span></div>
		  <div class="col"> 
		    <div>
			  <div class="row">
			  <form method="get" action="{S_USERGROUP_ACTION}">
				<div class="col"><span class="gensmall">{GROUP_PENDING_SELECT}</span></div>
				<div class="col"> 
				  <input type="submit" value="{L_VIEW_INFORMATION}" class="mainoption" />{S_HIDDEN_FIELDS}
				</div>
			  </form>
			  </div>
		    </div>
		  </div>
	    </div> 		
		<!-- END switch_groups_pending -->
		<!-- END switch_groups_joined -->
		<!-- BEGIN switch_groups_remaining -->
	    <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center"> 
		  <div class="col"><span class="gen">{L_JOIN_A_GROUP}</span></div>
		  <div class="col"> 
		    <div>
			  <div class="row">
			  <form method="get" action="{S_USERGROUP_ACTION}">
				<div class="col"><span class="gensmall">{GROUP_LIST_SELECT}</span></div>
				<div class="col"> 
				  <input type="submit" value="{L_VIEW_INFORMATION}" class="mainoption" />{S_HIDDEN_FIELDS}
				</div>
			  </form>
			  </div>
		    </div>
		  </div>
	    </div>		
        <!-- END switch_groups_remaining -->
      </div>
	  <div class="container-fluid my-2">
	    <div class="row">
		  <div class="col gensmall clearfix pr-0" align="right">{S_TIMEZONE}</div>
	    </div>
	  </div>
	  <div class="container-fluid px-0">
	    <div class="row">
		  <div class="col gen pr-0" align="right">{JUMPBOX}</div>
	    </div>
	  </div>
    </div>
  </div>
</div>