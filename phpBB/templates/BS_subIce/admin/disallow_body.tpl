				<h1>{L_DISALLOW_TITLE}</h1>
				<p>{L_DISALLOW_EXPLAIN}</p>
				<form method="post" action="{S_FORM_ACTION}">
				<fieldset>
					<legend>{L_ADD_DISALLOW}</legend>
					<dl>
						<dt><label>{L_USERNAME}:</label><br /><span>{L_ADD_EXPLAIN}</span></dt>
						<dd><input type="text" name="disallowed_user" size="30" /> <input type="submit" name="add_name" value="{L_ADD}" class="button2" /></dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_DELETE_DISALLOW}</legend>
					<dl>
						<dt><label>{L_USERNAME}:</label><br /><span>{L_DELETE_EXPLAIN}</span></dt>
						<dd>{S_DISALLOW_SELECT} <input type="submit" name="delete_name" value="{L_DELETE}" class="button2" /></dd>
					</dl>
				</fieldset>
				</form>