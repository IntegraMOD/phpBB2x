<div class="container-fluid px-0">
  <div class="row">
    <div class="col">

      <div class="container">
        <div class="row navbr">
          <div class="col nw">{INBOX_IMG}&nbsp;{INBOX}</div>
          <div class="col nw">{SENTBOX_IMG}&nbsp;{SENTBOX}</div>
          <div class="col nw">{OUTBOX_IMG}&nbsp;{OUTBOX}</div>
          <div class="col nw">{SAVEBOX_IMG}&nbsp;{SAVEBOX}</div>
        </div>
      </div>
      <form method="post" action="{S_PRIVMSGS_ACTION}">
      <div class="container-fluid">
        <div class="row px-0">
          <div class="col py-1 pl-0 d-flex nw gen"><button class="pbtn bg-secondary-subtle btn-sm bdr-cat btnwrapper navbr">{REPLY_PM_IMG}&nbsp;{REPLY_PM}</button></div>
          <div class="col"><span class="text-end navbr"><a href="{U_INDEX}">{L_INDEX}</a></span></div>
        </div>
        <div class="row mx-0 my-2"> 
          <div class="col px-0">
	        <div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	          <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center">
                  <div class="col d-flex align-items-center">{BOX_NAME} :: {L_MESSAGE}</div>
              </div>
			  <div class="row mx-0 px-0 d-flex align-items-center flex-nowrap bg-body-secondary rounded-2 bdr-cat"> 
                <div class="col text-start">
			  
                <div class="row genmed hr1 d-flex align-items-center">
                  <div class="col-2 py-1 bg-secondary bg-gradient bg-opacity-10">{L_FROM}:</div>
                  <div class="col py-1 hr5">{MESSAGE_FROM}</div>
                </div>
                <div class="row genmed hr1 d-flex align-items-center">
                  <div class="col-2 py-1 bg-secondary bg-gradient bg-opacity-10">{L_TO}:</div>
                  <div class="col py-1 hr5">{MESSAGE_TO}</div>
                </div>
                <div class="row genmed hr1">
                  <div class="col-2 py-1 bg-secondary bg-gradient bg-opacity-10">{L_POSTED}:</div>
                  <div class="col py-1 hr5">{POST_DATE}</div>
                </div>
                <div class="row genmed hr1">
                  <div class="col-2 py-1 bg-secondary bg-gradient bg-opacity-10">{L_SUBJECT}:</div>
                  <div class="col py-1 hr5">{POST_SUBJECT}</div>
            	  <div class="col-4 text-end my-1"><span class="navbr">{EDIT_PM_IMG}&nbsp;{QUOTE_PM_IMG}</span></div>
                </div>
                <div class="row hr1 bg-secondary bg-gradient bg-opacity-10">
                  <div class="col p-2 postbody text-black">{MESSAGE}</div>
                </div>
                <div class="row hr1">
                    <div class="col d-flex align-items-center mt-1 py-2 text-start">{PROFILE_IMG}&nbsp;{PM_IMG}&nbsp;{EMAIL_IMG}&nbsp;{WWW_IMG}&nbsp;{FB_IMG}&nbsp;{IG_IMG}&nbsp;{PT_IMG}&nbsp;{TWR_IMG}&nbsp;{SKP_IMG}&nbsp;{TG_IMG}&nbsp;{LI_IMG}&nbsp;{TT_IMG}</div>
                </div>
                <div class="row">{S_HIDDEN_FIELDS} 
                  <div class="col d-flex justify-content-center">
                    <div class=" p-1"><input type="submit" name="save" value="{L_SAVE_MSG}" class="mainoption" /></div>
                    <div class="p-1"><input type="submit" name="delete" value="{L_DELETE_MSG}" class="mainoption" /></div>
             	</div>
              </div>
              </div>
            </div>			  
          </div>
        </div> 
      </div>		
      <div class="row px-0"> 
        <div class="col py-1 pl-0 d-flex nw gen"><button class="pbtn bg-secondary-subtle btn-sm bdr-cat btnwrapper navbr" type="button" alt="">{REPLY_PM_IMG}&nbsp;{REPLY_PM}</button></div>
        <div class="col pl-0 mb-0 text-end gensmall">{S_TIMEZONE}</div>
      </div>
      </form>
	  <div class="container-fluid">
        <div class="row">
          <div class="col gen pr-0 text-end">{JUMPBOX}</div>
        </div>
      </div>  
    </div>
  </div>
</div>