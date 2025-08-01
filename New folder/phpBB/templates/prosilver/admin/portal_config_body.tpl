<div class="maintitle">{L_CONFIGURATION_TITLE}</div>
<br />
<div class="genmed">{L_CONFIGURATION_EXPLAIN}</div>
<br />
<form action="{S_CONFIG_ACTION}" method="post">
<table cellpadding="3" cellspacing="1" border="0" align="center" class="forumline">
<tr> 
<th colspan="2">{L_GENERAL_CONFIG}</th>
</tr>
<!-- BEGIN portal -->
<tr> 
<td class="row1" align="right"><b>{portal.L_FIELD_LABEL}</b>{portal.L_FIELD_SUBLABEL}</td>
<td class="row2">{portal.FIELD}</td>
</tr>
<!-- END portal -->
<tr> 
<td class="cat" colspan="2" align="center">{S_HIDDEN_FIELDS}
<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="{L_RESET}" class="button" />
</td>
</tr>
</table>
</form>
<br clear="all" />