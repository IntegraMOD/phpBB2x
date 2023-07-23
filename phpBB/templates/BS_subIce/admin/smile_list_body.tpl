				<h1>{L_SMILEY_TITLE}</h1>
				<p>{L_SMILEY_TEXT}</p>
				<form method="post" action="{S_SMILEY_ACTION}">
				<fieldset class="tabulated">
				<table cellspacing="1">
				<thead>
				<tr>
					<th>{L_SMILE}</th>
					<th>{L_CODE}</th>
					<th>{L_EMOT}</th>
					<th>{L_ACTION}</th>
				</tr>
				</thead>
				<tbody>
				<!-- BEGIN smiles -->
				<tr class="{smiles.ROW_CLASS}">
					<td style="text-align:center"><img src="{smiles.SMILEY_IMG}" alt="{smiles.CODE}" title="{smiles.CODE}" /></td>
					<td style="text-align:center">{smiles.CODE}</td>
					<td style="text-align:center">{smiles.EMOT}</td>
					<td style="text-align:center;white-space:nowrap"><a href="{smiles.U_SMILEY_EDIT}" title="{L_EDIT}"><img src="../templates/prosilver/admin/images/icon_edit.gif" alt="" /></a> <a href="{smiles.U_SMILEY_DELETE}" title="{L_DELETE}"><img src="../templates/prosilver/admin/images/icon_delete.gif" alt="" /></a></td>
				</tr>
				<!-- END smiles -->
				</tbody>
				</table>
				<p class="quick">
					{S_HIDDEN_FIELDS}<input type="submit" name="add" value="{L_SMILEY_ADD}" class="button2" />&nbsp; 
					<input class="button2" type="submit" name="import_pack" value="{L_IMPORT_PACK}">&nbsp; 
					<input class="button2" type="submit" name="export_pack" value="{L_EXPORT_PACK}">
				</p>
				</fieldset>
				</form>