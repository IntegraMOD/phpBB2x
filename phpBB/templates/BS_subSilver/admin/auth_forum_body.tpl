				<h1>{L_AUTH_TITLE}</h1>
				<p>{L_AUTH_EXPLAIN}</p>
				<h2>{L_FORUM}: {FORUM_NAME}</h2>
				<form method="post" action="{S_FORUMAUTH_ACTION}">
				<table cellspacing="1">
				<thead>
				<tr>
					<!-- BEGIN forum_auth_titles -->
					<th>{forum_auth_titles.CELL_TITLE}</th>
					<!-- END forum_auth_titles -->
				</tr>
				<tbody>
				<tr>
					<!-- BEGIN forum_auth_data -->
					<td style="text-align:center">{forum_auth_data.S_AUTH_LEVELS_SELECT}</td>
					<!-- END forum_auth_data -->
				</tr>
				<tr>
					<td colspan="{S_COLUMN_SPAN}" style="text-align:center">{U_SWITCH_MODE}</td>
				</tr>
				</tbody>
				</table>
				<fieldset class="submit-buttons">
					<legend>{L_SUBMIT}</legend>
					{S_HIDDEN_FIELDS}
					<input class="button1" type="submit" name="submit" value="{L_SUBMIT}" />&nbsp; 
					<input class="button2" type="reset" name="reset" value="{L_RESET}" />
				</fieldset>
				</form>