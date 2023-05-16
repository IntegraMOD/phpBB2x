				<h1>{L_BAN_TITLE}</h1>
				<p>{L_BAN_EXPLAIN}</p>
				<form method="post" name="post" action="{S_BANLIST_ACTION}">
				<fieldset>
					<legend>{L_BAN_USER}</legend>
					<dl>
						<dt><label>{L_USERNAME}:</label></dt>
						<dd><input type="text" name="username" maxlength="50" size="20" /> <input type="hidden" name="mode" value="edit" />{S_HIDDEN_FIELDS} <input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="button2" onclick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'height=250,resizable=yes,width=400');return false;" /></dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_UNBAN_USER}</legend>
					<dl>
						<dt><label>{L_USERNAME}:</label><br /><span>{L_UNBAN_USER_EXPLAIN}</span></dt>
						<dd>{S_UNBAN_USERLIST_SELECT}</dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_BAN_IP}</legend>
					<dl>
						<dt><label>{L_IP_OR_HOSTNAME}:</label><br /><span>{L_BAN_IP_EXPLAIN}</span></dt>
						<dd><input type="text" name="ban_ip" size="35" /></dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_UNBAN_IP}</legend>
					<dl>
						<dt><label>{L_IP_OR_HOSTNAME}:</label><br /><span>{L_UNBAN_IP_EXPLAIN}</span></dt>
						<dd>{S_UNBAN_IPLIST_SELECT}</dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_BAN_EMAIL}</legend>
					<dl>
						<dt><label>{L_EMAIL_ADDRESS}:</label><br /><span>{L_BAN_EMAIL_EXPLAIN}</span></dt>
						<dd><input type="text" name="ban_email" size="35" /></dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>{L_UNBAN_EMAIL}</legend>
					<dl>
						<dt><label>{L_EMAIL_ADDRESS}:</label><br /><span>{L_UNBAN_EMAIL_EXPLAIN}</span></dt>
						<dd>{S_UNBAN_EMAILLIST_SELECT}</dd>
					</dl>
				</fieldset>
				<p class="submit-buttons">
					<input class="button1" type="submit" name="submit" value="{L_SUBMIT}" />&nbsp; 
					<input class="button2" type="reset" value="{L_RESET}" />
				</p>
				</form>
				<p>{L_BAN_EXPLAIN_WARN}</p>