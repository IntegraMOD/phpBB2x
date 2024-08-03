 <link rel="stylesheet" href="blocks/resources/css/flick.css?6" media="screen">

  <div class="flick" data-flickity='{ "initialIndex": 1 }' data-js="flick">

    <div class="flick__cell flick__cell--1">
      <div class="flick__cell__content" width="100%">
						<!-- BEGIN left_blocks_row -->
						<table width="100%" cellpadding="5" cellspacing="0" border="0" 
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
									<div align="center" onclick="ShowHide('block1_{left_blocks_row.BLOCKID}','block2_{left_blocks_row.BLOCKID}','block1_{left_blocks_row.BLOCKID}');" style="display: none; width:100%; cursor: pointer; cursor: hand;" id="block2_{left_blocks_row.BLOCKID}">
										<img src="{left_blocks_row.openclose.OPEN_IMG}" />
									</div>
									<!-- END openclose -->
		
									<!-- The div cell that is closed when the collapse block button is clicked -->
									<div align="center" id="block1_{left_blocks_row.BLOCKID}" style="display: ''; width: 100%;">{left_blocks_row.OUTPUT}
		
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

      </div>
    </div>

    <div class="flick__cell flick__cell--2">
      <div class="flick__cell__content" align="center">

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
								
								        <div align="center" id="block1_{center_blocks_row.BLOCKID}" style="display: ''; width: 100%; position: relative;">{center_blocks_row.OUTPUT}
								
										<!-- BEGIN openclose -->
								        <div align="center" onclick="ShowHide('block1_{center_blocks_row.BLOCKID}','block2_{center_blocks_row.BLOCKID}','block1_{center_blocks_row.BLOCKID}');" style="width:100%; cursor: pointer; cursor: hand;">
											<img src="{center_blocks_row.openclose.CLOSE_IMG}" />
								        </div>
								        <!-- END openclose -->
							      		</div>
						          	</td>
								</tr>
							</table>
							<br />
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

      </div>
    </div>


    <div class="flick__cell flick__cell--3">
      <div class="flick__cell__content" align="center">
        
				    <!-- BEGIN right_blocks_row -->
						<table width="100%" cellpadding="5" cellspacing="0" border="0" 
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
						
						           <div align="center" id="block1_{right_blocks_row.BLOCKID}" style="display: ''; width: 100%;">{right_blocks_row.OUTPUT}
						           
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

      </div>
    </div>

  </div>


<script type="text/javascript" src="blocks/resources/js/flick.min.js"></script>
