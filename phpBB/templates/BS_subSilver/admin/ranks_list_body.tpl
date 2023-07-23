				<h1>{L_RANKS_TITLE}</h1>
				<p>{L_RANKS_TEXT}</p>
				<form method="post" action="{S_RANKS_ACTION}">
				<fieldset class="tabulated">
				<table cellspacing="1">
				<thead>
				<tr>
					<th>{L_RANK}</th>
					<th>{L_RANK_MINIMUM}</th>
					<th>{L_SPECIAL_RANK}</th>
					<th>{L_EDIT}/{L_DELETE}</th>
				</tr>
				</thead>
				<tbody>
				<!-- BEGIN ranks -->
				<tr class="{ranks.ROW_CLASS}">
					<td style="text-align:center">{ranks.RANK}</td>
					<td style="text-align:center">{ranks.RANK_MIN}</td>
					<td style="text-align:center">{ranks.SPECIAL_RANK}</td>
					<td style="text-align:center"><a href="{ranks.U_RANK_EDIT}" title="{L_EDIT}"><img src="../templates/prosilver/admin/images/icon_edit.gif" alt="" /></a> <a href="{ranks.U_RANK_DELETE}" title="{L_DELETE}"><img src="../templates/prosilver/admin/images/icon_delete.gif" alt="" /></a></td>
				</tr>
				<!-- END ranks -->
				</tbody>
				</table>
				<p class="quick">
					{S_HIDDEN_FIELDS}
					<input class="button2" name="add" type="submit" value="{L_ADD_RANK}" />
				</p>
				</fieldset>
				</form>