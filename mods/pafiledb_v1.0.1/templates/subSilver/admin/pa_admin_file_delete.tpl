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

<h1>{L_DFILETITLE}</h1>

<p>{L_FILEEXPLAIN}</p>

<form action="{S_DELETE_FILE_ACTION}" method="post"><table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead">{L_DFILETITLE}</th>
  </tr>
	{ROW}
  <tr>
	<td align="center" class="catBottom" colspan="2"><input class="liteoption" type="submit" value="{L_DFILETITLE}" name="B1"><input type="hidden" name="action" value="admin"><input type="hidden" name="ad" value="file"><input type="hidden" name="file" value="delete"><input type="hidden" name="delete" value="do"></td>
  </tr>
</table>
</form>
