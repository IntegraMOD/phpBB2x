
<script>
<!--
function checkForm(formObj) {

	formErrors = false;    

	if (formObj.message.value.length < 2) {
		formErrors = "{L_EMPTY_MESSAGE_EMAIL}";
	}
	else if ( formObj.subject.value.length < 2)
	{
		formErrors = "{L_EMPTY_SUBJECT_EMAIL}";
	}

	if (formErrors) {
		alert(formErrors);
		return false;
	}
}
//-->
</script>

<form action="{S_POST_ACTION}" method="post" name="post" onSubmit="return checkForm(this)">

{ERROR_BOX}

<div class="row pb-2">
	  <div class="col"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></div>
</div>

<div class="container-fluid forumline">
	<div class="row"> 
	  <div class="col th pt-2 text-center"><strong>{L_SEND_EMAIL_MSG}</strong></div>
	</div>
	<div class="row"> 
		<div class="col-2 row1 hr1 py-1 gen"><b>{L_RECIPIENT}</b></div>
		<div class="col row2  hr1 py-1 pl-1 gen"><b>{USERNAME}</b></div>
	</div>
	<div class="row"> 
		<div class="col-2 row1 hr1 py-1"><span class="gen"><b>{L_SUBJECT}</b></span></div>
		<div class="col row2  hr1 py-1 pl-1 gen"><input type="text" name="subject" size="45" maxlength="100" style="width:450px" tabindex="2" class="post" value="{SUBJECT}" /></div>
	</div>
	<div class="row"> 
		<div class="col-2 row1 hr1 py-1"><span class="gen"><b>{L_MESSAGE_BODY}</b></span><br /><span class="gensmall">{L_MESSAGE_BODY_DESC}</span></div>
		<div class="col row2  hr1 py-1 pl-1 gen"><textarea name="message" rows="25" cols="40" wrap="virtual" style="width:500px" tabindex="3" class="post">{MESSAGE}</textarea></div>
	</div>
	<div class="row"> 
		<div class="col-2 row1 hr1 py-1"><span class="gen"><b>{L_OPTIONS}</b></span></div>
		<div class="col row2 hr1 py-1 pl-1 gen"><input type="checkbox" name="cc_email"  value="1" checked="checked" />{L_CC_EMAIL}</div>
	</div>
	<div class="row">
		<div class="col catBottom text-center pt-1">{S_HIDDEN_FIELDS}<input type="submit" tabindex="6" name="submit" class="mainoption" value="{L_SEND_EMAIL}" /></div>
	</div>
</div>
<div class="row pb-2">
	  <div class="col text-right px-0 gensmall">{S_TIMEZONE}</div>
</div>
</form>

<div class="row pb-2">
	  <div class="col text-right px-0">{JUMPBOX}</div>
</div>
