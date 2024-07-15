<div class="maintitle">{L_BV_TITLE}</div>
<br />
<div class="genmed">{L_BV_TEXT}</div>
<br />
<form method="post" action="{S_BLOCKS_VAR_ACTION}">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th>&nbsp;{L_BV_LABEL}&nbsp;</th>
<th>&nbsp;{L_BV_SUB_LABEL}&nbsp;</th>
<th>&nbsp;{L_BV_NAME}&nbsp;</th>
<th>&nbsp;{L_BV_OPTIONS}&nbsp;</th>
<th>&nbsp;{L_BV_VALUES}&nbsp;</th>
<th>&nbsp;{L_BV_TYPE}&nbsp;</th>
<th>&nbsp;{L_BV_BLOCK}&nbsp;</th>
<th colspan="2">{L_ACTION}</th>
</tr>
<!-- BEGIN bv -->
<tr> 
<td class="{bv.ROW_CLASS}" align="center">{bv.BV_LABEL}</td>
<td class="{bv.ROW_CLASS}" align="center">{bv.BV_SUB_LABEL}</td>
<td class="{bv.ROW_CLASS}" align="center">{bv.BV_NAME}</td>
<td class="{bv.ROW_CLASS}" align="center">{bv.BV_OPTIONS}</td>
<td class="{bv.ROW_CLASS}" align="center">{bv.BV_VALUES}</td>
<td class="{bv.ROW_CLASS}" align="center">{bv.BV_TYPE}</td>
<td class="{bv.ROW_CLASS}" align="center">{bv.BV_BLOCK}</td>
<td class="{bv.ROW_CLASS}">&nbsp;<a href="{bv.U_BV_EDIT}">{L_EDIT}</a>&nbsp;</td>
<td class="{bv.ROW_CLASS}">&nbsp;<a href="{bv.U_BV_DELETE}">{L_DELETE}</a>&nbsp;</td>
</tr>
<!-- END bv -->
<tr> 
<td colspan="9" align="center" class="cat">{S_HIDDEN_FIELDS} 
<input type="submit" name="add" value="{L_BV_ADD_VARIABLE}" class="mainoption" />
</td>
</tr>
</table>
</form>
<br />