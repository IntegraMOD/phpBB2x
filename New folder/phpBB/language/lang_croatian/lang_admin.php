<?php

/***************************************************************************
 *                            lang_admin.php [Croatian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.9 2003/06/10 00:31:19 psotfx Exp $
 *
 ****************************************************************************/

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
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//

$lang['General'] = 'Opæenito';
$lang['Users'] = 'Korisnici/e';
$lang['Groups'] = 'Grupe';
$lang['Forums'] = 'Forumi';
$lang['Styles'] = 'Stilovi';

$lang['Configuration'] = 'Konfiguracija';
$lang['Permissions'] = 'Dozvole';
$lang['Manage'] = 'Administracija';
$lang['Disallow'] = 'Nedopuštena imena';
$lang['Prune'] = 'Izbrisivanje';
$lang['Mass_Email'] = 'Skupni e-mail';
$lang['Ranks'] = 'Statusi';
$lang['Smilies'] = 'Smajliæi';
$lang['Ban_Management'] = 'Iskljuèivanje';
$lang['Word_Censor'] = 'Cenzura rijeèi';
$lang['Export'] = 'Eksport';
$lang['Create_new'] = 'Kreiranje';
$lang['Add_new'] = 'Dodavanje';
$lang['Backup_DB'] = 'Backup baze';
$lang['Restore_DB'] = 'Restore baze';

//
// Index
//

$lang['Admin'] = 'Izbornik';
$lang['Not_admin'] = 'Niste ovlašteni za administriranje foruma.';
$lang['Welcome_phpBB'] = 'Dobro došli na phpBB';
$lang['Admin_intro'] = 'Hvala Vam što ste izabrali phpBB kao rješenje za Vaš forum.<br />Na ovu stranicu se možete vratiti klikom na <u>Index</u> link na lijevom izborniku.<br />Na poèetnu stranicu foruma se možete vratiti klikom na <u>Forum</u> link na lijevom izborniku.<br />Ostali linkovi, s izbornika lijevo, Vas vode na stranice na kojima možete podesiti sve aspekte ovog foruma.';
$lang['Main_index'] = 'Forum';
$lang['Forum_stats'] = 'Statistika';
$lang['Admin_Index'] = 'Index';
$lang['Preview_forum'] = 'Prikaz foruma';

$lang['Click_return_admin_index'] = 'Kliknite %sovdje%s za povratak na Index.';

$lang['Statistic'] = 'Statistika';
$lang['Value'] = 'Vrijednost';
$lang['Number_posts'] = 'Broj postova';
$lang['Posts_per_day'] = 'Postova dnevno';
$lang['Number_topics'] = 'Broj tema';
$lang['Topics_per_day'] = 'Tema dnevno';
$lang['Number_users'] = 'Broj korisnika/ca';
$lang['Users_per_day'] = 'Korisnika/ca dnevno';
$lang['Board_started'] = 'Forum pokrenut';
$lang['Avatar_dir_size'] = 'Velièina Avatar mape';
$lang['Database_size'] = 'Velièina baze';
$lang['Gzip_compression'] ='Gzip kompresija';
$lang['Not_available'] = 'Nedostupno';

$lang['ON'] = 'DA'; // This is for GZip compression
$lang['OFF'] = 'NE'; 


//
// DB Utils
//

$lang['Database_Utilities'] = 'Alati za bazu';

$lang['Restore'] = 'Restore';
$lang['Backup'] = 'Backup';
$lang['Restore_explain'] = 'Ovdje možete izvršiti potpuni povrat svih phpBB tabela iz [ranije] snimljene datoteke.<br />Ako Vaš server podržava tu opciju, možete uploadati gzip-kompresiranu tekst datoteku koja æe automatski biti dekompresirana.<br /><b>UPOZORENJE:</b> ovime æete prepisati postojeæe podatke.<br />Proces može [po]trajati poduže, stoga, ostanite na ovoj stranici dok operacija ne bude zgotovljena.';
$lang['Backup_explain'] = 'Ovdje možete backupirati [napraviti kopiju] sve Vaše phpBB podatke.<br />Ako imate bilo kakve dodatne tabele, u istoj bazi s phpBB, koje biste željeli backupirati, unesite njihova imena, odvojena zarezima, u <i>Dodatne tabele</i>.<br />Ako Vaš server podržava tu opciju, možete koristiti gzip kompresiju kako biste smanjili velièinu datoteke prije downloadiranja.';

$lang['Backup_options'] = 'Backup opcije';
$lang['Start_backup'] = 'Zapoènite Backup';
$lang['Full_backup'] = 'Potpun Backup';
$lang['Structure_backup'] = 'Strukturalni Backup';
$lang['Data_backup'] = 'Podatkovni Backup';
$lang['Additional_tables'] = 'Dodatne tabele';
$lang['Gzip_compress'] = 'Gzip kompresirana datoteka';
$lang['Select_file'] = 'Izaberite datoteku';
$lang['Start_Restore'] = 'Zapoènite Restore';

$lang['Restore_success'] = 'Baza je uspješno povraæena.<br /><br />Forum bi sada trebao biti u stanju u kakvom je bio kada je napravljen Backup.';
$lang['Backup_download'] = 'Download æe poèeti ubrzo; prièekajte dok ne poène.';
$lang['Backups_not_supported'] = 'Backup baze trenutno nije sistemski podržan.';

$lang['Restore_Error_uploading'] = 'Došlo je do greške prilikom uploadiranja Backup datoteke.';
$lang['Restore_Error_filename'] = 'Došlo je do problema s imenom datoteke; probajte s alternativnom datotekom.';
$lang['Restore_Error_decompress'] = 'Nije moguæe dekompresirati Gzip datoteku.<br />Pokušajte s uploadom Plain Text verzije.';
$lang['Restore_Error_no_file'] = 'Nijedna datoteka nije uploadirana.';

//
// Auth pages
//

$lang['Select_a_User'] = 'Izaberite korisnika/cu';
$lang['Select_a_Group'] = 'Izaberite grupu';
$lang['Select_a_Forum'] = 'Izaberite forum';
$lang['Auth_Control_User'] = 'Kontrola dozvola korisnika/ca';
$lang['Auth_Control_Group'] = 'Kontrola dozvola grupa';
$lang['Auth_Control_Forum'] = 'Kontrola dozvola foruma';
$lang['Look_up_User'] = 'Potražite korisnika/cu';
$lang['Look_up_Group'] = 'Potražite grupu';
$lang['Look_up_Forum'] = 'Potražite forum';

$lang['Group_auth_explain'] = 'Ovdje možete definirati dozvole i moderatorski status svake Korisnièke grupe.<br />Obratite pažnju na individualne postavke koje ste dodijelili korisniku/ci - ako su drugaèije od postavki koje ste dodijelili Korisnièkoj grupi korisnik/ca æe i dalje moæi koristiti dozvole koje ste mu/joj individualno dodijelili [ukoliko se dogodi da postavke ne budu identiène - bit æete obaviješteni o tome].';
$lang['User_auth_explain'] = 'Ovdje možete definirati dozvole i moderatorski status svakog/e korisnika/ce.<br />Obratite pažnju na postavke koje ste dodijelili Korisnièkoj grupi [ako je koje korisnik/ca èlan/ica] - ako su drugaèije od postavki koje ste dodijelili individualno korisniku/ci on/a æe i dalje moæi koristiti dozvole koje ste dodijelili Korisnièkoj grupi [ukoliko se dogodi da postavke ne budu identiène - bit æete obaviješteni o tome].';
$lang['Forum_auth_explain'] = 'Ovdje možete [jednostavnim ili naprednim suèeljem] definirati moguænosti pristupa forumima.<br />Obratite pažnju na to da se promjenom dozvola pristupa odreðuje i koji/e korisnici/e æe imati prava korištenja/upravljanja forumima.';

$lang['Simple_mode'] = 'Jednostavno suèelje';
$lang['Advanced_mode'] = 'Napredno suèelje';
$lang['Moderator_status'] = 'Moderatorski status';

$lang['Allowed_Access'] = 'Dozvoljen pristup';
$lang['Disallowed_Access'] = 'Nedozvoljen pristup';
$lang['Is_Moderator'] = 'Je Moderator/ica';
$lang['Not_Moderator'] = 'Nije Moderator/ica';

$lang['Conflict_warning'] = 'Autorizacijski konflikt';
$lang['Conflict_access_userauth'] = 'Korisnik/ca još uvijek ima pristup forumu na konto prava Korisnièke grupe koje je èlan/ica.<br />Ukoliko mu/joj želite uskratiti pravo pristupa forumu: ili promijenite prava Korisnièke grupe ili ga/ju izbrišite iz èlanstva u toj Korisnièkoj grupi. Prava Korisnièke grupe vidljiva su ispod.';
$lang['Conflict_mod_userauth'] = 'Korisnik/ca još uvijek ima moderatorska prava na forumu na konto prava Korisnièke grupe koje je èlan/ica.<br />Ukoliko mu/joj želite uskratiti pravo pristupa forumu: ili promijenite prava Korisnièke grupe ili ga/ju izbrišite iz èlanstva u toj Korisnièkoj grupi. Prava Korisnièke grupe vidljiva su ispod.';

$lang['Conflict_access_groupauth'] = 'Korisnik(ci)/ca(e) još uvijek ima/ju pristup forumu na konto individualnih prava.<br />Ukoliko mu/joj/im želite uskratiti pravo pristupa forumu: promijenite mu/joj/im individualna prava. Korisnièka prava vidljiva su ispod.';
$lang['Conflict_mod_groupauth'] = 'Korisnik(ci)/ca(e) još uvijek moderatorska prava na forumu na konto individualnih prava.<br />Ukoliko mu/joj/im želite uskratiti pravo pristupa forumu: promijenite mu/joj/im individualna prava. Korisnièka prava vidljiva su ispod.';

$lang['Public'] = 'Javan/na';
$lang['Private'] = 'Privatan/na';
$lang['Registered'] = 'Registriran/a/e/i';
$lang['Administrators'] = 'Administratori/ce';
$lang['Hidden'] = 'Skriven/a';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!

$lang['Forum_ALL'] = 'SVI';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRI';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADM';

$lang['View'] = 'Pogledajte';
$lang['Read'] = 'Proèitajte';
$lang['Post'] = 'Postajte';
$lang['Reply'] = 'Odgovorite';
$lang['Edit'] = 'Uredite';
$lang['Delete'] = 'Izbrišite';
$lang['Sticky'] = 'Važno';
$lang['Announce'] = 'Obavijesti'; 
$lang['Vote'] = 'Glasujte';
$lang['Pollcreate'] = 'Kreiranje anketa';

$lang['Permissions'] = 'Dozvole';
$lang['Simple_Permission'] = 'Jednostavne dozvole';

$lang['User_Level'] = 'Korisnièki status'; 
$lang['Auth_User'] = 'Korisnik/ca';
$lang['Auth_Admin'] = 'Administrator/ica';
$lang['Group_memberships'] = 'Èlanstvo Korisnièkih grupa';
$lang['Usergroup_members'] = 'Èlanstvo ove Korisnièke grupe';

$lang['Forum_auth_updated'] = 'Dozvole foruma ažurirane.';
$lang['User_auth_updated'] = 'Korisnièke dozvole ažurirane.';
$lang['Group_auth_updated'] = 'Dozvole Korisnièke grupe ažurirane.';

$lang['Auth_updated'] = 'Dozvole su ažurirane.';
$lang['Click_return_userauth'] = 'Kliknite %sovdje%s za povratak na korisnièke dozvole.';
$lang['Click_return_groupauth'] = 'Kliknite %sovdje%s za povratak na dozvole Korisnièkih grupa.';
$lang['Click_return_forumauth'] = 'Kliknite %sovdje%s za povratak na dozvole foruma.';

//
// Banning
//

$lang['Ban_control'] = 'Iskljuèivanje';
$lang['Ban_explain'] = 'Ovdje možete iskljuèiti [zabraniti pristup] korisnika/cu s foruma.<br />Možete iskljuèiti korisnika/cu, IP adresu pristupa, adresu pružatelja usluga...<br />Ovime se iskljuèenoj osobi može zabraniti pristup èak i na Poèetnu stranicu foruma.<br />Da biste sprijeèili iskljuèenu osobu da se ponovo registrira, možete iskljuèiti i odreðenu e-mail adresu [iskljuèivanje samo e-mail adrese neæe sprijeèiti osobu da se loginira i posta].';
$lang['Ban_explain_warn'] = 'Unošenje opsega IP adresa rezultira time da æe sve IP adrese, od poèetne do zadnje, biti dodane na listu iskljuèenih [blokiranih] IP adresa.<br />Pokušajte minimizirati broj dodatnih IP adresa unošenjem zvjezdica (*) gdje god je to moguæe.<br />Ako stvarno morate blokirati opseg adresa, pazite da bude što manji.';

$lang['Select_username'] = 'Izaberite korisnièko ime';
$lang['Select_ip'] = 'Izaberite IP adresu';
$lang['Select_email'] = 'Izaberite e-mail adresu';

$lang['Ban_username'] = 'Iskljuèite korisnika(e)/cu(e)';
$lang['Ban_username_explain'] = 'Možete iskljuèiti više korisnika/ca odjednom koristeæi kombinaciju miša i tipkovnice za Vaše raèunalo i preglednik.';

$lang['Ban_IP'] = 'Iskljuèite IP adresu(e)/adresu(e) pružatelja usluga';
$lang['IP_hostname'] = 'IP adrese/adrese pružatelja usluga';
$lang['Ban_IP_explain'] = 'Da biste specificirali više razlièitih IP adresa/adresa pružatelja usluga - odvojite ih zarezima.<br />Da biste specificirali opseg IP adresa - odvojite poèetak i kraj crticom (-); možete koristiti i zvjezdice (*).';

$lang['Ban_email'] = 'Iskljuèite e-mail adresu/e';
$lang['Ban_email_explain'] = 'Da biste specificirali više razlièitih e-mail adresa - odvojite ih zarezima; možete koristiti i zvjezdice (*) [npr. *@hotmail.com].';

$lang['Unban_username'] = 'Odiskljuèite korisnika(e)/cu(e)';
$lang['Unban_username_explain'] = 'Možete odiskljuèiti više korisnika/ca odjednom koristeæi kombinaciju miša i tipkovnice za Vaše raèunalo i preglednik.';

$lang['Unban_IP'] = 'Odiskljuèite IP adresu/e';
$lang['Unban_IP_explain'] = 'Možete odiskljuèiti više IP adresa odjednom koristeæi kombinaciju miša i tipkovnice za Vaše raèunalo i preglednik.';

$lang['Unban_email'] = 'Odiskljuèite e-mail adresu/e';
$lang['Unban_email_explain'] = 'Možete odiskljuèiti više e-mail adresa odjednom koristeæi kombinaciju miša i tipkovnice za Vaše raèunalo i preglednik.';

$lang['No_banned_users'] = 'Nema iskljuèenih korisnika/ca';
$lang['No_banned_ip'] = 'Nema iskljuèenih IP adresa';
$lang['No_banned_email'] = 'Nema iskljuèenih e-mail adresa';

$lang['Ban_update_sucessful'] = 'Iskljuèna lista je ažurirana.';
$lang['Click_return_banadmin'] = 'Kliknite %sovdje%s za povratak na Iskljuèivanje.';

//
// Configuration
//

$lang['General_Config'] = 'Opæa konfiguracija';
$lang['Config_explain'] = 'Donja forma Vam omoguæava podešavanje svih opæih postavki foruma.<br />Za konfiguriranje korisnika(ca)/foruma koristite linkove na izborniku lijevo.';

$lang['Click_return_config'] = 'Kliknite %sovdje%s za povratak na Opæu konfiguraciju.';

$lang['General_settings'] = 'Opæe postavke foruma';
$lang['Server_name'] = 'Naziv domene';
$lang['Server_name_explain'] = '<i>Naziv domene pokretanja foruma.</i>';
$lang['Script_path'] = 'Putanja skripta';
$lang['Script_path_explain'] = '<i>Putanja smještaja phpBB-a u odnosu na naziv domene.</i>';
$lang['Server_port'] = 'Port servera';
$lang['Server_port_explain'] = '<i>Port na kojemu radi Vaš server, obièno 80 [promijenite samo ako je drugi].</i>';
$lang['Site_name'] = 'Naziv stranica';
$lang['Site_desc'] = 'Opis stranica';
$lang['Board_disable'] = 'Onemoguæite forum';
$lang['Board_disable_explain'] = '<i>Ovo æe forum uèiniti nedostupnim korisnicima/ama.<br />Nemojte se logoutirati [odjaviti] ako disableirate [onemoguæite] forum jer se više neæete moæi loginirati.</i>';
$lang['Acct_activation'] = 'Omoguæite aktivaciju korisnièkog raèuna';
$lang['Acc_None'] = '/'; // These three entries are the type of activation
$lang['Acc_User'] = 'Korisnik/ca';
$lang['Acc_Admin'] = 'Administrator/ica';

$lang['Abilities_settings'] = 'Osnovne korisnièke i foruma postavke';
$lang['Max_poll_options'] = 'Max broj odgovora u anketama';
$lang['Flood_Interval'] = 'Interval èekanja';
$lang['Flood_Interval_explain'] = '<i>Broj sekundi koje moraju proæi izmeðu postanja dvaju postova korisnika/ce.</i>'; 
$lang['Board_email_form'] = 'Forumski e-mail';
$lang['Board_email_form_explain'] = '<i>Moguænost korisnièkog meðusobnog slanja e-mailova putem forme foruma.</i>';
$lang['Topics_per_page'] = 'Tema po stranici';
$lang['Posts_per_page'] = 'Postova po stranici';
$lang['Hot_threshold'] = 'Popularni postovi';
$lang['Default_style'] = 'Defaultni stil';
$lang['Override_style'] = 'Onemoguæen korisnièki stil';
$lang['Override_style_explain'] = '<i>Zamjenjuje korisnièki stil defaultnim.</i>';
$lang['Default_language'] = 'Defaultni jezik';
$lang['Date_format'] = 'Format datuma';
$lang['System_timezone'] = 'Vremenska zona';
$lang['Enable_gzip'] = 'Omoguæite GZip kompresiju';
$lang['Enable_prune'] = 'Omoguæite izbrisivanje foruma';
$lang['Allow_HTML'] = 'Dozvolite HTML';
$lang['Allow_BBCode'] = 'Dozvolite BBCode';
$lang['Allowed_tags'] = 'Dozvolite HTML tagove';
$lang['Allowed_tags_explain'] = '<i>Tagove odvojite zarezima.</i>';
$lang['Allow_smilies'] = 'Dozvolite Smajliæe';
$lang['Smilies_path'] = 'Putanja spremanja Smajliæa';
$lang['Smilies_path_explain'] = '<i>Putanja smještaja [mape] spremanja Smajliæa u odnosu na phpBB [npr. images/smiles].</i>';
$lang['Allow_sig'] = 'Dozvolite potpise';
$lang['Max_sig_length'] = 'Max dužina potpisa';
$lang['Max_sig_length_explain'] = '<i>Max broj znakova u potpisu korisnika/ce.</i>';
$lang['Allow_name_change'] = 'Dozvolite promjene korisnièkih imena';

$lang['Avatar_settings'] = 'Postavke Avatara';
$lang['Allow_local'] = 'Omoguæite galeriju Avatara';
$lang['Allow_remote'] = 'Omoguæite linkane Avatare';
$lang['Allow_remote_explain'] = '<i>Avatari koji su smješteni na drugim i pozivaju se s tih stranica.</i>';
$lang['Allow_upload'] = 'Omoguæite uploadanje Avatara';
$lang['Max_filesize'] = 'Max velièina Avatara';
$lang['Max_filesize_explain'] = '<i>Za uploadane Avatare.</i>';
$lang['Max_avatar_size'] = 'Max dimenzije Avatara';
$lang['Max_avatar_size_explain'] = '<i>Visina x širina u px.</i>';
$lang['Avatar_storage_path'] = 'Putanja spremanja Avatara';
$lang['Avatar_storage_path_explain'] = '<i>Putanja smještaja [mape] spremanja Avatara u odnosu na phpBB [npr. images/avatars].</i>';
$lang['Avatar_gallery_path'] = 'Putanja galerije Avatara';
$lang['Avatar_gallery_path_explain'] = '<i>Putanja galerije Avatara u odnosu na phpBB [npr. images/avatars/gallery].</i>';

$lang['COPPA_settings'] = 'COPPA postavke';
$lang['COPPA_fax'] = 'COPPA broj faksa';
$lang['COPPA_mail'] = 'COPPA poštanska adresa';
$lang['COPPA_mail_explain'] = '<i>Poštanska adresa na koju roditelji/staratelji mogu poslati COPPA registracijski formular.</i>';

$lang['Email_settings'] = 'E-mail postavke';
$lang['Admin_email'] = 'E-mail adresa Administratora/ice';
$lang['Email_sig'] = 'E-mail potpis';
$lang['Email_sig_explain'] = '<i>Ovaj potpis æe biti dodan svakoj e-mail poruci koja bude poslana u ime foruma.</i>';
$lang['Use_SMTP'] = 'Korištenje SMTP servera za e-mail';
$lang['Use_SMTP_explain'] = '<i>Izaberite <i>Da</i> ukoliko želite/morate slati e-mail poruke putem imenovanog servera umjesto lokalne e-mail funkcije.</i>';
$lang['SMTP_server'] = 'Adresa SMTP servera';
$lang['SMTP_username'] = 'SMTP korisnièko ime';
$lang['SMTP_username_explain'] = '<i>Korisnièko ime unesite samo ako to Vaš SMTP server zahtjeva.</i>';
$lang['SMTP_password'] = 'SMTP zaporka';
$lang['SMTP_password_explain'] = '<i>Zaporku unesite samo ako to Vaš SMTP server zahtjeva.</i>';

$lang['Disable_privmsg'] = 'Privatne poruke';
$lang['Inbox_limits'] = 'Max poruka u Inboxu';
$lang['Sentbox_limits'] = 'Max poruka u Sentboxu';
$lang['Savebox_limits'] = 'Max poruka u Saveboxu';

$lang['Cookie_settings'] = 'Cookie postavke'; 
$lang['Cookie_settings_explain'] = '<i>Ovi detalji definiraju kako se Cookies [Kolaèiæi] šalju preglednicima Vaših korisnika/ca. <br /> Najèešæe su defaultne vrijednosti postavki Kolaèiæa dostatne, no, ako ih morate mijenjati - pazite što radite jer nepravilne postavke mogu dovesti do nemoguænosti loginiranja.</i>';
$lang['Cookie_domain'] = 'Domena Kolaèiæa';
$lang['Cookie_name'] = 'Naziv Kolaèiæa';
$lang['Cookie_path'] = 'Putanja Kolaèiæa';
$lang['Cookie_secure'] = 'Sigurnost Kolaèiæa';
$lang['Cookie_secure_explain'] = '<i>Ako Vaš server radi preko SSL-a - omoguæite ovu opciju; u suprotnom ju onemoguæite.</i>';
$lang['Session_length'] = 'Vremensko trajanje [sec]';

// Visual Confirmation

$lang['Visual_confirm'] = 'Vizualna potvrda';
$lang['Visual_confirm_explain'] = 'Zahtijeva unos koda, definiranog slikom, kod Registracije.';

//
// Forum Management
//

$lang['Forum_admin'] = 'Administracija foruma';
$lang['Forum_admin_explain'] = 'Ovdje možete dodavati, izbrisati, ureðivati, mijenjati redoslijed, te resinkronizirati kategorije/forume.';
$lang['Edit_forum'] = 'Uredite forum';
$lang['Create_forum'] = 'Kreirajte novi forum';
$lang['Create_category'] = 'Kreirajte novu kategoriju';
$lang['Remove'] = 'Uklonite';
$lang['Action'] = 'Akcija';
$lang['Update_order'] = 'Updateajte redoslijed';
$lang['Config_updated'] = 'Konfiguracija foruma je uspješno updateana.';
$lang['Edit'] = 'Uredite';
$lang['Delete'] = 'Izbrišite';
$lang['Move_up'] = 'Gore';
$lang['Move_down'] = 'Dolje';
$lang['Resync'] = 'ReSin';
$lang['No_mode'] = 'Nije podešen mod';
$lang['Forum_edit_delete_explain'] = 'Donja forma Vam omoguæava podešavanje svih opæih postavki foruma.<br />Za konfiguriranje korisnika(ca)/foruma koristite linkove na izborniku lijevo.';

$lang['Move_contents'] = 'Premjestite kompletan sadržaj';
$lang['Forum_delete'] = 'Izbrišite forum';
$lang['Forum_delete_explain'] = 'Donja forma Vam omoguæava da izbrišete forum(e)/kategoriju(e), te da odluèite kamo želite premjestiti sadržaj.';

$lang['Status_locked'] = 'Zakljuèano';
$lang['Status_unlocked'] = 'Otkljuèano';
$lang['Forum_settings'] = 'Opæe postavke foruma';
$lang['Forum_name'] = 'Naziv foruma';
$lang['Forum_desc'] = 'Opis';
$lang['Forum_status'] = 'Status';
$lang['Forum_pruning'] = 'Auto-izbrisivanje';

$lang['prune_freq'] = 'Provjeri starost tema svakih';
$lang['prune_days'] = 'Ukloni teme u kojima nije bilo postanja';
$lang['Set_prune_data'] = 'Upalili ste opciju auto-izbrisivanja foruma ali niste podesili frekvenciju ili broj dana za izbrisivanje.<br />Vratite se i podesite [to].';

$lang['Move_and_Delete'] = 'Premjestite i izbrišite';

$lang['Delete_all_posts'] = 'Izbrišite sve postove';
$lang['Nowhere_to_move'] = 'Nema lokacije za premještanje';

$lang['Edit_Category'] = 'Uredite kategoriju';
$lang['Edit_Category_explain'] = 'Ovom formom možete promijeniti naziv kategorije.';

$lang['Forums_updated'] = 'Informacije o forumu/ima i kategoriji/ama su uspješno updateane.';

$lang['Must_delete_forums'] = 'Morate izbrisati sve forume da biste mogli izbrisati ovu kategoriju.';

$lang['Click_return_forumadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju foruma.';

//
// Smiley Management
//

$lang['smiley_title'] = 'Administracija Smajliæa';
$lang['smile_desc'] = 'Ovdje možete dodavati, uklanjati i editirati Smajliæe koje korisnici/e mogu dodavati u svoje postove/privatne poruke.';

$lang['smiley_config'] = 'Konfiguracija Smajliæa';
$lang['smiley_code'] = 'Kod Smajliæa';
$lang['smiley_url'] = 'Datoteka Smajliæa';
$lang['smiley_emot'] = 'Emocija Smajliæa';
$lang['smile_add'] = 'Dodajte Smajliæa';
$lang['Smile'] = 'Smajliæ';
$lang['Emotion'] = 'Emocija';

$lang['Select_pak'] = 'Izaberite paket (.pak) datoteku';
$lang['replace_existing'] = 'Zamijenite Smajliæa';
$lang['keep_existing'] = 'Zadržite Smajliæa';
$lang['smiley_import_inst'] = 'Odzipajte paket Smajliæa i uploadajte sve datoteke u odgovarajuæu mapu Smajliæa za Vašu instalaciju, te izaberite toènu informaciju u ovoj formi da biste ubacili paket Smajliæa.';
$lang['smiley_import'] = 'Umetanje paketa Smajliæa';
$lang['choose_smile_pak'] = 'Izaberite paket .pak datoteku Smajliæa';
$lang['import'] = 'Importirajte Smajliæe';
$lang['smile_conflicts'] = 'Što bi trebalo napraviti u sluèaju konflikata';
$lang['del_existing_smileys'] = 'Izbrišite postojeæe Smajliæe prije importiranja';
$lang['import_smile_pack'] = 'Importirajte paket Smajliæa';
$lang['export_smile_pack'] = 'Kreirajte paket Smajliæa';
$lang['export_smiles'] = 'Da biste kreirali paket Smajliæa od trenutno instaliranih Smajliæa, kliknite %sovdje%s kako biste downloadirali smiles.pak datoteku.<br />Nazovite adekvatno ovu datoteku pazeæi pri tome da saèuvate .pak ekstenziju.<br />Zatim kreirajte zip datoteku koja sadrži sve Vaše Smajliæe plus ovu .pak konfiguracijsku datoteku.';

$lang['smiley_add_success'] = 'Smajliæ je uspješno dodan.';
$lang['smiley_edit_success'] = 'Smajliæ je uspješno updateiran.';
$lang['smiley_import_success'] = 'Paket Smajliæa je uspješno importiran.';
$lang['smiley_del_success'] = 'Smajliæ je uspješno uklonjen.';
$lang['Click_return_smileadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju Smajliæa.';

//
// User Management
//

$lang['User_admin'] = 'Administracija korisnika/ca';
$lang['User_admin_explain'] = 'Ovdje možete promijeniti odreðene postavke i informacije korisnika/ca.<br />Za modificiranje dozvola korisnika/ca koristite sistem dozvola za korisnike/ce i Korisnièke grupe.';

$lang['Look_up_user'] = 'Pronaðite korisnika/cu';

$lang['Admin_user_fail'] = 'Nije bilo moguæe updateati korisnièki profil.';
$lang['Admin_user_updated'] = 'Korisnièki profil je uspješno updatean.';
$lang['Click_return_useradmin'] = 'Kliknite %sovdje%s za povratak na Administraciju korisnika/ca.';

$lang['User_delete'] = 'Izbrisivanje korisnika/ce';
$lang['User_delete_explain'] = '<i>Oznaèite kuæicu ukoliko želite izbrisati korisnika/cu; ova operacija ne može biti poništena.</i>';
$lang['User_deleted'] = 'Korisnik/ca je uspješno izbrisan/a.';

$lang['User_status'] = 'Korisnik/ca je aktivan/na';
$lang['User_allowpm'] = 'Može slati privatne poruke';
$lang['User_allowavatar'] = 'Može koristiti Avatara';

$lang['Admin_avatar_explain'] = 'Ovdje možete vidjeti/izbrisati Avatara korisnika/ce.';

$lang['User_special'] = 'Posebna polja samo za administratore/ice';
$lang['User_special_explain'] = 'Ova polja ne mogu modificirati korisnici/e.<br />Ovdje možete podesiti njihov status i druge opcije kojima korisnici/e nemaju pristup.';

//
// Group Management
//

$lang['Group_administration'] = 'Administracija Korisnièkih grupa';
$lang['Group_admin_explain'] = 'Ovdje možete administrirati Korisnièke grupe.<br />Možete kreirati nove, te ureðivati/izbrisati postojeæe Korisnièke grupe.<br />Možete odreðivati moderatore/ice, status kao i nazive i opise Korisnièkih grupa.';
$lang['Error_updating_groups'] = 'Došlo je do greške prilikom updateanja Korisnièke grupe.';
$lang['Updated_group'] = 'Korisnièka grupa je uspješno updateana.';
$lang['Added_new_group'] = 'Korisnièka grupa je uspješno kreirana.';
$lang['Deleted_group'] = 'Korisnièka grupa je uspješno izbrisana.';
$lang['New_group'] = 'Kreirajte novu Korisnièku grupu';
$lang['Edit_group'] = 'Editirajte Korisnièku grupu';
$lang['group_name'] = 'Naziv';
$lang['group_description'] = 'Opis';
$lang['group_moderator'] = 'Moderator/ica';
$lang['group_status'] = 'Status';
$lang['group_open'] = 'Otvorena';
$lang['group_closed'] = 'Zatvorena';
$lang['group_hidden'] = 'Skrivena';
$lang['group_delete'] = 'Želite [li] izbrisati ovu Korisnièku grupu?';
$lang['group_delete_check'] = 'Da';
$lang['submit_group_changes'] = 'Pošaljite promjene';
$lang['reset_group_changes'] = 'Izbrišite promjene';
$lang['No_group_name'] = 'Morate specificirati naziv Korisnièke grupe.';
$lang['No_group_moderator'] = 'Morate specificirati moderatora/icu Korisnièke grupe.';
$lang['No_group_mode'] = 'Morate specificirati mod Korisnièke grupe, otvorena ili zatvorena.';
$lang['No_group_action'] = 'Nije specificirana akcija.';
$lang['delete_group_moderator'] = 'Želite [li] izbrisati trenutnog/u moderatora/icu ove Korisnièke grupe?';
$lang['delete_moderator_explain'] = '<i>Ukoliko mijenjate moderatora/icu Korisnièke grupe, oznaèite ovu kuæicu kako biste izbrisali trenutnog moderatora/icu [ukoliko ne oznaèite kuæicu, trenutni moderator/ica æe postati regularan èlan Korisnièke grupe].</i>';
$lang['Click_return_groupsadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju Korisnièkih grupa.';
$lang['Select_group'] = 'Izaberite Korisnièku grupu';
$lang['Look_up_group'] = 'Potražite Korisnièku grupu';

//
// Prune Administration
//

$lang['Forum_Prune'] = 'Administracija izbrisivanja foruma';
$lang['Forum_Prune_explain'] = 'Ovdje možete izbrisati svaku temu u kojoj nije bilo novih postova u rasponu dana kojeg odredite.<br />Ukoliko ne odredite broj dana - sve teme æe biti izbrisane.<br />Samo aktualne ankete [one koje još traju] i Obavijesti neæe biti izbrisane [njih æete morati izbrisati ruèno].';
$lang['Do_Prune'] = 'Pokrenite izbrisivanje';
$lang['All_Forums'] = 'Svi forumi';
$lang['Prune_topics_not_posted'] = 'Izbrišite teme u kojima nije bilo novih postova dana';
$lang['Topics_pruned'] = 'Izbrisane teme';
$lang['Posts_pruned'] = 'Izbrisani postovi';
$lang['Prune_success'] = 'Izbrisivanje foruma je uspješno obavljeno.';

//
// Word censor
//

$lang['Words_title'] = 'Administracija cenzure rijeèi';
$lang['Words_explain'] = 'Ovdje možete dodavati, ureðivati i izbrisati rijeèi koje æe automatski biti cenzurirane na forumu. <br />Automatski æe biti onemoguæeno i registriranje pod korisnièkim imenom koje sadrži cenzuriranu rijeè.<br />Možete se koristiti i zvjezdicama (*) [npr.: *test* æe obuhvatiti sve rijeèi koje u sebi sadrže rijeè test; test* sve koje poèinju sa test; *test sve koje završavaju sa test].';
$lang['Word'] = 'Rijeè';
$lang['Edit_word_censor'] = 'Uredite';
$lang['Replacement'] = 'Zamjena';
$lang['Add_new_word'] = 'Dodajte novu rijeè';
$lang['Update_word'] = 'Updateajte';

$lang['Must_enter_word'] = 'Morate unijeti i rijeè i zamjenu za nju.';
$lang['No_word_selected'] = 'Niste oznaèili rijeè koju želite urediti.';

$lang['Word_updated'] = 'Rijeè je uspješno updateana.';
$lang['Word_added'] = 'Rijeè je uspješno dodana.';
$lang['Word_removed'] = 'Rijeè je uspješno izbrisana.';

$lang['Click_return_wordadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju cenzure rijeèi.';

//
// Mass Email
//

$lang['Mass_email_explain'] = 'Ovdje možete poslati e-mail svim korisnicima/ama foruma odnosno èlanovima/icama Korisnièkih grupa.<br />E-mail æe otiæi s e-mail adrese administratora/ice foruma; primatelji/ce æe biti navedeni/e u BCC [Na znanje] odjeljku.<br />Ukoliko je primatelja/ica puno, možda æe slanje e-maila potrajati neko vrijeme - bit æete obaviješteni kada e-mail bude poslan.';
$lang['Compose'] = 'Compose'; 

$lang['Recipients'] = 'Primatelji/ce'; 
$lang['All_users'] = 'Kompletno Èlanstvo';

$lang['Email_successfull'] = 'Vaša poruka je poslana.';
$lang['Click_return_massemail'] = 'Kliknite %sovdje%s za povratak na formu Skupnog e-maila.';

//
// Ranks admin
//

$lang['Ranks_title'] = 'Administracija statusa';
$lang['Ranks_explain'] = 'Ovdje možete dodavati, ureðivati, pregledavati i izbrisati statuse.<br />Možete kreirati proizvoljne statuse koji mogu biti primijenjeni na korisnike/ce preko Administracije korisnika/ca.';

$lang['Add_new_rank'] = 'Dodajte novi status';

$lang['Rank_title'] = 'Status';
$lang['Rank_special'] = 'Specijalni status';
$lang['Rank_minimum'] = 'Min postova';
$lang['Rank_maximum'] = 'Max postova';
$lang['Rank_image'] = 'Slika statusa [u odnosu na phpBB]';
$lang['Rank_image_explain'] = '<i>Ova slièica æe se vidjeti ispod korisnièkog imena kod pregledavanja postova.</i>';

$lang['Must_select_rank'] = 'Morate izabrati status.';
$lang['No_assigned_rank'] = 'Nije dodijeljen specijalan status';

$lang['Rank_updated'] = 'Status je uspješno updatean.';
$lang['Rank_added'] = 'Status je uspješno dodan.';
$lang['Rank_removed'] = 'Status je uspješno izbrisan.';
$lang['No_update_ranks'] = 'Status je uspješno izbrisan.<br />Korisnièki raèuni koju su bili oznaèeni ovim statusom nisu updateani; to æete morati napraviti ruèno.';

$lang['Click_return_rankadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju statusa.';

//
// Disallow Username Admin
//

$lang['Disallow_control'] = 'Administracija nedopuštenih korisnièkih imena';
$lang['Disallow_explain'] = 'Ovdje možete dodavati/izbrisati korisnièka imena pod kojima se nitko neæe moæi registrirati.<br />Možete koristiti i zvjezdice (*).<br />Naravno, neæete moæi dodati niti jedno korisnièko ime koje je veæ registrirano [ukoliko to želite - morate prvo obrisati postojeæe korisnièko ime].';

$lang['Delete_disallow'] = 'Izbrišite';
$lang['Delete_disallow_title'] = 'Izbrišite nedopušteno korisnièko ime';
$lang['Delete_disallow_explain'] = 'Korisnièko ime možete izbrisati tako da ga izaberete s liste i kliknete na gumb Izbrišite.';

$lang['Add_disallow'] = 'Dodajte';
$lang['Add_disallow_title'] = 'Dodajte nedopušteno korisnièko ime';
$lang['Add_disallow_explain'] = 'Možete koristiti i zvjezdice (*) - koje zamjenjuju bilo koji znak.';

$lang['No_disallowed'] = 'Nema nedopuštenih korisnièkih imena';

$lang['Disallowed_deleted'] = 'Nedopušteno korisnièko ime je uspješno izbrisano.';
$lang['Disallow_successful'] = 'Nedopušteno korisnièko ime je uspješno dodano.';
$lang['Disallowed_already'] = 'Ime koje ste unijeli ne može biti nedopušteno.<br />Ili veæ postoji na listi, ili postoji na listi cenzuriranih rijeèi ili postoji takvo korisnièko ime.';

$lang['Click_return_disallowadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju nedopuštenih korisnièkih imena.';

//
// Styles Admin
//

$lang['Styles_admin'] = 'Administracija stilova';
$lang['Styles_explain'] = 'Ovdje možete dodavati, ureðivati i izbrisati stilove [teme i predloške].';
$lang['Styles_addnew_explain'] = 'Sljedeæa lista sadrži sve teme koje su dostupne za predloške koje imate.<br />Stavke liste nisu instalirane u phpBB bazu.<br />Da biste instalirali temu, kliknite na gumb Instalirajte.';

$lang['Select_template'] = 'Izaberite predložak';

$lang['Style'] = 'Stil';
$lang['Template'] = 'Predložak';
$lang['Install'] = 'Instalirajte';
$lang['Download'] = 'Downloadirajte';

$lang['Edit_theme'] = 'Uredite temu';
$lang['Edit_theme_explain'] = 'Donjom formom možete urediti postavke izabrane teme.';

$lang['Create_theme'] = 'Kreirajte temu';
$lang['Create_theme_explain'] = 'Donjom formom možete kreirati novu temu za izabrani predložak.<br />Kod unošenja boja [za koje koristite heksadecimalni oblik] nemojte unositi znak ljestve (#) [npr.: CCCCCC je pravilno; #CCCCCC nije].';

$lang['Export_themes'] = 'Eksportirajte teme';
$lang['Export_explain'] = 'Ovdje možete eksportirati podatke teme za izabrani predložak.<br />Izaberite predložak sa donje liste i skripta æe kreirati konfiguracijsku datoteku teme te ju pokušati spremiti u izabranu mapu predložaka.<br />Ukoliko ju neæe moæi spremiti, predložit æe Vam da ju downloadirate.<br />Da bi skripta mogla spremiti datoteku, morate dati pravo pristupa webserveru za izabranu mapu predložaka.<br />Za više informacija o ovome, pogledajte phpBB 2 vodiè.';

$lang['Theme_installed'] = 'Tema je uspješno instalirana.';
$lang['Style_removed'] = 'Izabrani stil je izbrisan iz baze.<br />Da biste stil potpuno uklonili iz sistema morate izbrisati odgovarajuæi stil iz mape predložaka.';
$lang['Theme_info_saved'] = 'Informacije o temi za izabrani predložak su spremljene.<br />Sada biste trebali vratiti dozvole za theme_info.cfg [ako je moguæe i za izabranu mapu predložaka] u read-only [samo za èitanje].';
$lang['Theme_updated'] = 'Tema je uspješno updateana.<br />Sada biste trebali eksportirati nove postavke teme.';
$lang['Theme_created'] = 'Tema je kreirana.<br />Sada biste trebali eksportirati temu u konfiguracijsku datoteku teme zbog backupa ili uporabe negdje drugdje.';

$lang['Confirm_delete_style'] = 'Jeste li sigurni da želite izbrisati ovaj stil?';

$lang['Download_theme_cfg'] = 'Nije bilo moguæe napisati konfiguracijsku datoteku teme.<br />Kliknite na donji gumb da biste downloadirali ovu datoteku preglednikom.<br />Kada ju downloadirate, možete ju transferirati u mapu predložaka.<br />Tada možete spakirati datoteke za distribuciju ili uporabe negdje drugdje.';
$lang['No_themes'] = 'Predložak kojeg ste izabrali nema tema vezanih uz sebe.<br />Da biste kreirali novu temu, kliknite na link lijevo za kreiranje nove teme.';
$lang['No_template_dir'] = 'Nije bilo moguæe otvoriti mapu predložaka.<br />Možda je neèitljiva webserveru ili ne postoji.';
$lang['Cannot_remove_style'] = 'Ne možete izbrisati izabrani stil jer je oznaèen kao defaultni za forum.<br />Promijenite defaultni stil foruma i pokušajte ponovo.';
$lang['Style_exists'] = 'Izabrano ime stila veæ postoji; vratite se natrag i izaberite drugo ime.';

$lang['Click_return_styleadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju stilova.';

$lang['Theme_settings'] = 'Postavke teme';
$lang['Theme_element'] = 'Elementi teme';
$lang['Simple_name'] = 'Jednostavan naziv';
$lang['Value'] = 'Vrijednost';
$lang['Save_Settings'] = 'Spremite postavke';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Background_image'] = 'Slika pozadine';
$lang['Background_color'] = 'Boja pozadine';
$lang['Theme_name'] = 'Naziv teme';
$lang['Link_color'] = 'Boja linkova';
$lang['Text_color'] = 'Boja teksta';
$lang['VLink_color'] = 'Boja posjeæenih linkova';
$lang['ALink_color'] = 'Boja aktivnih linkova';
$lang['HLink_color'] = 'Boja prelazeæih linkova';
$lang['Tr_color1'] = 'Boja 1 redova tabela';
$lang['Tr_color2'] = 'Boja 2 redova tabela';
$lang['Tr_color3'] = 'Boja 3 redova tabela';
$lang['Tr_class1'] = 'Class 1 redova tabela';
$lang['Tr_class2'] = 'Class 2 redova tabela';
$lang['Tr_class3'] = 'Class 3 redova tabela';
$lang['Th_color1'] = 'Boja 1 zaglavlja tabela';
$lang['Th_color2'] = 'Boja 2 zaglavlja tabela';
$lang['Th_color3'] = 'Boja 3 zaglavlja tabela';
$lang['Th_class1'] = 'Class 1 zaglavlja tabela';
$lang['Th_class2'] = 'Class 2 zaglavlja tabela';
$lang['Th_class3'] = 'Class 3 zaglavlja tabela';
$lang['Td_color1'] = 'Boja 1 æelija tabela';
$lang['Td_color2'] = 'Boja 2 æelija tabela';
$lang['Td_color3'] = 'Boja 3 æelija tabela';
$lang['Td_class1'] = 'Class 1 æelija tabela';
$lang['Td_class2'] = 'Class 2 æelija tabela';
$lang['Td_class3'] = 'Class 3 æelija tabela';
$lang['fontface1'] = 'Vrsta fonta 1';
$lang['fontface2'] = 'Vrsta fonta 2';
$lang['fontface3'] = 'Vrsta fonta 3';
$lang['fontsize1'] = 'Velièina fonta 1';
$lang['fontsize2'] = 'Velièina fonta 2';
$lang['fontsize3'] = 'Velièina fonta 3';
$lang['fontcolor1'] = 'Boja fonta 1';
$lang['fontcolor2'] = 'Boja fonta 2';
$lang['fontcolor3'] = 'Boja fonta 3';
$lang['span_class1'] = 'Class 1 mjera';
$lang['span_class2'] = 'Class 2 mjera';
$lang['span_class3'] = 'Class 3 mjera';
$lang['img_poll_size'] = 'Velièina anketne slike [px]';
$lang['img_pm_size'] = 'Velièina statusa privatne poruke [px]';

//
// Install Process
//

$lang['Welcome_install'] = 'Dobro došli u phpBB 2 instalaciju';
$lang['Initial_config'] = 'Osnovna konfiguracija';
$lang['DB_config'] = 'Konfiguracija baze';
$lang['Admin_config'] = 'Admin konfiguracija';
$lang['continue_upgrade'] = 'Kada downloadirate konfiguracijsku datoteku, možete kliknuti na gumb \'Nastavite nadogradnju\' kako biste nastavili s nadogradnjom.<br />Prièekajte s uploadiranjem konfiguracijske datoteke dok proces nadogradnje ne završi.';
$lang['upgrade_submit'] = 'Nastavite nadogradnju';

$lang['Installer_Error'] = 'Došlo je do greške prilikom instalacije.';
$lang['Previous_Install'] = 'Detektirana je prethodna instalacija.';
$lang['Install_db_error'] = 'Došlo je do greške prilikom pokušaja nadogradnje baze.';

$lang['Re_install'] = 'Prethodna instalacija je još uvijek aktivna.<br />Ukoliko želite reinstalirati phpBB 2 kliknite na Da gumb ispod.<br />Obratite pažnju na to da æe to dovesti do uništenja svih postojeæih podataka i backupova.<br />Korisnièko ime i zaporka administratora/ice, koje ste koristili za loginiranje, bit æe ponovo kreirani nakon reinstalacije; ostale postavke neæe biti saèuvane.<br />Dobro razmislite prije klika na Da.';

$lang['Inst_Step_0'] = 'Hvala Vam što ste izabrali phpBB 2.<br />Da biste završili instalaciju, ispunite tražene podatke ispod.<br />Baza u koju instalirate bi veæ trebala postojati.<br />Ukoliko instalirate u bazu koja koristi ODBC, npr. MS Access, trebali biste prvo kreirati DSN za nju prije nastavka.';

$lang['Start_Install'] = 'Poènite instalaciju';
$lang['Finish_Install'] = 'Završite instalaciju';

$lang['Default_lang'] = 'Defaultni jezik foruma';
$lang['DB_Host'] = 'Hostname servera baze / DSN';
$lang['DB_Name'] = 'Ime Vaše baze';
$lang['DB_Username'] = 'Korisnièko ime baze';
$lang['DB_Password'] = 'Zaporka baze';
$lang['Database'] = 'Vaša baza';
$lang['Install_lang'] = 'Izaberite jezik instalacije';
$lang['dbms'] = 'Tip baze';
$lang['Table_Prefix'] = 'Prefiks za tabele u bazi';
$lang['Admin_Username'] = 'Korisnièko ime administratora/ice';
$lang['Admin_Password'] = 'Zaporka administratora/ice';
$lang['Admin_Password_confirm'] = 'Zaporka administratora/ice [potvrdite]';

$lang['Inst_Step_2'] = 'Korisnièko ime administratora/ice je kreirano.<br />Ovime je osnovna instalacija završena.<br />Otvorit æe Vam se stranica na kojoj æete moæi izadministrirati Vašu novu instalaciju.<br />Provjerite postavke Opæe konfiguracije i uredite sve što treba.<br />Hvala Vam što ste izabrali phpBB 2.';

$lang['Unwriteable_config'] = 'Konfiguracijsku datoteku nije moguæe editirati.<br /> Kopija konfiguracijske datoteke bit æe downloadirana kada kliknete na donji gumb.<br />Uploadajte tu datoteku u istu mapu gdje ste uploadirali i phpBB 2.<br />Tada æete se moæi loginirati koristeæi korisnièko ime i zaporku administratora/ice, koje ste unijeli u prethodnoj formi, te otiæi u AdministratorPanel da provjerite postavke Opæe konfiguracije.<br />Hvala Vam što ste izabrali phpBB 2.';
$lang['Download_config'] = 'Downloadirajte konfiguracijsku datoteku';

$lang['ftp_choose'] = 'Izaberite metodu downloada';
$lang['ftp_option'] = '<br />S obzirom da su FTP ekstenzije omoguæene u ovoj verziji PHP-a, bit æe Vam dana moguænost da prvo putem FTP-a postavite konfiguracijsku datoteku na mjesto.';
$lang['ftp_instructs'] = 'Izabrali ste FTP-iranje datoteke.<br />Unesite informacije ispod kako biste olakšali proces.<br />FTP putanja mora biti toèno do phpBB 2 instalacije.';
$lang['ftp_info'] = 'Unesite FTP informacije';
$lang['Attempt_ftp'] = 'Pokušajte FTP-irati konfiguracijsku datoteku';
$lang['Send_file'] = 'Pošaljite konfiguracijsku datoteku meni - ruèno æu je FTP-irati';
$lang['ftp_path'] = 'FTP putanja do phpBB 2';
$lang['ftp_username'] = 'Vaše FTP korisnièko ime';
$lang['ftp_password'] = 'Vaša FTP zaporka';
$lang['Transfer_config'] = 'Zapoènite transfer';
$lang['NoFTP_config'] = 'Pokušaj FTP-iranja konfiguracijske datoteke nije uspio<br />Downloadirajte konfiguracijsku datoteku i FTP-irajte ju ruèno.';

$lang['Install'] = 'Instaliranje';
$lang['Upgrade'] = 'Nadogradnja';

$lang['Install_Method'] = 'Izaberite metodu instalacije';

$lang['Install_No_Ext'] = 'PHP konfiguracija Vašeg servera ne podržava tip baze koji ste izabrali.';

$lang['Install_No_PCRE'] = 'phpBB2 zahtijeva <i>Perl-Compatible Regular Expressions Module</i> za PHP koji Vaša PHP konfiguracija, èini se, ne podržava.';

//
// Version Check
//
$lang['Version_up_to_date'] = 'Your installation is up to date, no updates are available for your version of phpBB2x.';
$lang['Version_not_up_to_date'] = 'Your installation does <b>not</b> seem to be up to date. Updates are available for your version of phpBB2x, please visit <a href="http://www.phpbb2x.com/downloads.php" target="_new">http://www.phpbb2x.com/downloads.php</a> to obtain the latest version.';
$lang['Latest_version_info'] = 'The latest available version is <b>phpBB2x %s</b>.';
$lang['Current_version_info'] = 'You are running <b>phpBB2x %s</b>.';
$lang['Connect_socket_error'] = 'Unable to open connection to phpBB2x Server, reported error is:<br />%s';
$lang['Socket_functions_disabled'] = 'Unable to use socket functions.';
$lang['Mailing_list_subscribe_reminder'] = 'For the latest information on updates to phpBB2x, why not <a href="http://www.phpbb2x.com/support/" target="_new">subscribe to our mailing list</a>.';
$lang['Version_information'] = '<a href="#" onclick="toggle_visibility( \'ver\' );" title="Click for more Information">Version Information</a>';
$lang['Version_of_PHP'] = 'Version of PHP';
$lang['Version_of_MySQL'] = 'Version of MySQL';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Allowed login attempts';
$lang['Max_login_attempts_explain'] = 'The number of allowed board login attempts.';
$lang['Login_reset_time'] = 'Login lock time';
$lang['Login_reset_time_explain'] = 'Time in minutes the user have to wait until he is allowed to login again after exceeding the number of allowed login attempts.';

//
// That's all Folks!
//

?>