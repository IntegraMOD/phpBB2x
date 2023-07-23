<?php
/***************************************************************************
 *                         lang_bbcode.php [lithuanian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3.2.2 2002/12/18 15:40:20 ProTON Exp $
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

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
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
  
$faq[] = array("--","Ávadas");
$faq[] = array("Kas yra BBKodas?", "BBKodas - tai specialus kodas labai primenantis HTML. Skirtumas tas, kad BBKodas raðomas tarp [ ir ] skliaustø, o HTML tarp &lt; ir &gt; . BBKodas suteikia papildomà apsaugà ir kontrolæ, kad á diskusijas nepatektø nereikalingas HTML kodas, kuris gali sudarkyti dizainà, struktûrà ir t.t. Globaliai BBKodà gali iðjungti/ájungti administratorius. Jeigu BBKodas ájungtas, paprasti vartotojai gali já ájungti ir iðjungti per savo nustatymus, arba tiesiog prie kiekvienos þinutës nuimdami varnelæ nuo <i>Iðjungti BBKodà ðiame praneðime</i>.");

$faq[] = array("--","Teksto formavimas");
$faq[] = array("Kaip raðyti paryðkintai, pasvirusiomis raidëmis, arba pabrauktai", "BBKodas turi þymenis, kurie leis greitai keisti pradiná teksto stiliø. Tai daroma taip: <ul><li>Norëdami paryðkinti, apskliauskite savo tekstà taip <b>[b][/b]</b>, pvz. <br /><br /><b>[b]</b>Labas<b>[/b]</b><br /><br />tada tampa <b>Labas</b></li><li>Norëdami pabraukti, apskliauskite tekstà ðitaip <b>[u][/u]</b>, pavyzdþiui:<br /><br /><b>[u]</b>Labas rytas<b>[/u]</b><br /><br />tampa <u>Labas rytas</u></li><li>Norëdami raðyti pasvirusiomis raidëmis, naudokite <b>[i][/i]</b>, pvz.<br /><br />Tai yra <b>[i]</b>puiku!<b>[/i]</b><br /><br />tokiu atveju tampa Tai yra <i>puiku!</i></li></ul>");
$faq[] = array("Kaip pakeisti teksto spalvà ar dydá", "Norëdami keisti teksto spalvà ar dydá naudokite ðiuos þymenis. Atsiminkite, kad ðie parametrai priklauso nuo vartotojo naudojamos narðyklës ir operacinës sistemos: <ul><li>Spalvos keitimui naudojami <b>[color=][/color]</b>. Galite áraðyti angliðkus spalvø pavadinimus (pvz. red, blue, yellow, ir t.t.) arba ðeðioliktainius spalvø kodus, pvz. #FFFFFF, #000000. Pavyzdþiui, apibûdinti raudonà tekstà galima taip:<br /><br /><b>[color=red]</b>Labas!<b>[/color]</b><br /><br />arba ðitaip<br /><br /><b>[color=#FF0000]</b>Labas!<b>[/color]</b><br /><br />Abiem atvejais gausite <span style=\"color:red\">Labas!</span></li><li>Teksto dydis keièiamas panaðiu bûdu, panaudojant þymená <b>[size=][/size]</b>. Ðis parametras priklauso nuo jûsø diskusijø lentos stiliaus, taèiau rekomenduojamas skaitinis formatas, kur skaièius atitinka teksto dydá pikseliais, pradedant 1 (toks maþas tekstas, kad vos áþvelgsite) iki 29 (labai didelis tekstas). Pavyzdþiui:<br /><br /><b>[size=9]</b>MAÞAS<b>[/size]</b><br /><br />tampa <span style=\"font-size:9px\">MAÞAS</span><br /><br />o pavyzdþiui:<br /><br /><b>[size=24]</b>MILÞINIÐKAS!<b>[/size]</b><br /><br />tada tampa <span style=\"font-size:24px\">MILÞINIÐKAS!</span></li></ul>");
$faq[] = array("Ar galiu kombinuoti teksto formavimo þymenis vienà su kitu?", "Taip, beabejo galite. Pavyzdþiui norëdami atkreipti kieno nors dëmesá galite paraðyti:<br /><br /><b>[size=18][color=red][b]</b>PAÞIÛRËKITE Á MANE!<b>[/b][/color][/size]</b><br /><br />tai atrodys taip <span style=\"color:red;font-size:18px\"><b>PAÞIÛRËKITE Á MANE!</b></span><br /><br />Taèiau nerekomenduojame taip raðyti viso teksto! Tai pat ásitikinkite, kad þymenys uþdaryti teisingai. Tarkim ðis pavyzdys yra neteisingas:<br /><br /><b>[b][u]</b>Taip yra blogai<b>[/b][/u]</b>");

$faq[] = array("--","Citavimas ir fiksuoto dydþio tekstas");
$faq[] = array("Teksto citavimas atsakymuose", "Yra du bûdai, kaip galima cituoti tekstà: su autoriaus vardu ir be jo.<ul><li>Kai paspaudþiate mygtukà \"Cituoti\", galite pastebëti, kad citatos tekstas apskliaudþiamas <b>[quote=\"\"][/quote]</b> þymeniu. Èia galite nurodyti citatos autoriø, ar bet kà kità, kà tik norite. Pavyzdþiui, norëdami pacituoti gabalà Jono praneðimo raðykite taip:<br /><br /><b>[quote=\"Jonas\"]</b>Jono tekstas<b>[/quote]</b><br /><br />Prieð citatà sistema automatiðkai pridës þodþius: Jonas raðo. Ásidëmëkite, kad vardà <b>turite</b> raðyti dvigubose kabutëse \"\" -- jos bûtinos.</li><li>Antruoju bûdu galite cituoti daugiau nei vieno autoriaus praneðimà. Tiesiog kiekvienà citatà apskliauskite <b>[quote][/quote]</b> þymeniu. Tokiu bûdu sistema prieðais kiekvienà citatà pridës þodá: Citata.</li></ul>");
$faq[] = array("Fiksuoto dydþio tekstas", "Jeigu jums reikia paraðyti gabalà kodo ar ðiaip koká tekstà, kuris turi bûti fiksuoto dydþio, galite naudoti <b>[code][/code]</b>, pvz.<br /><br /><b>[code]</b>echo \"Èia yra kodas\";<b>[/code]</b><br /><br />Þymuo <b>[code][/code]</b> parodo tekstà toká koks jis ir buvo áraðytas.");

$faq[] = array("--","Sàraðai");
$faq[] = array("Nesutvarkytas sàraðas", "BBKodas turi dviejø tipø sàraðus, sutvarkytus ir nesutvarkytus. Jie beveik tokie patys kaip ir jø HTML atitikmenys. Nesutvarkyto sàraðo punktai iðdëstomi vienas po kito ir kiekvienas paþymimas taðku. Tai padaroma panaudojus þymená <b>[list][/list]</b> ir kiekvienà punktà sàraðe pradedant raðyti <b>[*]</b>. Pavyzdþiui, jûsø mëgstamiausiø spalvø sàraðà galite apraðyti taip:<br /><br /><b>[list]</b><br /><b>[*]</b>Raudona<br /><b>[*]</b>Mëlyna<br /><b>[*]</b>Geltona<br /><b>[/list]</b><br /><br />Realiai praneðimas atrodys taip:<ul><li>Raudona</li><li>Mëlyna</li><li>Geltona</li></ul>");
$faq[] = array("Sutvarkytas sàraðas", "Sutvarkytuose sàraðuose galite pasirinkti kaip numeruoti punktus. <b>[list=1][/list]</b> þymi skaièiais, o <b>[list=a][/list]</b> raidëmis sunumeruotà sàraðà. Kaip ir nesutvarkytuose sàraðuose kiekvienas punktas pradedamas raðyti simboliais <b>[*]</b>. Pavyzdþiui:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Nueiti á parduotuvæ<br /><b>[*]</b>Nupirkti naujà kompiuterá<br /><b>[*]</b>Keikti kompiuterá kai jis suluð<br /><b>[/list]</b><br /><br />sugeneruos toká sàraðà:<ol type=\"1\"><li>Nueiti á parduotuvæ</li><li>Nupirkti naujà kompiuterá</li><li>Keikti kompiuterá kai jis suluð</li></ol>O ðtai pavyzdþiui toks BBKodas:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Pirmas galimas atsakymas<br /><b>[*]</b>Antras galimas atsakymas<br /><b>[*]</b>Treèias galimas atsakymas<br /><b>[/list]</b><br /><br />atrodys taip:<ol type=\"a\"><li>Pirmas galimas atsakymas</li><li>Antras galimas atsakymas</li><li>Treèias galimas atsakymas</li></ol>");

$faq[] = array("--", "Nuorodos");
$faq[] = array("Nuorodos á kità puslapá", "phpBB BBKode yra keletas bûdø kaip galima sukurti nuorodas á kitus puslapius.<ul><li>Pirmasis bûdas: naudokite þymená <b>[url=][/url]</b>; viskas kà áraðysite po = þenklo, pavirs á nuorodà. Pavyzdþiui, norëdami sukurti nuorodà á phpBB.com galite raðyti taip:<br /><br /><b>[url=http://www.phpbb.com/]</b>Aplankykite phpBB!<b>[/url]</b><br /><br />Realiai tai atrodys maþdaug taip: <a href=\"http://www.phpbb.com/\" target=\"_blank\">Aplankykite phpBB!</a> Galite pastebëti, kad puslapis atsidaro naujame lange, taigi jûs ir toliau galite narðyti diskusijose.</li><li>Jeigu jums reikia parodyti patá URL adresà papraðèiausiai raðykite taip:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Tokiu bûdu gausite: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Taip pat phpBB turi tokià galimybæ kaip <i>Automatinës nuorodos</i>, kuri kiekvienà þodá bent kiek panaðø á URL paverèia nuoroda. Pavyzdþiui, praneðime paraðius www.phpbb.com automatiðkai gausite nuorodà <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.</li><li>Tie patys dalykai galioja ir el. paðto adresams. Jûs galite naudoti arba specialø þymená:<br /><br /><b>[email]</b>niekas@adresas.lt<b>[/email]</b><br /><br />kuris automatiðkai pavirsta á  <a href=\"emailto:niekas@adresas.lt\">niekas@adresas.lt</a> arba galite tiesiog paraðyti niekas@adresas.lt ir automatiðkai gauti tà patá efektà.</li></ul>Kaip ir kitus BBKodo þymenimis, URL adresais galite apskliausti bet koká kità þymená, tokius kaip <b>[img][/img]</b>, <b>[b][/b]</b>, ir t.t. Svarbiausia, kad visi þymenys bûtø uþdaryti teisingai. Pavyzdþiui:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />uþdaryta <u>neteisingai</u>.");

$faq[] = array("--", "Paveikslëliø rodymas");
$faq[] = array("Paveikslëlio rodymas praneðime", "phpBB BBKodu galite á savo praneðimus átraukti paveikslëlius. Naudojant ðá þymená reikia atsiminti du dalykus: pirma; dauguma vartotojø nemëgsta daugybës paveikslëliø praneðimuose, ir antra; paveikslëlis turi bûti Internete (jis negali bûti jûsø kompiuteryje, nebent þinoma jûsø kompiuteris yra kartu ir Interneto serveris!). Ðiuo metu phpBB negali saugoti paveikslëliø lokaliai (ði galimybë bus sekanèioje phpBB versijoje). Norëdami parodyti paveikslëlá, turite panaudoti <b>[img][/img]</b> ir tarp jø áraðyti paveikslëlio adresà. Pavyzdþiui:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Kaip jau buvo raðyta ankðèiau, galite pridëti dar ir þymená <b>[url][/url]</b>, pvz.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />sugeneruos:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Kita");
$faq[] = array("Ar galiu naudoti savo þymenis?", "Ne, phpBB 2.0 versijoje to negalite. Taèiau phpBB Grupë stengsis tai ágyvendinti sekanèioje pagrindinëje phpBB versijoje.");

//
// This ends the BBCode guide entries
//

?>