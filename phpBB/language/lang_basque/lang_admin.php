<?php

/***************************************************************************
 *                            lang_admin.php [Basque]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.3 2002/06/27 20:06:44 thefinn Exp $
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
$lang['General'] = 'Administrazio Orokorra';
$lang['Users'] = 'Erabiltzaile Administrazioa';
$lang['Groups'] = 'Talde Administrazioa';
$lang['Forums'] = 'Foro Administrazioa';
$lang['Styles'] = 'Estilo Administrazioa';

$lang['Configuration'] = 'Konfigurazioa';
$lang['Permissions'] = 'Baimenak';
$lang['Manage'] = 'Kudeaketa';
$lang['Disallow'] = 'Izenak debekatu';
$lang['Prune'] = 'Garbiketa';
$lang['Mass_Email'] = 'ePosta masiboa';
$lang['Ranks'] = 'Mailak';
$lang['Smilies'] = 'Irrifartxoak';
$lang['Ban_Management'] = 'Debeku Kontrola';
$lang['Word_Censor'] = 'Hitz Zentsura';
$lang['Export'] = 'Exportatu';
$lang['Create_new'] = 'Sortu';
$lang['Add_new'] = 'Gehitu';
$lang['Backup_DB'] = 'Datubasearen segurtasun kopia';
$lang['Restore_DB'] = 'Datubasea berreskuratu';


//
// Index
//
$lang['Admin'] = 'Administrazioa';
$lang['Not_admin'] = 'Ez duzu taula hau administratzeko baimenik';
$lang['Welcome_phpBB'] = 'Ongi etorri phpBBra';
$lang['Admin_intro'] = 'Eskerrik asko zure foroetarako phpBB aukeratzeagatik. Pantaila honek zure foroen estatistika ezberdinen ikuspegi orokor bat emango dizu. Ezkerreko paneleko <u>Admin Indizea</u> loturan klik eginez bueltatu zaitezke orri honetara. Zure foroen indizera bueltatzeko ezkerreko phpBB logoan egin klik. Pantaila honen ezkerreko beste loturak zure foroetako beste arlo guztiak kontrolatzea baimenduko dizute, pantaila bakoitzak tresnak erabiltzeko argibideak ditu.';
$lang['Main_index'] = 'Foro Indizea';
$lang['Forum_stats'] = 'Foro Estatistikak';
$lang['Admin_Index'] = 'Admin Indizea';
$lang['Preview_forum'] = 'Foroa Aurreikusi';

$lang['Click_return_admin_index'] = 'Egin klik %sHemen%s Admin Indizera bueltatzeko';

$lang['Statistic'] = 'Estatistika';
$lang['Value'] = 'Balioa';
$lang['Number_posts'] = 'Mezu kopurua';
$lang['Posts_per_day'] = 'Mezuak eguneko';
$lang['Number_topics'] = 'Gai kopurua';
$lang['Topics_per_day'] = 'Gaiak eguneko';
$lang['Number_users'] = 'Erabiltzaile kopurua';
$lang['Users_per_day'] = 'Erabiltzaileak eguneko';
$lang['Board_started'] = 'Foroaren hasiera data';
$lang['Avatar_dir_size'] = 'Ikono direktorioaren tamaina';
$lang['Database_size'] = 'Datubasearen tamaina';
$lang['Gzip_compression'] ='Gzip trinkotzea';
$lang['Not_available'] = 'Ez dago eskuragarri';

$lang['ON'] = 'BAI'; // This is for GZip compression
$lang['OFF'] = 'EZ'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Datubase Tresnak';

$lang['Restore'] = 'Berreskuratu';
$lang['Backup'] = 'Segurtasun Kopia';
$lang['Restore_explain'] = 'Honen bidez phpBB taula guztiak berreskuratuko dira gordetako fitxategi bat erabiliz. Zure zerbitzariak onartzen badu gzip bitartez trinkotutako testu fitxategi bat igo dezakezu eta automatikoki destrinkotuko da. <b>OHARRA</b> Honek dagoen informazio guztia zapalduko du. Berreskuratzeak denbora nahiko behar du, mesedez ez utzi orri hau bukatu arte.';
$lang['Backup_explain'] = 'Honen bidez phpBBri lotutako informazio guztiaren segurtasun kopia egin dezakezu. Aparteko beste taularik baduzu phpBBren datubase berean, eta hauek ere gorde nahi badituzu, beraien izenak sartu behar dituzu koma bitartez bananduta beheko Taula Gehigarriak eremuan. Zure zerbitzariak onartzen badu fitxategia gzip bitartez trinkotu dezakezu bere tamaina txikitzeko jaitsi aurretik.';

$lang['Backup_options'] = 'Segurtasun Kopia Aukerak';
$lang['Start_backup'] = 'Hasi Segurtasu Kopia';
$lang['Full_backup'] = 'Segurtasun Kopia Osoa';
$lang['Structure_backup'] = 'Estrukturaren segurtasun kopia soilik';
$lang['Data_backup'] = 'Datuen segurtasun kopia soilik';
$lang['Additional_tables'] = 'Taula Gehigarriak';
$lang['Gzip_compress'] = 'Gzip bitartez trinkotu fitxategia';
$lang['Select_file'] = 'Fitxategia aukeratu';
$lang['Start_Restore'] = 'Hasi Berreskuraketa';

$lang['Restore_success'] = 'Datubasea ongi berreskuratu da.<br /><br />Zure foroa segurtasun kopia egin zenueneko egoerara bueltatu da.';
$lang['Backup_download'] = 'Deskarga laster hasiko da, itxaron apur bat';
$lang['Backups_not_supported'] = 'Barkatu, datubasearen segurtasun kopia hau ez dator bat oraingo datubase sistemarekin';

$lang['Restore_Error_uploading'] = 'Errorea segurtasun kopia fitxategia igotzerakoan';
$lang['Restore_Error_filename'] = 'Arazoa fitxategi izenarekin, mesedez beste batekin saiatu';
$lang['Restore_Error_decompress'] = 'ezin dut gzip fitxategia destrinkotu, mesedez testu hutsezko fitxategi bat igo';
$lang['Restore_Error_no_file'] = 'Ez da fitxategirik igo';


//
// Auth pages
//
$lang['Select_a_User'] = 'Aukeratu Erabiltzailea';
$lang['Select_a_Group'] = 'Aukeratu Taldea';
$lang['Select_a_Forum'] = 'Aukeratu Foroa';
$lang['Auth_Control_User'] = 'Erabiltzaile Baimen Kontrola'; 
$lang['Auth_Control_Group'] = 'Talde Baimen Kontrola'; 
$lang['Auth_Control_Forum'] = 'Foro Baimen Kontrola'; 
$lang['Look_up_User'] = 'Bilatu Erabiltzailea'; 
$lang['Look_up_Group'] = 'Bilatu Taldea'; 
$lang['Look_up_Forum'] = 'Bilatu Foroa'; 

$lang['Group_auth_explain'] = 'Honen bidez erabiltzaile talde bakoitzari emandako baimenak eta moderatzaile egoera aldatu ditzazkezu. Ez ahaztu talde baimenak aldatzerakoan erabiltzaileen baimen indibidualak gainetik egon daitezke eta erabiltzaileari foroetan sartzea baimendu, eta abar. Hau horrela denean abisatuko zaitugu.';
$lang['User_auth_explain'] = 'Honen bidez erabiltzaile bakoitzari emandako baimenak eta moderatzaile egoera aldatu ditzazkezu. Ez ahaztu erabiltzaile baimenak aldatzerakoan talde baimenak gainetik egon daitezke eta erabiltzaileari foroetan sartzea baimendu, eta abar. Hau horrela denean abisatuko zaitugu.';
$lang['Forum_auth_explain'] = 'Honen bidez foro bakoitzeko baimen maila aldatu dezakezu. Horretarako metodo sinplea edo aurreratua erabili dezakezu, metodo aurreratuak foro bakoitzaren eragiketen gaineko kontrol gehiago ematren dizu. Gogoratu ezazu foroen baimen maila aldatzeak foroan eragiketa ezberdinak zeintzu erabiltzailek egin dezaketen aldatzen duela.';

$lang['Simple_mode'] = 'Modu Sinplea';
$lang['Advanced_mode'] = 'Modu Aurreratua';
$lang['Moderator_status'] = 'Moderatzaile egoera';

$lang['Allowed_Access'] = 'Sarrera baimenduta';
$lang['Disallowed_Access'] = 'Sarrera Debekatuta';
$lang['Is_Moderator'] = 'moderatzailea da';
$lang['Not_Moderator'] = 'Ez da moderatzailea';

$lang['Conflict_warning'] = 'Baimen Gatazka Oharra';
$lang['Conflict_access_userauth'] = 'Erabiltzaile hau foro honetara sartu daiteke oraindik talde baimenei esker. Talde baimenak aldatu ditzazkezu edo erabiltzaile hau taldetik kendu foroan sartzeko baimenik ez dezan izan. Behean agertzen dira baimena ematen dioten taldeak (eta dagozkien foroak).';
$lang['Conflict_mod_userauth'] = 'Erabiltzaile honek moderatzaile baimena du oraindik talde baimenei esker. Talde baimenak aldatu ditzazkezu edo erabiltzaile hau taldetik kendu moderatzaile baimenik ez dezan izan. Behean agertzen dira baimena ematen dioten taldeak (eta dagozkien foroak).';

$lang['Conflict_access_groupauth'] = 'Hurrego erabiltzaileek badute oraindik foro honetan sartzeko baimena beraien baimen indibidualei esker. Erabiltzaile baimenak aldatu ditzazkezu sartzeko baimenik ez dezaten izan. Behean agertzen dira sartzeko baimena duten erabiltzaileak (eta dagozkien foroak).';
$lang['Conflict_mod_groupauth'] = 'Hurrego erabiltzaileek badute oraindik moderatzaile baimena beraien baimen indibidualei esker. Erabiltzaile baimenak aldatu ditzazkezu moderatzaile baimenik ez dezaten izan. Behean agertzen dira moderatzaile baimena duten erabiltzaileak (eta dagozkien foroak).';

$lang['Public'] = 'Publikoa';
$lang['Private'] = 'Pribatua';
$lang['Registered'] = 'Kidea';
$lang['Administrators'] = 'Administratzaileak';
$lang['Hidden'] = 'Ezkutua';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'DENAK';
$lang['Forum_REG'] = 'KIDEAK';
$lang['Forum_PRIVATE'] = 'PRIBATUA';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Ikusi';
$lang['Read'] = 'Irakurri';
$lang['Post'] = 'Bidali';
$lang['Reply'] = 'Erantzun';
$lang['Edit'] = 'Editatu';
$lang['Delete'] = 'Ezabatu';
$lang['Sticky'] = 'Itsaskor';
$lang['Announce'] = 'Iragarpena'; 
$lang['Vote'] = 'Bozkatu';
$lang['Pollcreate'] = 'Galdeketa sortu';

$lang['Permissions'] = 'Baimenak';
$lang['Simple_Permission'] = 'Baimen sinplea';

$lang['User_Level'] = 'Erabiltzaile maila'; 
$lang['Auth_User'] = 'Erabiltzailea';
$lang['Auth_Admin'] = 'Administratzailea';
$lang['Group_memberships'] = 'Erabiltzaile talde partaidetza';
$lang['Usergroup_members'] = 'Talde honek hurrego kide hauek ditu';

$lang['Forum_auth_updated'] = 'Foro baimenak eguneratuta';
$lang['User_auth_updated'] = 'Erabiltzaile baimenak eguneratuta';
$lang['Group_auth_updated'] = 'Talde baimenak eguneratuta';

$lang['Auth_updated'] = 'Baimenak eguneratu dira';
$lang['Click_return_userauth'] = 'Egin klik %sHemen%s Erabiltzaile Baimenetara bueltatzeko';
$lang['Click_return_groupauth'] = 'Egin klik %sHemen%s Talde Baimenetara bueltatzeko';
$lang['Click_return_forumauth'] = 'Egin Klik %sHemen%s Foro Baimenetara bueltatzeko';


//
// Banning
//
$lang['Ban_control'] = 'Debeku Kontrola';
$lang['Ban_explain'] = 'Honen bidez erabiltzailei ezarritako debekua kontrolatu dezakezu. Hau lortu dezakezu bai erabiltzaile bakan bat debekatuz, bai IP helbide bat, bai IP tarte bat edo zerbitzari domeinuak. Metodo hauen bitartez erabiltzaile bat foroaren indizera heltzea ekiditzen duzu. Erabiltzaile bat beste izen batekin izena ematea ekiditzeko ePosta helbide bat ere debekatu dezakezu. Kontutan hartu soilik ePosta helbide bat debekatzeak ez diola erabiltzaile bati saioa hasteko edo foroan idazteko aukera ukatzen, hasieran aipatutako metodoren bat erabili behar duzu horretarako.';
$lang['Ban_explain_warn'] = 'Kontutan hartu IP tarte bat sartzean hasiera eta bukaeraren tarteran dauden IP guztiak debekatzen dituzula. Datubasean sartutako helbideak ahalik eta gutxien izateko komodinak automatikoki sartuko dira egokia denean. Benetan IP tarte bat sartu behar baduzu txikia izan dadila saiatu, edo are hobeto, helbide indibidualak zehaztu.';

$lang['Select_username'] = 'Erabiltzaile izena aukeratu';
$lang['Select_ip'] = 'IP bat aukeratu';
$lang['Select_email'] = 'ePosta helbide bat aukeratu';

$lang['Ban_username'] = 'Erabiltzaile zehatz bat edo gehiago debekatu';
$lang['Ban_username_explain'] = 'Erabiltzaile bat baino gehiago debekatu dezakezu zure ordenagailu eta nabigatzailean egokia den teklatu eta arratoi konbinazioa erabiliz';

$lang['Ban_IP'] = 'IP helbide edo zerbitzari domeinu bat edo gehiago debekatu';
$lang['IP_hostname'] = 'IP helbideak edo domeinuak';
$lang['Ban_IP_explain'] = 'IP edo domeinu ezberdinak zehazteko koma bitartez banandu. IP tarte bat zehazteko hasiera eta bukaera helbideak gidoi (-) bidez banandu, komodina zehazteko * erabili';

$lang['Ban_email'] = 'ePosta helbide bat edo gehiago debekatu';
$lang['Ban_email_explain'] = 'ePosta helbide bat baino gehiago zehazteko koma bitartez banandu. Komodin gisa * erabili, adibidez *@hotmail.com';

$lang['Unban_username'] = 'Erabiltzaile zehatz bati edo gehiagori debekua kendu';
$lang['Unban_username_explain'] = 'Erabiltzaile bati baino gehiagori kendu diezaiokezu debekua zure ordenagailu eta nabigatzilean egokia den teklatu eta arratoi konbinazioa erabiliz';

$lang['Unban_IP'] = 'IP helbide bat edo gehiagori debekua kendu';
$lang['Unban_IP_explain'] = 'IP helbide bat baino geahiagori kendu diezaiokezu debekua zure ordenagailu eta nabigatzilean egokia den teklatu eta arratoi konbinazioa erabiliz';

$lang['Unban_email'] = 'ePosta helbide bat edo gehiagori debekua kendu';
$lang['Unban_email_explain'] = 'ePosta helbide bat baino geahiagori kendu diezaiokezu debekua zure ordenagailu eta nabigatzilean egokia den teklatu eta arratoi konbinazioa erabiliz';

$lang['No_banned_users'] = 'Ez dago debekatutako erabiltzaile izenik';
$lang['No_banned_ip'] = 'Ez dago debekatutako IP helbiderik';
$lang['No_banned_email'] = 'Ez dago debekatutako ePosta helbiderik';

$lang['Ban_update_sucessful'] = 'Debeku zerrenda ongi sortu da';
$lang['Click_return_banadmin'] = 'Egin klik %sHemen%s Debeku Kontrolera bueltatzeko';


//
// Configuration
//
$lang['General_Config'] = 'Konfigurazio Orokorra';
$lang['Config_explain'] = 'Beheko inprimakiak Foroaren ezarpen orokorrak aldatzea baimenduko dizu. Erabiltzaile eta foro indibidual bakoitzaren ezarpenak aldatzeko ezkerreko menuan dagozkien loturak erabili.';

$lang['Click_return_config'] = 'Egin klik %sHemen%s Administrazio Orokorrera bueltatzeko';

$lang['General_settings'] = 'Foroaren Ezarpen Orokorra';
$lang['Server_name'] = 'Domeinu Izena';
$lang['Server_name_explain'] = 'Foro hauek dauden domeinu nagusia';
$lang['Script_path'] = 'Script bidea';
$lang['Script_path_explain'] = 'phpBB2 kokatuta dagoen lekua, domeinu izenetik aurrera';
$lang['Server_port'] = 'Zerbitzari Kaia';
$lang['Server_port_explain'] = 'Zerbitzariak entzuten duen kaia zenbakia, normalean 80, aldatu soilik beste bat dela badakizu';
$lang['Site_name'] = 'Gune Izena';
$lang['Site_desc'] = 'Gune Azalpena';
$lang['Board_disable'] = 'Foroa desgaitu';
$lang['Board_disable_explain'] = 'Honen bidez erabiltzaileak ezin izango dira forora konektatu. Ez bukatu saioa foroa desgaitu baduzu, ezin izango bait duzu berriro saioa hasi!';
$lang['Acct_activation'] = 'Kontuak aktibatzea gaitu';
$lang['Acc_None'] = 'Bat ez'; // These three entries are the type of activation
$lang['Acc_User'] = 'Erabiltzailea';
$lang['Acc_Admin'] = 'Admin';

$lang['Abilities_settings'] = 'Erabiltzaile eta Foroaren oinarrizko Ezarpenak';
$lang['Max_poll_options'] = 'Galdeketetan gehienezko aukera kopurua';
$lang['Flood_Interval'] = 'Flood Interval';
$lang['Flood_Interval_explain'] = 'Erabiltzaile batek bidalketatik bidalketara itxaron behar dituen segunduak'; 
$lang['Board_email_form'] = 'ePosta foro bitartez';
$lang['Board_email_form_explain'] = 'Erabiltzaileek elkarri ePosta mezuak bidaltzea foro honen bitartez';
$lang['Topics_per_page'] = 'Gaiak orriko';
$lang['Posts_per_page'] = 'Mezuak orriko';
$lang['Hot_threshold'] = 'Arrakastatsu izateko mezu kopurua';
$lang['Default_style'] = 'Lehenetsitako estiloa';
$lang['Override_style'] = 'Erabiltzaile estiloa zapaldu';
$lang['Override_style_explain'] = 'Erabiltzaileen estiloa lehenetsitakoarekin zapaltzen du';
$lang['Default_language'] = 'Lehenetsitako hizkuntza';
$lang['Date_format'] = 'Data Formatua';
$lang['System_timezone'] = 'Sistemaren Ordu Zona';
$lang['Enable_gzip'] = 'GZip Trinkotzea gaitu';
$lang['Enable_prune'] = 'Foro garbiketa gaitu';
$lang['Allow_HTML'] = 'HTML-a baimendu';
$lang['Allow_BBCode'] = 'BBCode-a baimendu';
$lang['Allowed_tags'] = 'Onartutako HTML markak';
$lang['Allowed_tags_explain'] = 'Markak komen bidez banandu';
$lang['Allow_smilies'] = 'Irrifartxioak onartu';
$lang['Smilies_path'] = 'Irrifartxoak gordetzeko bidea';
$lang['Smilies_path_explain'] = 'Zure phpBB erro direktoriotik hasita, adibidez: images/smiles';
$lang['Allow_sig'] = 'Sinadurak Baimendu';
$lang['Max_sig_length'] = 'Sinaduraren gehienezko luzera';
$lang['Max_sig_length_explain'] = 'Erabiltzaileen sinadurek izan dezaketen gehienezko karaktere kopurua';
$lang['Allow_name_change'] = 'Erabiltzaile izen aldaketa baimendu';

$lang['Avatar_settings'] = 'Ikono Ezarpenak';
$lang['Allow_local'] = 'Galeriako ikonoak gaitu';
$lang['Allow_remote'] = 'Urruneko ikonoak gaitu';
$lang['Allow_remote_explain'] = 'Beste webgune batetik lotutako ikonoak';
$lang['Allow_upload'] = 'Ikonoak igotzea gaitu';
$lang['Max_filesize'] = 'Ikonoaren gehienezko fitxategi tamaina';
$lang['Max_filesize_explain'] = 'Igotako ikono fitxategiena';
$lang['Max_avatar_size'] = 'Ikonoaren gehienezko dimentsioak';
$lang['Max_avatar_size_explain'] = '(Altuera x Zabalera pixeletan)';
$lang['Avatar_storage_path'] = 'Ikonoak gordetzeko bidea';
$lang['Avatar_storage_path_explain'] = 'phpBB errotik hasitako bidea, adibidez: images/avatars';
$lang['Avatar_gallery_path'] = 'Ikono Galeriaren Bidea';
$lang['Avatar_gallery_path_explain'] = 'Bidea phpBB errotik hasita aldez aurretik igotako irudientzat, adibidez: images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA Ezarpenak';
$lang['COPPA_fax'] = 'COPPA Fax Zenbakia';
$lang['COPPA_mail'] = 'COPPA Posta helbidea';
$lang['COPPA_mail_explain'] = 'Gurasoek COPPA erregistro orriak helbide honetara bidaliko dituzte';

$lang['Email_settings'] = 'ePosta ezarpena';
$lang['Admin_email'] = 'Admin ePosta helbidea';
$lang['Email_sig'] = 'ePosta Sinadura';
$lang['Email_sig_explain'] = 'Testu hau Foroak bidalitako mezu guztietan erantziko da';
$lang['Use_SMTP'] = 'SMTP Zerbitzaria erabili ePostarako';
$lang['Use_SMTP_explain'] = 'Baietz erantzun ePosta domeinodun zerbitzari bat bidez bidali nahi baduzu zerbitzari lokalaren ordez';
$lang['SMTP_server'] = 'SMTP Zerbitzari helbidea';
$lang['SMTP_username'] = 'SMTP Erabiltzaile izena';
$lang['SMTP_username_explain'] = 'Erabiltzaile izena soilik zure zerbitzariak behar badu sartu';
$lang['SMTP_password'] = 'SMTP Pasahitza';
$lang['SMTP_password_explain'] = 'Pasahitza soilik zure zerbitzariak behar badu sarty';

$lang['Disable_privmsg'] = 'Mezularitza pribatua';
$lang['Inbox_limits'] = 'Gehienezko mezu kopurua Sarrera ontzian';
$lang['Sentbox_limits'] = 'Gehienezko mezu kopurua Bidalita postontzian';
$lang['Savebox_limits'] = 'Gehienezko mezu kopurua Gordeta Postantzian';

$lang['Cookie_settings'] = 'Cookie ezarpenak'; 
$lang['Cookie_settings_explain'] = 'Xehetasun hauek cookieak erabiltzaileen nabigatzaileetara nola bidaltzen diren zehazten dute. Kasu gehienetan cookie ezarpenetarako lehenetsitako balioak nahikoa izan beharko lukete baina aldatu beharra baduzu kontuz egin ezazu, ezarpen okerrek erabiltzaileek saioa hastea ekidin dezakete';
$lang['Cookie_domain'] = 'Cookie domeinua';
$lang['Cookie_name'] = 'Cookie izena';
$lang['Cookie_path'] = 'Cookie bidea';
$lang['Cookie_secure'] = 'Cookie ziurra';
$lang['Cookie_secure_explain'] = 'Zure Zerbitzaria SSL bitartez badabil gaitu ezazu, bestela desgaituta utzi';
$lang['Session_length'] = 'Saioaren iraupena [ segunduetan ]';
$lang['cookie_consent_enable'] = 'Enable cookie consent notice?';

//
// Forum Management
//
$lang['Forum_admin'] = 'Foro Administrazioa';
$lang['Forum_admin_explain'] = 'Panel honetatik foroak eta kategoriak gehitu, ezabatu, editatu, berrordenatu eta bersinkronizatu ditzazkezu';
$lang['Edit_forum'] = 'Foroa editatu';
$lang['Create_forum'] = 'Foro berria sortu';
$lang['Create_category'] = 'Kategoria berria sortu';
$lang['Remove'] = 'Kendu';
$lang['Action'] = 'Ekintza';
$lang['Update_order'] = 'Ordena eguneratu';
$lang['Config_updated'] = 'FForo konfigurazioa ongi eguneratu da';
$lang['Edit'] = 'Editatu';
$lang['Delete'] = 'Ezabatu';
$lang['Move_up'] = 'Gora mugitu';
$lang['Move_down'] = 'Behera mugitu';
$lang['Resync'] = 'Bersinkronizatu';
$lang['No_mode'] = 'Ez da modurik ezarrik';
$lang['Forum_edit_delete_explain'] = 'Beheko inprimaki honek Foro gunearen ezarpen orokor guztiak zehaztea baimenduko dizu. Erabiltzaile eta Foroen ezarpena aldatzeko ezkerreko menuan dagozkien loturak erabili';

$lang['Move_contents'] = 'Eduki guztiak mugitu';
$lang['Forum_delete'] = 'Foroa ezabatu';
$lang['Forum_delete_explain'] = 'Beheko inprimaki honek foro (edo kategoria) bat ezabatzea baimenduko dizu eta bertako gaiekin (edo foroekin) zer egin nahi duzun erabaki.';

$lang['Status_locked'] = 'Blokeatuta';
$lang['Status_unlocked'] = 'Desblokeatuta';
$lang['Forum_settings'] = 'Foro ezarpen orokorrak';
$lang['Forum_name'] = 'Foro izena';
$lang['Forum_desc'] = 'Azalpena';
$lang['Forum_status'] = 'Foro egoera';
$lang['Forum_pruning'] = 'Auto-garbiketa';

$lang['prune_freq'] = 'Gaiaren adina egiaztatzeko maiztasuna';
$lang['prune_days'] = 'Epe honetan mezurik jaso ez duten gaiak ezabatu';
$lang['Set_prune_data'] = 'Auto-garbiketa gaitu duzu foro honetan baina ez duzu garbiketa egiteko maiztasuna ezarri. Mesedez atzera bueltatu eta egizu';

$lang['Move_and_Delete'] = 'Mugitu eta ezabatu';

$lang['Delete_all_posts'] = 'Mezu guztiak ezabatu';
$lang['Nowhere_to_move'] = 'Ez dago nora mugitu';

$lang['Edit_Category'] = 'Kategoria editatu';
$lang['Edit_Category_explain'] = 'Inprimaki hau erabili kategoria izena aldatzeko.';

$lang['Forums_updated'] = 'Foro eta kategoria informazioa ongi eguneratu da';

$lang['Must_delete_forums'] = 'Foro guztiak ezabatu behar dituzu kategoria hau ezabatu aurretik';

$lang['Click_return_forumadmin'] = 'Egin klik %sHemen%s Foro Administraziora bueltatzeko';


//
// Smiley Management
//
$lang['smiley_title'] = 'Irrifartxoak Editatzeko Tresna';
$lang['smile_desc'] = 'Orri honen bidez erabiltzaileek bereien mezuetan sartu ditzazketen irrifartxoak gehitu, kendu eta editatu ditzazkezu.';

$lang['smiley_config'] = 'Irrifartxoen ezarpenak';
$lang['smiley_code'] = 'Irrifartxo Kodea';
$lang['smiley_url'] = 'Irrifartxo Irudi Fitxategia';
$lang['smiley_emot'] = 'Irrifartxaren Emozioa';
$lang['smile_add'] = 'Irrifartxo berria gehitu';
$lang['Smile'] = 'Irrifarra';
$lang['Emotion'] = 'Emozioa';

$lang['Select_pak'] = 'Pakete (.pak) Fitxategia';
$lang['replace_existing'] = 'Zapaldu dagoen irrifartxoa';
$lang['keep_existing'] = 'Mentendu dagoen irrifartxoa';
$lang['smiley_import_inst'] = 'Irrifartxo paketea destrinkotu eta dagokion direktoriora igo behar duzu instalatzeko.  Gero informazio egokia aukeratu inprimaki honetan irrifartxo paketea inportatzeko.';
$lang['smiley_import'] = 'Irrifartxo paketea inportatu';
$lang['choose_smile_pak'] = 'Irrifartxo pakete .pak fitxategia aukeratu';
$lang['import'] = 'Irrifartxoak inportatu';
$lang['smile_conflicts'] = 'Gatazka balego, zer egin?';
$lang['del_existing_smileys'] = 'Dauden irrifartxoak ezabatu inportatu aurretik';
$lang['import_smile_pack'] = 'Irrifartxo paketea inportatu';
$lang['export_smile_pack'] = 'Irrifartxo paketea sortu';
$lang['export_smiles'] = 'Irrifartxo paketyea sortzeko orain instalatuta dituzun irrifartxoak erabiliz, egin klik %sHemen%s smiles.pak fitxategia deskargatzeko. Fitxategiari izen egokia jarri .pak atzizkia mantenduz.  Gero zip fitxategi bat sortu irudi guztiak eta .pak fitxategi hau barne.';

$lang['smiley_add_success'] = 'Irrifartxoa ongi gehitu da';
$lang['smiley_edit_success'] = 'Irrifartxoa ongi eguneratu da';
$lang['smiley_import_success'] = 'Irrifartxo paketea ongi inportatu da!';
$lang['smiley_del_success'] = 'Irrifartxoa ongi kendu da';
$lang['Click_return_smileadmin'] = 'Egin klik %sHemen%s Irrifartxoen Administraziora bueltatzeko';


//
// User Management
//
$lang['User_admin'] = 'Erabiltzaile Administrazioa';
$lang['User_admin_explain'] = 'Honen bidez zure erabiltzaile informazioa eta aukera zehatz batzuk aldatu ditzazkezu. Erabiltzaile baimenak aldatzeko Erabiltzaile eta talde baimen sistema erabili.';

$lang['Look_up_user'] = 'Erabiltzailea bilatu';

$lang['Admin_user_fail'] = 'Ezin izan da erabiltzaile soslaia eguneratu.';
$lang['Admin_user_updated'] = 'Erabiltzaile soslaia ongi eguneratu da.';
$lang['Click_return_useradmin'] = 'Egin klik %sHemen%s Erabiltzaile Administraziora bueltatzeko';

$lang['User_delete'] = 'Erabiltzaile hau ezabatu';
$lang['User_delete_explain'] = 'Egin klik erabiltzaile hau ezabatzeko, hau ezin da gero desegin.';
$lang['User_deleted'] = 'Eragiltzailea ongi ezabatu da.';

$lang['User_status'] = 'Erabiltzailea gaituta dago';
$lang['User_allowpm'] = 'Mezu pribatuak bidali ditzazke';
$lang['User_allowavatar'] = 'Ikonoa bistaratu dezake';

$lang['Admin_avatar_explain'] = 'Honen bidez erabiltzailearen oraingo ikonoa ikusi eta ezabatu dezakezu.';

$lang['User_special'] = 'Administratzailearentzat soilik diren eremu bereziak';
$lang['User_special_explain'] = 'Eremu hauek ezin dituzte erabiltzaileek aldatu. Honen bidez beraien egoera eta beste aukera batzuk ezarri ditzazkezu.';


//
// Group Management
//
$lang['Group_administration'] = 'Talde Administrazioa';
$lang['Group_admin_explain'] = 'Panel honen bidez erabiltzaile talde guztiak kudeatu ditzazkezu, taldeak sortu, ezabatu eta editatu ditzazkezu. Moderadoreak aukerau ditzazkezu, taldearen izaera irekia edo itxia ezarri, taldeari izena jarri eta azalpena zehaztu ditzazkezu';
$lang['Error_updating_groups'] = 'Errore bat gertatu da taldeak eguneratzerakoan';
$lang['Updated_group'] = 'Taldea ongi eguneratu da';
$lang['Added_new_group'] = 'Talde berria ongi sortu da';
$lang['Deleted_group'] = 'Taldea ongi ezabatu da';
$lang['New_group'] = 'Talde berria sortu';
$lang['Edit_group'] = 'Taldea editatu';
$lang['group_name'] = 'Talde izena';
$lang['group_description'] = 'Talde azalpena';
$lang['group_moderator'] = 'Talde moderadorea';
$lang['group_status'] = 'Talde egoera';
$lang['group_open'] = 'Talde irekia';
$lang['group_closed'] = 'Talde itxia';
$lang['group_hidden'] = 'Talde ezkutua';
$lang['group_delete'] = 'Taldea ezabatu';
$lang['group_delete_check'] = 'Talde hau ezabatu';
$lang['submit_group_changes'] = 'Aldaketak bidali';
$lang['reset_group_changes'] = 'Aldaketak ezeztatu';
$lang['No_group_name'] = 'Talde honi izen bat eman behar diozu';
$lang['No_group_moderator'] = 'Taldeko moderadorea aukeratu behar duzu';
$lang['No_group_mode'] = 'taldearen modua zehaztu behar duzu, irekia ala itxia';
$lang['No_group_action'] = 'Ez da ekintzarik zehaztu';
$lang['delete_group_moderator'] = 'Taldeko moderadore zaharra ezabatu?';
$lang['delete_moderator_explain'] = 'Talde moderadorea aldatzen bazaude, kutxatxo hau markatu moderadore zaharra taldetik ezabatzeko. Bestela, ez markatu, eta moderadore zaharra taldeko kide arrunt bihurtuko da.';
$lang['Click_return_groupsadmin'] = 'Egin klik %sHemen%s Talde Administraziora bueltatzeko.';
$lang['Select_group'] = 'Talde bat aukeratu';
$lang['Look_up_group'] = 'Taldea bilatu';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Foro garbiketa';
$lang['Forum_Prune_explain'] = 'Honek zuk aukeratutako egun kopuruan mezurik jao ez duen gaia ezabatuko du. Ez baduzu kopururuik ezartzen gai guztiak ezabatuko dira. Ez dira ezabatuko galdeketa aktiboak dituzten gaiak eta iragarpenak ere ez dira ezabatuko. hauek eskuz ezabatu beharko dituzu.';
$lang['Do_Prune'] = 'Garbiketa burutu';
$lang['All_Forums'] = 'Foro guztiak';
$lang['Prune_topics_not_posted'] = 'Egun hauetan erantzunik jaso ez duten gaiak garbitu';
$lang['Topics_pruned'] = 'Garbitutako gaiak';
$lang['Posts_pruned'] = 'Garbitutako mezuak';
$lang['Prune_success'] = 'Foroak ongi garbitu dira';


//
// Word censor
//
$lang['Words_title'] = 'Hitz zentsura';
$lang['Words_explain'] = 'Kontrol panel honen bidez zure foroetan automatikoki zentsuratuko diren hitzak gehitu eta kendu ditzazkezu. Bestalde erabiltzaileak ezin izango dute izena eman hitz hauek erabiltzaile izen gisa erabiliz. Komodina (*) onartuta dago hitzaren eremuan.';
$lang['Word'] = 'Hitza';
$lang['Edit_word_censor'] = 'Hitz zentsura editatu';
$lang['Replacement'] = 'Ordezkoa';
$lang['Add_new_word'] = 'hitz berria gehitu';
$lang['Update_word'] = 'Hitz zentsura eguneratu';

$lang['Must_enter_word'] = 'Hitza eta bere ordezkoa sartu behar dituzu';
$lang['No_word_selected'] = 'Ez duzu hitzik aukeratu editatzeko';

$lang['Word_updated'] = 'Aukeratutako hitz zentsura ongi eguneratu da';
$lang['Word_added'] = 'Hitz zentsura ongi gehitu da';
$lang['Word_removed'] = 'Aukeratutako hitz zentsura ongi ezabatu da';

$lang['Click_return_wordadmin'] = 'Egin klik %sHemen%s Hitz Zentsura Administraziora bueltatzeko';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Honen bidez ePosta mezu bat bidali diezaiokezu zure erabiltzaile guztiei edo talde zehatz bateko erabiltzaileei.  ePosta mezu bat bidaliko da zehaztutako administrazio ePosta helbidera eta kopia itsuak erabiltzaileei. Talde handi bati bidali behar badiozu mezu pazientzia izan ezazu eta ez eten prozesua. INormala da ePosta masiboa bidaltzerakoan denbora asko behar izatea, abisatuko zaitugu prozesua bukatzen denean';
$lang['Compose'] = 'Osatu'; 

$lang['Recipients'] = 'Hartzaileak'; 
$lang['All_users'] = 'Erabiltzaile guztiak';

$lang['Email_successfull'] = 'Zure mezua bidali da';
$lang['Click_return_massemail'] = 'Egin klik %sHemen%s ePosta masibo inprimakira bueltatzeko';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Maila Administrazioa';
$lang['Ranks_explain'] = 'Inprimaki honen bidez erabiltzaile mailak gehitu, editatu, ikusi eta ezabatu ditzazkezu. Maila pertsonalak era sortu ditzazkezu ere, eta erabiltzaileei zuzenean erabiltzaile kudeaketaren bidez aplikatu';

$lang['Add_new_rank'] = 'Maila berria gehitu';

$lang['Rank_title'] = 'Maila izena';
$lang['Rank_special'] = 'Maila berezi gisa ezarri';
$lang['Rank_minimum'] = 'Gutxienezko mezuak';
$lang['Rank_maximum'] = 'Gehienezko mezuak';
$lang['Rank_image'] = 'Mailaren irudia (phpBB2 errotik hasita. Hasierako / gabe)';
$lang['Rank_image_explain'] = 'Erabili hau mailari loturako irudi txiki bat ezartzeko';

$lang['Must_select_rank'] = 'Maila bat aukeratu behar duzu';
$lang['No_assigned_rank'] = 'Ez da maila berezirik ezarri';

$lang['Rank_updated'] = 'Maila ongi eguneratu da';
$lang['Rank_added'] = 'Maila ongi gehitu da';
$lang['Rank_removed'] = 'Maila ongi ezabatu da';
$lang['No_update_ranks'] = 'Maila ongi ezabatu da, baina maila hau erabiltzen zuten erabiltzaile kontuak ez dira eguneratu.  Eskuz aldatu beharko duzu kontu hauetako maila';

$lang['Click_return_rankadmin'] = 'Egin klik %sHemen%s Maila Administraziora bueltatzeko';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Debekatutako erabiltzaile izenen kontrola';
$lang['Disallow_explain'] = 'Honen bidez erabili ezin daitezkeen izenak kontrolatu ditzazkezu. Debekatutako erabiltzaile izenak komodina (*) erabili dezakete.  Kontutan hartu dagoeneko erregistratuta dagoen izen bat ezin izango duzula zehaztu, horretarako lehenbizi kontua ezabatu behar duzu eta ger izena debekatu';

$lang['Delete_disallow'] = 'Ezabatu';
$lang['Delete_disallow_title'] = 'Debekatutako izen bat ezabatu';
$lang['Delete_disallow_explain'] = 'Izen bat ezabatu dezakezu zerrrenda honetan aukeratuz eta bidali botoia zapalduz';

$lang['Add_disallow'] = 'Gehitu';
$lang['Add_disallow_title'] = 'Debekatutako izena gehitu';
$lang['Add_disallow_explain'] = 'Izen bat debekatu dezakezu eta komodina erebili ere (*)';

$lang['No_disallowed'] = 'Ez dago debekatutako izenik';

$lang['Disallowed_deleted'] = 'Debekatutako izena ongi ezabatu da';
$lang['Disallow_successful'] = 'Debekatutako izena ongi gehitu da';
$lang['Disallowed_already'] = 'Sartu duzun izena ezin da debekatu. Edo badago debekatutakoen zerrendan, edo zentsuratutako hitzen zerrendan dago, edo badago izen hori erabiltzen duen kiderik';

$lang['Click_return_disallowadmin'] = 'Egin klik %sHemen%s Debekatutako Erabiltzaile Izen Administraziora bueltatzeko';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Estilo Administrazioa';
$lang['Styles_explain'] = 'Honen bidez zure erabiltzaileen eskura egongo diren estiloak (txantiloiak eta itxurak) gehitu, kendu eta kudeatu ditzazkezu';
$lang['Styles_addnew_explain'] = 'Hurrengo zerrendan orain duzun txantiloiarentzat eskuragarri dauden estilo guztiak daude. Zerrenda honetako elementuak ez dira oraindik instalatu phpBB datubasean. Itxura gai bat instalatzeko sarreraren ondoko loturan egin klik';

$lang['Select_template'] = 'Txantiloia aukeratu';

$lang['Style'] = 'Estiloa';
$lang['Template'] = 'Txantiloia';
$lang['Install'] = 'Instalatu';
$lang['Download'] = 'Deskargatu';

$lang['Edit_theme'] = 'Itxura editatu';
$lang['Edit_theme_explain'] = 'Beheko inprimaki honetan aukeratutako itxuraren ezarpenak editatu ditzazkezu';

$lang['Create_theme'] = 'Itxura sortu';
$lang['Create_theme_explain'] = 'Beheko inprimakia erabili aukeratutako txantiloian oinarritutako gai bat sortzeko. Koloreak sartzerakoan (izen hexadezimalak erabiliz) ez duzu hasierako # sinboloa sartu behar, Adibidez: CCCCCC ondo dago, #CCCCCC, gaizki';

$lang['Export_themes'] = 'Itxurak exportatu';
$lang['Export_explain'] = 'Panel honen bidez aukeratutako txantiloiari dagozkion itxuraren datuak exportatu ahal izango dituzu. Txantiloia aukeratu beheko zerrendan eta scriptak sortuko du itxuraren konfigurazio fitxategia eta txantiloiaren direktorioan gordetzen saiatuko da. Ezin badu bertan gorde fitxategia deskargatzeko aukera emango dizu. Scriptak fitxategia gorde ahal izateko web zerbitzariak txantiloiaren direktorioan idazteko baimena izan behar du. Informazio gehiagorako phpBB2ren erabiltzaile gida ikusi.';

$lang['Theme_installed'] = 'Aukeratutako itxura ondo instalatu da';
$lang['Style_removed'] = 'Aukeratutako estiloa datubasetik ezabatu da. Estilo hau zure sistematik guztiz kentzeko zure txantiloi karpetatik ezabatu behar duzu estilo egokia.';
$lang['Theme_info_saved'] = 'Aukeratutako txantiloiaren itxura informazioa gorde da. theme_info.cfg fitxategiari idazteko baimenak kendu behar dizkiozu orain (eta ahal bada txantiloiaren direktorioa)';
$lang['Theme_updated'] = 'Aukeratutako itxura eguneratu da. Ezarpen berriak exportatu bahrko zenituzke';
$lang['Theme_created'] = 'Itxura sortuta. Orian itxura exportatu beharko zenuke gordsetzeko edo beste nonbait erabiltzeko';

$lang['Confirm_delete_style'] = 'Ziur estilo hau ezabatu nahi duzula?';

$lang['Download_theme_cfg'] = 'Exportatzaileak ezin izan du Itxuraren informazio fitxategia idatzi. Beheko botoia zapaldu fitxategi hau deskargatzeko. Behin deskargatuta txantiloiak dituen direktoriora igo dezakezu (templates). Gero fitxategiak pakete bakarrean sartu ditzazkezu banatzeko edo beste nonbait erabiltzeko';
$lang['No_themes'] = 'Aukeratutako txantiloiak ez du erantzitako itxurarik. Itxura berria sortzeko Berria Sortu lotura zapaldu ezkerreko panelean';
$lang['No_template_dir'] = 'Ezin izan dut txantiloiaren direktorioa ireki. Agian zerbitzariak  ez du direktorioa irakurtzeko baimenik edo ez dago';
$lang['Cannot_remove_style'] = 'Ezin duzu aukeratutako estiloa kendu foroan lehenetsitakoa delako. Lehenetsitako estiloa aldatu eta berriro saiatu.';
$lang['Style_exists'] = 'Aukeratutako estilo izena badago, mesedez atzera jo eta beste izen bat aukeratu.';

$lang['Click_return_styleadmin'] = 'Egin klik %sHemen%s Estilo Administraziora bueltatzeko';

$lang['Theme_settings'] = 'Itxura Ezarpenak';
$lang['Theme_element'] = 'Itxura Elementua';
$lang['Simple_name'] = 'Izen Sinplea';
$lang['Value'] = 'Balioa';
$lang['Save_Settings'] = 'Ezarpenak Gorde';

$lang['Stylesheet'] = 'CSS Estilo orria';
$lang['Background_image'] = 'Atzeko Irudia';
$lang['Background_color'] = 'Atzeko Kolorea';
$lang['Theme_name'] = 'Itxura Izena';
$lang['Link_color'] = 'Lotura Kolorea';
$lang['Text_color'] = 'Testu Kolorea';
$lang['VLink_color'] = 'Bisitatutako Lotura Kolorea';
$lang['ALink_color'] = 'Lotura Aktiboaren Kolorea';
$lang['HLink_color'] = 'Nabarmendutako Lotura Kolorea';
$lang['Tr_color1'] = 'Taula Lerro Kolorea 1';
$lang['Tr_color2'] = 'Taula Lerro Kolorea 2';
$lang['Tr_color3'] = 'Taula Lerro Kolorea 3';
$lang['Tr_class1'] = 'Taula Lerro Klasea 1';
$lang['Tr_class2'] = 'Taula Lerro Klasea 2';
$lang['Tr_class3'] = 'Taula Lerro Klasea 3';
$lang['Th_color1'] = 'Taula Goiburuko Kolorea 1';
$lang['Th_color2'] = 'Taula Goiburuko Kolorea 2';
$lang['Th_color3'] = 'Taula Goiburuko Kolorea 3';
$lang['Th_class1'] = 'Taula Goiburuko Klasea 1';
$lang['Th_class2'] = 'Taula Goiburuko Klasea 2';
$lang['Th_class3'] = 'Taula Goiburuko Klasea 3';
$lang['Td_color1'] = 'Taula Gelaxkatxo Kolorea 1';
$lang['Td_color2'] = 'Taula Gelaxkatxo Kolorea 2';
$lang['Td_color3'] = 'Taula Gelaxkatxo Kolorea 3';
$lang['Td_class1'] = 'Taula Gelaxkatxo Klasea 1';
$lang['Td_class2'] = 'Taula Gelaxkatxo Klasea 2';
$lang['Td_class3'] = 'Taula Gelaxkatxo Klasea 3';
$lang['fontface1'] = 'Letra Mota 1';
$lang['fontface2'] = 'Letra Mota 2';
$lang['fontface3'] = 'Letra Mota 3';
$lang['fontsize1'] = 'Letra Tamaina 1';
$lang['fontsize2'] = 'Letra Tamaina 2';
$lang['fontsize3'] = 'Letra Tamaina 3';
$lang['fontcolor1'] = 'Letra Kolorea 1';
$lang['fontcolor2'] = 'Letra Kolorea 2';
$lang['fontcolor3'] = 'Letra Kolorea 3';
$lang['span_class1'] = 'Span Klasea 1';
$lang['span_class2'] = 'Span Klasea 2';
$lang['span_class3'] = 'Span Klasea 3';
$lang['img_poll_size'] = 'Galdeketa Irudiaren Tamaina [px]';
$lang['img_pm_size'] = 'Mezu Pribatu Egoera Tamaina [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Ongi Etorri phpBB2ren Instalaziora';
$lang['Initial_config'] = 'Oinarrizko ezarpenak';
$lang['DB_config'] = 'Datubase Ezarpena';
$lang['Admin_config'] = 'Admin Ezarpena';
$lang['continue_upgrade'] = 'Zure ezarpen fitxategia deskargatu eta gero \'Eguneraketa Jarraitu\' botoia zapaldu dezakezu eguneraketa prozesuarekin aurrera egiteko. Mesedez ez igo konfigurazio fitxategia eguneraketa prozesua bukatu arte.';
$lang['upgrade_submit'] = 'Eguneraketa Jarraitu';

$lang['Installer_Error'] = 'Errore bat gertatu da instalazioan zehar';
$lang['Previous_Install'] = 'Aurretik zegoen instalazio bat detektatu da';
$lang['Install_db_error'] = 'Errore bat gertatu da datubasea eguneratzea saiatzerakoan';

$lang['Re_install'] = 'Zure aurreko instalazioa oraindik aktibo dago. <br /><br /> phpBB2 berrinstalatu nahi baduzu Bai botoia zapaldu. Kontutan hartu hau egiterakoan dauden datu guztiak deuseztuko direla, ez da segurtasun kopiarik egingo! Administradorearen erbiltzaile izen eta pasahitza bersortuko dira berrinstalatu eta gero, ez da beste daturik gordeko. <br /><br />Ongi pentsatu Bai zapaldu aurretik!';

$lang['Inst_Step_0'] = 'Eskerrik asko phpBB 2 aukeratzeagatik. Instalazio hau burutzeko behean eskatutako xehetasunak bete. Kontutan hartu instalatzeko erabiltzen duzun datubasea aurretik egon behar duela. ODBC erabiltzen duen datubase batean instalatzera bazoaz, Adibidez: MS Access, DSN bat sortu beharko duzu aurrera jarraitu baino lehen.';

$lang['Start_Install'] = 'Instalazioa hasi';
$lang['Finish_Install'] = 'Instalazioa bukatu';

$lang['Default_lang'] = 'Foiroen lehenetsitako hizkuntza';
$lang['DB_Host'] = 'Database Server Hostname / DSN';
$lang['DB_Name'] = 'Zure datubasearen izena';
$lang['DB_Username'] = 'Datubase erabiltzaile izena';
$lang['DB_Password'] = 'Datubase Pasahitza';
$lang['Database'] = 'Zure datubasea';
$lang['Install_lang'] = 'Instalazioarako hizkuntza aukearatu';
$lang['dbms'] = 'Datubase Mota';
$lang['Table_Prefix'] = 'Taulek datubasean izango duten aurrizkia';
$lang['Admin_Username'] = 'Administradorearen Erabiltzaile Izena';
$lang['Admin_Password'] = 'Administradorearen Pasahitza';
$lang['Admin_Password_confirm'] = 'Administradorearen Pasahitza [ Berretsi ]';

$lang['Inst_Step_2'] = 'Your admin username has been created.  At this point your basic installation is complete. You will now be taken to a screen which will allow you to administer your new installation. Please be sure to check the General Configuration details and make any required changes. Thank you for choosing phpBB 2.';

$lang['Unwriteable_config'] = 'Zure config fitxategia ezin da une honetan idatzi. Beheko botoia zapaltzerakoan config fitxategiaren kopia bat deskargatuko da zure ordenagailura. Fitxategi hau phpBB2ren direktorio berera igo beharko zenuke. Behin igota dagoela auirreko urratsean zuk emandako Administradore izen eta pasahitza erabiliz hasi beharko zenuke saioaeta Administrazio panela bisitatu (lotura bnat agertuko da orriaren behekaldean behin saioa hasita) ezarpen orokorrak begiratzeko. Eskerrik asko phpBB 2 aukeratzeagatik.';
$lang['Download_config'] = 'Config Deskargatu';

$lang['ftp_choose'] = 'Deskargatzeko metodoa aukeratu';
$lang['ftp_option'] = '<br />PHP bertsio honetan FTP luzapenak gaituta dauidenez baliteke config fitxategia automatikoki ftp bidez kokatu ahal izatea.';
$lang['ftp_instructs'] = 'Fitxategia FTP bidez phpBB 2 duen kotura automatikoki bidalktzea aukeratu duzu.  Mesedez prozesua errazteko beheko informazioa sartu. Kotutan hartu FTP bidea zure phpBB2 instalaziora daraman ftp bide osoa izan behar duela, ftp bezero arrunt bat erabiliko bazenu bezala.';
$lang['ftp_info'] = 'Sartu zure FTP informazioa';
$lang['Attempt_ftp'] = 'Saiatu config fitxategia ftp bidez automatikoki igotzea';
$lang['Send_file'] = 'Bidali niri fitxategia eta nik igoko dut ftp bidez';
$lang['ftp_path'] = 'FTP bidea phpBB 2 instalaziora';
$lang['ftp_username'] = 'Zure FTP Erabiltzaile izena';
$lang['ftp_password'] = 'Zure FTP Pasahitza';
$lang['Transfer_config'] = 'Hasi Transferentzia';
$lang['NoFTP_config'] = 'config fitxategia ftp bidez igotzeko saiakerak huts egin du.  Mesedez deskargatu cofig fitxategia eta eskuz igo.';

$lang['Install'] = 'Instalatu';
$lang['Upgrade'] = 'Bertsio-berritu';


$lang['Install_Method'] = 'Zure instalazio metodoa aukeratu';

$lang['Install_No_Ext'] = 'Zure zerbitzarikom php ezarpenek ez dute onartzek aukeratu duzun datubase mota';

$lang['Install_No_PCRE'] = 'phpBB2k "Perl-Compatible Regular Expressions Module" delako php modulua behar du eta badirudi zure zerbitzariaren ezarpenek ez dutela horrelakorik onartzen!';

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
// Euskaraz eta... Kitto!
// -------------------------------------------------

?>