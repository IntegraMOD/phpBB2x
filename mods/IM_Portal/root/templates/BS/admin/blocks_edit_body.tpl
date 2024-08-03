<script language="JavaScript" type="text/javascript">
<!--
// bbCode control by
// subBlue design
// www.subBlue.com

// Startup variables
var imageTag = false;
var theSelection = false;

// Check for Browser & Platform for PC & IE specific bits
// More details from: http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html
var clientPC = navigator.userAgent.toLowerCase(); // Get client info
var clientVer = parseInt(navigator.appVersion); // Get browser version

var is_ie = ((clientPC.indexOf("msie") != -1) && (clientPC.indexOf("opera") == -1));
var is_nav = ((clientPC.indexOf('mozilla')!=-1) && (clientPC.indexOf('spoofer')==-1)
                && (clientPC.indexOf('compatible') == -1) && (clientPC.indexOf('opera')==-1)
                && (clientPC.indexOf('webtv')==-1) && (clientPC.indexOf('hotjava')==-1));
var is_moz = 0;

var is_win = ((clientPC.indexOf("win")!=-1) || (clientPC.indexOf("16bit") != -1));
var is_mac = (clientPC.indexOf("mac")!=-1);

// Helpline messages
b_help = "{L_BBCODE_B_HELP}";
i_help = "{L_BBCODE_I_HELP}";
u_help = "{L_BBCODE_U_HELP}";
q_help = "{L_BBCODE_Q_HELP}";
c_help = "{L_BBCODE_C_HELP}";
l_help = "{L_BBCODE_L_HELP}";
o_help = "{L_BBCODE_O_HELP}";
p_help = "{L_BBCODE_P_HELP}";
w_help = "{L_BBCODE_W_HELP}";
a_help = "{L_BBCODE_A_HELP}";
s_help = "{L_BBCODE_S_HELP}";
f_help = "{L_BBCODE_F_HELP}";

// Define the bbCode tags
bbcode = new Array();
bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]');
imageTag = false;

// Shows the help messages in the helpline window
function helpline(help) {
	document.post.helpbox.value = eval(help + "_help");
}


// Replacement for arrayname.length property
function getarraysize(thearray) {
	for (i = 0; i < thearray.length; i++) {
		if ((thearray[i] == "undefined") || (thearray[i] == "") || (thearray[i] == null))
			return i;
		}
	return thearray.length;
}

// Replacement for arrayname.push(value) not implemented in IE until version 5.5
// Appends element to the array
function arraypush(thearray,value) {
	thearray[ getarraysize(thearray) ] = value;
}

// Replacement for arrayname.pop() not implemented in IE until version 5.5
// Removes and returns the last element of an array
function arraypop(thearray) {
	thearraysize = getarraysize(thearray);
	retval = thearray[thearraysize - 1];
	delete thearray[thearraysize - 1];
	return retval;
}


function emoticon(text) {
	var txtarea = document.post.message;
	text = ' ' + text + ' ';
	if (txtarea.createTextRange && txtarea.caretPos) {
		var caretPos = txtarea.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
		txtarea.focus();
	} else {
		txtarea.value  += text;
		txtarea.focus();
	}
}

function bbfontstyle(bbopen, bbclose) {
	var txtarea = document.post.message;

	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (!theSelection) {
			txtarea.value += bbopen + bbclose;
			txtarea.focus();
			return;
		}
		document.selection.createRange().text = bbopen + theSelection + bbclose;
		txtarea.focus();
		return;
	}
	else if (txtarea.selectionEnd && (txtarea.selectionEnd - txtarea.selectionStart > 0))
	{
		mozWrap(txtarea, bbopen, bbclose);
		return;
	}
	else
	{
		txtarea.value += bbopen + bbclose;
		txtarea.focus();
	}
	storeCaret(txtarea);
}


function bbstyle(bbnumber) {
	var txtarea = document.post.message;

	txtarea.focus();
	donotinsert = false;
	theSelection = false;
	bblast = 0;

	if (bbnumber == -1) { // Close all open tags & default button names
		while (bbcode[0]) {
			butnumber = arraypop(bbcode) - 1;
			txtarea.value += bbtags[butnumber + 1];
			buttext = eval('document.post.addbbcode' + butnumber + '.value');
			eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
		}
		imageTag = false; // All tags are closed including image tags :D
		txtarea.focus();
		return;
	}

	if ((clientVer >= 4) && is_ie && is_win)
	{
		theSelection = document.selection.createRange().text; // Get text selection
		if (theSelection) {
			// Add tags around selection
			document.selection.createRange().text = bbtags[bbnumber] + theSelection + bbtags[bbnumber+1];
			txtarea.focus();
			theSelection = '';
			return;
		}
	}
	else if (txtarea.selectionEnd && (txtarea.selectionEnd - txtarea.selectionStart > 0))
	{
		mozWrap(txtarea, bbtags[bbnumber], bbtags[bbnumber+1]);
		return;
	}
	
	// Find last occurance of an open tag the same as the one just clicked
	for (i = 0; i < bbcode.length; i++) {
		if (bbcode[i] == bbnumber+1) {
			bblast = i;
			donotinsert = true;
		}
	}

	if (donotinsert) {		// Close all open tags up to the one just clicked & default button names
		while (bbcode[bblast]) {
				butnumber = arraypop(bbcode) - 1;
				txtarea.value += bbtags[butnumber + 1];
				buttext = eval('document.post.addbbcode' + butnumber + '.value');
				eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
				imageTag = false;
			}
			txtarea.focus();
			return;
	} else { // Open tags
	
		if (imageTag && (bbnumber != 14)) {		// Close image tag before adding another
			txtarea.value += bbtags[15];
			lastValue = arraypop(bbcode) - 1;	// Remove the close image tag from the list
			document.post.addbbcode14.value = "Img";	// Return button back to normal state
			imageTag = false;
		}
		
		// Open tag
		txtarea.value += bbtags[bbnumber];
		if ((bbnumber == 14) && (imageTag == false)) imageTag = 1; // Check to stop additional tags after an unclosed image tag
		arraypush(bbcode,bbnumber+1);
		eval('document.post.addbbcode'+bbnumber+'.value += "*"');
		txtarea.focus();
		return;
	}
	storeCaret(txtarea);
}

// From http://www.massless.org/mozedit/
function mozWrap(txtarea, open, close)
{
	var selLength = txtarea.textLength;
	var selStart = txtarea.selectionStart;
	var selEnd = txtarea.selectionEnd;
	if (selEnd == 1 || selEnd == 2) 
		selEnd = selLength;

	var s1 = (txtarea.value).substring(0,selStart);
	var s2 = (txtarea.value).substring(selStart, selEnd)
	var s3 = (txtarea.value).substring(selEnd, selLength);
	txtarea.value = s1 + open + s2 + close + s3;
	return;
}

// Insert at Claret position. Code from
// http://www.faqts.com/knowledge_base/view.phtml/aid/1052/fid/130
function storeCaret(textEl) {
	if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
}

//-->
</script>
<div class="maintitle">{L_BLOCKS_TITLE}</div>
<br />
<div class="genmed">{L_BLOCKS_TEXT}</div>
<br />
<form method="post" action="{S_BLOCKS_ACTION}" name="post">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th colspan="2">{L_EDIT_BLOCK}</th>
</tr>

<tr> 
<td align="right" class="row1">{L_B_TITLE}:</td>
<td class="row2"> 
<input type="text" maxlength="60" size="30" name="title" value="{TITLE}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_TITLE_IMAGE}:<br />{L_B_TITLE_IMAGE_EXPLAIN}</td>
<td class="row2"> 
<input type="text" maxlength="100" size="30" name="title_image" value="{TITLE_IMAGE}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_POSITION}:</td>
<td class="row2"> 
<select name="bposition" class="post">{POSITION}</select>
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_ACTIVE}:</td>
<td class="row2"> 
<input type="radio" name="active" value="1" {ACTIVE} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="active" value="0" {NOT_ACTIVE} /> {L_NO}</td>
</tr>

<tr> 
<td align="right" class="row1">
		<table width="100%" border="0" cellspacing="0" cellpadding="1">
		  <tr> 
			<td align="right">{L_B_CONTENT}:<br /><br /><br /></td>
		  </tr>
		  <tr> 
			<td valign="middle" align="center"> <br />
			  <table width="100" border="0" cellspacing="0" cellpadding="5">
				<tr align="center"> 
				  <td colspan="{S_SMILIES_COLSPAN}" class="gensmall"><b>{L_EMOTICONS}</b></td>
				</tr>
				<!-- BEGIN smilies_row -->
				<tr align="center" valign="middle"> 
				  <!-- BEGIN smilies_col -->
				  <td><a href="javascript:emoticon('{smilies_row.smilies_col.SMILEY_CODE}')"><img src="{smilies_row.smilies_col.SMILEY_IMG}" border="0" alt="{smilies_row.smilies_col.SMILEY_DESC}" title="{smilies_row.smilies_col.SMILEY_DESC}" /></a></td>
				  <!-- END smilies_col -->
				</tr>
				<!-- END smilies_row -->
				<!-- BEGIN switch_smilies_extra -->
				<tr align="center"> 
				  <td colspan="{S_SMILIES_COLSPAN}"><span  class="nav"><a href="{U_MORE_SMILIES}" onclick="window.open('{U_MORE_SMILIES}', '_phpbbsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=250');return false;" target="_phpbbsmilies" class="nav">{L_MORE_SMILIES}</a></span></td>
				</tr>
				<!-- END switch_smilies_extra -->
			  </table>
			</td>
		  </tr>
		</table>
</td>
<td class="row2">
<table width="450" border="0" cellspacing="0" cellpadding="2">
		  <tr align="center" valign="middle"> 
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onClick="bbstyle(0)" onMouseOver="helpline('b')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onClick="bbstyle(2)" onMouseOver="helpline('i')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onClick="bbstyle(4)" onMouseOver="helpline('u')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onClick="bbstyle(6)" onMouseOver="helpline('q')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="c" name="addbbcode8" value="Code" style="width: 40px" onClick="bbstyle(8)" onMouseOver="helpline('c')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="l" name="addbbcode10" value="List" style="width: 40px" onClick="bbstyle(10)" onMouseOver="helpline('l')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="o" name="addbbcode12" value="List=" style="width: 40px" onClick="bbstyle(12)" onMouseOver="helpline('o')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="p" name="addbbcode14" value="Img" style="width: 40px"  onClick="bbstyle(14)" onMouseOver="helpline('p')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onClick="bbstyle(16)" onMouseOver="helpline('w')" />
			  </span></td>
		  </tr>
		  <tr> 
			<td colspan="9"> 
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr> 
				  <td><span class="genmed"> &nbsp;{L_FONT_COLOR}: 
					<select name="addbbcode18" onChange="bbfontstyle('[color=' + this.form.addbbcode18.options[this.form.addbbcode18.selectedIndex].value + ']', '[/color]');this.selectedIndex=0;" onMouseOver="helpline('s')">
					  <option style="color:black; background-color: {T_TD_COLOR1}" value="{T_FONTCOLOR1}" class="genmed">{L_COLOR_DEFAULT}</option>
					  <option style="color:darkred; background-color: {T_TD_COLOR1}" value="darkred" class="genmed">{L_COLOR_DARK_RED}</option>
					  <option style="color:red; background-color: {T_TD_COLOR1}" value="red" class="genmed">{L_COLOR_RED}</option>
					  <option style="color:orange; background-color: {T_TD_COLOR1}" value="orange" class="genmed">{L_COLOR_ORANGE}</option>
					  <option style="color:brown; background-color: {T_TD_COLOR1}" value="brown" class="genmed">{L_COLOR_BROWN}</option>
					  <option style="color:yellow; background-color: {T_TD_COLOR1}" value="yellow" class="genmed">{L_COLOR_YELLOW}</option>
					  <option style="color:green; background-color: {T_TD_COLOR1}" value="green" class="genmed">{L_COLOR_GREEN}</option>
					  <option style="color:olive; background-color: {T_TD_COLOR1}" value="olive" class="genmed">{L_COLOR_OLIVE}</option>
					  <option style="color:cyan; background-color: {T_TD_COLOR1}" value="cyan" class="genmed">{L_COLOR_CYAN}</option>
					  <option style="color:blue; background-color: {T_TD_COLOR1}" value="blue" class="genmed">{L_COLOR_BLUE}</option>
					  <option style="color:darkblue; background-color: {T_TD_COLOR1}" value="darkblue" class="genmed">{L_COLOR_DARK_BLUE}</option>
					  <option style="color:indigo; background-color: {T_TD_COLOR1}" value="indigo" class="genmed">{L_COLOR_INDIGO}</option>
					  <option style="color:violet; background-color: {T_TD_COLOR1}" value="violet" class="genmed">{L_COLOR_VIOLET}</option>
					  <option style="color:white; background-color: {T_TD_COLOR1}" value="white" class="genmed">{L_COLOR_WHITE}</option>
					  <option style="color:black; background-color: {T_TD_COLOR1}" value="black" class="genmed">{L_COLOR_BLACK}</option>
					</select> &nbsp;{L_FONT_SIZE}:<select name="addbbcode20" onChange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]')" onMouseOver="helpline('f')">
					  <option value="7" class="genmed">{L_FONT_TINY}</option>
					  <option value="9" class="genmed">{L_FONT_SMALL}</option>
					  <option value="12" selected class="genmed">{L_FONT_NORMAL}</option>
					  <option value="18" class="genmed">{L_FONT_LARGE}</option>
					  <option  value="24" class="genmed">{L_FONT_HUGE}</option>
					</select>
					</span></td>
				  <td nowrap="nowrap" align="right"><span class="gensmall"><a href="javascript:bbstyle(-1)" class="genmed" onMouseOver="helpline('a')">{L_BBCODE_CLOSE_TAGS}</a></span></td>
				</tr>
			  </table>
			</td>
		  </tr>
		  <tr> 
			<td colspan="9"> <span class="gensmall"> 
			  <input type="text" name="helpbox" size="45" maxlength="100" style="width:450px; font-size:10px" class="helpline" value="{L_STYLES_TIP}" />
			  </span></td>
		  </tr>
		  <tr> 
			<td colspan="9"><span class="gen"> 
			  <textarea name="message" rows="15" cols="35" wrap="virtual" style="width:450px" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);">{CONTENT}</textarea>
			  </span></td>
		  </tr>
		</table>
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_TYPE}:</td>
<td class="row2"> 
<input type="radio" name="type" value="1" {BBCODE} /> {L_B_BBCODE}&nbsp;&nbsp;
<input type="radio" name="type" value="0" {HTML} /> {L_B_HTML}</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_CACHE}:</td>
<td class="row2"> 
<input type="radio" name="cache" value="1" {CACHE} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="cache" value="0" {NO_CACHE} /> {L_NO}</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_CACHETIME}:</td>
<td class="row2"> 
<input type="text" maxlength="10" size="10" name="cachetime" value="{CACHETIME}" class="post" />
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_BLOCK_FILE}:</td>
<td class="row2"> 
<select name="blockfile" class="post">{BLOCKFILE}</select>
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_VIEW_BY}:</td>
<td class="row2"> 
<select name="view" class="post">{VIEWBY}</select>
</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_BORDER}:</td>
<td class="row2"> 
<input type="radio" name="border" value="1" {BORDER} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="border" value="0" {NO_BORDER} /> {L_NO}</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_TITLEBAR}:</td>
<td class="row2"> 
<input type="radio" name="titlebar" value="1" {TITLEBAR} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="titlebar" value="0" {NO_TITLEBAR} /> {L_NO}</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_OPENCLOSE}:</td>
<td class="row2"> 
<input type="radio" name="openclose" value="1" {OPENCLOSE} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="openclose" value="0" {NO_OPENCLOSE} /> {L_NO}</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_LOCAL}:</td>
<td class="row2"> 
<input type="radio" name="local" value="1" {LOCAL} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="local" value="0" {NOT_LOCAL} /> {L_NO}</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_BACKGROUND}:</td>
<td class="row2"> 
<input type="radio" name="background" value="1" {BACKGROUND} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="background" value="0" {NO_BACKGROUND} /> {L_NO}</td>
</tr>

<tr> 
<td align="right" class="row1">{L_B_GROUP}:</td>
<td class="row2"> 
{GROUP}
</tr>

<tr> 
<td class="cat" colspan="2" align="center">{S_HIDDEN_FIELDS} 
<input type="submit" name="save" value="{L_SUBMIT}" class="mainoption" />
</td>
</tr>
</table>
</form>
<br />