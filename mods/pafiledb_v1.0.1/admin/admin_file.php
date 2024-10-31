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
	$module['Download'][$lang['Afile']] = "$file?file=add";
	$module['Download'][$lang['Efile']] = "$file?file=edit";
	$module['Download'][$lang['Dfile']] = "$file?file=delete";
	return;
}

$phpbb_root_path = "./../";

require($phpbb_root_path . 'extension.inc');

require('./pagestart.' . $phpEx);

include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_admin_pafiledb.' . $phpEx);

include($phpbb_root_path . 'pafiledb/includes/functions.' . $phpEx); 

$config = pafiledb_config();

global $add, $edit, $delete, $id, $upload, $dburl, $pdropmenu, $ldropmenu, $posticons, $field;
 
if( isset($HTTP_GET_VARS['file']) || isset($HTTP_POST_VARS['file']) )
{
	$file = (isset($HTTP_POST_VARS['file'])) ? $HTTP_POST_VARS['file'] : $HTTP_GET_VARS['file'];

	switch($file)
	{
		case 'upload':
		{
			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_file_upload.tpl')
			);

			if ( isset($HTTP_GET_VARS['field']) || isset($HTTP_POST_VARS['field']) )
			{
				$field = ( isset($HTTP_GET_VARS['field']) ) ? $HTTP_GET_VARS['field'] : $HTTP_POST_VARS['field'];
			}

			$template->assign_vars(array(
				'FIELD' => $field)
			);

			if ( isset($HTTP_GET_VARS['upload']) || isset($HTTP_POST_VARS['upload']) )
			{
				$upload = ( isset($HTTP_GET_VARS['upload']) ) ? $HTTP_GET_VARS['upload'] : $HTTP_POST_VARS['upload'];
			}

			if ( isset($HTTP_GET_VARS['MAX_FILE_SIZE']) || isset($HTTP_POST_VARS['MAX_FILE_SIZE']) )
			{
				$MAX_FILE_SIZE = ( isset($HTTP_GET_VARS['MAX_FILE_SIZE']) ) ? $HTTP_GET_VARS['MAX_FILE_SIZE'] : $HTTP_POST_VARS['MAX_FILE_SIZE'];
			}
//			if ( isset($HTTP_GET_VARS['userfile']) || isset($HTTP_POST_VARS['userfile']) )
//			{
//				$userfile = ( isset($HTTP_GET_VARS['userfile']) ) ? $HTTP_GET_VARS['userfile'] : $HTTP_POST_VARS['userfile'];
//			}

			$userfile_name = ( !empty($HTTP_POST_FILES['userfile']['name']) ) ? $HTTP_POST_FILES['userfile']['name'] : '';

			$userfile_size = ( !empty($HTTP_POST_FILES['userfile']['size']) ) ? $HTTP_POST_FILES['userfile']['size'] : '';

            $userfile = isset($_FILES['userfile']['tmp_name']) ? $_FILES['userfile']['tmp_name'] : null;

			if ($upload == 'do')
			{
				$template->assign_block_vars("upload_do", array());

				if (file_exists($phpbb_root_path . "pafiledb/uploads/$userfile_name")) 
				{
					$message = $lang['Uploaderror'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_file.$phpEx?file=upload") . '">', '</a>');

					$template->assign_vars(array(
						'L_UPLOAD_DO' => $lang['Upload_do_exist'],
						'L_UPLOAD_MESSAGE' => $message)
					);
				}
				else if ($userfile_size > $MAX_FILE_SIZE)
				{
					$message = $lang['Filetoobig'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_file.$phpEx?file=upload") . '">', '</a>');

					$template->assign_vars(array(
						'L_UPLOAD_DO' => $lang['Upload_do_not'],
						'L_UPLOAD_MESSAGE' => $message)
					);
				}
				else 
				{
					if (is_uploaded_file($userfile))
					{
						move_uploaded_file($userfile, $phpbb_root_path . "pafiledb/uploads/$userfile_name");

						$url = 'http://' . $HTTP_SERVER_VARS['HTTP_HOST'] . '' . $board_config['script_path'] . 'pafiledb/uploads/' . $userfile_name;
					}
					else
					{     
						$message = 'This file is not a type that you can upload' . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_file.$phpEx?file=upload") . '">', '</a>');

						message_die(GENERAL_MESSAGE, $message);
                    }
					$message = $lang['Uploaddone'] . " " . $url . "<br><a href=\"javascript:seturl('$url')\">$lang[Uploaddone2]</a>" . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_file.$phpEx?file=upload") . '">', '</a>');

					@chmod($phpbb_root_path . "pafiledb/uploads/$userfile_name", 0777);

					$template->assign_vars(array(
						'L_UPLOAD_DO' => $lang['Upload_do_done'],
						'L_UPLOAD_MESSAGE' => $message)
					);
				}
			}

			if (empty($upload)) 
			{
				$template->assign_block_vars("upload", array());

				$template->assign_vars(array(
					'S_UPLOAD_FILE_ACTION' => append_sid("admin_file.$phpEx"),
					'L_UPLOAD' => $lang['Upload'],
					'L_FILEEXPLAIN' => $lang['Fileexplain'],
					'L_UPLOADINFO' => $lang['Uploadinfo'])
				);
			}
			$template->pparse('admin');

			break;
		}

		case 'add':
		{
			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_file_add.tpl')
			);

			if ( isset($HTTP_GET_VARS['add']) || isset($HTTP_POST_VARS['add']) )
			{
				$add = ( isset($HTTP_GET_VARS['add']) ) ? $HTTP_GET_VARS['add'] : $HTTP_POST_VARS['add'];
			}

			if ($add == 'do')
			{
				$time = time();

				if ( isset($HTTP_GET_VARS['form']) || isset($HTTP_POST_VARS['form']) )
				{
					$form = ( isset($HTTP_GET_VARS['form']) ) ? $HTTP_GET_VARS['form'] : $HTTP_POST_VARS['form'];
				}

				$sql = "INSERT INTO " . PA_FILES_TABLE . " VALUES('0', '" . $form['name'] . "', '" . $form['shortdesc'] . "', '" . $form['creator'] . "', '" . $form['version'] . "', '" . $form['longdesc'] . "', '" . $HTTP_POST_VARS['ssurl'] . "', '" . $HTTP_POST_VARS['dlurl'] . "', '" . $time . "', '" . $form['category'] . "', '" . $form['posticon'] . "', '" . $form['license'] . "', '0', '0', '" . $form['pin'] . "', '" . $form['docs'] . "', '0', '1')";

				if ( !($db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				$fid = $db->sql_nextid();

				if ( isset($HTTP_GET_VARS['custom']) || isset($HTTP_POST_VARS['custom']) )
				{
					$custom = ( isset($HTTP_GET_VARS['custom']) ) ? $HTTP_GET_VARS['custom'] : $HTTP_POST_VARS['custom'];
				}

				if (!empty($custom))
				{
					foreach ($custom as $key => $value) 
					{
						$value = trim($value);

						if (!empty($value)) 
						{
							$sql =  "INSERT INTO " . PA_CUSTOM_DATA_TABLE . " VALUES('" . $fid . "', '" . $key . "', '" . $value . "')";

							if ( !($db->sql_query($sql)) )
							{
								message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
							}
						}
					}
				}

				$message = $lang['Fileadded'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_file.$phpEx?file=add") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

				message_die(GENERAL_MESSAGE, $message);
			}

			if (empty($add)) 
			{
				$curicons = 1;

				$posticons .= '<input type="radio" name="form[posticon]" value="none" checked><a class="small">' . $lang['None'] . '</a>&nbsp;';

				$handle=opendir($phpbb_root_path . '/pafiledb/icons');
          
				while (false!==($icon = readdir($handle))) 
				{
					if ($icon !== "." && $icon !== "..") 
					{
						$posticons .= '<input type="radio" name="form[posticon]" value="' . $icon . '"><img src="' . $phpbb_root_path . 'pafiledb/icons/' . $icon . '">&nbsp;';

						$curicons++;

						if ($curicons == 8)
						{
							$posticons .= '<br>';

							$curicons = 0;
						}
					}
				}

				$dropmenu = jumpmenu('', 'admin', '');
                
				$sql = "SELECT * FROM " . PA_LICENSE_TABLE . " ORDER BY license_id";

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				while ($license = $db->sql_fetchrow($result)) 
				{
					$ldropmenu .= '<option value="' . $license['license_id'] . '">' . $license['license_name'] . '</option>';
				}

                $path = str_replace($phpbb_root_path . "pafiledb/pafiledb.php", "", $_SERVER['PHP_SELF']);

                $dburl = "http://" . $_SERVER['HTTP_HOST'] . $path;

				$template->assign_vars(array(
					'S_ADD_FILE_ACTION' => append_sid("admin_file.$phpEx"),
					'L_AFILETITLE' => $lang['Afiletitle'],                    
					'L_FILEEXPLAIN' => $lang['Fileexplain'],                    
					'L_FILENAME' => $lang['Filename'],
					'L_FILENAMEINFO' => $lang['Filenameinfo'],
					'L_FILESD' => $lang['Filesd'],
					'L_FILESDINFO' => $lang['Filesdinfo'],
					'L_FILELD' => $lang['Fileld'],
					'L_FILELDINFO' => $lang['Fileldinfo'],
					'L_FILECREATOR' => $lang['Filecreator'],
					'L_FILECREATORINFO' => $lang['Filecreatorinfo'],
					'L_FILEVERSION' => $lang['Fileversion'],
					'L_FILEVERSIONINFO' => $lang['Fileversioninfo'],
					'L_FILESS' => $lang['Filess'],
					'L_FILESSINFO' => $lang['Filessinfo'],
					'L_FILESSUPLOAD' => $lang['Filessupload'],
					'L_FILEDOCS' => $lang['Filedocs'],
					'L_FILEDOCSINFO' => $lang['Filedocsinfo'],
					'L_FILEURL' => $lang['Fileurl'],
					'DBURL' => $dburl,
					'L_FILEURLINFO' => $lang['Fileurlinfo'],
					'L_FILEURLUPLOAD' => $lang['Fileurlupload'],
					'L_FILEPI' => $lang['Filepi'],
					'POSTICONS' => $posticons,
					'L_FILEPIINFO' => $lang['Filepiinfo'],
					'L_FILECAT' => $lang['Filecat'],
					'L_FILECATINFO' => $lang['Filecatinfo'],
					'L_FILELICENSE' => $lang['Filelicense'],
					'L_NON' => $lang['None'],
					'LDROPMENU' => $ldropmenu,                                                                    
					'DROPMENU' => $dropmenu,
					'L_FILELICENSEINFO' => $lang['Filelicenseinfo'],
					'L_FILEPIN' => $lang['Filepin'],
					'L_FILEPININFO' => $lang['Filepininfo'],                 
					'L_FILEDLS' => $lang['Filedls'],
					'L_NO' => $lang['No'],
					'L_YES' => $lang['Yes'],
					'U_UPLOAD_SS' => "javascript:NewWindow('" . append_sid("admin_file.php?file=upload&field=ssurl") . "','fileupload','600','450','custom','front');",
					'U_UPLOAD_FILE' => "javascript:NewWindow('" . append_sid("admin_file.php?file=upload&field=dlurl") . "','fileupload','600','450','custom','front');")
				);


				$sql = "SELECT * FROM " . PA_CUSTOM_TABLE;

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				while ($field = $db->sql_fetchrow($result)) 
				{
	                $template->assign_block_vars("custom_field", array(
                        "CUSTOM_NAME" => $field['custom_name'],
                        "CUSTOM_ID" => $field['custom_id'],    
                        "CUSTOM_DESCRIPTION" => $field['custom_description']) 
                    );
				}
			}

			$template->pparse('admin');

			break;            
		}

		case 'edit':
		{
			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_file_edit.tpl')
			);

			if ( isset($HTTP_GET_VARS['id']) || isset($HTTP_POST_VARS['id']) )
			{
				$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
			}

			$f = $id;

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

				$sql = "UPDATE " . PA_FILES_TABLE . " SET file_name = '" . $form['name'] . "', file_desc = '" . $form['shortdesc'] . "', file_longdesc = '" . $form['longdesc'] . "', file_creator = '" . $form['creator'] . "', file_version = '" . $form['version'] . "', file_ssurl = '" . $HTTP_POST_VARS['ssurl'] . "', file_dlurl = '" . $HTTP_POST_VARS['dlurl'] . "', file_catid = '" . $form['category'] . "', file_posticon = '" . $form['posticon'] . "', file_license = '" . $form['license'] . "', file_pin = '" . $form['pin'] . "', file_docsurl = '" . $form['docs'] . "',  file_dls = '" . $form['dls'] . "' 
					WHERE file_id = '" . $f . "'";

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query Info', '', __LINE__, __FILE__, $sql);
				}

				if ( isset($HTTP_GET_VARS['custom']) || isset($HTTP_POST_VARS['custom']) )
				{
					$custom = ( isset($HTTP_GET_VARS['custom']) ) ? $HTTP_GET_VARS['custom'] : $HTTP_POST_VARS['custom'];
				}

				if (!empty($custom)) 
				{
					foreach ($custom as $key => $value) 
					{
						$value = trim($value);

						if ( isset($HTTP_GET_VARS['id']) || isset($HTTP_POST_VARS['id']) )
						{
							$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
						}

						$sql = "DELETE FROM " . PA_CUSTOM_DATA_TABLE . " WHERE customdata_file = '" . $id . "' AND customdata_custom = '" . $key . "'";

						$db->sql_query($sql);

						if (!empty($value)) 
						{
							$sql = "INSERT INTO " . PA_CUSTOM_DATA_TABLE . " VALUES('" . $id . "', '" . $key . "', '" . $value . "')";

							$db->sql_query($sql);
						}
					}
				}

				$message = $lang['Fileedited'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_file.$phpEx?file=edit") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

				message_die(GENERAL_MESSAGE, $message);
			}

			if ($edit == 'form')
			{
				$template->assign_block_vars("file_form", array());

				if ( isset($HTTP_GET_VARS['id']) || isset($HTTP_POST_VARS['id']) )
				{
					$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
				}

				$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_id = '" . $id . "'";

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				$file_info = $db->sql_fetchrow($result);

				$curicons = 1;

	            if (isset($file_info['file_posticon']) && ($file_info['file_posticon'] == 'none' || $file_info['file_posticon'] == 'none.gif' || empty($file_info['file_posticon'])))
	            {
	                $posticons .= '<input type="radio" name="form[posticon]" value="none" checked><a class="small">' . $lang['None'] . '</a>&nbsp;';
	            }
				else 
				{
					$posticons .= '<input type="radio" name="form[posticon]" value="none"><a class="small">' . $lang['None'] . '</a>&nbsp;';
				}

				$handle=opendir($phpbb_root_path . '/pafiledb/icons');

				while (false!==($icon = readdir($handle))) 
				{
	                if ($icon !== "." && $icon !== "..") 
	                {
	                    if (isset($file_info['file_posticon']) && $file_info['file_posticon'] == $icon) 
	                    {
	                        $posticons .= '<input type="radio" name="form[posticon]" value="' . $icon . '" checked><img src="' . $phpbb_root_path . 'pafiledb/icons/' . $icon . '">&nbsp;';
	                    } 
	                    else 
	                    {
	                        $posticons .= '<input type="radio" name="form[posticon]" value="' . $icon . '"><img src="' . $phpbb_root_path . 'pafiledb/icons/' . $icon . '">&nbsp;';
	                    }
	 
	                    $curicons++;
	 
	                    if ($curicons == 8) 
	                    {
	                        $posticons .= '<br>';
	 
	                        $curicons = 0;
	                    }
	                }
				}

                $dropmenu = jumpmenu('', 'admin', array(isset($file_info['file_catid']) ? $file_info['file_catid'] : null => 1));

	            if (isset($file_info['file_license']) && $file_info['file_license'] == 0) 
	            {
	                $ldropmenu .= '<option value="0" selected>' . $lang['None'] . '</option>';
	            }
				else
				{
					$ldropmenu .= '<option calue="0">' . $lang['None'] . '</option>';
				}

				$sql = "SELECT * FROM " . PA_LICENSE_TABLE . " ORDER BY license_id";

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				while ($license = $db->sql_fetchrow($result)) 
				{
					if ($file_info['file_license'] == $license['license_id']) 
					{
						$ldropmenu .= '<option value="' . $license['license_id'] . '" selected>' . $license['license_name'] . '</option>';
					}
					else 
					{
						$ldropmenu .= '<option value="' . $license['license_id'] . '">' . $license['license_name'] . '</option>';
					}
				}
	            if (isset($file_info['file_pin']) && $file_info['file_pin'] == 0) 
	            {
	                $pdropmenu .= '<option value="0" selected>' . $lang['No'] . '</option>';
	 
	                $pdropmenu .= '<option value="1">' . $lang['Yes'] . '</option>';
	            }
				else
				{
					$pdropmenu .= '<option value="0">' . $lang['No'] . '</option>';

					$pdropmenu .= '<option value="1" selected>' . $lang['Yes'] . '</option>';
				}

				$template->assign_vars(array(
					'S_EDIT_FILE_ACTION' => append_sid("admin_file.$phpEx"),
					'SELECT' => $id,                
					'L_EFILETITLE' => $lang['Efiletitle'],                    
					'L_FILEEXPLAIN' => $lang['Fileexplain'],                    
//					'FFILE_NAME' => $file_info['file_name'],
					'FFILE_NAME' => isset($file_info['file_name']) ? $file_info['file_name'] : '',
					'FFILE_DESC' => isset($file_info['file_desc']) ? $file_info['file_desc'] : '',
					'FFILE_LONGDESC' => isset($file_info['file_longdesc']) ? $file_info['file_longdesc'] : '',
					'FFILE_CREATOR' => isset($file_info['file_creator']) ? $file_info['file_creator'] : '',
					'FFILE_VERSION' => isset($file_info['file_version']) ? $file_info['file_version'] : '',
					'FFILE_SSURL' => isset($file_info['file_ssurl']) ? $file_info['file_ssurl'] : '',
					'FFILE_DOCSURL' => isset($file_info['file_docsurl']) ? $file_info['file_docsurl'] : '',
					'FFILE_DLURL' => isset($file_info['file_dlurl']) ? $file_info['file_dlurl'] : '',
					'FFILE_DLS' => isset($file_info['file_dls']) ? $file_info['file_dls'] : '',
					'L_FILENAME' => $lang['Filename'],
					'L_FILENAMEINFO' => $lang['Filenameinfo'],
					'L_FILESD' => $lang['Filesd'],
					'L_FILESDINFO' => $lang['Filesdinfo'],
					'L_FILELD' => $lang['Fileld'],
					'L_FILELDINFO' => $lang['Fileldinfo'],
					'L_FILECREATOR' => $lang['Filecreator'],
					'L_FILECREATORINFO' => $lang['Filecreatorinfo'],
					'L_FILEVERSION' => $lang['Fileversion'],
					'L_FILEVERSIONINFO' => $lang['Fileversioninfo'],
					'L_FILESS' => $lang['Filess'],
					'L_FILESSINFO' => $lang['Filessinfo'],
					'L_FILESSUPLOAD' => $lang['Filessupload'],
					'L_FILEDOCS' => $lang['Filedocs'],
					'L_FILEDOCSINFO' => $lang['Filedocsinfo'],
					'L_FILEURL' => $lang['Fileurl'],
					'DBURL' => $dburl,
					'L_FILEURLINFO' => $lang['Fileurlinfo'],
					'L_FILEURLUPLOAD' => $lang['Fileurlupload'],
					'L_FILEPI' => $lang['Filepi'],
					'POSTICONS' => $posticons,
					'L_FILEPIINFO' => $lang['Filepiinfo'],
					'L_FILECAT' => $lang['Filecat'],
					'L_FILECATINFO' => $lang['Filecatinfo'],
					'L_FILELICENSE' => $lang['Filelicense'],
					'L_NON' => $lang['None'],
					'LDROPMENU' => $ldropmenu,
					'DROPMENU' => $dropmenu,
					'L_FILELICENSEINFO' => $lang['Filelicenseinfo'],
					'L_FILEPIN' => $lang['Filepin'],
					'L_FILEPININFO' => $lang['Filepininfo'],
					'L_FILEDLS' => $lang['Filedls'],
					'L_NO' => $lang['No'],
					'L_YES' => $lang['Yes'],
					'PDROPMENU' => $pdropmenu,
					'U_UPLOAD_SS' => "javascript:NewWindow('" . append_sid("admin_file.php?file=upload&field=ssurl") . "','fileupload','600','450','custom','front');",
					'U_UPLOAD_FILE' => "javascript:NewWindow('" . append_sid("admin_file.php?file=upload&field=dlurl") . "','fileupload','600','450','custom','front');")
				);

				$sql = "SELECT * FROM " . PA_CUSTOM_TABLE;

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				$sql = "SELECT c.*, d.* FROM " . PA_CUSTOM_TABLE . " c, " . PA_CUSTOM_DATA_TABLE . " d
					WHERE d.customdata_file = '$id'
					AND c.custom_id = d.customdata_custom";

				if ( !($result2 = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				if ( !($result3 = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				while ($field_data_test = $db->sql_fetchrow($result3))
				{
					$field_rowset[] = $field_data_test;
				}

				$i = 0;

				while ($field = $db->sql_fetchrow($result)) 
				{
					$template->assign_block_vars("file_form.custom_field", array(
						"CUSTOM_NAME" => $field['custom_name'],
						"CUSTOM_ID" => $field['custom_id'],
						"CUSTOM_DESCRIPTION" => $field['custom_description'])
					);

					if ($field_rowset[$i]['customdata_custom'] == $field['custom_id'])
					{
						$field_data = $db->sql_fetchrow($result2);

						$template->assign_block_vars("file_form.custom_field.custom_field_data", array(
							"CUSTOM_NAME_DATA" => $field_data['data']) 
						);
					}
					else
					{
						$i--;

						$template->assign_block_vars("file_form.custom_field.custom_field_data", array(
							"CUSTOM_NAME_DATA" => '')
						);
					}
					$i++;
				}
			}

			if (empty($edit))
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

				$sql =  "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_parent = '" . $id . "' ORDER BY cat_order ASC";

				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				while ($cat = $db->sql_fetchrow($result)) 
				{
					$row .= '<tr><td width="3%" class="row1" align="center" valign="middle">&nbsp;</td><td width="97%" class="row1"><span class="cattitle"><a href="' . append_sid("admin_file.php?file=edit&amp;id=" . $cat['cat_id']) . '">' . $cat['cat_name'] . '</a></span><br><span class="gen">' . $cat['cat_desc'] . '</span></td></tr>';

					$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_catid = '" . $cat['cat_id'] . "'";

					if ( !($catfiles = $db->sql_query($sql)) )
					{
						message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
					}

					while ($catf = $db->sql_fetchrow($catfiles)) 
					{
						$row .= '<tr><td width="3%" class="row1" align="center" valign="middle"><input type="radio" name="id" value="' . $catf['file_id'] . '"></td><td width="97%" class="row1"><span class="cattitle">&nbsp;&nbsp;&nbsp;&nbsp;&raquo; ' . $catf['file_name'] . '</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="gensmall">' . $catf['file_desc'] . '</span></td></tr>';
					}
				}

				$template->assign_vars(array(
					'S_EDIT_FILE_ACTION' => append_sid("admin_file.$phpEx"),
					'L_EFILETITLE' => $lang['Efiletitle'],                    
					'L_FILEEXPLAIN' => $lang['Fileexplain'],                    
					'ROW' => $row)
				);

				$template->assign_block_vars("file_edit", array());
			}

			$template->pparse('admin');

			break;                    
		}

		case 'delete':
		{
			$template->set_filenames(array(
				'admin' => 'admin/pa_admin_file_delete.tpl')
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
					$message = $lang['Fderror'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_file.$phpEx?file=delete") . '">', '</a>');

					message_die(GENERAL_MESSAGE, $message);
				} 
				else 
				{
					foreach ($select as $key => $value) 
					{
						$sql = "DELETE FROM " . PA_FILES_TABLE . " WHERE file_id = '" . $key . "'";

						if ( !($db->sql_query($sql)) )
						{
							message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
						}

						$sql = "DELETE FROM " . PA_VOTES_TABLE . " WHERE votes_file = '" . $key . "'";

						if ( !($db->sql_query($sql)) )
						{
							message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
						}

						$sql = "DELETE FROM " . PA_CUSTOM_DATA_TABLE . " WHERE customdata_file = '" . $key . "'";

						if ( !($db->sql_query($sql)) )
						{
							message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
						}
					}

					$message = $lang['Filesdeleted'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_file.$phpEx?file=delete") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

					message_die(GENERAL_MESSAGE, $message);                      
				}
			}

			if (empty($delete)) 
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
					message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
				}

				while ($cat = $db->sql_fetchrow($result)) 
				{
					$row .= '<tr><td width="3%" class="row1" align="center" valign="middle">&nbsp;</td><td width="97%" class="row1"><span class="cattitle"><a href="' . append_sid("admin_file.php?file=delete&amp;id=" . $cat['cat_id']) . '">' . $cat['cat_name'] . '</a></span><br><span class="gen">' . $cat['cat_desc'] . '</span></td></tr>';

					$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_catid = '" . $cat['cat_id'] . "'";

					if ( !($catfiles = $db->sql_query($sql)) )
					{
						message_die(GENERAL_ERROR, 'Couldnt Query info', '', __LINE__, __FILE__, $sql);
					}

					while ($catf = $db->sql_fetchrow($catfiles)) 
					{
						if ($check == $catf['file_id'])
						{
							$checkbox = " checked";

							$openbold = "<b>";

							$closebold = "</b>";
						} 
						else 
						{
							$checkbox = "";

							$openbold = "";

							$closebold = "";
						}

						$row .= '<tr><td width="3%" class="row1" align="center" valign="middle"><input type="checkbox" name="select[' . $catf['file_id'] . ']" value="yes" ' . $checkbox . '></td><td width="97%" class="row1"><span class="cattitle">' . $openbold . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $catf['file_name'] . '</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="gen">' . $catf['file_desc'] . '' . $closebold . '</td></tr>';
					}
				}

				$template->assign_vars(array(
					'S_DELETE_FILE_ACTION' => append_sid("admin_file.$phpEx"),
					'L_DFILETITLE' => $lang['Dfiletitle'],                    
					'L_FILEEXPLAIN' => $lang['Fileexplain'],                    
					'ROW' => $row)
				);
			}

			$template->pparse('admin');

			break;                               
		}
	}    
}

include('./page_footer_admin.'.$phpEx);