				<h1>{L_RANKS_TITLE}</h1>
				<p>{L_RANKS_TEXT}</p>
				<form action="{S_RANK_ACTION}" method="post">
				<fieldset>
					<legend>{L_RANKS_TITLE}</legend>
					<dl>
						<dt><label>{L_RANK_TITLE}:</label></dt>
						<dd><input type="text" name="title" size="35" maxlength="40" value="{RANK}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_RANK_SPECIAL}:</label></dt>
						<dd><input type="radio" class="radio" name="special_rank" value="1" {SPECIAL_RANK} /> {L_YES}&nbsp; <input type="radio" class="radio" name="special_rank" value="0" {NOT_SPECIAL_RANK} /> {L_NO}</dd>
					</dl>
					<dl>
						<dt><label>{L_RANK_MINIMUM}:</label></dt>
						<dd><input type="text" name="min_posts" size="5" maxlength="10" value="{MINIMUM}" /></dd>
					</dl>
					<dl>
						<dt><label>{L_RANK_IMAGE}:</label><br /><span>{L_RANK_IMAGE_EXPLAIN}</span></dt>
						<dd><input type="text" name="rank_image" size="40" maxlength="255" value="{IMAGE}" /><br />{IMAGE_DISPLAY}</dd>
					</dl>
					<p class="submit-buttons">
					{S_HIDDEN_FIELDS}
					<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />&nbsp; 
					<input type="reset" value="{L_RESET}" class="button2" />
					</p>
				</fieldset>
				</form>