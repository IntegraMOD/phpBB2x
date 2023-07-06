<h2>This version of phpBB is the official release of pbpBB 2.0.23 with some un-official updates</h2> 
<br />
<h3>This document is NOT up to date</h2> 

<ol>
	<li>added the unreleased phpBB 2.0.24 update by the <b>phpBB</b> developers</b></li>
	<li>added phpBB 2 fixes by <b>achaab & BoBmArLeY</b></li>
	<li>added mysql and PHP version information to Admin Index</li>
	<li>added prosilver & prosilver_se templates for better mobile access</li>
	<li>added a bootstrap version of the subSilver template. (BS_subSilver)</li>
	<li>BS_subSilver is built with:
	    <ul>
            <li>bootstrap ver 5.2.3</li>
            <li>font-awesome ver 6.4.0</li>
            <li>bootstrap ver 5.2.3</li>
	    </ul>
	</li>
	<li>added mysqli database option</li>
	<li>updated the user social links to include:
	    <ul>
            <li>Facebook</li>
            <li>Instagram</li>
            <li>Pinterest</li>
            <li>Twitter</li>
            <li>Skype</li>
            <li>Telegram</li>
            <li>LinkedIn</li>
            <li>TikTok</li>
            <li>Discord</li>
	    </ul>
	</li>
	<li>removed obsolete social links
		<ul>
            <li>YIM</li>
            <li>MSNM</li>
            <li>AIM</li>
	    </ul>
	</li>			
	<li>updated to run on php versions up to 7.4 and mysql/mysqli by the <b>IntegraMOD</b> developers</li>
</ol>
<br />
<p>phpBB 2.0.25 template edits:
<ul>
	<li>bbcode.tpl</li>
	<li>admin/index_body.tpl</li>
	<li>admin/index_navigate.tpl</li>
	<li>admin/page_header.tpl</li>
	<li>admin/user_edit_body.tpl</li>
	<li>faq_body.tpl</li>
	<li>overall_header.tpl</li>
	<li>privmsgs_read_body.tpl</li>	
	<li>profile_add_body.tpl</li>
	<li>profile_view_body.tpl</li>
	<li>viewtopic_body.tpl</li>
</ul>
</p>

<p>phpBB 2.0.25 language file edits
<ul>
	<li>lang_admin.php</li>
	<li>lang_main.php</li>
</ul>
</p>

<textarea rows="16" style="width:100%;">

#
#-----[ OPEN ]---------------------------------------------
#

templates/YOUR TEMPLATE/bbcode.tpl

#
#-----[ FIND ]---------------------------------------------
#

<!-- BEGIN img --><img src="{URL}" border="0" /><!-- END img -->

#
#-----[ AFTER, ADD ]---------------------------------------------
#

<!-- BEGIN p_img -->{L_PRIV_IMG}:{URL}<!-- END p_img -->

#
#-----[ OPEN ]---------------------------------------------
#

templates/YOUR TEMPLATE/admin/index_body.tpl

#
#-----[ FIND ]---------------------------------------------
#
	<td class="row1" nowrap="nowrap">{L_GZIP_COMPRESSION}:</td>
	<td class="row2"><b>{GZIP_COMPRESSION}</b></td>
  </tr>

#
#-----[ AFTER, ADD ]---------------------------------------------
#

  <tr> 
	<td class="row1" nowrap="nowrap">{L_PHP_VERSION}:</td>
	<td class="row2"><b>{PHP_VERSION}</b></td>
	<td class="row1" nowrap="nowrap">{L_MYSQL_VERSION}:</td>
	<td class="row2"><b>{MYSQL_VERSION}</b></td>
  </tr>

#
#-----[ OPEN ]---------------------------------------------
#

templates/YOUR TEMPLATE/admin/page_header.tpl

#
#-----[ FIND ]---------------------------------------------
#

</head>

#
#-----[ BEFORE, ADD ]---------------------------------------------
#

<script>
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>

#
#-----[ OPEN ]---------------------------------------------
#

language/ALL LANGUAGES/lang_admin.php

#
#-----[ FIND the full line]---------------------------------------------
#

$lang['Version_information'] = '

#
#-----[ REPLACE WITH]---------------------------------------------
#

$lang['Version_information'] = '<a href="#" onclick="toggle_visibility( \'ver\' );" title="Click for more Information">Version Information</a>';
$lang['Version_of_PHP'] = 'Version of PHP';
$lang['Version_of_MySQL'] = 'Version of MySQL';

#
#-----[ OPEN ]---------------------------------------------
#

language/ALL LANGUAGES/lang_main.php

#
#-----[ FIND ]---------------------------------------------
#

//
// That's all, Folks!
// 

#
#-----[ BEFORE, ADD ]---------------------------------------------
#

//
// language buttons
//

$lang['button_pm_new'] = 'New<div class="bld">PM</div>';
$lang['button_pm_reply'] = 'Send<div class="bld">Reply</div>';
$lang['button_topic_locked'] = '<div class="bld">Locked</div>';
$lang['button_topic_new'] = 'New<div class="bld">Topic</div>';
$lang['button_topic_reply'] = 'Post<div class="bld">Reply</div>';
$lang['icon_post_edit'] = '<div class="sml bld">Edit</div>';
$lang['icon_post_quote'] = '<div class="sml bld">Quote</div>';

# 
#-----[ SAVE/CLOSE ALL FILES ]------------------------------------------ 
#

</textarea>





<p>Support for this version of phpBB may be found at<br>
<a href="https://www.integramod.com">IntegraMOD</a><br>
<a href="https://www.phpbb2x.com">phpBB2x</a><br>
<a href="http://www.phpbb2refugees.com/">phpBB2 Refugees</a>
</p>