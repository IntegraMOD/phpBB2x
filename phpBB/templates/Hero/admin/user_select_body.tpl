				<h1>{L_USER_TITLE}</h1>
				<p>{L_USER_EXPLAIN}</p>
				<form method="post" name="post" action="{S_USER_ACTION}">
				<fieldset>
					<legend>{L_USER_SELECT}</legend>
					<p>
						<input type="text" name="username" maxlength="50" size="20" /> <input type="hidden" name="mode" value="edit" />{S_HIDDEN_FIELDS}<input type="submit" name="submituser" value="{L_LOOK_UP}" class="button2" /> <input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="button2" onclick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'height=250,resizable=yes,width=400');return false;" />
					</p>
				</fieldset>
				</form>