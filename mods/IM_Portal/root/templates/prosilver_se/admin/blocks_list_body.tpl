<div class="maintitle">{L_BLOCKS_TITLE}</div>
<br />
<div class="genmed">{L_BLOCKS_TEXT}</div>
<br />
{L_B_LAYOUT}: [ <b>{LAYOUT_NAME}</b> ]
&nbsp;&nbsp;
{L_B_PAGE}: [ <b>{PAGE}</b> ]
<br />
<br />
<form method="post" action="{S_BLOCKS_ACTION}">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th nowrap="nowrap" colspan="4">{L_ACTION}</th>
<th nowrap="nowrap">{L_B_TITLE}</th>
<th nowrap="nowrap">{L_B_POSITION}</th>
<th nowrap="nowrap">{L_B_ACTIVE}</th>
<th nowrap="nowrap">{L_B_DISPLAY}</th>
<th nowrap="nowrap">{L_B_TYPE}</th>
<th nowrap="nowrap">{L_B_CACHE}</th>
<th nowrap="nowrap">{L_B_CACHETIME}</th>
<th nowrap="nowrap">{L_B_VIEW_BY}</th>
<th nowrap="nowrap">{L_B_BORDER}</th>
<th nowrap="nowrap">{L_B_TITLEBAR}</th>
<th nowrap="nowrap">{L_B_OPENCLOSE}</th>
<th nowrap="nowrap">{L_B_LOCAL}</th>
<th nowrap="nowrap">{L_B_BACKGROUND}</th>
<th nowrap="nowrap">{L_B_GROUPS}</th>
</tr>
<!-- BEGIN blocks -->
<tr> 
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center"><a href="{blocks.U_MOVE_UP}">{L_MOVE_UP}</a></td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center"><a href="{blocks.U_MOVE_DOWN}">{L_MOVE_DOWN}</a></td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center"><a href="{blocks.U_EDIT}">{L_EDIT}</a></td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center"><a href="{blocks.U_DELETE}">{L_DELETE}</a></td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.TITLE}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.POSITION}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.ACTIVE}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.CONTENT}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.TYPE}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.CACHE}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.CACHETIME}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.VIEW}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.BORDER}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.TITLEBAR}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.OPENCLOSE}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.LOCAL}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.BACKGROUND}</td>
<td nowrap="nowrap" class="{blocks.ROW_CLASS}" align="center">{blocks.GROUPS}</td>
</tr>
<!-- END blocks -->
<tr> 
<td colspan="18" align="center" class="cat">{S_HIDDEN_FIELDS} 
<input type="submit" name="add" value="{L_BLOCKS_ADD}" class="mainoption" />
</td>
</tr>
</table>
</form>
<br />