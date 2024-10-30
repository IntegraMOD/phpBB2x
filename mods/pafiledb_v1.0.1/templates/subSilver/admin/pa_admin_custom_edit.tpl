
<h1>{L_EFIELDTITLE}</h1>

<p>{L_FIELDEXPLAIN}</p>

<!-- BEGIN custom_form -->
<form action="{S_EDIT_CUS_ACTION}" method="post"><table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_EFIELDTITLE}</th>
  </tr>
  <tr>
	<td width="50%" class="row1">{L_FIELDNAME}<br><span class="gensmall">{L_FIELDNAMEINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[name]" value="{CUSTOM_NAME}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_FIELDDESC}<br><span class="gensmall">{L_FIELDDESCINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[description]" value="{CUSTOM_DESC}" /></td>
  </tr>
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_EFIELDTITLE}" name="B1"><input type="hidden" name="action" value="admin"><input type="hidden" name="ad" value="custom"><input type="hidden" name="custom" value="edit"><input type="hidden" name="id" value="{SELECT}"><input type="hidden" name="edit" value="do"></td>
  </tr>
</table>
</form>
<!-- END custom_form -->

<!-- BEGIN custom -->
<form action="{S_EDIT_CUS_ACTION}" method="post"><table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_EFIELDTITLE}</th>
  </tr>
	{ROW}
  <tr>
 	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_EFIELDTITLE}" name="B1"><input type="hidden" name="action" value="admin"><input type="hidden" name="ad" value="custom"><input type="hidden" name="custom" value="edit"><input type="hidden" name="edit" value="form"></td>
  </tr>
</table>
</form>
<!-- END custom -->
