<?php
/***************************************************************************
 *                            lang_main.php [Magyar]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
 *
 *     translated by        : Szilard Andai
 *     email                : iranon@send.hu
 *     version              : 2.0.6
 *
/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// CONTRIBUTORS:
//         Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'utf-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'Y.m.d., l, G:i'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = 'Magyar fordítás &copy; 2003. <a class="copyright" href="mailto:iranon@send.hu">Andai Szilárd</a>';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Fórum';
$lang['Category'] = 'Témakör';
$lang['Topic'] = 'Téma';
$lang['Topics'] = 'Témák';
$lang['Replies'] = 'Válaszok';
$lang['Views'] = 'Megtekintve';
$lang['Post'] = 'Hozzászólás';
$lang['Posts'] = 'Hozzászólások';
$lang['Posted'] = 'Elküldve';
$lang['Username'] = 'Felhasználónév';
$lang['Password'] = 'Jelszó';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Küldõ';
$lang['Author'] = 'Szerzõ';
$lang['Time'] = 'Idõ';
$lang['Hours'] = 'Óra';
$lang['Message'] = 'Üzenet';

$lang['1_Day'] = '1 nap';
$lang['7_Days'] = '7 nap';
$lang['2_Weeks'] = '2 hét';
$lang['1_Month'] = '1 hónap';
$lang['3_Months'] = '3 hónap';
$lang['6_Months'] = '6 hónap';
$lang['1_Year'] = '1 év';

$lang['Go'] = 'Mehet';
$lang['Jump_to'] = 'Ugrás';
$lang['Submit'] = 'Elküld';
$lang['Reset'] = 'Töröl';
$lang['Cancel'] = 'Mégsem';
$lang['Preview'] = 'Elõnézet';
$lang['Confirm'] = 'Elfogad';
$lang['Spellcheck'] = 'Helyesírás';
$lang['Yes'] = 'Igen';
$lang['No'] = 'Nem';
$lang['Enabled'] = 'Bekapcsolva';
$lang['Disabled'] = 'Kikapcsolva';
$lang['Error'] = 'Hiba';

$lang['Next'] = 'Következõ';
$lang['Previous'] = 'Elõzõ';
$lang['Goto_page'] = 'Ugrás az oldalra';
$lang['Joined'] = 'Csatlakozott';
$lang['IP_Address'] = 'IP-cím';

$lang['Select_forum'] = 'Fórum kiválasztása';
$lang['View_latest_post'] = 'Legutóbbi hozzászólások';
$lang['View_newest_post'] = 'Legújabb hozzászólások';
$lang['Page_of'] = '<b>%d</b> / <b>%d</b> oldal'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ';
$lang['AIM'] = 'AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = 'Tartalomjegyzék';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Új téma nyitása';
$lang['Reply_to_topic'] = 'Hozzászólás a témához';
$lang['Reply_with_quote'] = 'Hozzászólás, az elõzmény idézésével';

$lang['Click_return_topic'] = '%sVisszatérés%s a témához'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Kattints %side%s, hogy újrapróbáld';
$lang['Click_return_forum'] = 'Kattints %side%s, hogy visszatérj a fórumba';
$lang['Click_view_message'] = 'Kattints %side%s, a hozzászólásod megtekintéséhez';
$lang['Click_return_modcp'] = '%sVisszatérés%s a Moderátor vezérlõpulthoz';
$lang['Click_return_group'] = '%sVisszatérés%s a Csoporthoz';

$lang['Admin_panel'] = 'Fórum adminisztráció';

$lang['Board_disable'] = 'A fórum ideiglenesen szünetel, kérlek próbáld késõbb.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Regisztrált felhasználók:';
$lang['Browsing_forum'] = 'Jelenlévõ fórumozó(k):';
$lang['Online_users_zero_total'] = 'Jelenleg összesen <b>0</b> felhasználó van jelen :: ';
$lang['Online_users_total'] = 'Jelenleg összesen <b>%d</b> felhasználó van jelen :: ';
$lang['Online_user_total'] = 'Jelenleg összesen <b>%d</b> felhasználó van jelen :: ';
$lang['Reg_users_zero_total'] = '0 Regisztrált, ';
$lang['Reg_users_total'] = '%d Regisztrált, ';
$lang['Reg_user_total'] = '%d Regisztrált, ';
$lang['Hidden_users_zero_total'] = '0 Rejtett és ';
$lang['Hidden_user_total'] = '%d Rejtett és ';
$lang['Hidden_users_total'] = '%d Rejtett és ';
$lang['Guest_users_zero_total'] = '0 Vendég';
$lang['Guest_users_total'] = '%d Vendég';
$lang['Guest_user_total'] = '%d Vendég';
$lang['Record_online_users'] = 'A legtöbb felhasználó (<b>%s</b> fõ) %s (-én/án) volt itt.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdminisztrátor%s';
$lang['Mod_online_color'] = '%sModerátor%s';

$lang['You_last_visit'] = 'Legutolsó látogatásod dátuma: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Pontos idõ: %s'; // %s replaced by time

$lang['Search_new'] = 'Hozzászólások a legutolsó látogatás óta';
$lang['Search_your_posts'] = 'Üzeneteid megtekintése';
$lang['Search_unanswered'] = 'Megválaszolatlan üzenetek megtekintése';

$lang['Register'] = 'Regisztráció';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Profil szerkesztése';
$lang['Search'] = 'Keresés';
$lang['Memberlist'] = 'Taglista';
$lang['FAQ'] = 'Gy.I.K.';
$lang['BBCode_guide'] = 'BBCode Kalauz';
$lang['Usergroups'] = 'Csoportok';
$lang['Last_Post'] = 'Legutolsó üzenet';
$lang['Moderator'] = 'Moderátor';
$lang['Moderators'] = 'Moderátorok';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Eddig összesen <b>0</b> hozzászólás íródott'; // Number of posts
$lang['Posted_articles_total'] = 'Eddig összesen <b>%d</b> hozzászólás íródott'; // Number of posts
$lang['Posted_article_total'] = 'Eddig összesen <b>%d</b> hozzászólás íródott'; // Number of posts
$lang['Registered_users_zero_total'] = 'Összesen <b>0</b> regisztrált felhasználónk van'; // # registered users
$lang['Registered_users_total'] = 'Összesen <b>%d</b> regisztrált felhasználónk van'; // # registered users
$lang['Registered_user_total'] = 'Összesen <b>%d</b> regisztrált felhasználónk van'; // # registered users
$lang['Newest_user'] = 'Legújabb regisztrált tagunk <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Nincsen új hozzászólás a legutolsó látogatásod óta';
$lang['No_new_posts'] = 'Nincsenek új hozzászólások';
$lang['New_posts'] = 'Új hozzászólások';
$lang['New_post'] = 'Új hozzászólás';
$lang['No_new_posts_hot'] = 'Nincsenek új hozzászólások [ Népszerû ]';
$lang['New_posts_hot'] = 'Új hozzászólások [ Népszerû ]';
$lang['No_new_posts_locked'] = 'Nincsenek új hozzászólások [ Zárt ]';
$lang['New_posts_locked'] = 'Új hozzászólások [ Zárt ]';
$lang['Forum_is_locked'] = 'Lezárt fórum';


//
// Login
//
$lang['Enter_password'] = 'A belépéshez add meg a felhasználóneved és jelszavad.';
$lang['Login'] = 'Belépés';
$lang['Logout'] = 'Kilépés';

$lang['Forgotten_password'] = 'Elfelejtettem a jelszót!';

$lang['Log_me_in'] = 'Automatikus bejelentkezés';

$lang['Error_login'] = 'Hibás, vagy inaktív nevet, esetleg hibás jelszót adtál meg.';


//
// Index page
//
$lang['Index'] = 'Index';
$lang['No_Posts'] = 'Nincs hozzászólás';
$lang['No_forums'] = 'Nincsenek fórumok';

$lang['Private_Message'] = 'Privát Üzenet';
$lang['Private_Messages'] = 'Privát Üzenetek';
$lang['Who_is_Online'] = 'Ki van itt?';

$lang['Mark_all_forums'] = 'Összes fórum megjelölése olvasottként';
$lang['Forums_marked_read'] = 'Összes fórum megjelölve olvasottként';


//
// Viewforum
//
$lang['View_forum'] = 'Fórum megtekintése';

$lang['Forum_not_exist'] = 'A kiválsztott fórum nem létezik.';
$lang['Reached_on_error'] = 'Hiba.';

$lang['Display_topics'] = 'Összes téma mutatása';
$lang['All_Topics'] = 'Összes téma';

$lang['Topic_Announcement'] = '<b>Közlemény:</b>';
$lang['Topic_Sticky'] = '<b>Kiemelt:</b>';
$lang['Topic_Moved'] = '<b>Áthelyzett:</b>';
$lang['Topic_Poll'] = '<b>[ Szavazás ]</b>';

$lang['Mark_all_topics'] = 'Összes téma megjelölése olvasottként';
$lang['Topics_marked_read'] = 'Összes téma megjelölve olvasottként';

$lang['Rules_post_can'] = '<b>Készíthetsz</b> új témákat ebben a fórumban';
$lang['Rules_post_cannot'] = '<b>Nem</b> készíthetsz új témákat ebben a fórumban';
$lang['Rules_reply_can'] = '<b>Válaszolhatsz</b> egy témára ebben a fórumban';
$lang['Rules_reply_cannot'] = '<b>Nem</b> válaszolhatsz egy témára ebben a fórumban';
$lang['Rules_edit_can'] = '<b>Módosíthatod</b> a hozzászólásaidat a fórumban';
$lang['Rules_edit_cannot'] = '<b>Nem</b> módosíthatod a hozzászólásaidat a fórumban';
$lang['Rules_delete_can'] = '<b>Törölheted</b> a hozzászólásaidat a fórumban';
$lang['Rules_delete_cannot'] = '<b>Nem</b> törölheted a hozzászólásaidat a fórumban';
$lang['Rules_vote_can'] = '<b>Szavazhatsz</b> ebben a fórumban';
$lang['Rules_vote_cannot'] = '<b>Nem</b> szavazhatsz ebben fórumban';
$lang['Rules_moderate'] = '<b>%sModerálhatod%s</b> ezt a fórumot'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Nincsenek témák a fórumban<br />Kattints az <b>Új Téma készítésére</b>.';


//
// Viewtopic
//
$lang['View_topic'] = 'Téma megtekintése';

$lang['Guest'] = 'Vendég';
$lang['Post_subject'] = 'Hozzászólás témája';
$lang['View_next_topic'] = 'Következõ téma megtekintése';
$lang['View_previous_topic'] = 'Elõzõ téma megtekintése';
$lang['Submit_vote'] = 'Szavazás küldése';
$lang['View_results'] = 'Eredmény megtekintése';

$lang['No_newer_topics'] = 'Nincsenek újabb témák a fórumban';
$lang['No_older_topics'] = 'Nincsenek régbbi témák a fórumban';
$lang['Topic_post_not_exist'] = 'A téma vagy hozzászólás nem létezik';
$lang['No_posts_topic'] = 'Nincs hozzászólás a témában';

$lang['Display_posts'] = 'Hozzászólások megtekintése elölrõl';
$lang['All_Posts'] = 'Összes hozzászólás';
$lang['Newest_First'] = 'Újak elõre';
$lang['Oldest_First'] = 'Régebbiek elõre';

$lang['Back_to_top'] = 'Vissza az elejére';

$lang['Read_profile'] = 'Felhasználó profiljának megtekintése';
$lang['Send_email'] = 'Email küldése a felhasználónak';
$lang['Visit_website'] = 'Felhasználó weblapjának megtekintése';
$lang['ICQ_status'] = 'ICQ Státusz';
$lang['Edit_delete_post'] = 'Hozzászólás szerkesztése/törlése';
$lang['View_IP'] = 'Felhasználó IP-címe';
$lang['Delete_post'] = 'Hozzászólás törlése';

$lang['wrote'] = 'írta'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Idézet'; // comes before bbcode quote output.
$lang['Code'] = 'Kód'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Legutóbb %s szerkesztette (%s), összesen %d alkalommal'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Legutóbb %s szerkesztette (%s), összesen %d alkalommal'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Téma lezárása';
$lang['Unlock_topic'] = 'Téma megnyitása';
$lang['Move_topic'] = 'Téma áthelyezése';
$lang['Delete_topic'] = 'Téma törlése';
$lang['Split_topic'] = 'Téma szétválasztása';

$lang['Stop_watching_topic'] = 'Téma-figyelés megszüntetése';
$lang['Start_watching_topic'] = 'Válaszok figyelése a témában';
$lang['No_longer_watching'] = 'Téma figyelése megszüntetve';
$lang['You_are_watching'] = 'Jelenleg figyeled a témát';

$lang['Total_votes'] = 'Összes szavazat';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Üzenet tartalma';
$lang['Topic_review'] = 'Téma elõnézete';

$lang['No_post_mode'] = 'Nincs hozzászólás-típus kiválasztva'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Új téma küldése';
$lang['Post_a_reply'] = 'Új válasz küldése';
$lang['Post_topic_as'] = 'Téma küldése mint';
$lang['Edit_Post'] = 'Hozzászólás szerkesztése';
$lang['Options'] = 'Beállítások';

$lang['Post_Announcement'] = 'Közlemény';
$lang['Post_Sticky'] = 'Kiemelt';
$lang['Post_Normal'] = 'Sima';

$lang['Confirm_delete'] = 'Biztosan törölni akarod a hozzászólást?';
$lang['Confirm_delete_poll'] = 'Biztosan törölni akarod a szavazást?';

$lang['Flood_Error'] = 'Nem küldhetsz rövid idõn belül több hozzászólást, várj egy kicsit.';
$lang['Empty_subject'] = 'Új téma indításáná meg kell határoznod a címet.';
$lang['Empty_message'] = 'Nem küldhetsz üres hozzászólást.';
$lang['Forum_locked'] = 'Zárt fórum; nem küldhetsz hozzászólást, választ, nem szerkesztheted a témákat.';
$lang['Topic_locked'] = 'Zárt téma; nem szerkesztheted a hozzászólásokat, vagy nem készíthetsz választ.';
$lang['No_post_id'] = 'A szerkesztéshez válassz ki egy hozzászólást';
$lang['No_topic_id'] = 'Válaszüzenet küldéséhez válassz ki egy topicot';
$lang['No_valid_mode'] = 'Csak küldhetsz, szerkeszthetsz, vagy idézhetsz hozzászólást, választ. Lépj vissza, és próbáld újra.';
$lang['No_such_post'] = 'Nincsen ilyen hozzászólás. Lépj vissza, és próbáld újra.';
$lang['Edit_own_posts'] = 'Csak szerkesztheted a hozzászólásaidat.';
$lang['Delete_own_posts'] = 'Csak törölheted a hozzászólásaidat.';
$lang['Cannot_delete_replied'] = 'Nem törölhetsz a hozzászólást, melyre már érkezett válasz.';
$lang['Cannot_delete_poll'] = 'Nem törölhetsz aktív szavazást.';
$lang['Empty_poll_title'] = 'Adj meg egy címet a szavazásnak.';
$lang['To_few_poll_options'] = 'Legalább két választási lehetõséget adj meg.';
$lang['To_many_poll_options'] = 'Túl sok választási lehetõséget adtál meg.';
$lang['Post_has_no_poll'] = 'A hozzászólásnak nincs szavazása.';
$lang['Already_voted'] = 'Egyszer már szavaztál.';
$lang['No_vote_option'] = 'Válassz egy lehetõséget a szavazásnál.';

$lang['Add_poll'] = 'Szavazás hozzáadása';
$lang['Add_poll_explain'] = 'Ha nem akarsz szavazást adni a témához, hagyd üresen a mezõket.';
$lang['Poll_question'] = 'A szavazás kérdése';
$lang['Poll_option'] = 'Választási lehetõség';
$lang['Add_option'] = 'Hozzáadás';
$lang['Update'] = 'Frissítés';
$lang['Delete'] = 'Törlés';
$lang['Poll_for'] = 'A szavazás érvényes';
$lang['Days'] = 'napig'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Hagyd üresen, ha soha sem jár le a szavazás ]';
$lang['Delete_poll'] = 'Szavazás törlése';

$lang['Disable_HTML_post'] = 'HTML kikapcsolása a hozzászólásban';
$lang['Disable_BBCode_post'] = 'BBCode kikapcsolása a hozzászólásban';
$lang['Disable_Smilies_post'] = 'Emotikonok kikapcsolása a hozzászólásban';

$lang['HTML_is_ON'] = 'HTML <u>bekapcsolva</u>';
$lang['HTML_is_OFF'] = 'HTML <u>kikapcsolva</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>bekapcsolva</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>kikapcsolva</u>';
$lang['Smilies_are_ON'] = 'Emotikonok <u>bekapcsolva</u>';
$lang['Smilies_are_OFF'] = 'Emotikonok <u>kikapcsolva</u>';

$lang['Attach_signature'] = 'Aláírás hozzáadása (az aláírás megváltoztatható a Profilban)';
$lang['Notify'] = 'Értesítés, ha válasz érkezik';
$lang['Delete_post'] = 'Hozzászólás törlése';

$lang['Stored'] = 'A hozzászólás sikeresen bekerült a fórumba!';
$lang['Deleted'] = 'A hozzászólás törlése sikerült.';
$lang['Poll_delete'] = 'A szavazás törlése sikerült.';
$lang['Vote_cast'] = 'Szavazás elfogadva.';

$lang['Topic_reply_notification'] = 'Téma-válasz emlékeztetõ';

$lang['bbcode_b_help'] = 'Félkövér: [b]szöveg[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Dõlt: [i]szöveg[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Aláhúzás: [u]szöveg[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Idézet: [quote]szöveg[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Kód: [code]kód[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lista: [list]szöveg[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Rendezett lista: [list=]szöveg[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Kép beillesztése: [img]http://kép_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL beillesztése: [url]http://url[/url]vagy[url=http://url]URL szöveg[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Nyitott bbCode tag-ek lezárása';
$lang['bbcode_s_help'] = 'Betûszín: [color=red]text[/color] \(a \"color=#FF0000 is használható\)';
$lang['bbcode_f_help'] = 'Betûméret: [size=x-small]kis szöveg[/size]';

$lang['Emoticons'] = 'Emotikonok';
$lang['More_emoticons'] = 'A többi emotikon megtekintése';

$lang['Font_color'] = 'Betûszín';
$lang['color_default'] = 'Alap';
$lang['color_dark_red'] = 'Sötétpiros';
$lang['color_red'] = 'Piros';
$lang['color_orange'] = 'Narancs';
$lang['color_brown'] = 'Barna';
$lang['color_yellow'] = 'Sárga';
$lang['color_green'] = 'Zöld';
$lang['color_olive'] = 'Olíva';
$lang['color_cyan'] = 'Cián';
$lang['color_blue'] = 'Kék';
$lang['color_dark_blue'] = 'Sötétkék';
$lang['color_indigo'] = 'Indigó';
$lang['color_violet'] = 'Ibolya';
$lang['color_white'] = 'Fehér';
$lang['color_black'] = 'Fekete';

$lang['Font_size'] = 'Betûméret';
$lang['font_tiny'] = 'Apró';
$lang['font_small'] = 'Kicsi';
$lang['font_normal'] = 'Normál';
$lang['font_large'] = 'Nagy';
$lang['font_huge'] = 'Óriási';

$lang['Close_Tags'] = 'Tag-ek lezárása';
$lang['Styles_tip'] = 'Tipp: stílusok gyors alkalmazása az adott szövegen.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Privát Üzenet';

$lang['Login_check_pm'] = 'Privát üzeneteid olvasásához be kell jelentkezned';
$lang['New_pms'] = '%d új privát üzeneted van'; // You have 2 new messages
$lang['New_pm'] = '%d új privát üzeneted van'; // You have 1 new message
$lang['No_new_pm'] = 'Nincsen új privát üzeneted';
$lang['Unread_pms'] = '%d olvasatlan privát üzeneted van';
$lang['Unread_pm'] = '%d olvasatlan privát üzeneted van';
$lang['No_unread_pm'] = 'Nincsen olvasatlan privát üzeneted';
$lang['You_new_pm'] = 'Új privát üzenet érkezett';
$lang['You_new_pms'] = 'Új privát üzenet érkezett';
$lang['You_no_new_pm'] = 'Nincs új privát üzenet';

$lang['Unread_message'] = 'Olvasatlan üzenetek';
$lang['Read_message'] = 'Olvasott üzenetek';

$lang['Read_pm'] = 'Üzenet olvasása';
$lang['Post_new_pm'] = 'Üzenet küldése';
$lang['Post_reply_pm'] = 'Válasz az üzenetre';
$lang['Post_quote_pm'] = 'Üzenet idézése';
$lang['Edit_pm'] = 'Üzenet szerkesztése';

$lang['Inbox'] = 'Érkezett fiók';
$lang['Outbox'] = 'Kimenõ fiók';
$lang['Savebox'] = 'Mentés fiók';
$lang['Sentbox'] = 'Elküldött fiók';
$lang['Flag'] = 'Jelölt';
$lang['Subject'] = 'Téma';
$lang['From'] = 'Feladó';
$lang['To'] = 'Címzett';
$lang['Date'] = 'Dátum';
$lang['Mark'] = 'Megjelölés';
$lang['Sent'] = 'Elküldött';
$lang['Saved'] = 'Elmentett';
$lang['Delete_marked'] = 'Kijelölt törlése';
$lang['Delete_all'] = 'Összes törlése';
$lang['Save_marked'] = 'Kijelölt mentése';
$lang['Save_message'] = 'Üzenet mentése';
$lang['Delete_message'] = 'Üzenet törlése';

$lang['Display_messages'] = 'Üzenetek megjelenítése'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Összes üzenet';

$lang['No_messages_folder'] = 'Nincs üzeneted ebben a fiókban';

$lang['PM_disabled'] = 'Nincs lehetõség Privát üzenet küldésére.';
$lang['Cannot_send_privmsg'] = 'Sajnos nem küldhetsz Privát üzeneteket. Lépj kapcsolatba az Adminisztrátorral.';
$lang['No_to_user'] = 'Az üzenet küldéséhez meg kell adnod a feladónevet.';
$lang['No_such_user'] = 'Ilyen nevû felhasználó nem létezik.';

$lang['Disable_HTML_pm'] = 'HTML kikapcsolása az üzenetben';
$lang['Disable_BBCode_pm'] = 'BBCode kikapcsolása az üzenetben';
$lang['Disable_Smilies_pm'] = 'Emotikonok kikapcsolása az üzenetben';

$lang['Message_sent'] = 'Üzenet elküldve.';

$lang['Click_return_inbox'] = 'Kattints %side%s, hogy visszatérj az Érkezett üzenetekhez';
$lang['Click_return_index'] = 'Kattints %side%s, hogy visszatérj a Tartalomjegyzékhez';

$lang['Send_a_new_message'] = 'Új Privát üzenet küldése';
$lang['Send_a_reply'] = 'Válasz a Privát üzenetre';
$lang['Edit_message'] = 'Priváte üzenet szerkesztése';

$lang['Notification_subject'] = 'Új Privát üzenet érkezett!';

$lang['Find_username'] = 'Felhasználónév keresése';
$lang['Find'] = 'Találat';
$lang['No_match'] = 'Nincs találat.';

$lang['No_post_id'] = 'No post ID was specified';
$lang['No_such_folder'] = 'Nem létezik ilyen fiók';
$lang['No_folder'] = 'Nincs fiók meghatározva';

$lang['Mark_all'] = 'Összes kijelölése';
$lang['Unmark_all'] = 'Összes kijelölésének megszüntetése';

$lang['Confirm_delete_pm'] = 'Biztosan törölni akarod az üzenetet?';
$lang['Confirm_delete_pms'] = 'Biztosan törölni akarod az üzeneteket?';

$lang['Inbox_size'] = 'Az Érkezett fiókod %d%%-ig tele van'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Az Elküldött fiókod %d%%-ig tele van';
$lang['Savebox_size'] = 'A Mentés fiókod %d%%-ig tele van';

$lang['Click_view_privmsg'] = 'Kattints %side%s az Érkezett fiókod megtekintéséhez';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Profil megtekintése :: %s'; // %s is username
$lang['About_user'] = 'Információ: %s'; // %s is username

$lang['Preferences'] = 'Beállítások';
$lang['Items_required'] = 'A csillaggal megjelölt mezõk kitöltése kötelezõ.';
$lang['Registration_info'] = 'Regisztráció információ';
$lang['Profile_info'] = 'Profil információ';
$lang['Profile_info_warn'] = 'Ezeket az információkat mindenki látni fogja';
$lang['Avatar_panel'] = 'Avatar beállítás';
$lang['Avatar_gallery'] = 'Avatar galéria';

$lang['Website'] = 'Weboldal';
$lang['Location'] = 'Tartózkodási hely';
$lang['Contact'] = 'Kapcsolat';
$lang['Email_address'] = 'Email cím';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Privát üzenet küldése';
$lang['Hidden_email'] = '[ Rejtett ]';
$lang['Search_user_posts'] = 'Felhasználó hozzászólásainak keresése';
$lang['Interests'] = 'Érdeklõdési kör';
$lang['Occupation'] = 'Foglalkozás';
$lang['Poster_rank'] = 'Rang';

$lang['Total_posts'] = 'Összes hozzászólása';
$lang['User_post_pct_stats'] = 'Az összes %.2f%%-ka'; // 1.25% of total
$lang['User_post_day_stats'] = 'Naponta %.2f hozzászólás'; // 1.5 posts per day
$lang['Search_user_posts'] = '%s hozzászólásainak keresése'; // Find all posts by username

$lang['No_user_id_specified'] = 'A felhasználó nem létezik.';
$lang['Wrong_Profile'] = 'Nem módosíthatod más Profilját.';

$lang['Only_one_avatar'] = 'Csak egy Avatart válassz ki';
$lang['File_no_data'] = 'A megadott webcím nem tartalmaz adatot';
$lang['No_connection_URL'] = 'A megadott webcímhez nem lehet csatlakozni';
$lang['Incomplete_URL'] = 'A megadott webcím hiányos';
$lang['Wrong_remote_avatar_format'] = 'A távoli avatar webcíme nem érvényes';
$lang['No_send_account_inactive'] = 'A jelszó sajnos nem kérhetõ le, mivel a felhasználónév jelenleg inaktív. Lépj kapcsolatba az Adminisztrátorral.';

$lang['Always_smile'] = 'Mindig engedélyezze a Emotikonokat';
$lang['Always_html'] = 'Mindig engedélyezze a HTML-t';
$lang['Always_bbcode'] = 'Mindig engedélyezze a BBCode-ot';
$lang['Always_add_sig'] = 'Mindig csatolja az aláírásomat';
$lang['Always_notify'] = 'Mindig értesítsen, ha válasz érkezik';
$lang['Always_notify_explain'] = 'Küld egy emailt, ha hozzászólás érkezik az adott témában. Ez bármikor megváltoztatható, ha egy újabb hozzászólást küldesz.';

$lang['Board_style'] = 'Stílus';
$lang['Board_lang'] = 'Nyelv';
$lang['No_themes'] = 'Nincsenek stílustémák az adatbázisban';
$lang['Timezone'] = 'Idõzóna';
$lang['Date_format'] = 'Dátum formátum';
$lang['Date_format_explain'] = 'A PHP date() <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> szerint használandó.';
$lang['Signature'] = 'Aláírás';
$lang['Signature_explain'] = 'A hozzászólások végére kerülõ szöveg. Maximum %d ckarakter lehet';
$lang['Public_view_email'] = 'Emailcím megjelenítése';

$lang['Current_password'] = 'Jelenlegi jelszó';
$lang['New_password'] = 'Új jelszó';
$lang['Confirm_password'] = 'Jelszó megismétlése';
$lang['Confirm_password_explain'] = 'Új jelszót kell megadnod, ha meg akarod változtatni a régit, vagy ha az emailcímet akarsz cserélni.';
$lang['password_if_changed'] = 'Csak akkor kell megadnod a jelszót, ha meg akarod változtatni';
$lang['password_confirm_if_changed'] = 'A fenti jelszó érvényesítéséhez szükséges';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Egy kis kép, mely a hozzászólásban a nevednél látható. Egyszerre csak
egy kép jelentítõdik meg; nem lehet szélesebb, mint %d pixel, és nem lehet magasabb, mint %d
pixel. A mérete nem lehet nagyobb, mint %dkByte.';
$lang['Upload_Avatar_file'] = 'Avatar feltöltése a számítógéprõl';
$lang['Upload_Avatar_URL'] = 'Avatar feltöltése webcímrõl';
$lang['Upload_Avatar_URL_explain'] = 'Írd be az Avatar képének webcímét (a kép át lesz másolva erre az oldalra).';
$lang['Pick_local_Avatar'] = 'Avatar kiválasztása a galériából';
$lang['Link_remote_Avatar'] = 'Avatar kép belinkelése';
$lang['Link_remote_Avatar_explain'] = 'Írd be az Avatar képének webcímét, amelyet be szeretnél linkelni (a kép nem lesz átmásolva erre az oldalra).';
$lang['Avatar_URL'] = 'Avatar képének webcíme';
$lang['Select_from_gallery'] = 'Avatar kiválasztása a galériából';
$lang['View_avatar_gallery'] = 'Galéria megmutatása';

$lang['Select_avatar'] = 'Avatar kiválasztása';
$lang['Return_profile'] = 'Mégsem';
$lang['Select_category'] = 'Kategória választása';

$lang['Delete_Image'] = 'Kép törlése';
$lang['Current_Image'] = 'Jelenlegi kép';

$lang['Notify_on_privmsg'] = 'Értesítés új Privát üzenet érkezésekor';
$lang['Popup_on_privmsg'] = 'Felugró ablak új Privát üzenet érkezésekor';
$lang['Popup_on_privmsg_explain'] = 'Néhány stílus-téma új ablakot nyit, ha új üzeneted érkezik.';
$lang['Hide_user'] = 'Jelenlét elrejtése';

$lang['Profile_updated'] = 'A Profil megváltozott';
$lang['Profile_updated_inactive'] = 'A Profil megváltozott, de mivel néhány alapvetõ információn
változtattál, így a hozzáférésed inaktívra változott. Ellenõrizd az Emailedet, hogy hogyan tudod
reaktiválni, vagy ha ehhez Adminisztrátor szükséges, várj míg õ reaktiválja a hozzáférésedet.';

$lang['Password_mismatch'] = 'A beírt jelszavak nem egyeznek meg.';
$lang['Current_password_mismatch'] = 'A jelenlegi jelszó nem egyezik meg az adatbázisban találhatóval.';
$lang['Password_long'] = 'A jelszó nem lehet több mint 32 karakter.';
$lang['Too_many_registers'] = 'Túl sok regisztráció történt. Próbáld késõbb.';
$lang['Username_taken'] = 'Ez a felhasználónév már foglalt.';
$lang['Username_invalid'] = 'A felhasználónév érvénytelen karaktert tartalmaz (mint pld. \).';
$lang['Username_disallowed'] = 'Ez a felhasználónév nem engedélyezett.';
$lang['Email_taken'] = 'Ezt az emailcímet már regisztrálta egy másik felhasználó.';
$lang['Email_banned'] = 'Ez az emailcím le van tiltva.';
$lang['Email_invalid'] = 'Érvénytelen emailcím.';
$lang['Signature_too_long'] = 'Túl hosszú aláírás.';
$lang['Fields_empty'] = 'A csillaggal jelölt mezõk kitöltése kötelezõ.';
$lang['Avatar_filetype'] = 'Az avatar kép típusa csak JPG, GIF vagy PNG lehet';
$lang['Avatar_filesize'] = 'Az avatar kép nem lehet nagyobb mint %d KByte'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Az avatar nem lehet nagyobb mint %d pixel széles és %d pixel magas';

$lang['Welcome_subject'] = 'Üdvözlünk a(z) %s fórumában'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Új felhasználó';
$lang['Account_activated_subject'] = 'Felhasználó aktiválva';

$lang['Account_added'] = 'Köszönjük a regisztrációdat, a regisztráció sikeres volt. Most már bejelentkezhetsz a neveddel, és a hozzá tartozó jelszóval.';
$lang['Account_inactive'] = 'A regisztráció sikeres volt, de biztonsági okokból egy levelet küldtünk az általad megadott emailcímre, mellyel ellenõrizzük a regisztrációt. További információk az emailben.';
$lang['Account_inactive_admin'] = 'A regisztráció sikeres volt, de a fórum használatához az Adminisztrátor jóváhagyása szükséges. Rövidesen értesít az regisztrációd befejezésérõl, a felhasználóneved aktiválásáról.';
$lang['Account_active'] = 'A felhasználóneved aktiválva van. Köszönjük a regisztrációt.';
$lang['Account_active_admin'] = 'A felhasználó aktiválva van.';
$lang['Reactivate'] = 'Felhasználónév reaktiválása!';
$lang['Already_activated'] = 'Már aktiváltad a felhasználónevedet.';
$lang['COPPA'] = 'A felhasználónév elkészült, de ellenõrzés ügyében elõbb nézd meg az emailcímedet.';

$lang['Registration'] = 'Felhasználói szabályzat';
$lang['Reg_agreement'] = 'Noha az Adminisztrátor, és a Moderátorok mindent megtesznek, hogy minél hamarabb eltávolítsák, vagy töröljék a Fórumból az általánosan kifogásolható anyagokat, lehetetlen, hogy minden egyes hozzászólást átnézzenek. Ebbõl adódóan elfogadom, hogy a Fórumon található összes hozzászólás a szerzõ nézeteit tükrözi, és nem az Adminisztrátorok, Moderátorok, vagy a webmester álláspontját - így õk nem vállalnak felelõsséget a hozzászólások tartalmáért.<br /><br
/>Beleegyezek, hogy nem küldök sértegetõ, obszcén, vulgáris, rágalmazó, gyûlöletkeltõ, támadó,
vagy bármely más olyan tartalmat, illetve anyagot, mely törvényt sért. Sem olyan anyagot, mely ellentétes az
általános közízléssel, mivel ez egy nyilvános fórum. A fentiek megsértése azonnali és végleges törlést von maga után.<br
/>Elfogadom, hogy a Fórum webmesterének, az Adminisztrátornak és bármely Moderátornak jogában áll
eltávolítani, szerkeszteni a hozzászólásaimat, vagy lezárni az általam nyitott témákat,
amennyiben úgy ítélik meg hogy ez szükséges. Mint felhasználó, elfogadom, hogy néhány, általam
megadott információ tárolásra kerül a Fórum adatbázisában. Ezek az adatok semmilyen módon nem kerülnek ki egy
harmadik félhez, de sem az Adminisztrátor sem a Moderátorok nem tudnak felelõsséget vállalni, egy esetleges "hacker-támadásra".<br /><br />A Fórum "cookie"-kat
(sütiket) használ, hogy adatokat tároljon a felhasználó számítógépén, de egyik sem tartalmaz személyes
adatokat, melyek a regisztrációnál kerültek megadásra: a cookie-k pusztán technikai szempontból szükségesek. A megadott emailcím csak a regisztráció (és új jelszó) érvényesítésénél kerül
felhasználásra.<br /><br />A Regisztrációra kattintva elfogadom a fenti feltételeket.';

$lang['Agree_under_13'] = 'Elfogadom a feltételeket, és 13 évesnél <b>fiatalabb</b> vagyok';
$lang['Agree_over_13'] = 'Elfogadom a feltételeket';
$lang['Agree_not'] = 'Nem fogadom el a feltételeket';

$lang['Wrong_activation'] = 'Az aktivációs kulcs nem egyezik meg az adatbázisban lévõvel.';
$lang['Send_password'] = 'Új jelszó küldése';
$lang['Password_updated'] = 'Az új jelszó elkészült, ellenõrizd az emailcímedet a további információkért.';
$lang['No_email_match'] = 'A megadott emailcím nem egyezik meg a hozzá adott felhasználónévhez.';
$lang['New_password_activation'] = 'Új jelszó aktiváció';
$lang['Password_activated'] = 'A hozzáférésedet reaktiváltuk. A bejelentkezéshez írd be az emailben megadott jelszót.';

$lang['Send_email_msg'] = 'Email üzenet küldése';
$lang['No_user_specified'] = 'Nem adtál meg felhasználónevet';
$lang['User_prevent_email'] = 'A felhasználó nem akar emailokat fogadni. Próbálj Privát üzenetet küldeni.';
$lang['User_not_exist'] = 'Ilyen felhasználó nem létezik';
$lang['CC_email'] = 'Másolat küldése magadnak';
$lang['Email_message_desc'] = 'Az üzenet sima szövegként lesz elküldve, ezért ne használj HTML-t vagy BBCode tageket. A válaszcím a te emailcímed lesz.';
$lang['Flood_email_limit'] = 'Most nem küldhetsz több emailt, próbáld késõbb.';
$lang['Recipient'] = 'Címzett';
$lang['Email_sent'] = 'Email elküldve.';
$lang['Send_email'] = 'Email küldése';
$lang['Empty_subject_email'] = 'Kötelezõ a téma megadása.';
$lang['Empty_message_email'] = 'Üres üzenet.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Az érvényesítési kód hibás.';
$lang['Too_many_registers'] = 'Egyszerre túl sok regisztrációval próbálkoztál. Próbáld késõbb.';
$lang['Confirm_code_impaired'] = 'Ha látási (vagy egyéb) problémák folytán nem tudnád elolvasni a kódot, vedd fel a kapcsolatot az %sAdminisztrátorral%s.';
$lang['Confirm_code'] = 'Érvényesítési kód';
$lang['Confirm_code_explain'] = 'A kódot úgy kell begépelni, ahogy itt látod. Ügyelj a kis és nagybetûkre, a 0 pedig egy átlós vonallal van áthúzva.';



//
// Memberslist
//
$lang['Select_sort_method'] = 'Rendezési mód kiválasztása';
$lang['Sort'] = 'Rendezés';
$lang['Sort_Top_Ten'] = 'A legtöbb hozzászólást küldõ 10 felhasználó';
$lang['Sort_Joined'] = 'Regisztráció dátuma';
$lang['Sort_Username'] = 'Felhasználónév';
$lang['Sort_Location'] = 'Tartózkodási hely';
$lang['Sort_Posts'] = 'Összes hozzászólás';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Weboldal';
$lang['Sort_Ascending'] = 'Növekvõ';
$lang['Sort_Descending'] = 'Csökkenõ';
$lang['Order'] = 'Sorrend';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Csoport vezérlõpult';
$lang['Group_member_details'] = 'Csoporttagság Részletek';
$lang['Group_member_join'] = 'Csatlakozás egy csoporthoz';

$lang['Group_Information'] = 'Csoport információ';
$lang['Group_name'] = 'Csoportnév';
$lang['Group_description'] = 'Csoport leírás';
$lang['Group_membership'] = 'Csoporttagság';
$lang['Group_Members'] = 'Csoporttagok';
$lang['Group_Moderator'] = 'Csoport Moderátor';
$lang['Pending_members'] = 'Kérelmezett tagságok';

$lang['Group_type'] = 'Csoportípus';
$lang['Group_open'] = 'Nyitott csoport';
$lang['Group_closed'] = 'Zárt csoport';
$lang['Group_hidden'] = 'Rejtett csoport';

$lang['Current_memberships'] = 'Aktuális tagságok';
$lang['Non_member_groups'] = 'Nem-tagságos csoportok';
$lang['Memberships_pending'] = 'Tagsági kérelmek';

$lang['No_groups_exist'] = 'Nem létezõ csoport';
$lang['Group_not_exist'] = 'A megadott csoport nem létezik';

$lang['Join_group'] = 'Csatlakozás a csoporthoz';
$lang['No_group_members'] = 'A csoportnak nincsenek tagjai';
$lang['Group_hidden_members'] = 'A csoport rejtett, nem tudod megnézni a tagjait';
$lang['No_pending_group_members'] = 'A csoportnak nincsenek függõ kérelmezésben lévõ tagjai';
$lang['Group_joined'] = 'A jelentkezésed sikeres ebbe a csoportba<br />a Csoport Moderátor értesít ha elfogadta a jelentkezésedet.';
$lang['Group_request'] = 'A csatlakozási kérelmed elkészült.';
$lang['Group_approved'] = 'Csatlakozási kérelmed elfogadva.';
$lang['Group_added'] = 'Hozzá lettél adva ehez a csoporthoz.';
$lang['Already_member_group'] = 'Már tagja vagy ennek a csoportnak';
$lang['User_is_member_group'] = 'A felhasználó már most is tagja ennek a csoportnak';
$lang['Group_type_updated'] = 'Sikeresen megváltozott a Csoport típusa.';

$lang['Could_not_add_user'] = 'A kiválasztott felhasználó nem létezik.';
$lang['Could_not_anon_user'] = 'Nem készíthetsz Névtelen csoporttagot.';

$lang['Confirm_unsub'] = 'Biztos le akarod mondani ezt a csoporttagságot?';
$lang['Confirm_unsub_pending'] = 'A jelentkezésed még nincs jóváhagyva ehhez a csoporthoz, biztosan le akarod mondani?';

$lang['Unsub_success'] = 'Sikeresen lemondtad a Csoporttagságot.';

$lang['Approve_selected'] = 'Kiválasztottak elfogadása';
$lang['Deny_selected'] = 'Kiválaszottak elutasítása';
$lang['Not_logged_in'] = 'Be kell jelentkezned, hogy csatlakozhass egy csoporthoz.';
$lang['Remove_selected'] = 'Kijelölt eltávolítása';
$lang['Add_member'] = 'Tag hozzáadása';
$lang['Not_group_moderator'] = 'Nem vagy a Csoport Moderátora, így nem végezheted el ezeket a módosításokat.';

$lang['Login_to_join'] = 'Jelentkezz be hogy csatlakozhass egy csoporthoz, vagy hogy irányítsd a csoporttagságokat';
$lang['This_open_group'] = 'Nyitott csoport, kattints a Tagság kérelmezéséshez';
$lang['This_closed_group'] = 'Zárt csoport, több felhasználó nem engedélyezett';
$lang['This_hidden_group'] = 'Ennél a rejtett csoportnál nem engedélyezett az automatikus felhasználó-hozzáadás';
$lang['Member_this_group'] = 'A csoport tagja vagy';
$lang['Pending_this_group'] = 'A csoporttagságod egyelõre függõben van';
$lang['Are_group_moderator'] = 'Csoport Moderátor vagy';
$lang['None'] = 'senki';

$lang['Subscribe'] = 'Jelentkezés';
$lang['Unsubscribe'] = 'Lemondás';
$lang['View_Information'] = 'Információ megtekintése';


//
// Search
//
$lang['Search_query'] = 'Keresési feltétel';
$lang['Search_options'] = 'Keresési beállítások';

$lang['Search_keywords'] = 'Keresés kulcsszó által';
$lang['Search_keywords_explain'] = 'Használhatod az <u>ÉS</u> szót, hogy a keresésben megadott összes szó benne legyen a találatban, a <u>VAGY</u> szót mellyel a \"benne lehet\" szavakat választhatod el, és a <u>NEM</u> szót, mellyel kizárhatsz szavakat. Használj *-ot a részleges szavakhoz.';
$lang['Search_author'] = 'Szerzõ keresése';
$lang['Search_author_explain'] = 'Használj *-ot a részleges szavakhoz';

$lang['Search_for_any'] = 'Keresés bármely kifejezésre';
$lang['Search_for_all'] = 'Keresés az összes kifejezésre';
$lang['Search_title_msg'] = 'Keresés téma címre, és szövegre';
$lang['Search_msg_only'] = 'Csak szövegben keresse';

$lang['Return_first'] = 'A talált témák elsõ'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'karakterének megjelenítése';

$lang['Search_previous'] = 'Régebbi keresés'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Rendezési feltétel';
$lang['Sort_Time'] = 'Küldés ideje';
$lang['Sort_Post_Subject'] = 'Téma';
$lang['Sort_Topic_Title'] = 'Téma címe';
$lang['Sort_Author'] = 'Szerzõ';
$lang['Sort_Forum'] = 'Fórum';

$lang['Display_results'] = 'Találatok megjelenítése';
$lang['All_available'] = 'Összes találat megjelenítése';
$lang['No_searchable_forums'] = 'Nincs jogod keresni a fórumban.';

$lang['No_search_match'] = 'A keresési feltételeknek egy fórum és egy téma sem felelt meg.';
$lang['Found_search_match'] = '%d találat'; // eg. Search found 1 match
$lang['Found_search_matches'] = '%d találat'; // eg. Search found 24 matches

$lang['Close_window'] = 'Ablak bezárása';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Csak %s küldhet Közleményt ebbe a fórumba.';
$lang['Sorry_auth_sticky'] = 'Csak %s küldhet Kiemelt üzenetet ebbe a fórumba.';
$lang['Sorry_auth_read'] = 'Csak %s olvashatja a fórum témáit.';
$lang['Sorry_auth_post'] = 'Csak %s nyithat új témát ebben a fórumban.';
$lang['Sorry_auth_reply'] = 'Csak %s válaszolhat egy hozzászólásra ebben a fórumban.';
$lang['Sorry_auth_edit'] = 'Csak %s szerkesztheti a hozzászólásokat ebben a fórumban.';
$lang['Sorry_auth_delete'] = 'Csak %s törölhet hozzászólásokat ebben a fórumban.';
$lang['Sorry_auth_vote'] = 'Csak %s szavazhat ebben a fórumban.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>névtelen felhasználók</b>';
$lang['Auth_Registered_Users'] = '<b>regisztrált felhasználók</b>';
$lang['Auth_Users_granted_access'] = '<b>felhasználók különleges engedéllyel</b>';
$lang['Auth_Moderators'] = '<b>moderátorok</b>';
$lang['Auth_Administrators'] = '<b>adminisztrátorok</b>';

$lang['Not_Moderator'] = 'Nem vagy a fórum moderátora.';
$lang['Not_Authorised'] = 'Nem vagy jogosult erre a mûveletre';

$lang['You_been_banned'] = 'Ki lettél tiltva a Fórumról<br />További információért vedd fel a kapcsolatot a webmesterrel, vagy az Adminisztrátorral.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '0 Regisztrált felhasználó és  '; // There are 5 Registered and
$lang['Reg_users_online'] = '%d Regisztrált felhasználó és '; // There are 5 Registered and
$lang['Reg_user_online'] = '%d Regisztrált felhasználó és '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = '0 Rejtett felhasználó van jelen'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d Rejtett felhasználó van jelen'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d Rejtett felhasználó van jelen'; // 6 Hidden users online
$lang['Guest_users_online'] = '%d Vendég van jelen'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '0 Vendég van jelen'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d Vendég van jelen'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Jelenleg egy felhasználó sem böngészi a Fórum oldalait';

$lang['Online_explain'] = 'A fenti adat az elmúlt 5 perc alapján készült';

$lang['Forum_Location'] = 'Fórum helye';
$lang['Last_updated'] = 'Legutóbb frissített';

$lang['Forum_index'] = 'Fórum index';
$lang['Logging_on'] = 'Bejelentkezés';
$lang['Posting_message'] = 'Üzenet küldése';
$lang['Searching_forums'] = 'Fórumok keresése';
$lang['Viewing_profile'] = 'Profil megtekintése';
$lang['Viewing_online'] = 'Jelenlévõ felhasználók megtekintése';
$lang['Viewing_member_list'] = 'Taglista megtekintése';
$lang['Viewing_priv_msgs'] = 'Privát üzenetek megtekintése';
$lang['Viewing_FAQ'] = 'Gy.I.K. megtekintése';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderátor vezérlõpult';
$lang['Mod_CP_explain'] = 'Az alábbi mezõk használatával lehet kezelni a fórumot, pld. lezárás, megnyitás, áthelyezés, törlés.';

$lang['Select'] = 'Kiválaszt';
$lang['Delete'] = 'Töröl';
$lang['Move'] = 'Áthelyez';
$lang['Lock'] = 'Bezár';
$lang['Unlock'] = 'Megnyit';

$lang['Topics_Removed'] = 'A kiválaszott témák sikeresen törölve lettek az adatbázisból.';
$lang['Topics_Locked'] = 'A kiválaszott témák le lettek zárva.';
$lang['Topics_Moved'] = 'A kiválaszott témák áthelyezõdtek.';
$lang['Topics_Unlocked'] = 'A kiválaszott témák megnyíltak.';
$lang['No_Topics_Moved'] = 'Nem lett áthelyezve téma.';

$lang['Confirm_delete_topic'] = 'Biztosan el akarod távolítani a kiválaszott témá(ka)t?';
$lang['Confirm_lock_topic'] = 'Biztosan le akarod zárni a kiválasztott témá(ka)t?';
$lang['Confirm_unlock_topic'] = 'Biztosan meg akarod nyitni a kiválasztott témá(ka)t?';
$lang['Confirm_move_topic'] = 'Biztosan át akarod helyezni a kiválasztott témá(ka)t?';

$lang['Move_to_forum'] = 'Áthelyezés a következõ fórumba';
$lang['Leave_shadow_topic'] = 'Árnyék-téma hagyása a régi fórumban.';

$lang['Split_Topic'] = 'Téma-szétválasztó vezélõpult';
$lang['Split_Topic_explain'] = 'Az alábbi mezõk használatával egy témát kétféleképpen választhatsz szét: vagy az adott hozzászólások kiemelésével, vagy egy adott hozzászólástól számítva';
$lang['Split_title'] = 'A téma új címe';
$lang['Split_forum'] = 'A téma új fóruma';
$lang['Split_posts'] = 'Kiválasztott hozzászólások szétválasztása';
$lang['Split_after'] = 'Szétválasztás az adott hozzászólástól';
$lang['Topic_split'] = 'A téma sikeresen ketté lett osztva';

$lang['Too_many_error'] = 'Túl sok hozzászólást választottál ki. Csak egy hozzászólást válassz ki, az utána következõk is kiemelõdnek!';

$lang['None_selected'] = 'A mûvelet végrahajtásához témát is ki kell választani. Lépj vissza, és válassz ki legalább egyet.';
$lang['New_forum'] = 'Új fórum';

$lang['This_posts_IP'] = 'A hozzászólás IP-je';
$lang['Other_IP_this_user'] = 'A felhasználóhoz tartozó egyéb IP-címek';
$lang['Users_this_IP'] = 'Az IP-hez tartozó felhasználók';
$lang['IP_info'] = 'IP információ';
$lang['Lookup_IP'] = 'IP keresése';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Idõzóna: %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = '(GMT -12 óra)';
$lang['-11'] = '(GMT -11 óra)';
$lang['-10'] = '(GMT -10 óra)';
$lang['-9'] = '(GMT -9 óra)';
$lang['-8'] = '(GMT -8 óra)';
$lang['-7'] = '(GMT -7 óra)';
$lang['-6'] = '(GMT -6 óra)';
$lang['-5'] = '(GMT -5 óra)';
$lang['-4'] = '(GMT -4 óra)';
$lang['-3.5'] = '(GMT -3.5 óra)';
$lang['-3'] = '(GMT -3 óra)';
$lang['-2'] = '(GMT -2 óra)';
$lang['-1'] = '(GMT -1 óra)';
$lang['0'] = '(GMT 0) ';
$lang['1'] = '(GMT +1 óra)';
$lang['2'] = '(GMT +2 óra)';
$lang['3'] = '(GMT +3 óra)';
$lang['3.5'] = '(GMT +3.5 óra)';
$lang['4'] = '(GMT +4 óra)';
$lang['4.5'] = '(GMT +4.5 óra)';
$lang['5'] = '(GMT +5 óra)';
$lang['5.5'] = '(GMT +5.5 óra)';
$lang['6'] = '(GMT +6 óra)';
$lang['6.5'] = '(GMT +6.5 óra)';
$lang['7'] = '(GMT +7 óra)';
$lang['8'] = '(GMT +8 óra)';
$lang['9'] = '(GMT +9 óra)';
$lang['9.5'] = '(GMT +9.5 óra)';
$lang['10'] = '(GMT +10 óra)';
$lang['11'] = '(GMT +11 óra)';
$lang['12'] = '(GMT +12 óra)';
$lang['13'] = 'GMT + 13 óra';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12 óra) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11 óra) Midway-sziget, Szamoa';
$lang['tz']['-10'] = '(GMT -10 óra) Hawaii';
$lang['tz']['-9'] = '(GMT -9 óra) Alaszka';
$lang['tz']['-8'] = '(GMT -8 óra) Csendes-óceáni idõ, Tijuana';
$lang['tz']['-7'] = '(GMT -7 óra) Arizona, Hegyi idõ';
$lang['tz']['-6'] = '(GMT -6 óra) Amerikai középidõ, Közép-Amerika, Mexikóváros';
$lang['tz']['-5'] = '(GMT -5 óra) Bogota, Lima, Quito, Indiana, Keleti idõ';
$lang['tz']['-4'] = '(GMT -4 óra) Atlanti-óceáni idõ, Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 óra) Új-Founland';
$lang['tz']['-3'] = '(GMT -3 óra) Brazília, Buenos Aires, Georgetown, Grönland';
$lang['tz']['-2'] = '(GMT -2 óra) Közép-atlanti idõzóna';
$lang['tz']['-1'] = '(GMT -1 óra) Azori-szigetek, Zöld-foki-szigetek';
$lang['tz']['0'] = '(GMT 0) Greenwich, London, Dublin, Lisszabon';
$lang['tz']['1'] = '(GMT +1 óra) Belgrád, Budapest, Ljubljana, Pozsony, Prága';
$lang['tz']['2'] = '(GMT +2 óra) Athén, Isztambul, Minszk, Helsinki';
$lang['tz']['3'] = '(GMT +3 óra) Bagdad, Kuvait, Rijád, Moszkva, Szentpétervár';
$lang['tz']['3.5'] = '(GMT +3.5 óra) Teherán';
$lang['tz']['4'] = '(GMT +4 óra) Baku, Tbiliszi';
$lang['tz']['4.5'] = '(GMT +4.5 óra) Kabul';
$lang['tz']['5'] = '(GMT +5 óra) Iszlámbád, Karacsi, Taskent, Jekatyerinburg';
$lang['tz']['5.5'] = '(GMT +5.5 óra) Chennai, Kalkutta, Mumbai, Új-Delhi';
$lang['tz']['6'] = '(GMT +6 óra) Almaty, Novoszibirszk, Astana, Dhaka';
$lang['tz']['6.5'] = '(GMT +6.5 óra) Rangun';
$lang['tz']['7'] = '(GMT +7 óra) Bangkok, Dzsakarta, Hanoi, Krasznojarszk';
$lang['tz']['8'] = '(GMT +8 óra) Hongkong, Peking, Irkutszk, Ulánbátor, Perth';
$lang['tz']['9'] = '(GMT +9 óra) Jakutszk, Oszkara, Szapporo, Tokió, Szöul';
$lang['tz']['9.5'] = '(GMT +9.5 óra) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10 óra) Brisbane, Canberra, Melbourne, Sydney, Guam';
$lang['tz']['11'] = '(GMT +11 óra) Magadán, Salamon-szigetek, Új Kaledónia';
$lang['tz']['12'] = '(GMT +12 óra) Auckland, Wellington, Fidzsi-szigetek, Kamcsatka';
$lang['tz']['13'] = 'GMT + 13 Hours';

$lang['datetime']['Sunday'] = 'Vasárnap';
$lang['datetime']['Monday'] = 'Hétfõ';
$lang['datetime']['Tuesday'] = 'Kedd';
$lang['datetime']['Wednesday'] = 'Szerda';
$lang['datetime']['Thursday'] = 'Csütörtök';
$lang['datetime']['Friday'] = 'Péntek';
$lang['datetime']['Saturday'] = 'Szombat';
$lang['datetime']['Sun'] = 'Vas.';
$lang['datetime']['Mon'] = 'Hétf.';
$lang['datetime']['Tue'] = 'Kedd.';
$lang['datetime']['Wed'] = 'Szer.';
$lang['datetime']['Thu'] = 'Csüt.';
$lang['datetime']['Fri'] = 'Pént.';
$lang['datetime']['Sat'] = 'Szomb.';
$lang['datetime']['January'] = 'Január';
$lang['datetime']['February'] = 'Február';
$lang['datetime']['March'] = 'Március';
$lang['datetime']['April'] = 'Április';
$lang['datetime']['May'] = 'Május';
$lang['datetime']['June'] = 'Június';
$lang['datetime']['July'] = 'Július';
$lang['datetime']['August'] = 'Augusztus';
$lang['datetime']['September'] = 'Szeptember';
$lang['datetime']['October'] = 'Október';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'December';
$lang['datetime']['Jan'] = 'Jan.';
$lang['datetime']['Feb'] = 'Feb.';
$lang['datetime']['Mar'] = 'Márc.';
$lang['datetime']['Apr'] = 'Ápr.';
$lang['datetime']['May'] = 'Máj.';
$lang['datetime']['Jun'] = 'Jún.';
$lang['datetime']['Jul'] = 'Júl.';
$lang['datetime']['Aug'] = 'Aug.';
$lang['datetime']['Sep'] = 'Szept.';
$lang['datetime']['Oct'] = 'Okt.';
$lang['datetime']['Nov'] = 'Nov.';
$lang['datetime']['Dec'] = 'Dec.';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Információ';
$lang['Critical_Information'] = 'Kritikus információ';

$lang['General_Error'] = 'Általános hiba';
$lang['Critical_Error'] = 'Kritikus hiba';
$lang['An_error_occured'] = 'Hiba adódott';
$lang['A_critical_error'] = 'Kritikus hiba adódott';

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
// That's all, Folks!
// -------------------------------------------------

?>