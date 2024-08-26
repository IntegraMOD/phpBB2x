<div class="container-fluid mx-0">
	<div class="row px-0">
	  <div class="col">

        <form method="post" action="{S_MODE_ACTION}">
          <div class="container-fluid mx-0 mb-2">
            <div class="row"> 
              <div class="col pl-0 nav"><a href="{U_INDEX}">{L_INDEX}</a></div>
              <div class="col px-0 text-end genmed">{L_SELECT_SORT_METHOD}:&nbsp;{S_MODE_SELECT}&nbsp;&nbsp;{L_ORDER}&nbsp;{S_ORDER_SELECT}&nbsp;&nbsp;<input type="submit" name="submit" value="{L_SUBMIT}" class="liteoption" /></div>
            </div>
          </div>
         
          <div class="container-fluid forumline mx-0">
            <div class="row th"> 
              <div class="col-1 p-0 py-1 pl-2 thCornerL nowrap">#</div>
              <div class="col-1 px-0 py-1 thTop mx-auto">&nbsp;</div>
              <div class="col text-start pl-0 py-1 thTop mx-auto">{L_USERNAME}</div>
              <div class="col p-0 py-1 ctr thTop mx-auto">{L_EMAIL}</div>
              <div class="col p-0 py-1 ctr thTop mx-auto">{L_FROM}</div>
              <div class="col p-0 py-1 ctr thTop mx-auto">{L_JOINED}</div>
              <div class="col p-0 py-1 ctr thTop mx-auto">{L_POSTS}</div>
              <div class="col p-0 py-1 pl-2 thCornerR mx-auto">{L_WEBSITE}</div>
        	</div>
        	<!-- BEGIN memberrow -->
            <div class="row"> 
              <div class="col-1 {memberrow.ROW_CLASS} gen p-0 py-1 pl-2 thCornerL nowrap">{memberrow.ROW_NUMBER}</div>
              <div class="col-1 {memberrow.ROW_CLASS} px-0 py-1 thTop mx-auto">{memberrow.PM_IMG}</div>
              <div class="col {memberrow.ROW_CLASS} text-start gen pl-0 py-1 thTop mx-auto"><a href="{memberrow.U_VIEWPROFILE}" class="gen">{memberrow.USERNAME}</a></div>
              <div class="col {memberrow.ROW_CLASS} p-0 py-1 ctr thTop mx-auto">{memberrow.EMAIL_IMG}</div>
              <div class="col {memberrow.ROW_CLASS} gen p-0 py-1 ctr thTop mx-auto">{memberrow.FROM}</div>
              <div class="col {memberrow.ROW_CLASS} gensmall p-0 py-1 ctr thTop mx-auto">{memberrow.JOINED}</div>
              <div class="col {memberrow.ROW_CLASS} gen p-0 py-1 ctr thTop mx-auto">{memberrow.POSTS}</div>
              <div class="col {memberrow.ROW_CLASS} p-0 py-1 pl-2 thCornerR mx-auto">{memberrow.WWW_IMG}</div>
        	</div>
            <!-- END memberrow -->
            <div class="row catBottom"> 
              <div class="col">&nbsp;</div>
        	</div>
          </div>
        
          <div class="row mx-0 py-1">
        	  <div class="col text-start nav">{PAGE_NUMBER}</div>
        	  <div class="col text-end px-0"><span class="nav">{PAGINATION}</span><br /><span class="gensmall">{S_TIMEZONE}</span></div>
          </div>
          <div class="row pb-2">
        	  <div class="col mx-0 px-0 text-end">{JUMPBOX}</div>
          </div>
        </form>

    </div>
  </div>	
</div>