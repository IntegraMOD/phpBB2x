{LOCBAR}
<!-- BEGIN ip_check -->
<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr> 
	<th class="thHead" colspan="2">{L_RATE}</th>
  </tr>
  <tr> 
	<td class="row1" align="center" width="5%"><img src="pafiledb/styles/{STYLE}/images/error.gif" border="0"></td>
	<td class="row1" width="95%"><span class="genmed">{L_RERROR}</span></td>
  </tr>
  <tr> 
	<td class="cat" colspan="2">
<!-- END ip_check -->

<!-- BEGIN do_rate -->
<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr> 
	<th class="thHead" colspan="2">{L_RATE}</th>
  </tr>
  <tr> 
	<td class="row1" align="center" width="5%"><img src="pafiledb/styles/{STYLE}/images/info.gif" border="0"></td>
	<td class="row1" width="95%">{CONF}</td>
  </tr>
  <tr> 
	<td class="catBottom" colspan="2">
<!-- END do_rate -->

<!-- BEGIN rate -->
<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr> 
	<th colspan="2" class="thHead">{L_RATE}</th>
  </tr>
  <tr> 
	<td class="row1" width="90%"><span class="genmed">{RATEINFO}</span></td>
	<td class="row2"><form action="{S_RATE_ACTION}" method="post">
		<select size="1" name="rating" class="forminput">
		<option value="1">{L_R1}</option>
		<option value="2">{L_R2}</option>
		<option value="3">{L_R3}</option>
		<option value="4">{L_R4}</option>
		<option value="5" selected>{L_R5}</option>
		<option value="6">{L_R6}</option>
		<option value="7">{L_R7}</option>
		<option value="8">{L_R8}</option>
		<option value="9">{L_R9}</option>
		<option value="10">{L_R10}</option>
		<input type="hidden" name="action" value="rate">
		<input type="hidden" name="id" value="{ID}">
		<input type="hidden" name="rate" value="dorate">
		</select>
	</td>
  </tr>
  <tr> 
	<td colspan="2" class="catBottom" align="center"><input class="liteoption" type="submit" value="{L_RATE}" name="B1">
<!-- END rate -->
&nbsp;</td>
  </tr>
</table>
</form>
