
		<h2>{L_SEARCH_MATCHES}</h2>
		<ul class="linklist">
			<li class="rightside pagination">
				{L_SEARCH_MATCHES} &bull; {PAGE_NUMBER}&nbsp; <span>{PAGINATION}</span>
			</li>
		</ul>
		<div class="forumbg">
			<div class="inner"><span class="corners-top"><span></span></span>
			<ul class="topiclist">
				<li class="header">
					<dl class="icon">
						<dt>{L_TOPICS}</dt>
						<dd class="posts">{L_REPLIES}</dd>
						<dd class="views">{L_VIEWS}</dd>
						<dd class="lastpost"><span>{L_LASTPOST}</span></dd>
					</dl>
				</li>
			</ul>
			<ul class="topiclist topics">
			<!-- BEGIN searchresults -->
				<li class="row bg1">
					<dl class="icon" style="background-image: url({searchresults.TOPIC_FOLDER_IMG}); background-repeat: no-repeat;">
						<dt>
							{searchresults.NEWEST_POST_IMG}{searchresults.TOPIC_TYPE}
							<a href="{searchresults.U_VIEW_TOPIC}" class="topictitle">{searchresults.TOPIC_TITLE}</a> {searchresults.GOTO_PAGE}
							<br />{searchresults.TOPIC_AUTHOR} &raquo; {searchresults.FIRST_POST_TIME} 
							(<a href="{searchresults.U_VIEW_TOPIC}">{searchresults.TOPIC_TITLE}</a>)
						</dt>
						<dd class="posts">{searchresults.REPLIES}</dd>
						<dd class="views">{searchresults.VIEWS}</dd>
						<dd class="lastpost"><span>
							{searchresults.LAST_POST_AUTHOR}
							{searchresults.LAST_POST_IMG}<br />{searchresults.LAST_POST_TIME}<br /> </span>
						</dd>
					</dl>
				</li>
			<!-- END searchresults -->
			</ul>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		<ul class="linklist">
			<li class="rightside pagination">
				{L_SEARCH_MATCHES} &bull; {PAGE_NUMBER}&nbsp; <span>{PAGINATION}</span>
			</li>
		</ul>
		{JUMPBOX}
