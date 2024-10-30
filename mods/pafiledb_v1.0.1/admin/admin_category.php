<?php
/*
  paFileDB 3.0
  ©2001/2002 PHP Arena
  Written by Todd
  todd@phparena.net
  http://www.phparena.net
  Keep all copyright links on the script visible
  Please read the license included with this script for more information.
*/

if (!defined('IN_PHPBB'))
{
    define( 'IN_PHPBB', 1);
}

if( !empty($setmodules) )
{
	$file = basename(__FILE__);
	$module['Download'][$lang['Acat']] = "$file?category=add";
	$module['Download'][$lang['Ecat']] = "$file?category=edit";
	$module['Download'][$lang['Dcat']] = "$file?category=delete";
	$module['Download'][$lang['Rcat']] = "$file?category=order";
	return;
}

$phpbb_root_path = "./../";

require($phpbb_root_path . 'extension.inc');

require('./pagestart.' . $phpEx);

include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_admin_pafiledb.' . $phpEx);

include($phpbb_root_path . 'pafiledb/includes/functions.' . $phpEx); 

$config = pafiledb_config();

if( isset($HTTP_GET_VARS['category']) || isset($HTTP_POST_VARS['category']) )
{

	$category = (isset($HTTP_POST_VARS['category'])) ? $HTTP_POST_VARS['category'] : $HTTP_GET_VARS['category'];
	global $add, $edit, $delete, $order, $id, $sel, $dropmenu;

	switch($category)
	{
		case 'add':
		{

			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_cat_add.tpl')
			);

			if ( isset($HTTP_GET_VARS['add']) || isset($HTTP_POST_VARS['add']) )
			{
				$add = ( isset($HTTP_GET_VARS['add']) ) ? $HTTP_GET_VARS['add'] : $HTTP_POST_VARS['add'];
			}
        
			if ($add == 'do') 
			{
				if ( isset($HTTP_GET_VARS['form']) || isset($HTTP_POST_VARS['form']) )
				{
					$form = ( isset($HTTP_GET_VARS['form']) ) ? $HTTP_GET_VARS['form'] : $HTTP_POST_VARS['form'];
				}

				$sql = "INSERT INTO " . PA_CATEGORY_TABLE . " VALUES('NULL', '" . $form['name'] . "', '" . $form['description'] . "', '0', '0', '" . $form['parent'] . "', '0')";

				if ( !($db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt add the settings into the database', '', __LINE__, __FILE__, $sql);
				}

				$cid = $db->sql_nextid();

				$sql = "UPDATE " . PA_CATEGORY_TABLE . " SET cat_order = '" . $cid . "' WHERE cat_id = '" . $cid . "'";

				if ( !($db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Update the settings into the database', '', __LINE__, __FILE__, $sql);
				}

				$message = $lang['Catadded'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_category.$phpEx?category=add") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

				message_die(GENERAL_MESSAGE, $message);
			}

			if (empty($add)) 
			{
				$dropmenu .= jumpmenu('', 'admin', '');     

				$template->assign_vars(array(
					'S_ADD_CAT_ACTION' => append_sid("admin_category.$phpEx"),
					'L_ACATTITLE' => $lang['Acattitle'],
					'L_CATEXPLAIN' => $lang['Catexplain'],
					'L_CATNAME' => $lang['Catname'],
					'L_CATNAMEINFO' => $lang['Catnameinfo'],
					'L_CATDESC' => $lang['Catdesc'],
					'L_CATDESCINFO' => $lang['Catdescinfo'],
					'L_CATPARENT' => $lang['Catparent'],
					'L_NONE' => $lang['None'],
					'DROPMENU' => $dropmenu,
					'L_CATPARENTINFO' => $lang['Catparentinfo'])
				); 
			}

			$template->pparse('admin');

			break;
		}
        
		case 'edit':
		{

			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_cat_edit.tpl')
			);

			if ( isset($HTTP_GET_VARS['edit']) || isset($HTTP_POST_VARS['edit']) )
			{
				$edit = ( isset($HTTP_GET_VARS['edit']) ) ? $HTTP_GET_VARS['edit'] : $HTTP_POST_VARS['edit'];
			}

			if ($edit == 'do')
			{

				if ( isset($HTTP_GET_VARS['form']) || isset($HTTP_POST_VARS['form']) )
				{
					$form = ( isset($HTTP_GET_VARS['form']) ) ? $HTTP_GET_VARS['form'] : $HTTP_POST_VARS['form'];
				}

				if ( isset($HTTP_GET_VARS['id']) || isset($HTTP_POST_VARS['id']) )
				{
					$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
				}

				$sql = "UPDATE " . PA_CATEGORY_TABLE . " SET cat_name = '" . $form['name'] . "', cat_desc = '" . $form['description'] . "', cat_parent = '" . $form['parent'] . "' WHERE cat_id = '" . $id . "'";

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
				}

				$message = $lang['Catedited'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_category.$phpEx?category=edit") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

				message_die(GENERAL_MESSAGE, $message);
			}

			if ($edit == 'form')
			{

				if ( isset($HTTP_GET_VARS['select']) || isset($HTTP_POST_VARS['select']) )
				{
					$select = ( isset($HTTP_GET_VARS['select']) ) ? $HTTP_GET_VARS['select'] : $HTTP_POST_VARS['select'];
				}

				$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_id = '" . $select . "'";

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
				}

				$cat = $db->sql_fetchrow($result);

				if ($cat['cat_parent'] == 0) 
				{
					$dropmenu .= '<option value="0" selected>' . $lang['None'] . '</option>\n';
				}
				else
				{
					$dropmenu .= '<option value="0">' . $lang['None'] . '</option>\n';
				}

				$dropmenu .= jumpmenu('', 'admin', array($cat['cat_parent']=>1));

				$template->assign_block_vars("edit_form", array());

				$template->assign_vars(array(
					'S_EDIT_CAT_ACTION' => append_sid("admin_category.$phpEx"),
					'L_ECATTITLE' => $lang['Ecattitle'],
					'L_CATEXPLAIN' => $lang['Catexplain'],
					'CAT_NAME' => $cat['cat_name'],
					'CAT_DESC' => $cat['cat_desc'],
					'L_CATNAME' => $lang['Catname'],
					'L_CATNAMEINFO' => $lang['Catnameinfo'],
					'L_CATDESC' => $lang['Catdesc'],
					'L_CATDESCINFO' => $lang['Catdescinfo'],
					'L_CATPARENT' => $lang['Catparent'],
					'SELECT' => $select,
					'DROPMENU' => $dropmenu,
					'L_CATPARENTINFO' => $lang['Catparentinfo'])
				);

			}

			if (empty($edit))
			{

				$row = '<tr><td colspan="2" class="row1" align="center" valign="middle">'
					.'<select name="select" class="forminput">'
					.jumpmenu('', 'admin', '')
					.'</select>'
					.'</td></tr>';

				$template->assign_block_vars("edit", array());

				$template->assign_vars(array(
					'S_EDIT_CAT_ACTION' => append_sid("admin_category.$phpEx"),
					'L_ECATTITLE' => $lang['Ecattitle'],
					'L_CATEXPLAIN' => $lang['Catexplain'],
					'ROW' => $row)
				);
			}

			$template->pparse('admin');

			break;
		} 

		case 'delete':
		{

			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_cat_delete.tpl')
			);

			if ( isset($HTTP_GET_VARS['delete']) || isset($HTTP_POST_VARS['delete']) )
			{
				$delete = ( isset($HTTP_GET_VARS['delete']) ) ? $HTTP_GET_VARS['delete'] : $HTTP_POST_VARS['delete'];
			}

			if ($delete == 'do')
			{

				if ( isset($HTTP_GET_VARS['select']) || isset($HTTP_POST_VARS['select']) )
				{
					$select = ( isset($HTTP_GET_VARS['select']) ) ? $HTTP_GET_VARS['select'] : $HTTP_POST_VARS['select'];
				}

				if (empty($select))
				{
					$message = $lang['Cdelerror'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_category.$phpEx?category=delete") . '">', '</a>');

					message_die(GENERAL_MESSAGE, $message);
				}
				else
				{

					foreach ($select as $id)
					{
						$sql = "DELETE FROM " . PA_CATEGORY_TABLE . " WHERE cat_id = '" . $id . "'";

						if ( !($db->sql_query($sql)) )
						{
							message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
						}

						$sql = "DELETE FROM " . PA_CATEGORY_TABLE . " WHERE cat_parent = '" . $id . "'";

						if ( !($db->sql_query($sql)) )
						{
							message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
						}

						if ( isset($HTTP_GET_VARS['delfiles']) || isset($HTTP_POST_VARS['delfiles']) )
						{
							$delfiles = ( isset($HTTP_GET_VARS['delfiles']) ) ? $HTTP_GET_VARS['delfiles'] : $HTTP_POST_VARS['delfiles'];
						}

						if ($delfiles == 'yes')
						{
							$sql = "DELETE FROM " . PA_FILES_TABLE . " WHERE file_catid = '$id'";

							if ( !($db->sql_query($sql)) )
							{
								message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);							}

						}
					}

					$message = $lang['Catsdeleted'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_category.$phpEx?category=delete") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

					message_die(GENERAL_MESSAGE, $message);
				}
	
			}

			if (empty($delete))
			{

				$row = '<tr><td colspan="2" class="row1" align="center" valign="middle">'
					.'<select name="select[]" multiple="multiple"size="4" class="forminput">'
					.jumpmenu('', 'admin', '')
					.'</select>'
					.'</td></tr>';

					$template->assign_vars(array(
						'S_DELETE_CAT_ACTION' => append_sid("admin_category.$phpEx"),
						'L_DCATTITLE' => $lang['Dcattitle'],
						'L_CATEXPLAIN' => $lang['Catexplain'],
						'L_DELETE'=> $lang['Delete'],
						'ROW' => $row,
						'L_DELFILES' => $lang['Delfiles'],
						'L_YES' => $lang['Yes'],
						'L_NO' => $lang['No'])
					);
			}

			$template->pparse('admin');

			break;
		} 

		case 'order':
		{

			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_cat_order.tpl')
			);
    
			if ( isset($HTTP_GET_VARS['order']) || isset($HTTP_POST_VARS['order']) )
			{
				$order = ( isset($HTTP_GET_VARS['order']) ) ? $HTTP_GET_VARS['order'] : $HTTP_POST_VARS['order'];
			}
    
			if ($order == 'do')
			{

				if ( isset($HTTP_GET_VARS['num']) || isset($HTTP_POST_VARS['num']) )
				{
					$num = ( isset($HTTP_GET_VARS['num']) ) ? $HTTP_GET_VARS['num'] : $HTTP_POST_VARS['num'];
				}

				foreach($num as $key => $value)
				{
					$sql = "UPDATE " . PA_CATEGORY_TABLE . " SET cat_order = '$value' WHERE cat_id = '$key'";

					if ( !($db->sql_query($sql)) )
					{
						message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
					}
				}

				$message = $lang['Rcatdone'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_category.$phpEx?category=order") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

				message_die(GENERAL_MESSAGE, $message);
		
			}

			if (empty($order))
			{
				$rows = '';
				if ( isset($HTTP_GET_VARS['id']) || isset($HTTP_POST_VARS['id']) )
				{
					$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
				}

				if (!$id)
				{
					$id = 0;
				}

				$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_parent = '" . $id . "' ORDER BY cat_order ASC";

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);	
				}

				while ($cat = $db->sql_fetchrow($result)) 
				{
					$rows .= '<tr><td width="5%" class="row1" align="center" valign="middle"><input type="text" name="num[' . $cat['cat_id'] . ']" value="' . $cat['cat_order'] . '" size="2"></td>
						<td width="95%" class="row1"><span class="cattitle"><a href="' . append_sid("admin_category.php?category=order&amp;id=" . $cat['cat_id']) . '">' . $cat['cat_name'] . '</a></span><br><span class="gensmall">' . $cat['cat_desc'] . '</span></td></tr>';
				}

				$template->assign_vars(array(
					'S_ORDER_CAT_ACTION' => append_sid("admin_category.$phpEx"),
					'L_RCATTITLE' => $lang['Rcattitle'],
					'L_RCATEXPLAIN' => $lang['Rcatexplain'],
					'L_RCATINFO' => isset($lang['Rcatinfo']) ? $lang['Rcatinfo'] : '',
					'ROW' => $rows)
				);
			}

			$template->pparse('admin');

			break; 
		}
	}
}

include('./page_footer_admin.'.$phpEx);