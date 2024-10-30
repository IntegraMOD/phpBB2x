
{LOCBAR}

<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr> 
	<th class="thHead" colspan="2">{L_SEARCH}</th>
  </tr>
<!-- BEGIN search_nothing -->
  <tr>
	<td class="row1" align="center" width="5%"><img src="pafiledb/styles/{STYLE}/images/error.gif" border="0"></td>
	<td class="row1" width="95%"><span class="genmed">{L_NO_MATCHES} <b>{SVALUE}</b></span></td>
  </tr>
<!-- END search_nothing -->

<!-- BEGIN search_done -->
  <tr>
	<td class="row2" colspan="2" align="center"><span class="genmed">{HITS} {L_MATCHES} <b> {SVALUE}</b></span></td>
  </tr>
<!-- END search_done -->

<!-- BEGIN search_result -->
  <tr>
	<td class="row1" align="center" width="5%">{search_result.ICON}</td>
	<td class="row1" width="95%"><span class="cattitle"><a href="dload.php?action=file&id={search_result.ID}" class="cattitle">{search_result.NAME}</a></span></td>
  </tr>
<!-- END search_result -->
  <tr> 
	<td class="catBottom" colspan="2">&nbsp;</td>
  </tr>
</table>
