<form action="{S_EDIT_CAT_ACTION}" method="post">

<h1>{L_ECATTITLE}</h1>

<p>{L_CATEXPLAIN}</p>

<!-- BEGIN edit_form -->
<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_ECATTITLE}</th>
  </tr>
  <tr>
	<td width="50%" class="row1">{L_CATNAME}<br><span class="gensmall">{L_CATNAMEINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[name]" value="{CAT_NAME}"></td>
  </tr>
  <tr>
	<td class="row1">{L_CATDESC}<br><span class="gensmall">{L_CATDESCINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[description]" value="{CAT_DESC}"></td>
  </tr>
  <tr>
	<td class="row1">{L_CATPARENT}<br><span class="gensmall">{L_CATPARENTINFO}</span></td>
	<td class="row2"><select name="form[parent]" class="forminput">{DROPMENU}</select></td>
  </tr>
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_ECATTITLE}" name="B1"><input type="hidden" name="action" value="admin"><input type="hidden" name="ad" value="category"><input type="hidden" name="category" value="edit"><input type="hidden" name="edit" value="do"><input type="hidden" name="id" value="{SELECT}"></td>
  </tr>
</table>
</form>
<!-- END edit_form -->

<!-- BEGIN edit -->
<form action="{S_EDIT_CAT_ACTION}" method="post">
<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_ECATTITLE}</th>
  </tr>
	{ROW}
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_ECATTITLE}" name="B1"><input type="hidden" name="action" value="admin"><input type="hidden" name="ad" value="category"><input type="hidden" name="category" value="edit"><input type="hidden" name="edit" value="form"></td>
  </tr>
</table>
</form>
<!-- END edit -->
