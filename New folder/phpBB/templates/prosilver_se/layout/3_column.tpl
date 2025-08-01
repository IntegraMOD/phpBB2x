<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr> 

<!-- LEFT BLOCKS BEGIN -->
		<td valign="top">
		<!-- The button that is shown when the column is closed -->
		<!-- BEGIN layout_collapse -->
		<td id="left_hide" style="display: none;" valign="top" align="left" width="10" height="18">
			<a href="JavaScript:ShowHide('left_block','left_hide','left_block');">
				<img src="{layout_collapse.LAYOUT_IMAGER}" width="10" height="18" alt="" border="0" />
			</a>
		</td>
		<!-- END layout_collapse -->
		
		<!-- The spacer image that replaces the above button when the collapsible layout is turned off -->
		<!-- BEGIN no_layout_collapse -->
		<td width="10"><img src="{no_layout_collapse.SPACER}" alt="" width="10" height="30" /></td>
		<!-- END no_layout_collapse -->
		
		<!-- The td cell that closes when the collapse column button is clicked -->
		<td valign="top" id="left_block" style="display: ''; width:160px">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td valign="top">
<!-- BEGIN left_blocks_row -->
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
<!-- END left_blocks_row -->

					</td>
		
					<!-- The button that is shown when the column is open.  Note that it is within the collapsible cell and therefore disappears when the column closes -->
					<!-- BEGIN layout_collapse -->
					<td valign="top" style="display: block; cursor: pointer; cursor: hand;" align="left" width="10" height="18">
						<a href="JavaScript:ShowHide('left_block','left_hide','left_block');">
							<img src="{layout_collapse.LAYOUT_IMAGEL}" alt="" width="10" height="18" border="0" />
						</a>
					</td>
					<!-- END layout_collapse -->
				</tr>
			</table>
		</td>
		
		<!-- The spacer image that replaces the above button when the collapsible layout is turned off -->
		<!-- BEGIN no_layout_collapse -->
		<td width="10"><img src="{no_layout_collapse.SPACER}" alt="" width="10" height="30" /></td>
		<!-- END no_layout_collapse -->
		
		<!-- The cookie related javascript to remember what columns are open/closed on page load -->
		<script language="javascript" type="text/javascript">
		<!--
		tmp = 'left_block';
		if(GetCookie(tmp) == '2')
		{
			ShowHide('left_block','left_hide','left_block');
		}
		//-->
		</script>
<!-- LEFT BLOCKS END -->




<!-- CENTER BLOCKS BEGIN -->
	    <td valign="top">
<!-- BEGIN center_blocks_row -->
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
<!-- END center_blocks_row -->
		</td>
<!-- CENTER BLOCKS END -->



<!-- RIGHT BLOCKS BEGIN -->
		<td valign="top" id="right_block" style="display: ''; width:160px">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<!-- BEGIN layout_collapse -->
					<td style="display: block; cursor: pointer; cursor: hand;" align="right" width="10" height="18">
					<a href="JavaScript:ShowHide('right_block','right_hide','right_block');">
					<img src="{layout_collapse.LAYOUT_IMAGER}" alt="" width="10" height="18" border="0" />
					</a>
					</td>
					<!-- END layout_collapse -->
					<!-- BEGIN no_layout_collapse -->
					<td width="10"><img src="{no_layout_collapse.SPACER}" alt="" width="10" height="30" /></td>
					<!-- END no_layout_collapse -->
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
						<br />
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

				    </td>
				</tr>
			</table>
		</td>
		<!-- BEGIN layout_collapse -->
		<td id="right_hide" style="display: none;" valign="top" align="right" width="10" height="18">
			<a href="javascript:ShowHide('right_block','right_hide','right_block');">
				<img src="{layout_collapse.LAYOUT_IMAGEL}" width="10" height="18" alt="" border="0" />
			</a>
		</td>
		<!-- END layout_collapse -->
		<!-- BEGIN no_layout_collapse -->
		<td width="10"><img src="images/spacer.gif" alt="" width="10" height="30" /></td>
		<!-- END no_layout_collapse -->
		<script language="javascript" type="text/javascript">
		<!--
		tmp = 'right_block';
		if(GetCookie(tmp) == '2')
		{
			ShowHide('right_block','right_hide','right_block');
		}
		//-->
		</script>
<!-- RIGHT BLOCKS  END -->

	</tr>
</table>
