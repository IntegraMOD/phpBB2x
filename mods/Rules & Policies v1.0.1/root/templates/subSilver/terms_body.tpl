
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left" class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></td>
	</tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr>
		<th class="thHead">{L_TERMS_TITLE}</th>
	</tr>
	<tr>
		<td class="row1">
			<!-- BEGIN terms_block_link -->
			<span class="gen"><b>{terms_block_link.BLOCK_TITLE}</b></span><br />
			<!-- BEGIN terms_row_link -->
			<span class="gen"><a href="{terms_block_link.terms_row_link.U_TERMS_LINK}" class="postlink">{terms_block_link.terms_row_link.TERMS_LINK}</a></span><br />
			<!-- END terms_row_link -->
			<br />
			<!-- END terms_block_link -->
		</td>
	</tr>
	<tr>
		<td class="catBottom" height="28">&nbsp;</td>
	</tr>
</table>

<br clear="all" />

<!-- BEGIN terms_block -->
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr> 
		<td class="catHead" height="28" align="center"><span class="cattitle">{terms_block.BLOCK_TITLE}</span></td>
	</tr>
	<!-- BEGIN terms_row -->  
	<tr> 
		<td class="{terms_block.terms_row.ROW_CLASS}" align="left" valign="top"><span class="postbody"><a name="{terms_block.terms_row.U_TERMS_ID}"></a><b>{terms_block.terms_row.TERMS_QUESTION}</b></span><br /><span class="postbody">{terms_block.terms_row.TERMS_ANSWER}<br /><a class="postlink" href="#Top">{L_BACK_TO_TOP}</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<!-- END terms_row -->
</table>

<br clear="all" />
<!-- END terms_block -->

<table width="100%" cellspacing="2" border="0" align="center">
	<tr>
		<td align="right" valign="middle" nowrap="nowrap"><span class="gensmall">{S_TIMEZONE}</span><br /><br />{JUMPBOX}</td> 
	</tr>
</table>