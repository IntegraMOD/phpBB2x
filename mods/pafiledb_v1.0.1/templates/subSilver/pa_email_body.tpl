{LOCBAR}
<!-- BEGIN email -->
<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr> 
	<th class="thHead" colspan="2">{L_EMAIL}</th>
  </tr>
  <tr> 
	<td class="row2" colspan="2"><span class="genmed">{L_EMAILINFO}</span></td>
  </tr>
  <form action="{S_EMAIL_ACTION}" method="post">
  <tr> 
	<td class="row1" width="30%"><span class="genmed">{L_YNAME}:&nbsp;</span></td>
	<td class="row2" width="70%"><input class="post" type="text" size="50" name="sname"></td>
  </tr>
  <tr> 
	<td class="row1"><span class="genmed">{L_YEMAIL}:&nbsp;</span></td>
	<td class="row2"><input class="post" type="text" size="50" name="semail"> </td>
  </tr>
  <tr> 
	<td class="row1"><span class="genmed">{L_FNAME}:&nbsp;</span></td>
	<td class="row2"><input class="post" type="text" size="50" name="fname"></td>
  </tr>
  <tr> 
	<td class="row1"><span class="genmed">{L_FEMAIL}: *&nbsp;</span></td>
	<td class="row2"><input class="post" type="text" size="50" name="femail"></td>
  </tr>
  <tr> 
	<td class="row1"><span class="genmed">{L_ESUB}:&nbsp;</span></td>
	<td class="row2"><input class="post" type="text" size="50" name="subject" value="{FILE_NAME}"></td>
  </tr>
  <tr> 
	<td class="row1"><span class="genmed">{L_ETEXT}:&nbsp;</span></td>
	<td class="row2"><textarea cols="38" rows="10" name="message">{L_DEFAULTMAIL} {URL}/dload.php?action=file&id={ID}</textarea></td>
  </tr>
  <tr> 
	<td class="catBottom" align="center" colspan="2"><input type="hidden" name="action" value="email"><input type="hidden" name="act" value="send"><input type="hidden" name="id" value="{ID}"><input class="liteoption" type="submit" value="{L_SEMAIL}"></td>
  </tr>
  </form>
</table>
<!-- END email -->
