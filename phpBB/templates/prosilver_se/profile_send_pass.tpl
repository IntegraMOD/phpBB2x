
		<form action="{S_PROFILE_ACTION}" method="post" id="resend">
		<div class="panel">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div class="content">
				<h2>{L_SEND_PASSWORD}</h2>
				<fieldset>
					<dl>
						<dt><label>{L_USERNAME}:</label></dt>
						<dd><input class="inputbox narrow" type="text" name="username" size="25" /></dd>
					</dl>
					<dl>
						<dt><label>{L_EMAIL_ADDRESS}:</label></dt>
						<dd><input class="inputbox narrow" type="text" name="email" size="25" maxlength="100" /></dd>
					</dl>
					<dl>
						<dt>&nbsp;</dt>
						<dd>{S_HIDDEN_FIELDS}<input type="submit" name="submit" class="button1" value="{L_SUBMIT}" />&nbsp; <input type="reset" value="{L_RESET}" name="reset" class="button2" /></dd>
					</dl>
				</fieldset>
			</div>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		</form>
