				<h1>{L_EMAIL_TITLE}</h1>
				<p>{L_EMAIL_EXPLAIN}</p>
				<form method="post" action="{S_USER_ACTION}">
				{ERROR_BOX}
				<fieldset>
					<legend>{L_COMPOSE}</legend>
					<dl>
						<dt><label>{L_RECIPIENTS}:</label></dt>
						<dd>{S_GROUP_SELECT}</dd>
					</dl>
					<dl>
						<dt><label>{L_EMAIL_SUBJECT}:</label></dt>
						<dd><input name="subject" type="text" value="{SUBJECT}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_EMAIL_MSG}:</label><br /><span>{L_MASS_MESSAGE_EXPLAIN}</span></dt>
						<dd><textarea id="message" name="message" rows="10" cols="60">{MESSAGE}</textarea></dd>
					</dl>
					<p class="submit-buttons"><input class="button1" type="submit" name="submit" value="{L_EMAIL}" /></p>
				</fieldset>
				</form>