<?php
/***************************************************************************
 *                            lang_main.php [English]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.9 2002/12/21 18:31:54 psotfx Exp $
 *
 ****************************************************************************/
/***************************************************************************
 *
 *	Translate to Vietnamese by Tran Thanh
 *	Homepage:	http://ketoanviet.net
 *	Forum:	http://forum.ketoanviet.net/
 *	Encoding with font Unicode - UTF-8
 *	Editor software:	Ultraedit v10.0
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
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Diễn Đàn';
$lang['Category'] = 'Nhóm chuyên mục';
$lang['Topic'] = 'Chủ đề';
$lang['Topics'] = 'Chủ đề';
$lang['Replies'] = 'Trả lời';
$lang['Views'] = 'Xem';
$lang['Post'] = 'Bài gửi';
$lang['Posts'] = 'Số bài';
$lang['Posted'] = 'Gửi';
$lang['Username'] = 'Tên truy cập';
$lang['Password'] = 'Mật khẩu';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Người gửi';
$lang['Author'] = 'Tác giả';
$lang['Time'] = 'Giờ';
$lang['Hours'] = 'Giờ';
$lang['Message'] = 'Thông điệp';

$lang['1_Day'] = '1 ngày';
$lang['7_Days'] = '7 ngày';
$lang['2_Weeks'] = '2 tuần';
$lang['1_Month'] = '1 tháng';
$lang['3_Months'] = '3 tháng';
$lang['6_Months'] = '6 tháng';
$lang['1_Year'] = '1 năm';

$lang['Go'] = 'Chuyển';
$lang['Jump_to'] = '<b>Chuyển đến</b>';
$lang['Submit'] = 'Chấp nhận';
$lang['Reset'] = 'Xác lập lại';
$lang['Cancel'] = 'Bỏ qua';
$lang['Preview'] = 'Xem trước';
$lang['Confirm'] = 'Xác nhận';
$lang['Spellcheck'] = 'Kiểm Chính Tả';
$lang['Yes'] = 'Có';
$lang['No'] = 'Không';
$lang['Enabled'] = 'Hiệu lực';
$lang['Disabled'] = 'Vô hiệu';
$lang['Error'] = 'Lỗi';

$lang['Next'] = 'Trang kế';
$lang['Previous'] = 'Trang trước';
$lang['Goto_page'] = 'Chuyển đến trang';
$lang['Joined'] = 'Ngày tham gia';
$lang['IP_Address'] = 'Địa chỉ IP';

$lang['Select_forum'] = 'Chọn Diễn Đàn';
$lang['View_latest_post'] = 'Xem bài viết sau cùng';
$lang['View_newest_post'] = 'Xem bài viết mới nhất';
$lang['Page_of'] = 'Trang <b>%d</b> trong tổng số <b>%d</b> trang'; // Replaces with: Page 1 of 2 for example


$lang['ICQ'] = 'Số ICQ';
$lang['AIM'] = 'Địa chỉ AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s';  // eg. sitename Forum Index, %s can be removed if you prefer
$lang['Post_new_topic'] = 'Gửi bài mới';
$lang['Reply_to_topic'] = 'Trả lời chủ đề này';
$lang['Reply_with_quote'] = 'Trả lời với trích dẫn nội dung bài viết này';

$lang['Click_return_topic'] = 'Bấm chuột <b>%svào đây%s</b> để trở về chủ đề đang xem'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Bấm chuột <b>%svào đây%s</b> để thử lại lần nữa';
$lang['Click_return_forum'] = 'Bấm chuột <b>%svào đây%s</b> để trở về Diễn Đàn đang xem';
$lang['Click_view_message'] = 'Bấm chuột <b>%svào đây%s</b> để xem bài viết';
$lang['Click_return_modcp'] = 'Bấm chuột <b>%svào đây%s</b> để trở về bảng điều khiển của Người Điều Hành';
$lang['Click_return_group'] = 'Bấm chuột <b>%svào đây%s</b> để trở về trang thông tin Nhóm làm việc';

$lang['Admin_panel'] = 'Bảng điều khiển của Người Quản Trị';

$lang['Board_disable'] = 'Xin lỗi, Diễn Đàn này hiện tại đang tạm <b>đóng cửa</b>. Xin hãy trở lại sau.';


// 
// Global Header strings 
// 
$lang['Registered_users'] = 'Các thành viên đang truy cập:';
$lang['Browsing_forum'] = 'Đang truy cập Diễn Đàn này:';
$lang['Online_users_zero_total'] = 'Hiện có <b>0</b> người đang truy cập Diễn Đàn, gồm: ';
$lang['Online_users_total'] = 'Hiện có <b>%d</b> người đang truy cập Diễn Đàn, gồm: ';
$lang['Online_user_total'] = 'Hiện có <b>%d</b> người đang truy cập Diễn Đàn, gồm: ';
$lang['Reg_users_zero_total'] = '<b>0</b> Thành viên, ';
$lang['Reg_users_total'] = '<b>%d</b> Thành viên, ';
$lang['Reg_user_total'] = '<b>%d</b> Thành viên, ';
$lang['Hidden_users_zero_total'] = '<b>0</b> Thành viên ẩn danh và ';
$lang['Hidden_user_total'] = '<b>%d</b> Thành viên ẩn danh và ';
$lang['Hidden_users_total'] = '<b>%d</b> Thành viên ẩn danh và ';
$lang['Guest_users_zero_total'] = '<b>0</b> Khách viếng thăm';
$lang['Guest_users_total'] = '<b>%d</b> Khách viếng thăm';
$lang['Guest_user_total'] = '<b>%d</b> Khách viếng thăm';
$lang['Record_online_users'] = 'Số người truy cập cùng lúc nhiều nhất là <b>%s</b> người, vào ngày %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrator%s';
$lang['Mod_online_color'] = '%sModerator%s';

$lang['You_last_visit'] = 'Lần truy cập trước của bạn: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Hôm nay: %s'; // %s replaced by time

$lang['Search_new'] = 'Xem bài mới từ lần truy cập trước';
$lang['Search_your_posts'] = 'Xem bài của bạn';
$lang['Search_unanswered'] = 'Xem bài chưa có ai trả lời';

$lang['Register'] = 'Đăng ký';
$lang['Profile'] = 'Lý lịch';
$lang['Edit_profile'] = 'Thay đổi lý lịch của bạn';
$lang['Search'] = 'Tìm kiếm';
$lang['Memberlist'] = 'Thành viên';
$lang['FAQ'] = 'Trợ giúp';
$lang['BBCode_guide'] = 'Hướng dẫn về BBCode';
$lang['Usergroups'] = 'Nhóm';
$lang['Last_Post'] = 'Bài gửi sau cùng';
$lang['Moderator'] = 'Người Điều Hành';
$lang['Moderators'] = 'Người Điều Hành';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Tổng số bài viết đã gửi vào diễn đàn là <b>0</b>'; // Number of posts
$lang['Posted_articles_total'] = 'Tổng số bài viết đã gửi vào diễn đàn là <b>%d</b>';
$lang['Posted_article_total'] = 'Tổng số bài viết đã gửi vào Diễn Đàn là <b>%d</b>';
$lang['Registered_users_zero_total'] = 'Diễn Đàn hiện có <b>0</b> thành viên'; // # registered users
$lang['Registered_users_total'] = 'Diễn Đàn hiện có <b>%d</b> thành viên';
$lang['Registered_user_total'] = 'Diễn Đàn hiện có <b>%d</b> thành viên';
$lang['Newest_user'] = 'Chúng ta cùng chào mừng thành viên mới đăng ký: <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Không có bài viết mới kể từ lần truy cập trước';
$lang['No_new_posts'] = 'Không có bài viết mới';
$lang['New_posts'] = 'Bài viết mới';
$lang['New_post'] = 'Bài viết mới';
$lang['No_new_posts_hot'] = 'Không có bài viết mới [được ưa thích]';
$lang['New_posts_hot'] = 'Bài viết mới [được ưa thích]';
$lang['No_new_posts_locked'] = 'Không có bài viết mới [đã bị khoá]';
$lang['New_posts_locked'] = 'Bài viết mới [đã bị khoá]';
$lang['Forum_is_locked'] = 'Diễn Đàn đã bị khoá';


//
// Login
//
$lang['Enter_password'] = 'Xin khai báo tên truy cập và mật khẩu khi đăng nhập';
$lang['Login'] = 'Đăng Nhập';
$lang['Logout'] = 'Thoát';

$lang['Forgotten_password'] = 'Quên mật khẩu';

$lang['Log_me_in'] = 'Đăng nhập tự động mỗi khi truy cập';

$lang['Error_login'] = 'Bạn đã khai báo sai tên truy cập hay mật khẩu';

//
// Index page
//
$lang['Index'] = 'Diễn Đàn';
$lang['No_Posts'] = 'Không có bài viết';
$lang['No_forums'] = 'Đây không phải là Diễn Đàn';

$lang['Private_Message'] = 'Tin nhắn';
$lang['Private_Messages'] = 'Tin nhắn';
$lang['Who_is_Online'] = 'Thống Kê';

$lang['Mark_all_forums'] = 'Đánh dấu đã xem tất cả Diễn Đàn';
$lang['Forums_marked_read'] = 'Tất cả Diễn Đàn đã được đánh dấu';

//
// Viewforum
//
$lang['View_forum'] = 'Xem Diễn Đàn';
$lang['Forum_not_exist'] = 'Diễn Đàn bạn chọn không có';
$lang['Reached_on_error'] = 'Trang này bị lỗi';

$lang['Display_topics'] = '<b>Trình bày chủ đề theo thời gian</b>';
$lang['All_Topics'] = 'Tất cả chủ đề';

$lang['Topic_Announcement'] = '<b>Thông báo:</b>';
$lang['Topic_Sticky'] = '<b>Chú ý:</b>';
$lang['Topic_Moved'] = '<b>Di chuyển:</b>';
$lang['Topic_Poll'] = '<b>[Bầu chọn]</b>';

$lang['Mark_all_topics'] = 'Đánh dấu đã đọc tất cả chủ đề';
$lang['Topics_marked_read'] = 'Tất cả chủ đề trong diễn đàn đã được đánh dấu';

$lang['Rules_post_can'] = 'Bạn <b>được quyền</b> gửi bài viết';
$lang['Rules_post_cannot'] = 'Bạn <b>không có quyền</b> gửi bài viết';
$lang['Rules_reply_can'] = 'Bạn <b>được quyền</b> trả lời bài viết';
$lang['Rules_reply_cannot'] = 'Bạn <b>không có quyền</b> trả lời bài viết';
$lang['Rules_edit_can'] = 'Bạn <b>được quyền</b> sửa chữa bài viết của bạn';
$lang['Rules_edit_cannot'] = 'Bạn <b>không có quyền</b> sửa chữa bài viết của bạn';
$lang['Rules_delete_can'] = 'Bạn <b>được quyền</b> xóa bài viết của bạn';
$lang['Rules_delete_cannot'] = 'Bạn <b>không có quyền</b> xóa bài viết của bạn';
$lang['Rules_vote_can'] = 'Bạn <b>được quyền</b> tham gia bầu chọn';
$lang['Rules_vote_cannot'] = 'Bạn <b>không có quyền</b> tham gia bầu chọn';
$lang['Rules_moderate'] = '<b><font color="#EF0000">Bạn là người điều hành Diễn Đàn này</font></b><br><b>%sBảng điều hành, quản lý bài viết%s</b><br><a class="gensmall" href="faq.php" title="Xem huong dan ve quyen han cua nguoi dieu hanh" target="_blank">Xem hướng dẫn về quyền hạn của người điều hành</a>'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Chưa có bài viết nào trong Diễn Đàn này<br />Bạn bấm chuột vào nút <b>Chủ Đề Mới</b> để trở thành người đầu tiên gửi bài vào Diễn Đàn';

//
// Viewtopic
//
$lang['View_topic'] = 'Xem chủ đề';

$lang['Guest'] = 'Khách viếng thăm';
$lang['Post_subject'] = 'Tiêu đề';
$lang['View_next_topic'] = 'Xem chủ đề kế';
$lang['View_previous_topic'] = 'Xem chủ đề trước';
$lang['Submit_vote'] = 'Chọn';
$lang['View_results'] = 'Xem kết quả';

$lang['No_newer_topics'] = 'Không có chủ đề mới trong Diễn Đàn này';
$lang['No_older_topics'] = 'Không có chủ đề cũ trong Diễn Đàn này';
$lang['Topic_post_not_exist'] = 'Không có chủ đề hay bài viết bạn yêu cầu';
$lang['No_posts_topic'] = 'Không có bài viết trong chủ đề này';

$lang['Display_posts'] = '<b>Trình bày bài viết theo thời gian</b>';
$lang['All_Posts'] = 'Tất cả bài viết';
$lang['Newest_First'] = 'Mới nhất trước';
$lang['Oldest_First'] = 'Cũ nhất trước';

$lang['Back_to_top'] = 'Về Đầu Trang';

$lang['Read_profile'] = 'Xem lý lịch thành viên'; 
$lang['Send_email'] = 'Gửi email cho thành viên này';
$lang['Visit_website'] = 'Website của thành viên này';
$lang['ICQ_status'] = 'ICQ Status';
$lang['Edit_delete_post'] = 'Sửa/Xóa bài viết';
$lang['View_IP'] = 'Xem địa chỉ IP của thành viên này';
$lang['Delete_post'] = 'Xóa bài viết';

$lang['wrote'] = '﻿đã viết '; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Trích dẫn'; // comes before bbcode quote output.
$lang['Code'] = 'Code'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Được sửa bởi %s ngày %s; sửa lần %d.'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Được sửa bởi %s ngày %s; sửa lần %d.';

$lang['Lock_topic'] = 'Khóa chủ đề';
$lang['Unlock_topic'] = 'Mở khóa chủ đề';
$lang['Move_topic'] = 'Di chuyển chủ đề';
$lang['Delete_topic'] = 'Xóa chủ đề';
$lang['Split_topic'] = 'Chia tách chủ đề';

$lang['Stop_watching_topic'] = 'Chấm dứt theo dõi chủ đề';
$lang['Start_watching_topic'] = 'Theo dõi chủ đề';
$lang['No_longer_watching'] = 'Bạn không kéo dài việc theo dõi chủ đề';
$lang['You_are_watching'] = 'Bạn bắt đầu theo dõi chủ đề';

$lang['Total_votes'] = 'Tổng số bầu chọn';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Nội dung thông điệp';
$lang['Topic_review'] = 'Xem lại chủ đề';

$lang['No_post_mode'] = 'Không có kiểu gửi bài'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Gửi bài mới';
$lang['Post_a_reply'] = 'Gửi trả lời';
$lang['Post_topic_as'] = 'Gửi bài theo dạng';
$lang['Edit_Post'] = 'Sửa bài viết';
$lang['Options'] = 'Tùy chọn';

$lang['Post_Announcement'] = 'Thông báo';
$lang['Post_Sticky'] = 'Chú ý';
$lang['Post_Normal'] = 'Bình thường';

$lang['Confirm_delete'] = 'Bạn có chắc là bạn muốn xóa bài viết này?';
$lang['Confirm_delete_poll'] = 'Bạn có chắc là bạn muốn xóa Bảng bầu chọn này?';

$lang['Flood_Error'] = 'Bạn không thể gửi bài liên tục như vậy, bạn cần phải chờ 1 thời gian ngắn rồi mới gửi tiếp được (đây là quy định bắt buộc của diễn đàn, nhằm bảo vệ diễn đàn khỏi bị những bài gửi vô nghĩa), Sorry !';
$lang['Empty_subject'] = 'Bạn phải đặt tiêu đề khi gửi bài viết mới';
$lang['Empty_message'] = 'Bạn chưa nhập nội dung thông điệp.';
$lang['Forum_locked'] = 'Diễn Đàn này đã bị khóa, bạn không thể gửi, trả lời hay sửa bài viết';
$lang['Topic_locked'] = 'Chủ đề này đã bị khóa, bạn không thể sửa hay trả lời';
$lang['No_post_id'] = 'Bạn phải chọn bài viết để sửa chữa';
$lang['No_topic_id'] = 'Bạn phải chọn chủ đề để trả lời';
$lang['No_valid_mode'] = 'Bạn chỉ có thể gửi hay sửa bài trả lời, trở về và làm lại lần nữa';
$lang['No_such_post'] = 'Không có bài gửi nào, hãy trở về và thử lại';
$lang['Edit_own_posts'] = 'Xin lỗi, bạn chỉ có thể sửa bài gửi của chính bạn';
$lang['Delete_own_posts'] = 'Xin lỗi, bạn chỉ có thể xoá bài gửi của chính bạn';
$lang['Cannot_delete_replied'] = 'Xin lỗi, bạn không thể xoá bài gửi đã có người trả lời';
$lang['Cannot_delete_poll'] = 'Xin lỗi, bạn không thể xoá bảng bầu chọn đang hoạt động';
$lang['Empty_poll_title'] = 'Bạn phải đặt tên cho bảng bầu chọn này';
$lang['To_few_poll_options'] = 'Bạn phải tạo ít nhất là 2 mục chọn lựa';
$lang['To_many_poll_options'] = 'Bạn đã tạo quá nhiều mục chọn lựa';
$lang['Post_has_no_poll'] = 'Bài gửi không có bảng bầu chọn';
$lang['Already_voted'] = 'Bạn đã bầu chọn rồi';
$lang['No_vote_option'] = 'Bạn phải chọn mục muốn bầu chọn';

$lang['Add_poll'] = 'Tạo Bảng bầu chọn';
$lang['Add_poll_explain'] = 'Nếu bạn không muốn tạo Bảng bầu chọn, hãy để trống phần này';
$lang['Poll_question'] = 'Câu hỏi';
$lang['Poll_option'] = 'Mục chọn';
$lang['Add_option'] = 'Thêm Mục Bình Chọn';
$lang['Update'] = 'Cập nhật';
$lang['Delete'] = 'Xóa';
$lang['Poll_for'] = 'Thời gian bầu chọn';
$lang['Days'] = 'ngày'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[Nhập số 0 hay để trống là vô thời hạn]';
$lang['Delete_poll'] = 'Xóa Bảng bầu chọn';

$lang['Disable_HTML_post'] = 'Vô hiệu HTML cho bài viết này';
$lang['Disable_BBCode_post'] = 'Vô hiệu BBCode cho bài viết này';
$lang['Disable_Smilies_post'] = 'Vô hiệu Smilies cho bài viết này';

$lang['HTML_is_ON'] = 'HTML đang <u>Mở</u>';
$lang['HTML_is_OFF'] = 'HTML đang <u>Tắt</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s đang <u>Mở</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s đang <u>Tắt</u>';
$lang['Smilies_are_ON'] = 'Smilies đang <u>Mở</u>';
$lang['Smilies_are_OFF'] = 'Smilies đang <u>Tắt</u>';

$lang['Attach_signature'] = 'Kèm chữ ký (có thể thay đổi chữ ký trong lý lịch)';
$lang['Notify'] = 'Thông báo cho tôi khi có người trả lời';
$lang['Delete_post'] = 'Xóa bài viết này';

$lang['Stored'] = 'Bài của bạn đã được chuyển';
$lang['Deleted'] = 'Bài của bạn đã được xoá';
$lang['Poll_delete'] = 'Bảng bầu chọn của bạn đã được xoá';
$lang['Vote_cast'] = 'Cám ơn bạn đã tham gia bầu chọn';

$lang['Topic_reply_notification'] = 'Thông báo trả lời thư';

$lang['bbcode_b_help'] = 'Chữ đậm : [b]text[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Chữ nghiêng : [i]text[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Gạch dưới : [u]text[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Trích dẫn : [quote]text[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Hiển thị Code : [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Danh sách : [list]text[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Sắp xếp danh sách : [list=]text[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Chèn hình ảnh : [img]http://image_url[/img]';
$lang['bbcode_w_help'] = 'Chèn URL : [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Đóng tất cả các thẻ bbCode đang mở';
$lang['bbcode_s_help'] = 'Màu font : [color=red]text[/color] Có thể dùng color=#FF0000';
$lang['bbcode_f_help'] = 'Kích thước font : [size=x-small]small text[/size]';

$lang['Emoticons'] = 'Biểu tượng';
$lang['More_emoticons'] = 'Xem toàn bộ';

$lang['Font_color'] = 'Màu font';
$lang['color_default'] = 'Mặc định';
$lang['color_dark_red'] = 'Đỏ sẫm';
$lang['color_red'] = 'Đỏ';
$lang['color_orange'] = 'Cam';
$lang['color_brown'] = 'Nâu';
$lang['color_yellow'] = 'Vàng';
$lang['color_green'] = 'Green';
$lang['color_olive'] = 'Olive';
$lang['color_cyan'] = 'Cyan';
$lang['color_blue'] = 'Blue';
$lang['color_dark_blue'] = 'Dark Blue';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violet';
$lang['color_white'] = 'Trắng';
$lang['color_black'] = 'Đen';
$lang['Font_size'] = 'Cỡ font';
$lang['font_tiny'] = 'Rất nhỏ';
$lang['font_small'] = 'Nhỏ';
$lang['font_normal'] = 'Bình thường';
$lang['font_large'] = 'Lớn';
$lang['font_huge'] = 'Rất lớn';

$lang['Close_Tags'] = 'Đóng Thẻ';
$lang['Styles_tip'] = 'Rê chuột đến các mục định dạng để hiển thị hướng dẫn';

//
// Private Messaging
//
$lang['Private_Messaging'] = 'Tin nhắn riêng';

$lang['Login_check_pm'] = 'Tin nhắn riêng';
$lang['New_pms'] = 'Có <b>%d</b> tin nhắn mới'; // You have 2 new messages
$lang['New_pm'] = 'Có <b>%d</b> tin nhắn mới';
$lang['No_new_pm'] = 'Không có tin nhắn';
$lang['Unread_pms'] = 'Có <b>%d</b> tin nhắn chưa xem';
$lang['Unread_pm'] = 'Có <b>%d</b> tin nhắn chưa xem';
$lang['No_unread_pm'] = 'Bạn đã xem tất cả tin nhắn';
$lang['You_new_pm'] = 'Có tin nhắn mới đang chờ bạn trong hộp tin đến';
$lang['You_new_pms'] = 'Có nhiều tin nhắn mới đang chờ bạn trong hộp tin đến';
$lang['You_no_new_pm'] = 'Không có tin nhắn nào cho bạn';

$lang['Unread_message'] = 'Thông điệp chưa đọc';
$lang['Read_message'] = 'Đọc tin';

$lang['Read_pm'] = 'Đọc tin';
$lang['Post_new_pm'] = 'Gửi thông điệp';
$lang['Post_reply_pm'] = 'Trả lời thông điệp';
$lang['Post_quote_pm'] = 'Trích dẫn thông điệp';
$lang['Edit_pm'] = 'Biên soạn thông điệp';

$lang['Inbox'] = 'Hộp Tin Đến';
$lang['Outbox'] = 'Hộp Tin Đi';
$lang['Savebox'] = 'Lưu Nháp';
$lang['Sentbox'] = 'Tin Đã Gửi';
$lang['Flag'] = 'Flag';
$lang['Subject'] = 'Tiêu đề';
$lang['From'] = 'Người gửi';
$lang['To'] = 'Người nhận';
$lang['Date'] = 'Ngày';
$lang['Mark'] = 'Đánh dấu';
$lang['Sent'] = 'Gửi';
$lang['Saved'] = 'Lưu';
$lang['Delete_marked'] = 'Xóa tin đang đánh dấu';
$lang['Delete_all'] = 'Xóa tất cả';
$lang['Save_marked'] = 'Lưu tin đang đánh dấu'; 
$lang['Save_message'] = 'Lưu tin nhắn';
$lang['Delete_message'] = 'Xóa tin nhắn';

$lang['Display_messages'] = '<b>Trình bày tin nhắn theo thời gian</b>'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Tất cả tin nhắn';

$lang['No_messages_folder'] = 'Không có tin nhắn';

$lang['PM_disabled'] = 'Tin nhắn không được phép sử dụng trong Diễn Đàn';
$lang['Cannot_send_privmsg'] = 'Xin lỗi, Ban quản trị đã không cho phép gửi tin nhắn';
$lang['No_to_user'] = 'Bạn phải khai báo tên truy cập của người nhận';
$lang['No_such_user'] = 'Không có tên người nhận trong danh sách thành viên';

$lang['Disable_HTML_pm'] = 'Vô hiệu HTML cho tin nhắn này';
$lang['Disable_BBCode_pm'] = 'Vô hiệu BBCode cho tin nhắn này';
$lang['Disable_Smilies_pm'] = 'Vô hiệu Smilies cho tin nhắn này';

$lang['Message_sent'] = 'Thông điệp của bạn đã được gửi';

$lang['Click_return_inbox'] = 'Bấm chuột <b>%svào đây%s</b> để trở về <b>Hộp Tin Đến</b>';
$lang['Click_return_index'] = 'Bấm chuột <b>%svào đây%s</b> để trở về trang chính';

$lang['Send_a_new_message'] = 'Gửi tin nhắn mới';
$lang['Send_a_reply'] = 'Trả lời tin nhắn';
$lang['Edit_message'] = 'Sửa tin nhắn';

$lang['Notification_subject'] = 'Tin nhắn đã đến nơi';

$lang['Find_username'] = 'Tìm thành viên';
$lang['Find'] = 'Tìm';
$lang['No_match'] = 'Không tìm thấy';

$lang['No_post_id'] = 'Không xác định số ID gửi';
$lang['No_such_folder'] = 'Không có thư mục này';
$lang['No_folder'] = 'Không có thư mục này';

$lang['Mark_all'] = 'Đánh dấu tất cả';
$lang['Unmark_all'] = 'Bỏ chọn tất cả';

$lang['Confirm_delete_pm'] = 'Bạn có chắc là bạn muốn xóa tin nhắn này?';
$lang['Confirm_delete_pms'] = 'Bạn có chắc là bạn muốn xóa các tin nhắn này?';

$lang['Inbox_size'] = 'Dung lượng hộp tin nhắn đang dùng %d%%'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Dung lượng hộp tin nhắn đã gửi đang dùng %d%%';
$lang['Savebox_size'] = 'Dung lượng tin nhắn nháp đang dùng %d%%';
$lang['Click_view_privmsg'] = 'Nhấn %sVào Đây%s để xem hộp tin đến của bạn';

//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Xem lý lịch của %s'; // %s is username
$lang['About_user'] = 'Tất cả thông tin về %s';

$lang['Preferences'] = 'Giao diện';
$lang['Items_required'] = 'Bạn phải khai báo đầy đủ các mục có đánh dấu *.';
$lang['Registration_info'] = 'Thông tin đăng ký';
$lang['Profile_info'] = 'Thông tin cá nhân';
$lang['Profile_info_warn'] = 'Các thông tin nầy sẽ được công bố cho mọi người biết';
$lang['Avatar_panel'] = 'Bảng điều khiển Avatar (hình thế thân)';
$lang['Avatar_gallery'] = 'Thư viện Avatar';

$lang['Website'] = 'Website';
$lang['Location'] = 'Đến từ';
$lang['Contact'] = 'Liên hệ';
$lang['Email_address'] = 'Địa chỉ Email';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Gửi tin nhắn';
$lang['Hidden_email'] = '[Che dấu]';
$lang['Search_user_posts'] = 'Tìm bài viết của người này';
$lang['Interests'] = 'Sở thích';
$lang['Occupation'] = 'Nghề nghiệp';
$lang['Poster_rank'] = 'Xếp hạng người gửi bài';

$lang['Total_posts'] = 'Tổng số bài gửi';
$lang['User_post_pct_stats'] = '<b>%.2f%%</b> của tổng số'; // 1.25% of total
$lang['User_post_day_stats'] = '<b>%.2f</b> bài gửi ﻿mỗi ngày'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Tìm tất cả bài gửi của %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Xin lỗi, không có người này';
$lang['Wrong_Profile'] = 'Bạn không được quyền sửa chữa lý lịch của người khác.';

$lang['Only_one_avatar'] = 'Chỉ được sử dụng mỗi lần 1 ảnh avatar';
$lang['File_no_data'] = 'File chỉ định ở URL nầy có nội dung không hợp lệ';
$lang['No_connection_URL'] = 'Không thể kết nối đến địa chỉ bạn khai báo';
$lang['Incomplete_URL'] = 'Địa chỉ URL không đầy đủ';
$lang['Wrong_remote_avatar_format'] = 'Địa chỉ URL không hợp lệ';
$lang['No_send_account_inactive'] = 'Xin lỗi, không cung cấp mật khẩu cho bạn được vì account của bạn đã bị vô hiệu. Hãy tiếp xúc với Ban quản trị để hỏi';

$lang['Always_smile'] = 'Luôn luôn cho hiệu lực hình vui';
$lang['Always_html'] = 'Luôn luôn cho hiệu lực HTML';
$lang['Always_bbcode'] = 'Luôn luôn cho hiệu lực BBCode';
$lang['Always_add_sig'] = 'Luôn luôn kèm chữ ký theo bài gửi';
$lang['Always_notify'] = 'Luôn luôn thông báo khi có người trả lời';
$lang['Always_notify_explain'] = 'Diễn Đàn sẽ gửi email thông báo khi có người trả lời bài viết, tuỳ chọn này có thể thay đổi khi gửi bài viết.';

$lang['Board_style'] = 'Kiểu giao diện';
$lang['Board_lang'] = 'Ngôn ngữ sử dụng';
$lang['No_themes'] = 'Không có kiểu giao diện trong cơ sở dữ liệu';
$lang['Timezone'] = 'Múi giờ';
$lang['Date_format'] = 'Dạng thức thời gian';
$lang['Date_format_explain'] = 'Cú pháp dùng đúng như hàm PHP date()';
$lang['Signature'] = 'Chữ ký';
$lang['Signature_explain'] = 'Các từ này sẽ được tự động thêm vào thông điệp của bạn khi gửi đi, bạn phải giới hạn ở %d ký tự và tối đa là 3 dòng.';
$lang['Public_view_email'] = 'Luôn luôn hiển thị địa chỉ email của tôi';

$lang['Current_password'] = 'Mật khẩu hiện hành';
$lang['New_password'] = 'Mật khẩu mới';
$lang['Confirm_password'] = 'Xác nhận mật khẩu';
$lang['Confirm_password_explain'] = 'Bạn phải xác nhận mật khẩu hiện hành nếu bạn yêu cầu thay đổi nó hay địa chỉ email của bạn';
$lang['password_if_changed'] = 'Bạn chỉ cần khai báo mật khẩu nếu bạn muốn thay đổi nó';
$lang['password_confirm_if_changed'] = 'Bạn chỉ cần xác nhận mật khẩu của bạn nếu bạn thay đổi nó';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Một bức ảnh nhỏ đại diện sẽ hiển thị bên cạnh bài gửi của bạn. Chiều ngang không quá %d pixels, chiều cao không quá %d pixels và dung lượng file hình không được lớn hơn %dKB.';
$lang['Upload_Avatar_file'] = 'Tải Avatar lên từ máy tinh của bạn';
$lang['Upload_Avatar_URL'] = 'Tải hình lên từ website (URL) khác';
$lang['Upload_Avatar_URL_explain'] = 'Nhập địa chỉ trang web có chứa file hình để sao chép vào diễn đàn này.';
$lang['Pick_local_Avatar'] = 'Chọn lựa từ thư viện ảnh của diễn đàn';
$lang['Link_remote_Avatar'] = 'Sử dụng ảnh từ site khác';
$lang['Link_remote_Avatar_explain'] = 'Khai báo địa chỉ (URL) chứa ảnh mà bạn muốn sử dụng.';
$lang['Avatar_URL'] = 'URL của ảnh Avatar';
$lang['Select_from_gallery'] = 'Chọn lựa từ thư viện ảnh của diễn đàn';
$lang['View_avatar_gallery'] = 'Xem thư viện';

$lang['Select_avatar'] = 'Chọn ảnh';
$lang['Return_profile'] = 'Bỏ qua ảnh';
$lang['Select_category'] = 'Chọn bộ sưu tập';

$lang['Delete_Image'] = 'Xoá ảnh';
$lang['Current_Image'] = 'Ảnh hiện tại';

$lang['Notify_on_privmsg'] = 'Thông báo khi có tin nhắn mới';
$lang['Popup_on_privmsg'] = 'Mở cửa sổ nhỏ khi có tin nhắn';
$lang['Popup_on_privmsg_explain'] = 'Một hộp nhỏ sẽ xuất hiện để thông báo khi có tin nhắn đến';
$lang['Hide_user'] = 'Che dấu khi đang truy cập';

$lang['Profile_updated'] = 'Lý lịch của bạn đã được cập nhật';
$lang['Profile_updated_inactive'] = 'Thông tin cá nhân của bạn vừa được cập nhật. Tuy nhiên, việc thay đổi tài khoản của bạn thì chưa có hiệu lực. Bạn hãy kiểm tra email để biết cách kích hoạt lại tài khoản, hoặc việc kích hoạt phải nhờ đến admin thì bạn phải chờ trong ít phút khi admin online.';

$lang['Password_mismatch'] = 'Mật khẩu không hợp lệ';
$lang['Current_password_mismatch'] = 'Mật khẩu bạn nhập vào không đúng như trong cơ sở dữ liệu của chúng tôi';
$lang['Password_long'] = 'Mật khẩu không được dài hơn 32 ký tự';
$lang['Too_many_registers'] = 'Bạn đã cố gắng đăng ký nhiều lần vượt giới hạn cho phép của chúng tôi. Hãy thử đăng ký lại sau.';
$lang['Username_taken'] = 'Xin lỗi, Tên truy cập của bạn đã trùng với người khác';
$lang['Username_invalid'] = 'Xin lỗi, tên truy cập của bạn có ký tự không hợp lệ \'';
$lang['Username_disallowed'] = 'Xin lỗi tên truy cập này đã bị cấm';
$lang['Email_taken'] = 'Xin lỗi, địa chỉ email này đã được người khác sử dụng';
$lang['Email_banned'] = 'Xin lỗi địa chỉ email này đã bị cấm';
$lang['Email_invalid'] = 'Xin lỗi địa chỉ email này không hợp lệ';
$lang['Signature_too_long'] = 'Chữ ký của bạn quá dài, ngoài ra nó phải dưới %d dòng';
$lang['Fields_empty'] = 'Bạn phải khai báo đầy đủ các mục bắt buộc';
$lang['Avatar_filetype'] = 'Dạng thức file ảnh phải là .jpg, .gif hay .png';
$lang['Avatar_filesize'] = 'Dung lượng file ảnh không được lớn hơn %d kB'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'Ảnh có chiều ngang không lớn hơn %d pixels và chiều cao không lớn hơn %d pixels';

$lang['Welcome_subject'] = 'Chào mừng bạn tham gia Diễn Đàn %s'; // Welcome to my.com forums
$lang['New_account_subject'] = 'tai khoan moi';
$lang['Account_activated_subject'] = ' Hieu luc tai khoan';

$lang['Account_added'] = 'Cám ơn bạn đã tham gia, account của bạn đã được tạo. Bạn có thể truy cập Diễn Đàn với Tên và Mật khẩu đã đăng ký';
$lang['Account_inactive'] = 'Tài khoản của bạn đã được tạo. Tuy nhiên Diễn Đàn đòi hỏi bạn phải kích hoạt account này, mã kích hoạt đã được gửi đến địa chỉ email bạn khai báo khi đăng ký.';
$lang['Account_inactive_admin'] = 'Tài khoản của bạn đã được tạo. Tuy nhiên tài khoản này phải được kích hoạt bởi Người Quản Trị, Diễn đàn sẽ gửi email thông báo khi tài khoản của bạn có hiệu lực.';
$lang['Account_active'] = 'Tài khoản của bạn đã có hiệu lực. Cám ơn bạn tham gia Diễn Đàn';
$lang['Account_active_admin'] = 'Tài khoản đã được kích hoạt';
$lang['Reactivate'] = 'Tài khoản của bạn đã có hiệu lực trở lại';
$lang['Already_activated'] = 'Tài khoản của bạn đã được kích hoạt';
$lang['COPPA'] = 'Tài khoản của bạn đã được tạo nhưng còn phải chờ sự chuẩn y, hãy kiểm tra email để biết chi tiết.';

$lang['Registration'] = 'Những quy định khi tham gia Diễn Đàn';
$lang['Reg_agreement'] = 'Diễn Đàn này được <b>Ban Quản Trị Website</b> này thành lập với mục đích làm nơi tập trung để mọi người có thể cùng nhau giao lưu, trao đổi, học hỏi và phổ biến kiến thức .<br /><br />1/ Các thành viên tham gia diễn đàn này không được gửi bài viết có các nội dung sau:<br />* Vi phạm thuần phong mỹ tục (thí dụ: biêu xấu, vu khống, đồi truỵ, dùng từ thô tục...)<br />* An ninh - Chính trị - Quân sự.<br />* Vi phạm pháp luật hay hướng dẫn người khác vi phạm (thí dụ: hướng dẫn làm hacker, cracker, bomb mail...)<br /><br />2/ Để sử dụng đầy đủ chức năng Diễn đàn cần sử dụng Cookies để lưu trử các thông tin như: lần cuối cùng bạn truy cập diễn đàn, tên bạn, mã nhận dạng khi login, những việc bạn đã làm trong phiên truy cập.... Cookies nầy được lưu trữ trong trình duyệt web của bạn do đó bạn cần cho hiệu lực cookies để các thông tin trên không bị sai lạc, giúp bạn làm việc thuận lợi và nhanh chóng hơn trong diễn đàn.<br /><br />3/ Mọi người đều có thể xem các thông điệp trong diễn đàn này. Tuy nhiên chỉ có các thành viên đã đăng ký mới có được những quyền hạn như: gửi (nếu diễn đàn không cho phép khách viếng thăm được phép gửi thư), sửa, xoá, trả lời thư, thay đổi kiểu dáng màn hình ... Việc đăng ký hoàn toàn miễn phí và rất đơn giản, bạn chỉ cần khai báo đầy đủ vài thông tin cần thiết (có đánh dấu hoa thị như: tên họ hay biệt danh, mật khẩu, địa chỉ email), còn các thông tin khác có thể khai báo hay bỏ qua tuỳ thích. Bạn có quyền cho phép người khác biết địa chỉ email của bạn hay không và chúng tôi bảo đảm các thông tin do bạn khai báo sẽ được bảo mật.<br /><br /> Đăng ký xong bạn sẽ nhận được thư của Diễn Đàn thông báo tên truy cập và Mật khẩu kèm theo mã kích hoạt account của bạn có hiệu lực (điều này nhằm tránh việc khai báo giả mạo địa chỉ email), sau khi kích hoạt bạn chính thức là thành viên của diễn đàn và có thể truy cập mục "Lý lịch" để thay đổi các thông tin cá nhân cũng như các xác lập khác. Nếu bạn đồng ý với các quy định của diễn đàn và muốn đăng ký làm thành viên chính thức ngay bây giờ, bạn hãy bấm chuột vào mục "Đăng ký". Nếu bạn không muốn đăng ký, bạn hãy bấm chuột vào mục "Thoát".';

$lang['Agree_under_13'] = 'Tôi đồng ý với những quy định trên và tôi <b>trên</b> 13 tuổi';
$lang['Agree_over_13'] = 'Tôi đồng ý với những quy định trên và tôi <b>dưới</b> hoặc <b>đúng</b> 13 tuổi';
$lang['Agree_not'] = 'Tôi không đồng ý quy định trên';

$lang['Wrong_activation'] = 'Mã kích hoạt của bạn không đúng';
$lang['Send_password'] = 'Gửi cho tôi mật khẩu mới';
$lang['Password_updated'] = 'Mật khẩu mới đã được tạo và gửi cho bạn, hãy kiểm tra email để biết chi tiết.';
$lang['No_email_match'] = 'Địa chỉ email bạn khai báo không đúng với cơ sở dữ liệu của Diễn Đàn';
$lang['New_password_activation'] = 'Kích hoạt mật khẩu mới';
$lang['Password_activated'] = 'Account của bạn đã được phục hồi. Bạn truy cập Diễn Đàn bằng mật khẩu mới cung cấp trong email.';

$lang['Send_email_msg'] = 'Gửi email';
$lang['No_user_specified'] = 'Chưa khai báo tên';
$lang['User_prevent_email'] = 'Người này không muốn nhận email, bạn có thể thử gửi tin nhắn.';
$lang['User_not_exist'] = 'Không có người này';
$lang['CC_email'] = 'Gửi 1 bản sao email này đến chính bạn';
$lang['Email_message_desc'] = 'Thư này sẽ được gửi với bảng mã UTF-8, dạng plain text - không chứa HTML hay BBCode. Địa chỉ nhận hồi âm sẽ là địa chỉ email của bạn.';
$lang['Flood_email_limit'] = 'Bạn không thể gửi email khác trong lần này, hãy gửi lại sau.';
$lang['Recipient'] = 'Người nhận';
$lang['Email_sent'] = 'Email đã được gửi';
$lang['Send_email'] = 'Gửi email';
$lang['Empty_subject_email'] = 'Bạn chưa đặt chủ đề cho email';
$lang['Empty_message_email'] = 'Email chưa có nội dung';

//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Mã xác nhận nhận bạn nhập vào không đúng';
$lang['Too_many_registers'] = 'Bạn đã sử dụng hết số lần chứng minh mã xác nhận cho phép bạn nhập trong phiên làm việc này. Hãy thử lại sau.';
$lang['Confirm_code_impaired'] = 'Nếu bạn không nhìn rõ, hoặc bạn không thể đọc mã xác nhận này hãy liên hệ với %sNgười Điều Hành%s để được giúp đỡ.';
$lang['Confirm_code'] = 'Mã xác nhận';
$lang['Confirm_code_explain'] = 'Nhập vào mã chính xác như bạn thấy. Mã này rất nhạy cảm và số 0 luôn có 1 gạch ngang xuyên qua nó.';

//
// Memberslist
//
$lang['Select_sort_method'] = 'Chọn cách sắp xếp';
$lang['Sort'] = 'Sắp xếp';
$lang['Sort_Top_Ten'] = 'Top Ten Gửi Bài';
$lang['Sort_Joined'] = 'Ngày tham gia';
$lang['Sort_Username'] = 'Tên truy cập';
$lang['Sort_Location'] = 'Nơi ở';
$lang['Sort_Posts'] = 'Số lượng bài gửi';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Website';
$lang['Sort_Ascending'] = 'Lên';
$lang['Sort_Descending'] = 'Xuống';
$lang['Order'] = 'Sắp xếp';
//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Bảng điều khiển Nhóm làm việc';
$lang['Group_member_details'] = 'Thông tin chi tiết';
$lang['Group_member_join'] = 'Tham gia nhóm';

$lang['Group_Information'] = 'Thông tin về Nhóm';
$lang['Group_name'] = 'Tên nhóm';
$lang['Group_description'] = 'Mô tả';
$lang['Group_membership'] = 'Tư cách thành viên';
$lang['Group_Members'] = 'Thành viên nhóm';
$lang['Group_Moderator'] = 'Người điều hành nhóm';
$lang['Pending_members'] = 'Thành viên dang chờ duyệt';

$lang['Group_type'] = 'Kiểu nhóm';
$lang['Group_open'] = 'Nhóm mở';
$lang['Group_closed'] = 'Nhóm đóng';
$lang['Group_hidden'] = 'Nhóm ẩn';

$lang['Current_memberships'] = 'Nhóm đã tham gia';
$lang['Non_member_groups'] = 'Nhóm không tham gia';
$lang['Memberships_pending'] = 'Nhóm đã đăng ký đang chờ duyệt';

$lang['No_groups_exist'] = 'Không có nhóm làm việc nào';
$lang['Group_not_exist'] = 'Nhóm làm việc đó không có';

$lang['Join_group'] = 'Tham gia nhóm';
$lang['No_group_members'] = 'Nhóm này không có thành viên';
$lang['Group_hidden_members'] = 'Nhóm này ẩn danh, bạn không thể xem danh sách thành viên';
$lang['No_pending_group_members'] = 'Nhóm này không có thành viên chờ duyệt để gia nhập';
$lang['Group_joined'] = 'Cám ơn bạn đã đăng ký gia nhập nhóm nầy.<br />Bạn sẽ nhận được thông báo khi người điều hành nhóm chấp thuận cho bạn tham gia.';
$lang['Group_request'] = 'Có yêu cầu được gia nhập nhóm của bạn';
$lang['Group_approved'] = 'Xin chào mừng. Bạn đã được chấp thuận tham gia nhóm';
$lang['Group_added'] = 'Bạn vừa được thêm vào nhóm thành viên này';
$lang['Already_member_group'] = 'Bạn đang là thành viên của nhóm này.';
$lang['User_is_member_group'] = 'Bạn đang là thành viên của nhóm này.';
$lang['Group_type_updated'] = 'Đã cập nhật hoàn tất';

$lang['Could_not_add_user'] = 'Tên người này không có';
$lang['Could_not_anon_user'] = 'Bạn không thể tạo 1 nhóm thành viên vô danh';

$lang['Confirm_unsub'] = 'Bạn có chắc là bạn muốn rút tên khỏi nhóm này?';
$lang['Confirm_unsub_pending'] = 'Việc xin gia nhập đến nhóm này chưa được chuẩn y, bạn có chắc là không muốn gia nhập không?';

$lang['Unsub_success'] = 'Bạn đã rút tên khỏi nhóm này.';

$lang['Approve_selected'] = 'Chấp thuận';
$lang['Deny_selected'] = 'Từ chối';
$lang['Not_logged_in'] = 'Bạn phải đăng nhập nếu muốn tham gia Nhóm làm việc.';
$lang['Remove_selected'] = 'Lựa chọn loại bỏ';
$lang['Add_member'] = 'Thêm thành viên';
$lang['Not_group_moderator'] = 'Bạn không phải là người điều hành nhóm này nên không làm vậy được.';

$lang['Login_to_join'] = 'Bạn hãy đăng nhập nếu muốn tham gia hay quản lý Nhóm làm việc.';
$lang['This_open_group'] = 'Đây là nhóm "Mở", bạn có thể đăng ký gia nhập';
$lang['This_closed_group'] = 'Đây là nhóm "Đóng", không tiếp nhận thành viên';
$lang['This_hidden_group'] = 'Đây là nhóm <b>Ẩn</b>, không cho phép đăng ký';
$lang['Member_this_group'] = 'Bạn là thành viên của nhóm này';
$lang['Pending_this_group'] = 'Bạn đang chờ duyệt để tham gia nhóm';
$lang['Are_group_moderator'] = 'Bạn là người điều hành nhóm';
$lang['None'] = 'Không';

$lang['Subscribe'] = 'Đăng ký';
$lang['Unsubscribe'] = 'Rút tên';
$lang['View_Information'] = 'Xem thông tin';

//
// Search
//
$lang['Search_query'] = 'Tìm kiếm';
$lang['Search_options'] = 'Tuỳ chọn';

$lang['Search_keywords'] = 'Tìm theo từ khoá';
$lang['Search_keywords_explain'] = 'Bạn có thể dùng AND để xác định nhóm từ cần có trong kết quả, OR để xác định nhóm từ có thể có và NOT để xác định nhóm từ không được có trong kết quả. Dùng dấu * để đại diện cho một nhóm từ';
$lang['Search_author'] = 'Tìm theo tên tác giả';
$lang['Search_author_explain'] = 'Dùng dấu * để đại diện cho một nhóm từ';

$lang['Search_for_any'] = 'Tìm theo 1 điều kiện nào đó hay yêu cầu của người sử dụng';
$lang['Search_for_all'] = 'Tìm theo tất cả các điều kiện';
$lang['Search_title_msg'] = 'Tìm trong tiêu đề và nội dung bài viết';
$lang['Search_msg_only'] = 'Chỉ tìm trong nội dung bài viết';

$lang['Return_first'] = 'Gửi trả kết quả'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'ký tự của bài viết';

$lang['Search_previous'] = 'Tìm ưu tiên theo'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sắp xếp theo';
$lang['Sort_Time'] = 'Thời gian gửi';
$lang['Sort_Post_Subject'] = 'Tiêu đề thư';
$lang['Sort_Topic_Title'] = 'Tên chủ đề';
$lang['Sort_Author'] = 'Tác giả';
$lang['Sort_Forum'] = 'Diễn Đàn';

$lang['Display_results'] = 'Hiển thị kết quả theo';
$lang['All_available'] = 'Tất cả';
$lang['No_searchable_forums'] = 'Bạn không được phép tìm kiếm trong Diễn Đàn này';

$lang['No_search_match'] = 'Không tìm thấy gì cả';
$lang['Found_search_match'] = 'Tìm thấy <b>%d</b> mục'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Tìm thấy <b>%d</b> mục'; // eg. Search found 24 matches

$lang['Close_window'] = 'Đóng cửa sổ này';

//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Xin lỗi, chỉ có <b>%s</b> được quyền gửi thông báo trong diễn đàn này.';
$lang['Sorry_auth_sticky'] = 'Xin lỗi, chỉ có <b>%s</b> được quyền gửi bài Chú ý trong diễn đàn này.';
$lang['Sorry_auth_read'] = 'Xin lỗi, chỉ có <b>%s</b> được quyền đọc bài gửi trong diễn đàn này.';
$lang['Sorry_auth_post'] = 'Xin lỗi, chỉ có <b>%s</b> được quyền gửi bài trong diễn đàn này.';
$lang['Sorry_auth_reply'] = 'Xin lỗi, chỉ có <b>%s</b> được quyền trả lời bài gửi trong diễn đàn này.';
$lang['Sorry_auth_edit'] = 'Xin lỗi, chỉ có <b>%s</b> được quyền sửa bài gửi trong diễn đàn này.';
$lang['Sorry_auth_delete'] = 'Xin lỗi, chỉ có <b>%s</b> được quyền xoá bài gửi trong diễn đàn này.';
$lang['Sorry_auth_vote'] = 'Xin lỗi, chỉ có <b>%s</b> được quyền tham gia bầu chọn trong diễn đàn này.'; // These replace the %s in the above strings

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = 'Khách viếng thăm';
$lang['Auth_Registered_Users'] = 'Thành viên';
$lang['Auth_Users_granted_access'] = 'Người được uỷ quyền';
$lang['Auth_Moderators'] = 'Người điều hành';
$lang['Auth_Administrators'] = 'Người quản trị';

$lang['Not_Moderator'] = 'Bạn không phải là người điều hành diễn đàn này';
$lang['Not_Authorised'] = 'Không cho phép';

$lang['You_been_banned'] = 'Bạn đã bị cấm truy cập diễn đàn này.<br />Hãy tiếp xúc với Ban Quản Trị để biết chi tiết.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Hiện có <b>0</b> Thành Viên và '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'Hiện có <b>%d</b> Thành Viên và ';
$lang['Reg_user_online'] = 'Hiện có <b>%d</b> Thành Viên và ';
$lang['Hidden_users_zero_online'] = '<b>0</b> Thành Viên ẩn danh truy cập'; // 6 Hidden users online
$lang['Hidden_users_online'] = '<b>%d</b> Thành Viên ẩn danh truy cập';
$lang['Hidden_user_online'] = '<b>%d</b> Thành Viên ẩn danh truy cập';
$lang['Guest_users_online'] = 'Hiện có <b>%d</b> Khách viếng thăm truy cập'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Hiện có <b>0</b> Khách viếng thăm truy cập';
$lang['Guest_user_online'] = 'Hiện có <b>%d</b> Khách viếng thăm truy cập';
$lang['No_users_browsing'] = 'Chưa có ai truy cập Diễn Đàn này';

$lang['Online_explain'] = 'Thông tin này được cập nhật mỗi 5 phút';

$lang['Forum_Location'] = 'Diễn Đàn đang xem';
$lang['Last_updated'] = 'Cập nhật lần cuối';

$lang['Forum_index'] = 'Diễn Đàn';
$lang['Logging_on'] = 'Đăng nhập';
$lang['Posting_message'] = 'Gửi bài';
$lang['Searching_forums'] = 'Tìm diễn đàn';
$lang['Viewing_profile'] = 'Xem lý lịch';
$lang['Viewing_online'] = 'Xem tình hình truy cập diễn đàn';
$lang['Viewing_member_list'] = 'Xem danh sách thành viên';
$lang['Viewing_priv_msgs'] = 'Xem tin nhắn';
$lang['Viewing_FAQ'] = 'Xem hướng dẫn';

//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Bảng điều khiển của người điều hành';
$lang['Mod_CP_explain'] = 'Bạn có thể khoá, mở khoá, di chuyển hay xoá bất kỳ bài gửi nào trong diễn đàn do bạn điều hành.';

$lang['Select'] = 'Lựa chọn';
$lang['Delete'] = 'Xóa';
$lang['Move'] = 'Di chuyển';
$lang['Lock'] = 'Khóa';
$lang['Unlock'] = 'Mở khóa';

$lang['Topics_Removed'] = 'Các bài viết được chọn đã bị xoá khỏi cơ sở dữ liệu.';
$lang['Topics_Locked'] = 'Các bài viết lựa chọn đã bị khoá';
$lang['Topics_Moved'] = 'Các bài viết lựa chọn đã được di chuyển'; 
$lang['Topics_Unlocked'] = 'Các bài viết lựa chọn đã được mở khoá';
$lang['No_Topics_Moved'] = 'Không di chuyển bài viết nào';

$lang['Confirm_delete_topic'] = 'Bạn có chắc là bạn muốn xoá các bài viết đã chọn?';
$lang['Confirm_lock_topic'] = 'Bạn có chắc là bạn muốn khoá các bài viết đã chọn?';
$lang['Confirm_unlock_topic'] = 'Bạn có chắc là bạn muốn mở khoá các bài viết đã chọn?';
$lang['Confirm_move_topic'] = 'Bạn có chắc là bạn muốn di chuyển các bài viết đã chọn?';

$lang['Move_to_forum'] = 'Di chuyển đến Diễn Đàn';
$lang['Leave_shadow_topic'] = 'Lưu lại bản sao trong diễn đàn cũ';

$lang['Split_Topic'] = 'Bảng điều khiển chia tách chủ đề'; 
$lang['Split_Topic_explain'] = 'Bạn có thể chia tách chủ đề bằng cách chọn từng bài viết hay tách từ bài viết đang chọn.';
$lang['Split_title'] = 'Tên chủ đề mới';
$lang['Split_forum'] = 'Diễn đàn của chủ đề mới';
$lang['Split_posts'] = 'Tách các bài viết đã chọn';
$lang['Split_after'] = 'Tách từ bài viết đã chọn';
$lang['Topic_split'] = 'Chủ đề chọn lựa đã được tách';

$lang['Too_many_error'] = 'Bạn đã chọn quá nhiều bài viết. Bạn chỉ được chọn 1 bài viết để tách chủ đề.';

$lang['None_selected'] = 'Bạn chưa lựa chọn chủ đề, quay trở lại và lựa chọn ít nhất là 1 chủ đề.';
$lang['New_forum'] = 'Diễn đàn mới';

$lang['This_posts_IP'] = 'IP của bài viết này';
$lang['Other_IP_this_user'] = 'Địa chỉ IP khác mà thành viên này gửi bài từ';
$lang['Users_this_IP'] = 'Thành viên gửi bài từ IP này';
$lang['IP_info'] = 'Thông tin IP';
$lang['Lookup_IP'] = 'Truy tìm IP';

//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Thời gian được tính theo giờ %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 giờ';
$lang['-11'] = 'GMT - 11 giờ';
$lang['-10'] = 'HST (Hawaii)';
$lang['-9'] = 'GMT - 9 giờ';
$lang['-8'] = 'PST (U.S./Canada)';
$lang['-7'] = 'MST (U.S./Canada)';
$lang['-6'] = 'CST (U.S./Canada)';
$lang['-5'] = 'EST (U.S./Canada)';
$lang['-4'] = 'GMT - 4 giờ';
$lang['-3.5'] = 'GMT - 3.5 giờ';
$lang['-3'] = 'GMT - 3 giờ';
$lang['-2'] = 'Mid-Atlantic';
$lang['-1'] = 'GMT - 1 giờ';
$lang['0'] = 'GMT'; 
$lang['1'] = 'CET (Europe)';
$lang['2'] = 'EET (Europe)';
$lang['3'] = 'GMT + 3 giờ';
$lang['3.5'] = 'GMT + 3.5 giờ';
$lang['4'] = 'GMT + 4 giờ';
$lang['4.5'] = 'GMT + 4.5 giờ';
$lang['5'] = 'GMT + 5 giờ';
$lang['5.5'] = 'GMT + 5.5 giờ';
$lang['6'] = 'GMT + 6 giờ';
$lang['6.5'] = 'GMT + 6.5 giờ';
$lang['7'] = '[GMT+ 7 giờ]';
$lang['8'] = 'WST (Australia)';
$lang['9'] = 'GMT + 9 giờ';
$lang['9.5'] = 'CST (Australia)';
$lang['10'] = 'EST (Australia)';
$lang['11'] = 'GMT + 11 giờ';
$lang['12'] = 'GMT + 12 giờ';
$lang['13'] = 'GMT + 13 giờ';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12:00 Giờ)';
$lang['tz']['-11'] = '(GMT -11:00 Giờ)';
$lang['tz']['-10'] = '(GMT -10:00 Giờ)';
$lang['tz']['-9'] = '(GMT -9:00 Giờ)';
$lang['tz']['-8'] = '(GMT -8:00 Giờ)';
$lang['tz']['-7'] = '(GMT -7:00 Giờ)';
$lang['tz']['-6'] = '(GMT -6:00 Giờ)';
$lang['tz']['-5'] = '(GMT -5:00 Giờ)';
$lang['tz']['-4'] = '(GMT -4:00 Giờ)';
$lang['tz']['-3.5'] = '(GMT -3:30 Giờ)';
$lang['tz']['-3'] = '(GMT -3:00 Giờ)';
$lang['tz']['-2'] = '(GMT -2:00 Giờ)';
$lang['tz']['-1'] = '(GMT -1:00 Giờ)';
$lang['tz']['0'] = '(GMT)';
$lang['tz']['1'] = '(GMT +1:00 Giờ)';
$lang['tz']['2'] = '(GMT +2:00 Giờ)'; 
$lang['tz']['3'] = '(GMT +3:00 Giờ)';
$lang['tz']['3.5'] = '(GMT +3:30 Giờ)';
$lang['tz']['4'] = '(GMT +4:00 Giờ)';
$lang['tz']['4.5'] = '(GMT +4:30 Giờ)';
$lang['tz']['5'] = '(GMT +5:00 Giờ)';
$lang['tz']['5.5'] = '(GMT +5:30 Giờ)';
$lang['tz']['6'] = '(GMT +6:00 Giờ)';
$lang['tz']['6.5'] = '(GMT +6:30 Giờ)';
$lang['tz']['7'] = '(GMT +7:00 Giờ)';
$lang['tz']['8'] = '(GMT +8:00 Giờ)';
$lang['tz']['9'] = '(GMT +9:00 Giờ)';
$lang['tz']['9.5'] = '(GMT +9:30 Giờ)';
$lang['tz']['10'] = '(GMT +10:00 Giờ)';
$lang['tz']['11'] = '(GMT +11:00 Giờ)';
$lang['tz']['12'] = '(GMT +12:00 Giờ)';
$lang['tz']['13'] = '(GMT +13 Giờ)';

$lang['datetime']['Sunday'] = 'Chủ nhật';
$lang['datetime']['Monday'] = 'Thứ Hai';
$lang['datetime']['Tuesday'] = 'Thứ Ba';
$lang['datetime']['Wednesday'] = 'Thứ Tư';
$lang['datetime']['Thursday'] = 'Thứ Năm';
$lang['datetime']['Friday'] = 'Thứ Sáu';
$lang['datetime']['Saturday'] = 'Thứ bảy';
$lang['datetime']['Sun'] = 'CN';
$lang['datetime']['Mon'] = 'Hai';
$lang['datetime']['Tue'] = 'Ba';
$lang['datetime']['Wed'] = 'Tư';
$lang['datetime']['Thu'] = 'Năm';
$lang['datetime']['Fri'] = 'Sáu';
$lang['datetime']['Sat'] = 'Bảy';
$lang['datetime']['January'] = 'Tháng 1';
$lang['datetime']['February'] = 'Tháng 2';
$lang['datetime']['March'] = 'Tháng 3';
$lang['datetime']['April'] = 'Tháng 4';
$lang['datetime']['May'] = 'Tháng 5';
$lang['datetime']['June'] = 'Tháng 6';
$lang['datetime']['July'] = 'Tháng 7';
$lang['datetime']['August'] = 'Tháng 8';
$lang['datetime']['September'] = 'Tháng 9';
$lang['datetime']['October'] = 'Tháng 10';
$lang['datetime']['November'] = 'Tháng 11';
$lang['datetime']['December'] = 'Tháng 12';
$lang['datetime']['Jan'] = '1';
$lang['datetime']['Feb'] = '2';
$lang['datetime']['Mar'] = '3';
$lang['datetime']['Apr'] = '4';
$lang['datetime']['May'] = 'Tháng 5';
$lang['datetime']['Jun'] = '6';
$lang['datetime']['Jul'] = '7';
$lang['datetime']['Aug'] = '8';
$lang['datetime']['Sep'] = '9';
$lang['datetime']['Oct'] = '10';
$lang['datetime']['Nov'] = '11';
$lang['datetime']['Dec'] = '12';


//
// Errors (not related to a
// specific failure on a page)
//
$lang['Critical_Information'] = 'Thông Tin Lỗi Sai';
$lang['Information'] = 'Thông báo';
$lang['General_Error'] = 'Lỗi chung chung không xác định';
$lang['Critical_Error'] = 'Lỗi rồi';
$lang['An_error_occured'] = 'Lại lỗi rồi';
$lang['A_critical_error'] = '1 Lỗi đáng nghiêm trọng đã xảy ra';

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