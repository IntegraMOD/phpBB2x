<?php

// Toplist 
$lang['Toplist'] = 'Toplist'; 
$lang['Select_list'] = 'Selezionate il tipo di elenco da mostrare'; 
$lang['By_date'] = 'Per data (nuovi prima)'; 
$lang['By_download'] = 'Per Downloads'; 
$lang['By_rated'] = 'Per valutazione'; 
$lang['Latest_downloads'] = 'Ultimi Downloads'; 
$lang['Most_downloads'] = 'Più scaricati'; 
$lang['Rated_downloads'] = 'Downloads più votati'; 

// Main 
$lang['Files'] = 'Files'; 
$lang['Viewall'] = 'Mostra tutti i Files'; 
$lang['Vainfo'] = 'Mostra tutti i files nel database'; 
$lang['Jump'] = "Seleziona una categoria"; 

// Sort 
$lang['Sort'] = 'Ordina'; 
$lang['Sortby'] = 'Ordina per'; 
$lang['Next'] = 'Successivo'; 
$lang['Pagenums'] = 'Pagine'; 
$lang['Prev'] = 'Precedente'; 
$lang['Name'] = 'Nome'; 

// Category 
$lang['No_files'] = 'Nessun file trovato'; 
$lang['No_files_cat'] = 'Questa categoria non contiene files.'; 

// File 
$lang['File'] = 'File'; 
$lang['Desc'] = 'Descrizione'; 
$lang['Creator'] = 'Autore'; 
$lang['Version'] = 'Versione'; 
$lang['Scrsht'] = 'Screenshot'; 
$lang['Docs'] = 'Documentazione'; 
$lang['Lastdl'] = 'Ultimo Download'; 
$lang['Never'] = 'Mai'; 
$lang['Votes'] = ' voti'; 
$lang['Date'] = 'Data'; 
$lang['DlRating'] = 'Valutazione'; 
$lang['Dls'] = ' Downloads'; 
$lang['Downloadfile'] = 'Download File'; 

// License 
$lang['License'] = 'Licenza d\'uso'; 
$lang['Licensewarn'] = 'Dovete accettare la licenza d\'uso prima di scaricare il file'; 
$lang['Iagree'] = 'Accetto'; 
$lang['Dontagree'] = 'Non accetto'; 

// Search 
$lang['Search'] = 'Ricerca'; 
$lang['Search_for'] = 'Ricerca per'; 
$lang['Results'] = 'Risultati per'; 
$lang['No_matches'] = 'Spiacente, nessun risultato per '; 
$lang['Matches'] = 'risultati per '; 

// Statistics 
$lang['Statistics'] = 'Statistiche'; 
$lang['Stats_text'] = "Ci sono " . $num[files] . " files in " . $num[cats] . " categorie<br>"; 
$lang['Stats_text'] .= "Sono stati effettuati " . $totaldls[0] . " downloads totali<br><br>"; 
$lang['Stats_text'] .= "Il file più recente è <a href=" . append_sid("dload.php?action=file&id=" . $newest[file_id]) . ">" . $newest[file_name] . "</a><br>"; 
$lang['Stats_text'] .= "Il file più vecchio è <a href=" . append_sid("dload.php?action=file&id=" . $oldest[file_id]) . ">" . $oldest[file_name] . "</a><br><br>"; 
$lang['Stats_text'] .= "La valutazione media dei files è " . $avg . "/10<br>"; 
$lang['Stats_text'] .= "Il file con la valutazione più alta è <a href=" . append_sid("dload.php?action=file&id=" . $popular[file_id]) . ">" . $popular[file_name] . "</a> with a rating of " . $most . "/10<br>"; 
$lang['Stats_text'] .= "Il file con la valutazione più bassa è <a href=" . append_sid("dload.php?action=file&id=" . $lpopular[file_id]) . ">" . $lpopular[file_name] . "</a> with a rating of " . $least ."/10<br><br>"; 
$lang['Stats_text'] .= "The average amount of downloads each file has is " . $avgdls . "<br>"; 
$lang['Stats_text'] .= "Il file con il maggior numero di download è <a href=" . append_sid("dload.php?action=file&id=" . $mostdl[file_id]) . ">" . $mostdl[file_name] . "</a> with " . $mostdl[file_dls] . " downloads<br>"; 
$lang['Stats_text'] .= "Il file con il minor numero di download è <a href=" . append_sid("dload.php?action=file&id=" . $leastdl[file_id]) . ">" . $leastdl[file_name] . "</a> with " . $leastdl[file_dls] . " downloads<br>"; 

// Rate 
$lang['Rate'] = 'Valuta file'; 
$lang['Rerror'] = 'Spiacente, hai già valutato questo file.'; 
$lang['Rateinfo'] = 'Stai per valutare il file <i>{filename}</i>.<br> Selezionate una valutazione. 1 è il peggiore, 10 il migliore.'; 
$lang['Rconf'] = 'Avete valutato il file <i>{filename}</i> con un punteggio {rate}.<br> Dopo questa operazione la valutazione del file diventa {newrating}/10.'; 
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
$lang['Emailfile'] = 'Manda il file via E-mail ad un amico'; 
$lang['Emailinfo'] = 'Se volete segnalare ad un amico questo file, potete riempire i campi del form ed inviare tramite lo stesso, una email contenente l\'informazione del file al vostro amico<br> E\' obbligatorio compilare i campi con *.'; 
$lang['Yname'] = 'Il vostro nome.'; 
$lang['Yemail'] = 'La vostra email.'; 
$lang['Fname'] = 'Il nome dell\'amico-'; 
$lang['Femail'] = 'L\'email dell\'amico.'; 
$lang['Esub'] = 'Titolo dell\'email'; 
$lang['Etext'] = 'Testo dell\'email'; 
$lang['Defaultmail'] = 'Ho pensato ti interessasse questo file che ho trovato su'; 
$lang['Semail'] = 'Invia E-mail'; 
$lang['msg'] = "Ciao " . $friend[name] . "<br>"; 
$lang['msg'] .= "" . $email[message] . "<br><br>"; 
$lang['msg'] .= "----------<br>"; 
$lang['msg'] .= "Questa email è stata inviata per mezzo del file database di " . $config[settings_dbname] . " . Il webwebmasterl file database di {dbname} non si assume alcuna responsabilità per le email così trasmesse."; 
$lang['Econf'] = "Email inviata con successo."; 

// Comments 
$lang['Comments'] = 'Commenti'; 
$lang['Comments_title'] = 'Titolo commenti'; 
$lang['Comment_subject'] = 'Soggetto del commento'; 
$lang['Comment'] = 'Commenti'; 
$lang['Post_comment'] = 'Commento';
$lang['Comment_explain'] = 'Usate la casella di testo per esprimere un\'opinione su questo file!'; 
$lang['Comment_add'] = 'Aggiungi commento'; 
$lang['Comment_delete'] = 'Cancella'; 
$lang['Comment_posted'] = 'Il vostro commento è stato inserito'; 
$lang['Comment_deleted'] = 'Il commento selselezionatostato cancellato'; 
$lang['Comment_desc'] = 'Titolo'; 
$lang['No_comments'] = 'Nessun commento inserito sinora.'; 

// General 
$lang['Click_return'] = 'Clicca %sQui%s per tornare alla pagina precedente'; 
$lang['never'] = "Nessuno"; 
$lang['isdisabled'] = "Il download è disabilitato"; 
$lang['jump'] = "Selezionate una categoria";

?>
