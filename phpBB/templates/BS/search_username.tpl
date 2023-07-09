
<script>
<!--
function refresh_username(selected_username)
{
	opener.document.forms['post'].username.value = selected_username;
	opener.focus();
	window.close();
}
//-->
</script>

<form method="post" name="search" action="{S_SEARCH_ACTION}">
<div class="container-fluid">
  <div class="row">
	<div class="col">
	  <div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	    <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center">  
		  <div class="col">{L_SEARCH_USERNAME}</div>
		</div>
	    <div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1"> 
		  <div class="col text-start"><span class="genmed"><br /><input type="text" name="search_username" value="{USERNAME}" class="post" />&nbsp; <input type="submit" name="search" value="{L_SEARCH}" class="liteoption" /></span><br /><span class="gensmall">{L_SEARCH_EXPLAIN}</span><br />
			<!-- BEGIN switch_select_name -->
			<span class="genmed">{L_UPDATE_USERNAME}<br /><select name="username_list">{S_USERNAME_OPTIONS}</select>&nbsp; <input type="submit" class="liteoption" onClick="refresh_username(this.form.username_list.options[this.form.username_list.selectedIndex].value);return false;" name="use" value="{L_SELECT}" /></span><br />
			<!-- END switch_select_name -->
			<br />
            <span class="genmed"><a href="javascript:window.close();" class="genmed">{L_CLOSE_WINDOW}</a></span>
          </div>
		</div>
	  </div>
	</div>
  </div>
</div>
</form>
