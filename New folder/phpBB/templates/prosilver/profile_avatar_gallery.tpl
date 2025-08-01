
		<h2>{L_PROFILE}</h2>
		<div class="panel bg3">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div style="width:100%">
			<div id="cp-main" class="ucp-main">
				<form action="{S_PROFILE_ACTION}" {S_FORM_ENCTYPE} method="post">
				<h2>{L_AVATAR_GALLERY}</h2>
				<div class="panel">
					<div class="inner"><span class="corners-top"><span></span></span>
					<fieldset>
						<label>{L_CATEGORY}: {S_CATEGORY_SELECT}</label>
						<input type="submit" value="{L_GO}" name="avatargallery" class="button2" />
					</fieldset>
					<table id="gallery">
						<!-- BEGIN avatar_row -->
						<tr>
							<!-- BEGIN avatar_column -->
							<td><img src="{avatar_row.avatar_column.AVATAR_IMAGE}" alt="" /><br /></td>
							<!-- END avatar_column -->
						</tr>
						<tr>
							<!-- BEGIN avatar_option_column -->
							<td><input type="radio" name="avatarselect" value="{avatar_row.avatar_option_column.S_OPTIONS_AVATAR}" /></td>
							<!-- END avatar_option_column -->
						</tr>
						<!-- END avatar_row -->
					</table>
					<span class="corners-bottom"><span></span></span></div>
				</div>
				<fieldset class="submit-buttons">
					{S_HIDDEN_FIELDS}<input type="submit" value="{L_SELECT_AVATAR}" name="submitavatar" class="button2" />&nbsp; <input type="submit" name="cancelavatar" value="{L_RETURN_PROFILE}" class="button2" />
				</fieldset>
				</form>
			</div>
			<div class="clear"></div>
			</div>
			<span class="corners-bottom"><span></span></span></div>
		</div>
