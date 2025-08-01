<?php

/***************************************************************************

 *                          lang_faq.php [english]

 *                            -------------------

 *   begin                : Wednesday Oct 3, 2001

 *   copyright            : (C) 2001 The phpBB Group

 *   email                : support@phpbb.com

 *

 *   $Id: lang_faq.php,v 1.2 2002/02/14 16:04:15 psotfx Exp $

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
//   Norwegian translation by lanes, shantra & water
// 
 
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
 
  
$faq[] = array("--","Logg Inn og Registrerings Problemer");
$faq[] = array("Hvorfor kan jeg ikke logge inn?", "Har du registrert deg? Du MÅ registrere deg for å kunne logge inn. Har du blitt svartelistet fra forumet? (En beskjed vil bli vist dersom du er det.) I så fall bør du ta kontakt med webmasteren eller administratoren for å finne ut hvorfor. Hvis du er registrert, ikke er svartelistet og fremdeles ikke kan logge inn, sjekk og dobbelsjekk brukernavn og passord. Vanligvis er dette problemet. Hvis dette ikke er problemet kontakt administratoren da forumet kan være feilkonfigurert.");
$faq[] = array("Hvorfor trenger jeg å registrere meg?", "Det er mulig at du ikke trenger det, det er opp til administratoren av forumet om du må registrere deg eller ikke for å skrive innlegg. Dersom du registrerer deg vil du få tilgang til finesser som ikke er tilgjenglig for en gjestebruker, slik som å velge et avatar bilde, private meldinger til andre brukere, brukergruppe abonnement, osv. Registreringen tar bare et par minutter, anbefales.");
$faq[] = array("Hvorfor blir jeg logget ut automatisk?", "Hvis du ikke haker av i <i>Logg meg på automatisk hver gang</i> boksen når du logger inn i forumet, vil du kun bli logget inn for en forhåndsbestemt tid. Dette for og forhindre misbruk av kontoen av andre. For og forbli innlogget må du hake av i boksen når du logger inn. Dette er ikke anbefalt dersom du bruker en datamaskin som er delt med andre, f.eks. et bibliotek, Internett kafé, skole nettverk osv.");
$faq[] = array("Hvordan hindrer jeg mitt brukernavn fra å bli vist i Hvem er online listen?", "I din profil vil du finne valget <i>Skjul at du er online</i>. Dersom du haker av i denne boksen, vil du kun sees av administratoren og deg selv. Du vil bli registrert som en skjult bruker.");
$faq[] = array("Jeg har glemt mitt passord!", "Ingen panikk! Ditt passord kan ikke hentes ut igjen, men det kan bli erstattet. For å gjøre dette gå til logg inn siden og trykk på <u>Jeg har glemt passordet</u>, følg instruksjonene og du får et nytt passord innen kort tid.");
$faq[] = array("Jeg har registrert meg, men kan ikke logge inn!", "Sjekk først at du har skrevet inn brukernavn og passord riktig. Dersom de er riktige kan en av to ting ha skjedd. Hvis COPPA support er aktivisert og du trykte <u>Jeg er under 13 år</u> linken mens du registrerte deg, må du følge instruksjonene du mottok. Dersom dette ikke er problemet er det mulig at kontoen din trenger aktivisering. Noen forumer krever at alle nye registreringer skal aktiviseres, enten av deg eller av administratoren, før du kan logge inn. Du ville fått beskjed ved registrering om aktivisering var nødvendig. Dersom du mottok en e-post, følg instruksjonene. Hvis du ikke mottok en e-post, kan du ha skrevet inn en ugyldig e-postadresse. Hovedgrunnen til at aktivisering er brukt, er og hindre at <i>useriøse</i> brukere utnytter forumet anonymt. Hvis du er sikker på at e-postadressen du oppga er riktig, ta kontakt med administratoren.");
$faq[] = array("Jeg har registrert meg tidligere, men kan ikke logge inn mer?!", "De mest sannsynlige grunnene er; Du har skrevet inn feil brukernavn eller passord (sjekk e-posten du mottok da du registrerte deg) eller at administratoren har slettet din konto. Dersom det siste er tilfelle har du kanskje ikke skrevet et innlegg? Det er vanlig at administratorene sletter brukere som ikke skriver innlegg for å holde størrelsen på databasen nede. Prøv å registrer deg på nytt og bli med i noen diskusjoner.");


$faq[] = array("--","Bruker Profil og Innstillinger");
$faq[] = array("Hvordan endrer jeg mine innstillinger?", "Alle dine innstillinger (hvis du er registrert) er lagret i databasen. For å forandre den trykk på <u>Profil</u> linken. (Vanligvis vist øverst på siden, men ikke alltid.) Dette vil tillate deg å forandre på alle dine innstillinger.");
$faq[] = array("Klokken er ikke riktig!", "Klokken er antakeligvis riktig, men tiden du ser kan være i en annen tidssone en den du oppholder deg i. Hvis dette er tilfelle kan du endre tidssonen i din profil til ditt område, f.eks. London, Paris, New York, Sydney, osv. Kun registrerte brukere kan forandre tidssonen. Dersom du ikke er registrert og ønsker denne funksjonen, er dette et fint tidspunkt å registrere deg.");
$faq[] = array("Jeg har forandret tidssonen og tiden er fortsatt feil!", "Hvis du er sikker på at du har satt tidssonen riktig og klokken fortsatt er feil, er den mest sannsynlige grunnen sommertid. Forumet er ikke designet til å håndtere byttet mellom vintertid og sommertid, så om sommeren kan tiden være en time feil.");
$faq[] = array("Mitt språk er ikke i listen!", "Den mest sannsynlige grunnen er enten at administratoren ikke har installert språket eller at ingen har oversatt forumet til ditt språk. Prøv og spør administratoren om han/hun kan installere språket, og om det ikke finnes en oversettelse kan du gjerne lage en. Mer informasjon finner du på phpBB Group sin hjemmeside. (Se linken nederst på siden.)");
$faq[] = array("Hvordan viser jeg et bilde under mitt brukernavn?", "Det kan være to bilder under brukernavnet når du ser på innleggene. Det første er et bilde som viser din rangering, vanligvis stjerner, som viser hvor mange innlegg du har gjort eller din status i forumet. Under dette kan det være et større bilde som er kalt en avatar. Dette er vanligvis et unikt eller personlig bilde til hver bruker. Det er opp til administratoren og aktivisere avatars, samt bestemme på hvilken måte du kan velge en avatar. Dersom du ikke får valgt en avatar, er dette bestemt av administratoren. Du kan spørre om hvorfor. (De har nok en god grunn!)");
$faq[] = array("Hvordan endrer jeg min rangering?", "Din rangering er vanligvis basert på antall innlegg, men unntak finnes. (Rangeringer vises under ditt brukernavn i innlegg og i din profil, avhengig av hvilken stil som er valgt.) Rangering brukes også til og identifisere spesielle brukere. F.eks. moderatorer og administratorer kan ha en spesiell rangering. Vennligst ikke utnytt forumet ved å skrive unødvendig mange innlegg for og bedre din rangeringen, da vil sannsynligvis moderatorene eller administratorene senke innleggsantallet ditt.");
$faq[] = array("Når jeg trykker på e-post linken til en bruker, blir jeg bedt om å logge inn?", "Beklager, men kun registrerte brukere kan sende e-post til andre via den innebygde e-post funksjonen. (Kun hvis administratoren har aktivisert denne funksjonen.) Dette for å hindre mistenkelig bruk av e-post systemet av anonyme brukere.");


$faq[] = array("--","Innleggs Problemer");
$faq[] = array("Hvordan skriver jeg et innlegg i forumet?", "Klikk på den relevante knappen enten i forum- eller temasiden. Det er mulig at du må registrere deg før du kan skrive et innlegg. Dine rettigheter er listet opp nederst på siden i forum- og temasidene. (F.eks. <i>Du kan starte nye temaer i dette forumet, Du kan svare på temaer i dette forumet, osv.</i>)");
$faq[] = array("Hvordan endrer eller sletter jeg et innlegg?", "Hvis du ikke er administrator eller moderator kan du kun endre eller slette dine egne innlegg. Du kan endre et innlegg (noen ganger kun for et begrenset tidsrom etter det er skrevet) ved å klikke på <i>Endre</i> knappen for det innlegget.  Dersom noen allerede har svart på innlegget, vil det vises en liten tekst nedenfor innlegget hvor det står antall ganger innlegget er endret. Teksten vil ikke komme opp hvis ingen har svart på innlegget, ei heller hvis administratoren eller moderatoren har redigert innlegget. (De skal gi beskjed om hva de har forandret på og hvorfor.) Legg merke til at vanlige brukere ikke kan slette et innlegg etter at noen har svart på det.");
$faq[] = array("Hvordan legger jeg til en signatur til innleggene mine?", "For å legge til en signatur må du først lage en, dette gjøres i din profil. Når den er laget haker du av i <i>Bruk signatur</i> boksen når du skriver innlegget, for at denne skal vises. Du kan også legge til en signatur som standard til alle dine innlegg ved å hake av i <i>Bruk alltid signatur</i> boksen i din profil. (Du kan fortsatt hindre at din signatur vises ved å ta vekk haken i <i>Bruk signatur</i> boksen når du skriver innlegget.)");
$faq[] = array("Hvordan lager jeg en avstemning?", "Å lage en avstemning er enkelt. Når du skriver det første innlegget i et tema (eller endrer det første innlegget i et tema, hvis du har rettighetene) burde du se en <i>Legg til en avstemning</i> boks nedenfor innleggs boksen. (Hvis du ikke ser denne har du antakeligvis ikke rettighetene til å lage en avstemning.) Du bør skrive en tittel og minst to valg. For å legge til et valg til spørsmålet er det bare å skrive inn alternativet og klikke på <i>Legg til alternativ</i> knappen. Du kan også sette en tidsgrense for avstemningen, bruk 0 hvis du ikke ønsker å sette en sluttdato. Det vil være en grense for hvor mange alternativer det kan være, dette er bestemt av administratoren.");
$faq[] = array("Hvordan endrer eller sletter jeg en avstemning?", "Som med innlegg kan kun brukeren som skrev innlegget, moderatorer eller administratorer endre avstemningen. For å endre en avstemning, klikk på endre knappen til det første innlegget i temaet. (Dette inneholder alltid avstemningen.) Dersom ingen har avlagt en stemme kan brukeren slette eller endre avstemningen. Kun moderatorer og administratorer kan endre eller slette avstemningen hvis noen har stemt. Dette for å hindre at noen jukser ved å bytte valg halvveis inne i avstemningen.");
$faq[] = array("Hvorfor kan jeg ikke lese et forum?", "Noen forumer er begrenset til noen brukere eller grupper. For å lese, skrive, osv. er det mulig at du trenger en spesiell rettighet, kun moderatorer og administratorer kan gi deg denne rettigheten. Du kan eventuelt ta kontakt med en av dem.");
$faq[] = array("Hvorfor kan jeg ikke stemme i avstemninger?", "Kun registrerte brukere kan stemme. (For å hindre at noen jukser i avstemningen.) Hvis du er registrert og fortsatt ikke kan stemme, har du ikke rettighetene til å stemme.");


$faq[] = array("--","Formatering og Tema Typer");
$faq[] = array("Hva er BBCode?", "BBCode er en variasjon av HTML, om BBCode kan brukes i forumet er bestemt av administratoren. Du kan også deaktivisere BBCode i et innlegg når du skriver eller endrer innlegget. BBCode ligner på HTML i formateringen, men taggene er omringet av firkant parenteser [ og ] i stedet for &lt; og &gt; og gir en bedre kontroll over hvordan noe blir vist. Mer informasjon om BBCode finner du på guiden i innleggsiden.");
$faq[] = array("Kan jeg bruke HTML?", "Det er opp til administratoren om du kan bruke HTML eller ikke. Hvis det er tillatt å bruke HTML vil du sannsynligvis bare kunne bruke noen tagger. Dette er en <i> sikkerhets </i> funksjon som skal hindre noen fra å utnytte forumet, ved å bruke tagger som kan ødelegge utseendet eller skape andre problemer. Hvis HTML er aktivisert kan du deaktivisere det når du skriver eller endrer innlegget.");
$faq[] = array("Hva er smil?", "Smil er små bilder som kan brukes til å uttrykke følelser ved å bruke en kort kode, f.eks. :) betyr glad, :( betyr lei seg. Hele listen av smil kan sees i innleggsiden. Prøv og begrense bruken av smil, da disse kan gjøre et innlegg uleselig og en moderator kan bestemme seg for å ta dem bort eller slette innlegget helt.");
$faq[] = array("Kan jeg bruke bilder?", "Du kan bruke bilder i dine innlegg. Derimot er det ingen funksjon for øyeblikket som tillater deg å laste opp bilder direkte til forumet. Du må derfor linke til et bilde som ligger på en offentlig Internett server, f.eks. http://www.et-ukjent-sted.net/mitt-bilde.gif. Du kan ikke linke til et bilde på din egen PC (hvis du ikke har en offentlig tilgjenglig server) eller bilder lagret bak passord mekanismer, som f.eks. hotmail eller yahoo e-post kontoer, passordbeskyttet sider, osv. For å vise et bilde kan du bruke enten BBCode [img] tagg eller HTML (hvis tillatt).");
$faq[] = array("Hva er annonseringer?", "Annonseringer er ofte viktig informasjon og bør leses snarest mulig. Annonseringer vises øverst på alle sidene i det forumet de er postet. Din mulighet til å skrive en annonsering er avhengig av hvilke rettigheter som er påkrevd. Disse er satt av administratoren.");
$faq[] = array("Hva er prioriterte temaer?", "Prioriterte temaer vises under annonseringene i forumet og kun på den første siden. De er som regel ganske viktige, så de bør leses snarest mulig. Administratoren bestemmer hvilke rettigheter du må ha for å skrive et prioritert tema i hvert forum.");
$faq[] = array("Hva er stengte temaer?", "Stengte temaer har blitt låst av moderatoren eller administratoren. Du kan ikke svare på et stengt tema, og eventuelle avstemninger er automatisk avsluttet. Temaer kan bli avsluttet av mange grunner.");


$faq[] = array("--","Bruker Nivåer og Grupper");
$faq[] = array("Hva er en administrator?", "En administrator er en enkelt bruker som er tildelt den høyeste grad av kontroll over hele forumet. Denne/disse brukerne kan kontrollere alle funksjoner av forum driften som inkluderer blant annet og sette rettigheter, utestenge brukere, lage brukergrupper eller moderatorer osv. De har også full moderator rettighet i alle forumene.");
$faq[] = array("Hva er en moderator?", "En moderator er en enkelt bruker (eller en gruppe brukere) som skal overvåke forumet fra dag til dag. Denne/disse brukerne har rettighetene til å endre eller slette innlegg, og låse/låse opp, flytte, slette og dele temaer i det forumet de modererer. Vanligvis er moderatorer der for å hindre brukere i og gå <i>utenfor tema</i> eller skrive upassende eller støtende innlegg.");
$faq[] = array("Hva er en brukergruppe?", "Administratorer kan dele brukere opp i brukergrupper. Hver bruker kan høre til flere grupper (dette er forskjellig fra de fleste andre forumer) og hver gruppe kan bli gitt individuelle rettigheter. Dette gjør det lett for administratoren å sette opp flere brukere som moderatorer for et forum, eller å gi dem rettighetene til å lese et privat forum, osv.");
$faq[] = array("Hvordan blir jeg medlem av en brukergruppe?", "For å bli medlem av en brukergruppe, klikk på Grupper linken. (Vanligvis øverst på siden avhengig av stilen valgt.) Du kan da se alle brukergruppene. Ikke alle grupper er <i>offentlig tilgjenglig</i>, noen er stengt og noen kan til og med ha skjult medlemskap. Dersom gruppen er åpen, kan du spørre om å bli medlem ved å klikke på den tilhørende knappen. Gruppe moderatoren må først godkjenne deg, og du kan få spørsmål om hvorfor du vil bli medlem av gruppen. Vennligst godta gruppe moderatorens svar hvis de gir deg avslag, et eventuelt avslag vil være godt begrunnet.");
$faq[] = array("Hvordan blir jeg en gruppe moderator?", "Brukergrupper er startet av administratoren som velger en gruppe moderator. Hvis du ønsker å starte en brukergruppe må du ta kontakt med administratoren. Send administratoren en privat melding.");


$faq[] = array("--","Private Meldinger");
$faq[] = array("Jeg kan ikke sende private meldinger!", "Det er tre grunner til dette; du er ikke registrert og/eller ikke logget inn, administratoren har deaktivisert private meldinger for hele forumet eller administratoren har stoppet deg fra å sende meldinger. Dersom det siste er tilfellet burde du spørre administratoren om grunnen.");
$faq[] = array("Jeg fortsetter å få uønskede private meldinger!", "I framtiden vil vi legge til en funksjon som gjør at du kan stoppe private meldinger fra en bruker. Dersom du fortsetter å motta uønskede private meldinger, kan du ta kontakt med administratoren. Administratoren kan (og kommer om nødvendig til å) ta fra en bruker rettighetene til å sende private meldinger.");
$faq[] = array("Jeg har mottatt spam, upassende eller støtende e-post fra noen i dette forumet!", "Vi beklager å høre dette. E-post funksjonen i dette forumet har en sikkerhets funksjon som kan hjelpe til å spore brukere som sender slike meldinger. Send en e-post til administratoren med en full kopi av e-posten du mottok. Det er veldig viktig at du inkluderer toppen da denne inneholder detaljer om hvilken bruker som sendte deg e-posten. Administratoren kan da ta affære.");


//
// These entries should remain in all languages and for all modifications
//

$faq[] = array("--","Spørsmål Angående phpBB 2.");
$faq[] = array("Hvem skrev dette forumet?", "Denne programvaren (i sin umodifiserte form) er produsert, lansert og har copyright av <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Den er gjort tilgjenglig under GNU General Public Licence og kan bli fritt distribuert, følg linken for mer informasjon.");
$faq[] = array("Hvorfor er ikke X funksjonen tilgjenglig?", "Denne programvaren er skrevet og lisensiert av phpBB Group. Ønsker du at en funksjon legges til forumet, send en forespørsel til phpBB Group på deres hjemmeside phpbb.com. Vennligst ikke send funksjonsetterspørsler til forumet hos phpbb.com, gruppen bruker sourceforge til å håndtere nye funksjoner. Vennligst les igjennom forumene for og se hva vår innstilling er til den ønskede funksjonen og følg prosedyren angitt der.");
$faq[] = array("Hvem kontakter jeg angående støtende og/eller rettslige saker relatert til dette forumet?", "Kontakt administratoren av dette forumet. Dersom du ikke kan finne ut hvem du skal kontakte, kan moderatorene være behjelpelige. Hvis du fortsatt ikke får kontakt må du kontakte eieren av domenet. (Gjør et whois søk.) Dersom forumet er på en fri server (f.eks. yahoo, free.fr, f2s.com, osv.), kontakter du de ansvarlige for driften der. Vennligst legg merke til at phpBB Group har absolutt ingen kontroll og kan på ingen måte bli holdt ansvarlig over hvordan, hvor eller av hvem dette forumet blir brukt. Det er meningsløst å kontakte phpBB Group angående rettslige saker som ikke er direkte relatert til phpbb.com sin hjemmeside, eller programvaren til phpBB. Hvis du sender e-post til phpBB Group angående tredjeparts bruk av denne programvaren, kan du vente deg et avvisende svar eller intet svar overhodet.");


//
// This ends the FAQ entries
//

?>