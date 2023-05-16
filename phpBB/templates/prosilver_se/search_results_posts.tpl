

		<h2>{L_SEARCH_MATCHES}</h2>
		<ul class="linklist">
			<li class="rightside pagination">
				{L_SEARCH_MATCHES} &bull; {PAGE_NUMBER}&nbsp; <span>{PAGINATION}</span>
			</li>
		</ul>
		<!-- BEGIN searchresults -->
		<div class="search post bg1">
			<div class="inner"><span class="corners-top"><span></span></span>
			<div class="postbody">
				<h3><a href="{searchresults.U_TOPIC}">{searchresults.TOPIC_TITLE}</a></h3>
				<div class="content">{searchresults.MESSAGE}</div>
			</div>
			<dl class="postprofile">
				<dt class="author">{searchresults.POSTER_NAME}</dt>
				<dd>{searchresults.POST_DATE}</dd>
				<dd>&nbsp;</dd>
				<dd>{L_FORUM}: <a href="{searchresults.U_FORUM}">{searchresults.FORUM_NAME}</a></dd>
				<dd>{L_TOPIC}: <a href="{searchresults.U_TOPIC}">{searchresults.TOPIC_TITLE}</a></dd>
				<dd>{L_REPLIES}: <strong>{searchresults.TOPIC_REPLIES}</strong></dd>
				<dd>{L_VIEWS}: <strong>{searchresults.TOPIC_VIEWS}</strong></dd>
			</dl>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		<!-- END searchresults -->
		<ul class="linklist">
			<li class="rightside pagination">
				{L_SEARCH_MATCHES} &bull; {PAGE_NUMBER}&nbsp; <span>{PAGINATION}</span>
			</li>
		</ul>
		{JUMPBOX}
