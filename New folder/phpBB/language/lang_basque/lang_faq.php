<?php
/***************************************************************************
 *                          lang_faq.php [Basque]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.4.2.2 2002/08/04 17:21:22 dougk_ff7 Exp $
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

/* CONTRIBUTORS:
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
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
 
  
$faq[] = array("--","Izena ematea eta Saio hasiera");
$faq[] = array("Zergatik ezin dut saioa hasi?", "Izena eman al duzu? Benetan, izena eman behar duzu saioa hasi ahal izateko. Foroan sarrera debekatu dizute (mezu bat agertuko zen horrela bada)? Horrela bada webmasterrarekin edo foroko administratzailearekin kontaktuan jarri zergaitia jakiteko. Izena eman baduzu, sarrera ez dizute debekatu eta hala ere ezin bazara sartu, egiaztatu eta berregiaztatu zure erabiltzaile izena eta pasahitza. Gehienetan hau izaten da arazoa, hau ere ez bada Foroko administratzailearekin jarri kontaktuan, ezarpenak gaizki izan ditzazkete.");
$faq[] = array("Zergatik eman behar dut izena?", "Agian ez duzu behar, foroaren administratzailearen esku dago mezuak bidaltzeko izena eman behar duzun erabakitzea. hala ere izena emateak bisitariek ez dituzten baliabide batzuetara sarbidea emango dizu, besteak beste ikono pertsonalizatuak, mezularitza pribatua, erabiltzaileen arteko eposta, erabiltzaile talde suskripzioa, eta abar. Izena emateak unetxo bat besterik ez darama, beraz egitea gomendatuta dago.");
$faq[] = array("Zergatik hasten dit saioa automatikoki?", "Ez baduzu <i>Bisita bakoitzean saioa hasi</i> markatzen saioa hasterakoan, foroak konektatuta mantenduko dizu unean bertan soilik. Honek beste edonork zure kontua erabiltzea ekiditzen du. Saioa automatikoki hasteko aipatutako aukera markatu, hau ez da batere komentigarria ordenadorea jende gehiagok erabiltzen badu, adibidez: liburutegian, internet kafean, unibertsitatean, eta abar");
faq[] = array("Nola ekidin dezaket konektaturiko erabiltzaile zerrendetan agertzea?", "Zure profilean <i>Nire konekzio egoera ezkutatu</i>, aukera hau aktibatzean administratzailearen eta moderatzailearen zerrendan soilik agertuko zara, beste guztientzat erabiltzaile ezkutua izango zara.");
$faq[] = array("Pasahitza galdu dut!", "Lasai zure pasahitza ezin bada berrezkuratu desaktibatu edo aldatu dezakezu.Hau egiteko izenpetze horrialdera itzuli eta <u>Pasahitza ahaztu zait</u>n klikatu, jarraitu bertako oharrak eta laister sartuka zara kontura.");
$faq[] = array("Orain dela asko izena eman nuen baina orain ezin dut sartu", "Arrazoi posibleak ondorengoak dira: Pasahitz edo erabiltzaile izen okerrak sartu dituzu(Egiaztatu izenpetzean bidaltzen zaizun mezua). Litekena da administratzaileak zure kontua ezabatzea hau sarritan gertatzen da, ez baduzu mezurik idatzi denbora askoan administratzaileak ezabatu ditzazke erabiltzaile batzu data basea ez betetzeko. Hala bada berriro izena eman eta parte hartu:)");


$faq[] = array("--","Konfiguraketa eta erabiltzaile lehentasunak");
$faq[] = array("Nola aldatu dezaket nire konfiguraketa?", "Zure datu eta konfiguraketa denak(Izenpetua bazaude) gure data basean artxibatuak daude.Aldatzeko <u>Profila</u>n klikatu, normalean horrialdearen gaikaldean aurkitzen da.");
$faq[] = array("Ordutegia forotan ez da zuzena!", "Ordutegia zuzena da litekena da beste ordutegi esparru bateko orduak ikustea zuk. Horrela bada zure profilean zure ordutegi esparrua definitu behar duzu. (Adibidez, London, Paris, New York, Sydney, etb…). Hau aldatuta ordutegi zuzena agertuko zaizu. Ez baduzu oraidik izena eman, bada garaia egiteko.");
$faq[] = array("Nire profilean ordutegi esparrua aldatu arren ordutegia okerra da", "Ziur bazaude adierazitako ordutegi esparrua zuzena dela baliteke okerraren arrazoia herrialde batzuk sartzen dituzten udako ordutegiak izatea.");
$faq[] = array("Nire hizkuntza ez dago zerrendan!", "Hau gertatu liteke administratzaileak ez duelako paketea foro honetan instalatu edo inork ez duelako itzulpen bat egin: (Horrela bada itzulpena egiteko erreparorik ez izan gero jende askok eskertuko bait dizu, phpBB Group websiten aurkituko duzu behar duzun informazioa");
$faq[] = array("Nola jarri dezaket irudi bat nire erabiltzaile izenaren azpian?", "Bi irudi mota daude zure erabiltzaile izenaren azpian lehenengoa RANK da, foroan idatzi dituzun mezuekin uztarturik doana (Normalean izar edo blokeak dira). Bigarrena AVATAR da grafiko bakar eta pertsonala dena, administratzailea da erabakitzen duena erabili ditzakezun ala ez. Aukera horrek existitzen ez badu administratzailearekin jarri kontaktuan eta eskatu aukera hori indarrean jartzea :)");
$faq[] = array("Nola aldatu dezaket nire RANKa?", "Ezin duzu zure RANKa zuzenean aldatu hau zuzenki erlazionatua bait dago zuk idatzi duzun mezu kopuruarekin, zure moderatzaile edo administratzaile egoerakin, edo RANK bereziekin. Mesedez ez ezazu alperrikako mezurik bidali zure RANKa hobetzeko.");
$faq[] = array("E-mail linkean klikatzean izenpetzeko eskatzen dit", "Formulario bidez email bat bidali ahal izateko erabiltzaile bati izena emanda egon behar duzu, SPAM edo mezu iraingarriak ekiditeko da hau.");


$faq[] = array("--","Mezu argitarapena");
$faq[] = array("Nola argitaratu dezaket mezu bat foroan?", "Erraza da, foroko kide bezala izenpetu (Izenpetze linkean klikatuaz, orokorrean horrialdearen goikaldean)behar duzu. Gero  <i>Mezu berria bidali<i>n klikatu eta hor era errezean argitaratuko duzu mezu bat :)");
$faq[] = array("Nola editatu edo ezabatu dezaket mezu bat?", "Ez bazara administratzaile edo moderatzaile zuk bidalitako mezuak ezabatu ditzakez soilik. Editatzeko <i>editatu</i>n klikatu behar duzu. Norbaitek erantzun badio zure mezuari zure mezuan texto bat agertuko da hau azalduaz, ez duzu jakingo testu hau moderatzaile edo administratzaileak editatu dizun mezua.");
$faq[] = array("Nola gehitu diezaioket sinadura mezu bati?", "Zure mezuan sinadura bat sartu ahal izateko lehendabizi bat sortu behar duzu, hau zure profila eraldatuaz egiten da. Behin hau egindakoan, mezua bidaltzen duzunean <i>Sinadura gehitu</i> klikatu behar duzu. Zure profilean aktibatzen baduz ure mezu guztiak joango dira sinatuta.");
$faq[] = array("Nola sortu inkesta bat?", "Inkesta sortzea erreza da, gai berri bat sartzean <i>Inkesta sortu</i> klikatu. Inkestaren datuak sartu izenburu eta aukerak adibidez eta partehartzaile kopurua mugatu dezakezu (o infinito da)");
$faq[] = array("Nola editatu edo ezabatu inkesta bat?", "Inkesta sortu duena zu bazara mezuarekin batera editatu dezakezu, baina hau inkestak oraindik erantzunik ez duen kasuetan bakarrik da posible, bestela administratzaile edo moderatzaileak soilik dute editatu edo ezabatzeko aukera.");
$faq[] = array("Zergatik ezin dut inkestetan bozkatu?", "Izenpeturiko kideek soilik bozkatu dezakete(Emaitza tranpeatuak ekiditeko).Izenpetua egon arren ezin baduzu bozkatu inkesta jakin horretan bozkatzeko baimendua ez egotea gerta liteke :(.");


$faq[] = array("--","Mezu formateo eta gai erak");
$faq[] = array("Zer da BBCode kodea?", "HTM ren inplementazio berezi bat da, BBCode erabiltzeko era administratzaileak erabakitzen du, HTML ren oso antzekoa da, etketak kortxete artean doaz eta informazio gehiago lortzeko BBCode ikusi dezakezu, lotura mezu bat argitaratzen duzun bakoitzean agertz da.");
$faq[] = array("HTML erabili al dezaket?", "Administratzaileak aukera hori indarrean duen ala ez eta zein HTML etiketa indarrean daudenaren arabera dago hori. Badaude HTML etiketak mezuaren azpiegituran triskantzak egingo lituzketenak.");
$faq[] = array("Zer dira Smilieak?", "Smilieak  emozioak agertzeko erabiltzen diren grafikoak dira zeinak kode bat sartuaz agertzen diren. Adibidez:  :) poza isladatzen du,  :(  : Tristura isladatzen du. Smiliey zerrenda osoa mezu bat bidaltzean agertzen da.");
$faq[] = array("Irudiak poztaz bidali al ditzaket?", "Irudiak mezuari gehitzeko, mezua idazteko momentuan sartu behar dira. Ezin daiteke bilaketa, pozta serbitzu edo antzeko irudirik sartu (Yahoo, Hotmail...).");
$faq[] = array("Zer dira iragarkiak?", "Erabiltzaileentzat garrantzizko informazioa duten oharrak dira iragarkiak.");
$faq[] = array("Zer dira gai garrantzitzuak?", "Gai garrantzitzuak iragarkien azpian agertzen dira eta lehenengo horrialdean soilik, irakurri behar zenduken oso iformazio garrantzitzua da :)");
$faq[] = array("Zer dira gai blokeatu edo itxiak?", "Gai hauei buruz ezin da mezu gehiago bidali eta moderatzaile edo administratzailea da hau erabakitzen duena.");


$faq[] = array("--","Erabiltzaile eta talde mailak");
$faq[] = array("Zer dira administratzaileak?", "Administratzaileak foro osoaren gain kontrol handia duen jendea da, baimenak, moderatzaileak eta era guztietako konfigurazioak kontrolatu ditzakete.");
$faq[] = array("Zer dira moderatzaileak?", "Moderatzaileak foroak editatu, ezabatu, itxi edo irekitzeko boterea duen jendea da. Administratzaileak izendatzen ditu eta honek baino botere gutxiago dute.");
$faq[] = array("Zer dira erabiltzaile taldeak?", "Erabiltzaile taldeak foroko administratzaileak erabiltzaileak taldekatzeko dituen eretako bat da. Erabiltzaile bat talde ezberdinetan egon daiteke. Hau fororako baimen selektibo bat emateko egiten da. (Adibidez talde oso bat moderatzaile bihurtu).");
$faq[] = array("Nola egin naiteke erabiltzaile talde bateko partaide?", "Erabiltzaile talde hutsunean klikatu eta zure sarrera eskatu, onartua bazara email bat jasoko duzu. Talde guztiak ez dira irekiak.");
$faq[] = array("Nola bihurtu naiteke erabiltzaile talde bateko moderatzaile?", "Administratzaileak soilik eman dezake baimen hori, berarekin harremanetan jarri :)");


$faq[] = array("--","Mezularitza pribatua");
$faq[] = array("Ezin dut mezu pribaturik bidali!", "Hiru arrazoi posible daude:Ez zaude izenpetua, Administratzaileak mezu pribatu sistema indargabetu du edo zure kasuan indargabetu du.");
$faq[] = array("Nahi ez ditudan mezu pribatuak ekidin nahi ditut!", "Gerora mezuak baztertzeko aukera bat jarriko dugu, oraingoz administratzaileari mezu bat bidali nahi ez duzun mezua jasotzean :(.");
$faq[] = array("Spam edo pozta gaiztoa jaso dut foro honetako batengandik!", "Asko sentitzen dugu baino emaila bidaltzeak zihurtasun eta pribazitate kontzeptu oso zabalak babesten dute. Bidali emaila administratzaileari zuri heldu zaizun bezala header etabarrak barne, berak egingo du zerbait.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Foroari buruz");
$faq[] = array("Nork programatu zuen foro hau?", "Foro hau jatorrizko formatoan <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a> ekoiztu zuen eta bereak dira ekoizpen eskubideak.  GNU eran egin zen eta distribuzio askekoa da.");
$faq[] = array("Zergatik foro honek ez du X?", "phpBB Group idatzi eta lizentziatu zuen foro hau. Beste ezaugarri edo aukeraren bat eduki behar lukela uste baduzu joan phpbb.com era.");
$faq[] = array("Foro honekin erlazionaturiko praktika iraingarri, legezkanpoko edo gehigikerie buruz ohartarazteko zeinekin jarriko naiz kontaktuan?", "Administratzailearekin jarri kontaktuan eta ezin baduzu berriz moderatzaileekin");

//
// This ends the FAQ entries
//

?>