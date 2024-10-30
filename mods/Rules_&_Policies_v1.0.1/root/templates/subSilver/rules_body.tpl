
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left" class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></td>
	</tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr>
		<th class="thHead">{L_RULES}</th>
	</tr>
	<tr>
		<td class="row1">
			<!-- BEGIN rules_block_link -->
			<span class="gen"><b>{rules_block_link.BLOCK_TITLE}</b></span><br />
			<!-- BEGIN rules_row_link -->
			<span class="gen"><a href="{rules_block_link.rules_row_link.U_RULES_LINK}" class="postlink">{rules_block_link.rules_row_link.RULES_LINK}</a></span><br />
			<!-- END rules_row_link -->
			<br />
			<!-- END rules_block_link -->
		</td>
	</tr>
	<tr>
		<td class="catBottom" height="28">&nbsp;</td>
	</tr>
</table>

<br clear="all" />

<!-- BEGIN rules_block -->
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr> 
		<td class="catHead" height="28" align="center"><span class="cattitle">{rules_block.BLOCK_TITLE}</span></td>
	</tr>
	<!-- BEGIN rules_row -->  
	<tr> 
		<td class="{rules_block.rules_row.ROW_CLASS}" align="left" valign="top"><span class="postbody"><a name="{rules_block.rules_row.U_RULES_ID}"></a><b>{rules_block.rules_row.RULES_QUESTION}</b></span><br /><span class="postbody">{rules_block.rules_row.RULES_ANSWER}<br /><a class="postlink" href="#Top">{L_BACK_TO_TOP}</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<!-- END rules_row -->
</table>

<br clear="all" />
<!-- END rules_block -->

<table width="100%" cellspacing="2" border="0" align="center">
	<tr>
		<td align="right" valign="middle" nowrap="nowrap"><span class="gensmall">{S_TIMEZONE}</span><br /><br />{JUMPBOX}</td> 
	</tr>
</table>
