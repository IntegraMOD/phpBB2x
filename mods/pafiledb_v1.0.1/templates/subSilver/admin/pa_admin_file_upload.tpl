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
<!-- BEGIN upload_do -->
	
	<script language="JavaScript">
        function seturl(url) {
        opener.document.form.{FIELD}.value = url;
	}
	</script>
<!-- END upload_do -->
<!-- BEGIN upload -->

<h1>{L_UPLOAD}</h1>

<p>{L_FILEEXPLAIN}</p>

<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_UPLOAD}</th>
  </tr>
  <tr>
	<td class="row1">{L_UPLOADINFO}:</td>
	<td class="row2"><FORM ENCTYPE="multipart/form-data" ACTION="{S_UPLOAD_FILE_ACTION}" METHOD=POST><INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="100000000000"><INPUT NAME="userfile" TYPE="file" class="post"></td>
  <tr>
	<td colspan="2" align="center" class="catBottom"><input class="liteoption" type="submit" value="{L_UPLOAD}"><input type="hidden" name="field" value="{FIELD}"><input type="hidden" name="file" value="upload"><input type="hidden" name="upload" value="do"></td>
  </tr>
</table>
</form>
<!-- END upload -->
<!-- BEGIN upload_do -->
<table class="forumline" width="100%" cellspacing="1" cellpadding="3">
	<tr>
		<th class="thHead">{L_UPLOAD_DO}</th>
	</tr>
	<tr> 
		<td class="row1" align="center" height="30"<span class="genmed">{L_UPLOAD_MESSAGE}</span></td>
	</tr>
</table> 
<!-- END upload_do -->
