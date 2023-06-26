  <div class="container-fluid">
    <div class="row my-auto"> 
      <div class="col nav pl-0"><a href="{U_INDEX}">{L_INDEX}</a></div>
    </div>
  </div>

  <div class="container-fluid forumline mx-0">
    <div class="row th">
      <div class="col pt-1 ctr"><b>{L_IP_INFO}</b></div>
    </div>
    <div class="row catHead">
      <div class="col cattitle pt-1"><b>{L_THIS_POST_IP}</b></div>
    </div>
    <div class="row row1 gen">
      <div class="col py-1">{IP} [ {POSTS} ]</div>
      <div class="col py-1 text-right">[ <a href="{U_LOOKUP_IP}">{L_LOOKUP_IP}</a> ]</div>
    </div>
    <div class="row catHead">
      <div class="col cattitle pt-1"><b>{L_OTHER_USERS}</b></div>
    </div>
    <!-- BEGIN userrow -->
    <div class="row {userrow.ROW_CLASS} gen">
      <div class="col py-1"><a href="{userrow.U_PROFILE}">{userrow.USERNAME}</a> [ {userrow.POSTS} ]</div>
      <div class="col py-1 text-right"><a href="{userrow.U_SEARCHPOSTS}" title="{userrow.L_SEARCH_POSTS}"><img src="{SEARCH_IMG}" alt="{L_SEARCH}" /></div>
    </div>
    <!-- END userrow -->
    <div class="row catHead">
      <div class="col cattitle pt-1"><b>{L_OTHER_IPS}</b></div>
    </div>
    <!-- BEGIN iprow -->
    <div class="row {iprow.ROW_CLASS} gen">
      <div class="col py-1">{iprow.IP} [ {iprow.POSTS} ]</div>
      <div class="col py-1 text-right">[ <a href="{iprow.U_LOOKUP_IP}">{L_LOOKUP_IP}</a> ]</div>
    </div>
    <!-- END iprow -->
  </div>
  <div class="container-fluid mx-0 pr-0">
    <div class="row">
      <div class="col gensmall text-right">{S_TIMEZONE}</div>
    </div>
  </div>