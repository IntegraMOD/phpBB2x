				<h1>{L_FORUM_TITLE}</h1>
				<p>{L_FORUM_EXPLAIN}</p>
				<form method="post" action="{S_FORUM_ACTION}">
				<table cellspacing="1">
				<col class="row1" /><col class="row1" /><col class="row1" /><col class="row2" />
				<tbody>
				<!-- BEGIN catrow -->
				<tr>
					<td colspan="3"><strong><a href="{catrow.U_CAT_EDIT}">{catrow.CAT_DESC}</a></strong></td>
					<td style="vertical-align:top;width:100px;text-align:right;white-space:nowrap"><a href="{catrow.U_CAT_MOVE_UP}" title="{L_MOVE_UP}"><img src="../templates/prosilver/admin/images/icon_up.gif" alt="" /></a> <a href="{catrow.U_CAT_MOVE_DOWN}" title="{L_MOVE_DOWN}"><img src="../templates/prosilver/admin/images/icon_down.gif" alt="" /></a> <a href="{catrow.U_CAT_EDIT}" title="{L_EDIT}"><img src="../templates/prosilver/admin/images/icon_edit.gif" alt="" /></a> <a href="{catrow.U_CAT_DELETE}" title="{L_DELETE}"><img src="../templates/prosilver/admin/images/icon_delete.gif" alt="" /></a></td>
				</tr>
				<!-- BEGIN forumrow -->
				<tr>
					<td><a href="{catrow.forumrow.U_FORUM_EDIT}">{catrow.forumrow.FORUM_NAME}</a><br />{catrow.forumrow.FORUM_DESC}</td>
					<td>{catrow.forumrow.NUM_TOPICS}</td>
					<td>{catrow.forumrow.NUM_POSTS}</td>
					<td style="vertical-align:top;width:100px;text-align:right;white-space:nowrap"><a href="{catrow.forumrow.U_FORUM_MOVE_UP}" title="{L_MOVE_UP}"><img src="../templates/prosilver/admin/images/icon_up.gif" alt="" /></a> <a href="{catrow.forumrow.U_FORUM_MOVE_DOWN}" title="{L_MOVE_DOWN}"><img src="../templates/prosilver/admin/images/icon_down.gif" alt="" /></a> <a href="{catrow.forumrow.U_FORUM_EDIT}" title="{L_EDIT}"><img src="../templates/prosilver/admin/images/icon_edit.gif" alt="" /></a> <a href="{catrow.forumrow.U_FORUM_RESYNC}" title="{L_RESYNC}"><img src="../templates/prosilver/admin/images/icon_sync.gif" alt="" /></a> <a href="{catrow.forumrow.U_FORUM_DELETE}" title="{L_DELETE}"><img src="../templates/prosilver/admin/images/icon_delete.gif" alt="" /></a></td>
				</tr>
				<!-- END forumrow -->
				<tr>
					<td colspan="3"><input type="text" name="{catrow.S_ADD_FORUM_NAME}" /> <input type="submit" class="button2" name="{catrow.S_ADD_FORUM_SUBMIT}" value="{L_CREATE_FORUM}" /></td>
					<td></td>
				</tr>
				<!-- END catrow -->
				<tr>
					<td colspan="3"><input type="text" name="categoryname" /> <input type="submit" class="button2" name="addcategory" value="{L_CREATE_CATEGORY}" /></td>
					<td></td>
				</tr>
				</tbody>
				</table>
				</form>