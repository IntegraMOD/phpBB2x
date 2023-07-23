<?php
/***************************************************************************
 *                         lang_bbcode.php [Basque]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
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
  
$faq[] = array("--","Sarrera");
$faq[] = array("Zer da BBCode?", "BBCode HTML-aren inplementazio berezi bat da. Foroan BBCodea erabili dezakezun ala ez administratzaileak erabakitzen du. Hortaz gain BBCode-a desgaitu dezakezu mezuak bidaltzeko formularioan. BBCode-a bera estiloz HTML-aren antzekoa da, Markak parentesi karratuetan sartzen dira, [ eta ] ez &lt; eta &gt; Eta zer eta nola ikusten den gaineko kontrol handiagoa eskeintzen du. Erabiltzen duzun txantiloiaren arabera BBCode-a era errazean gehitzeko aukera izan dezakezu mezuaren gorputzaren gaineko botoi batzuen bitartez bidalketa formularioan. Honekin ere hurrengo gida erabilgarria izan daiteke zuretzat.");

$faq[] = array("--","Testu Formatua");
$faq[] = array("Nola sortu testu lodia, italikoa eta azpimarratua", "BBCode-ak oinarrizko estiloa azkar aldatzeko markak ditu. Hurrengo moduan lortzen da hau: <ul><li>Testu bat lodi bihurtzeko hurrengo marken artean sar ezazu <b>[b][/b]</b>, adibidez: <br /><br /><b>[b]</b>Kaixo<b>[/b]</b><br /><br />honela ikusten da <b>Kaixo</b></li><li>Azpimarratzeko hau erabili: <b>[u][/u]</b>, adibidez:<br /><br /><b>[u]</b>Egunon<b>[/u]</b><br /><br />hau sortzen du: <u>Egunon</u></li><li>Testua italikan jartzeko: <b>[i][/i]</b>, adibidez.<br /><br />hau da <b>[i]</b>Zoragarri!<b>[/i]</b><br /><br />hondokoan bihurtzen da <i>Zoragarri!</i></li></ul>");
$faq[] = array("Testuaren kolorea edo tamaina nola aldatu", "Zure testuaren kolorea edo tamaina aldatzeko hurrengo markak erabili ditzakezu. Kontutan hartu emaitzaren itxura ikusteko erabiltzen den nabigatzailearen eta sistemaren arabera aldatu daitekela: <ul><li>Testuaren kolorearen aldaketa honekin bilduz lortzen da: <b>[color=][/color]</b>. Sistemak ezagutzen duen kolore izen bat jarri dezakezu (adibidez. red, blue, yellow, eta abar.) edo hirukote hexadezimala zuzenean, adibidez. #FFFFFF, #000000. Beraz, testu gorria sortzeko hau erabili zenezake:<br /><br /><b>[color=red]</b>Kaixo!<b>[/color]</b><br /><br />edo<br /><br /><b>[color=#FF0000]</b>Kaixo!<b>[/color]</b><br /><br />biek emaitza bera emango dute <span style=\"color:red\">Kaixo!</span></li><li>Testuaren tamaina aldatzea antzeko modu batean lortzen da, <b>[size=][/size]</b> erabiliz alegia. Marka hau erabilitako txantiloiaren araberakoa da, baina aholkatutako formatua testuaren tamaina pixeletan adierazten duen zenbakizko balio bat da, 1-etik hasita (hain txikia ez dagoela ikusterik) 29-ra (oso handia). Adibidez:<br /><br /><b>[size=9]</b>TXIKIA<b>[/size]</b><br /><br />normalean hau ematen du <span style=\"font-size:9px\">TXIKIA</span><br /><br />eta:<br /><br /><b>[size=24]</b>ITZELA!<b>[/size]</b><br /><br />honela ikusten da <span style=\"font-size:24px\">ITZELA!</span></li></ul>");
$faq[] = array("Formatu markak konbinatu ditzazket?", "Bai noski, adibidez atenzioa deitzeko hau idatzi zenezake:<br /><br /><b>[size=18][color=red][b]</b>BEGIRA NAZAZUE!<b>[/b][/color][/size]</b><br /><br />hau lortuko zenuen <span style=\"color:red;font-size:18px\"><b>BEGIRA NAZAZUE!</b></span><br /><br />Dena dela ez dizugu gomendatzen itxura hau duen testua erabiltzea normalean! Gogoratu ere zure esku dagoela, bidaltzailearen esku, markak behar bezala iztea. Adibidez, hurrengo hau gaizki dago:<br /><br /><b>[b][u]</b>Hau gaizki dago<b>[/b][/u]</b>");

$faq[] = array("--","Zitak eta zabalera finkodun testua");
$faq[] = array("Erantzunetan testua zitatzea", "Bi eratan zitatu dezakezu testua, erreferentziarekin edo hau gabe .<ul><li>Zita funtzioa erabiltzen baduzu foroko mezu bati erantzuteko, ikusiko duzunez testua zure mezuari eranzten zaio marka hauen artean: <b>[quote=\"\"][/quote]</b>. Metodo honek zitak pertsona bati erreferentzia eginez sortzea baimentzen dizu. Adibidez Fernando Amezketarrak idatzitako testu bat zitatzeko hau jarriko zenuke:<br /><br /><b>[quote=\"Fernando Amezketarra\"]</b>Berak esandakoa<b>[/quote]</b><br /><br />Emaitzean testuaren aurretik Fernando Amezketarra(e)k esan du agertuko zen testuaren aurretik. Gogoratu <b>beharrezkoa</b> dela izena \"\" kakotxen artean jartzea, ez dira aukerazkoak.</li><li>Bigarren metodoak zerbait itsuki zitatzea baimentzen dizu. Hau erabiltzeko testua <b>[quote][/quote]</b> marken artean sartu. Mezua ikusterakoan,testuaren aurretik besterik gabe Zita jarriko du.</li></ul>");
$faq[] = array("Kodea edo zabalera finkoko testua", "Kode zati bat bistaratu nahi baduzu, edo zabalera finkoko edozein testu, adibidez Courier letra tipoa erabiliz, zure testua <b>[code][/code]</b> marken artean sartu behar duzu, adibidez .<br /><br /><b>[code]</b>echo \"Hau kodea da\";<b>[/code]</b><br /><br /> <b>[code][/code]</b> marken artean erabilitako formatua gordetzen da gero bistaratzeko.");

$faq[] = array("--","Zerrendak sortu");
$faq[] = array("Orden gabeko zerrenda bat dortu", "BBCode-ak bi zerrenda mota onartzen ditu, ordenatua eta orden gabekoa. Funtsean HTML zerrenden berdinak dira. Ordenatu gabeko zerrendak elementuak bata bestearen ostean bistaratzen ditu bakoitzari bolatxo bat jarriz. Ordenatu gabeko zerrenda bat sortzeko <b>[list][/list]</b> erabili ezazu, eta zerrendako elementu bakoitza <b>[*]</b> erabiliz markatu ezazu. Adibidez zure gogoko koloreak zerrendatzeko hau erabili zenezake:<br /><br /><b>[list]</b><br /><b>[*]</b>Gorria<br /><b>[*]</b>Urdina<br /><b>[*]</b>Horia<br /><b>[/list]</b><br /><br />Honek hurrengo zerrenda sortuko luke:<ul><li>Gorria</li><li>Urdina</li><li>Horia</li></ul>");
$faq[] = array("Ordenatutako zerrenda bat sortu", "Beste zerrenda mota, ordenatutako zerrenda alegia, elementu bakoitzaren aurrean agertu denaren gaineko kontrola ematen dizu. Ordenatutako zerrenda bat sortzeko <b>[list=1][/list]</b> erabili zenbakidun zerrenda sortzeko edo bestela <b>[list=a][/list]</b> zerrenda alfabetikoa sortzeko. orden gabeko zerrenda bezala elementuak <b>[*]</b> erabiliz markatu. Adibidez:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Dendara joan<br /><b>[*]</b>Ordenagailu berria erosi<br /><b>[*]</b>Ordenagailua izorratzen denean biraoak bota<br /><b>[/list]</b><br /><br />Hurrengo zerrenda sortuko du:<ol type=\"1\"><li>Dendara joan</li><li>Ordenagailu berria erosi</li><li>Ordenagailua izorratzen denean biraoak bota</li></ol>Zerrenda alfabetikoa lortzeko hau erabili beharko zenuke:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Lehen erantzun posiblea<br /><b>[*]</b>Bigarren erantzun posiblea<br /><b>[*]</b>Hirugarren erantzun posiblea<br /><b>[/list]</b><br /><br />hau lortuz:<ol type=\"a\"><li>Lehen erantzun posiblea</li><li>Bigarren erantzun posiblea</li><li>Hirugarren erantzun posiblea</li></ol>");

$faq[] = array("--", "Loturak sortu");
$faq[] = array("Beste gune batetara lotu", "phpBB-ren BBCode-ak loturak edo URL-ak sortzeko aukera ezberdinak ditu.<ul><li>Lehena <b>[url=][/url]</b> marka da, = sinboloaren ostean idazten duzun edozer URL gisa arituko da. Adibidez phpBB.com helbidera lotzeko:<br /><br /><b>[url=http://www.phpbb.com/]</b>phpBB Bisitatu!<b>[/url]</b><br /><br />Honek hurrengo lotura sortzen du, <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Bisitatu!</a> lotura leiho berri batean irekitzen dela nabarituko duzu, modu honetan erabiltzailea foroan jarraitu dezake horrela nahi badu.</li><li>URL helbidea bera lotura gisa agertzea nahi baduzu, honela egin dezakezu:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Honek hurrengo lotura sortzen du, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Gainera phpBB-k <i>Lotura Magikoak</i> izeneko funtzioa du, honi esker sintaktikoki zuzena den edozein URL helbide lotura bihurtuko du marka berezirik erabiltzen ez bada ere, hasierako http:// ez da behar ere. Adibidez www.phpbb.com mezu batetan idatzita, <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> bihurtuko da mezua bistaratzerakoan.</li><li>Gauza berbera ePosta helbideekin, ePosta helbide bat esplizitoki markatu dezakezu, adibidez:<br /><br /><b>[email]</b>inor.ez@non.bait<b>[/email]</b><br /><br />hau lortzeko <a href=\"emailto:inor.ez@non.bait\">inor.ez@non.bait</a> edo besterik gabe inor.ez@non.bait idatzi zure mezuan eta automatikoki bihurtuko da bistaratzerakoan.</li></ul>BBCode marka guztiekin bezala URLs helbideak beste edozein marka artean jarri ditzakezu, adibidez <b>[img][/img]</b> (ikusi hurrengo sarrera), <b>[b][/b]</b>, eta abar. Formatu markekin bezala zure esku dago markak orden egokian ireki eta iztea, Adibidez:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /> <u>ez</u> da zuzena eta zure mezua ezabatu dezakegu, beraz argi ibili.");

$faq[] = array("--", "Mezuetan irudiak bistaratu");
$faq[] = array("Mezuei irudiak erantzi", "phpBB BBCode-ak badu marka bat mezuetan irudiak bistaratzeko. Bi puntu garratzitsu gogoratu behar dituzu marka hau erabiltzerakoan; erabiltzaile askok ez dute gustoko mezuetan irudi mordoa agertzea eta beste alde batetik bistaratzen duzun irudia dagoeneko interneten eskuragarri egon behar du (ezin da zure soilik ordenagailuko irudi bat izan, zure ordenagailuan web zerbitzari bat ez baduzu behintzat!). Une hauetan ez dago phpBB-n irudiak gordetzeko aukerarik (Hau urrengo bertsiorako egotea espero da). Irudi bat bistaratzeko irudira apuntatzen duen URL-a <b>[img][/img]</b> markekin inguratu behar duzu. Adibidez:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Goiko URL atalean azaldu bezala irudi bat <b>[url][/url]</b> marken barruan sartu dezakezu nahi baduzu, adibidez <br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />hau sortuko luke:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Bestelakoak");
$faq[] = array("Nire marka propiak gehitu ditzazket?", "Ez, Zoritxarrez phpBB 2.0-k ez du horrelakorik onartzen. Hurrengo bertsioan BBCode marka pertsonalizagarraiak eskaini ahal izatea espero dugu");

//
// This ends the BBCode guide entries
//

?>