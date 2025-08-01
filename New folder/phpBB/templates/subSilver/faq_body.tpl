<script src="templates/assets/js/faq.js"></script>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr>
	<td align="left" class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></td>
  </tr>
</table>
<table class="forumline" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
  <tr>
	<th class="thHead">{L_FAQ_TITLE}</th>
  </tr>
  <tr>
	<td>
	  <!-- BEGIN faq_block -->
	  <table class="" width="100%" cellspacing="1" cellpadding="2" border="0" align="center">
		<tr> 
		  <td class="catHead" height="28" align="center"><span class="cattitle">{faq_block.BLOCK_TITLE}</span></td>
		</tr>
		<!-- BEGIN faq_row -->  
		<tr> 
		  <td class="{faq_block.faq_row.ROW_CLASS}" align="left" valign="top">
			<div onclick="return CFAQ.display('faq_a_{faq_block.faq_row.U_FAQ_ID}', false);" style="width:100%;cursor:pointer;cursor:hand;">
		   	  <span class="gen"><a class="postlink" href="javascript:void(0)" onclick="return CFAQ.display('faq_a_{faq_block.faq_row.U_FAQ_ID}', true);" onfocus="this.blur();"><b>{faq_block.faq_row.FAQ_QUESTION}</b></span></a>
			</div>
			<div id="faq_a_{faq_block.faq_row.U_FAQ_ID}" style="display:none;">
			  <table class="bodyline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
				<tr>
				  <td class="spaceRow"><img src="templates/subSilver/images/spacer.gif" alt="" width="0" height="0" /></td>
				</tr>
				<tr>
				  <td align="left" valign="top"><span class="postbody">{faq_block.faq_row.FAQ_ANSWER}<br /></span></td>
				</tr>
				<tr>
				  <td class="spaceRow"><img src="templates/subSilver/images/spacer.gif" alt="" width="0" height="0" /></td>
				</tr>
			  </table>
			</div>
		  </td>
		</tr>
	    <!-- END faq_row -->
	  </table>
	  <br clear="all" />
	  <!-- END faq_block -->
    </td>
  <tr>
</table>
<table width="100%" cellspacing="2" border="0" align="center">
  <tr>
	<td align="left" valign="middle" nowrap="nowrap"><span class="copyright">DHTML FAQ by phpMiX</span></td>
	<td align="right" valign="middle" nowrap="nowrap"><span class="gensmall">{S_TIMEZONE}</span></td>
  </tr>
  <tr>
	<td colspan="2" align="right" valign="middle" nowrap="nowrap">{JUMPBOX}</td>
  </tr>
</table>
