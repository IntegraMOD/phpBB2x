<form method="post" action="{S_SPLIT_ACTION}">
  <div class="container-fluid">
    <div class="row my-auto"> 
      <div class="col nav pl-0"><a href="{U_INDEX}" class="nav">{L_INDEX}</a><span class="nav">	-> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></span></div>
    </div>
  </div>

  <div class="container-fluid forumline mx-0">
    <div class="row th">
      <div class="col pt-2 ctr">{L_SPLIT_TOPIC}</div>
    </div>
    <div class="row">
      <div class="col row2 py-2 gensmall">{L_SPLIT_TOPIC_EXPLAIN}</div>
    </div>
    <div class="row px-0 gen">
      <div class="col-3 pr-0 py-1 row1 hr">{L_SPLIT_SUBJECT}</div>
      <div class="col row2 py-1"><input class="post" type="text" size="35" style="width: 100%" name="subject" /></div>
    </div>
    <div class="row px-0 gen">
      <div class="col-3 pr-0 py-1 row1 hr">{L_SPLIT_FORUM}</div>
      <div class="col row2 py-1">{S_FORUM_SELECT}</div>
    </div>
    <div class="row catBottom my-auto"> 
      <div class="col ctr pt-1"><input class="liteoption" type="submit" name="split_type_all" value="{L_SPLIT_POSTS}" /></div>
      <div class="col ctr pt-1"><input class="liteoption" type="submit" name="split_type_beyond" value="{L_SPLIT_AFTER}" /></div>
    </div>
    <div class="row th pt-2">
      <div class="col-3 pl-2">{L_AUTHOR}</div>
      <div class="col px-0">{L_MESSAGE}</div>
      <div class="col-1 text-right pr-2">{L_SELECT}</div>
    </div>
	<!-- BEGIN postrow -->
    <div class="row pt-1">
      <div class="col-3 {postrow.ROW_CLASS} pr-0"><span class="name"><a name="{postrow.U_POST_ID}"></a>{postrow.POSTER_NAME}</span></div>
      <div class="col {postrow.ROW_CLASS} p-0">
        <div class="row">
          <div class="col"><img src="templates/fisubSilver/images/icon_minipost.gif" alt="{L_POST}"><span class="postdetails">{L_POSTED}: {postrow.POST_DATE}&nbsp;&nbsp;&nbsp;&nbsp;{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></div>
        </div>
        <div class="row mt-2 py-1 hr">
          <div class="col">{postrow.MESSAGE}</div>
        </div>
      </div>
      <div class="col-1 {postrow.ROW_CLASS} text-right p-1">{postrow.S_SPLIT_CHECKBOX}</div>
    </div>
    <div class="row spaceRow thH">&nbsp;</div>
	<!-- END postrow -->
    <div class="row catBottom my-auto"> 
      <div class="col ctr pt-1"><input class="liteoption" type="submit" name="split_type_all" value="{L_SPLIT_POSTS}" /></div>
      <div class="col ctr pt-1"><input class="liteoption" type="submit" name="split_type_beyond" value="{L_SPLIT_AFTER}" />{S_HIDDEN_FIELDS}</div>
    </div>
  </div>
  <div class="container-fluid mx-0 pr-0">
    <div class="row">
      <div class="col gensmall text-right">{S_TIMEZONE}</div>
    </div>
  </div>
</form>