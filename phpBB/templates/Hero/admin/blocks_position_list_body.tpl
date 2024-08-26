<div class="maintitle">{L_BP_TITLE}</div>
<br />
<div class="genmed">{L_BP_TEXT}</div>
<br />
<form method="post" action="{S_BLOCKS_POS_ACTION}">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th>&nbsp;{L_BP_KEY}&nbsp;</th>
<th>&nbsp;{L_BP_POSITION}&nbsp;</th>
<th>&nbsp;{L_BP_LAYOUT}&nbsp;</th>
<th colspan="2">{L_ACTION}</th>
</tr>
<!-- BEGIN bp -->
<tr> 
<td class="{bp.ROW_CLASS}" align="center">{bp.BP_KEY}</td>
<td class="{bp.ROW_CLASS}" align="center">{bp.BP_POSITION}</td>
<td class="{bp.ROW_CLASS}" align="center">{bp.BP_LAYOUT}</td>
<td class="{bp.ROW_CLASS}">&nbsp;{bp.U_BP_EDIT}&nbsp;</td>
<td class="{bp.ROW_CLASS}">&nbsp;{bp.U_BP_DELETE}&nbsp;</td>
</tr>
<!-- END bp -->
<tr> 
<td colspan="6" align="center" class="cat">{S_HIDDEN_FIELDS} 
<input type="submit" name="add" value="{L_BP_ADD_POSITION}" class="mainoption" />
</td>
</tr>
</table>
</form>
<br />