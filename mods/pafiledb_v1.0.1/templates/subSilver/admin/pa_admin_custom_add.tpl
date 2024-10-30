
<h1>{L_AFIELDTITLE}</h1>

<p>{L_FIELDEXPLAIN}</p>

<form action="{S_ADD_CUS_ACTION}" method="post"><table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_AFIELDTITLE}</th>
  </tr>
  <tr>	
	<td width="50%" class="row1">{L_FIELDNAME}<br><span class="gensmall">{L_FIELDNAMEINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[name]" /></td>
  </tr>
  <tr>
	<td class="row1">{L_FIELDDESC}<br><span class="gensmall">{L_FIELDDESCINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[description]" /></td>
  </tr>
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_AFIELDTITLE}" name="B1"><input type="hidden" name="action" value="admin"><input type="hidden" name="ad" value="custom"><input type="hidden" name="custom" value="add"><input type="hidden" name="add" value="do"></td>
  </tr>
</table>
</form>
