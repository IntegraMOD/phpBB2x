<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr> 

<!-- LEFT BLOCKS END -->
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
		<td id="left_block" style="display: ''; width:150px">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td valign="top">
						<!-- The start of the header block -->
						<!-- BEGIN left_blocks_row -->
						<table width="150" cellpadding="5" cellspacing="0" border="0" 
						<!-- BEGIN border -->
						class="forumline"
						<!-- END border -->
						>
							<!-- Shown when the title is text -->
							<!-- BEGIN title -->
							<tr>
								<th>{left_blocks_row.title.TITLE}</th>
							</tr>
							<!-- END title -->
		
							<!-- Shown when the title is an image -->
							<!-- BEGIN title_image -->
							<tr>
								<th><img src="{left_blocks_row.title_image.TITLE}" /></th>
							</tr>
							<!-- END title_image -->
							<tr>
								<td
								<!-- BEGIN background -->
								class="row1"
								<!-- END background -->
								>
		
									<!-- The button that is shown when the block is closed -->
									<!-- BEGIN openclose -->
									<div align="center" onclick="ShowHide('block1_{left_blocks_row.BLOCKID}','block2_{left_blocks_row.BLOCKID}','block1_{left_blocks_row.BLOCKID}');" style="display: none; width:100%; cursor: pointer; cursor: hand;" id="block2_{left_blocks_row.BLOCKID}" align="center">
										<img src="{left_blocks_row.openclose.OPEN_IMG}" />
									</div>
									<!-- END openclose -->
		
									<!-- The div cell that is closed when the collapse block button is clicked -->
									<div align="center" id="block1_{left_blocks_row.BLOCKID}" style="display: ''; position: relative;" align="center">{left_blocks_row.OUTPUT}
		
									<!-- The button that is shown when the block is open.  Note that it is within the	collapsible cell and therefore disappears when the block closes -->
									<!-- BEGIN openclose -->
									<div align="center" onclick="ShowHide('block1_{left_blocks_row.BLOCKID}','block2_{left_blocks_row.BLOCKID}','block1_{left_blocks_row.BLOCKID}');" style="width:100%; cursor: pointer; cursor: hand;">
										<img src="{left_blocks_row.openclose.CLOSE_IMG}" />
									</div>
									<!-- END openclose -->
									</div>
								</td>
							</tr>
						</table>
					<br />
		
					<!-- The cookie related javascript to remember what blocks are open/closed on page load -->
					<!-- BEGIN openclose -->
					<script language="javascript" type="text/javascript">
					<!--
					tmp = 'block1_{left_blocks_row.BLOCKID}';
					if(GetCookie(tmp) == '2')
					{
						ShowHide('block1_{left_blocks_row.BLOCKID}','block2_{left_blocks_row.BLOCKID}','block1_{left_blocks_row.BLOCKID}');
					}
					//-->
					</script>
					<!-- END openclose -->
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
	    	<table width="100%" cellpadding="5" cellspacing="0" border="0" 
	      	<!-- BEGIN border -->
	      	class="forumline"
	      	<!-- END border -->
	      	>
		        <!-- BEGIN title -->
		        <tr>
		          <th>{center_blocks_row.title.TITLE}</th>
		        </tr>
		        <!-- END title -->
		        <!-- BEGIN title_image -->
		        <tr>
		          <th><img src="{center_blocks_row.title_image.TITLE}" /></th>
		        </tr>
		        <!-- END title_image -->
		
				<tr>
					<td
					<!-- BEGIN background -->
			        class="row1"
			        <!-- END background -->
			        >
			
				        <!-- BEGIN openclose -->
				        <div align="center" onclick="ShowHide('block1_{center_blocks_row.BLOCKID}','block2_{center_blocks_row.BLOCKID}','block1_{center_blocks_row.BLOCKID}');" style="display: none; width:100%; cursor: pointer; cursor: hand;" id="block2_{center_blocks_row.BLOCKID}">
							<img src="{center_blocks_row.openclose.OPEN_IMG}" />
						</div>
				        <!-- END openclose -->
				
				        <div align="center" id="block1_{center_blocks_row.BLOCKID}" style="display: ''; position: relative;">{center_blocks_row.OUTPUT}
				
						<!-- BEGIN openclose -->
				        <div align="center" onclick="ShowHide('block1_{center_blocks_row.BLOCKID}','block2_{center_blocks_row.BLOCKID}','block1_{center_blocks_row.BLOCKID}');" style="width:100%; cursor: pointer; cursor: hand;">
							<img src="{center_blocks_row.openclose.CLOSE_IMG}" />
				        </div>
				        <!-- END openclose -->
			      		</div>
		          	</td>
				</tr>
			</table>
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
		<td valign="top" id="right_block" style="display: ''; width:150px">
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
						<table width="150" cellpadding="5" cellspacing="0" border="0" 
					    <!-- BEGIN border -->
					    class="forumline"
					    <!-- END border -->
					    >
					    	<!-- BEGIN title -->
					     	<tr>
						    	<th>{right_blocks_row.title.TITLE}</th>
						    </tr>
						    <!-- END title -->
						    <!-- BEGIN title_image -->
						    <tr>
						    	<th><img src="{right_blocks_row.title_image.TITLE}" /></th>
						    </tr>
						    <!-- END title_image -->
						    <tr> 
								<td
						        <!-- BEGIN background -->
						        class="row1"
						        <!-- END background -->
						        >
						
						           <!-- BEGIN openclose -->
						           <div align="center" onclick="ShowHide('block1_{right_blocks_row.BLOCKID}','block2_{right_blocks_row.BLOCKID}','block1_{right_blocks_row.BLOCKID}');" style="display: none; width:100%; cursor: pointer; cursor: hand;" id="block2_{right_blocks_row.BLOCKID}">
								   	<img src="{right_blocks_row.openclose.OPEN_IMG}" />
						           </div>
						           <!-- END openclose -->
						
						           <div align="center" id="block1_{right_blocks_row.BLOCKID}" style="display: '';">{right_blocks_row.OUTPUT}
						           
								   <!-- BEGIN openclose -->
						           <div align="center" onclick="ShowHide('block1_{right_blocks_row.BLOCKID}','block2_{right_blocks_row.BLOCKID}','block1_{right_blocks_row.BLOCKID}');" style="width:100%; cursor: pointer; cursor: hand;">
								   	<img src="{right_blocks_row.openclose.CLOSE_IMG}" />
								   </div>
						           <!-- END openclose -->
						           </div>
								</td>
							</tr>
						</table>
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
