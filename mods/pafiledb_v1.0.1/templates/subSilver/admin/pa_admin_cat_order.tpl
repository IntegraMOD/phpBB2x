
<h1>{L_RCATTITLE}</h1>

<p>{L_RCATEXPLAIN}</p>

<form action="{S_ORDER_CAT_ACTION}" method="post"><table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_RCATTITLE}</th>
  </tr>
	{ROW}
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_RCATTITLE}" name="B1"><input type="hidden" name="action" value="admin"><input type="hidden" name="ad" value="category"><input type="hidden" name="category" value="order"><input type="hidden" name="order" value="do"></td>
  </tr>
</table>	
</form>
