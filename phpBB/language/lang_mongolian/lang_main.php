<?php
/***************************************************************************
 *                            lang_main.php [English]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
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
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
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
$lang['DATE_FORMAT'] =  'Y-M-d'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_SQL_FORMAT'] = '%Y-%m-%d'; // This should be changed to the default date format for SQL for your language
$lang['DATE_INPUT_FORMAT'] = 'y/m/d'; // Requires 'd', 'm', and 'y' and a punctuation delimiter, order can change
// If you have a question about this Mongolian translation,
// please don't hesitate to contact me. (hujii247@yahoo.com)
// Khurelbaatar LKHAGVASUREN

 $lang['TRANSLATION'] = 'Лхагвасүрэнгийн Хүрэлбаатар';



//
// Common, these terms are used
// extensively on several pages
//

$lang['Forum'] = 'Хэлэлцүүлэг';

$lang['Category'] = 'Төрөл';

$lang['Topic'] = 'Сэдэв';

$lang['Topics'] = 'Сэдвүүд';

$lang['Replies'] = 'Хариултууд';

$lang['Views'] = 'Үзсэн';

$lang['Post'] = 'Бичлэг';

$lang['Posts'] = 'Бичлэгүүд';

$lang['Posted'] = 'Бичигдсэн';

$lang['Username'] = 'Хэрэглэгчийн нэр';

$lang['Password'] = 'Нууц үг';

$lang['Email'] = 'И-Мэйл';

$lang['Poster'] = 'Бичигч';

$lang['Author'] = 'Зохиогч';

$lang['Time'] = 'Цаг';

$lang['Hours'] = 'Цаг';

$lang['Message'] = 'Мэдээлэл';



$lang['1_Day'] = '1 хоног';

$lang['7_Days'] = '7 хоног';

$lang['2_Weeks'] = '2 долоо хоног';

$lang['1_Month'] = '1 сар';

$lang['3_Months'] = '3 сар';

$lang['6_Months'] = '6 сар';

$lang['1_Year'] = '1 жил';



$lang['Go'] = 'Очих';

$lang['Jump_to'] = 'Ийшээ оч';

$lang['Submit'] = 'Батлах';

$lang['Reset'] = 'Цэвэрлэх';

$lang['Cancel'] = 'Болих';

$lang['Preview'] = 'Урьдчилан харах';

$lang['Confirm'] = 'Баталгаажуул';

$lang['Spellcheck'] = 'Үгийн алдаа шалгах';

$lang['Yes'] = 'Тийм';

$lang['No'] = 'Үгүй';

$lang['Enabled'] = 'Идэвхтэй';

$lang['Disabled'] = 'Идэвхгүй';

$lang['Error'] = 'Алдаа';



$lang['Next'] = 'Дараагийн';

$lang['Previous'] = 'Өмнөх';

$lang['Goto_page'] = 'Хуудсанд оч';

$lang['Joined'] = 'Нэгдсэн';

$lang['IP_Address'] = 'IP хаяг';



$lang['Select_forum'] = 'Хэлэлцүүлгээ сонго';

$lang['View_latest_post'] = 'Хамгийн сүүлийн бичлэгийг харах';

$lang['View_newest_post'] = 'Шинэ бичлэгийг харах ';

$lang['Page_of'] = 'Хуудас <b>%d</b> (нийт <b>%d</b>)'; // Replaces with: Page 1 of 2 for example



$lang['ICQ'] = 'ICQ дугаар';

$lang['AIM'] = 'AIM хаяг';

$lang['MSNM'] = 'MSN Messenger';

$lang['YIM'] = 'Yahoo Messenger';



$lang['Forum_Index'] = '%s Чуулганы эхлэл';  // eg. sitename Forum Index, %s can be removed if you prefer



$lang['Post_new_topic'] = 'Шинэ сэдэв оруулах';

$lang['Reply_to_topic'] = 'Сэдэвд хариулах';

$lang['Reply_with_quote'] = 'Ишлэлтэй хариулах';



$lang['Click_return_topic'] = 'Сэдэв рүү буцахын тулд %sэнд%s дар'; // %s's here are for uris, do not remove!

$lang['Click_return_login'] = 'Дахиж оролдоод үзэхийн тулд %sэнд%s дар';

$lang['Click_return_forum'] = 'Чуулган руу буцахын тулд %sэнд%s дар';

$lang['Click_view_message'] = 'Бичсэн зvйлээ харахын тулд %sэнд%s дар';

$lang['Click_return_modcp'] = 'Зохицуулагчийн удирдлагын хэсэгт очихын тулд %sэнд%s дар';

$lang['Click_return_group'] = 'Бүлгэмийн мэдээлэл рүү буцахын тулд %sэнд%s дар';



$lang['Admin_panel'] = 'Удирдлагын хэсэгт очих';



$lang['Board_disable'] = 'Чуулганд шинэчлэл хийгдэж байгаа тул та хэдэн цагийн дараа дахин орно уу!';


//
// Global Header strings
//

$lang['Registered_users'] = 'Бүртгэгдсэн гишүүд:';

$lang['Browsing_forum'] = 'Энэ хэлэлцүүлгийг үзэж байгаа гишүүд:';

$lang['Online_users_zero_total'] = 'Нийт холбогдсон хэрэглэгчид: <b>0</b> <br>';

$lang['Online_users_total'] = 'Нийт холбогдсон хэрэглэгчид: <b>%d</b> <br>';

$lang['Online_user_total'] = 'Нийт холбогдсон хэрэглэгчид: <b>%d</b> <br>';

$lang['Reg_users_zero_total'] = 'Бүртгэгдсэн: <b>0</b> <br>';

$lang['Reg_users_total'] = 'Бүртгэгдсэн: <b>%d</b> <br>';

$lang['Reg_user_total'] = 'Бүртгэгдсэн: <b>%d</b> <br>';

$lang['Hidden_users_zero_total'] = 'Нууцлагдмал: <b>0</b> <br>';

$lang['Hidden_user_total'] = 'Нууцлагдмал: <b>%d</b> <br>';

$lang['Hidden_users_total'] = 'Нууцлагдмал: <b>%d</b> <br>';

$lang['Guest_users_zero_total'] = 'Зочин: <b>%d</b> <br>';

$lang['Guest_users_total'] = 'Зочин: <b>%d</b> <br>';

$lang['Guest_user_total'] = 'Зочин: <b>%d</b> <br>';

$lang['Record_online_users'] = 'Хамгийн их буюу <b>%s</b> хэрэглэгч <b>%s</b>-нд нэг зэрэг байсан байна';
// first %s = number of users, second %s is the date.



$lang['Admin_online_color'] = '%sУдирдагч%s';

$lang['Mod_online_color'] = '%sЗохицуулагч%s';



$lang['You_last_visit'] = 'Та хамгийн сүүлд %s-нд нэвтэрсэн байна.'; // %s replaced by date/time

$lang['Current_time'] = 'Одоо цаг %s болж байна'; // %s replaced by time



$lang['Search_new'] = 'Сvvлд нэвтэрснээс хойшхи бичлэгүүдийг харах';

$lang['Search_your_posts'] = 'Өөрийнхөө бичлэгүүдийг харах';

$lang['Search_unanswered'] = 'Хариулагдаагvй бичлэгүүдийг харах';



$lang['Register'] = 'Бүртгүүлэх';

$lang['Profile'] = 'Хувийн тохиргоо';

$lang['Edit_profile'] = 'Хувийн тохиргоогоо засах';

$lang['Search'] = 'Хайлт';

$lang['Memberlist'] = 'Гишүүд';

$lang['FAQ'] = 'Тусламж';

$lang['BBCode_guide'] = 'BBCode хэрэглэх заавар';

$lang['Usergroups'] = 'Бүлгэм';

$lang['Last_Post'] = 'Сүүлчийн бичлэг';

$lang['Moderator'] = 'Зохицуулагч';

$lang['Moderators'] = 'Зохицуулагчид';





//
// Stats block text
//

$lang['Posted_articles_zero_total'] = 'Бичлэг байхгүй байна'; // Number of posts

$lang['Posted_articles_total'] = 'Нийт бичлэг: <b>%d</b>'; // Number of posts

$lang['Posted_article_total'] = 'Нийт бичлэг: <b>%d</b>'; // Number of posts

$lang['Registered_users_zero_total'] = 'Гишүүд байхгүй байна'; // # registered users

$lang['Registered_users_total'] = 'Нийт гишүүд: <b>%d</b>'; // # registered users

$lang['Registered_user_total'] = 'Нийт гишүүд: <b>%d</b>'; // # registered users

$lang['Newest_user'] = 'Шинэхэн гишүүд: <b>%s%s%s</b>'; // a href, username, /a 



$lang['No_new_posts_last_visit'] = 'Таныг сүүлд зочилсноос хойш шинэ бичлэг нэмэгдээгүй байна';

$lang['No_new_posts'] = 'Шинэ бичлэгүүд алга байна';

$lang['New_posts'] = 'Шинэ бичлэгүүд';

$lang['New_post'] = 'Шинэ бичлэг';

$lang['No_new_posts_hot'] = 'Шинэ бичлэгүүд байхгүй [ түгээмэл ]';

$lang['New_posts_hot'] = 'Шинэ бичлэгүүд [ түгээмэл ]';

$lang['No_new_posts_locked'] = 'Шинэ бичлэгүүд байхгүй [ түгжээтэй ]';

$lang['New_posts_locked'] = 'Шинэ бичлэгүүд [ түгжээтэй ]';

$lang['Forum_is_locked'] = 'Хэлэлцүүлэг түгжээтэй';





//
// Login
//

$lang['Enter_password'] = 'Нэвтрэхийн тулд хэрэглэгчийн нэр болон нууц үгээ оруулна уу!';

$lang['Login'] = 'Нэвтрэх';

$lang['Logout'] = 'Гарах';



$lang['Forgotten_password'] = 'Би нууц үгээ мартсан';



$lang['Log_me_in'] = 'Намайг шууд нэвтрүүлж бай';



$lang['Error_login'] = 'Та буруу эсвэл хүчингvй хэрэглэгчийн нэр юмуу эсвэл буруу нууц үг оруулсан байна';





//

// Index page

//

$lang['Index'] = 'Индекс';

$lang['No_Posts'] = 'Бичлэг байхгүй';

$lang['No_forums'] = 'Энд хэлэлцүүлэг алга байна';



$lang['Private_Message'] = 'Хувийн зурвас';

$lang['Private_Messages'] = 'Хувийн зурвасууд';

$lang['Who_is_Online'] = 'Холбогдсон хүмүүс';



$lang['Mark_all_forums'] = 'Бүх хэлэлцүүлэгүүдийг уншсан болгож тэмдэглэ';

$lang['Forums_marked_read'] = 'Бүх хэлэлцүүлэгүүд уншсан болж тэмдэглэгдсэн.';





//

// Viewforum

//

$lang['View_forum'] = 'Хэлэлцүүлэгийг харах';



$lang['Forum_not_exist'] = 'Таны сонгосон хэлэлцүүлэг алга байна';

$lang['Reached_on_error'] = 'Энэ хуудсыг ачаалах үед алдаа гарлаа!';



$lang['Display_topics'] = 'Урдны сэдвүүдээс харуул';

$lang['All_Topics'] = 'Бүх сэдвүүд';



$lang['Topic_Announcement'] = '<b>Зарлал:</b>';

$lang['Topic_Sticky'] = '<b>Наалттай:</b>';

$lang['Topic_Moved'] = '<b>Шилжсэн:</b>';

$lang['Topic_Poll'] = '<b>Санал асуулга</b>';



$lang['Mark_all_topics'] = 'Бүх сэдвийг уншсан болгож тэмдэглэ';

$lang['Topics_marked_read'] = 'Энэ хэлэлцүүлэгийн бүх сэдэв уншсан болж тэмдэглэгдсэн';



$lang['Rules_post_can'] = 'Та энд шинэ сэдвүүд нэмж <b>чадна</b>.';

$lang['Rules_post_cannot'] = 'Та энэ хэлэлцүүлэгт шинэ сэдвүүд нэмж <b>чадахгүй</b>.';

$lang['Rules_reply_can'] = 'Та энэ хэлэлцүүлэгийн сэдвүүдэд хариулж <b>чадна</b>';

$lang['Rules_reply_cannot'] = 'Та энэ хэлэлцүүлэгийн сэдвүүдэд хариулж <b>чадахгүй</b>';

$lang['Rules_edit_can'] = 'Та энэ хэлэлцүүлэг дэх бичлэгүүдээ засаж <b>чадна</b>';

$lang['Rules_edit_cannot'] = 'Та энэ хэлэлцүүлэг дэх бичлэгүүдээ засаж <b>чадахгүй</b>';

$lang['Rules_delete_can'] = 'Та энэ хэлэлцүүлэг дэх бичлэгүүдээ устгаж <b>чадна</b>';

$lang['Rules_delete_cannot'] = 'Та энэ хэлэлцүүлэг дэх бичлэгүүдээ устгаж <b>чадахгүй</b>';

$lang['Rules_vote_can'] = 'Та энэ хэлэлцүүлэгт санал өгч <b>чадна</b>';

$lang['Rules_vote_cannot'] = 'Та энэ хэлэлцүүлэгт санал өгч <b>чадахгүй</b>';

$lang['Rules_moderate'] = 'Та энэ хэлэлцүүлэгийг %sзохицуулж%s <b>чадна</b>'; // %s replaced by a href links, do not remove! 



$lang['No_topics_post_one'] = 'Энэ хэлэлцүүлэгт бичлэг байхгүй байна. <br />Энд шинээр бичлэг оруулахын тулд <b>Шинэ бичлэг оруулах</b> холбоос дээр дарна уу.';





//

// Viewtopic

//

$lang['View_topic'] = 'Сэдэв харах';



$lang['Guest'] = 'Зочин';

$lang['Post_subject'] = 'Бичлэгийн гарчиг';

$lang['View_next_topic'] = 'Дараачийн сэдвийг харах';

$lang['View_previous_topic'] = 'Өмнөх сэдвийг харах';

$lang['Submit_vote'] = 'Саналаа өгөх';

$lang['View_results'] = 'Үр дүнгүүдийг харах';



$lang['No_newer_topics'] = 'Энэ хэлэлцүүлэгт шинэ сэдвүүд алга байна';

$lang['No_older_topics'] = 'Энэ хэлэлцүүлэгт хуучин сэдвүүд алга байна';

$lang['Topic_post_not_exist'] = 'Таны хүссэн сэдэв юмуу бичлэг алга байна';

$lang['No_posts_topic'] = 'Энэ хэлэлцүүлэгт хуучин сэдэв алга байна';



$lang['Display_posts'] = 'Өмнөх бичлэгүүдийг харах';

$lang['All_Posts'] = 'Бүх бичлэгүүд';

$lang['Newest_First'] = 'Шинэ нь эхэндээ';

$lang['Oldest_First'] = 'Хуучин нь эхэндээ';



$lang['Back_to_top'] = 'Эхэнд оч';



$lang['Read_profile'] = 'Хэрэглэгчийн мэдээллийг харах'; 

$lang['Send_email'] = 'Энэ хэрэглэгчид имэйл илгээ';

$lang['Visit_website'] = 'Бичигчийн вэб хуудсанд зочил';

$lang['ICQ_status'] = 'ICQ төлөв';

$lang['Edit_delete_post'] = 'Энэ бичлэгийг Зас/Устга';

$lang['View_IP'] = 'Бичигчийн IP-г харах';

$lang['Delete_post'] = 'Энэ бичлэгийг устга';



$lang['wrote'] = 'бичсэн'; // proceeds the username and is followed by the quoted text

$lang['Quote'] = 'Ишлэл'; // comes before bbcode quote output.

$lang['Code'] = 'Код'; // comes before bbcode code output.



$lang['Edited_time_total'] = 'Сүүлд %s, %s-нд зассан, нийтдээ %d удаа засагдсан'; // Last edited by me on 12 Oct 2001, edited 1 time in total

$lang['Edited_times_total'] = 'Сүүлд %s, %s-нд зассан, нийтдээ %d удаа засагдсан'; // Last edited by me on 12 Oct 2001, edited 2 times in total



$lang['Lock_topic'] = 'Энэ сэдвийг түгж';

$lang['Unlock_topic'] = 'Энэ сэдвийг нээ';

$lang['Move_topic'] = 'Энэ сэдвийг шилжүүл';

$lang['Delete_topic'] = 'Энэ сэдвийг устга';

$lang['Split_topic'] = 'Энэ сэдвийг хуваа';



$lang['Stop_watching_topic'] = 'Энэ сэдвийг манахаа болих';

$lang['Start_watching_topic'] = 'Энэ сэдвийн хариултуудыг манах';

$lang['No_longer_watching'] = 'Та одоо энэ сэдвийг манахгүй болж байна';

$lang['You_are_watching'] = 'Та одоо энэ сэдвийг манадаг болж байна';



$lang['Total_votes'] = 'Нийт өгсөн санал';



//

// Posting/Replying (Not private messaging!)

//

$lang['Message_body'] = 'Бичлэгийн үндсэн хэсэг';

$lang['Topic_review'] = 'Сэдвийн үндсэн агуулга';



$lang['No_post_mode'] = 'Ямар нэгэн бичлэгийн горим өгөгдөөгүй байна!'; 
// If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)



$lang['Post_a_new_topic'] = 'Шинэ сэдэв оруулах';

$lang['Post_a_reply'] = 'Хариу бичих';

$lang['Post_topic_as'] = 'Бичлэгийг ингэж оруул';

$lang['Edit_Post'] = 'Бичлэгийг засах';

$lang['Options'] = 'Сонголтууд';



$lang['Post_Announcement'] = 'Зарлал';

$lang['Post_Sticky'] = 'Наалттай';

$lang['Post_Normal'] = 'Хэвийн';



$lang['Confirm_delete'] = 'Та үнэхээр энэ бичлэгийг устгахыг хүсэж байна уу?';

$lang['Confirm_delete_poll'] = 'Та үнэхээр энэ санал асуулгыг устгахыг хүсэж байна уу?';



$lang['Flood_Error'] = 'Та сүүлд бичлэг оруулсанаасаа хойш ийм хурдан хугацааны дотор өөрийг дахин оруулж чадахгүй, хэсэгхэн хугацааны дараа дахин оролдоно уу!';

$lang['Empty_subject'] = 'Та шинэ бичлэг оруулахдаа гарчиг оруулах ёстой!';

$lang['Empty_message'] = 'Та бичлэг оруулж байхдаа ямар нэгэн мэдээлэл заавал бичих ёстой!';

$lang['Forum_locked'] = 'Энэ хэлэлцүүлэг түгжээтэй байгаа тул та шинэ бичлэг нэмж, сэдэвт хариулж, сэдвийг засаж чадахгүй!';

$lang['Topic_locked'] = 'Энэ сэдэв түгжээтэй байгаа тул та бичлэгт хариулж, бичлэгийг засаж чадахгүй!';

$lang['No_post_id'] = 'Та засах бичлэгээ сонгох ёстой!';

$lang['No_topic_id'] = 'Та ямар бичлэгт хариулахаа сонгох ёстой!';

$lang['No_valid_mode'] = 'Та зөвхөн бичлэг оруулж, хариулж мөн ишлэлтэй бичиж чадна. Буцаж ороод дахиад оролдоод үзнэ үү!';

$lang['No_such_post'] = 'Энд ямар нэг бичлэг алга, буцаж байгаад дахиад оролдоно уу!';

$lang['Edit_own_posts'] = 'Харамсалтай нь та зөвхөн өөрийн бичлэгүүдийг засаж чадна!';

$lang['Delete_own_posts'] = 'Харамсалтай нь та зөвхөн өөрийн бичлэгүүдийг устгаж чадна!';

$lang['Cannot_delete_replied'] = 'Харамсалтай нь та хариулагдсан бичлэгүүдийг устгаж чадахгүй!';

$lang['Cannot_delete_poll'] = 'Харамсалтай нь та идэвхтэй санал асуулгыг устгаж чадахгүй!';

$lang['Empty_poll_title'] = 'Та санал асуулгандаа нэр өгөх ёстой!l';

$lang['To_few_poll_options'] = 'Та санал асуулгандаа дор хаяж хоёр хариулт оруулах ёстой';

$lang['To_many_poll_options'] = 'Та хэтэрхий олон санал асуулгын хариулт оруулахаар оролдож байна';

$lang['Post_has_no_poll'] = 'Энэ бичлэгэнд санал асуулга байхгүй';

$lang['Already_voted'] = 'Та энэ санал асуулганд саналаа өгчихсөн байна.';

$lang['No_vote_option'] = 'Та санал өгөхдөө хариултаа сонгох ёстой';



$lang['Add_poll'] = 'Санал асуулга нэмэх';

$lang['Add_poll_explain'] = 'Та хэрвээ энэ бичлэгтээ санал асуулга нэмэх хүсэлгүй байгаа бол дараах нүднүүдийг хоосон орхино уу.';

$lang['Poll_question'] = 'Асуулт';

$lang['Poll_option'] = 'Сонгох хариулт';

$lang['Add_option'] = 'Хариулт нэмэх';

$lang['Update'] = 'Өөрчилөх';

$lang['Delete'] = 'Устгах';

$lang['Poll_for'] = 'Энэ санал асуулгын үргэлжилэх хугацаа нь';

$lang['Days'] = 'өдөр'; // This is used for the Run poll for ... Days + in admin_forums for pruning

$lang['Poll_for_explain'] = '[ Хэрвээ энэ санал асуулгыг хэзээ ч дуусгахгvй гэвэл 0 гэж оруул эсвэл хоосон орхи ]';

$lang['Delete_poll'] = 'Санал асуулгыг устгах';



$lang['Disable_HTML_post'] = 'Энэ бичлэгт HTML кодыг идэвхгvй болго';

$lang['Disable_BBCode_post'] = 'Энэ бичлэгт BBCode кодыг идэвхгvй болго';

$lang['Disable_Smilies_post'] = 'Энэ бичлэгт инээмсэглэлүүдийг идэвхгvй болго';



$lang['HTML_is_ON'] = 'HTML <u>БОЛОМЖТОЙ</u>';

$lang['HTML_is_OFF'] = 'HTML <u>БОЛОМЖГҮЙ</u>';

$lang['BBCode_is_ON'] = '%sBBCode%s <u>БОЛОМЖТОЙ</u>'; // %s are replaced with URI pointing to FAQ

$lang['BBCode_is_OFF'] = '%sBBCode%s <u>БОЛОМЖГҮЙ</u>';

$lang['Smilies_are_ON'] = 'Инээмсэглэлүүд <u>БОЛОМЖТОЙ</u>';

$lang['Smilies_are_OFF'] = 'Инээмсэглэлүүд <u>БОЛОМЖГҮЙ</u>';



$lang['Attach_signature'] = 'Гарын үсэг оруул (гарын үсгээ та хувийн тохиргоондоо өөрчилж болно)';

$lang['Notify'] = 'Үүннд ямар нэгэн хариулт бичигдвэл надад мэдэгдэж бай';

$lang['Delete_post'] = 'Энэ бичлэгийг устгах';



$lang['Stored'] = 'Таны бичсэн зүйл амжилттай орлоо';

$lang['Deleted'] = 'Таны бичсэн зүйл амжилттай устгагдлаа';

$lang['Poll_delete'] = 'Таны санал асуулга амжилттай устгагдлаа';

$lang['Vote_cast'] = 'Таны саналыг хvлээж авлаа.';



$lang['Topic_reply_notification'] = 'Сэдэвт хариулсаны мэдэгдэл';



$lang['bbcode_b_help'] = 'Бүдүүн vсэг: [b]text[/b]  (alt+b)';

$lang['bbcode_i_help'] = 'Налуу vсэг: [i]text[/i]  (alt+i)';

$lang['bbcode_u_help'] = 'Доогуур зураас: [u]text[/u]  (alt+u)';

$lang['bbcode_q_help'] = 'Ишлэл хэсэг: [quote]text[/quote]  (alt+q)';

$lang['bbcode_c_help'] = 'Кол харуулах: [code]code[/code]  (alt+c)';

$lang['bbcode_l_help'] = 'Жагсаах: [list]text[/list] (alt+l)';

$lang['bbcode_o_help'] = 'Дугаарлах: [list=]text[/list]  (alt+o)';

$lang['bbcode_p_help'] = 'Зураг оруулах: [img]http://image_url[/img]  (alt+p)';

$lang['bbcode_w_help'] = 'URL оруулах: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';

$lang['bbcode_a_help'] = 'Бүх нээлттэй байгаа bbCode тэмдэглэгээнүүдийг хаах';

$lang['bbcode_s_help'] = 'Бичгийн өнгө: [color=red]text[/color]  Зөвлөмж: та мөн өнгөний код хэрэглэж болно=#FF0000';

$lang['bbcode_f_help'] = 'Үсгийн хэмжээ: [size=x-small]small text[/size]';



$lang['Emoticons'] = 'Инээмсэглэлүүд';

$lang['More_emoticons'] = 'Ондоо инээмсэглэлүүдийг харах';



$lang['Font_color'] = 'Бичгийн өнгө';

$lang['color_default'] = 'Үндсэн';

$lang['color_dark_red'] = 'Бараан улаан';

$lang['color_red'] = 'Улаан';

$lang['color_orange'] = 'Ягаан';

$lang['color_brown'] = 'Бор';

$lang['color_yellow'] = 'Шар';

$lang['color_green'] = 'Ногоон';

$lang['color_olive'] = 'Бор ногоон';

$lang['color_cyan'] = 'Цагаан цэнхэр';

$lang['color_blue'] = 'Цэнхэр';

$lang['color_dark_blue'] = 'Хар хөх';

$lang['color_indigo'] = 'Гүн цэнхэр хөх';

$lang['color_violet'] = 'Хөх ягаан';

$lang['color_white'] = 'Цагаан';

$lang['color_black'] = 'Хар';



$lang['Font_size'] = 'Үсгийн хэмжээ';

$lang['font_tiny'] = 'Маш жижиг';

$lang['font_small'] = 'Жижиг';

$lang['font_normal'] = 'Хэвийн';

$lang['font_large'] = 'Том';

$lang['font_huge'] = 'Маш том';



$lang['Close_Tags'] = 'Тэмдэглэгээнүүдийг хаа';

$lang['Styles_tip'] = 'Зөвлөмж: Та текстээ идэвхжүүлж байгаад загвар оруулбал их амархан шүү';


//

// Private Messaging

//

$lang['Private_Messaging'] = 'Хувийн зурвасдах';



$lang['Login_check_pm'] = 'Хувийн зурвас';

$lang['New_pms'] = 'Хувийн зурвас /%d шинэ/'; // You have 2 new messages

$lang['New_pm'] = 'Хувийн зурвас /%d шинэ/'; // You have 1 new message

$lang['No_new_pm'] = 'Хувийн зурвас';

$lang['Unread_pms'] = 'Танд уншаагүй зурвас алга байна';

$lang['Unread_pm'] = 'Танд уншаагүй %d зурвас байна';

$lang['No_unread_pm'] = 'Танд уншаагүй зурвасууд байхгүй байна';

$lang['You_new_pm'] = 'Таны Inbox-т нэг шинэ хувийн зурвас байна';

$lang['You_new_pms'] = 'Таны Inbox-т шинэ хувийн зурвасууд байна';

$lang['You_no_new_pm'] = 'Танд шинэ хувийн зурвас алга байна';



$lang['Unread_message'] = 'Уншаагүй зурвас';

$lang['Read_message'] = 'Уншсан зурвас';



$lang['Read_pm'] = 'Зурвас унших';

$lang['Post_new_pm'] = 'Зурвас бичих';

$lang['Post_reply_pm'] = 'Зурвасанд хариулах';

$lang['Post_quote_pm'] = 'Ишлэлтэй бичих';

$lang['Edit_pm'] ='Зурвасыг засах';



$lang['Inbox'] = 'Inbox';

$lang['Outbox'] = 'Outbox';

$lang['Savebox'] = 'Хадгаламжийн хайрцаг';

$lang['Sentbox'] = 'Sentbox';

$lang['Flag'] = 'Төлөв';

$lang['Subject'] = 'Гарчиг';

$lang['From'] = 'Хэнээс';

$lang['To'] = 'Хэнд';

$lang['Date'] = 'Огноо';

$lang['Mark'] = 'Тэмдэглэ';

$lang['Sent'] = 'Илгээгдсэн';

$lang['Saved'] = 'Хадгалагдсан';

$lang['Delete_marked'] = 'Тэмдэглэгдсэнийг устгах';

$lang['Delete_all'] = 'Бүгдийг устгах';

$lang['Save_marked'] = 'Тэмдэглэгдсэнийг хадгалах';

$lang['Save_message'] = 'Зурвас хадгалах';

$lang['Delete_message'] = 'Зурвас устгах';



$lang['Display_messages'] = 'Өмнөх зурвасуудаас харах'; // Followed by number of days/weeks/months

$lang['All_Messages'] = 'Бүх зурвас';



$lang['No_messages_folder'] = 'Энэ хавтасанд танд шинэ зурвас алга байна';



$lang['PM_disabled'] = 'Хувийн зурвасын боломж энэ чуулгадн хаагдсан';

$lang['Cannot_send_privmsg'] = 'Уучлаарай, удирдагч таны хувийн зурвас илгээх боломжийг хаасан байна';

$lang['No_to_user'] = 'Та энэ зурвасыг явуулах хэрэглэгчийн нэрийг оруулах ёстой';

$lang['No_such_user'] = 'Харамсалтай нь ийм хэрэглэгч байхгүй байна';



$lang['Disable_HTML_pm'] = 'Энэ зурвасанд HTML-г идэвхгүй болго';

$lang['Disable_BBCode_pm'] = 'Энэ зурвасанд BBCode-г идэвхгүй болго';

$lang['Disable_Smilies_pm'] = 'Энэ зурвасанд инээмсэглэлүүдийг идэвхгүй болго';



$lang['Message_sent'] = 'Таны зурвас илгээгдлээ';



$lang['Click_return_inbox'] = 'Inbox руугаа буцахын тулд %sэнд%s дарна уу!';

$lang['Click_return_index'] = 'Эхлэл хэсэг рүү очихын тулд %sэнд%s дарна уу!';



$lang['Send_a_new_message'] = 'Шинэ хувийн зурвас илгээх';

$lang['Send_a_reply'] = 'Хувийн зурвасанд хариулах';

$lang['Edit_message'] = 'Хувийн зурвасыг засах';


 
$lang['Notification_subject'] = 'Шинэ хувийн зурвас ирсэн';



$lang['Find_username'] = 'Хэрэглэгч хайх';

$lang['Find'] = 'Хайх';

$lang['No_match'] = 'Ямар нэгэн зүйл олдсонгүй';



$lang['No_post_id'] = 'Ямар ч бичлэгийн ID сонгогдоогүй байн';

$lang['No_such_folder'] = 'Ийм хавтас байхгүй';

$lang['No_folder'] = 'Ямар ч хавтас слнглгпллгүй байна';



$lang['Mark_all'] = 'Бүгдийг тэмдэглэх';

$lang['Unmark_all'] = 'Бүгдийг тэмдэглээгүй болгох';



$lang['Confirm_delete_pm'] = 'Та энэ зурвасыг устгахыг үнэхээр хүсэж байна уу?';

$lang['Confirm_delete_pms'] = 'Та эдгээр зурвасуудыг устгахыг үнэхээр хүсэж байна уу?';



$lang['Inbox_size'] = 'Таны Inbox-ын %d%% нь дүүрэн байна'; // eg. Your Inbox is 50% full

$lang['Sentbox_size'] = 'Таны Sentbox-ын %d%% нь дүүрэн байна';

$lang['Savebox_size'] = 'Таны Хадгаламжийн хайрцагын %d%% нь дүүрэн байна';



$lang['Click_view_privmsg'] = 'Inbox-тоо очихын тулд %sэнд%s дарна уу!';





//

// Profiles/Registration

//

$lang['Viewing_user_profile'] = 'Хувийн мэдээллийг vзэх :: %s'; // %s is username

$lang['About_user'] = '%s-ий тухай мэдээлэл'; // %s is username



$lang['Preferences'] = 'Лавлахууд';

$lang['Items_required'] = '* тэмдэгтэй талбарууд л заавал утгатай байх албатай';

$lang['Registration_info'] = 'Бүртгэлийн мэдээлэл';

$lang['Profile_info'] = 'Хувийн мэдээлэл';

$lang['Profile_info_warn'] = 'Энэ мэдээлэл нийтэд харагдахаар байх болно';

$lang['Avatar_panel'] = 'Хөрөг зураг удирдах хэсэг';

$lang['Avatar_gallery'] = 'Хөрөг зургийн галлерей';



$lang['Website'] = 'Вэб сайт';

$lang['Location'] = 'Байрлал';

$lang['Contact'] = 'Харилцах';

$lang['Email_address'] = 'И-Мэйл хаяг';

$lang['Email'] = 'И-Мэйл';

$lang['Send_private_message'] = 'Хувийн зурвас илгээх';

$lang['Hidden_email'] = '[ Нууцлагдсан ]';

$lang['Search_user_posts'] = 'Энэ хэрэглэгчийн бичлэгүүдийг хайх';

$lang['Interests'] = 'Сонирхол';

$lang['Occupation'] = 'Мэргэжил'; 

$lang['Poster_rank'] = 'Бичигчийн үнэлгээ';



$lang['Total_posts'] = 'Нийт бичлэгүүд';

$lang['User_post_pct_stats'] = 'Нийт %.2f%%'; // 1.25% of total

$lang['User_post_day_stats'] = 'Өдөрт %.2f бичлэг'; // 1.5 posts per day

$lang['Search_user_posts'] = '%s-ий бүх бичлэгүүдийг хай'; // Find all posts by username



$lang['No_user_id_specified'] = 'Харамсалтай нь ийм хэрэглэгч алга байна';

$lang['Wrong_Profile'] = 'Та өөрийнхөө биш хувийн тохиргоог өөрчилж чадахгүй.';



$lang['Only_one_avatar'] = 'Зөвхөн нэг төрлийн хөрөг зураг сонгож болно';

$lang['File_no_data'] = 'Таны оруулсан URL ямар ч өгөгдөл агуулаагүй байна';

$lang['No_connection_URL'] = 'Таны оруулсан URL руу холбогдож болсонгүй';

$lang['Incomplete_URL'] = 'Таны оруулсан URL дутуу байна';

$lang['Wrong_remote_avatar_format'] = 'Таны оруулсан хөрөгийн URL буруу байна';

$lang['No_send_account_inactive'] = 'Уучлаарай, таны бүртгэл одоогоор идэвхгүй байгаа тул та нууц үгээ хүлээн авч чадахгүй. Энэ талаар мэдээлэл авахын тулд чуулганы удидагчтай холбоо барина уу!';



$lang['Always_smile'] = 'Инээмсэглэлүүдийг үргэлж зөвшөөрнө';

$lang['Always_html'] = 'HTML кодыг үргэлж зөвшөөрнө';

$lang['Always_bbcode'] = 'BBCode-ийг үргэлж зөвшөөрнө';

$lang['Always_add_sig'] = 'Миний гарын үсгийг үргэлж нэм';

$lang['Always_notify'] = 'Хариултуудыг үргэлж надад мэдэгдэж байна';

$lang['Always_notify_explain'] = 'Таны бичсэн бичлэгт хэн нэг нь хариулт бичихэд танд и-мэйл илгээгдэнэ. Үүнийг та шинэ бичлэг оруулж байхдаа бас тохируулж болно.';



$lang['Board_style'] = 'Загвар';

$lang['Board_lang'] = 'Хэл';

$lang['No_themes'] = 'Мэдээллийн санд ямар ч загвар алга байна';

$lang['Timezone'] = 'Цагийн бүс';

$lang['Date_format'] = 'Огноо харуулах загвар';

$lang['Date_format_explain'] = 'Y-жил, M-сар, d-өдөр, h-цаг гэсэн байдлаар орлуулж бичнэ.';

$lang['Signature'] = 'Гарын үсэг';

$lang['Signature_explain'] = 'Энэ бол таны бичсэн бичлэгүүдэд хавсаргагдах боломжтой текст юм. Энэ нь %d тэмдэгтийн хязгаартай';

$lang['Public_view_email'] = 'Миний И-Мэйл хаягийг үргэлж харагдуулна';



$lang['Current_password'] = 'Одооны нууц үг';

$lang['New_password'] = 'Шинэ нууц үг';

$lang['Confirm_password'] = 'Нууц үгийг давт';

$lang['Confirm_password_explain'] = 'Нууц үгээ солих эсвэл и-мэйл хаягаа өөрчлөх гэж байгаа бол үүнийг оруулах хэрэгтэй';

$lang['password_if_changed'] = 'Та нууц үгээ өөрчлөх гэж байгаа тохиолдолд л үүнийг бөглөнө';

$lang['password_confirm_if_changed'] = 'Та нууц үгээ өөрчлөх гэж байгаа тохиолдолд л өмнөхийг давтана';



$lang['Avatar'] = 'Хөрөг';

$lang['Avatar_explain'] = 'Жижиг хэмжээний зургийг бичлэгүүд дэх таны мэдээллийн дор харагдуулна. Нэг дор нэг л зураг харуулах боломжтой ба зургийн өргөн нь %d цэгээс их биш, өндөр нь %d цэгээс их биш, зургийн файлын хэмжээ нь %dКБайтаас их биш байх ёстой';

$lang['Upload_Avatar_file'] = 'Хөргөө өөрийнхөө машинаас сервер лүү хуулах';

$lang['Upload_Avatar_URL'] = 'Хөргөө ямар нэгэн URL-с сервер лүү хуулах';

$lang['Upload_Avatar_URL_explain'] = 'Зураг байгаа байрлалынхаа URL-ийг оруулна уу. Хөрөг зураг манай сервэр лүү хуулагдах болно.';

$lang['Pick_local_Avatar'] = 'Галлерейгаас хөрөг сонгох';

$lang['Link_remote_Avatar'] = 'Өөр серверд байгаа хөрөг рүү холбох';

$lang['Link_remote_Avatar_explain'] = 'Холбохыг хүсэж байгаа хөрөг зурагныхаа байрлаж буй URL-ийг оруулна уу.';

$lang['Avatar_URL'] = 'Хөрөг зургийн URL';

$lang['Select_from_gallery'] = 'Галлерейгаас хөргөө сонго';

$lang['View_avatar_gallery'] = 'Галлерей харах';



$lang['Select_avatar'] = 'Хөрөг сонгох';

$lang['Return_profile'] = 'Хөргийг сонгохгvй';

$lang['Select_category'] = 'Төрлөө сонго';



$lang['Delete_Image'] = 'Зургийг устгах';

$lang['Current_Image'] = 'Одооны зураг';



$lang['Notify_on_privmsg'] = 'Шинэ хувийн зурвас ирэх үед мэдэгдэж байна';

$lang['Popup_on_privmsg'] = 'Шинэ хувийн зурвас байгаа үед тусдаа дэд цонх гаргаж мэдэгдэж байна'; 

$lang['Popup_on_privmsg_explain'] = 'Танд шинэ зурвас ирсэн үед зарим загварууд шинэ дэд цонх нээн энэ тухай мэдээлдэг'; 

$lang['Hide_user'] = 'Холбогдсон байгаагаа нуух';



$lang['Profile_updated'] = 'Таны хувийн тохиргоо шинэчлэгдлээ';

$lang['Profile_updated_inactive'] = 'Таны хувийн тохиргоо шинэчлэгдсэн, тэгэхдээ та маш чухал мэдээллээ өөрчилсэн тул таны бүртгэл одоо идэвхгүй болсон. Хэрхэн дахин идэвхжүүлэх талаар имэйлээ шалгаж уншина уу, эсвэл удирдагчаар идэвхжүүлэгдэх ёстой бол таны бүртгэлийг удирдагч дахин идэвхжүүлтэл хүлээнэ үү!';



$lang['Password_mismatch'] = 'Таны оруулсан нууц үг буруу байна';

$lang['Current_password_mismatch'] = 'Таны оруулсан одооны нууц vг тань мэдээллийн санд байгаатай таарахгүй байна.';

$lang['Password_long'] = 'Таны нууц үг 32 тэмдэгтээс их байх ёсгүй';

$lang['Too_many_registers'] = 'Та хэтэрхий олон бүртгүүлэх оролдлого хийлээ. Дараа дахин оролдоно уу!';

$lang['Username_taken'] = 'Уучлаарай энэ нэр аль хэдийн бүртгэгдсэн байна.';

$lang['Username_invalid'] = 'Уучлаарай таны оруулсан нэр дараах алдаануудыг агуулж байна: ';

$lang['Username_disallowed'] = 'Уучлаарай энэ нэр хориглогдсон';

$lang['Email_taken'] = 'Харамсалтай нь энэ и-мэйл хаягийг ондоо хэрэглэгч ашиглаж байна';

$lang['Email_banned'] = 'Харамсалтай нь энэ и-мэйл хаяг хориглогдсон байна.';

$lang['Email_invalid'] = 'Харамсалтай нь энэ и-мэйл хаяг буруу байна';

$lang['Signature_too_long'] = 'Таны гарын vсэг хэтэрхий урт байна';

$lang['Fields_empty'] = 'Та шаардлагатай утгуудыг бөглөх ёстой';

$lang['Avatar_filetype'] = 'Хөргийн файлын төрөл  .jpg, .gif юмуу .png байх ёстой';

$lang['Avatar_filesize'] = 'Хөргийн зургийн файлын хэмжээ %d КБайтаас бага байх ёстой'; // The avatar image file size must be less than 6 kB

$lang['Avatar_imagesize'] = 'Хөрөг %d цэгээс бага өргөнтэй, %d цэгээс бага өндөртэй байх ёстой'; 



$lang['Welcome_subject'] = '%s чуулганд тавтай морилно уу!'; // Welcome to my.com forums

$lang['New_account_subject'] = 'Шинэ хэрэглэгчийн бүртгэл';

$lang['Account_activated_subject'] = 'Бүртгэл идэвхжсэн';



$lang['Account_added'] = 'Бvртгvvлсэнд баярлалаа, таны бvртгэл vvслээ. Та одоо хэрэглэгчийн нэр нууц vгээ ашиглан нэвтэрч болно';

$lang['Account_inactive'] = 'Таны бүртгэл үүслээ. Гэсэн хэдий ч энэ чуулган бүртгэлээ идэвхжүүлэхийг шаарддаг бөгөөд бид таны и-мэйл рүү идэвхжүүлэх түлхүүрийг явуулсан. Та энэ талаар нэмэлт мэдээллийг и-мэйлээсээ уншина уу!';

$lang['Account_inactive_admin'] = 'Таны бүртгэл үүслээ. Тэгэхдээ энэ чуулган бүртгэлийг удирдагчидаар идэвхжүүлэгдэхийг шаарддаг. Тэдэнд имэйл илгээгдсэн бөгөөд таны бүртгэл идэвхжингүүт танд мэдэгдэх болно.';

$lang['Account_active'] = 'Таны бүртгэл одоо идэвхжлээ. Бүртгүүлсэнд баярлалаа.';

$lang['Account_active_admin'] = 'Бүртгэл идэвхжлээ';

$lang['Reactivate'] = 'Бүртгэлээ дахин идэвхжүүл!';

$lang['Already_activated'] = 'Та бүртгэлээ хэдийн идэвхжүүлсэн байна';

$lang['COPPA'] = 'Таны бүртгэл үүсэн хэдий ч заавал баталгаажуулагдах хэрэгтэй, энэ тухай дэлгэрэнгүй мэдээллийг имэйлээ шалгаж уншина уу!';



$lang['Registration'] = 'Бүртгэлийн нөхцөлүүд';

$lang['Reg_agreement'] = 'Чуулганы удирдагч болон зохицуулагчид нь энэхvv чуулганд 

бичигдэж буй бүх бичлэгийг нэг бүрчлэн хянах боломжгүй байдаг ч гэсэн ямар нэгэн

элдэв гажиг мэдээлэл агуулсан бичлэгүүдийг аль болохоор хурдан хугацаанд устгах юмуу өөрчилнө.

Энэ чуулганд бичигдсэн бүх бичлэгүүд нь тэдгээрийг бичигчидийн өөрсдийн санаа оноо, үзэл бодлыг

илэрхиилж буй болохоос биш удирдагчид, зохицуулагчид болон вэбмастеруудынх биш (эд өөрснөө бичээгүй бол)

тул тэд хариуцлага хүлээхгүй гэдгийг та ойлгох хэрэгтэй.

<br /><br />Та чуулганд ямар нэгэн хараалын, ёс журамгүй, бүдүүлэг, гүжирдсэн, үзэн ядсан, заналхийлсэн, 

сексийн хандлагатай болон бусад хууль дүрэм зөрчсөн элдэв материал оруулахгүй гэдгээ зөвшөөрөх хэрэгтэй.

Энэ тохиолдолд танд нэн даруй чуулганд нэвтрэхэд хориг тавина

(мөн таны үйлчилгээний төвд энэ тухай мэдэгдэх болно).

Энэ зорилгоор бид бүх бичлэгүүддээ бичигчийн IP хаягийг бүртгэж авдаг.

Энэ чуулганы вэбмастер, удирдагч болон зохицуулагчид нь хэрэгтэй гэж үзвэл

хэдийд ч гэсэн ямар нэгэн сэдвийг устгах, засах, зөөх мөн хаах эрхтэй гэдгийг

та ойлгож хүлээн зөвшөөрөх хэрэгтэй. Та хэрэглэгчийн хувьд таны оруулсан мэдээлэлүүд

мэдээллийн санд хадгалагдах болно. Эдгээр мэдээллийг таны зөвшөөрөлгүйгээр

ямар нэгэн гуравдагч этгээдэд нээж үзүүлэхгүй мөн вэбмастер, удирдагч, болон зохицуулагчид

яман нэгэн нэр төр гутаахыг оролдсон хорлон сүйтгэх мэдээлэлд хариуцлага хүлээхгүй

<br /><br />Энэхүү чуулганы 

систем нь таны компьютер дээр мэдээлэл хадгалахын тулд күүкий ашигладаг.

Эдгээр күүкийнүүд нь таны өмнө оруулсан ямар ч мэдээллийг агуулахгүй бөгөөд

эдгээр нь зөвхөн таны үзэх нөхцөлийг сажруулахын тулд л хадгадалагддаг.

Зөвхөн таны бvртгэлтэй холбоотой

мэдээллvvд болон нууц vгийг (та нууц vгээ мартсан тохиолдолд шинэ нууц vг илгээнэ)

танд илгээхэд л таны имэйл хэрэглэгдэнэ.<br /><br />Дараах бүртгүүлэх товчийг дарсанаар та эдгээр

нөхцөлүүдийг хүлээн зөвшөөрч буй хэрэг болно.';



$lang['Agree_under_13'] = 'Би эдгээр нөхцөлийг зөвшөөрч байна, би 13-с <b>доош</b> настай';

$lang['Agree_over_13'] = 'Би эдгээр нөхцөлийг зөвшөөрч байна, би 13-с <b>дээш</b> настай';

$lang['Agree_not'] =  'Би эдгээр нөхцөлийг зөвшөөрөхгүй байна,';



$lang['Wrong_activation'] = 'Таны оруулсан идэвхжүүлэлтийн түлхүүр мэдээллийн санд буйтай тохирохгүй байна';

$lang['Send_password'] = 'Надад шинэ нууц үг илгээ'; 

$lang['Password_updated'] = 'Шинэ нууц үг үүслээ. Одоо хэрхэн үүнийгээ ашиглах талаар И-мэйлээ шалгаж vзнэ үү!';

$lang['No_email_match'] = 'Таны оруулсан И-мэйл хаяг болон хэрэглэгчийн нэр нь хамт бүртгэгдээгvй байна.';

$lang['New_password_activation'] = 'Шинэ нууц үгийн идэвхжүүлэлт';

$lang['Password_activated'] = 'Таны бүртгэл дахин идэвхжлээ. Чуулгандаа нэвтрэхийн тулд таньд И-мэйлээр явуулсан нууц үгийг ашиглана уу!';



$lang['Send_email_msg'] = 'И-мэйл илгээх';

$lang['No_user_specified'] = 'Хэрэглэгч сонгогдоогүй байна';

$lang['User_prevent_email'] = 'Энэ хэрэглэгч И-мэйл хүлээн авахыг хүсэхгүй байна. Та хувийн зурвас (PM) илгээхийг оролдоно уу!';

$lang['User_not_exist'] = 'Ийм хэрэглэгч байхгүй байна';

$lang['CC_email'] = 'Энэ И-мэйлийн хуулбарыг өөртөө бас илгээх';

$lang['Email_message_desc'] = 'Энэхүү мэдээлэл нь ердийн текст хэлбэрээр илгээгдэх бөгөөд, та ямар нэгэн HTML болон BBCode ашиглах хэрэггүй. Мөн энэхүү И-мэйлийн буцах хаяг нь таны И-мэйлийн хаяг байна.';

$lang['Flood_email_limit'] = 'Та энэ мөчид өөр и-мэйл илгээж чадахгүй, дараа дахин оролдоно уу!';

$lang['Recipient'] = 'Хүлээн авагч';

$lang['Email_sent'] = 'И-Мэйл илгээгдлээ';

$lang['Send_email'] = 'И-мэйл илгээх';

$lang['Empty_subject_email'] = 'Та И-мэйлдээ гарчиг оруулах хэрэгтэй!';

$lang['Empty_message_email'] = 'Та И-мэйлээр явуулах зүйлээ бичих хэрэгтэй!';


// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Таны оруулсан баталгаажуулалтын код буруу байна';
$lang['Too_many_registers'] = 'Та энэ мөчид хязгаараас хэтэрсэн бүртгүүлэх оролдлого хийлээ. Дараа дахин оролдоно уу!';
$lang['Confirm_code_impaired'] = 'Та ямар нэгэн байдлаар энэ кодыг уншиж чадахгүй байгаа бол %sУдирдагчтай%s холбоо барьж тусламж авна уу!';
$lang['Confirm_code'] = 'Баталгаажуулалтын код';
$lang['Confirm_code_explain'] = 'Та яг харж байгаа кодоо оруулна уу. Энэхүү код нь том жижиг үсгийг ялгахаас гадна  тэгийн диагналиар нь зураас татсан байгаа';


//

// Memberslist

//

$lang['Select_sort_method'] = 'Эрэмбэлэх төрлөө сонго';

$lang['Sort'] = 'Эрэмбэл';

$lang['Sort_Top_Ten'] = 'Шилдэг 10 бичигч';

$lang['Sort_Joined'] = 'Нэгдсэн огноо';

$lang['Sort_Username'] = 'Хэрэглэгчийн нэр';

$lang['Sort_Location'] = 'Байрлал';

$lang['Sort_Posts'] = 'Нийт бичлэгүүд';

$lang['Sort_Email'] = 'И-мэйл';

$lang['Sort_Website'] = 'Вэб';

$lang['Sort_Ascending'] = 'Өсөхөөр';

$lang['Sort_Descending'] = 'Буурахаар';

$lang['Order'] = 'Эрэмбэ';





//

// Group control panel

//

$lang['Group_Control_Panel'] = 'Бүлгэм удирдах хэсэг';

$lang['Group_member_details'] = 'Бүлгэмийн гишүүнчлэлийн мэдээлэл';

$lang['Group_member_join'] = 'Бүлгэмд нэгдэх';



$lang['Group_Information'] = 'Бүлгэмийн мэдээлэл';

$lang['Group_name'] = 'Бүлгэмийн нэр';

$lang['Group_description'] = 'Бүлгэмийн тайлбар';

$lang['Group_membership'] = 'Бүлгэмийн гишүүнчлэл';

$lang['Group_Members'] = 'Бүлгэмийн гишүүд';

$lang['Group_Moderator'] = 'Бүлгэмийн зохицуулагч';

$lang['Pending_members'] = 'Шийд хүлээж буй гишvvд';



$lang['Group_type'] = 'Бүлгэмийн төрөл';

$lang['Group_open'] = 'Нээлттэй бүлгэм';

$lang['Group_closed'] = 'Хаалттай бүлгэм';

$lang['Group_hidden'] = 'Нууцлагдмал бүлгэм';



$lang['Current_memberships'] = 'Идэвхтэй гишүүнчлэл';

$lang['Non_member_groups'] = 'Бүлгэмүүд';

$lang['Memberships_pending'] = 'Хүлээгдэж буй гишүүнчлэлүүд';



$lang['No_groups_exist'] = 'Ямар ч бүлгэм байхгүй байна';

$lang['Group_not_exist'] = 'Ийм бүлгэм байхгүй байна';



$lang['Join_group'] = 'Бүлгэмд нэгдэх';

$lang['No_group_members'] = 'Энэ бүлгэм гишүүдгй байна';

$lang['Group_hidden_members'] = 'Энэ бүлгэм нууцлагдмал тул та гишүүдийг нь харж чадахгүй';

$lang['No_pending_group_members'] = 'Энэ бүлгэмд хүлээгдэж буй гишүүд байхгүй байна';

$lang['Group_joined'] = 'Таны хүсэлт амжилттай илгээгдлээ. Энэ бүлгэмийн зохицуулагч таныг бүлгэмд нэгдэх зөвшөөрөл олгосон тухай танд мэдэгдэх болно.';

$lang['Group_request'] = 'Энэ бүлгэмд нэгдэх хүсэлт хийгдлээ';

$lang['Group_approved'] = 'Таны хүсэлт зөвшөөрөгдлөө';

$lang['Group_added'] = 'Та энэхүү бүлгэмд нэгдлээ'; 

$lang['Already_member_group'] = 'Та аль хэдийн энэ бүлгэмийн гишүүн болсон байна';

$lang['User_is_member_group'] = 'Хэрэглэгч нь аль хэдийн энэ бүлгэмийн гишүүн болсон байна';

$lang['Group_type_updated'] = 'Бүлгэмийн төрөл амжилттай шинэчлэгдлээ';



$lang['Could_not_add_user'] = 'Таны сонгосон хэрэглэгч байхгүй байна';

$lang['Could_not_anon_user'] = 'Та үл танигдах хүнийг бүлгэмийн гишүүн болгож чадахгүй';



$lang['Confirm_unsub'] = 'Та үнэхээр энэ бүлгэмээс гарах гэж байна уу?';

$lang['Confirm_unsub_pending'] = 'Таны энэ бүлгэмд нэгдэх хүсэлт хараахан баталгаажаагүй байна, та гарах гэж буйдаа итгэлтэй байна уу?';



$lang['Unsub_success'] = 'Та энэ бүлгэмээс гарлаа.';



$lang['Approve_selected'] = 'Сонгогдсоныг зөвшөөрөх';

$lang['Deny_selected'] = 'Сонгогдсоныг татгалзах';

$lang['Not_logged_in'] = 'Та ямар нэг бүлгэмд нэгдэхийн тулд нэвтэрсэн байх хэрэгтэй.';

$lang['Remove_selected'] = 'Сонгогдсоныг устгах';

$lang['Add_member'] = 'Гишүүн нэмэх';

$lang['Not_group_moderator'] = 'Та энэ бүлгэмийн зохицуулагч биш тул энэ үйлдэлийг хийж чадахгүй.';



$lang['Login_to_join'] = 'Бүлгэмд нэгдэх юмуу гишүүнчлэлийг удирдахын тулд нэвтэрнэ үү!';

$lang['This_open_group'] = 'Энэ нээлттэй бүлгэм байна. Та нэгдэхийн тулд энд дарна уу!';

$lang['This_closed_group'] = 'Энэ хаалттай бүлгэм байна. Нэмж гишүүн элсүүлэхгүй!';

$lang['This_hidden_group'] = 'Энэ нууцлагдсан бүлгэм байна. Шууд гишүүнээр элсэх болох боломжгүй!';

$lang['Member_this_group'] = 'Та энэ бүлгэмийн гишүүн байна';

$lang['Pending_this_group'] = 'Энэ бүлгэм дэх таны гишүүнчлэл шийдээ хүлээж байна';

$lang['Are_group_moderator'] = 'Та тухайн бүлгэмийн зохицуулагч байна';

$lang['None'] = 'Байхгүй';



$lang['Subscribe'] = 'Нэгдэх';

$lang['Unsubscribe'] = 'Гарах';

$lang['View_Information'] = 'Мэдээллийг харах';





//

// Search

//

$lang['Search_query'] = 'Хайлтын бүтэц';

$lang['Search_options'] = 'Хайлтын сонголтууд';



$lang['Search_keywords'] = 'Түлхүүр үгээр хайх';

$lang['Search_keywords_explain'] = 'Та заавал хайх үгээ <u>AND</u>, хайхгүй байсан ч болох үгээ <u>OR</u>, хайхгүй үгээ <u>NOT</u> хэлбэрээр оруулж болно.';

$lang['Search_author'] = 'Зохиогчоор нь хайх';

$lang['Search_author_explain'] = 'Орлуулгыг тэмдэглэхдээ * тэмдэгийг ашиглана уу!';



$lang['Search_for_any'] = 'Оруулсан ямар нэгэн үг юмуу эсвэл оруулсан бүтцийг ашиглан хай';

$lang['Search_for_all'] = 'Бүх оруулсан үгсээр хай';

$lang['Search_title_msg'] = 'Сэдвийн гарчиг болон доторх бичлэгээс хай';

$lang['Search_msg_only'] = 'Зөвхөн доторх бичлэгээс хай';



$lang['Return_first'] = 'Бичлэгүүдийн эхний'; // followed by xxx characters in a select box

$lang['characters_posts'] = 'тэмдэгтийг буцаа';



$lang['Search_previous'] = 'Үүнээс өмнөхөөс хай'; // followed by days, weeks, months, year, all in a select box



$lang['Sort_by'] = 'Эрэмбэлэлт:';

$lang['Sort_Time'] = 'Бичигдсэн хугацаа';

$lang['Sort_Post_Subject'] = 'Бичлэгийн гарчиг';

$lang['Sort_Topic_Title'] = 'Сэдвийн нэр';

$lang['Sort_Author'] = 'Зохиогч';

$lang['Sort_Forum'] = 'Хэлэлцүүлэг';



$lang['Display_results'] = 'Үр дүнг ингэж харуул';

$lang['All_available'] = 'Бүх боломжтой';

$lang['No_searchable_forums'] = 'Та манай чуулганд хайлт хийх эрхгүй байна';



$lang['No_search_match'] = 'Таны хайсанд тохирох бичлэг болон сэдэв алга байна.';

$lang['Found_search_match'] = 'Тохирох %d бичлэг олдлоо'; // eg. Search found 1 match

$lang['Found_search_matches'] = 'Тохирох %d бичлэг олдлоо'; // eg. Search found 24 matches



$lang['Close_window'] = 'Цонхыг хаах';





//

// Auth related entries

//

// Note the %s will be replaced with one of the following 'user' arrays

$lang['Sorry_auth_announce'] = 'Уучлаарай, зөвхөн %s л энэ хэлэлцүүлэгт зарлал оруулж чадна.';

$lang['Sorry_auth_sticky'] = 'Уучлаарай, зөвхөн %s л энэ хэлэлцүүлэгт наалттай бичлэг оруулж чадна.';

$lang['Sorry_auth_read'] = 'Уучлаарай, зөвхөн %s л энэ хэлэлцүүлэг дэх сэдвүүдийг уншиж чадна.';

$lang['Sorry_auth_post'] =  'Уучлаарай, зөвхөн %s л энэ хэлэлцүүлэгт сэдэв оруулж чадна.';

$lang['Sorry_auth_reply'] = 'Уучлаарай, зөвхөн %s л энэ хэлэлцүүлэг дэх сэдвүүдэд хариулж чадна.';

$lang['Sorry_auth_edit'] = 'Уучлаарай, зөвхөн %s л энэ хэлэлцүүлэг дэх бичлэгүүдийг засаж чадна.';

$lang['Sorry_auth_delete'] = 'Уучлаарай, зөвхөн %s л энэ хэлэлцүүлэг дэх бичлэгүүдийг устгаж чадна.';

$lang['Sorry_auth_vote'] = 'Уучлаарай, зөвхөн %s л энэ хэлэлцүүлэгт санал өгч чадна.'; 



// These replace the %s in the above strings

$lang['Auth_Anonymous_Users'] = '<b>бүртгэгдээгүй хэрэглэгчид</b>';

$lang['Auth_Registered_Users'] = '<b>бүртгэгдсэн хэрэглэгчид</b>';

$lang['Auth_Users_granted_access'] = '<b>тусгай хандалтын эрхтэй хэрэглэгчид</b>';

$lang['Auth_Moderators'] = '<b>зохицуулагчид</b>';

$lang['Auth_Administrators'] = '<b>удирдагчид</b>';



$lang['Not_Moderator'] = 'Та энэ хэлэлцүүлэгийн зохицуулагч биш байна';

$lang['Not_Authorised'] = 'Зөвшөөрөл өгөгдөөгүй';



$lang['You_been_banned'] = 'Танд энэ чуулганаас хориг тавьсан байна<br />Илүү дэлгэрэнгүй мэдээлэл авахын тулд вебмастер юмуу чуулганы удирдагчтай холбоо барина уу!';





//

// Viewonline

//

$lang['Reg_users_zero_online'] = 'Энд 0 бүртгэгдсэн хэрэглэгч болон  '; // There ae 5 Registered and

$lang['Reg_users_online'] = 'Энд %d бүртгэгдсэн хэрэглэгч болон '; // There ae 5 Registered and

$lang['Reg_user_online'] = 'Энд %d бүртгэгдсэн хэрэглэгч болон '; // There ae 5 Registered and

$lang['Hidden_users_zero_online'] = '0 нууцлагдмал хэрэглэгч холбоотой байна'; // 6 Hidden users online

$lang['Hidden_users_online'] = '%d нууцлагдмал хэрэглэгч холбоотой байна'; // 6 Hidden users online

$lang['Hidden_user_online'] = '%d нууцлагдмал хэлэглэгч холбоотой байна'; // 6 Hidden users online

$lang['Guest_users_online'] = 'Энд %d зочин холбоотой байна';  // There are 10 Guest users online

$lang['Guest_users_zero_online'] = 'Энд 0 зочин хэрэглэгчид холбоотой байна'; // There are 10 Guest users online

$lang['Guest_user_online'] = 'Энд 0 зочин хэрэглэгч холбоотой байна'; // There is 1 Guest user online

$lang['No_users_browsing'] = 'Энэ хэлэлцүүлэгийг vзэж байгаа хүн алга байна';



$lang['Online_explain'] = 'Энэхүү мэдээлэл нь сvvлийн 5 минутын хугацаанд идэвхтэй байсан хэрэглэгчидийн мэдээлэлд тулгуурлаж байна.';



$lang['Forum_Location'] = 'Чуулганы байрлал';

$lang['Last_updated'] = 'Сүүлд шинэчлэгдсэн';



$lang['Forum_index'] = 'Чуулганы эхлэл';

$lang['Logging_on'] = 'Нэвтэрч байна';

$lang['Posting_message'] = 'Бичлэг оруулж байна';

$lang['Searching_forums'] = 'Хайлт хийж байна';

$lang['Viewing_profile'] = 'Хувийн мэдээлэл харж байна';

$lang['Viewing_online'] = 'Хэн холбогдсон байгааг харж байна';

$lang['Viewing_member_list'] = 'Гишүүдийн жагсаалтыг харж байна';

$lang['Viewing_priv_msgs'] = 'Хувийн зурвас харж байна';

$lang['Viewing_FAQ'] = 'Тусламж үзэж байна';





//

// Moderator Control Panel

//

$lang['Mod_CP'] = 'Зохицуулагчидын удирдлагын хэсэг';

$lang['Mod_CP_explain'] = 'Дараах формыг ашиглан та энэ хэлэлцүүлэгт хүчтэй зохицуулалт хийж чадна. Та бичлэгүүдийг түгжиж, нээж, шилжүүлж, мөн устгах боломжтой.';



$lang['Select'] = 'Сонгох';

$lang['Delete'] = 'Устгах';

$lang['Move'] = 'Шилжүүлэх';

$lang['Lock'] = 'Түгжих';

$lang['Unlock'] = 'Нээх';



$lang['Topics_Removed'] = 'Сонгогдсон сэдвүүд мэдээллийн сангаас амжилттай устгагдлаа.';

$lang['Topics_Locked'] = 'Сонгогдсон сэдвүүд түгжигдлээ';

$lang['Topics_Moved'] = 'Сонгогдсон сэдвүүд шилжүүлэгдлээ';

$lang['Topics_Unlocked'] = 'Сонгогдсон сэдвүүд нээгдлээ';

$lang['No_Topics_Moved'] = 'Ямар ч сэдэв шилжүүлэгдсэнгүй';



$lang['Confirm_delete_topic'] = 'Та vнэхээр сонгогдсон сэдвvvдийг устгахыг хvсэж байна уу?';

$lang['Confirm_lock_topic'] = 'Та үнэхээр сонгогдсон сэдвүүдийг түгжихийг хүсэж байна уу?';

$lang['Confirm_unlock_topic'] = 'Та үнэхээр сонгогдсон сэдвүүдийг нээхийг хүсэж байна уу?';

$lang['Confirm_move_topic'] = 'Та үнэхээр сонгогдсон сэдвүүдийг шилжүүлэхийг хүсэж байна уу?';



$lang['Move_to_forum'] = 'Хэлэлцүүлэг рүү шилжүүлэх';

$lang['Leave_shadow_topic'] = 'Хуучин хэлэлцүүлэгт сүүдэр сэдэвийг үлдээх.';



$lang['Split_Topic'] = 'Сэдэв хуваах удирдлагийн хэсэг';

$lang['Split_Topic_explain'] = 'Энэ формыг ашиглан бичлэгүүдийг тус тусад сонгоод эсвэл ямар нэгэн сонгогдсон бичлэгүүдийг хувааснаар сэдвийг хоёр хэсэгт хувааж чадна';

$lang['Split_title'] = 'Шинэ сэдэвийн гарчиг';

$lang['Split_forum'] = 'Шинэ сэдэвийн хэлэлцүүлэг';

$lang['Split_posts'] = 'Сонгогдсон бичлэгүүдийг хуваах';

$lang['Split_after'] = 'Сонгогдсон бичлэгээс хуваах';

$lang['Topic_split'] = 'Сонгогдсон сэдэв амжилттай хуваагдлаа';



$lang['Too_many_error'] = 'Та хэтэрхий олон бичлэг сонгосон байна. Та дараах сэдвийг хуваахын тулд зөвхөн ганц бичлэг сонгож чадна!';



$lang['None_selected'] = 'Та энэ үйлдэлийг хийхийн тулд ямар нэгэн сэдэв сонгоогүй байна. Та буцаад дор хаяж нэг сэдэв сонгоно уу!';

$lang['New_forum'] = 'Шинэ хэлэлцүүлэг';



$lang['This_posts_IP'] = 'Энэ бичлэгийн IP';

$lang['Other_IP_this_user'] = 'Энэ гишүүн бичлэг оруулсан бусад IP хаягнууд';

$lang['Users_this_IP'] = 'Энэ IP-аас бичлэг оруулсан гишүүд';

$lang['IP_info'] = 'IP мэдээлэл';

$lang['Lookup_IP'] = 'IP-ийг харах';


//

// Timezones ... for display on each page

//

$lang['All_times'] = 'Үндсэн цагийн бүс %s-ийн цагаар тооцогдож байгаа.'; // eg. All times are GMT - 12 Hours (times from next block)



$lang['-12'] = 'GMT - 12 Цаг';

$lang['-11'] = 'GMT - 11 Цаг';

$lang['-10'] = 'GMT - 10 Цаг';

$lang['-9'] = 'GMT - 9 Цаг';

$lang['-8'] = 'GMT - 8 Цаг';

$lang['-7'] = 'GMT - 7 Цаг';

$lang['-6'] = 'GMT - 6 Цаг';

$lang['-5'] = 'GMT - 5 Цаг';

$lang['-4'] = 'GMT - 4 Цаг';

$lang['-3.5'] = 'GMT - 3.5 Цаг';

$lang['-3'] = 'GMT - 3 Цаг';

$lang['-2'] = 'GMT - 2 Цаг';

$lang['-1'] = 'GMT - 1 Цаг';

$lang['0'] = 'GMT';

$lang['1'] = 'GMT + 1';

$lang['2'] = 'GMT + 2';

$lang['3'] = 'GMT + 3';

$lang['3.5'] = 'GMT + 3.5';

$lang['4'] = 'GMT + 4';

$lang['4.5'] = 'GMT + 4.5';

$lang['5'] = 'GMT + 5';

$lang['5.5'] = 'GMT + 5.5';

$lang['6'] = 'GMT + 6';

$lang['6.5'] = 'GMT + 6.5';

$lang['7'] = 'GMT + 7';

$lang['8'] = 'Улаанбаатар (GMT + 8)';

$lang['9'] = 'GMT + 9';

$lang['9.5'] = 'GMT + 9.5';

$lang['10'] = 'GMT + 10';

$lang['11'] = 'GMT + 11';

$lang['12'] = 'GMT + 12';

$lang['13'] = 'GMT + 13';

// These are displayed in the timezone select box

$lang['tz']['-12'] = '(GMT - 12:00) Eniwetok, Kwajalein';

$lang['tz']['-11'] = '(GMT - 11:00) Midway Island, Samoa';

$lang['tz']['-10'] = '(GMT - 10:00) Хавай';

$lang['tz']['-9'] = '(GMT - 09:00) Аляск';

$lang['tz']['-8'] = '(GMT - 08:00) Номхон далайн цаг (АНУ & Канад), Tijuana';

$lang['tz']['-7'] = '(GMT - 07:00) Аризон, Уулын цаг (АНУ & Канад)';

$lang['tz']['-6'] = '(GMT - 06:00) Төвийн цаг (АНУ & Канад), Мехико хот';

$lang['tz']['-5'] = '(GMT - 05:00) Богота, Лима, Зүүн эргийн цаг (АНУ & Канад)';

$lang['tz']['-4'] = '(GMT - 04:00) Атлантын далайн цаг (Канад)';

$lang['tz']['-3.5'] = '(GMT - 03.30) Newfoundland';

$lang['tz']['-3'] = '(GMT - 03:00) Бразил, Буэнос Айрос, Georgetown';

$lang['tz']['-2'] = '(GMT - 02:00) Дундад атлант';

$lang['tz']['-1'] = '(GMT - 01:00) Азорес, Cape Verde Is';

$lang['tz']['0'] = '(GMT) Касабаланка, Монровиа';

$lang['tz']['1'] = '(GMT + 01:00) Амстердам, Берлин, Берн, Ром, Stockholm, Вена';

$lang['tz']['2'] = '(GMT + 02:00) Атин, Станбул, Минск';

$lang['tz']['3'] = '(GMT + 03:00) Москва, Санкт Петербург, Волгоград, Багдад';

$lang['tz']['3.5'] = '(GMT + 03:30) Тегеран';

$lang['tz']['4'] = '(GMT + 04:00) Абу Даби, Баку';

$lang['tz']['4.5'] = '(GMT + 04:30) Кабул';

$lang['tz']['5'] = '(GMT + 05:00) Екатеринбург, Исламабад, Ташкент';

$lang['tz']['5.5'] = '(GMT + 05.30) Бомбай, Калкутта, Шинэ Дели';

$lang['tz']['6'] = '(GMT + 06:00) Алмату, Дака, Коломбо';

$lang['tz']['6.5'] = '(GMT + 06:30) Рангун';

$lang['tz']['7'] = '(GMT + 07:00) Бангког, Ханой, Жакарта';

$lang['tz']['8'] = '(GMT + 08:00) Улаанбаатар, Бээжин, Сингапур';

$lang['tz']['9'] = '(GMT + 09:00) Осака, Токио, Саппора, Сөүл, Якутск';

$lang['tz']['9.5'] = '(GMT + 09:30) Абелайде, Дарвин';

$lang['tz']['10'] = '(GMT + 10:00) Брисбане, Сидней, Владивосток';

$lang['tz']['11'] = '(GMT + 11:00) Магадан, Шинэ Каледониа';

$lang['tz']['12'] = '(GMT + 12:00) Велингтон, Фижи, Камчатк, Marshall Is';



$lang['datetime']['Sunday'] = 'Ням';

$lang['datetime']['Monday'] = 'Даваа';

$lang['datetime']['Tuesday'] = 'Мягмар';

$lang['datetime']['Wednesday'] = 'Лхагва';

$lang['datetime']['Thursday'] = 'Пүрэв';

$lang['datetime']['Friday'] = 'Баасан';

$lang['datetime']['Saturday'] = 'Бямба';

$lang['datetime']['Sun'] = 'Ням';

$lang['datetime']['Mon'] = 'Дав';

$lang['datetime']['Tue'] = 'Мяг';

$lang['datetime']['Wed'] = 'Лха';

$lang['datetime']['Thu'] = 'Пүр';

$lang['datetime']['Fri'] = 'Баа';

$lang['datetime']['Sat'] = 'Бям';

$lang['datetime']['January'] = '1-р сар';

$lang['datetime']['February'] = '2-р сар';

$lang['datetime']['March'] = '3-р сар';

$lang['datetime']['April'] = '4-р сар';

$lang['datetime']['May'] = '5-р сар';

$lang['datetime']['June'] = '6-р сар';

$lang['datetime']['July'] = '7-р сар';

$lang['datetime']['August'] = '8-р сар';

$lang['datetime']['September'] = '9-р сар';

$lang['datetime']['October'] = '10-р сар';

$lang['datetime']['November'] = '11-р сар';

$lang['datetime']['December'] = '12-р сар';

$lang['datetime']['Jan'] = '1 сар';

$lang['datetime']['Feb'] = '2 сар';

$lang['datetime']['Mar'] = '3 сар';

$lang['datetime']['Apr'] = '4 сар';

$lang['datetime']['May'] = '5 сар';

$lang['datetime']['Jun'] = '6 сар';

$lang['datetime']['Jul'] = '7 сар';

$lang['datetime']['Aug'] = '8 сар';

$lang['datetime']['Sep'] = '9 сар';

$lang['datetime']['Oct'] = '10 сар';

$lang['datetime']['Nov'] = '11 сар';

$lang['datetime']['Dec'] = '12 сар';


$lang['interval']['day'] = 'өдөр';
$lang['interval']['days'] = 'өдөр';
$lang['interval']['week'] = 'долоо хоног';
$lang['interval']['weeks'] = 'долоо хоног';
$lang['interval']['month'] = 'сар';
$lang['interval']['months'] = 'сар';
$lang['interval']['year'] = 'жил';
$lang['interval']['years'] = 'жил';

//

// Errors (not related to a

// specific failure on a page)

//

$lang['Information'] = 'Мэдээлэл';

$lang['Critical_Information'] = 'Ноцтой мэдээлэл';



$lang['General_Error'] = 'Ерөнхий алдаа';

$lang['Critical_Error'] = 'Ноцтой алдаа';

$lang['An_error_occured'] = 'Алдаа тохиолдлоо';

$lang['A_critical_error'] = 'Ноцтой алдаа тохиолдлоо';

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