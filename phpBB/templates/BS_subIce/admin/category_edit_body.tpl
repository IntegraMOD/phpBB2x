				<h1>{L_EDIT_CATEGORY}</h1>
				<p>{L_EDIT_CATEGORY_EXPLAIN}</p>
				<form action="{S_FORUM_ACTION}" method="post">
				<fieldset>
					<legend>{L_EDIT_CATEGORY}</legend>
					<dl>
						<dt><label>{L_CATEGORY}:</label></dt>
						<dd><input type="text" size="25" name="cat_title" value="{CAT_TITLE}" /></dd>
					</dl>
				</fieldset>
				<fieldset class="submit-buttons">
					{S_HIDDEN_FIELDS}
					<input type="submit" name="submit" value="{S_SUBMIT_VALUE}" class="button1" />
				</fieldset>
				</form>