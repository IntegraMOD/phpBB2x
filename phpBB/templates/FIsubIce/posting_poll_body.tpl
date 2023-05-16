          <div class="container-fluid px-0">
			<div class="row d-flex align-items-center th">
	          <div class="col text-center">{L_ADD_A_POLL}</div>	          
            </div>
            <div class="row row1 hr1">
              <div class="col gensmall text-center">{L_ADD_POLL_EXPLAIN}</div>
            </div>
            <div class="row hr1">
              <div class="col-3 row1 gen font-weight-bold">{L_POLL_QUESTION}</div>
              <div class="col row2 genmed"><input type="text" name="poll_title" size="50" maxlength="255" class="post" value="{POLL_TITLE}" /></div>
            </div>
			<!-- BEGIN poll_option_rows -->
            <div class="row hr1">
        	  <div class="col-3 row1 gen font-weight-bold">{L_POLL_OPTION}</div>
              <div class="col row2 genmed"><input type="text" name="poll_option_text[{poll_option_rows.S_POLL_OPTION_NUM}]" size="50" class="post" maxlength="255" value="{poll_option_rows.POLL_OPTION}" /></span> &nbsp;<input type="submit" name="edit_poll_option" value="{L_UPDATE_OPTION}" class="liteoption" /> <input type="submit" name="del_poll_option[{poll_option_rows.S_POLL_OPTION_NUM}]" value="{L_DELETE_OPTION}" class="liteoption" /></div>
            </div>
			<!-- END poll_option_rows -->
            <div class="row hr1">
              <div class="col-3 row1 gen font-weight-bold">{L_POLL_OPTION}</div>
              <div class="col row2 genmed"><input type="text" name="add_poll_option_text" size="50" maxlength="255" class="post" value="{ADD_POLL_OPTION}" /></span> &nbsp;<input type="submit" name="add_poll_option" value="{L_ADD_OPTION}" class="liteoption" /></div>
            </div>
            <div class="row hr1">
              <div class="col-3 row1 gen font-weight-bold">{L_POLL_LENGTH}</div>
              <div class="col row2 genmed"><input type="text" name="poll_length" size="3" maxlength="3" class="post" value="{POLL_LENGTH}" /></span>&nbsp;<span class="gen"><b>{L_DAYS}</b></span> &nbsp; <span class="gensmall">{L_POLL_LENGTH_EXPLAIN}</span></div>
            </div> 
			<!-- BEGIN switch_poll_delete_toggle -->
            <div class="row hr2">
              <div class="col-3 row1 gen font-weight-bold">{L_POLL_DELETE}</div>
        	  <div class="col row2 genmed"><input type="checkbox" name="poll_delete" /></div>
            </div>
		  <!-- END switch_poll_delete_toggle -->
          </div>

