<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
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
						<dd style="position: relative; Float: right;"><img src="{center_blocks_row.title_image.TITLE}" /></dd>
					<!-- END title_image -->

					</dl>
				</li>
			</ul>
			<ul class="topiclist 
			<!-- BEGIN background -->
			forums
			<!-- END background -->
			" >
				<li>

		            <!-- BEGIN openclose -->
		            <div class="collaps" onclick="ShowHide('block1_{center_blocks_row.BLOCKID}','block2_{center_blocks_row.BLOCKID}','block1_{center_blocks_row.BLOCKID}');" style="display: none;" id="block2_{center_blocks_row.BLOCKID}" align="center">
					  <img src="{center_blocks_row.openclose.OPEN_IMG}" />
					</div>
		            <!-- END openclose -->
		
		            <div id="block1_{center_blocks_row.BLOCKID}" style="display: ''; position: relative;" align="center">{center_blocks_row.OUTPUT}
					  <!-- BEGIN openclose -->
		              <div class="collaps" onclick="ShowHide('block1_{center_blocks_row.BLOCKID}','block2_{center_blocks_row.BLOCKID}','block1_{center_blocks_row.BLOCKID}');" style="display: block; width:100%; float: left;">
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
  </tr>
</table>