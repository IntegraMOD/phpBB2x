				<h1>{L_SMILEY_TITLE}</h1>
				<p>{L_SMILEY_EXPLAIN}</p>
				<script type="text/javascript"><!--
				function update_smiley(newimage)
				{
					document.smiley_image.src = "{S_SMILEY_BASEDIR}/" + newimage;
				}
				//--></script>
				<form method="post" action="{S_SMILEY_ACTION}">
				<fieldset>
					<legend>{L_SMILEY_CONFIG}</legend>
					<dl>
						<dt><label>{L_SMILEY_CODE}</label></dt>
						<dd><input type="text" name="smile_code" value="{SMILEY_CODE}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SMILEY_URL}</label></dt>
						<dd><select name="smile_url" onchange="update_smiley(this.options[selectedIndex].value);">{S_FILENAME_OPTIONS}</select> &nbsp; <img name="smiley_image" src="{SMILEY_IMG}" alt="" /></dd>
					</dl>
					<dl>
						<dt><label>{L_SMILEY_EMOTION}</label></dt>
						<dd><input type="text" name="smile_emotion" value="{SMILEY_EMOTICON}" /></dd>
					</dl>
				</fieldset>
				<fieldset class="submit-buttons">
					{S_HIDDEN_FIELDS}
					<input class="button1" type="submit" name="import" value="{L_SUBMIT}" />
				</fieldset>
				</form>