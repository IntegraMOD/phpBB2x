<div class="container-fluid">
  <div class="row my-2">
	<div class="col"><span class="nowrap"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></div>
  </div>
  <div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	<div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center">
      <div class="col cattitle pt-1">{SITENAME} - {REGISTRATION}</div>
    </div>
    <div class="row mx-0 px-0 d-flex align-items-center flex-nowrap bg-body-secondary rounded-2 bdr-cat"> 
      <div class="col">
	    <form action="{S_CONFIRM_ACTION}" method="post"><span class="gen">
  	      <div class="genmed my-6">{MESSAGE_TEXT}{S_HIDDEN_FIELDS}<input type="submit" name="confirm" value="{L_YES}" class="mainoption" />&nbsp;&nbsp;<input type="submit" name="cancel" value="{L_NO}" class="mainoption" /></div>
		</form>
      </div>
    </div>
    <div class="row">
      <div class="col">&nbsp;</div>
    </div>
  </div>
</div>