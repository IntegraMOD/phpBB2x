
		<script type="text/javascript"> <!--
			function select_switch(status)
			{
				for (i = 0; i < document.privmsg_list.length; i++)
				{
					document.privmsg_list.elements[i].checked = status;
				}
			}
		//--></script>
		<h2>{L_PROFILE}</h2>
		<div class="panel bg3">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div style="width:100%">
			<div id="cp-menu">
				<div id="navigation">
					<ul>
						<li>{INBOX}</li>
						<li>{SENTBOX}</li>
						<li>{OUTBOX}</li>
						<li>{SAVEBOX}</li>
					</ul>
				</div>
			</div>
			<div id="cp-main" class="ucp-main">
				<h2>{BOX_SIZE_STATUS}</h2>
				<form method="post" name="privmsg_list" action="{S_PRIVMSGS_ACTION}">
				<div class="panel">
					<div class="inner"><span class="corners-top"><span></span></span>




					<div class="lbuttons"><a href="{U_POST_NEW_PM}" class="button icon-button post-icon" title="{L_POST_NEW_PM}">{L_BUTTON_PM_NEW}</a></div>



					<ul class="linklist">
						<li class="rightside pagination">{PAGE_NUMBER}&nbsp; <span>{PAGINATION}</span></li>
					</ul>
					<ul class="topiclist">
						<li class="header">
							<dl>
								<dt>{L_MESSAGE}</dt>
								<dd class="mark">{L_MARK}</dd>
							</dl>
						</li>
					</ul>
					<ul class="topiclist cplist pmlist">
					<!-- BEGIN listrow -->
						<li class="row {listrow.ROW_CLASS}">
							<dl class="icon">
								<dt style="background-image: url({listrow.PRIVMSG_FOLDER_IMG}); background-repeat: no-repeat;"><a href="{listrow.U_READ}" class="topictitle">{listrow.SUBJECT}</a><br /><a href="{listrow.U_FROM_USER_PROFILE}" class="name">{listrow.FROM}</a> &raquo; {listrow.DATE}</dt>
								<dd class="mark"><input type="checkbox" name="mark[]2" value="{listrow.S_MARK_ID}" /></dd>
							</dl>
						</li>
					<!-- END listrow -->
					</ul>
					<!-- BEGIN switch_no_messages -->
					<p><strong>{L_NO_MESSAGES}</strong></p>
					<!-- END switch_no_messages -->
					<fieldset class="display-actions">
						{S_HIDDEN_FIELDS}<input type="submit" name="save" value="{L_SAVE_MARKED}" class="button2" />&nbsp; <input type="submit" name="delete" value="{L_DELETE_MARKED}" class="button2" />&nbsp; <input type="submit" name="deleteall" value="{L_DELETE_ALL}" class="button2" />
						<div><a href="javascript:select_switch(true);">{L_MARK_ALL}</a> &bull; <a href="javascript:select_switch(false);">{L_UNMARK_ALL}</a></div>
					</fieldset>
					<hr />
					<ul class="linklist">
						<li class="rightside pagination">{PAGE_NUMBER}&nbsp; <span>{PAGINATION}</span></li>
					</ul>
					<span class="corners-bottom"><span></span></span></div>
				</div>
				<fieldset class="display-options">
					<label>{L_DISPLAY_MESSAGES}: <select name="msgdays">{S_SELECT_MSG_DAYS}</select> <input type="submit" value="{L_GO}" name="submit_msgdays" class="button2" /></label>
				</fieldset>
				</form>
			</div>
			<div class="clear"></div>
			</div>
			<span class="corners-bottom"><span></span></span></div>
		</div>
