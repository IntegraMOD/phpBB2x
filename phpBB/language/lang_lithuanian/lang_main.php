<?php
/***************************************************************************
 *                            lang_main.php [lithuanian]
 *                              -------------------
 *     begin                : Mon April 08 2002
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1.2.1 2003/01/02 20:44:58 ProTON Exp $
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
// You should also try to set a locale and a character
// encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may
// not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

//setlocale(LC_ALL, "en");
$lang['ENCODING'] = "UTF-8";
$lang['DIRECTION'] = "ltr";
$lang['LEFT'] = "left";
$lang['RIGHT'] = "right";
$lang['DATE_FORMAT'] =  "Y M d"; // This should be changed to the default date format for your language, php date() format

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = "Forumas";
$lang['Category'] = "Kategorija";
$lang['Topic'] = "Tema";
$lang['Topics'] = "Temos";
$lang['Replies'] = "Atsakymai";
$lang['Views'] = "Perþiûrëjo";
$lang['Post'] = "Praneðimas";
$lang['Posts'] = "Praneðimai";
$lang['Posted'] = "Paraðytas";
$lang['Username'] = "Vartotojo vardas";
$lang['Password'] = "Slaptaþodis";
$lang['Email'] = "El. paðtas";
$lang['Poster'] = "Praneðimo autorius";
$lang['Author'] = "Autorius";
$lang['Time'] = "Laikas";
$lang['Hours'] = "Valanda(ø)";
$lang['Message'] = "Praneðimas";

$lang['1_Day'] = "1 dienos";
$lang['7_Days'] = "7 dienø";
$lang['2_Weeks'] = "2 savaièiø";
$lang['1_Month'] = "1 mënesio";
$lang['3_Months'] = "3 mënesiø";
$lang['6_Months'] = "6 mënesiø";
$lang['1_Year'] = "1 metø";

$lang['Go'] = "Pirmyn";
$lang['Jump_to'] = "Pereiti á";
$lang['Submit'] = "Siøsti";
$lang['Reset'] = "Iðvalyti";
$lang['Cancel'] = "Atðaukti";
$lang['Preview'] = "Perþiûrëti";
$lang['Confirm'] = "Patvirtinti";
$lang['Spellcheck'] = "Gramatika";
$lang['Yes'] = "Taip";
$lang['No'] = "Ne";
$lang['Enabled'] = "Ájungta";
$lang['Disabled'] = "Iðjungta";
$lang['Error'] = "Klaida";

$lang['Next'] = "Toliau";
$lang['Previous'] = "Atgal";
$lang['Goto_page'] = "Pereiti prie";
$lang['Joined'] = "Prisijungë";
$lang['IP_Address'] = "IP adresas";

$lang['Select_forum'] = "Pasirinkite forumà";
$lang['View_latest_post'] = "Perþiûrëti seniausià praneðimà";
$lang['View_newest_post'] = "Perþiûrëti naujausià praneðimà";
$lang['Page_of'] = "Puslapis <b>%d</b> ið <b>%d</b>"; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = "ICQ numeris";
$lang['AIM'] = "AIM adresas";
$lang['MSNM'] = "MSN Messenger";
$lang['YIM'] = "Yahoo Messenger";

$lang['Forum_Index'] = "Pagrindinis puslapis";  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = "Pradëti naujà temà";
$lang['Reply_to_topic'] = "Atsakyti á praneðimà";
$lang['Reply_with_quote'] = "Atsakyti su citata";

$lang['Click_return_topic'] = "Spauskite %sèia%s, jei norite gráþti prie praneðimo"; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = "Spauskite %sèia%s, jei norite pabandyti dar kartà";
$lang['Click_return_forum'] = "Spauskite %sèia%s, jei norite gráþti prie forumo";
$lang['Click_view_message'] = "Spauskite %sèia%s, jei norite perþiûrëti savo praneðimà";
$lang['Click_return_modcp'] = "Spauskite %sèia%s, jei norite gráþti prie moderatoriaus valdymo formos";
$lang['Click_return_group'] = "Spauskite %sèia%s, jei norite gráþti prie grupës informacijos";

$lang['Admin_panel'] = "Eiti á administratoriaus valdymo meniu";

$lang['Board_disable'] = "Atsipraðome, diskusijø lenta laikinai nepasiekiama. Pabandykite vëliau.";


//
// Global Header strings
//
$lang['Registered_users'] = "Registruoti vartotojai:";
$lang['Browsing_forum'] = "Vartotojai, perþiûrintys ðá forumà:";
$lang['Online_users_zero_total'] = "Ið viso dabar vartotojø <b>0</b>:: ";
$lang['Online_users_total'] = "Ið viso dabar vartotojø <b>%d</b>:: ";
$lang['Online_user_total'] = "Ið viso dabar vartotojø <b>%d</b>:: ";
$lang['Reg_users_zero_total'] = "0 registruotø, ";
$lang['Reg_users_total'] = "%d registruotø, ";
$lang['Reg_user_total'] = "%d registruotø, ";
$lang['Hidden_users_zero_total'] = "0 slaptø ir ";
$lang['Hidden_user_total'] = "%d slaptø ir ";
$lang['Hidden_users_total'] = "%d slaptø ir ";
$lang['Guest_users_zero_total'] = "0 sveèiø";
$lang['Guest_users_total'] = "%d sveèiø";
$lang['Guest_user_total'] = "%d sveèiø";
$lang['Record_online_users'] = "Daugiausia vartotojø (<b>%s</b>) buvo %s"; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = "%s<b>Administratorius</b>%s";
$lang['Mod_online_color'] = "%s<b>Moderatorius</b>%s";

$lang['You_last_visit'] = "Paskutiná kartà Jûs lankëtës %s"; // %s replaced by date/time
$lang['Current_time'] = "Dabar yra %s"; // %s replaced by time

$lang['Search_new'] = "Perþiûrëti naujus praneðimus nuo paskutinio apsilankymo";
$lang['Search_your_posts'] = "Perþiûrëti jûsø praneðimus";
$lang['Search_unanswered'] = "Perþiûrëti neatsakytus praneðimus";
$lang['View_last_24_hours'] = "Perþiûrëti paskutiniø 24 valandø praneðimus";

$lang['Register'] = "Registruotis";
$lang['Profile'] = "Apraðymas";
$lang['Edit_profile'] = "Redaguoti jûsø apraðymà";
$lang['Search'] = "Ieðkoti";
$lang['Memberlist'] = "Nariø sàraðas";
$lang['FAQ'] = "DUK";
$lang['BBCode_guide'] = "BBKodo apraðymas";
$lang['Usergroups'] = "Vartotojø grupës";
$lang['Last_Post'] = "Paskutinis praneðimas";
$lang['Moderator'] = "Moderatorius";
$lang['Moderators'] = "Moderatoriai";


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = "Mûsø vartotojai dar neparaðë praneðimø"; // Number of posts
$lang['Posted_articles_total'] = "Mûsø vartotojai ið viso paraðë <b>%d</b> praneðimus(ø)"; // Number of posts
$lang['Posted_article_total'] = "Mûsø vartotojai ið viso paraðë <b>%d</b> praneðimà"; // Number of posts
$lang['Registered_users_zero_total'] = "Mes neturime registruotø vartotojø"; // # registered users
$lang['Registered_users_total'] = "Mes turime <b>%d</b> registruotus(ø) vartotojus(ø)"; // # registered users
$lang['Registered_user_total'] = "Mes turime <b>%d</b> registruotà vartotojà"; // # registered users
$lang['Newest_user'] = "Naujausias registruotas vartotojas yra %s%s%s"; // a href, username, /a

$lang['No_new_posts_last_visit'] = "Naujø praneðimø po jûsø paskutinio apsilankymo nëra";
$lang['No_new_posts'] = "Naujø praneðimø nëra";
$lang['New_posts'] = "Yra naujø praneðimø";
$lang['New_post'] = "Naujas praneðimas";
$lang['No_new_posts_hot'] = "Naujø praneðimø nëra [ populiaru ]";
$lang['New_posts_hot'] = "Yra naujø praneðimø [ populiaru ]";
$lang['No_new_posts_locked'] = "Naujø praneðimø nëra [ uþdaryta ]";
$lang['New_posts_locked'] = "Yra naujø praneðimø [ uþdaryta ]";
$lang['Forum_is_locked'] = "Diskusija uþdaryta";


//
// Login
//
$lang['Enter_password'] = "Praðome áraðyti vartotojo vardà ir slaptaþodá";
$lang['Login'] = "Prisijungti";
$lang['Logout'] = "Atsijungti";

$lang['Forgotten_password'] = "Að pamirðau savo slaptaþodá";

$lang['Log_me_in'] = "Prijungti mane automatiðkai kiekvieno apsilankymo metu";

$lang['Error_login'] = "Jûs áraðëte neteisingà ar neaktyvø vartotojo vardà arba neteisingà slaptaþodá";


//
// Index page
//
$lang['Index'] = "Pagrindinis puslapis";
$lang['No_Posts'] = "Praneðimø nëra";
$lang['No_forums'] = "Èia nëra forumø";

$lang['Private_Message'] = "Asmeninis praneðimas";
$lang['Private_Messages'] = "Asmeniniai praneðimai";
$lang['Who_is_Online'] = "Ðiuo metu forume";

$lang['Mark_all_forums'] = "Paþymëti visus forumus kaip perskaitytus";
$lang['Forums_marked_read'] = "Visi forumai buvo paþymëti kaip perskaityti";


//
// Viewforum
//
$lang['View_forum'] = "Perþiûrëti forumà";

$lang['Forum_not_exist'] = "Jûsø pasirinktas forumas neegzistuoja";
$lang['Reached_on_error'] = "Ávyko klaida";

$lang['Display_topics'] = "Rodyti ankstesnius praneðimus";
$lang['All_Topics'] = "Visi praneðimai";

$lang['Topic_Announcement'] = "<b>Svarbu:</b>";
$lang['Topic_Sticky'] = "<b>Daþna tema:</b>";
$lang['Topic_Moved'] = "<b>Perkelta:</b>";
$lang['Topic_Poll'] = "<b>Apklausa:</b>";

$lang['Mark_all_topics'] = "Paþymëti visas temas kaip perskaitytas";
$lang['Topics_marked_read'] = "Visos temos ðiame forume paþymëtos kaip skaitytos";

$lang['Rules_post_can'] = "Jûs <b>galite</b> raðyti naujus praneðimus á ðá forumà";
$lang['Rules_post_cannot'] = "Jûs <b>negalite</b> raðyti naujø praneðimø á ðá forumà";
$lang['Rules_reply_can'] = "Jûs <b>galite</b> atsakinëti á praneðimus ðiame forume";
$lang['Rules_reply_cannot'] = "Jûs <b>negalite</b> atsakinëti á praneðimus ðiame forume";
$lang['Rules_edit_can'] = "Jûs <b>galite</b> redaguoti savo praneðimus ðiame forume";
$lang['Rules_edit_cannot'] = "Jûs <b>negalite</b> redaguoti savo praneðimø ðiame forume";
$lang['Rules_delete_can'] = "Jûs <b>galite</b> iðtrinti savo praneðimus ðiame forume";
$lang['Rules_delete_cannot'] = "Jûs <b>negalite</b> iðtrinti savo praneðimø ðiame forume";
$lang['Rules_vote_can'] = "Jûs <b>galite</b> dalyvauti apklausose ðiame forume";
$lang['Rules_vote_cannot'] = "Jûs <b>negalite</b> dalyvauti apklausose ðiame forume";
$lang['Rules_moderate'] = "Jûs <b>galite</b> %smoderuoti ðá forumà%s"; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = "Ðiame forume nëra temø.<br />Spauskite mygtukà <b>Nauja tema</b> ðiame puslapyje";


//
// Viewtopic
//
$lang['View_topic'] = "Perþiûrëti temà";

$lang['Guest'] = "Sveèias";
$lang['Post_subject'] = "Raðyti temà";
$lang['View_next_topic'] = "Rodyti kità praneðimà";
$lang['View_previous_topic'] = "Rodyti ankstesná praneðimà";
$lang['Submit_vote'] = "Balsuoti";
$lang['View_results'] = "Rodyti rezultatus";

$lang['No_newer_topics'] = "Naujesniø praneðimø ðiame forume nëra";
$lang['No_older_topics'] = "Senesniø praneðimø ðiame forume nëra";
$lang['Topic_post_not_exist'] = "Temos ar praneðimo, kurio ieðkote, nëra";
$lang['No_posts_topic'] = "Ðioje temoje praneðimø nëra";

$lang['Display_posts'] = "Rodyti praneðimus nuo ankstesnio";
$lang['All_Posts'] = "Visi praneðimai";
$lang['Newest_First'] = "Ið pradþiø naujesni";
$lang['Oldest_First'] = "Ið pradþiø senesni";

$lang['Back_to_top'] = "Atgal á virðø";

$lang['Read_profile'] = "Perþiûrëti vartotojo apraðymà";
$lang['Send_email'] = "Nusiøsti vartotojui el. laiðkà";
$lang['Visit_website'] = "Apsilankyti vartotojo tinklapyje";
$lang['ICQ_status'] = "ICQ bûsena";
$lang['Edit_delete_post'] = "Redaguoti ðá praneðimà";
$lang['View_IP'] = "Rodyti praneðimo autoriaus IP";
$lang['Delete_post'] = "Iðtrinti ðá praneðimà";

$lang['wrote'] = "raðo"; // proceeds the username and is followed by the quoted text
$lang['Quote'] = "Citata"; // comes before bbcode quote output.
$lang['Code'] = "Kodas"; // comes before bbcode code output.

$lang['Edited_time_total'] = "Paskutiná kartà redagavo %s, %s. Redaguota %d kartà"; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = "Paskutiná kartà redagavo %s, %s. Redaguota %d kartus(ø)"; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = "Uþdaryti ðià temà";
$lang['Unlock_topic'] = "Atidaryti ðià temà";
$lang['Move_topic'] = "Perkelti ðià temà";
$lang['Delete_topic'] = "Iðtrinti ðià temà";
$lang['Split_topic'] = "Iðskirti ðià temà";

$lang['Stop_watching_topic'] = "Nustoti sekti ðià temà";
$lang['Start_watching_topic'] = "Sekti ðios temos atsakymus";
$lang['No_longer_watching'] = "Jûs daugiau nesekate ðios temos";
$lang['You_are_watching'] = "Jûs dabar sekate ðià temà";

$lang['Total_votes'] = "Ið viso balsø";

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "Praneðimo turinys";
$lang['Topic_review'] = "Temos apþvalga";

$lang['No_post_mode'] = "Neávedëte praneðimo tipo"; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = "Pradëti naujà temà";
$lang['Post_a_reply'] = "Raðyti atsakymà";
$lang['Post_topic_as'] = "Temos tipas";
$lang['Edit_Post'] = "Redaguoti praneðimà";
$lang['Options'] = "Nustatymai";

$lang['Post_Announcement'] = "Svarbi!";
$lang['Post_Sticky'] = "Daþna";
$lang['Post_Normal'] = "Standartinë";

$lang['Confirm_delete'] = "Ar tikrai norite iðtrinti ðá praneðimà ar temà?";
$lang['Confirm_delete_poll'] = "Ar tikrai norite iðtrinti ðià apklausà?";

$lang['Flood_Error'] = "Jûs negalite raðyti naujo praneðimo taip greitai, praðome pabandyti ðiek tiek vëliau";
$lang['Empty_subject'] = "Jei norite pradëti naujà temà ar praneðimà, privalote áraðyti pavadinimà";
$lang['Empty_message'] = "Jûs turite kà nors paraðyti";
$lang['Forum_locked'] = "Ðis forumas uþdarytas. Jûs negalite raðyti, atsakyti ar redaguoti temos";
$lang['Topic_locked'] = "Ði tema uþdaryta. Jûs negalite redaguoti praneðimø ar raðyti atsakymø";
$lang['No_post_id'] = "Jûs turite pasirinkti praneðimà redagavimui";
$lang['No_topic_id'] = "Jûs turite pasirinkti temà atsakymui";
$lang['No_valid_mode'] = "Jûs galite tik raðyti, atsakyti, redaguoti arba cituoti praneðimus. Praðome gráþti atgal ir pabandyti dar kartà";
$lang['No_such_post'] = "Tokio praneðimo nëra. Praðome gráþti atgal ir pabandyti dar kartà";
$lang['Edit_own_posts'] = "Atsipraðome, bet Jûs galite redaguoti tik savo praneðimus";
$lang['Delete_own_posts'] = "Atsipraðome, bet Jûs galite iðtrinti tik savo praneðimus";
$lang['Cannot_delete_replied'] = "Atsipraðome, bet Jûs negalite iðtrinti praneðimø, á kuriuos jau atsakyta";
$lang['Cannot_delete_poll'] = "Atsipraðome, bet Jûs negalite iðtrinti aktyvios apklausos";
$lang['Empty_poll_title'] = "Jûs turite ávesti apklausos pavadinimà";
$lang['To_few_poll_options'] = "Jûs turite ávesti nors du apklausos parametrus";
$lang['To_many_poll_options'] = "Jûs nurodëte per daug apklausos parametrø";
$lang['Post_has_no_poll'] = "Ðis praneðimas neturi apklausos";
$lang['Already_voted'] = "Jûs jau balsavote";
$lang['No_vote_option'] = "Prieð balduodami turite pasirinkti punktà uþ kurá balsuojate";


$lang['Add_poll'] = "Pridëti apklausà";
$lang['Add_poll_explain'] = "Jeigu Jûs nenorite prijungti apklausos prie savo temos, palikite ðiuos laukus neuþpildytus";
$lang['Poll_question'] = "Apklausos klausimas";
$lang['Poll_option'] = "Apklausos parametras";
$lang['Add_option'] = "Pridëti parametrà";
$lang['Update'] = "Atnaujinti";
$lang['Delete'] = "Iðtrinti";
$lang['Poll_for'] = "Tæsti apklausà";
$lang['Days'] = "dienø"; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = "[ niekada nesibaigianèiai apklausai áveskite 0 arba palikite tuðèia ]";
$lang['Delete_poll'] = "Iðtrinti apklausà";

$lang['Disable_HTML_post'] = "Iðjungti HTML ðiame praneðime";
$lang['Disable_BBCode_post'] = "Iðjungti BBKodà ðiame praneðime";
$lang['Disable_Smilies_post'] = "Iðjungti ðypsenëles ðiame praneðime";

$lang['HTML_is_ON'] = "HTML yra <u>ÁJUNGTAS</u>";
$lang['HTML_is_OFF'] = "HTML yra <u>IÐJUNGTAS</u>";
$lang['BBCode_is_ON'] = "%sBBKodas%s yra <u>ÁJUNGTAS</u>"; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = "%sBBKodas%s yra <u>IÐJUNGTAS</u>";
$lang['Smilies_are_ON'] = "Ðypsenelës yra <u>ÁJUNGTOS</u>";
$lang['Smilies_are_OFF'] = "Ðypsenelës yra <u>IÐJUNGTOS</u>";

$lang['Attach_signature'] = "Pridëti paraðà (paraðai redaguojami apraðyme)";
$lang['Notify'] = "Perspëti, kai bus paraðytas atsakymas";
$lang['Delete_post'] = "Iðtrinti ðá praneðimà";

$lang['Stored'] = "Jûsø praneðimas buvo sëkmingai ádëtas";
$lang['Deleted'] = "Jûsø praneðimas buvo sëkmingai iðtrintas";
$lang['Poll_delete'] = "Jûsø apklausa buvo sëkmingai iðtrinta";
$lang['Vote_cast'] = "Jûsø balsas áskaièiuotas";

$lang['Topic_reply_notification'] = "Atsakymo perspëjimas";

$lang['bbcode_b_help'] = "Paryðkintas (bold) tekstas: [b]tekstas[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Pasviræs (italic) tekstas: [i]tekstas[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Pabrauktas (underline) tekstas: [u]tekstas[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Cituotas tekstas: [quote]tekstas[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Kodo rodymas: [code]kodas[/code]  (alt+c)";
$lang['bbcode_l_help'] = "Sàraðas: [list]tekstas[/list] (alt+l)";
$lang['bbcode_o_help'] = "Surûðiuotas sàraðas: [list=]tekstas[/list]  (alt+o)";
$lang['bbcode_p_help'] = "Ádëti paveiksliukà: [img]http://www.vieta_iki_paveiksliuko[/img]  (alt+p)";
$lang['bbcode_w_help'] = "Ádëti URL: [url]http://url[/url] arba [url=http://url]URL tekstas[/url]  (alt+w)";
$lang['bbcode_a_help'] = "Uþdaryti visas atidarytas BBKodo þymes (tag)";
$lang['bbcode_s_help'] = "Teksto spalva: [color=red]tekstas[/color]  Patarimas: jûs galite naudoti color=#FF0000";
$lang['bbcode_f_help'] = "Teksto dydis: [size=x-small]maþas tekstas[/size]";

$lang['Emoticons'] = "Ðypsenëlës";
$lang['More_emoticons'] = "Rodyti daugiau ðypsenëliø";

$lang['Font_color'] = "Ðrifto&nbsp;spalva";
$lang['color_default'] = "Pradinë";
$lang['color_dark_red'] = "Tamsiai raudona";
$lang['color_red'] = "Raudona";
$lang['color_orange'] = "Oranþinë";
$lang['color_brown'] = "Ruda";
$lang['color_yellow'] = "Geltona";
$lang['color_green'] = "Þalia";
$lang['color_olive'] = "Alyvinë";
$lang['color_cyan'] = "Ðviesiai mëlyna";
$lang['color_blue'] = "Mëlyna";
$lang['color_dark_blue'] = "Tamsiai mëlyna";
$lang['color_indigo'] = "Indigo";
$lang['color_violet'] = "Violetinë";
$lang['color_white'] = "Balta";
$lang['color_black'] = "Juoda";

$lang['Font_size'] = "Ðrifto&nbsp;dydis";
$lang['font_tiny'] = "Smulkus";
$lang['font_small'] = "Maþas";
$lang['font_normal'] = "Normalus";
$lang['font_large'] = "Didelis";
$lang['font_huge'] = "Milþiniðkas";

$lang['Close_Tags'] = "Uþdaryti þymenis (tags)";
$lang['Styles_tip'] = "Patarimas: stiliai gali bûti pritaikyti ir paþymëtam tekstui";


//
// Private Messaging
//
$lang['Private_Messaging'] = "Asmeninis susiraðinëjimas";

$lang['Login_check_pm'] = "Tikrinti asmeninius praneðimus";
$lang['New_pms'] = "Jûs turite naujø praneðimø [ %d ]"; // You have 2 new messages
$lang['New_pm'] = "Jûs turite naujà praneðimà [ %d ]"; // You have 1 new message
$lang['No_new_pm'] = "Jûs neturite naujø praneðimø";
$lang['Unread_pms'] = "Jûs turite neperskaitytø praneðimø %d";
$lang['Unread_pm'] = "Jûs turite neperskaitytà praneðimà %d";
$lang['No_unread_pm'] = "Jûs neturite neperskaitytø praneðimø";
$lang['You_new_pm'] = "Naujas asmeninis praneðimas laukia jûsø dëþutëje";
$lang['You_new_pms'] = "Nauji asmeniniai praneðimai laukia jûsø dëþutëje";
$lang['You_no_new_pm'] = "Naujø asmeniniø praneðimø nëra";

$lang['Unread_message'] = 'Neperskaityta þinutë';
$lang['Read_message'] = 'Perskaityta þinutë';

$lang['Read_pm'] = 'Skaityti praneðimà';
$lang['Post_new_pm'] = 'Siøsti praneðimà';
$lang['Post_reply_pm'] = 'Atsakyti á praneðimà';
$lang['Post_quote_pm'] = 'Cituoti praneðimà';
$lang['Edit_pm'] = 'Redaguoti praneðimà';

$lang['Inbox'] = "Inbox";
$lang['Outbox'] = "Outbox";
$lang['Savebox'] = "Savebox";
$lang['Sentbox'] = "Sentbox";
$lang['Flag'] = "";
$lang['Subject'] = "Temos pavadinimas";
$lang['From'] = "Nuo";
$lang['To'] = "Kam";
$lang['Date'] = "Data";
$lang['Mark'] = "Paþymëti";
$lang['Sent'] = "Iðsiøsta";
$lang['Saved'] = "Iðsaugota";
$lang['Delete_marked'] = "Iðtrinti paþymëtus";
$lang['Delete_all'] = "Iðtrinti visus";
$lang['Save_marked'] = "Iðsaugoti paþymëtus";
$lang['Save_message'] = "Iðsaugoti praneðimà";
$lang['Delete_message'] = "Iðtrinti praneðimà";

$lang['Display_messages'] = "Rodyti visus praneðimus ið paskutiniø"; // Followed by number of days/weeks/months
$lang['All_Messages'] = "Visi praneðimai";

$lang['No_messages_folder'] = "Praneðimø ðiame kataloge nëra";

$lang['PM_disabled'] = "Asmeninis susiraðinëjimas ðioje diskusijø lentoje iðjungtas";
$lang['Cannot_send_privmsg'] = "Atsipraðome, bet administratorius uþdraudë jums siøsti asmeninius praneðimus";
$lang['No_to_user'] = "Jûs neávedëte vartotojo vardo, kuriam skirta ði þinutë";
$lang['No_such_user'] = "Atsipraðome, bet toks vartotojas neegzistuoja";

$lang['Disable_HTML_pm'] = "Iðjungti HTML ðiame praneðime";
$lang['Disable_BBCode_pm'] = "Iðjungti BBKodà ðiame praneðime";
$lang['Disable_Smilies_pm'] = "Iðjungti ðypsenëles ðiame praneðime";

$lang['Message_sent'] = "Jûsø praneðimas iðsiøstas";

$lang['Click_return_inbox'] = "Spauskite %sèia%s, norëdami gráþti á dëþutæ";
$lang['Click_return_index'] = "Spauskite %sèia%s, norëdami gráþti á pagrindiná puslapá";

$lang['Send_a_new_message'] = "Siøsti naujà asmeniná praneðimà";
$lang['Send_a_reply'] = "Atsakyti á asmeniná praneðimà";
$lang['Edit_message'] = "Redaguoti asmeniná praneðimà";

$lang['Notification_subject'] = "Jûs gavote naujà asmeniná praneðimà";

$lang['Find_username'] = "Ieðkoti vartotojo vardo";
$lang['Find'] = "Ieðkoti";
$lang['No_match'] = "Nieko nerasta";

$lang['No_post_id'] = "Nebuvo nurodytas praneðimo ID";
$lang['No_such_folder'] = "Toks katalogas neegzistuoja";
$lang['No_folder'] = "Nenurodytas katalogas";

$lang['Mark_all'] = "Paþymëti viskà";
$lang['Unmark_all'] = "Nepaþymëti nieko";

$lang['Confirm_delete_pm'] = "Ar tikrai norite iðtrinti ðá praneðimà?";
$lang['Confirm_delete_pms'] = "Ar tikrai norite iðtrinti ðiuos praneðimus?";

$lang['Inbox_size'] = "Jûsø Inbox yra %d%% uþpildyta"; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = "Jûsø Sentbox yra %d%% uþpildyta";
$lang['Savebox_size'] = "Jûsø Savebox yra %d%% uþpildyta";

$lang['Click_view_privmsg'] = "Spauskite %sèia%s, jei norite pereiti prie Inbox";


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "Apraðymo perþiûra :: %s"; // %s is username
$lang['About_user'] = "Viskas apie %s"; // %s is username

$lang['Preferences'] = "Nustatymai";
$lang['Items_required'] = "Laukus paþymëtus * bûtina uþpildyti";
$lang['Registration_info'] = "Registracijos informacija";
$lang['Profile_info'] = "Apraðymo informacija";
$lang['Profile_info_warn'] = "Ðià informacijà galima perþiûrëti";
$lang['Avatar_panel'] = "Avataro valdymo pultas";
$lang['Avatar_gallery'] = "Avatarø galerija";

$lang['Website'] = "Interneto svetainë";
$lang['Location'] = "Miestas";
$lang['Contact'] = "Kontaktai";
$lang['Email_address'] = "El. paðto adresas";
$lang['Email'] = "El. paðtas";
$lang['Send_private_message'] = "Siøsti asmeniná praneðimà";
$lang['Hidden_email'] = "[ uþslaptinta ]";
$lang['Search_user_posts'] = "Ieðkoti ðio vartotojo praneðimø";
$lang['Interests'] = "Pomëgiai";
$lang['Occupation'] = "Pareigos";
$lang['Poster_rank'] = "Vartotojo rangas";

$lang['Total_posts'] = "Ið viso praneðimø";
$lang['User_post_pct_stats'] = "%.2f%% ið visø"; // 1.25% of total
$lang['User_post_day_stats'] = "%.2f praneðimø per dienà"; // 1.5 posts per day
$lang['Search_user_posts'] = "Ieðkoti visø vartotojo %s praneðimø"; // Find all posts by username

$lang['No_user_id_specified'] = "Atsipraðome, bet toks vartotojo vardas neegzistuoja";
$lang['Wrong_Profile'] = "Jûs negalite redaguoti svetimo apraðymo";

$lang['Only_one_avatar'] = "Gali bûti nurodytas tik vienas avataro tipas";
$lang['File_no_data'] = "Failas jûsø pateiktu URL adresu neturi jokiø duomenø";
$lang['No_connection_URL'] = "Prisijungti jûsø nurodyto URL adreso negalima";
$lang['Incomplete_URL'] = "URL adresas, kurá jûs ávedëte, yra nebaigtas";
$lang['Wrong_remote_avatar_format'] = "Neteisingas URL avataro adreso formatas";
$lang['No_send_account_inactive'] = "Atsipraðome, bet jûsø slaptaþodis neegzistuoja, nes jûsø apraðymas iðjungtas/neaktyvuotas. Praðome kreiptis á diskusijø administratoriø.";

$lang['Always_smile'] = "Visada ájungti ðypsenëles";
$lang['Always_html'] = "Visada ájungti HTML";
$lang['Always_bbcode'] = "Visada ájungti BBKodà";
$lang['Always_add_sig'] = "Visada pridëti mano paraðà";
$lang['Always_notify'] = "Visada perspëti mane apie atsakymus";
$lang['Always_notify_explain'] = "Jeigu á jûsø praneðimà bus atsakyta, sistema iðsiøs jums laiðkà. Tai galima keisti, kai raðote praneðimà";

$lang['Board_style'] = "Lentos stilius";
$lang['Board_lang'] = "Lentos kalba";
$lang['No_themes'] = "Duomenø bazëje nëra stiliø.";
$lang['Timezone'] = "Laiko juosta";
$lang['Date_format'] = "Datos formatas";
$lang['Date_format_explain'] = "Naudojama sintaksë identiðka PHP funkcijai <a href=\"http://www.php.net/date\" target=\"_other\">date()</a> (jeigu nieko nesuprantate apie PHP, nekeiskite ðio parametro)";
$lang['Signature'] = "Paraðas";
$lang['Signature_explain'] = "Ðá teksto blokà jûs galite pridëti prie savo praneðimø. Galioja %d simboliø limitas";
$lang['Public_view_email'] = "Visada rodyti mano el. paðto adresà";

$lang['Current_password'] = "Dabartinis slaptaþodis";
$lang['New_password'] = "Naujas slaptaþodis";
$lang['Confirm_password'] = "Patvirtinti slaptaþodá";
$lang['Confirm_password_explain'] = "Jûs turite ávesti dabartiná slaptaþodá, jei norësite já pasikeisti arba keisti savo el. paðto adresà";
$lang['password_if_changed'] = "Jums reikia nurodyti slaptaþodá, jeigu norite já pakeisti";
$lang['password_confirm_if_changed'] = "Jums reikia patvirtinti slaptaþodá, jeigu já pakeitëte virðuje";

$lang['Avatar'] = "Avataras";
$lang['Avatar_explain'] = "Rodo nedidelá paveiksliukà ðalia jûsø apraðymo. Vienu metu gali bûti rodomas tik vienas paveiksliukas, kurio plotis negali virðyti %d taðkø, o aukðtis - %d taðkø. Failo dydis negali virðyti %dKB."; $lang['Upload_Avatar_file'] = "Nusiøsti avataro failà ið savo kompiuterio";
$lang['Upload_Avatar_URL'] = "Nusiøsti avataro failà ið URL";
$lang['Upload_Avatar_URL_explain'] = "Áveskite URL, kur yra jûsø avataro paveiksliukas. Jis bus nukopijuotas á ðá tinklapá.";
$lang['Pick_local_Avatar'] = "Pasirinkti avataro paveiksliukà ið galerijos";
$lang['Link_remote_Avatar'] = "URL adresas iki nutolusio avataro";
$lang['Link_remote_Avatar_explain'] = "Áveskite puslapio, kurio avataro paveiksliukà jûs norite susieti, URL adresà.";
$lang['Avatar_URL'] = "Avataro paveiksliuko URL";
$lang['Select_from_gallery'] = "Pasirinkti avatarà ið galerijos";
$lang['View_avatar_gallery'] = "Rodyti galerijà";

$lang['Select_avatar'] = "Pasirinkti avatarà";
$lang['Return_profile'] = "Atðaukti avatarà";
$lang['Select_category'] = "Pasirinkti kategorijà";

$lang['Delete_Image'] = "Iðtrinti paveiksliukà";
$lang['Current_Image'] = "Dabartinis paveiksliukas";

$lang['Notify_on_privmsg'] = "Perspëti apie naujà asmeniná praneðimà";
$lang['Popup_on_privmsg'] = "Iððokantis langas apie naujà asmeniná praneðimà";
$lang['Popup_on_privmsg_explain'] = "Kai kurie trafaretai (templates) gali atidaryti naujà langà, kad informuotø jus apie naujà asmeniná praneðimà";
$lang['Hide_user'] = "Paslëpti jûsø bûsenà";

$lang['Profile_updated'] = "Jûsø apraðymas atnaujintas";
$lang['Profile_updated_inactive'] = "Jûsø apraðymas atnaujintas. Jûs pakeitëte svarbius parametrus, todël jûsø apraðymas dabar deaktyvotas. El. paðtu turëtumëte gauti laiðkà apie aktyvavimà. Jeigu reikia administratoriaus aktyvavimo, laukite, kol administratorius patvirtins jûsø pakeitimus.";

$lang['Password_mismatch'] = "Jûsø ávesti slaptaþodþiai nesutapo";
$lang['Current_password_mismatch'] = "Dabartinis jûsø ávestas slaptaþodis nesutampa su slaptaþodþiu ið duomenø bazës";
$lang['Password_long'] = "Jûsø slaptaþodá turi sudaryti ne daugiau kaip 32 simboliai";
$lang['Username_taken'] = "Atsipraðome, toks vartotojo vardas jau egzistuoja.";
$lang['Username_invalid'] = "Atsipraðome, bet ðiame vartotojo varde yra draudþiamas simbolis, pvz., \'.";
$lang['Username_disallowed'] = "Atsipraðome, bet toks vartotojo vardas buvo uþdraustas";
$lang['Email_taken'] = "Atsipraðome, bet toks el. paðto adresas jau uþregistruotas";
$lang['Email_banned'] = "Atsipraðome, bet ðis el. paðto adresas buvo uþblokuotas (banned)";
$lang['Email_invalid'] = "Atsipraðome, bet tai neteisingas el. paðto adresas";
$lang['Signature_too_long'] = "Jûsø paraðas per ilgas";
$lang['Fields_empty'] = "Jûs turite uþpildyti privalomus laukus";
$lang['Avatar_filetype'] = "Avataro failo tipas turi bûti .jpg, .gif arba .png";
$lang['Avatar_filesize'] = "Avataro paveiksliuko failo dydis turi bûti maþesnis negu %d KB"; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = "Avataras turi bûti maþesnis negu %d taðkø ploèio ir %d taðkø aukðèio";

$lang['Welcome_subject'] = "Sveiki atvykæ á %s diskusijas"; // Welcome to my.com forums
$lang['New_account_subject'] = "Naujo vartotojo apraðymas";
$lang['Account_activated_subject'] = "Vartotojo vardas aktyvuotas";

$lang['Account_added'] = "Aèiû, kad uþsiregistravote. Jûsø apraðymas sukurtas. Dabar galite prisijungti su savo vartotojo vardu ir slaptaþodþiu";
$lang['Account_inactive'] = "Jûsø apraðymas sukurtas. Ðios diskusijos reikalauja vartotojo vardo aktyvavimo. Aktyvavimo raktas buvo iðsiøstas el. paðto adresu, kurá nurodëte. Praðome patikrinti savo el. paðto dëþutæ";
$lang['Account_inactive_admin'] = "Jûsø apraðymas sukurtas. Vartotojo vardus ðiose diskusijose patvirtina administratorius. Ðiuo metu jam buvo iðsiøstas el. laiðkas. Jûs bûsite informuotas, kada apraðymas bus aktyvuotas";
$lang['Account_active'] = "Jûsø vartotojo vardas aktyvuotas. Aèiû uþ registracijà";
$lang['Account_active_admin'] = "Vartotojo vardas aktyvuotas";
$lang['Reactivate'] = "Aktyvuokite savo vartotojo vardà ið naujo!";
$lang['Already_activated'] = "Jûs jau aktyvavote savo vartotojo vardà";
$lang['COPPA'] = "Jûsø vartotojo vardas aktyvuotas, bet turi bûti dar patvirtintas. Daugiau informacijos rasite savo el. paðto dëþutëje.";

$lang['Registration'] = "Registracijos sàlygos";
$lang['Reg_agreement'] = "Ðiø diskusijø administratoriai ir moderatoriai visais bûdais stengiasi paðalinti netinkamas þinutes, taèiau neámanoma paðalinti ir perþiûrëti visø þinuèiø, todël jûs turite suprasti, kad visos þinutës ðiose diskusijose yra jø autoriø, o ne administratoriø ar moderatoriø nuomonë ir paþiûros (iðskyrus ðiø þmoniø þinutes). Taigi administratoriai ir/arba moderatoriai negali bûti atsakingi uþ jø turiná. <br /><br />Jûs sutinkate neraðyti áþeidþianèiø, neðvankiø, vulgariø, ðmeiþianèiø, grasinanèiø ir kitokiø vietinius ástatymus paþeidþianèiø þinuèiø. Prieðingu atveju tuojau pat bûsite blokuotas (banned) ir apie tai praneðta jûsø Interneto tiekëjui. Visø þinuèiø IP adresas yra áraðomas á duomenø bazæ. Jûs sutinkate, kad administratoriai ir/arba moderatoriai turi teisæ iðtrinti, redaguoti, perkelti arba uþdaryti betkurià temà/þinutæ, jeigu jie mano jog tai reikalinga. Kaip vartotojas sutinkate su tuo, kad bet kokia jûsø ávesta informacija bûtø saugoma duomenø bazëje. Ði informacija nebus suteikta jokioms treèioms ðalims, taèiau administratoriai ir/arba moderatoriai negali uþtikrinti visiðko informacijos saugumo.<br /><br />Ði diskusijø lenta naudoja sausainëlius (cookies). Juose nesaugoma jokia jûsø ávesta informacija. Sausainëliai naudojami tik kaip pagalbinë dizaino ir struktûros priemonë suteikdama jums patogumo. Jûsø el. paðto adresas naudojamas tik patvirtinti jûsø registracijos detales (taip pat atsiøsti jums naujà slaptaþodá, jeigu kartais uþmirðote senà).";

$lang['Agree_under_13'] = "Sutinku su ðiomis sàlygomis, man <b>maþiau</b> nei 13 metø";
$lang['Agree_over_13'] = "Sutinku su ðiomis sàlygomis, man <b>virð</b> 13 metø";
$lang['Agree_not'] = "Nesutinku su sàlygomis";

$lang['Wrong_activation'] = "Aktyvavimo raktas, kurá jûs pateikëte, neatitinka jokio rakto mûsø duomenø bazëje";
$lang['Send_password'] = "Iðsiøsti naujà slaptaþodá";
$lang['Password_updated'] = "Naujas slaptaþodis sukurtas, savo el. paðto dëþutëje rasite laiðkà su informacija apie aktyvavimà";
$lang['No_email_match'] = "Jûsø nurodytas el. paðto adresas neatitinka ðio vartotojo";
$lang['New_password_activation'] = "Naujo slaptaþodþio aktyvavimas";
$lang['Password_activated'] = "Jûsø apraðymas buvo aktyvuotas. Prisijungdami naudokitës slaptaþodþiu, kurá gavote el. paðtu";

$lang['Send_email_msg'] = "Nusiøsti praneðimà el. paðtu";
$lang['No_user_specified'] = "Nurodykite vartotojà";
$lang['User_prevent_email'] = "Ðis vartotojas nenori gauti el. paðto þinuèiø. Pabandykite nusiøsti jam asmeniná praneðimà";
$lang['User_not_exist'] = "Toks vartotojas neegzistuoja";
$lang['CC_email'] = "Nusiøsti sau ðios el. paðto þinutës kopijà";
$lang['Email_message_desc'] = "Ðis praneðimas bus iðsiøstas kaip paprastas tekstas, neraðykite jame jokiø HTML ar BBKodø.";
$lang['Flood_email_limit'] = "Ðiuo metu jûs negalite iðsiøsti dar vienos el. þinutës, pabandykite vëliau";
$lang['Recipient'] = "Gavëjas";
$lang['Email_sent'] = "El. laiðkas iðsiøstas";
$lang['Send_email'] = "Siøsti el. laiðkà";
$lang['Empty_subject_email'] = "Nurodykite laiðko temà";
$lang['Empty_message_email'] = "Paraðykite laiðkà";


//
// Memberslist
//
$lang['Select_sort_method'] = "Pasirinkite rûðiavimo bûdà";
$lang['Sort'] = "Rûðiuoti";
$lang['Sort_Top_Ten'] = "Aktyviausiøjø deðimtukas";
$lang['Sort_Joined'] = "Ástojimo data";
$lang['Sort_Username'] = "Vartotojo vardas";
$lang['Sort_Location'] = "Vieta";
$lang['Sort_Posts'] = "Praneðimø skaièius";
$lang['Sort_Email'] = "El. paðtas";
$lang['Sort_Website'] = "Tinklapis";
$lang['Sort_Ascending'] = "Didëjimo tvarka";
$lang['Sort_Descending'] = "Maþëjimo tvarka";
$lang['Order'] = "Tvarka";


//
// Group control panel
//
$lang['Group_Control_Panel'] = "Grupës valdymo pultas";
$lang['Group_member_details'] = "Grupës nariø apraðymas";
$lang['Group_member_join'] = "Prisijungti prie grupës";

$lang['Group_Information'] = "Grupës informacija";
$lang['Group_name'] = "Grupës pavadinimas";
$lang['Group_description'] = "Grupës apraðymas";
$lang['Group_membership'] = "Narystë grupëje";
$lang['Group_Members'] = "Grupës nariai";
$lang['Group_Moderator'] = "Grupës moderatorius";
$lang['Pending_members'] = "Laukiami nariai";

$lang['Group_type'] = "Grupës tipas";
$lang['Group_open'] = "Atvira grupë";
$lang['Group_closed'] = "Uþdara grupë";
$lang['Group_hidden'] = "Slapta grupë";

$lang['Current_memberships'] = "Dabartiniai nariai";
$lang['Non_member_groups'] = "Ne nariai";
$lang['Memberships_pending'] = "Narystës laukia";

$lang['No_groups_exist'] = "Grupiø nëra";
$lang['Group_not_exist'] = "Tokios grupës nëra";

$lang['Join_group'] = "Prisijungti prie grupës";
$lang['No_group_members'] = "Ði grupë neturi nariø";
$lang['Group_hidden_members'] = "Ði grupë yra slapta, jûs negalite matyti jos nariø";
$lang['No_pending_group_members'] = "Ði grupë neturi laukianèiø nariø";
$lang["Group_joined"] = "Jûs sëkmingai prisijungëte prie ðios grupës<br />Jums bus praneðta, kada jûsø ástojimà patvirtins grupës moderatorius.";
$lang['Group_request'] = "Gavome uþklausà dël prisijungimo prie jûsø grupës.";
$lang['Group_approved'] = "Jûsø uþklausa buvo patvirtinta.";
$lang['Group_added'] = "Jûs buvote prijungtas prie ðios grupës.";
$lang['Already_member_group'] = "Jûs jau esate ðios grupës narys";
$lang['User_is_member_group'] = "Vartotojas jau yra ðios grupës narys";
$lang['Group_type_updated'] = "Grupës tipas sëkmingai pakeistas.";

$lang['Could_not_add_user'] = "Jûsø pasirinktas vartotojas neegzistuoja";
$lang['Could_not_anon_user'] = "Jûs negalite sveèio padaryti grupës nariu";

$lang['Confirm_unsub'] = "Ar tikrai norite iðstoti ið grupës?";
$lang['Confirm_unsub_pending'] = "Jûsø ástojimas á ðià grupæ dar nebuvo patvirtintas. Ar tikrai norite iðstoti ið grupës?";

$lang['Unsub_success'] = "Jûs buvote iðmestas ið ðios grupës.";

$lang['Approve_selected'] = "Patvirtinti pasirinktus";
$lang['Deny_selected'] = "Uþdrausti pasirinktus";
$lang['Not_logged_in'] = "Áraðykite savo vardà bei slaptaþodá, jei norite prisijungti prie grupës.";
$lang['Remove_selected'] = "Iðtrinti pasirinktus";
$lang['Add_member'] = "Pridëti nará";
$lang['Not_group_moderator'] = "Jûs nesate ðios grupës moderatorius, todël negalite atlikti ðio veiksmo.";

$lang['Login_to_join'] = "Áraðykite savo vardà bei slaptaþodá, kad galëtumëte prijungti arba redaguoti grupës narius";
$lang['This_open_group'] = "Tai atvira grupë. Jûs galite tapti jos nariu";
$lang['This_closed_group'] = "Tai uþdara grupë. Vartotojai nepriimami";
$lang['This_hidden_group'] = "Tai slapta grupë. Automatiðkai prisijungti vartotojams draudþiama";
$lang['Member_this_group'] = "Jûs esate ðios grupës narys";
$lang['Pending_this_group'] = "Jûsø praðymas ástoti á ðià grupæ dar nepatvirtintas";
$lang['Are_group_moderator'] = "Jûs esate ðios grupës moderatorius";
$lang['None'] = "Nieko";

$lang['Subscribe'] = "Ástoti";
$lang['Unsubscribe'] = "Iðstoti";
$lang['View_Information'] = "Rodyti informacijà";


//
// Search
//
$lang['Search_query'] = "Paieðkos uþklausa";
$lang['Search_options'] = "Paieðkos parametrai";

$lang['Search_keywords'] = "Ieðkoti raktiniø þodþiø";
$lang['Search_keywords_explain'] = "Galite naudoti <u>AND</u>, norëdami apibûdinti þodþius, kurie privalo bûti rezultate. Taip pat galite naudoti <u>OR</u>, norëdami apibûdinti þodþius kurie gali bûti rezultate. Galite naudoti ir <u>NOT</u>. Juo apibûdinsite þodþius kuriø neturëtø bûti paieðkos rezultatuose. Simboliu * galima apibrëþti dalines reikðmes.";
$lang['Search_author'] = "Ieðkoti autoriaus";
$lang['Search_author_explain'] = "Naudokite * dalinëms reikðmëms rasti";

$lang['Search_for_any'] = "Ieðkoti bet kokiø terminø arba naudoti uþklausà";
$lang['Search_for_all'] = "Ieðkoti visø terminø";
$lang['Search_title_msg'] = "Ieðkoti temos pavadinimo ir þinutës teksto";
$lang['Search_msg_only'] = "Ieðkoti þinutës teksto";

$lang['Return_first'] = "Graþinti tik pirmus"; // followed by xxx characters in a select box
$lang['characters_posts'] = "praneðimø simbolius";

$lang['Search_previous'] = "Ieðkoti ið ankstesniø"; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = "Rûðiuoti pagal";
$lang['Sort_Time'] = "Praneðimo laikà";
$lang['Sort_Post_Subject'] = "Praneðimo pavadinimà";
$lang['Sort_Topic_Title'] = "Temos pavadinimà";
$lang['Sort_Author'] = "Autoriø";
$lang['Sort_Forum'] = "Forumà";

$lang['Display_results'] = "Rodyti rezultatus kaip";
$lang['All_available'] = "Visi leistini";
$lang['No_searchable_forums'] = "Jûs neturite teisës ieðkoti forumø ðioje diskusijø lentoje";

$lang['No_search_match'] = "Jûsø uþklausa neatitinka jokiø temø arba praneðimø esanèiø duomenø bazëje";
$lang['Found_search_match'] = "Buvo rasta %d rezultatas"; // eg. Search found 1 match
$lang['Found_search_matches'] = "Buvo rasta %d rezultatai(ø)"; // eg. Search found 24 matches

$lang['Close_window'] = "Uþdaryti langà";


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = "Atsipraðome, bet tik %s gali raðyti svarbias temas ðiame forume";
$lang['Sorry_auth_sticky'] = "Atsipraðome, bet tik %s gali raðyti daþnas temas ðiame forume";
$lang['Sorry_auth_read'] = "Atsipraðome, bet tik %s gali skaityti temas ðiame forume";
$lang['Sorry_auth_post'] = "Atsipraðome, bet tik %s gali kurti temas ðiame forume";
$lang['Sorry_auth_reply'] = "Atsipraðome, bet tik %s gali atsakyti á praneðimus ðiame forume";
$lang['Sorry_auth_edit'] = "Atsipraðome, bet tik %s gali redaguoti praneðimus ðiame forume";
$lang['Sorry_auth_delete'] = "Atsipraðome, bet tik %s gali trinti praneðimus ðiame forume";
$lang['Sorry_auth_vote'] = "Atsipraðome, bet tik %s gali balsuoti apklausose ðiame forume";

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = "<b>sveèiai</b>";
$lang['Auth_Registered_Users'] = "<b>registruoti vartotojai</b>";
$lang['Auth_Users_granted_access'] = "<b>vartotojai, turintys specialø priëjimà</b>";
$lang['Auth_Moderators'] = "<b>moderatoriai</b>";
$lang['Auth_Administrators'] = "<b>administratoriai</b>";

$lang['Not_Moderator'] = "Jûs nesate ðio forumo moderatorius";
$lang['Not_Authorised'] = "Neautorizuota";

$lang['You_been_banned'] = "Jûs buvote paðalintas ið ðio forumo.<br />Dël tolimesnës informacijos, praðome kreiptis á administratoriø.";


//
// Viewonline
//
$lang['Reg_users_zero_online'] = "Dabar diskusijose yra 0 registruotø ir "; // There ae 5 Registered and
$lang['Reg_users_online'] = "Dabar diskusijose yra %d registruoti(ø) ir "; // There ae 5 Registered and
$lang['Reg_user_online'] = "Dabar diskusijose yra %d registruotas ir "; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = "0 slaptø vartotojø"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d slapti(ø) vartotojai(ø)"; // 6 Hidden users online
$lang['Hidden_user_online'] = "%d slaptas vartotojas"; // 6 Hidden users online
$lang['Guest_users_online'] = "Dabar diskusijose yra %d sveèiai(ø)"; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = "Ðiuo metu diskusijose nëra sveèiø"; // There are 10 Guest users online
$lang['Guest_user_online'] = "Dabar diskusijose yra %d sveèias"; // There is 1 Guest user online
$lang['No_users_browsing'] = "Ðiuo metu nëra aktyviø vartotojø";

$lang['Online_explain'] = "Ðie duomenys pateikti pagal pastarøjø 5 minuèiø diskusijø aktyvumà";

$lang['Forum_Location'] = "Forume";
$lang['Last_updated'] = "Paskutiná kartà atnaujinta";

$lang['Forum_index'] = "Diskusijø pagrindiniame puslapyje";
$lang['Logging_on'] = "Jungiasi";
$lang['Posting_message'] = "Raðo praneðimà";
$lang['Searching_forums'] = "Ieðko diskusijose";
$lang['Viewing_profile'] = "Perþiûri apraðymà";
$lang['Viewing_online'] = "Perþiûri kas ðiuo metu narðo diskusijas";
$lang['Viewing_member_list'] = "Perþiûri nariø sàraðà";
$lang['Viewing_priv_msgs'] = "Skaito asmeninius praneðimus";
$lang['Viewing_FAQ'] = "Skaito DUK";


//
// Moderator Control Panel
//
$lang['Mod_CP'] = "Moderatoriaus valdymo pultas";
$lang['Mod_CP_explain'] = "Naudodamiesi ðia forma, galite moderuoti forumà. Galite uþdaryti, atidaryti, perkelti arba iðtrinti bet koká praneðimø skaièiø.";

$lang['Select'] = "Pasirinkti";
$lang['Delete'] = "Iðtrinti";
$lang['Move'] = "Perkelti";
$lang['Lock'] = "Uþrakinti";
$lang['Unlock'] = "Atrakinti";

$lang['Topics_Removed'] = "Pasirinktos temos buvo sëkmingai iðtrintos ið duomenø bazës.";
$lang['Topics_Locked'] = "Pasirinktos temos buvo uþrakintos";
$lang['Topics_Moved'] = "Pasirinktos temos buvo perkeltos";
$lang['Topics_Unlocked'] = "Pasirinktos temos buvo atrakintos";
$lang['No_Topics_Moved'] = "Temos nebuvo perkeltos";

$lang['Confirm_delete_topic'] = "Ar tikrai norite iðtrinti pasirinktas(à) temas(à)?";
$lang['Confirm_lock_topic'] = "Ar tikrai norite uþrakinti pasirinktas(à) temas(à)?";
$lang['Confirm_unlock_topic'] = "Ar tikrai norite atrakinti pasirinktas(à) temas(à)?";
$lang['Confirm_move_topic'] = "Ar tikrai norite perkelti pasirinktas(à) temas(à)?";

$lang['Move_to_forum'] = "Perkelti á forumà";
$lang['Leave_shadow_topic'] = "Palikti temos ðeðëlá sename forume.";

$lang['Split_Topic'] = "Temos iðskyrimo valdymo forma";
$lang['Split_Topic_explain'] = "Naudodamiesi ðia forma galite isskirstyti praneðimus á dvi dalis.";
$lang['Split_title'] = "Naujas temos pavadinimas";
$lang['Split_forum'] = "Forumas naujai temai";
$lang['Split_posts'] = "Iðskirti pasirinktus praneðimus";
$lang['Split_after'] = "Iðskirti ið pasirinktø praneðimø";
$lang['Topic_split'] = "Pasirinkta temas buvo sëkmingai iðskirta";

$lang['Too_many_error'] = "Jûs pasirinkote per daug praneðimø. Paskui galësite pasirinkti tik vienà praneðimà iðskyrimui!";

$lang['None_selected'] = "Jûs nepasirinkote në vieno praneðimo ðiai operacijai. Praðome gráþti atgal ir pasirinkti bent vienà.";
$lang['New_forum'] = "Naujas forumas";

$lang['This_posts_IP'] = "Ðio praneðimo IP adresas";
$lang['Other_IP_this_user'] = "Kiti IP adresai, ið kuriø raðë ðis vartotojas";
$lang['Users_this_IP'] = "Vartotojai raðæ ið ðio IP adreso";
$lang['IP_info'] = "IP adreso informacija";
$lang['Lookup_IP'] = "Perþiûrëti IP";


//
// Timezones ... for display on each page
//
$lang['All_times'] = "Visos datos yra %s"; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = "GMT - 12 valandø";
$lang['-11'] = "GMT - 11 valandø";
$lang['-10'] = "HST (Havajai)";
$lang['-9'] = "GMT - 9 valandos";
$lang['-8'] = "PST (JAV/Kanada)";
$lang['-7'] = "MST (JAV/Kanada)";
$lang['-6'] = "CST (JAV/Kanada)";
$lang['-5'] = "EST (JAV/Kanada)";
$lang['-4'] = "GMT - 4 valandos";
$lang['-3.5'] = "GMT - 3,5 valandos";
$lang['-3'] = "GMT - 3 valandos";
$lang['-2'] = "GMT - 2 valandos";
$lang['-1'] = "GMT - 1 valanda";
$lang['0'] = "GMT";
$lang['1'] = "CET (Europa)";
$lang['2'] = "GMT + 2 valandos";
$lang['3'] = "GMT + 3 valandos";
$lang['3.5'] = "GMT + 3,5 valandos";
$lang['4'] = "GMT + 4 valandos";
$lang['4.5'] = "GMT + 4,5 valandos";
$lang['5'] = "GMT + 5 valandos";
$lang['5.5'] = "GMT + 5,5 valandos";
$lang['6'] = "GMT + 6 valandos";
$lang['6.5'] = "GMT + 6,5 valandos";
$lang['7'] = "GMT + 7 valandos";
$lang['8'] = "WST (Australija)";
$lang['9'] = "GMT + 9 valandos";
$lang['9.5'] = "CST (Australija)";
$lang['10'] = "EST (Australija)";
$lang['11'] = "GMT + 11 valandø";
$lang['12'] = "GMT + 12 valandø";

// These are displayed in the timezone select box
$lang['tz']['-12'] = "(GMT -12:00 valandø) Eniwetok, Kwajalein";
$lang['tz']['-11'] = "(GMT -11:00 valandø) Ramiojo vandenyno salos, Samoa";
$lang['tz']['-10'] = "(GMT -10:00 valandø) Havajai";
$lang['tz']['-9'] = "(GMT -9:00 valandos) Aliaska";
$lang['tz']['-8'] = "(GMT -8:00 valandos) Ramiojo vandenyno laikas (JAV ir Kanada), Tijuana";
$lang['tz']['-7'] = "(GMT -7:00 valandos) Kalnø laikas (JAV ir Kanada), Arizona";
$lang['tz']['-6'] = "(GMT -6:00 valandos) Centrinis laikas (JAV ir Kanada), Meksikas";
$lang['tz']['-5'] = "(GMT -5:00 valandos) Rytø laikas (JAV ir Kanada), Bogota, Lima";
$lang['tz']['-4'] = "(GMT -4:00 valandos) Atlantinis laikas (Kanada), Karakasas, La Pazas";
$lang['tz']['-3.5'] = "(GMT -3:30 valandos) Niufaundlendas";
$lang['tz']['-3'] = "(GMT -3:00 valandos) Buenos Aires, Dþordþtaunas, Folklendo salos";
$lang['tz']['-2'] = "(GMT -2:00 valandos) Vidurio Atlantas, Ðventoji Elena";
$lang['tz']['-1'] = "(GMT -1:00 valanda) Azorai, Verdþio salos";
$lang['tz']['0'] = "(GMT) Kasablanka, Dublinas, Edinburgas, Londonas, Lisabona";
$lang['tz']['1'] = "(GMT +1:00 valanda) Amsterdamas, Berlynas, Briuselis, Madridas, Paryþius, Roma";
$lang['tz']['2'] = "(GMT +2:00 valandos) Kairas, Helsinkis, Kaliningradas, Pietø Afrika, Vilnius";
$lang['tz']['3'] = "(GMT +3:00 valandos) Bagdadas, Maskva, Nairobis";
$lang['tz']['3.5'] = "(GMT +3:30 valandos) Teheranas";
$lang['tz']['4'] = "(GMT +4:00 valandos) Abu Dabis, Baku, Tbilisis";
$lang['tz']['4.5'] = "(GMT +4:30 valandos) Kabulas";
$lang['tz']['5'] = "(GMT +5:00 valandos) Jekaterinburgas, Islamabadas, Taðkentas";
$lang['tz']['5.5'] = "(GMT +5:30 valandos) Bombëjus, Kalkuta, Naujasis Delis";
$lang['tz']['6'] = "(GMT +6:00 valandos) Alma Ata, Kolombas, Dþaka, Novosibirskas";
$lang['tz']['6.5'] = "(GMT +6:30 valandos) Rangûnas";
$lang['tz']['7'] = "(GMT +7:00 valandos) Bankokas, Hanojus, Dþakarta";
$lang['tz']['8'] = "(GMT +8:00 valandos) Hong Kongas, Pertas, Singapûras, Taipëjus";
$lang['tz']['9'] = "(GMT +9:00 valandos) Osaka, Seulas, Tokijas, Jakutskas";
$lang['tz']['9.5'] = "(GMT +9:30 valandos) Adelaidë, Darvinas";
$lang['tz']['10'] = "(GMT +10:00 valandø) Kanbera, Guama, Melburnas, Sidnëjus, Vladivostokas";
$lang['tz']['11'] = "(GMT +11:00 valandø) Magadanas, Naujoji Kaledonija, Solomono salos";
$lang['tz']['12'] = "(GMT +12:00 valandø) Ouklendas, Velingtonas, Fidþi, Marðalo salos";

$lang['datetime']['Sunday'] = "Sekmadienis";
$lang['datetime']['Monday'] = "Pirmadienis";
$lang['datetime']['Tuesday'] = "Antradienis";
$lang['datetime']['Wednesday'] = "Treèiadienis";
$lang['datetime']['Thursday'] = "Ketvirtadienis";
$lang['datetime']['Friday'] = "Penktadienis";
$lang['datetime']['Saturday'] = "Ðeðtadienis";
$lang['datetime']['Sun'] = "Sk.";
$lang['datetime']['Mon'] = "Pir.";
$lang['datetime']['Tue'] = "Antr.";
$lang['datetime']['Wed'] = "Tr.";
$lang['datetime']['Thu'] = "Kv.";
$lang['datetime']['Fri'] = "Pen.";
$lang['datetime']['Sat'] = "Ðt.";
$lang['datetime']['January'] = "Sausis";
$lang['datetime']['February'] = "Vasaris";
$lang['datetime']['March'] = "Kovas";
$lang['datetime']['April'] = "Balandis";
$lang['datetime']['May'] = "Geguþë";
$lang['datetime']['June'] = "Birþelis";
$lang['datetime']['July'] = "Liepa";
$lang['datetime']['August'] = "Rugpjûtis";
$lang['datetime']['September'] = "Rugsëjis";
$lang['datetime']['October'] = "Spalis";
$lang['datetime']['November'] = "Lapkritis";
$lang['datetime']['December'] = "Gruodis";
$lang['datetime']['Jan'] = "01";
$lang['datetime']['Feb'] = "02";
$lang['datetime']['Mar'] = "03";
$lang['datetime']['Apr'] = "04";
$lang['datetime']['May'] = "05";
$lang['datetime']['Jun'] = "06";
$lang['datetime']['Jul'] = "07";
$lang['datetime']['Aug'] = "08";
$lang['datetime']['Sep'] = "09";
$lang['datetime']['Oct'] = "10";
$lang['datetime']['Nov'] = "11";
$lang['datetime']['Dec'] = "12";

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = "Informacija";
$lang['Critical_Information'] = "Kritinë informacija";

$lang['General_Error'] = "Pagrindinë klaida!";
$lang['Critical_Error'] = "Kritinë klaida!";
$lang['An_error_occured'] = "Ávyko klaida!";
$lang['A_critical_error'] = "Ávyko kritinë klaida!";

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
// Social media
//
$lang['ICQ'] = 'ICQ Number';
$lang['FB'] = 'Facebook';
$lang['IG'] = 'Instagram';
$lang['PT'] = 'Pinterest';
$lang['TWR'] = 'X';
$lang['SKP'] = 'Skype';
$lang['TG'] = 'Telegram';
$lang['LI'] = 'LinkedIn';
$lang['TT'] = 'TikTok';
$lang['DC'] = 'Discord';
//
// That's all, Folks!
// -------------------------------------------------