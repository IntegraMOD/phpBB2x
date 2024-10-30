<form action="{S_DELETE_CAT_ACTION}" method="post">

<h1>{L_DCATTITLE}</h1>

<p>{L_CATEXPLAIN}</p>

<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_DCATTITLE}</th>
  </tr>
	{ROW}
  <tr>
	<td class="row2" colspan="2">{L_DELFILES}&nbsp;&nbsp;<input type="radio" value="yes" checked name="delfiles">{L_YES}&nbsp;&nbsp;<input type="radio" name="delfiles" value="no">{L_NO}</td>
  </tr>
  <tr>
	<td align="center" class="catBottom" colspan="2">
		<input class="liteoption" type="submit" value="{L_DCATTITLE}" name="B1">
		<input type="hidden" name="action" value="admin">
		<input type="hidden" name="ad" value="category">
            <input type="hidden" name="category" value="delete">
		<input type="hidden" name="delete" value="do">
	</td>
  </tr>
</table>
</form>
