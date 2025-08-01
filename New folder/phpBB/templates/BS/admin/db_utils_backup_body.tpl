				<h1>{L_DATABASE_BACKUP}</h1>
				<p>{L_BACKUP_EXPLAIN}</p>
				<form method="post" action="{S_DBUTILS_ACTION}">
				<fieldset>
					<legend>{L_BACKUP_OPTIONS}</legend>
					<dl>
						<dt><label>{L_FULL_BACKUP}:</label></dt>
						<dd><input type="radio" class="radio" name="backup_type" value="full" checked="checked" /></dd>
					</dl>
					<dl>
						<dt><label>{L_STRUCTURE_BACKUP}:</label></dt>
						<dd><input type="radio" class="radio" name="backup_type" value="structure" /></dd>
					</dl>
					<dl>
						<dt><label>{L_DATA_BACKUP}:</label></dt>
						<dd><input type="radio" class="radio" name="backup_type" value="data" /></dd>
					</dl>
					<dl>
						<dt><label>{L_ADDITIONAL_TABLES}:</label></dt>
						<dd><input type="text" name="additional_tables" /></dd>
					</dl>
					<dl>
						<dt><label>{L_GZIP_COMPRESS}:</label></dt>
						<dd><input type="radio" class="radio" name="gzipcompress" value="0" checked="checked" /> {L_NO}&nbsp; <input type="radio" class="radio" name="gzipcompress" value="1" /> {L_YES}</dd>
					</dl>
					<p class="submit-buttons">
						{S_HIDDEN_FIELDS}
						<input type="submit" name="backupstart" value="{L_START_BACKUP}" class="button1" />
					</p>
				</fieldset>
				</form>