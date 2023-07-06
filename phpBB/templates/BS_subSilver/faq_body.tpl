<script src="templates/assets/js/faq.js"></script>
<div align="container-fluid m-0">
  <div class="row">
	<div class="col mx-1">

<div align="container-fluid">
  <div class="row p-1 navbr">
	<div class="col"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></div>
  </div>
</div>
<div class="container-fluid forumline">
  <div class="row th d-flex align-items-center">
	<div class="col text-center">{L_FAQ_TITLE}</div>
  </div>
  <div class="row">
	<div class="col">
	  <!-- BEGIN faq_block -->
	  <div class="" align="center">
		<div class="row catHead d-flex align-items-center"> 
		  <div class="col text-center"><span class="cattitle">{faq_block.BLOCK_TITLE}</span></div>
		</div>
		<!-- BEGIN faq_row -->  
		<div class="row {faq_block.faq_row.ROW_CLASS} py-1"> 
		  <div class="col text-start">
			<div onclick="return CFAQ.display('faq_a_{faq_block.faq_row.U_FAQ_ID}', false);" style="width:100%;cursor:pointer;cursor:hand;">
		   	  <span class="gen"><a class="postlink" href="javascript:void(0)" onclick="return CFAQ.display('faq_a_{faq_block.faq_row.U_FAQ_ID}', true);" onfocus="this.blur();"><b>{faq_block.faq_row.FAQ_QUESTION}</b></span></a>
			</div>
			<div id="faq_a_{faq_block.faq_row.U_FAQ_ID}" style="display:none;">
			  <div class="bodyline">
				<div class="row">
				  <div class="col text-start m-1"><span class="postbody">{faq_block.faq_row.FAQ_ANSWER}<br /></span></div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	    <!-- END faq_row -->
	  </div>
	  <!-- END faq_block -->
    </div>
  </div>
</div>  
<div align="center">
  <div class="row">
	<div class="col text-start"><span class="copyright">DHTML FAQ by phpMiX</span></div>
	<div class="col text-end"><span class="gensmall">{S_TIMEZONE}</span></div>
  </div>
  <div class="row">
	<div class="col text-end">{JUMPBOX}</div>
  </div>
</div>
    </div>
  </div>
</div>
