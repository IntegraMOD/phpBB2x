				<h1>{L_SMILEY_TITLE}</h1>
				<p>{L_EXPLAIN}</p>
				<form method="post" action="{S_SMILEY_ACTION}">
				<fieldset>
					<legend>{L_SMILEY_IMPORT}</legend>
					<dl>
						<dt><label>{L_SELECT_LBL}</label></dt>
						<dd>{S_SMILE_SELECT}</dd>
					</dl>
					<dl>
						<dt><label>{L_DEL_EXISTING}</label></dt>
						<dd><input type="checkbox" name="clear_current" value="1" /></dd>
					</dl>
					<dl>
						<dt><label>{L_CONFLICTS}</label></dt>
						<dd><input type="radio" name="replace" class="radio" value="1" checked="checked"/> {L_REPLACE_EXISTING}&nbsp; <input type="radio" name="replace" class="radio" value="0" /> {L_KEEP_EXISTING}</dd>
					</dl>
				<p class="quick">
					<input class="button1" type="submit" name="import_pack" value="{L_IMPORT}" />
				</p>
				</fieldset>
				</form>