				<h1>{L_GROUP_TITLE}</h1>
				<p>{L_GROUP_EXPLAIN}</p>
				<form method="post" action="{S_GROUP_ACTION}">
				<fieldset>
					<legend>{L_GROUP_SELECT}</legend>
					<!-- BEGIN select_box -->
					<p>{S_GROUP_SELECT} <input type="submit" name="edit" value="{L_LOOK_UP}" class="button2" /></p>
					<!-- END select_box -->
					<p class="submit-buttons">
						{S_HIDDEN_FIELDS}
						<input class="button1" type="submit" name="new" value="{L_CREATE_NEW_GROUP}" />
					</p>
				</fieldset>
				</form>