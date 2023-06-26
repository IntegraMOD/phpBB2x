<div class="container-fluid">
  <div class="row">
	  <div class="col"><span class="nowrap"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></div>
  </div>
  <div class="container-fluid forumline text-center">
    <div class="row catHead">
      <div class="col cattitle pt-1">{SITENAME} - {REGISTRATION}</div>
    </div>
    <div class="row row1 px-0">
      <div class="col">
		<div class="genmed my-6">
		  <form action="{S_CONFIRM_ACTION}" method="post"><span class="gen">
		    {MESSAGE_TEXT}
		    {S_HIDDEN_FIELDS}<input type="submit" name="confirm" value="{L_YES}" class="mainoption" />&nbsp;&nbsp;<input type="submit" name="cancel" value="{L_NO}" class="liteoption" />
		  </form>
		</div>
      </div>
    </div>
    <div class="row catBottom">
      <div class="col">&nbsp;</div>
    </div>
  </div>
</div>