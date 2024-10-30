
<SCRIPT LANGUAGE='JAVASCRIPT' TYPE='TEXT/JAVASCRIPT'>
 <!--
/****************************************************
     AUTHOR: WWW.CGISCRIPT.NET, LLC
     URL: http://www.cgiscript.net
     Use the code for FREE but leave this message intact.
     Download your FREE CGI/Perl Scripts today!
     ( http://www.cgiscript.net/scripts.htm )
****************************************************/
var win=null;
function NewWindow(mypage,myname,w,h,pos,infocus){
if(pos=="random"){myleft=(screen.width)?Math.floor(Math.random()*(screen.width-w)):100;mytop=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):100;}
if(pos=="center"){myleft=(screen.width)?(screen.width-w)/2:100;mytop=(screen.height)?(screen.height-h)/2:100;}
else if((pos!='center' && pos!="random") || pos==null){myleft=0;mytop=20}
settings="width=" + w + ",height=" + h + ",top=" + mytop + ",left=" + myleft + ",scrollbars=yes,location=no,directories=no,status=yes,menubar=no,toolbar=no,resizable=no";win=window.open(mypage,myname,settings);
win.focus();}
// -->
</script>
<form action="{S_EDIT_FILE_ACTION}" method="post" name="form">
<h1>{L_EFILETITLE}</h1>

<p>{L_FILEEXPLAIN}</p>

<!-- BEGIN file_form -->
<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_EFILETITLE}</th>
  </tr>
  <tr>
	<td width="50%" class="row1">{L_FILENAME}<br><span class="gensmall">{L_FILENAMEINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[name]" value="{FFILE_NAME}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_FILESD}<br><span class="gensmall">{L_FILESDINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[shortdesc]" value="{FFILE_DESC}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_FILELD}<br><span class="gensmall">{L_FILELDINFO}</span></td>
	<td class="row2"><textarea rows="6" name="form[longdesc]" cols="32">{FFILE_LONGDESC}</textarea></td>
  </tr>
  <tr>
	<td class="row1">{L_FILECREATOR}<br><span class="gensmall">{L_FILECREATORINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[creator]" value="{FFILE_CREATOR}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_FILEVERSION}<br><span class="gensmall">{L_FILEVERSIONINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[version]" value="{FFILE_VERSION}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_FILESS}<br><span class="gensmall">{L_FILESSINFO}<a href="{U_UPLOAD_SS}">{L_FILESSUPLOAD}</a></span></td>
	<td class="row2"><input type="text" class="post" size="50" name="ssurl" value="{FFILE_SSURL}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_FILEDOCS}<br><span class="gensmall">{L_FILEDOCSINFO}</span></td>
	<td class="row2"><input type="text" class="post" size="50" name="form[docs]" value="{FFILE_DOCSURL}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_FILEURL}<br><span class="gensmall">{L_FILEURLINFO}<a href="{U_UPLOAD_FILE}">{L_FILEURLUPLOAD}</a></span></td>
	<td class="row2"><input type="text" class="post" size="50" name="dlurl" value="{FFILE_DLURL}" /></td>
  </tr>
  <tr>
	<td class="row1">{L_FILEPI}<br><span class="gensmall">{L_FILEPIINFO}</span></td>
	<td class="row2">{POSTICONS}</td>
  </tr>
  <tr>
	<td class="row1">{L_FILECAT}<br><span class="gensmall">{L_FILECATINFO}</span></td>
	<td class="row2">
		<select name="form[category]" class="forminput">
		{DROPMENU}
		</select>
	</td>
  </tr>
  <tr>
	<td class="row1">{L_FILELICENSE}<br><span class="gensmall">{L_FILELICENSEINFO}</span></td>
	<td class="row2">
		<select name="form[license]" class="forminput">
		<option value="0">{L_NONE}</option>
		{LDROPMENU}
		</select>
	</td>
  </tr>
  <tr>
	<td class="row1">{L_FILEPIN}<br><span class="gensmall">{L_FILEPININFO}</span></td>
	<td class="row2">
		<select name="form[pin]" class="forminput">
		{PDROPMENU}
		</select>
	</td>
  </tr>
  <tr>
	<td class="row1">{L_FILEDLS}</td>
	<td class="row2"><input type="text" class="post" size="10" name="form[dls]" value="{FFILE_DLS}" /></td>
  </tr>
<!-- BEGIN custom_field -->
  <tr>
	<td class="row1">{file_form.custom_field.CUSTOM_NAME}<br><span class="gensmall">{file_form.custom_field.CUSTOM_DESCRIPTION}</span></td>
	<td class="row2">
		<input type="text" size="50" name="custom[{file_form.custom_field.CUSTOM_ID}]" 
		<!-- BEGIN custom_field_data --> 
		value="{file_form.custom_field.custom_field_data.CUSTOM_NAME_DATA}" class="post">
		<!-- END custom_field_data -->
	</td>
  </tr>
<!-- END custom_field -->
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="mainoption" type="submit" value="{L_EFILETITLE}" name="B1"><input type="hidden" name="file" value="edit"><input type="hidden" name="edit" value="do"><input type="hidden" name="id" value="{SELECT}"></td>
  </tr>
</table>
</form>
<!-- END file_form -->

<!-- BEGIN file_edit -->
<form action="{S_EDIT_FILE_ACTION}" method="post"><table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_EFILETITLE}</th>
  </tr>
	{ROW}
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_EFILETITLE}" name="B1">		<input type="hidden" name="file" value="edit"><input type="hidden" name="edit" value="form"></td>
  </tr>
</table>
</form>
<!-- END file_edit -->
