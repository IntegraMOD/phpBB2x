				<h1>{L_GROUP_TITLE}</h1>
				<form action="{S_GROUP_ACTION}" method="post" name="post">
				<fieldset>
					<legend>{L_GROUP_EDIT_DELETE}</legend>
					<p>{L_ITEMS_REQUIRED}</p>
					<dl>
						<dt><label>{L_GROUP_NAME}:</label></dt>
						<dd><input type="text" name="group_name" size="35" maxlength="40" value="{GROUP_NAME}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_GROUP_DESCRIPTION}:</label></dt>
						<dd><textarea name="group_description" rows="5" cols="51">{GROUP_DESCRIPTION}</textarea></dd>
					</dl>
					<dl>
						<dt><label>{L_GROUP_MODERATOR}:</label></dt>
						<dd><input type="text" name="username" maxlength="50" size="20" value="{GROUP_MODERATOR}" /> <input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="button2" onclick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'height=250,resizable=yes,width=400');return false;" /></dd>
					</dl>
					<dl>
						<dt><label>{L_GROUP_STATUS}:</label></dt>
						<dd><input type="radio" class="radio" name="group_type" value="{S_GROUP_OPEN_TYPE}" {S_GROUP_OPEN_CHECKED} /> {L_GROUP_OPEN}&nbsp; <input type="radio" class="radio" name="group_type" value="{S_GROUP_CLOSED_TYPE}" {S_GROUP_CLOSED_CHECKED} /> {L_GROUP_CLOSED}&nbsp; <input type="radio" class="radio" name="group_type" value="{S_GROUP_HIDDEN_TYPE}" {S_GROUP_HIDDEN_CHECKED} /> {L_GROUP_HIDDEN}</dd>
					</dl>
					<!-- BEGIN group_edit -->
					<dl>
						<dt><label>{L_DELETE_MODERATOR}</label><br /><span>{L_DELETE_MODERATOR_EXPLAIN}</span></dt>
						<dd><input type="checkbox" name="delete_old_moderator" value="1"> {L_YES}</dd>
					</dl>
					<dl>
						<dt><label>{L_GROUP_DELETE}:</label></dt>
						<dd><input type="checkbox" name="group_delete" value="1"> {L_GROUP_DELETE_CHECK}</dd>
					</dl>
					<!-- END group_edit -->
					<p class="submit-buttons">
						{S_HIDDEN_FIELDS}
						<input type="submit" name="group_update" value="{L_SUBMIT}" class="button1" />&nbsp; 
						<input type="reset" value="{L_RESET}" name="reset" class="button2" />
					</p>
				</fieldset>
				</form>