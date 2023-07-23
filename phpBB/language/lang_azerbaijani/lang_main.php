<?php
/***************************************************************************
 *                            lang_main.php [Azerbaijani]
 *                              -------------------
 *     begin                : Wed Avg 28 2002
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *
 *     $Id: lang_main.php,v 1.4.2.2 2002/05/27 11:58:51 psotfx Exp $
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
// Translation by:
//
//Zəminə Məmmədova (Vərqa Simurq) :: SimurgVerga@aol.com  :: http://fikrini.de
//Image faylların müəllifi Mehman Xəlilsoy (Adam) :: mehman@meqa.az :: http://www.meqa.az
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'Left';
$lang['RIGHT'] = 'Right';
$lang['DATE_FORMAT'] =  'D M d, Y H:i'; // This should be changed to the default date format for your language, php date() format

//// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Kateqoriya';
$lang['Topic'] = 'Mövzu';
$lang['Topics'] = 'Mövzular';
$lang['Replies'] = 'Cavablar';
$lang['Views'] = 'Baxılıb';
$lang['Post'] = 'İsmarış';
$lang['Posts'] = 'İsmarışlar';
$lang['Posted'] = 'Göndərilib';
$lang['Username'] = 'İstifadəçi adı';
$lang['Password'] = 'Şifrə';
$lang['Email'] = 'E-məktub';
$lang['Poster'] = 'Göndərən';
$lang['Author'] = 'Müəllif';
$lang['Time'] = 'Vaxt';
$lang['Hours'] = 'Saat';
$lang['Message'] = 'İsmarış';

$lang['1_Day'] = '1 günlük';
$lang['7_Days'] = '7 günlük';
$lang['2_Weeks'] = '2 həftəlık';
$lang['1_Month'] = '1 aylıq';
$lang['3_Months'] = '3 aylıq';
$lang['6_Months'] = '6 aylıq';
$lang['1_Year'] = '1 illik';

$lang['Go'] = 'Get';
$lang['Jump_to'] = 'Keç';
$lang['Submit'] = 'Göndər';
$lang['Reset'] = 'Geri dön';
$lang['Cancel'] = 'Ləğv et';
$lang['Preview'] = 'Görünüş';
$lang['Confirm'] = 'Təsdiq et';
$lang['Spellcheck'] = 'Orfoqrafiya';
$lang['Yes'] = 'Bəli';
$lang['No'] = 'Xeyr';
$lang['Enabled'] = 'Açıq';
$lang['Disabled'] = 'Bağlı';
$lang['Error'] = 'Xəta';

$lang['Next'] = 'Sonrakı';
$lang['Previous'] = 'Əvvəlki';
$lang['Goto_page'] = 'Səhifə';
$lang['Joined'] = 'Daxil ol';
$lang['IP_Address'] = 'IP ünvanı';

$lang['Select_forum'] = 'Forum seçin';
$lang['View_latest_post'] = 'Son ismarışlara bax';
$lang['View_newest_post'] = 'Yeni ismarışlara bax';
$lang['Page_of'] =  '<b>%d</b> səhifə  (Cəmi <b>%d</b> səhifə)'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ nömrəsi';
$lang['AIM'] = 'AIM ünvanı';
$lang['MSNM'] = 'MSN';
$lang['YIM'] = 'Yahoo';

$lang['Forum_Index'] = '%s Forumun ana səhifəsi';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Yeni mövzu aç';
$lang['Reply_to_topic'] = 'Cavab göndər';
$lang['Reply_with_quote'] = 'Sitatla cavab ver';

$lang['Click_return_topic'] = 'İsmarışlara qayıtmaq üçün %sbunu%s açın.'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Bir də sınamaq üçün %sbunu%s açın.';
$lang['Click_return_forum'] = 'Foruma qayıtmaq üçün %sbunu%s açın.';
$lang['Click_view_message'] = 'İsmarışınızı görmək üçün %sbunu%s açın.';
$lang['Click_return_modcp'] = 'Nəzarətçi lövhəsinə qayıtmaq üçün %sbunu%s açın.';
$lang['Click_return_group'] = 'Qrup mə`lumatlarına qayıtmaq üçün %sbunu%s açın.';

$lang['Admin_panel'] = 'İdarəetmə lövhəsi';

$lang['Board_disable'] = 'Bağışlayın, forumumuz müvəqqəti bağlıdır. Zəhmət olmazsa, daha sonra bir də cəhd edin.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Qeydiyyatlı istifadəçi:';
$lang['Browsing_forum'] = 'Bu forumda gəzən istifadəçilər:';
$lang['Online_users_zero_total'] = 'Cəmi <b>0</b> istifadəçi xətdədir:';
$lang['Online_users_total'] = 'Cəmi <b>%d</b> istifadəçilər xətdədir:';
$lang['Online_user_total'] =  'Cəmi <b>%d</b> istifadəçi xətdədir:';
$lang['Reg_users_zero_total'] = 'heç bir qeydiyyatlı, ';
$lang['Reg_users_total'] = '%d qeydiyyatlı, ';
$lang['Reg_user_total'] = '%d qeydiyyatlı, ';
$lang['Hidden_users_zero_total'] = 'heç bir gizli və ';
$lang['Hidden_user_total'] = '%d gizli və ';
$lang['Hidden_users_total'] = '%d gizli və ';
$lang['Guest_users_zero_total'] = 'heç bir qonaq';
$lang['Guest_users_total'] = '%d qonaq';
$lang['Guest_user_total'] = '%d qonaq';
$lang['Record_online_users'] = 'Forumda bugünə qədər ən çox <b>%s</b> istifadəçi %s tarixində xətdə olub.'; // first %s = number of users, second %s is the date.

$lang['Legend'] = 'Əfsanə';
$lang['Admin_online_color'] = '%sİdarəçi%s';
$lang['Mod_online_color'] = '%sNəzarətçi%s';
$lang['User_online_color'] = '%sİstifadəçi%s';

$lang['You_last_visit'] = 'Son ziyarətiniz: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Forum saatı: %s'; // %s replaced by time

$lang['Search_new'] = 'Yeni ismarışlar';
$lang['Search_your_posts'] = 'Sizin ismarışlarınız';
$lang['Search_unanswered'] = 'Cavabsız ismarışlar';

$lang['Register'] = 'Qeydiyyatdan keçin';
$lang['Profile'] = 'Şəxsi mə`lumat';
$lang['Edit_profile'] = 'Şəxsi mə`lumatlarınızı yeniləyin';
$lang['Search'] = 'Axtar';
$lang['Memberlist'] = 'İstifadəçilərin siyahısı';
$lang['FAQ'] = 'MVS';
$lang['BBCode_guide'] = 'BBCode bələdçisi';
$lang['Usergroups'] = 'İstifadəçi qrupları';
$lang['Last_Post'] = 'Son göndəriş';
$lang['Moderator'] = 'Nəzarətçi';
$lang['Moderators'] = 'Nəzarətçilər';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = '<b>Heç bir</b> ismarış göndərilməyib.'; // Number of posts
$lang['Posted_articles_total'] = 'Cəmi <b>%d</b> ismarış göndərilib.'; // Number of posts
$lang['Posted_article_total'] = 'Cəmi <b>%d</b> ismarış göndərilib.'; // Number of posts
$lang['Registered_users_zero_total'] = '<b>Heç bir</b> qeydiyyatlı istifadəçimiz yoxdur.'; // # registered users
$lang['Registered_users_total'] = 'Cəmi <b>%d</b> qeyidyyatlı istifadəçimiz var.'; // # registered users
$lang['Registered_user_total'] = 'Cəmi <b>%d</b> qeyidyyatlı istifadəçimiz var.'; // # registered users
$lang['Newest_user'] = 'Yeni istifadəçimizə: "<b>%s%s%s</b>, xoş gəldin!"-deyək!'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Son ziyarətinizdən bəri yeni ismarışlar yoxdur.';
$lang['No_new_posts'] = 'Yeni ismarışlar yoxdur.';
$lang['New_posts'] = 'Yeni ismarışlar var.';
$lang['New_post'] = 'Yeni ismarış var.';
$lang['No_new_posts_hot'] = 'Yeni ismarış yoxdur [ Aktual mövzu ].';
$lang['New_posts_hot'] = 'Yeni ismarış var [ Aktual mövzu ].';
$lang['No_new_posts_locked'] = 'Yeni ismarış yoxdur [ Bağlıdır ].';
$lang['New_posts_locked'] = 'Yeni ismarış var [ Bağlıdır ].';
$lang['Forum_is_locked'] = 'Forum bağlıdır.';


//
// Login
//
$lang['Enter_password'] = 'İstifadəçi adınızı və şifrənizi yazın';
$lang['Login'] = 'Giriş';
$lang['Logout'] = 'Çıxış';

$lang['Forgotten_password'] = 'Şifrəmi unutmuşam';

$lang['Log_me_in'] = 'Yadda saxla';

$lang['Error_login'] = 'Səhv və ya aktivləşdirilməmiş istifadəçi adı və şifrə daxil etmisiniz.';


//
// Index page
//
$lang['Index'] = 'Ana səhifə';
$lang['No_Posts'] = 'İsmarış yoxdur.';
$lang['No_forums'] = 'Bu saytda forum yoxdur.';

$lang['Private_Message'] = 'Şəxsi ismarış';
$lang['Private_Messages'] = 'Şəxsi ismarışlar';
$lang['Who_is_Online'] = 'Xətdəkilər';

$lang['Mark_all_forums'] = 'Bütün forumları oxunmuş qəbul et!';
$lang['Forums_marked_read'] = 'Bütün forumlar oxunmuş qəbul edildi.';


//
// Viewforum
//
$lang['View_forum'] = 'Forumu göstər';

$lang['Forum_not_exist'] = 'Seçdiyiniz forum bu səhifədə mövcud deyil.';
$lang['Reached_on_error'] = 'Bu səhifəyə səhv gəlmisiniz.';

$lang['Display_topics'] = 'Mövzuları göstər';
$lang['All_Topics'] = 'Hamısı';

$lang['Topic_Announcement'] = '<b>Bildiriş:</b>';
$lang['Topic_Sticky'] = '<b>Sabit:</b>';
$lang['Topic_Moved'] = '<b>Köçürüldü:</b>';
$lang['Topic_Poll'] = '<b>[ Sorğu ]</b>';

$lang['Mark_all_topics'] = 'Bütün ismarışları oxunmuş qəbul et!';
$lang['Topics_marked_read'] = 'Bu forumdakı bütün ismarışlar oxunmuş qəbul edildi.';

$lang['Rules_post_can'] = 'Bu forumda yeni mövzu <b>aça bilərsiniz</b>.';
$lang['Rules_post_cannot'] = 'Bu forumda yeni mövzu <b>aça bilməzsiniz</b>.';
$lang['Rules_reply_can'] = 'Bu forumdakı ismarışlara cavab <b>verə bilərsiniz</b>.';
$lang['Rules_reply_cannot'] = 'Bu forumdakı ismarışlara cavab <b>verə bilməzsiniz</b>.';
$lang['Rules_edit_can'] = 'Bu forumdakı ismarışlarınızı <b>redaktə edə bilərsiniz</b>.';
$lang['Rules_edit_cannot'] = 'Bu forumdakı ismarışlarınızı <b>redaktə edə biməzsiniz</b>.';
$lang['Rules_delete_can'] = 'Bu forumdakı ismarışlarınızı <b>silə bilərsiniz</b>.';
$lang['Rules_delete_cannot'] = 'Bu forumdakı ismarışlarınızı <b>silə bilməzsiniz</b>.';
$lang['Rules_vote_can'] = 'Bu forumdakı sorğularda səs verə <b>bilərsiniz</b>.';
$lang['Rules_vote_cannot'] = 'Bu forumdakı sorğularda səs verə <b>bilməzsiniz</b>.';
$lang['Rules_moderate'] = 'Bu forumda %sidarəçilik%s <b>edə bilərsiniz</b>.'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Bu forumda mövzu yoxdur. <br />Yeni mövzu göndərmək üçün <b>Yeni mövzu</b> düyməsini açın.';

$lang['Stop_watching_forum'] = 'Bu forumu izləmək istəmirəm.';
$lang['Start_watching_forum'] = 'Bu forumu yeni ismarışlara görə izlə';
$lang['No_longer_watching_forum'] = 'Bu forumu artıq izləmək istəmirəm.';
$lang['You_are_watching_forum'] = 'İndi bu forumu izləyirsiniz.';


//
// Viewtopic
//
$lang['View_topic'] = 'Mövzu';

$lang['Guest'] = 'Qonaq';
$lang['Post_subject'] = 'İsmarış mətni';
$lang['View_next_topic'] = 'Sonrakı mövzu';
$lang['View_previous_topic'] = 'Əvvəlki mövzu';
$lang['Submit_vote'] = 'Səs ver';
$lang['View_results'] = 'Nəticələr';

$lang['No_newer_topics'] = 'Bu forumda yeni mövzu yoxdur.';
$lang['No_older_topics'] = 'Bu forumda daha köhnə mövzu yoxdur.';
$lang['Topic_post_not_exist'] = 'Seçdiyiniz mövzu və ya ismarış bu forumda yoxdur.';
$lang['No_posts_topic'] = 'Bu mövzuda cavab yoxdur.';

$lang['Display_posts'] = 'İsmarışları göstər';
$lang['All_Posts'] = 'Hamısı';
$lang['Newest_First'] = 'yenidən-köhnəyə';
$lang['Oldest_First'] = 'köhnədən-yeniyə';

$lang['Back_to_top'] = 'Əvvələ qayıt';

$lang['Read_profile'] = 'İstifadəçi mə`lumatlarına bax';
$lang['Send_email'] = 'İstifadəçiyə e-məktub göndər';
$lang['Visit_website'] = 'İstifadəçinin veb səhifəsinə bax';
$lang['ICQ_status'] = 'ICQ status';
$lang['Edit_delete_post'] = 'İsmarışı redaktə et/sil';
$lang['View_IP'] = 'Bu ismarışı göndərənin IP ünvanına bax';
$lang['Delete_post'] = 'Bu ismarışı sil';

$lang['wrote'] = 'yazıb'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Sitat'; // comes before bbcode quote output.
$lang['Code'] = 'Kod'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Redaktə edən: %s, son redaktə tarixi: %s, cəmi %d dəfə'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Redaktə edən: %s, son redaktə tarixi: %s, cəmi %d dəfə'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Bu mövzunu bağla';
$lang['Unlock_topic'] = 'Bu mövzunu aç';
$lang['Move_topic'] = 'Bu mövzunu başqa yerə köçür';
$lang['Delete_topic'] = 'Bu mövzunu sil';
$lang['Split_topic'] = 'Bu mövzunu böl';

$lang['Stop_watching_topic'] = 'Bu forumu izləmək istəmirəm.';
$lang['Start_watching_topic'] = 'Bu forumu yeni ismarışlara görə izlə';
$lang['No_longer_watching'] = 'Bu forumu artıq izləmirəm.';
$lang['You_are_watching'] = 'İndi bu forumu izləyirsiniz.';

$lang['Total_votes'] = 'Səslərin cəmi';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'İsmarış lövhəsi';
$lang['Topic_review'] = 'Əvvəlki ismarışlar';

$lang['No_post_mode'] = 'Heç bir göndəriş forması seçmədiniz.'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Yeni mövzu aç';
$lang['Post_a_reply'] = 'Cavab göndər';
$lang['Post_topic_as'] = 'İsmarış növü';
$lang['Edit_Post'] = 'İsmarışı redaktə et';
$lang['Options'] = 'Əməliyyatlar';

$lang['Post_Announcement'] = 'Bildiriş';
$lang['Post_Sticky'] = 'Sabit';
$lang['Post_Normal'] = 'Normal';

$lang['Confirm_delete'] = 'Bu ismarışı silmək istədiyinizdən əminsiniz?';
$lang['Confirm_delete_poll'] = 'Bu sorğunu silmək istədiyinizdən əminsiniz?';

$lang['Flood_Error'] = 'Son ismarışınızdan bu qədər qısa müddət sonra yenisini göndərə bilməzsiniz. Zəhmət olmazsa, bir qədər sonra təkrarlayın.';
$lang['Empty_subject'] = 'Yeni mövzu açarkən ad verməlisiniz.';
$lang['Empty_message'] = 'Boş ismarış göndərə bilməzsiniz.';
$lang['Forum_locked'] = 'Bu forum bağlanmışdır, yeni mövzu aça, cavab göndərə və ismarışları redaktə edə bilməzsiniz.';
$lang['Topic_locked'] = 'Bu mövzu bağlıdır, cavab göndərə və ya ismarışları redaktə edə bilməzsiniz.';
$lang['No_post_id'] = 'Redaktə etmək üçün əvvəl ismarış seçməlisiniz.';
$lang['No_topic_id'] = 'Cavab vermək üçün mövzu seçməlisiniz.';
$lang['No_valid_mode'] = 'Sadəcə ismarış göndərib, redakte edə, cavab verə, sitat götürə bilərsiniz; zəhmət olmazsa, geri qayıdıb bir də sınayın.';
$lang['No_such_post'] = 'Belə bir ismarış yoxdur, zəhmət olmazsa, geri qayıdıb bir də sınayın.';
$lang['Edit_own_posts'] = 'Siz sadəcə öz ismarışlarnızı redaktə edə bilərsiniz.';
$lang['Delete_own_posts'] = 'Siz sadəcə öz ismarışlarınızı silə bilərsiniz.';
$lang['Cannot_delete_replied'] = 'Cavablandırılmış ismarışlarınızı silə bilməzsiniz.';
$lang['Cannot_delete_poll'] = 'Aktiv sorğunu silə bilməzsiniz.';
$lang['Empty_poll_title'] = 'Sorğu üçün başlıq daxil edin';
$lang['To_few_poll_options'] = 'Sorğu üçün ən az iki cavab göstərməlisiniz.';
$lang['To_many_poll_options'] = 'Sorğu üçün həddindən çox cavab verdiniz.';
$lang['Post_has_no_poll'] = 'Bu ismarışda sorğu yoxdur.';
$lang['Already_voted'] = 'Bu sorğuda artıq iştirak etmisiniz.';
$lang['No_vote_option'] = 'Yalnız bir cavabı seçə bilərsiniz.';

$lang['Add_poll'] = 'Sorğu apar';
$lang['Add_poll_explain'] = 'Əgər ismarışınıza sorğu qoşmaq istəyirsinizsə, aşağıdakı sətirləri boş saxlayın.';
$lang['Poll_question'] = 'Sorğunun sualı';
$lang['Poll_option'] = 'Sorğunun cavabı';
$lang['Add_option'] = 'Bu cavabı daxil et';
$lang['Update'] = 'Yenilə';
$lang['Delete'] = 'Sil';
$lang['Poll_for'] = 'Davametmə müddəti';
$lang['Days'] = 'Gün'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Sərhəd qoymamaq üçün 0 (sıfır) yazın, ya da boş saxlayın. ]';
$lang['Delete_poll'] = 'Sorğunu sil';

$lang['Disable_HTML_post'] = 'Bu ismarışda HTML istifadə etmə';
$lang['Disable_BBCode_post'] = 'Bu ismarışda BBCode istifadə etmə';
$lang['Disable_Smilies_post'] = 'Bu ismarışda mimikalardan istifadə etmə';

$lang['HTML_is_ON'] = 'HTML <u>açıq</u>';
$lang['HTML_is_OFF'] = 'HTML <u>bağlı</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>açıq</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>bağlı</u>';
$lang['Smilies_are_ON'] = 'Mimikalar <u>açıq</u>';
$lang['Smilies_are_OFF'] = 'Mimikalar <u>bağlı</u>';

$lang['Attach_signature'] = 'İmzamı daxil et (imzanızı şəxsi mə`lumatlarınizda dəyişə bilərsiniz)';
$lang['Notify'] = 'Cavab gəldikdə mənə xəbər ver';
$lang['Delete_post'] = 'Bu ismarışı sil';

$lang['Stored'] = 'İsmarışınız müvəffəqiyyətlə göndərildi.';
$lang['Deleted'] = 'İsmarışınız müvəffəqiyyətlə silindi.';
$lang['Poll_delete'] = 'Sorğunuz müvəffəqiyyətlə silinmişdir.';
$lang['Vote_cast'] = 'Səsiniz qəbul olundu.';

$lang['Topic_reply_notification'] = 'Mövzuya yeni ismarış yazıldıqda mənə xəbər ver';

$lang['bbcode_b_help'] = 'Qalın: [b]mətn[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Maili: [i]mətn[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Altından xətt çəkilmiş: [u]mətn[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Sitat: [quote]mətn[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Kod daxil et: [code]kod[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Siyahı: [list]siyahı[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Rəqəmli siyahı: [list=]mətn[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Şəkil: [img]http://adres[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL: [url]http://url[/url] ya da [url=http://url]mətn[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Bütün açıq BBCode əmrlərini bağlayır';
$lang['bbcode_s_help'] = 'Şriftin rəngi: [color=red]mətn[/color]  Tiyo: color=#FF0000 deyə istifadə edə bilərsiniz';
$lang['bbcode_f_help'] = 'Şriftin ölçüsü: [size=x-small]kiçik şrift[/size]';

$lang['Emoticons'] = 'Mimikalar';
$lang['More_emoticons'] = 'Bütün mimikaları göstər';

$lang['Font_color'] = 'Şriftin rəngi';
$lang['color_default'] = 'Standart';
$lang['color_dark_red'] = 'Tünd qırmızı';
$lang['color_red'] = 'Qırmızı';
$lang['color_orange'] = 'Çəhrayı';
$lang['color_brown'] = 'Qəhvəyi';
$lang['color_yellow'] = 'Sarı';
$lang['color_green'] = 'Yaşıl';
$lang['color_olive'] = 'Xaki';
$lang['color_cyan'] = 'Firuzəyi';
$lang['color_blue'] = 'Mavi';
$lang['color_dark_blue'] = 'Tünd göy';
$lang['color_indigo'] = 'Sürməyi';
$lang['color_violet'] = 'Bənovşəyi';
$lang['color_white'] = 'Ağ';
$lang['color_black'] = 'Qara';

$lang['Font_size'] = 'Şriftin ölçüsü';
$lang['font_tiny'] = 'Çox kiçik';
$lang['font_small'] = 'Kiçik';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Böyük';
$lang['font_huge'] = 'Çox böyük';

$lang['Close_Tags'] = 'Əməliyatı yekunlaşdır';
$lang['Styles_tip'] = 'Tövsiyə: Yazını seçərək (select) burdakı uslubları daha rahat qura bilərsiniz.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Şəxsi ismarışlar';

$lang['Login_check_pm'] = 'Şəxsi ismarışlarınıza baxmaq üçün hesabınıza daxil olun.';
$lang['New_pms'] = '%d yeni ismarışlarınız var.'; // You have 2 new messages
$lang['New_pm'] = '%d yeni ismarışınız var.'; // You have 1 new message
$lang['No_new_pm'] = 'Yeni ismarışınız yoxdur.';
$lang['Unread_pms'] = '%d oxunmamış ismarışlarınız var.';
$lang['Unread_pm'] = '%d oxunmamış ismarışınız var.';
$lang['No_unread_pm'] = 'Oxunmamış ismarışınız yoxdur.';
$lang['You_new_pm'] = 'Yeni şəxsi ismarışınız var.';
$lang['You_new_pms'] = 'Yeni şəxsi ismarışlarınız var.';
$lang['You_no_new_pm'] = 'Yeni şəxsi ismarışınız yoxdur.';

$lang['Read_pm'] = 'İsmarışı oxu';
$lang['Post_new_pm'] = 'İsmarışı göndər';
$lang['Post_reply_pm'] = 'İsmarışa cavab ver';
$lang['Post_quote_pm'] = 'Sitat götür';
$lang['Edit_pm'] = 'İsmarışı redaktə et';

$lang['Unread_message'] = 'Oxunmamış ismarış';
$lang['Read_message'] = 'Oxunmuş ismarış';

$lang['Inbox'] = 'Gələnlər';
$lang['Outbox'] = 'Göndərilənlər';
$lang['Savebox'] = 'Qeyd edilənlər';
$lang['Sentbox'] = 'Çatanlar';
$lang['Flag'] = 'Vəziyyət';
$lang['Subject'] = 'Mövzu';
$lang['From'] = 'Kimdən';
$lang['To'] = 'Kimə';
$lang['Date'] = 'Tarix';
$lang['Mark'] = 'İşarə';
$lang['Sent'] = 'Göndərildi';
$lang['Saved'] = 'Qeyd edildi';
$lang['Delete_marked'] = 'Seçilənləri sil';
$lang['Delete_all'] = 'Hamısını sil';
$lang['Save_marked'] = 'Seçilənləri saxla';
$lang['Save_message'] = 'İsmarışı saxla';
$lang['Delete_message'] = 'İsmarışı sil';
$lang['Display_messages'] = 'İsmarışları göstər'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Bütün ismarışlar';

$lang['No_messages_folder'] = 'Bu mövzuda heç bir ismarışınız yoxdur.';

$lang['PM_disabled'] = 'Bu səhifədə şəxsi yazışmanın qarşısı alınıb.';
$lang['Cannot_send_privmsg'] = 'Bağışlayın, amma sizin şəxsi ismarış göndərmək hüququnuz aradan qaldırılıb.';
$lang['No_to_user'] = 'Bu ismarışı göndərmək üçün istifadəçi adı göstərməlisiniz.';
$lang['No_such_user'] = 'Bağışlayın, amma seçdiyiniz adda istifadəçimiz yoxdur.';

$lang['Disable_HTML_pm'] = 'Bu ismarışda HTML-ı bağla';
$lang['Disable_BBCode_pm'] = 'Bu ismarışda BBCode-unu bağla';
$lang['Disable_Smilies_pm'] = 'Bu ismarışda mimikalarda istifadə etmə';

$lang['Message_sent'] = 'İsmarışınız müvəffəqiyyətlə göndərildi.';

$lang['Click_return_inbox'] = 'Gələnlər qutusuna qayıtmaq üçün %sbunu%s açın.';
$lang['Click_return_index'] = 'Ana səhifəyə qayıtmaq üçün %sbunu%s açın.';

$lang['Send_a_new_message'] = 'Yeni şəxsi ismarış göndər';
$lang['Send_a_reply'] = 'Şəxsi ismarışa cavab ver';
$lang['Edit_message'] = 'Şəxsi ismarışı redaktə et';

$lang['Notification_subject'] = 'Yeni şəxsi ismarış aldınız.';

$lang['Find_username'] = 'İstifadəçi adını axtar';
$lang['Find'] = 'Axtar';
$lang['No_match'] = 'Belə istifadəçi adı tapılmadı.';

$lang['No_post_id'] = 'İsmarış İD-si bilinmir.';
$lang['No_such_folder'] = 'Belə bir qovluq yoxdur.';
$lang['No_folder'] = 'Qovluq göstərilmədi.';

$lang['Mark_all'] = 'Hamısını seç';
$lang['Unmark_all'] = 'Seçilənləri ləğv et';

$lang['Confirm_delete_pm'] = 'Bu ismarışı silmək istədiyinizdən əminsiniz?';
$lang['Confirm_delete_pms'] = 'Bu ismarışları silmək istədiyinizdən əminsiniz?';

$lang['Inbox_size'] = 'Gələnlər qutunuz %d%% doludur'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Çatanlar qutunuz %d%% doludur';
$lang['Savebox_size'] = 'Qeyd edilənlər qutunuz %d%% doludur';

$lang['Click_view_privmsg'] = 'Oxumaq üçün %sbunu%s açın.';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = '%s: şəxsi mə`lumat səhifəsi'; // %s is username
$lang['About_user'] = '%s haqqında'; // %s is username

$lang['Preferences'] = 'Seçdiyiniz';
$lang['Items_required'] = '* işarəli sahənin doldurulması vacibdir, amma çalışın sadəcə e-məktub ünvanını göstərərək deyil, verilən sualların bir neçəsinə cavab verərək qeydiyyatdan keçəsiniz. Bu sizin hesabınızın aktivləşdirilməsini tezləşdirəcəkdir, daha sonra isə hesabınıza daxil olub şəxsi mə`lumatınızı dəyişdirə bilərsiniz.';
$lang['Registration_info'] = 'Qeydiyyat mə`lumatları';
$lang['Profile_info'] = 'Şəxsi mə`lumatlar';
$lang['Profile_info_warn'] = 'Bu mə`lumat hamı tərəfindən görünəcək';
$lang['Avatar_panel'] = 'Şəkil lövhəsi';
$lang['Avatar_gallery'] = 'Şəkil sərgisi';

$lang['Website'] = 'Veb səhifə';
$lang['Location'] = 'Şəhər/ölkə';
$lang['Contact'] = 'Əlaqə:';
$lang['Email_address'] = 'E-məktub ünvanı';
$lang['Email'] = 'E-məktub';
$lang['Send_private_message'] = 'Şəxsi ismarış göndər';
$lang['Hidden_email'] = '[ Gizli ]';
$lang['Search_user_posts'] = 'Bu istifadəçinin göndərdiyi ismarışları axtar';
$lang['Interests'] = 'Maraqlar';
$lang['Occupation'] = 'Peşə, sənət';
$lang['Poster_rank'] = 'İstifadəçinin reytinqi';

$lang['Total_posts'] = 'İsmarış sayı';
$lang['User_post_pct_stats'] = 'Bütün ismarışların %.2f%%'; // 1.25% of total
$lang['User_post_day_stats'] = 'Orta hesabla hər gün %.2f ismarış'; // 1.5 posts per day
$lang['Search_user_posts'] = '%s tərəfindən göndərilən bütün ismarışları axtar'; // Find all posts by username

$lang['No_user_id_specified'] = 'Bağışlayın, belə bir istifadəçi yoxdur.';
$lang['Wrong_Profile'] = 'Yalnız öz mə`lumatlarınızı redaktə edə bilərsiniz.';

$lang['Only_one_avatar'] = 'Yalnız bir şəkil seçə bilərsiniz.';
$lang['File_no_data'] = 'Verdiyiniz URL-dəki fayl tapılmadı.';
$lang['No_connection_URL'] = 'Verdiyiniz URL ilə rabitə alınmır.';
$lang['Incomplete_URL'] = 'Verdiyiniz URL tam deyil.';
$lang['Wrong_remote_avatar_format'] = 'URL-ini daxil etdiyiniz şəkil düzgün formatlı deyil.';
$lang['No_send_account_inactive'] = 'Bu an şifrəniz qəbul edilmir, çünkü hesabınız aktiv deyil. İdarəçilərə müraciət edin.';

$lang['Always_smile'] = 'Həmişə mimikalardan istifadə et';
$lang['Always_html'] = 'Həmişə HTML istifadə et';
$lang['Always_bbcode'] = 'Həmişə BBCode istifadə et';
$lang['Always_add_sig'] = 'Həmişə imzam görünsün';
$lang['Always_notify'] = 'Cavab olduğu barədə mənə həmişə xəbər ver';
$lang['Always_notify_explain'] = 'Sizin açdığınız hər hansı mövzuya verilən bütün cavablar e-məktubla bildirilsin? Bu funksiyanı hər ismarış üçün yeniləyə bilərsiniz.';

$lang['Board_style'] = 'Əsas stil';
$lang['Board_lang'] = 'Dil';
$lang['No_themes'] = 'Qeyd olunmuş mövzu yoxdur';
$lang['Timezone'] = 'Vaxt zonası';
$lang['Date_format'] = 'Saat formatı';
$lang['Date_format_explain'] = 'İstifadə edilən yazının tərzi PHP-dəki <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> uyğundur.';
$lang['Signature'] = 'İmza';
$lang['Signature_explain'] = 'Bu yazdığınız ismarışlarınızın sonunda qeyd olunacaqdır. %d işarə daxil edə bilərsiniz.';
$lang['Public_view_email'] = 'E-məktub ünvanımı həmişə göstər';

$lang['Current_password'] = 'İndiki şifrəniz';
$lang['New_password'] = 'Yeni şifrəniz';
$lang['Confirm_password'] = 'Yeni şifrənizi təkrar yazın';
$lang['Confirm_password_explain'] = 'Şifrənizi və ya e-məktub ünvanınızı dəyişmək üçün şifrənizi təkrar qeyd etməlisiniz.';
$lang['password_if_changed'] = 'Dəyişdirmək üçün şifrənizi yazın';
$lang['password_confirm_if_changed'] = 'Sadəcə şifrənizi dəyişdirmək istəyirsinizsə, yenisini qeyd etməlisiniz.';

$lang['Avatar'] = 'Şəkil';
$lang['Avatar_explain'] = 'İsmarışlarınızın yanındakı kiçik rəsm. Yalnız bir rəsm göstərilə bilər, eni %d pikseldən, hündürlüyü %d pikseldən və ölçüsü %dkB-dan böyük olmamalıdır.';
$lang['Upload_Avatar_file'] = 'Öz kompüterinizdəki şəkli yükləyin';
$lang['Upload_Avatar_URL'] = 'Şəkli URL-dan yükləyin';
$lang['Upload_Avatar_URL_explain'] = 'Şəklin olduğu saytın URL-nı yazın, şəkil köçürüləcəkdir.';
$lang['Pick_local_Avatar'] = 'Şəkli sərgidən seçin';
$lang['Link_remote_Avatar'] = 'Başqa bir saytdan şəkil seçin';
$lang['Link_remote_Avatar_explain'] = 'Arzuladığınız başqa bir rəsmin URL-nı yazın';
$lang['Avatar_URL'] = 'Şəkil URL-ı';
$lang['Select_from_gallery'] = 'Sərgidən şəkil seçin';
$lang['View_avatar_gallery'] = 'Sərgiyə baxın';

$lang['Select_avatar'] = 'Şəkil seç';
$lang['Return_profile'] = 'Ləğv et';
$lang['Select_category'] = 'Kateqoriya seç';

$lang['Delete_Image'] = 'Şəkli sil';
$lang['Current_Image'] = 'İndiki şəkil';

$lang['Notify_on_privmsg'] = 'Şəxsi ismarış aldığım halda mənə xəbər ver';
$lang['Popup_on_privmsg'] = 'Şəxsi ismarış gələndə yeni pəncərə aç';
$lang['Popup_on_privmsg_explain'] = 'Bunu seçdiyiniz halda, yeni şəxsi ismarış gəldiyində yeni bir pəncərə ilə xəbər alacaqsınız.';
$lang['Hide_user'] = 'Xətdə olduğumu gizlə';

$lang['Profile_updated'] = 'Şəxsi mə`lumatlarınız yeniləndi.';
$lang['Profile_updated_inactive'] = 'Şəxsi mə`lumatlarınız yeniləndi, amma bə`zi mə`lumatları dəyişdirdiyiniz üçün hesabınız hələ aktiv deyil. Yenidən aktivləşdirmək üçün mə`lumatı e-məktubla alacaqsınız, idarəçi müdaxiləsinə ehtiyac olduğu halda onu gözləməniz lazımdır';

$lang['Password_mismatch'] = 'Şifrələr uyğun gəlmir';
$lang['Current_password_mismatch'] = 'Şifrəniz səhvdir';
$lang['Password_long'] = 'Şifrəniz 32 hərf və ya rəqəmdən artıq ola bilməz.';
$lang['Username_taken'] = 'Bağışlayın, amma bu istifadəçi adı artıq tutulub.';
$lang['Username_invalid'] = 'Bağışlayın, istifadəçi adında \' bu işarədən istifadə etmək olmaz.';
$lang['Username_disallowed'] = 'Bağışlayın, bu istifadəçi adına icazə yoxdur.';
$lang['Email_taken'] = 'Bağışlayın, bu e-məktub ünvanı başqa istifadəçi tərəfindən qeyd olunub.';
$lang['Email_banned'] = 'Bağışlayın, bu e-məktub ünvanı qadağan edilib.';
$lang['Email_invalid'] = 'Bağışlayın, bu e-məktub ünvanı düzgün deyil.';
$lang['Signature_too_long'] = 'İmzanız çox uzundur.';
$lang['Fields_empty'] = 'Zəruri sətirləri doldurmalısınız.';
$lang['Avatar_filetype'] = 'Şəklin formatı .jpg, .gif ya da .png olmalıdır.';
$lang['Avatar_filesize'] = 'Şəklin ölçüsü%d kB-dan az olmalıdır.'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'Şəklin eni %d pikseldən, hündürlüyü %d pikseldən kiçik olmalıdır.';

$lang['Welcome_subject'] = '%s forumuna xoş gəldiniz.'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Yeni istifadəçi hesabı';
$lang['Account_activated_subject'] = 'Hesabınız aktivləşdirilmişdir.';

$lang['Account_added'] = 'Qeydiyyatdan keçdiyiniz üçün təşəkkür edirik, hesabınız yaradıldı. İstifadəçi adınız və şifrənizlə daxil olun.';
$lang['Account_inactive'] = 'Hesabınız yaradıldı. Aktivləşdirmə kodu e-məktub\'ünvanınıza göndərilmişdir. Daha ətraflı mə`lumat üçün e-məktublarınıza baxın.';
$lang['Account_inactive_admin'] = 'Hesabınız yaradıldı. Amma onun aktivləşdirilməsi üçün idarəçi təsdiqi lazımdır, onlara e-məktub göndərilmişdir, hesab aktivləşdiyi halda sizə e-məktubla xəbər veriləcəkdir.';
$lang['Account_active'] = 'Hesabınız aktivləşdirildi. Qeydiyyat üçün təşəkkür edirik.';
$lang['Account_active_admin'] = 'Hesabınız aktivləşdirildi.';
$lang['Already_activated'] = 'Hesabınız artıq aktivləşdirildi.';
$lang['Reactivate'] = 'Hesabınız yenidən aktivləşdirildi.';
$lang['COPPA'] = 'Hesabınız yaradıldı, amma təsdiqlənməsi lazımdır, mə`lumat üçün e-məktub\' ünvanınıza baxın.';

$lang['Registration'] = 'Qeydiyyat müqaviləsi';
$lang['Reg_agreement'] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forumda mövzu və ismarışların izlənməsi uçun nə qədər ciddi çalışsalarda, idarəçilərin heç də həmişə hər şeyi nəzərdən keçirmələri mümkün deyildir. Nəzərinizə çatdırmaq istəyirik ki, idarəçilər digər müəlliflər tərəfindən yazılan heç bir yazı uçun mə`suliyyət daşımır və forumdakı yazılar (yalnız öz yazılarından başqa) onların nogteyi-nəzərini ifade etmir.<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qeydiyyatdan keçərkən siz hesabat verirsiniz ki, bu foruma öz növbənizdə təhqiramiz, adət-ən`ənələrimizə uyğun olmayan, alçaldıcı, vulqar, söyüş, sataşma tərzində, nifrətamiz, rassist, cinsi məzmunlu və ya qeyri-qanuni hər hansı bir materialı göndərməyəcəksiniz. Əks təqdirdə, yə`ni burdakı şərtlərə qarşı çıxdığınız halda sizin foruma girişiniz dərhal və davamlı bağlanacaq, internet xidmətvericiniz mə`lumatlandırılacaqdır. Bütün göndərişlərin IP ünvanları belə halların qarşısını almaq məqsəqdi ilə qeyd edilməkdədir. Idarəçilər və nəzarətçilər yazılarınızın üzərində (yuxarıda göstərilən və bə`zi digər labüd səbəblərdən) müəyyən şərtlər daxilində-ifadə etmək istədiyiniz fikrə və ya mövzuya xələl gətirmədən (bu labüd olmadıqca) düzəlişlər etmək, silmək, digər yerə koçürtmək; yersiz açılmış və ya ekstremist xarakterli mövzuları bağlamaq səlahiyyətinə malikdirlər. Forumda olan yazıların üçüncü şəxs tərəfindən istifadəsi zamanı, eləcə də forum xakerlərin hucumuna mə`ruz qaldığı halda idarəçilər və nəzarətçilər mə`suliyyət daşımırlar. Qeydiyyatdan keçməklə siz bu şərtləri qəbul etmiş sayılırsınız. Qeydiyyatdan keçməmişdən əvvəl forumun qaydaları ilə də tanış olmanız məsləhətdir, ordakı şərtlər və tələblər sizi qane etmədiyi halda forumda iştirakınız arzuolunmazdır!';

$lang['Agree_under_13'] = 'Yuxarıdakı mətni oxudum və şərtləri qəbul edirəm. Yaşım 13-dən <b>azdır</b>.';
$lang['Agree_over_13'] = 'Yuxarıdakı mətni oxudum və şərtləri qəbul edirəm. Yaşım 13-dən <b>çoxdur</b>.';
$lang['Agree_not'] = 'Şərtləri qəbul etmirəm.';

$lang['Wrong_activation'] = 'Daxil etdiyiniz aktivləşdirmə kodu səhvdir.';
$lang['Send_password'] = 'Yeni şifrəmi mənə göndər';
$lang['Password_updated'] = 'Yeni şifrəniz qəbul olundu, aktivləşdirmək üçün mə`lumat e-məktub\' ünvanınıza göndərildi.';
$lang['No_email_match'] = 'Bu istifadəçi üçün yazdığınız e-məktub ünvanı bizdəki mə`lumatlara uyğun gəlmir.';
$lang['New_password_activation'] = 'Yeni şifrəni aktivləşdir';
$lang['Password_activated'] = 'Hesabınız yenidən aktivləşdirildi. Daxil olmaq üçün e-məktub\'ünvanınıza göndərilən şifrəni istifadə edin.';

$lang['Send_email_msg'] = 'E-məktub göndər';
$lang['No_user_specified'] = 'İstifadəçi adı seçin';
$lang['User_prevent_email'] = 'Bu istifadəçi e-məktub almaq istəmir. Şəxsi ismarış yazmağı sınayın.';
$lang['User_not_exist'] = 'Belə bir istifadəçimiz yoxdur.';
$lang['CC_email'] = 'Bu e-məktub\'un bir nüsxəsini özünüzə göndərə bilərsiniz.';
$lang['Email_message_desc'] = 'Bu ismarış düz mətn şəklindədir, BBCode ya da HTML istifade edilməyəcəkdir. Cavab ünvanı olaraq sizin e-məktub ünvanınız göstəriləcəkdir.';
$lang['Flood_email_limit'] = 'İndi başqa bir e-məktub göndərə bilməzsiniz, zəhmət olmazsa, bir qədər sonra bir də sınayın.';
$lang['Recipient'] = 'Kimə';
$lang['Email_sent'] = 'E-məktub göndərildi.';
$lang['Send_email'] = 'E-məktub göndər';
$lang['Empty_subject_email'] = 'E-məktub üçün başlıq seçməlisiniz.';
$lang['Empty_message_email'] = 'E-məktubla göndəriləcək mətni yazmalısınız.';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Ardıcıllığı seçin';
$lang['Sort'] = 'Sırala';
$lang['Sort_Top_Ten'] = 'TOP 10';
$lang['Sort_Joined'] = 'Giriş tarixi';
$lang['Sort_Username'] = 'İstifadəçi adı';
$lang['Sort_Location'] = 'Şəhər/ölkə';
$lang['Sort_Posts'] = 'İsmarış sayı';
$lang['Sort_Email'] = 'E-məktub';
$lang['Sort_Website'] = 'Veb səhifəsi';
$lang['Sort_Ascending'] = 'Artan';
$lang['Sort_Descending'] = 'Azalan';
$lang['Order'] = 'Quruluş';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Qrup nəzarəti lövhəsi';
$lang['Group_member_details'] = 'Qrup üzvlülük detalları';
$lang['Group_member_join'] = 'Hər hansı qrupa qoşul';

$lang['Group_Information'] = 'Qrup mə`lumatları';
$lang['Group_name'] = 'Qrup adı';
$lang['Group_description'] = 'Qrup şərhi';
$lang['Group_membership'] = 'Qrup üzvülüyü';
$lang['Group_Members'] = 'Qrup üzvləri';
$lang['Group_Moderator'] = 'Qrupun nəzarətçisi';
$lang['Pending_members'] = 'Təsdiq gözləyən üzvlər';

$lang['Group_type'] = 'Qrup növü';
$lang['Group_open'] = 'Açıq qrup';
$lang['Group_closed'] = 'Qapalı qrup';
$lang['Group_hidden'] = 'Gizli grup';

$lang['Current_memberships'] = 'Cari üzvlər';
$lang['Non_member_groups'] = 'Üzv olunmamış qruplar';
$lang['Memberships_pending'] = 'Təsdiq gözləyən üzvlülüklər';

$lang['No_groups_exist'] = 'Heç bir istifadəçi qrupu yoxdur.';
$lang['Group_not_exist'] = 'Belə bir istifadəçi qrupu yoxdur.';

$lang['Join_group'] = 'Qrupa qoşul';
$lang['No_group_members'] = 'Bu qrupda üzv yoxdur';
$lang['Group_hidden_members'] = 'Bu qrup gizlədilmişdir, üzvləri görə bilməzsiniz.';
$lang['No_pending_group_members'] = 'Bu qrupda təsdiq gözləyən üzvlülük yoxdur.';
$lang['Group_joined'] = 'Bu qrupa uğurla daxil oldunuz<br />Üzvlülüyünüz qəbul olunan kimi xəbər alacaqsınız.';
$lang['Group_request'] = 'Qrupunuza daxil olmaq üçün bir müraciət var.';
$lang['Group_approved'] = 'Müraciətiniz qəbul olunmuşdur.';
$lang['Group_added'] = 'Bu qrupa qəbul edildiniz.';
$lang['Already_member_group'] = 'Siz bu qrupun üzvüsünüz.';
$lang['User_is_member_group'] = 'İstifadəçi bu qrupun üzvüdür.';
$lang['Group_type_updated'] = 'Qrup növü yeniləndi.';

$lang['Could_not_add_user'] = 'Seçdiyiniz istifadəçi yoxdur.';
$lang['Could_not_anon_user'] = 'Qeydiyyatsız istifadəçini üzv edə bilməzsiniz.';

$lang['Confirm_unsub'] = 'Qrupu tərk etmək istədiyinizdən əminsiniz?';
$lang['Confirm_unsub_pending'] = 'Bu qrupda üzvlülüyünüz hələ təsdiqlənmədi, yenə də üzvlülüyü sildirmək istəyirsiniz?';

$lang['Unsub_success'] = 'Bu qrupdan qeydiniz silindi.';

$lang['Approve_selected'] = 'Seçilənləri təsdiqlə';
$lang['Deny_selected'] = 'Seçilənləri qəbul etmə';
$lang['Not_logged_in'] = 'Qrupa qoşulmaq üçün hesabınıza daxil olmalısınız.';
$lang['Remove_selected'] = 'Seçilənləri çıxar';
$lang['Add_member'] = 'Üzvü qəbul et';
$lang['Not_group_moderator'] = 'Bu qrupun nəzarətçisi olmadığınız üçün bunu edə bilməzsiniz.';

$lang['Login_to_join'] = 'Qrupa qoşulmaq və ya onu idarə etmək üçün hesabınıza daxil olmalısınız';
$lang['This_open_group'] = 'Bu qrup açıqdır, üzv olmaq üçün açın.';
$lang['This_closed_group'] = 'Bu qrup qapalıdır, yeni üzv qəbul edilmir.';
$lang['This_hidden_group'] = 'Bu qrup gizlidir, avtomatik üzv olmağa icazə yoxdur.';
$lang['Member_this_group'] = 'Bu qrupun üzvüsünüz.';
$lang['Pending_this_group'] = 'Bu qrupa üzvlülüyünüz təsdiq gözləyir.';
$lang['Are_group_moderator'] = 'Bu qrupun nəzarətçisisiniz.';
$lang['None'] = 'Yox';

$lang['Subscribe'] = 'Üz ol';
$lang['Unsubscribe'] = 'Üzlülüyü sildir';
$lang['View_Information'] = 'Qrup haqqında';


//
// Search
//
$lang['Search_query'] = 'Axtar';
$lang['Search_options'] = 'Axtarma xüsusiyyətləri';

$lang['Search_keywords'] = 'Açar sözləri axtar';
$lang['Search_keywords_explain'] = 'Tapılması zəruri olan sözləri <u>AND</u> ilə, nəticədə ola biləcək sözləri <u>OR</u> ilə və olmayacaq sözləri <u>NOT</u> ilə daxil edə bilərsiniz. * işarəsi ilə sözün mə`lum olmayan hissəsini qeyd edə bilərsiniz.';
$lang['Search_author'] = 'Müəllifi axtar';
$lang['Search_author_explain'] = '* işarəsi ilə sözün mə`lum olmayan hissəsini qeyd edə bilərsiniz.';

$lang['Search_for_any'] = 'Hər hansı bir ifadəni axtar';
$lang['Search_for_all'] = 'Hər yerdə axtar';
$lang['Search_title_msg'] = 'Mövzu və ismarış mətnində axtar';
$lang['Search_msg_only'] = 'Yalnız ismarış mətnində axtar';

$lang['Return_first'] = 'İsmarışın ilk'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'xüsusiyyətlərini göstər';

$lang['Search_previous'] = 'Vaxt'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Ardıcıllıq';
$lang['Sort_Time'] = 'Zaman';
$lang['Sort_Post_Subject'] = 'Mövzu';
$lang['Sort_Topic_Title'] = 'Mövzunun başlığı';
$lang['Sort_Author'] = 'Müəllif';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = 'Nəticələr';
$lang['All_available'] = 'Hamısı';
$lang['No_searchable_forums'] = 'Bu səhifədəki heç bir forumda axtarış aparmaq səlahiyyətiniz yoxdur.';

$lang['No_search_match'] = 'Axtardığınız xüsusiyyətli mövzu və ya ismarış tapılmadı.';
$lang['Found_search_match'] = 'Nəticədə %d ismarış tapıldı:'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Nəticədə %d ismarış tapıldı:'; // eg. Search found 24 matches

$lang['Close_window'] = 'Pəncərəni bağla';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Bağışlayın, yalnız %s bu foruma bildiriş göndərə bilər.';
$lang['Sorry_auth_sticky'] = 'Bağışlayın, yalnız %s bu foruma ismarış göndərə bilər.';
$lang['Sorry_auth_read'] = 'Bağışlayın, yalnız %s bu forumdakı ismarışları oxuya bilər.';
$lang['Sorry_auth_post'] = 'Bağışlayın, yalnız %s bu forumda mövzu aça bilər.';
$lang['Sorry_auth_reply'] = 'Bağışlayın, yalnız %s bu forumdakı ismarışlara cavab verə bilər.';
$lang['Sorry_auth_edit'] = 'Bağışlayın, yalnız %s bu forumdakı ismarışları redaktə edə bilər.';
$lang['Sorry_auth_delete'] = 'Bağışlayın, yalnız %s bu forumdakı ismarışları silə bilər.';
$lang['Sorry_auth_vote'] = 'Bağışlayın, yalnız %s bu forumdakı sorğuda iştirak edə bilər.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>qonaqlar</b>';
$lang['Auth_Registered_Users'] = '<b>qeydiyyatlı istifadəçilər</b>';
$lang['Auth_Users_granted_access'] = '<b>xüsusi səlahiyyətli istifadəçilər</b>';
$lang['Auth_Moderators'] = '<b>nəzarətçilər</b>';
$lang['Auth_Administrators'] = '<b>idarəçilər</b>';

$lang['Not_Moderator'] = 'Bu forumun nəzarətçisi deyilsiniz.';
$lang['Not_Authorised'] = 'İcazəniz yoxdur.';

$lang['You_been_banned'] = 'Bu forumdan xaric edildiniz.<br />Ətraflı mə`lumat üçün idarəçilərə müraciət edin.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'heç bir qeydiyyatlı istifadəçi və '; // There ae 5 Registered and
$lang['Reg_users_online'] = '%d qeydiyyatlı istifadəçi və '; // There ae 5 Registered and
$lang['Reg_user_online'] = '%d qeydiyyatlı istifadəçi və '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = 'heç bir gizli istifadəçi xətdə deyil.'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d gizli istifadəçi xətdədir.'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d gizli istifadəçi xətdədir.'; // 6 Hidden users online
$lang['Guest_users_online'] = '%d qonaq xətdədir.'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'heç bir qonaq xətdə deyil.'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d qonaq xətdədir.'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Hal hazırda forumda gəzən istifadəçi yoxdur.';

$lang['Online_explain'] = 'Bu mə`lumat son 5 dəq ərzində forumdakı istifadəçi sayına müvafiqdir.';

$lang['Forum_Location'] = 'Harada';
$lang['Last_updated'] = 'Son yeniləmə';

$lang['Forum_index'] = 'Forumun ana səhifəsi';
$lang['Logging_on'] = 'Hesabına daxil olur.';
$lang['Posting_message'] = 'İsmarış göndərir.';
$lang['Searching_forums'] = 'Axtarır.';
$lang['Viewing_profile'] = 'İstifadəçi mə`lumatlarına baxır.';
$lang['Viewing_online'] = 'Kimin xətdə olduğuna baxır.';
$lang['Viewing_member_list'] = 'İstifadəçi sıyahısına baxır.';
$lang['Viewing_priv_msgs'] = 'Şəxsi ismarışlarına baxır.';
$lang['Viewing_FAQ'] = 'MVS-ları oxuyur.';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Nəzarətçi lövhəsi';
$lang['Mod_CP_explain'] = 'Aşağıdakı lövhəni işlədərək forumdakı bir çox nəzarətçi funksiyalarını həyata keçirə bilərsiniz. Siz istədiyiniz qədər mövzunu bağlaya, aça, başqa yerə köçürə, silə bilərsiniz.';

$lang['Select'] = 'Seç';
$lang['Delete'] = 'Sil';
$lang['Move'] = 'Başqa yerə köçür';
$lang['Lock'] = 'Mövzunu bağla';
$lang['Unlock'] = 'Mövzunu aç';

$lang['Topics_Removed'] = 'Seçdiyiniz mövzular müvəffəqiyyətlə silindilər.';
$lang['Topics_Locked'] = 'Seçdiyiniz mövzular müvəffəqiyyətlə bağlandılar.';
$lang['Topics_Moved'] = 'Seçdiyiniz mövzular yeni yerinə köçürüldü.';
$lang['Topics_Unlocked'] = 'Seçdiyiniz mövzular yenidən açıldı.';
$lang['No_Topics_Moved'] = 'Heç bir mövzu köçürülmədi.';

$lang['Confirm_delete_topic'] = 'Seçdiyiniz mövzu/mövzuları silmək istədiyinizdən əminsiniz?';
$lang['Confirm_lock_topic'] = 'Seçdiyiniz mövzu/mövzuları bağlamaq istədiyinizdən əminsiniz?';
$lang['Confirm_unlock_topic'] = 'Seçdiyiniz mövzunun/mövzuların yenidən açılmasını istədiyinizdən əminsiniz?';
$lang['Confirm_move_topic'] = 'Seçdiyiniz mövzunun/mövzuların başqa yerə köçürülməsini istədiyinizdən əminsiniz?';

$lang['Move_to_forum'] = 'Bu foruma köçür:';
$lang['Leave_shadow_topic'] = 'Əvvəlki yerində izini saxla';

$lang['Split_Topic'] = 'Mövzu bölmə nəzarəti lövhəsi';
$lang['Split_Topic_explain'] = 'Bu funksiya ilə hər hansı bir mövzuda bir və ya bir neçə eyni məzmunlu ismarışları seçərək onu müxtəlif mövzulara ayıra bilərsiniz.';
$lang['Split_title'] = 'Yeni mövzunun başlığı';
$lang['Split_forum'] = 'Yeni forum';
$lang['Split_posts'] = 'Seçilən ismarışları ayır';
$lang['Split_after'] = 'Seçilən ismarışdan sonra ayır';
$lang['Topic_split'] = 'Seçilən mövzu müvəffəqiyyətlə ayrıldı.';

$lang['Too_many_error'] = 'Həddindən çox ismarış seçmisiniz. Mövzunu sadəcə bir ismarışdan ayıra bilərsiniz!';

$lang['None_selected'] = 'Bu əməliyyatı icra etmək üçün mövzu seçmədiniz. Geri qayıdıb bir mövzu seçin.';
$lang['New_forum'] = 'Yeni forum';

$lang['This_posts_IP'] = 'Bu ismarışı göndərənin IP ünvanı';
$lang['Other_IP_this_user'] = 'Bu istifadəçinin digər IP ünvanları';
$lang['Users_this_IP'] = 'Bu IP ünvanını istifadə edən başqa istifadəçilər';
$lang['IP_info'] = 'IP mə`lumatı';
$lang['Lookup_IP'] = 'Bu IP ünvanını axtar';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Bütün saatlar %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Saat';
$lang['-11'] = 'GMT - 11 Saat';
$lang['-10'] = 'GMT - 10 Saat';
$lang['-9'] = 'GMT - 9 Saat';
$lang['-8'] = 'GMT -8 Saat';
$lang['-7'] = 'GMT -7 Saat';
$lang['-6'] = 'GMT -6 Saat';
$lang['-5'] = 'GMT -5 Saat';
$lang['-4'] = 'GMT - 4 Saat';
$lang['-3.5'] = 'GMT - 3.5 Saat';
$lang['-3'] = 'GMT - 3 Saat';
$lang['-2'] = 'GMT -2 Saat';
$lang['-1'] = 'GMT - 1 Saat';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT +1 Saat';
$lang['2'] = 'GMT +2 Saat';
$lang['3'] = 'GMT + 3 Saat';
$lang['3.5'] = 'GMT + 3.5 Saat';
$lang['4'] = 'GMT + 4 Saat';
$lang['4.5'] = 'GMT + 4.5 Saat';
$lang['5'] = 'GMT + 5 Saat';
$lang['5.5'] = 'GMT + 5.5 Saat';
$lang['6'] = 'GMT + 6 Saat';
$lang['6.5'] = 'GMT + 6.5 Saat';
$lang['7'] = 'GMT + 7 Saat';
$lang['8'] = 'GMT +8 Saat';
$lang['9'] = 'GMT + 9 Saat';
$lang['9.5'] = 'GMT +9.5 Saat';
$lang['10'] = 'GMT +10 Saat';
$lang['11'] = 'GMT + 11 Saat';
$lang['12'] = 'GMT + 12 Saat';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT -12:00 Saat';
$lang['tz']['-11'] = 'GMT -11:00 Saat';
$lang['tz']['-10'] = 'GMT -10:00 Saat';
$lang['tz']['-9'] = 'GMT -9:00 Saat';
$lang['tz']['-8'] = 'GMT -8:00 Saat';
$lang['tz']['-7'] = 'GMT -7:00 Saat';
$lang['tz']['-6'] = 'GMT -6:00 Saat';
$lang['tz']['-5'] = 'GMT -5:00 Saat';
$lang['tz']['-4'] = 'GMT -4:00 Saat';
$lang['tz']['-3.5'] = 'GMT -3:30 Saat';
$lang['tz']['-3'] = 'GMT -3:00 Saat';
$lang['tz']['-2'] = 'GMT -2:00 Saat';
$lang['tz']['-1'] = 'GMT -1:00 Saat';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT +1:00 Saat';
$lang['tz']['2'] = 'GMT +2:00 Saat';
$lang['tz']['3'] = 'GMT +3:00 Saat';
$lang['tz']['3.5'] = 'GMT +3:30 Saat';
$lang['tz']['4'] = 'GMT +4:00 Saat';
$lang['tz']['4.5'] = 'GMT +4:30 Saat';
$lang['tz']['5'] = 'GMT +5:00 Saat';
$lang['tz']['5.5'] = 'GMT +5:30 Saat';
$lang['tz']['6'] = 'GMT +6:00 Saat';
$lang['tz']['6.5'] = 'GMT +6:30 Saat';
$lang['tz']['7'] = 'GMT +7:00 Saat';
$lang['tz']['8'] = 'GMT +8:00 Saat';
$lang['tz']['9'] = 'GMT +9:00 Saat';
$lang['tz']['9.5'] = 'GMT +9:30 Saat';
$lang['tz']['10'] = 'GMT +10:00 Saat';
$lang['tz']['11'] = 'GMT +11:00 Saat';
$lang['tz']['12'] = 'GMT +12:00 Saat';

$lang['datetime']['Sunday'] = 'Bazar';
$lang['datetime']['Monday'] = 'Bazar ertəsi';
$lang['datetime']['Tuesday'] = 'Çərşənbə axşamı';
$lang['datetime']['Wednesday'] = 'Çərşənbə';
$lang['datetime']['Thursday'] = 'Cümə axşamı';
$lang['datetime']['Friday'] = 'Cümə';
$lang['datetime']['Saturday'] = 'Şənbə';
$lang['datetime']['Sun'] = 'B.';
$lang['datetime']['Mon'] = 'B.e.';
$lang['datetime']['Tue'] = 'Ç.a.';
$lang['datetime']['Wed'] = 'Çər.';
$lang['datetime']['Thu'] = 'C.a.';
$lang['datetime']['Fri'] = 'C.';
$lang['datetime']['Sat'] = 'Ş.';
$lang['datetime']['January'] = 'Yanvar';
$lang['datetime']['February'] = 'Fevral';
$lang['datetime']['March'] = 'Mart';
$lang['datetime']['April'] = 'Aprel';
$lang['datetime']['May'] = 'May';
$lang['datetime']['June'] = 'İyun';
$lang['datetime']['July'] = 'İyul';
$lang['datetime']['August'] = 'Avqust';
$lang['datetime']['September'] = 'Sentyabr';
$lang['datetime']['October'] = 'Oktyabr';
$lang['datetime']['November'] = 'Noyabr';
$lang['datetime']['December'] = 'Dekabr';
$lang['datetime']['Jan'] = 'Yan.';
$lang['datetime']['Feb'] = 'Fev.';
$lang['datetime']['Mar'] = 'Mar.';
$lang['datetime']['Apr'] = 'Apr.';
$lang['datetime']['May'] = 'May';
$lang['datetime']['Jun'] = 'İyun';
$lang['datetime']['Jul'] = 'İyul';
$lang['datetime']['Aug'] = 'Avq.';
$lang['datetime']['Sep'] = 'Sen.';
$lang['datetime']['Oct'] = 'Okt.';
$lang['datetime']['Nov'] = 'Noy.';
$lang['datetime']['Dec'] = 'Dek.';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Mə`lumat';
$lang['Critical_Information'] = 'Tə`cili mə`lumat';

$lang['General_Error'] = 'Ümumi xəta';
$lang['Critical_Error'] = 'Ağır xəta';
$lang['An_error_occured'] = 'Xəta baş vermişdir.';
$lang['A_critical_error'] = 'Ağır xəta baş vermişdir.';

// Translator credit
$lang['TRANSLATION_INFO'] = "Azərbaycan dilinə tərcümə : <a href=\"http://www.fikrini.de\">Zəminə Məmmədova";

//
// That's all Folks!
// -------------------------------------------------

?>