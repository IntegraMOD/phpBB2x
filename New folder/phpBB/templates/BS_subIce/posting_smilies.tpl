
<script>
<!--
function emoticon(text) {
	text = ' ' + text + ' ';
	if (opener.document.forms['post'].message.createTextRange && opener.document.forms['post'].message.caretPos) {
		var caretPos = opener.document.forms['post'].message.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
		opener.document.forms['post'].message.focus();
	} else {
	opener.document.forms['post'].message.value  += text;
	opener.document.forms['post'].message.focus();
	}
}
//-->
</script>


					
<div class="container-fluid forumline">
  <div class="row th mx-0 px-0"> 
	<div class="col mx-0 px-0 text-center" height="25">{L_EMOTICONS}</div>					
  </div>	
  <div class="row"> 
	<div class="col mx-0 px-0">						
		<div class="container h-100">
		  <div class="row d-flex flex-row justify-content-center align-items-center h-100 mx-auto">
			<form class="col row1 text-center">
				<!-- BEGIN smilies_row -->
				<div class="form-group" align="center">
				<!-- BEGIN smilies_col -->
				<a href="javascript:emoticon('{smilies_row.smilies_col.SMILEY_CODE}')"><img src="{smilies_row.smilies_col.SMILEY_IMG}" alt="{smilies_row.smilies_col.SMILEY_DESC}" title="{smilies_row.smilies_col.SMILEY_DESC}" /></a>
				<!-- END smilies_col -->
				</div>
				<!-- END smilies_row -->
				<!-- BEGIN switch_smilies_extra -->
				<div class="form-group">
				<span class="nav"><a href="{U_MORE_SMILIES}" onclick="open_window('{U_MORE_SMILIES}', 250, 300);return false" target="_smilies" class="nav">{L_MORE_SMILIES}</a></span>
				</div>
				<!-- END switch_smilies_extra -->
			</form>   
		  </div>
		</div>

	</div>
  </div>				
  <div class="row text-center"> 
	<div class="col"><a href="javascript:window.close();" class="genmed">{L_CLOSE_WINDOW}</a></div>					
  </div>
</div>
