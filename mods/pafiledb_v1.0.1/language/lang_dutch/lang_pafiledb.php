<?php 

// Toplist 
$lang['Toplist'] = 'Toplijst'; 
$lang['Select_list'] = 'Selecteer de type van lijst dewelke je wil tonen'; 
$lang['By_date'] = 'Volgens Datum (Nieuwste eerst)'; 
$lang['By_download'] = 'Volgens Downloads'; 
$lang['By_rated'] = 'Volgens Top Rated'; 
$lang['Latest_downloads'] = 'Laatste Downloads'; 
$lang['Most_downloads'] = 'Meeste Downloads'; 
$lang['Rated_downloads'] = 'Top Rated Downloads'; 

// Main 
$lang['Files'] = 'Bestanden'; 
$lang['Viewall'] = 'Bekijk Alle Bestanden'; 
$lang['Vainfo'] = 'Bekijk alle bestanden in de databank'; 
$lang['Jump'] = "Selecteer een categorie"; 

// Sort 
$lang['Sort'] = 'Sorteer'; 
$lang['Sortby'] = 'Sorteer Volgens'; 
$lang['Next'] = 'Volgende'; 
$lang['Pagenums'] = 'Paginas'; 
$lang['Prev'] = 'Vorige'; 
$lang['Name'] = 'Naam'; 

// Category 
$lang['No_files'] = 'Geen bestanden gevonden'; 
$lang['No_files_cat'] = 'Er zijn geen bestanden in deze categorie.'; 

// File 
$lang['File'] = 'Bestand'; 
$lang['Desc'] = 'Omschrijving'; 
$lang['Creator'] = 'Maker'; 
$lang['Version'] = 'Versie'; 
$lang['Scrsht'] = 'Schermafbeelding'; 
$lang['Docs'] = 'Documentatie'; 
$lang['Lastdl'] = 'Laatste Download'; 
$lang['Never'] = 'Nooit'; 
$lang['Votes'] = ' stemmen'; 
$lang['Date'] = 'Datum'; 
$lang['DlRating'] = 'Beoordeling'; 
$lang['Dls'] = ' Downloads'; 
$lang['Downloadfile'] = 'Download Bestand'; 

// License 
$lang['License'] = 'Licensie Overeenkomst'; 
$lang['Licensewarn'] = 'Je moet akoord gaan met de licensie Overeenkomst om dit bestand te downloaden'; 
$lang['Iagree'] = 'I Ga Akoord'; 
$lang['Dontagree'] = 'I Ga Niet Akoord'; 

// Search 
$lang['Search'] = 'Zoek'; 
$lang['Search_for'] = 'Zoek naar'; 
$lang['Results'] = 'Resultaten voor'; 
$lang['No_matches'] = 'Sorry, geen overeenstemming gevonden voor'; 
$lang['Matches'] = 'overeenstemming werd gevonden voor'; 

// Statistics 
$lang['Statistics'] = 'Statistieken'; 
$lang['Stats_text'] = "Er zijn " . $num[files] . " bestanden in " . $num[cats] . " categories<br>"; 
$lang['Stats_text'] .= "Er waren " . $totaldls[0] . " downloads tot nu<br><br>"; 
$lang['Stats_text'] .= "Het nieuwste bestand is <a href=" . append_sid("dload.php?action=file&id=" . $newest[file_id]) . ">" . $newest[file_name] . "</a><br>"; 
$lang['Stats_text'] .= "Het oudste bestand is <a href=" . append_sid("dload.php?action=file&id=" . $oldest[file_id]) . ">" . $oldest[file_name] . "</a><br><br>"; 
$lang['Stats_text'] .= "De gemiddelde beoordeling voor een bestand is is " . $avg . "/10<br>"; 
$lang['Stats_text'] .= "Het meest populaire bestand volgens zijn beoordeling is <a href=" . append_sid("dload.php?action=file&id=" . $popular[file_id]) . ">" . $popular[file_name] . "</a> met een beoordeling van " . $most . "/10<br>"; 
$lang['Stats_text'] .= "Het minst populaire bestand volgens zijn beoordeling is <a href=" . append_sid("dload.php?action=file&id=" . $lpopular[file_id]) . ">" . $lpopular[file_name] . "</a> met een beoordeling van " . $least ."/10<br><br>"; 
$lang['Stats_text'] .= "Het gemiddelde aantal downloads voor elk bestand is " . $avgdls . "<br>"; 
$lang['Stats_text'] .= "Het meest populaire bestand volgens het aantal downloads is <a href=" . append_sid("dload.php?action=file&id=" . $mostdl[file_id]) . ">" . $mostdl[file_name] . "</a> met " . $mostdl[file_dls] . " downloads<br>"; 
$lang['Stats_text'] .= "Het minst populaire bestand volgens het aantal downloads is <a href=" . append_sid("dload.php?action=file&id=" . $leastdl[file_id]) . ">" . $leastdl[file_name] . "</a> met " . $leastdl[file_dls] . " downloads<br>"; 

// Rate 
$lang['Rate'] = 'Beoordeel bestand'; 
$lang['Rerror'] = 'Sorry, maar je hebt dit bestand reeds beoordeeld.'; 
$lang['Rateinfo'] = 'Je gaat een beoordeling geven aan het bestand <i>{filename}</i>.<br>Gelieve een beoordeling te selecteren. 1 is het slechts, 10 is het beste.'; 
$lang['Rconf'] = 'Je hebt <i>{filename}</i> een beoordeling van {rate} gegeven.<br>Dit geeft het bestand een algemene beoordeling van {newrating}/10.'; 
$lang['R1'] = '1'; 
$lang['R2'] = '2'; 
$lang['R3'] = '3'; 
$lang['R4'] = '4'; 
$lang['R5'] = '5'; 
$lang['R6'] = '6'; 
$lang['R7'] = '7'; 
$lang['R8'] = '8'; 
$lang['R9'] = '9'; 
$lang['R10'] = '10'; 

// Email 
$lang['Emailfile'] = 'E-mail Bestand naar een Vriend'; 
$lang['Emailinfo'] = 'Indien je een vriend wil laten weten over dit bestand, kan je dit formulier invullen en versturen om een email te sturen met informatie over dit bestand<br>Items aangeduid met een * zijn verplichte velden'; 
$lang['Yname'] = 'Uw Naam'; 
$lang['Yemail'] = 'Uw E-mail Adres'; 
$lang['Fname'] = 'Naam Vriend'; 
$lang['Femail'] = 'E-mail Adres Vriend'; 
$lang['Esub'] = 'E-mail Onderwerp'; 
$lang['Etext'] = 'E-mail Tekst'; 
$lang['Defaultmail'] = 'Ik dacht dat je interesse zou hebben om dit bestand te downloaden dat je kan vinden op'; 
$lang['Semail'] = 'Stuur E-mail'; 
$lang['msg'] = "Hallo " . $friend[name] . "<br>"; 
$lang['msg'] .= "" . $email[message] . "<br><br>"; 
$lang['msg'] .= "----------<br>"; 
$lang['msg'] .= "Deze e-mail werd verzonden vanaf de " . $config[settings_dbname] . " bestanden databank. De webmasters van de {dbname} bestanden databank nemen geen verantwoordelijkheid voor de e-mails verzonden vanaf de databank."; 
$lang['Econf'] = "Uw e-mail is succesvol verzonden."; 

// Comments 
$lang['Comments'] = 'Commentaren'; 
$lang['Comments_title'] = 'Commentaar Titel'; 
$lang['Comment'] = 'Commentaar'; 
$lang['Post_comment'] = 'Post Commentaar';
$lang['Comment_explain'] = 'Gebruik de bovenstaande tekst box om uw opinie te geven over dit bestand!'; 
$lang['Comment_add'] = 'Commentaar Toevoegen'; 
$lang['Comment_delete'] = 'Wis'; 
$lang['Comment_posted'] = 'Uw commentaar is succesvol aangekomen'; 
$lang['Comment_deleted'] = 'De geselecteerde commentaar is succesvol gewist'; 
$lang['Comment_desc'] = 'Titel'; 
$lang['No_comments'] = 'Er is nog geen commentaar gepost.'; 
$lang['Comment_subject'] = 'Commentaar subject';

// General 
$lang['Click_return'] = 'Klik %sHier%s om terug naar de vorige pagina te gaan'; 
$lang['never'] = "Geen"; 
$lang['isdisabled'] = "Download Databank is uitgeschakeld"; 
$lang['jump'] = "Selecteer een categorie"; 

?>
