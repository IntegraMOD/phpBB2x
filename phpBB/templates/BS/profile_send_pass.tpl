<form action="{S_PROFILE_ACTION}" method="post">
<div id="container">
  <div class="row my-2">
	<div class="col-md-4 navbr"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></div>
  </div>
</div>
<div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
  <div class="row nav mx-0 pl-2 pb-1">
    <div class="col text-center">{L_SEND_PASSWORD}</div>
  </div>
  <div class="row d-flex bg-body-secondary rounded-2 bdr-cat py-1 mx-0 my-1"> 
    <div class="col">  
	  <div class="row">
		<div class="col text-center"><span class="gensmall">{L_ITEMS_REQUIRED}</span></div>
	  </div>
	  <div class="row my-1">
		<div class="col-md-4"><span class="gen">{L_USERNAME}: *</span></div>
		<div class="col-md-4">
		  <input type="text" class="post" style="width: 200px" name="username" size="25" maxlength="40" value="{USERNAME}" />
		</div>
	  </div>
	  <div class="row my-1">
		<div class="col-md-4"><span class="gen">{L_EMAIL_ADDRESS}: *</span></div>
		<div class="col-md-4">
		  <input type="text" class="post" style="width: 200px" name="email" size="25" maxlength="255" value="{EMAIL}" />
		</div>
	  </div>
    </div>
  </div>
  <div class="row my-1">
    <div class="col text-center">{S_HIDDEN_FIELDS}
      <input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />
		&nbsp;&nbsp;
      <input type="reset" value="{L_RESET}" name="reset" class="liteoption" />
    </div>
  </div>
</div>
</form>
