

		<form action="{S_MODCP_ACTION}" method="post">
		<div class="panel">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div class="content">
				<h2>{MESSAGE_TITLE}</h2>
				<fieldset>
				<dl class="fields2">
					<dt><label>{L_MOVE_TO_FORUM}:</label></dt>
					<dd>{S_FORUM_SELECT}</dd>
					<dd><label><input type="checkbox" name="move_leave_shadow" checked="checked" />{L_LEAVESHADOW}</label></dd>
				</dl>
				<dl class="fields2">
					<dt>&nbsp;</dt>
					<dd><strong>{MESSAGE_TEXT}</strong></dd>
				</dl>
				</fieldset>
				<fieldset class="submit-buttons">
					{S_HIDDEN_FIELDS}<input type="submit" name="confirm" value="{L_YES}" class="button1" />&nbsp; 
					<input type="submit" name="cancel" value="{L_NO}" class="button2" />
				</fieldset>
			</div>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		</form>

