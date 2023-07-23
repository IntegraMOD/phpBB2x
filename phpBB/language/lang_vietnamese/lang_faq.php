<?php
/***************************************************************************
 *                          lang_faq.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.4 2001/12/15 16:42:08 psotfx Exp $
 *
 *  
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
 
// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Đăng ký và Đăng nhập");
$faq[] = array("Tại sao tôi không thể đăng nhập?", "Bạn đã đăng ký chưa? Bạn phải đăng ký làm thành viên của Diễn đàn rồi thì mới có thể đăng nhập. Có thành viên không đăng nhập được vì đã bị BQT cấm vào Diễn Đàn do vi phạm nội quy (sẽ có một thông báo xuất hiện khi đăng nhập), trong trường hợp nầy bạn cần liên lạc với BQT để hỏi. Có thành viên không đăng nhập được vì không chú ý khai báo chính xác chữ hoa và chữ thường trong Tên truy cập và Mật Khẩu của mình, trong trường hợp này bạn cần xem lại account trong thư thông báo của Diễn Đàn đã gửi cho bạn sau khi dăng ký, cần chú ý phân biệt chử hoa và chử thường.");
$faq[] = array("Tại sao tôi cần phải đăng ký?", "Mọi người đều có thể xem các thông điệp trong diễn đàn này. Tuy nhiên chỉ có các thành viên đã đăng ký mới có được những quyền hạn như: gửi (nếu diễn đàn không cho phép khách tham quan được phép gửi thư), sửa, xoá, trả lời thư, thay đổi kiểu dáng màn hình... Ngoài ra còn thành viên còn được sử dụng những chức năng đặc biệt của Diễn Đàn (nếu BQT cho phép) như: Gửi tin nhắn riêng cho thành viên khác, sử dụng các ảnh thế thân (avatar), tham gia Nhóm làm việc, gửi Email cho bất cứ ai từ diễn đàn... Việc đăng ký hoàn toàn miễn phí và rất đơn giản, bạn chỉ cần khai báo đầy đủ 3 thông tin bắt buộc (có đánh dấu hoa thị) là tên họ hay biệt danh, mật khẩu, địa chỉ email), còn các thông tin khác có thể bỏ qua. Bạn phải có 1 địa chỉ email đang hoạt động để chúng tôi có thể gửi thư chấp thuận và thông báo username, password cũng như các thông báo nếu có sau này. Bạn có quyền cho phép người khác biết địa chỉ email của bạn hay không và chúng tôi bảo đảm các thông tin do bạn khai báo sẽ được bảo mật.");
$faq[] = array("Đăng nhập tự động là gì?", "Khi bạn chọn chức năng <i>Đăng nhập tự động mỗi khi truy cập</i>, Diễn Đàn sẽ luôn luôn nhớ bạn là ai khi truy cập và tự động ghi nhận thông tin về bạn mà không cần bạn bạn phải đăng nhập. Bạn không nên chọn chức năng này nếu bạn sử dụng máy tính dùng chung, Internet cafe...");
$faq[] = array("Nếu tôi không muốn ai biết khi tôi truy cập Diễn Đàn?", "Bạn hãy truy cập vào trang <i>Lý lịch</i> của bạn và cho hiệu lực mục <i>Che dấu khi đang truy cập</i>, Diễn đàn sẽ không hiển thị tên truy cập của bạn cho bất cứ ai biết ngoại trừ BQT và chính bạn.");
$faq[] = array("Tôi phải làm gì khi quên Mật khẩu?", "Không có gì phải lo lắng. Tuy chúng tôi không biết mật khẩu hiện hành của bạn nhưng chúng tôi có thể tạo lại cho bạn một mật khẩu mới gồm các từ ngẫu nhiên và thông báo cho bạn biết qua địa chỉ email đã khai báo trong lý lịch của bạn. Bạn chỉ cần bấm chuột vào mục <i>Quên mật khẩu</i> của hộp đăng nhập và chờ email trả lời.");
$faq[] = array("Tôi đã đăng ký, nhưng không thể đăng nhập!", "Đầu tiên bạn phải chắc rằng đã nhập đúng tên và mật khẩu. If they are okay then one of two things may have happened: if COPPA support is enabled and you clicked the <u>I am under 13 years old</u> link while registering then you will have to follow the instructions you received. If this is not the case then maybe your account need activating. Some boards will require all new registrations be activated, either by yourself or by the administrator before you can log on. When you registered it would have told you whether activation was required. If you were sent an email then follow the instructions; if you did not receive the email then check that your email address is valid. One reason activation is used is to reduce the possibility of <i>rogue</i> users abusing the board anonymously. If you are sure the email address you used is valid then try contacting the board administrator.");
$faq[] = array("Tôi đã đăng ký trước đây, nhưng không thể đăng nhập được nữa!", "Hầu hết các trường hợp là: bạn nhập vào tên và mật khẩu không chính xác (kiểm tra thư đầu tiên mà diễn đàn đã gửi cho bạn lúc đăng ký) hoặc bạn đã không đăng nhập vào diễn đàn khá lâu, vì vậy người điều hành đã xoá tài khoản của bạn. If it is the latter case then perhaps you did not post anything? It is usual for boards to periodically remove users who have not posted anything so as to reduce the size of the database. Try registering again and get involved in discussions.");

$faq[] = array("--","Giao diện Diễn Đàn và các Thiết Lập");
$faq[] = array("Làm thế nào để thay đổi các xác lập cá nhân?", "Tất cả các thông tin của từng thành viên đều được lưu trong cơ sở dữ liệu của Diễn đàn. Để thay đổi các thông tin cá nhân của bạn, bạn bấm chuột vào mục <i>Lý lịch</i> và thực hiện các thay đổi tuỳ ý.");
$faq[] = array("Giờ không đúng!", "Thường thì giờ hiển thị là chính xác; tuy nhiên, giờ mà bạn nhìn thấy ở diễn đàn có thể khác với múi giờ nơi bạn đang sống. Trong trường hợp này, bạn cần vào trang Hồ Sơ cá nhân của trong diễn đàn và tìm mục múi giờ để thay đổi cho phù hợp với múi giờ nơi bạn ở. VD: Bangkok-Hanoi, Sydney, . . . Bạn cũng cần ghi nhớ là thiết lập múi giờ cũng như các thiết lập khác ở diễn đàn chỉ dành cho thành viên đã đăng, nếu bạn đã đăng ký, hãy đăng nhập trước khi có thể thay đổi các thiết lập!");
$faq[] = array("Thay đổi cách hiển thị thời gian?", "Bạn có thể thay đổi cách hiển thị thời gian phù hợp với nơi bạn sinh sống (sự thay đổi nầy chỉ có tác dụng cho riêng bạn) trong trang <i>Lý lịch</i>. Bạn có thể chọn múi giờ và dạng thức ngày giờ theo các mẫu sau:");
$faq[] = array("Ngôn ngữ của tôi không có trong danh sách!", "Trong hầu hết các trường hợp là do người Quản Lý diễn đàn không cài đặt ngôn ngữ của bạn hoặc chưa được biên dịch để dùng cho diễn đàn phpBB2. Bạn hãy liên hệ với người Điều Hành của diễn đàn để anh ta cài đặt ngôn ngữ này hoặc nếu ngôn ngữ chưa được biên dịch, bạn có thể tự biên dịch lấy. Thông tin thêm về ngôn ngữ, bạn có thể tìm thấy tại trang chủ của phpBB2 (nhìn liên kết ở cuối trang này)");
$faq[] = array("Tôi có thể kèm hình ảnh đại diện theo tên truy cập không?", "Bạn có thể kèm hình ảnh đại diện theo tên truy cập của bạn nếu BQT Diễn đàn cho hiệu lực chức năng nầy, hình thế thân &quot;Avatar&quot; sẽ tự động được hiển thị bên cạnh tên bạn trong bất cứ bài viết nào gửi lên Diễn đàn. Bạn truy cập vào trang <i>Lý lịch</i> để có thể chọn ảnh cho mình từ thư viện của Diễn đàn hay lấy từ 1 website khác.");
$faq[] = array("How do I change my rank?", "In general you cannot directly change the wording of any rank (ranks appear below your username in topics and on your profile depending on the style used). Most boards use ranks to indicate the number of posts you have made and to identify certain users. For example, moderators and administrators may have a special rank. Please do not abuse the board by posting unnecessarily just to increase your rank -- you will probably find the moderator or administrator will simply lower your post count.");
$faq[] = array("Tôi có thể gửi Email trực tiếp từ Diễn Đàn không?", "Nếu BQT Diễn Đàn cho hiệu lực chức năng này, các thành viên có thể gửi email theo dạng thức Plant text cho nhau trực tiếp từ trong Diễn đàn mà không cần sử dụng tới chương trình Email nào khác. Bạn chỉ cần bấm chuột vào nút <i>Gởi email cho người nầy</i> (thường xuất hiện khi đọc thư hay khi xem lý lịch của thành viên) rồi nhập nội dung thư.");

$faq[] = array("--","Các vấn đề về gửi bài");
$faq[] = array("Làm thế nào để gửi bài viết lên Diễn Đàn?", "Rất đơn giản, bạn chỉ cần mở Diễn Đàn bạn có quyền gửi bài (tuỳ theo bạn là thành viên hay khách viếng thăm, các quyền hạn của bạn sẽ được chỉ rõ ở phần dưới trang Diễn Đàn) rồi bấm chuột vào nút gửi bài mới.");
$faq[] = array("Làm thế nào để sửa hay xoá bài gửi?", "Trừ phi bạn là người quản trị hay người điều hành, bạn chỉ có thể sửa hay xoá bài viết do chính bạn gửi lên. Khi cần sửa nội dung, bạn bấm chuột vào nút Edit trong trang bài viết đang xem (các lần sửa chữa sẽ được ghi chú vào bài viết). Khi cần xoá, bạn bấm chuột vào nút xoá (biểu tượng chữ X) trong trang đang xem, tuy nhiên bạn không thể xoá nếu bài viết đó đã có người trả lời.");
$faq[] = array("Làm thế nào để đính kèm chữ ký theo bài gửi?", "Bạn có thể xác lập mặc định cho đính kèm chữ ký theo bài gửi trong trang <i>Lý lịch</i> (chữ ký của bạn là chuỗi văn bản có số ký tự không lớn hơn quy định của Diễn Đàn). Bạn cũng có thể thay đổi việc có đính kèm chữ ký hay không khi soạn thảo bài bài gửi.");
$faq[] = array("Tôi làm thế nào để tạo mục bầu chọn?", "Tạo 1 mục bầu chọn thật dễ dàng -- khi bạn gửi 1 chủ đề mới (hoặc sửa bài đầu tiên của 1 chủ đề, nếu bạn được phép) bạn sẽ thấy mục <i>Thêm Bầu Chọn</i> bên dưới phần nhập nội dung bài. Nếu bạn không thể thấy mục này, có lẽ người điều hành không cho phép bạn tạo mục bầu chọn ở diễn đàn đó. Bạn nên nhập vào 1 tiêu đề cho mục bình chọn đó và có tối thiểu 2 tuỳ chọn -- để xác lập 1 loại tuỳ chọn cho câu hỏi bình chọn nhấn vào nút <i>Thêm Mục Bình Chọn</i>. Bạn cũng có thể xác lập 1 thời gian hiệu lực của bình chọn, 0 là không giới hạn. Cũng có giới hạn cho số tuỳ chọn, và nó được xác lập bởi người Điều Hành của Diễn Đàn");
$faq[] = array("Làm thế nào để tạo, sửa và xoá bảng bầu chọn?", "Việc tạo bảng bầu chọn rất đơn giản. Khi bạn soạn thảo một bài gửi mới, bạn có thể tạo bảng bầu chọn kèm theo bằng cách nhập đầy đủ các yêu cầu trong phần <i>Tạo bảng bầu chọn</i>. Tối thiểu một Bảng bầu chọn phải có tên và 2 mục lựa chọn, bạn cũng có thể ấn định thời gian hiệu lực của bảng bầu chọn nầy.<br>Bảng bầu chọn chỉ có thể được sửa bởi tác giả hay người quản trị và người điều hành, tuy nhiên nếu đã có người tham gia bầu chọn thì chính tác giả cũng không có quyền sửa chữa hay xoá nó.");
$faq[] = array("Tại sao tôi không thể truy cập các diễn đàn chuyên đề?", "Có một vài diễn đàn chuyên đề chỉ cho phép một số thành viên giới hạn truy cập tuỳ theo chỉ định của Người Quản Trị. Nếu muốn truy cập bạn cần liên hệ với BQT để xin cấp quyền.");
$faq[] = array("Tại sao tôi không thể bầu chọn?", "Chỉ có các thành viên chính thức mới có quyền tham gia bầu chọn.");

$faq[] = array("--","Dạng thức và định dạng bài viết");
$faq[] = array("BBCode là gì?", "BBCode là các mã đặc biệt bổ sung của HTML, cách sử dụng chúng cũng tương tự như các thẻ HTML. Ban quản trị có thể cho sử dụng hay không các mã nầy trong bài viết của bạn (sẽ có thông báo tình trạng trong trang soạn thảo). Bạn nên truy cập phần hướng dẫn chi tiết cách sử dụng BBCode trong trang soạn thảo.");
$faq[] = array("Tôi có thể sử dụng HTML?", "Vì những người phá rối sẽ có thể chèn các mã HTML vào bài viết để điều khiển máy tính người xem hay lan truyền Virus nên Người Quản Trị không cho phép sử dụng HTML trong tất cả bài gửi. Đây là 1 biện pháp bảo đảm an toàn của Diễn đàn.");
$faq[] = array("Hình vui là gì?", "Hình vui hay Emoticons là các hình biểu tượng nhỏ diển tả cảm xúc của gương mặt người, chúng tương ứng với các ký hiệu cảm xúc tạo ra từ bàn phím, ví dụ một nụ cười :) hay nét cau mày :( . Bạn có thể sử dụng các biểu tượng hình ảnh gương mặt được cung cấp sẵn trong trang soạn thảo, khi bạn bấm chuột vào biểu tượng, các ký tự tương ứng sẽ được chèn vào bài viết ngay chổ con nháy (Diễn đàn sẽ tự động chuyển chúng thành biểu tượng hình ảnh khi hiển thị).");
$faq[] = array("Tôi có thể gửi hình không?", "Hình ảnh có thể hiển thị trên bài gửi của bạn. Tuy nhiên, hiện tại diễn đàn không có chức năng tải hình lên trực tiếp trong bài viết. Thay vào đó, bạn có thể sử dụng liên kết hình đã được lưu trữ ở 1 trang web nào đó, VD: http://www.domain.com/hinh-anh.gif. Bạn không thể đưa vào 1 liên kết hình từ máy Computer của mình hoặc từ 1 trang web yêu cầu chứng thực hay ở 1 site có xác lập mật khẩu truy cập... Để hiển thị 1 hình trong bài viết bạn dùng thẻ BBCode [img]http://domain.com/hinh-anh.gif[/img] hoặc dùng mã HTML đều được (nếu người Diều Hành cho phép).");
$faq[] = array("Thế nào là Thông Báo?", "Thông báo là những bài viết có nội dung cần thông tin ưu tiên cho mọi người biết. Thông báo sẽ luôn luôn xuất hiện trên đầu mỗi trang liệt kê chủ đề của Diễn đàn bạn đang xem. Để gửi bài viết theo dạng thông báo bạn phải được Người Điều Hành cấp quyền.");
$faq[] = array("Thế nào là Chú Ý?", "Bài gửi theo dạng Chú Ý sẽ xuất hiện phía dưới bài gửi Thông Báo và chỉ trên trang liệt kê chủ đề đầu tiên của Diễn Đàn. Để gửi bài viết theo dạng nầy bạn phải được Ban quản trị cấp quyền.");
$faq[] = array("Thế nào là chủ đề bị khoá?", "Chủ đề chỉ bi khoá bởi người quản trị hay người điều hành. Mọi người không thể trả lời các chủ đề đã bị khoá và các Bảng bầu chọn nếu có trong chủ đề cũng bị vô hiệu. Chủ đề có thể bị khoá khi có quá nhiều tranh luận không cần thiết.");

$faq[] = array("--","Quyền hạn người truy cập và Nhóm");
$faq[] = array("Người quản trị làm gì?", "Người quản trị có quyền cao nhất để điều hành Diễn đàn, có thể cho hiệu lực hay vô hiệu các chức năng phục vụ của diễn đàn. Tạo, thay đổi, xoá tất cả các diễn đàn chuyên đề, các nhóm làm việc. Quản lý, cấp quyền cho các thành viên. Chỉ định những người điều hành cho các diễn đàn chuyên đề.");
$faq[] = array("Người điều hành có quyền gì?", "Người điều hành là người được BQT chỉ định trong số các thành viên thường xuyên để quản lý các diễn đàn chuyên đề. Có quyền sửa, xoá, khoá, mở khoá, di chuyển, chia tách tất cả các bài gửi hay chủ đề của diễn đàn do mình điều hành.");
$faq[] = array("Thế nào là nhóm làm việc?", "Những nhóm làm việc do người quản trị thành lập, mỗi thành viên có thể tham gia nhiều nhóm khác nhau và mỗi nhóm đều có những ấn định quyền hạn khác nhau. Mục đích của nhóm làm việc là giúp cho người quản trị có thể nhanh chóng chọn lựa những người điều hành diễn đàn chuyên đề hay gán quyền truy cập vào những diễn đàn riêng tư cho nhiều thành viên cùng lúc.");
$faq[] = array("Làm thế nào để tham gia Nhóm làm việc?", "Bạn chỉ cần bấm chuột vào mục &quot;Nhóm làm việc&quot; ở phía trên trang web của diễn đàn để xem thông tin về các nhóm đã được thành lập. Có thể có những nhóm &quot;đóng&quot; hay &quot;ẩn&quot; không tiếp nhận nhận thành viên mới. Đối với những nhóm &quot;mở&quot;, bạn có thể đăng ký tham gia bằng cách bấm chuột vào nút &quot;Tham gia nhóm&quot;. Việc đăng ký phải được sự chấp thuận của người quản trị mới có hiệu lực.");
$faq[] = array("Tôi làm thế nào để trở thành 1 Người Điều Hành Nhóm?", "Nhóm thành viên được tạo bởi người Điều Hành Diễn Đàn và đồng thời anh (chị) ta cũng chỉ định 1 người Quản Lý Nhóm. Nếu bạn cũng muốn tạo 1 nhóm, việc đầu tiên là bạn cần liên hệ với người Điều Hành Diễn Đàn, tốt nhất là gửi 1 tin nhắn yêu cầu việc này đến người Điều Hành.");

$faq[] = array("--","Tin nhắn riêng");
$faq[] = array("Tôi không thể gởi tin nhắn!", "Chỉ có các thành viên được gửi tin nhắn sau khi đăng nhập vào diễn đàn. Bạn không gửi được tin nhắn có thể vì các lý do sau: bạn chưa là thành viên, chưa đăng nhập hay chức năng gửi tin nhắn đã bị cấm (trường hợp nầy bạn cần liên hệ với BQT).");
$faq[] = array("Tôi không muốn nhận những tin nhắn vô ích!", "Trong tương lai chúng tôi sẽ thêm 1 danh sách lờ đi những tin nhắn. Hiện tại, nếu bạn vẫn nhận được những tin nhắn vô ích từ 1 thành viên nào đó torng diễn đàn, hãy thông báo điều này cho người Điều Hành Diễn Đàn -- để chúng tôi có biện pháp mạnh hơn (như cảnh cáo) để ngăn cản thành viên đó gửi tin nhắn cho người khác.");
$faq[] = array("Tôi làm gì khi nhận được tin nhắn hay email phá rối từ Diễn Đàn?", "Bạn phải lập tức thông báo ngay cho Ban quản trị biết để ngăn cấm kẻ phá rối.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Ai Phát Hành phpBB 2");
$faq[] = array("Ai đã viết diễn đàn này?", "Software này (nguyên bản từ www.phpbb.com) được sản xuất, phát hành và giữ bản quyền bởi <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Được tạo bởi GNU General Public License và có thể được phân phối miễn phí; vào trang chủ của phpBB để biết thêm.");
$faq[] = array("Tại sao không có chức năng tôi mong muốn?", "Software này được viết và cấp phép cho phpBB Group. Nếu bạn muốn thêm chức năng cho phpBB hãy vào trang www.phpbb.com để biết thông tin. Xin đừng gửi yêu cầu chức năng mới trong diễn đàn của phpbb.com. Hãy đọc kỹ những bài chỉ dẫn trong diễn đàn, có khi yêu cầu của bạn đã có người khác gửi lên rồi và chúng tôi đang xem xét.");
$faq[] = array("Ai tôi cần liên hệ nếu có sự vi phạm về vấn đề pháp lý liên quan tới diễn đàn này?", "Bạn nên liên hệ với người Điều Hành của diễn đàn này. Nếu bạn không tìm thấy, bạn nên liên hệ với người quản lý forum trước. Nếu vẫn không nhận được trả lời, bạn cần liên hệ với chủ sở hữu tên miền (domain) nơi cài đặt diễn đàn. Nếu vẫn không liên hệ được, hãy gửi 1 email ngắn gọn đến www.phpbb.com.");

//
// This ends the FAQ entries
//

?>