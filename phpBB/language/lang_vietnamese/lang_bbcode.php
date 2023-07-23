<?php
/***************************************************************************
 *                         lang_bbcode.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3 2001/12/18 01:53:26 psotfx Exp $
 *
 ***************************************************************************/
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
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Giới thiệu");
$faq[] = array("BBCode là gì?", "BBCode là các mã bổ sung cho HTML chỉ sử dụng trong các bài gửi trên Diễn Đàn (nếu BQT cho hiệu lực chức năng này). Dạng thức cùa BBCode cũng tương tự như các thẻ Tag của HTML nhưng dùng ký hiệu [ ] thay vì < > (xem các thí dụ dưới đây).");

$faq[] = array("--","Định dạng Text");
$faq[] = array("Tạo chữ đậm, nghiêng và gạch dưới", "<ul><li>Tạo chữ đậm bằng cách dùng thẻ <b>[b][/b]</b>, thí dụ: <br /><br /><b>[b]</b>Xin chào<b>[/b]</b><br /><br />Sẽ trở thành <b>Xin chào</b></li><li>Tạo chữ có gạch dưới bằng cách dùng thẻ <b>[u][/u]</b>, thí dụ:<br /><br /><b>[u]</b>Xin chào<b>[/u]</b><br /><br />Sẽ trở thành <u>Xin chào</u></li><li>Tạo chữ nghiêng bằng cách dùng thẻ <b>[i][/i]</b>, thí dụ:<br /><br /><b>[i]</b>Xin chào<b>[/i]</b><br /><br />Sẽ trở thành <i>Xin chào</i></li></ul>");
$faq[] = array("Thay đổi màu chữ và kích thước chữ", "<ul><li>Để xác lập màu chữ, bạn có thể dùng thẻ <b>[color=][/color]</b> với các tên màu như: red, blue, yellow... hay với mã màu như: #FFFFFF, #000000. Thí dụ: <br /><br /><b>[color=red]</b>Xin chào<b>[/color]</b><br /><br />Hay<br /><br /><b>[color=#FF0000]</b>Xin chào<b>[/color]</b><br /><br />Sẽ trở thành <span style=\"color:red\">Xin chào</span></li><li>Thay đổi kích thước chữ bằng cách dùng thẻ <b>[size=][/size]</b> với các số thể hiện giá trị tính theo pixel, từ 1 (nhỏ đến mức không nhìn thấy) đến 29 (rất lớn). Thí dụ:<br /><br /><b>[size=9]</b>Xin chào<b>[/size]</b><br /><br />Sẽ trở thành <span style=\"font-size:9px\">Xin chào</span><br /><br />Hay<br /><br /><b>[size=24]</b>Xin chào<b>[/size]</b><br /><br />Sẽ trở thành <span style=\"font-size:24px\">Xin chào</span></li></ul>");
$faq[] = array("Kết hợp các thẻ với nhau", "Thí dụ:<br /><br /><b>[size=18][color=red][b]</b>Xin chào<b>[/b][/color][/size]</b><br /><br />Sẽ trở thành <span style=\"color:red;font-size:18px\"><b>Xin chào</b></span><br /><br />Các bạn nên chú ý đến thứ tự của thẻ mở phải ngược với thẻ đóng (thẻ nào mở đầu tiên phải được đóng sau cùng và ngược lại). Thí dụ dưới đây là các thẻ không hợp lệ vì sai thứ tự:<br /><br /><b>[b][u]</b>Đây là sai<b>[/b][/u]</b>");

$faq[] = array("--","Trích dẫn và cố định chiều rộng văn bản xuất ra");
$faq[] = array("Kèm Trích dẫn vào thông điệp trả lời", "<ul><li>Bạn dùng thẻ <b>[quote=\"\"][/quote]</b> nếu cần tự động thêm dòng thông báo giữa 2 dấu &quot; khi hiển thị. Thí dụ:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>The text Mr. Blobby wrote would go here<b>[/quote]</b></li><br /><br />Khi hiển thị dòng chữ Mr. Blobby wrote: sẽ xuất hiện ngay trước phần trích dẫn.<br /><br /><li>Để đơn giản bạn có thể dùng thẻ <b>[quote][/quote]</b>, khi hiển thị chỉ có chữ Quote: được tự động chèn vào trước dòng trích dẫn.</li></ul>");
$faq[] = array("Chèn Mã nguồn hoặc cố định chiều rộng dữ liệu", "Để chèn Mã nguồn hoặc 1 đoạn văn bản nào đó cần cố định chiều rộng vào thông điệp dùng thẻ <b>[code][/code]</b>. Thí dụ:<br /><br /><b>[code]</b>echo \"This is some code\";<b>[/code]</b><br />");

$faq[] = array("--","Tạo danh sách");
$faq[] = array("Tạo danh sách không cần thứ tự", "Bạn tạo danh sách theo kiểu không cần thứ tự bằng cách dùng thẻ <b>[list][/list]</b> với các thẻ con <b>[*]</b> cho mỗi mục. Thí dụ:<br /><br /><b>[list]</b><br /><b>[*]</b>Red<br /><b>[*]</b>Blue<br /><b>[*]</b>Yellow<br /><b>[/list]</b><br /><br />Sẽ trở thành:<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul>");
$faq[] = array("Tạo danh sách có thứ tự", "Bạn tạo danh sách có đánh số thứ tự cho mỗi mục con bằng cách dùng thẻ <b>[list=1][/list]</b>, nếu muốn tạo danh sách theo thứ tự abc, bạn dùng thẻ <b>[list=a][/list]</b> với các thẻ con <b>[*]</b> cho mỗi mục. Thí dụ:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Go to the shops<br /><b>[*]</b>Buy a new computer<br /><b>[*]</b>Swear at computer when it crashes<br /><b>[/list]</b><br /><br />Sẽ trở thành:<ol type=\"1\"><li>Go to the shops</li><li>Buy a new computer</li><li>Swear at computer when it crashes</li></ol>Hay<br /><br /><b>[list=a]</b><br /><b>[*]</b>The first possible answer<br /><b>[*]</b>The second possible answer<br /><b>[*]</b>The third possible answer<br /><b>[/list]</b><br /><br />Sẽ trở thành<ol type=\"a\"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol>");

$faq[] = array("--", "Tạo liên kết");
$faq[] = array("Liên kết đến 1 trang web khác", "<ul><li>Để tạo liên kết từ 1 đoạn văn bản tới 1 địa chỉ URL bạn dùng thẻ <b>[url=][/url]</b>. Thí dụ:<br /><br /><b>[url=http://www.phpbb.com/]</b>Visit phpBB!<b>[/url]</b><br /><br />Sẽ trở thành, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Visit phpBB!</a></li><li>Đơn giản hơn, bạn có thể dùng thẻ sau:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Sẽ trở thành, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Hay khi bạn gõ địa chỉ liên kết, phpBB2 sẽ tự động chuyển thành liên kết. Thí dụ: Bạn gõ dòng www.phpbb.com vào thông điệp, khi hiển thị phpbb2 sẽ tự động chuyển thành <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.</li>");

$faq[] = array("--", "Hiển thị hình ảnh trong bài gửi");
$faq[] = array("Thêm hình ảnh vào bài gửi", "Bạn có thể chèn hình ảnh đang có trên Web vào bài gửi của bạn nếu bạn biết địa chỉ URL của ảnh bằng cách dùng thẻ <b>[img][/img]</b>. Thí dụ:<br /><br /><b>[img]</b>http://www.gigahosting.org/images/gigahosting.gif<b>[/img]</b><br /><br />Bạn có thể kết hợp với thẻ <b>[url][/url]</b> để tạo liên kết cho hình ảnh này. Thí dụ:<br /><br /><b>[url=http://www.gigahosting.org/][img]</b>http://www.gigahosting.org/images/gigahosting.gif<b>[/img][/url]</b><br /><br />Sẽ trở thành:<br /><br /><a href=\"http://www.gigahosting.org/\" target=\"_blank\"><img src=\"http://www.gigahosting.org/images/gigahosting.gif\" border=\"0\" alt=\"Hosting For Vietnamese\" /></a><br />");

$faq[] = array("--", "Vấn đề khác");
$faq[] = array("Tôi có thể thêm thẻ của chính tôi không?", "Không, Tôi e rằng không thể thêm vào trực tiếp trong phpBB 2.0. Chúng tôi đang tìm cách cung cấp thêm các thẻ BBCode trong phiên bản kế tiếp.");

//
// This ends the BBCode guide entries
//

?>