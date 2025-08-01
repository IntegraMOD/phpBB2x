<div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center py-2 my-2 mx-0">
  <div class="col">
	<div id="container">
	  <div class="row">
		<div class="col"><span class="gen"><b>{POLL_QUESTION}</b></span></div>
	  </div>
	  <div class="row">
		<div class="col">
		  <div id="container">
			<!-- BEGIN poll_option -->
			<div class="row d-flex bg-body-secondary rounded-2 bdr-cat align-items-center mx-0">
			  <div class="col text-end gen">{poll_option.POLL_OPTION_CAPTION}</div>
			  <div class="col">
				<div id="container">
				  <div class="row my-1">
					<div class="col">
					  <table cellspacing="0" cellpadding="0" border="0">
				        <tr> 
					      <td><img src="templates/BS/images/vote_lcap.gif" width="4" alt="" height="12" /></td>
					      <td><img src="{poll_option.POLL_OPTION_IMG}" width="{poll_option.POLL_OPTION_IMG_WIDTH}" height="12" alt="{poll_option.POLL_OPTION_PERCENT}" /></td>
					      <td><img src="templates/BS/images/vote_rcap.gif" width="4" alt="" height="12" /></td>
				        </tr>
				      </table>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col"><b><span class="gen">&nbsp;{poll_option.POLL_OPTION_PERCENT}&nbsp;</span></b></div>
			  <div class="col"><span class="gen">[ {poll_option.POLL_OPTION_RESULT} ]</span></div>
			</div>
			<!-- END poll_option -->
		  </div>
		</div>
	  </div>
	  <div class="row">
		<div class="col"><span class="gen"><b>{L_TOTAL_VOTES} : {TOTAL_VOTES}</b></span></div>
	  </div>
	</div>
  </div>
</div>