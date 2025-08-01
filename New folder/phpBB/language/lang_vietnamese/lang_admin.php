<?php

/***************************************************************************
 *                            lang_admin.php [Vietnamese]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.4 2002/12/18 15:40:18 psotfx Exp $
 *
 *************************************************************************
 *
 *	Translate to Vietnamese by Tran Thanh
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

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical mistakes
*/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Quản Lý Tổng Thể';
$lang['Users'] = 'Quản lý người dùng';
$lang['Groups'] = 'Quản lý nhóm';
$lang['Forums'] = 'Quản lý diễn đàn';
$lang['Styles'] = 'Quản lý giao diện';

$lang['Configuration'] = 'Cấu hình diễn đàn';
$lang['Permissions'] = 'Xét Quyền';
$lang['Manage'] = 'Quản Lý';
$lang['Disallow'] = 'Tên không cho phép';
$lang['Prune'] = 'Giảm bớt chủ đề';
$lang['Mass_Email'] = 'Gửi email cho thành viên';
$lang['Ranks'] = 'Cấp Bậc';
$lang['Smilies'] = 'Mặt cười';
$lang['Ban_Management'] = 'Quyền ngăn cấm';
$lang['Word_Censor'] = 'Kiểm duyệt từ';
$lang['Export'] = 'Xuất ra';
$lang['Create_new'] = 'Tạo mới';
$lang['Add_new'] = 'Thêm mới';
$lang['Backup_DB'] = 'Sao lưu dữ liệu';
$lang['Restore_DB'] = 'Phục hồi dữ liệu';

//
// Index
//
$lang['Admin'] = 'Quản Lý';
$lang['Not_admin'] = 'Bạn không được phép dùng chức năng Quản Lý này';
$lang['Welcome_phpBB'] = 'Chào mừng bạn đến với phpBB';
$lang['Admin_intro'] = 'Cám ơn bạn đã chọn phpBB như là 1 giải pháp làm diễn đàn cho mình. Trang này sẽ trình bày cho bạn xem nhanh những thống kê chung của diễn đàn. Bạn có thể trở lại trang này khi nhấn vào liên kết <u>Trang chủ Quản Lý</u> ở menu bên trái. Để trở về trang chủ của diễn đàn, hãy nhấn vào logo phpBB cũng ở menu bên trái. Các liên kết ở bên trái của trang này sẽ cho phép bạn Quản Lý từng khía cạnh của diễn đàn. Mỗi một trang sẽ trình bày làm thế nào để sử dụng chức năng đó.';
$lang['Main_index'] = 'Trang chủ diễn đàn';
$lang['Forum_stats'] = 'Thống kê diễn đàn';
$lang['Admin_Index'] = 'Trang chủ Quản Lý';
$lang['Preview_forum'] = 'Xem trang chủ';

$lang['Click_return_admin_index'] = '﻿Chọn %sỞ ĐÂY%s để trở về trang chủ quản lý';

$lang['Statistic'] = 'Thống kê';
$lang['Value'] = 'Giá trị';
$lang['Number_posts'] = 'Tổng số bài gửi';
$lang['Posts_per_day'] = 'Số bài gửi trung bình trong ngày';
$lang['Number_topics'] = 'Tổng số chủ đề';
$lang['Topics_per_day'] = 'Số chủ đề gửi trung bình trong ngày';
$lang['Number_users'] = 'Tổng số thành viên';
$lang['Users_per_day'] = 'Thành viên đăng ký trung bình trong ngày';
$lang['Board_started'] = 'Diễn đàn bắt đầu';
$lang['Avatar_dir_size'] = 'Dung lượng thư mục ảnh đại diện';
$lang['Database_size'] = 'Dung lượng dữ liệu';
$lang['Gzip_compression'] ='Nén dạng Gzip';
$lang['Not_available'] = 'Không hiển thị';
$lang['ON'] = 'Mở'; // This is for GZip compression
$lang['OFF'] = 'Tắt'; 

//
// DB Utils
//
$lang['Database_Utilities'] = 'Tiện ích cho dữ liệu';
$lang['Restore'] = 'Phục hồi';
$lang['Backup'] = 'Sao lưu';
$lang['Restore_explain'] = 'Việc này sẽ phục hồi đầy đủ tất cả table cho phpbb từ tập tin SQL mà bạn đã sao lưu trước đây. Nếu máy chủ của bạn hỗ trợ, bạn có thể tải lên tập tin SQL được nén dạng gzip và Máy Chủ Host sẽ tự động giải nén và phục hồi cho bạn. <b>CẢNH BÁO</b>: Việc phục hồi này sẽ ghi đè lên tất cả dữ liệu đang có. Việc phục hồi sẽ hơi bị lâu 1 chút, vì vậy xin đừng bấm vào bất cứ 1 liên kết nào khác, hay di chuyển sang trang khác cho đến khi việc phục hồi hoàn thành. Nếu không, việc phục hồi có thể sẽ bị lỗi, dữ liệu sẽ bị sai lệch.';
$lang['Backup_explain'] = 'Tại đây bạn có thể sao lưu tất cả dữ liệu của phpBB, tất nhiên là sẽ không tính những Table mà bạn đã thêm Mods. Nhưng bạn có thể tuỳ chọn để phpbb sao lưu các Table này bằng cách thêm vào các Table cho database của phpBB trong việc sao lưu, hãy nhập vào tên của Table cần sao lưu theo, nhớ ngăn cách giữa các Table bởi dấu phẩy (,) trong hộp bên dưới. Nếu máy chủ của bạn hỗ trợ, phpbb cũng nén gzip cho bạn trước khi tải về.';

$lang['Backup_options'] = 'Tuỳ chọn sao lưu';
$lang['Start_backup'] = 'Bắt đầu sao lưu dữ liệu';
$lang['Full_backup'] = 'Sao lưu dữ liệu đầy đủ';
$lang['Structure_backup'] = 'Sao lưu chỉ cấu trúc';
$lang['Data_backup'] = 'Sao lưu chỉ dữ liệu';
$lang['Additional_tables'] = 'Thêm vào tables';
$lang['Gzip_compress'] = 'Tập tin nén dạng Gzip';
$lang['Select_file'] = 'Chọn 1 tập tin';
$lang['Start_Restore'] = 'Bắt đầu phục hồi';

$lang['Restore_success'] = 'Database vừa phục hồi thành công.<br /><br />Diễn Đàn của bạn sẽ trở thành như trước đây.';
$lang['Backup_download'] = 'Việc tải xuống của bạn sẽ bắt đầu ngay thôi, xin chờ trong giây lát.';
$lang['Backups_not_supported'] = 'Chúng tôi lấy làm tiếc, việc sao lưu hiện tại không được hỗ trợ trong hệ thống database của bạn.';

$lang['Restore_Error_uploading'] = 'Lỗi trong lúc tải lên tập tin sao lưu';
$lang['Restore_Error_filename'] = 'Có vấn đề với tên tập tin, hãy thử với 1 tên file khác';
$lang['Restore_Error_decompress'] = 'Không thể giải nén 1 tập tin gzip, hãy tải lên 1 tập tin dạng văn bản';
$lang['Restore_Error_no_file'] = 'Không có tập tin nào được tải lên';

//
// Auth pages
//
$lang['Select_a_User'] = 'Chọn một thành viên';
$lang['Select_a_Group'] = 'Chọn 1 nhóm';
$lang['Select_a_Forum'] = 'Chọn 1 diễn đàn';
$lang['Auth_Control_User'] = 'Trình điều khiển cấp quyền cho người dùng'; 
$lang['Auth_Control_Group'] = 'Trình điều khiển phân quyền cho nhóm'; 
$lang['Auth_Control_Forum'] = 'Trình diều khiển phân quyền cho forum'; 
$lang['Look_up_User'] = 'Xem thành viên'; 
$lang['Look_up_Group'] = 'Tìm nhóm'; 
$lang['Look_up_Forum'] = ' Tìm diễn đàn'; 

$lang['Group_auth_explain'] = 'Tại đây bạn có thể thay đổi quyền trong diễn đàn và trạng thái điều hành gán cho mỗi nhóm người dùng. Đừng quên thay đổi quyền trong nhóm đó mà người dùng có lẽ vẫn được phép đối với diễn đàn. Bạn sẽ được cảnh báo trong trường hợp này.';
$lang['User_auth_explain'] = 'Tại đây bạn có thể thay đổi quyền trong diễn đàn và trạng thái điều hành gán cho mỗi người dùng. Đừng quên thay đổi quyền của người dùng trong nhóm đó mà người dùng có lẽ vẫn được phép đối với diễn đàn. Bạn sẽ được cảnh báo trong trường hợp này.';
$lang['Forum_auth_explain'] = 'Tại đây bạn có thể thay đổi cấp độ quyền hạn của mỗi diễn đàn. Bạn sẽ có 2 lưa chọn để thực hiện: đơn giản hoặc nâng cao, tính năng nâng cao điều khiển thao tác tốt hơn cho diễn đàn. Nhớ rằng thay đổi cấp độ quyền hạn của diễn đàn sẽ ảnh hưởng tới người dùng.';

$lang['Simple_mode'] = 'Mã đơn giản';
$lang['Advanced_mode'] = 'Mã mở rộng';
$lang['Moderator_status'] = 'Trạng thái điều hành';

$lang['Allowed_Access'] = 'Cho phép truy cập';
$lang['Disallowed_Access'] = 'Từ chối truy cập';
$lang['Is_Moderator'] = 'Là người điều hành';
$lang['Not_Moderator'] = 'Không là người điều hành';

$lang['Conflict_warning'] = 'Cảnh báo xung đột cấp phép';
$lang['Conflict_access_userauth'] = 'Thành viên này vừa truy cập vào diễn đàn thông qua nhóm thành viên. Có lẽ bạn cần đổi phân quyền cho nhóm hoặc di chuyển thành viên này ra khỏi nhóm  để ngăn cản hoàn toàn quyền truy cập của họ. Quyền được phép cho nhóm (liên quan với diễn đàn) được lưu ý bên dưới.';
$lang['Conflict_mod_userauth'] = 'Thành viên này vẫn có quyền điều hành diễn đàn này thông qua nhóm thành viên. Có lẽ bạn cần đổi phân quyền cho nhóm hoặc di chuyển thành viên này ra khỏi nhóm  để ngăn cản hoàn toàn quyền điều hành của họ. Quyền được phép cho nhóm (liên quan với diễn đàn) được lưu ý bên dưới.';

$lang['Conflict_access_groupauth'] = 'Thành viên sau đây (hoặc những thành viên) vẫn có quyền truy cập đến diễn đàn này thông qua thiết lập cấp quyền cho thành viên của họ. Có lẽ bạn cần thay đổi quyền người dùng để ngăn cản hoàn toàn quyền truy cập của họ. Các quyền của người dùng (liên quan đến diễn đàn) được lưu ý bên dưới.';
$lang['Conflict_mod_groupauth'] = 'Thành viên sau đây (hoặc những thành viên) vẫn có quyền điều hành diễn đàn này thông qua thiết lập cấp quyền cho thành viên của họ. Có lẽ bạn cần thay đổi quyền người dùng để ngăn cản hoàn toàn quyền đều hành của họ. Các quyền của người dùng (liên quan đến diễn đàn) được lưu ý bên dưới.';

$lang['Public'] = 'Công cộng';
$lang['Private'] = 'Cá nhân';
$lang['Registered'] = 'Đăng ký';
$lang['Administrators'] = 'Quản Trị Viên';
$lang['Hidden'] = 'Ẩn đi';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'Tất cả';
$lang['Forum_REG'] = 'Đăng ký';
$lang['Forum_PRIVATE'] = 'Cá nhân';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Xem';
$lang['Read'] = 'Đọc';
$lang['Post'] = 'Gửi bài';
$lang['Reply'] = 'Trả lời';
$lang['Edit'] =  'Sửa chữa';
$lang['Delete'] =  'Xoá';
$lang['Sticky'] = 'Ưu tiên';
$lang['Announce'] = 'Thông báo'; 
$lang['Vote'] = 'Bầu chọn';
$lang['Pollcreate'] = 'Tạo bầu chọn';

$lang['Permissions'] = 'Xét quyền';
$lang['Simple_Permission'] = 'Xét quyền đơn giản';

$lang['User_Level'] = 'Cấp độ người dùng'; 
$lang['Auth_User'] = 'Người dùng';
$lang['Auth_Admin'] = 'Người Quản Trị';
$lang['Group_memberships'] = 'Nhóm thành viên';
$lang['Usergroup_members'] = 'Nhóm này có các thành viên sau';

$lang['Forum_auth_updated'] = 'Cập nhật cấp phép trong diễn đàn';
$lang['User_auth_updated'] = 'Cập nhật cấp phép người dùng';
$lang['Group_auth_updated'] = 'Cập nhật cấp phép cho nhóm';

$lang['Auth_updated'] = 'Việc phân quyền vừa được cập nhật';
$lang['Click_return_userauth'] = 'Nhấn %sVào Đây%s để trở về trang Phân Quyền Thành Viên';
$lang['Click_return_groupauth'] = 'Nhấn %sVào Đây%s để trở về trang Phân Quyền Nhóm';
$lang['Click_return_forumauth'] = 'Nhấn %sVào Đây%s để trở về trang Phân Quyền trong Forum';


//
// Banning
//
$lang['Ban_control'] = 'Điều khiển việc Ngăn Cấm';
$lang['Ban_explain'] = 'Tại đây bạn có thể điều khiển viêc cấm cửa thành viên. Bạn có thể hoàn tất việc này bằng cách ngăn cấm hoặc là : người dùng cụ thể hoặc là tên của người dùng hoặc dãy địa chỉ IP hoặc tên của Host. Những phương pháp này ngăn cản 1 người dùng tiếp cận (xem) trang chủ (INDEX) của diễn đàn. Để ngăn cản người dùng đăng ký với 1 tên khác, bạn cũng có thể cấm 1 địa chỉ email. Hãy lưu ý rằng cấm 1 địa chỉ email sẽ không ngăn cản người dùng đó đăng nhập hoặc gửi bài trong diễn đàn của bạn. Bạn nên dùng cách thứ nhất trong 2 phương thức để hoàn tất việc này.';
$lang['Ban_explain_warn'] = 'Hãy lưu ý rằng nhập vào dãy địa chỉ IP kết quả là tất cả địa chỉ từ số bắt đầu đến số cuối cùng trong dãy số sẽ bị cấm. Những sự thử sẽ được làm để tối giản những địa chỉ thêm vào cơ sở dữ liệu bởi việc đưa vào những dấu gộp tự động thích hợp. Nếu bạn thật sự phải nhập vào 1 dãy số, thử giữ cho nó nhỏ hoặc tốt hơn là địa chỉ rõ ràng.';

$lang['Select_username'] = 'Chọn 1 thành viên';
$lang['Select_ip'] = 'Chọn 1 địa chỉ IP';
$lang['Select_email'] = 'Chọn 1 địa chỉ Email';

$lang['Ban_username'] = 'Ngăn cấm một hay nhiều thành viên';
$lang['Ban_username_explain'] = 'Bạn có thể cấm nhiều người dùng trong một, như là sự kết hợp giữa chuột và bàn phím trên máy tính và trình duyệt của bạn';

$lang['Ban_IP'] = 'Ngăn cấm 1 hay nhiều địa chị IP';
$lang['IP_hostname'] = 'Địa chỉ IP hoặc tên Host';
$lang['Ban_IP_explain'] = 'Để chỉ rõ nhiều địa chỉ IP hoặc tên Host khác nhau, ngăn cách chúng bởi dấu phẩy. Để định rõ 1 dãy của địa chỉ IP, ngăn cách số bắt đầu và kết thúc bằng dấu gạch ngang (-); để chỉ rõ 1 dấu gộp, dùng dấu hoa thị (*).';

$lang['Ban_email'] = 'Ngăn cấm 1 hay nhiều địa chỉ email';
$lang['Ban_email_explain'] = 'Để định rõ nhiều đỉa email, ngăn cách chúng bởi dấu phẩy. Để chỉ rõ 1 nhóm tên, dùng dấu * VD như *@hotmail.com';

$lang['Unban_username'] = 'Huỷ bỏ lệnh cấm cho những thành viên bị ngăn cấm';
$lang['Unban_username_explain'] = 'Bạn có thể huỷ bỏ lệnh cấm nhiều người dùng trong một, như là sự kết hợp giữa chuột và bàn phím trên máy tính và trình duyệt của bạn';

$lang['Unban_IP'] = 'Huỷ bỏ lệnh cấm một hay nhiều địa chỉ IP';
$lang['Unban_IP_explain'] = 'Bạn có thể huỷ bỏ lệnh cấm nhiều địa chỉ IP trong một, như là sự kết hợp giữa chuột và bàn phím trên máy tính và trình duyệt của bạn';

$lang['Unban_email'] = 'Huỷ bỏ lệnh cấm một hay nhiều địa chỉ email';
$lang['Unban_email_explain'] = 'Bạn có thể huỷ bỏ lệnh cấm nhiều địa chỉ email trong một, như là sự kết hợp giữa chuột và bàn phím trên máy tính và trình duyệt của bạn';

$lang['No_banned_users'] = 'Không cấm tên';
$lang['No_banned_ip'] = 'Không cấm địa chỉ IP';
$lang['No_banned_email'] = 'Không cấm địa chỉ email';
$lang['Ban_update_sucessful'] = 'Danh sách cấm vừa cập nhật thành công';
$lang['Click_return_banadmin'] = 'Nhấn %sVào Đây%s để trở về Trình Điều Khiển Ngăn Cấm';

//
// Configuration
//
$lang['General_Config'] = 'Cấu hình diễn đàn';
$lang['Config_explain'] = 'Mẫu bên dưới cho phép bạn thiết lập tất cả các tuỳ chọn chung cho diễn đàn. Về người dùng và cấu hình cho diễn đàn, hãy dùng các liên kết bên trái.';

$lang['Click_return_config'] = 'Nhấn %svào đây%s để trở về trang Cấu Hình Chung';

$lang['General_settings'] = 'Thiết Lập Tổng Quát Diễn Đàn';
$lang['Server_name'] = 'Tên Miền';
$lang['Server_name_explain'] = 'Tên Miền (domain name) nơi đặt diễn đàn này';
$lang['Script_path'] = 'Đường dẫn cho PHPBB';
$lang['Script_path_explain'] = 'Đường dẫn nơi mà phpBB2 được cài đặt trong tên miền này';
$lang['Server_port'] = 'Cổng Máy Chủ';
$lang['Server_port_explain'] = 'Cổng của máy chủ đang mở, thường là 80. Chỉ thay đổi khi cổng này khác';
$lang['Site_name'] = 'Tên Diễn Đàn';
$lang['Site_desc'] = 'Mô Tả';
$lang['Board_disable'] = 'Đóng cửa Diễn Đàn';
$lang['Board_disable_explain'] = 'Điều này sẽ không cho thành viên truy cập. Đừng thoát ra ngoài khi bạn chọn đóng cửa diễn đàn, bởi vì có thể bạn cũng không thể đăng nhập trở lại được!';
$lang['Acct_activation'] = 'Cho Hiệu Lực Tài Khoản';
$lang['Acc_None'] = 'Không'; // These three entries are the type of activation
$lang['Acc_User'] = 'Người Dùng';
$lang['Acc_Admin'] = 'Admin';

$lang['Abilities_settings'] = 'Người dùng và thiết lập Cơ Bản Diễn Đàn';
$lang['Max_poll_options'] = 'Số tối đa của bầu chọn';
$lang['Flood_Interval'] = 'Khoảng thời gian gửi bài';
$lang['Flood_Interval_explain'] = 'Số giây thành viên phải chờ giữa 2 lần gửi'; 
$lang['Board_email_form'] = 'Thành viên gửi Email trong Diễn Đàn';
$lang['Board_email_form_explain'] = 'Thành viên có thể gửi email cho nhau thông qua diễn đàn';
$lang['Topics_per_page'] = 'Chủ đề trong 1 trang';
$lang['Posts_per_page'] = 'Số bài trong 1 trang';
$lang['Hot_threshold'] = 'Số bài ưa thích';
$lang['Default_style'] = 'Giao diện mặc định';
$lang['Override_style'] = 'Bỏ qua giao diện người dùng';
$lang['Override_style_explain'] = 'Thay thế tuỳ chọn của người dùng bằng kiểu mặc định';
$lang['Default_language'] = 'Ngôn ngữ mặc định';
$lang['Date_format'] = 'Định dạng ngày';
$lang['System_timezone'] = 'Giờ hệ thống';
$lang['Enable_gzip'] = 'Cho hiệu lực dạng nén GZip';
$lang['Enable_prune'] = 'Cho hiệu lực loại bỏ trong Forum';
$lang['Allow_HTML'] = 'Cho phép HTML';
$lang['Allow_BBCode'] = 'Cho phép BBCode';
$lang['Allowed_tags'] = 'Cho phép thẻ HTML';
$lang['Allowed_tags_explain'] = 'Ngăn cách thẻ bởi dấu phẩy (,)';
$lang['Allow_smilies'] = 'Cho phép hình vui';
$lang['Smilies_path'] = 'Đường dẫn nơi lưu Smilies';
$lang['Smilies_path_explain'] = 'Đường dẫn sau thư mục phpBB của bạn, VD: images/smiles';
$lang['Allow_sig'] = 'Cho phép dùng chữ ký';
$lang['Max_sig_length'] = 'Chiều dài tối đa của chữ ký';
$lang['Max_sig_length_explain'] = 'Số ký tự tối đa mà người dùng được phép sử dụng cho chữ ký';
$lang['Allow_name_change'] = 'Cho phép người dùng thay đổi';

$lang['Avatar_settings'] = 'Thiết lập Avatars';
$lang['Allow_local'] = 'Cho phép dùng avatars';
$lang['Allow_remote'] = 'Cho dùng avatars bên ngoài';
$lang['Allow_remote_explain'] = 'Dùng Avatars liên kết từ 1 nguồn bên ngoài';
$lang['Allow_upload'] = 'Cho phép tải avatar lên';
$lang['Max_filesize'] = 'Kích thước tối đa của Avatars';
$lang['Max_filesize_explain'] = 'Cho việc tải lên avatar';
$lang['Max_avatar_size'] = 'Độ phân giải tối đa của Avatar';
$lang['Max_avatar_size_explain'] = '(Cao x Rộng pixels)';
$lang['Avatar_storage_path'] = 'Đường dẫn nơi lưu Avatars';
$lang['Avatar_storage_path_explain'] = 'Đường dẫn sau thư mục phpBB của bạn, VD: images/avatars';
$lang['Avatar_gallery_path'] = 'Đường dẫn Avatar';
$lang['Avatar_gallery_path_explain'] = 'Đường dẫn sau thư mục phpBB của bạn, VD: images/avatars/gallery';

$lang['COPPA_settings'] = 'Thiết lập COPPA';
$lang['COPPA_fax'] = 'Số Fax COPPA';
$lang['COPPA_mail'] = 'Địa chỉ danh sách thư COPPA';
$lang['COPPA_mail_explain'] = 'Đây là địa chỉ danh sách thư sẽ được thiết lập như là người gửi trong mẫu đăng ký COPPA';

$lang['Email_settings'] = 'Thiết lập Email';
$lang['Admin_email'] = 'Địa chỉ Email của Admin';
$lang['Email_sig'] = 'Chữ ký cho Email';
$lang['Email_sig_explain'] = 'Chữ ký này sẽ gửi kèm trong tất cả Email mà Forum gửi đi';
$lang['Use_SMTP'] = 'Dùng máy chủ SMTP cho email';
$lang['Use_SMTP_explain'] = 'Chọn <b>Có</b> nếu bạn muốn gửi email thông qua 1 máy chủ SMTP thay vì dùng hàm <b>Sendmail</b>';
$lang['SMTP_server'] = 'Địa chỉ máy chủ SMTP';
$lang['SMTP_username'] = 'Tên người dùng SMTP';
$lang['SMTP_username_explain'] = 'Chỉ nhập tên nếu máy chủ SMTP của bạn yêu cầu chứng thực';
$lang['SMTP_password'] = 'Mật khẩu SMTP';
$lang['SMTP_password_explain'] = 'Chỉ nhập mật khẩu nếu máy chủ SMTP của bạn yêu cầu chứng thực';

$lang['Disable_privmsg'] = 'Tin nhắn riêng';
$lang['Inbox_limits'] = 'Tin tối đa trong hộp tin đến';
$lang['Sentbox_limits'] = 'Tin tối đa trong hộp tin đã gửi';
$lang['Savebox_limits'] = 'Tin tối đa trong hộp tin lưu';

$lang['Cookie_settings'] = 'Thiết lập Cookie'; 
$lang['Cookie_settings_explain'] = 'Những chi tiết này được định nghĩa để cookies gửi đến trình duyệt của người dùng. Trong hầu hết các trường hợp, bạn chỉ cần sử dụng giá trị mặc định mà chúng tôi đưa ra cho thiết lập cookie là đủ. Nhưng nếu bạn cần thay đổi chúng thì nên cẩn thận, bởi vì nếu thiết lập sai - sẽ làm cho người dùng không thể đăng nhập';
$lang['Cookie_domain'] = 'Cookie domain';
$lang['Cookie_name'] = 'Tên Cookie';
$lang['Cookie_path'] = 'Đường dẫn Cookie';
$lang['Cookie_secure'] = 'Bảo mật Cookie';
$lang['Cookie_secure_explain'] = 'Nếu máy chủ chạy bằng SSL (với địa chỉ web bắt đầu bằng <b>https://</b>), thiết lập là Mở, nếu không hãy để nó Tắt';
$lang['Session_length'] = 'Khoảng thời gian Session [ giây ]';


// Visual Confirmation
$lang['Visual_confirm'] = 'Cho hiển thị mã xác nhận';
$lang['Visual_confirm_explain'] = 'Yêu cầu người dùng nhập vào 1 mã được định rõ bởi những hình khi đăng ký.';

//
// Forum Management
//
$lang['Forum_admin'] = 'Quản lý diễn đàn';
$lang['Forum_admin_explain'] = 'Từ bảng này bạn có thể thêm, xoá, sửa hoặc sắp xếp và đồng bộ hoá lại chủ đề và diễn đàn';
$lang['Edit_forum'] = 'Sửa điễn đàn';
$lang['Create_forum'] = 'Tạo một diễn đàn mới';
$lang['Create_category'] = 'Tạo một phân loại (chủ đề) mới';
$lang['Remove'] = 'Loại bỏ';
$lang['Action'] = 'Hành động';
$lang['Update_order'] = 'Sắp xếp cập nhật';
$lang['Config_updated'] = 'Thiết lập cấu hình cho diễn đàn đã được cập nhật thành công';
$lang['Edit'] = 'Sửa chữa';
$lang['Delete'] = 'Xoá';
$lang['Move_up'] = 'Chuyển lên';
$lang['Move_down'] = 'Chuyển xuống';
$lang['Resync'] = 'Đồng bộ lại';
$lang['No_mode'] = 'Không có kiểu thiết lập';
$lang['Forum_edit_delete_explain'] = 'Mẫu bên dưới sẽ cho phép bạn tuỳ biến tất cả các tuỳ chọn của diễn đàn. Cho người dùng và cấu hình diễn đàn hãy dùng các liên kết bên trái';

$lang['Move_contents'] = 'Di chuyển tất cả nội dung';
$lang['Forum_delete'] = 'Xoá diễn đàn';
$lang['Forum_delete_explain'] = 'Mẫu bên dưới sẽ cho phép bạn xoá 1 diễn đàn (hoặc chuyên mục diễn đàn) và quyết định nơi bạn muốn đặt tất cả chủ đề (hoặc diễn đàn) chứa trong đó.';

$lang['Status_locked'] = 'Khoá';
$lang['Status_unlocked'] = 'Mở khoá';
$lang['Forum_settings'] = 'Thiết lập tổng quát diễn đàn';
$lang['Forum_name'] = 'Tên diễn đàn';
$lang['Forum_desc'] = 'Mô tả';
$lang['Forum_status'] = 'Trạng thái diễn đàn';
$lang['Forum_pruning'] = 'Tự động loại bỏ';

$lang['prune_freq'] = 'Kiểm tra chủ đề mỗi';
$lang['prune_days'] = 'Xoá chủ đề này nếu không có bài mới trong';
$lang['Set_prune_data'] = 'Bạn vừa mở chức năng tự động loại bỏ cho diễn đàn, nhưng bạn không xác lập ngày thực hiện. Hãy quay lại và nhập ngày vào.';

$lang['Move_and_Delete'] = 'Di chuyển và xoá';

$lang['Delete_all_posts'] = 'Xoá tất cả bài gửi';
$lang['Nowhere_to_move'] = 'Không có điểm đến để di chuyển';

$lang['Edit_Category'] = 'Sửa loại diễn đàn';
$lang['Edit_Category_explain'] = 'Dùng mẫu này để sửa đổi tên 1 loại diễn đàn.';

$lang['Forums_updated'] = 'Thông tin diễn đàn và loại diễn đàn vừa được cập nhật thành công';

$lang['Must_delete_forums'] = 'Bạn cần xoá tất cả các diễn đàn trước khi bạn có thể xoá loại diễn đàn này';

$lang['Click_return_forumadmin'] = 'Nhấn %sVào Đây%s để trở về trang <b>Quản Lý Diễn Đàn</b>';


//
// Smiley Management
//
$lang['smiley_title'] = 'Biên tập hình vui';
$lang['smile_desc'] = 'Tại trang này bạn có thể thêm, xoá và sửa các ký tự hoặc hình vui nhộn mà người dùng có thể dùng để gửi trong bài và tin nhắn.';

$lang['smiley_config'] = 'Cấu hình hình vui';
$lang['smiley_code'] = 'Mã hình vui';
$lang['smiley_url'] = 'Tập tin ảnh của hình vui';
$lang['smiley_emot'] = 'Ký tự vui nhộn';
$lang['smile_add'] = 'Thêm hình vui nhộn';
$lang['Smile'] = 'Hình vui';
$lang['Emotion'] = 'Ký tự vui';

$lang['Select_pak'] = 'Chọn tập tin (.pak)';
$lang['replace_existing'] = 'Thay thế hình vui đã có';
$lang['keep_existing'] = 'Giữ hình vui đang có';
$lang['smiley_import_inst'] = 'Bạn cần giải nén tập tin hình vui và tải lên tất cả các hình vui đến thư mục hình vui nhộn thích hợp cho cài đặt của bạn. Sau đó chọn thông tin chính xác trong mẫu này để nhập vào tập tin smiley.';
$lang['smiley_import'] = 'Nhập tập tin hình vui';
$lang['choose_smile_pak'] = 'Chọn tập tin (.pak) hình vui';
$lang['import'] = 'Nhập hình vui';
$lang['smile_conflicts'] = 'Nên làm gì trong trường hợp gặp xung đột';
$lang['del_existing_smileys'] = 'Xoá hình vui hiện tại trước khi nhập vào';
$lang['import_smile_pack'] = 'Nhập gói tập tin hình vui';
$lang['export_smile_pack'] = 'Tạo gói tập tin hình vui';
$lang['export_smiles'] = 'Để tạo 1 gói tập tin hình vui từ các hình vui đã cài đặt, nhấn %svào đây%s để tải xuống gói tập tin hình vui (.pak). Tên tập tin thích hợp này hãy giữ đúng phần mở rộng là .pak.  Rồi thì tạo 1 tập tin nén Zip chứa tất cả những tập tin hình vui của bạn cộng với tập tin cấu hình .pak này.';

$lang['smiley_add_success'] = 'Hình vui đã thêm thành công';
$lang['smiley_edit_success'] = 'Hình vui đã cập nhật thành công';
$lang['smiley_import_success'] = 'Tập tin hình vui đã nhập vào thành công!';
$lang['smiley_del_success'] = 'Hình vui đã xoá thành công';
$lang['Click_return_smileadmin'] = 'Nhấn %sVào Đây%s để trở về trang <b>quản lý hình vui</b>';


//
// User Management
//
$lang['User_admin'] = 'Quản Lý Thành Viên';
$lang['User_admin_explain'] = 'Tại đây bạn có thể thay đổi thông tin của thành viên và tuỳ chọn khác. Để sửa quyền của thành viên, hãy dùng chức năng Thành Viên và Phân Quyền Nhóm hệ thống.';

$lang['Look_up_user'] = 'Xem thành viên';

$lang['Admin_user_fail'] = 'Không thể cập nhật hồ sơ thành viên.';
$lang['Admin_user_updated'] = 'Hồ sơ người dùng đã cập nhật thành công.';
$lang['Click_return_useradmin'] = 'Nhấn %sVào Đây%s để trở về trang Quản Lý thành viên';

$lang['User_delete'] = 'Xoá thành viên này?';
$lang['User_delete_explain'] = 'Nhấn vào đây để xoá thành viên này';
$lang['User_deleted'] = 'Đã xoá thành viên thành công.';

$lang['User_status'] = 'Người dùng đang hiệu lực';
$lang['User_allowpm'] = 'Có thể gửi tin nhắn riêng';
$lang['User_allowavatar'] = 'Có thể dùng avatar';

$lang['Admin_avatar_explain'] = 'Tại đây bạn có thể xem và xoá Avatar của thành viên.';

$lang['User_special'] = 'Vùng đặc biệt chỉ dành cho Admin';
$lang['User_special_explain'] = 'Những vùng này thành viên không thể chỉnh sửa.  Here you can set their status and other options that are not given to users.';

//
// Group Management
//
$lang['Group_administration'] = 'Quản Lý Nhóm';
$lang['Group_admin_explain'] = 'Từ bảng này bạn có thể quản lý tất cả nhóm trong diễn đàn. Bạn có thể xoá, tạo mới và sửa nhóm đã có. Bạn có thể chọn người điều hành, mở/đóng trạng thái nhóm và thiết lập tên nhóm cùng mô tả';
$lang['Error_updating_groups'] = 'Đã có 1 lỗi xảy ra khi cập nhật nhóm';
$lang['Updated_group'] = 'Thông tin nhóm đã cập nhật thành công';
$lang['Added_new_group'] = 'Nhóm mới đã được tạo thành công';
$lang['Deleted_group'] = 'Đã xoá nhóm thành công';
$lang['New_group'] = 'Tạo một nhóm mới';
$lang['Edit_group'] = 'Sửa chữa nhóm';
$lang['group_name'] = 'Tên nhóm';
$lang['group_description'] = 'Mô tả nhóm';
$lang['group_moderator'] = 'Điều hành nhóm';
$lang['group_status'] = 'Trạng thái nhóm';
$lang['group_open'] = 'Nhóm mở';
$lang['group_closed'] = 'Nhóm đóng';
$lang['group_hidden'] = 'Nhóm ẩn';
$lang['group_delete'] = 'Xoá nhóm';
$lang['group_delete_check'] = 'Xoá nhóm này';
$lang['submit_group_changes'] = 'Chấp nhận thay đổi';
$lang['reset_group_changes'] = 'Xác lập lại thay đổi';
$lang['No_group_name'] = 'Bạn phải định rõ 1 tên cho nhóm này';
$lang['No_group_moderator'] = 'Bạn phải định rõ 1 người điều hành cho nhóm này';
$lang['No_group_mode'] = 'Bạn phải định rõ kiểu nhóm, mở hoặc đóng';
$lang['No_group_action'] = 'Không có hành động nào được chỉ rõ';
$lang['delete_group_moderator'] = 'Xoá người điều hành nhóm cũ?';
$lang['delete_moderator_explain'] = 'Nếu bạn thay đổi người điều hành nhóm, đánh dấu hộp chọn để xoá người điều hành cũ từ nhóm. Nếu không, đừng chọn, và người dùng sẽ trở thành thành viên bình thường của nhóm.';
$lang['Click_return_groupsadmin'] = 'Nhấn %svào đây%s để trở về trang Quản Lý Nhóm.';
$lang['Select_group'] = 'Chọn nhóm';
$lang['Look_up_group'] = 'Tìm nhóm';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Lượt bớt trong diễn đàn';
$lang['Forum_Prune_explain'] = 'Việc này sẽ xoá bớt các chủ đề không có bài gửi mới trong số ngày bạn chọn. Nếu bạn không nhập vào 1 số ngày thì tất cả những chủ đề sẽ bị xoá. Hành động này không xoá những chủ đề có tạo mục bình chọn đang dùng và cũng không xoá các bài dưới dạng thông báo. Bạn cần xoá những bài này bằng cách thủ công từng bài một.';
$lang['Do_Prune'] = 'Giảm bớt';
$lang['All_Forums'] = 'Tất cả diễn đàn';
$lang['Prune_topics_not_posted'] = 'Loại bớt chủ đề mà không có bài gửi trong nhiều ngày';
$lang['Topics_pruned'] = 'Giảm bớt chủ đề';
$lang['Posts_pruned'] = 'Giảm bớt bài';
$lang['Prune_success'] = 'Việc giảm bớt trong diễn đàn vừa thực hiện thành công';


//
// Word censor
//
$lang['Words_title'] = 'Kiểm duyệt từ';
$lang['Words_explain'] = 'Từ bảng điều khiển này bạn có thể thêm, sửa, và di chuyển từ sẽ được tự động kiểm duyệt trong diễn đàn. Ngoài ra những người sẽ không được phép đăng ký với tên chứ đựng những từ này. Dấu gộp (*) được chấp nhận trong vùng nhập từ. Ví dụ như, *test* sẽ tìm thoả de-test-able, test* sẽ tìm thoả testing, *test sẽ tìm thoả detest.';
$lang['Word'] = 'Từ';
$lang['Edit_word_censor'] = 'Biên soạn kiểm duyệt từ';
$lang['Replacement'] = 'Thay thế bằng từ';
$lang['Add_new_word'] = 'Thêm từ mới';
$lang['Update_word'] = 'Cập nhật kiểm duyệt từ';

$lang['Must_enter_word'] = 'Bạn phải nhập vào 1 từ để thay thế';
$lang['No_word_selected'] = 'Không có chọn từ để sửa chữa';

$lang['Word_updated'] = 'Kiểm duyệt từ đã chọn vừa cập nhật thành công';
$lang['Word_added'] = 'Từ kiểm duyệt vừa thêm vào thành công';
$lang['Word_removed'] = 'Từ kiểm duyệt đã chọn vừa di chuyển thành công';

$lang['Click_return_wordadmin'] = 'Nhấn %svào đây%s để trở về trang <b>Quản Lý Kiểm Duyệt Từ</b>';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Tại đây bạn có thể gửi 1 email hoặc là cho tất cả thành viên, hoặc là tất cả thành viên trong 1 nhóm. Để làm điều này, 1 email sẽ được gửi đến các địa chỉ email, với 1 thư cùng nội dung gửi tới tất cả người nhận. Nếu nhóm thành viên hoặc thành viên đông, hãy kiên nhẫn chờ sau khi đã nhấn nút gửi thư và đừng nhấn nút <b>ngừng</b> nữa chừng. Đây là điều bình thường để 1 email gửi đến 1 danh sách thư tín sẽ hơi lâu 1 chút và bạn sẽ được thông báo khi việc gửi thư hoàn tất';
$lang['Compose'] = 'Soạn thư'; 

$lang['Recipients'] = 'Người nhận thư'; 
$lang['All_users'] = 'Tất cả thành viên';

$lang['Email_successfull'] = 'Thư của bạn vừa được gửi xong';
$lang['Click_return_massemail'] = 'Nhấn %svào đây%s để trở về trang <b>gửi thư cho thành viên</b>';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Quản Lý Cấp Bậc';
$lang['Ranks_explain'] = 'Dùng mẫu này bạn có thể thêm, sửa, xem và xoá cấp bậc. Bạn có thể tuỳ ý tạo cấp bậc để áp dụng cho thành viên thông qua trang quản lý khả năng thành viên';

$lang['Add_new_rank'] = 'Thêm cấp bậc mới';

$lang['Rank_title'] = 'Tiêu đề cấp bậc';
$lang['Rank_special'] = 'Xác lập như cấp bậc đăc biệt';
$lang['Rank_minimum'] = 'Bài gửi ít nhất';
$lang['Rank_maximum'] = 'Bài gửi nhiều nhất';
$lang['Rank_image'] = 'Hình cấp bậc (liên quan với đường dẫn của PHPBB2)';
$lang['Rank_image_explain'] = 'Dùng hình nhỏ này để kết hợp với cấp bậc';

$lang['Must_select_rank'] = 'Bạn phải chọn 1 cấp bậc';
$lang['No_assigned_rank'] = 'Không có chỉ định cấp bậc đặc biệt';

$lang['Rank_updated'] = 'Cấp bậc vừa cập nhật thành công';
$lang['Rank_added'] = 'Cấp bậc vừa thêm vào thành công';
$lang['Rank_removed'] = 'Cấp bậc vừa xoá thành công';
$lang['No_update_ranks'] = 'Cấp bậc vừa xoá thành công. Tuy nhiên, tài khoản người dùng sử dụng cho cấp bậc này không được cập nhật. Bạn cần xác lập lại cấp bậc trên tài khoản này';

$lang['Click_return_rankadmin'] = 'Nhấn %svào đây%s để trở về trang <b>Quản Lý Cấp Bậc</b>';

//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Điều khiển cấm người dùng';
$lang['Disallow_explain'] = 'Tại đây bạn có thể quản lý tên sẽ không được phép dùng. Tên không cho phép bạn có thể dùng ký tự dấu gộp là *. Hãy lưu ý rằng bạn không được phép dùng bất cứ tên nào trong các tên của thành viên đã đăng ký trong diễn đàn. Nếu muốn, bạn cần phải xoá tên thành viên đó trước, rồi thực hiện việc thêm tên không cho phép.';

$lang['Delete_disallow'] = 'Xoá';
$lang['Delete_disallow_title'] = 'Loại bỏ 1 tên không cho phép';
$lang['Delete_disallow_explain'] = 'Bạn có thể loại bỏ 1 tên không cho phép bằng cách chọn tên từ danh sách này và nhấn nút <b>Xoá</b>';

$lang['Add_disallow'] = 'Thêm mới';
$lang['Add_disallow_title'] = 'Thêm vào 1 tên không cho phép';
$lang['Add_disallow_explain'] = 'Bạn có thể không cho phép 1 tên bằng cách sử dụng dấu ký tự gộp * để cấm không cho phép dùng tên có liên hệ với tên đó. VD: cấm tên admin, bạn có thể dùng admin*, hoặc *admin.';

$lang['No_disallowed'] = 'Không có tên không cho phép';

$lang['Disallowed_deleted'] = 'Tên không cho phép vừa loại bỏ thành công';
$lang['Disallow_successful'] = 'Tên không cho phép vừa được thêm thành công';
$lang['Disallowed_already'] = 'Tên không cho phép bạn nhập vào không thể dùng. Tên này đã có trong danh sách, tồn tại trong danh sách từ kiểm duyệt, hoặc nó là tên của 1 thành viên đã đăng ký.';

$lang['Click_return_disallowadmin'] = 'Nhấn %svào đây%s để trở về trang <b>Quản Lý Tên Không Cho Phép</b>';

//
// Styles Admin
//
$lang['Styles_admin'] = 'Quản lý giao diện';
$lang['Styles_explain'] = 'Sử dụng phương tiện này bạn có thể thêm, di chuyển và quản lý giao diện (mẫu và đề tài) sẳn có cho người dùng';
$lang['Styles_addnew_explain'] = 'Trong danh sách là tất cả các giao diện trong diễn đàn. Một vài giao diện có thể chưa đưuọc cài đặt vào cơ sở dữ liệu. Để cài đặt 1 giao diện, đơn giản là nhấn vào nút cài đặt bên cạnh mỗi giao diện đó.';

$lang['Select_template'] = 'Chọn 1 giao diện';

$lang['Style'] = 'Kiểu dáng';
$lang['Template'] = 'Mẫu';
$lang['Install'] = 'Cài đặt';
$lang['Download'] = 'Tải xuống';

$lang['Edit_theme'] = 'Sửa  giao diện';
$lang['Edit_theme_explain'] = 'Trong mẫu bên dưới bạn có thể hiệu chỉnh thiết lập cho đề tài (giao diện) đã chọn';

$lang['Create_theme'] = 'Tạo đề tài';
$lang['Create_theme_explain'] = 'Dùng mẫu bên dưới để tạo mới 1 đề tài cho 1 mẫu đã chọn. Khi nhập vào 1 màu (bạn cần phải sử dụng ký hiệu hệ 16) bạn không được thêm ký tự # vào đầu mã màu, VD: CCCCCC là đúng, #CCCCCC là sai';

$lang['Export_themes'] = 'Xuất đề tài';
$lang['Export_explain'] = 'Trong bảng này bạn có thể xuất dữ liệu đề tài cho 1 mẫu đã chọn. Chọn mẫu từ danh sách bên dưới và script sẽ tạo tập tin cấu hình đề tài và thử lưu đến thư mục mẫu (template) đã chọn. Nếu tập tin không lưu được, sẽ đưa ra tuỳ chọn cho phép bạn tải xuống. Để cho Script thực hiện lệnh lưu tập tin bạn phải CHMOD 777 cho phép ghi đối với thư mục mẫu (template) đã chọn. Để có thêm thông tin về điều này hãy xem hướng dẫn người dùng sử dụng phpBB 2.';

$lang['Theme_installed'] = 'Đề tài đã chọn vừa cài đặt thành công';
$lang['Style_removed'] = 'Giao diện đã chọn vừa được xoá khỏi database. Để xoá hoàn toàn giao diện này khỏi hệ thống bạn phải kết hợp với xoá thư mục mẫu templates trên host.';
$lang['Theme_info_saved'] = 'Thông tin đề tài cho mẫu đã chọn vừa được lưu. Bạn nên CHMOD tập tin theme_info.cfg ngay, chỉ cho phép đọc (trong thư mục mẫu template thích hợp)';
$lang['Theme_updated'] = 'Đề tài đã chọn vừa được cập nhật. Bạn nên xuất ngay thiết lập đề tài mới';
$lang['Theme_created'] = 'Đề tài đã tạo. Bạn nên xuất ngay tập tin cấu hình đề tài để giữ ở 1 nơi an toàn, hoặc để sử dụng ở nơi khác';

$lang['Confirm_delete_style'] = 'Bạn có chắc là muốn xoá giao diện này không?';

$lang['Download_theme_cfg'] = 'Việc xuất ra không thể ghi tập tin thông tin đề tài. Nhấn vào nút bên dưới để tải tập tin xuống bằng trình duyệt. 1 lần tải xuống bạn có thể chuyển nó tới thư mục chứa tập tin mẫu giao diện. Rồi thì bạn có thể đóng gói (ZIP) tập tin để cung cấp cho mọi người sử dụng, hoặc dùng ở 1 host khác nếu bạn thích';
$lang['No_themes'] = 'Mẫu giao diện bạn chọn không có đề tài kèm theo nó. Để tạo một đề tài mới, nhấn vào liên kết <b>tạo mới</b> ở bên trái bảng';
$lang['No_template_dir'] = 'Không thể mở thư mục mẫu giao diện. Điều này xảy ra có lẽ do máy chủ Web không cho phép đọc, hoặc thư mục không tồn tại';
$lang['Cannot_remove_style'] = 'Bạn không thể xoá giao diện đã chọn khi nó là giao diện mặc định của diễn đàn. Hãy thay đổi giao diện mặc định và thử lại.';
$lang['Style_exists'] = 'Tên giao diện được chọn đã có rồi, hãy quay lại và chọn một tên khác đi.';

$lang['Click_return_styleadmin'] = 'Nhấn %svào đây%s để trở về trang <b>Quản lý giao diện</b>';

$lang['Theme_settings'] = 'Thiết lập giao diện';
$lang['Theme_element'] = 'Phần tử giao diện';
$lang['Simple_name'] = 'Tên đơn giản';
$lang['Value'] = 'Giá trị';
$lang['Save_Settings'] = 'Lưu thiết lập';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Background_image'] = 'Hình nền';
$lang['Background_color'] = 'Màu nền';
$lang['Theme_name'] = 'Tên giao diện';
$lang['Link_color'] = 'Màu liên kết';
$lang['Text_color'] = 'Màu chữ';
$lang['VLink_color'] = 'Màu liên kết đã viếng';
$lang['ALink_color'] = 'Màu liên kết hiện tại';
$lang['HLink_color'] = 'Màu liên kết khi chuột rê đến';
$lang['Tr_color1'] = 'Table Row Colour 1';
$lang['Tr_color2'] = 'Table Row Colour 2';
$lang['Tr_color3'] = 'Table Row Colour 3';
$lang['Tr_class1'] = 'Table Row Class 1';
$lang['Tr_class2'] = 'Table Row Class 2';
$lang['Tr_class3'] = 'Table Row Class 3';
$lang['Th_color1'] = 'Table Header Colour 1';
$lang['Th_color2'] = 'Table Header Colour 2';
$lang['Th_color3'] = 'Table Header Colour 3';
$lang['Th_class1'] = 'Table Header Class 1';
$lang['Th_class2'] = 'Table Header Class 2';
$lang['Th_class3'] = 'Table Header Class 3';
$lang['Td_color1'] = 'Table Cell Colour 1';
$lang['Td_color2'] = 'Table Cell Colour 2';
$lang['Td_color3'] = 'Table Cell Colour 3';
$lang['Td_class1'] = 'Table Cell Class 1';
$lang['Td_class2'] = 'Table Cell Class 2';
$lang['Td_class3'] = 'Table Cell Class 3';
$lang['fontface1'] = 'Font Face 1';
$lang['fontface2'] = 'Font Face 2';
$lang['fontface3'] = 'Font Face 3';
$lang['fontsize1'] = 'Font Size 1';
$lang['fontsize2'] = 'Font Size 2';
$lang['fontsize3'] = 'Font Size 3';
$lang['fontcolor1'] = 'Font Colour 1';
$lang['fontcolor2'] = 'Font Colour 2';
$lang['fontcolor3'] = 'Font Colour 3';
$lang['span_class1'] = 'Span Class 1';
$lang['span_class2'] = 'Span Class 2';
$lang['span_class3'] = 'Span Class 3';
$lang['img_poll_size'] = 'Polling kích thước hình [px]';
$lang['img_pm_size'] = 'Trạng thái kích thước tin nhắn [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Chào mừng bạn cài đặt phpBB 2';
$lang['Initial_config'] = 'Cấu Hình Căn Bản';
$lang['DB_config'] = 'Cấu hình Database';
$lang['Admin_config'] = 'Cấu hình Admin';
$lang['continue_upgrade'] = 'Nếu bạn muốn dùng 1 tập tin config trên máy PC của mình, hãy chọn nút \'Tiếp Tục Nâng Cấp\' bên dưới để sang bước nâng cấp. Hãy đợi tải lên tập tin config cho đến khi việc nâng cấp hoàn thành.';
$lang['upgrade_submit'] = 'Tiếp Tục Nâng Cấp';

$lang['Installer_Error'] = 'Một lỗi đã xảy ra trong khi cài đặt';
$lang['Previous_Install'] = 'Một phiên bản cài đặt đã được tìm thấy';
$lang['Install_db_error'] = 'Một lỗi đã xảy ra khi cố gắng cập nhật database';

$lang['Re_install'] = 'Phiên bản cài đặt trước vẫn đang hiệu lực.<br /><br />Nếu bạn mốun cài đặt lại phpBB 2, bạn nên nhấn vào nút <b>Có</b> bên dưới. Hãy cẩn thận, việc này sẽ phá hỏng tất cả dữ liệu hiện có và không thể phục hồi! Tên và Mật Khẩu của người Điều Hành Forum dùng để đăng nhập vào Forum sẽ được tạo lại sau khi cài đặt lại và không có thiết lập nào được giữ lại.<br /><br />Hãy suy nghĩ cho cẩn thận trước khi nhấn vào nút <b>Có</b>!';

$lang['Inst_Step_0'] = 'Cám ơn bạn đã chọn phpBB 2. Để hoàn thành việc cài đặt này, hãy nhập vào các thông số chi tiết bên dưới. Hãy nhớ rằng tên của Database phải được tạo trước, phpbb2 không thể làm việc này cho bạn. Nếu bạn cài đặt vào 1 database dùng ODBC, VD: MS Access bạn nên tạo trước 1 DSN trước khi thực hiện bước cài đặt tiếp theo.';

$lang['Start_Install'] = 'Bắt đầu cài đặt';
$lang['Finish_Install'] = 'Kết thúc cài đặt';

$lang['Default_lang'] = 'Ngôn ngữ Mặc Định';
$lang['DB_Host'] = 'Tên máy chủ Database';
$lang['DB_Name'] = 'Tên của Database';
$lang['DB_Username'] = 'Tên người dùng Database';
$lang['DB_Password'] = 'Mật khẩu vào Database';
$lang['Database'] = 'Database của bạn';
$lang['Install_lang'] = 'Chọn ngôn ngữ cài đặt';
$lang['dbms'] = 'Loại Database';
$lang['Table_Prefix'] = 'Prefix cho tables trong database';
$lang['Admin_Username'] = 'Tên Administrator';
$lang['Admin_Password'] = 'Mật khẩu Administrator';
$lang['Admin_Password_confirm'] = 'Xác nhận mật khẩu Administrator';

$lang['Inst_Step_2'] = 'Tên của Người Điều Hành Forum vừa được tạo. Đến đây coi như việc cài đặt của bạn cơ bản đã xong. Hãy sang bước kế tiếp để thực hiện việc cấu hình cài đặt. Bạn phải chắc rằng đã kiểm tra cấu hình chung và các thông tin cần thay đổi. Cám ơn bạn đã chọn phpBB2.';

$lang['Unwriteable_config'] = 'Tập tin config của bạn không thể ghi lúc này. 1 bản copy của tập tin config sẽ được tải xuống máy computer của bạn khi bạn nhấn vào nút bên dưới. Bạn nên tải tập tin này lên thư mục chính của forum phpBB2. Khi thực hiện xong, bạn cần đăng nhập vào diễn đàn với tên đăng nhập và password đã chọn lúc cài đặt. Sau đó bạn tìm liên kết <b>Trang Quản Lý Của Người Điều Hành</b> ở cuối trang của diễn đàn (liên kết chỉ xuất hiện sau khi bạn đã đăng nhập vào với tài khoản Admin) để tiến hành thiết lập các thông số cho diễn đàn. Cám ơn bạn đã sử dụng phpBB2.';
$lang['Download_config'] = 'Cấu hình tải xuống';

$lang['ftp_choose'] = 'Chọn phương thức cài đặt';
$lang['ftp_option'] = '<br />Nếu bạn được phép dùng FTP, bạn có thể dùng tuỳ chọn đầu tiên, tải tập tin config.php của phpbb lên nơi cài đặt phpBB thông qua FTP. Hoặc tốt nhất, bạn hãy CHMOD 666 cho file config.php trước khi cài đặt phpBB, trình cài đặt sẽ tự động lưu thông tin cấu hình database vào tập tin config.php';
$lang['ftp_instructs'] = 'Bạn chọn gửi file tự động thông qua FTP nơi cài đặt ppBB 2. Hãy nhập vào thông tin bên dưới để thuận tiện cho tiến trình này. Lưu ý rằng đường dẫn nên là đường dẫn chính xác đến thư mục cài đặt phpBB2.';
$lang['ftp_info'] = 'Nhập thông tin FTP của bạn';
$lang['Attempt_ftp'] = 'Cố gắng tải tập tin config bằng FTP lên host';
$lang['Send_file'] = 'Chỉ gửi tập tin config cho tôi và tôi sẽ tải lên sau';
$lang['ftp_path'] = 'Đường dẫn FTP đến phpBB 2';
$lang['ftp_username'] = 'Tên người dùng FTP';
$lang['ftp_password'] = 'Mật khẩu đăng nhập FTP';
$lang['Transfer_config'] = 'Bắt đầu truyền tải';
$lang['NoFTP_config'] = 'Việc tải tập tin config thông qua FTP lên Host của bạn thất bại. Hãy tải xuống tập tin Config và tải nó lên lại thông qua FTP sau.';

$lang['Install'] = 'Cài đặt mới';
$lang['Upgrade'] = 'Nâng cấp';


$lang['Install_Method'] = 'Chọn phương thức cài đặt';

$lang['Install_No_Ext'] = 'Trên máy chủ của bạn, PHP được cấu hình không hỗ trợ loại database mà bạn đã chọn';

$lang['Install_No_PCRE'] = 'phpBB2 yêu cầu Perl-Compatible Regular Expressions Module cho PHP trong cấu hình PHP của bạn không hỗ trợ!';

//
// Version Check
//
$lang['Version_up_to_date'] = 'Your installation is up to date, no updates are available for your version of phpBB2x.';
$lang['Version_not_up_to_date'] = 'Your installation does <b>not</b> seem to be up to date. Updates are available for your version of phpBB2x, please visit <a href="http://www.phpbb2x.com/downloads.php" target="_new">http://www.phpbb2x.com/downloads.php</a> to obtain the latest version.';
$lang['Latest_version_info'] = 'The latest available version is <b>phpBB2x %s</b>.';
$lang['Current_version_info'] = 'You are running <b>phpBB2x %s</b>.';
$lang['Connect_socket_error'] = 'Unable to open connection to phpBB2x Server, reported error is:<br />%s';
$lang['Socket_functions_disabled'] = 'Unable to use socket functions.';
$lang['Mailing_list_subscribe_reminder'] = 'For the latest information on updates to phpBB2x, why not <a href="http://www.phpbb2x.com/support/" target="_new">subscribe to our mailing list</a>.';
$lang['Version_information'] = '<a href="#" onclick="toggle_visibility( \'ver\' );" title="Click for more Information">Version Information</a>';
$lang['Version_of_PHP'] = 'Version of PHP';
$lang['Version_of_MySQL'] = 'Version of MySQL';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Allowed login attempts';
$lang['Max_login_attempts_explain'] = 'The number of allowed board login attempts.';
$lang['Login_reset_time'] = 'Login lock time';
$lang['Login_reset_time_explain'] = 'Time in minutes the user have to wait until he is allowed to login again after exceeding the number of allowed login attempts.';

// That's all Folks!
// -------------------------------------------------


?>