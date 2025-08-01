<td id="tail_block" style="display: ''; width:{FOOTER_WIDTH}px" valign="top">
<table cellpadding="0" cellspacing="0" border="0">
<tr>

<!-- BEGIN layout_collapse -->
<td valign="top" style="display: block; cursor: pointer; cursor: hand;" align="right" width="10" height="18">
<a href="JavaScript:ShowHide('tail_block','tail_hide','tail_block');">
<img src="{layout_collapse.LAYOUT_IMAGER}" alt="" width="10" height="18" border="0" />
</a>
</td>
<!-- END layout_collapse -->

<!-- BEGIN no_layout_collapse -->
<td width="10"><img src="{no_layout_collapse.SPACER}" alt="" width="10" height="30" /></td>
<!-- END no_layout_collapse -->

<td width="100%" valign="top">


<!-- BEGIN tail_blocks_row -->
<table width="100%" cellpadding="5" cellspacing="0" border="0" 
<!-- BEGIN border -->
class="forumline"
<!-- END border -->
>
	<!-- BEGIN title -->
	<tr>
		<th>{tail_blocks_row.title.TITLE}</th>
	</tr>
	<!-- END title -->
       <!-- BEGIN title_image -->
       <tr>
         <th><img src="{tail_blocks_row.title_image.TITLE}" /></th>
       </tr>
       <!-- END title_image -->
       <tr> 
	     <td
         <!-- BEGIN background -->
         class="row1"
         <!-- END background -->
         >

           <!-- BEGIN openclose -->
           <div onclick="ShowHide('block1_{tail_blocks_row.BLOCKID}','block2_{tail_blocks_row.BLOCKID}','block1_{tail_blocks_row.BLOCKID}');" style="display: none; width:100%; cursor: pointer; cursor: hand;" id="block2_{tail_blocks_row.BLOCKID}" align="center">
		     <img src="{tail_blocks_row.openclose.OPEN_IMG}" />
           </div>
           <!-- END openclose -->

           <div id="block1_{tail_blocks_row.BLOCKID}" style="display: ''; position: relative;" align="center">{tail_blocks_row.OUTPUT}
           
		     <!-- BEGIN openclose -->
             <div align="center" onclick="ShowHide('block1_{tail_blocks_row.BLOCKID}','block2_{tail_blocks_row.BLOCKID}','block1_{tail_blocks_row.BLOCKID}');" style="width:100%; cursor: pointer; cursor: hand;">
		       <img src="{tail_blocks_row.openclose.CLOSE_IMG}" />
		     </div>
             <!-- END openclose -->

           </div>
         </tr>
</table>
<br />

<script language="javascript" type="text/javascript">
<!--
tmp = 'block1_{tail_blocks_row.BLOCKID}';
if(GetCookie(tmp) == '2')
{
	ShowHide('block1_{tail_blocks_row.BLOCKID}','block2_{tail_blocks_row.BLOCKID}','block1_{tail_blocks_row.BLOCKID}');
}
//-->
</script>

<!-- END tail_blocks_row -->
</td>
</tr>
</table>
</td>

<!-- BEGIN layout_collapse -->
     <td id="tail_hide" style="display: none;" valign="top" align="right" width="10" height="18">
	     <a href="javascript:ShowHide('tail_block','tail_hide','tail_block');">
	       <img src="{layout_collapse.LAYOUT_IMAGEL}" width="10" height="18" alt="" border="0" />
	     </a>
     </td>
<!-- END layout_collapse -->
<!-- BEGIN no_layout_collapse -->
<td width="10"><img src="images/spacer.gif" alt="" width="10" height="30" /></td>
<!-- END no_layout_collapse -->
  </tr>
 </table>

<script language="javascript" type="text/javascript">
<!--
tmp = 'tail_block';
if(GetCookie(tmp) == '2')
{
	ShowHide('tail_block','tail_hide','tail_block');
}
//-->
</script>
