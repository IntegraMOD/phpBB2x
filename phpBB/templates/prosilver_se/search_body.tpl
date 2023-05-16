
		<h2 class="solo">{L_SEARCH}</h2>
		<form method="get" action="{S_SEARCH_ACTION}">
		<div class="panel">
			<div class="inner"><span class="corners-top"><span></span></span>
			<h3>{L_SEARCH_QUERY}</h3>
			<fieldset>
			<dl>
				<dt><label>{L_SEARCH_KEYWORDS}:</label><br /><span>{L_SEARCH_KEYWORDS_EXPLAIN}</span></dt>
				<dd><input type="text" class="inputbox" name="search_keywords" size="40" title="{L_SEARCH_KEYWORDS}" /></dd>
				<dd><label><input type="radio" name="search_terms" value="all" checked="checked" /> {L_SEARCH_ALL_TERMS}</label></dd>
				<dd><label><input type="radio" name="search_terms" value="any" /> {L_SEARCH_ANY_TERMS}</label></dd>
			</dl>
			<dl>
				<dt><label>{L_SEARCH_AUTHOR}:</label><br /><span>{L_SEARCH_AUTHOR_EXPLAIN}</span></dt>
				<dd><input type="text" class="inputbox" name="search_author" size="40" title="{L_SEARCH_AUTHOR}" /></dd>
			</dl>
			</fieldset>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		<div class="panel bg2">
			<div class="inner"><span class="corners-top"><span></span></span>
			<h3>{L_SEARCH_OPTIONS}</h3>
			<fieldset>
			<dl>
				<dt><label>{L_FORUM}:</label></dt>
				<dd><select name="search_forum" title="{L_FORUM}">{S_FORUM_OPTIONS}</select></dd>
			</dl>
			<dl>
				<dt><label>{L_CATEGORY}:</label></dt>
				<dd><select name="search_cat" title="{L_CATEGORY}">{S_CATEGORY_OPTIONS}</select></dd>
			</dl>
			<hr class="dashed" />
			<dl>
				<dt><label>{L_DISPLAY_RESULTS}:</label></dt>
				<dd>
					<label><input type="radio" name="show_results" value="posts" checked="checked" /> {L_POSTS}</label> 
					<label><input type="radio" name="show_results" value="topics" /> {L_TOPICS}</label>
				</dd>
			</dl>
			<dl>
				<dt><label>{L_SORT_BY}:</label></dt>
				<dd><select name="sort_by">{S_SORT_OPTIONS}</select>&nbsp;
					<label><input type="radio" name="sort_dir" value="ASC" /> {L_SORT_ASCENDING}</label> 
					<label><input type="radio" name="sort_dir" value="DESC" checked="checked" /> {L_SORT_DESCENDING}</label>
				</dd>
			</dl>
			<dl>
				<dt><label>{L_SEARCH_PREVIOUS}:</label></dt>
				<dd><select name="search_time">{S_TIME_OPTIONS}</select></dd>
				<dd><label><input type="radio" name="search_fields" value="all" checked="checked" /> {L_SEARCH_MESSAGE_TITLE}</label></dd>
				<dd><label><input type="radio" name="search_fields" value="msgonly" /> {L_SEARCH_MESSAGE_ONLY}</label></dd>
			</dl>
			<dl>
				<dt><label>{L_RETURN_FIRST}:</label></dt>
				<dd><select name="return_chars" title="{L_RETURN_FIRST}">{S_CHARACTER_OPTIONS}</select> {L_CHARACTERS}</dd>
			</dl>
			</fieldset>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		<div class="panel bg3">
			<div class="inner"><span class="corners-top"><span></span></span>
			<fieldset class="submit-buttons">
				{S_HIDDEN_FIELDS}
				<input type="submit" name="submit" value="{L_SEARCH}" class="button1" />
			</fieldset>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		</form>

