				<h1>{L_FORUM_DELETE}</h1>
				<p>{L_FORUM_DELETE_EXPLAIN}</p>
				<form action="{S_FORUM_ACTION}" method="post">
				<fieldset>
					<legend>{L_FORUM_DELETE}</legend>
					<dl>
						<dt><label>{L_FORUM_NAME}:</label></dt>
						<dd>{NAME}</dd>
					</dl>
					<dl>
						<dt><label>{L_MOVE_CONTENTS}:</label></dt>
						<dd>{S_SELECT_TO}</dd>
					</dl>
					<p class="quick">
						{S_HIDDEN_FIELDS}
						<input type="submit" name="submit" value="{S_SUBMIT_VALUE}" class="button1" />
					</p>
				</fieldset>
				</form>