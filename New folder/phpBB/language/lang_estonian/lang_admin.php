<?php

/***************************************************************************
 *                            lang_admin.php [English]
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

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical mistakes
*/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Üldine';
$lang['Users'] = 'Kasutajad';
$lang['Groups'] = 'Grupid';
$lang['Forums'] = 'Alafoorumid';
$lang['Styles'] = 'Stiilid';

$lang['Configuration'] = 'Konfiguratsioon';
$lang['Permissions'] = 'Volitused';
$lang['Manage'] = 'Administratsioon';
$lang['Disallow'] = 'Keela nimed';
$lang['Prune'] = 'Kärpimine';
$lang['Mass_Email'] = 'Massimail';
$lang['Ranks'] = 'Kasutajakirjeldused';
$lang['Smilies'] = 'Emotikonid';
$lang['Ban_Management'] = 'Bannimine';
$lang['Word_Censor'] = 'Tsensuur';
$lang['Export'] = 'Ekspordi';
$lang['Create_new'] = 'Tee Uus';
$lang['Add_new'] = 'Lisa';
$lang['Backup_DB'] = 'Varukoopia';
$lang['Restore_DB'] = 'Taasta Andmed';


//
// Index
//
$lang['Admin'] = 'Administratsioon';
$lang['Not_admin'] = 'Sul pole õigusi seda foorumit administreerida';
$lang['Welcome_phpBB'] = 'Tere Tulemast PHPBB Foorumile';
$lang['Admin_intro'] = 'Täname, et valisid phpBB oma foorumiks. See leht annab sulle kiire ülevaate foorumi statistikast. Siia tagasi saamiseks vajuta <u>Statistika</u> linki menüüs. Oma foorumile tagasi saamiseks vajuta phpBB logo.';
$lang['Main_index'] = 'Foorum';
$lang['Forum_stats'] = 'Foorumi Statistika';
$lang['Admin_Index'] = 'Statistika';
$lang['Preview_forum'] = 'Foorumi Eelvaade';

$lang['Click_return_admin_index'] = 'Vajuta %sSiia%s, et minna tagasi Statistika lehele';

$lang['Statistic'] = 'Statistika';
$lang['Value'] = 'Väärtus';
$lang['Number_posts'] = 'Postituste arv';
$lang['Posts_per_day'] = 'Postitusi päevas';
$lang['Number_topics'] = 'Teemade arv';
$lang['Topics_per_day'] = 'Teemasid päevas';
$lang['Number_users'] = 'Kasutajaid kokku';
$lang['Users_per_day'] = 'Kasutajaid päevas';
$lang['Board_started'] = 'Foorum avati';
$lang['Avatar_dir_size'] = 'Avatari kausta suurus';
$lang['Database_size'] = 'Andmebaasi suurus';
$lang['Gzip_compression'] ='Gzip pakkimine';
$lang['Not_available'] = 'Pole võimalik';

$lang['ON'] = 'ON'; // This is for GZip compression
$lang['OFF'] = 'OFF'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Andmebaasi utiilid';

$lang['Restore'] = 'Taasta';
$lang['Backup'] = 'Varukoopia';
$lang['Restore_explain'] = 'See asendab kõik andmebaasis leiduva salvestatud failist saadud andmetega. Kui su server seda lubab, saad uploadida gzip-pakitud faili ja see installeeritakse automaatselt. <b>HOIATUS</b>: See kustutab kõik olemasolevad andmed. Taastamine võib võtta kaua aega ning sa ei tohi sel ajal akent sulgeda või siit ära minna.';
$lang['Backup_explain'] = 'Siin saad teha varukoopia oma foorumi andmetest. Kui sa tahad mõnest lisatabelist koopiat teha, sisesta nende nimed Lisatabelite lahtrisse. Kui su server seda toetab, saad enne downloadimist faili gzip-pakkida, et selle suurust vähendada.';

$lang['Backup_options'] = 'Varukoopia valikud';
$lang['Start_backup'] = 'Tee Koopia';
$lang['Full_backup'] = 'Täiskoopia';
$lang['Structure_backup'] = 'Koopia ainult struktuurist';
$lang['Data_backup'] = 'Koopia ainult andmetest';
$lang['Additional_tables'] = 'Lisatabelid';
$lang['Gzip_compress'] = 'Gzip-paki fail';
$lang['Select_file'] = 'Vali fail';
$lang['Start_Restore'] = 'Alusta taastamist';

$lang['Restore_success'] = 'Andmebaas on edukalt taastatud. Su foorum peaks nüüd olema samas seisus, kui varukoopia tegemise ajal.';
$lang['Backup_download'] = 'Download algab varsti. Palun oota.';
$lang['Backups_not_supported'] = 'Vabandame, aga sinu süsteem ei toeta andmebaasi varukoopiaid.';

$lang['Restore_Error_uploading'] = 'Koopia uploadimisel tekkis viga';
$lang['Restore_Error_filename'] = 'Failinime probleem; palun proovi teist faili';
$lang['Restore_Error_decompress'] = 'Ei saa gzip faili kasutada; palun uploadi tavateksti versioon';
$lang['Restore_Error_no_file'] = 'Ühtegi faili ei uploaditud';


//
// Auth pages
//
$lang['Select_a_User'] = 'Vali Kasutaja';
$lang['Select_a_Group'] = 'Vali Grupp';
$lang['Select_a_Forum'] = 'Vali Alafoorum';
$lang['Auth_Control_User'] = 'Kasutaja Volituste Muutmine'; 
$lang['Auth_Control_Group'] = 'Grupi Volituste Muutmine'; 
$lang['Auth_Control_Forum'] = 'Alafoorumi Volituste Muutmine'; 
$lang['Look_up_User'] = 'Otsi Kasutajat'; 
$lang['Look_up_Group'] = 'Otsi Gruppi'; 
$lang['Look_up_Forum'] = 'Otsi Alafoorumit'; 

$lang['Group_auth_explain'] = 'Siin saad sa muuta kasutajagrupile antud volitusi. Ära unusta, et individuaalsed volitused võivad siiski lasta kasutajat foorumi osadasse, kuhu terve grupp ei pääse.';
$lang['User_auth_explain'] = 'Siin saad sa muuta kasutajate volitusi ja moderaatoristaatuseid. Ära unusta, et grupi õigused võivad sattuda vastuollu individuaalsete volitustega. Sellisel juhul sind hoiatatakse.';
$lang['Forum_auth_explain'] = 'Siin saad muuta iga alafoorumi kasutamisõigusi. Nende muutmiseks on üldine ja detailne meetod. Kasutamisõigused näitavad, mida on teatud liiki kasutajatel lubatud selles alafoorumis teha.';

$lang['Simple_mode'] = 'Üldine';
$lang['Advanced_mode'] = 'Detailne';
$lang['Moderator_status'] = 'Moderaatoristaatus';

$lang['Allowed_Access'] = 'Ligipääs olemas';
$lang['Disallowed_Access'] = 'Ligipääs puudub';
$lang['Is_Moderator'] = 'On Moderaator';
$lang['Not_Moderator'] = 'Ei Ole Moderaator';

$lang['Conflict_warning'] = 'Konflikt Volituste Määramisel';
$lang['Conflict_access_userauth'] = 'Sellel kasutajal on grupiõiguste kaudu endiselt ligipääs sellele alafoorumile. Võib-olla soovid muuta grupi volitusi või eemaldada kasutaja sellest grupist. Grupi volitused on kirjas alljärgnevas.';
$lang['Conflict_mod_userauth'] = 'Sellel kasutajal on grupiõiguste kaudu endiselt alafoorumi modereerimise õigus. Võib-olla soovid muuta grupi volitusi või eemaldada kasutaja sellest grupist. Grupi volitused on kirjas alljärgnevas.';

$lang['Conflict_access_groupauth'] = 'Sellel kasutajal on kasutajaõiguste kaudu endiselt ligipääs sellele alafoorumile. Võib-olla soovid muuta kasutaja volitusi. Volitused on kirjas alljärgnevas.';
$lang['Conflict_mod_groupauth'] = 'Sellel kasutajal on kasutajaõiguste kaudu alafoorumi modereerimisõigus. Võib-olla soovid muuta kasutaja volitusi. Volitused on kirjas alljärgnevas.';

$lang['Public'] = 'Avalik';
$lang['Private'] = 'Privaatne';
$lang['Registered'] = 'Registreeritutele';
$lang['Administrators'] = 'Administraatoritele';
$lang['Hidden'] = 'Varjatud';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'KÕIK';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRIV';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Vaatamine';
$lang['Read'] = 'Lugemine';
$lang['Post'] = 'Postitamine';
$lang['Reply'] = 'Vastamine';
$lang['Edit'] = 'Muutmine';
$lang['Delete'] = 'Kustutamine';
$lang['Sticky'] = 'Kleeps';
$lang['Announce'] = 'Teade'; 
$lang['Vote'] = 'Hääletamine';
$lang['Pollcreate'] = 'Küsitluse tegemine';

$lang['Permissions'] = 'Volitused';
$lang['Simple_Permission'] = 'Üldvolitused';

$lang['User_Level'] = 'Staatus'; 
$lang['Auth_User'] = 'Kasutaja';
$lang['Auth_Admin'] = 'Administraator';
$lang['Group_memberships'] = 'Grupi liige';
$lang['Usergroup_members'] = 'Selles grupis on järgnevad liikmed';

$lang['Forum_auth_updated'] = 'Alafoorumi volitused uuendatud';
$lang['User_auth_updated'] = 'Kasutaja volitused uuendatud';
$lang['Group_auth_updated'] = 'Grupi volitused uuendatud';

$lang['Auth_updated'] = 'Volitused uuendatud';
$lang['Click_return_userauth'] = 'Vajuta siia %sSiia%s, et minna tagasi Kasutaja Volituste juurde';
$lang['Click_return_groupauth'] = 'Vajuta siia %sSiia%s, et minna tagasi Grupi Volituste juurde';
$lang['Click_return_forumauth'] = 'Vajuta siia %sSiia%s, et minna tagasi Alafoorumi Volituste juurde';


//
// Banning
//
$lang['Ban_control'] = 'Bannimine';
$lang['Ban_explain'] = 'Siin saad sa piirata kasutajate ligipääsu foorumile ehk neid bannida. Sa saad bannida kindlat kasutajat või siis ip järgi. Et kasutaja ei saaks uuesti registreerida, saad bannida ka e-maili aadresse. Ainult e-mail bannimine ei hoia kasutajat sinu foorumit lugemast. Selleks pead kasutama ip või kasutaja banni.';
$lang['Ban_explain_warn'] = 'Kasutades numbrite asemel *, bannid sa kõik võimalikud ip-kombinatsioonid, mis olemasolevate numbritega sobivad. Püüa sellest hoiduda ja bannida terveid ip aadresse.';

$lang['Select_username'] = 'Vali Kasutajanimi';
$lang['Select_ip'] = 'Vali IP';
$lang['Select_email'] = 'Vali E-Mail';

$lang['Ban_username'] = 'Banni üks või rohkem kasutajaid';
$lang['Ban_username_explain'] = 'Oma klaviatuuri ja hiirega saad bannida mitu kasutajat korraga';

$lang['Ban_IP'] = 'Banni üks või mitu IP aadressi';
$lang['IP_hostname'] = 'IP aadressid või serverinimed';
$lang['Ban_IP_explain'] = 'Mitme IP bannimiseks eralda need komaga. IP-de vahemiku bannimiseks märgi algus ja lõpp sidekriipsuga (-) ja tundmatute numbrite asemel kasuta tärni (*).';

$lang['Ban_email'] = 'Banni üks või mitu e-maili aadressi';
$lang['Ban_email_explain'] = 'Mtime e-maili bannimiseks eralda need komaga. Tundmatu asemel kasuta tärni (*) näiteks *@hotail.com';

$lang['Unban_username'] = 'Unbanni üks või mitu kasutajat';
$lang['Unban_username_explain'] = 'Sul on võimalik oma klaviatuuri ja hiire abil unbannida mitu kasutajat korraga';

$lang['Unban_IP'] = 'Unbanni üks või mitu IP aadressi';
$lang['Unban_IP_explain'] = 'Sul on võimalik oma klaviatuuri ja hiire abil unbannida mitu IP-d korraga';

$lang['Unban_email'] = 'Unbanni üks või mitu e-maili aadressi';
$lang['Unban_email_explain'] = 'Sul on võimalik oma klaviatuuri ja hiire abil unbannida mitu e-maili korraga';

$lang['No_banned_users'] = 'Pole bannitud kasutajaid';
$lang['No_banned_ip'] = 'Pole bannitud IP-sid';
$lang['No_banned_email'] = 'Pole bannitud e-maile';

$lang['Ban_update_sucessful'] = 'Bannide nimekiri on edukalt uuendatud';
$lang['Click_return_banadmin'] = 'Vajuta %sSiia%s, et minna tagasi Bannimise juurde';


//
// Configuration
//
$lang['General_Config'] = 'Üldine Konfiguratsioon';
$lang['Config_explain'] = 'Siin saad muuta oma foorumi seadeid.';

$lang['Click_return_config'] = 'Vajuta %sSiia%s, et Konfiguratsiooni juurde tagasi minna';

$lang['General_settings'] = 'Üldised Foorumi Seaded';
$lang['Server_name'] = 'DDomeeni Nimi';
$lang['Server_name_explain'] = 'Selle domeeni nimi, kus su foorum jookseb';
$lang['Script_path'] = 'Alafolder';
$lang['Script_path_explain'] = 'Foorumi asukoht domeeni suhtes';
$lang['Server_port'] = 'Serveri Port';
$lang['Server_port_explain'] = 'Port, millel su server jookseb. Tavaliselt 80. Muuda ainult vajadusel.';
$lang['Site_name'] = 'Lehe nimi';
$lang['Site_desc'] = 'Lehe kirjendus';
$lang['Board_disable'] = 'Sulge Foorum';
$lang['Board_disable_explain'] = 'See muudab foorumi ajutiselt kättesaamatuks. Administraatorid saavad sel ajal Administratsioonipaneeli ligi.';
$lang['Acct_activation'] = 'Konto aktiveerimine';
$lang['Acc_None'] = 'Puudub'; // These three entries are the type of activation
$lang['Acc_User'] = 'Kasutaja';
$lang['Acc_Admin'] = 'Administraator';

$lang['Abilities_settings'] = 'Kasutajate ja Alafoorumite Üldseaded';
$lang['Max_poll_options'] = 'Maksimaalne küsitluse vastuste arv';
$lang['Flood_Interval'] = 'Ajapiirang';
$lang['Flood_Interval_explain'] = 'Mitu sekundit peab kasutaja ootama enne järgmise postituse tegemist'; 
$lang['Board_email_form'] = 'Kasutajate e-mail üle foorumi';
$lang['Board_email_form_explain'] = 'Kasutajad saavad üksteisele foorumi kaudu e-maile saata';
$lang['Topics_per_page'] = 'Teemasid Lehel';
$lang['Posts_per_page'] = 'Postitusi Lehel';
$lang['Hot_threshold'] = 'Mitu Postitust Kuuma Teema Jaoks';
$lang['Default_style'] = 'Stiil Vaikimisi';
$lang['Override_style'] = 'Muuda kasutajate stiili';
$lang['Override_style_explain'] = 'Asendab kasutajate stiili vaikimisi stiiliga';
$lang['Default_language'] = 'Vaikimisi Keel';
$lang['Date_format'] = 'Kuupäeva Formaat';
$lang['System_timezone'] = 'Süsteemi Ajatsoon';
$lang['Enable_gzip'] = 'Võimalda GZip Pakkimine';
$lang['Enable_prune'] = 'Võimalda Alafoorumite Kärpimine';
$lang['Allow_HTML'] = 'Luba HTML';
$lang['Allow_BBCode'] = 'Luba BBCode';
$lang['Allowed_tags'] = 'Lubatud HTML Tagid';
$lang['Allowed_tags_explain'] = 'Eralda tagid komaga';
$lang['Allow_smilies'] = 'Luba Emotikonid';
$lang['Smilies_path'] = 'Emotikonide asukoht';
$lang['Smilies_path_explain'] = 'Asukoht phpbb kataloogi all, näiteks images/smiles';
$lang['Allow_sig'] = 'Luba Signatuurid';
$lang['Max_sig_length'] = 'Maksimaalne signatuuri pikkus';
$lang['Max_sig_length_explain'] = 'Lubatud tähemärkide arv signatuuris';
$lang['Allow_name_change'] = 'Luba kasutajanime muutmist';

$lang['Avatar_settings'] = 'Avatari Seaded';
$lang['Allow_local'] = 'Luba galerii avatarid';
$lang['Allow_remote'] = 'Luba lingitud avatarid';
$lang['Allow_remote_explain'] = 'Avatarid, mis on lingitud teiselt weebisaidilt';
$lang['Allow_upload'] = 'Luba vataride uploadimine';
$lang['Max_filesize'] = 'Maksimaalne avatari failisuurus';
$lang['Max_filesize_explain'] = 'Uploaditud avataride jaoks';
$lang['Max_avatar_size'] = 'Maksimaalne avatari suurus';
$lang['Max_avatar_size_explain'] = '(Kõrgus x Laius pikslites)';
$lang['Avatar_storage_path'] = 'Avataride asukoht';
$lang['Avatar_storage_path_explain'] = 'Asukoht phpbb kataloogi all, näiteks images/avatars';
$lang['Avatar_gallery_path'] = 'Avataride Galerii asukoht';
$lang['Avatar_gallery_path_explain'] = 'Asukoht phpbb kataloogi all, näiteks images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA Seaded';
$lang['COPPA_fax'] = 'COPPA Faksinumber';
$lang['COPPA_mail'] = 'COPPA Mailiaadress';
$lang['COPPA_mail_explain'] = 'See on mailiaadress, kuhu vanemad saadavad registreerimislehe';

$lang['Email_settings'] = 'E-maili Seaded';
$lang['Admin_email'] = 'Administraatori E-mail';
$lang['Email_sig'] = 'E-maili allkiri';
$lang['Email_sig_explain'] = 'See tekst lisatakse siit saadetavatele kirjadele';
$lang['Use_SMTP'] = 'Kasuta e-mailide saatmiseks SMTP serverit';
$lang['Use_SMTP_explain'] = 'Vali, kui tahad kasutada oma serverit sisseehitatud mailifunktsiooni asemel';
$lang['SMTP_server'] = 'SMTP Serveri Aadress';
$lang['SMTP_username'] = 'SMTP Kasutajanimi';
$lang['SMTP_username_explain'] = 'Lisa kasutajanimi, kui su server seda vajab';
$lang['SMTP_password'] = 'SMTP Parool';
$lang['SMTP_password_explain'] = 'Lisa parool, kui su server seda vajab';

$lang['Disable_privmsg'] = 'Privaatõnumid';
$lang['Inbox_limits'] = 'Maksimaalne kirjade arv Postkastis';
$lang['Sentbox_limits'] = 'Maksimaalne kirjade arv Saadetud Kirjade Kaustas';
$lang['Savebox_limits'] = 'Maksimaalne kirjade arv Salvestatud Kirjade Kaustas';

$lang['Cookie_settings'] = 'Küpsiste Seaded'; 
$lang['Cookie_settings_explain'] = 'Need seaded märgivad, kuidas küpsiseid kasutaja arvutisse salvestatakse. Tavaseadetest peaks piisama aga kui vaja, võid neid muuta. Ole ettevaatlik - ebakorrektne muutmine võib takistada kasutajaid sisse logimast.';
$lang['Cookie_domain'] = 'Küpsise domeen';
$lang['Cookie_name'] = 'Küpsise nimi';
$lang['Cookie_path'] = 'Küpsise asukoht';
$lang['Cookie_secure'] = 'Turvaline Küpsis';
$lang['Cookie_secure_explain'] = 'Kui su server kasutab SSL-i, võimalda see funktsioon. Muidu ära muuda.';
$lang['Session_length'] = 'Sessiooni pikkus [ sekundit ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Võimalda Visuaalne Kinnitus';
$lang['Visual_confirm_explain'] = 'Nõuab kasutajatelt pildi pealt loetud koodi sisestamist enne registreerimist.';

//
// Forum Management
//
$lang['Forum_admin'] = 'Alafoorumite Administreerimine';
$lang['Forum_admin_explain'] = 'Siit paneelist saab lisada, kustutada, muuta ja korrastada erinevaid kategooriaid ja alafoorumeid';
$lang['Edit_forum'] = 'Muuda alafoorumit';
$lang['Create_forum'] = 'Uus alafoorum';
$lang['Create_category'] = 'Uus kategooria';
$lang['Remove'] = 'Eemalda';
$lang['Action'] = 'Seade';
$lang['Update_order'] = 'Uuendamise järjekord';
$lang['Config_updated'] = 'Alafoorum edukalt konfigureeritud';
$lang['Edit'] = 'Muuda';
$lang['Delete'] = 'Kustuta';
$lang['Move_up'] = 'Üles';
$lang['Move_down'] = 'Alla';
$lang['Resync'] = 'Sünkroniseeri';
$lang['No_mode'] = 'Seadet ei märgitud';
$lang['Forum_edit_delete_explain'] = 'Siin saad valida üldiseid foorumi seadeid';

$lang['Move_contents'] = 'Liiguta Kogu Sisu';
$lang['Forum_delete'] = 'Kustuta Alafoorum';
$lang['Forum_delete_explain'] = 'Siin saad kustutada alafoorumi ja valida, kuhu seal olnud teemad lähevad.';

$lang['Status_locked'] = 'Suletud';
$lang['Status_unlocked'] = 'Avatud';
$lang['Forum_settings'] = 'Üldised Alafoorumi Seaded';
$lang['Forum_name'] = 'Alafoorumi nimi';
$lang['Forum_desc'] = 'Kirjeldus';
$lang['Forum_status'] = 'Staatus';
$lang['Forum_pruning'] = 'Auto-kärpimine';

$lang['prune_freq'] = 'Kontrolli teemasid, kui on möödunud';
$lang['prune_days'] = 'Eemalda teemad, kuhu pole postitatud';
$lang['Set_prune_data'] = 'Sa võimaldasid auto-kärpimise aga ei märkinud sagedust. Mine tagasi ja märgi see.';

$lang['Move_and_Delete'] = 'Liiguta ja Kustuta';

$lang['Delete_all_posts'] = 'Kustuta kõik postotused';
$lang['Nowhere_to_move'] = 'Pole kusagile liigutada';

$lang['Edit_Category'] = 'Kustuta Kategooria';
$lang['Edit_Category_explain'] = 'Siin saad muuta kategooria nime.';

$lang['Forums_updated'] = 'Alafoorumi ja Kategooria info edukalt uuendatud';

$lang['Must_delete_forums'] = 'Sa pead kustutama kõik alafoorumid enne kui saad kategooriat kustutada';

$lang['Click_return_forumadmin'] = 'Vajuta %sSiia%s, et minna tagasi Alafoorumi Administreerimise juurde';


//
// Smiley Management
//
$lang['smiley_title'] = 'Emotikonide Muutmine';
$lang['smile_desc'] = 'Siin leheküljel saad muuta, eemaldada ja lisada emotikone ja smailisid, mida kasutajad kasutavad postitustes ja sõnumites.';

$lang['smiley_config'] = 'Emotikonide Seaded';
$lang['smiley_code'] = 'Smaili Kood';
$lang['smiley_url'] = 'Smaili Pildifail';
$lang['smiley_emot'] = 'Smaili Emotsioon';
$lang['smile_add'] = 'Lisa uus smaili';
$lang['Smile'] = 'Smaili';
$lang['Emotion'] = 'Emotsioon';

$lang['Select_pak'] = 'Vali pakk-fail (.pak)';
$lang['replace_existing'] = 'Asenda olemasolevad smailid';
$lang['keep_existing'] = 'Säilita olemasolevad smailid';
$lang['smiley_import_inst'] = 'Sa pead unzippima smaili paki ja uploadima sailid õigesse kausta oma serveris. Siis vali siin õige informatsioon, et smaili-pakki lisada.';
$lang['smiley_import'] = 'Smaili-Paki Importimine';
$lang['choose_smile_pak'] = 'Vali Smaili-Pakk Fail (.pak)';
$lang['import'] = 'Impordi Smailid';
$lang['smile_conflicts'] = 'Mida teha vastuolude tekkimisel';
$lang['del_existing_smileys'] = 'Kustuta olemasolevad smailid enne importimist';
$lang['import_smile_pack'] = 'Impordi Smailide Pakk';
$lang['export_smile_pack'] = 'CTee Smailide Pakk';
$lang['export_smiles'] = 'Et luua smaili-pakk hetkel installitud smailidest, kliki %sSiia%s, et downloadida smilies.pak fail. PAne failile õige nimi ja jälgi et see jääks .pak lõpuga. Siis loo zip fail, kus on sees kõik smailid ja see .pak fail.';

$lang['smiley_add_success'] = 'Emotikon lisati edukalt';
$lang['smiley_edit_success'] = 'Emotikoni uuendati edukalt';
$lang['smiley_import_success'] = 'Smaili-Pakk imporditi edukalt!';
$lang['smiley_del_success'] = 'Smaili eemaldati edukalt';
$lang['Click_return_smileadmin'] = 'Vajuta %sSiia%s , et minna tagasi emotikone muutma';


//
// User Management
//
$lang['User_admin'] = 'Kasutajate Administreerimne';
$lang['User_admin_explain'] = 'Siin saad sa muuta kasutaja andmeid.';

$lang['Look_up_user'] = 'Otsi Kasutaja';

$lang['Admin_user_fail'] = 'Ei saanud kasutaja profiili uuendada';
$lang['Admin_user_updated'] = 'Kasutaja profiil edukalt uuendatud.';
$lang['Click_return_useradmin'] = 'Vajuta %sSiia%s, et minna tagasi Kasutaja Administreerimise juurde';

$lang['User_delete'] = 'Kustuta see kasutaja';
$lang['User_delete_explain'] = 'Vajuta siia, et kustutada kasutaja; seda ei saa hiljem muuta.';
$lang['User_deleted'] = 'Kasutaja kustutati edukalt.';

$lang['User_status'] = 'Kasutaja on aktiivne';
$lang['User_allowpm'] = 'Saab lugeda privaatsõnumeid';
$lang['User_allowavatar'] = 'Saab kuvada avatari';

$lang['Admin_avatar_explain'] = 'Siin saad sa vaadata ja kustutada kasutaja avatari.';

$lang['User_special'] = 'Ainult Administraatoritele Mõeldud Väljad';
$lang['User_special_explain'] = 'Neid valikuid ei saa kasutaja ise muuta. Siin saad sa muuta nende kasutajakirjeldust ja muid seadeid.';


//
// Group Management
//
$lang['Group_administration'] = 'Grupi Administreerimine';
$lang['Group_admin_explain'] = 'Siit saad kustutada, muuta ja lisada kasutajagruppe. Saad valida moderaatori ja märkida grupi nime ja kirjelduse';
$lang['Error_updating_groups'] = 'Gruppide uuendamisel tekkis viga';
$lang['Updated_group'] = 'Grupp edukalt uuendatud';
$lang['Added_new_group'] = 'Uus grupp edukalt loodud';
$lang['Deleted_group'] = 'Grupp edukalt kustutatud';
$lang['New_group'] = 'Tee uus grupp';
$lang['Edit_group'] = 'Muuda gruppi';
$lang['group_name'] = 'Grupi nimi';
$lang['group_description'] = 'Grupi kirjeldus';
$lang['group_moderator'] = 'Grupi moderaator';
$lang['group_status'] = 'Grupi staatus';
$lang['group_open'] = 'Avatud grupp';
$lang['group_closed'] = 'Suletud grupp';
$lang['group_hidden'] = 'Varjatud grupp';
$lang['group_delete'] = 'Kustuta grupp';
$lang['group_delete_check'] = 'Kustuta see grupp';
$lang['submit_group_changes'] = 'Muuda';
$lang['reset_group_changes'] = 'Taasta';
$lang['No_group_name'] = 'Sa pead grupile nime panema';
$lang['No_group_moderator'] = 'Sa pead grupile moderaatori panema';
$lang['No_group_mode'] = 'Sa pead märkima grupi staatuse';
$lang['No_group_action'] = 'Ühtegi käsku ei olnud märgitud';
$lang['delete_group_moderator'] = 'Kustutada vana grupi moderaator?';
$lang['delete_moderator_explain'] = 'Kui sa vahetad grupi moderaatorit, märgi see kast, kui soovid vana moderaatori grupist eemaldada. Vastasel juhul läheb ta tavaliikmeks.';
$lang['Click_return_groupsadmin'] = 'Vajuta %sSiia%s, et minna tagasi Grupi Administratsiooni.';
$lang['Select_group'] = 'Vali grupp';
$lang['Look_up_group'] = 'Otsi gruppi';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Alafoorumi kärpimine';
$lang['Forum_Prune_explain'] = 'See funktsioon kustutab kõik postitused, kuhu pole sinu märgitud päevade arvu jooksul postitatud. Kui sa numbrit ei märgi, kustutatakse kõik postitused. Ei eemaldata postitusi, kus on aktiivseid küsitlusi ja ei eemaldata ta teadaandeid.';
$lang['Do_Prune'] = 'Kärbi';
$lang['All_Forums'] = 'Kõik Alafoorumid';
$lang['Prune_topics_not_posted'] = 'Kärbi teemad, kuhu pole nii mitu päeva postitatud';
$lang['Topics_pruned'] = 'Teemad kustutatud';
$lang['Posts_pruned'] = 'Postitused kustutatud';
$lang['Prune_success'] = 'Alafoorumi kärpimine oli edukas';


//
// Word censor
//
$lang['Words_title'] = 'Tsensuur';
$lang['Words_explain'] = 'Siit saad muuta, lisada ja eemaldada sõnu, mis automaatselt foorumis tsenseeritakse. Lisaks ei tohi liitujad registreeruda kasutajanimega, mis seda sõna sisaldab. Tundmatud (*) on sõna märkimisel lubatud.';
$lang['Word'] = 'Sõna';
$lang['Edit_word_censor'] = 'Muuda tsensuuri';
$lang['Replacement'] = 'Asendus';
$lang['Add_new_word'] = 'Lisa uus sõna';
$lang['Update_word'] = 'Uuenda tsensuuri';

$lang['Must_enter_word'] = 'Sa pead sisestama sõna ja asendaja';
$lang['No_word_selected'] = 'Muutmiseks ei valitud ühtegi sõna';

$lang['Word_updated'] = 'Tsensuur edukalt uuendatud';
$lang['Word_added'] = 'Tsensuur edukalt lisatud';
$lang['Word_removed'] = 'Valitud tsensuur edukalt eemaldatud';

$lang['Click_return_wordadmin'] = 'Vajuta %sHSiia%s, et minna tagasi Tsensuuri juurde';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Siit saad saata e-maili kõigile kasutajatele või mingi kindla grupi liikmetele. Saadetav e-mail läheb teele administraatori aadressile ja pimekoopiad saadetakse ülejäänud adressaatidele. Kui sa saadad, suurele grupile inimestele, ära sulge lehte poole peal. See on normaalne, et kirjade saatmisega läheb aega.';
$lang['Compose'] = 'Kirjuta'; 

$lang['Recipients'] = 'Saajad'; 
$lang['All_users'] = 'Kõik kasutajad';

$lang['Email_successfull'] = 'Sinu kiri on saadetud';
$lang['Click_return_massemail'] = 'Vajuta %sSiia%s, et Masiimaili juurde tagasi minna';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Tiitlite administreerimine';
$lang['Ranks_explain'] = 'Siin saad lisada, muuta ja kustutada kasutajakirjeldusi oma foorumis. Sa saad luua ka eritiitleid, mida saab panna kasutajale tema profiili muutes';

$lang['Add_new_rank'] = 'Lisa uus tiitel';

$lang['Rank_title'] = 'Tiitel';
$lang['Rank_special'] = 'Pane eritiitlina';
$lang['Rank_minimum'] = 'Minimaalselt postitusi';
$lang['Rank_maximum'] = 'MMaksimaalselt postitusi';
$lang['Rank_image'] = 'Tiitli pilt (asukoht phpBB kausta suhtes)';
$lang['Rank_image_explain'] = 'Selle abil saad panna väikse pildi tiitli juurde';

$lang['Must_select_rank'] = 'Sa pead täpsustama tiitli';
$lang['No_assigned_rank'] = 'Eritiitel puudub';

$lang['Rank_updated'] = 'Kasutajakirjeldus edukalt uuendatud';
$lang['Rank_added'] = 'Kasutajakirjeldus edukalt lisatud';
$lang['Rank_removed'] = 'Kasutajakirjeldus edukalt kustutatud';
$lang['No_update_ranks'] = 'Kasutajakirjeldus kustutati edukalt aga seda kasutavate kasutajate profiil jäi muutmata. Sa pead seda käsitsi muutma';

$lang['Click_return_rankadmin'] = 'Vajuta %sSiia%s, ei minna tagasi Tiitlite Administreerimise juurde';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Kasutajanime Keelamine';
$lang['Disallow_explain'] = 'Siin saad määrata kasutajanimesid, mis on foorumis keelatud. Tundmatu (*) kasutamine on lubatud. Sa ei saa lisada kasutajanimesid, mis on juba kasutuses.';

$lang['Delete_disallow'] = 'Kustuta';
$lang['Delete_disallow_title'] = 'Eemalda Keelatud Kasutajanimi';
$lang['Delete_disallow_explain'] = 'Sa saad eemaldada keelatud kasutajanime, valides selle menüüst';

$lang['Add_disallow'] = 'Lisa';
$lang['Add_disallow_title'] = 'Lisa keelatud kasutajanimi';
$lang['Add_disallow_explain'] = 'Sa saad keelata kasutajanime, kasutades tundmatut (*), mis asendab igasuguseid tähemärke';

$lang['No_disallowed'] = 'Pole ühtegi keelatud kasutajanime';

$lang['Disallowed_deleted'] = 'Keelatud kasutajanimi edukalt eemaldatud';
$lang['Disallow_successful'] = 'Keelatud kasutajanimi edukalt lisatud';
$lang['Disallowed_already'] = 'Seda nime ei saa keeltata. See kas on juba tsensuuri või keelatud nimede nimekirjas või selline kasutaja on juba olemas.';

$lang['Click_return_disallowadmin'] = 'Vajuta %sSiia%s, et minna tagasi Kasutajanimede Keelamise juurde';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Stiilide Administreerimine';
$lang['Styles_explain'] = 'Siin saad lisada, muuta ja kustutada foorumis kasutatavaid stiile.';
$lang['Styles_addnew_explain'] = 'Siin on nimekiri värviskeemidest, mida sa saad olemasolevatele kujundustele lisada. Siin nimekirjas olevad värviskeemid ei ole veel lisatud andmebaasi. Installimiseks vajuta lihtsalt vastavat linki.';

$lang['Select_template'] = 'Vali Kujundus';

$lang['Style'] = 'Stiil';
$lang['Template'] = 'Kujundust';
$lang['Install'] = 'Installi';
$lang['Download'] = 'Download';

$lang['Edit_theme'] = 'Muuda Värviskeemi';
$lang['Edit_theme_explain'] = 'Siin saad märkida valitud värviskeemi seaded';

$lang['Create_theme'] = 'Loo Värviskeem';
$lang['Create_theme_explain'] = 'Kasuta allolevat tabelit, et luua olemasolevatele kujundustele värviskeeme. Värve märkides ära kasuta #. Näiteks CCCCCC on õige, #CCCCCC ei ole';

$lang['Export_themes'] = 'Ekspordi Värviskeeme';
$lang['Export_explain'] = 'Siin saad eksportida värviskeemi andmeid. Vali kujundus ja skript loob värviskeemi faili ning salvestab selle kujunduse kausta. Kui skript ei saa seda faili salvestada, annab ta sulle selle downloadimise võimaluse. Salvestamiseks pead sa andma kujunduse folderile vastavad õigused';

$lang['Theme_installed'] = 'Valitud värviskeem edukalt installeeritud';
$lang['Style_removed'] = 'Valitud stiil edukalt eemaldatud. Täielikuks eemaldamiseks pead oma serverist kustutama vastavad failid.';
$lang['Theme_info_saved'] = 'Värviskeemi info edukalt salvestatud. Nüüd peaksid kujunduse folderile uuesti read-only õigused andma';
$lang['Theme_updated'] = 'Valitud värviskeemi seaded uuendatud. Sa peaksid nüüd eksportima uued seaded';
$lang['Theme_created'] = 'Värviskeem loodud. Sa peaksid nüüd värviskeemi talletamiseks eksportima selle konfiguratsioonifaili';

$lang['Confirm_delete_style'] = 'Oled sa kindel, et soovid seda stiili kustutada?';

$lang['Download_theme_cfg'] = 'Eksporter ei suutnud infofaili kirjutada. Vajuta allolevat nuppu, et fail downloadida. Seejärel peaksid selle kujunduse kausta panema ning levitamisel kausta kokku pakkima';
$lang['No_themes'] = 'Sinu valitud kujundusel pole ühtegi värviskeemi kaasas. Sa võid luua uue värviskeemi';
$lang['No_template_dir'] = 'Ei saanud kujunduse kausta avada. See võib olla weebiserverile kättesaamatu või mitte eksisteerida';
$lang['Cannot_remove_style'] = 'Sa ei saa valitud stiili eemaldada, kuna see on hetkel vaikimisi foorumi stiil. Palun muuda enne vaikimisi stiili.';
$lang['Style_exists'] = 'Sinu valitud stiilinimi juba eksisteerib. Palun vali mõni teine nimi.';

$lang['Click_return_styleadmin'] = 'Vajuta %sSiia%s, et minna tagasi Stiilide Administreerimise juurde';

$lang['Theme_settings'] = 'Värviskeemi Seaded';
$lang['Theme_element'] = 'Skeemi Osa';
$lang['Simple_name'] = 'Lihtne nimi';
$lang['Value'] = 'Väärtus';
$lang['Save_Settings'] = 'Salvesta Seaded';

$lang['Stylesheet'] = 'CSS Stiilifail';
$lang['Background_image'] = 'Taustapilt';
$lang['Background_color'] = 'Taustavärv';
$lang['Theme_name'] = 'Skeemi Nimi';
$lang['Link_color'] = 'Lingi Värv';
$lang['Text_color'] = 'Teksti Värv';
$lang['VLink_color'] = 'Külastatud Lingi Värv';
$lang['ALink_color'] = 'Aktiivse Lingi Värv';
$lang['HLink_color'] = 'Kursori All OLeva Lingi Värv';
$lang['Tr_color1'] = 'Tabeli Reavärv 1';
$lang['Tr_color2'] = 'Tabeli Reavärv 2';
$lang['Tr_color3'] = 'Tabeli Reavärv 3';
$lang['Tr_class1'] = 'Tabeli Rea Class 1';
$lang['Tr_class2'] = 'Tabeli Rea Class 2';
$lang['Tr_class3'] = 'Tabeli Rea Class 3';
$lang['Th_color1'] = 'Tabeli Päise Värv 1';
$lang['Th_color2'] = 'Tabeli Päise Värv 2';
$lang['Th_color3'] = 'Tabeli Päise Värv 3';
$lang['Th_class1'] = 'Tabeli Päise Class 1';
$lang['Th_class2'] = 'Tabeli Päise Class 2';
$lang['Th_class3'] = 'Tabeli Päise Class 3';
$lang['Td_color1'] = 'Tabeli Lahtri Värv 1';
$lang['Td_color2'] = 'Tabeli Lahtri Värv 2';
$lang['Td_color3'] = 'Tabeli Lahtri Värv 3';
$lang['Td_class1'] = 'Tabeli Lahtri Class 1';
$lang['Td_class2'] = 'Tabeli Lahtri Class 2';
$lang['Td_class3'] = 'Tabeli Lahtri Class 3';
$lang['fontface1'] = 'Font 1';
$lang['fontface2'] = 'Font 2';
$lang['fontface3'] = 'Font 3';
$lang['fontsize1'] = 'Fondi Suurus 1';
$lang['fontsize2'] = 'Fondi Suurus 2';
$lang['fontsize3'] = 'Fondi Suurus 3';
$lang['fontcolor1'] = 'Fondi Värv 1';
$lang['fontcolor2'] = 'Fondi Värv 2';
$lang['fontcolor3'] = 'Fondi Värv 3';
$lang['span_class1'] = 'Span Class 1';
$lang['span_class2'] = 'Span Class 2';
$lang['span_class3'] = 'Span Class 3';
$lang['img_poll_size'] = 'Küsitluse Pildi Suurus [px]';
$lang['img_pm_size'] = 'Privaatsõnumite Staatuse Suurus [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Tere Tulemast phpBB2 Installeerimisele';
$lang['Initial_config'] = 'Üldised Seaded';
$lang['DB_config'] = 'Andmebaasi Seaded';
$lang['Admin_config'] = 'Administraatori Seaded';
$lang['continue_upgrade'] = 'Kui oled konfiguratsioonifaili omale downloadinud, saad vajutada \'Jätka Uuendust\' nuppu, et uuendamisega edasi minna. Palun oota uue konfiguratsioonifaili uploadimisega, kuni uuendamisprotsess on lõppenud.';

$lang['upgrade_submit'] = 'Jätka Uuendust';

$lang['Installer_Error'] = 'Installeerimisel tekkis viga';
$lang['Previous_Install'] = 'Leiti vanem installatsioon';
$lang['Install_db_error'] = 'Andmebaasi uuendamisel tekkis viga';

$lang['Re_install'] = 'Su eelmine installatsioon on endiselt aktiivne.<br /><br />Kui soovid phpBB2 uuesti installeerida, vajuta allolevat nuppu. Seda tehes kaovad kõik olemasolevad andmed ja varukoopiaid ei tehta. <br /><br />Mõtle hoolega enne nõustumist!';

$lang['Inst_Step_0'] = 'Täname, et valisid phpBB2. Et instlleerimisega lõpule jõuda, palun täida allolevad väljad. Pane tähele, et andmebaas, kuhu sa installid, peab eelnevalt olemas olema. Kui sa installid andmebaasi, mis kasutab ODBC, näiteks MS Access, siis pead sa eelnevalt looma DNS-i selle jaoks.';

$lang['Start_Install'] = 'Alusta Paigaldamist';
$lang['Finish_Install'] = 'Lõpeta Paigaldamine';

$lang['Default_lang'] = 'Foorumi Keel Vaikimisi';
$lang['DB_Host'] = 'Andmebaasi Serveri Nimi / DSN';
$lang['DB_Name'] = 'Andmebaasi Nimi';
$lang['DB_Username'] = 'Andmebaasi Kasutajanimi';
$lang['DB_Password'] = 'Andmebaasi Parool';
$lang['Database'] = 'Sinu Andmebaas';
$lang['Install_lang'] = 'Vali Installeerimise Keel';
$lang['dbms'] = 'Andmebaasi Tüüp';
$lang['Table_Prefix'] = 'Eesliide Tabelite Nimedele';
$lang['Admin_Username'] = 'Administraatori Kasutajanimi';
$lang['Admin_Password'] = 'Administraatori Parool';
$lang['Admin_Password_confirm'] = 'Administraatori Parool [ Korda ]';

$lang['Inst_Step_2'] = 'Administraatori konto on loodud. Praguseks on põhiline installatsioon lõppenud. Nüüd viiakse sind lehele, kus saad ona foorumit administreerida. Tee kindlasti Seadete all vajalikud muudatused. Täname, et valisid phpBB2.';

$lang['Unwriteable_config'] = 'Su konfiguratsioonifaili ei saa hetkel kirjutada. Koopia sellest downloaditakse sulle arvutisse, kui vajutad allolevat nuppu. Sa peaksid selle faili uploadima samasse kausta kus phpBB2. Peale seda peaksid märkima vajalikud seaded Administratsioonipaneelis (link on iga lehe allosas). Täname, et valisid phpBB2.';
$lang['Download_config'] = 'Download';

$lang['ftp_choose'] = 'Vali Downloadi Meetod';
$lang['ftp_option'] = '<br />Kuna FTP laiendid on siin lubatud, siis võid üritada FTP kaudu konfiguratsioonifaili paika sättida.';
$lang['ftp_instructs'] = 'Sa vailisid FTP kaudu faili saatmise. Palun märgi vajalikud detailid väljadesse.';
$lang['ftp_info'] = 'Sisesta Oma FTP Info';
$lang['Attempt_ftp'] = 'Ürita FTP kaudu fail paigaldada';
$lang['Send_file'] = 'Saada fail mulle ja ma panen selle käsitsi FTP-sse';
$lang['ftp_path'] = 'PhpBB asukoht FTP kaudu';
$lang['ftp_username'] = 'FTP Kasutajanimi';
$lang['ftp_password'] = 'FTP Parool';
$lang['Transfer_config'] = 'Alusta Saatmist';
$lang['NoFTP_config'] = 'FTP kaudu ei õnnestunud faili saata. Palun downloadi fail ja paigalda see käsitsi.';

$lang['Install'] = 'Installeeri';
$lang['Upgrade'] = 'Uuenda';


$lang['Install_Method'] = 'Vali paigaldamise meetod';

$lang['Install_No_Ext'] = 'Sinu serveri PHP tüüp ei toeta sinu valitud andmebaasi tüüpi';

$lang['Install_No_PCRE'] = 'phpBB2 vajab \'Perl-Compatible Regular Expressions\' Moodulit PHP jaoks, mida sinu PHP ei paista toetavat!';

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
// -------------------------------------------------

?>