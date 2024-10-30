<?php

// Toplist
$lang['Toplist'] = 'Topliste';
$lang['Select_list'] = 'Bestimme wie die Liste angezeigt werden soll';
$lang['By_date'] = 'Nach Datum (Neue zuerst)';
$lang['By_download'] = 'Nach Downloads';
$lang['By_rated'] = 'Nach Bewertungen';
$lang['Latest_downloads'] = 'Letzte Downloads';
$lang['Most_downloads'] = 'Meiste Downloads';
$lang['Rated_downloads'] = 'Best bewertetste Downloads';

// Main
$lang['Files'] = 'Dateien';
$lang['Viewall'] = 'Alle Dateien anzeigen';
$lang['Vainfo'] = 'Alle Dateien in der Datenbank anzeigen';
$lang['Jump'] = "Eine Kategorie w�hlen";

// Sort
$lang['Sort'] = 'Sortieren';
$lang['Sortby'] = 'Sortiert nach';
$lang['Next'] = 'N�chste';
$lang['Pagenums'] = 'Seiten';
$lang['Prev'] = 'Vorherige';
$lang['Name'] = 'Name';

// Category
$lang['No_files'] = 'Keine Dateien gefunden';
$lang['No_files_cat'] = 'Es sind keine Dateien in dieser Kategorie.';

// File
$lang['File'] = 'Datei';
$lang['Desc'] = 'Beschreibung';
$lang['Creator'] = 'Ersteller';
$lang['Version'] = 'Version';
$lang['Scrsht'] = 'Screenshot';
$lang['Docs'] = 'Dokumentation';
$lang['Lastdl'] = 'Letzter Download';
$lang['Never'] = 'Nie';
$lang['Votes'] = ' Stimmen';
$lang['Date'] = 'Datum';
$lang['DlRating'] = 'Bewertung';
$lang['Dls'] = ' Downloads';
$lang['Downloadfile'] = 'Datei laden';

// License
$lang['License'] = 'Lizenzbestimmung';
$lang['Licensewarn'] = 'Zum Download mu�t du der Lizenz zustimmen';
$lang['Iagree'] = 'Ixh stimme zu';
$lang['Dontagree'] = 'Ich stimme nicht zu';

// Search
$lang['Search'] = 'Suche';
$lang['Search_for'] = 'Suche nach';
$lang['Results'] = 'Resultate f�r';
$lang['No_matches'] = 'Die Suche ergab keine Treffer';
$lang['Matches'] = 'Es wurden �bereinstimmungen gefunden f�r';

// Statistics
$lang['Statistics'] = 'Statistiken';
$lang['Stats_text'] = "Es sind " . $num[files] . " Dateien in " . $num[cats] . " Kategorien<br>";
$lang['Stats_text'] .= "Es gab bisher " . $totaldls[0] . " Downloads<br><br>";
$lang['Stats_text'] .= "Die neuste Datei ist <a href=dload.php?action=file&id=" . $newest[file_id] . ">" . $newest[file_name] . "</a><br>";
$lang['Stats_text'] .= "Die �lteste Datei ist <a href=dload.php?action=file&id=" . $oldest[file_id] . ">" . $oldest[file_name] . "</a><br><br>";
$lang['Stats_text'] .= "Die h�chste Bewertung ist " . $avg . "/10<br>";
$lang['Stats_text'] .= "Die beliebteste Datei, nach Bewertungen, ist <a href=dload.php?action=file&id=" . $popular[file_id] . ">" . $popular[file_name] . "</a> with a rating of " . $most . "/10<br>";
$lang['Stats_text'] .= "Die unbeliebteste Datei, nach Bewertungen, ist <a href=dload.php?action=file&id=" . $lpopular[file_id] . ">" . $lpopular[file_name] . "</a> with a rating of " . $least ."/10<br><br>";
$lang['Stats_text'] .= "Die durchschnitliche Anzahl an Downloads je Datei ist " . $avgdls . "<br>";
$lang['Stats_text'] .= "Die beliebteste Datei, nach Downloads, ist <a href=dload.php?action=file&id=" . $mostdl[file_id] . ">" . $mostdl[file_name] . "</a> with " . $mostdl[file_dls] . " downloads<br>";
$lang['Stats_text'] .= "Die unbeliebteste Datei, nach Downloads, ist <a href=dload.php?action=file&id=" . $leastdl[file_id] . ">" . $leastdl[file_name] . "</a> with " . $leastdl[file_dls] . " downloads<br>";

// Rate
$lang['Rate'] = 'Dateien bewerten';
$lang['Rerror'] = 'Du hast diese Datei bereits bewertet.';
$lang['Rateinfo'] = 'Du bewertest gerade die Datei: <i>{filename}</i>.<br>Bitte nimm eine der nachfolgenden M�glichkeiten. 1 sehr schlecht, 10 ist sehr gut.';
$lang['Rconf'] = 'Du hast der Datei: <i>{filename}</i> eine Wertung von {rate} gegeben.<br>Die Gesamtwertung der Datei ist nun {newrating}/10.';
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
$lang['Emailfile'] = 'Datei per E-mail an Freunde';
$lang['Emailinfo'] = 'Wenn Du einen Freund �ber eine Datei informieren willst kannst Du einfach das Formular ausf�llen und Dein Freund erh�lt eine Email mit den Informationen zur Datei!<br>Felder die mit * gekennzeichnet sind m�ssen ausgef�llt werden';
$lang['Yname'] = 'Dein Name';
$lang['Yemail'] = 'Deine E-mail Adresse';
$lang['Fname'] = 'Name des Freundes';
$lang['Femail'] = 'E-mail Adresse des Freundes';
$lang['Esub'] = 'E-mail Betreff';
$lang['Etext'] = 'E-mail Text';
$lang['Defaultmail'] = 'Ich glaube ein Download dieser Datei w�rde sich lohnen';
$lang['Semail'] = 'E-mail absenden';
$lang['msg'] = "Hallo " . $friend[name] . "<br>";
$lang['msg'] .= "" . $email[message] . "<br><br>";
$lang['msg'] .= "----------<br>";
$lang['msg'] .= "Diese E-mail wurde versand durch " . $config[settings_dbname] . " Datei Datenbank. Der Administrator von {dbname} �bernimmt keine Verantwortung f�r die �ber die Datenbank versandte Nachricht.";
$lang['Econf'] = "Deine E-mail wurde abgeschickt.";

// Comments
$lang['Comments'] = 'Kommentare';
$lang['Comments_title'] = 'Kommentar Titel';
$lang['Comment_subject'] = 'Betreff';
$lang['Comment'] = 'Kommentar';
$lang['Post_comment'] = 'Kommentar erstellen';
$lang['Comment_explain'] = 'Benutze die Box oberhalb um Deine Meinung zur Datei mitzuteilen!';
$lang['Comment_add'] = 'Kommentar hinzuf�gen';
$lang['Comment_delete'] = 'L�schen';
$lang['Comment_posted'] = 'Dein Kommentar wurde �bernommen';
$lang['Comment_deleted'] = 'Der von Dir gew�hlte Kommentar wurde gel�scht';
$lang['Comment_desc'] = 'Titel';
$lang['No_comments'] = 'Keine Kommentare bislang.';

// General
$lang['Click_return'] = 'Klicke %sHier%s um zur vorigen Seite zur�ckzukehren';
$lang['never'] = "Keine";
$lang['isdisabled'] = "Der Download wurde deaktiviert";
$lang['jump'] = "W�hle eine Kategorie";

?>