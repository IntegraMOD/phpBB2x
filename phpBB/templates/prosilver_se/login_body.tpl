

		<form action="{S_LOGIN_ACTION}" method="post">
		<div class="panel">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div class="content">
				<h2>{L_ENTER_PASSWORD}</h2>
				<fieldset class="fields1">
					<dl>
						<dt><label>{L_USERNAME}:</label></dt>
						<dd><input type="text" name="username" size="25" value="{USERNAME}" class="inputbox autowidth" /></dd>
					</dl>
					<dl>
						<dt><label>{L_PASSWORD}:</label></dt>
						<dd><input type="password" name="password" size="25" class="inputbox autowidth" /></dd>
						<dd><a href="{U_SEND_PASSWORD}">{L_SEND_PASSWORD}</a></dd>
					</dl>
					<!-- BEGIN switch_allow_autologin -->
					<dl>
						<dd><label><input type="checkbox" name="autologin" /> {L_AUTO_LOGIN}</label></dd>
					</dl>
					<!-- END switch_allow_autologin -->
					<dl>
						<dt>&nbsp;</dt>
						<dd>{S_HIDDEN_FIELDS}<input type="submit" name="login" value="{L_LOGIN}" class="button1" /></dd>
					</dl>
				</fieldset>
			</div>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		</form>

