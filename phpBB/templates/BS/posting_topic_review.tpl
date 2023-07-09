<!-- BEGIN switch_inline_mode -->
<div class="container-fluid p-2 my-2 bg-light rounded-2 bdr-lt boxwrapper">
  <div class="row text-center"> 
	<div class="col navbr">{L_TOPIC_REVIEW}</div>
  </div>
  <div class="row bg-body-secondary rounded-2 bdr-cat align-items-center py-1 mx-0 my-1"> 
    <div class="col embed-responsive embed-responsive-1by1">
	  <iframe class="embed-responsive-item" width="100%" src="{U_REVIEW_TOPIC}" >
<!-- END switch_inline_mode -->
		<table border="0" cellpadding="2" cellspacing="0" width="100%">
		  <tr class="">
			<td class="navbr" width="22%">&nbsp;{L_AUTHOR}</td>
			<td class="navbr">{L_MESSAGE}</td>
		  </tr>
		  <!-- BEGIN postrow -->
		  <tr>
			<td width="22%" align="left" valign="top">
			  <div class="container-fluid bg-body-secondary rounded-2 bdr-cat" style="padding:6px;">
			    <div class="row navbr">
				 <div class="col"><a name="{postrow.U_POST_ID}"></a>{postrow.POSTER_NAME}</div>
			    </div>
			  </div>
            </td>
			<td valign="top">
			  <div class="container-fluid bg-body-secondary rounded-2 bdr-cat" style="padding:6px;">
				<div class="row">
				  <div class="col-md-8"><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" border="0" /><span class="postdetails">{L_POSTED}: {postrow.POST_DATE}<span class="gen">&nbsp;</span>&nbsp;&nbsp;&nbsp;{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></div>
				</div>
				<div class="row">
				  <div class="col-md-8"><hr /></div>
				</div>
				<div class="row">
				  <div class="col-md-8"><span class="postbody">{postrow.MESSAGE}</span></div>
				</div>
			  </div>
			</td>
		  </tr>
 		  <!-- END postrow -->
		</table>
<!-- BEGIN switch_inline_mode -->
	  </iframe>
	</div>
  </div>
</div>
<!-- END switch_inline_mode -->