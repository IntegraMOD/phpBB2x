<?php
/***************************************************************************
* lang_faq.php [dutch]
* -------------------
* begin : Wednesday Oct 3, 2001
* copyright : (C) 2001 The phpBB Group
* email : support@phpbb.com
*
* $Id: lang_faq.php,v 1.3 2002/01/15 11:58:54 bartvb Exp $
*
*
***************************************************************************/

/***************************************************************************
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
***************************************************************************/

//
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//

$faq[] = array("--","Login en registratie bewerkingen");
$faq[] = array("Waarom kan ik niet inloggen?", "Het zou kunnen zijn dat je verbannen bent, als dat het geval is wordt dit gemeld tijdens het inloggen. In dat geval kan je het beste contact opnemen met de beheerder of webmaster van de site. Indien je geregistreerd en niet verbannen bent kun je het beste je inlog gegevens nogmaals controleren. Zorg er ook voor dat CAPSlock uit staat op je toetsenbord. Kijk ook in je e-mail of je geen activatie e-mails hebt ontvangen van de forum software.");
$faq[] = array("Waarom moet ik eigenlijk registreren?", "Registratie geeft je toegang tot bijkomende functies die voor gasten niet beschikbaar zijn zoals bepaalde avatar afbeeldingen, priv&eacute; berichten, gebruikersgroepen, enz. Het registreren bestaat over het algemeen uit het invullen van je naam, e-mail en wachtwoord, de overige gegevens zijn optioneel. Het registreren neemt dus niet veel tijd in beslag.");
$faq[] = array("Waarom wordt ik automatisch uitgelogd?", "Als je <i>Log mij automatisch in</i> niet aanvinkt wordt je na een bepaalde tijd uit veiligheidsoverwegingen weer uitgelogd. Indien je dat vakje wel aanvinkt blijf je ingelogd, dit is echter niet aan te raden op een publieke PC op b.v. een universiteit of in een bibliotheek of Internetcaf&eacute;.");
$faq[] = array("Hoe kan ik vermijden dat mijn gebruikersnaam verschijnt in de online gebruikers lijst?", "In je profiel staat een optie <i>Laat niet zien dat je online bent</i>, indien je kiest voor <i>ja</i> ben je alleen zichbaar voor administrators of jezelf. Je wordt geteld als een verborgen gebruiker.");
$faq[] = array("Ik ben mijn wachtwoord kwijt!", "Geen paniek! De wachtwoorden kunnen niet opgehaald worden, wel kan er een nieuw wachtwoord aangemaakt worden. Om dit te doen ga je naar de Inloggen pagina en daar klik je op <u>Wachtwoord vergeten</u>, volg hierna de instructies, er wordt een wachtwoord opgestuurd naar het email adres dat in je profiel staat.");
$faq[] = array("Ik ben geregistreerd maar kan niet inloggen!", "Kijk eerst na of je je juiste gebruikersnaam en wachtwoord hebt ingegeven. Indien deze goed zijn kunnen er een of twee zaken gebeurd zijn . Indien COPPA ondersteuning is ingeschakeld en je klikte op de <u>Ik ben jonger dan 13 jaar</u> link tijdens registratie dan moet je de instructies volgen. Indien dit niet het geval is dan moet je account geactiveerd worden. Sommige forums vereisen dat alle nieuwe registraties worden geactiveerd, of door uzelf of door beheerder vooraleer je kan inloggen. Bij registratie wordt dit ook vermeld. Indien je een e-mail hebt ontvangen volg dan de instructies, indien je geen e-mail hebt ontvangen ben je dan zeker dat je een geldig e-mailadres hebt ingevuld? Een reden waarom activatie nodig is, is de mogelijkheid om misbruik van naamloze inzendingen te vermijden. Indien je zeker bent van het e-mailadres contacteer dan de beheerder.");
$faq[] = array("Ik was in het verleden geregistreerd maar kan niet meer inloggen?!", "De meest aannemelijke redenen hiervoor zijn; je hebt een onjuiste gebruikersnaam of wachtwoord ingegeven (kijk de e-mail die je toen bij registratie hebt gekregen) of de beheerder heeft uw account gewist voor een bepaalde redenen. Je hebt mischien nooit iets gepost? Het is gebruikelijk voor forums om periodiek gebruikers te wissen die niets hebben gepost om de ruimte van de database te beperken. Probeer opnieuw te registreren en doe mee aan de discusies.");

$faq[] = array("Hoe verander ik mijn instellingen?", "Al uw instellingen (indien je geregistreerd bent) zijn opgeslagen in de database. Om deze aan te passen, klik op de <u>Profiel</u> link (meestal bovenaan de bladzijde maar anders is ook mogelijk). Dit laat je toe om al je instellingen te wijzigen");
$faq[] = array("De tijden zijn niet juist!", "De tijden zijn meestal juist, alhoewel wat je ziet zijn tijden getoond in een andere tijdzone dan de uwe. Als dit zo is moet je in je profiel instellingen deze aan je tijdzone aanpassen , bvb. Londen, Parijs, New York, Sydney, enz. Let wel dat de tijdzone aanpassen, zoals de meeste instellingen enkel kan worden gedaan de geregistreerde gebruikers. Dus als je niet geregistreerd bent is dit een goed tijdstip om het wel te doen, als je ons deze woordspeling vergeeft!");
$faq[] = array("Ik veranderde de tijdzone en de tijd is nog steeds fout!", "Indien je zeker bent dat de tijdzone correct is ingesteld en de tijd is nog steeds verkeerd, dan is het meest voor de hand liggende antwoord 'zomertijd'. Dit forum is niet ontwikkeld om een onderscheid te maken tussen wintertijd en zomertijd zodat tijdens de zomermaanden de tijd een uur verschilt met de werkelijke tijd.");
$faq[] = array("Mijn taal staat niet in de lijst!", "De meest voorkomende reden hiervoor is dat de  beheerder deze taal niet heeft ge&iuml;nstalleerd of de vertaling van de phpBB software nog niet beschikbaar is voor uw taal. Probeer aan de  forum beheerder te vragen uw taal te installeren. Indien deze niet bestaat kan je deze vertaling ook zelf maken. Meer informatie kan gevonden worden op de phpBB Groep website (zie link elders op deze pagina).");
$faq[] = array("Hoe kan ik een afbeelding tonen onder mijn gebruikersnaam?", "Er kunnen twee afbeeldingen staan onder een gebruikersnaam bij het bekijken van posts. De eerste is een afbeelding in overeenstemming met uw rang, meestal hebben ze de vorm van sterren of blokjes die aangeven hoeveel posts je gemaakt hebt of uw status op het forum. Daaronder staat een grotere afbeelding , beter bekend als een avatar, deze is meestal persoonlijk voor elke gebruiker. Het is aan de forum beheerder om avatars toe te laten en de keuze te geven aan beschikbare avatars. Indien je geen avatars kan gebruiken is dit een keuze van de forum beheerder, vraag hem/haar naar de reden.");
$faq[] = array("Hoe kan ik mijn rang aanpassen?", "Normaal gezien kan dit niet (je rang verschijnt onder je gebruikersnaam in topics en je profiel afhankelijk van de stijl). Meestal wordt de rang gebruikt om aan te tonen hoeveel berichten je hebt geplaatst en om sommige speciale gebruikers te tonen, bijvoorbeeld moderatoren en beheerders kunnen een speciale rang hebben. Misbruik het forum niet door onnodige berichten te plaatsen om zo sneller van rang te verhogen, hierdoor is het mogelijk dat de moderator of beheerder het aantal berichten verlaagd.");
$faq[] = array("Waneer ik klik op de e-mail van een gebruiker vraagt men om in te loggen?", "Sorry maar alleen geregistreerde gebruikers kunnen e-mail verzenden via het ingebouwde e-mailformulier (als de beheerder deze functie heeft ingeschakeld). Dit is om misbruik te voorkomen van het e-mailsysteem door anonieme gebruikers.");

$faq[] = array("--","Posting Onderwerpen");
$faq[] = array("Hoe post ik een onderwerp in een forum?", "Gemakkelijk, klik op de overeenstemmende knop in het forum of onderwerp scherm. Mischien moet je registreren om een bericht te plaatsen, de beschikbare mogelijkheden staan in een lijst onderaan de pagina (de <i>Je mag nieuwe onderwerpen plaatsen, Je mag reacties plaatsen, enz.<i> lijst)");
$faq[] = array("Hoe kan ik een bericht bewerken of wissen?", "Indien je geen beheerder of moderator bent kan je enkel je eigen berichten bewerken of wissen. Je kan een bericht bewerken (soms maar een beperkte tijd na het aanmaken) door te klikken op de <i>wijzig</i> knop van het te wijzigen bericht. Indien iemand reeds geantwoord heeft op je bericht vind je een kleine tekst op de bericht wanneer je teruggaat naar het onderwerp, deze geeft het aantal keer dat je je bericht bewerkt hebt aan. Dit komt enkel te voorschijn indien iemand heeft geantwoord, het komt ook niet tevoorschijn als moderatoren of beheerders het bericht bewerkt hebben (zij zouden een bericht moeten nalaten wat ze hebben aangepast en waarom). Let op: Normale gebruikers kunnen geen berichten wissen zodra erop geantwoord is.");
$faq[] = array("Hoe kan ik een onderschrift toevoegen aan mijn bericht?", "Om een onderschrift toe te voegen aan een bericht moet je eerst een onderschift aanmaken, dit kan je doen via je profiel. Eens gemaakt kan je het <i>Onderschrift gebruiken </i> vakje aankruisen op het posting formulier om uw onderschrift toe te voegen. Je kan ook via je profiel deze functie aankruisen zodat alle berichten automatisch met onderschrift worden geplaatst (daarna kan je steeds bepalen of er al dan niet een onderschrift bij moet of niet door bij het plaatsen van een bericht deze functie uit te schakelen)");
$faq[] = array("Hoe kan ik een opiniepeiling (poll) maken?", "Een opiniepeiling maken is gemakkelijk, wanner je een nieuwe onderwerp plaatst (of het eerste bericht van een onderwerp bewerkt, als je die rechten hebt). Je zou dan moeten zien <i>Voeg een poll toe</i> onderaan het formulier (indien je dit niet ziet heb je waarschijnlijk geen rechten om peilingen (polls) te maken). Je moet eerst een titel ingeven (of vraag) en minstens twee opties (typ eerste optie en klik op de <i>Voeg keuze toe</i> knop). Je kan ook een tijdslimiet instellen voor de peiling, 0 is een eeuwigdurende peiling. Er is een limiet op het aantal opties, deze zijn ingesteld door de beheerder.");
$faq[] = array("Hoe kan ik een opiniepeiling (poll) bewerken of wissen?", "Net als met bericht kunnen opiniepeilingen enkel bewerkt worden door de persoon die de opiniepeiling heeft geplaatst, een moderator of beheerder. Om een opiniepeiling te bewerken, wijzig het eerste bericht in de topic (hiermee is de opiniepeiling gelinkt). Indien niemand heeft gestemd dan kan de persoon die de peiling heeft geplaatst deze wissen of bewerken, indien men reeds heeft gestemd kunnen enkel moderatoren of beheerders deze bewerken of wissen. Dit is om te voorkomen dat tijdens een peiling er beinvloedbare aanpassingen kunnen plaatsvinden.");
$faq[] = array("Waarom krijg ik geen toegang tot een forum?", "Sommige forums zijn voorbehouden aan bepaalde gebruikers of groepen. Om deze te bekijken, lezen, posten, enz. heb je speciale rechten nodig, enkel de forum moderator en beheerder kunnen toegang verschaffen, raadpleeg hen.");
$faq[] = array("Waarom kan ik niet stemmen in een opiniepeiling(poll)?", "Alleen geregistreerde gebruikers kunnen stemmen in een peiling (om bedrog te vermijden). Indien je geregistreerd bent en nog steeds niet kan stemmen heb je waarschijnlijk niet de nodige toegangsrechten.");

$faq[] = array("--","Opmaak en onderwerptypes");
$faq[] = array("Wat is BBCode?", "BBCode is een speciale uitvoering van HTML. Of je al dan niet BBCode kan gebruiken is bepaald door de beheerder (je kan dit ook uitschakelen op het postformulier). BBCode op zich is gelijk in style als HTML, tags zijn ingesloten in rechte haken [ en ] inplaats van &lt; en &gt; en het geeft een betere controle over wat en hoe iets wordt getoond. Voor meer info over BBCode bekijk de BBCode FAQ op het posting formulier.");
$faq[] = array("Kan ik HTML gebruiken?", "Dat hangt er vanaf of de beheerders dit toelaten, zij hebben er volledige controle over. Indien je HTML kan gebruiken zullen maar een paar tags werken. Dit is een <i>veiligheids</i>procedure om het ofurm te beschermen zodat sommige de opmaak kunnen verwoesten of andere problemen met zich meebrengen. Als HTML is ingeschakeld kan je het uitschakelen op het posting formulier.");
$faq[] = array("Wat zijn smileys?", "Smileys, of emoticons zijn kleine grafische afbeeldingen die gebruikt kunnen worden om bepaalde expressies of gevoelens te tonen volgens een code, bijvoorbeeld :) betekent gelukkig, :( betekent triest. De volledige lijst van emoticons kan gezien worden via het posting formulier. Probeer niet teveel smileys te plaatsen in uw berichten, ze kunnen een bericht onleesbaar maken en een moderator kan beslissen deze te verwijderen of het bericht in zijn geheel te verwijderen");
$faq[] = array("Kan ik afbeeldingen plaatsen?", "Afbeeldingen kunnen inderdaad worden getoond in uw bericht. Alhoewel, er is geen functie om afbeeldingen te uploaden naar dit forum. Je kan een link plaatsen naar een afbeelding op een publiek toegankelijke web server, bijvoorbeeld http://www.een-ongekende-plaats.net/mijn-foto.gif. Je kan niet linken naar afbeeldingen opgeslagen op uw eigen PC (tenzij het een publiek toegankelijke server is) noch afbeeldingen opgeslagen op bvb, e.g. hotmail of yahoo mailboxes, sites met wachtwoord beveiliging, enz. Om de afbeelding te tonen gebruik je liefst de BBCode [img] tag of soortgelijk in HTML (indien toegelaten). Afbeeldingen dingen altijd te eindigen op .jpg, .jpeg, .gif of .png.");
$faq[] = array("Wat zijn mededelingen?", "Mededelingen bevatten meestal belangrijke informatie en zou je zo snel mogelijk moeten lezen. Mededelingen verschijnen bovenaan van elke pagina in het forum waar ze zijn geplaatst. Of je al dan niet een mededeling kan plaatsen hangt af van de instellingen, deze zijn ingesteld door de beheerder.");
$faq[] = array("Wat zijn Sticky onderwerpen?", "Sticky onderwerpen verschijnen onder de mededelingen in het forum en enkel op de eerste bladzijde. Deze zijn meestal van belang dus deze zou je moeten lezen bij voorkeur. Zoals met mededelingen is het de beheerder die bepaald wie sticky onderwerpen kan plaatsen in elk forum.");
$faq[] = array("Wat zijn gesloten onderwerpen?", "Gesloten onderwerpen zijn zo vergrendeld door de forum moderator of beheerder. Je kan niet antwoorden op gesloten onderwerpen en elke peiling die dit onderwerp bevat is automatisch beeindigd. Onderwerpen kunnen gesloten worden om verschillende redenen.");

$faq[] = array("--","Gebruikersfuncties en groepen");
$faq[] = array("Wat zijn Beheerders?", "Beheerders zijn mensen toegewezen aan de hoogste functie over de controle van dit forum. Deze mensen hebben controle over alle facetten van dit forum zoals permissies, verbanning van gebruikers, aanmaken van gebruikersgroepen of moderatoren, enz. Zij hebben ook moderator toegankelijkheden in al de forums.");
$faq[] = array("Wat zijn Moderatoren?", "Moderatoren zijn personen (of groepen van personen) wiens werk is hun forum van dag tot dag te volgen naar goed gebruik. Zij hebben het vermogen om berichten te bewerken, te wissen of sluiten, (her-)openen, verplaatsen, wissen en splitsen van onderwerpen in het forum waar zij moderator van zijn. Meestal zijn het moderatoren die behoeden dat er <i>off-topic (afwijken van het onderwerp)<i> gegaan wordt of lasterpraat wordt geplaatst.");
$faq[] = array("Wat zijn Gebruikersgroepen?", "Gebruikersgroepen zijn een manier waarop beheerders gebruikers in een groep kunnen plaatsen. Elke gebruiker kan toebehoren aan meerdere groepen en elke groep kan andere toegangsrechten krijgen. Dit maakt het gemakkelijk voor de beheerders om verschillende gebruikers als moderatoren van een forum te maken, of toegang te verlenen aan een privaat forum, enz.");
$faq[] = array("Hoe kan ik toetreden tot een gebruikersgroep?", "Om toe te treden tot een gebruikersgroep klik je op de Gebruikersgroepen link bovenaan de pagina (afhankelijk van de opmaak van het forum), je kan dan alle gebruikersgroepen zien. Niet alle groepen hebben <i>open toegang</i>, sommige zijn gesloten en andere hebben mischien verborgen lidmaatschap. Als de groep open is kan je een aanvraag tot toetreding doen door te klikken op de overeenstemmende knop. De gebruikersgroep moderator moet uw aanvraag goedkeuren, ze kunnen je vragen waarom je wil toetreden tot een groep. Leg je neer bij het besluit van een groep moderator indien deze je aanvraag afkeurd, dit doen ze met redenen.");
$faq[] = array("Hoe kan ik een gebruikersgroep moderator worden?", "Gebruikersgroepen zijn initieel gecre&euml;erd door de beheerder, zij kiezen ook een groepsmoderator. Indien je interesse hebt in het maken van een gebruikersgroep moet je eerst contact opnemen met de beheerder, stuur hem een priv&eacute; bericht.");

$faq[] = array("--","Priv&eacute; berichten");
$faq[] = array("Ik kan geen priv&eacute; berichten zenden!", "Hier zijn drie redenen voor; je bent niet geregistreerd en/of niet ingelogd, de beheerder heeft priv&eacute; berichten uitgeschakeld voor het gehele forum of de beheerder heeft je verhinderd voor het verzenden van berichten. Is het dit laatste dan zou je de beheerder moeten vragen waarom.");
$faq[] = array("Ik krijg steeds ongewenste priv&eacute; berichten!", "In de toekomst komt er een lijst met ongewenste mails in het priv&eacute; berichten systeem. Als je momenteel steeds ongewenst priv&eacute; berichten ontvangt informeer dan de beheerder, zij hebben de mogelijkheid om een gebruiker te verhinderen om priv&eacute; berichten te versturen.");
$faq[] = array("Ik heb spam of beledigende e-mail gekregen van iemand van dit forum!", "We vinden het spijtig dit te horen. Het e-mailformulier van dit forum heeft een beveiliging om zulke gebruikers op te sporen. Stuur een e-mail naar de beheerder met een volledige kopie van de e-mail die je ontvangen hebt, het is heel belangrijk dat deze ook de \"headers\" bevat (deze geven details van de gebruiker die de e-mail heeft gezonden). Dan kunnen ze aktie ondernemen.");

$faq[] = array("--","phpBB 2");
$faq[] = array("Waarom is X onderdeel niet verkrijgbaar?", "Deze software is geschreven door en met vergunning van de phpBB Groep. Indien je van mening bent dat een bepaalde functionaliteit moet bijgevoegd worden bezoek dan de www.phpbb.com website en kijk wat de phpBB Groep te zeggen heeft. Stuur aub geen aanvragen naar de mensen op phpbb.com, de Groep gebruikt sourceforge.net om nieuwe ideen te ontwikkelen. Lees in de forums en kijk of er mischien reeds een module in uitwerking is en volg dan de uitgelegde procedure aldaar.");
$faq[] = array("Wie moet ik raadplegen ivm misbruik en/of legale zaken toepasselijk op dit forum?", "Je kan de beheerder van dit forum raadplegen. Indien je niet weet wie dat is kan je eerst de forum moderators vragen wie je moet raadplegen. Krijg je nog steeds geen antwoord contacteer dan de eigenaar van de domeinnaam (doe een whois lookup) of, als dit een gratis service is (bijvoorbeeld. yahoo, free.fr, f2s.com, enz.), de management of misbruik department van deze service. Let op: De phpBB Groep heeft absoluut geen controle over individuele forums en is niet verantwoordelijk voor wie, waar en waarom dit forum is gebruikt. Het is onnodig de phpBB Groep te raadplegen ivm met elke (ophouden, verantwoordelijkheid, enz.) zaak niet rechtstreeks verbonden aan de www.phpbb.com website of de software van phpBB zelf. Indien je een e-mail stuurt naar de phpBB Groep over een derde partij die deze software gebruikt kan je kort of helemaal geen antwoord verwachten.");

?>