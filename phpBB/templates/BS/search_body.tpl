<div class="container-fluid">
	<div class="row">
	  <div class="col">
	      
<form action="{S_SEARCH_ACTION}" method="POST">
<div class="container-fluid mx-0">
  <div class="row pb-2">
	  <div class="col px-0"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></div>
  </div>
</div>
	<div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	  <div class="row nav mx-0 pl-2 pb-1 d-flex flex-row align-items-center"> 
	  <div class="col pt-2 text-center">{L_SEARCH_QUERY}</div>
	</div>
	<div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1"> 
		<div class="col py-2 text-start gen">{L_SEARCH_KEYWORDS}:</span><br /><span class="gensmall">{L_SEARCH_KEYWORDS_EXPLAIN}</div>
		<div class="col py-2 text-start genmed"><input type="text" style="width: 300px" class="post" name="search_keywords" size="30" /><br /><input type="radio" name="search_terms" value="any" checked="checked" /> {L_SEARCH_ANY_TERMS}<br /><input type="radio" name="search_terms" value="all" /> {L_SEARCH_ALL_TERMS}</div>
	</div>
	<div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1"> 
		<div class="col py-2 text-start gen">{L_SEARCH_AUTHOR}:</span><br /><span class="gensmall">{L_SEARCH_AUTHOR_EXPLAIN}</div>
		<div class="col py-2 text-start genmed"><input type="text" style="width: 300px" class="post" name="search_author" size="30" /></div>
	</div>
	<div class="row"> 
		<div class="col py-2 navbr text-center">{L_SEARCH_OPTIONS}</div>
	</div>
	<div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1 text-start"> 
		<div class="col-3 py-2 pr-2 gen"><span class="gen">{L_FORUM}:</div>
		<div class="col-3 py-2 genmed"><span class="genmed"><select class="post" name="search_forum">{S_FORUM_OPTIONS}</select></div>
		<div class="col-2 py-2 pr-2 gen"><span class="gen">{L_SEARCH_PREVIOUS}:</div>
		<div class="col-4 py-2 genmed"><span class="genmed"><select class="post" name="search_time">{S_TIME_OPTIONS}</select><br /><input type="radio" name="search_fields" value="all" checked="checked" /> {L_SEARCH_MESSAGE_TITLE}<br /><input type="radio" name="search_fields" value="msgonly" /> {L_SEARCH_MESSAGE_ONLY}</div>
	</div>
	<div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1 text-start"> 
		<div class="col-3 py-2 pr-2 gen">{L_CATEGORY}:</div>
		<div class="col-3 py-2 genmed"><select class="post" name="search_cat">{S_CATEGORY_OPTIONS}</select></div>
		<div class="col-2 py-2 pr-2 gen">{L_SORT_BY}:</div>
		<div class="col-4 py-2 genmed"><select class="post" name="sort_by">{S_SORT_OPTIONS}</select><br /><input type="radio" name="sort_dir" value="ASC" /> {L_SORT_ASCENDING}<br /><input type="radio" name="sort_dir" value="DESC" checked="checked" /> {L_SORT_DESCENDING}</div>
	</div>
	<div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1 text-start"> 
		<div class="col-3 py-2 pr-2 gen">{L_DISPLAY_RESULTS}:</div>
		<div class="col-3 py-2 genmed"><input type="radio" name="show_results" value="posts" />{L_POSTS}<input type="radio" name="show_results" value="topics" checked="checked" />{L_TOPICS}</div>
		<div class="col-2 py-2 gen">{L_RETURN_FIRST}</div>
		<div class="col-4 py-2 genmed"><select class="post" name="return_chars">{S_CHARACTER_OPTIONS}</select> {L_CHARACTERS}</div>
	</div>
	<div class="row">
		<div class="col text-center pt-1">{S_HIDDEN_FIELDS}<input class="mainoption" type="submit" value="{L_SEARCH}" /></div>
	</div>	
</div>
<div class="row py-1">
	  <div class="col text-right gensmall">{S_TIMEZONE}</div>
</div>
</form>

<div class="row pb-2">
	  <div class="col text-right px-0">{JUMPBOX}</div>
	  
    </div>
  </div>	
</div>