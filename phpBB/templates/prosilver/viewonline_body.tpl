
		<h2>{TOTAL_REGISTERED_USERS_ONLINE}</h2>
		<p>{TOTAL_GUEST_USERS_ONLINE}</p>
		<div class="forumbg">
			<div class="inner"><span class="corners-top"><span></span></span>
			<table class="table1" cellspacing="1">
				<thead>
					<tr>
						<th class="name">{L_USERNAME}</th>
						<th class="info">{L_FORUM_LOCATION}</th>
						<th class="active">{L_LAST_UPDATE}</th>
					</tr>
				</thead>
				<tbody>
					<!-- BEGIN reg_user_row -->
					<tr class="{reg_user_row.ROW_CLASS}">
						<td><a href="{reg_user_row.U_USER_PROFILE}" class="title">{reg_user_row.USERNAME}</a></td>
						<td class="info"><a href="{reg_user_row.U_FORUM_LOCATION}">{reg_user_row.FORUM_LOCATION}</a></td>
						<td class="info">{reg_user_row.LASTUPDATE}</td>
					</tr>
					<!-- END reg_user_row -->
					<!-- BEGIN guest_user_row -->
					<tr class="{guest_user_row.ROW_CLASS}">
						<td>{guest_user_row.USERNAME}</td>
						<td class="info"><a href="{guest_user_row.U_FORUM_LOCATION}">{guest_user_row.FORUM_LOCATION}</a></td>
						<td class="info">{guest_user_row.LASTUPDATE}</td>
					</tr>
					<!-- END guest_user_row -->
				</tbody>
			</table>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		{JUMPBOX}
