<div class="container-fluid">
  <div class="row">
    <div class="col px-0">
	  <div class="my-2 text-center bg-light rounded-2 bdr-lt boxwrapper px-3 py-2">
		<div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center">
		  <div class="col-3">{L_PM}</div>
		  <div class="col-3 text-start">{L_USERNAME}</div>
		  <div class="col-1 text-start">{L_POSTS}</div>
		  <div class="col-2 text-center">{L_FROM}</div>
		  <div class="col-1 text-center">{L_EMAIL}</div>
		  <div class="col-1 text-center">{L_WEBSITE}</div>
		  <div class="col-1 text-center">{L_SELECT}</div>
		</div>
		<div class="my-2 text-center bg-light rounded-2 bdr-lt boxwrapper px-3 py-2">
		  <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center">
			<div class="col text-start">{L_PENDING_MEMBERS}</div>
		  </div>
		</div>
		<!-- BEGIN pending_members_row -->
		<div class="row text-start">
		  <div class="col d-flex flex-column bg-body-secondary rounded-2 bdr-cat mx-1 text-start">
			<div class="row gen">
			  <div class="col-3 {pending_members_row.ROW_CLASS}">{pending_members_row.PM_IMG}</div>
			  <div class="col-3 {pending_members_row.ROW_CLASS} text-start"><a href="{pending_members_row.U_VIEWPROFILE}" class="gen">{pending_members_row.USERNAME}</a></div>
			  <div class="col-1 {pending_members_row.ROW_CLASS} text-start">{pending_members_row.POSTS}</div>
			  <div class="col-2 {pending_members_row.ROW_CLASS} text-center">{pending_members_row.FROM}</div>
			  <div class="col-1 {pending_members_row.ROW_CLASS} text-center">{pending_members_row.EMAIL_IMG}</div>
			  <div class="col-1 {pending_members_row.ROW_CLASS} text-center">{pending_members_row.WWW_IMG}</div>
			  <div class="col-1 {pending_members_row.ROW_CLASS}"><input type="checkbox" name="pending_members[]" value="{pending_members_row.USER_ID}" checked="checked" /></div>
			</div>
		  </div>
		</div>
	    <!-- END pending_members_row -->
		<div class="row">
		  <div class="col text-end">
		  <span class="cattitle"> 
		  <input type="submit" name="approve" value="{L_APPROVE_SELECTED}" class="mainoption" />
		  &nbsp; 
		  <input type="submit" name="deny" value="{L_DENY_SELECTED}" class="mainoption" />
		  </span>
		  </div>
		</div>
      </div>
    </div>
  </div>
</div>