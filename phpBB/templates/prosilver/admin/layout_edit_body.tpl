<div class="maintitle">{L_LAYOUT_TITLE}</div>
<br />
<div class="genmed">{L_LAYOUT_TEXT}</div>
<br />
<form method="post" action="{S_LAYOUT_ACTION}">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th colspan="2">{L_EDIT_LAYOUT}</th>
</tr>

<tr> 
<td align="right" class="row1">{L_LAYOUT_NAME}:</td>
<td class="row2"> 
<input type="text" maxlength="100" size="30" name="name" value="{NAME}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_LAYOUT_PAGETITLE}:</td>
<td class="row2"> 
<input type="text" maxlength="100" size="30" name="pagetitle" value="{PAGETITLE}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_LAYOUT_TEMPLATE}:</td>
<td class="row2"> 
<select name="template" class="post">{TEMPLATE}</select>
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_LAYOUT_FORUM_WIDE}:</td>
<td class="row2"> 
<input type="radio" name="forum_wide" value="1" {FORUM_WIDE} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="forum_wide" value="0" {NOT_FORUM_WIDE} /> {L_NO}</td>
</tr>

<tr> 
<td align="right" class="row1">{L_LAYOUT_COLLAPSE}:</td>
<td class="row2"> 
<input type="radio" name="page_collapse" value="1" {PAGE_COLLAPSE} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="page_collapse" value="0" {NOT_PAGE_COLLAPSE} /> {L_NO}</td>
</tr>

<tr> 
<td align="right" class="row1">{L_LAYOUT_VIEW}:</td>
<td class="row2"> 
<select name="view" class="post">{VIEW}</select>
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_LAYOUT_GROUPS}:</td>
<td class="row2"> 
{GROUPS}
</tr>

<tr> 
<td class="cat" colspan="2" align="center">{S_HIDDEN_FIELDS} 
<input type="submit" name="save" value="{L_SUBMIT}" class="mainoption" />
</td>
</tr>
</table>
</form>
<br />