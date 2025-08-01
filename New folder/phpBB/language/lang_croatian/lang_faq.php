<?php

/***************************************************************************
 *                          lang_faq.php [Croatian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.4.2.3 2002/12/18 15:40:20 psotfx Exp $
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

$faq[] = array("--","Loginiranje i Registracija");
$faq[] = array("Zašto se ne mogu loginirati?", "<br />Jeste li se <i>registrirali</i>? Morate se registrirati kako biste se mogli prijaviti na forum.<br />Da li ste <i>iskljuèeni</i> s foruma [zabranjen Vam je pristup]? Ako jeste, [kod loginiranja æete vidjeti poruku o tome], kontaktirajte administratora/icu kako biste saznali razlog(e) iskljuèenja.<br />Jeste li upisali <i>toène podatke</i> za loginiranje? Provjerite korisnièko ime i zaporku.<br />Ukoliko ste eliminirali sve tri gornje moguænosti, i još uvijek se ne možete loginirati, kontaktirajte administratora/icu [da provjeri što (ni)je u redu s Vašim korisnièkim raèunom].<br />");
$faq[] = array("Zašto se uopæe moram registrirati?", "<br />Ne morate ukoliko administrator/ica nije postavio/la uvjet da samo registrirane osobe mogu postati.<br />Bilo kako bilo, Registracijom æete dobiti pristup dodatnim opcijama koje nisu dostupne neregistriranim osobama [Avatari, privatne poruke, e-mailovi, Korisnièke grupe itd.].<br />S obzirom da Registracija traje svega nekoliko minuta, preporuèljivo je da se registrirate.<br />");
$faq[] = array("Kako mogu onemoguæiti automatsko odjavljivanje s foruma?", "<br />Ako ne upalite opciju <i>Loginiraj me automatski</i> kada se loginirate, forum æe Vas držati loginiranim/om samo za Vašeg boravka na forumu [odjavit æe Vas kad odete s foruma]. To sprjeèava zlouporabu Vašeg korisnièkog raèuna.<br />Da biste ostali loginirani, upalite opciju <i>Loginiraj me automatski</i> prilikom loginiranja [što nije preporuèljivo u sluèaju da forumu ne pristupate s Vašeg veæ s tuðeg raèunala].<br />");
$faq[] = array("Kako mogu onemoguæiti pojavu mog korisnièkog imena na popisu online korisnika/ca?", "<br />U svom korisnièkom profilu upalite opciju <i> Sakrij moj online status</i> - èime æete [p]ostati vidljivi samo sebi i administratoru/ici, a za ostale æete postati skriven/a.<br />");
$faq[] = array("Izgubih zaporku!", "<br />Ništa strašno. Jest da je Vaša trenutna zaporka izgubljena [jer je kriptirana u našoj bazi i ne može Vam biti ponovo poslana], no, možete zatražiti novu.<br />Kliknete na <i>Login</i>, te na stranici koja æe Vam se otvoriti kliknete na <i>Zaboravih zaporku</i>.<br />Daljnje upute æe Vam stiæi e-mailom.<br />");
$faq[] = array("Registrirah se, ali se ne mogu loginirati!", "<br />Prvo provjerite da li ste unijeli pravilno <i>korisnièko ime</i> i <i>zaporku</i>.<br />Ako jeste, dogodila se jedna od dvije moguæe stvari: ako ste prilikom Registracije, a COPPA podrška je bila omoguæena, kliknuli na <i>Slažem se i imam manje od 13 godina</i>, morat æete slijediti upute koje ste primili e-mailom; ili je možda potrebna aktivacija Vašeg korisnièkog raèuna [za što ste obavijest vidjeli ili prilikom same Registracije ili Vam je stigla e-mailom].<br />Ukoliko ste eliminirali obje gornje moguænosti, i još uvijek se ne možete loginirati, kontaktirajte administratora/icu [da provjeri što (ni)je u redu s Vašim korisnièkim raèunom].<br />");
$faq[] = array("Registrirah se davno, ali se sada više ne mogu loginirati!", "<br />Dva su moguæa razloga: ili ste upisali <i>pogrešno</i> korisnièko ime i/ili zaporku; ili je administrator/ica <i>izbrisao/la</i> Vaš korisnièki raèun.<br />");

$faq[] = array("--","Korisnièke postavke");
$faq[] = array("Kako mogu promijeniti svoje postavke?", "<br />Sve Vaše postavke [ako ste registrirani] pohranjene su u bazi podataka.<br />Da biste promijenili Vaše postavke, kliknete na link <i>Profil</i> što æe Vas odvesti na stranicu na kojoj možete promijenite sve svoje postavke.<br />");
$faq[] = array("Nešto ne valja s prikazom vremena!", "<br />Vrijeme je gotovo uvijek toèno prikazano, no, može biti da je ono što vidite vrijeme <i>druge vremenske zone</i>. Ako je to sluèaj, promijenite postavke svojega korisnièkog profila tako da izaberete onu vremensku zonu koja odgovara podruèju u kojem se nalazite. Uzmite u obzir da mijenjanje vremenske zone, kao i veæinu postavki, može napraviti samo registrirani/a korisnik/ca.<br />");
$faq[] = array("Promijenih vremensku zonu, ali je vrijeme i dalje netoèno prikazano!", "<br />Ako ste sigurni da ste pravilno postavili vremensku zonu, ali je vrijeme i dalje netoèno prikazano, najvjerojatniji razlog je <i>ljetno vrijeme</i>. Forum nema postavke praæenja prelaska izmeðu standardnog i ljetnog vremena što æe reæi da prilikom ljetnog vremena vrijeme prikazuje s razlikom od sat vremena u odnosu na pravo lokalno vrijeme.<br />");
$faq[] = array("Mog jezika nema na popisu!", "<br />Dva su moguæa razloga: ili administrator/ica <i>nije instalirao/la</i> Vaš jezik ili forum <i>nije preveden</i> na Vaš jezik.<br />Pitajte administratora/icu foruma da li može instalirati paket za jezik koji želite. Ukoliko ne postoji prijevod na Vaš jezik - bit æe nam drago ako ga napravite. Više informacija o tome možete naæi na sljedeæem linku: <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>.<br />");
$faq[] = array("Što moram napraviti da bi se vidjela slika ispod mog korisnièkog imena?", "<br />Prilikom pregledavanja postova moguæe je vidjeti dvije slike ispod Vašeg korisnièkog imena.<br />Prva slika je povezana s Vašim statusom; obièno su to zvjezdice/blokovi koji oznaèavaju: koliko ste postova postali odnosno Vašu funkciju na forumu [npr. administrator/ica].<br />Ispod nje se može nalaziti veæa slika zvana Avatar [obièno jedinstvena/osobna za svakog/u korisnika/cu].<br />Dopuštenja o korištenju Statusnica/Avatara, kao i izbor dostupnosti istih, daje administrator/ica foruma [slobodno ga/ju kontaktirajte (sa) zamolbom o dopuštenju Statusnica/Avatara ukoliko isto/a nije dao/la].<br />");
$faq[] = array("Kako mogu promijeniti svoj status?", "<br />U pravilu, svoj status ne možete direktno promijeniti.<br />Veæina foruma koristi statuse da prikaže broj postova koje je postao/la odreðeni/a korisnik/ca, te da identificira korisnike/ce koji/e obavljaju odreðene funkcije na forumu [obièno oni/e imaju poseban status, npr. administratori/ce, moderatori/ce].<br />Zloupotrebljavanje foruma, u smislu postanja puno postova samo zato da bi se dosegao što veæi status, nema nikakvog smisla jer administratori(ce)/moderatori(ce) mogu <i>smanjiti</i> neèiji status [npr. smanjenjem broja postova...].<br />");
$faq[] = array("Zašto se moram loginirati kada želim korisniku/ci foruma poslati e-mail?", "<br />Ukoliko je administrator/ica omoguæio/la slanje e-mailova korisnicima/ama foruma preko ugraðenog e-mail obrasca - tu opciju mogu koristiti samo registrirani/e korisnici/e [èime se sprjeèava zlouporaba forumova e-mail sistema od strane anonimnih osoba.]<br />");

$faq[] = array("--","Postanje");
$faq[] = array("Kako mogu postati [objaviti] temu/post na forumu?", "<br />Kliknete na odgovarajuæi gumb na forumu/temi [npr. <i>nova tema</i>, <i>odgovori</i>...].<br />Radnje koje (ne)možete raditi su uvijek prikazane na dnu ekrana foruma/teme [npr. <i>Možete otvarati nove teme</i>, <i>Ne možete otvarati nove teme</i>...].<br />Ovisno o tome kako je administrator/ica odredio/la, postanje može biti omoguæeno svima ili, pak, samo registriranim korisnicima/ama.<br />");
$faq[] = array("Kako mogu urediti/izbrisati post?", "<br />Post možete urediti klikom na gumb <i>uredi</i>.<br />Primijetit æete da neke postove neæete moæi naknadno ureðivati/urediti [npr. ako je u meðuvremenu tema oznaèena kao zakljuèana].<br />Post možete izbrisati klikom na gumb <i>izbriši</i>. Primijetit æete da neke postove neæete moæi izbrisati [npr. ako je u meðuvremenu netko odgovorio na njih].<br />Postoji moguænost i da administrator/ica izmijeni/izbriše Vaš post [u tom sluèaju bi svakako trebao/la napisati opasku što je i zašto izmijenio/la].<br />");
$faq[] = array("Kako mogu dodati potpis?", "<br />Da biste dodali potpis - morate ga prvo napraviti.<br />Potpis možete napraviti/urediti u Vašem korisnièkom profilu [pri èemu morate upaliti i opciju <i>Uvijek dodaj moj potpis</i> ukoliko želite da bude dodan svakom postu/poruci].<br />Ako u neki post/poruku ne želite dodati potpis, a upalili ste opciju <i>Uvijek dodaj moj potpis</i>, jednostavno za vrijeme pisanja samog posta/poruke odoznaèite opciju dodavanja potpisa.<br /> Ako u neki post/poruku želite dodati potpis, a niste upalili opciju <i>Uvijek dodaj moj potpis</i>, jednostavno za vrijeme pisanja samog posta/poruke oznaèite opciju dodavanja potpisa.<br />");
$faq[] = array("Kako mogu kreirati anketu?", "<br />Kada otvorite novu temu [ili izmijenite prvi post postojeæe teme - ako imate dopuštenje] vidjet æete formu <i>Anketa</i> ispod okvira za pisanje teksta posta [ako to ne vidite, vjerojatno nemate dopuštenje za kreiranje anketa]. Unesete pitanje i [barem] dva moguæa odgovora - kojih, unaprijed, za sve ankete, maksimalni limit odreðuje administrator/ica [da biste dodali odgovor kliknete na <i>Dodajte odgovor</i>]. Možete postaviti i vremensko ogranièenje trajanja ankete [upišete broj dana; 0 = neogranièeno].<br />");
$faq[] = array("Kako mogu urediti/izbrisati anketu?", "<br />Ankete može ureðivati/urediti/izbrisati samo ona/j koja/i ih je i kreirala/o, moderator/ica i/ili administrator/ca. Da biste izmijenili anketu, ako imate dopuštenje, odaberete ureðivanje prvog posta u temi [ako je kreirana, anketa se uvijek nalazi u prvom postu u temi]. Vi anketu možete izmijeniti samo ako nitko još nije glasovao, dok ju moderatori(ce)/administratori(ce), mogu mijenjati bilo kada. Anketu možete izbrisati samo ako nitko još nije glasovao.<br />");
$faq[] = array("Zašto ne mogu pristupiti forumu?", "<br />Nekim forumima mogu pristupiti samo odreðeni(e) korisnici(e)/Korisnièke grupe. Za pregledavanje, postanje... na takvim forumima Vam treba posebna autorizacija koju možete (za)tražiti/dobiti samo od moderatora(ice)/administratora(ice).<br />");
$faq[] = array("Zašto ne mogu glasovati u anketama?", "<br />Da bi se sprijeèilo namještanje rezultata, samo registrirani/e korisnici/e mogu glasovati u anketama. Ukoliko jeste registrirani/a korisnik/ca, a ipak ne možete glasovati - nemate potrebita prava pristupa.<br />");
$faq[] = array("--","Ureðivanje i tipovi tema");
$faq[] = array("Što je BBCode?", "<br />BBCode je specijalna implementacija HTML-a.<br />Moguænost korištenja BBCode-a daje administrator/ica foruma aktiviranjem/deaktiviranjem ove opcije. Bez obzira na to što je administrator/ica odredio/la, Vi opcionalno sami možete deaktivirati korištenje BBCode-a.<br />BBCode je slièan HTML-u u stilu; tagovi se umeæu u vitièaste zagrade [ i ] (umjesto &lt; i &gt;) - što nudi veæu kontrolu prikaza. Kod [tagovi] se može pisati ruèno, no, ovisno o predlošku kojeg koristite, vidjet æete da je dodavanje BBCode-a Vašim postovima moguæe i putem suèelja iznad prostora za post na obrascu za pisanje postova.<br />Za više informacija o BBCode-u pogledajte Vodiè kojemu možete pristupiti sa stranice za pisanje/editiranje postova.<br />");
$faq[] = array("Smijem li koristiti HTML?", "<br />Moguænost korištenja HTML-a daje administrator/ica foruma aktiviranjem/deaktiviranjem ove opcije. Bez obzira na to što je administrator/ica odredio/la, Vi opcionalno sami možete deaktivirati korištenje HTML-a.<br />Kod korištenja HTML-a, primijetit æete da rade samo pojedini tagovi [oni koje je dopustio/la administrator/ica] - to je zbog onemoguæavanja zlouporabe foruma.<br />");
$faq[] = array("Što su Smajliæi?", "<br />Smajliæi su male slièice koje <i>prikazuju</i> emocije/razmišljanja osobe [koja ih je <i>ubacila</i> u post].<br />Smajliæe u post možete <i>ubaciti</i> na dva naèina: upisivanjem kratkog koda [ako je administrator/ica odobrio/la, svaki Smajliæ ima svoj vlastiti kod] i/ili klikom na Smajliæa [Smajliæi se nalaze u sklopu obrasca za pisanje postova; u pravilu se vidi samo <i>prvih</i> 20, a ostale možete vidjeti (i <i>ubaciti</i>) klikom na <i>Ostali Smajliæi</i>].<br />Nije preporuèljivo ubacivati/ubaciti puno Smajliæa u post jer se time gube èitljivost i preglednost.<br />");
$faq[] = array("Kako mogu postati slike?", "<br />Postoje dvije bitne stvari koje treba zapamtiti kod postanja slika: prvo, mnogi/e korisnici/e ne vole puno slika u porukama, i drugo, slika koju umetnete mora biti dostupna na Internetu [Ne može postojati samo na Vašem raèunalu - osim ako imate webserver!]. Trenutno ne postoji naèin pohranjivanja slika lokalno pomoæu phpBB [oèekuje se da æe sve ovo biti riješeno u sljedeæem phpBB izdanju].<br />Da biste postali sliku: morate obuhvatiti URL, na kojem se slika nalazi, sa BBCode [img][/img] tagovima; odnosno, ako je dopušteno, upotrijebiti HTML tagove.<br />Npr.:<br />[img]http://ime_domene/ime_slike[/img]  ([img]http://www.nešto.hr/slika.jpg[/img])<br />odnosno<br />&lt;img src=\"http://ime_domene/ime_slike\"&gt; (&lt;img src=\"http://www.nešto.hr/slika.jpg\"&gt;).<br />");
$faq[] = array("Što su Obavijesti?", "<br />Obavijesti su postovi koji èesto sadrže važne informacije što æe reæi da bi ih bilo pametno proèitati èim ih uoèite.<br />Pojavljuju se na vrhu svake stranice foruma na kojem su postane.<br />Administrator/ica odreðuje tko sve ima pravo postati Obavijesti.<br />");
$faq[] = array("Što je \"Važno\"?", "<br />\"Važno\" su postovi koji èesto sadrže važne informacije što æe reæi da bi ih bilo pametno proèitati èim ih uoèite.<br />Pojavljuju se na vrhu stranice foruma [ispod eventualnih Obavijesti] na kojem su postani.<br />Administrator/ica odreðuje tko ih sve ima pravo postati.<br />");
$faq[] = array("Što su Zakljuèane teme?", "<br />Zakljuèane teme su teme koje je moderator(ica)/administrator(ica) [zbog nekog, a može ih biti puno, razloga] zakljuèao/la.<br />Moguæe ih je samo pregledavati [dakle, nije moguæe ureðivati/izbrisati... postove...]. Ankete koje se nalaze u njima [ako nisu po odreðenju] završavaju istog trena kada moderator(ica)/administrator(ica) zakljuèa temu.<br />");
$faq[] = array("--","Stupnjevanje korisnika/ca i Korisnièke grupe");
$faq[] = array("Što su administratori/ce?", "<br />Administratori/ce su osobe s najvišom razinom kontrole nad cijelim forumom.<br />Mogu kontrolirati sve aspekte foruma [postavljanje dopuštenja, iskljuèivanje korisnika/ca, stvaranje Korisnièkih grupa/moderatora, itd.].<br />");
$faq[] = array("Što su moderatori/ce?", "<br />Moderatori/ce su osobe èiji je <i>posao</i> održavanje foruma.<br />Imaju ovlasti mijenjanja/izbrisivanja postova, zakljuèavanja/otkljuèavanja/premještanja/izbrisivanja/razdvajanja tema u forumima koje održavaju.<br />Tu su i da bi sprijeèili/e korisnike/ce od skretanja s tema/objavljivanja nedozvoljenih sadržaja...<br />");
$faq[] = array("Što su Korisnièke grupe?", "<br />Korisnièke grupe su grupe u koje administratori/ce grupiraju korisnike/ce.<br />Svaki/a korisnik/ca može pripadati veæem broju Korisnièkih grupa.<br />Svakoj Korisnièkoj grupi mogu biti dodijeljena individualna prava pristupa, što administratorima/cama olakšava dodjeljivanje odreðenih prava odreðenim korisnicima/ama [npr. proglašavanje više korisnika/ca moderatorima/cama foruma].<br />");
$faq[] = array("Kako se mogu pridružiti Korisnièkoj grupi?", "<br />Da biste se pridružili Korisnièkoj grupi, kliknete na <i>Korisnièke grupe</i> što æe Vas odvesti na stranicu na kojoj æete vidjeti Korisnièke grupe.<br />Nemaju sve grupe <i>otvoren pristup</i>; neke su zatvorene, neke skrivene...<br />Ako imate pristup Korisnièkoj grupi, za pridruživanje kliknete na odgovarajuæu naredbu [obièno <i>Pridružite se grupi</i>].<br />Ako Vam moderator/ica odbije zahtjev bilo bi lijepo da ga/ju ne gnjavite traženjem objašnjenja - jer, ako se zaista dogodilo da Vam je odbio/la zahtjev - sigurno je imao/la dobar razlog.<br />");
$faq[] = array("Kako mogu postati moderator/ica Korisnièke grupe?", "<br />Korisnièke grupe inicijalno kreira administrator/ica pri èemu odmah odreðuje i moderatora(e)/icu(e).<br />Ukoliko želite postati moderatorom/icom veæ postojeæe Korisnièke grupe ili, pak, (za)tražiti otvaranje nove Korisnièke grupe koju želite moderirati - kontaktirajte administratora/icu [npr. privatnom porukom].<br />");

$faq[] = array("--","Privatne poruke");
$faq[] = array("Ne mogu poslati privatnu poruku!", "<br />Tri su moguæa razloga:<br /> - ili niste registrirani/loginirani;<br /> - ili je administrator/ca onesposobio/la privatne poruke za cijeli forum;<br /> - ili je administrator/ica Vas sprijeèio/la u slanju privatnih poruka.<br />U potonjem sluèaju zatražite od administratora/ice objašnjenje.<br />");
$faq[] = array("Dobivam neželjene privatne poruke!", "<br />U planu je dodavanje liste za ignoriranje u sistemu privatnih poruka. Do tada, ako i dalje dobivate neželjene privatne poruke, obavijestite administratora/icu [ima ovlasti sprijeèiti korisnika/ce u slanju privatnih poruka ikome].<br />");
$faq[] = array("Primih spamerski/uvredljiv e-mail od nekoga s ovog foruma!", "<br />E-mail obrazac ovog foruma ukljuèuje osiguranje koje prati korisnike/ce koji/e šalju poruke. E-mailirajte administratora/icu s obavijesti o tome, pri èemu obavezno pošaljite i kopiju primljenog e-maila [ukljuèujuæi zaglavlje - ono sadrži detalje o korisniku/ci koji/a je poslao/la e-mail). Po primitku Vašeg e-maila, administrator/ica može poduzeti za to predviðene mjere.<br />");

//
// These entries should remain in all languages and for all modifications
//

$faq[] = array("--","phpBB 2");
$faq[] = array("Tko je napisao ovaj forum?", "<br />Ovaj software [u njegovom originalnom obliku] produciran je i objavljen od strane <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Dostupan je pod GNU General Public Licence i može se slobodno distribuirati [kliknite na <a href=\"http://www.phpbb.com/\" target=\"_blank\">link</a> za detalje]. <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a> zadržava sva autorska prava na ovaj software.<br />");
$faq[] = array("Zašto X karakteristika nije dostupna?", "<br />Ako smatrate da neka karakteristika treba biti dodana, posjetite <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpbb.com</a> i pogledajte što o tome <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a> ima za reæi [nemojte zahtjeve za ovime postati na <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpbb.com</a> forumu]. Proèitajte na forumima naše stajalište o ovome i pratite proceduru koja je tamo naznaèena.<br />");
$faq[] = array("Koga kontaktirati u vezi zlouporabe/pravnih stvari vezanih uz ovaj forum?", "<br />Kontaktirajte administratora/icu ovog foruma. Ako ga/ju ne možete naæi, kontaktirajte moderatore/ice ovog foruma i njih pitajte koga biste trebali pitati. Ako i dalje ne dobijete odgovor, kontaktirajte vlasnika/cu domene ili pružatelja usluga. <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a> nema apsolutno nikakvu kontrolu i ne može ni u kojem sluèaju odgovarati za to kako se, gdje i od strane koga ovaj forum koristi. Potpuno je besmisleno kontaktirati <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a> u vezi bilo kakve pravne stvari koja nije direktno vezana uz <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpbb.com</a> Web stranice ili <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB</a> software. Ako e-mailirate <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a> oko toga kako bilo koja treæa stran(k)a koristi ovaj software - ne oèekujte odgovor.<br />");

/***************************************************************************
  *   ANÈI - START
  *   <NE briši i NE mijenjaj!>
  *   Danas æe biti toplo i sunèano.
  *   Ne dopuštam [!] da izbrišeš/dopišeš/urediš BILO ŠTO
  *   što poèinje s retkom ANÈI - START [4 retka iznad ovog retka]
  *   i završava sa 17 redaka ispod ANÈI - START. [Prelamanje rijeèi/Word wrap - ugašeno!]
  *   U protivnom: budi svjestan/na da kršiš moja autorska prava.
  *   Anèica Seèan [Ancica Secan].
  *   Url: http://ancica.sunceko.net.
  *   Danas æe biti toplo i sunèano.
  *   </NE briši i NE mijenjaj!>
 ***************************************************************************/
$faq[] = array("--","O prijevodu");
$faq[] = array("Tko?", "<br />Ovaj prijevod, s engleskog [originalna verzija] na hrvatski, u potpunosti, napravila je <a href=\"http://ancica.sunceko.net/\" target=\"_blank\">Anèica Seèan</a>.<br />[U kompletu, s prijevodom, dolaze i lokalizirane slièke.]<br />");
$faq[] = array("Verzija?", "<br />Verzija ovog prijevoda je: 3.3.3.<br />[Zadnju] Službenu verziju ovog prijevoda možete skinuti sa <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.<br />");
/***************************************************************************
  *   ANÈI - END
 ***************************************************************************/

//
// This ends the FAQ entries...
//

?>