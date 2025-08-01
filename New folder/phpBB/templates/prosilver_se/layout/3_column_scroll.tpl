 <link rel="stylesheet" href="blocks/resources/css/flick.css?6" media="screen">

  <div class="flick" data-flickity='{ "initialIndex": 1 }' data-js="flick">

    <div class="flick__cell flick__cell--2">
      <div class="flick__cell__content">

<!-- BEGIN left_blocks_row -->
<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top">
					<div class="
			   		<!-- BEGIN border -->
					forabg
					<!-- END border -->">
						<div class="inner"><span class="corners-top"><span></span></span>
						<ul class="topiclist">
							<li class="header">
								<dl class="icon">
								<!-- BEGIN title -->
									<dt>{left_blocks_row.title.TITLE}</dt>
								<!-- END title -->
			
								<!-- BEGIN title_image -->
									<dd style="position: relative; Float: right;"><img src="{left_blocks_row.title_image.TITLE}" /></dd>
								<!-- END title_image -->
			
								</dl>
							</li>
						</ul>
						<ul class="topiclist 
						<!-- BEGIN background -->
						forums
						<!-- END background -->
						">
							<li class="row" style="padding: 5px">
					            <!-- BEGIN openclose -->
					            <div onclick="ShowHide('block1_{left_blocks_row.BLOCKID}','block2_{left_blocks_row.BLOCKID}','block1_{left_blocks_row.BLOCKID}');" style="display: none;" id="block2_{left_blocks_row.BLOCKID}" align="center">
								  <img src="{left_blocks_row.openclose.OPEN_IMG}" />
								</div>
					            <!-- END openclose -->
					
					            <div id="block1_{left_blocks_row.BLOCKID}" style="display: ''; position: relative;" align="center">{left_blocks_row.OUTPUT}
								  <!-- BEGIN openclose -->
					              <div onclick="ShowHide('block1_{left_blocks_row.BLOCKID}','block2_{left_blocks_row.BLOCKID}','block1_{left_blocks_row.BLOCKID}');" style="display: block; width:100%;">
								    <img src="{left_blocks_row.openclose.CLOSE_IMG}" />
					              </div>
					              <!-- END openclose -->
					            </div>
							</li>
						</ul>
						<span class="corners-bottom"><span></span></span></div>
					</div>
			
					<br />
					<script language="javascript" type="text/javascript">
					<!--
					tmp = 'block1_{left_blocks_row.BLOCKID}';
					if(GetCookie(tmp) == '2')
					{
						ShowHide('block1_{left_blocks_row.BLOCKID}','block2_{left_blocks_row.BLOCKID}','block1_{left_blocks_row.BLOCKID}');
					}
					//-->
					</script>
</td></tr></table>
<!-- END left_blocks_row -->


      </div>
    </div>

    <div class="flick__cell flick__cell--3">
      <div class="flick__cell__content">

<!-- BEGIN center_blocks_row -->
<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top">
		<div class="
   		<!-- BEGIN border -->
		forabg
		<!-- END border -->">
			<div class="inner"><span class="corners-top"><span></span></span>
			<ul class="topiclist">
				<li class="header">
					<dl class="icon">
					<!-- BEGIN title -->
						<dt>{center_blocks_row.title.TITLE}</dt>
					<!-- END title -->

					<!-- BEGIN title_image -->
						<dd style="position: relative; float: right;"><img src="{center_blocks_row.title_image.TITLE}" /></dd>
					<!-- END title_image -->

					</dl>
				</li>
			</ul>
			<ul class="topiclist 
			<!-- BEGIN background -->
			forums
			<!-- END background -->
			">
				<li class="row" style="padding: 8px;">
		            <!-- BEGIN openclose -->
		            <div onclick="ShowHide('block1_{center_blocks_row.BLOCKID}','block2_{center_blocks_row.BLOCKID}','block1_{center_blocks_row.BLOCKID}');" style="display: none;" id="block2_{center_blocks_row.BLOCKID}" align="center">
					  <img src="{center_blocks_row.openclose.OPEN_IMG}" />
					</div>
		            <!-- END openclose -->
		
		            <div id="block1_{center_blocks_row.BLOCKID}" style="display: ''; padding-bottom:6px; position: relative;" align="center">{center_blocks_row.OUTPUT}
					  <!-- BEGIN openclose -->
		              <div onclick="ShowHide('block1_{center_blocks_row.BLOCKID}','block2_{center_blocks_row.BLOCKID}','block1_{center_blocks_row.BLOCKID}');" style="display: block; width:100%; float: left;">
					    <img src="{center_blocks_row.openclose.CLOSE_IMG}" />
		              </div>
		              <!-- END openclose -->
		            </div>
				</li>
			</ul>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		<br clear="both"/>
		<script language="javascript" type="text/javascript">
		<!--
		tmp = 'block1_{center_blocks_row.BLOCKID}';
		if(GetCookie(tmp) == '2')
		{
			ShowHide('block1_{center_blocks_row.BLOCKID}','block2_{center_blocks_row.BLOCKID}','block1_{center_blocks_row.BLOCKID}');
		}
		//-->
		</script>
		</td></tr></table>
<!-- END center_blocks_row -->




      </div>
    </div>


    <div class="flick__cell flick__cell--4">
      <div class="flick__cell__content">
        
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
				    <td valign="top">
<!-- BEGIN right_blocks_row -->
						<div class="
				   		<!-- BEGIN border -->
						forabg
						<!-- END border -->">
							<div class="inner"><span class="corners-top"><span></span></span>
							<ul class="topiclist">
								<li class="header">
									<dl class="icon">
									<!-- BEGIN title -->
										<dt>{right_blocks_row.title.TITLE}</dt>
									<!-- END title -->
				
									<!-- BEGIN title_image -->
										<dd style="position: relative; Float: right;"><img src="{right_blocks_row.title_image.TITLE}" /></dd>
									<!-- END title_image -->
				
									</dl>
								</li>
							</ul>
							<ul class="topiclist 
							<!-- BEGIN background -->
							forums
							<!-- END background -->
							">
								<li class="row" style="padding: 5px">
						            <!-- BEGIN openclose -->
						            <div onclick="ShowHide('block1_{right_blocks_row.BLOCKID}','block2_{right_blocks_row.BLOCKID}','block1_{right_blocks_row.BLOCKID}');" style="display: none;" id="block2_{right_blocks_row.BLOCKID}" align="center">
									  <img src="{right_blocks_row.openclose.OPEN_IMG}" />
									</div>
						            <!-- END openclose -->
						
						            <div id="block1_{right_blocks_row.BLOCKID}" style="display: ''; position: relative;" align="center">{right_blocks_row.OUTPUT}
									  <!-- BEGIN openclose -->
						              <div onclick="ShowHide('block1_{right_blocks_row.BLOCKID}','block2_{right_blocks_row.BLOCKID}','block1_{right_blocks_row.BLOCKID}');" style="display: block; width:100%;">
									    <img src="{right_blocks_row.openclose.CLOSE_IMG}" />
						              </div>
						              <!-- END openclose -->
						            </div>
								</li>
							</ul>
							<span class="corners-bottom"><span></span></span></div>
						</div>
						<br clear="both"/>
						<script language="javascript" type="text/javascript">
						<!--
						tmp = 'block1_{right_blocks_row.BLOCKID}';
						if(GetCookie(tmp) == '2')
						{
							ShowHide('block1_{right_blocks_row.BLOCKID}','block2_{right_blocks_row.BLOCKID}','block1_{right_blocks_row.BLOCKID}');
						}
						//-->
						</script>
<!-- END right_blocks_row -->

</td></tr></table>

      </div>
    </div>

  </div>


<script type="text/javascript" src="blocks/resources/js/flick.min.js"></script>