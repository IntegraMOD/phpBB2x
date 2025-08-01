<div class="container-fluid">
  <div class="row">
    <div class="col px-0">
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
		  <div class="col-md catSides cattitle">{L_PENDING_MEMBERS}</div>
	    </div>
	    <!-- BEGIN pending_members_row -->
	    <div class="row thH gen">
		  <div class="col-md-3 {pending_members_row.ROW_CLASS}">{pending_members_row.PM_IMG}</div>
		  <div class="col-md-3 {pending_members_row.ROW_CLASS} text-start"><a href="{pending_members_row.U_VIEWPROFILE}" class="gen">{pending_members_row.USERNAME}</a></div>
		  <div class="col-md-1 {pending_members_row.ROW_CLASS} text-start">{pending_members_row.POSTS}</div>
		  <div class="col-md-2 {pending_members_row.ROW_CLASS} ctr">{pending_members_row.FROM}</div>
		  <div class="col-md-1 {pending_members_row.ROW_CLASS} ctr">{pending_members_row.EMAIL_IMG}</div>
		  <div class="col-md-1 {pending_members_row.ROW_CLASS} ctr">{pending_members_row.WWW_IMG}</div>
		  <div class="col-md-1 {pending_members_row.ROW_CLASS}"><input type="checkbox" name="pending_members[]" value="{pending_members_row.USER_ID}" checked="checked" /></div>
	    </div>
	    <!-- END pending_members_row -->
	    <div class="row th thH gen">
		  <div class="col-md cat text-end">
		  <span class="cattitle"> 
		  <input type="submit" name="approve" value="{L_APPROVE_SELECTED}" class="mainoption" />
		  &nbsp; 
		  <input type="submit" name="deny" value="{L_DENY_SELECTED}" class="liteoption" />
		  </span>
		  </div>
	    </div>
	  </div> 
  
    </div>
  </div>
</div>