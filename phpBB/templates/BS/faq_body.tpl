<script src="templates/assets/js/faq.js"></script>

<div class="container-fluid">
  <div class="row">
	<div class="col text-start">
	  <span class="navbr"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span>
	</div>
  </div>	
</div>		

<div class="container-fluid mt-2 bg-light rounded-2 bdr-lt boxwrapper">
  <div class="row nav">
    <div class="col py-2 text-center">{L_FAQ_TITLE}<div>
  </div>
  <!-- BEGIN faq_block -->
  <div class="pt-1">
	<div class="row mx-0 px-0 d-flex align-items-center flex-nowrap bg-body-secondary rounded-2 bdr-cat"> 
	  <div class="col py-2 text-primary text-start">{faq_block.BLOCK_TITLE}</div>
	</div>
	<!-- BEGIN faq_row -->  
	<div class="row mx-0 px-0 d-flex align-items-center flex-nowrap bg-body-secondary rounded-2 bdr-cat"> 
 	  <div class="col py-2 text-start ps-5">
 		<div onclick="return CFAQ.display('faq_a_{faq_block.faq_row.U_FAQ_ID}', false);" style="width:100%;cursor:pointer;cursor:hand;">
		  <span class="gen"><a class="postlink" href="javascript:void(0)" onclick="return CFAQ.display('faq_a_{faq_block.faq_row.U_FAQ_ID}', true);" onfocus="this.blur();"><b>{faq_block.faq_row.FAQ_QUESTION}</b></span></a>
 		</div>
 		<div id="faq_a_{faq_block.faq_row.U_FAQ_ID}" style="display:none;">
		  <div class="bodyline rounded-2" align="center">
			<div class="row">
			  <div class="col postbody text-start py-2 mx-2">{faq_block.faq_row.FAQ_ANSWER}<br /></div>
			</div>
		  </div>
		</div>
 	  </div>
	</div>
	<!-- END faq_row -->
  </div>
  <!-- END faq_block -->
  <div class="container mt-1">
	<div class="row">
	  <div class="col text-start"><span class="copyright">DHTML Collapsible FAQ &copy; 2004 by <a href="#" target="_blank" class="copyright">phpMiX</a></span></div>
	  <div class="col text-end"><span class="gensmall">{S_TIMEZONE}</span></div>
	</div>
	<div class="row">
	  <div class="col">{JUMPBOX}</div>
	</div>
  </div>
</div>