				<h1>{L_DATABASE_RESTORE}</h1>
				<p>{L_RESTORE_EXPLAIN}</p>
				<form enctype="multipart/form-data" method="post" action="{S_DBUTILS_ACTION}">
				<fieldset>
					<legend>{L_SELECT_FILE}</legend>
					<p><input type="file" name="backup_file"> {S_HIDDEN_FIELDS}<input type="submit" name="restore_start" value="{L_START_RESTORE}" class="button1" /></p>
				</fieldset>
				</form>