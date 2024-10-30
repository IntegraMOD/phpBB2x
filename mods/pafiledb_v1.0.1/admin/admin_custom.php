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
    $module['Download'][$lang['Afield']] = "$file?custom=add";
    $module['Download'][$lang['Efield']] = "$file?custom=edit";
    $module['Download'][$lang['Dfield']] = "$file?custom=delete";
	return;
}

$phpbb_root_path = "./../";

require($phpbb_root_path . 'extension.inc');

require('./pagestart.' . $phpEx);

include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_admin_pafiledb.' . $phpEx);

include($phpbb_root_path . 'pafiledb/includes/functions.' . $phpEx); 

$config = pafiledb_config();
global $add, $edit, $delete;

if( isset($HTTP_GET_VARS['custom']) || isset($HTTP_POST_VARS['custom']) )
{
	$custom = (isset($HTTP_POST_VARS['custom'])) ? $HTTP_POST_VARS['custom'] : $HTTP_GET_VARS['custom'];

	switch($custom)
	{
		case 'add':
		{
			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_custom_add.tpl')
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

				$sql = "INSERT INTO " . PA_CUSTOM_TABLE . " VALUES('NULL', '" . $form['name'] . "', '" . $form['description'] . "')";

				if ( !($db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
				}

				$message = $lang['Fieldadded'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_custom.$phpEx?custom=add") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

				message_die(GENERAL_MESSAGE, $message);
			}

			if (empty($add)) 
			{
				$template->assign_vars(array(
					'S_ADD_CUS_ACTION' => append_sid("admin_custom.$phpEx"),
					'L_AFIELDTITLE' => $lang['Afieldtitle'],
					'L_FIELDEXPLAIN' => $lang['Fieldexplain'],
					'L_FIELDNAME' => $lang['Fieldname'],
					'L_FIELDNAMEINFO' => $lang['Fieldnameinfo'],
					'L_FIELDDESC' => $lang['Fielddesc'],
					'L_FIELDDESCINFO' => $lang['Fielddescinfo'])
				);
			}

			$template->pparse('admin');

			break;
		}

		case 'edit':
		{
			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_custom_edit.tpl')
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
                
				$sql = "UPDATE " . PA_CUSTOM_TABLE . " SET custom_name = '" . $form['name'] . "', custom_description = '" . $form['description'] . "' WHERE custom_id = '" . $id . "'";

				if ( !($db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
				}

				$message = $lang['Fieldedited'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_custom.$phpEx?custom=edit") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

				message_die(GENERAL_MESSAGE, $message);
			}
            
			if ($edit == 'form') 
			{
				if ( isset($HTTP_GET_VARS['select']) || isset($HTTP_POST_VARS['select']) )
				{
					$select = ( isset($HTTP_GET_VARS['select']) ) ? $HTTP_GET_VARS['select'] : $HTTP_POST_VARS['select'];
				}

				$sql = "SELECT * FROM " . PA_CUSTOM_TABLE . " WHERE custom_id = '" . $select . "'";

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
				}

				$field = $db->sql_fetchrow($result);

				$template->assign_block_vars("custom_form", array());

				$template->assign_vars(array(
					'S_EDIT_CUS_ACTION' => append_sid("admin_custom.$phpEx"),
					'L_EFIELDTITLE' => $lang['Efieldtitle'],
					'L_FIELDEXPLAIN' => $lang['Fieldexplain'],
					'SELECT' => $select,                    
					'L_FIELDNAME' => $lang['Fieldname'],
					'L_FIELDNAMEINFO' => $lang['Fieldnameinfo'],
					'CUSTOM_NAME' => $field['custom_name'],
					'CUSTOM_DESC' => $field['custom_description'],
					'L_FIELDDESC' => $lang['Fielddesc'],
					'L_FIELDDESCINFO' => $lang['Fielddescinfo'])
				);
			}

			if (empty($edit)) 
			{
				$sql = "SELECT * FROM " . PA_CUSTOM_TABLE;

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
				}

				while ($field = $db->sql_fetchrow($result))
				{
					$row .= '<tr><td width="3%" class="row1" align="center" valign="middle"><input type="radio" name="select" value="' . $field['custom_id'] . '"></td><td width="97%" class="row1"><b>' . $field['custom_name'] . '</b><br><span class="gensmall">' . $field['custom_description'] . '</span></td></tr>';
				}

				$template->assign_block_vars("custom", array());

				$template->assign_vars(array(
					'S_EDIT_CUS_ACTION' => append_sid("admin_custom.$phpEx"),
					'L_EFIELDTITLE' => $lang['Efieldtitle'],
					'L_FIELDEXPLAIN' => $lang['Fieldexplain'],
					'ROW' => $row)
				);
			}

			$template->pparse('admin');

			break;
		}

		case 'delete':
		{
			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_custom_delete.tpl')
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
					$message = $lang['Dfielderror'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_custom.$phpEx?custom=delete") . '">', '</a>');

					message_die(GENERAL_MESSAGE, $message);                            
				}
				else 
				{

					foreach ($select as $key => $value) 
					{
						$sql = "DELETE FROM " . PA_CUSTOM_TABLE . " WHERE custom_id = '" . $key . "'";

						if ( !($db->sql_query($sql)) )
						{
							message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
						}

						$sql = "DELETE FROM " . PA_CUSTOM_DATA_TABLE . " WHERE customdata_custom = '" . $key . "'";

						if ( !($db->sql_query($sql)) )
						{
							message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
						}
					}

					$message = $lang['Fieldsdel'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_custom.$phpEx?custom=delete") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

					message_die(GENERAL_MESSAGE, $message);
				}
			}
            
			if (empty($delete)) 
			{
				$sql = "SELECT * FROM " . PA_CUSTOM_TABLE;

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
				}

				while ($field = $db->sql_fetchrow($result))
				{
					$row .= '<tr><td width="3%" class="row1" align="center" valign="middle"><input type="checkbox" name="select[' . $field['custom_id'] . ']" value="yes"></td><td width="97%" class="row1"><b>' . $field['custom_name'] . '</b><br><span class="gensmall">' . $field['custom_description'] . '</span></td></tr>';
				}

				$template->assign_vars(array(
					'S_DELETE_CUS_ACTION' => append_sid("admin_custom.$phpEx"),
					'L_DFIELDTITLE' => $lang['Dfieldtitle'],
					'L_FIELDEXPLAIN' => $lang['Fieldexplain'],
					'ROW' => $row)
				);
			}

			$template->pparse('admin');

			break;
		}
	}
}

include('./page_footer_admin.'.$phpEx);