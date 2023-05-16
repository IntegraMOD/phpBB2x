<div class="container-fluid">
  <div class="row">
    <div class="col"><span class="nowrap"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></div>
  </div>
<form method="post" action="{S_LOGIN_ACTION}">
  <div class="container-fluid forumline">
    <div class="row th">
      <div class="col py-1 text-center">{L_FAQ_TITLE}</div>
    </div>
    <div class="row">
      <div class="col row1">
	    <!-- BEGIN faq_block_link -->
	    <span class="mainmenu"><strong>{faq_block_link.BLOCK_TITLE}</strong></span><br />
        <!-- BEGIN faq_row_link -->
        <span class="gen"><a href="{faq_block_link.faq_row_link.U_FAQ_LINK}" class="postlink">{faq_block_link.faq_row_link.FAQ_LINK}</a></span><br />
        <!-- END faq_row_link -->
        <br />
        <!-- END faq_block_link -->
        </div>
	  </div>
      <div class="row">
        <div class="col catBottom">&nbsp;</div>
      </div>
	</div
    <br clear="all" />
<!-- BEGIN faq_block -->
	<div class="container-fluid forumline">
      <div class="row th">
        <div class="col pt-1 text-center">{faq_block.BLOCK_TITLE}</div>
      </div>
    <!-- BEGIN faq_row -->  
	  <div class="row {faq_block.faq_row.ROW_CLASS}">
        <div class="col postbody"><a name="{faq_block.faq_row.U_FAQ_ID}"></a><b>{faq_block.faq_row.FAQ_QUESTION}</b><br />{faq_block.faq_row.FAQ_ANSWER}</div>
      </div>
	  <div class="row catBottom pt-1">
        <div class="col"><a class="postlink fa fa-arrow-up" style="text-decoration: none !important;" href="#top" title="{L_BACK_TO_TOP}"></a></div>
      </div>
    <!-- END faq_row -->
	</div>
	  <br clear="all" />
<!-- END faq_block -->

<div class="container-fluid text-center">
  <div class="row my-2">
      <div class="col gensmall">{S_TIMEZONE}</div>
      <div class="col align-right">{JUMPBOX}</div>
  </div>
</div>