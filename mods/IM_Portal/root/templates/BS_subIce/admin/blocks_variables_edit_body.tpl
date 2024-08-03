<div class="maintitle">{L_BV_TITLE}</div>
<br />
<div class="genmed">{L_BV_TEXT}</div>
<br />
<form method="post" action="{S_BLOCKS_VAR_ACTION}">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th colspan="2">{L_EDIT_BV}</th>
</tr>

<tr> 
<td align="right" class="row1">{L_BV_LABEL}:</td>
<td class="row2"> 
<input type="text" maxlength="30" size="30" name="label" value="{LABEL}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_BV_SUB_LABEL}:</td>
<td class="row2"> 
<input type="text" maxlength="255" size="50" name="sub_label" value="{SUB_LABEL}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_BV_NAME}:<br /><br /><span class="gensmall">{L_CONFIG_NAME_EXPLAIN}</span></td>
<td class="row2"> 
<input type="text" maxlength="30" size="30" name="config_name" value="{NAME}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_BV_OPTIONS}:<br /><br /><span class="gensmall">{L_FIELD_OPTIONS_EXPLAIN}</span></td>
<td class="row2"> 
<input type="text" maxlength="255" size="50" name="options" value="{OPTIONS}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_BV_VALUES}:<br /><br /><span class="gensmall">{L_FIELD_VALUES_EXPLAIN}</span></td>
<td class="row2"> 
<input type="text" maxlength="255" size="50" name="values" value="{VALUES}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_BV_TYPE}:</td>
<td class="row2">
<select name="type" class="post">{TYPE}</select>
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_BV_BLOCK}:</td>
<td class="row2">
<select name="block" class="post">{BLOCK}</select>
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