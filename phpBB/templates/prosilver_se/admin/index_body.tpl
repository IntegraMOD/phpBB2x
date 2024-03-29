<script>
function phpbb_credits() {
  var x = document.getElementById("credits");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
				<a name="maincontent"></a>
				<h1>{L_WELCOME}</h1>
				<p>{L_ADMIN_INTRO}</p>
				<h2>{L_FORUM_STATS}</h2>
				<table cellspacing="1">
					<col class="col1" /><col class="col2" /><col class="col1" /><col class="col2" />
				<thead>
				<tr>
					<th>{L_STATISTIC}</th>
					<th>{L_VALUE}</th>
					<th>{L_STATISTIC}</th>
					<th>{L_VALUE}</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>{L_NUMBER_POSTS}:</td>
					<td><strong>{NUMBER_OF_POSTS}</strong></td>
					<td>{L_POSTS_PER_DAY}:</td>
					<td><strong>{POSTS_PER_DAY}</strong></td>
				</tr>
				<tr>
					<td>{L_NUMBER_TOPICS}:</td>
					<td><strong>{NUMBER_OF_TOPICS}</strong></td>
					<td>{L_TOPICS_PER_DAY}:</td>
					<td><strong>{TOPICS_PER_DAY}</strong></td>
				</tr>
				<tr>
					<td>{L_NUMBER_USERS}:</td>
					<td><strong>{NUMBER_OF_USERS}</strong></td>
					<td>{L_USERS_PER_DAY}:</td>
					<td><strong>{USERS_PER_DAY}</strong></td>
				</tr>
				<tr>
					<td>{L_BOARD_STARTED}:</td>
					<td><strong>{START_DATE}</strong></td>
					<td>{L_AVATAR_DIR_SIZE}:</td>
					<td><strong>{AVATAR_DIR_SIZE}</strong></td>
				</tr>
				<tr>
					<td>{L_DB_SIZE}:</td>
					<td><strong>{DB_SIZE}</strong></td>
					<td>{L_GZIP_COMPRESSION}:</td>
					<td><strong>{GZIP_COMPRESSION}</strong></td>
				</tr>
				<tr> 
					<td>{L_PHP_VERSION}:</td>
					<td><strong>{PHP_VERSION}</strong></td>
					<td>{L_MYSQL_VERSION}:</td>
					<td><strong>{MYSQL_VERSION}</strong></td>
				</tr>
				<tr>
				  <td valign="top"><a href="#" onclick="phpbb_credits()">credits</a></td>
				  <td id="credits" style="display: none" colspan="3">
				    <div> 
					  <ul class="credits">
						<li class="med">phpBB 2.0.23</li>
						<li class="author">Author: The phpBB Group</li>
						<li class="med">phpBB 2.0.23 misc fixes</li>
						<li class="author">MOD Author: achaab & BoBmArLeY</li>
						<li class="med">phpBB 2.0.23 to 2.0.24</li>
						<li class="author">MOD Author: Dog Cow</li>
						<li class="med">phpBB 2.0.24 to 2.0.25</li>
						<li class="author">MOD Author: Helter https://integramod.com</li>
						<li class="med">DHTML Collapsible FAQ</li>
						<li class="author">MOD Author: Markus_Petrux http://www.phpmix.com</li>
						<li class="med">DHTML Collapsible ACP MENU</li>
						<li class="author">MOD Author: Markus_Petrux http://www.phpmix.com</li>
					  </ul> 
				    </div>
				  </td>
				  <td></td>
				  <td></td>				  
				</tr>
				</tbody>
				</table>
				<h2>{L_VERSION_INFORMATION}</h2>
				{VERSION_INFO}
				<h2>{L_WHO_IS_ONLINE}</h2>
				<table cellspacing="1">
				<thead>
				<tr>
					<th>{L_USERNAME}</th>
					<th>{L_STARTED}</th>
					<th>{L_LAST_UPDATE}</th>
					<th>{L_FORUM_LOCATION}</th>
					<th>{L_IP_ADDRESS}</th>
				</tr>
				</thead>
				<tbody>
				<!-- BEGIN reg_user_row -->
				<tr class="{reg_user_row.ROW_CLASS}">
					<td><a href="{reg_user_row.U_USER_PROFILE}">{reg_user_row.USERNAME}</a></td>
					<td>{reg_user_row.STARTED}</td>
					<td>{reg_user_row.LASTUPDATE}</td>
					<td><a href="{reg_user_row.U_FORUM_LOCATION}">{reg_user_row.FORUM_LOCATION}</a></td>
					<td><a href="{reg_user_row.U_WHOIS_IP}" target="_phpbbwhois">{reg_user_row.IP_ADDRESS}</a></td>
				</tr>
				<!-- END reg_user_row -->
				<!-- BEGIN guest_user_row -->
				<tr class="{guest_user_row.ROW_CLASS}">
					<td>{guest_user_row.USERNAME}</td>
					<td>{guest_user_row.STARTED}</td>
					<td>{guest_user_row.LASTUPDATE}</td>
					<td><a href="{guest_user_row.U_FORUM_LOCATION}">{guest_user_row.FORUM_LOCATION}</a></td>
					<td><a href="{guest_user_row.U_WHOIS_IP}" target="_phpbbwhois">{guest_user_row.IP_ADDRESS}</a></td>
				</tr>
				<!-- END guest_user_row -->
				</tbody>
				</table>