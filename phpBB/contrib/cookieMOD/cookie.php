<?php
/***************************************************************************
 *                             cookies.php
 *                        ---------------------
 *   begin                : Sunday, May 7, 2023
 *   copyright            : (C) 2023 Integramod
 *   email                : integramod@integramod.com
 *
 *						 
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if (!defined('IN_PHPBB'))
{
    define( 'IN_PHPBB', 1);
}
if (!defined('IN_ADMIN'))
{
    define( 'IN_ADMIN', 1);
}
define('CT_SECLEVEL', 'MEDIUM');
$ct_ignorepvar = array('cookie_domain','cookie_path','cookie_name','server_name','domain_name','script_path','server_port','secure_no','secure_yes','submit');

// PHP5 with register_long_arrays off?
if (@phpversion() >= '5.0.0' && (!@ini_get('register_long_arrays') || @ini_get('register_long_arrays') == '0' || strtolower(@ini_get('register_long_arrays')) == 'off'))
{
	$HTTP_POST_VARS = $_POST;
	$HTTP_SERVER_VARS = $_SERVER;
	$HTTP_COOKIE_VARS = $_COOKIE;
	$HTTP_ENV_VARS = $_ENV;
	$HTTP_POST_FILES = $_FILES;

	// _SESSION is the only superglobal which is conditionally set
	if (isset($_SESSION))
	{
		$HTTP_SESSION_VARS = $_SESSION;
	}
}

$phpbb_root_path = './../';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);
$lang['Clear_browser'] = 'Please clear your browser cookies and cache and restart it for the new cookie settings to take effect.';
$lang['Delete_file'] = 'Please delete the entire <strong>CookieMOD</strong> folder and files now!';

define('CHARSET', 'utf-8');
define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);

function htmlspecialchars_wrapped($str, $ent=REPLACE_FLAGS, $charset=CHARSET) {
    if ($str === null) 
	{
        return ''; // Return an empty string if $str is null
    }
    return htmlspecialchars($str, $ent, $charset);
}


//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
//
// End session management
//

define('cookie_domain', 'cookie_domain');
define('cookie_path', 'cookie_path');
define('cookie_name', 'cookie_name');
define('server_name', 'server_name');
define('script_path', 'script_path');
define('server_port', 'server_port');
define('cookie_secure', 'cookie_secure');

if (htmlspecialchars_wrapped($HTTP_POST_VARS['action'] ?? null) == "write")
{
   $sql = "UPDATE " . CONFIG_TABLE . " SET config_value = '" . str_replace("\'", "''", htmlspecialchars_wrapped($HTTP_POST_VARS['cookie_domain'], ENT_COMPAT, 'utf-8')) . "' WHERE config_name = '" . cookie_domain . "'";
   if( !$db->sql_query($sql) )
   {
      message_die(GENERAL_ERROR, "Failed to update");
   }
   $sql = "UPDATE " . CONFIG_TABLE . " SET config_value = '" . str_replace("\'", "''", htmlspecialchars_wrapped($HTTP_POST_VARS['cookie_path'], ENT_COMPAT, 'utf-8')) . "' WHERE config_name = '" . cookie_path . "'";
   if( !$db->sql_query($sql) )
   {
      message_die(GENERAL_ERROR, "Failed to update");
   }
   $sql = "UPDATE " . CONFIG_TABLE . " SET config_value = '" . str_replace("\'", "''", htmlspecialchars_wrapped($HTTP_POST_VARS['cookie_name'], ENT_COMPAT, 'utf-8')) . "' WHERE config_name = '" . cookie_name . "'";
   if( !$db->sql_query($sql) )
   {
      message_die(GENERAL_ERROR, "Failed to update");
   }
   $sql = "UPDATE " . CONFIG_TABLE . " SET config_value = '" . str_replace("\'", "''", htmlspecialchars_wrapped($HTTP_POST_VARS['domain_name'], ENT_COMPAT, 'utf-8')) . "' WHERE config_name = '" . server_name . "'";
   if( !$db->sql_query($sql) )
   {
      message_die(GENERAL_ERROR, "Failed to update");
   }
   $sql = "UPDATE " . CONFIG_TABLE . " SET config_value = '" . str_replace("\'", "''", htmlspecialchars_wrapped($HTTP_POST_VARS['script_path'], ENT_COMPAT, 'utf-8')) . "' WHERE config_name = '" . script_path . "'";
   if( !$db->sql_query($sql) )
   {
      message_die(GENERAL_ERROR, "Failed to update");
   }
   $sql = "UPDATE " . CONFIG_TABLE . " SET config_value = " . intval($HTTP_POST_VARS['server_port']) . " WHERE config_name = '" . server_port . "'";
   if( !$db->sql_query($sql) )
   {
      message_die(GENERAL_ERROR, "Failed to update");
   }
   $sql = "UPDATE " . CONFIG_TABLE . " SET config_value = " . intval($HTTP_POST_VARS['cookie_secure']) . " WHERE config_name = '" . cookie_secure . "'";
   if( !$db->sql_query($sql) )
   {
      message_die(GENERAL_ERROR, "Failed to update");
   }
 
   echo('<!DOCTYPE html>');
   echo('<html lang="en">');
   echo('<head>');
   echo('<meta charset="utf-8">');
   echo('<meta name="viewport" content="width=device-width, initial-scale=1">');  
   echo('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">');
   echo('<link rel="stylesheet" href="cookie.css">');
   echo('</head>');
   echo('<body>'); 
   echo('<div class="container forumline text-center mt-4 mx-auto">');
   echo('<div class="row th">');
   echo('<div class="col pt-2">' . $lang['Config_updated'] . '!</div>');
   echo('</div>');   
   echo('<div class="row">');
   echo('<div class="col py-2 px-6">');
   echo ('<p><strong>' . $lang['Clear_browser'] . '</strong></p>');
   echo ('<p><strong>' . $lang['Delete_file'] . '</strong></p>');
   echo ('</div>');
   echo('</div>');  
   echo('<div class="row catBottom">');
   echo('<div class="col pt-2 text-center"><a href="./../" class="gen">Return</a></span></div>');
   echo('</div>');
   echo('</div>');
   echo('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>');
   echo('</body>');
   echo('</html>');

}
else
{
   $file_path = $HTTP_SERVER_VARS['SCRIPT_NAME'];
   $dirs = explode('/', $file_path);
   $dir_count = count( $dirs ) - 1;
   unset( $dirs[$dir_count] );
   unset( $dirs[$dir_count-1] ); 
   $script_path = implode( '/', $dirs) . '/';
   $server_port = $HTTP_SERVER_VARS['SERVER_PORT'];
   $server_name = $HTTP_SERVER_VARS['SERVER_NAME'];
   $secure_yes = '';
   $secure_no = '';
   if ($HTTP_SERVER_VARS['SERVER_PORT'] == 443) 
   {
   		$secure_yes = 'checked="checked"';
   }
   else 
   {
   		$secure_no = 'checked="checked"';
   }
   if (strstr($server_name, "www."))
   {
        $cookie_domain = substr($server_name, 3);
   }
   else
   {
        $cookie_domain = $server_name;
   }

   $cookie_path = substr($script_path, 0, -1);

   if (strlen($cookie_path) == 0)
   {
      $cookie_path = "/";
   }

   $cookie_name = substr($cookie_domain, 1, 4) . substr($cookie_path, 1, 4) . '_phpbb';
   echo('<!DOCTYPE html>');
   echo('<html lang="en">');
   echo('<head>');
   echo('<meta charset="utf-8">');
   echo('<meta name="viewport" content="width=device-width, initial-scale=1">');  
   echo('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">');
   echo('<link rel="stylesheet" href="cookie.css">');
   echo('</head>');
   echo('<body>'); 
   echo('<div class="container mx-auto">');
   echo('<br />');
   
   echo('<div class="p-4 shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%);">');
   echo('<p class="text-begin">' . $lang['Cookie_settings_explain'] . '</p>');
   echo('</div>');

   echo('<div class="container-fluid forumline text-center mt-3">');
   echo('<form method="post" action="' . $HTTP_SERVER_VARS['PHP_SELF'] . '">');
   echo('<div class="row catHead">');
   echo('<div class="col cattitle pt-2">' . $cookie_domain . ' ' . $cookie_path . '</div>');
   echo('</div>');
   echo('<div class="row pt-1">');
   echo('<div class="col text-end genmed">' . $lang['Cookie_domain'] . ' </div>');
   echo('<div class="col text-start genmed"><input type="text" name="cookie_domain" value="' . $cookie_domain . '"></div>');
   echo('</div>');
   echo('<div class="row pt-1">');
   echo('<div class="col text-end genmed">' . $lang['Cookie_path'] . ' </div>');
   echo('<div class="col text-start genmed"><input type="text" name="cookie_path" value="' . $cookie_path . '"></div>');
   echo('</div>');
   echo('<div class="row pt-1">');
   echo('<div class="col text-end genmed">' . $lang['Cookie_name'] . ' </div>');
   echo('<div class="col text-start genmed"><input type="text" name="cookie_name" value="' . $cookie_name . '"></div>');
   echo('</div>');
   echo('<div class="row pt-1">');
   echo('<div class="col text-end genmed">' . $lang['Server_name'] . ' </div>');
   echo('<div class="col text-start genmed"><input type="text" name="domain_name" value="' . $server_name . '"></div>');
   echo('</div>');
   echo('<div class="row pt-1">');
   echo('<div class="col text-end genmed">' . $lang['Script_path'] . ' </div>');
   echo('<div class="col text-start genmed"><input type="text" name="script_path" value="' . $script_path . '"></div>');
   echo('</div>');
   echo('<div class="row pt-1">');
   echo('<div class="col text-end genmed">' . $lang['Server_port'] . ' </div>');
   echo('<div class="col text-start genmed"><input type="text" name="server_port" value="' . $server_port . '"></div>');
   echo('</div>');   
   echo('<div class="row py-1">');
   echo('<div class="col text-end genmed">' . $lang['Cookie_secure'] . '</div>');
   echo('<div class="col text-start genmed"><input type="radio" name="cookie_secure" value="0" ' . $secure_no . '>&nbsp;' . $lang['Disabled'] . '&nbsp;<input type="radio" name="cookie_secure" value="1" ' . $secure_yes . '>&nbsp;' . $lang['Enabled'] .'</div>');
   echo('</div>');
   echo('<div class="row pt-1 catBottom">');
   echo('<input type="hidden" name="action" value="write">');   
   echo('<div class="col">Save Settings:  <input type="submit" value="' . $lang['Save_Settings'] . '"></div>');
   echo('</div>');
   echo('</form>');
   echo('</div>');
   echo('</div>');
   echo('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>');
   echo('</body>');
   echo('</html>');
}