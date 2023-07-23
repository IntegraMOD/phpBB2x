<?php

/***************************************************************************
 *                         lang_bbcode.php [Croatian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3.2.2 2002/12/18 15:40:20 psotfx Exp $
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

/***************************************************************************
 *   CONTRIBUTORS
 *   <NE briši i NE mijenjaj!>
 *   Danas æe biti toplo i sunèano.
 *   [Hrvatski]
 *   Prevela s engleskog na hrvatski: Anèica Seèan [Ancica Secan].
 *   Vrijeme: 22. travnja 2003. godine [utorak].
 *   Updateano za 2.0.5: 19. lipnja 2003. godine [èetvrtak].
 *   Updateano za 2.0.11: 30. sijeènja 2005. godine [nedjelja].
 *   Verzija: 3.3.3.
 *   Url: http://ancica.sunceko.net.
 *   Danas æe biti toplo i sunèano.
 *   Original ovog mog prijevoda možeš skinuti sa www.phpbb.com.
 *   Danas æe biti toplo i sunèano.
 *   </NE briši i NE mijenjaj!>
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

$faq[] = array("--","Uvod");
$faq[] = array("Što je BBCode?", " <br />BBCode je specijalna implementacija HTML-a.<br />Moguænost korištenja BBCode-a daje administrator/ica foruma aktiviranjem/deaktiviranjem ove opcije. Bez obzira na to što je administrator/ica odredio/la, Vi opcionalno sami možete deaktivirati korištenje BBCode-a.<br />BBCode je slièan HTML-u u stilu; tagovi se umeæu u vitièaste zagrade [ i ] (umjesto &lt; i &gt;) - što nudi veæu kontrolu prikaza. Kod [tagovi] se može pisati ruèno, no, ovisno o predlošku kojega koristite, vidjet æete da je dodavanje BBCode-a Vašim postovima moguæe i putem suèelja iznad prostora za post [poruku] na obrascu za pisanje postova.<br />");

$faq[] = array("--","Oblikovanje teksta");
$faq[] = array("Kako kreirati podebljani/podcrtani/nakošeni tekst?", " <br />BBCode sadrži tagove koji Vam omoguæavaju da brzo promijenite osnovni stil Vašeg teksta.<br /><ul><li>Da biste podebljali tekst umetnete ga u: <b>[b][/b]</b>; npr.:<br /><br /><b>[b]</b>Pozdrav<b>[/b]</b><br /><br />æe biti prikazano kao: <b>Pozdrav</b>.</li><br /><br /><li>Da biste podcrtali tekst umetnete ga u: <b>[u][/u]</b>; npr.:<br /><br /><b>[u]</b>Dobro jutro<b>[/u]</b><br /><br />æe biti prikazano kao: <u>Dobro jutro</u>.</li><br /><br /><li>Da biste nakosili tekst umetnete ga u: <b>[i][/i]</b>; npr.:<br /><br /><b>[i]</b>Ovo je sjajno<b>[/i]</b><br /><br />æe biti prikazano kao: <i>Ovo je sjajno</i>.</li></ul>");
$faq[] = array("Kako promijeniti boju/velièinu teksta?", " <br />Da biste promijenili boju/velièinu teksta možete koristiti donje tagove.<ul><li>Da biste promijenili boju teksta umetnete ga u: <b>[color=][/color]</b>.<br />Možete upisati naziv boje [npr. white=bijela, black=crna, itd.] ili njezin heksadecimalni kod [npr. #FFFFFF=bijela, #000000=crna, itd.].<br />Npr.: da biste promijenili boju teksta u crvenu umetnete ga u:<br /><br /><b>[color=red]</b>Pozdrav!<b>[/color]</b><br /><br />ili<br /><br /><b>[color=#FF0000]</b>Pozdrav!<b>[/color]</b><br /><br />što æe oboje dati: <span style=\"color:red\">Pozdrav!</span>.</li><br /><br /><li>Da biste promijenili velièinu teksta umetnete ga u: <b>[size=][/size]</b>.<br />Ovaj tag ovisi o predlošku kojega koristite. Preporuèeni format je numerièka vrijednost koja predstavlja velièinu teksta u pikselima, poèevši od 1 [toliko sitno da ga neæete ni vidjeti] pa sve do 29 [vrlo veliko].<br />Npr.:<br /><br /><b>[size=9]</b>SITNO<b>[/size]</b><br /><br />æe dati: <span style=\"font-size:9px\">SITNO</span>;<br /><br /><b>[size=24]</b>OGROMNO<b>[/size]</b><br /><br />æe dati: <span style=\"font-size:24px\">OGROMNO</span>.</li></ul>Krajnji rezultat [izgled] ovisit æe o pregledniku i sistemu gledatelja/ice(a).<br />");
$faq[] = array("Kako kombinirati tagove?", " <br />Npr.: da biste privukli neèiju pažnju možete napisati:<br /><br /><b>[size=18][color=red][b]</b>POGLEDAJ ME!<b>[/b][/color][/size]</b><br /><br />što æe dati: <span style=\"color:red;font-size:18px\"><b>POGLEDAJ ME!</b></span>.<br /><br />Nije preporuèljivo koristiti puno teksta koji je višestruko oblikovan jer se time gube èitljivost i preglednost.<br />Na Vama je da se pobrinete zatvoriti sve tagove.<br />Npr.: donje oblikovanje je <u>nepravilno</u>:<br /><b>[b][u]</b>Ovo ne valja<b>[/b][/u]</b>.<br />");
$faq[] = array("--","Citiranje i stvaranje teksta fiksne širine");
$faq[] = array("Kako citirati tekst u odgovoru?", " <br />Postoje dva naèina citiranja teksta: s referencom ili bez reference.<ul><li>Kada koristite Quote [Citiraj] funkciju za odgovaranje na post vidjet æete da je tekst posta na koji odgovarate umetnut u: <b>[quote=\"\"][/quote]</b> tagove. Ova metoda Vam omoguæava da citirate s referencom prema osobi ili bilo èemu drugome što stavite.<br />Npr.: da biste citirali dio teksta koji je napisao Mr. Blobby upišete:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Tekst koji je Mr. Blobby napisao...<b>[/quote]</b>.<br /><br />Rezultat æe biti taj da æe pisati: Mr. Blobby wrote: [je napisao/la:] - prije stvarnog teksta.<br /><br />Zapamtite da ime koje citirate <b>morate</b> unijeti izmeðu \"\" - navodnici nisu opcionalni.</li><br /><br /><li>Druga metoda Vam omoguæava da naslijepo citirate nešto.<br />Da biste to postigli umetnete tekst u: <b>[quote][/quote]</b> tagove.<br />Kod gledanja posta vidjet æete da piše: Quote: [Citat:] - prije samog teksta.</li></ul>");
$faq[] = array("Kako prikazati kod ili nešto drugo fiksne širine teksta?", " <br />Želite li prikazati dio koda ili bilo što drugo što zahtijeva fiksnu širinu, npr. Courier tip slova, umetnete tekst u: <b>[code][/code]</b> tagove; npr.:<br /><br /><b>[code]</b>echo \"Ovo je neki kod\";<b>[/code]</b>.<br /><br />Svo oblikovanje radi se unutar <b>[code][/code]</b> tagova i zadržava se kada kasnije pogledate napisano.<br />");

$faq[] = array("--","Stvaranje liste [popisa]");
$faq[] = array("Kako stvoriti nepobrojanu listu?", " <br />BBCode podržava dva tipa lista: nepobrojane i pobrojane.<br />One su u principu iste kao i njihovi HTML ekvivalenti.<br /><br />Nepobrojana lista prikazuje svaku stavku u listi, jednu iza druge, oznaèavajuæi svaku sa grafièkom oznakom.<br /><br />Da biste napravili nepobrojanu listu koristite: <b>[list][/list]</b>; te specificirate svaku stavku koristeæi <b>[*]</b>.<br />Npr.: da biste izlistali tri odabrane boje koristite:<br /><br /><b>[list]</b><br /><b>[*]</b>Crvena<br /><b>[*]</b>Plava<br /><b>[*]</b>Žuta<br /><b>[/list]</b><br /><br />Rezultat æe biti sljedeæa lista:<ul><li>Crvena</li><li>Plava</li><li>Žuta</li></ul>");
$faq[] = array("Kako stvoriti pobrojanu listu?", " <br />Drugi tip liste, pobrojana lista, prikazuje svaku stavku u listi, jednu iza druge, oznaèavajuæi svaku sa brojèanom odnosno alfabetskom oznakom.<br /><br />Da biste napravili pobrojanu listu koristite: <b>[list=1][/list]</b> za brojèanu listu odnosno <b>[list=a][/list]</b> za alfabetsku listu. Kao i kod nepobrojane liste, stavke specificirate koristeæi <b>[*]</b>.<br /><br />Npr.:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Otiæi u šoping...<br /><b>[*]</b>Nadograditi raèunalo...<br /><b>[*]</b>Skinuti mejl...<br /><b>[/list]</b><br /><br />Rezultat æe biti sljedeæa lista:<ol type=\"1\"><li>Otiæi u šoping...</li><li>Nadograditi raèunalo...</li><li>Skinuti mejl...</li></ol>Npr.:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Odgovor prvi...<br /><b>[*]</b>Odgovor drugi...<br /><b>[*]</b>Odgovor treæi...<br /><b>[/list]</b><br /><br />Rezultat æe biti sljedeæa lista:<ol type=\"a\"><li>Odgovor prvi...</li><li>Odgovor drugi...</li><li>Odgovor treæi...</li></ol>");

$faq[] = array("--", "Stvaranje linkova [veza]");
$faq[] = array("Kako napraviti link(ove)?", " <br />phpBB BBCode podržava više naèina stvaranja URI-a, Uniform Resource Indicatora, poznatijih kao URL-ovi.<ul><li>Prvi od njih koristi: <b>[url=][/url]</b> tagove; bez obzira što napišete poslije znaka = æe uzrokovati da se sadržaj tagova ponaša kao URL.<br />Npr.: za link na phpBB.com možete koristiti:<br /><br /><b>[url=http://www.phpbb.com/]</b>Posjetite phpBB!<b>[/url]</b>.<br /><br />Rezultat æe biti sljedeæi link: <a href=\"http://www.phpbb.com/\" target=\"_blank\">Posjetite phpBB!</a>.<br /><br />Vidjet æete da se link otvara u novome prozoru zato da bi korisnik/ca mogao/la nastaviti koristiti forum ako želi.</li><br /><br /><li>Želite li da URL bude prikazan kao link možete koristiti:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b>.<br /><br />Rezultat æe biti sljedeæi link: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a>.</li><br /><br /><li>phpBB dodatno sadrži nešto što se zove <i>Magic Links</i>, a što æe pretvoriti bilo koji ispravan URL u link bez specificiranja tag(ov)a ili prefiksa http://.<br />Npr.: upišete li www.phpbb.com u post [bez tagova] automatski æe u prikazu, kad pogledate post, biti vidljiv link: <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.</li><br /><br /><li>Na isti naèin, osim što æete koristiti druge tagove, možete kreirati e-mail adrese.<br />Npr.:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />æe biti prikazano kao: <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a>.<br /><br />Npr.: upišete li no.one@domain.adr u post [bez tagova] automatski æe u prikazu, kad pogledate post, biti vidljiv link: <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a>.</li></ul>Kao i sa svim BBCode tagovima, URL možete postaviti oko bilo kojega drugog taga kao što su <b>[img][/img]</b> (sljedeæi odjeljak), <b>[b][/b]</b>, i sl..<br /><br />Na Vama je da se pobrinete zatvoriti sve tagove.<br />Npr.: donje oblikovanje je <u>nepravilno</u>:<br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b>,<br />a može dovesti i do toga da Vaš post bude izbrisan [stoga pazite].<br />");

$faq[] = array("--", "Prikazivanje slike u postu");
$faq[] = array("Kako dodati sliku u post?", " <br />phpBB BBCode sadrži tag za umetanje slika u Vaše postove.<br />Postoje dvije bitne stvari koje treba zapamtiti kod korištenja ovog taga: prvo, mnogi/e korisnici/e ne vole puno slika u porukama, i drugo, slika koju umetnete mora biti dostupna na Internetu [Ne može postojati samo na Vašem raèunalu - osim ako imate webserver!]. Trenutno ne postoji naèin pohranjivanja slika lokalno pomoæu phpBB [oèekuje se da æe sve ovo biti riješeno u sljedeæem phpBB izdanju].<br /><br />Da biste prikazali sliku morate obuhvatiti URL, na kojem se slika nalazi, sa: <b>[img][/img]</b> tagovima.<br />Npr.:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b>.<br /><br />Kao što je spomenuto u URL odjeljku iznad, sliku možete obuhvatiti <b>[url][/url]</b> tagovima; npr.:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b>.<br /><br />Rezultat æe biti:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a>.<br />");

$faq[] = array("--", "Ostalo");
$faq[] = array("Mogu li dodati/koristiti vlastite tagove?", " <br />Nažalost, ne direktno u phpBB 2.0; no, ova moguænost bi se mogla pojaviti u sljedeæoj verziji.<br />");

//
// This ends the BBCode guide entries...
//

?>