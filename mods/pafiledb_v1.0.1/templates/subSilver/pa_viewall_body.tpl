{LOCBAR}

<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr> 
	<th class="thCornerL" width="5%">&nbsp;</td>
	<th class="thTop" width="65%">{L_FILE}</th>
	<th class="thTop" width="10%">{L_DATE}</th>
	<th class="thTop" width="10%">{L_DOWNLOADS}</th>
	<th class="thCornerR" width="10%">{L_RATING}</th>
  </tr>
<!-- BEGIN pin_file -->
  <tr> 
	<td class="row1" align="center" valign="middle"><a href="dload.php?action=file&id={pin_file.FILE_ID}" class="topictitle"><img src="pafiledb/images/pin.gif" border="0"></a></td>
	<td class="row1" valign="middle"><a href="dload.php?action=file&id={pin_file.FILE_ID}" class="topictitle">{pin_file.FILE_NAME}</a> {pin_file.NEW}<br><span class="genmed">{pin_file.FILE_DESC}</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">{pin_file.DATE}</td>
	<td class="row3" align="center" valign="middle"><span class="postdetails">{pin_file.FILE_DLS}</td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">{pin_file.RATING}/10</td>
  </tr>
<!-- END pin_file -->

<!-- BEGIN no_pin_file -->
  <tr> 
	<td class="row1" align="center" valign="middle"><a href="dload.php?action=file&id={no_pin_file.FILE_ID}" class="topictitle">{no_pin_file.POST_ICON}</a></td>
	<td class="row1" valign="middle"><a href="dload.php?action=file&id={no_pin_file.FILE_ID}" class="topictitle">{no_pin_file.FILE_NAME}</a>  {no_pin_file.NEW}<br /><span class="genmed">{no_pin_file.FILE_DESC}</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">{no_pin_file.DATE}</span></td>
	<td class="row3" align="center" valign="middle"><span class="postdetails">{no_pin_file.FILE_DLS}</span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">{no_pin_file.RATING}/10</span></td>
  </tr>
<!-- END no_pin_file -->

<form action="{S_VIEWALL_ACTION}" method="post"><input type="hidden" name="action" value="viewall"><input type="hidden" name="id" value="{ID}">
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
</form>
</table>

<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
	<td width="33%" align="left"><span class="nav">{PREV}</span></td>
	<td width="34%" align="center"><span class="nav">{L_PAGENO} : {PAGES}</span></td>
	<td width="33%" align="right"><span class="nav">{NEXT}</span></td>
  </tr>
</table>


