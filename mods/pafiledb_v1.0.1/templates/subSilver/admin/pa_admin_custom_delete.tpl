
<h1>{L_DFIELDTITLE}</h1>

<p>{L_FIELDEXPLAIN}</p>

<form action="{S_DELETE_CUS_ACTION}" method="post"><table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_DFIELDTITLE}</b></th>
  </tr>
	{ROW}
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_DFIELDTITLE}" name="B1"><input type="hidden" name="action" value="admin"><input type="hidden" name="ad" value="custom"><input type="hidden" name="custom" value="delete"><input type="hidden" name="delete" value="do"></td>
  </tr>
</table>
</form>
