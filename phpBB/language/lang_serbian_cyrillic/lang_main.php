<?php
/***************************************************************************
 *                            lang_main.php [ Serdian_Cyrillic]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.4 2002/06/23 02:47:56 dougk_ff7 Exp $
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
 /***************************************************************************
*                     Serdian_Cyrillic Translation
*                              -------------------
*     begin                : Friday Feb 07 2003
*     last update          : Friday Apr 18 2003
*     by                   : Damjanac Djordje
*     email                : office@damjanator.ch
*     website:             : http://www.damjanator.ch/, http://www.skss.ch/
****************************************************************************/

//
// Add your details here if wanted, e.g. Name, username, email address, website
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
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = 'This forum is translated in Serbian_cyrillic by: <a href="http://www.damjanator.ch/" target="_blank">Damjanac Djordje</a>';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'форум';
$lang['Category'] = 'Категорија';
$lang['Topic'] = 'Тема';
$lang['Topics'] = 'Теме';
$lang['Replies'] = 'Одговори';
$lang['Views'] = 'Погледано';
$lang['Post'] = 'Порука';
$lang['Posts'] = 'Поруке';
$lang['Posted'] = 'Послао';
$lang['Username'] = 'Корисничко име';
$lang['Password'] = 'Шифра';
$lang['Email'] = 'Е-маил';
$lang['Poster'] = 'Послао';
$lang['Author'] = 'Аутор';
$lang['Time'] = 'Време';
$lang['Hours'] = 'Сати';
$lang['Message'] = 'Порука';

$lang['1_Day'] = '1 Дан';
$lang['7_Days'] = '7 Дана';
$lang['2_Weeks'] = '2 Недеље';
$lang['1_Month'] = '1 Месец';
$lang['3_Months'] = '3 Месеца';
$lang['6_Months'] = '6 Месеци';
$lang['1_Year'] = '1 Година';

$lang['Go'] = 'Иди';
$lang['Jump_to'] = 'Скочи на';
$lang['Submit'] = 'Пошаљи';
$lang['Reset'] = 'Ресетуј';
$lang['Cancel'] = 'Поништи';
$lang['Preview'] = 'Преглед поруке';
$lang['Confirm'] = 'Потврди';
$lang['Spellcheck'] = 'Граматичка провера';
$lang['Yes'] = 'Да';
$lang['No'] = 'Не';
$lang['Enabled'] = 'Дозвољено';
$lang['Disabled'] = 'Забрањено';
$lang['Error'] = 'Грешка';

$lang['Next'] = 'Следећи';
$lang['Previous'] = 'Предходни';
$lang['Goto_page'] = 'Иди на страну';
$lang['Joined'] = 'Придружио';
$lang['IP_Address'] = 'IP Адреса';

$lang['Select_forum'] = 'Изабери форум';
$lang['View_latest_post'] = 'Прегледај задње поруке';
$lang['View_newest_post'] = 'Прегледај нај новије поруке';
$lang['Page_of'] = 'Страна <b>%d</b> of <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ Број';
$lang['AIM'] = 'AIM Адреса';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Форуми';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Напиши нову тему';
$lang['Reply_to_topic'] = 'Одговори на поруку';
$lang['Reply_with_quote'] = 'Одговорити са цитатом';

$lang['Click_return_topic'] = 'Кликни %sовде%s за повратак на тему'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Кликни %sовде%s да пробаш поново';
$lang['Click_return_forum'] = 'Кликни %sовде%s за повратак на форум';
$lang['Click_view_message'] = 'Кликни %sовде%s да погледаш твоју поруку';
$lang['Click_return_modcp'] = 'Кликни %sовде%s за повратак на уредников контролни панел';
$lang['Click_return_group'] = 'Кликни %sовде%s за повратак на информације о групи';

$lang['Admin_panel'] = 'иди на администрациони панел';

$lang['Board_disable'] = 'Извини али овај боард је тренутно недоступан, пробај поново касније!';


//
// Global Header strings
//
$lang['Registered_users'] = 'Регистрованих корисника:';
$lang['Browsing_forum'] = 'Корисници тренутно на форуму:';
$lang['Online_users_zero_total'] = 'Укупно је <b>0</b> корисника на форуму :: ';
$lang['Online_users_total'] = 'Укупно су  <b>%d</b> корисника на форуму :: ';
$lang['Online_user_total'] = 'Укупно је <b>%d</b> корисник на форуму :: ';
$lang['Reg_users_zero_total'] = '0 Регистрованих, ';
$lang['Reg_users_total'] = '%d Регистрованих, ';
$lang['Reg_user_total'] = '%d Регистрован, ';
$lang['Hidden_users_zero_total'] = '0 Скривених и ';
$lang['Hidden_user_total'] = '%d Скривених и ';
$lang['Hidden_users_total'] = '%d Скривен и ';
$lang['Guest_users_zero_total'] = '0 Гостију';
$lang['Guest_users_total'] = '%d Госта';
$lang['Guest_user_total'] = '%d Гост';
$lang['Record_online_users'] = 'Највише корисника на форуму икад било је <b>%s</b> Дана %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sАдминистратор%s';
$lang['Mod_online_color'] = '%sУредник%s';

$lang['You_last_visit'] = 'Задњи пут си посетио форум %s'; // %s replaced by date/time
$lang['Current_time'] = 'Сада је точно %s'; // %s replaced by time

$lang['Search_new'] = 'Погледај поруке од твоје последње посете';
$lang['Search_your_posts'] = 'Погледај твоје поруке';
$lang['Search_unanswered'] = 'Погледај неодговорене поруке';

$lang['Register'] = 'Региструј се';
$lang['Profile'] = 'Профил ';
$lang['Edit_profile'] = 'Измени свој профил';
$lang['Search'] = 'Тражи';
$lang['Memberlist'] = 'Листа чланова';
$lang['FAQ'] = 'FAQ/Упутство';
$lang['BBCode_guide'] = 'ББКод Водич';
$lang['Usergroups'] = 'Корисничке групе';
$lang['Last_Post'] = 'Последња порука';
$lang['Moderator'] = 'Уредник ';
$lang['Moderators'] = 'Уредници';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Наши корисници су послали укупно <b>0</b> чланака'; // Number of posts
$lang['Posted_articles_total'] = 'Наши корисници су послали укупно <b>%d</b> чланака'; // Number of posts
$lang['Posted_article_total'] = 'Наши корисници су послали укупно <b>%d</b> чланака'; // Number of posts
$lang['Registered_users_zero_total'] = 'Имамо <b>0</b> регистрованих корисника'; // # registered users
$lang['Registered_users_total'] = 'Имамо <b>%d</b> регистрованих корисника'; // # registered users
$lang['Registered_user_total'] = 'Имамо <b>%d</b> регистрованих корисника'; // # registered users
$lang['Newest_user'] = 'Нај новији регистровани члан је <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Нема нових порука од твоје последње посете';
$lang['No_new_posts'] = 'Нема нових порука';
$lang['New_posts'] = 'Нове поруке';
$lang['New_post'] = 'Нова порука';
$lang['No_new_posts_hot'] = 'Нема нових порука [ Популарне ]';
$lang['New_posts_hot'] = 'Нове поруке [ Популарне ]';
$lang['No_new_posts_locked'] = 'Нема нових порука[ Закључене ]';
$lang['New_posts_locked'] = 'Нове поруке [ Закључене ]';
$lang['Forum_is_locked'] = 'Форум је закључан';


//
// Login
//
$lang['Enter_password'] = 'Унесите ваше корисничко име и шифру за приступ';
$lang['Login'] = 'Приступи';
$lang['Logout'] = 'Одјави се';

$lang['Forgotten_password'] = 'Заборавио сам шифру!';

$lang['Log_me_in'] = 'Приступи аутоматски при свакој посети';

$lang['Error_login'] = 'Унели сте погрешно или не активно корисничко име или погрешну шифру!';


//
// Index page
//
$lang['Index'] = 'Индекс';
$lang['No_Posts'] = 'Нема порука';
$lang['No_forums'] = 'Овај боард нема ни један форум';

$lang['Private_Message'] = 'Приватна порука';
$lang['Private_Messages'] = 'Приватне поруке';
$lang['Who_is_Online'] = 'Ко је тренутно на форуму?';

$lang['Mark_all_forums'] = 'Означи све форуме као прочитане.';
$lang['Forums_marked_read'] = 'Сви форуми су означени као прочитани';


//
// Viewforum
//
$lang['View_forum'] = 'Погледај форум';

$lang['Forum_not_exist'] = 'Форум који сте изабрали не постои';
$lang['Reached_on_error'] = 'Грешка којом сте дошли до ове стране!';

$lang['Display_topics'] = 'Покажи теме из предходних';
$lang['All_Topics'] = 'Све теме';

$lang['Topic_Announcement'] = '<b>Обавештење:</b>';
$lang['Topic_Sticky'] = '<b>Лепљива:</b>';
$lang['Topic_Moved'] = '<b>Померена:</b>';
$lang['Topic_Poll'] = '<b>[ Гласање ]</b>';

$lang['Mark_all_topics'] = 'Означи све теме као прочитане';
$lang['Topics_marked_read'] = 'Тема овог форума је означена као прочитана!';

$lang['Rules_post_can'] = '<b>Можете</b> писати нове теме у овом форуму';
$lang['Rules_post_cannot'] = '<b>Не можете</b> писати нове теме у овом форуму';
$lang['Rules_reply_can'] = '<b>Можете</b> одговарати на теме у овом форуму';
$lang['Rules_reply_cannot'] = '<b>Не можете</b> одговорити на теме у овом форуму';
$lang['Rules_edit_can'] = '<b>Можете</b> мењати ваше порукеу овом форуму';
$lang['Rules_edit_cannot'] = '<b>Не можете</b> мењати ваше поруке у овом форуму';
$lang['Rules_delete_can'] = '<b>Можете</b> брисати ваше поруке у овом форуму';
$lang['Rules_delete_cannot'] = '<b>Не можете</b> брисати ваше поруке у овом форуму';
$lang['Rules_vote_can'] = '<b>Можете</b> гласати у овом форуму';
$lang['Rules_vote_cannot'] = '<b>Не можете</b> гласати у овом форуму';
$lang['Rules_moderate'] = '<b>Можете</b> %сурађивати овај форум%s'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Нема порука у овом форуму<br />Кликни на <b>Отвори нову тему</b> линк на овој страници да напишеш поруку!';


//
// Viewtopic
//
$lang['View_topic'] = 'Погледај теме';

$lang['Guest'] = 'Гост';
$lang['Post_subject'] = 'Наслов';
$lang['View_next_topic'] = 'Погледај следећу тему';
$lang['View_previous_topic'] = 'Погледај предходну тему';
$lang['Submit_vote'] = 'Гласај';
$lang['View_results'] = 'Погледај резултат';

$lang['No_newer_topics'] = 'Нема нових тема у овом форуму';
$lang['No_older_topics'] = 'Нема старијих тема у овом форуму';
$lang['Topic_post_not_exist'] = 'Тема или порука коју сте тражили не постоји!';
$lang['No_posts_topic'] = 'Нема порука у овој теми';

$lang['Display_posts'] = 'Прикажи поруке из последњих';
$lang['All_Posts'] = 'Све поруке';
$lang['Newest_First'] = 'Прво нај новије';
$lang['Oldest_First'] = 'Прво нај старије';

$lang['Back_to_top'] = 'Назад на врх';

$lang['Read_profile'] = 'Погледај профил корисника';
$lang['Send_email'] = 'Пошањи Е-маил';
$lang['Visit_website'] = 'Посети сајт аутора';
$lang['ICQ_status'] = 'ICQ Статус';
$lang['Edit_delete_post'] = 'Измени/избриши поруку';
$lang['View_IP'] = 'Погледај IP аутора';
$lang['Delete_post'] = 'Обриши ову поруку';

$lang['wrote'] = ':'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Цитат'; // comes before bbcode quote output.
$lang['Code'] = 'Код'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Последњи изменио %s дана %s. измењено укупно %d пута'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Последњи пут изменио %s дана %s. изменио укупно %d пута.'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Закњучај ову тему ';
$lang['Unlock_topic'] = 'Одкљуцај ову тему';
$lang['Move_topic'] = 'Помери ову тему';
$lang['Delete_topic'] = 'Обриши ову тему';
$lang['Split_topic'] = 'Подели ову тему';

$lang['Stop_watching_topic'] = 'Искључи надгледање за ову тему';
$lang['Start_watching_topic'] = 'Надгледај ову тему за одговоре';
$lang['No_longer_watching'] = 'Више не надгледате ову тему';
$lang['You_are_watching'] = 'Од сад надгледајте ову тему';

$lang['Total_votes'] = 'Укупно гласова';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Тело Поруке';
$lang['Topic_review'] = 'Приказ теме';

$lang['No_post_mode'] = 'Није одређен мод за писање порука'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Отвори нову тему';
$lang['Post_a_reply'] = 'Одговори';
$lang['Post_topic_as'] = 'Одговори на тему као';
$lang['Edit_Post'] = 'Измени поруку';
$lang['Options'] = 'Опције';

$lang['Post_Announcement'] = 'Обавештење';
$lang['Post_Sticky'] = 'Лепљива';
$lang['Post_Normal'] = 'Нормална';

$lang['Confirm_delete'] = 'Дали сте сигурни да желите да избришете ову поруку?';
$lang['Confirm_delete_poll'] = 'Дали сте сигурни да желите да избришете ово гласање?';

$lang['Flood_Error'] = 'Не можете да напишете поруку одмах после ваше последње, покушај те поново мало касније!';
$lang['Empty_subject'] = 'Морате одредити наслов када постављате нову тему';
$lang['Empty_message'] = 'Морате искљуцити поруку';
$lang['Forum_locked'] = 'Овај форум је закључан и неможете писати, одговорити или мењати теме';
$lang['Topic_locked'] = 'Овај форум је закључан и неможете мењати теме или одговорити!';
$lang['No_post_id'] = 'Нисте изабрали поруку';
$lang['No_topic_id'] = 'Морате изабрати тему да би сте одговорили';
$lang['No_valid_mode'] = 'Мозете само писати, мењати или цитирати поруке, вратите се и пробај те поново.';
$lang['No_such_post'] = 'Не постои таква порука.';
$lang['Edit_own_posts'] = 'Измени сопствене поруке.';
$lang['Delete_own_posts'] = 'Избриши сопствене поруке.';
$lang['Cannot_delete_replied'] = 'Не можеш избрисати поруку на крају је одговорено.';
$lang['Cannot_delete_poll'] = 'Не можеш избрисати гласање.';
$lang['Empty_poll_title'] = 'Морате унети наслов за гласање.';
$lang['To_few_poll_options'] = 'Морате уписати неколико опција за гласање.';
$lang['To_many_poll_options'] = 'Превише опција за гласање.';
$lang['Post_has_no_poll'] = 'Порука нема гласање.';
$lang['Already_voted'] = 'Већ гласано.';
$lang['No_vote_option'] = 'Нема опција за гласање.';

$lang['Add_poll'] = 'Додај гласање';
$lang['Add_poll_explain'] = 'Додај објашњење гласања.';
$lang['Poll_question'] = 'Гласачко питање';
$lang['Poll_option'] = 'Гласачка опција';
$lang['Add_option'] = 'Додај опцију';
$lang['Update'] = 'Освежи';
$lang['Delete'] = 'Обриши';
$lang['Poll_for'] = 'Гласај за';
$lang['Days'] = 'дана'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Гласај за објашњење ]';
$lang['Delete_poll'] = 'Бриши глас';

$lang['Disable_HTML_post'] = 'Искључи HTML у поруци';
$lang['Disable_BBCode_post'] = 'Искључи BBCode у поруци';
$lang['Disable_Smilies_post'] = 'Искључи смајлије у поруци';

$lang['HTML_is_ON'] = 'HTML-<u>је укључен</u>';
$lang['HTML_is_OFF'] = 'HTML-<u>је искључен</u>';
$lang['BBCode_is_ON'] = '%sBBCode-<u>је укључен</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode-<u>је искључен</u>';
$lang['Smilies_are_ON'] = 'Смајлији су <u>укључени</u>';
$lang['Smilies_are_OFF'] = 'Смајлији су <u>искључени</u>';

$lang['Attach_signature'] = 'Прикачи потпис';
$lang['Notify'] = 'Обавести ме';
$lang['Delete_post'] = 'Обриши ову поруку';

$lang['Stored'] = 'Ваша порука је уписана.';
$lang['Deleted'] = 'Ваша порука је избрисана.';
$lang['Poll_delete'] = 'Избриши гласање.';
$lang['Vote_cast'] = 'Гласали сте.';

$lang['Topic_reply_notification'] = 'Обавести ме кад неко одговори на тему';

$lang['bbcode_b_help'] = 'Подебљан текст: [b]текст[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Курзив текст: [i]текст[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Подвучен текст: [u]текст[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Цитат: [quote]текст[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Прикат кода: [code]код[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Листа: [list]текст[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Повучена листа: [list=]текст[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Убацивање слике: [img]http://адреса_на_сликата[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Убацивање Урла: [url]http://url[/url] или [url=http://url]Опис[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Затвори све ББКод тагове';
$lang['bbcode_s_help'] = 'Боја фонта: [color=red]text[/color]  Совет: Можете да користите и color=#FF0000';
$lang['bbcode_f_help'] = 'Величина фонта [size=x-small]мал текст[/size]';

$lang['Emoticons'] = 'Смајлији ';
$lang['More_emoticons'] = 'Јос смајлија';

$lang['Font_color'] = 'Боја фонта';
$lang['color_default'] = 'Стандардна';
$lang['color_dark_red'] = 'Тамно црвена';
$lang['color_red'] = 'Црвена';
$lang['color_orange'] = 'Наранџаста';
$lang['color_brown'] = 'Браон';
$lang['color_yellow'] = 'Жута';
$lang['color_green'] = 'Зелена';
$lang['color_olive'] = 'Олив';
$lang['color_cyan'] = 'Цијан';
$lang['color_blue'] = 'Плава';
$lang['color_dark_blue'] = 'Тамно плава';
$lang['color_indigo'] = 'Индиго';
$lang['color_violet'] = 'Љубичаста';
$lang['color_white'] = 'Бела';
$lang['color_black'] = 'Црна';

$lang['Font_size'] = 'Величина фонта';
$lang['font_tiny'] = 'Сићушни';
$lang['font_small'] = 'Мали';
$lang['font_normal'] = 'Нормалан';
$lang['font_large'] = 'Велики';
$lang['font_huge'] = 'Огромни';

$lang['Close_Tags'] = 'Затвори тегове';
$lang['Styles_tip'] = 'Дали знате: Стилови се могу лако додати на изабрани текст.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Лични пораки';

$lang['Login_check_pm'] = 'Провери приватне поруке.';
$lang['New_pms'] = 'Број нових порука:'; // You have 2 new messages
$lang['New_pm'] = 'Имаш %d нову поруку'; // You have 1 new message
$lang['No_new_pm'] = 'Немате нових порука';
$lang['Unread_pms'] = 'Имате %d непрочитане поруке';
$lang['Unread_pm'] = 'Имате %d непрочитану поруку';
$lang['No_unread_pm'] = 'Немате непрочитаних порука.';
$lang['You_new_pm'] = 'Нова приватна порука вас чека у сандучету';
$lang['You_new_pms'] = 'Нове приватне поруке вас чекају у сандучету.';
$lang['You_no_new_pm'] = 'Немате нове приватне поруке.';

$lang['Unread_message'] = 'Непрочитана порука.';
$lang['Read_message'] = 'Прочитана порука.';

$lang['Read_pm'] = 'Прочитај приватну поруку';
$lang['Post_new_pm'] = 'Пошаљи нову приватну поруку';
$lang['Post_reply_pm'] = 'Одговори на приватну поруку';
$lang['Post_quote_pm'] = 'Цитирај приватну поруку';
$lang['Edit_pm'] = 'Измени приватну поруку';

$lang['Inbox'] = 'Сандуче';
$lang['Outbox'] = 'За слање';
$lang['Savebox'] = 'Снимљено';
$lang['Sentbox'] = 'Послато';
$lang['Flag'] = 'Заставица';
$lang['Subject'] = 'Наслов';
$lang['From'] = 'Од';
$lang['To'] = 'За';
$lang['Date'] = 'Датум';
$lang['Mark'] = 'Обележи';
$lang['Sent'] = 'Послато';
$lang['Saved'] = 'Снимљено';
$lang['Delete_marked'] = 'Избриши обележено';
$lang['Delete_all'] = 'Избриши све';
$lang['Save_marked'] = 'Сними обележене';
$lang['Save_message'] = 'Сними поруку';
$lang['Delete_message'] = 'Обриши поруку';

$lang['Display_messages'] = 'Покажи поруке у задњих'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Све поруке';

$lang['No_messages_folder'] = 'Нема порука у овом директориуму.';

$lang['PM_disabled'] = 'Приватне поруке искључене.';
$lang['Cannot_send_privmsg'] = 'Не можеш да шаљеш приватне поруке.';
$lang['No_to_user'] = 'Морате уписати корисничко име да би сте послали ову поруку.';
$lang['No_such_user'] = 'Корисник не постоји.';

$lang['Disable_HTML_pm'] = 'Искључи HTML-у приватним порукама.';
$lang['Disable_BBCode_pm'] = 'Искључи BBCode-у приватним порукама.';
$lang['Disable_Smilies_pm'] = 'Искључи смајлије у приватним порукама.';

$lang['Message_sent'] = 'Порука послата.';

$lang['Click_return_inbox'] = 'Кликни %sовде%s да се вратите у сандуче';
$lang['Click_return_index'] = 'Кликни %sовде%s да се вратиш на индеџ';

$lang['Send_a_new_message'] = 'Пошаљи нову приватну поруку';
$lang['Send_a_reply'] = 'Одговори на приватну поруку';
$lang['Edit_message'] = 'Измени приватну поруку';

$lang['Notification_subject'] = 'Нова приватна порука је стигла.';

$lang['Find_username'] = 'Нађи корисничко име';
$lang['Find'] = 'Нађи';
$lang['No_match'] = 'Ништа није нађено.';

$lang['No_post_id'] = 'Није уписан ID поруке';
$lang['No_such_folder'] = 'Не постоји такав директориум';
$lang['No_folder'] = 'Није уписан директоријум.';

$lang['Mark_all'] = 'Обележи све';
$lang['Unmark_all'] = 'Поништи све';

$lang['Confirm_delete_pm'] = 'Јесте ли сигурни да желите да обришете ову поруку?';
$lang['Confirm_delete_pms'] = 'Јесте ли сигурни да желите да обришете ове поруке?';

$lang['Inbox_size'] = 'Ваше сандуче је %d%% пуно'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Ваш директоријум за слање је %d%% пун';
$lang['Savebox_size'] = 'Ваш директоријум снимљених порука је %d%% пун';

$lang['Click_view_privmsg'] = 'Кликни овде да уђете у ваше сандуче';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Преглед профила :: %s'; // %s is username
$lang['About_user'] = 'Информације о члану %s'; // %s is username

$lang['Preferences'] = 'Опције';
$lang['Items_required'] = 'Ставке обележене са * (звездицом) су обавезне.';
$lang['Registration_info'] = 'Информације о регистровању';
$lang['Profile_info'] = 'Информације о профилу';
$lang['Profile_info_warn'] = 'Ова информација ће бити јавно доступна свима';
$lang['Avatar_panel'] = 'Контролни панел аватара';
$lang['Avatar_gallery'] = 'Галерија аватара';

$lang['Website'] = 'Сајт';
$lang['Location'] = 'Локација';
$lang['Contact'] = 'Контакт';
$lang['Email_address'] = 'Е-маил адреса';
$lang['Email'] = 'Е-маил';
$lang['Send_private_message'] = 'Пошаљи приватну поруку';
$lang['Hidden_email'] = '[ Сакривено ]';
$lang['Search_user_posts'] = 'Претражи поруке овог члана';
$lang['Interests'] = 'Интереси';
$lang['Occupation'] = 'Занимање';
$lang['Poster_rank'] = 'Ранг аутора';

$lang['Total_posts'] = 'Укупно порука';
$lang['User_post_pct_stats'] = '%.2f%% од укупног броја'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f порука на дан'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Пронађи све поруке аутора %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Жао нам је, али члан са тим именом не постоји';
$lang['Wrong_Profile'] = 'не можете да мењате профил кои није ваш.';

$lang['Only_one_avatar'] = 'Само једна врста аватара може бити изабрана.';
$lang['File_no_data'] = 'Фајл на адреси коју сте уписали не садржи никакве податке.';
$lang['No_connection_URL'] = 'Није могуце остварити конекцију са адресом коју сте уписали.';
$lang['Incomplete_URL'] = 'Адреса коју сте уписали није комплетна.';
$lang['Wrong_remote_avatar_format'] = 'Адреса даљинског аватара није валидна.';
$lang['No_send_account_inactive'] = 'Жао нам је, али ваша шифра није доступна јер ваш налог није активан. Контактирај те администратора форума за још информација.';

$lang['Always_smile'] = 'Увек укључи смајлије';
$lang['Always_html'] = 'Увек укључи HTML';
$lang['Always_bbcode'] = 'Увек укључи BBCode';
$lang['Always_add_sig'] = 'Увек додај мој подпис';
$lang['Always_notify'] = 'Увек ме обавести на одговоре';
$lang['Always_notify_explain'] = 'Е-маил ће вам бити послат сваки пут када неко одговори на тему у којој сте ви писали. Ово може бити промењено увек када пишете.';

$lang['Board_style'] = 'Стил (изглед) форума';
$lang['Board_lang'] = 'Језик форума';
$lang['No_themes'] = 'Не постоји тема у бази података.';
$lang['Timezone'] = 'Временска зона';
$lang['Date_format'] = 'Формат датума';
$lang['Date_format_explain'] = 'Корисничка синтакса идентична је PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> функцији';
$lang['Signature'] = 'Потпис';
$lang['Signature_explain'] = 'Ово је кратак текст који можете да додате вашим порукама. Ограничење дузине је на %d карактера.';
$lang['Public_view_email'] = 'Увак прикажи мој е-маил';

$lang['Current_password'] = 'Тренутна шифра';
$lang['New_password'] = 'Нова шифра';
$lang['Confirm_password'] = 'Потврди шифру';
$lang['Confirm_password_explain'] = 'Морате потврдити вашу тренутну шифру у колико желите да је промените, или ако желите да промените вашу е-маил адресу.';
$lang['password_if_changed'] = 'Само требате да упишете лозинку у колико желите да је промените.';
$lang['password_confirm_if_changed'] = 'Само требате да потврдите вашу лозинку ако сте је примили изнад.';

$lang['Avatar'] = 'Аватар';
$lang['Avatar_explain'] = 'Приказује малу слику испод ваших детаља у поруци. Само једна слика може бити приказана исто времено. Ширина слике не сме бити већа од %d пиксела, а висина не сме бити веца од %d пиксела. Максимална величина фајла је %dkB.';
$lang['Upload_Avatar_file'] = 'Уплоад аватара са ваше машине';
$lang['Upload_Avatar_URL'] = 'Уплоад аватара са URL адресе';
$lang['Upload_Avatar_URL_explain'] = 'Упиши те URL локацију која садржи слику аватара. Биће ископирана на овај сајт.';
$lang['Pick_local_Avatar'] = 'Изаберите аватар из галерије';
$lang['Link_remote_Avatar'] = 'Линк ка аватару на другој страници';
$lang['Link_remote_Avatar_explain'] = 'Упиши те URL локацију која садржи слику аватара коју хоћете да линкујете.';
$lang['Avatar_URL'] = 'URL слике аватара';
$lang['Select_from_gallery'] = 'Изаберите аватар из галерије';
$lang['View_avatar_gallery'] = 'Прикажи галерију';

$lang['Select_avatar'] = 'Изабери аватар';
$lang['Return_profile'] = 'Поништи избор';
$lang['Select_category'] = 'Изабери категорију';

$lang['Delete_Image'] = 'Обриши слику';
$lang['Current_Image'] = 'Тренутна слика';

$lang['Notify_on_privmsg'] = 'Обавести ме када добијем нову приватну поруку';
$lang['Popup_on_privmsg'] = 'Отвори нови прозор када добијем нову приватну поруку';
$lang['Popup_on_privmsg_explain'] = 'Отвориће се нови Поп уп прозор да вас обавести када примите нову приватну поруку.';
$lang['Hide_user'] = 'Сакри се од "Ко је на форуму" ';

$lang['Profile_updated'] = 'Ваш профил је ажуриран.';
$lang['Profile_updated_inactive'] = 'Ваш профил је ажуриран, иако ваш налог није активан. Проверита ваш е-маил да сазнате како да реактивирате ваш налог.';

$lang['Password_mismatch'] = 'Шифре које сте уписали нису идентичне.';
$lang['Current_password_mismatch'] = 'Тренутна шифра коју сте уписали није иста као шифра у бази података.';
$lang['Password_long'] = 'Ваша шифра несме бити дужа од 32 карактера.';
$lang['Username_taken'] = 'Жао нам је, али ово корисничко име је већ узето.';
$lang['Username_invalid'] = 'Жао нам је, али ово корисничко име користи невалидне карактере, као сто је \'';
$lang['Username_disallowed'] = 'Жао нам је, али ово корисничко име није доступно.';
$lang['Email_taken'] = 'Жао нам је, али ту Е-маил адресу је искористио други члан за регистрацију.';
$lang['Email_banned'] = 'Жао нам је, Али ова Е-маил адреса је банована.';
$lang['Email_invalid'] = 'Жао нам је, али ова Е-маил адреса није валидна.';
$lang['Signature_too_long'] = 'Ваш подпис је предугачак.';
$lang['Fields_empty'] = 'Морате испунити захтевна поља.';
$lang['Avatar_filetype'] = 'Екстензија фајла мора бити .jpg, .gif или .png';
$lang['Avatar_filesize'] = 'Величина фајла аватара не сме бити веца од %d kB'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'Аватар мора бити мањи од %d пиксела ширине и %d пиксела висине';

$lang['Welcome_subject'] = 'Добро дошли на %s Форум'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Нови кориснички налог.';
$lang['Account_activated_subject'] = 'Налог активиран.';

$lang['Account_added'] = 'Хвала вам што сте се регистровали, ваш налог је креиран. Сада се мошете пријавити са вашим корисничким именом и лозинком.';
$lang['Account_inactive'] = 'Ваш налог је креиран. Ипак, овај форум захтева активацију налога. Кључ за активацију је послат на е-маил адресу коју сте унели приликом регистрације.';
$lang['Account_inactive_admin'] = 'Ваш налог је креиран. Ипак, овај форум захтева активацију налога од стране адмилистратора. Бићете обавештени када се активира ваш налог.';
$lang['Account_active'] = 'Ваш налог је сад активан. Хвала на регистрацији.';
$lang['Account_active_admin'] = 'Ваш налог је активиран.';
$lang['Reactivate'] = 'Реактивирај те ваш налог.';
$lang['Already_activated'] = 'Већ сте активирали ваш налог.';
$lang['COPPA'] = 'Ваш налог је креиран, али треба да буде допуштен, погледај те е-маил за детаље.';

$lang['Registration'] = 'Услови регистрације';
$lang['Reg_agreement'] = 'Док администратори и уредници овог форума настоје да обришу или замене било који доступни материјал што је брже могуће, немогуће је прегледати сваку поруку. Према томе, на Вама је да знате да све поруке послате на ове форуме исказују ставове и опредељења аутора, никако администратора, уредника или веб мастера (осим, наравно, порука послатих лично од ових људи) и од сада се обавезује те условима.<br /><br />Слажете се да не шаљете никакве погрдне, непристојне, вулгарне, клеветичке, одвратне, претеће, сексуално-орјентисане поруке или било какве материјале које може нарушити било које од корисничких правила. Поступајући другачије, можете бити одмах и трајно искључени(И ваш интернет провајдер ће бити обавештен). IP Адресе свих порука су сачуване за помоћ у случају непримене ових услова. Слажете се да веб мастер, администратор и уредници овог форума имају право да обришу, измене, помере или затворе сваку тему у свако доба ако то сматрају потребним. Као корисник слажете се са свим информацијама јоје сте предходно унели и оне ће бити сачуване у бази података. Да ове информације небуду обављене ни једној трећој особи без Вашег допуштења веб мастеру, администратору и уредницима, они се не могу дрзати за одговорне за било кои од хакерских напада који могу преузети податке који могу довести до неприлика. <br /><br />Овај форум користи cookis да би сачувао информације на Вашем компиутеру. Ови cookis фајлови не садрже ни једну од информација које сте изнад убацили, они служе само да употпуне бољи изглед стране. Е-маил адресасе користи само за потврду ваших података регистрације и шифре.<br /><br />Кад кликнете на дугме за регистрацију испод, слажете се и обавезујете се са свим овим условима.';

$lang['Agree_under_13'] = 'Слажем се са овим условима и ја сам <b>млађи</b>13 година.';
$lang['Agree_over_13'] = 'Слажем се са овим условима и ја сам <b>старији/а од</b> или има те тачно 13 година.';
$lang['Agree_not'] = 'Не слажем се са овим условима.';

$lang['Wrong_activation'] = 'Кључ за активацију који сте унели не поклапа се са оним у нашој бази података.';
$lang['Send_password'] = 'Пошаљи ми нову шифру';
$lang['Password_updated'] = 'Нова шифра је направљена, проверите ваш е-маил са детаљима активације.';
$lang['No_email_match'] = 'Е-маил адреса коју сте унели не поклапа се са оном у вашем налогу.';
$lang['New_password_activation'] = 'Активација нове шифре';
$lang['Password_activated'] = 'Ваш налог је реактивиран. Да би сте се пријавили, користите шифру коју сте добили у е-маилу.';

$lang['Send_email_msg'] = 'Пошаљи е-маил';
$lang['No_user_specified'] = 'Није изабран члан';
$lang['User_prevent_email'] = 'Овај члан не жели да прими е-маил. Покушај те са слањем приватне поруке.';
$lang['User_not_exist'] = 'Такав члан не постоји';
$lang['CC_email'] = 'Пошаљи те копију овог е-маила себи';
$lang['Email_message_desc'] = 'Ова порука ће бити послата као обичан текст, немој те писати никакав HTML или BBKod. Повратна адреса за ову поруку биће васша е-маил адреса.';
$lang['Flood_email_limit'] = 'Не можете да упишете други е-маил сада, покушај те касније.';
$lang['Recipient'] = 'Прималац';
$lang['Email_sent'] = 'Е-маил је послат.';
$lang['Send_email'] = 'Пошаљи Е-маил';
$lang['Empty_subject_email'] = 'Морате уписати наслов е-маила.';
$lang['Empty_message_email'] = 'Морате уписати поруку';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Изаберите методу сортирања';
$lang['Sort'] = 'Сортирај';
$lang['Sort_Top_Ten'] = 'Главних 10 аутора';
$lang['Sort_Joined'] = 'Датум регистрације';
$lang['Sort_Username'] = 'Корисничко име';
$lang['Sort_Location'] = 'Локација';
$lang['Sort_Posts'] = 'Укупне поруке';
$lang['Sort_Email'] = 'Е-маил';
$lang['Sort_Website'] = 'Сајт';
$lang['Sort_Ascending'] = 'Растућем';
$lang['Sort_Descending'] = 'Опадајућем';
$lang['Order'] = 'Низ';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Контрол панел групе';
$lang['Group_member_details'] = 'Детаљи чланства';
$lang['Group_member_join'] = 'Придружи се групи';

$lang['Group_Information'] = 'Информације о групи';
$lang['Group_name'] = 'Име групе';
$lang['Group_description'] = 'Опис групе';
$lang['Group_membership'] = 'Чланство';
$lang['Group_Members'] = 'Чланови групе';
$lang['Group_Moderator'] = 'Уредници групе';
$lang['Pending_members'] = 'Чланови који чекају';

$lang['Group_type'] = 'Врста групе';
$lang['Group_open'] = 'Отворена група';
$lang['Group_closed'] = 'Затворена група';
$lang['Group_hidden'] = 'Скривена група';

$lang['Current_memberships'] = 'Тренутна чланства';
$lang['Non_member_groups'] = 'Групе без чланства';
$lang['Memberships_pending'] = 'Чланства која чекају';

$lang['No_groups_exist'] = 'Не постоји ни једна група';
$lang['Group_not_exist'] = 'Та група чланова не постоји';

$lang['Join_group'] = 'Придружи се';
$lang['No_group_members'] = 'Ова група нема чланова';
$lang['Group_hidden_members'] = 'Ова група је скривена, неможете да видите чланство.';
$lang['No_pending_group_members'] = 'Ова група нема чланова који чекају.';
$lang['Group_joined'] = 'Успешно сте се уписали у ову групу. <br/>Бићете обавештени када ваш упис допусти уредник групе.';
$lang['Group_request'] = 'Зхтев за придруживање вашој групи је направљен';
$lang['Group_approved'] = 'Ваш захтев је допуштен';
$lang['Group_added'] = 'Додати сте у ову групу чланова';
$lang['Already_member_group'] = 'Већ сте члан ове групе';
$lang['User_is_member_group'] = 'Корисник је већ члан ове групе';
$lang['Group_type_updated'] = 'Успешно ажурирана врста групе';

$lang['Could_not_add_user'] = 'Корисничко име које сте изабрали не постоји';
$lang['Could_not_anon_user'] = 'Не можете да додате анонимца за члана.';

$lang['Confirm_unsub'] = 'Јесте ли сигурни да желите да се испишете из ове групе?';
$lang['Confirm_unsub_pending'] = 'Ваш захтев за упис у ову групу још није прегледан, јесте ли сигурни да желите да се испишете?';

$lang['Unsub_success'] = 'Успешно сте се исписали из ове групе.';

$lang['Approve_selected'] = 'Допусти';
$lang['Deny_selected'] = 'Не допуштај';
$lang['Not_logged_in'] = 'Морате бити пријављени да би сте се придружили групи.';
$lang['Remove_selected'] = 'Обриши из групе';
$lang['Add_member'] = 'Додај члана';
$lang['Not_group_moderator'] = 'Ви нисте уредник ове групе, и неможете да извршите такве акције.';

$lang['Login_to_join'] = 'Морате се пријавити да би сте модификовали чланство.';
$lang['This_open_group'] = 'Ово је отворена група, кликните за слање захтева за чланство.';
$lang['This_closed_group'] = 'Ово је затворена група, није допуштено чланство.';
$lang['This_hidden_group'] = 'Ово је скривена група, аутоматско додавање чланова није допуштено.';
$lang['Member_this_group'] = 'Ви сте члан ове групе.';
$lang['Pending_this_group'] = 'Ваш захтев за чланство је на чекању.';
$lang['Are_group_moderator'] = 'Ви сте уредник групе.';
$lang['None'] = 'Нема';

$lang['Subscribe'] = 'Упишите се';
$lang['Unsubscribe'] = 'Испишите се';
$lang['View_Information'] = 'Погледај информације';


//
// Search
//
$lang['Search_query'] = 'Упит за претрагу';
$lang['Search_options'] = 'Опције претраге';

$lang['Search_keywords'] = 'Трази кључне речи.';
$lang['Search_keywords_explain'] = 'Можете користити <u>AND</u> да дефинишете речи које морају бити у резултату, <u>OR</u> да дефинишете речи које могу бити у резултату и <u>NOT</u> да дефинишете речи које не смеју бити у резултату. Користите (*) за поједине поготке. ';
$lang['Search_author'] = 'Тражи аутора.';
$lang['Search_author_explain'] = 'Користите * за поједине поготке.';

$lang['Search_for_any'] = 'Претражи сваки израз или користи упит онако како је унет';
$lang['Search_for_all'] = 'Претражи све изразе.';
$lang['Search_title_msg'] = 'Претражи наслове теме и текст поруке.';
$lang['Search_msg_only'] = 'Претражи само текст поруке';

$lang['Return_first'] = 'Претражи првих'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'Карактера поруке';

$lang['Search_previous'] = 'Претражи од пре'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Сортирај по';
$lang['Sort_Time'] = 'Пост Тиме';
$lang['Sort_Post_Subject'] = 'Наслову поруке';
$lang['Sort_Topic_Title'] = 'Наслову теме';
$lang['Sort_Author'] = 'Аутору';
$lang['Sort_Forum'] = 'Форуму';

$lang['Display_results'] = 'Прикажи резултат као';
$lang['All_available'] = 'Сви доступни';
$lang['No_searchable_forums'] = 'Немате дозволу да претражујете било који форум на овом сајту.';

$lang['No_search_match'] = 'Ни једна тема и ни једна порука не садржи Ваш критеријум.';
$lang['Found_search_match'] = 'Нађен %d погодак'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Нађено %d Погодака'; // eg. Search found 24 matches

$lang['Close_window'] = 'Затвори прозор';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Жао нам је, али само %s могу да постављају обавештење у овом форуму';
$lang['Sorry_auth_sticky'] = 'Жао нам је, али само %s могу да постављају лпљиве поруке у овом форуму';
$lang['Sorry_auth_read'] = 'Жао нам је, али само %s могу да читају тему у овом форуму';
$lang['Sorry_auth_post'] = 'Жао нам је, али само %s могу да постављају тему у овом форуму';
$lang['Sorry_auth_reply'] = 'Жао нам је, али само %s могу да одговарају на тему у овом форуму';
$lang['Sorry_auth_edit'] = 'Жао нам је, али само %s могу да мењају поруке у овом форуму';
$lang['Sorry_auth_delete'] = 'Жао нам је, али само %s могу да бришу поруке у овом форуму';
$lang['Sorry_auth_vote'] = 'Жао нам је, али само %s могу да гласају у овом форуму';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>Анонимни корисници</b>';
$lang['Auth_Registered_Users'] = '<b>Регистровани чланови</b>';
$lang['Auth_Users_granted_access'] = '<b>корисници са специјалном дозволом</b>';
$lang['Auth_Moderators'] = '<b>уредници</b>';
$lang['Auth_Administrators'] = '<b>Администратори</b>';

$lang['Not_Moderator'] = 'Ви нисте уредник овог форума.';
$lang['Not_Authorised'] = 'Нисте овлашћени';

$lang['You_been_banned'] = 'Бановани сте са овог форума.<br />Контактирај те администратора за више информација.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Тренутно је 0 чланова и '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'Тренутно је %d чланова и '; // There ae 5 Registered and
$lang['Reg_user_online'] = 'Тренутно је %d члан и '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 скривених чланова на форуму'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d скривених чланова на форуму'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d скривен члан на форуму.'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Број гостију %d '; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Нема гостију.'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Број гостију: %d '; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Тренутно нема чланова на овом форуму.';

$lang['Online_explain'] = 'Ови подаци су базирани на члановима активним у последњих 5 минута.';

$lang['Forum_Location'] = 'Локација';
$lang['Last_updated'] = 'Последњи пут ажурирано';

$lang['Forum_index'] = 'Индекс форума';
$lang['Logging_on'] = 'Пријављује се';
$lang['Posting_message'] = 'Пише поруку';
$lang['Searching_forums'] = 'Претражује форуме';
$lang['Viewing_profile'] = 'Преглед профила';
$lang['Viewing_online'] = 'Преглед-ко је на форуму';
$lang['Viewing_member_list'] = 'Преглед листе чланова';
$lang['Viewing_priv_msgs'] = 'Преглед приватних порука';
$lang['Viewing_FAQ'] = 'Помоћ';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Контролни панел уредника';
$lang['Mod_CP_explain'] = 'Коришћењем формулара испод можете да извршите масовне операције уредника на овом форуму. Можете да закључате, одкључате, преместите или обришете било који број тема.';

$lang['Select'] = 'Изабери';
$lang['Delete'] = 'Обриши';
$lang['Move'] = 'Помери';
$lang['Lock'] = 'Закључај';
$lang['Unlock'] = 'Одкључај';

$lang['Topics_Removed'] = 'Изабране теме су успешно обрисане из базе података.';
$lang['Topics_Locked'] = 'Изабране теме су закључане';
$lang['Topics_Moved'] = 'Изабране теме су премештене';
$lang['Topics_Unlocked'] = 'Изабране теме су одкључане';
$lang['No_Topics_Moved'] = 'Ни једна тема није премештена';

$lang['Confirm_delete_topic'] = 'Јесте ли сигурни да желите да обришете изабране теме?';
$lang['Confirm_lock_topic'] = 'Јесте ли сигурни да желите да закључате изабране теме?';
$lang['Confirm_unlock_topic'] = 'Јесте ли сигурни да желите да откључате изабране теме?';
$lang['Confirm_move_topic'] = 'Јесте ли сигурни да желите да преместите изабране теме?';

$lang['Move_to_forum'] = 'Премести у форум';
$lang['Leave_shadow_topic'] = 'Остави сенку теме у старом форуму';

$lang['Split_Topic'] = 'Подела теме';
$lang['Split_Topic_explain'] = 'Коришћењем формулара испод можете да поделите једну тему у две.';
$lang['Split_title'] = 'Нови наслов теме';
$lang['Split_forum'] = 'Форум за нову тему';
$lang['Split_posts'] = 'Подели изабране поруке';
$lang['Split_after'] = 'Подели ОД изабраних порука';
$lang['Topic_split'] = 'Изабрана тема је успешно подељена';

$lang['Too_many_error'] = 'Изабрали сте превише порука. Можете изабрати само једну поруку да по њој поделите тему.';

$lang['None_selected'] = 'Нисте изабрали ни једну тему за ову операцију. Вратите се назад и изаберите бар једну тачку';
$lang['New_forum'] = 'Нови форум';

$lang['This_posts_IP'] = 'IP за ову поруку';
$lang['Other_IP_this_user'] = 'Остале IP адресе са коих је овај члан писаон';
$lang['Users_this_IP'] = 'чланови који пишу са овог IP-а';
$lang['IP_info'] = 'IP Информација';
$lang['Lookup_IP'] = 'Погледај IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Сва времена су %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 сати';
$lang['-11'] = 'GMT - 11 сати';
$lang['-10'] = 'GMT - 10 сати';
$lang['-9'] = 'GMT - 9 сати';
$lang['-8'] = 'GMT - 8 сати';
$lang['-7'] = 'GMT - 7 сати';
$lang['-6'] = 'GMT - 6 сати';
$lang['-5'] = 'GMT - 5 сати';
$lang['-4'] = 'GMT - 4 сата';
$lang['-3.5'] = 'GMT - 3.5 сата';
$lang['-3'] = 'GMT - 3 сата';
$lang['-2'] = 'GMT - 2 сата';
$lang['-1'] = 'GMT - 1 сат';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 сат';
$lang['2'] = 'GMT + 2 сата';
$lang['3'] = 'GMT + 3 сата';
$lang['3.5'] = 'GMT + 3.5 сати';
$lang['4'] = 'GMT + 4 сата';
$lang['4.5'] = 'GMT + 4.5 сата';
$lang['5'] = 'GMT + 5 сати';
$lang['5.5'] = 'GMT + 5.5 сати';
$lang['6'] = 'GMT + 6 сати';
$lang['6.5'] = 'GMT + 6.5 сати';
$lang['7'] = 'GMT + 7 сати';
$lang['8'] = 'GMT + 8 сати';
$lang['9'] = 'GMT + 9 сати';
$lang['9.5'] = 'GMT + 9.5 сати';
$lang['10'] = 'GMT + 10 сати';
$lang['11'] = 'GMT + 11 сати';
$lang['12'] = 'GMT + 12 сати';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 сати';
$lang['tz']['-11'] = 'GMT - 11 сати';
$lang['tz']['-10'] = 'GMT - 10 сати';
$lang['tz']['-9'] = 'GMT - 9 сати';
$lang['tz']['-8'] = 'GMT - 8 сати';
$lang['tz']['-7'] = 'GMT - 7 сати';
$lang['tz']['-6'] = 'GMT - 6 сати';
$lang['tz']['-5'] = 'GMT - 5 сати';
$lang['tz']['-4'] = 'GMT - 4 сати';
$lang['tz']['-3.5'] = 'GMT - 3.5 сата';
$lang['tz']['-3'] = 'GMT - 3 сата';
$lang['tz']['-2'] = 'GMT - 2 сата';
$lang['tz']['-1'] = 'GMT - 1 сата';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 сат';
$lang['tz']['2'] = 'GMT + 2 сата';
$lang['tz']['3'] = 'GMT + 3 сата';
$lang['tz']['3.5'] = 'GMT + 3.5 сата';
$lang['tz']['4'] = 'GMT + 4 сата';
$lang['tz']['4.5'] = 'GMT + 4.5 сати';
$lang['tz']['5'] = 'GMT + 5 сати';
$lang['tz']['5.5'] = 'GMT + 5.5 сати';
$lang['tz']['6'] = 'GMT + 6 сати';
$lang['tz']['6.5'] = 'GMT + 6.5 сати';
$lang['tz']['7'] = 'GMT + 7 сати';
$lang['tz']['8'] = 'GMT + 8 сати';
$lang['tz']['9'] = 'GMT + 9 сати';
$lang['tz']['9.5'] = 'GMT + 9.5 сати';
$lang['tz']['10'] = 'GMT + 10 сати';
$lang['tz']['11'] = 'GMT + 11 сати';
$lang['tz']['12'] = 'GMT + 12 сати';

$lang['datetime']['Sunday'] = 'Недеља';
$lang['datetime']['Monday'] = 'Понедељак';
$lang['datetime']['Tuesday'] = 'Уторак';
$lang['datetime']['Wednesday'] = 'Среда';
$lang['datetime']['Thursday'] = 'Четвртак';
$lang['datetime']['Friday'] = 'Петак';
$lang['datetime']['Saturday'] = 'Субота';
$lang['datetime']['Sun'] = 'Нед';
$lang['datetime']['Mon'] = 'Пон';
$lang['datetime']['Tue'] = 'Уто';
$lang['datetime']['Wed'] = 'Сре';
$lang['datetime']['Thu'] = 'Чет';
$lang['datetime']['Fri'] = 'Пет';
$lang['datetime']['Sat'] = 'Суб';
$lang['datetime']['January'] = 'Јануар';
$lang['datetime']['February'] = 'Фебруар';
$lang['datetime']['March'] = 'Март';
$lang['datetime']['April'] = 'Април';
$lang['datetime']['May'] = 'Мај';
$lang['datetime']['June'] = 'Јуни';
$lang['datetime']['July'] = 'Јули';
$lang['datetime']['August'] = 'Август';
$lang['datetime']['September'] = 'Септембар';
$lang['datetime']['October'] = 'Октобар';
$lang['datetime']['November'] = 'Новембар';
$lang['datetime']['December'] = 'Децембар';
$lang['datetime']['Jan'] = 'Јан';
$lang['datetime']['Feb'] = 'Феб';
$lang['datetime']['Mar'] = 'Мар';
$lang['datetime']['Apr'] = 'Апр';
$lang['datetime']['May'] = 'Мај';
$lang['datetime']['Jun'] = 'Јун';
$lang['datetime']['Jul'] = 'Јул';
$lang['datetime']['Aug'] = 'Авг';
$lang['datetime']['Sep'] = 'Сеп';
$lang['datetime']['Oct'] = 'Окт';
$lang['datetime']['Nov'] = 'Нов';
$lang['datetime']['Dec'] = 'Дец';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Информације';
$lang['Critical_Information'] = 'Критичне информације';

$lang['General_Error'] = 'Генерална грешка';
$lang['Critical_Error'] = 'Критична грешка';
$lang['An_error_occured'] = 'Наступила је грешка';
$lang['A_critical_error'] = 'Наступила је критична грешка';

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
// That's all Narode!
// -------------------------------------------------

?>