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
if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}
$template->set_filenames(array(
	'stats_output' => 'pa_stats_body.tpl')
);
$locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a> -> <a href="' . append_sid("dload.php?action=stats") . '" class="nav">' . $lang['Statistics'] . '</a></span>';
         
$sql = "SELECT * FROM " . PA_CATEGORY_TABLE;

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query stat info', '', __LINE__, __FILE__, $sql);
}

$num['cats'] = $db->sql_numrows($result);

$sql = "SELECT * FROM " . PA_FILES_TABLE;

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query stat info', '', __LINE__, __FILE__, $sql);
}

$num['files'] = $db->sql_numrows($result);

$sql = "SELECT * FROM " . PA_FILES_TABLE . " ORDER BY file_time DESC";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query stat info', '', __LINE__, __FILE__, $sql);
}

$newest = $db->sql_fetchrow($result);

$sql = "SELECT * FROM " . PA_FILES_TABLE . " ORDER BY file_time ASC";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query stat info', '', __LINE__, __FILE__, $sql);
}

$oldest = $db->sql_fetchrow($result);

$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_totalvotes > 1 ORDER BY (file_rating/(file_totalvotes-1)) DESC";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query stat info', '', __LINE__, __FILE__, $sql);
}

$popular = $db->sql_fetchrow($result);

$sql = "SELECT * FROM " . PA_FILES_TABLE . " ORDER BY (file_rating/file_totalvotes) ASC";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query stat info', '', __LINE__, __FILE__, $sql);
}

$lpopular = $db->sql_fetchrow($result);

$sql = "SELECT * FROM " . PA_FILES_TABLE . " ORDER BY file_dls DESC";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query stat info', '', __LINE__, __FILE__, $sql);
}

$mostdl = $db->sql_fetchrow($result);

$sql = "SELECT * FROM " . PA_FILES_TABLE . " ORDER BY file_dls ASC";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query stat info', '', __LINE__, __FILE__, $sql);
}

$leastdl = $db->sql_fetchrow($result);

$sql = "SELECT file_dls, file_rating, file_totalvotes FROM " . PA_FILES_TABLE;

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query stat info', '', __LINE__, __FILE__, $sql);
}

while($row = $db->sql_fetchrow($result))
{
	$totaldls += $row['file_dls'];
	$total_rating += $row['file_rating'];
	$total_votes += $row['file_totalvotes'];
}

$avg = @round($total_rating/$total_votes);

$avgdls = @round($totaldls/$num['files']);

$least = @round($lpopular['file_rating']/($lpopular['file_totalvotes']-1));

$most = @round($popular['file_rating']/($popular['file_totalvotes']-1));

require($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_pafiledb.' . $phpEx);

$lang['Stats_text'] = str_replace("{total_files}", $num['files'], $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{total_categories}", $num['cats'], $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{total_downloads}", $totaldls, $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{u_newest_file}", append_sid("dload.php?action=file&id=" . $newest['file_id']), $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{newest_file}", $newest['file_name'], $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{u_oldest_file}", append_sid("dload.php?action=file&id=" . $oldest['file_id']), $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{oldest_file}", $oldest['file_name'], $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{average}", $avg, $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{u_popular}", append_sid("dload.php?action=file&id=" . $popular['file_id']), $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{popular}", $popular['file_name'], $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{most}", $most, $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{u_lpopular}", append_sid("dload.php?action=file&id=" . $lpopular['file_id']), $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{lpopular}", $lpopular['file_name'], $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{least}", $least, $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{avg_dls}", $avgdls, $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{u_most_dl}", append_sid("dload.php?action=file&id=" . $mostdl['file_id']), $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{most_dl}", $mostdl['file_name'], $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{most_no}", $mostdl['file_dls'], $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{u_least_dl}", append_sid("dload.php?action=file&id=" . $leastdl['file_id']), $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{least_dl}", $leastdl['file_name'], $lang['Stats_text']);
$lang['Stats_text'] = str_replace("{least_no}", $leastdl['file_dls'], $lang['Stats_text']);

$template->assign_vars(array(
 	"L_STATISTICS" => $lang['Statistics'],
 	"STATS_TEXT" => $lang['Stats_text'],                               
 	"LOCBAR" => locbar($locbar))
);
$template->assign_var_from_handle("ACTION_INCLUDE", "stats_output");
?>
