<!-- BEGIN switch_inline_mode -->
<div class="container-fluid px-0">
    <div class="row"> 
		<div class="d-flex flex-column align-items-center"><b>{L_TOPIC_REVIEW}</b></div>
	</div>
	<div class="row">
		<div class="col">
                <!-- END switch_inline_mode -->
				
				
				
				
                <div class="forumline">
                	<div class="row th mx-0">
                		<div class="col-3 my-auto">{L_AUTHOR}</div>
                		<div class="col my-auto">{L_MESSAGE}</div>
                	</div>
                	<!-- BEGIN postrow -->
                	<div class="row mx-0">
                		<div class="col-3 row1"><span class="name"><a name="{postrow.U_POST_ID}"></a><b>{postrow.POSTER_NAME}</b></span></div>
                		<div class="col">
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
                	<div class="row row3 mx-0"> 
                		<div class="col"><img src="templates/BS_subSilver/images/spacer.gif" alt="" height="1" /></div>
                	</div>
                	 <!-- END postrow -->
                </div>
				
				
                <!-- BEGIN switch_inline_mode -->
		</div>
	</div>
</div>
<!-- END switch_inline_mode -->