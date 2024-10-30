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
    $module['Download'][$lang['Alicense']] = "$file?license=add";    
    $module['Download'][$lang['Elicense']] = "$file?license=edit";    
    $module['Download'][$lang['Dlicense']] = "$file?license=delete";
	return;
}

$phpbb_root_path = "./../";

require($phpbb_root_path . 'extension.inc');

require('./pagestart.' . $phpEx);

include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_admin_pafiledb.' . $phpEx);

include($phpbb_root_path . 'pafiledb/includes/functions.' . $phpEx); 

$config = pafiledb_config();

global $add, $edit, $delete;

if( isset($HTTP_GET_VARS['license']) || isset($HTTP_POST_VARS['license']) )
{
	$license = (isset($HTTP_POST_VARS['license'])) ? $HTTP_POST_VARS['license'] : $HTTP_GET_VARS['license'];

	switch($license)
	{
		case 'add':
		{
			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_license_add.tpl')
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

				$text = str_replace("\n", "<br>", $form['text']);

				$sql = "INSERT INTO " . PA_LICENSE_TABLE . " VALUES('0', '" . $form['name'] . "', '" . $text . "')";

				if ( !($db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				$message = $lang['Licenseadded'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_license.$phpEx?license=add") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

				message_die(GENERAL_MESSAGE, $message);
			}

			if (empty($add)) 
			{
				$template->assign_vars(array(
					'S_ADD_LIC_ACTION' => append_sid("admin_license.$phpEx"),
					'L_ALICENSETITLE' => $lang['Alicensetitle'],
					'L_LICENSEEXPLAIN' => $lang['Licenseexplain'],
					'L_LNAME' => $lang['Lname'],
					'L_LTEXT' => $lang['Ltext'])
				);
			}

			$template->pparse('admin');

			break;
		}

		case 'edit':
		{
			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_license_edit.tpl')
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

				$text = str_replace("\n", "<br>", $form['text']);

				$sql = "UPDATE " . PA_LICENSE_TABLE . " SET license_name = '" . $form['name'] . "', license_text = '" . $text . "' WHERE license_id = '" . $id . "'";

				if ( !($db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				$message = $lang['Licenseedited'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_license.$phpEx?license=edit") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

				message_die(GENERAL_MESSAGE, $message);
			}

			if ($edit == 'form')
			{
				if ( isset($HTTP_GET_VARS['select']) || isset($HTTP_POST_VARS['select']) )
				{
					$select = ( isset($HTTP_GET_VARS['select']) ) ? $HTTP_GET_VARS['select'] : $HTTP_POST_VARS['select'];
				}

				$sql = "SELECT * FROM " . PA_LICENSE_TABLE . " WHERE license_id = '" . $select . "'";

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				$license = $db->sql_fetchrow($result);

				$text = str_replace("<br>", "\n", $license['license_text']);

				$template->assign_block_vars("license_form", array());

				$template->assign_vars(array(
					'S_EDIT_LIC_ACTION' => append_sid("admin_license.$phpEx"),
					'L_ELICENSETITLE' => $lang['Elicensetitle'],
					'L_LICENSEEXPLAIN' => $lang['Licenseexplain'],
					'L_LNAME' => $lang['Lname'],
					'LICENSE_NAME' => $license['license_name'],
					'TEXT' => $text,
					'SELECT' => $select,
					'L_LTEXT' => $lang['Ltext'])
				);
			}

			if (empty($edit)) 
			{
				$sql = "SELECT * FROM " . PA_LICENSE_TABLE;

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				while ($license = $db->sql_fetchrow($result))
				{
					$row .= '<tr><td width="3%" class="row1" align="center" valign="middle"><input type="radio" name="select" value="' . $license['license_id'] . '"></td><td width="97%" class="row1">' . $license['license_name'] . '</td></tr>';
				}

				$template->assign_block_vars("license", array());

				$template->assign_vars(array(
					'S_EDIT_LIC_ACTION' => append_sid("admin_license.$phpEx"),
					'L_ELICENSETITLE' => $lang['Elicensetitle'],
					'L_LICENSEEXPLAIN' => $lang['Licenseexplain'],
					'ROW' => $row)
				);
			}

			$template->pparse('admin');

			break;	
		}

		case 'delete':
		{
			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_license_delete.tpl')
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
					$message = $lang['lderror'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_license.$phpEx?license=delete") . '">', '</a>');

					message_die(GENERAL_MESSAGE, $message);
				}
				else 
				{
					foreach ($select as $key => $value)
					{
						$sql = "DELETE FROM " . PA_LICENSE_TABLE . " WHERE license_id = '" . $key . "'";

						if ( !($db->sql_query($sql)) )
						{
							message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
						}

						$sql = "UPDATE " . PA_FILES_TABLE . " SET file_license = '0' WHERE file_license = '$key'";

						if ( !($db->sql_query($sql)) )
						{
							message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
						}
					}

					$message = $lang['Ldeleted'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_license.$phpEx?license=delete") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

					message_die(GENERAL_MESSAGE, $message);                		        
				}
			}

			if (empty($delete)) 
			{
				$sql = "SELECT * FROM " . PA_LICENSE_TABLE;

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				while ($license = $db->sql_fetchrow($result)) 
				{
					$row .= '<tr><td width="3%" class="row1" align="center" valign="middle"><input type="checkbox" name="select[' . $license['license_id'] . ']" value="yes"></td><td width="97%" class="row1">' . $license['license_name'] . '</td></tr>';
				}

				$template->assign_vars(array(
					'S_DELETE_LIC_ACTION' => append_sid("admin_license.$phpEx"),
					'L_DLICENSETITLE' => $lang['Dlicensetitle'],
					'L_LICENSEEXPLAIN' => $lang['Licenseexplain'],
					'ROW' => $row)
				);

			}

			$template->pparse('admin');

			break;
		}
	}
}

include('./page_footer_admin.'.$phpEx);