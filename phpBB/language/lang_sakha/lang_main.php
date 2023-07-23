<?php
/***************************************************************************
 *                            lang_main.php [Sakha]
 *                              -------------------
 *     begin                : Sat Okt 04 2003
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id$
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
// Translation performed by Bert Jickty. Thank's  for Ukhan, Mekheele Tumus and Kyraha.
// e-mail: bertjickty@yandex.ru
// Sakha Alphabet  => five additional letters to russian: ҺӨҔҮҤ_һөҕүҥ
//


$lang['ENCODING'] = 'utf-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'Y.m.d'; // This should be changed to the default date format for your language, php date() format

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Түһүлгэлэр';
$lang['Category'] = 'Категория';
$lang['Topic'] = 'Кэпсэтии';
$lang['Topics'] = 'Кэпсэтиилэр';
$lang['Replies'] = 'Эппиэттэр';
$lang['Views'] = 'Көрүүлэр'; 
$lang['Post'] = 'Сурук';
$lang['Posts'] = 'Суруктар';
$lang['Posted'] = 'Кэлбит бириэмэтэ';
$lang['Username'] = 'Кыттааччы аата';
$lang['Password'] = 'Киирии тыл';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Суруйааччы киһи';
$lang['Author'] = 'Кэпсэтиини саҕалаабыт киһи';
$lang['Time'] = 'Кэм';
$lang['Hours'] = 'Чаһыы';
$lang['Message'] = 'Этии тыллара';

$lang['1_Day'] = 'Бүгүҥҥү';
$lang['7_Days'] = 'Кэлиҥҥи 7 хонук иһигэр';
$lang['2_Weeks'] = 'Кэлиҥҥи 2 нэдиэлэ иһигэр';
$lang['1_Month'] = 'Кэлиҥҥи ый иһигэр';
$lang['3_Months'] = 'Кэлиҥҥи 3 ый иһигэр';
$lang['6_Months'] = 'Кэлиҥҥи 6 ый иһигэр';
$lang['1_Year'] = 'Кэлиҥҥи сыл иһигэр';

$lang['Go'] = 'Бар';
$lang['Jump_to'] = 'Атын кэпсэтиигэ';
$lang['Submit'] = 'Ыытабын';
$lang['Reset'] = 'Саҥаттан';
$lang['Cancel'] = 'Алҕас';
$lang['Preview'] = 'Хайдах көстүөҕэй';
$lang['Confirm'] = 'Бигэргэт';
$lang['Spellcheck'] = 'Орфография';
$lang['Yes'] = 'Сөп';
$lang['No'] = 'Суох';
$lang['Enabled'] = 'Холбоммут';
$lang['Disabled'] = 'Арахсыбыт';
$lang['Error'] = 'Сыыһа';

$lang['Next'] = 'Аныгыскы';
$lang['Previous'] = 'Иннинээҕи';
$lang['Goto_page'] = 'Бу сирэйгэ көс:';
$lang['Joined'] = 'Бэлиэтэммит күнэ';
$lang['IP_Address'] = 'IP аадырыс';

$lang['Select_forum'] = 'Түһүлгэтэ тал';
$lang['View_latest_post'] = 'Кэлиҥҥи сурук';
$lang['View_newest_post'] = 'Кэлиҥҥи саҥа сурук';
$lang['Page_of'] = 'Мантан <b>%d</b> кэлбит <b>%d</b> сирэй'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ Number';
$lang['AIM'] = 'AIM Address';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '"%s" сайт түһүлгэлэрин испииһэгэ';

$lang['Post_new_topic'] = 'Саҥа кэпсэтиини саҕалааһын';
$lang['Reply_to_topic'] = 'Кэпсэтиигэ сурук суруйуу';
$lang['Reply_with_quote'] = 'Быһа тардыылаах этии';

$lang['Click_return_topic'] = '%sТөттөрү кэпсэтиигэ%s';
$lang['Click_return_login'] = '%sӨссө биирдэ киирэн көр%s';
$lang['Click_return_forum'] = '%sТөттөрү түһүлгэҕэ%s';
$lang['Click_view_message'] = '%sСуруйбуккун көр%s';
$lang['Click_return_modcp'] = '%sТөттөрү түһүлгэ сүрүннээччитигэр%s';
$lang['Click_return_group'] = '%sТөттөрү бөлөхтөр тустарынан суруллубут сирэйгэ%s';

$lang['Admin_panel'] = 'Төттөрү түһүлгэни салайыы сирэйигэр';

$lang['Board_disable'] = 'Билигин бу түһүлгэ арахсан турар. Кэлин киирэн көрөөр';


//
// Global Header strings
//
$lang['Registered_users'] = 'Бэлиэтэммит кыттааччылар:';
$lang['Browsing_forum'] = 'Билигин бу түһүлгэҕэ бааллар:';
$lang['Online_users_zero_total'] = 'Билигин түһүлгэҕэ биир да киһи суох: <b>0</b>, олортон ';
$lang['Online_users_total'] = 'Билигин түһүлгэҕэ бачча киһи баар: <b>%d</b>, олортон ';
$lang['Online_user_total'] = 'Билигин түһүлгэҕэ биир киһи баар: <b>%d</b>, олортон ';
$lang['Reg_users_zero_total'] = 'бэлиэтэммиттэрэ: 0, ';
$lang['Reg_users_total'] = 'бэлиэтэммиттэрэ: %d, ';
$lang['Reg_user_total'] = 'бэлиэтэммиттэрэ: %d, ';
$lang['Hidden_users_zero_total'] = 'саспыттара: 0 уонна ';
$lang['Hidden_users_total'] = 'саспыттара: %d уонна ';
$lang['Hidden_user_total'] = 'саспыттара: %d уонна ';
$lang['Guest_users_zero_total'] = 'ыалдьыттар: 0';
$lang['Guest_users_total'] = 'ыалдьыттар: %d';
$lang['Guest_user_total'] = 'ыалдьыттар: %d';
$lang['Record_online_users'] = 'Муҥутаан <b>%s</b> кыттааччы  (%s) буола сылдьыбыт '; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sСалайааччы%s';
$lang['Mod_online_color'] = '%sСүрүннээччи%s';

$lang['You_last_visit'] = 'Кэлиҥҥи сылдьыбыт кэмиҥ: %s';
$lang['Current_time'] = 'Билиҥҥи кэм: %s'; // %s replaced by time

$lang['Search_new'] = 'Кэлин эн суоххар кэлбит этиилэр';
$lang['Search_your_posts'] = 'Эн ыыппыт этиилэриҥ';
$lang['Search_unanswered'] = 'Эппиэттэммэтэх этиилэр';

$lang['Register'] = 'Бэлиэтэнии';
$lang['Profile'] = 'Киэп билэ';
$lang['Edit_profile'] = 'Киэп билэни көннөрүү';
$lang['Search'] = 'Көрдөөһүн';
$lang['Memberlist'] = 'Кыттааччылар испииһэктэрэ';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'BBCode туһунан';
$lang['Usergroups'] = 'Бөлөхтөр';
$lang['Last_Post'] = 'Кэлиҥҥи этии';
$lang['Moderator'] = 'Түһүлгэ сүрүннээччитэ';
$lang['Moderators'] = 'Түһүлгэ сүрүннээччилэрэ';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Биир да кыттааччы сурук ыыппатах'; // Number of posts
$lang['Posted_article_total'] = 'Кыттааччылар суруктарын ахсаана: <b>%d</b>'; // Number of posts
$lang['Posted_articles_total'] = 'Кыттааччылар суруктарын ахсаана: <b>%d</b>'; // Number of posts
$lang['Registered_users_zero_total'] = 'Бэлиэтэммит кыттааччылар суохтар'; // # registered users
$lang['Registered_user_total'] = 'Бэлиэтэммит кыттааччылар ахсааннара: <b>%d</b>'; // # registered users
$lang['Registered_users_total'] = 'Бэлиэтэммит кыттааччылар ахсааннара: <b>%d</b>'; // # registered users
$lang['Newest_user'] = 'Кэлиҥҥи бэлиэтэммит кыттааччы: <b>%s%s%s</b>'; // username

$lang['No_new_posts_last_visit'] = 'Кэлин эн суоххар сурук кэлбэтэҕэ';
$lang['No_new_posts'] = 'Саҥа сурук суох';
$lang['New_posts'] = 'Саҥа суруктар';
$lang['New_post'] = 'Саҥа сурук ';
$lang['No_new_posts_hot'] = 'Саҥа сурук суох [ Биһирэммит кэпсэтиигэ ]';
$lang['New_posts_hot'] = 'Саҥа сурук [ Биһирэммит кэпсэтиигэ ]';
$lang['No_new_posts_locked'] = 'Саҥа этии суох [ Тохтотуллубут кэпсэтии ]';
$lang['New_posts_locked'] = 'Саҥа этиилэр [ Тохтотуллубут кэпсэтии ]';
$lang['Forum_is_locked'] = 'Тохтотуллубут кэпсэтии';


//
// Login
//
$lang['Enter_password'] = 'Ааккын уонна киирии тылгын суруй';
$lang['Login'] = 'Киирии';
$lang['Logout'] = 'Тахсыы';

$lang['Forgotten_password'] = 'Киирии тылбын умнубуппун';

$lang['Log_me_in'] = 'Сырыы аайы киирии тылын көрдөөмө';

$lang['Error_login'] = 'Сыыһа дуу, биһиэхэ суох ааты дуу, эбэтэр сыыһа киирии тылын эттиҥ дуу быһыылаах.';


//
// Index page
//
$lang['Index'] = 'Сүрүн сирэй';
$lang['No_Posts'] = 'Биир да сурук суох';
$lang['No_forums'] = 'Манна кэпсэтэр түһүлгэ суох';

$lang['Private_Message'] = 'Туһаайыллыбыт этии ';
$lang['Private_Messages'] = 'Туһаайыллыбыт этиилэр';
$lang['Who_is_Online'] = 'Билигин түһүлгэҕэ ким баара:';

$lang['Mark_all_forums'] = 'Түһүлгэлэри барытын ааҕыллыбыт курдук көрдөр';
$lang['Forums_marked_read'] = 'Түһүлгэлэр бары ааҕыллыбыт курдук көстүөхтэрэ';


//
// Viewforum
//
$lang['View_forum'] = 'Түһүлгэни көрүү';

$lang['Forum_not_exist'] = 'Ыйбыт түһүлгэҥ суох эбит';
$lang['Reached_on_error'] = 'Манна алҕас тиийэҥ хаалбыккын';

$lang['Display_topics'] = 'Кэпсэтиилэри көрдөр';
$lang['All_Topics'] = 'Бары кэпсэтиилэр';

$lang['Topic_Announcement'] = '<b>Кэпсэтии биллэриитэ:</b>';
$lang['Topic_Sticky'] = '<b>Сыһыарыллыбыт кэпсэтии:</b>';
$lang['Topic_Moved'] = '<b>Көспүт кэпсэтии:</b>';
$lang['Topic_Poll'] = '<b>[ Кэпсэтии ыйытынньыга ]</b>';

$lang['Mark_all_topics'] = 'Бу түһүлгэҕэ баар кэпсэтиилэри барытын ааҕыллыбыт курдук көрдөр';
$lang['Topics_marked_read'] = 'Бу түһүлгэҕэ баар кэпсэтиилэр бары ааҕыллыбыт курдук көстүөхтэрэ';

$lang['Rules_post_can'] = 'Эн саҥа кэпсэтиилэри <b>саҕалыаххын сөп</b>';
$lang['Rules_post_cannot'] = 'Эн саҥа кэпсэтиилэри саҕалыыр  <b>кыаҕыҥ суох</b>';
$lang['Rules_reply_can'] = 'Сурук суруйуоххун <b>сөп</b>';
$lang['Rules_reply_cannot'] = 'Сурук суруйар <b>кыаҕыҥ суох</b>';
$lang['Rules_edit_can'] = 'Суруктаргын көннөрүөххүн <b>сөп</b>';
$lang['Rules_edit_cannot'] = 'Суруктаргын көннөрөр <b>кыаҕыҥ суох</b>';
$lang['Rules_delete_can'] = 'Суруктаргын сотторуоххун <b>сөп</b>';
$lang['Rules_delete_cannot'] = 'Суруктаргын сотторор <b>кыаҕыҥ суох</b>';
$lang['Rules_vote_can'] = 'Ыйытынньыктарга куоластыаххын <b>сөп</b>';
$lang['Rules_vote_cannot'] = 'Ыйытынньыктарга куоластыыр <b>кыаҕыҥ суох</b>';
$lang['Rules_moderate'] = ' %sбу түһүлгэни салайан ыытыаххын%s <b>сөп</b>'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Бу түһүлгэҕэ кэпсэтии тахса илик.<br />Манна <b>Саҥа кэпсэтиини саҕалыыбын</b> баттаатаххына эн этииҥ бастакы буолуо.';


//
// Viewtopic
//
$lang['View_topic'] = 'Кэпсэтиини көрүү';

$lang['Guest'] = 'Ыалдьыт';
$lang['Post_subject'] = 'Этии баһа';
$lang['View_next_topic'] = 'Аныгыскы кэпсэтии';
$lang['View_previous_topic'] = 'Бу иннинээҕи көрбүт кэпсэтииҥ';
$lang['Submit_vote'] = 'Куоластыыбын';
$lang['View_results'] = 'Куоластааһын хаамыыта';

$lang['No_newer_topics'] = 'Бу түһүлгэҕэ саҥа кэпсэтиилэр суохтар';
$lang['No_older_topics'] = 'Бу түһүлгэҕэ урукку кэпсэтиилэр суохтар';
$lang['Topic_post_not_exist'] = 'Эн ыйыппыт кэпсэтииҥ суох.';
$lang['No_posts_topic'] = 'Бу кэпсэтиигэ ким да суруйбатах';

$lang['Display_posts'] = 'Суруктары көрдөр';
$lang['All_Posts'] = 'Бары суруктар';
$lang['Newest_First'] = 'Саҥа суруктартан саҕалаан';
$lang['Oldest_First'] = 'Урукку суруктартан саҕалаан';

$lang['Back_to_top'] = 'Саҕаланыытыгар таҕыс';

$lang['Read_profile'] = 'Бу киһи киэп билэтэ'; // Followed by username of poster
$lang['Send_email'] = 'Бу киһи e-mail-ла'; // Followed by username of poster
$lang['Visit_website'] = 'Бу киһи вебсайта';
$lang['ICQ_status'] = 'ICQ-тун туруга';
$lang['Edit_delete_post'] = 'Этиини көннөрүү эбэтэр сотторуу';
$lang['View_IP'] = 'Бу киһи IP аадырыһа';
$lang['Delete_post'] = 'Бу этиини сотторуу';

$lang['wrote'] = 'суруйбут'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Быһа тардыы'; // comes before bbcode quote output.
$lang['Code'] = 'BB куода'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Кэнники %s %s көннөрүллүбүтэ;
%d төгүл көннөрүллүбүтэ'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Кэнники %s %s көннөрүллүбүтэ;
%d төгүл көннөрүллүбүтэ'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Кэпсэтиини тохтот';
$lang['Unlock_topic'] = 'Кэпсэтиини салгыырга көҥүллээhин';
$lang['Move_topic'] = 'Кэпсэтиини көһөр';
$lang['Delete_topic'] = 'Кэпсэтиини соттор';
$lang['Split_topic'] = 'Кэпсэтиини хайыт';

$lang['Stop_watching_topic'] = 'Бу кэпсэтиини көрөрү тохтот';
$lang['Start_watching_topic'] = 'Бу кэпсэтиини көрөрү саҕалаа';
$lang['No_longer_watching'] = 'Бу кэпсэтиини аны көрбөккүн';
$lang['You_are_watching'] = 'Бу кэпсэтии хайдах барарын мантан инньэ көрөҕүн';

$lang['Total_votes'] = 'Хас киһи куоластаабыта';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Этии тыллара';
$lang['Topic_review'] = 'Кэпсэтии хайдах баран иһэрэ';

$lang['No_post_mode'] = 'Бу туох этии буолара ыйыллыбатах'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Саҥа кэпсэтиини саҕалыыр сурук';
$lang['Post_a_reply'] = 'Эппиэт';
$lang['Post_topic_as'] = 'Кэпсэтиим хайдаҕа';
$lang['Edit_Post'] = 'Этиини көннөрүү';
$lang['Options'] = 'Эбии туруоруулар';

$lang['Post_Announcement'] = 'Биллэрии';
$lang['Post_Sticky'] = 'Сыһыарыы сурук';
$lang['Post_Normal'] = 'Көннөрү сурук';

$lang['Confirm_delete'] = 'Кырдьык бу суругу сотторуоххун баҕараҕын дуо?';
$lang['Confirm_delete_poll'] = 'Кырдьык бу ыйытынньыгы сотторуоххун баҕараҕын дуо?';

$lang['Flood_Error'] = 'Субуруччу икки суругу ыыппаккын. Тохтуу түһэн баран ыытан көр.';
$lang['Empty_subject'] = 'Саҥа кэпсэтии саҕалыыргар, туох туһунан буоларын суругуҥ баһыгар суруйуоххун наада';
$lang['Empty_message'] = 'Суруккар туох эмит диэххин наада';
$lang['Forum_locked'] = 'Бу түһүлгэ бүппүтэ, саҥа кэпсэтии манна аны саҕаламмат уонна урукку кэпсэтиилэри көннөрбөккүн.';
$lang['Topic_locked'] = 'Бу кэпсэтии бүппүтэ, саҥа суругу манна аны ыыппаххын уонна урукку суруктары көннөрбөккүн.';
$lang['No_post_id'] = 'Көннөрүөххүн баҕарар суруккун тал';
$lang['No_topic_id'] = 'Кыттыһыаххын баҕарар суруккун тал';
$lang['No_valid_mode'] = 'Эн кэпсэтиини саҕалыаххын, кэпсэтиилэргэ кыттыаххытын, суруктаргын көннөрүөххүн уонна быһа тардыылаах суруктары ыытыаххын эрэ сөп. Төттөрү баран өссө холунан көр.';
$lang['No_such_post'] = 'Суругуҥ тиийбэтэ. Төттөрү баран өссө холунан көр.';
$lang['Edit_own_posts'] = 'Эн бэйэҥ эрэ суруктаргын көннөрүөххүн сөп, атын киһи суруктарын уларыппаккын';
$lang['Delete_own_posts'] = 'Эн бэйэҥ эрэ суруктаргын сотторуоххун сөп, атын киһи суруктарын сотторбоккун';
$lang['Cannot_delete_replied'] = 'Эппиэттэммит сурук сотторуллубат';
$lang['Cannot_delete_poll'] = 'Куоластаах ыйытынньык сотторуллубат';
$lang['Empty_poll_title'] = 'Ыйытынньык туох туһунан буоларын суруйуохха наада';
$lang['To_few_poll_options'] = 'Ыйытынньыкка иккиттэн итэҕэһэ суох эппиэт холобурдара баар буолуохтах';
$lang['To_many_poll_options'] = 'Ыйытынньыгыҥ наһаа элбэх эппиэт холобурдаах';
$lang['Post_has_no_poll'] = 'Бу кэпсэтиигэ ыйытынньык суох';
$lang['Already_voted'] = 'Биир ыйытынньыкка эн биирдэ эрэ куоластыаххын сөп';
$lang['No_vote_option'] = 'Куоластыыргар биир эмит эппиэт холобурун талыаххын наада';

$lang['Add_poll'] = 'Ыйытынньык эбэбин';
$lang['Add_poll_explain'] = 'Бу этиигэ ыйытынньык эбиэххин баҕарбатаххына маны ыраас хааллар';
$lang['Poll_question'] = 'Ыйытыы';
$lang['Poll_option'] = 'Эппиэт холобура';
$lang['Add_option'] = 'Өссө эппиэт холобурун эбэбин';
$lang['Update'] = 'Саҥарт';
$lang['Delete'] = 'Соттор';
$lang['Poll_for'] = 'Ыйытынньык төһө өр турара';
$lang['Days'] = 'Күн'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Ыйытынньык бүппэтин туһугар 0 туруор эбэтэр ыраас хааллар ]';
$lang['Delete_poll'] = 'Ыйытынньыгы соттор';

$lang['Disable_HTML_post'] = 'Бу этиигэ HTML-лы араар';
$lang['Disable_BBCode_post'] = 'Бу этиигэ BBCode-ды араар';
$lang['Disable_Smilies_post'] = 'Бу этиигэ Мичиликтэри араар';

$lang['HTML_is_ON'] = 'HTML <u>ХОЛБОНОН ТУРАР</u>';
$lang['HTML_is_OFF'] = 'HTML <u>АРАХСАН ТУРАР</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>ХОЛБОНОН ТУРАР</u>';
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>АРАХСАН ТУРАР</u>';
$lang['Smilies_are_ON'] = 'Мичиликтэр <u>ХОЛБОНОН ТУРАЛЛАР</u>';
$lang['Smilies_are_OFF'] = 'Мичиликтэр <u>АРАХСАН ТУРАЛЛАР</u>';

$lang['Attach_signature'] = 'Илии баттааһыммын холбуу тутан ыыт (илии баттааһыны бэлиэҕэр уларытыаххын сөп)';
$lang['Notify'] = 'Бу кэпсэтиигэ сурук кэллэҕинэ миэхэ биллэрээриҥ';
$lang['Delete_post'] = 'Бу суругу соттор';

$lang['Stored'] = 'Ыыппыт суругуҥ этэҥҥэ кэпсэтиигэ киирдэ';
$lang['Deleted'] = 'Суругуҥ этэҥҥэ сотторулунна';
$lang['Poll_delete'] = 'Ыйытынньыгыҥ этэҥҥэ сотторулунна';
$lang['Vote_cast'] = 'Куолаһыҥ ааҕылынна';

$lang['Topic_reply_notification'] = 'Кэпсэтиигэ сурук кэлбитин туһунан биллэрии';

$lang['bbcode_b_help'] = 'Суон бичик: [b]тыллар[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Кыҥнары бичик: [i]тыллар[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Аннынан тардыллыбыт бичик: [u]тыллар[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Быһа тардыы: [quote]тыллар[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Куода (программа): [code]куода[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Испииһэк: [list]тыллар[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Нүөмэрдэммит испииһэк: [list=]текст[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Хартыына сыһыары тутабын: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL сыһыары тутабын: [url]http://url[/url] эбэтэр [url=http://url]URL тыллара[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Бары аһаҕас bbCode тегтарын сабабын';
$lang['bbcode_s_help'] = 'Бичик өҥө: [color=red]текст[/color]  Этэн биэрии: бу өҥү туһаныхха сөп color=#FF0000';
$lang['bbcode_f_help'] = 'Бичик улахана: [size=x-small]аҕыйах тыл[/size]';

$lang['Emoticons'] = 'Мичиликтэр';
$lang['More_emoticons'] = 'Эбии мичиликтэр';

$lang['Font_color'] = 'Бичик өҥө';
$lang['color_default'] = 'Ыйыллыбатаҕына турар өҥ';
$lang['color_dark_red'] = 'Хараҥа кыһыл';
$lang['color_red'] = 'Кыһыл';
$lang['color_orange'] = 'Сырдык саарыл';
$lang['color_brown'] = 'Бороҥ';
$lang['color_yellow'] = 'Араҕас';
$lang['color_green'] = 'От күөх';
$lang['color_olive'] = 'Саhархай';
$lang['color_cyan'] = 'Сырдык халлаан күөҕэ';
$lang['color_blue'] = 'Халлаан күөх';
$lang['color_dark_blue'] = 'Хараҥа халлаан күөҕэ';
$lang['color_indigo'] = 'Тунах күөх';
$lang['color_violet'] = 'Хара саарыл';
$lang['color_white'] = 'Маҥан';
$lang['color_black'] = 'Хара';

$lang['Font_size'] = 'Бичик улахана';
$lang['font_tiny'] = 'Бып-быытыкаайык';
$lang['font_small'] = 'Кыра';
$lang['font_normal'] = 'Көннөрү';
$lang['font_large'] = 'Обургу';
$lang['font_huge'] = 'Улахан';

$lang['Close_Tags'] = 'Тегтары сап';
$lang['Styles_tip'] = 'Этэн биэрии: Талыллыбыт тылларга түргэнник истииллэри туһаныахха сөп';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Туһаайыллыбыт суругу суруйуу';

$lang['Login_check_pm'] = 'Эйиэхэ туһаайыллыбыт суруктары киирэн көр';
$lang['New_pms'] = 'Саҥа туһаайыллыбыт суруктар: %d'; // You have 2 new messages
$lang['New_pm'] = 'Саҥа туһаайыллыбыт сурук: %d'; // You have 1 new message
$lang['No_new_pm'] = 'Саҥа туһаайыллыбыт суруктар суохтар';
$lang['Unread_pms'] = 'Ааҕылла илик туһаайыллыбыт суруктар: %d';
$lang['Unread_pm'] = 'Ааҕылла илик туһаайыллыбыт сурук: %d';
$lang['No_unread_pm'] = 'Ааҕылла илик туһаайыллыбыт суруктар суохтар';
$lang['You_new_pm'] = 'Эйиэхэ туһаайыллыбыт биир сурук баар';
$lang['You_new_pms'] = 'Эйиэхэ туһаайыллыбыт хас да сурук баар';
$lang['You_no_new_pm'] = 'Эйиэхэ туһаайыллыбыт биир да сурук суох';

$lang['Unread_message'] = 'Ааҕылла илик сурук';
$lang['Read_message'] = 'Ааҕыллыбыт сурук';

$lang['Read_pm'] = 'Туһаайыллыбыт суругу ааҕабын';
$lang['Post_new_pm'] = 'Саҥа туһаайыллыбыт суругу суруйан ыытабын';
$lang['Post_reply_pm'] = 'Бу туһаайыллыбыт сурукка эппиэт';
$lang['Post_quote_pm'] = 'Быһа тардыылаах туһаайыллыбыт сурук';
$lang['Edit_pm'] = 'Туһаайыллыбыт суругу көннөрөбүн';

$lang['Inbox'] = 'Киирбит суруктар';
$lang['Outbox'] = 'Ыытыллар суруктар';
$lang['Savebox'] = 'Ууруллубут суруктар';
$lang['Sentbox'] = 'Ыытыллыбыт суруктар';
$lang['Flag'] = 'Былаах';
$lang['Subject'] = 'Этии баһа';
$lang['From'] = 'Кимтэн';
$lang['To'] = 'Кимиэхэ';
$lang['Date'] = 'Хаһан';
$lang['Mark'] = 'Сурук бэлиэтэ';
$lang['Sent'] = 'Ыытылынна';
$lang['Saved'] = 'Уурулунна';
$lang['Delete_marked'] = 'Бэлиэтэммит суруктары ылан бырах';
$lang['Delete_all'] = 'Барытын бырах';
$lang['Save_marked'] = 'Бэлиэтэммиттэри ылан уур'; 
$lang['Save_message'] = 'Бу суругу уур';
$lang['Delete_message'] = 'Бу суругу бырах';

$lang['Display_messages'] = 'Бу суруктары көрдөр'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Бары суруктар';

$lang['No_messages_folder'] = 'Бу папкаҕа сурук суох';

$lang['PM_disabled'] = 'Бу түһүлгэҕэ туһаайыллыбыт этиилэри ыытар  бобуллан турар';
$lang['Cannot_send_privmsg'] = 'Эн туһаайыллыбыт этиилэри ыытар кыаҕыҥ суох';
$lang['No_to_user'] = 'Кимиэхэ ыытаргын суруйбатаххын';
$lang['No_such_user'] = 'Бээ, оннук ааттаах киһи биһиэхэ суох ээ';

$lang['Disable_HTML_pm'] = 'Бу этиигэ HTML-ы араар';
$lang['Disable_BBCode_pm'] = 'Бу этиигэ BBCode-ды араар';
$lang['Disable_Smilies_pm'] = 'Бу этиигэ мичиликтэри араар';

$lang['Message_sent'] = 'Эн этииҥ барда';

$lang['Click_return_inbox'] = '%sманна%s баттаатаххына кэлбит суруктарга төннөҕүн';
$lang['Click_return_index'] = '%sманна%s баттаатаххына түһүлгэ баһыгар тиийэҕин';

$lang['Send_a_new_message'] = 'Саҥа туһаайыллыбыт этиини ыытабын';
$lang['Send_a_reply'] = 'Туһаайыллыбыт этиигэ эппиэттиибин';
$lang['Edit_message'] = 'Туһаайыллыбыт этиибин көннөрүөм';

$lang['Notification_subject'] = 'Эйиэхэ саҥа туһаайыллыбыт сурук кэллэ';

$lang['Find_username'] = 'Түһүлгэ кыттааччытын көрдөө';
$lang['Find'] = 'Бул';
$lang['No_match'] = 'Булуллубата';

$lang['No_post_id'] = 'ID ыйбатаххын';
$lang['No_such_folder'] = 'Оннук папка суох';
$lang['No_folder'] = 'Папканы ыйбатаххын';

$lang['Mark_all'] = 'Барытын талабын';
$lang['Unmark_all'] = 'Алҕас барытын талбыппын';

$lang['Confirm_delete_pm'] = 'Кырдьык бу суругу ылан быраҕабын дуо?';
$lang['Confirm_delete_pms'] = 'Кырдьык бу суруктары ылан быраҕабын дуо?';

$lang['Inbox_size'] = 'Эн &laquo;Киирбит суруктар&raquo; папкаҥ %d%% туолбут'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Эн&laquo;Ыытыллыбыт суруктар&raquo; папкаҥ %d%% туолбут'; 
$lang['Savebox_size'] = 'Эн &laquo;Ууруллубут суруктар&raquo; папкаҥ %d%% туолбут';

$lang['Click_view_privmsg'] = '%sманна%s баттаатаххына киирбит суруктаргар тиийэҕин';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Кыттааччы киэп билэтэ :: %s'; // %s is username 
$lang['About_user'] = 'Кыттааччы туһунан %s'; // %s is username

$lang['Preferences'] = 'Кыттааччы туруоруулара';
$lang['Items_required'] = 'Маннык бэлиэтэммит * туруоруулар толоруллара булгуччулаах';
$lang['Registration_info'] = 'Бэлиэтэнии ис хоһооно';
$lang['Profile_info'] = 'Киэп билэ ис хоһооно';
$lang['Profile_info_warn'] = 'Бу барыларыгар көстүөҕэ';
$lang['Avatar_panel'] = 'Абаатары салайыы';
$lang['Avatar_gallery'] = 'Абаатардар көрүнньүктэрэ';

$lang['Website'] = 'Сайта';
$lang['Location'] = 'Хантан сылдьара';
$lang['Contact'] = 'Хайдах булабыт'; 
$lang['Email_address'] = 'E-mail аадырыс';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = 'Туһуламмыт сурук';
$lang['Hidden_email'] = '[ Кистэммит e-mail ]';
$lang['Search_user_posts'] = 'Бу киһи ыыппыт бары этиилэрэ';
$lang['Interests'] = 'Тугу интириэһиргиирэ';
$lang['Occupation'] = 'Тугунан дьарыктанара';
$lang['Poster_rank'] = 'Таhыма';

$lang['Total_posts'] = 'Төһө этиилээҕэ';
$lang['User_post_pct_stats'] = 'Бары этиилэртэн бырыһыана %.2f%% '; // 15% of total
$lang['User_post_day_stats'] = 'Күҥҥэ этиилэрин ахсааннара %.2f '; // 1.5 posts per day
$lang['Search_user_posts'] = 'Бу киһи этиилэрин барытын бул %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Маннык ааттаах киһи биһиэхэ суох ээ';
$lang['Wrong_Profile'] = 'Атын киһи киэп билэтин көннөрөр кыаҕыҥ суох.';

$lang['Only_one_avatar'] = 'Биир эрэ аабаaтары туттуоххун сөп';
$lang['File_no_data'] = 'Эн ыйбыт URL-гар баар билэ туга да суох';
$lang['No_connection_URL'] = 'Эн ыйбыт URL-гын кытта кыайан холбоммотубут';
$lang['Incomplete_URL'] = 'URL-гын толору суруй';
$lang['Wrong_remote_avatar_format'] = 'Аабаатар сыыһа URL-лаах';
$lang['No_send_account_inactive'] = 'Киирии тыл ыытыллыбат, тоҕо диэтэххинэ эн бэлиэтэммит аатыҥ арахсан сылдьар. Эбии быһаарыыны түһүлгэ сүрүннээччититтэн ыйыт.';

$lang['Always_smile'] = 'Мичиликтэр куруук холбоно сырыттыннар';
$lang['Always_html'] = 'HTML куруук холбоно сырыттын';
$lang['Always_bbcode'] = 'BBCode куруук холбоно сырыттын';
$lang['Always_add_sig'] = 'Мин илии баттааһыммын куруук туруор';
$lang['Always_notify'] = 'Эппиэттэр кэллэхтэринэ куруук биллэрээр';
$lang['Always_notify_explain'] = 'Мин этиибэр ким эмит эппиэттээтэҕинэ, миигин e-mail-нан биллэрээр. Маны этии суруйаргар эмиэ туруоруохха сөп.';

$lang['Board_style'] = 'Түһүлгэ тас көрүҥэ';
$lang['Board_lang'] = 'Түһүлгэ тыла';
$lang['No_themes'] = 'Бэлэм өҥ туруоруулара суохтар';
$lang['Timezone'] = 'Ханнык бириэмэ сиригэр баарыҥ';
$lang['Date_format'] = 'Күнү-дьылы көрдөрүү хайдаҕа';
$lang['Date_format_explain'] = 'The syntax used is identical to the PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> function.';
$lang['Signature'] = 'Илии баттааһын';
$lang['Signature_explain'] = 'Манна этиилэргэр куруук суруллар тыллары суруйуоххун сөп (бэйэлэрэ тахса туруохтара). Уһуна %d бичиктэн тахсыа суохтаах.';
$lang['Public_view_email'] = 'Мин e-mail аадырыспын куруук көрдөр';

$lang['Current_password'] = 'Билигин туттулла сылдьар киирии тыл';
$lang['New_password'] = 'Саҥа киирии тыл';
$lang['Confirm_password'] = 'Киирии тылгын бигэргэтэн өссө төгүл суруй';
$lang['Confirm_password_explain'] = 'Киирии тылгын, эбэтэр e-mail-гын уларытыаххын баҕардаххына: аан бастаан, билигин тутта сылдьар киирии тылгын суруй';
$lang['password_if_changed'] = 'Манна киирии тылгын уларытаары гыннаххына биирдэ суруй';
$lang['password_confirm_if_changed'] = 'Киирии тылгын уларытар эрэ буоллаххына, алларааҥҥы туруорууга иккистээн  ону бигэргэтэн суруйаҕын.';

$lang['Avatar'] = 'Аабаатар';
$lang['Avatar_explain'] = 'Этиигэр эн туһунан сурук анныгар туруоруллар кыракый уруһуй. Биир эрэ оннук уруһуй туруоруллуон сөп, кэтитэ %d пикселтэн элбэҕэ суох, уһунунан %d пикселтэн элбэҕэ суох уонна иэнинэн %d кбайтан элбэҕэ суох буолуохтаах.';
$lang['Upload_Avatar_file'] = 'Компьютергыттан абаатары ыыт';
$lang['Upload_Avatar_URL'] = 'Абаатары URL-тан ыл';
$lang['Upload_Avatar_URL_explain'] = 'Уруһуйдаах билэ баар URL-ын ый. Оччоҕо онтон бу сайтка төгүллэниэ.';
$lang['Pick_local_Avatar'] = 'Көрүнньүктэн абаатарда тал';
$lang['Link_remote_Avatar'] = 'Атын серверга баар абаатары көрдөр';
$lang['Link_remote_Avatar_explain'] = 'Көрдөрүөххүн баҕарар уруһуйуҥ баар URL-ын ый.';
$lang['Avatar_URL'] = 'Абаатар баар URL-а';
$lang['Select_from_gallery'] = 'Көрүнньүктэн абаатарда тал';
$lang['View_avatar_gallery'] = 'Көрүнньүгү көрдөр';

$lang['Select_avatar'] = 'Абаатары тал';
$lang['Return_profile'] = 'Абаатар наадата суох';
$lang['Select_category'] = 'Категорияны тал';

$lang['Delete_Image'] = 'Уруһуйу соттор';
$lang['Current_Image'] = 'Билигин туттуллар уруһуй';

$lang['Notify_on_privmsg'] = 'Миэхэ туһаайыллыбыт сурук кэллэҕинэ, биллэрээр';
$lang['Popup_on_privmsg'] = 'Саҥа туһаайыылаах сурукка саҥа түннүгү арый'; 
$lang['Popup_on_privmsg_explain'] = 'Сорох халыыптарга саҥа туһаайыылаах сурук кэллэҕинэ - ону биллэрэн, саҥа түннүк арыйыллыан сөп'; 
$lang['Hide_user'] = 'Түһүлгэҕэ сылдьарбын биллэримэ';

$lang['Profile_updated'] = 'Эн киэп билэҥ уларыйда';
$lang['Profile_updated_inactive'] = 'Эн киэп билэҥ уларыйда, ол гынын баран наадалаах бэлиэтээһиннэр эмиэ уларыйдылар, ол иһин эн бэлиэтэммит аатыҥ араҕыста. Хайдах ааккын төттөрү холбуур туһунан почтаҥ дьааһыгар сурук тиийбит буолуохтаах - ону аах, эбэтэр сүрүннээччи көҥүлэ наада буолбут буоллаҕына, ону кэтэс.';

$lang['Password_mismatch'] = 'Киллэрбит киирии тылларыҥ атын атыттар';
$lang['Current_password_mismatch'] = 'Киллэрбит киирии тылыҥ биһиэхэ баарыттан атын';
$lang['Password_long'] = 'Киирии тылыҥ 32 буукубаттан ордук буолуо суохтаах';
$lang['Username_taken'] = 'Маннык ааттаах киһи баар, онон атыннык ааттан';
$lang['Username_invalid'] = 'Сөп түбэспэт бичиктэр бааллар, (холобур ")';
$lang['Username_disallowed'] = 'Бу аат биһиэхэ көҥүллэммэт';
$lang['Email_taken'] = 'Бу e-mail атын киһиэхэ сурулла сылдьар';
$lang['Email_banned'] = 'Бу e-mail хара испииһэккэ киллэриллибит';
$lang['Email_invalid'] = 'e-mail-гын сыыһа суруйбуккун';
$lang['Invalid_username'] = 'Суруйбут аатыҥ кимиэхэ эрэ баар, эбэтэр бобуллубут, эбэтэр сыыһа бичиктэрдээх, холобур ", ) ';
$lang['Signature_too_long'] = 'Олус уһун илии баттааһын';
$lang['Fields_empty'] = 'Ханнык эрэ туруорууну толорботоххун';
$lang['Avatar_filetype'] = 'Абаатар билэтэ .jpg, .gif эбэтэр .png буолуохтаах';
$lang['Avatar_filesize'] = 'Абаатар иэнэ %d кб-тан элбэх буолуо суохтаах';
$lang['Avatar_imagesize'] = 'Абаатар %d пикселтан кэтит уонна %d пикселтан уһун буолуо суохтаах';

$lang['Welcome_subject'] = 'Нөрүөн нөргүй! %s';
$lang['New_account_subject'] = 'Саҥа кыттааччы';
$lang['Account_activated_subject'] = 'Бэлиэ аатыҥ холбонно';

$lang['Account_added'] = 'Бэлиэтэммитиҥ иһин барҕа махтал. Бэлиэ аатыҥ испииһэккэ киирдэ. Түһүлгэҕэ аны ааттаах-суоллаах киириэххин сөп.';
$lang['Account_inactive'] = 'Эн бэлиэ аатыҥ суруллунна. Ол гынан баран бу түһүлгэҕэ бэлиэ аатыҥ холбонуон наада, эн суруйбут аадырыскар хайдах ону холбуур туһунан сурук ыытылынна. Онон почтаҕын көр.';
$lang['Account_inactive_admin'] = 'Эн бэлиэ аатыҥ суруллунна. Ол гынан баран бу түһүлгэҕэ эн бэлиэ ааккын түһүлгэ сүрүннээччитэ холбуон наада. Киниэхэ сурук ыытылынна. Холбоннуҥ даҕаны эйиэхэ биллэриэхпит.';
$lang['Account_active'] = 'Эн бэлиэ аатыҥ суруллунна. Бэлиэтэммитиҥ иһин барҕа махтал.';
$lang['Account_active_admin'] = 'Эн бэлиэ аатыҥ холбонно.';
$lang['Reactivate'] = 'Бэлиэ ааппын холбоо';
$lang['Already_activated'] = 'Бэлиэ аатыҥ холбонуллан турар эбит';
$lang['COPPA'] = 'Эн бэлиэ аатыҥ суруллунна, ол гынан баран бигэргэтиллиэхтээх. Эбии быһаарыылары e-mail-гар көр.';

$lang['Registration'] = 'Бэлиэтэнии ирдэбилэ';
$lang['Reg_agreement'] = 'Түһүлгэ салайааччылара уонна сүрүннээччилэрэ сатаммат этиилэри түргэнник сотторо эбэтэр көннөрө сатыыллар гынан баран, этиилэри барытын кыайан көрүмүөхтэрин сөп. Кэпсэтиилэр тыллара кыттааччылар суруйбут этиилэрэ буолаллар. Онон сыыһа-халты тыллар иһин  түһүлгэ салайааччыларыгар уонна сүрүннээччилэргэ бааһымаҥ (кинилэр бэйэлэрин этиилэриттэн ураты).<br /><br /> Үөхсүү, сааныы, баһааҕырдааһын тылларын, порнографическай этиилэри, норуоттар икки ардыларыгар иирсиигэ ыҥырыылары уонна да атын сокуону кэһиигэ тириэрдиэн сөп тыллары туттубаппын диэн сөбүлэһэҕин. Оннук тыллары тутуннаххына сонно тута түһүлгэттэн үүрүллэҕин (провайдерыҥ биллэриллэр). Бары суруктар IP аадырыстара ол иһин бэлиэтэнэн иһэллэр. Түһүлгэ сүрүннээччилэрэ бэйэлэрин көрүүлэринэн хаһан баҕарар ханнык баҕарар кэпсэтиини тохтотор, көннөрөр, көһөрөр эбэтэр сотторор кыахтаахтарын сөбүлэһэҕин. Кыттааччы быһыытынан суруйбут тылларыҥ биһиэхэ ууруллан иһэллэрин сөбүлэһэҕин. Ол тылларыҥ атын дьоҥҥо эн сөбүлэҥэ суох бэриллибэт гынан баран, түһүлгэ салайаачылара хакердар дьайыыларын иһин (ыйытыга суох ол тыллары туттууларын иһин) эппиэттээбэт.<br /><br /> Бу түһүлгэлэр cookies диэни эн компьютергар киллэрэн тутталлар. Ол cookies диэҥҥэ эн суруйбуккуттан туох да суох уонна кинилэр түһүлгэ үлэтигэр көмөлөһөргө эрэ туттуллаллар. Эн e-mail-ыҥ бэлиэтэниини бигэргэтиигэ уонна киирии тылга (умнан кэбистэххинэ ыытарга) эрэ туттуллар.<br /><br />Суруттарыы тимэҕин баттааҥҥын бэлиэтэнии ирдэбилин кытта сөбүлэһэргин биллэрэҕин.';

$lang['Agree_under_13'] = 'Ити ирдэбиллэри кытта сөбүлэһэбин уонна мин сааһым <b>13-эн</b> кыра';
$lang['Agree_over_13'] = 'Ити ирдэбиллэри кытта сөбүлэһэбин уонна мин сааһым 13, эбэтэр <b>13-тэн элбэх</b>';
$lang['Agree_not'] = 'Бу ирдэбиллэри кытта сөбүлэспэппин';

$lang['Wrong_activation'] = 'Киллэрбит холбонуу күлүүһүҥ - сыыһа';
$lang['Send_password'] = 'Саҥа киирии тылы ыыт'; 
$lang['Password_updated'] = 'Саҥа киирии тыл сурулунна, хайдах холбоноруҥ туһунан почтаҥ дьааһыгар көр';
$lang['No_email_match'] = 'Суруйбут e-mail аадырыһыҥ эйиэхэ суруллубатах';
$lang['New_password_activation'] = 'Саҥа киирии тыл холбооһуна';
$lang['Password_activated'] = 'Бэлиэ аатыҥ холбонно. Түһүлгэҕэ киирэргэр ыытыллыбыт киирии тылы тутун.';

$lang['Send_email_msg'] = 'E-mail-ы ыыт';
$lang['No_user_specified'] = 'Кимиэхэ ыытаргын ыйбатаххын';
$lang['User_prevent_email'] = 'Киһиҥ e-mail тутуон баҕарбат. Туһаайыллыбыт сурукта ыытан көр';
$lang['User_not_exist'] = 'Маннык киһи биһиэхэ суох';
$lang['CC_email'] = 'Сурук төгүлүн бэйэбэр эмиэ ыыт';
$lang['Email_message_desc'] = 'Сурук "простой текст" курдук барыа, HTML эбэтэр BBCode киллэримэ. Хоруй ыытар аадырыс курдук эн e-mail-ыҥ суруллуоҕа.';
$lang['Flood_email_limit'] = 'Утуу-субуу икки e-mail-ы кыайан ыыппаккын, тохтуу түһэн баран боруобалаар.';
$lang['Recipient'] = 'Кимиэхэ ыытарыҥ';
$lang['Email_sent'] = 'Суругуҥ барда';
$lang['Send_email'] = 'E-mail-ы ыыт';
$lang['Empty_subject_email'] = 'e-mail баһын суруйбатаххын';
$lang['Empty_message_email'] = 'Сурук ыыта сорунан баран, биир эмит тылы суругуҥ иһигэр суруйуоххун наада';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Тугунан көрөн бэрээдэктиириҥ';
$lang['Sort'] = 'Бэрээдэктээ';
$lang['Sort_Top_Ten'] = 'уон ордук элбэхтик кыттар кыттааччылар';
$lang['Sort_Joined'] = 'хаһан суруттарбыттарынан';
$lang['Sort_Username'] = 'ааттарынан';
$lang['Sort_Location'] = 'хантан сылдьалларынан';
$lang['Sort_Posts'] = 'этиилэрин ахсаанынан';
$lang['Sort_Email'] = 'e-mail аадырыстарынан';
$lang['Sort_Website'] = 'сайтарынан';
$lang['Sort_Ascending'] = 'улаатыннара';
$lang['Sort_Descending'] = 'көҕүрэтэ';
$lang['Order'] = ''; // бэрээдэктээбэппин';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Бөлөхтөрү салайыы сирэ';
$lang['Group_member_details'] = 'Бөлөхтөргө киирэр дьоннор';
$lang['Group_member_join'] = 'Бөлөххө киирии';

$lang['Group_Information'] = 'Бөлөх туһунан';
$lang['Group_name'] = 'Бөлөх аата';
$lang['Group_description'] = 'Бөлөх туһунан';
$lang['Group_membership'] = 'Бөлөххө киирии';
$lang['Group_Members'] = 'Бөлөх дьонноро';
$lang['Group_Moderator'] = 'Бөлөх сүрүннээччитэ';
$lang['Pending_members'] = 'Бөлөххө киириигэ кандидат';

$lang['Group_type'] = 'Бөлөх хайдаҕа';
$lang['Group_open'] = 'Киирэргэ аһаҕас бөлөх';
$lang['Group_closed'] = 'Киирэргэ сабыылаах бөлөх';
$lang['Group_hidden'] = 'Көстүбэт бөлөх';

$lang['Current_memberships'] = 'Ханнык бөлөх киһитэҕин';
$lang['Non_member_groups'] = 'Биир да бөлөх киһитэ буолбатахпын';
$lang['Memberships_pending'] = 'Ханнык эмит бөлөххө киирээри сылдьар кандидаппын';

$lang['No_groups_exist'] = 'Биир да бөлөх суох';
$lang['Group_not_exist'] = 'Маннык бөлөх суох';

$lang['Join_group'] = 'Бөлөххө киирэбин';
$lang['No_group_members'] = 'Бу бөлөххө биир да киһи суох';
$lang['Group_hidden_members'] = 'Бу көстүбэт бөлөх, онон ким манна баарын көрбөккүн ';
$lang['No_pending_group_members'] = 'Бу бөлөххө кандидаттар суохтар';
$lang['Group_joined'] = 'Эн бөлөххө киирэргэ көрдөстүҥ. Бөлөх сүрүннээччитигэр бигэргэннэххинэ, биллэриллиэҥ.';
$lang['Group_request'] = 'Бөлөххө киирэргэ көрдөһүүҥ киирдэ.';
$lang['Group_approved'] = 'Эн көрдөһүүҥ толорулунна.';
$lang['Group_added'] = 'Эн бөлөххө киирдиҥ';
$lang['Already_member_group'] = 'Эн бу бөлөххө урут киирбит эбиккин';
$lang['User_is_member_group'] = 'Бу киһи бөлөххө урут киирбит эбит';
$lang['Group_type_updated'] = 'Бөлөх этэҥҥэ уларыйда';

$lang['Could_not_add_user'] = 'Ыйбыт кыттааччыҥ суох';
$lang['Could_not_anon_user'] = 'Биллибэт киһини бөлөххө кыайан киллэрбэккин';

$lang['Confirm_unsub'] = 'Кырдьык бөлөхтөн тахсаары гынаҕын дуо?';
$lang['Confirm_unsub_pending'] = 'Эн бөлөххө киирэриҥ-киирбэтиҥ көрүллэ илик. Кырдьык бу бөлөххө киирэртэн аккаастанаҕын дуо?';

$lang['Unsub_success'] = 'Бу бөлөхтөн этэҥҥэ таҕыстыҥ.';

$lang['Approve_selected'] = 'Бэлиэтэммити бигэргэтэбин';
$lang['Deny_selected'] = 'Бэлиэтэммиттэн аккаастанабын';
$lang['Not_logged_in'] = 'Бөлөххө киириэҥ иннинэ түһүлгэҕэ киириэххин наада.';
$lang['Remove_selected'] = 'Бэлиэтэммити соттор';
$lang['Add_member'] = 'Бөлөх киһитин эп';
$lang['Not_group_moderator'] = 'Эн сүрүннээччи буолбатаҕыҥ быһыытынан маны кыайан оҥорбоккун';

$lang['Login_to_join'] = 'Бөлөххө киирэргин-тахсаргын түһүлгэҕэ киирэн баран оҥор';
$lang['This_open_group'] = 'Бу киирэргэ аһаҕас бөлөх, онон киирэргэ көрдөһүү суруйуоххун сөп';
$lang['This_closed_group'] = 'Бу киирэргэ сабыылаах бөлөх, онон саҥа дьону ылбаттар';
$lang['This_hidden_group'] = 'Бу көстүбэт бөлөх, онон аптамаахтык киирэр табыллыбат';
$lang['Member_this_group'] = 'Эн бу бөлөх киһитэҕин';
$lang['Pending_this_group'] = 'Эн бу бөлөххө киирэргэ кандидаккын';
$lang['Are_group_moderator'] = 'Эн бу бөлөх сүрүннээчитэҕин';
$lang['None'] = 'Суох';

$lang['Subscribe'] = 'Суруттарабын';
$lang['Unsubscribe'] = 'Суруттарыыттан аккаастанабын';
$lang['View_Information'] = 'Информацияны көрөбүн';


//
// Search
//
$lang['Search_query'] = 'Көрдөөһүн';
$lang['Search_options'] = 'Хайдах көрдүүрүҥ ';

$lang['Search_keywords'] = 'Тылынан көрдөөһүн';
$lang['Search_keywords_explain'] = '<u>AND</u> диэни көрдүүргэр баар буолуохтаах тыллары ыйаргар тутун, <u>OR</u> диэни көрдүүргэр баар буолуон сөп тыллары ыйаргар тутун, онтон <u>NOT</u> диэни көрдүүргэр суох буолуохтаах тыллары ыйаргар. Уонна * диэни халыып быһыытынан сороҕор сөп түбэһэр тылларга.';
$lang['Search_author'] = 'Кэпсэтии саҕалааччыларынан көрдөөһүн';
$lang['Search_author_explain'] = ' * диэни шаблон быһыытынан тутун';

$lang['Search_for_any'] = 'Ханнык баҕарар тылларынан көрдөөһүн эбэтэр кыллэрбит тылларгынан';
$lang['Search_for_all'] = 'Тыллары барытын көрдөө';
$lang['Search_title_msg'] = 'Суруктар бастарыгар уонна этиилэригэр көрдөө';
$lang['Search_msg_only'] = 'Суруктар этиилэригэр эрэ көрдөө';

$lang['Return_first'] = 'Бастакы бачча буукубалары көрдөр'; // followed by xxx characters
$lang['characters_posts'] = 'бачча бичиктээх этиилэр';

$lang['Search_previous'] = 'Бачча кэм иһигэр көрдөө'; // followed by days, weeks, months, year, all

$lang['Sort_by'] = 'Тугунан көрөн бэрээдэктиириҥ';
$lang['Sort_Time'] = 'хаһан ыытыллыбытынан';
$lang['Sort_Post_Subject'] = 'этии баһынан';
$lang['Sort_Topic_Title'] = 'кэпсэтии аатынан';
$lang['Sort_Author'] = 'кэпсэтии саҕалааччытынан';
$lang['Sort_Forum'] = 'түһүлгэтинэн';

$lang['Display_results'] = 'Көрдөөһүн түмүгүн хайдах көрдөрөрүҥ';
$lang['All_available'] = 'Баары барытын';
$lang['No_searchable_forums'] = 'Бу сайтка баар биир да түһүлгэҕэ көрдүүр кыаҕыҥ суох';

$lang['No_search_match'] = 'Биир даҕаны эн көрдүүр кэпсэтииҥ дуу, этииҥ дуу булуллубата';
$lang['Found_search_match'] = 'Көрдөөһүн түмүгэ: %d'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Көрдөөһүн түмүгэ: %d'; // eg. Search found 24 matches

$lang['Close_window'] = 'Бу түннүгү сап';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Бу түһүлгэҕэ биллэриини %s эрэ оҥорор кыахтаахтар';
$lang['Sorry_auth_sticky'] = 'Бу түһүлгэҕэ сыһыарыы этиилэри %s эрэ оҥорор кыахтаахтар'; 
$lang['Sorry_auth_read'] = 'Бу түһүлгэҕэ %s эрэ этиилэри ааҕар кыахтаахтар'; 
$lang['Sorry_auth_post'] = 'Бу түһүлгэҕэ саҥа кэпсэтиини %s эрэ оҥорор кыахтаахтар'; 
$lang['Sorry_auth_reply'] = 'Бу түһүлгэҕэ %s эрэ этиилэргэ хоруйдуур кыахтаахтар'; 
$lang['Sorry_auth_edit'] = 'Бу түһүлгэҕэ %s эрэ этиилэри көннөрөр кыахтаахтар'; 
$lang['Sorry_auth_delete'] = 'Бу түһүлгэҕэ %s эрэ этиилэри сотторор кыахтаахтар'; 
$lang['Sorry_auth_vote'] = 'Бу түһүлгэҕэ %s эрэ ыйытынньыктарга куоластыыр кыахтаахтар'; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>ыалдьыттар</b>';
$lang['Auth_Registered_Users'] = '<b>бэлиэтэммит кыттыылаахтар</b>';
$lang['Auth_Users_granted_access'] = '<b>эбии кыахтаах дьоннор</b>';
$lang['Auth_Moderators'] = '<b>Сүрүннээччилэр</b>';
$lang['Auth_Administrators'] = '<b>Салайааччылар</b>';

$lang['Not_Moderator'] = 'Эн бу түһүлгэ сүрүннээччитэ буолбатаххын';
$lang['Not_Authorised'] = 'Киирэр кыаҕыҥ суох';

$lang['You_been_banned'] = 'Эн түһүлгэҕэ киирэр кыаҕыҥ тохтотуллан турар<br />Тоҕотун түһүлгэ салайааччыларыттан ыйыт';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Билигин түһүлгэҕэ биир даҕаны бэлиэтэммит кыттааччы суох уонна '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'Билигин түһүлгэҕэ %d бэлиэтэммит кыттааччы баар уонна '; // There ae 5 Registered and
$lang['Reg_user_online'] = 'Билигин түһүлгэҕэ биир бэлиэтэммит кыттааччы баар уонна ';
$lang['Hidden_users_zero_online'] = ' биир да саспыт кыттааччы суох'; // 0 Hidden users online
$lang['Hidden_users_online'] = ' %d саспыт кыттааччы баар';
$lang['Hidden_user_online'] = 'биир саспыт кыттааччы баар'; // 1 Hidden user online
$lang['Guest_users_online'] = 'Билигин түһүлгэҕэ %d ыалдьыт баар';
$lang['Guest_users_zero_online'] = 'Билигин түһүлгэҕэ биир да ыалдьыт суох'; // There are 0 Guest users online
$lang['Guest_user_online'] = 'Билигин түһүлгэҕэ биир ыалдьыт баар';
$lang['No_users_browsing'] = 'Билигин бу түһүлгэҕэ ким да суох';

$lang['Online_explain'] = 'Бу биэс мүнүүтэ иһигэр кыттааччылар тугу эмит этэллэрин-эппэттэрин түмүгүнэн оҥоһуллар көрүү';

$lang['Forum_Location'] = 'Кэпсэтии миэстэтэ';
$lang['Last_updated'] = 'Кэнники этии';

$lang['Forum_index'] = 'Кэпсэтиилэр испииһэктэрэ';
$lang['Logging_on'] = 'Түһүлгэҕэ киирии';
$lang['Posting_message'] = 'Этиини ыытыы';
$lang['Searching_forums'] = 'Түһүлгэ иһигэр көрдөөһүн';
$lang['Viewing_profile'] = 'Киэп билэни көрүү';
$lang['Viewing_online'] = 'Ким билигин түһүлгэҕэ баарын&raquo;көрүү &laquo;';
$lang['Viewing_member_list'] = 'Кыттаачылар испииһэктэрин көрүү';
$lang['Viewing_priv_msgs'] = 'Туһаайыллыбыт суруктары көрүү';
$lang['Viewing_FAQ'] = 'FAQ көрүү';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Сүрүннээһин сирэ';
$lang['Mod_CP_explain'] = 'Манна түһүлгэни сүрүннээһин оҥоруллар. Хайдах баҕараргынан түһүлгэ ханнык баҕарар кэпсэтиитин тохтотуоххун, арыйыаххын, көһөрүөххүн эбэтэр сотторуоххун сөп.';

$lang['Select'] = 'Талабын';
$lang['Delete'] = 'Соттор';
$lang['Move'] = 'Көһөр';
$lang['Lock'] = 'Тохтот';
$lang['Unlock'] = 'Ас';

$lang['Topics_Removed'] = 'Талбыт кэпсэтиилэриҥ этэҥҥэ сотторулуннулар';
$lang['Topics_Locked'] = 'Талбыт кэпсэтиилэриҥ тохтотулуннулар';
$lang['Topics_Moved'] = 'Талбыт кэпсэтиилэриҥ көһөрүлүннүлэр';
$lang['Topics_Unlocked'] = 'Талбыт кэпсэтиилэриҥ аһылыннылар';
$lang['No_Topics_Moved'] = 'Биир да кэпсэтии көспөтө';

$lang['Confirm_delete_topic'] = 'Кырдьык ити талбыт кэпсэтиилэргин сотторуоххун баҕараҕын дуо?';
$lang['Confirm_lock_topic'] = 'Кырдьык ити талбыт кэпсэтиилэргин тохтотуоххун баҕараҕын дуо?';
$lang['Confirm_unlock_topic'] = 'Кырдьык ити талбыт кэпсэтиилэргин аһыаххын баҕараҕын дуо?';
$lang['Confirm_move_topic'] = 'Кырдьык ити талбыт кэпсэтиилэргин көһөрүөххүн баҕараҕын дуо?';

$lang['Move_to_forum'] = 'Атын түһүлгэҕэ көһөр';
$lang['Leave_shadow_topic'] = 'Урукку түһүлгэҕэ ыйар сурукта хааллар';

$lang['Split_Topic'] = 'Кэпсэтиини хайытыы';
$lang['Split_Topic_explain'] = 'Бу халыыбы туһанан кэпсэтиини икки гына хайытыаххын сөп: эбэтэр этиилэри биирдиилээн талан, эбэтэр талбын этиигинэн хайытан';
$lang['Split_title'] = 'Саҥа кэпсэтии аата';
$lang['Split_forum'] = 'Саҥа кэпсэтии түһүлгэтэ';
$lang['Split_posts'] = 'Талыллыбыт суруктары ылҕаан ыл';
$lang['Split_after'] = 'Ыйыллыбыт этии кэнниттэн баар суруктары ылҕаан ыл';
$lang['Topic_split'] = 'Талбын суругуҥ этэҥҥэ ылҕанан ылылынна';

$lang['Too_many_error'] = 'Ханнык эрэ сурук кэнниттэн кэлэр суруктары талабын диир буоллаххына биир эрэ ол суругу ыйыаххын наада. Эн хас да суругу ыйбыккын.';

$lang['None_selected'] = 'Биир да суругу ыйбатаххын. Төттөрү бараҥҥын талар биир эмит суруккун ый.';
$lang['New_forum'] = 'Саҥа Түһүлгэ';

$lang['This_posts_IP'] = 'Бу сурук кэлбит IP аадырыһа';
$lang['Other_IP_this_user'] = 'Бу киһи ыыппыт суруктарын атын IP аадырыстара';
$lang['Users_this_IP'] = 'Бу IP-тан суруйбут атын кыттааччылар ';
$lang['IP_info'] = 'Бу IP туһунан';
$lang['Lookup_IP'] = 'Бу IP аадырыс үлэтэ';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Ханнык бириэмэлээх сиргэ баарыҥ: %s'; // This is followed by GMT and the timezone offset

$lang['-12'] = 'GMT - 12';
$lang['-11'] = 'GMT - 11';
$lang['-10'] = 'GMT - 10';
$lang['-9'] = 'GMT - 9';
$lang['-8'] = 'GMT - 8';
$lang['-7'] = 'GMT - 7';
$lang['-6'] = 'GMT - 6';
$lang['-5'] = 'GMT - 5';
$lang['-4'] = 'GMT - 4';
$lang['-3.5'] = 'GMT - 3:30';
$lang['-3'] = 'GMT - 3';
$lang['-2'] = 'GMT - 2';
$lang['-1'] = 'GMT - 1';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1';
$lang['2'] = 'GMT + 2';
$lang['3'] = 'GMT + 3';
$lang['3.5'] = 'GMT + 3:30';
$lang['4'] = 'GMT + 4';
$lang['4.5'] = 'GMT + 4:30';
$lang['5'] = 'GMT + 5';
$lang['5.5'] = 'GMT + 5:30';
$lang['6'] = 'GMT + 6';
$lang['6.5'] = 'GMT + 6:30';
$lang['7'] = 'GMT + 7';
$lang['8'] = 'GMT + 8';
$lang['9'] = 'GMT + 9';
$lang['9.5'] = 'GMT + 9:30';
$lang['10'] = 'GMT + 10';
$lang['11'] = 'GMT + 11';
$lang['12'] = 'GMT + 12';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12';
$lang['tz']['-11'] = 'GMT - 11';
$lang['tz']['-10'] = 'GMT - 10';
$lang['tz']['-9'] = 'GMT - 9';
$lang['tz']['-8'] = 'GMT - 8';
$lang['tz']['-7'] = 'GMT - 7';
$lang['tz']['-6'] = 'GMT - 6';
$lang['tz']['-5'] = 'GMT - 5';
$lang['tz']['-4'] = 'GMT - 4';
$lang['tz']['-3.5'] = 'GMT - 3:30';
$lang['tz']['-3'] = 'GMT - 3';
$lang['tz']['-2'] = 'GMT - 2';
$lang['tz']['-1'] = 'GMT - 1';
$lang['tz']['0'] = 'GMT (Гринвич бириэмэтэ)';
$lang['tz']['1'] = 'GMT + 1';
$lang['tz']['2'] = 'GMT + 2';
$lang['tz']['3'] = 'GMT + 3 (Москва бириэмэтэ)';
$lang['tz']['3.5'] = 'GMT + 3:30';
$lang['tz']['4'] = 'GMT + 4 (сайыҥҥы Москва бириэмэтэ)';
$lang['tz']['4.5'] = 'GMT + 4:30';
$lang['tz']['5'] = 'GMT + 5';
$lang['tz']['5.5'] = 'GMT + 5:30';
$lang['tz']['6'] = 'GMT + 6';
$lang['tz']['6.5'] = 'GMT + 6:30';
$lang['tz']['7'] = 'GMT + 7';
$lang['tz']['8'] = 'GMT + 8';
$lang['tz']['9'] = 'GMT + 9 (Саха Сирин кыһыҥҥы бириэмэтэ)';
$lang['tz']['9.5'] = 'GMT + 9:30';
$lang['tz']['10'] = 'GMT + 10 (Саха Сирин сайыҥҥы бириэмэтэ)';
$lang['tz']['11'] = 'GMT + 11';
$lang['tz']['12'] = 'GMT + 12';
$lang['tz']['13'] = 'GMT + 13';

$lang['datetime']['Sunday'] = 'Баскыһыанньа';
$lang['datetime']['Monday'] = 'Бэнидиэнньик';
$lang['datetime']['Tuesday'] = 'Оптуорунньук';
$lang['datetime']['Wednesday'] = 'Сэрэдэ';
$lang['datetime']['Thursday'] = 'Чэппиэр';
$lang['datetime']['Friday'] = 'Бээтиҥсэ';
$lang['datetime']['Saturday'] = 'Субуота';
$lang['datetime']['Sun'] = 'Бс';
$lang['datetime']['Mon'] = 'Бн';
$lang['datetime']['Tue'] = 'Оп';
$lang['datetime']['Wed'] = 'Сэ';
$lang['datetime']['Thu'] = 'Чп';
$lang['datetime']['Fri'] = 'Бэ';
$lang['datetime']['Sat'] = 'Сб';
$lang['datetime']['January'] = 'Тохсунньу';
$lang['datetime']['February'] = 'Олунньу';
$lang['datetime']['March'] = 'Кулун тутар';
$lang['datetime']['April'] = 'Муус устар';
$lang['datetime']['May'] = 'Ыам ыйа';
$lang['datetime']['June'] = 'Бэс ыйа';
$lang['datetime']['July'] = 'От ыйа';
$lang['datetime']['August'] = 'Атырдьах ыйа';
$lang['datetime']['September'] = 'Балаҕан ыйа';
$lang['datetime']['October'] = 'Алтынньы';
$lang['datetime']['November'] = 'Сэтинньи';
$lang['datetime']['December'] = 'Ахсынньы';
$lang['datetime']['Jan'] = 'Тохc';
$lang['datetime']['Feb'] = 'Олун';
$lang['datetime']['Mar'] = 'Клн_ттр';
$lang['datetime']['Apr'] = 'Мус_уст';
$lang['datetime']['May'] = 'Ыам_йн';
$lang['datetime']['Jun'] = 'Бэс_йн';
$lang['datetime']['Jul'] = 'От_йн';
$lang['datetime']['Aug'] = 'Атрдь_йн';
$lang['datetime']['Sep'] = 'Блҕн_йн';
$lang['datetime']['Oct'] = 'Алт';
$lang['datetime']['Nov'] = 'Сэт';
$lang['datetime']['Dec'] = 'Ахс';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Биллэрии';
$lang['Critical_Information'] = 'Моһуок буолбутун туһунан биллэрии';

$lang['General_Error'] = 'Кыра саахалланыы';
$lang['Critical_Error'] = 'Улахан саахалланыы';
$lang['An_error_occured'] = 'Кыра саахалланыы таҕыста';
$lang['A_critical_error'] = 'Улахан саахалланыы буолла';

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
// That's all Folks!
// -------------------------------------------------

?>