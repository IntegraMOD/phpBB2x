<?php
/***************************************************************************
 *                            lang_main.php [Estonian]
 *                              -------------------
 *     begin                : Sun Aug 10 2003
 *     email                : admin@amphipolis.net
 *
 ****************************************************************************/

$lang['ENCODING'] = 'utf-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'j M Y'; // Seda tuleb muuta vastavalt vajadustele. Formaat on php date().

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION'] = 'Tõlkinud: ';

//
// Tavalised väljendid, neid
// kasutatakse mitmetel lehtedel
//
$lang['Forum'] = 'Alafoorum';
$lang['Category'] = 'Kategooria';
$lang['Topic'] = 'Teema';
$lang['Topics'] = 'Teemasid';
$lang['Replies'] = 'Vastuseid';
$lang['Views'] = 'Vaatamisi';
$lang['Post'] = 'Postitus';
$lang['Posts'] = 'Postitusi';
$lang['Posted'] = 'Postitatud';
$lang['Username'] = 'Kasutajanimi';
$lang['Password'] = 'Parool';
$lang['Email'] = 'E-mail';
$lang['Poster'] = 'Postitaja';
$lang['Author'] = 'Autor';
$lang['Time'] = 'Aeg';
$lang['Hours'] = 'Tundi';
$lang['Message'] = 'Teade';

$lang['1_Day'] = '1 Päev';
$lang['7_Days'] = '7 Päeva';
$lang['2_Weeks'] = '2 Nädalat';
$lang['1_Month'] = '1 Kuu';
$lang['3_Months'] = '3 Kuud';
$lang['6_Months'] = '6 Kuud';
$lang['1_Year'] = '1 Aasta';

$lang['Go'] = 'Mine';
$lang['Jump_to'] = 'Hüppa';
$lang['Submit'] = 'Saada';
$lang['Reset'] = 'Taasta';
$lang['Cancel'] = 'Katkesta';
$lang['Preview'] = 'Eelvaade';
$lang['Confirm'] = 'Kinnita';
$lang['Spellcheck'] = 'Õigekirja kontroll';
$lang['Yes'] = 'Jah';
$lang['No'] = 'Ei';
$lang['Enabled'] = 'Võimaldatud';
$lang['Disabled'] = 'Mittavõimaldatud';
$lang['Error'] = 'Viga';

$lang['Next'] = 'Järgmine';
$lang['Previous'] = 'Eelmine';
$lang['Goto_page'] = 'Mine lehele';
$lang['Joined'] = 'Liitunud';
$lang['IP_Address'] = 'IP Aadress';

$lang['Select_forum'] = 'Vali alafoorum';
$lang['View_latest_post'] = 'Vaata viimast postitust';
$lang['View_newest_post'] = 'Vaata uusimat postitust';
$lang['Page_of'] = 'Lehekülg <b>%d</b>, lehekülgi kokku <b>%d</b>'; // Asendub näiteks: Lehekülg 1, lehekülgi kokku 2

$lang['ICQ'] = 'ICQ Number';
$lang['AIM'] = 'AIM Aadress';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s ';  // %s asendub sinu lehe nimega. Näiteks 'sinulehe Foorumi Index';

$lang['Post_new_topic'] = 'Uus teema';
$lang['Reply_to_topic'] = 'Vasta teemale';
$lang['Reply_with_quote'] = 'Vasta viitega';

$lang['Click_return_topic'] = 'Vajuta %sSiia%s, et teema juurde tagasi pöörduda'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Vajuta %sSiia%s, et uuesti proovida';
$lang['Click_return_forum'] = 'Vajuta %sSiia%s, et minna tagasi alafoorumile';
$lang['Click_view_message'] = 'Vajuta %sSiia%s, et vaadata oma postitust';
$lang['Click_return_modcp'] = 'Vajuta %sSiia%s, et minna tagasi Moderaatori Kontrollpaneeli';
$lang['Click_return_group'] = 'Vajuta %sSiia%s, et minna tagasi grupi info juurde';

$lang['Admin_panel'] = 'Mine Administratsioonipaneeli';

$lang['Board_disable'] = 'Vabandame, aga foorum on ajutiselt suletud. Proovige hiljem uuesti.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Foorumil olevad liitunud kasutajad:';
$lang['Browsing_forum'] = 'Kasutajad seda foorumit lugemas:';
$lang['Online_users_zero_total'] = 'Foorumil pole ühtegi kasutajat :: ';
$lang['Online_users_total'] = 'Foorumis on hetkel kokku <b>%d</b> kasutajat :: ';
$lang['Online_user_total'] = 'Foorumis on hetkel <b>%d</b> kasutaja :: ';
$lang['Reg_users_zero_total'] = '0 Liitunud, ';
$lang['Reg_users_total'] = '%d Liitunud, ';
$lang['Reg_user_total'] = '%d Liitunud, ';
$lang['Hidden_users_zero_total'] = '0 Varjatud ja ';
$lang['Hidden_user_total'] = '%d Varjatud ja ';
$lang['Hidden_users_total'] = '%d Varjatud ja ';
$lang['Guest_users_zero_total'] = '0 Külalist';
$lang['Guest_users_total'] = '%d Külalist';
$lang['Guest_user_total'] = '%d Külalist';
$lang['Record_online_users'] = 'Rekordarv külastajaid(<b>%s</b>) oli siin foorumil %s'; // Esimene %s asendub kasutajate arvuga, teine kuupäevaga

$lang['Admin_online_color'] = '%sAdministraator%s';
$lang['Mod_online_color'] = '%sModeraator%s';

$lang['You_last_visit'] = 'Viimati külastasid %s'; // %s asendub kuupäeva/ajaga
$lang['Current_time'] = '%s'; // %s asendub ajaga

$lang['Search_new'] = 'Vaata peale eelmist külastust postitatud teateid';
$lang['Search_your_posts'] = 'Vaata oma postitusi';
$lang['Search_unanswered'] = 'Vaata vastamata teateid';

$lang['Register'] = 'Registreeri';
$lang['Profile'] = 'Profiil';
$lang['Edit_profile'] = 'Muuda oma profiili';
$lang['Search'] = 'Otsi';
$lang['Memberlist'] = 'Liikmete nimekiri';
$lang['FAQ'] = 'KKK';
$lang['BBCode_guide'] = 'BBCode Juhend';
$lang['Usergroups'] = 'Kasutajagrupid';
$lang['Last_Post'] = 'Viimane postitus';
$lang['Moderator'] = 'Moderaator';
$lang['Moderators'] = 'Moderaatorid';


//
// Statistika tekst
//
$lang['Posted_articles_zero_total'] = 'Pole tehtud ühtegi postitust'; // Postituste arv
$lang['Posted_articles_total'] = 'Kasutajad on postitanud <b>%d</b> teadet'; // Postituste arv
$lang['Posted_article_total'] = 'Kasutajad on postitanud <b>%d</b> teate'; // Postituste arv
$lang['Registered_users_zero_total'] = 'Pole ühtegi liitunud kasutajat'; // # liitunud kasutajat
$lang['Registered_users_total'] = 'Kokku on <b>%d</b> liitunud kasutajat'; // # liitunud kasutajat
$lang['Registered_user_total'] = 'Kokku on <b>%d</b> liitunud kasutaja'; // # liitunud kasutajat
$lang['Newest_user'] = 'Uusim liitunud kasutaja on <b>%s%s%s</b>'; // a href, kasutajanimi, /a 

$lang['No_new_posts_last_visit'] = 'Sisu eelmisest külastusest pole ühtegi uut teadet';
$lang['No_new_posts'] = 'Pole uusi teateid';
$lang['New_posts'] = 'Uued teated';
$lang['New_post'] = 'Uus teade';
$lang['No_new_posts_hot'] = 'Uusi postitusi pole [ Populaarne ]';
$lang['New_posts_hot'] = 'Uued postitused [ Populaarne ]';
$lang['No_new_posts_locked'] = 'Uusi postitusi pole [ Kinni ]';
$lang['New_posts_locked'] = 'Uued postitused [ Kinni ]';
$lang['Forum_is_locked'] = 'Alafoorum on suletud';


//
// Login
//
$lang['Enter_password'] = 'Palun sisestage oma kasutajanimi ja parool.';
$lang['Login'] = 'Logi sisse';
$lang['Logout'] = 'Logi välja';

$lang['Forgotten_password'] = 'Unustasin parooli';

$lang['Log_me_in'] = 'Automaatne sisselogimine';

$lang['Error_login'] = 'Sisestatud parool või kasutajanimi on vale.';


//
// Index page
//
$lang['Index'] = 'Esileht';
$lang['No_Posts'] = 'Postitusi pole';
$lang['No_forums'] = 'Sellel foorumil pole alafoorumeid';

$lang['Private_Message'] = 'Privaatsõnum';
$lang['Private_Messages'] = 'Privaatsõnumid';
$lang['Who_is_Online'] = 'Kes on foorumil';

$lang['Mark_all_forums'] = 'Märgi kõik alafoorumid loetuks';
$lang['Forums_marked_read'] = 'Kõik alafoorumid märgiti loetuks';


//
// Viewforum
//
$lang['View_forum'] = 'Vaata alafoorumit';

$lang['Forum_not_exist'] = 'Teie valitud alafoorumit ei eksisteeri.';
$lang['Reached_on_error'] = 'Olete siia lehele jõudnud vea tõttu.';

$lang['Display_topics'] = 'Reasta teemad eelmise järgi';
$lang['All_Topics'] = 'Kõik teemad';

$lang['Topic_Announcement'] = '<b>Teadaanne:</b>';
$lang['Topic_Sticky'] = '<b>Kleeps:</b>';
$lang['Topic_Moved'] = '<b>Liigutatud:</b>';
$lang['Topic_Poll'] = '<b>[ Küsitlus ]</b>';

$lang['Mark_all_topics'] = 'Märgi kõik teemad loetuks';
$lang['Topics_marked_read'] = 'Selle alafoorumi teemad märgiti loetuks';

$lang['Rules_post_can'] = 'Sa <b>saad</b> teha siia alafoorumisse uusi teemasid';
$lang['Rules_post_cannot'] = 'Sa <b>ei saa</b> teha siia alafoorumisse uusi teemasid';
$lang['Rules_reply_can'] = 'Sa <b>saad</b> vastata siinsetele teemadele';
$lang['Rules_reply_cannot'] = 'Sa <b>ei saa</b> vastata siinsetele teemadele';
$lang['Rules_edit_can'] = 'Sa <b>saad</b> muuta oma postitusi';
$lang['Rules_edit_cannot'] = 'Sa <b>ei saa</b> muuta oma postitusi';
$lang['Rules_delete_can'] = 'Sa <b>saad</b> kustutada oma postitusi';
$lang['Rules_delete_cannot'] = 'Sa <b>ei saa</b> kustutada oma postitusi';
$lang['Rules_vote_can'] = 'Sa <b>saad</b> hääletada küsitlustes';
$lang['Rules_vote_cannot'] = 'Sa <b>ei saa</b> hääletada küsitlustes';
$lang['Rules_moderate'] = 'Sa <b>saad</b> %sseda alafoorumit modereerida%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'Selles alafoorumis pole postitusi.<br />Vajuta <b>Uus teema</b> lingile, et teha uus postitus.';


//
// Viewtopic
//
$lang['View_topic'] = 'Vaata teemat';

$lang['Guest'] = 'Külaline';
$lang['Post_subject'] = 'Teema';
$lang['View_next_topic'] = 'Vaata järgmist teemat';
$lang['View_previous_topic'] = 'Vaata eelmist teemat';
$lang['Submit_vote'] = 'Hääleta';
$lang['View_results'] = 'Vaata tulemusi';

$lang['No_newer_topics'] = 'Selles alafoorumis pole uuemaid teateid';
$lang['No_older_topics'] = 'Selles alafoorumis pole vanemaid teateid';
$lang['Topic_post_not_exist'] = 'Sinu soovitud teated või teemat ei ole olemas';
$lang['No_posts_topic'] = 'Selles teemas pole postitusi';

$lang['Display_posts'] = 'Reasta teated';
$lang['All_Posts'] = 'Kõik teated';
$lang['Newest_First'] = 'Uuemad ees';
$lang['Oldest_First'] = 'Vanemad ees';

$lang['Back_to_top'] = 'Tagasi üles';

$lang['Read_profile'] = 'Vaata kasutaja profiili'; 
$lang['Send_email'] = 'Saada kasutajale e-mail';
$lang['Visit_website'] = 'Vaata liikme veebilehte';
$lang['ICQ_status'] = 'ICQ Staatus';
$lang['Edit_delete_post'] = 'Muuda/Kustuta postitus';
$lang['View_IP'] = 'Vaata postitaja IP aadressi';
$lang['Delete_post'] = 'Kustuta postitus';

$lang['wrote'] = 'kirjutas'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Tsiteerin:'; // comes before bbcode quote output.
$lang['Code'] = 'Kood'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Viimati muutis seda %s (%s). Kokku muudetud %d kord'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Viimati muutis seda %s (%s). Kokku muudetud %d korda'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Sulge teema';
$lang['Unlock_topic'] = 'Ava teema';
$lang['Move_topic'] = 'Liiguta teema';
$lang['Delete_topic'] = 'Kustuta teema';
$lang['Split_topic'] = 'Poolita teema';

$lang['Stop_watching_topic'] = 'Lõpeta teema jälgimine';
$lang['Start_watching_topic'] = 'Jälgi sellesse teemasse postitatud vastuseid';
$lang['No_longer_watching'] = 'Sa ei jälgi enam seda teemat';
$lang['You_are_watching'] = 'Sa jälgid nüüd seda teemat';

$lang['Total_votes'] = 'Kokku Hääli';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Teate sisu';
$lang['Topic_review'] = 'Teema ülevaade';

$lang['No_post_mode'] = 'Ühtegi postitusviisi ei valitud'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Tee uus teema';
$lang['Post_a_reply'] = 'Vasta';
$lang['Post_topic_as'] = 'Tee teema';
$lang['Edit_Post'] = 'Muuda teadet';
$lang['Options'] = 'Valikud';

$lang['Post_Announcement'] = 'Teadaanne';
$lang['Post_Sticky'] = 'Kleeps';
$lang['Post_Normal'] = 'Tavaline';

$lang['Confirm_delete'] = 'Oled sa kindel, et soovid seda teadet kustutada?';
$lang['Confirm_delete_poll'] = 'Oled sa kindel, et soovid seda küsitlust kustutada?';

$lang['Flood_Error'] = 'Nii väikese vahega ei saa järjestikuseid teateid postitada. Palun oodake natuke ja proovige uuesti.';
$lang['Empty_subject'] = 'Sa pead uuele teemale ka pealkirja panema.';
$lang['Empty_message'] = 'Uut teemat tehes pead sa ka mingi teate kirjutama.';
$lang['Forum_locked'] = 'See alafoorum on suletud: siia ei saa teha teemasid ega neile vastata.';
$lang['Topic_locked'] = 'See teema on suletud: sa ei saa postitusi lisada ega muuta.';
$lang['No_post_id'] = 'Sa pead muutmiseks valima postituse';
$lang['No_topic_id'] = 'Sa pead valima teema, millesse vastata';
$lang['No_valid_mode'] = 'Sa saad ainult postitada, tsiteerida, muuta ja vastata teadetele. Palun proovige uuesti.';
$lang['No_such_post'] = 'Sellist postitust ei ole. Palun proovige uuesti.';
$lang['Edit_own_posts'] = 'Vabandame aga te saate muuta ainult oma postitusi.';
$lang['Delete_own_posts'] = 'Vabandame aga te saate kustutada ainult oma postitusi.';
$lang['Cannot_delete_replied'] = 'Vabandame aga te ei saa kustutada teateid, millele on vastatud.';
$lang['Cannot_delete_poll'] = 'Vabandame aga te ei saa kustutada aktiivset küsitlust.';
$lang['Empty_poll_title'] = 'Sa pead küsitlusele ka pealkirja panema.';
$lang['To_few_poll_options'] = 'Sa pead sisestama vähemalt kaks valikvastust.';
$lang['To_many_poll_options'] = 'Sa üritasid sisestada liiga palju valikvastuseid.';
$lang['Post_has_no_poll'] = 'Selles postituses pole küsitlust.';
$lang['Already_voted'] = 'Sa oled selles küsitluses juba hääletanud.';
$lang['No_vote_option'] = 'Sa pead hääletades valima ühe variandi.';

$lang['Add_poll'] = 'Lisa Küsitlus';
$lang['Add_poll_explain'] = 'Kui sa ei soovi teemasse küsitlust lisada, jäta see väli tühjaks.';
$lang['Poll_question'] = 'Küsimus';
$lang['Poll_option'] = 'Valikvastus';
$lang['Add_option'] = 'Lisa valikvastus';
$lang['Update'] = 'Uuenda';
$lang['Delete'] = 'Kustuta';
$lang['Poll_for'] = 'Küsitlus on aktiivne';
$lang['Days'] = 'Päeva'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Sisesta 0 või jäta tühjaks mitteaeguva küsitluse jaoks]';
$lang['Delete_poll'] = 'Kustuta Küsitlus';

$lang['Disable_HTML_post'] = 'Keela Postituses HTML';
$lang['Disable_BBCode_post'] = 'Keela Postituses BBCode';
$lang['Disable_Smilies_post'] = 'Keela Postituses Emotikonid';

$lang['HTML_is_ON'] = 'HTML on <u>SEES</u>';
$lang['HTML_is_OFF'] = 'HTML on <u>VÄLJAS</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s on <u>SEES</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s on <u>VÄLJAS</u>';
$lang['Smilies_are_ON'] = 'Emotikonid on <u>SEES</u>';
$lang['Smilies_are_OFF'] = 'Emotikonid on <u>VÄLJAS</u>';

$lang['Attach_signature'] = 'Lisa signatuur (signatuure saab muuta oma profiilist)';
$lang['Notify'] = 'Teata, kui postitusele vastatakse';
$lang['Delete_post'] = 'Kustuta postitus';

$lang['Stored'] = 'Teade on edukalt sisestatud.';
$lang['Deleted'] = 'Teade on edukalt kustutatud.';
$lang['Poll_delete'] = 'Küsitlus on edukalt kustutatud.';
$lang['Vote_cast'] = 'Hääl on arvesse võetud.';

$lang['Topic_reply_notification'] = 'Teemale Vastamise Teatis';

$lang['bbcode_b_help'] = 'Bold tekst: [b]tekst[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Kursiivis tekst: [i]tekst[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Allajoonitud tekst: [u]tekst[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Tsitaat: [quote]tekst[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Kood: [code]kood[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Nimekiri: [list]tekst[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Korrastatud nimekiri: [list=]tekst[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Pilt: [img]http://pildi_aadress[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Sisesta link: [url]http://aadress[/url] or [url=http://aadress]Lingi Tekst[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Sulge kõik avatud BBCode käsud';
$lang['bbcode_s_help'] = 'Fondi värv: [color=red]tekst[/color]  Vihje: saab kasutada ka värve kujul=#FF0000';
$lang['bbcode_f_help'] = 'Fondi suurus: [size=x-small]väike tekst[/size]';

$lang['Emoticons'] = 'Emotikonid';
$lang['More_emoticons'] = 'Vaata kõiki emotikone';

$lang['Font_color'] = 'Fondi värv';
$lang['color_default'] = 'Tavaline';
$lang['color_dark_red'] = 'Tumepunane';
$lang['color_red'] = 'Punane';
$lang['color_orange'] = 'Oranþ';
$lang['color_brown'] = 'Pruun';
$lang['color_yellow'] = 'Kollane';
$lang['color_green'] = 'Roheline';
$lang['color_olive'] = 'Oliiv';
$lang['color_cyan'] = 'Helesinine';
$lang['color_blue'] = 'Sinine';
$lang['color_dark_blue'] = 'Tumesinine';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'VLilla';
$lang['color_white'] = 'Valge';
$lang['color_black'] = 'Must';

$lang['Font_size'] = 'Fondi suurus';
$lang['font_tiny'] = 'Pisike';
$lang['font_small'] = 'Väike';
$lang['font_normal'] = 'Tavaline';
$lang['font_large'] = 'Suur';
$lang['font_huge'] = 'Hiiglaslik';

$lang['Close_Tags'] = 'Sulge Käsud';
$lang['Styles_tip'] = 'Vihje: Valitud tekstile saab kiiresti stiile lisada.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Privaatsõnumid';

$lang['Login_check_pm'] = 'Privaatsõnumite lugemiseks logi sisse';
$lang['New_pms'] = 'Sul on %d uut teadet'; // You have 2 new messages
$lang['New_pm'] = 'Sul on %d uus teade'; // You have 1 new message
$lang['No_new_pm'] = 'Sul ei ole uusi sõnumeid';
$lang['Unread_pms'] = 'Sul on %d lugemata teadet';
$lang['Unread_pm'] = 'Sul on %d lugemata teade';
$lang['No_unread_pm'] = 'Sul ei ole lugemata teateid';
$lang['You_new_pm'] = 'Uus privaatsõnum ootab sind Postkastis';
$lang['You_new_pms'] = 'Uued privaatsõnumid ootavad sind Postkastis';
$lang['You_no_new_pm'] = 'Sulle ei ole uusi privaatsõnumeid';

$lang['Unread_message'] = 'Lugemata sõnum';
$lang['Read_message'] = 'Loetud sõnum';

$lang['Read_pm'] = 'Loe sõnumit';
$lang['Post_new_pm'] = 'Saada sõnum';
$lang['Post_reply_pm'] = 'Vasta sõnumile';
$lang['Post_quote_pm'] = 'Tsiteeri sõnumit';
$lang['Edit_pm'] = 'Muuda teadet';

$lang['Inbox'] = 'Postkast';
$lang['Outbox'] = 'Outbox';
$lang['Savebox'] = 'Salvestatud';
$lang['Sentbox'] = 'Saadetud';
$lang['Flag'] = 'Märgi';
$lang['Subject'] = 'Pealkiri';
$lang['From'] = 'Kellelt';
$lang['To'] = 'Kellele';
$lang['Date'] = 'Kuupäev';
$lang['Mark'] = 'Märgi';
$lang['Sent'] = 'Saadetud';
$lang['Saved'] = 'Salvestatud';
$lang['Delete_marked'] = 'Kustuta märgitud';
$lang['Delete_all'] = 'Kustuta Kõik';
$lang['Save_marked'] = 'Salvesta Märgitud'; 
$lang['Save_message'] = 'Salvesta Sõnum';
$lang['Delete_message'] = 'Kustuta Sõnum';

$lang['Display_messages'] = 'Näita teateid alates'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Kõik teated';

$lang['No_messages_folder'] = 'Siin kaustas pole uusi sõnumeid';

$lang['PM_disabled'] = 'Sõnumite saatmine on siin foorumil keelatud.';
$lang['Cannot_send_privmsg'] = 'Vabandame aga administraator on keelanud sul privaatsõnumite saatmise.';
$lang['No_to_user'] = 'Sa pead märkima saaja kasutajanime.';
$lang['No_such_user'] = 'Vabandame aga sellist kasutajat ei ole.';

$lang['Disable_HTML_pm'] = 'Keela HTML selles sõnumis';
$lang['Disable_BBCode_pm'] = 'Keela BBCode selles sõnumis';
$lang['Disable_Smilies_pm'] = 'Keela emotikonid selles sõnumis';

$lang['Message_sent'] = 'Su sõnum on saadetud.';

$lang['Click_return_inbox'] = 'Vajuta %sSiia%s, et minna oma Postkasti juurde';
$lang['Click_return_index'] = 'Vajuta %sSiia%s, et minna esilehele';

$lang['Send_a_new_message'] = 'Saada uus privaatsõnum';
$lang['Send_a_reply'] = 'Vasta privaatsõnumile';
$lang['Edit_message'] = 'Muuda sõnumit';

$lang['Notification_subject'] = 'Uus Privaatsõnum Saabus!';

$lang['Find_username'] = 'Leia kasutajanimi';
$lang['Find'] = 'Leia';
$lang['No_match'] = 'Ei leitud ühtegi.';

$lang['No_post_id'] = 'Postituse ID polnud märgitud';
$lang['No_such_folder'] = 'Sellist folderit ei ole';
$lang['No_folder'] = 'NFolderit ei täpsustatud';

$lang['Mark_all'] = 'Märgi kõik';
$lang['Unmark_all'] = 'Eemalda kõigilt märgistus';

$lang['Confirm_delete_pm'] = 'Oled sa kindel, et soovid seda teadet kustutada?';
$lang['Confirm_delete_pms'] = 'Oled sa kindel, et soovid neid teateid kustutada?';

$lang['Inbox_size'] = 'Su Postkast on %d%% täis'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Su saadetud kirjade kaust on %d%% täis'; 
$lang['Savebox_size'] = 'YSu salvestatud kirjade kaust on %d%% täis'; 

$lang['Click_view_privmsg'] = 'Vajuta %sSiia%s et minna oma Postkasti juurde';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Kasutaja Profiil :: %s'; // %s is username 
$lang['About_user'] = 'Kõik kasutaja %s kohta'; // %s is username

$lang['Preferences'] = 'Eelistused';
$lang['Items_required'] = 'Tärniga * tähistatud lahtrid on kohustuslikud.';
$lang['Registration_info'] = 'Liitumisinfo';
$lang['Profile_info'] = 'Profiili info';
$lang['Profile_info_warn'] = 'See informatsioon on avalik';
$lang['Avatar_panel'] = 'Avatari kontrollpaneel';
$lang['Avatar_gallery'] = 'Avataride galerii';

$lang['Website'] = 'Koduleht';
$lang['Location'] = 'Asukoht';
$lang['Contact'] = 'Võta ühendust kasutajaga';
$lang['Email_address'] = 'Mailiaadress';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = 'Saada privaatsõnum';
$lang['Hidden_email'] = '[ VarjOtsi selle kasutaja postitusi';
$lang['Interests'] = 'Huvid';
$lang['Occupation'] = 'Amet'; 
$lang['Poster_rank'] = 'Tiitel';

$lang['Total_posts'] = 'Postitusi kokku';
$lang['User_post_pct_stats'] = '%.2f%% kõigist postitustest'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f postitust päevas'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Leia kõik kasutaja %s postitused'; // Find all posts by username

$lang['No_user_id_specified'] = 'Vabandame, aga sellist kasutajat ei ole.';
$lang['Wrong_Profile'] = 'YSa ei saa võõrast profiili muuta.';

$lang['Only_one_avatar'] = 'Ainult ühte liiki avatar on lubatud';
$lang['File_no_data'] = 'Sinu antud aadressil olev fail on tühi';
$lang['No_connection_URL'] = 'Sinu antud aadressiga ei saadud ühendust';
$lang['Incomplete_URL'] = 'Sinu antud aadress on poolik';
$lang['Wrong_remote_avatar_format'] = 'Ebakorrektne avatari aadress';
$lang['No_send_account_inactive'] = 'Vabandame, aga sinu parooli ei saa taastada, kuna su konto ei ole aktiivne.';

$lang['Always_smile'] = 'Alati luba emotikone';
$lang['Always_html'] = 'Alati luba HTMLi';
$lang['Always_bbcode'] = 'Alati luba BBCode';
$lang['Always_add_sig'] = 'Alati lisa allkiri';
$lang['Always_notify'] = 'Teata mulle vastustest';
$lang['Always_notify_explain'] = 'Saada mulle kiri, kui keegi vastab teemadele, kuhu mina olen kirjutanud.';

$lang['Board_style'] = 'Foorumi Stiil';
$lang['Board_lang'] = 'Foorumi keel';
$lang['No_themes'] = 'Andmebaasis pole stiile';
$lang['Timezone'] = 'Ajatsoon';
$lang['Date_format'] = 'Kuupäeva formaat';
$lang['Date_format_explain'] = 'Kasuta samu sümboleid mis PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> funktsiooni puhul.';
$lang['Signature'] = 'Allkiri';
$lang['Signature_explain'] = 'See on tekst, mis lisatakse su postitustele. Maksimaalselt %d sümbolit';
$lang['Public_view_email'] = 'Alati näita mu e-maili';

$lang['Current_password'] = 'Praegune parool';
$lang['New_password'] = 'Uus parool';
$lang['Confirm_password'] = 'Parool uuesti';
$lang['Confirm_password_explain'] = 'Sa pead täpsustama oma praeguse parooli, kui sa soovid oma e-maili või parooli muuta';
$lang['password_if_changed'] = 'Parooli on vaja ainult selle muutmisel';
$lang['password_confirm_if_changed'] = 'Parooli on vaja korrata ainult siis, kui sa seda muutsid';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Saad kuvada väikse omavalitud pildi postituste kõrvale. Maksimaalne laius on %d pixlit, maksimaalne kõrgus on %d pixlit ja faili suurus peab jääma alla %d KB.';
$lang['Upload_Avatar_file'] = 'Uploadi avatar oma arvutist';
$lang['Upload_Avatar_URL'] = 'Uploadi avatar internetiaadressilt';
$lang['Upload_Avatar_URL_explain'] = 'Sisesta avatari aadress. See kopeeritakse siia.';
$lang['Pick_local_Avatar'] = 'Vali avatar galeriist';
$lang['Link_remote_Avatar'] = 'Lingi lehevälisele avatarile';
$lang['Link_remote_Avatar_explain'] = 'Sisesta avatari aadress.';
$lang['Avatar_URL'] = 'Avatari URL';
$lang['Select_from_gallery'] = 'Vali avatar galeriist';
$lang['View_avatar_gallery'] = 'Näita galeriid';

$lang['Select_avatar'] = 'Vali avatar';
$lang['Return_profile'] = 'CKatkesta';
$lang['Select_category'] = 'Vali kategooria';

$lang['Delete_Image'] = 'Kustuta Pilt';
$lang['Current_Image'] = 'Praegune pilt';

$lang['Notify_on_privmsg'] = 'Teavita uue privaatsõnumi saabumisest';
$lang['Popup_on_privmsg'] = 'Uue privaatsõnumi saabudes avaneb pop-up'; 
$lang['Popup_on_privmsg_explain'] = 'Mõnede stiilide puhul võib avaneda privaatsõnumi saabumise puhul pop-up aken.';
$lang['Hide_user'] = 'Varja oma foorumilolekut';

$lang['Profile_updated'] = 'Su profiil on uuendatud';
$lang['Profile_updated_inactive'] = 'Su profiil on uuendatud. Sa muutsid tähtsaid andmeid ja seetõttu pole su konto enam aktiivne. Selle aktiveerimiseks kontrolli oma e-maili , et seda aktiveerida. Kui on vaja administraatori poolt aktiveerimist, siis oota kuni ta seda teeb.';

$lang['Password_mismatch'] = 'Sinu sisestatud paroolid ei kattunud.';

$lang['Current_password_mismatch'] = 'Sa sisestasid vale parooli.';
$lang['Password_long'] = 'Parool ei tohi olla pikem kui 32 tähemärki.';
$lang['Too_many_registers'] = 'Sa oled üritanud liiga palju kordi registreeruda. Palun proovi hiljem uuesti.';
$lang['Username_taken'] = 'Vabandame, aga see kasutajanimi on juba kasutusel.';
$lang['Username_invalid'] = 'Vabandame, aga sümbolid nagu \' on keelatud.';
$lang['Username_disallowed'] = 'Vabandame, aga see kasutajanimi on keelatud.';
$lang['Email_taken'] = 'Vabandame, aga see e-mail on juba kasutusel.';
$lang['Email_banned'] = 'Vabandame, aga see e-mail on bannitud.';
$lang['Email_invalid'] = 'Vabandame, aga teie sisestatud e-mail ei ole korrektne.';
$lang['Signature_too_long'] = 'Su signatuur on liiga pikk.';
$lang['Fields_empty'] = 'Sa pead vajalikud väljad ära täitma';
$lang['Avatar_filetype'] = 'Avatari failitüüp peab olema .jpg, .gif või .png';
$lang['Avatar_filesize'] = 'Avatari failisuurus peab olema alla %d KB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Avatari peab olema vähem kui %d pikslit lai ja %d pikslit kõrge'; 

$lang['Welcome_subject'] = 'Teretulemast %s Foorumisse'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Uus kasutaja';
$lang['Account_activated_subject'] = 'Konto aktiveeritud';

$lang['Account_added'] = 'Sinu konto on loodud. Võid nüüd sisse logida.';
$lang['Account_inactive'] = 'Sinu konto on loodud. Selle aktiveerimiseks kontrolli oma e-maili. Sealt leiad täpsemad juhised.';
$lang['Account_inactive_admin'] = 'Sinu konto on loodud. See vajab administraatori poolt aktiveerimist, enne kui saad seda kasutada. Teda on sellest teavitatud.';
$lang['Account_active'] = 'Sinu konto on nüüd aktiivne';
$lang['Account_active_admin'] = 'Konto on aktiveeritud';
$lang['Reactivate'] = 'Taasaktiveeri konto!';
$lang['Already_activated'] = 'Sa oled oma konto juba aktiveerinud';
$lang['COPPA'] = 'Sinu konto on loodud aga see tuleb heaks kiita. Palun kontrolli oma e-maili juhiste saamiseks.';

$lang['Registration'] = 'Registreerimise nõuded';
$lang['Reg_agreement'] = 'Selle foorumi administraatorid ja moderaatorid annavad oma parima, et eemaldada siit ebasobilik materjal. Siiski on võimatu kõiki postitusi läbi vaadata. Seepärast pead sa nõustuma, et administraatorid, moderaatorid ja webmasterid ei vastuta siinsete postituste sisu eest ja need ei esinda nende huve.<br /><br />Sul ei ole lubatud postitada sündusetuid, solvavaid, viha õhutavaid, ähvardavaid, seksuaalseid või muid materjale, mis võivad olla vastuolus kehtivate seadustega. Seda eirates võid sa saada kohese ja alatise banni ja sinu interneti teenusepakkujat teavitatakse sellest. Iga postituse IP aadress salvestatakse, et aidata neid tingimusi täide viia. Sa nõustud, et webmasteritel, administraatoritel ja moderaatoritel on igal ajal õigus eemaldada, muuta, liigutada või sulgeda iga teemat, kui nad seda vajalikuks peavad. Kasutajana nõustud sa, et sinu informatsioon talletatakse andmebaasis. Ilma sinu nõusolekuta ei jagata seda informatsiooni kõrvalistele isikutele aga foorumi meeskond ei ole vastutav potentsiaalsete häkkimiste eest, mille kaudu võib infot lekkida.<br /><br />See foorum kasutab küpsiseid, milles salvestatakse sinu arvutis informatsiooni. Need ei sisalda personaalset infot. E-maili aadressi kasutatakse ainult registreerimisel ja parooli muutmisel ning taastamisel.<br /><br />Registreerides nõustud sa nende tingimustega.';

$lang['Agree_under_13'] = 'Ma nõustun nende tingimustega ja olen <b>noorem</b> kui 13 aastat vana';
$lang['Agree_over_13'] = 'Ma nõustun nende tingimustega ja olen <b>vanem</b> või <b>täpselt</b> 13 aastat vana';
$lang['Agree_not'] = 'Ma ei nõustu nende tingimustega';

$lang['Wrong_activation'] = 'Aktiveeriisnumber ei kattu ühegi andmebaasis olevaga.';
$lang['Send_password'] = 'Saada mulle uus parool'; 
$lang['Password_updated'] = 'Uus parool on loodud. Täpsema info saamiseks kontrolli oma e-maili.';
$lang['No_email_match'] = 'Sinu antd e-mail ei kattu selle kasutaja e-mailiga.';
$lang['New_password_activation'] = 'Uue parooli aktiveerimine';
$lang['Password_activated'] = 'Sinu konto on taas aktiveeritud. Sisse logimiseks kasuta e-mailis saadud parooli.';

$lang['Send_email_msg'] = 'Saada e-mail';
$lang['No_user_specified'] = 'Kasutajat ei täpsustatud';
$lang['User_prevent_email'] = 'See kasutaja ei soovi saada e-maile. Proovi talle privaatsõnumit saata.';
$lang['User_not_exist'] = 'Sellist kasutajat ei ole';
$lang['CC_email'] = 'Saada koopia kirjast iseendale';
$lang['Email_message_desc'] = 'See teade saadetakse tavatekstina. Ära kirjuta sinna HTMLi või BBCode-i.';
$lang['Flood_email_limit'] = 'Sa ei saa hetkel uut e-maili saata. Proovi hiljem uuesti.';
$lang['Recipient'] = 'Saaja';
$lang['Email_sent'] = 'E-mail on saadetud.';
$lang['Send_email'] = 'Saada e-mail';
$lang['Empty_subject_email'] = 'Sa pead e-maili teema märkima.';
$lang['Empty_message_email'] = 'Sa pead sisestama sõnumi.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Sisestatud kood oli vale';
$lang['Too_many_registers'] = 'Sa oled üritanud liiga palju kordi registreerida. Proovi hiljem uuesti.';
$lang['Confirm_code_impaired'] = 'Kui sul on nägemisprobleemid või pole võimeline seda koodi lugema, kontakteeru %sAdministraatoriga%s.';
$lang['Confirm_code'] = 'Kinnituskood';
$lang['Confirm_code_explain'] = 'Sisesta kood nii nagu sa seda näed. Suurtel ja väikestel tähtedel ei ole vahet ja nullil on diagonaalne kriips keskelt läbi.';



//
// Memberslist
//
$lang['Select_sort_method'] = 'Vali sorteerimismeetod';
$lang['Sort'] = 'Sorteeri';
$lang['Sort_Top_Ten'] = 'Postitajate Top 10';
$lang['Sort_Joined'] = 'Liitumiskuupäev';
$lang['Sort_Username'] = 'Kasutajanimi';
$lang['Sort_Location'] = 'Asukoht';
$lang['Sort_Posts'] = 'Postituste arv';
$lang['Sort_Email'] = 'E-mail';
$lang['Sort_Website'] = 'Koduleht';
$lang['Sort_Ascending'] = 'Tõusev';
$lang['Sort_Descending'] = 'Kahanev';
$lang['Order'] = 'Järjekord';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Grupi Kontrollpaneel';
$lang['Group_member_details'] = 'Grupi Liikmete Info';
$lang['Group_member_join'] = 'Liitu Grupiga';

$lang['Group_Information'] = 'Grupi Info';
$lang['Group_name'] = 'Grupi nimi';
$lang['Group_description'] = 'Grupi kirjeldus';
$lang['Group_membership'] = 'Grupi liikmeskond';
$lang['Group_Members'] = 'Grupi liikmed';
$lang['Group_Moderator'] = 'Grupi moderaator';
$lang['Pending_members'] = 'Ootavad liikmed';

$lang['Group_type'] = 'Grupi liik';
$lang['Group_open'] = 'Avatud';
$lang['Group_closed'] = 'Suletud';
$lang['Group_hidden'] = 'Varjatud';

$lang['Current_memberships'] = 'Grupid, kus sa oled liige';
$lang['Non_member_groups'] = 'Grupid, kus sa ei ole liige';
$lang['Memberships_pending'] = 'Ootel olevad grupid';

$lang['No_groups_exist'] = 'Ühtegi gruppi ei ole';
$lang['Group_not_exist'] = 'Sellist kasutajagruppi ei ole';

$lang['Join_group'] = 'Liitu grupiga';
$lang['No_group_members'] = 'Selles grupis ei ole liikmeid';
$lang['Group_hidden_members'] = 'See grupp on peidetud; Sa ei saa selle liikmeid vaadata';
$lang['No_pending_group_members'] = 'Sellel grupil pole ühtegi liiget ootel';
$lang['Group_joined'] = 'Sa oled edukalt selle grupiga liitunud.<br />Sulle teatatakse, kui su liitumine grupi moderaatori poolt heaks kiidetakse.';
$lang['Group_request'] = 'Sinu gruppi soovitakse liituda.';
$lang['Group_approved'] = 'Sind on gruppi vastu võetud.';
$lang['Group_added'] = 'Sind on lisatud sellesse kasutajagruppi.'; 
$lang['Already_member_group'] = 'Sa juba oled selle grupi liige';
$lang['User_is_member_group'] = 'Kasutaja on juba selle grupi liige';
$lang['Group_type_updated'] = 'Su Grupi liik edukalt muudetud.';
$lang['Could_not_add_user'] = 'Sinu valitud kasutajat ei ole.';
$lang['Could_not_anon_user'] = 'Anonüümset inimest ei saa teha grupi liikmeks.';

$lang['Confirm_unsub'] = 'Oled sa kindel, et soovid sellest grupist lahkuda?';
$lang['Confirm_unsub_pending'] = 'Sinu liitumist pole veel heaks kiidetud; oled sa kindel, et soovid grupist lahkuda?';

$lang['Unsub_success'] = 'Sa lahkusid grupist.';

$lang['Approve_selected'] = 'Võta valitud vastu';
$lang['Deny_selected'] = 'Keela valitud';
$lang['Not_logged_in'] = 'Grupiga liitumiseks pead olema sisse logitud.';
$lang['Remove_selected'] = 'Eemalda valitud';
$lang['Add_member'] = 'Lisa Liige';
$lang['Not_group_moderator'] = 'Sul ei ole selleks piisavalt volitusi.';

$lang['Login_to_join'] = 'Logi sisse et liituda või korrastada gruppe';
$lang['This_open_group'] = 'See on avatud grupp: kliki, et liituda';
$lang['This_closed_group'] = 'See on suletud grupp: uusi liikmeid ei võeta';
$lang['This_hidden_group'] = 'See on varjatud grupp: kasutajate automaatne lisamine ei ole lubatud';
$lang['Member_this_group'] = 'Sa oled selle grupi liige';
$lang['Pending_this_group'] = 'Sa oled selles grupis ootel';
$lang['Are_group_moderator'] = 'Sa oled grupi moderaator';
$lang['None'] = 'Puudub';

$lang['Subscribe'] = 'Liitu';
$lang['Unsubscribe'] = 'Lahku';
$lang['View_Information'] = 'Vaata infot';


//
// Search
//
$lang['Search_query'] = 'Otsing';
$lang['Search_options'] = 'Otsingu valikud';

$lang['Search_keywords'] = 'Otsi Märksõnu';
$lang['Search_keywords_explain'] = 'Sa saad kasutada <u>AND</u>, et defineerida sõnu, mis peavad vastuses olema. Kasuta <u>OR</u>, defineerimaks sõnu, mis võivad vastuses olla ja <u>NOT</u>, et märkida sõnu, mida ei tohi olla. Kasuta * , kui otsid osalisi vasteid';
$lang['Search_author'] = 'Otsi Autorit';
$lang['Search_author_explain'] = 'Kasuta *, kui otsid osalisi vasteid';

$lang['Search_for_any'] = 'Otsi kõiki sõnu või kasuta sisestust nii nagu see on';
$lang['Search_for_all'] = 'Otsi kõiki sõnu';
$lang['Search_title_msg'] = 'Otsi teemade pealkirjade ja postituste hulgast';
$lang['Search_msg_only'] = 'Otsi ainult postitustest';

$lang['Return_first'] = 'Kuva esimesed'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'tähemärki postitustest';

$lang['Search_previous'] = 'Otsi alates'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sorteeri';
$lang['Sort_Time'] = 'Postituse Aeg';
$lang['Sort_Post_Subject'] = 'Pealjkiri';
$lang['Sort_Topic_Title'] = 'Teema';
$lang['Sort_Author'] = 'Autor';
$lang['Sort_Forum'] = 'Alafoorum';

$lang['Display_results'] = 'Kuva vastused';
$lang['All_available'] = 'Kõik võimalikud';
$lang['No_searchable_forums'] = 'Sul ei ole õigus kõigist alafoorumitest otsida.';

$lang['No_search_match'] = 'Ei leitud ühtegi tulemust';
$lang['Found_search_match'] = 'Otsing leidis %d vastuse'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Otsing leidis %d vastust'; // eg. Search found 24 matches

$lang['Close_window'] = 'Sulge Aken';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Vabandame, aga ainult %s saavad siia alafoorumisse teatisi postitada.';
$lang['Sorry_auth_sticky'] = 'Vabandame, aga ainult %s saavad siia alafoorumisse kleepse postitada.'; 
$lang['Sorry_auth_read'] = 'Vabandame, aga ainult %s saavad seda alafoorumit lugeda.'; 
$lang['Sorry_auth_post'] = 'Vabandame, aga ainult %s saavad siia alafoorumisse teemasid teha.'; 
$lang['Sorry_auth_reply'] = 'Vabandame, aga ainult %s saavad siin alafoorumis postitstele vastata.';
$lang['Sorry_auth_edit'] = 'Vabandame, aga ainult %s saavad siin postitusi muuta.'; 
$lang['Sorry_auth_delete'] = 'Vabandame, aga ainult %s saavad siin postitusi kustutada.';
$lang['Sorry_auth_vote'] = 'Vabandame, aga ainult %s saavad siin alafoorumis hääletada.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anonüümsed kasutajad</b>';
$lang['Auth_Registered_Users'] = '<b>rliitunud kasutajad</b>';
$lang['Auth_Users_granted_access'] = '<b>eriõigustega kasutajad</b>';
$lang['Auth_Moderators'] = '<b>moderaatorid</b>';
$lang['Auth_Administrators'] = '<b>administraatorid</b>';

$lang['Not_Moderator'] = 'Sa ei ole selle alafoorumi moderaator.';
$lang['Not_Authorised'] = 'Ei ole volitusi seda teha';

$lang['You_been_banned'] = 'Sind on sellelt foorumilt bannitud.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Foorumil pole ühtegi registreeritud kasutajat, '; // There are 0 Registered and
$lang['Reg_users_online'] = 'Foorumil on %d liitunud kasutajat, '; // There are 5 Registered and
$lang['Reg_user_online'] = 'Foorumil on %d liitunud kasutaja, '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = 'pole ühtegi varjatud kasutajat.'; // 0 Hidden users online
$lang['Hidden_users_online'] = '%d varjatud kasutajat.'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d varjatud kasutaja.'; // 1 Hidden users online
$lang['Guest_users_online'] = '%d külalist'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Pole ühtegi külalist'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d külaline'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Hetkel pole ühtegi kasutajat foorumil';

$lang['Online_explain'] = 'Andmed põhinevad viimase viie minuti põhjal';

$lang['Forum_Location'] = 'Alafoorumi Asukoht';
$lang['Last_updated'] = 'Viimati uuendatud';

$lang['Forum_index'] = 'Pealehel';
$lang['Logging_on'] = 'Logib sisse';
$lang['Posting_message'] = 'Postitab teadet';
$lang['Searching_forums'] = 'Kasutab Otsingut';
$lang['Viewing_profile'] = 'Vaatab Porfiili';
$lang['Viewing_online'] = 'Vaatab foorumil olijate nimekirja';
$lang['Viewing_member_list'] = 'Vaatab liikmete nimekirja';
$lang['Viewing_priv_msgs'] = 'Loeb privaatsõnumeid';
$lang['Viewing_FAQ'] = 'Loeb KKK';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderaatori Kontrollpaneel';
$lang['Mod_CP_explain'] = 'Siin saad sa teostada massmodereerimist - korraga kustutada, liigutada, sulgeda või avada suure hulga teemasid.';

$lang['Select'] = 'Vali';
$lang['Delete'] = 'Kustuta';
$lang['Move'] = 'Liiguta';
$lang['Lock'] = 'Sulge';
$lang['Unlock'] = 'Ava';

$lang['Topics_Removed'] = 'Valitud teemad on edukalt eemaldatud.';
$lang['Topics_Locked'] = 'Valitud teemad suleti.';
$lang['Topics_Moved'] = 'Valitud teemad liigutati.';
$lang['Topics_Unlocked'] = 'Valitud teemad avati.';
$lang['No_Topics_Moved'] = 'Ühtegi teemat ei liigutatud.';

$lang['Confirm_delete_topic'] = 'Oled sa kindel, et soovid valitud teema(d) eemaldada?';
$lang['Confirm_lock_topic'] = 'Oled sa kindel, et soovid valitud teema(d) sulgeda?';
$lang['Confirm_unlock_topic'] = 'Oled sa kindel, et soovid valitud teema(d) avada?';
$lang['Confirm_move_topic'] = 'Oled sa kindel, et soovid valitud teema(d) liigutada?';

$lang['Move_to_forum'] = 'Liiguta alafoorumisse';
$lang['Leave_shadow_topic'] = 'Jäta link vanasse alafoorumisse.';

$lang['Split_Topic'] = 'Teema Poolitamise Kontrollpaneel';
$lang['Split_Topic_explain'] = 'Siin saad jagada teema pooleks. Selleks vali vastavad postitused või märgi üks, mille juurest poolitatakse';
$lang['Split_title'] = 'Uue teema pealkiri';
$lang['Split_forum'] = 'Uue teema alafoorum';
$lang['Split_posts'] = 'Poolita valitud teated';
$lang['Split_after'] = 'Poolita valitud teate juurest';
$lang['Topic_split'] = 'Teema on edukalt poolitatud';

$lang['Too_many_error'] = 'Sa valisid liiga palju postitusi. Ühest kohast poolitamiseks pead sa valima ainult ühe!';

$lang['None_selected'] = 'Sa pead valima teema.';
$lang['New_forum'] = 'Uus alafoorum';

$lang['This_posts_IP'] = 'Selle postituse IP';
$lang['Other_IP_this_user'] = 'Teised IP aadressid, millelt see kasutaja on postitanud';
$lang['Users_this_IP'] = 'Teised kasutajad, kes on sellelt IP-lt postitanud';
$lang['IP_info'] = 'IP Info';
$lang['Lookup_IP'] = 'Otsi IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Kõik ajad on %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Tundi';
$lang['-11'] = 'GMT - 11 Tundi';
$lang['-10'] = 'GMT - 10 Tundi';
$lang['-9'] = 'GMT - 9 Tundi';
$lang['-8'] = 'GMT - 8 Tundi';
$lang['-7'] = 'GMT - 7 Tundi';
$lang['-6'] = 'GMT - 6 Tundi';
$lang['-5'] = 'GMT - 5 Tundi';
$lang['-4'] = 'GMT - 4 Tundi';
$lang['-3.5'] = 'GMT - 3.5 Tundi';
$lang['-3'] = 'GMT - 3 Tundi';
$lang['-2'] = 'GMT - 2 Tundi';
$lang['-1'] = 'GMT - 1 Tundi';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 Tund';
$lang['2'] = 'GMT + 2 Tundi';
$lang['3'] = 'GMT + 3 Tundi';
$lang['3.5'] = 'GMT + 3.5 Tundi';
$lang['4'] = 'GMT + 4 Tundi';
$lang['4.5'] = 'GMT + 4.5 Tundi';
$lang['5'] = 'GMT + 5 Tundi';
$lang['5.5'] = 'GMT + 5.5 Tundi';
$lang['6'] = 'GMT + 6 Tundi';
$lang['6.5'] = 'GMT + 6.5 Tundi';
$lang['7'] = 'GMT + 7 Tundi';
$lang['8'] = 'GMT + 8 Tundi';
$lang['9'] = 'GMT + 9 Tundi';
$lang['9.5'] = 'GMT + 9.5 Tundi';
$lang['10'] = 'GMT + 10 Tundi';
$lang['11'] = 'GMT + 11 Tundi';
$lang['12'] = 'GMT + 12 Tundi';
$lang['13'] = 'GMT + 13 Tundi';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 Tundi';
$lang['tz']['-11'] = 'GMT - 11 Tundi';
$lang['tz']['-10'] = 'GMT - 10 Tundi';
$lang['tz']['-9'] = 'GMT - 9 Tundi';
$lang['tz']['-8'] = 'GMT - 8 Tundi';
$lang['tz']['-7'] = 'GMT - 7 Tundi';
$lang['tz']['-6'] = 'GMT - 6 Tundi';
$lang['tz']['-5'] = 'GMT - 5 Tundi';
$lang['tz']['-4'] = 'GMT - 4 Tundi';
$lang['tz']['-3.5'] = 'GMT - 3.5 Tundi';
$lang['tz']['-3'] = 'GMT - 3 Tundi';
$lang['tz']['-2'] = 'GMT - 2 Tundi';
$lang['tz']['-1'] = 'GMT - 1 Tundi';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 Tund';
$lang['tz']['2'] = 'GMT + 2 Tundi';
$lang['tz']['3'] = 'GMT + 3 Tundi';
$lang['tz']['3.5'] = 'GMT + 3.5 Tundi';
$lang['tz']['4'] = 'GMT + 4 Tundi';
$lang['tz']['4.5'] = 'GMT + 4.5 Tundi';
$lang['tz']['5'] = 'GMT + 5 Tundi';
$lang['tz']['5.5'] = 'GMT + 5.5 Tundi';
$lang['tz']['6'] = 'GMT + 6 Tundi';
$lang['tz']['6.5'] = 'GMT + 6.5 Tundi';
$lang['tz']['7'] = 'GMT + 7 Tundi';
$lang['tz']['8'] = 'GMT + 8 Tundi';
$lang['tz']['9'] = 'GMT + 9 Tundi';
$lang['tz']['9.5'] = 'GMT + 9.5 Tundi';
$lang['tz']['10'] = 'GMT + 10 Tundi';
$lang['tz']['11'] = 'GMT + 11 Tundi';
$lang['tz']['12'] = 'GMT + 12 Tundi';
$lang['tz']['13'] = 'GMT + 13 Tundi';

$lang['datetime']['Sunday'] = 'Pühapäev';
$lang['datetime']['Monday'] = 'Esmaspäev';
$lang['datetime']['Tuesday'] = 'Teispäev';
$lang['datetime']['Wednesday'] = 'Kolmapäev';
$lang['datetime']['Thursday'] = 'Neljapäev';
$lang['datetime']['Friday'] = 'Reede';
$lang['datetime']['Saturday'] = 'Laupäev';
$lang['datetime']['Sun'] = 'Püh';
$lang['datetime']['Mon'] = 'Esm';
$lang['datetime']['Tue'] = 'Teis';
$lang['datetime']['Wed'] = 'Kolm';
$lang['datetime']['Thu'] = 'Nelj';
$lang['datetime']['Fri'] = 'Reede';
$lang['datetime']['Sat'] = 'Laup';
$lang['datetime']['January'] = 'Jaanuar';
$lang['datetime']['February'] = 'Veebruar';
$lang['datetime']['March'] = 'Märts';
$lang['datetime']['April'] = 'Aprill';
$lang['datetime']['May'] = 'Mai';
$lang['datetime']['June'] = 'Juuni';
$lang['datetime']['July'] = 'Juuli';
$lang['datetime']['August'] = 'August';
$lang['datetime']['September'] = 'September';
$lang['datetime']['October'] = 'Oktoober';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'Detsember';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Veeb';
$lang['datetime']['Mar'] = 'Märts';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'Mai';
$lang['datetime']['Jun'] = 'Juun';
$lang['datetime']['Jul'] = 'Juul';
$lang['datetime']['Aug'] = 'Aug';
$lang['datetime']['Sep'] = 'Sept';
$lang['datetime']['Oct'] = 'Okt';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dets';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informatioon';
$lang['Critical_Information'] = 'Tähtis Info';

$lang['General_Error'] = 'Üldviga';
$lang['Critical_Error'] = 'Kriitiline Viga';
$lang['An_error_occured'] = 'Viga';
$lang['A_critical_error'] = 'Kriitiline Viga';

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