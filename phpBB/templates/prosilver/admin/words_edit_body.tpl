				<h1>{L_WORDS_TITLE}</h1>
				<p>{L_WORDS_TEXT}</p>
				<form method="post" action="{S_WORDS_ACTION}">
				<fieldset>
					<legend>{L_WORD_CENSOR}</legend>
					<dl>
						<dt><label>{L_WORD}:</label></dt>
						<dd><input type="text" name="word" value="{WORD}" maxlength="255" /></dd>
					</dl>
					<dl>
						<dt><label>{L_REPLACEMENT}:</label></dt>
						<dd><input type="text" name="replacement" value="{REPLACEMENT}" maxlength="255" /></dd>
					</dl>
					{S_HIDDEN_FIELDS}
				<p class="submit-buttons">
					<input class="button1" type="submit" name="save" value="{L_SUBMIT}" />
				</p>
				</fieldset>
				</form>