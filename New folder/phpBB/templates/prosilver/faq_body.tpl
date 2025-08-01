
		<h2>{L_FAQ_TITLE}</h2>
		<div class="panel bg1" id="faqlinks">
			<div class="inner"><span class="corners-top"><span></span></span>
			<!-- BEGIN faq_block_link -->
			<dl class="faq">
				<dt><strong>{faq_block_link.BLOCK_TITLE}</strong></dt>
				<!-- BEGIN faq_row_link -->
					<dd><a href="{faq_block_link.faq_row_link.U_FAQ_LINK}">{faq_block_link.faq_row_link.FAQ_LINK}</a></dd>
				<!-- END faq_row_link -->
				</dl>
			<!-- END faq_block_link -->
			<span class="corners-bottom"><span></span></span></div>
		</div>
		<div class="clear"></div>
		<!-- BEGIN faq_block -->
		<div class="panel {faq_block.faq_row.ROW_CLASS}">
			<div class="inner"><span class="corners-top"><span></span></span>
				<div class="content">
					<h2>{faq_block.BLOCK_TITLE}</h2>
					<!-- BEGIN faq_row -->
						<dl class="faq" id="{faq_block.faq_row.U_FAQ_ID}">
							<dt><strong>{faq_block.faq_row.FAQ_QUESTION}</strong></dt>
							<dd>{faq_block.faq_row.FAQ_ANSWER}</dd>
							<dd><a href="#faqlinks" class="top2">{L_BACK_TO_TOP}</a></dd>
						</dl>
						<hr class="dashed" />
					<!-- END faq_row -->
				</div>
				<span class="corners-bottom"><span></span></span></div>
			</div>
		<!-- END faq_block -->

