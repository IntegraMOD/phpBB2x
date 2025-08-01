<!-- BEGIN switch_inline_mode -->
<div class="container-fluid my-2 bg-light rounded-2 bdr-lt boxwrapper">
	<div class="row text-center bg-body-secondary rounded-2 bdr-cat mt-2 mx-0"> 
		<div class="col py-2 navbr">{L_TOPIC_REVIEW}</div>
	</div>
    <div class="row py-1 px-0 my-1"> 
		<div class="col embed-responsive embed-responsive-1by1">
		    <div class="embed-responsive-item" width="100%" src="{U_REVIEW_TOPIC}" >
<!-- END switch_inline_mode -->
				<div class="container-fluid mx-0 px-0">
					<div class="row navbr mx-0 px-0 my-2">
						<div class="col-3 me-2">{L_AUTHOR}</div>
						<div class="col">{L_MESSAGE}</div>
					</div>
				</div>	
				<div class="container-fluid mx-0 px-0">
					<!-- BEGIN postrow -->
					<div class="row mx-0 px-0">
						<div class="col-3 bg-body-secondary rounded-2 bdr-cat pt-2 me-2"><a name="{postrow.U_POST_ID}"></a>{postrow.POSTER_NAME}</div>
						<div class="col bg-body-secondary rounded-2 bdr-cat pt-2 me-2">
							<div class="row"> 
								<div class="col"><img src="{postrow.MINI_POST_IMG}" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" /><span class="postdetails">{L_POSTED}: {postrow.POST_DATE}<span class="gen">&nbsp;</span>&nbsp;&nbsp;&nbsp;{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></div>
							</div>
							<div class="row"> 
								<div class="col hr">&nbsp;</div>
							</div>
							<div class="row"> 
								<div class="col"><span class="postbody">{postrow.MESSAGE}</span><br><br></div>
							</div>
						</div>
					</div>
					<!-- END postrow -->
				 </div>
<!-- BEGIN switch_inline_mode -->
		    </div>
		</div>
  </div>
</div>
<!-- END switch_inline_mode -->