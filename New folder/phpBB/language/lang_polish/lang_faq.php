<?php
/***************************************************************************
 *                          lang_faq.php [Polish]
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


$faq[] = array("--","Problemy Logowania i Rejestracji");
$faq[] = array("Dlaczego nie mogê siê zalogowaæ?", "A zarejestrowa³e¶ siê? Naprawdê musisz siê zarejestrowaæ aby móc siê logowaæ. A mo¿e zosta³e¶ wyrzucony z forum (je¶li tak siê sta³o zobaczysz odpowiedni± informacjê)? W takim wypadku skontaktuj siê z webmasterem lub administratorem forum aby poznaæ powód tego. Je¿eli zarejestrowa³e¶ siê, nie zosta³e¶ wyrzucony a i tak nie mo¿esz siê logowaæ sprawd¼ ponownie swój login i has³o. Zazwyczaj to w³a¶nie b³êdny login lub has³o s± problemem, ale je¶li tak nie jest skontaktuj siê z administratorem forum, gdy¿ problem mo¿e le¿eæ po stronie b³êdnej konfiguracji skryptu.");
$faq[] = array("Dlaczego w ogóle muszê siê rejestrowaæ?", "Byæ mo¿e nie musisz, zale¿y to od administratora forum czy musisz siê rejestrowaæ by móc siê wypowiedzieæ. Jednak¿e rejestracja da ci dostêp do dodatkowych funkcji niedostêpnych dla go¶ci, takich jak w³asny emblemat, prywatne wiadomo¶ci, wysy³anie emaili, subskrypcja grup u¿ytkowników itd. Rejestracja zajmuje tylko chwilê i naprawdê zalecamy jej dokonanie.");
$faq[] = array("Dlaczego wci±¿ jestem wylogowywany?", "Je¿eli nie zaznaczysz opcji <i>Loguj mnie automatycznie</i> podczas logowania na forum bêdziesz zawsze wylogowywany po pewnym czasie. To zapobiega wykorzystaniu twojego konta przez kogokolwiek innego. Aby pozostawaæ zalogowanym zaznacz powy¿sz± opcjê. Nie jest to zalecane, gdy korzystasz z publicznego komputera, np. w bibliotece, kawiarni internetowej czy na uczelni.");
$faq[] = array("Jak mogê zapobiec wy¶wietlaniu mojej ksywki na li¶cie obecnych u¿ytkowników?", "W swoim profilu znajdziesz opcjê <i>Ukryj moj± obecno¶æ na forum</i>. Je¿eli j± <i>w³±czysz</i> bêdziesz widoczny na li¶cie tylko dla administratorów oraz dla siebie. Bêdziesz liczony jako u¿ytkownik ukryty.");
$faq[] = array("Zgubi³em moje has³o!", "Nie panikuj! Twoje has³o co prawda nie mo¿e zostaæ odzyskane, ale mo¿na je wyczy¶ciæ. Aby to zrobiæ przejd¼ na stronê logowania i kliknij <u>Zapomnia³em has³a</u>, oraz postêpuj zgodnie z podanymi instrukcjami a szybko wrócisz na forum");
$faq[] = array("Zarejestrowa³em siê ale nie mogê siê zalogowaæ!", "Na pocz±tek sprawd¼ czy wpisujesz poprawny login i has³o. Je¿eli te s± w porz±dku to problemem mo¿e byæ jedna z dwóch rzeczy. Je¿eli w³±czone s± funkcje COPPA i klikn±³e¶ odno¶nik <u>Mam mniej ni¿ 13 lat</u> podczas rejestracji musisz post±piæ zgodnie z otrzymanymi instrukcjami. Je¿eli tak nie jest to mo¿e twoje konto wymaga aktywacji? Niektóre fora wymagaj± aktywacji wszystkich nowych kont, albo przez samych u¿ytkowników, albo przez administratora, zanim mo¿na siê na nie logowaæ. Po rejestracji powiniene¶ otrzymaæ wiadomo¶æ czy wymagana jest aktywacja. Je¿eli otrzyma³e¶ email postêpuj zgodnie z instrukcjami w nim zawartymi, a je¶li nie otrzyma³e¶ email'a, to czy jeste¶ pewien, ¿e poda³e¶ w³a¶ciwy adres? Jednym z powodów wykorzystania aktywacji jest redukcja dostêpu do forum osób nieporz±danych, które zechc± je spamowaæ lub obra¿aæ u¿ytkowników. Je¿eli jeste¶ pewien, ¿e poda³e¶ w³a¶ciwy email spróbuj skontaktowaæ siê z administratorem forum.");
$faq[] = array("Rejestrowa³em siê kiedy¶ ale nie mogê siê ju¿ logowaæ!", "Najbardziej prawdopodobne powody takiego stanu to: wpisa³e¶ niew³a¶ciwy login i has³o (poszukaj email'a, który dosta³e¶ po rejestracji) lub administrator usun±³ twoje konto z jakiego¶ powodu. Byæ mo¿e sta³o siê tak, poniewa¿ nic nie napisa³e¶? Czêsto administratorzy usuwaj± u¿ytkowników, którzy w ogóle nic nie napisali aby zmniejszyæ rozmiar bazy danych. Spróbuj zarejestrowaæ siê ponownie i b±d¼ aktywny w dyskusjach.");


$faq[] = array("--","Preferencje i Ustawienia U¿ytkowników");
$faq[] = array("Jak mogê zmieniæ swoje ustawienia?", "Wszystkie twoje ustawienia (je¶li jeste¶ zarejestrowany) s± przechowywane w bazie danych. Aby je zmieniæ kliknij w odno¶nik <u>Profil</u> (najczê¶ciej znajduje siê na górze strony, chocia¿ nie zawsze). To pozwoli ci zmieniæ wszystkie ustawienia.");
$faq[] = array("Czasy nie s± w³a¶ciwe!", "Podane czasy s± prawie na pewno w³a¶ciwe, ale byæ mo¿e widzisz czasy ze strefy czasowej innej ni¿ twoja. Je¿eli tak jest, to powiniene¶ zmieniæ ustawienia twojego profilu, wybieraj±c strefê czasow± odpowiedni± dla twojego obszaru. Pamiêtaj, ¿e zmiana strefy czasowej, jak wiêkszo¶æ ustawieñ, mo¿e byæ dokonana jedynie przez u¿ytkowników zarejestrowanych. Je¶li wiêc jeszcze siê nie zarejestrowa³e¶, teraz jest dobry moment, ¿eby to zrobiæ.");
$faq[] = array("Zmieni³em strefê czasow± ale czasy s± nadal nieprawid³owe!", "Je¿eli jeste¶ pewien, ¿e ustawienia twojej strefy czasowej s± poprawne problemem mo¿e byæ czas letni. Forum nie jest zaprojektowane do osb³ugi zmian miêdzy czasem zimowym i letnim, wiêc w okresie obowi±zywania czasu letniego podane czasy mog± ró¿niæ siê o godzinê od prawdziwych.");
$faq[] = array("Mojego jêzyka nie ma na li¶cie!", "Najbardziej prawdopodobne powody to albo poniewa¿ administrator nie zainstalowa³ twojego jêzyka albo program nie zosta³ jeszcze przet³umaczony na twój jêzyk. Spróbuj spytaæ siê administratora forum, czy mo¿e zainstalowaæ odpowiedni jêzyk, a je¶li t³umaczenie nie istnieje mo¿esz sam je zrobiæ. Wiêcej informacji znajdziesz na stronie Grupy phpBB (odno¶nik znajdziesz na dole strony).");
$faq[] = array("Jak mogê wy¶wietliæ obrazek pod moj± ksywk±?", "Pod twoj± nazw± u¿ytkownika przy czytaniu postów mog± byæ dwa obrazki. Pierwszy jest zwi±zany z twoj± rang±, zwykle ma formê gwiazdek lub innych znaczków pokazuj±cych jak du¿o napisa³e¶ postów lub jaki masz na nich status. Pod nim mo¿e znajdowaæ siê wiêkszy obrazek nazywany Emblematem, który z regu³y dla ka¿dego jest inny. To od administratora zale¿y czy zechce udostêpniæ funkcje Emblematów i w jaki sposób je udostêpni. Je¿eli nie mo¿esz z nich korzystaæ, to taka jest decyzja administratora i do niego mo¿esz kierowaæ pytania o jej powód (na pewno jest dobry!)");
$faq[] = array("Jak mogê zmieniæ swoj± rangê?", "Przewa¿nie nie mo¿esz zmieniæ nazwy swojej rangi (pojawiaj± siê one pod nazw± u¿ytkownika przy przegl±daniu tematu, oraz w twoim profilu, zale¿nie od szablonu). Wiêkszo¶æ for u¿ywa rang aby zaznaczyæ liczbê postów, które napisa³e¶, i aby wyró¿niæ konkretne osoby, np. moderatorzy czy administratorzy mog± mieæ specjaln± rangê. Prosimy nie pisaæ specjalnie postów tylko po to, aby otrzymaæ wy¿sz± rangê. W takim wypadku moderator lub administrator po prostu rêcznie j± zmniejszy.");
$faq[] = array("Kiedy klikam odno¶nik email, forum wymaga logowania", "Jedynie zarejestrowani u¿ytkownicy mog± wysy³aæ email przez wbudowany w forum system (je¿eli admin go w³±czy³). Jest tak aby zapobiec niew³a¶ciwemu wykorzystaniu adresów na forum przez anonimowych u¿ytkowników.");


$faq[] = array("--","Problemy z Pisaniem");
$faq[] = array("Jak mogê napisaæ temat na forum?", "To proste, kliknij w odpowiedni temat na jedym z for lub tematów. Mo¿liwe, ¿e bêdziesz musia³ siê zarejestrowaæ zanim bêdziesz móg³ co¶ napisaæ; twoje uprawnienia s± wypisane na dole stron for i tematów (lista <i>Mo¿esz pisaæ nowe tematy, Mo¿esz g³osowaæ w ankietach, itp.</i>)");
$faq[] = array("Jak mogê zmieniæ lub usun±æ post?", "Je¿eli nie jeste¶ administratorem lub moderatorem forum mo¿esz jedynie zmieniaæ lub usuwaæ w³asne posty. Aby zmieniæ post (czasem jest to mo¿liwe jedynie przez jaki¶ czas po jego napisaniu) kliknij w przycisk <i>zmieñ</i> przy danym po¶cie. Je¿eli kto¶ ju¿ na niego odpowiedzia³ po edycji pod postem pojawi siê tekst drobnymi literami informuj±cy, ile razy dany post zmieniano. Nie zostanie on dodany je¶li kto¶ ju¿ odpowiedzia³ na post, lub je¶li zosta³ on zmieniony przez administratorów lub moderatorów (powinni oni powiadomiæ co zmienili i dlaczego). Pamiêtaj, ¿e zwykli u¿ytkownicy nie mog± usun±æ postu, na który kto¶ ju¿ odpowiedzia³.");
$faq[] = array("Jak mogê dodaæ podpis do mojego postu?", "Aby dodaæ podpis do wiadomo¶ci musisz najpierw go stworzyæ w swoim profilu. Kiedy ju¿ to zrobisz mo¿esz zaznaczyæ pole <i>Dodaj podpis</i> przy formularzu wysy³ania postu, aby dodaæ podpis. Mo¿esz tak¿e domy¶lnie dodawaæ podpis do wszystkich swoich postów zaznaczaj±c odpowiedni± opcjê w swoim profilu (przy czym ka¿dorazowo pisz±c post mo¿esz zadecydowaæ o nie dodawaniu do niego podpisu, przez odznaczenie pola w formularzu wysy³ania)");
$faq[] = array("Jak mogê utworzyæ ankietê?", "Tworzenie ankiet jest proste, kiedy piszesz nowy temat (lub zmieniasz pierwszy post w temacie, je¶li masz do tego uprawnienia) powiniene¶ zobaczyæ formularz <i>Dodaj Ankietê</i> pod g³ównym polem wiadomo¶ci (je¿eli nie widzisz go, to prawdopodobnie nie masz uprawnieñ do tworzenia ankiet). Musisz wpisaæ tytu³ ankiety i podaæ przynajmniej dwie opcje (kolejne opcje mo¿esz dodawaæ przyciskiem <i>Dodaj opcjê</i>). Mo¿esz tak¿e wyznaczyæ limit czasowy dla ankiety, ustaw 0 dla niekoñcz±cej siê. Liczba mo¿liwych do ustawienia opcji jest okre¶lana przez administratora.");
$faq[] = array("Jak mogê zmieniæ lub usun±æ ankietê?", "Podobnie jak z postami, ankiety mog± byæ zmieniane jedynie przez ich twórców, moderatorów lub administratorów. Aby zmieniæ ankietê musisz zmieniæ pierwszy post w danym temacie (z którym zawsze zwi±zana jest ankieta). Je¿eli nikt jeszcze nie g³osowa³ u¿ytkownicy mog± usun±æ ankietê lub zmieniaæ któr±kolwiek z opcji, jednak¿e je¶li zosta³y ju¿ oddane g³osy tylko moderatorzy i administratorzy mog± ankietê zmieniæ lub usun±æ. Jest to ustawione w ten sposób aby zapobiec fa³szowaniu ankiet przez zmianê opcji w po³owie g³osowania.");
$faq[] = array("Dlaczego nie mam dostêpu do forum?", "Nietóre fora mog± byæ przeznaczone dla konkretnych u¿ytkowników lub grup. Aby przegl±daæ, czytaæ, pisaæ itp. mo¿e byæ potrzebna specjalna autoryzacja. Dostêpu do nich mog± udzieliæ jedynie moderatorzy forum oraz administratorzy i z nimi powiniene¶ siê skontaktowaæ.");
$faq[] = array("Dlaczego nie mogê g³osowaæ w ankietach?", "Tylko zarejestrowani u¿ytkownicy mog± g³osowaæ w ankietach (aby zapobiec fa³szowaniu wyników). Je¿eli zarejestrowa³e¶ siê i nadal nie mo¿esz g³osowaæ, prawdopodobnie nie masz odpowiednich uprawnieñ.");


$faq[] = array("--","Formatowanie i Typy Tematów");
$faq[] = array("Czym jest BBCode?", "BBCode jest specjaln± implementacj± HTML'a, a mo¿liwo¶æ jego u¿ywania jest uzale¿niona od ustawieñ dokonanych przez administratora (mo¿esz tak¿e wy³±czaæ go dla ka¿dego postu osobno w formularzu wysy³ania). Sam BBCode jest podobny stylowo do HTML'a, znaczniki s± zawarte w nawiasach kwadratowych [ i ] a nie &lt; i &gt; oraz oferuje wiêksz± kontrolê nad tym co i jak bêdzie wy¶wietlane. Wiêcej informacji o BBCode znajdziesz w przewodniku, do którego dostaniesz siê ze strony wysy³ania postu.");
$faq[] = array("Czy mogê u¿ywaæ HTML?", "Zale¿y to od decyzji administratora, który ma pe³n± kontrolê nad mo¿liwo¶ci± u¿ywania HTML'a. Je¿eli mo¿esz go u¿ywaæ, prawdopodobnie tylko niektóre znaczniki bêd± dzia³a³y. Jest to podyktowane wzglêdami <i>bezpieczeñstwa</i>, aby zapobiec wstawianiu przez ludzi kodu, który zepsuje wygl±d strony czy sprawi inne k³opoty. Je¿eli HTML jest w³±czony, mo¿esz wy³±czyæ go dla ka¿dego postu wybieraj±c odpowiedni± opcjê w formularzu wys³ania postu.");
$faq[] = array("Czym s± U¶mieszki?", "U¶mieszki, albo Ikony Emocji s± ma³ymi grafikami, które mog± byæ u¿ywane do wyra¿enia jakiego¶ uczucia przez wstawienie krótkiego kodu, np. :) oznacza szczê¶cie, :( oznacza smutek. Pe³na lista ikon jest dostêpna z formularza wysy³ania postu. Spróbuj jednak nie nadu¿ywaæ tych ikon, poniewa¿ mog± spowodowaæ nieczytelno¶æ postu i moderator mo¿e zdecydowaæ o usuniêciu ich lub ca³ego postu.");
$faq[] = array("Czy mogê dodawaæ Obrazki?", "Jak najbardziej mo¿esz wstawiaæ obrazki do swoich postów. Jednak¿e obecnie nie istnieje mo¿liwo¶æ przesy³ania obrazków bezpo¶rednio na forum. Musisz wiêc wstawiaæ obrazki, które znajduj± siê na innym, ogólnodostêpnym serwerze, np. http://www.moj-serwer.pl/moj-obraz.gif. Nie mo¿esz wstawiaæ obrazków znajduj±cych siê na twoim komputerze (chyba ¿e jest on publicznie dostêpnym serwerem) ani obrazków przechowywanych na stronach wymagaj±cych autoryzacji, np. skrzynki pocztowe, strony chronione has³em itp. Aby wstawiæ obrazek u¿yj znacznika BBCode [img] lub odpowiedniego znacznika HTML (je¶li jest to dozwolone).");
$faq[] = array("Czym s± Og³oszenia?", "Og³oszenia czêsto zawieraj± istotne informacje i powiniene¶ czytaæ je gdy tylko siê pojawi±. Og³oszenia pojawiaj± siê na górze ka¿dej strony na forum, w którym zosta³y napisane. To czy mo¿esz wysy³aæ og³oszenia zale¿y od tego, jakich wymaga to uprawnieñ dostêpu, ustawianych przez administratora.");
$faq[] = array("Czym s± Tematy Przyklejone?", "Tematy Przyklejone pojawiaj± siê pod og³oszeniami w przegl±dzie for i tylko na pierwszej jego stronie. Najczê¶ciej s± dosyæ wa¿ne, wiêc w miarê mo¿liwo¶ci powiniene¶ je czytaæ. Podobnie jak z og³oszeniami, administrator decyduje jakie uprawnienia s± konieczne do pisania tematów przyklejonych na ka¿dym forum.");
$faq[] = array("Czym s± Tematy Zablokowane?", "Zablokowane Tematy s± ustawiane w ten sposób przez moderatora lub administratora. Nie mo¿esz pisaæ w nich dalszych odpowiedzi oraz ka¿da zawarta w nich ankieta jest automatycznie koñczona. Powodów dla zamkniêcia tematu mo¿e byæ bardzo wiele.");


$faq[] = array("--","Poziomy U¿ytkowników i Grupy");
$faq[] = array("Kim s± Administratorzy?", "Administratorzy s± lud¼mi, którym przydzielono najwy¿szy poziom kontroli nad ca³ym forum. Mog± oni kontrolowaæ wszystkie aspekty dzia³ania forum, w³±cznie z ustawianiem uprawnieñ dostêpu, usuwaniem u¿ytkowników, tworzeniem grup, okre¶laniem moderatorów itp. Maj± tak¿e pe³ne mo¿liwo¶ci moderacji na forach.");
$faq[] = array("Kim s± Moderatorzy?", "Moderatorzy s± osobami (albo grupami osób), których zadaniem jest dogl±danie forum od czasu do czasu. Maj± mo¿liwo¶æ zmieniania tre¶ci lub usuwania postów oraz blokowania, odblokowywania, przenoszenia, usuwania i dzielenia tematów w forum, które moderuj±. Generalnie czuwaj± aby ludzie nie schodzili <i>z tematu</i> w dyskusjach oraz nie publikowali nieodpowiednich materia³ow.");
$faq[] = array("Czym s± Grupy U¿ytkowników?", "Grupy U¿ytkowników s± sposobem, w jaki administratorzy mog± grupowaæ u¿ytkowników. Ka¿dy u¿ytkownik mo¿e nale¿eæ do wielu grup (co przewa¿nie nie jest mo¿liwe w innych forach) i ka¿da grupa mo¿e mieæ w³asne prawa dostêpu. Dziêku temu administratorzy mog± ³atwo ustawiæ wielu u¿ytkowników jako moderatorów lub daæ im dostêp do prywatnego forum itp.");
$faq[] = array("Jak mogê do³±czyæ do Grupy?", "Aby do³±czyæ do grupy u¿ytkowników kliknij w odno¶nik grup u¿ytkowników na górze strony (zale¿nie od szablonu), gdzie mo¿esz przegl±daæ wszystkie grupy. Nie wszystkie s± dostêpne dla ka¿dego, niektóre mog± byæ zamkniête a inne mog± mieæ nawet ukryte cz³onkowstwo. Je¿eli grupa jest otwarta mo¿esz poprosiæ o cz³onkowstwo klikaj±c w odpowiedni przycisk. Twoja pro¶ba musi zostaæ zaakceptowana przez moderatora grupy, przy czym mo¿e on spytaæ o powód twojej decyzji. Prosimy nie nagabywaæ moderatora w przypadku negatywnej decyzji, ma swoje powody.");
$faq[] = array("Jak mogê zostaæ Moderatorem Grupy?", "Grupy u¿ytkowników s± tworzone przez administratora forum i to on wyznacza moderatora. Je¿eli jeste¶ zainteresowany stworzeniem nowej grupy powiniene¶ w pierwszej kolejno¶ci z nim siê skontaktowaæ, na przyk³ad przez prywatn± wiadomo¶æ.");


$faq[] = array("--","Prywatne Wiadomo¶ci");
$faq[] = array("Nie mogê wysy³aæ prywatnych wiadomo¶ci!", "Mog± byæ tego trzy powody; nie jeste¶ zarejestrowany lub i/lub zalogowany, administrator wy³±czy³ prywatne wiadomo¶ci dla ca³ego forum lub wy³±czy³ mo¿liwo¶æ ich wysy³ania dla ciebie. W ostatnim przypadku powiniene¶ skontaktowaæ siê z administratorem i spytaæ o powód jego decyzji.");
$faq[] = array("Wci±¿ dostajê niechciane prywatne wiadomo¶ci!", "W przysz³o¶ci planowane jest dodanie listy ignorowanych u¿ytkowników dla systemu prywatnych wiadomo¶ci. Obecnie jednak je¶li dostajesz niechciane wiadomo¶ci od kogo¶ poinformuj o tym administratora, mo¿e on wy³±czyæ mo¿liwo¶æ wysy³ania wiadomo¶ci dla danego u¿ytkownika.");
$faq[] = array("Dosta³em spam lub obra¼liwy email od kogo¶ z tego forum!", "Przykro nam z tego powodu. System wysy³ania email'i tego forum zawiera funkcje umo¿liwiaj±ce odnalezienie u¿ytkowników, którzy pisz± takie listy. Prze¶lij administratorowi forum pe³n± kopiê listu, który otrzyma³e¶. Wa¿ne jest by zawiera³a wszystkie nag³ówki (w których zawarte s± informacje o nadawcy). Wtedy mo¿e on odpowiednio zadzia³aæ.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Sprawy phpBB 2");
$faq[] = array("Kto napisa³ ten skrypt?", "Ten program (w niezmodyfikowanej formie) zosta³ stworzony, opublikowany i jest w³asno¶ci± <a href=\"http://www.phpbb.com/\" target=\"_blank\">Grupy phpBB</a>. Jest udostêpniany na zasadach licencji GNU General Public Licence i mo¿e byæ dowolnie dystrybuowany. Wiêcej szczegó³ów pod odno¶nikiem.");
$faq[] = array("Dlaczego funkcja X nie jest dostêpna?", "To oprogramowanie jest dzie³em i w³asno¶ci± Grupy phpBB. Je¿eli s±dzisz, ¿e jaka¶ funkcja powinna zostaæ do niego dodana odwied¼ stronê phpbb.com i zobacz co w tej sprawie ma do powiedzenia Grupa phpBB. Prosimy nie pisaæ pró¶b o nowe funkcje na forum z phpbb.com. Grupa wykorzystuje system SourceForge do zarz±dzania tymi pro¶bami. Poszukaj na forum opinii Grupy phpBB na temat danej funkcji, je¶li taka ju¿ tam siê znajduje, a w przeciwnym wypadku postêpuj zgodnie z podan± tam procedur± zg³aszania pro¶b.");
$faq[] = array("Z kim mam siê skontaktowaæ w sprawach nadu¿yæ i prawnych dotycz±cych tego forum?", "Powiniene¶ skontaktowaæ siê z administratorem forum. Je¿eli nie mo¿esz dowiedzieæ siê kto nim jest spróbuj skontaktowaæ siê z którym¶ z moderatorów forum i jego spytaæ do kogo siê zwróciæ. Je¿eli nadal nie dostaniesz odpowiedzi skontaktuj siê z w³a¶cicielem domeny (poszukaj go przez whois) lub, je¶li strona jest na serwerze darmowych kont (republika.pl, wp.pl, hg.pl, phg.pl itp.) skontaktuj siê z dzia³em nadu¿yæ firmy zarz±dzaj±cej serwerem. Pamiêtaj, ¿e Grupa phpBB nie ma ¿adnej kontroli i nie mo¿e byæ w ¿aden sposób odpowiedzialna za to jak, gdzie i przez kogo u¿ywane jest forum. Nie ma sensu kontaktowaæ siê z Grup± phpBB w sprawach prawnych nie zwi±zanych bezpo¶rednio ze stron± phpbb.com lub oprogramowaniem phpBB. Je¶li napiszesz do Grupy phpBB w sprawie wykorzystania skryptu przez osoby trzecie otrzymasz prawdopodobnie zwiêz³± odpowied¼ lub te¿ nie otrzymasz jej wcale.");

//
// This ends the FAQ entries
//

?>