<form action="{S_ADD_CAT_ACTION}" method="post">

<h1>{L_ACATTITLE}</h1>

<p>{L_CATEXPLAIN}</p>

<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
 	<th colspan="2" class"thHead">{L_ACATTITLE}</th>
  </tr>
  <tr>
	<td width="50%" class="row1">{L_CATNAME}<br /><span class="gensmall">{L_CATNAMEINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[name]"></td>
  </tr>
  <tr>
	<td class="row1">{L_CATDESC}<br /><span class="gensmall">{L_CATDESCINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[description]"></td>
  </tr>
  <tr>
	<td class="row1">{L_CATPARENT}<br><span class="gensmall">{L_CATPARENTINFO}</span></td>
	<td class="row2"><select name="form[parent]" class="forminput"><option value="0" selected>{L_NONE}</option>{DROPMENU}</select></td>
  </tr>
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_ACATTITLE}" name="B1"><input type="hidden" name="category" value="add"><input type="hidden" name="add" value="do"></td>
  </tr>
</table>
</form>
