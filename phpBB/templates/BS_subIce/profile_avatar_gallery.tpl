<div class="container-fluid">
	<div class="row">
	  <div class="col"> 
	  
<div class="container-fluid ml-0 pb-2">
  <div class="row">
    <div class="col nav"><a href="{U_INDEX}">{L_INDEX}</a></div>
  </div>
</div>
<form action="{S_PROFILE_ACTION}" method="post">
    
<div class="container-fluid forumline">
	<div class="row"> 
	  <div class="col th pt-2 text-center">{L_AVATAR_GALLERY}</div>
	</div>
	<div class="row"> 
	  <div height="28" class="col catBottom hr pt-1 text-center"><span class="genmed">{L_CATEGORY}:&nbsp;{S_CATEGORY_SELECT}&nbsp;<input type="submit" class="liteoption" value="{L_GO}" name="avatargallery" /></span></div>
	</div>
	<!-- BEGIN avatar_row -->
	<div class="row"> 
	<!-- BEGIN avatar_column -->
		<div class="col"><img src="{avatar_row.avatar_column.AVATAR_IMAGE}" alt="{avatar_row.avatar_column.AVATAR_NAME}" title="{avatar_row.avatar_column.AVATAR_NAME}" /></div>
	<!-- END avatar_column -->
	</div>
	<div class="row">
	<!-- BEGIN avatar_option_column -->
		<div class="col"><input type="radio" name="avatarselect" value="{avatar_row.avatar_option_column.S_OPTIONS_AVATAR}" /></div>
	<!-- END avatar_option_column -->
	</div>
	<!-- END avatar_row -->
	<div class="row hr1"> 
	  <div class="col catBottom text-center pt-1">{S_HIDDEN_FIELDS} 
		<input type="submit" name="submitavatar" value="{L_SELECT_AVATAR}" class="mainoption" />
		&nbsp;&nbsp; 
		<input type="submit" name="cancelavatar" value="{L_RETURN_PROFILE}" class="liteoption" />
	  </div>
	</div>
  </div>
</form>

    </div>
  </div>
</div>