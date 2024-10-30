<h1>{L_SETTINGSTITLE}</h1>

<p>{L_SETTINGSEXPLAIN}</p>

<form action="{S_SETTINGS_ACTION}" method="post" name="form"><table width="100%" cellpadding="3" cellspacing="1" class="forumline">
<tr>
	<th colspan="2" class="thHead">{L_SETTINGS}</th>
  </tr> 
  <tr>
	<td class="row1">{L_SITENAME}<br><span class="gensmall">{L_SITENAMEINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[sitename]" value="{SETTINGS_SITENAME}" /></td>
  </tr>
  <tr>
	<td width="50%" class="row1">{L_DBNAME}<br><span class="gensmall">{L_DBNAMEINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[dbname]" value="{SETTINGS_DBNAME}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_HPURL}<br><span class="gensmall">{L_HPURLINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[hpurl]" value="{SETTINGS_HOMEURL}" /></td>
   </tr>
   <tr>
	<td class="row1">{L_DBURL}<br><span class="gensmall">{L_DBURLINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[dburl]" value="{SETTINGS_DBURL}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_TOPNUM}<br><span class="gensmall">{L_TOPNUMINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="5" maxlength="5" name="form[top]" value="{SETTINGS_TOPNUMBER}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_NFDAYS}<br><span class="gensmall">{L_NFDAYSINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="5" maxlength="5" name="form[new]" value="{SETTINGS_NEWDAYS}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_SHOW_VIEWALL}<br><span class="gensmall">{L_VIEWALL_INFO}</span></td>
	<td class="row2"><select name="form[viewall]" class="forminput">{VIEWALL_DROPMENU}</select></td>
  </tr>
  <tr>
	<td class="row1">{L_SHOW_SS}<br><span class="gensmall">{L_SS_INFO}</span></td>
	<td class="row2"><select name="form[showss]" class="forminput">{SS_DROPMENU}</select></td>
  </tr>
  <tr>
	<td class="row1">{L_DISABLE}<br><span class="gensmall">{L_DISABLE_INFO}</span></td>
	<td class="row2"><select name="form[disable]" class="forminput">{DISABLE_DROPMENU}</select></td>
  </tr>
  <tr>
	<th colspan="2" class="thHead">{L_COMMENT_SETTINGS}</th>
  </tr>
  <tr>
	<td class="row1">{L_ALLOW_HTML}</td>
	<td class="row2"><select name="form[allowhtml]" class="forminput">{HTML_DROPMENU}</select></td>
  </tr> 
  <tr>
	<td class="row1">{L_ALLOW_BBCODE}</td>
	<td class="row2"><select name="form[allowbbcode]" class="forminput">{BBCODE_DROPMENU}</select></td>
  </tr> 
  <tr>
	<td class="row1">{L_ALLOW_SMILIES}</span></td>
	<td class="row2"><select name="form[allows]" class="forminput">{SMILIES_DROPMENU}</select></td>
  </tr> 
  <tr>
	<td class="row1">{L_ALLOW_LINKS}</td>
	<td class="row2"><select name="form[allowl]" class="forminput">{LINKS_DROPMENU}</select></td>
  </tr>
  <tr>
	<td class="row1">{L_LINKS_MESSAGE}<br><span class="gensmall">{L_LINKS_MESSAGE_INFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[linkm]" value="{MESSAGE_LINK}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_ALLOW_IMAGE}</span></td>
	<td class="row2"><select name="form[allowi]" class="forminput">{IMAGE_DROPMENU}</select></td>
  </tr>
    <tr>
	<td class="row1">{L_IMAGE_MESSAGE}<br><span class="gensmall">{L_IMAGE_MESSAGE_INFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[imagem]" value="{MESSAGE_IMAGE}" /></td>
  </tr>
   <tr>
	<td class="row1">{L_MAX_CHAR}<br><span class="gensmall">{L_MAX_CHAR_INFO}</span></td>
	<td class="row2"><input type="text" class="post" size="6" name="form[max_char]" value="{MAX_CHAR}" /></td>
  </tr>
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_SUBMIT}" name="B1"><input type="hidden" name="action" value="admin"><input type="hidden" name="ad" value="settings"><input type="hidden" name="settings" value="do"></td>
  </tr>
</table>	
</form>
