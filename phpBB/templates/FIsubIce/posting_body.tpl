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


function checkForm() {

	formErrors = false;    

	if (document.post.message.value.length < 2) {
		formErrors = "{L_EMPTY_MESSAGE}";
	}

	if (formErrors) {
		alert(formErrors);
		return false;
	} else {
		bbstyle(-1);
		//formObj.preview.disabled = true;
		//formObj.submit.disabled = true;
		return true;
	}
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
<div class="container-fluid">
	<div class="row">
	  <div class="col px-2">
	      
<!-- BEGIN privmsg_extensions -->
  <div class="container-fluid pl-0">
    <div class="row"> 
      <div class="col"><i class="fa-solid fa-file-arrow-down"></i>{INBOX_LINK}</div>
      <div class="col"><i class="fa-solid fa-file-arrow-up"></i>{SENTBOX_LINK}</div>
      <div class="col"><i class="fa-solid fa-box-archive"></i>{OUTBOX_LINK}</div>
      <div class="col"><i class="fa-solid fa-share-from-square"></i>{SAVEBOX_LINK}</div>
    </div>
  </div>
<br clear="all" />
<!-- END privmsg_extensions -->

<form action="{S_POST_ACTION}" method="post" name="post" onsubmit="return checkForm(this)">

{POST_PREVIEW_BOX}
{ERROR_BOX}

<div align="center">
	<div class="row"> 
		<div class="col"><span  class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a>
		<!-- BEGIN switch_not_privmsg --> 
		-> <a href="{U_VIEW{NAV_CAT_DESC}_FORUM}" class="nav">{FORUM_NAME}</a></span></td>
		<!-- END switch_not_privmsg -->
		</span></div>
	</div>
</div>

<div class="container-fluid forumline">
  <div class="bdrw">
  <div class="row  d-flex th align-items-center pl-2">{L_POST_A}</div>    
<!-- BEGIN switch_username_select -->
  <div class="row">
    <div class="col-3 row1 gen font-weight-bold">{L_USERNAME}</div>
    <div class="col-9 row2 genmed"><input type="text" class="post" tabindex="1" name="username" size="25" maxlength="25" value="{USERNAME}" /></div>
  </div>
<!-- END switch_username_select -->
<!-- BEGIN switch_privmsg -->  
  <div class="row">    
    <div class="col-3 row1 gen font-weight-bold">{L_USERNAME}</div>
    <div class="col-9 row2 genmed"><input type="text"  class="post" name="username" maxlength="25" size="25" tabindex="1" value="{USERNAME}" />&nbsp;<input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="liteoption" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" /></div>
  </div>
<!-- END switch_privmsg -->
  <div class="row hr1">    
    <div class="col-3 row1 gen font-weight-bold">{L_SUBJECT}</div>
    <div class="col-9 row2 genmed"><input type="text" name="subject" size="45" maxlength="60" style="width:100%" tabindex="2" class="post" value="{SUBJECT}" /></div>
  </div>
  
  <div class="row hr1">   
    <div class="col-3 row1">
      <div class="row">  
        <div class="col gen font-weight-bold">{L_MESSAGE_BODY}</div>
      </div>
      <div class="row pt-2">  
        <div class="col text-center">{L_EMOTICONS}</div>
      </div>
      <!-- BEGIN smilies_row -->      
      <div class="row">
        <!-- BEGIN smilies_col -->  
        <div class="col text-center mx-0"><a href="javascript:emoticon('{smilies_row.smilies_col.SMILEY_CODE}')"><img src="{smilies_row.smilies_col.SMILEY_IMG}" alt="{smilies_row.smilies_col.SMILEY_DESC}" title="{smilies_row.smilies_col.SMILEY_DESC}" /></a></div>
        <!-- END smilies_col -->
      </div>
      <!-- END smilies_row -->
      <!-- BEGIN switch_smilies_extra -->
      <div class="row mx-0">
        <div class="col ml-2"><a href="{U_MORE_SMILIES}" onclick="window.open('{U_MORE_SMILIES}', '_phpbbsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=250');return false;" target="_phpbbsmilies" class="nav">{L_MORE_SMILIES}</a></div>
      </div>
      <!-- END switch_smilies_extra -->
    </div>
    <div class="col-9 row2">
	  <div class="row"> 
		<div class="col genmed"> 
		  <input type="button" class="button" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onClick="bbstyle(0)" onMouseOver="helpline('b')" />
		  <input type="button" class="button" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onClick="bbstyle(2)" onMouseOver="helpline('i')" />
		  <input type="button" class="button" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onClick="bbstyle(4)" onMouseOver="helpline('u')" />
		  <input type="button" class="button" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onClick="bbstyle(6)" onMouseOver="helpline('q')" />
		  <input type="button" class="button" accesskey="c" name="addbbcode8" value="Code" style="width: 40px" onClick="bbstyle(8)" onMouseOver="helpline('c')" />
		  <input type="button" class="button" accesskey="l" name="addbbcode10" value="List" style="width: 40px" onClick="bbstyle(10)" onMouseOver="helpline('l')" />
		  <input type="button" class="button" accesskey="o" name="addbbcode12" value="List=" style="width: 40px" onClick="bbstyle(12)" onMouseOver="helpline('o')" />
		  <input type="button" class="button" accesskey="p" name="addbbcode14" value="Img" style="width: 40px"  onClick="bbstyle(14)" onMouseOver="helpline('p')" />
		  <input type="button" class="button" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onClick="bbstyle(16)" onMouseOver="helpline('w')" />
		</div>
	  </div>
	  <div class="row"> 
		<div class="col"> 
	      <div class="row"> 
		    <div class="col-10 genmed">
		      <div class="row">
		        <div class="col-auto">
    		      {L_FONT_COLOR}: 
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
    			  </select> 
		        </div>
		        <div class="col-auto">
                  {L_FONT_SIZE}:<select name="addbbcode20" selected onChange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.selectedIndex=0;" onMouseOver="helpline('f')">
    			  <option value="0" class="genmed">{L_FONT_SIZE}</option>
    			  <option value="7" class="genmed">{L_FONT_TINY}</option>
    			  <option value="9" class="genmed">{L_FONT_SMALL}</option>
    			  <option value="12" class="genmed">{L_FONT_NORMAL}</option>
    			  <option value="18" class="genmed">{L_FONT_LARGE}</option>
    			  <option  value="24" class="genmed">{L_FONT_HUGE}</option>
    			  </select>
				</div>
		      </div>
			</div>
			<div class="col-2 "><span class="gensmall"><a href="javascript:bbstyle(-1)" class="genmed" onMouseOver="helpline('a')">{L_BBCODE_CLOSE_TAGS}</a></span></div>
		  </div>
		</div>
	  </div>
	  <div class="row"> 
		<div class="col-auto text-center gensmall text-wrap"> 
		  <input type="text" name="helpbox" size="45" maxlength="100" style="width:95%; font-size:10px" class="helpline" value="{L_STYLES_TIP}" />
		</div>
	  </div>
	  <div class="row"> 
		<div class="col text-center mx-0 gen">
		  <textarea name="message" rows="15" cols="35" wrap="virtual" style="width:95%" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);">{MESSAGE}</textarea>
		</div>
	  </div>
    </div>
  </div>    
  <div class="row hr1">
    <div class="col-3 row1">
      <div class="row">
        <div class="col gen font-weight-bold">{L_OPTIONS}</div>
      </div>
      <div class="row">
        <div class="col gensmall">{HTML_STATUS}</div>
      </div>
      <div class="row">
        <div class="col gensmall">{BBCODE_STATUS}</div>
      </div>
      <div class="row">
        <div class="col gensmall">{SMILIES_STATUS}</div>
      </div>      
    </div>
    <div class="col-9 row2 hr1">
  	  <div>
	    <!-- BEGIN switch_html_checkbox -->
		<div class="row"> 
		  <div class="col-1 p-0 text-end"> 
			  <input type="checkbox" name="disable_html" {S_HTML_CHECKED} />
		  </div>
		  <div class="col-11 text-start"><span class="gen">{L_DISABLE_HTML}</span></div>
		</div>
		<!-- END switch_html_checkbox -->
		<!-- BEGIN switch_bbcode_checkbox -->
		<div class="row"> 
		  <div class="col-1 p-0 text-end"> 
		    <input type="checkbox" name="disable_bbcode" {S_BBCODE_CHECKED} />
		  </div>
		  <div class="col-11 text-start"><span class="gen">{L_DISABLE_BBCODE}</span></div>
		</div>
		<!-- END switch_bbcode_checkbox -->
		<!-- BEGIN switch_smilies_checkbox -->
		<div class="row"> 
		  <div class="col-1 p-0 text-end"> 
		    <input type="checkbox" name="disable_smilies" {S_SMILIES_CHECKED} />
		  </div>
		  <div class="col-11 text-start"><span class="gen">{L_DISABLE_SMILIES}</span></div>
		</div>
		<!-- END switch_smilies_checkbox -->
		<!-- BEGIN switch_signature_checkbox -->
		<div class="row"> 
		  <div class="col-1 p-0 text-end"> 
		    <input type="checkbox" name="attach_sig" {S_SIGNATURE_CHECKED} />
		  </div>
		  <div class="col-11 text-start"><span class="gen">{L_ATTACH_SIGNATURE}</span></div>
		</div>
		<!-- END switch_signature_checkbox -->
		<!-- BEGIN switch_notify_checkbox -->
		<div class="row"> 
		  <div class="col-1 p-0 text-end"> 
		    <input type="checkbox" name="notify" {S_NOTIFY_CHECKED} />
		  </div>
		  <div class="col-11 text-start"><span class="gen">{L_NOTIFY_ON_REPLY}</span></div>
		</div>
		<!-- END switch_notify_checkbox -->
		<!-- BEGIN switch_delete_checkbox -->
		<div class="row"> 
		  <div class="col-1 p-0 text-end"> 
		    <input type="checkbox" name="delete" />
		  </div>
		  <div class="col-11 text-start"><span class="gen">{L_DELETE_POST}</span></div>
		</div>
		<!-- END switch_delete_checkbox -->
		<!-- BEGIN switch_type_toggle -->
		<div class="row"> 
		  <div class="col-1 p-0 text-end"></div>
		  <div class="col-11 text-start"><span class="gen">{S_TYPE_TOGGLE}</span></div>
		</div>
		<!-- END switch_type_toggle -->
	  </div>
    </div>
  </div>

  	{POLLBOX} 
  	
  <!-- BEGIN switch_confirm -->
  <div class="row mx-0"> 
    <div class="col text-center"><span class="gensmall">{L_CONFIRM_CODE_IMPAIRED}</span><br /><br />{CONFIRM_IMG}</span></div>
  </div>	
  <div class="row mx-0"> 
    <div class="col text-center"><span class="gen">{L_CONFIRM_CODE}: * </span><br /><span class="gensmall">{L_CONFIRM_CODE_EXPLAIN}</span></div>
    <div class="col text-center"><input type="text" class="post" style="width: 200px" name="confirm_code" size="8" maxlength="8" value="" /></div>
  </div>	
  <!-- END switch_confirm -->  	
 
  <div class="row d-flex  catBottom align-items-center">
    <div class="col text-center"> {S_HIDDEN_FORM_FIELDS}<input type="submit" tabindex="5" name="preview" class="mainoption" value="{L_PREVIEW}" />&nbsp;<input type="submit" accesskey="s" tabindex="6" name="post" class="mainoption" value="{L_SUBMIT}" /></div>
  </div>
  </div>
  
</div>
<div class="row px-0 py-1"> 
  <div class="col text-end"><span class="gensmall">{S_TIMEZONE}</span></div>
</div>
</form>
<div class="row px-0 py-1"> 
  <div class="col px-0 text-end">{JUMPBOX}</div>
</div>
{TOPIC_REVIEW_BOX}

    </div>
  </div>
</div>  