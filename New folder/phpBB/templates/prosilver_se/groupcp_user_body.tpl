

		<h2>{L_USERGROUPS}</h2>
		<!-- BEGIN switch_groups_joined -->
		<div class="panel">
			<div class="inner"><span class="corners-top"><span></span></span>	
			<h3>{L_GROUP_MEMBERSHIP_DETAILS}</h3>
			<fieldset>
			<!-- BEGIN switch_groups_member -->
			<form method="get" action="{S_USERGROUP_ACTION}">
				<dl>
					<dt>{L_YOU_BELONG_GROUPS}:</dt>
					<dd>{GROUP_MEMBER_SELECT} <input type="submit" value="{L_VIEW_INFORMATION}" class="button2" />{S_HIDDEN_FIELDS}</dd>
				</dl>
			</form>
			<!-- END switch_groups_member -->
			<!-- BEGIN switch_groups_pending -->
			<form method="get" action="{S_USERGROUP_ACTION}">
				<dl>
					<dt>{L_PENDING_GROUPS}:</dt>
					<dd>{GROUP_PENDING_SELECT} <input type="submit" value="{L_VIEW_INFORMATION}" class="button2" />{S_HIDDEN_FIELDS}</dd>
				</dl>
			</form>
			<!-- END switch_groups_pending -->
			</fieldset>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		<!-- END switch_groups_joined -->
		<!-- BEGIN switch_groups_remaining -->
		<form method="get" action="{S_USERGROUP_ACTION}">
		<div class="panel">
			<div class="inner"><span class="corners-top"><span></span></span>	
			<h3>{L_JOIN_A_GROUP}</h3>
			<fieldset>
				<dl>
					<dt>{L_SELECT_A_GROUP}:</dt>
					<dd>{GROUP_LIST_SELECT} <input type="submit" value="{L_VIEW_INFORMATION}" class="button2" />{S_HIDDEN_FIELDS}</dd>
				</dl>
			</fieldset>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		</form>
		<!-- END switch_groups_remaining -->
		{JUMPBOX}

