	        <div class="row"> 
			  <div class="col"><br clear="all" />
				<form method="POST" action="{S_POLL_ACTION}">
				<div class="container">
				  <div class="row py-2">
					<div class="col navbr">{POLL_QUESTION}</div>
				  </div>
                  </div>
	              <div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 mb-2"> 
                    <div class="col">
					  <!-- BEGIN poll_option -->
					  <div class="row py-1">
					    <div class="col gen text-center"><input type="radio" name="vote_id" value="{poll_option.POLL_OPTION_ID}" />{poll_option.POLL_OPTION_CAPTION}</div>
					  </div>
					  <!-- END poll_option -->

					  <div class="row py-1">
						<div class="col"><input type="submit" name="submit" value="{L_SUBMIT_VOTE}" class="mainoption" /></div>
					  </div>
					  <div class="row py-1">
					    <div class="col"><span class="gensmall"><b><a href="{U_VIEW_RESULTS}" class="gensmall">{L_VIEW_RESULTS}</a></b></span></div>
					  </div>
					</div>
				  </div>{S_HIDDEN_FIELDS}
				  </form>
				</div>
			</div>
	