<script>
<!--

var allAre = 0; 
function openAll() 
{ 
  var other_pic = ""; 
  var list = ""; 
  if( document.all ) 
  { // This takes care of IE 
    list = document.all("oI[]") 
    //document.all.div.length 
    for( var i = 0; i < list.length; i++ ) 
    { 
      //alert( "list["+i+"] is "+list[i].id ); 
      list[i].click(); 
      //list[i].click(); 
    } 
  } 
  else if( document.getElementsByName ) 
  { // This takes care of Firefox 
    other_pic = document.getElementById( "top_folder" ); 
    list = document.getElementsByName( "oF[]" ); 
    for( var i = 0; i < list.length; i++ ) 
    { 
      //alert( "list["+i+"] is "+list[i].id ); 
      handleClick( list[i].id ); 
      //list[i].click(); 
    } 
  } 
    
  if( allAre == 0 ) 
  { 
    allAre = 1; 
    other_pic.innerHTML = "{ARROWDOWN_IMG}"; 
  } 
  else 
  { 
    allAre = 0; 
    other_pic.innerHTML = "{ARROWRIGHT_IMG}";
  } 
  
  return; 
} 

function selectAll() 
{ 
  if( document.getElementsByName ) 
  { 
    var list = document.getElementsByName( 'u[]' ); 
    
    for( var i = 0; i < list.length; i++ ) 
    { 
      list[i].checked = !list[i].checked; 
    } 
  } 
} 

function handleClick(id) 
{ 
  var obj = ""; 
  var pic_obj = ""; 

  // Check browser compatibility 
  if( document.getElementById ) 
  { 
    obj = document.getElementById( "user" + id ); 
    pic_obj = document.getElementById( id ); 
  } 
  else if( document.all ) 
  { 
    obj = document.all[ "user" + id ]; 
    pic_obj = document.all[ id ]; 
  } 
  else if( document.layers ) 
  { 
    obj = document.layers[ "user" + id ]; 
    pic_obj = document.layers[ id ]; 
  } 
  else 
  { 
    return 1; 
  } 

  if( !obj ) 
  { 
    return 1; 
  } 
  else if( obj.style ) 
  { 
    if( obj.style.display == "none" ) 
    { 
      obj.style.display = ""; 
      pic_obj.innerHTML = "{ARROWDOWN_IMG}"; 
    } 
    else 
    { 
      obj.style.display = "none"; 
      pic_obj.innerHTML = "{ARROWRIGHT_IMG}"; 
    } 
  } 
  else 
  { 
    obj.visibility = "show"; 
  } 
} 
//-->
</script>

<script> 
<!-- Begin 
   function menzselector(status) 
   { 
      for (i = 0; i < document.userlistform.length; i++) 
      { 
         document.userlistform.elements[i].checked = status; 
      } 
   } 
//  End --> 
</script>

<h1>{L_TITLE} 2.0.6c</h1>

<p>{L_DESCRIPTION}</p>

<form action="{S_ACTION}" method="post">
<table width="100%" cellpadding="3" cellspacing="1" border="0">
	<tr>
		<td width="100%">&nbsp;</td>
		<td align="right" nowrap="nowrap"><span class="gen">{L_SORT_BY}</td>
      	<td nowrap="nowrap">{S_SELECT_SORT}</td> 
      	<td nowrap="nowrap">{S_SELECT_SORT_ORDER}</td>
		<td nowrap="nowrap"><span class="gen">{L_SHOW}</span></td>
		<td nowrap="nowrap"><input type="text" size="5" value="{S_SHOW}" name="show" class="post" /></td>
		<td nowrap="nowrap">{S_HIDDEN_FIELDS}<input type="submit" value="{S_SORT}" name="change_sort" class="liteoption" /></td>
	</tr>
</table>
</form>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center"> 
	<tr> 
		<!-- BEGIN alphanumsearch --> 
		<td align="left" width="{alphanumsearch.SEARCH_SIZE}"><span class="genmed"> 
			<a href="{alphanumsearch.SEARCH_LINK}" class="genmed">{alphanumsearch.SEARCH_TERM}</a> 
		</span></td> 
		<!-- END alphanumsearch --> 
	</tr> 
</table>

<form name="userlistform" action="{S_ACTION}" method="post"> 
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
		<th width="3%"><input type="checkbox" onclick="javascript:selectAll();" /></th>
	    <th width="2%" onClick="javascript:openAll();" id="top_folder">{ARROWRIGHT_IMG}</th>
		<th width="15%">{L_USERNAME}</th>
		<th width="7%">{L_ACTIVE}</th>
		<th width="15%">{L_JOINED}</th>
		<th width="20%">{L_ACTIVITY}</th>
		<th width="8%">{L_POSTS}</th>
		<th width="15%">{L_WEBSITE}</th>
		<th width="15%">{L_EMAIL}</th>
	</tr>
	<!-- BEGIN user_row -->
	<tr>
		<td class="{user_row.ROW_CLASS}" nowrap="nowrap"><input type="checkbox" name="{S_USER_VARIABLE}[]" value="{user_row.USER_ID}" /></td>
		<td class="{user_row.ROW_CLASS}" nowrap="nowrap"><span id="oI[]" onClick="javascript:handleClick('{user_row.USER_ID}');"><div id="{user_row.USER_ID}" name="oF[]">{ARROWRIGHT_IMG}</div></span></td>
		<td class="{user_row.ROW_CLASS}"><span class="gen" {user_row.STYLE_COLOR}><b><a href="{user_row.U_MANAGE}" class="gen" {user_row.STYLE_COLOR}>{user_row.USERNAME}</a></b></span></td>
		<td class="{user_row.ROW_CLASS}"><span class="gen">{user_row.ACTIVE}</span></td>
		<td class="{user_row.ROW_CLASS}"><span class="gen">{user_row.JOINED}</span></td>
		<td class="{user_row.ROW_CLASS}"><span class="gen">{user_row.LAST_ACTIVITY}</span></td>
		<td class="{user_row.ROW_CLASS}"><span class="gen">{user_row.POSTS}</span></td>
		<td class="{user_row.ROW_CLASS}"><a href="{user_row.U_WEBSITE}" class="gen" target="_blank">{user_row.U_WEBSITE}</a></td>
		<td class="{user_row.ROW_CLASS}"><a href="mailto:{user_row.EMAIL}" class="gen">{user_row.EMAIL}</a></td>
	</tr>
	<tr id="user{user_row.USER_ID}" style="display: none">
		<td class="{user_row.ROW_CLASS}">&nbsp;</td>
		<td class="{user_row.ROW_CLASS}" colspan="8" width="100%">
			<table  width="100%" cellpadding="3" cellspacing="1" border="0">
				<tr>
					<td class="{user_row.ROW_CLASS}" width="33%"><span class="gen"><b>{L_RANK}:</b> {user_row.RANK} {user_row.I_RANK}</td>
					<td class="{user_row.ROW_CLASS}" width="34%"><span class="gen"><b>{L_GROUP}:</b>
						<!-- BEGIN group_row -->
						<a href="{user_row.group_row.U_GROUP}" class="gen" target="_blank">{user_row.group_row.GROUP_NAME}</a> ({user_row.group_row.GROUP_STATUS})<br />
						<!-- END group_row -->
						<!-- BEGIN no_group_row -->
						{user_row.no_group_row.L_NONE}<br />
						<!-- END no_group_row -->
					</span></td>
					<td class="{user_row.ROW_CLASS}" width="33%"><span class="gen"><b>{L_POSTS}:</b> {user_row.POSTS} <a href="{user_row.U_SEARCH}" class="gen" target="_blank">{L_FIND_ALL_POSTS}</a></span></td>
				</tr>
				<tr>
					<td class="{user_row.ROW_CLASS}" colspan="3"><span class="gen"><b>{L_WEBSITE}:</b> <a href="{user_row.U_WEBSITE}" class="gen" target="_blank">{user_row.U_WEBSITE}</a></span></td>
				</tr>
				<tr>
					<td class="{user_row.ROW_CLASS}"><span class="gen">
						<a href="{user_row.U_MANAGE}" class="gen">{L_MANAGE}</a><br /> 
						<a href="{user_row.U_PERMISSIONS}" class="gen">{L_PERMISSIONS}</a><br /> 
						<a href="mailto:{user_row.EMAIL}" class="gen">{L_EMAIL} [ {user_row.EMAIL} ]</a><br />
						<a href="{user_row.U_PM}" class="gen">{L_PM}</a>
					</span></td>
					<td colspan="2" class="{user_row.ROW_CLASS}">{user_row.I_AVATAR}</td>
				</tr>
			</table>
		</td>
	</tr>
	<!-- END user_row -->
	   <tr> 
      <td class="catbottom" colspan="9"> 
         <input type="button" name="SelectAll" value="{L_SELECT_ALL}" onclick="menzselector(true);" /> <input type="button" name="DeselectAll" value="{L_DESELECT_ALL}" onclick="menzselector(false);" /> 
      </td> 
   </tr>
	<tr>
		<td class="catbottom" colspan="9">
			<select name="mode" class="post">
				<option value="">{L_SELECT}</option>
				<option value="delete">{L_DELETE}</option>
				<option value="ban">{L_BAN}</option>
	            <option value="unban">{L_UNBAN}</option> 
				<option value="activate">{L_ACTIVATE_DEACTIVATE}</option>
				<option value="group">{L_ADD_GROUP}</option>
			</select>
			<input type="submit" name="go" value="{L_GO}" class="mainoption" />
		</td>
	</tr>
</table> 
</form> 

<table width="100%" cellpadding="3" cellspacing="1" border="0"> 
   <tr> 
      <td align="left" width="50%"><span class="gen">{PAGE_NUMBER}</span></td> 
      <td align="right" width="50%"><span class="gen">{PAGINATION}</span></td> 
   </tr> 
</table>

<br clear="all" />