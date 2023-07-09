<div class="container-fluid mx-0">
	<div class="row px-0">
	  <div class="col">

        <form method="post" action="{S_MODE_ACTION}">
          <div class="container-fluid mx-0 mb-2">
            <div class="row"> 
              <div class="col pl-0 nav"><a href="{U_INDEX}">{L_INDEX}</a></div>
              <div class="col px-0 text-end genmed">{L_SELECT_SORT_METHOD}:&nbsp;{S_MODE_SELECT}&nbsp;&nbsp;{L_ORDER}&nbsp;{S_ORDER_SELECT}&nbsp;&nbsp;<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" /></div>
            </div>
          </div>
         
	      <div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	        <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center"> 
              <div class="col-1 p-0 py-1 pl-2 nowrap">#</div>
              <div class="col-1 px-0 py-1 text-center">&nbsp;</div>
              <div class="col text-start pl-0 py-1 text-center">{L_USERNAME}</div>
              <div class="col p-0 py-1 text-center">{L_EMAIL}</div>
              <div class="col p-0 py-1 text-center">{L_FROM}</div>
              <div class="col p-0 py-1 text-center">{L_JOINED}</div>
              <div class="col p-0 py-1 text-center">{L_POSTS}</div>
              <div class="col p-0 py-1 pl-2 text-center">{L_WEBSITE}</div>
        	</div>
        	<!-- BEGIN memberrow -->
			<div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1"> 
              <div class="col-1 {memberrow.ROW_CLASS} gen p-0 py-1 pl-2 text-center nowrap">{memberrow.ROW_NUMBER}</div>
              <div class="col-1 {memberrow.ROW_CLASS} px-0 py-1 text-center">{memberrow.PM_IMG}</div>
              <div class="col {memberrow.ROW_CLASS} text-start gen pl-0 py-1 text-center"><a href="{memberrow.U_VIEWPROFILE}" class="gen">{memberrow.USERNAME}</a></div>
              <div class="col {memberrow.ROW_CLASS} p-0 py-1 ctr text-center">{memberrow.EMAIL_IMG}</div>
              <div class="col {memberrow.ROW_CLASS} gen p-0 py-1 text-center mx-auto">{memberrow.FROM}</div>
              <div class="col {memberrow.ROW_CLASS} gensmall p-0 py-1 text-center mx-auto">{memberrow.JOINED}</div>
              <div class="col {memberrow.ROW_CLASS} gen p-0 py-1 text-center">{memberrow.POSTS}</div>
              <div class="col {memberrow.ROW_CLASS} p-0 py-1 pl-2 text-center">{memberrow.WWW_IMG}</div>
        	</div>
            <!-- END memberrow -->
            <div class="row"> 
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