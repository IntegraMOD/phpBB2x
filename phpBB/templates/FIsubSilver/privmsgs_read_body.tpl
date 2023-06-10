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
      <br clear="all" />
      <form method="post" action="{S_PRIVMSGS_ACTION}">
      <div class="container-fluid">
        <div class="row px-0">
          <div class="col-3 py-1 pl-0 d-flex nw btntxt"><span class="pbtn postbtn"><i class="fa-solid fa-share-from-square"></i>&nbsp;{REPLY_PM}</span></div>
          <div class="col"><span class="text-end navbr"><a href="{U_INDEX}">{L_INDEX}</a></span></div>
        </div>
        <div class="row mx-0"> 
          <div class="col px-0">
              <div class="container-fluid forumline">
                <div class="row th">
                  <div class="col d-flex align-items-center">{BOX_NAME} :: {L_MESSAGE}</div>
                </div>
                <div class="row genmed row2 hr1 d-flex align-items-center">
                  <div class="col-2 py-1">{L_FROM}:</div>
                  <div class="col py-1 hr5">{MESSAGE_FROM}</div>
                </div>
                <div class="row genmed row2 hr1 d-flex align-items-center">
                  <div class="col-2 py-1">{L_TO}:</div>
                  <div class="col py-1 hr5">{MESSAGE_TO}</div>
                </div>
                <div class="row genmed row2 hr1">
                  <div class="col-2 py-1">{L_POSTED}:</div>
                  <div class="col py-1 hr5">{POST_DATE}</div>
                </div>
                <div class="row genmed row2 hr1">
                  <div class="col-2 py-1">{L_SUBJECT}:</div>
                  <div class="col py-1 hr5">{POST_SUBJECT}</div>
            	  <div class="col-4 text-end"><span class="py-1 pl-0 d-flex nw"><span class="pbtn"><i class="fa-solid fa-pencil"></i>{EDIT_PM_IMG}</span>&nbsp;&nbsp;<span class="pbtn"><i class="fa-solid fa-quote-left"></i>&nbsp;{QUOTE_PM}&nbsp;<i class="fa-solid fa-quote-right"></i></span></span></div>
                </div>
                <div class="row row1 hr1">
                  <div class="col p-2 postbody">{MESSAGE}</div>
                </div>
                <div class="row row1 hr1">
                    <div class="col d-flex align-items-center mt-1 py-2 text-start">{PROFILE_IMG}&nbsp;{PM_IMG}&nbsp;{EMAIL_IMG}&nbsp;{WWW_IMG}&nbsp;{FB_IMG}&nbsp;{IG_IMG}&nbsp;{PT_IMG}&nbsp;{TWR_IMG}&nbsp;{SKP_IMG}&nbsp;{TG_IMG}&nbsp;{LI_IMG}&nbsp;{TT_IMG}</div>
                </div>
                <div class="row catBottom">{S_HIDDEN_FIELDS} 
                  <div class="col d-flex justify-content-center">
                    <div class=" p-1"><input type="submit" name="save" value="{L_SAVE_MSG}" class="liteoption" /></div>
                    <div class="p-1"><input type="submit" name="delete" value="{L_DELETE_MSG}" class="liteoption" /></div>
             	</div>
              </div>
          </div>
        </div>  
    
        <br clear="all" />
        <div class="row px-0"> 
          <div class="col-3 py-1 pl-0 d-flex nw btntxt"><span class="pbtn postbtn"><i class="fa-solid fa-share-from-square"></i>&nbsp;{REPLY_PM}</span></div>
          <div class="col pl-0 mb-0 text-end gensmall">{S_TIMEZONE}</div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col gen pr-0 text-end">{JUMPBOX}</div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>