				<h1>{L_USER_TITLE}</h1>
				<p>{L_USER_EXPLAIN}</p>
				<form action="{S_PROFILE_ACTION}" method="post">
				<table cellspacing="1">
				<thead>
				<tr>
					<th colspan="{S_COLSPAN}">{L_AVATAR_GALLERY}</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>{L_CATEGORY}: <select name="avatarcategory">{S_OPTIONS_CATEGORIES}</select> <input type="submit" class="button2" value="{L_GO}" name="avatargallery" /></td>
				</tr>
				<!-- BEGIN avatar_row -->
				<tr>
				<!-- BEGIN avatar_column -->
					<td><img src="{avatar_row.avatar_column.AVATAR_IMAGE}" /></td>
				<!-- END avatar_column -->
				</tr>
				<tr>
				<!-- BEGIN avatar_option_column -->
					<td><input type="radio" class="radio" name="avatarselect" value="{avatar_row.avatar_option_column.S_OPTIONS_AVATAR}" /></td>
				<!-- END avatar_option_column -->
				</tr>
				<!-- END avatar_row -->
				</tbody>
				</table>
				<p class="submit-buttons">
					{S_HIDDEN_FIELDS}
					<input type="submit" name="submitavatar" value="{L_SELECT_AVATAR}" class="button2" />&nbsp; 
					<input type="submit" name="cancelavatar" value="{L_RETURN_PROFILE}" class="button2" />
				</p>
				</form>