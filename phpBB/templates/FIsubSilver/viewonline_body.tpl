<div class="container-fluid pl-0">
  <div class="row">
    <div class="col"><span class="nowrap"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></div>
  </div>
</div>

<div class="container-fluid forumline">
  <div class="row th pt-1">
    <div class="col-4">{L_USERNAME}</div>
    <div class="col-4">{L_LAST_UPDATE}</div>
    <div class="col-4">{L_FORUM_LOCATION}</div>
  </div>
  <div class="row catSides pl-1 pt-1"><span class="cattitle"><b>{TOTAL_REGISTERED_USERS_ONLINE}</b></span></div>
  <!-- BEGIN reg_user_row -->
  <div class="row">
    <div class="col-4 py-1 {reg_user_row.ROW_CLASS}"><span class="gen"><a href="{reg_user_row.U_USER_PROFILE}" class="gen">{reg_user_row.USERNAME}</a></span></div>
    <div class="col-4 py-1 nowrap {reg_user_row.ROW_CLASS}"><span class="gen">{reg_user_row.LASTUPDATE}</span></div>
    <div class="col-4 py-1 {reg_user_row.ROW_CLASS}"><span class="gen"><a href="{reg_user_row.U_FORUM_LOCATION}" class="gen">{reg_user_row.FORUM_LOCATION}</a></span></div>
  </div>
  <!-- END reg_user_row -->
  <div class="row">
    <div class="col row3">&nbsp;</div>
  </div>
  <div class="row">
    <div class="col catBottom pt-1"><span class="cattitle"><b>{TOTAL_GUEST_USERS_ONLINE}</b></span></div>
  </div>
  <!-- BEGIN guest_user_row -->
  <div class="row">
    <div class="col-4 py-1 {guest_user_row.ROW_CLASS}"><span class="gen">{guest_user_row.USERNAME}</span></div>
    <div class="col-4 py-1 nowrap {guest_user_row.ROW_CLASS}"><span class="gen">{guest_user_row.LASTUPDATE}</span></div>
    <div class="col-4 py-1 {guest_user_row.ROW_CLASS}"><span class="gen"><a href="{guest_user_row.U_FORUM_LOCATION}" class="gen">{guest_user_row.FORUM_LOCATION}</a></div>
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