<div class="maintitle">{L_LAYOUT_TITLE}</div>
<br />
<div class="genmed">{L_LAYOUT_TEXT}</div>
<br />
<form method="post" action="{S_LAYOUT_ACTION}">
<table cellspacing="1" cellpadding="0" border="0" align="center" class="forumline">
<tr> 
<th>&nbsp;{L_LAYOUT_NAME}&nbsp;</th>
<th>&nbsp;{L_LAYOUT_TEMPLATE}&nbsp;</th>
<th>&nbsp;{L_LAYOUT_PAGE}&nbsp;</th>
<th>&nbsp;{L_LAYOUT_FORUM_WIDE}&nbsp;</th>
<th>&nbsp;{L_LAYOUT_COLLAPSE}&nbsp;</th>
<th>&nbsp;{L_LAYOUT_VIEW}&nbsp;</th>
<th>&nbsp;{L_LAYOUT_GROUPS}&nbsp;</th>
<th colspan="3">{L_ACTION}</th>
</tr>
<!-- BEGIN layout -->
<tr> 
<td class="{layout.ROW_CLASS}" align="center">{layout.NAME}</td>
<td class="{layout.ROW_CLASS}" align="center">{layout.TEMPLATE}</td>
<td class="{layout.ROW_CLASS}" align="center">{layout.PAGE}</td>
<td class="{layout.ROW_CLASS}" align="center">{layout.FORUM_WIDE}</td>
<td class="{layout.ROW_CLASS}" align="center">{layout.PAGE_COLLAPSE}</td>
<td class="{layout.ROW_CLASS}" align="center">{layout.VIEW}</td>
<td class="{layout.ROW_CLASS}" align="center">{layout.GROUPS}</td>
<td class="{layout.ROW_CLASS}">&nbsp;<a href="{layout.U_LAYOUT_EDIT}">{L_EDIT}</a>&nbsp;</td>
<td class="{layout.ROW_CLASS}">&nbsp;{layout.L_LAYOUT_DELETE}&nbsp;</td>
<td class="{layout.ROW_CLASS}" align="center">&nbsp;{layout.L_DEFAULT}</a>&nbsp;</td>
</tr>
<!-- END layout -->
<tr> 
<td colspan="10" align="center" class="cat">{S_HIDDEN_FIELDS} 
<input type="submit" name="add" value="{L_LAYOUT_ADD}" class="mainoption" />
</td>
</tr>
</table>
</form>
<br />