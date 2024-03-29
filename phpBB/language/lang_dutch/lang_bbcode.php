<?php
/***************************************************************************
 *                         lang_bbcode.php [dutch]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.1.2.1 2002/11/14 14:00:11 psotfx Exp $
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
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Introductie");
$faq[] = array("Wat is BBCode?", "BBCode is een speciale bewerking van HTML. Of je al dan niet BBCode in je berichten op het forum kan gebruiken is bepaald door de beheerder. Je kan BBCode al dan niet aanzetten in een nieuw postformulier. BBCode is gelijk aan HTML, maar tags zijn ingesloten in rechte haken [ en ] ipv &lt; en &gt; en het geeft meer controle over wat gebruikt is. Alles hangt af van de template die je gebruikt waar je BBCode in je bericht kan gebruiken via een klikbare interface boven het berichtvak op je postformulier. Zelfs daarmee is deze gids nog bruikbaar.");

$faq[] = array("--","Tekst opmaak");
$faq[] = array("Hoe vet, italic en onderlijnde tekst maken", "BBCode heeft ook tags die je toelaten om snel de basisopmaak van je tekst aan te passen. Dit kan op de volgende manier: <ul><li>Om een deel van de tekst in het vet te tonen plaats je die tussen <b>[b][/b]</b>, bijvoorbeeld: <br /><br /><b>[b]</b>Hallo<b>[/b]</b><br /><br />wordt dan <b>Hallo</b></li><li>Voor onderlijning gebruik je <b>[u][/u]</b>, bijvoorbeeld:<br /><br /><b>[u]</b>Goede morgen<b>[/u]</b><br /><br />wordt <u>Goede morgen</u></li><li>Voor italic tekst (schuin) gebruik je <b>[i][/i]</b>, bijvoorbeeld:<br /><br />Dit is <b>[i]</b>Geweldig!<b>[/i]</b><br /><br />wordt: <i>Geweldig!</i></li></ul>");
$faq[] = array("Hoe tekstkleur of grootte aanpassen", "Om de grootte en kleur van een tekst te wijzigen gebruik je volgende tags. Vergeet niet dat de lezer van uw bericht niet hetzelfde browser of systeem heeft en er dus zichbare verschillen kunnen zijn: <ul><li>Tekst kleuren kan je doen door de tekst tussen volgende tags te plaatsen <b>[color=][/color]</b>. Je kan een bepaalde kleur gebruiken (bijvoorbeeld. red, blue, yellow, enz.) of de hexigonale code, bvb. #FFFFFF, #000000. Bijvoorbeeld, om een tekst rood te maken gebruik je:<br /><br /><b>[color=red]</b>Hallo!<b>[/color]</b><br /><br />of<br /><br /><b>[color=#FF0000]</b>Hallo!<b>[/color]</b><br /><br />geeft beide als resultaat <span style=\"color:red\">Hallo!</span></li><li>De grootte van een tekst aanpassen gebeurt ongeveer op dezelfde manier <b>[size=][/size]</b>. Deze tag kan verschillen volgens de template die je gebruikt maar het aanbevolen formaat is een numerieke waarde die de tekstgroote weergeeft in pixels, beginnend bij 1 (zo klein dat je het zelfs niet ziet) tot 29 (zeer groot). Bijvoorbeeld:<br /><br /><b>[size=9]</b>KLEIN<b>[/size]</b><br /><br />wordt <span style=\"font-size:9px\">KLEIN</span><br /><br />en:<br /><br /><b>[size=24]</b>GROOT!<b>[/size]</b><br /><br />wordt <span style=\"font-size:24px\">GROOT!</span></li></ul>");
$faq[] = array("Kan ik verschillende tags samen gebruiken?", "Natuurlijk kan dat, bijvoorbeeld om iemands aandacht te trekken kan je schrijven:<br /><br /><b>[size=18][color=red][b]</b>ZIE JE ME!<b>[/b][/color][/size]</b><br /><br />dit geeft als resultaat <span style=\"color:red;font-size:18px\"><b>ZIE JE ME!</b></span><br /><br />We raden je aan deze tekstwijze niet dikwijls te gebruiken! Vergeet niet dat je het bericht nakijkt dat alle tags gesloten zijn, en in de goede volgorde. Bijvoorbeeld het volgende is niet juist:<br /><br /><b>[b][u]</b>Dit is verkeerd<b>[/b][/u]</b>");

$faq[] = array("--","Quoting (aanhaling) en vaste-afmeting tekst");
$faq[] = array("Tekst aanhalen in antwoorden", "Er zijn twee manieren om een tekst aan te halen, met of zonder een referentie.<ul><li>Waneer je de quote (aanhaling) functie gebruikt om op een bericht te antwoorden zal je zien dat de tekst van het bericht is toegevoegd in het venster van nieuw bericht in een <b>[quote=\"\"][/quote]</b> blok. Deze methode laat je toe een aanhaling te maken naar een persoon of wat anders! Om bijvoorbeeld een stuk tekst van Mr. Blobby aan te halen:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Hier komt Mr. Blobby zijn tekst<b>[/quote]</b><br /><br />Het resultaat plaatst automatisch wat Mr. Blobby schreef erbij: voor uw tekst. Onthou dat je \"\" tekens <b>moet</b> plaatsen rond de naam die je aanhaald!</li><li>De tweede methode laat je toe om blindelings iets aan te halen. Dit kan door de tekst tussen <b>[quote][/quote]</b> tags te plaatsen. Waneer je de tekst bekijkt zie je, Quote: voor de tekst zelf.</li></ul>");
$faq[] = array("Code voor vaste-afmeting data", "Als je voor een deel van een code of andere teksten vaste-afmeting nodig hebt, bijvoorbeeld het Courier font moet je de tekst tussen <b>[code][/code]</b> tags plaatsen, bijvoorbeeld<br /><br /><b>[code]</b>echo \"Dit is een code\";<b>[/code]</b><br /><br />Alle gebruikte formaten binnen de <b>[code][/code]</b> tags zijn onthouden wanneer je de tekst later bekijkt.");

$faq[] = array("--","Lijsten maken");
$faq[] = array("Een niet geordende lijst maken", "BBCode ondersteund twee soorten lijsten, ongeordend en geordend. Deze zijn hoofdzakelijk dezelfde als hun HTML equivalenten. Een ongeordende lijst plaatst elk item in uw lijst het een na het andere met een bolletje. Om een niet geordende lijst te maken gebruik je <b>[list][/list]</b> en om elk item aan te duiden <b>[*]</b>. Om bijvoorbeeld je favorite kleuren aan te duiden gebruik je:<br /><br /><b>[list]</b><br /><b>[*]</b>Rood<br /><b>[*]</b>Blauw<br /><b>[*]</b>Geel<br /><b>[/list]</b><br /><br />Dit maakt volgende lijst:<ul><li>Rood</li><li>Blauw</li><li>Geel</li></ul>");
$faq[] = array("Een geordende lijst maken", "De tweede soort lijst, een geordende lijst geeft je controle over wat er staat voor elk item. Om een geordende lijst te maken gebruik je: <b>[list=1][/list]</b> om een genummerde lijst te maken en <b>[list=a][/list]</b> voor een alfabetische. Zoals met een niet geordende lijst duid je de items aan met <b>[*]</b>. Bijvoorbeeld:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Ga naar de winkel<br /><b>[*]</b>Koop een nieuwe computer<br /><b>[*]</b>Misschien ook een printer<br /><b>[/list]</b><br /><br />maakt het volgende:<ol type=\"1\"><li>Ga naar de winkel</li><li>Koop een nieuwe computer</li><li>Misschien ook een printer</li></ol>Voor een alfabetische lijst gebruik je:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Het eerste antwoord<br /><b>[*]</b>Het tweede antwoord<br /><b>[*]</b>Het derde antwoord<br /><b>[/list]</b><br /><br />wordt<ol type=\"a\"><li>Het eerste antwoord</li><li>Het tweede antwoord</li><li>Het derde antwoord</li></ol>");

$faq[] = array("--", "Links aanmaken");
$faq[] = array("Link naar een andere site", "BBCode ondersteunt een aantal manieren om URIs, (Uniform Resource Indicators) te maken beter bekend als URLs.<ul><li>De eerste die je kan gebruiken is de <b>[url=][/url]</b> tag, wat je ook typt na het = teken zal zich voordoen als een URL. Als voorbeeld een link naar phpBB.com, kan je dit gebruiken:<br /><br /><b>[url=http://www.phpbb.com/]</b>Bezoek phpBB!<b>[/url]</b><br /><br />Dit maakt de volgende link: <a href=\"http://www.phpbb.com/\" target=\"_blank\">Bezoek phpBB!</a> Je zal zien dat deze link een nieuw venster opent zodat de gebruiker in het forum kan blijven als hij wenst.</li><li>Als je wil dat de URL zichzelf toont als link kan je dit doen door volgende tag:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Dit maakt volgende link, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Nu heeft phpBB ook iets genaamd <i>Magische Links</i>, dit maakt van elke juiste URL een link zonder dat je een tag moet plaatsen of het begin http://. Als je bijvoorbeeld www.phpbb.com in een bericht typt krijg je automatisch <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> als je je bericht bekijkt.</li><li>Hetzelfde geld ook voor een e-mailadres, je kan ofwel een e-mailadres specificeren:<br /><br /><b>[email]</b>nie.mand@domein.adr<b>[/email]</b><br /><br />wat het volgende weergeeft: <a href=\"emailto:nie.mand@domein.adr\">nie.mand@domein.adr</a> of je kan gewoon nie.mand@domein.adr in je bericht typen en het wordt onmiddelijk naar een e-maillink gebracht wnneer je het bericht bekijkt.</li></ul>Zoals met alle BBCode tags kan je allerlei tags gebruike voor een URL zoals <b>[img][/img]</b> (zie volgend onderwerp), <b>[b][/b]</b>, enz. Het is aan jullie erop te letten dat je de juiste open of gesloten tag gebruikt, bijvoorbeeld:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />is <u>niet</u> juist wat kan leiden tot het wissen van uw bericht, dus opgepast.");

$faq[] = array("--", "Afbeeldingen tonen in berichten");
$faq[] = array("Een afbeelding toevoegen aan een bericht", "BBCode bevat een tag om afbeeldingen te plaatsen in je bericht. Twee belangrijke zaken te onthouden bij het gebruik van deze tag zijn; vele gebruikers hebben niet graag teveel afbeeldingen in berichten en tevens moet de afbeelding die je wil tonen beschikbaar zijn op het Internet (niet enkel op je computer bijvoorbeeld, of je hebt een eigen webserver!). Momenteel is er geen mogelijkheid om afbeeldingen op te slaan met phpBB (al deze zaken zijn misschien beschikbaar in de volgende release van phpBB). Om een afbeelding te tonen moet je de URL tussen <b>[img][/img]</b> tags plaatsen. Bijvoorbeeld:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Zoals in de bovenstaande URL beschrijving kan je een afbeelding in <b>[url][/url]</b> tags plaatsen om een link te maken, bijvoorbeeld<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />maakt:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Andere");
$faq[] = array("Kan ik mijn eigen tags toevoegen?", "Nee, niet in phpBB 2.0. We plannen om aanpasbare BBCode tags te maken in een volgende versie.");

//
// This ends the BBCode guide entries
//

?>
