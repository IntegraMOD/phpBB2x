
		<h2>MCP</h2>
		<div class="panel bg3">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div style="width:100%">
			<div id="cp-main" class="mcp-main">
				<h2>{L_IP_INFO}</h2>
				<div class="panel" id="ip">
					<div class="inner"><span class="corners-top"><span></span></span>
					<p>{L_THIS_POST_IP}: {IP} (<a href="{U_LOOKUP_IP}">{L_LOOKUP_IP}</a>)</p>
					<table class="table1" cellspacing="1">
					<thead>
					<tr>
						<th class="name">{L_OTHER_USERS}</th>
						<th class="posts">&nbsp;</th>
					</tr>
					</thead>
					<tbody>
					<!-- BEGIN userrow -->
					<tr class="row {userrow.ROW_CLASS}">
						<td><a href="{userrow.U_PROFILE}">{userrow.USERNAME}</a></td>
						<td class="posts"><a href="{userrow.U_SEARCHPOSTS}" title="{userrow.L_SEARCH_POSTS}">{userrow.POSTS}</a></td>
					</tr>
					<!-- END userrow -->
					</tbody>
					</table>
					<table class="table1" cellspacing="1">
					<thead>
					<tr>
						<th class="name">{L_OTHER_IPS}</th>
						<th class="posts">&nbsp;</th>
					</tr>
					</thead>
					<tbody>
					<!-- BEGIN iprow -->
					<tr class="row {iprow.ROW_CLASS}">
						<td>{iprow.IP} (<a href="{iprow.U_LOOKUP_IP}">{L_LOOKUP_IP}</a>)</td>
						<td class="posts">{iprow.POSTS}</td>
					</tr>
					<!-- END iprow -->
					</tbody>
					</table>
					<span class="corners-bottom"><span></span></span></div>
				</div>
			</div>
			<div class="clear"></div>
			</div>
			<span class="corners-bottom"><span></span></span></div>
		</div>
