<?php
/***************************************************************************
 *                            lang_main.php [Basque]
 *                              -------------------
 *     begin                : Wed Dec 12 2001
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *                            
 *     translation by: Mikel González (mikelisimu@yahoo.es)
 *
 *     $Id: lang_main.php,v 1.5.2.3 2002/05/20 13:52:12 psotfx Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

 
//
// The format of this file is:
//
// ---> $lang['message'] = "text";
//
// Deberia tamén intentar configurar local y codificación de caracteres
// (mas direción). La codificación y direción
// unviaranse a la plantilla. El local pue que funcione
// o non, depende del soporte del Sistema Operativu y la
// sintaxis varia ... escueya como meyor-y paeza!
//

$lang['ENCODING'] = "utf-8";
$lang['DIRECTION'] = "ltr";
$lang['LEFT'] = "left";
$lang['RIGHT'] = "right";
$lang['DATE_FORMAT'] =  "d M Y"; // Esto deberíase camudar al formatu predeterminau pa'l su idioma, formatu comu php date()

// Estu ye ocional, si quies incluyir un POQUIÑIN testu
// co'l to copyright indicando que yes el traductor
// engadeo aqui.
$lang['TRANSLATION_INFO'] = "Translated by Phpbb España";

//
// Comunes, estos términos usanse bastante
// en varies páxines
//
$lang['Forum'] = "Forua";
$lang['Category'] = "Maila";
$lang['Topic'] = "Gaia";
$lang['Topics'] = "Gaiak";
$lang['Replies'] = "Erantzunak";
$lang['Views'] = "Irakurketak";
$lang['Post'] = "Mezua";
$lang['Posts'] = "Mezuak";
$lang['Posted'] = "Argitaratua";
$lang['Username'] = "Erabiltzaile izena";
$lang['Password'] = "Pasahitza";
$lang['Email'] = "Emaila";
$lang['Poster'] = "Egilea";
$lang['Author'] = "Egilea";
$lang['Time'] = "Ordua";
$lang['Hours'] = "Orduak";
$lang['Message'] = "Mezua";

$lang['1_Day'] = "Egun 1";
$lang['7_Days'] = "7 egun";
$lang['2_Weeks'] = "2 aste";
$lang['1_Month'] = "Hilabete 1";
$lang['3_Months'] = "3 Hilabete";
$lang['6_Months'] = "6 Hilabete";
$lang['1_Year'] = "Urte 1";

$lang['Go'] = "Joan";
$lang['Jump_to'] = "Aldatu";
$lang['Submit'] = "Bidali";
$lang['Reset'] = "Erreseteatu";
$lang['Cancel'] = "Ezeztatu";
$lang['Preview'] = "Aurretiko ikuskera";
$lang['Confirm'] = "Baieztatu";
$lang['Spellcheck'] = "Ortografia";
$lang['Yes'] = "Bai";
$lang['No'] = "Ez";
$lang['Enabled'] = "Egokitua";
$lang['Disabled'] = "Desegokia";
$lang['Error'] = "Akatsa";

$lang['Next'] = "Hurrengoa";
$lang['Previous'] = "Aurrekoa";
$lang['Goto_page'] = "Horrialdera joan";
$lang['Joined'] = "Erregistratua";
$lang['IP_Address'] = "IP helbidea";

$lang['Select_forum'] = "Forua aukeratu";
$lang['View_latest_post'] = "Azkenengo mezua ikusi";
$lang['View_newest_post'] = "Azkenengo mezua ikusi";
$lang['Page_of'] = "Orria: <b>%d</b>/<b>%d</b>"; // Será reemplazau con : Páxina 1 de 2 por exemplu

$lang['ICQ'] = "ICQ zenbakia";
$lang['AIM'] = "AIM zuzenbidea";
$lang['MSNM'] = "MSN Messenger";
$lang['YIM'] = "Yahoo Messenger";

//$lang['Forum_Index'] = "%s Indice de Foros";  // eg. Nombre de Sitio Indice de Foros, %s se puede quitar si lo desea
$lang['Forum_Index'] = "Forua";  // eg. Nombre de Sitio Indice de Foros, %s se puede quitar si lo desea

$lang['Post_new_topic'] = "Gai berria argitaratu";
$lang['Reply_to_topic'] = "Gaiari erantzun";
$lang['Reply_with_quote'] = "Aipatuaz erantzun";

$lang['Click_return_topic'] = "Klik %shemen%s gaira itzultzeko"; // %s's son para los url, no quitar!
$lang['Click_return_login'] = "Klik %shemen%s berriro saiatzeko";
$lang['Click_return_forum'] = "Klik %shemen%s forura itzultzeko";
$lang['Click_view_message'] = "Klik %shemen%s zure mezua ikusteko";
$lang['Click_return_modcp'] = "Klik %shemen%s Moderatzailearen Kontrol Panelera itzultzeko";
$lang['Click_return_group'] = "Klik %shemen%s taldearen informaziora itzultzeko";

$lang['Admin_panel'] = "Administrazio Panelera joan";
$lang['Board_disable'] = "Sentitzen dugu baina oraingoz foru hau ez dago erabilgarria, mesedez beranduago saiatu";


//
// Global Header strings
//
$lang['Registered_users'] = "Erabiltzaile izenpetuak:";
$lang['Browsing_forum'] = "Foru erabiltzaileak:";
$lang['Online_users_zero_total'] = "Guztira <b> 0 </b>online erabiltzaile: ";
$lang['Online_users_total'] = "Guztira <b>%d</b>online erabiltzaile daude: ";
$lang['Online_user_total'] = "Guztira <b>%d</b>online erabiltzaile:";
$lang['Reg_users_zero_total'] = "0 Izenpetuak, ";
$lang['Reg_users_total'] = "%d Izenpetuak, ";
$lang['Reg_user_total'] = "%d Izenpetuak, ";
$lang['Hidden_users_zero_total'] = "0 Izkutuan eta ";
$lang['Hidden_user_total'] = "%d Izkutuan eta ";
$lang['Hidden_users_total'] = "%d Izkutuan eta ";
$lang['Guest_users_zero_total'] = "0 Gonbidatuak";
$lang['Guest_users_total'] = "%d Gonbidatuak";
$lang['Guest_user_total'] = "%d Gonbidatuak";
$lang['Record_online_users'] = "Online erabiltzaile kopuru haundiena <b>%s</b> izan zen %s"; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = "%sAdministratzaile%s";
$lang['Mod_online_color'] = "%sModeratzaile%s";

$lang['You_last_visit'] = "Zure azken bizita: %s"; // %s reemplazado por fecha y hora
$lang['Current_time'] = "Egungo ordu eta data: %s"; // %s reemplazado por hora

$lang['Search_new'] = "Azken bisitazkerozko mezuak ikusi";
$lang['Search_your_posts'] = "Zure mezuak ikusi";
$lang['Search_unanswered'] = "Erantzunik gabeko mezuak ikusi";

$lang['Register'] = "Izenpetu";
$lang['Profile'] = "Profila";
$lang['Edit_profile'] = "Zure profila editatu";
$lang['Search'] = "Bilatu";
$lang['Memberlist'] = "Kideak";
$lang['FAQ'] = "FAQ";
$lang['BBCode_guide'] = "BBCode gia";
$lang['Usergroups'] = "Erabiltzaile taldeak";
$lang['Last_Post'] = "Azken mezua";
$lang['Moderator'] = "Moderatzailea";
$lang['Moderators'] = "Moderatzaileak";


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = "Gure erabiltzaileek <b>0</b> mezuak argitaratu dituzte"; // Number of posts
$lang['Posted_articles_total'] = "Gure erabiltzaileek <b>%d</b> mezu argitaratu dituzte"; // Número de mensajes
$lang['Posted_article_total'] = "Gure erabiltzaileek <b>%d</b> mezu argitaratu dituzte"; // Número de mensajes
$lang['Registered_users_zero_total'] = "<b>0</b> erabiltzaile ditugu izenpetuak"; // # registered users
$lang['Registered_users_total'] = "<b>%d</b> erabiltzaile izenpetuak"; // # usuarios registrados
$lang['Registered_user_total'] = "<b>%d</b> erabiltzaile izenpetuak"; // # usuarios registrados
$lang['Newest_user'] = "Azken erabiltzaile izenpetua <b>%s%s%s</b> da."; // un enlace a nombre de usuario, /a 

$lang['No_new_posts_last_visit'] = 'Ez dago mezu berriri zure azken bisitatik';
$lang['No_new_posts'] = "Ez dago mezu berririk";
$lang['New_posts'] = "Mezu berriak";
$lang['New_post'] = "Mezu berria";
$lang['No_new_posts_hot'] = "Ez dago mezu berririk [ Popular ]";
$lang['New_posts_hot'] = "Mezu berriak [ Popular ]";
$lang['No_new_posts_locked'] = "Ez dago mezu berririk [ Itxita ]";
$lang['New_posts_locked'] = "Mezu berriak [ Itxita ]";
$lang['Forum_is_locked'] = "Foru itxia";

//
// Login
//
$lang['Enter_password'] = "Mesedez sartu zure erabiltzaile izen eta pasahitza";
$lang['Login'] = "Login";
$lang['Logout'] = "Logout";

$lang['Forgotten_password'] = "Pasahitza ahaztu zait";

$lang['Log_me_in'] = "Zuzenean sartu bisita bakoitzean";

$lang['Error_login'] = "Erabiltzaile izen edo pasahitz okerra sartu duzu";


//
// Index page
//
$lang['Index'] = "Aurkibidea";
$lang['No_Posts'] = "Ez dago mezurik";
$lang['No_forums'] = "Ez dago forurik";

$lang['Private_Message'] = "Mezu pribatua";
$lang['Private_Messages'] = "Mezu pribatuak";
$lang['Who_is_Online'] = "Zein dago online";

$lang['Mark_all_forums'] = "Foru guztiak irakurritzat jo";
$lang['Forums_marked_read'] = "Foru guztiak irakurritzat jo dira";


//
// Viewforum
//
$lang['View_forum'] = "Forua ikusi";

$lang['Forum_not_exist'] = "Aukeratutako foruak ez du existitzen";
$lang['Reached_on_error'] = "Horrialde honetara okerrez heldu zara";

$lang['Display_topics'] = "Aurreko gaiak erakutsi";
$lang['All_Topics'] = "Gai guztiak";

$lang['Topic_Announcement'] = "<b>Anunziatu:</b>";
$lang['Topic_Sticky'] = "<b>PostIt:</b>";
$lang['Topic_Moved'] = "<b>Mugitu:</b>";
$lang['Topic_Poll'] = "<b>[ Inkesta ]</b>";

$lang['Mark_all_topics'] = "Gai guztiak irakurritzat jo";
$lang['Topics_marked_read'] = "Foru honetan gai guztiak irakurritzat jo dira";

$lang['Rules_post_can'] = "<b>Foro honetan gai berriak argitaratu ditzakezu</b>";
$lang['Rules_post_cannot'] = "<b>Foro honetan gai berriak ezin ditzakezu argitaratu</b> ";
$lang['Rules_reply_can'] = "<b>Foro honetan gaiei erantzun diezaiekezu</b>";
$lang['Rules_reply_cannot'] = "<b>Foro honetan ezin duzu gairik erantzun</b>";
$lang['Rules_edit_can'] = "<b>Foro honetan zure mezuak editatu ditzakezu</b> ";
$lang['Rules_edit_cannot'] = "<b>Foro honetan ezin duzu mezurik editatu</b>";
$lang['Rules_delete_can'] = "<b>Foro honetan zure mezuak ezabatu ditzakezu</b>";
$lang['Rules_delete_cannot'] = "<b>Foro honetan ezin dituzu zure mezuak ezabatu</b>";
$lang['Rules_vote_can'] = "<b>Foro honetan inkestetan bozkatu dezakezu</b>";
$lang['Rules_vote_cannot'] = "<b>Foro honetan ezin duzu inkestetan bozkatu</b>";
$lang['Rules_moderate'] = "<b> %sForo hau moderatu dezakezu%s"; // %s reemplazado por enlaces, no quitar! 

$lang['No_topics_post_one'] = "Ez dago gairik foru honetan egin klik gai berrian gai berri bat argitaratzeko";


//
// Viewtopic
//
$lang['View_topic'] = "Gaia ikusi";

$lang['Guest'] = 'Gonbidatua';
$lang['Post_subject'] = "<b>Gaia</b>";
$lang['View_next_topic'] = "Hurrengo gaia ikusi";
$lang['View_previous_topic'] = "Aurreko gaia ikusi";
$lang['Submit_vote'] = "Bozkatu";
$lang['View_results'] = "Emaitzak ikusi";

$lang['No_newer_topics'] = "Ez dago gai berririk foru honetan";
$lang['No_older_topics'] = "Ez dago aurreko gairik foru honetan";
$lang['Topic_post_not_exist'] = "Eskatutako gai edo mezuak ez du existitzen";
$lang['No_posts_topic'] = "Gai honentzat mezurik ez dago";

$lang['Display_posts'] = "Aurrekoen mezuak erakutsi";
$lang['All_Posts'] = "Mezu guztiak";
$lang['Newest_First'] = "Berriena lehenik";
$lang['Oldest_First'] = "Zaharrena lehenik";

$lang['Back_to_top'] = "Gora itzuli";

$lang['Read_profile'] = "Erabiltzaile profila ikusi"; 
$lang['Send_email'] = "Erabiltzaileari emaila bidali";
$lang['Visit_website'] = "Egilearen web-a bisitatu";
$lang['ICQ_status'] = "ICQ estatusa";
$lang['Edit_delete_post'] = "Mezu hau editatu/ezabatu";
$lang['View_IP'] = "Egilearen IP-a ikusi";
$lang['Delete_post'] = "Mezu hau ezabatu";

$lang['wrote'] = "Idatzi zuen"; // precede al nombre de usuario y es seguido por el texto citado
$lang['Quote'] = "Aipatzen du"; // viene antes de la salida de bbcode citar
$lang['Code'] = "Kodigoa"; // viene antes de la salida de bbcode código

$lang['Edited_time_total'] = "Azken edizioa %s-k egina %s-an %d aldiz."; // Ultima edición por mi el Oct 2001, editado 1 vez
$lang['Edited_times_total'] = "Azken edizioa %s-k egina %s-an %d aldiz."; // Ultima edición por mi el Oct 2001, editado 2 veces

$lang['Lock_topic'] = "Gai hau itxi";
$lang['Unlock_topic'] = "Gai hau desblokeatu";
$lang['Move_topic'] = "Gai hau mugitu";
$lang['Delete_topic'] = "Gai hau ezabatu";
$lang['Split_topic'] = "Gai hau banandu";

$lang['Stop_watching_topic'] = "Gai hau begiratzeari hutzi";
$lang['Start_watching_topic'] = "Gai hau erantzuneko begiratu";
$lang['No_longer_watching'] = "Gai hau dagoeneko ez duzu begiratzen";
$lang['You_are_watching'] = "Orain gai hau begiratzen ari da";

$lang['Total_votes'] = "Botuak guztira";

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "Mezuaren enborra";
$lang['Topic_review'] = "Gaia errebisatu";

$lang['No_post_mode'] = "Ez da mezu mota adierazi"; // Si se llama posting.php sin un modo (newtopic/reply/delete/etc, no debería mostrarse normalmente)

$lang['Post_a_new_topic'] = "Gai berri bat argitaratu";
$lang['Post_a_reply'] = "Erantzun bat argitaratu";
$lang['Post_topic_as'] = "Gaia argitaratu";
$lang['Edit_Post'] = "Mezua editatu";
$lang['Options'] = "Aukerak";

$lang['Post_Announcement'] = "Iragarkia";
$lang['Post_Sticky'] = "PostIt";
$lang['Post_Normal'] = "Normal";

$lang['Confirm_delete'] = "Mezu hau ezabatu nahi duzula zihur al zaude?";
$lang['Confirm_delete_poll'] = "Inkesta hau ezabatu nahi duzula zihur al zaude?";

$lang['Flood_Error'] = "Ezin duzu beste gai bat ain azkar argitaratu, hemendik pixkatera saiatu";
$lang['Empty_subject'] = "Asuntua adierazi behar duzu gai berri bat argitaratzean";
$lang['Empty_message'] = "Mezu bat adierazi behar duzu argitaratzeko";
$lang['Forum_locked'] = "Foru hau itxirik dago eta ezin duzu gairik editatu, argitaratu edo erantzun";
$lang['Topic_locked'] = "Foru hau itxirik dago eta ezin duzu gairik editatu edo erantzun";
$lang['No_post_id'] = "Mezu bat aukeratu behar duzu editatu ahal izateko";
$lang['No_topic_id'] = "Erantzungo diozun gaia aukeratu behar duzu";
$lang['No_valid_mode'] = "Mesedez itzuli eta berriro saiatu mezuak editatu, erantzun, argitaratu edo aipatu egin dezakezu soilik";
$lang['No_such_post'] = "Ez du mezu horrek existitzen itzuli eta saiatu berriro";
$lang['Edit_own_posts'] = "Sentitzen dugu baino zure mezuak baino ezin dituzu editatu";
$lang['Delete_own_posts'] = "Sentitzen dugu baino zure mezuak baino ezin dituzu ezabatu";
$lang['Cannot_delete_replied'] = "Sentitzen dugu baino ezin dituzu erantzunak izan diren mezuak ezabatu";
$lang['Cannot_delete_poll'] = "sentitzen dugu baino ezin duzu indarrean den inkesta ezabatu";
$lang['Empty_poll_title'] = "Zure mezuarentzat izenburu bat idatzi behar duzu";
$lang['To_few_poll_options'] = "Gutxienez bi aukera sartu behar dituzu inkestarako";
$lang['To_many_poll_options'] = "Inkestarako aukera gehiegi sartu dituzu";
$lang['Post_has_no_poll'] = "Mezu honek inkestarik ez du";

$lang['Add_poll'] = "Inkesta bat gehitu";
$lang['Add_poll_explain'] = "Zure gaira ez baduzu inkestarik gehitu nahi ez bete hutsuneak";
$lang['Poll_question'] = "Inkestako galdera";
$lang['Poll_option'] = "Inkestako aukera";
$lang['Add_option'] = "Aukera gehitu";
$lang['Update'] = "Eguneratu";
$lang['Delete'] = "Ezabatu";
$lang['Poll_for'] = "Correr encuesta por";
$lang['Days'] = "Días"; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = "[ 0 idatzi edo ez bete inkesta ez dadin bukatu ]";
$lang['Delete_poll'] = "Inkesta ezabatu";
$lang['Already_voted'] = 'Zuk dagoeneko bozkatu duzu inkesta honetan'; 
$lang['No_vote_option'] = 'Bozkatzean aukera bat adierazi behar duzu'; 

$lang['Disable_HTML_post'] = "HTML indargabetu mezu honetan";
$lang['Disable_BBCode_post'] = "BBCode indargabetu mezu honetan";
$lang['Disable_Smilies_post'] = "Smilies indargabetu mezu honetan";

$lang['HTML_is_ON'] = "HTML <u>ON</u> dago";
$lang['HTML_is_OFF'] = "HTML <u>OFF</u> dago";
$lang['BBCode_is_ON'] = "%sBBCode%s <u>ON</u> dago"; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = "%sBBCode%s <u>OFF</u> dago";
$lang['Smilies_are_ON'] = "Smilies <u>ON</u> dago";
$lang['Smilies_are_OFF'] = "Smilies <u>OFF</u> dago";

$lang['Attach_signature'] = "Zinadura gehitu (Zinadura profilean aldatzeko aukera dago)";
$lang['Notify'] = "Erantzun bat argitaratzean ohartarazi";
$lang['Delete_post'] = "Mezu hau ezabatu";

$lang['Stored'] = "Zure mezua arrakastatzuki argitaratu da";
$lang['Deleted'] = "Zure mezua arrakastatzuki ezabatu da";
$lang['Poll_delete'] = "Zure inkesta arrakastatzuki ezabatu da";
$lang['Vote_cast'] = "Zure bozka argitaratua izan da";

$lang['Topic_reply_notification'] = "Gaiari erantzun diotenan oharra";

$lang['bbcode_b_help'] = "Negrita: [b]texto[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Cursiva: [i]texto[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Subrayado: [u]texto[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Cita: [quote]texto[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Código: [code]código[/code]  (alt+c)";
$lang['bbcode_l_help'] = "Lista: [list]texto[/list] (alt+l)";
$lang['bbcode_o_help'] = "Lista ordenada: [list=]texto[/list]  (alt+o)";
$lang['bbcode_p_help'] = "Insertar imagen: [img]http://url_imagen[/img]  (alt+p)";
$lang['bbcode_w_help'] = "Insertar URL: [url]http://url[/url] o [url=http://url]texto URL[/url]  (alt+w)";
$lang['bbcode_a_help'] = "Cerrar todos los marcadores de bbCode abiertos";
$lang['bbcode_s_help'] = "Color: [color=red]texto[/color]  Nota: Puede usar color=#FF0000";
$lang['bbcode_f_help'] = "Tamaño: [size=x-small]texto pequeño[/size]";

$lang['Emoticons'] = "Emoticons";
$lang['More_emoticons'] = "Emoticons gehiago ikusi";

$lang['Font_color'] = "Kolorea";
$lang['color_default'] = "Aurretik ezarria";
$lang['color_dark_red'] = "Gorri iluna";
$lang['color_red'] = "Gorria";
$lang['color_orange'] = "Laranja";
$lang['color_brown'] = "Marroia";
$lang['color_yellow'] = "Horia";
$lang['color_green'] = "Orlegia";
$lang['color_olive'] = "Oliba";
$lang['color_cyan'] = "Cyan";
$lang['color_blue'] = "Urdina";
$lang['color_dark_blue'] = "Urdin iluna";
$lang['color_indigo'] = "Indigoa";
$lang['color_violet'] = "Bioleta";
$lang['color_white'] = "Zuria";
$lang['color_black'] = "Beltza";

$lang['Font_size'] = "Neurria";
$lang['font_tiny'] = "Miniatura";
$lang['font_small'] = "Txikia";
$lang['font_normal'] = "Normala";
$lang['font_large'] = "Haundia";
$lang['font_huge'] = "Itzela";

$lang['Close_Tags'] = "Markagailuak itxi";
$lang['Styles_tip'] = "Oharra: Aukeratutako idatziari estilo ezberdinak era azkarrean aplikatu ahal zatzaizkio";


//
// Private Messaging
//
$lang['Private_Messaging'] = "Mezu pribatuak";

$lang['Login_check_pm'] = "Sartu zure mezu pribatuak ikusteko";
$lang['New_pms'] = "Zuk %d mezu berri dituzu"; // Usted tiene 2 mensajes nuevos
$lang['New_pm'] = "Zuk %d mezu berri dituzu"; // Usted tiene 1 mensaje nuevo
$lang['No_new_pm'] = "Zuk ez duzu mezu berririk";
$lang['Unread_pms'] = "Zuk %d mezu dituzu irakurri gabe";
$lang['Unread_pm'] = "Zuk %d mezu dituzu irakurri gabe";
$lang['No_unread_pm'] = "Zuk ez duzu mezurik irakurri gabe";
$lang['You_new_pm'] = "Sarrera kutxan mezu pribatu berri bat duzu";
$lang['You_new_pms'] = "Sarrera kutxan mezu pribatu berriak dituzu";
$lang['You_no_new_pm'] = "Ez duzu mezu pribatu berririk";

$lang['Inbox'] = "Sarrera kutxa";
$lang['Outbox'] = "Irteera kutxa";
$lang['Savebox'] = "Gordetako elementuak";
$lang['Sentbox'] = "Bidalitako elementuak";
$lang['Flag'] = "Marka";
$lang['Subject'] = "Gaia";
$lang['From'] = "De";
$lang['To'] = "Para";
$lang['Date'] = "Data";
$lang['Mark'] = "Markatu";
$lang['Sent'] = "Bidalia";
$lang['Saved'] = "Gordea";
$lang['Delete_marked'] = "Markatuak ezabatu";
$lang['Delete_all'] = "Guztiak ezabatu";
$lang['Save_marked'] = "Markatuak gorde"; 
$lang['Save_message'] = "Mezua gorde";
$lang['Delete_message'] = "Mezua ezabatu";

$lang['Display_messages'] = "Aurrekoen mazuak erakutsi"; // Seguido por # de dias/semanas/meses
$lang['All_Messages'] = "Mezu guztiak";

$lang['No_messages_folder'] = "Karpeta honetan mezurik ez duzu";

$lang['PM_disabled'] = "Foru honetan mezu pribatuak indargabetu dira";
$lang['Cannot_send_privmsg'] = "Sentitzen dugu baino administratzaileak mezu pribatuak bidaltzeko aukera indargabetu dizu";
$lang['No_to_user'] = "Erabiltzaile izen bat adierazi behar duzu mezu hau bidaltzeko";
$lang['No_such_user'] = "Sentitzen dugu baino erabiltzaile horrek ez du existitzen";

$lang['Disable_HTML_pm'] = "HTML indargabetu mezu honetan";
$lang['Disable_BBCode_pm'] = "BBCode indargabetu mezu honetan";
$lang['Disable_Smilies_pm'] = "Indargabetu mezu honetan";

$lang['Message_sent'] = "Zure mezua bidalia izan da";

$lang['Click_return_inbox'] = "Zure sarrera kutxara itzultzeko hemen %s klik egin%s";
$lang['Click_return_index'] = "Aurkibidera itzultzeko hemen %s klik egin%s";

$lang['Send_a_new_message'] = "Mezu pribatu berri bat bidali";
$lang['Send_a_reply'] = "Mezu pribatuari erantzun";
$lang['Edit_message'] = "Mezu pribatua editatu";

$lang['Notification_subject'] = "Mezu pribatu berri bat heldu da";

$lang['Find_username'] = "Erabiltzaile bat aurkitu";
$lang['Find'] = "Aurkitu";
$lang['No_match'] = "Ez da ezer aurkitu";

$lang['No_post_id'] = "Ez da mezu IDrik identifikatu";
$lang['No_such_folder'] = "Karpeta horrek ez du existitzen";
$lang['No_folder'] = "Karpetarik ez da zehaztu";

$lang['Mark_all'] = "Guztiak markatu";
$lang['Unmark_all'] = "Guztiak ezmarkatu";

$lang['Confirm_delete_pm'] = "Mezu hau ezabatu nahi duzula ziur al zaude?";
$lang['Confirm_delete_pms'] = "Mezu hauek ezabatu nahi dituzula ziur al zaude?";

$lang['Inbox_size'] = "Zure sarrera kutxa %d%% batean beterik dago"; // eg. Su Bandeja de Entrada esta 50% llena
$lang['Sentbox_size'] = "Zure bidalitako elementuen kutxa %d%% batean beterik dago"; 
$lang['Savebox_size'] = "Zure gordetako elementuen kutxa %d%% batean beterik dago"; 

$lang['Click_view_privmsg'] = "%shemen%s klikatu zure sarrera kutxa bisitatzeko";

$lang['Read_pm'] = 'Mezua irakurri'; 
$lang['Post_new_pm'] = 'Mezua bidali'; 
$lang['Post_reply_pm'] = 'Mezua erantzun'; 
$lang['Post_quote_pm'] = 'Mezua aipatu'; 
$lang['Edit_pm'] = 'Mezua editatu'; 

$lang['Unread_message'] = 'Mezu ez irakurria'; 
$lang['Read_message'] = 'Mezu irakurria'; 


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "%s ren profila ikusten"; // %s es nombre de usuario 
$lang['About_user'] = "Guztia %sri buruz"; // %s es nombre de usuario

$lang['Preferences'] = "Lehentasunak";
$lang['Items_required'] = "*kin markaturiko hutsuneak derrigorrez bete beharrekoak dira kontrakoa adierazten ez den bitartean";
$lang['Registration_info'] = "Izenpetze informazioa";
$lang['Profile_info'] = "Profil informazioa";
$lang['Profile_info_warn'] = "Informazio hau publikoki eskuragarri egongo da";
$lang['Avatar_panel'] = "Avatar kontrol panela";
$lang['Avatar_gallery'] = "Avatar galeria";

$lang['Website'] = "Web horria";
$lang['Location'] = "Kokagunea";
$lang['Contact'] = "Kontaktatu";
$lang['Email_address'] = "Emaila";
$lang['Email'] = "Emaila";
$lang['Send_private_message'] = "Mezu pribatua bidali";
$lang['Hidden_email'] = "[ Ezkutuan ]";
$lang['Search_user_posts'] = "Erabiltzaile honen mezuak bilatu";
$lang['Interests'] = "Interesa";
$lang['Occupation'] = "Okupazioa"; 
$lang['Poster_rank'] = "Egilearen maila";

$lang['Total_posts'] = "Mezu kopurua";
$lang['User_post_pct_stats'] = "Guztiaren %.2f%%a"; // 1.25% del total
$lang['User_post_day_stats'] = "Eguneko %.2f mezu"; // 1.5 mensajes por dia
$lang['Search_user_posts'] = "%sren mezu guztiak bilatu"; // Encontrar todos los mensajes del usuario

$lang['No_user_id_specified'] = "Sentitzen dugu baino erabiltzaile hori ez da existitzen";
$lang['Wrong_Profile'] = "Zeurea ez den profilik ezin duzu aldatu.";

$lang['Only_one_avatar'] = "Avatar era bat bakarrik adierazi daiteke";
$lang['File_no_data'] = "Adierazitako URLean aurkitzen den artxibategiak ez du datorik";
$lang['No_connection_URL'] = "Adierazitako URLarekin ezin izan da konekziorik lortu";
$lang['Incomplete_URL'] = "URLa ez dago osatuta";
$lang['Wrong_remote_avatar_format'] = "Urrutiko avatarraren URLa ez da baliozkoa";
$lang['No_send_account_inactive'] = "Sentitzen dugu baino zure pasahitza ezin da berreskuratu zure kontua indargabeturik bait dago. Mesedez foruko administratzailearekin kontaktuan jarri";

$lang['Always_smile'] = "Smiliesak beti indarrean jarri";
$lang['Always_html'] = "Beti onartu HTMLak";
$lang['Always_bbcode'] = "Beti onartu BBCodeak";
$lang['Always_add_sig'] = "Beti gehitu nere sinadura";
$lang['Always_notify'] = "Erantzunak daudenean beti ohartarazi";
$lang['Always_notify_explain'] = "Email bat bidali norbaitek zuk argitaratutako gai bati erantzuten dionean. Hau zuk mezu bat argitaratzen duzun bakoitzean aldatu daiteke";

$lang['Board_style'] = "Foruko estiloa";
$lang['Board_lang'] = "Foruko hizkuntza";
$lang['No_themes'] = "Data basean gairik ez dago";
$lang['Timezone'] = "Ordutegi esparrua";
$lang['Date_format'] = "Data formatua";
$lang['Date_format_explain'] = "Erabilitako sintaxia <a href=\"http://www.php.net/date\" target=\"_other\">date()</a> de PHP funtzioaren berdina da";
$lang['Signature'] = "Firma";
$lang['Signature_explain'] = "Argitaratzen ditudan mezuei gehitu ahal zaien testu blokea da hau.Mugatua dago %d karaktere kopurura";
$lang['Public_view_email'] = "Nire emaila beti erakutsi";

$lang['Current_password'] = "Egungo pasahitza";
$lang['New_password'] = "Pasahitza berria";
$lang['Confirm_password'] = "Pasahitza baieztatu";
$lang['Confirm_password_explain'] = "Pasahitza baieztatu behar duzu, berau aldatu nahi baduzu edo posta elektronikoa aldatu nahi baduzu";
$lang['password_if_changed'] = "Pasahitza aldatu nahi baduzu soilik duzu berau adierazi beharra";
$lang['password_confirm_if_changed'] = "Zure pasahitza baieztatzearekin nahikoa da goian aldatu baduzu";

$lang['Avatar'] = "Avatar";
$lang['Avatar_explain'] = "Muestra una pequeña imagen bajo sus detalles en los mensajes. Solo una imagen puede ser mostrada a la vez, su ancho no puede ser mayor que %d pixels, y su altura no mayor que %d pixels y el tamaño de archivo no mas de %dkB."; $lang['Upload_Avatar_file'] = "Enviar Avatar desde su PC";
$lang['Upload_Avatar_URL'] = "Avatarra bidali URL batetik";
$lang['Upload_Avatar_URL_explain'] = "Escriba el URL donde se encuentra el archivo de imagen de su Avatar, será copiado a este sitio.";
$lang['Pick_local_Avatar'] = "Galeriako avatar bat aukeratu";
$lang['Link_remote_Avatar'] = "Leku honetatik at avatar bat binkulatu";
$lang['Link_remote_Avatar_explain'] = "Zure avatarraren imagin artxiboa dagoen URLa idatzi";
$lang['Avatar_URL'] = "Avatar imaginaren URLa";
$lang['Select_from_gallery'] = "Gure galeriatik avatarra aukeratu";
$lang['View_avatar_gallery'] = "Galeria erakutsi";

$lang['Select_avatar'] = "Avatarra aukeratu";
$lang['Return_profile'] = "Avatarra ezeztatu";
$lang['Select_category'] = "Maila aukeratu";

$lang['Delete_Image'] = "Imagina ezabatu";
$lang['Current_Image'] = "Egungo imagina";

$lang['Notify_on_privmsg'] = "Mezu pribatu berriengatik ohartarazi";
$lang['Popup_on_privmsg'] = "Mezu pribatuak daudenean lehio berria agerrarazi";
$lang['Popup_on_privmsg_explain'] = "Plantila batzuk mezu pribatua noiz jaso duzun ohartarazi diezazukete"; 
$lang['Hide_user'] = "Zure online estatusa ezkutatu";

$lang['Profile_updated'] = "Zure profila eguneratua izan da";
$lang['Profile_updated_inactive'] = "Zure profila eguneratua izan da baina detaile garrantzitzuak aldatu direnez zure kontua indargabetu egin da. Zure emaila begiratu zure kontua berriro nola indarrean jarri jakiteko edo administratzailea bada berrindartu behar duena, zai egon";

$lang['Password_mismatch'] = "Sartutako pasahitzek ez dute balio";
$lang['Current_password_mismatch'] = "Sartu duzun pasahitza eta databasean dagoena ez dira berdinak";
$lang['Password_long'] = "Zure pasahitzak ezin du 32 karaktere baino gehiago eduki";
$lang['Username_taken'] = "Sentitzen dugu baino erabiltzaile izen horrek iada existitzen du";
$lang['Username_invalid'] = "El nombre de usuario contiene un caracter inválido como \"";
$lang['Username_disallowed'] = "Barkatu baino erabiltzaile izen hori mugatua dago";
$lang['Email_taken'] = "Sentitzen dugu baino dagoeneko posta elektroniko zuzenbide hori beste erabiltzaile batek izenpetu du";
$lang['Email_banned'] = "Barkatu baina korreo elektroniko zuzenbide hori baneatua izan da";
$lang['Email_invalid'] = "Sarturiko pozta elektroniko zuzenbideak ez du balio";
$lang['Signature_too_long'] = "Sinadura oso luzea da";
$lang['Fields_empty'] = "Derrigorrezko hutsuneak bete behar dituzu";
$lang['Avatar_filetype'] = "Avatarraren imaginak .jpg, .gif o .png erakoa izan behar du";
$lang['Avatar_filesize'] = "Avatar artxibategiak %d kB baino txikiagoa izan behar du"; // El tamaño de archivo del avatar debe ser menor de 6 kB
$lang['Avatar_imagesize'] = "Avatarrak %d pixel luzean bider %d pixel zabalean baino gutxiago eduki behar ditu"; 

$lang['Welcome_subject'] = "Ongietorria %s foruetara"; // Bienvenido a los Foros de Nombre de Sitio
$lang['New_account_subject'] = "Erabiltzaile kontu berria";
$lang['Account_activated_subject'] = "Kontua indarrean";

$lang['Account_added'] = "Eskerrikasko izena emategatik zure kontua sortua izan da.Orain bertara sartu zaitezke zure izen eta pasahitza idatziaz";
$lang['Account_inactive'] = "Zure kontua sortua izan da.Ala ere foru honek kontua indarrean jartzea eskatzen du eta horretarako zure emailera aktibazio kode bat bidali dugu.";
$lang['Account_inactive_admin'] = "Zure kontua sortua izan da.Ala ere foru honek kontua administratzaileak indarrean jartzea eskatzen du eta horretarako administratzaileari emaila bidali diogu eta zure kontua indarrean jartzean ohartaraziko dizugu.";
$lang['Account_active'] = "Zure kontua indarrean jarri da. Eskerrikasko izena emateagatik";
$lang['Already_activated'] = 'Zuk zure kontua indarrean jarri duzu'; 
$lang['Account_active_admin'] = "Zure kontua indarrean jarri da";
$lang['Reactivate'] = "¡Reactive su cuenta!";
$lang['COPPA'] = "Zure kontua sortu da, baino onartua izan behar du. Emaila begiratu detaile gehiago nahi baduzu.";

$lang['Registration'] = "Izenpetze baldintzak";
$lang['Reg_agreement'] = "Nahiz eta foru honen administratzaile eta moderatzaileak  egin ahal guztiak egingo dituzten material iraingarri guztiak baztertzeko, mezu guztiak begiratzea ezinezkoa da. Beraz zuk, foru honetan argitaratzen diren mezuek bere egileen aburuak isladatzen dituztela onartzen duzu eta ez administratzaile, moderatzaile edo webmasterrarenak (Beraiek argitaratutako mezuak salbuespen, noski) azken hauek ez direlarik ondorioz, mezu horien arduradunak.  Zu,     .<br /><br />,  ados zaude gehiegikeri, iraingarri, gorrotoz betea, xenofobo, sexista edo indarrean dauden legeen kontrako materialik ez argitaratzearekin. Era horretako materialik argitaratzen baduzu zure kontua ezeztatua izango da eta zure interneteko sarrera hornitzailea ohartarazia izango da. Mezu guztien IP zuzenbidea gorde egiten dugu, arau horiek betetzen laguntzeko. Zu ados zaude foru honetako webmaster, administratzaile edo moderatzaileak eskubidea dutela edozein gai ezabatu, editatu, itxi edo mugitzeko edozein unetan beharrezkotzat jotzen badute. Erabiltzaile bezala zuk onartzen duzu zuk eskaintzen duzun informazio guztia data base batean sartzea. Informazio hau ez zaio inorri emango zure baimenik gabe, baino webmaster, administratzaile edo moderatzaileak ez dira arduradun egiten hacker batek informazio hau lortzeaz. .<br /><br /> foru sistema honek cookieak erabiltzen ditu zure ordenagailuan informazioa gordetzeko. Cookie hauek ez dute zuk eskainitako informazioa gordetzen, foruak hobeto ikusteko soilik erabiltzen dira. Emaila zure izenpetze detaileak eta pasahitza baieztatzeko soilik ibiltzen da( eta pasahitz berriak bidaltzeko egungoa ahazten bazaizu). Zuk, .<br /><br /> izenpetzean baldintza guzti hauek onartuko dituzu.";

$lang['Agree_under_13'] = "Baldintza hauek onartzen ditut eta 13 urte baino <b>txikiagoa</b> naiz";
$lang['Agree_over_13'] = "Baldintza hauek onartzen ditut eta 13 urte baino <b>nagusiagoa</b> naiz edo <b>zehazki</b> 13 urte ditut";
$lang['Agree_not'] = "Ez ditut baldintzak onartzen";

$lang['Wrong_activation'] = "Aktibazio kodeak ez da data basekoen berdina";
$lang['Send_password'] = "Pasahitz berria bidalidazue"; 
$lang['Password_updated'] = "Pasahitz berria sortu da eta mesedez begiratu emaila indarrean jartzeko azalpenak aurkitzeko";
$lang['No_email_match'] = "Emandako emaila erabiltzaile izen horri ez dagokio";
$lang['New_password_activation'] = "Pasahitz berriaren indartzea";
$lang['Password_activated'] = "Zure kontua berrindartua izan da. Jaso duzun emailean eskainitako pasahitza erabili bertara sartzeko";

$lang['Send_email_msg'] = "Email bat bidali";
$lang['No_user_specified'] = "Ez da erabiltzailerik adierazi";
$lang['User_prevent_email'] = "Erabiltzaile honek ez du emailik jaso nahi. Mezu pribatu bat bidaltzen saiatu";
$lang['User_not_exist'] = "Erabiltzaile horrek ez du existitzen";
$lang['CC_email'] = "Mezu honen kopia bat zeure buruari bidali";
$lang['Email_message_desc'] = "Mezu hau testu bakun bezala bidaliko da eta HTML eta BBCodeak edukiko ditu.Mezu honi erantzuteko zuzenbidea zure emaila izango da";
$lang['Flood_email_limit'] = "Ezin duzu momentu honetan emailik bidali, saiatu beranduago";
$lang['Recipient'] = "Hartzailea";
$lang['Email_sent'] = "Emaila bidali da";
$lang['Send_email'] = "Emaila bidali";
$lang['Empty_subject_email'] = "Emaila bidaltzeko gaia azaldu behar duzu";
$lang['Empty_message_email'] = "Mezuren bat behar duzu emaila bidaltzeko";


//
// Memberslist
//
$lang['Select_sort_method'] = "Zeragaitik ordenatu";
$lang['Sort'] = "Ordenatu";
$lang['Sort_Top_Ten'] = "Gehien idazten duten 10 egileak";
$lang['Sort_Joined'] = "Izenpetze data";
$lang['Sort_Username'] = "Erabiltzaile izena";
$lang['Sort_Location'] = "Kokapena";
$lang['Sort_Posts'] = "Mezu kopurua";
$lang['Sort_Email'] = "Emaila";
$lang['Sort_Website'] = "Weba";
$lang['Sort_Ascending'] = "Gorakorra";
$lang['Sort_Descending'] = "Beherakorra";
$lang['Order'] = "Orden";


//
// Group control panel
//
$lang['Group_Control_Panel'] = "Taldearen kontrol panela";
$lang['Group_member_details'] = "Talde kide izatearen xehetasunak";
$lang['Group_member_join'] = "Taldera batu";

$lang['Group_Information'] = "Talde informazioa";
$lang['Group_name'] = "Talde izena";
$lang['Group_description'] = "Taldearen deskribapena";
$lang['Group_membership'] = "Taldekidetza";
$lang['Group_Members'] = "talde kideak";
$lang['Group_Moderator'] = "Talde moderatzaileak";
$lang['Pending_members'] = "Kolokan dauden kideak";

$lang['Group_type'] = "Talde mota";
$lang['Group_open'] = "Talde irekia";
$lang['Group_closed'] = "Talde itxia";
$lang['Group_hidden'] = "Talde ezkutua";

$lang['Current_memberships'] = "Egungo kideak";
$lang['Non_member_groups'] = "Kide ez den taldeak";
$lang['Memberships_pending'] = "Kolokan dauden kideak";

$lang['No_groups_exist'] = "Ez dira taldeak existitzen";
$lang['Group_not_exist'] = "Talde horrek ez du existitzen";

$lang['Join_group'] = "Taldera batu";
$lang['No_group_members'] = "Talde horrek kiderik ez du";
$lang['Group_hidden_members'] = "Talde hori ezkutuan dago eta bere kideak ezin dira ezagutu";
$lang['No_pending_group_members'] = "Talde horrek ez du kolokan dagoen kiderik";
$lang["Group_joined"] = "<br /> Talde arrakastatsuan izenpetzea,taldeko moderatzaileak zure eskaera onartzean ohartarazia izango zara";
$lang['Group_request'] = "Taldera batzeko eskaera bat egin da";
$lang['Group_approved'] = "Zure eskaria onartua izan da";
$lang['Group_added'] = "Zu talde honetara batu zara"; 
$lang['Already_member_group'] = "Zu talde honetako kide zara";
$lang['User_is_member_group'] = "Erabiltzailea talde honetako kide da";
$lang['Group_type_updated'] = "Talde mota arrakastatsuki eguneratua";

$lang['Could_not_add_user'] = "Aukeratutako erabiltzaileak ez du existitzen";
$lang['Could_not_anon_user'] = "Ezin duzu anonimo talde honen kide egin";

$lang['Confirm_unsub'] = "Zihur al zaude talde honetara izenpetzea ezeztatu nahi duzula?";
$lang['Confirm_unsub_pending'] = "Talde honetan zure izenpetzea oraindik ez da onartua izan. Zihur al zaude talde honetara izenpetzea ezeztatu nahi duzula?";

$lang['Unsub_success'] = "Talde honetara zure izenpetzea ezeztatua izan da.";

$lang['Approve_selected'] = "Aukeratuak onartu";
$lang['Deny_selected'] = "Aukeratuak baztertu";
$lang['Not_logged_in'] = "Forura sartu behar duzu talde batera batzeko.";
$lang['Remove_selected'] = "Aukeratuak ezabatu";
$lang['Add_member'] = "Kidea gehitu";
$lang['Not_group_moderator'] = "Zu ez zara talde honetan moderatzaile beraz ezin duzu hori egin.";

$lang['Login_to_join'] = "Sartu talde batera kideak administratzeko edo beraiekin batzeko besterik gabe";
$lang['This_open_group'] = "Hau talde irekia da klik egin kidetza eskatzeko";
$lang['This_closed_group'] = "Hau talde itxia da erabiltzaile gehiago ez da onartzen";
$lang['This_hidden_group'] = "Hau talde ezkutua da eta ez da erabiltzaile batze automatikorik onartzen";
$lang['Member_this_group'] = "Zu talde honen kide zara";
$lang['Pending_this_group'] = "Zu talde honetan kide izatea kolokan dago";
$lang['Are_group_moderator'] = "Zu taldeko moderatzailea zara";
$lang['None'] = "Inorrez";

$lang['Subscribe'] = "Harpidetu";
$lang['Unsubscribe'] = "Harpidetza ezeztatu";
$lang['View_Information'] = "Informazioa ikusi";


//
// Search
//
$lang['Search_query'] = "Bilaketa kontsulta";
$lang['Search_options'] = "Bilaketa aukerak";

$lang['Search_keywords'] = "Giltzarri diren hitzezko bilaketa";
$lang['Search_keywords_explain'] = "Emaitzan aurkitu beharreko hitzak definitzeko <u>AND</u> erabili dezakezu, emaitzan aurkitu daitezken hitzak definitzeko <u>OR</u> eta emaitzan aurkitu ezin diren hitzak definitzeko <u>NOT</u>. * erabili dezakezu komodintzat bilaketa partzialetan";
$lang['Search_author'] = "Egileagatik bilatu";
$lang['Search_author_explain'] = "* erabili bilaketa partzialentzat komodin bezala";

$lang['Search_for_any'] = "Bilatu edozein hitz edo kontsulta erabili idatzita bezala";
$lang['Search_for_all'] = "Bilatu hitz denak";
$lang['Search_title_msg'] = "Izenburu eta mezu testuetan bilatu";
$lang['Search_msg_only'] = "Mezuaren testuan soilik bilatu";

$lang['Return_first'] = "Lehenengoak erakutsi"; // seguido por xxx caracteres en cuadro de texto
$lang['characters_posts'] = "Mezuen karaktereak";

$lang['Search_previous'] = "Aurrekoetan bilatu"; // seguido por dias, semanas, meses, años, en una lista desplegable

$lang['Sort_by'] = "Ordenatu";
$lang['Sort_Time'] = "Argitarapen data";
$lang['Sort_Post_Subject'] = "Mezuaren gaia";
$lang['Sort_Topic_Title'] = "Gaiaren izenburua";
$lang['Sort_Author'] = "Egilea";
$lang['Sort_Forum'] = "Foru";

$lang['Display_results'] = "Emaitzak erakutsi zera bezala";
$lang['All_available'] = "Erabilgarri guztiak";
$lang['No_searchable_forums'] = "Web honen foruetan barrena bilatzeko eskubiderik ez duzu";

$lang['No_search_match'] = "Ez dago gai edo mezurik zure bilaketa erizpideekin bat datorrenik";
$lang['Found_search_match'] = "%d emaitza aurkitu dira"; // eg. Se encontró 1 coincidencia
$lang['Found_search_matches'] = "%d emaitza aurkitu dira"; // eg. Se encontraron 24 coincidencias

$lang['Close_window'] = "Lehioa itxi";


//
// Entraes relacionaes con autorizaciones
//
// Los %s will serán reemplazados con uno de los siguientes arrays
$lang['Sorry_auth_announce'] = "Foru honetan %sk bakarrik argitaratu ditzazkete iragarkiak";
$lang['Sorry_auth_sticky'] = "Foru honetan %sk bakarrik argitaratu ditzazkete Postitak"; 
$lang['Sorry_auth_read'] = "Foru honetan %sk bakarrik irakurri ditzazkete gaiak"; 
$lang['Sorry_auth_post'] = "Foru honetan %sk bakarrik argitaratu ditzazkete gaiak"; 
$lang['Sorry_auth_reply'] = "Foru honetan %sk bakarrik erantzun ditzazkete mezuak"; 
$lang['Sorry_auth_edit'] = "Foru honetan %sk bakarrik editatu ditzazkete mezuak"; 
$lang['Sorry_auth_delete'] = "Foru honetan %sk bakarrik ezabatu ditzazkete mezuak"; 
$lang['Sorry_auth_vote'] = "Foru honetan %sk bakarrik bozkatu ditzazkete inkestak"; 

// Estos remplazan los %s en las cadenas de arriba
$lang['Auth_Anonymous_Users'] = "<b>erabiltzaile ezezagun</b>";
$lang['Auth_Registered_Users'] = "<b>erabiltzaile izenpetu</b>";
$lang['Auth_Users_granted_access'] = "<b>erabiltzaile sarrera bereziekin</b>";
$lang['Auth_Moderators'] = "<b>moderatzaile</b>";
$lang['Auth_Administrators'] = "<b>administratzaile</b>";

$lang['Not_Moderator'] = "Zu ez zara foru honen moderatzailea";
$lang['Not_Authorised'] = "Ez baimendua";

$lang['You_been_banned'] = "<br /> foru honetara sarrera mugatua duzu.Webmaster edo administratzailea kontaktatu informazio gehiagorako";


//
// Viewonline
//
$lang['Reg_users_zero_online'] = "0 erabiltzaile izenpetu daude"; // There ae 5 Registered and
$lang['Reg_users_online'] = "%d erabiltzaile izenpetu daude"; // Hay 5 usuarios registrados y
$lang['Reg_user_online'] = "%d erabiltzaile izenpetu daude"; // Hay 1 usuario registrado y
$lang['Hidden_users_zero_online'] = "0 erabiltzaile online ezkutuan"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d erabiltzaile online ezkutuan"; // 6 usuarios ocultos online
$lang['Hidden_user_online'] = "%d erabiltzaile online ezkutuan"; // 1 usuario oculto online
$lang['Guest_users_online'] = "%d gonbidatu online daude"; // Hay 10 usuarios invitados online
$lang['Guest_users_zero_online'] = "0 gonbidatu online daude"; // There are 10 Guest users online
$lang['Guest_user_online'] = "%d gonbidatu online daude"; // Hay 1 usuario invitado online
$lang['No_users_browsing'] = "Ez dago erabiltzailerik foru hau esploratzen";

$lang['Online_explain'] = "Azken 5 minututan jardunean dirauten erabiltzailetan oinarrituriko datuak";

$lang['Forum_Location'] = "Foroaren kokapena";
$lang['Last_updated'] = "Azken eguneratzea";

$lang['Forum_index'] = "Foroaren aurkibidea";
$lang['Logging_on'] = "Sartzen";
$lang['Posting_message'] = "Mezua argitaratzen";
$lang['Searching_forums'] = "Foruak bilatzen";
$lang['Viewing_profile'] = "Profila ikusten";
$lang['Viewing_online'] = "Online zein dagoen ikusiaz";
$lang['Viewing_member_list'] = "Kideen zerrenda ikusiaz";
$lang['Viewing_priv_msgs'] = "Mezu pribatuak ikusiaz";
$lang['Viewing_FAQ'] = "FAQ ikusiaz";


//
// Moderator Control Panel
//
$lang['Mod_CP'] = "Moderatzailearen kontrol panela";
$lang['Mod_CP_explain'] = "Beheko formularioa erabiliz moderadore eragiketa masiboak egin ditzazkezu foro honetan. Edozein gai kopuru blokeatu, desblokeatu mugitu edo ezabatu dezakezu.";

$lang['Select'] = "Aukeratu";
$lang['Delete'] = "Ezabatu";
$lang['Move'] = "Mugitu";
$lang['Lock'] = "Itxi";
$lang['Unlock'] = "Ezblokeatu";

$lang['Topics_Removed'] = "Aukeratutako gaiak data basetik arrakastatzuki baztertuak izan dira.";
$lang['Topics_Locked'] = "Aukeratutako gaiak itxiak izan dira.";
$lang['Topics_Moved'] = "Aukeratutako gaiak mugitu egin dira";
$lang['Topics_Unlocked'] = "Aukeratutako gaiak ezblokeatuak izan dira";
$lang['No_Topics_Moved'] = "Ez da gairik mugitu";

$lang['Confirm_delete_topic'] = "Zihur al zaude aukeraturiko gaiak ezabatu nahi dituzula?";
$lang['Confirm_lock_topic'] = "Zihur al zaude aukeraturiko gaiak itxi nahi dituzula?";
$lang['Confirm_unlock_topic'] = "Zihur al zaude aukeraturiko gaiak ezblokeatu nahi dituzula?";
$lang['Confirm_move_topic'] = "Zihur al zaude aukeraturiko gaiak mugitu nahi dituzula?";

$lang['Move_to_forum'] = "Forora mugitu";
$lang['Leave_shadow_topic'] = "Lenoko foroan gaia azpimarratua utzi.";

$lang['Split_Topic'] = "Gai banaketarako kontrol panela";
$lang['Split_Topic_explain'] = "Ondorengo formularioa erabiliaz gai bat bietan banatu dezakezu, mezu jakin batean zatituaz edo mezuak bakarka aukeratuaz";
$lang['Split_title'] = "Gai berriaren izenburua";
$lang['Split_forum'] = "Gai berriarentzat foroa";
$lang['Split_posts'] = "Aukeratutako mezuak zatitu";
$lang['Split_after'] = "Aukeratutako mezutik zatitu";
$lang['Topic_split'] = "Aukeratutako mezua arrakastarekin zatitua izan da";

$lang['Too_many_error'] = "Mezu asko aukeratu dituzu.Mezu bakarra aukeratu dezakezu bertatik gai bat zatitzeko.";

$lang['None_selected'] = "Ez duzu gairik aukeratu ariketa honetako.Mesedez itzuli eta bat gutxienez aukeratu.";
$lang['New_forum'] = "Foro berria";

$lang['This_posts_IP'] = "Mezu honentzat IPa";
$lang['Other_IP_this_user'] = "Beste IP batzuk nondik erabiltzaile honek mezuak argitaratu dituen";
$lang['Users_this_IP'] = "IP honetatik argitaratzen ari diren erabiltzaileak";
$lang['IP_info'] = "IP informazioa";
$lang['Lookup_IP'] = "IPagatik bilatu";


//
// Zonas horarias ... para mostrar en cada página
//
$lang['All_times'] = "Ordua %s ordutegian dago"; // ej. Todas las horas son GMT - 12 Horas 

// Estos se muestran en la lista desplegable de zona horaria
$lang['-12'] = 'GMT - 12 Ordu'; 
$lang['-11'] = 'GMT - 11 Ordu'; 
$lang['-10'] = 'GMT - 10 Ordu'; 
$lang['-9'] = 'GMT - 9 Ordu'; 
$lang['-8'] = 'GMT - 8 Ordu'; 
$lang['-7'] = 'GMT - 7 Ordu'; 
$lang['-6'] = 'GMT - 6 Ordu'; 
$lang['-5'] = 'GMT - 5 Ordu'; 
$lang['-4'] = 'GMT - 4 Ordu'; 
$lang['-3.5'] = 'GMT - 3.5 Ordu'; 
$lang['-3'] = 'GMT - 3 Ordu'; 
$lang['-2'] = 'GMT - 2 Ordu'; 
$lang['-1'] = 'GMT - 1 Ordu'; 
$lang['0'] = 'GMT'; 
$lang['1'] = 'GMT + 1 Ordu'; 
$lang['2'] = 'GMT + 2 Ordu'; 
$lang['3'] = 'GMT + 3 Ordu'; 
$lang['3.5'] = 'GMT + 3.5 Ordu'; 
$lang['4'] = 'GMT + 4 Ordu'; 
$lang['4.5'] = 'GMT + 4.5 Ordu'; 
$lang['5'] = 'GMT + 5 Ordu'; 
$lang['5.5'] = 'GMT + 5.5 Ordu'; 
$lang['6'] = 'GMT + 6 Ordu'; 
$lang['6.5'] = 'GMT + 6.5 Ordu'; 
$lang['7'] = 'GMT + 7 Ordu'; 
$lang['8'] = 'GMT + 8 Ordu'; 
$lang['9'] = 'GMT + 9 Ordu'; 
$lang['9.5'] = 'GMT + 9.5 Ordu'; 
$lang['10'] = 'GMT + 10 Ordu'; 
$lang['11'] = 'GMT + 11 Ordu'; 
$lang['12'] = 'GMT + 12 Ordu'; 

// These are displayed in the timezone select box 
$lang['tz']['-12'] = 'GMT - 12 Ordu'; 
$lang['tz']['-11'] = 'GMT - 11 Ordu'; 
$lang['tz']['-10'] = 'GMT - 10 Ordu'; 
$lang['tz']['-9'] = 'GMT - 9 Ordu'; 
$lang['tz']['-8'] = 'GMT - 8 Ordu'; 
$lang['tz']['-7'] = 'GMT - 7 Ordu'; 
$lang['tz']['-6'] = 'GMT - 6 Ordu'; 
$lang['tz']['-5'] = 'GMT - 5 Ordu'; 
$lang['tz']['-4'] = 'GMT - 4 Ordu'; 
$lang['tz']['-3.5'] = 'GMT - 3.5 Ordu'; 
$lang['tz']['-3'] = 'GMT - 3 Ordu'; 
$lang['tz']['-2'] = 'GMT - 2 Ordu'; 
$lang['tz']['-1'] = 'GMT - 1 Ordu'; 
$lang['tz']['0'] = 'GMT'; 
$lang['tz']['1'] = 'GMT +  Ordu 1'; 
$lang['tz']['2'] = 'GMT + 2 Ordu'; 
$lang['tz']['3'] = 'GMT + 3 Ordu'; 
$lang['tz']['3.5'] = 'GMT + 3.5 Ordu'; 
$lang['tz']['4'] = 'GMT + 4 Ordu'; 
$lang['tz']['4.5'] = 'GMT + 4.5 Ordu'; 
$lang['tz']['5'] = 'GMT + 5 Ordu'; 
$lang['tz']['5.5'] = 'GMT + 5.5 Ordu'; 
$lang['tz']['6'] = 'GMT + 6 Ordu'; 
$lang['tz']['6.5'] = 'GMT + 6.5 Ordu'; 
$lang['tz']['7'] = 'GMT + 7 Ordu'; 
$lang['tz']['8'] = 'GMT + 8 Ordu'; 
$lang['tz']['9'] = 'GMT + 9 Ordu'; 
$lang['tz']['9.5'] = 'GMT + 9.5 Ordu'; 
$lang['tz']['10'] = 'GMT + 10 Ordu'; 
$lang['tz']['11'] = 'GMT + 11 Ordu'; 
$lang['tz']['12'] = 'GMT + 12 Ordu'; 

$lang['datetime']['Sunday'] = "Igandea";
$lang['datetime']['Monday'] = "Astelehena";
$lang['datetime']['Tuesday'] = "Asteartea";
$lang['datetime']['Wednesday'] = "Asteazkena";
$lang['datetime']['Thursday'] = "Osteguna";
$lang['datetime']['Friday'] = "Ostirala";
$lang['datetime']['Saturday'] = "Larunbata";
$lang['datetime']['Sun'] = "Iga";
$lang['datetime']['Mon'] = "Atl";
$lang['datetime']['Tue'] = "Atr";
$lang['datetime']['Wed'] = "Atk";
$lang['datetime']['Thu'] = "Osg";
$lang['datetime']['Fri'] = "Ost";
$lang['datetime']['Sat'] = "Lar";
$lang['datetime']['January'] = "Urtarrila";
$lang['datetime']['February'] = "otsaila";
$lang['datetime']['March'] = "Martxoa";
$lang['datetime']['April'] = "Apirila";
$lang['datetime']['May'] = "Maiatza";
$lang['datetime']['June'] = "Ekaina";
$lang['datetime']['July'] = "Uztaila";
$lang['datetime']['August'] = "Abuztua";
$lang['datetime']['September'] = "Iraila";
$lang['datetime']['October'] = "Urria";
$lang['datetime']['November'] = "Azaroa";
$lang['datetime']['December'] = "Abendua";
$lang['datetime']['Jan'] = "Urt";
$lang['datetime']['Feb'] = "Ots";
$lang['datetime']['Mar'] = "Mar";
$lang['datetime']['Apr'] = "Apr";
$lang['datetime']['May'] = "Mai";
$lang['datetime']['Jun'] = "Eka";
$lang['datetime']['Jul'] = "Uzt";
$lang['datetime']['Aug'] = "Abu";
$lang['datetime']['Sep'] = "Ira";
$lang['datetime']['Oct'] = "Urr";
$lang['datetime']['Nov'] = "Aza";
$lang['datetime']['Dec'] = "Abe";

//
// Errores (no relacionados con una falla específica en 
// una página)
//
$lang['Information'] = "Informazioa";
$lang['Critical_Information'] = "Informazio kritikoa";

$lang['General_Error'] = "Akats orokorra";
$lang['Critical_Error'] = "Akats kritikoa";
$lang['An_error_occured'] = "Akatsa gertatu da";
$lang['A_critical_error'] = "Akats kritikoa gertatu da";

$lang['Admin_reauthenticate'] = 'To administer the board you must re-authenticate yourself.';
$lang['Login_attempts_exceeded'] = 'The maximum number of %s login attempts has been exceeded. You are not allowed to login for the next %s minutes.';
$lang['Please_remove_install_contrib'] = 'Please ensure both the install/ and contrib/ directories are deleted';

$lang['Session_invalid'] = 'Invalid Session. Please resubmit the form.';

//
// language buttons
//
$lang['button_pm_new'] = 'New<span class="bld">PM</span>';
$lang['button_pm_reply'] = 'Send<span class="bld">Reply</span>';
$lang['button_topic_locked'] = '<span class="bld">Locked</span>';
$lang['button_topic_new'] = 'New<span class="bld">Topic</span>';
$lang['button_topic_reply'] = 'Post<span class="bld">Reply</span>';
$lang['icon_post_edit'] = '<span class="sml bld">Edit</span>';
$lang['icon_post_quote'] = '<span class="sml bld">Quote</span>';


//
// ¡Y POR FIN FINAMOOOOOOSSSSSSS!
// -------------------------------------------------

?>