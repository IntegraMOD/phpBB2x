<!-- BEGIN fetchpost_row -->
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr>
	<td class="catHead" height="25"><span class="genmed"><b>{L_ANNOUNCEMENT}: {fetchpost_row.TITLE}</b></span></td>
  </tr>
  <tr>
	<td class="row2" align="left" height="24"><span class="gensmall">{L_POSTED}: <b>{fetchpost_row.POSTER}</b> @ {fetchpost_row.TIME}</span></td>
  </tr>
  <tr>
	<td class="row1" align="left"><span class="gensmall" style="line-height:150%">{fetchpost_row.TEXT}<br /><br />{fetchpost_row.OPEN}<a href="{fetchpost_row.U_READ_FULL}">{fetchpost_row.L_READ_FULL}</a>{fetchpost_row.CLOSE}</span></td>
  </tr>
  <tr>
	<td class="row3" align="left" height="24"><span class="gensmall">{L_COMMENTS}: {fetchpost_row.REPLIES} :: <a href="{fetchpost_row.U_VIEW_COMMENTS}">{L_VIEW_COMMENTS}</a> (<a href="{fetchpost_row.U_POST_COMMENT}">{L_POST_COMMENT}</a>)</span></td>
  </tr>
</table>

<br />

<!-- END fetch_post_row -->
