
		<h2 class="titlespace">{L_SEND_EMAIL_MSG}</h2>
		<form action="{S_POST_ACTION}" method="post">
		<div class="panel">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div class="content">
				<fieldset class="fields2">
					{ERROR_BOX}
					<dl>
						<dt><label>{L_RECIPIENT}:</label></dt>
						<dd><strong>{USERNAME}</strong></dd>
					</dl>
					<dl>
						<dt><label>{L_SUBJECT}:</label></dt>
						<dd><input class="inputbox autowidth" type="text" name="subject" size="50" value="{SUBJECT}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_MESSAGE_BODY}:</label><br /><span>{L_MESSAGE_BODY_DESC}</span></dt>
						<dd><textarea class="inputbox" name="message" rows="15" cols="76">{MESSAGE}</textarea></dd>
					</dl>
					<dl>
						<dt>&nbsp;</dt>
						<dd><label><input type="checkbox" name="cc_email" value="1" checked="checked" tabindex="5" /> {L_CC_EMAIL}</label></dd>
					</dl>
				</fieldset>
			</div>
		<span class="corners-bottom"><span></span></span></div>
		</div>
		<div class="panel">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div class="content">
				<fieldset class="submit-buttons">
					<input type="submit" tabindex="6" name="submit" class="button1" value="{L_SEND_EMAIL}" />
				</fieldset>
			</div>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		</form>
