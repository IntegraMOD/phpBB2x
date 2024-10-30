{LOCBAR}
<!-- BEGIN cat_parent -->
<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr> 
	<th class="thCornerL" width="5%">&nbsp;</th>
	<th class="thTop">{L_CATEGORY}</th>
	<th class="thCornerR" width="8%">{L_FILES}</th>
  </tr>
<!-- END cat_parent -->

<!-- BEGIN cat_parent_do -->
  <tr> 
	<td class="row1" align="center" valign="middle"><a href="{cat_parent_do.U_CAT}" class="cattitle">{cat_parent_do.CAT_IMAGE}</a></td>
	<td class="row1" valign="middle"><a href="{cat_parent_do.U_CAT}" class="cattitle">{cat_parent_do.CAT_NAME}</a><br><span class="genmed">{cat_parent_do.CAT_DESC}</span></td>
	<td class="row2" align="center" valign="middle"><span class="genmed">{cat_parent_do.FILECAT}</span></td>
  </tr>
<!-- END cat_parent_do -->

<!-- BEGIN cat_parent -->
  <tr> 
	<td class="catBottom" colspan="3">&nbsp;</td>
  </tr>
</table>
<br>
<!-- END cat_parent -->

<!-- BEGIN filelist -->
<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr> 
	<th class="thCornerL" width="5%">&nbsp;</th>
	<th class="thTop" width="60%">{L_FILE}</th>
	<th class="thTop" width="15%">{L_DATE}</th>
	<th class="thTop" width="10%">{L_DOWNLOADS}</th>
	<th class="thCornerR" width="10%">{L_RATING}</th>
  </tr>
{FILELIST}
<form action="{S_ACTION_SORT}" method="post"><input type="hidden" name="action" value="category"><input type="hidden" name="id" value="{ID}">
<input type="hidden" name="start" value="{START}">
  <tr> 
	<td class="cat" align="center" colspan="5"><span class="genmed">{L_SORTBY}:&nbsp;<select name="sortby" style="vertical-align:middle">
		<option value="name">{L_NAME}</option>
		<option value="date">{L_DATE}</option>
		<option value="rating">{L_RATING}</option>
		<option value="downloads">{L_DOWNLOADS}</option>
		</select>&nbsp;&nbsp;<input class="liteoption" type="submit" value="{L_GO}" style="vertical-align:middle">
	</span></td>
  </tr>
</table>
<table width="100%" cellpadding="2" cellspacing="0">
  <tr>
	<td width="33%" align="left"><span class="nav">{PREV}</span></td>
	<td width="34%" align="center"><span class="nav">{L_PAGENO} : {PAGES}</span></td>
	<td width="33%" align="right"><span class="nav">{NEXT}</span></tr>
</table>
<!-- END filelist -->

<!-- BEGIN nofilelist -->
<table class="forumline" width="100%" cellspacing="1" cellpadding="3">
	<tr>
		<th class="thHead">{L_NO_FILES}</th>
	</tr>
	<tr> 
		<td class="row1" align="center" height="30">{L_NO_FILES_CAT}</td>
	</tr>
</table> 
<!-- END nofilelist -->
