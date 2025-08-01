<?php
/***************************************************************************
 *                            lang_main.php [Esperanto]
 *                              -------------------
 *     begin                : Dim 26 Okt 2003
 *     copyright            : (C) 2003 Federico Zenith
 *     email                : zenith@chemeng.ntnu.no
 *
 *     $Id: $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   Ĉi tiu programo estas libera programaro; ci povas pludistribui ĝin kajaŭ modifi
 *   ĝin sub la kondiĉoj de la Ĝenerala Publika Licenco GNU kiel publikigita de
 *   la Free Software Foundation; aŭ versio 2 de la licenco, aŭ
 *   (laŭ cia opcio) ajna posta versio.
 *
 ***************************************************************************/

//
// KONTRIBUINTOJ:
//	 Aldonu ĉi tie detalojn se ci deziras, ekz. Nomon, salutnomon, retpoŝtan adreson, TTT-ejon
//

//
// La formo de ĉi tiu dosiero estas ---> $lang['mesaĝo'] = 'teksto';
//
// Ci devus ankaŭ provi agordi lokaĵaron kaj enkodigon (kun direkto). La enkodigo kaj direkto
// sendiĝos al stilfolio. La lokaĵaro povos aŭ povos ne funkcii, tio dependas de operaciuma subteno kaj la
// sintakso varias... provu diveni!
//

$lang['ENCODING'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd M Y'; // Ĝi devus ŝanĝiĝis al defaŭlta datformo per la cia lingvo, je formato php date()

// Ĉi tio estas opcia, se ci volas _MALLONGAN_ mesaĝan eligon
// kune kun la nia kopirajta mesaĝo indikanta ke ci estas la tradukisto
// bonvolu aldoni ĝi ĉi tie.
$lang['TRANSLATION'] = 'Traduko al esperanto fare de Federico Zenith';

//
// Kutimaj, ĉi tiuj vortoj uziĝas
// vaste sur pluraj paĝoj
//
$lang['Forum'] = 'Forumo';
$lang['Category'] = 'Kategorio';
$lang['Topic'] = 'Temo';
$lang['Topics'] = 'Temoj';
$lang['Replies'] = 'Respondoj';
$lang['Views'] = 'Vidoj';
$lang['Post'] = 'Afiŝo';
$lang['Posts'] = 'Afiŝoj';
$lang['Posted'] = 'Afiŝita';
$lang['Username'] = 'Uzulnomo';
$lang['Password'] = 'Pasvorto';
$lang['Email'] = 'Retpoŝto';
$lang['Poster'] = 'Afiŝinto';
$lang['Author'] = 'Aŭtoro';
$lang['Time'] = 'Horo';
$lang['Hours'] = 'Horoj';
$lang['Message'] = 'Mesaĝo';

$lang['1_Day'] = '1 Tago';
$lang['7_Days'] = '7 Tagoj';
$lang['2_Weeks'] = '2 Semajnoj';
$lang['1_Month'] = '1 Monato';
$lang['3_Months'] = '3 Monatoj';
$lang['6_Months'] = '6 Monatoj';
$lang['1_Year'] = '1 Jaro';

$lang['Go'] = 'Iru';
$lang['Jump_to'] = 'Saltu al';
$lang['Submit'] = 'Submetu';
$lang['Reset'] = 'Nuligu';
$lang['Cancel'] = 'Rezignu';
$lang['Preview'] = 'Malposta vido';
$lang['Confirm'] = 'Konfirmu';
$lang['Spellcheck'] = 'Literuma kontrolo';
$lang['Yes'] = 'Jes';
$lang['No'] = 'Ne';
$lang['Enabled'] = 'Aktivigita';
$lang['Disabled'] = 'Malaktivigita';
$lang['Error'] = 'Eraro';

$lang['Next'] = 'Antaŭa';
$lang['Previous'] = 'Malantaŭa';
$lang['Goto_page'] = 'Iru al paĝo';
$lang['Joined'] = 'Kuniĝita';
$lang['IP_Address'] = 'IP-Adreso';

$lang['Select_forum'] = 'Elektu forumon';
$lang['View_latest_post'] = 'Vidu lastan afiŝon';
$lang['View_newest_post'] = 'Vidu plejnovan afiŝon';
$lang['Page_of'] = 'Paĝo <b>%d</b> el <b>%d</b>'; // Anstataŭigas per: Paĝo 1 el 2, ekzemple

$lang['ICQ'] = 'ICQ-Nombro';
$lang['AIM'] = 'AIM-Adreso';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Foruma Indekso';  // ekz. situanomo Foruma Indekso, %s forigeblas se ci preferas

$lang['Post_new_topic'] = 'Afiŝu novan temon';
$lang['Reply_to_topic'] = 'Respondu al temon';
$lang['Reply_with_quote'] = 'Respondu kun citaĵo';

$lang['Click_return_topic'] = 'Klaku %sĈi tie%s por reiri al temo'; // %s-oj estas por uri-oj, ne forigu!
$lang['Click_return_login'] = 'Klaku %sĈi tie%s por reprovi';
$lang['Click_return_forum'] = 'Klaku %sĈi tie%s por reiri al la forumo';
$lang['Click_view_message'] = 'Klaku %sĈi tie%s por vidi la cian mesaĝon';
$lang['Click_return_modcp'] = 'Klaku %sĈi tie%s por reiri al la Moderista Kontrolpanelo';
$lang['Click_return_group'] = 'Klaku %sĈi tie%s por reiri al grupaj informoj';

$lang['Admin_panel'] = 'Iru al Administra Panelo';

$lang['Board_disable'] = 'Bedaŭrinde ĉi tiu forumaro estas nuntempo malatingebla. Bonvolu reprovi poste.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Uzantoj Registritaj:';
$lang['Browsing_forum'] = 'Uzantoj foliumantaj ĉi tiun forumon:';
$lang['Online_users_zero_total'] = 'Totale estas <b>0</b> uzantoj konektitaj :: ';
$lang['Online_users_total'] = 'Totale estas <b>%d</b> uzantoj konektitaj :: ';
$lang['Online_user_total'] = 'Totale estas <b>%d</b> uzanto konektita :: ';
$lang['Reg_users_zero_total'] = '0 Registritaj, ';
$lang['Reg_users_total'] = '%d Registritaj, ';
$lang['Reg_user_total'] = '%d Registrita, ';
$lang['Hidden_users_zero_total'] = '0 Kaŝitaj kaj ';
$lang['Hidden_user_total'] = '%d Kaŝita kaj ';
$lang['Hidden_users_total'] = '%d Kaŝitaj kaj ';
$lang['Guest_users_zero_total'] = '0 Gastoj';
$lang['Guest_users_total'] = '%d Gastoj';
$lang['Guest_user_total'] = '%d Gasto';
$lang['Record_online_users'] = 'Plej da uzantoj konektitaj iam ajn estis <b>%s</b> je %s'; // unua %s = nombro da uzantoj, dua %s estas la dato.

$lang['Admin_online_color'] = '%sAdministristo%s';
$lang['Mod_online_color'] = '%sModeristo%s';

$lang['You_last_visit'] = 'Ci laste vizitis je %s'; // %s anstataŭigita per dato/horo
$lang['Current_time'] = 'La horo nun estas %s'; // %s anstataŭigita per horo

$lang['Search_new'] = 'Vidu afiŝojn ekde lasta vizito';
$lang['Search_your_posts'] = 'Vidu la ciajn afiŝojn';
$lang['Search_unanswered'] = 'Vidu neresponditajn afiŝojn';

$lang['Register'] = 'Enregistru';
$lang['Profile'] = 'Profilo';
$lang['Edit_profile'] = 'Redaktu la cian profilon';
$lang['Search'] = 'Serĉu';
$lang['Memberlist'] = 'Membrolisto';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'Gvido al BBCode';
$lang['Usergroups'] = 'Grupoj da uzantoj';
$lang['Last_Post'] = 'Lasta Afiŝo';
$lang['Moderator'] = 'Moderisto';
$lang['Moderators'] = 'Moderistoj';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'La niaj uzantoj afiŝis totalon de <b>0</b> artikloj'; // Nombro da afiŝoj
$lang['Posted_articles_total'] = 'La niaj uzantoj afiŝis totalon de <b>%d</b> artikloj'; // Nombro da afiŝoj
$lang['Posted_article_total'] = 'La niaj uzantoj afiŝis totalon de <b>%d</b> artiklo'; // Nombro da afiŝoj
$lang['Registered_users_zero_total'] = 'Ni havas <b>0</b> registritajn uzantojn'; // # registritaj uzantoj
$lang['Registered_users_total'] = 'Ni havas <b>%d</b> registritajn uzantojn'; // # registritaj uzantoj
$lang['Registered_user_total'] = 'Ni havas <b>%d</b> registritan uzanton'; // # registritaj uzantoj
$lang['Newest_user'] = 'La plejnove registrita uzanto estas <b>%s%s%s</b>'; // href, salutnomo, /a

$lang['No_new_posts_last_visit'] = 'Neniu nova afiŝo ekde la cia lasta vizito';
$lang['No_new_posts'] = 'Neniu nova afiŝo';
$lang['New_posts'] = 'Novaj afiŝoj';
$lang['New_post'] = 'Nova afiŝo';
$lang['No_new_posts_hot'] = 'Neniu nova afiŝo [ Populara ]';
$lang['New_posts_hot'] = 'Novaj afiŝoj [ Popularaj ]';
$lang['No_new_posts_locked'] = 'Neniu nova afiŝo [ Ŝlosita ]';
$lang['New_posts_locked'] = 'Novaj afiŝoj [ Ŝlositaj ]';
$lang['Forum_is_locked'] = 'La forumo estas ŝlosita';


//
// Saluto
//
$lang['Enter_password'] = 'Bonvolu enmetu la ciajn salutnomon kaj pasvorton por ensaluti.';
$lang['Login'] = 'Ensalutu';
$lang['Logout'] = 'Elsalutu';

$lang['Forgotten_password'] = 'Mi forgesis la mian pasvorton';

$lang['Log_me_in'] = 'Ensalutigu min aŭtomate ĉiuvizite';

$lang['Error_login'] = 'Ci specifis neĝustan aŭ neaktivan salutnomon, aŭ nevalidan pasvorton.';


//
// Indeksa paĝo
//
$lang['Index'] = 'Indekso';
$lang['No_Posts'] = 'Neniu afiŝo';
$lang['No_forums'] = 'Ĉi tiu forumaro ne enhavas forumojn';

$lang['Private_Message'] = 'Privata Mesaĝo';
$lang['Private_Messages'] = 'Privataj Mesaĝoj';
$lang['Who_is_Online'] = 'Kiu estas konektite';

$lang['Mark_all_forums'] = 'Marku ĉiujn forumokn legitaj';
$lang['Forums_marked_read'] = 'Ĉiuj forumoj markiĝis legitaj';


//
// Vidu forumon
//
$lang['View_forum'] = 'Vidu Forumon';

$lang['Forum_not_exist'] = 'La forumo kiun ci elektis ne ekzistas.';
$lang['Reached_on_error'] = 'Ci akiris ĉi tiun paĝo kaŭze de eraro.';

$lang['Display_topics'] = 'Vidigu temojn el malposta';
$lang['All_Topics'] = 'Ĉiuj Temoj';

$lang['Topic_Announcement'] = '<b>Sciigo:</b>';
$lang['Topic_Sticky'] = '<b>Gluita:</b>';
$lang['Topic_Moved'] = '<b>Movita:</b>';
$lang['Topic_Poll'] = '<b>[ Baloto ]</b>';

$lang['Mark_all_topics'] = 'Marku ĉiujn temojn legitaj';
$lang['Topics_marked_read'] = 'La temoj de ĉi tiu forumo estas nun markitaj legitaj';

$lang['Rules_post_can'] = 'Ci <b>povas</b> afiŝi novajn temojn ĉi-forume';
$lang['Rules_post_cannot'] = 'Ci <b>ne povas</b> afiŝi novajn temojn ĉi-forume';
$lang['Rules_reply_can'] = 'Ci <b>povas</b> respondi al temoj ĉi-forume';
$lang['Rules_reply_cannot'] = 'Ci <b>ne povas</b> respondi al temoj ĉi-forume';
$lang['Rules_edit_can'] = 'Ci <b>povas</b> redakti la ciajn afiŝojn ĉi-forume';
$lang['Rules_edit_cannot'] = 'Ci <b>ne povas</b> redakti la ciajn afiŝojn ĉi-forume';
$lang['Rules_delete_can'] = 'Ci <b>povas</b> forviŝi la ciajn afiŝojn ĉi-forume';
$lang['Rules_delete_cannot'] = 'Ci <b>ne povas</b> forviŝi la ciajn afiŝojn ĉi-forume';
$lang['Rules_vote_can'] = 'Ci <b>povas</b> voĉdoni en balotoj ĉi-forume';
$lang['Rules_vote_cannot'] = 'Ci <b>ne povas</b> voĉdoni en balotoj ĉi-forume';
$lang['Rules_moderate'] = 'Ci<b>povas</b> %smoderi ĉi tiun forumon%s'; // %s anstataŭigita per href-ligilo, ne forigu!

$lang['No_topics_post_one'] = 'Ne estas temoj ĉi-forume.<br />Klaku ĉe la ligilo <b>Afiŝu Novan Temon</b> ĉi-paĝe por afiŝi iun.';


//
// Vidu temon
//
$lang['View_topic'] = 'Vidu temon';

$lang['Guest'] = 'Gasto';
$lang['Post_subject'] = 'Afiŝu subjeknton';
$lang['View_next_topic'] = 'Vidu postan temon';
$lang['View_previous_topic'] = 'Vidu malpostan temon';
$lang['Submit_vote'] = 'Submetu Voĉdonon';
$lang['View_results'] = 'Vidu Rezultojn';

$lang['No_newer_topics'] = 'Estas neniu pli nova temo ĉi-forume';
$lang['No_older_topics'] = 'Estas neniu pli malnova temo ĉi-forume';
$lang['Topic_post_not_exist'] = 'La temo aŭ afiŝo kiun ci petis ne ekzistas';
$lang['No_posts_topic'] = 'Neniu afiŝo ekzistas por ĉi tiu temo';

$lang['Display_posts'] = 'Vidigu afiŝojn el malposta';
$lang['All_Posts'] = 'Ĉiuj Afiŝoj';
$lang['Newest_First'] = 'Plej Novaj Unue';
$lang['Oldest_First'] = 'Plej Malnovaj Unue';

$lang['Back_to_top'] = 'Malantaŭen supren';

$lang['Read_profile'] = 'Vidu profilon de uzanto';
$lang['Send_email'] = 'Sendu retleteron al uzanto';
$lang['Visit_website'] = 'Vizitu TTT-ejon de afiŝinto';
$lang['ICQ_status'] = 'Stato ICQ';
$lang['Edit_delete_post'] = 'Redaktu/Forviŝu ĉi tiun afiŝon';
$lang['View_IP'] = 'Vidu IP-adreson de afiŝinto';
$lang['Delete_post'] = 'Forviŝu ĉi tiun afiŝon';

$lang['wrote'] = 'skribis'; // Sekvas salutnomon kaj estas sekvata de ĉitita teksto.
$lang['Quote'] = 'Ĉitaĵo'; // Estas malpost bbcode-ĉita eligo.
$lang['Code'] = 'Kodo'; // Estas malpost bbcode-koda eligo.

$lang['Edited_time_total'] = 'Laste redaktita de %s je %s; redaktita %d fojo totale'; // Laste redaktita de mi je 12 Okt 2001; redaktita 1 fojo totale
$lang['Edited_times_total'] = 'Laste redaktita de %s je %s; redaktita %d fojoj totale'; // Laste redaktita de mi je 12 Okt 2001; redaktita 2 fojoj totale

$lang['Lock_topic'] = 'Ŝlosu ĉi tiun temon';
$lang['Unlock_topic'] = 'Malŝlosu ĉi tiun temon';
$lang['Move_topic'] = 'Movu ĉi tiun temon';
$lang['Delete_topic'] = 'Forviŝu ĉi tiun temon';
$lang['Split_topic'] = 'Fendu ĉi tiun temon';

$lang['Stop_watching_topic'] = 'Haltu rigardi ĉi tiun temon';
$lang['Start_watching_topic'] = 'Rigardu ĉi tiun temon por respondoj';
$lang['No_longer_watching'] = 'Ci ne plu rigardas ĉi tiun temon';
$lang['You_are_watching'] = 'Ci estas nun rigardanta ĉi tiun temon';

$lang['Total_votes'] = 'Totalaj Voĉdonoj';

//
// Afiŝado/Respondado (Ne privata mesaĝado!)
//
$lang['Message_body'] = 'Korpo de la mesaĝo';
$lang['Topic_review'] = 'Recenzo de la temo';

$lang['No_post_mode'] = 'Neniu afiŝa reĝimo specifita'; // Se posting.php alvokiĝas sen reĝimo, (nova temo/respondo/forviŝo/ktp., ne devus vidiĝi normale)

$lang['Post_a_new_topic'] = 'Afiŝu novan temon';
$lang['Post_a_reply'] = 'Afiŝu respondon';
$lang['Post_topic_as'] = 'Afiŝu temon kiel';
$lang['Edit_Post'] = 'Redaktu afiŝon';
$lang['Options'] = 'Opcioj';

$lang['Post_Announcement'] = 'Sciigo';
$lang['Post_Sticky'] = 'Gluita';
$lang['Post_Normal'] = 'Normala';

$lang['Confirm_delete'] = 'Ĉu ci certas pri ke ci volas forviŝi ĉi tiun afiŝon?';
$lang['Confirm_delete_poll'] = 'Ĉi ci certas pri ke ci volas forviŝi ĉi tiun baloton?';

$lang['Flood_Error'] = 'Ci ne povas fari novan afiŝon tiel preskaŭ post la cia lasta; bonvolu reprovu post iom da tempo.';
$lang['Empty_subject'] = 'Ci devas specifi subjekton kia afiŝante novan temon.';
$lang['Empty_message'] = 'Ci devas enmeti mesaĝon kiam afiŝante.';
$lang['Forum_locked'] = 'Ĉi tiu forumo estas ŝlosita: ci ne povas afiŝi, respondi, aŭ redakti temojn.';
$lang['Topic_locked'] = 'Ĉi tiu temo estas ŝlosita: ci ne povas redakti afiŝojn aŭ respondi.';
$lang['No_post_id'] = 'Ci devas elekti afiŝon redaktendan';
$lang['No_topic_id'] = 'Ci devas elekti temon al kiu ci volas respondi';
$lang['No_valid_mode'] = 'Ci povas kun afiŝi, respondi, redakti aŭ ĉiti mesaĝojn. Bonvolu reprovu.';
$lang['No_such_post'] = 'Ne estas tia afiŝo. Bonvolu reprovu.';
$lang['Edit_own_posts'] = 'Bedaŭrinde ci povas redakti nur la ciajn proprajn afiŝojn.';
$lang['Delete_own_posts'] = 'Bedaŭrinde ci povas forviŝi nur la ciajn proprajn afiŝojn.';
$lang['Cannot_delete_replied'] = 'Bedaŭrinde ci ne povas forviŝi afiŝojn kiuj ricevis respondon.';
$lang['Cannot_delete_poll'] = 'Bedaŭrinde ci ne povas forviŝi aktivan baloton.';
$lang['Empty_poll_title'] = 'Ci devas enmeti titolon por la cia baloto.';
$lang['To_few_poll_options'] = 'Ci devas enmeti almenaŭ du balotajn opciojn.';
$lang['To_many_poll_options'] = 'Ci provis enmeti tro da balotaj opcioj.';
$lang['Post_has_no_poll'] = 'Ĉi tiu afiŝo havas neniun baloton.';
$lang['Already_voted'] = 'Ci jam voĉdonis en ĉi tiu baloto.';
$lang['No_vote_option'] = 'Ci devas specifi opcion kiam voĉdonante.';

$lang['Add_poll'] = 'Aldonu Baloton';
$lang['Add_poll_explain'] = 'Se ci ne volas aldoni baloton al la cia temo, lasu la kampojn vakuaj.';
$lang['Poll_question'] = 'Balota demando';
$lang['Poll_option'] = 'Balota opcio';
$lang['Add_option'] = 'Aldonu opcion';
$lang['Update'] = 'Ĝisdatigu';
$lang['Delete'] = 'Forviŝu';
$lang['Poll_for'] = 'Balotu dum';
$lang['Days'] = 'Tagoj'; // Ĝi uziĝas kiel Balotu dum ... Tagoj + in admin_forums por pruning ***
$lang['Poll_for_explain'] = '[ Enmetu 0 aŭ lasu vakua por neniam finonta baloto ]';
$lang['Delete_poll'] = 'Forviŝu Baloton';

$lang['Disable_HTML_post'] = 'Malaktivigu HTML\'n ĉi-afiŝe';
$lang['Disable_BBCode_post'] = 'Malaktivigu BBCode\'n ĉi-afiŝe';
$lang['Disable_Smilies_post'] = 'Malaktivigu Ridmienojn ĉi-afiŝe';

$lang['HTML_is_ON'] = 'HTML estas <u>AKTIVA</u>';
$lang['HTML_is_OFF'] = 'HTML estas <u>MALAKTIVA</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s estas <u>AKTIVA</u>'; // %s anstataŭiĝo per URIoj montrantaj al FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s estas <u>MALAKTIVA</u>';
$lang['Smilies_are_ON'] = 'Ridmienoj estas <u>AKTIVAJ</u>';
$lang['Smilies_are_OFF'] = 'Ridmienoj estas <u>MALAKTIVAJ</u>';

$lang['Attach_signature'] = 'Kunsendu subskribon (subskriboj ŝanĝeblas en profilo)';
$lang['Notify'] = 'Avizu min kiam respondo afiŝiĝas';
$lang['Delete_post'] = 'Folviŝu ĉi tiun afiŝon';

$lang['Stored'] = 'La cia mesaĝo enmetiĝis plensukcese.';
$lang['Deleted'] = 'La cia mesaĝo forviŝiĝis plensukcese.';
$lang['Poll_delete'] = 'La cia baloto folviŝiĝis plensukcese.';
$lang['Vote_cast'] = 'La cia voĉdono doniĝis.';

$lang['Topic_reply_notification'] = 'Avizo de Respondo al Temo';

$lang['bbcode_b_help'] = 'Grasa teksto: [b]teksto[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Kursiva teksto: [i]teksto[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Substrekita teksto: [u]teksto[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Ĉita teksto: [quote]teksto[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Koda vidigo: [code]kodo[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Listo: [list]teksto[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Ordigita listo: [list=]teksto[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Enmetu bildon: [img]http://url_de_bildo[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Enmetu URL\'on: [url]http://url[/url] aŭ [url=http://url]URL-teksto[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Fermu ĉiujn malfermajn bbCode-etikedojn';
$lang['bbcode_s_help'] = 'Tiparkoloro: [color=red]teksto[/color]  Sugesto: ci povas ankaŭ uzi color=#FF0000';
$lang['bbcode_f_help'] = 'Tipargrando: [size=x-small]malgranda teksto[/size]';

$lang['Emoticons'] = 'Mienoj';
$lang['More_emoticons'] = 'Vidu Plurajn Mienojn';

$lang['Font_color'] = 'Tiparkoloro';
$lang['color_default'] = 'Defaŭlta';
$lang['color_dark_red'] = 'Malhela Ruĝa';
$lang['color_red'] = 'Ruĝa';
$lang['color_orange'] = 'Oranĝkolora';
$lang['color_brown'] = 'Bruna';
$lang['color_yellow'] = 'Flava';
$lang['color_green'] = 'Verda';
$lang['color_olive'] = 'Olivkolora';
$lang['color_cyan'] = 'Ĉiana';
$lang['color_blue'] = 'Blua';
$lang['color_dark_blue'] = 'Malhela Blua';
$lang['color_indigo'] = 'Indiga';
$lang['color_violet'] = 'Violkolora';
$lang['color_white'] = 'Blanka';
$lang['color_black'] = 'Nigra';

$lang['Font_size'] = 'Tipargrando';
$lang['font_tiny'] = 'Malgrandega';
$lang['font_small'] = 'Malgranda';
$lang['font_normal'] = 'Normala';
$lang['font_large'] = 'Granda';
$lang['font_huge'] = 'Grandega';

$lang['Close_Tags'] = 'Fermu etikedojn';
$lang['Styles_tip'] = 'Sugesto: Stiloj povas rapide aplikiĝi al elektita teksto.';


//
// Privata Mesaĝado
//
$lang['Private_Messaging'] = 'Privata Mesaĝado';

$lang['Login_check_pm'] = 'Ensalutu por kontroli la ciajn privatajn mesaĝojn';
$lang['New_pms'] = 'Ci havas %d novajn mesaĝojn'; // Ci havas 2 novajn mesaĝojn
$lang['New_pm'] = 'Ci havas %d novan mesaĝon'; // Ci havas 1 novan mesaĝon
$lang['No_new_pm'] = 'Ci havas neniun novan mesaĝon';
$lang['Unread_pms'] = 'Ci havas %d nelegitajn mesaĝojn';
$lang['Unread_pm'] = 'Ci havas %d nelegitan mesaĝon';
$lang['No_unread_pm'] = 'Ci havas neniun nelegitan mesaĝon';
$lang['You_new_pm'] = 'Nova privata mesaĝo atendas cin en la cia leterkesto';
$lang['You_new_pms'] = 'Novaj privataj mesaĝoj atendas cin en la cia leterkesto';
$lang['You_no_new_pm'] = 'Neniu nova privata mesaĝo atendas cin';

$lang['Unread_message'] = 'Nelegita mesaĝo';
$lang['Read_message'] = 'Legita mesaĝo';

$lang['Read_pm'] = 'Legu mesaĝon';
$lang['Post_new_pm'] = 'Afiŝu mesaĝon';
$lang['Post_reply_pm'] = 'Respondu al mesaĝo';
$lang['Post_quote_pm'] = 'Ĉitu mesaĝon';
$lang['Edit_pm'] = 'Redaktu mesaĝon';

$lang['Inbox'] = 'Leterkesto';
$lang['Outbox'] = 'Elirkesto';
$lang['Savebox'] = 'Konservitakesto';
$lang['Sentbox'] = 'Senditakesto';
$lang['Flag'] = 'Flago';
$lang['Subject'] = 'Subjekto';
$lang['From'] = 'El';
$lang['To'] = 'Al';
$lang['Date'] = 'Dato';
$lang['Mark'] = 'Marko';
$lang['Sent'] = 'Senditaj';
$lang['Saved'] = 'Konservitaj';
$lang['Delete_marked'] = 'Forviŝu Markitajn';
$lang['Delete_all'] = 'Forviŝu Ĉiujn';
$lang['Save_marked'] = 'Konservu Markitajn';
$lang['Save_message'] = 'Konservu Mesaĝon';
$lang['Delete_message'] = 'Forviŝu Mesaĝon';

$lang['Display_messages'] = 'Vidigu mesaĝojn el malpostaj'; // Sekvata de nombro de tagoj/semajnoj/monatoj
$lang['All_Messages'] = 'Ĉiuj Mesaĝoj';

$lang['No_messages_folder'] = 'Ci havas neniun mesoĝon ĉi-keste';

$lang['PM_disabled'] = 'Privata mesaĝado malaktiviĝis ĉi-forumare.';
$lang['Cannot_send_privmsg'] = 'Bedaŭrinde la administristo malpermesis al ci sendi privatajn mesaĝojn.';
$lang['No_to_user'] = 'Ci devas specifi salutnomon al kiu sendi ĉi tiun mesaĝon.';
$lang['No_such_user'] = 'Bedaŭrinde neniu tia uzanto ekzistas.';

$lang['Disable_HTML_pm'] = 'Malativigu HTML\'n ĉi-mesaĝe';
$lang['Disable_BBCode_pm'] = 'Malaktivigu BBCode\'n ĉi-mesaĝe';
$lang['Disable_Smilies_pm'] = 'Malaktivigu ridmienojn ĉi-mesaĝe';

$lang['Message_sent'] = 'La cia mesaĝo sendiĝis.';

$lang['Click_return_inbox'] = 'Klaku %sĈi tie%s por reiri al la cia leterkesto';
$lang['Click_return_index'] = 'Klaku %sĈi tie%s por reiri al la indekso';

$lang['Send_a_new_message'] = 'Sendu novan privatan mesaĝon';
$lang['Send_a_reply'] = 'Respondu al privatan mesaĝon';
$lang['Edit_message'] = 'Redaktu privatan mesaĝon';

$lang['Notification_subject'] = 'Nova Privata Mesaĝo alvenis!';

$lang['Find_username'] = 'Trovu salutnomon';
$lang['Find'] = 'Trovu';
$lang['No_match'] = 'Neniu kongruaĵo trovita.';

$lang['No_post_id'] = 'Neniu afiŝa ID specifiĝis';
$lang['No_such_folder'] = 'Neniu tia dosierujo ekzistas';
$lang['No_folder'] = 'Neniu tia dosierujo specifita';

$lang['Mark_all'] = 'Marku ĉiujn';
$lang['Unmark_all'] = 'Malmarku ĉiujn';

$lang['Confirm_delete_pm'] = 'Ĉu ci certas pri forviŝi ĉi tiun mesaĝon?';
$lang['Confirm_delete_pms'] = 'Ĉu ci certas pri forviŝi ĉi tiujn mesaĝojn?';

$lang['Inbox_size'] = 'La cia leterkesto estas plena je %d%%'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'La cia senditakesto estas plena je %d%%';
$lang['Savebox_size'] = 'La cia konservitakesto estas plena je %d%%';

$lang['Click_view_privmsg'] = 'Klaku %sĈi tie%s por viziti la cian leterkeston';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Vidante profilon :: %s'; // %s estas salutnomo
$lang['About_user'] = 'Ĉio pri %s'; // %s estas salutnomo

$lang['Preferences'] = 'Preferoj';
$lang['Items_required'] = 'Eroj markitaj per * estas postulataj krom se alie dirite.';
$lang['Registration_info'] = 'Registradaj Informoj';
$lang['Profile_info'] = 'Profilaj Informoj';
$lang['Profile_info_warn'] = 'Ĉi tiuj informoj estos publike videblaj';
$lang['Avatar_panel'] = 'Avatara kontrolpanelo';
$lang['Avatar_gallery'] = 'Galerio de Avataroj';

$lang['Website'] = 'TTT-ejo';
$lang['Location'] = 'Loko';
$lang['Contact'] = 'Kontakto';
$lang['Email_address'] = 'Retpoŝta adreso';
$lang['Email'] = 'Retpoŝto';
$lang['Send_private_message'] = 'Sendu privatan mesaĝon';
$lang['Hidden_email'] = '[ Kaŝata ]';
$lang['Search_user_posts'] = 'Serĉu afiŝojn de ĉi tiu uzanto';
$lang['Interests'] = 'Interesoj';
$lang['Occupation'] = 'Okupacio';
$lang['Poster_rank'] = 'Afiŝa rango';

$lang['Total_posts'] = 'Totalaj afiŝoj';
$lang['User_post_pct_stats'] = '%.2f%% de totalo'; // 1.25% de totalo
$lang['User_post_day_stats'] = '%.2f afiŝoj tage'; // 1.5 afiŝoj tage
$lang['Search_user_posts'] = 'Trovu ĉiujn afiŝojn de %s'; // Trovu ĉiujn afiŝojn laŭ salutnomo

$lang['No_user_id_specified'] = 'Bedaŭrinde tiu uzanto ne ekzistas.';
$lang['Wrong_Profile'] = 'Ci ne povas modifi profilon ne cian.';

$lang['Only_one_avatar'] = 'Nur unu tipon de avataro specifeblas';
$lang['File_no_data'] = 'La dosiero ĉe la URL kiun ci donis ne enhavas datumojn';
$lang['No_connection_URL'] = 'Konekto ne fareblis al la URL kiun ci donis';
$lang['Incomplete_URL'] = 'La URL kiun ci enmetis estas neplena';
$lang['Wrong_remote_avatar_format'] = 'La URL de la malproksima avataro ne validas';
$lang['No_send_account_inactive'] = 'Bedaŭrinde la cia pasvorto ne troveblas ĉar la cia konto estas nuntempo neaktiva. Bonvolu kontakti la foruman administriston por pli da informoj.';

$lang['Always_smile'] = 'Ĉiam ebligu Ridmienojn';
$lang['Always_html'] = 'Ĉiam ebligu HTML\'n';
$lang['Always_bbcode'] = 'Ĉiam ebligu BBCode\'n';
$lang['Always_add_sig'] = 'Ĉiam aldonu la mian subskribon';
$lang['Always_notify'] = 'Ĉiam avizu min pri respondoj';
$lang['Always_notify_explain'] = 'Sendas retleteron kiam iu respondas al temo en kiu ci afiŝis. Ĉi tio ŝanĝeblas iam ajn kiam ci afiŝas.';

$lang['Board_style'] = 'Foruma Stilo';
$lang['Board_lang'] = 'Foruma Lingvo';
$lang['No_themes'] = 'Neniu Temo en la datumbazo';
$lang['Timezone'] = 'Horzono';
$lang['Date_format'] = 'Data formato';
$lang['Date_format_explain'] = 'La sintakso uzata estas identa al la funkcio de PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>.';
$lang['Signature'] = 'Subskribo';
$lang['Signature_explain'] = 'Ĉi tiu estas teksta bloko kiu aldoneblas al la afiŝojn kiujn ci skribas. Estas limo je %d signoj';
$lang['Public_view_email'] = 'Ĉiam vidigu la mian retpoŝtan adreson';

$lang['Current_password'] = 'Nuna pasvorto';
$lang['New_password'] = 'Nova pasvorto';
$lang['Confirm_password'] = 'Konfirmu pasvorton';
$lang['Confirm_password_explain'] = 'Ci devas konfirmi la cian nunan pasvorton se ci volas ŝanĝi ĝin aŭ modifi la cian retpoŝtan adreson';
$lang['password_if_changed'] = 'Ci bezonas nur provizi pasvorton se ci volas ŝanĝi ĝin';
$lang['password_confirm_if_changed'] = 'Ci bezonas nur konfirmi la cian pasvorton se ci ŝanĝis ĝin supre';

$lang['Avatar'] = 'Avataro';
$lang['Avatar_explain'] = 'Montras bildeton sub la ciaj detaloj en afiŝoj. Bildoj montreblas nur po unu, la ĝia larĝo ne povas esti pli ol %d rastrumeroj, la alto ne pli ol %d rastrumeroj, kaj la dosiergrando ne pli ol %d kilobajtoj.';
$lang['Upload_Avatar_file'] = 'Alŝutu avataron el la cia maŝino';
$lang['Upload_Avatar_URL'] = 'Alŝutu avataron el URL';
$lang['Upload_Avatar_URL_explain'] = 'Enmetu la URL\'n de la loko enhavanta la avataran bildon, ĝi kopiiĝos al ĉi tiu TTT-ejo.';
$lang['Pick_local_Avatar'] = 'Elekte avataron el la galerio';
$lang['Link_remote_Avatar'] = 'Ligu al aliloka avataro';
$lang['Link_remote_Avatar_explain'] = 'Enmetu la URL\'n de la loko enhavanta la avataran bildon al kiu ci volas ligi.';
$lang['Avatar_URL'] = 'URL de avatara bildo';
$lang['Select_from_gallery'] = 'Elektu avataron el galerio';
$lang['View_avatar_gallery'] = 'Vidigu galerion';

$lang['Select_avatar'] = 'Elektu avataron';
$lang['Return_profile'] = 'Rezignu pri avataro';
$lang['Select_category'] = 'Elektu kategorion';

$lang['Delete_Image'] = 'Forviŝu bildon';
$lang['Current_Image'] = 'Nuna bildo';

$lang['Notify_on_privmsg'] = 'Avizu min je privata mesaĝo';
$lang['Popup_on_privmsg'] = 'Ŝprucu fenestron je nova privata mesaĝo';
$lang['Popup_on_privmsg_explain'] = 'Iuj stilfolioj povos malfermi novan fenestron por informi cin kiam novaj privataj mesaĝoj alvenos.';
$lang['Hide_user'] = 'Kaŝu la cian konektan staton';

$lang['Profile_updated'] = 'La cia profilo ĝisdatiĝis';
$lang['Profile_updated_inactive'] = 'La cia profilo ĝisdatiĝis. Tamen, ci ŝanĝis gravajn detalojn, ĉi tial la cia konto estas nun malaktiva. Kontrolu la cian retpoŝton por infomiĝi pri kiel reaktivigi la cian konton, aŭ se administra aktivigo estas bezonata, atendu ĝis ke la administristo rektivigos ĝin.';

$lang['Password_mismatch'] = 'La pasvortoj kiujn ci enmetis ne kongruis.';
$lang['Current_password_mismatch'] = 'La nuna pasvorto kiun ci provizis ne kongruas kun tiu konservata en la datumbazo.';
$lang['Password_long'] = 'La pasvorto ne devas longi pli ol 32 signoj.';
$lang['Too_many_registers'] = 'Ci faris tro da enregistrigajn provojn. Bonvolu reprovi poste.';
$lang['Username_taken'] = 'Bedaŭrinde ĉi tiu salutnomo estas jam kaptita.';
$lang['Username_invalid'] = 'Bedaŭrinde ĉi tiu salutnomo enhavas nevalidan signon, kiel \'.';
$lang['Username_disallowed'] = 'Bedaŭrinde ĉi tiu salutnomo malebliĝis.';
$lang['Email_taken'] = 'Bedaŭrinde ĉi tiu retpoŝta adreso jam registriĝis al uzanto.';
$lang['Email_banned'] = 'Bedaŭrinde ĉi tiu retpoŝta adreso foriĝis.';
$lang['Email_invalid'] = 'Bedaŭrinde ĉi tiu retpoŝta adreso estas nevalida.';
$lang['Signature_too_long'] = 'La cia subskribo estas tro longa.';
$lang['Fields_empty'] = 'Ci devas plenigi la postulatajn kampojn.';
$lang['Avatar_filetype'] = 'La avatara dosiertipo devas esti .jpg, .gif aŭ .png';
$lang['Avatar_filesize'] = 'La dosiergrando de la avatara bildo devas esti malpli ol %d kilobajtoj'; // La dosiergrando de la avatara bildo devas esti malpli ol 6 kilobajtoj
$lang['Avatar_imagesize'] = 'La avataro devas larĝi malpli ol %d rastrumeroj kaj alti malpli ol %d rastrumeroj';

$lang['Welcome_subject'] = 'Bonvenon al la forumoj de %s'; // Bonvenon al la forumoj de mi.eo
$lang['New_account_subject'] = 'Nova konto de uzanto';
$lang['Account_activated_subject'] = 'Konto aktivigita';

$lang['Account_added'] = 'Dankon pro enregistro. La cia konto kreiĝis. Ci povas nun saluti per la ciaj salutnomo kaj pasvorto';
$lang['Account_inactive'] = 'La cia konto kreiĝis. Tamen, ĉi tiu forumo postulas aktivigon. Aktiviga ŝlosilo sendiĝis al la retpoŝta adreso kiun ci provizis. Bonvolu kontroli la cian retpoŝton por pli da informoj';
$lang['Account_inactive_admin'] = 'La cia konto kreiĝis. Tamen, ĉi tiu forumo postulas aktivigon fare de administristo. Retleteron sendiĝis al ri kaj ci informiĝos kiam la la cia konto aktiviĝintos';
$lang['Account_active'] = 'La cia konto nun aktiviĝis. Dankon pro enregistro';
$lang['Account_active_admin'] = 'La konto nun aktiviĝis';
$lang['Reactivate'] = 'Reaktivigu la cian konton!';
$lang['Already_activated'] = 'Ci jam aktivigis la cian konton';
$lang['COPPA'] = 'La cia konto kreiĝis, sed bezonas aprobon. Bonvolu kontroli la cian repoŝton por pluaj detaloj.';

$lang['Registration'] = 'Kondiĉoj de registra akordo';
$lang['Reg_agreement'] = 'Kvankam la administristoj kaj moderistoj de ĉi tiu forumo provos forigi aŭ redakti ajnan ĝenerale malaprobindan materialon tiel rapide kiel eble, ne eblas recenzi ĉiujn mesaĝojn. Ĉi tial ci agnoskas ke ĉiuj afiŝoj faritaj en ĉi tiuj forumoj esprimas la vidojn kaj opiniojn de la aŭtoro kaj ne de la administristoj, moderistoj aŭ TTT-estro (escepte je afiŝoj de ĉi tiuj homoj) kaj tial ili ne estos respondecaj.<br /><br />Ci konsentas pri ne afiŝi ajnan misuzan, vulgaran, kalumnieman, malameman, minacantan, seksuman aŭ alispecan materialon kiu povus malobservi ajnan aplikeblan leĝon. Farante ĉi tion povus kaŭzi ke ci estos tuj kaj daŭre forigita (kaj la cia provizisto informita). La IP-adreso de ĉiuj afiŝoj estas registrata por helpi apliki ĉi tiujn kondiĉojn. Ci konsentas pri ke la TTT-estro, administristo kaj moderistoj de ĉi tiu forumo rajtas forigi, redakti, movi aŭ fermi ajnan temon ajntempe ili opinios ke ĝi indas. Kiel uzanto ci konsentas ke ajna informo ci enmetis supre konserviĝos en datumbazo. Kvankam la informoj ne dissendiĝos al ajna tria sen la cia konsento, la TTT-estro, administristo kaj moderistoj ne respondecas pro ajna hakaĵo kiu povos kompromiti la datumojn.<br /><br />Ĉi tiu forumo uzas kuketojn por konservi informojn ĉe la cia loka komputilo. Ĉi tiuj kuketoj ne enhavas ajnan informon kiun ci enmetis supre; ili nur helpas plibonigi la cian vidan plezuron. La retpoŝta adreso uziĝas nur por konfirmi la ciajn enregistrajn detalojn kaj pasvorton (kaj por sendi al ci novajn pasvortojn se ci forgesos la nunan).<br /><br />Klakante ĉe Registru sube ci konsentas al esti ligita de ĉi tiuj kondiĉoj.';

$lang['Agree_under_13'] = 'Mi konsentas pri ĉi tiuj kondiĉoj kaj aĝas <b>malpli</b> ol 13 jaroj';
$lang['Agree_over_13'] = 'Mi konsentas pri ĉi tiuj kondiĉoj kaj aĝas <b>pli</b> aŭ <b>precize</b> 13 jaroj';
$lang['Agree_not'] = 'Mi ne konsentas pri ĉi tiuj kondiĉoj';

$lang['Wrong_activation'] = 'La aktiviga ŝlosilo kiun ci provizis ne kongruas kun ajna en la datumbazo.';
$lang['Send_password'] = 'Sendu al mi novan pasvorton';
$lang['Password_updated'] = 'Nova pasvorton kreiĝis; bonvolu kontroli la cian retpoŝton por detaloj pri kiel aktivigi ĝin.';
$lang['No_email_match'] = 'La retpoŝta adreso kiun ci provizis ne kongruas kun tiu listigita por tiu salutnomo.';
$lang['New_password_activation'] = 'Nova aktivigado de pasvorto';
$lang['Password_activated'] = 'La cia konto reaktiviĝis. Por ensaluti, bonvolu uzi la pasvorton provizitan en la retletero kiun ci ricevis.';

$lang['Send_email_msg'] = 'Sendu retpoŝtan mesaĝon';
$lang['No_user_specified'] = 'Neniu uzanto specifita';
$lang['User_prevent_email'] = 'Ĉi tiu uzanto ne deziras ricevi retpoŝton. Provu sendi al ri privatan mesaĝon.';
$lang['User_not_exist'] = 'Ĉi tiu uzanto ne ekzistas';
$lang['CC_email'] = 'Sendu kopion de ĉi tiu retletero al ci mem';
$lang['Email_message_desc'] = 'Ĉi tiu mesaĝo sendiĝos kiel plata teksto, ĉi tial ne enmetu ajnan HTML\'n aŭ BBCode\'n. La responda adreso de ĉi tiu mesaĝo agordiĝos al la cia retpoŝta adreso.';
$lang['Flood_email_limit'] = 'Ci ne povas sendi alian retleteron ĉi tiam. Provu poste.';
$lang['Recipient'] = 'Ricevanto';
$lang['Email_sent'] = 'La retletero sendiĝis.';
$lang['Send_email'] = 'Sendu retleteron';
$lang['Empty_subject_email'] = 'Ci devas specifi subjekton por la retletetero.';
$lang['Empty_message_email'] = 'Ci devas enmeti mesaĝon sendotan.';


//
// Vida konfirmo de sistemaj ĉenoj
//
$lang['Confirm_code_wrong'] = 'La konfirma kodo kiun ci enmetis estis malĝusta';
$lang['Too_many_registers'] = 'Ci superis la nombron de enregistraj provoj por ĉi tiu seanco. Bonvolu reprovi poste.';
$lang['Confirm_code_impaired'] = 'Se ci havas vidajn problemojn aŭ ne povas alie legi ĉi tiun kodon, bonvolu kontakti la %sAdministristo%s por helpo.';
$lang['Confirm_code'] = 'Konfirma kodo';
$lang['Confirm_code_explain'] = 'Enmetu la kodo precize kiel ci vidas ĝin. La kodo estas usklecodistinga kaj nul havas diagonalan linion tra ĝi.';



//
// Membrolisto
//
$lang['Select_sort_method'] = 'Elektu ordigan metodon';
$lang['Sort'] = 'Ordigu';
$lang['Sort_Top_Ten'] = 'Unuaj dek afiŝantoj';
$lang['Sort_Joined'] = 'Dato de enregistrado';
$lang['Sort_Username'] = 'Salutnomo';
$lang['Sort_Location'] = 'Loko';
$lang['Sort_Posts'] = 'Totalaj afiŝoj';
$lang['Sort_Email'] = 'Retpoŝto';
$lang['Sort_Website'] = 'TTT-ejo';
$lang['Sort_Ascending'] = 'Supren';
$lang['Sort_Descending'] = 'Suben';
$lang['Order'] = 'Ordo';


//
// Grupa kontrolpanelo
//
$lang['Group_Control_Panel'] = 'Gropa kontrolpanelo';
$lang['Group_member_details'] = 'Grupaj membrecaj detaloj';
$lang['Group_member_join'] = 'Kuniĝu al grupo';

$lang['Group_Information'] = 'Grupaj informoj';
$lang['Group_name'] = 'Grupa nomo';
$lang['Group_description'] = 'Grupa priskribo';
$lang['Group_membership'] = 'Grupa membreco';
$lang['Group_Members'] = 'Grupaj membroj';
$lang['Group_Moderator'] = 'Grupa moderatoristo';
$lang['Pending_members'] = 'Atendantaj membroj';

$lang['Group_type'] = 'Grupa tipo';
$lang['Group_open'] = 'Malfermita grupo';
$lang['Group_closed'] = 'Fermita grupo';
$lang['Group_hidden'] = 'Kaŝita grupo';

$lang['Current_memberships'] = 'Nunaj membrecoj';
$lang['Non_member_groups'] = 'Ne-membraj grupoj';
$lang['Memberships_pending'] = 'Membrecoj en atendo';

$lang['No_groups_exist'] = 'Neniu grupo ekzistas';
$lang['Group_not_exist'] = 'Tiu grupo de uzantoj ne ekzistas';

$lang['Join_group'] = 'Kuniĝu al grupo';
$lang['No_group_members'] = 'Ĉi tiu grupo ne havas membrojn';
$lang['Group_hidden_members'] = 'Ĉi tiu grupo estas kaŝita; ci ne povas vidi la ĝia membraro';
$lang['No_pending_group_members'] = 'La grupo ne havas atendantajn membrojn';
$lang['Group_joined'] = 'Ci sukcese subskribis al ĉi tiu grupo.<br />Ci aviziĝos kiam la cia subskribo aprobiĝos fare de la grupa moderisto.';
$lang['Group_request'] = 'Peto por kuniĝi al la cia grupo fariĝis.';
$lang['Group_approved'] = 'La cia peto aprobiĝis.';
$lang['Group_added'] = 'Ci aldoniĝis al ĉi tiu grupo de uzantoj.';
$lang['Already_member_group'] = 'Ci jam estas membro de ĉi tiu grupo';
$lang['User_is_member_group'] = 'La uzanto jam estas membro de ĉi tiu grupo';
$lang['Group_type_updated'] = 'Sukcese ĝisdatiĝita grupa tipo.';

$lang['Could_not_add_user'] = 'La uzanto, kiun ci elektis, ne ekzistas.';
$lang['Could_not_anon_user'] = 'Ci ne povas igi Anonymous membro de la grupo.';

$lang['Confirm_unsub'] = 'Ĉu ci certas ke ci volas malsubskribi de ĉi tiu grupo?';
$lang['Confirm_unsub_pending'] = 'La cia subskribo al ĉi tiu grupo ankoraŭ ne aprobiĝis; ĉu ci certas ke ci volas malsubskribi?';

$lang['Unsub_success'] = 'Ci malsubskribis de ĉi tiu grupo.';

$lang['Approve_selected'] = 'Aprobu elektitajn';
$lang['Deny_selected'] = 'Malaprobu elektitajn';
$lang['Not_logged_in'] = 'Ci devas ensaluti por kuniĝi al grupo.';
$lang['Remove_selected'] = 'Forigu elektitajn';
$lang['Add_member'] = 'Aldonu membron';
$lang['Not_group_moderator'] = 'Ci ne estas la moderisto de ĉi tiu grupo, ĉi tial ci ne povas fari tiun agon.';

$lang['Login_to_join'] = 'Salutu por kuniĝi aŭ administri grupajn membrecojn';
$lang['This_open_group'] = 'Ĉi tiu estas malfermita grupo: klaku por peti membrecon';
$lang['This_closed_group'] = 'Ĉi tiu estas fermita grupo: neniu plura uzanto akceptiĝas';
$lang['This_hidden_group'] = 'Ĉi tiu estas kaŝita grupo: aŭtomata aldono de uzantoj ne estas permesita';
$lang['Member_this_group'] = 'Ci estas membro de ĉi tiu grupo';
$lang['Pending_this_group'] = 'La cia membreco en ĉi tiu grupo estas pritraktata';
$lang['Are_group_moderator'] = 'Ci estas la moderisto de la grupo';
$lang['None'] = 'Neniu';

$lang['Subscribe'] = 'Subskribu';
$lang['Unsubscribe'] = 'Malsubskribu';
$lang['View_Information'] = 'Vidu informojn';


//
// Search
//
$lang['Search_query'] = 'Serĉu informomendon';
$lang['Search_options'] = 'Serĉu opciojn';

$lang['Search_keywords'] = 'Serĉu ŝlosilvortojn';
$lang['Search_keywords_explain'] = 'Ci povas uzi <u>AND</u> por difini vortojn kiuj devas esti en la rezulto, <u>OR</u> por difini vortojn kiuj povas esti en la rezulto, kaj <u>NOT</u> por difini vortojn kiuj devus ne esti en la rezulto. Uzu *\'n kiel ĵokero por partaj kongruaĵoj';
$lang['Search_author'] = 'Serĉu aŭtoron';
$lang['Search_author_explain'] = 'Uzu *\'n kiel ĵokero por partaj kongruaĵoj';

$lang['Search_for_any'] = 'Serĉu ajnan vorton aŭ uzu informomendon kiel enmetite';
$lang['Search_for_all'] = 'Serĉu ĉiujn vortojn';
$lang['Search_title_msg'] = 'Serĉu en temaj titoloj kaj tekstoj de mesaĝoj';
$lang['Search_msg_only'] = 'Serĉu nur en tekstoj de mesaĝoj';

$lang['Return_first'] = 'Liveru unuajn'; // sekvata de xxx signoj en elekto
$lang['characters_posts'] = 'signoj de afiŝoj';

$lang['Search_previous'] = 'Serĉu en malpostaj'; // sekvata de tagoj, semajnoj, monatoj, jaroj, ĉiuj en eletko

$lang['Sort_by'] = 'Ordigu je';
$lang['Sort_Time'] = 'Horo de afiŝado';
$lang['Sort_Post_Subject'] = 'Subjekto de afiŝo';
$lang['Sort_Topic_Title'] = 'Titolo de la temo';
$lang['Sort_Author'] = 'Aŭtoro';
$lang['Sort_Forum'] = 'Forumo';

$lang['Display_results'] = 'Montru rezultojn kiel';
$lang['All_available'] = 'Ĉio disponebla';
$lang['No_searchable_forums'] = 'Ci ne rajtas serĉi en iu ajn forumo en ĉi tiu TTT-ejo.';

$lang['No_search_match'] = 'Neniu temo aŭ afiŝo kongruis kun la ciaj serĉaj kriterioj';
$lang['Found_search_match'] = 'Serĉo trovis %d kongruaĵon'; // ekz. Serĉo trovis 1 kongruaĵon
$lang['Found_search_matches'] = 'Serĉo trovis %d kongruaĵojn'; // eg. Serĉo trovis 24 kongruaĵojn

$lang['Close_window'] = 'Fermu fenestron';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Bedarinde nur %s povas afiŝi sciigojn ĉi-forume.';
$lang['Sorry_auth_sticky'] = 'Bedaŭrinde nur %s povas afiŝi gluitajn mesaĝojn ĉi-forume.';
$lang['Sorry_auth_read'] = 'Bedaŭrinde nur %s povas legi temojn ĉi-forume.';
$lang['Sorry_auth_post'] = 'Bedaŭrinde nur %s povas afiŝi temojn ĉi-forume.';
$lang['Sorry_auth_reply'] = 'Bedaŭrinde nur %s povas respondi al temoj ĉi-forume.';
$lang['Sorry_auth_edit'] = 'Bedaŭrinde nur %s povas redakti afiŝojn ĉi-forume.';
$lang['Sorry_auth_delete'] = 'Bedaŭrinde nur %s povas forviŝi afiŝojn ĉi-forume.';
$lang['Sorry_auth_vote'] = 'Bedaŭrinde nur %s povas voĉdoni en balotoj ĉi-forume.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anonimaj uzantoj</b>';
$lang['Auth_Registered_Users'] = '<b>enregistritaj uzantoj</b>';
$lang['Auth_Users_granted_access'] = '<b>uzantoj kun speciala rajtigo</b>';
$lang['Auth_Moderators'] = '<b>moderistoj</b>';
$lang['Auth_Administrators'] = '<b>administristoj</b>';

$lang['Not_Moderator'] = 'Ci ne estas moderisto de ĉi tiu forumo.';
$lang['Not_Authorised'] = 'Ne rajtigita';

$lang['You_been_banned'] = 'Ci foriĝis el ĉi tiu forumo.<br />Bonvolu kontaktu la TTT-estron aŭ la forumara administristo por pli da informoj.';


//
// Vidu konektite
//
$lang['Reg_users_zero_online'] = 'Estas 0 registritaj uzantoj kaj'; // Estas 0 registritaj uzantoj kaj
$lang['Reg_users_online'] = 'Estas %d registritaj uzantoj kaj'; // Estas 5 registritaj uzantoj kaj
$lang['Reg_user_online'] = 'Estas %d registrita uzanto kaj'; // Estas 1 registrita uzanto kaj
$lang['Hidden_users_zero_online'] = '0 kaŝitaj uzantoj konektite'; // 0 kaŝitaj uzantoj konektite
$lang['Hidden_users_online'] = '%d kaŝitaj uzantoj konektite'; // 6 kaŝitaj uzantoj konektite
$lang['Hidden_user_online'] = '%d kaŝita uzanto konektite'; // 1 kaŝita uzanto konektite
$lang['Guest_users_online'] = 'Estas %d gastuzantoj konektite'; // Estas 10 gastuzantoj konektite
$lang['Guest_users_zero_online'] = 'Estas 0 gastuzantoj konektite'; // Estas 0 gastuzantoj konektite
$lang['Guest_user_online'] = 'Estas %d gastuzanto konektite'; // Estas 1 gastuzanto konektite
$lang['No_users_browsing'] = 'Ne estas nuntempe ajna uzanto foliumanta ĉi tiun forumon';

$lang['Online_explain'] = 'Ĉi tiuj datumoj baziĝas sur uzantoj aktivaj dum la lastaj kvin minutoj';

$lang['Forum_Location'] = 'Foruma loko';
$lang['Last_updated'] = 'Laste ĝisdatigita';

$lang['Forum_index'] = 'Foruma indekso';
$lang['Logging_on'] = 'Ensaluti';
$lang['Posting_message'] = 'Afiŝi de mesaĝo';
$lang['Searching_forums'] = 'Serĉi en forumoj';
$lang['Viewing_profile'] = 'Vidi profilon';
$lang['Viewing_online'] = 'Vidi kiuj estas konektite';
$lang['Viewing_member_list'] = 'Vidi liston de membroj';
$lang['Viewing_priv_msgs'] = 'Vidi privatajn mesaĝojn';
$lang['Viewing_FAQ'] = 'Vidi FAQ\'n';


//
// Moderista Kontrolpanelo
//
$lang['Mod_CP'] = 'Moderista Kontrolpanelo';
$lang['Mod_CP_explain'] = 'Uzante la ĉi-suban formularon ci povas fari amasmoderadajn operaciojn ĉi-forume. Ci povas ŝlosi, malŝlosi, movi aŭ forviŝi ajnan nombron da temoj.';

$lang['Select'] = 'Elektu';
$lang['Delete'] = 'Forviŝu';
$lang['Move'] = 'Movu';
$lang['Lock'] = 'Ŝlosu';
$lang['Unlock'] = 'Malŝlosu';

$lang['Topics_Removed'] = 'La elektitaj temoj sukcese forviŝiĝis de la datumbazo.';
$lang['Topics_Locked'] = 'La elektitaj temoj ŝlosiĝis.';
$lang['Topics_Moved'] = 'La elektitaj temoj moviĝis.';
$lang['Topics_Unlocked'] = 'La elektitaj temoj malŝlosiĝis.';
$lang['No_Topics_Moved'] = 'Neniu temo moviĝis.';

$lang['Confirm_delete_topic'] = 'Ĉu ci certas ke ci volas forviŝi la elektita(j)n temo(j)n?';
$lang['Confirm_lock_topic'] = 'Ĉu ci certas ke ci volas ŝlosi la elektita(j)n temo(j)n?';
$lang['Confirm_unlock_topic'] = 'Ĉu ci certas ke ci volas malŝlosi la elektita(j)n temo(j)n?';
$lang['Confirm_move_topic'] = 'Ĉu ci certas ke ci volas movi la elektita(j)n temo(j)n?';

$lang['Move_to_forum'] = 'Movu al forumo';
$lang['Leave_shadow_topic'] = 'Lasu ombran temon en malnova forumo.';

$lang['Split_Topic'] = 'Kontrolpanelo de fendado de temoj';
$lang['Split_Topic_explain'] = 'Uzante la ĉi-suban formularon ci povas fendi temon, aŭ elektante la afiŝojn unuope aŭ fendante elektitan afiŝon';
$lang['Split_title'] = 'Nova titolo de temo';
$lang['Split_forum'] = 'Forumo por nova temo';
$lang['Split_posts'] = 'Fendu elektitajn afiŝojn';
$lang['Split_after'] = 'Fendu ekde elektita afiŝo';
$lang['Topic_split'] = 'La elektita temo sukcese fendiĝis';

$lang['Too_many_error'] = 'Ci elektis tro da afiŝoj. Ci povas nur elekti unu afiŝo, post kiu la temo fendiĝas!';

$lang['None_selected'] = 'Ci ne elektis ajnan temon al kiu fari ĉi tiun agon. Bonvolu reiru malantaŭen kaj elektu almenaŭ unu.';
$lang['New_forum'] = 'Nova forumo';

$lang['This_posts_IP'] = 'IP-adreso de ĉi tiu afiŝo';
$lang['Other_IP_this_user'] = 'Aliaj IP-adresoj el kiuj ĉi tiu uzanto afiŝis';
$lang['Users_this_IP'] = 'Uzantoj afiŝantaj el ĉi tiu IP-adreso';
$lang['IP_info'] = 'IP-informoj';
$lang['Lookup_IP'] = 'Serĉu IP-adreson';


//
// Horzonoj... por vidiĝo ĉe ĉiu paĝo
//
$lang['All_times'] = 'Ĉiuj horoj estas %s'; // ekz. Ĉiuj horoj estas GMT - 12 Horoj

$lang['-12'] = 'GMT - 12 Horoj';
$lang['-11'] = 'GMT - 11 Horoj';
$lang['-10'] = 'GMT - 10 Horoj';
$lang['-9'] = 'GMT - 9 Horoj';
$lang['-8'] = 'GMT - 8 Horoj';
$lang['-7'] = 'GMT - 7 Horoj';
$lang['-6'] = 'GMT - 6 Horoj';
$lang['-5'] = 'GMT - 5 Horoj';
$lang['-4'] = 'GMT - 4 Horoj';
$lang['-3.5'] = 'GMT - 3.5 Horoj';
$lang['-3'] = 'GMT - 3 Horoj';
$lang['-2'] = 'GMT - 2 Horoj';
$lang['-1'] = 'GMT - 1 Horo';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 Horo';
$lang['2'] = 'GMT + 2 Horoj';
$lang['3'] = 'GMT + 3 Horoj';
$lang['3.5'] = 'GMT + 3.5 Horoj';
$lang['4'] = 'GMT + 4 Horoj';
$lang['4.5'] = 'GMT + 4.5 Horoj';
$lang['5'] = 'GMT + 5 Horoj';
$lang['5.5'] = 'GMT + 5.5 Horoj';
$lang['6'] = 'GMT + 6 Horoj';
$lang['6.5'] = 'GMT + 6.5 Horoj';
$lang['7'] = 'GMT + 7 Horoj';
$lang['8'] = 'GMT + 8 Horoj';
$lang['9'] = 'GMT + 9 Horoj';
$lang['9.5'] = 'GMT + 9.5 Horoj';
$lang['10'] = 'GMT + 10 Horoj';
$lang['11'] = 'GMT + 11 Horoj';
$lang['12'] = 'GMT + 12 Horoj';
$lang['13'] = 'GMT + 13 Horoj';

// Ĉi tiuj vidiĝas en la elektujo de horzono
$lang['tz']['-12'] = 'GMT - 12 Horoj';
$lang['tz']['-11'] = 'GMT - 11 Horoj';
$lang['tz']['-10'] = 'GMT - 10 Horoj';
$lang['tz']['-9'] = 'GMT - 9 Horoj';
$lang['tz']['-8'] = 'GMT - 8 Horoj';
$lang['tz']['-7'] = 'GMT - 7 Horoj';
$lang['tz']['-6'] = 'GMT - 6 Horoj';
$lang['tz']['-5'] = 'GMT - 5 Horoj';
$lang['tz']['-4'] = 'GMT - 4 Horoj';
$lang['tz']['-3.5'] = 'GMT - 3.5 Horoj';
$lang['tz']['-3'] = 'GMT - 3 Horoj';
$lang['tz']['-2'] = 'GMT - 2 Horoj';
$lang['tz']['-1'] = 'GMT - 1 Horo';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 Horo';
$lang['tz']['2'] = 'GMT + 2 Horoj';
$lang['tz']['3'] = 'GMT + 3 Horoj';
$lang['tz']['3.5'] = 'GMT + 3.5 Horoj';
$lang['tz']['4'] = 'GMT + 4 Horoj';
$lang['tz']['4.5'] = 'GMT + 4.5 Horoj';
$lang['tz']['5'] = 'GMT + 5 Horoj';
$lang['tz']['5.5'] = 'GMT + 5.5 Horoj';
$lang['tz']['6'] = 'GMT + 6 Horoj';
$lang['tz']['6.5'] = 'GMT + 6.5 Horoj';
$lang['tz']['7'] = 'GMT + 7 Horoj';
$lang['tz']['8'] = 'GMT + 8 Horoj';
$lang['tz']['9'] = 'GMT + 9 Horoj';
$lang['tz']['9.5'] = 'GMT + 9.5 Horoj';
$lang['tz']['10'] = 'GMT + 10 Horoj';
$lang['tz']['11'] = 'GMT + 11 Horoj';
$lang['tz']['12'] = 'GMT + 12 Horoj';
$lang['tz']['13'] = 'GMT + 13 Horoj';

$lang['datetime']['Sunday'] = 'Dimanĉo';
$lang['datetime']['Monday'] = 'Lundo';
$lang['datetime']['Tuesday'] = 'Mardo';
$lang['datetime']['Wednesday'] = 'Merkredo';
$lang['datetime']['Thursday'] = 'Ĵaŭdo';
$lang['datetime']['Friday'] = 'Vendredo';
$lang['datetime']['Saturday'] = 'Sabato';
$lang['datetime']['Sun'] = 'Dim';
$lang['datetime']['Mon'] = 'Lun';
$lang['datetime']['Tue'] = 'Mar';
$lang['datetime']['Wed'] = 'Mer';
$lang['datetime']['Thu'] = 'Ĵaŭ';
$lang['datetime']['Fri'] = 'Ven';
$lang['datetime']['Sat'] = 'Sab';
$lang['datetime']['January'] = 'Januaro';
$lang['datetime']['February'] = 'Februaro';
$lang['datetime']['March'] = 'Marto';
$lang['datetime']['April'] = 'Aprilo';
$lang['datetime']['May'] = 'Majo';
$lang['datetime']['June'] = 'Junio';
$lang['datetime']['July'] = 'Julio';
$lang['datetime']['August'] = 'Aŭgusto';
$lang['datetime']['September'] = 'Septembro';
$lang['datetime']['October'] = 'Oktobro';
$lang['datetime']['November'] = 'Novembro';
$lang['datetime']['December'] = 'Decembro';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Feb';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'Maj';
$lang['datetime']['Jun'] = 'Jun';
$lang['datetime']['Jul'] = 'Jul';
$lang['datetime']['Aug'] = 'Aŭg';
$lang['datetime']['Sep'] = 'Sep';
$lang['datetime']['Oct'] = 'Okt';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dec';

//
// Eraroj (no rilataj al specifa
// malsukceso ĉe iu paĝo)
//
$lang['Information'] = 'Informoj';
$lang['Critical_Information'] = 'Kritikaj Informoj';

$lang['General_Error'] = 'Ĝenerala Eraro';
$lang['Critical_Error'] = 'Kritika Eraro';
$lang['An_error_occured'] = 'Eraro Okazis';
$lang['A_critical_error'] = 'Kritika Eraro Okazis';

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