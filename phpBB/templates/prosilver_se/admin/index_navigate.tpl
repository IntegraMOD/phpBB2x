				<img src="../templates/prosilver_se/admin/images/phpbb_logo.gif" alt="phpBB" />
				<div id="menu">
					<ul>
						<li class="header">{L_ADMIN}</li>
						<li><a href="{U_ADMIN_INDEX}" target="main"><span>{L_ADMIN_INDEX}</span></a></li>
						<li><a href="{U_FORUM_INDEX}" target="_parent"><span>{L_FORUM_INDEX}</span></a></li>
						<li><a href="{U_FORUM_INDEX}" target="main"><span>{L_PREVIEW_FORUM}</span></a></li>
					</ul>
					<!-- BEGIN catrow -->
					<ul>
						<li class="header">{catrow.ADMIN_CATEGORY}</li>
						<!-- BEGIN modulerow -->
						<li><a href="{catrow.modulerow.U_ADMIN_MODULE}" target="main"><span>{catrow.modulerow.ADMIN_MODULE}</span></a></li>
						<!-- END modulerow -->
					</ul>
					<!-- END catrow -->
				</div>