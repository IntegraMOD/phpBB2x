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

<form action="{S_ADD_FILE_ACTION}" method="post" name="form">

<h1>{L_AFILETITLE}</h1>

<p>{L_FILEEXPLAIN}</p>

<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_AFILETITLE}</th>
  </tr>
  <tr>
	<td width="50%" class="row1">{L_FILENAME}<br><span class="gensmall">{L_FILENAMEINFO}</span></td>
	<td class="row2">
		<input type="text" class="forminput" size="50" name="form[name]">
	</td>
  </tr>
  <tr>
	<td class="row1">{L_FILESD}<br><span class="gensmall">{L_FILESDINFO}</span></td>
	<td class="row2">
		<input type="text" class="forminput" size="50" name="form[shortdesc]">
	</td>
  </tr>
  <tr>
	<td class="row1">{L_FILELD}<br><span class="gensmall">{L_FILELDINFO}</span></td>
	<td class="row2">		
        <textarea rows="6" name="form[longdesc]" cols="32"></textarea> 
	</td>
  </tr>
  <tr>
	<td class="row1">{L_FILECREATOR}<br><span class="gensmall">{L_FILECREATORINFO}</span></td>
	<td class="row2">
		<input type="text" class="forminput" size="50" name="form[creator]">
	</td>
  </tr>
  <tr>
	<td class="row1">{L_FILEVERSION}<br><span class="gensmall">{L_FILEVERSIONINFO}</span></td>
	<td class="row2">
		<input type="text" class="forminput" size="50" name="form[version]">
	</td>
  </tr>
  <tr>
	<td class="row1">{L_FILESS}<br><span class="gensmall">{L_FILESSINFO}<a href="{U_UPLOAD_SS}">{L_FILESSUPLOAD}</a></span></td>
	<td class="row2">
		<input type="text" class="forminput" size="50" name="ssurl">
	</td>
  </tr>
  <tr>	
	<td class="row1">{L_FILEDOCS}<br><span class="gensmall">{L_FILEDOCSINFO}</span></td>
	<td class="row2">
		<input type="text" class="forminput" size="50" name="form[docs]">
	</td>
  </tr>
  <tr>
	<td class="row1">{L_FILEURL}<br><span class="gensmall">{L_FILEURLINFO}<a href="{U_UPLOAD_FILE}">{L_FILEURLUPLOAD}</a></span></td>
	<td class="row2">
		<input type="text" class="forminput" size="50" name="dlurl" value="{DLURL}">
	</td>
  </tr>
  <tr>
	<td class="row1">{L_FILEPI}<br><span class="gensmall">{L_FILEPIINFO}</span></td>
	<td class="row2">{POSTICONS}
	</td>
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
		<option value="0" selected>{L_NO}</option>
		<option value="1">{L_YES}</option>
		</select>
	</td>
  </tr>
<!-- BEGIN custom_field -->
  <tr>
	<td class="row1">{custom_field.CUSTOM_NAME}<br><span class="gensmall">{custom_field.CUSTOM_DESCRIPTION}</span></td>
	<td class="row2">
		<input type="text" size="50" name="custom[{custom_field.CUSTOM_ID}]" class="forminput">
	</td>
  </tr>
<!-- END custom_field -->
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_AFILETITLE}" name="B1"><input type="hidden" name="action" value="admin"><input type="hidden" name="ad" value="file"><input type="hidden" name="file" value="add"><input type="hidden" name="add" value="do"></td>
  </tr>
</table>	
</form>
