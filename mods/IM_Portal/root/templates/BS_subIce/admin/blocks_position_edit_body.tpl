<div class="maintitle">{L_BP_TITLE}</div>
<br />
<div class="genmed">{L_BP_TEXT}</div>
<br />
<form method="post" action="{S_BLOCKS_POS_ACTION}">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th colspan="2">{L_EDIT_BP}</th>
</tr>

<tr> 
<td align="right" class="row1">{L_BP_KEY}:</td>
<td class="row2"> 
<input type="text" maxlength="30" size="30" name="pkey" value="{PKEY}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_BP_POSITION}:</td>
<td class="row2"> 
<input type="text" maxlength="1" size="1" name="bposition" value="{BPOSITION}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_BP_LAYOUT}:</td>
<td class="row2">
<select name="layout" class="post">{LAYOUT}</select>
</td>
</tr>


<tr> 
<td class="cat" colspan="2" align="center">{S_HIDDEN_FIELDS} 
<input type="submit" name="save" value="{L_SUBMIT}" class="mainoption" />
</td>
</tr>
</table>
</form>
<br />