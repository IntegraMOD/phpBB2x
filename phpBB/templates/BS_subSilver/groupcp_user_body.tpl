<div class="container-fluid">
	<div class="row">
	  <div class="col"> 
	  
<div class="container-fluid ml-0 pb-2">
  <div class="row">
    <div class="col nav"><a href="{U_INDEX}">{L_INDEX}</a></div>
  </div>
</div>
<div class="container-fluid forumline">
  <!-- BEGIN switch_groups_joined -->
  <div class="row">
    <div class="col-md th thH px-0">{L_GROUP_MEMBERSHIP_DETAILS}</div>
  </div>
  <!-- BEGIN switch_groups_member -->
  <form method="get" action="{S_USERGROUP_ACTION}">
  <div class="row thH">
    <div class="col-4 row1 gen">{L_YOU_BELONG_GROUPS}</div>
    <div class="col row2 text-right gensmall">
	{GROUP_MEMBER_SELECT}&nbsp;&nbsp;<input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}
    </div>
  </div>
  </form>
  <!-- END switch_groups_member -->
  <!-- BEGIN switch_groups_pending -->
  <form method="get" action="{S_USERGROUP_ACTION}">
  <div class="row thH">
    <div class="col-4 row1 gen">{L_PENDING_GROUPS}</div>
    <div class="col row2 text-right gensmall">
	{GROUP_PENDING_SELECT}&nbsp;&nbsp;<input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}
    </div>
  </div>
  </form>
  <!-- END switch_groups_pending -->
  <!-- END switch_groups_joined -->
  <!-- BEGIN switch_groups_remaining -->
  <form method="get" action="{S_USERGROUP_ACTION}">
  <div class="row thH">
    <div class="col-4 row1 gen">{L_JOIN_A_GROUP}</div>
    <div class="col row2 text-right gensmall">
	{GROUP_LIST_SELECT}&nbsp;&nbsp;<input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}
    </div>
  </div>
  </form> 
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