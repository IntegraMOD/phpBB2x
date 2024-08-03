<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td valign="top">
  	  <!-- BEGIN center_blocks_row -->
		<table width="100%" cellpadding="5" cellspacing="0" border="0" 
		<!-- BEGIN border -->
		class="forumline"
		<!-- END border -->
		>
		  <!-- Shown when the title is text -->
	      <!-- BEGIN title -->
		  <tr>
			<th>{center_blocks_row.title.TITLE}</th>
		  </tr>
		  <!-- END title -->
		  <!-- Shown when the title is an image -->
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
			  <!-- The button that is shown when the block is closed -->
	  		  <!-- BEGIN openclose -->
			  <div onclick="ShowHide('block1_{center_blocks_row.BLOCKID}','block2_{center_blocks_row.BLOCKID}','block1_{center_blocks_row.BLOCKID}');" style="display: none; width:100%; cursor: pointer; cursor: hand;" id="block2_{center_blocks_row.BLOCKID}" align="center"><img src="{center_blocks_row.openclose.OPEN_IMG}" /></div>
			  <!-- END openclose -->
			  <!-- The div cell that is closed when the collapse block button is clicked -->
			  <div id="block1_{center_blocks_row.BLOCKID}" style="display: ''; position: relative;" align="center">{center_blocks_row.OUTPUT}
			    <!-- The button that is shown when the block is open.  Note that it is within the collapsible cell and therefore disappears when the block closes -->
			    <!-- BEGIN openclose -->
			    <div onclick="ShowHide('block1_{center_blocks_row.BLOCKID}','block2_{center_blocks_row.BLOCKID}','block1_{center_blocks_row.BLOCKID}');" style="width:100%; cursor: pointer; cursor: hand;"><img src="{center_blocks_row.openclose.CLOSE_IMG}" /></div>
			    <!-- END openclose -->
		      </div>
			</td>
		  </tr>
		</table>
		<!-- The cookie related javascript to remember what blocks are open/closed on page load -->
		<!-- BEGIN openclose -->
		<script>
		<!--
		tmp = 'block1_{center_blocks_row.BLOCKID}';
		if(GetCookie(tmp) == '2')
		{
			ShowHide('block1_{center_blocks_row.BLOCKID}','block2_{center_blocks_row.BLOCKID}','block1_{center_blocks_row.BLOCKID}');
		}
		//-->
		</script>
		<!-- END openclose -->
		<br />
		<!-- END center_blocks_row -->
    </td>
  </tr>
</table>