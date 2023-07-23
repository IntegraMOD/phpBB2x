<?php
/***************************************************************************
 *                         lang_bbcode.php [Azerbaijani]
 *                            -------------------
 *   begin                : Mon Sen 9, 2002
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3 2001/12/18 01:53:26 psotfx Exp $
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
  
$faq[] = array("--","Giriş");
$faq[] = array("BBCode nədir?", "BBCode HTML-ın xüsusi bir təzahürüdür. Foruma yazdığınız ismarışlarda BBCode istifadə etmə imkanını idarəçi tə`min edir. Onlar BBCode və ya HTML-ə ayrı-ayrılıqda, ya da hər ikisinə də birdən icazə verə bilərlər. Siz bunu öz `şəxsi mə`lumat`larınız səhifəsindən də yoxlaya bilərsiniz. Orda BBcode və HTML istifadəsi barədə ayrı-ayrılıqda sual verilmişdir. Həm də ismarış göndərmə səhifəsindəki xüsusiyyətlər sayəsində istədiyiniz zaman BBCode-nu ləğv edə bilərsiniz. İsmarış lövhəsində cavab verdiyiniz hissənin altında bu sualla qarşılaşacaqsınız. BBCode HTML-ə bənzər tərzdədir, sadəcə təqlər &lt; və &gt; yerinə [ və ] arasına alınır və nəyin necə göründüyünə daha yaxşı nəzarət etmək olur. İsmarışlarınıza BBCode daxil etmək üçün ismarış lövhəsinin üzərində olan təqləri istifadə etməyiniz işi daha da asanlaşdırır (hansı təqlərin seçilməsi sizin mətnə və ifadə etmək istədiyiniz fikrə bağlıdır). Bu mövzuda aşağıdakı rəhbərdən faydalana bilərsiniz. Kiçik bir qeydlə işinizi asanlaşdırmaq istərdim, təqləri ayrı-ayrılıqda hər hansı mətn parçasının başında və sonunda yerləşdirmək sizi çaşdırmasın deyə, qalın, maili, altından xətt çəkilmiş və ya rəngli bir mətni yazmaq üçün, hətta istənilən digər funksiyanı istifadə etmək üçün əvvəlcədən həmin mətn hissəsini ayırıb (select) və istifadə etmək istədiyiniz funksiyanı ifadə edən təqə vura bilərsiniz. Bu sizə almaq istədiyiniz nəticəni tə`min edəcəkdir.");

$faq[] = array("--","Mətn formasını dəyişdirmək");
$faq[] = array("Qalın, maili və ya altından xətt çəkilmiş yazılar necə yazılır?", "BBCode mətnin əsas formasını asanlıqla dəyişdirməyə imkan verən təqlərə sahibdir. Bunu etmək üçün aşağıdakı qaydalardan istifadə edilir: <ul><li>Mətnin müəyyən bir qismini qalın hərflərlə yazmaq üçün həmin hissəni <b>[b][/b]</b> təqləri içinə alın, məs.: <br /><br /><b>[b]</b>Salam<b>[/b]</b><br /><br />yazdıqda <b>Salam</b> olaraq görünəcək. <br /><br /></li><li>Altından xətt çəkilmiş yazılar üçün <b>[u][/u]</b> təqlərini istifadə edin, məs.: <br /><br /><b>[u]</b>Sabahınız xeyir<b>[/u]</b><br /><br />yazdıqda <u>Sabahınız xeyir</u> olaraq görünəcəkdir.<br /><br /></li><li>Mətni maili yazmaq üçün isə <b>[i][/i]</b> təqlərindən istifadə edin, məs.: <br /><br />Həyat <b>[i]</b>gözəldir<b>[/i]</b><br /><br />yazdığınız halda nəticədə Həyat <i>gözəldir</i> alınacaqdır.</li></ul>");
$faq[] = array("Yazıların rəngi və ya ölçüsü necə dəyişdirilir?", "Yazıların rəng və ya ölçüsünü dəyişdirmək üçün aşağıdakı təqlərdən istifadə edə bilərsiniz. Nəticə hər istifadəçinin brauzerinin rəng xüsusiyyətinə müvafiq olur, nəzərə alın: <ul><li>Yazıların rəngi müvafiq mətn <b>[color=][/color]</b> təqləri içinə alınaraq dəyişdirilir. Bunun üçün siz ingiliscə mə`lum rəng adlarını (məs.: red, blue, yellow və s.) və ya alternativ olaraq 16 əsas say sistemində kodlanmış üç rəqəmli rəng kodunu yaza bilərsiniz (məs.: #FFFFFF, #000000). Mətni qırmızı rəngdə yazmaq istədiyiniz halda:<br /><br /><b>[color=red]</b>Salam!<b>[/color]</b><br /><br />və ya<br /><br /><b>[color=#FF0000]</b>Salam!<b>[/color]</b><br /><br /> yazsanız, eyni şəkildə görünür: <span style=\"color:red\">Salam!</span></li><br><br><li>Hərflərin ölçüsünü də oxşar şəkildə <b>[size=][/size]</b> təqlərindən istifadə edərək dəyişdirə bilərsiniz. Bu təq sizin mətnə bağlıdır. Bu rəqəm 1 ilə başlayıb (gözlə görülməyəcək qədər kiçik), ən çox 29 (çox böyük) ola bilər. Məsələn:<br /><br /><b>[size=9]</b>Kiçik<b>[/size]</b><br /><br /> nəticə: <span style=\"font-size:9px\">Kiçik</span><br /><br />digər tərəfdən:<br /><br /><b>[size=24]</b>Böyük<b>[/size]</b><br /><br />nəticə:<span style=\"font-size:24px\">Böyük</span> olur</li></ul>");
$faq[] = array("Forma təqlərini qarışdıra bilərəm?", "Bəli, məsələn diqqəti çəkmək üçün belə edə bilərsiniz:<br /><br /><b>[size=18][color=red][b]</b>DİQQƏT!<b>[/b][/color][/size]</b><br /><br />Bu yazı bu şəkildə görünür: <span style=\"color:red;font-size:18px\"><b>DİQQƏT!</b></span><br /><br />Uzun mətnləri bu şəkildə yazmamağınız məsləhətdir! Unutmayın ki, təqləri düzgün bir şəkildə bağlamağınızı tə`min etmək, mətnin müəllifi olaraq sizin öhdənizə düşür. Məsələn bu şəkildə yazmaq səhvdir: <br /><br /><b>[b][u]</b>Təqlər xətalı bağlanıb<b>[/b][/u]</b>");

$faq[] = array("--","Sitat ilə cavab və digər yazı tipi");
$faq[] = array("Sitat ilə cavab yazma", "Bir mətndən sitat almağın iki müxtəlif yolu var: qaynaq verərək və ya verməyərək.<ul><li>Bir ismarışa cavab vermək üçün `Sitat ilə cavab` funksiyasından istifadə edin, orijinal ismarışın sizin ismarışa <b>[quote=\"\"][/quote]</b> təqləri arasında daxil olduğunu görəcəksiniz. Bu üsul bir şəxsi və ya seçəcəyiniz hər hansı başqa bir yeri qaynaq verəcəkdir. Məsələn, Əli adlı bir adamın yazdığına şərh vermək üçün bu şəkildə yazmalısınız: <br /><br /><b>[quote=\"Əli\"]</b>Əlinin yazdığı yazılar...<b>[/quote]</b><br /><br />Nəticədə sitatın qarşısına avtomatik olaraq \"<b>Əli yazıb:</b>\" yazılır. Sitat gətirdiyiniz şəxsin adını dırnaq işarələri (\"...\") içinə almağı unutmayın, dırnaq işarəsi istifadə etməyiniz <b>şərtdir</b>.</li><br><br><li>İkinci üsul qaynaq vermədən sitat gətirməyiniz üçündür. Seçdiyiniz mətni <b>[quote][/quote]</b> təqləri içinə almanız kifayətdir. Mətnin qarşısında Quote: yazısını görəcəksiniz.</li></ul>");
$faq[] = array("Digər yazı tipi ilə görünüş", "Bir proqram dilində yazılmış mətn daxil etmək və ya digər yazı tipi (məs.: Courier) lazım olan hər hansı bir mətni göstərmək üçün həmin hissəni <b>[code][/code]</b> təqləri arasında yazmalısınız. Məs.: <br /><br /><b>[code]</b>\"Səni sevirəm\"<b>[/code]</b><br /><br /><b>[code][/code]</b> təqləri arasına yazılan bütün forma təqləri (məs.: [i], [b] kimi) ləğv edilir.");

$faq[] = array("--","Siyahı tərtibi");
$faq[] = array("Rəqəmsiz siyahı", "BBCode rəqəmsiz və rəqəmli olaraq iki növ siyahı dəstəkləyir. Bu siyahılar əslində HTML siyahıları ilə eynidir. Rəqəmsiz siyahı hər maddəni sətir başında yer buraxmaqla göstərir. Rəqəmsiz bir siyahı hazırlamaq üçün <b>[list][/list]</b> təqlərindən istifadə edin və hər sətirin başına <b>[*]</b> yazın. Məs. sevdiyiniz rənglərin siyahısını belə hazırlaya bilərsiniz:<br /><br /><b>[list]</b><br /><b>[*]</b>Qırmızı<br /><b>[*]</b>Mavi<br /><b>[*]</b>Sarı<br /><b>[/list]</b><br /><br />Nəticə:<ul><li>Qırmızı</li><li>Mavi</li><li>Sarı</li></ul>");
$faq[] = array("Rəqəmli siyahı", "İkinci siyahı növü olan rəqəmli siyahıda hər sətir başında rəqəmlər dayanacaqdır. Rəqəmlərə görə sıralanmış bir siyahı üçün <b>[list=1][/list]</b> yazı tipindən istifadə etməlisiniz. Alternativ olaraq əlifbaya görə sıralanmış bir siyahı üçün isə <b>[list=a][/list]</b> təqlərindən istifadə edin. Rəqəmsiz siyahıda olduğu kimi hər maddəni <b>[*]</b> ilə işarələməyiniz lazımdır, məsələn:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Yuxudan dur<br /><b>[*]</b>Əl-üzünü yu<br /><b>[*]</b>Yeməyini ye<br /><b>[/list]</b><br /><br /> yazsanız, nəticə bu şəkildə olacaq:<ol type=\"1\"><li>Yuxudan dur</li><li>Əl-üzünü yu</li><li>Yeməyini ye</li></ol>Digər tərəfdən isə əlifbaya görə sıralanmış bir siyahını bu şəkildə yazmalısınız:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Birinci gün<br /><b>[*]</b>İkinci gün<br /><b>[*]</b>Üçüncü gün<br /><b>[/list]</b><br /><br />Nəticə:<ol type=\"a\"><li>Birinci gün</li><li>İkinci gün</li><li>Üçüncü gün</li></ol>");

$faq[] = array("--", "Keçid (qısayol) tərtibi");
$faq[] = array("Ayrı bir sayta keçid göymaq", "BBCode keçid (URL) yaratmaq üçün müxtəlif üsulları dəstəkləyir:<ul><li>Birinci üsul <b>[url=][/url]</b> təqləridir. Bərabərlik işarəsinin arxasına yazılanlar keçid olaraq işləyir. Məsələn, meqa.net-ə keçid qoymaq üçün bu şəkildə yazın:<br /><br /><b>[url=http://meqa.net/]</b>meqa.net-i ziyarət edin!<b>[/url]</b><br /><br />Nəticədə bu keçidi görəcəksiniz: <a href=\"http://meqa.net/\" target=\"_blank\">meqa.net-i ziyarət edin!</a> Bu keçidi açdıqda ayrı bir pəncərə açılır. Bu halda istifadəçi forumda gəzməyə davam edə bilir.</b><br /><br /></li><li>Keçid ünvanının göstərilməsini istiyirsinizsə, bu şəkildə yaza bilərsiniz:<br /><br /><b>[url]</b>http://meqa.net/<b>[/url]</b><br /><br />Nəticədə bunu görəcəksiniz: <a href=\"http://meqa.net/\" target=\"_blank\">http://meqa.net/</a></li></b><br><br><li>phpBB əlavə <b>Sehirli keçidlər</b> deyə bir funksiyaya malikdir. Bunun sayəsində uyğun olaraq yazılan hər sayt ünvanı avtomatik olaraq keçidə çevrilir, hər hansı bir təq, hatta http:// yazmanıza ehtiyac yoxdur. Məs. www.fikrini.de yazdıqda, səhifədə avtomatik olaraq<a href=\"http://fikrini.de/\" target=\"_blank\"> www.fikrini.de</a> görünür.</li></b><br /><br /><li>Eyni funksiya e-məktub ünvanları üçün də olur. İstədiyiniz halda ünvan yazmağınız vacib deyil, məs.:<br /><br /><b>[email]</b>delfin@box.az<b>[/email]</b><br /><br />yazdıqda belə görünür: <a href=\"emailto:delfin@box.az\">delfin@box.az</a> və ya sadəcə delfin@box.az yaza bilərsiniz və ismarışınız göründükdə bu avtomatik olaraq keçidə çevrilir.</li></ul>Bütün BBCode təqləri kimi, keçid ünvanları da diğər təqlərin içinə daxil edilə bilər, məs.: <b>[img][/img]</b> (bir sonrakı maddəyə baxın), <b>[b][/b]</b>, və s.. Forma təqlərində olduğu kimi, bütün digər funksional təqlərin düzgün bir şəkildə, sıra ilə bağlanmasına nəzarət etməlisiniz. məs.:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />doğru <u>deyil</u> və hətta ismarışınızın silinməsinə səbəb ola bilər, burda diqqətli olmalısınız.");

$faq[] = array("--", "İsmarışlarda rəsm nümayişi");
$faq[] = array("İsmarışa rəsm yükləmək", "BBCode ismarışlarınıza rəsm yükləməyə imkan verir. Ondan istifadə edərkən iki əsas məsləyə diqqət etməlisiniz: 1. Bir ismarışda çox sayda rəsmin olması digər istifadəçiləri narahat edə bilər, xüsusilə, bu səhifənin yüklənməsini ləngidərsə; 2. Şəklə internetlə çıxış imkanı olmalıdır (bu rəsmin sizin kömpüterinizdə olması kafi deyildir). Hal-hazırda phpBB üzərindən rəsmi qeyd etmək imkanı yoxdur. Bir rəsmi göstərmək üçün rəsmin ünvanını <b>[img][/img]</b> təqləri içinə almalısınız. Məs.:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Əvvəlki maddədə deyildiyi kimi istəsəniz rəsmi <b>[url][/url]</b> təqləri arasında yaza bilərsiniz. Məs.:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />yazdıqda bu nəticəni verir:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"http://www.phpbb.com/images/phplogo.gif/\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Digər mövzular");
$faq[] = array("Öz təqlərimi daxil edə bilərəm?", "Xeyr, təssüf ki, phpBB 2.0-da belə bir imkan yoxdur. Bir sonrakı daha təkmilləşmiş phpBB nüsxəsində şəxsiləşdirilmiş BBCode təqlərini təqdim etməyi düşünürük.");

//
// This ends the BBCode guide entries
//

?>