<?php
/***************************************************************************
 *                            lang_portal.php [English]
 *                              -------------------
 *     begin                : Thurs 31 March 2005
 *     copyright            : (C) 2005 IntegraMOD Group (Robert Dougan)
 *     email                : support@integramod.com
 *     website              : http://www.integramod.com
 *
 ****************************************************************************/

$lang['BP_Title'] = 'Blocks Position Tag';
$lang['BP_Explain'] = 'From this control panel, you can add, edit or delete blocks position that can be used in IM Portal.  The default positions are \'header\', \'footer\', \'right\' and \'center\'.  These positions corresponds to the layout being used for a specific portal page.  Only existing positions per portal page must be added here. Position keys that are not existing in the specified layout will not appear in the portal page.  Each position tag key and character must be unique per portal page.';
$lang['BP_Position'] = 'Position character';
$lang['BP_Key'] = 'Position Tag Key';
$lang['BP_Layout'] = 'Portal Page';
$lang['BP_Add_Position'] = 'Add New Position';
$lang['No_bp_selected'] = 'No position selected for editing';
$lang['BP_Edit_Position'] = 'Edit block position';
$lang['Must_enter_bp'] = 'You must enter a position tag key, position character and portal page';
$lang['BP_updated'] = 'Block position updated';
$lang['BP_added'] = 'Block position added';
$lang['Click_return_bpadmin'] = 'Click %sHere%s to return to Blocks Position Administration';
$lang['BP_removed'] = 'Block position removed';
$lang['Portal_wide'] = 'Portal Wide';


$lang['No_layout_selected'] = 'No portal page selected for editing';
$lang['Layout_Title'] = 'Portal Page';
$lang['Layout_Explain'] = 'From this control panel, you can add, edit or delete layout information for your portal pages.  Multiple portal pages can use the same layout.  The layout template file selected must reside in the layout directory under your forum template directory.  You are not allowed to delete the forum default portal page.  Deleting a portal page also deletes the corresponding block positions for that page and all the blocks assigned to it You can navigate to your portal pages using the portal <b>Portal Page ID</b>  Example www.yoursite.com/portal.php<b>?page=2</b>';
$lang['Layout_Name'] = 'Name';
$lang['Layout_Pagetitle'] = 'Page Title';
$lang['Layout_Template'] = 'Template File';
$lang['Layout_Edit'] = 'Edit portal page';
$lang['Layout_Page'] = 'Page ID';
$lang['Layout_View'] = 'View by';
$lang['Layout_Forum_wide'] = 'Forum-wide blocks?';
$lang['Layout_Collapse'] = 'Collapsible Layout?';
$lang['Must_enter_layout'] = 'You must enter a name and a template file';
$lang['Layout_updated'] = 'Portal Page Updated';
$lang['Click_return_layoutadmin'] = 'Click %sHere%s to return to Portal Page Administration';
$lang['Layout_added'] = 'Portal Page added';
$lang['Layout_removed'] = 'Portal Page removed';
$lang['Layout_Add'] = 'Add Portal Page';
$lang['Layout_BP_added'] = 'Layout Config file available: Block Position Tags automatically inserted';
$lang['Layout_default'] = 'Default';
$lang['Layout_make_default'] = 'Make Default';

$lang['Blocks_Title'] = 'Blocks Management';
$lang['Blocks_Explain'] = 'From this control panel, you can add, edit, delete and move blocks for each available portal page.  A block template must exist for every block file added.  When a block file is specified, the content filed is being disregarded by the portal engine.';
$lang['Choose_Layout'] = 'Choose portal page';
$lang['B_Title'] = 'Block Title';
$lang['B_Position'] = 'Block Position';
$lang['B_Active'] = 'Active?';
$lang['B_Display'] = 'Content';
$lang['B_HTML'] = 'HTML';
$lang['B_BBCode'] = 'BBCode';
$lang['B_Type'] = 'Type';
$lang['B_Border'] = 'Show Border';
$lang['B_Titlebar'] = 'Show Titlebar';
$lang['B_Openclose'] = 'Collapsible Block?';
$lang['B_Background'] = 'Show BG';
$lang['B_Local'] = 'Localize Titlebar';
$lang['B_Cache'] = 'Cache?';
$lang['B_Cachetime'] = 'Cache Duration';
$lang['B_Groups'] = 'Usergroups';
$lang['B_Title_image'] = 'Title Image: <br />Leave blank to use text title';
$lang['B_All'] = 'All';
$lang['B_Guests'] = 'Guests Only';
$lang['B_Reg'] = 'Registered Users';
$lang['B_Mod'] = 'Moderators';
$lang['B_Admin'] = 'Administrators';
$lang['B_None'] = 'None';
$lang['B_Layout'] = 'Portal Page';
$lang['B_Page'] = 'Page ID';
$lang['B_Add'] = 'Add Blocks';
$lang['Yes'] = 'Yes';
$lang['No'] = 'No';
$lang['B_Text'] = 'Text';
$lang['B_File'] = 'Block File';
$lang['B_Move_Up'] = 'Move Up';
$lang['B_Move_Down'] = 'Move Down';
$lang['B_View'] = 'View By';
$lang['No_blocks_selected'] = 'No block selected';
$lang['B_Content'] = 'Content';
$lang['B_Blockfile'] = 'Block File';
$lang['Block_Edit'] = 'Block Edit';
$lang['Block_updated'] = 'Block updated';
$lang['Must_enter_block'] = 'You must enter a block title';
$lang['Block_added'] = 'Block added';
$lang['Click_return_blocksadmin'] = 'Click %sHere%s to return to Blocks Management';
$lang['Block_removed'] = 'Block removed';
$lang['B_BV_added'] = 'Block Config file available: Block Variables automatically inserted';

$lang['BV_Title'] = 'Blocks Variables';
$lang['BV_Explain'] = 'From this control panel, you can add, edit or delete blocks config variables that are used in blocks in IM Portal.  These variables can then be configured through the Portal Configuration page to personalize your portal.';
$lang['BV_Label'] = 'Field Label';
$lang['BV_Sub_Label'] = 'Field Info';
$lang['BV_Name'] = 'Config Name';
$lang['BV_Options'] = 'Options';
$lang['BV_Values'] = 'Field Values';
$lang['BV_Type'] = 'Control Type';
$lang['BV_Block'] = 'Block';
$lang['BV_Add_Variable'] = 'Add Block Variable';
$lang['No_bv_selected'] = 'No block variable selected';
$lang['BV_Edit_Variable'] = 'Edit block variable';
$lang['Must_enter_bv'] = 'You must enter a field label and config name';
$lang['BV_updated'] = 'Block variable updated';
$lang['BV_added'] = 'Block variable added';
$lang['Click_return_bvadmin'] = 'Click %sHere%s to return to Blocks Variables Administration';
$lang['Config_Name_Explain'] = 'Must have no space';
$lang['Field_Options_Explain'] = 'Mandatory for dropdown lists and<br />radio buttons (comma delimited).';
$lang['Field_Values_Explain'] = 'Mandatory for dropdown lists and<br />radio buttons (comma delimited).';
$lang['BV_removed'] = 'Block variable removed';

$lang['Config_updated'] = 'Portal configuration updated';
$lang['Click_return_config'] = 'Click %sHere%s to return to Portal Configuration';
$lang['Portal_Config'] = 'IM Portal Configuration';
$lang['Portal_Explain'] = 'From this control panel, you can set all the configurations needed for your portal.  Block variables listed in this page can be created/updated in Blocks Variables configuration page';
$lang['Portal_General_Config'] = 'General Configuration';
$lang['Default_Portal'] = 'Default Portal Page';
$lang['Default_Portal_Explain'] = 'Homepage of the forum';
$lang['Cache_Enabled'] = 'Enable cache system';
$lang['Cache_Enabled_Explain'] = 'For faster loading of portal related information';
$lang['Portal_Header'] = 'Enable system-wide portal header';
$lang['Portal_Header_Explain'] = 'Always show the left block panel';
$lang['Portal_Tail'] = 'Enable system-wide portal footer';
$lang['Portal_Tail_Explain'] = 'Always show the right block panel';
$lang['Confirm_delete_item'] = 'Are you sure you want to delete this item?';
$lang['Cache_cleared'] = 'Cache files removed';
$lang['Collapse_Enabled'] = 'Enable layout collapse';
$lang['Collapse_Enabled_Explain'] = 'Show buttons that allow the layout to collapse';

$lang['bbcode_b_help'] = 'Bold text: [b]text[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Italic text: [i]text[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Underline text: [u]text[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Quote text: [quote]text[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Code display: [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'List: [list]text[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Ordered list: [list=]text[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Insert image: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Insert URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Close all open bbCode tags';
$lang['bbcode_s_help'] = 'Font color: [color=red]text[/color]  Tip: you can also use color=#FF0000';
$lang['bbcode_f_help'] = 'Font size: [size=x-small]small text[/size]';

$lang['Emoticons'] = 'Emoticons';
$lang['More_emoticons'] = 'View more Emoticons';

$lang['Font_color'] = 'Font colour';
$lang['color_default'] = 'Default';
$lang['color_dark_red'] = 'Dark Red';
$lang['color_red'] = 'Red';
$lang['color_orange'] = 'Orange';
$lang['color_brown'] = 'Brown';
$lang['color_yellow'] = 'Yellow';
$lang['color_green'] = 'Green';
$lang['color_olive'] = 'Olive';
$lang['color_cyan'] = 'Cyan';
$lang['color_blue'] = 'Blue';
$lang['color_dark_blue'] = 'Dark Blue';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violet';
$lang['color_white'] = 'White';
$lang['color_black'] = 'Black';

$lang['Font_size'] = 'Font size';
$lang['font_tiny'] = 'Tiny';
$lang['font_small'] = 'Small';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Large';
$lang['font_huge'] = 'Huge';

$lang['Close_Tags'] = 'Close Tags';
$lang['Styles_tip'] = 'Tip: Styles can be applied quickly to selected text.';


$lang['Home_index'] = 'Portal Index';
$lang['Home_preview'] = 'Preview Portal';

//
// That's all, Folks!
// -------------------------------------------------

?>