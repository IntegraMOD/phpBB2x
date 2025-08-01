<div class="container-fluid pl-0">
  <div class="row">
    <div class="col"><span class="nowrap"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></div>
	<div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	  <div class="row nav pb-1 d-flex flex-row align-items-center">
		<div class="col text-start">{L_USERNAME}</div>
		<div class="col">{L_LAST_UPDATE}</div>
		<div class="col">{L_FORUM_LOCATION}</div>
	  </div>
	  <div class="row px-0 mx-0 mt-2">
		<div class="col py-1 text-center bg-light rounded-2 bdr-lt boxwrapper">{TOTAL_REGISTERED_USERS_ONLINE}</div>
	  </div>   
	  <!-- BEGIN reg_user_row -->
	  <div class="row py-1 mx-0 mt-2 bg-body-secondary rounded-2 bdr-cat navbr">
		<div class="col text-start py-1"><span class="gen"><a href="{reg_user_row.U_USER_PROFILE}" class="gen">{reg_user_row.USERNAME}</a></span></div>
		<div class="col py-1 nowrap"><span class="gen">{reg_user_row.LASTUPDATE}</span></div>
		<div class="col py-1"><span class="gen"><a href="{reg_user_row.U_FORUM_LOCATION}" class="gen">{reg_user_row.FORUM_LOCATION}</a></span></div>
	  </div>
	  <!-- END reg_user_row -->
	  <div class="row px-0 mx-0 mt-2">
		<div class="col py-1 text-center bg-light rounded-2 bdr-lt boxwrapper">{TOTAL_GUEST_USERS_ONLINE}</div>
	  </div> 
	  <!-- BEGIN guest_user_row -->
	  <div class="row py-1 mx-0 mt-2 bg-body-secondary rounded-2 bdr-cat navbr">
		<div class="col text-start py-1"><span class="gen">{guest_user_row.USERNAME}</span></div>
		<div class="col py-1 nowrap"><span class="gen">{guest_user_row.LASTUPDATE}</span></div>
		<div class="col py-1"><span class="gen"><a href="{guest_user_row.U_FORUM_LOCATION}" class="gen">{guest_user_row.FORUM_LOCATION}</a></div>
	  </div>
	  <!-- END guest_user_row -->
	</div>
	<div class="container-fluid px-0">
	  <div class="row">
		<div class="col-8 py-1" align="left"><span class="gensmall">{L_ONLINE_EXPLAIN}</span></div>
		<div class="col-4 py-1" align="right"><span class="gensmall">{S_TIMEZONE}</span></div>
	  </div>
	  <div class="row">
		<div class="col pr-0" align="right">{JUMPBOX}</div>
	  </div>
    </div>
  </div>
</div>