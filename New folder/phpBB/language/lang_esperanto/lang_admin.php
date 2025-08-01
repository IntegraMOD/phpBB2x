<?php

/***************************************************************************
 *                            lang_admin.php [Esperanto]
 *                              -------------------
 *     komenco               : Ĵaŭ Okt 15 2003
 *     kopirajto            : (C) 2003 Federico Zenith
 *     retpoŝto               : zenith@chemeng.ntnu.no
 *
 *     $Id: $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   Ĉi tiu programo estas libera programaro; ci povas pludistribui ĝin kajaŭ modifi
 *   ĝin sub la kondiĉoj de la Ĝenerala Publika Licenco GNU kiel publikigita de
 *   la Free Software Foundation; aŭ versio 2 de la licenco, aŭ
 *   (laŭ cia opcio) ajna posta versio.
 *
 ***************************************************************************/

/* KONTRIBUINTOJ

*/

//
// Formato estas samkiel lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Ĝenerala Administrado';
$lang['Users'] = 'Uzula Administrado';
$lang['Groups'] = 'Grupa Administrado';
$lang['Forums'] = 'Foruma Administrado';
$lang['Styles'] = 'Stila Administrado';

$lang['Configuration'] = 'Agordo';
$lang['Permissions'] = 'Rajtigoj';
$lang['Manage'] = 'Manaĝado';
$lang['Disallow'] = 'Malpermesu nomojn';
$lang['Prune'] = 'Tondu';
$lang['Mass_Email'] = 'Amasretpoŝto';
$lang['Ranks'] = 'Rango';
$lang['Smilies'] = 'Ridmienoj';
$lang['Ban_Management'] = 'Fivorta Kontrolo';
$lang['Word_Censor'] = 'Vorta Cenzurilo';
$lang['Export'] = 'Eksportu';
$lang['Create_new'] = 'Kreu';
$lang['Add_new'] = 'Aldonu';
$lang['Backup_DB'] = 'Rezervu Datumbozon';
$lang['Restore_DB'] = 'Restaŭru Datumbazon';


//
// Indekso
//
$lang['Admin'] = 'Administrado';
$lang['Not_admin'] = 'Ci ne rajtas administri ĉi tiun forumaron';
$lang['Welcome_phpBB'] = 'Bonvenon al phpBB';
$lang['Admin_intro'] = 'Dankon pro ke ci elektis phpBBn kiel cia foruma solvo. Ĉi tiu ekrano donos al ci rapidan plenvidon de ĉiu statistiko pri la cia forumaro. Ci povas reveni al ĉi tiu paĝo klakante ĉe la ligilo <u>Administra Indekso</u> en la maldekstra glaco. Por reveni al la indekso de la cia forumaro, klaku ĉe la phpBB-logo, ankaŭ ĝi en la maldekstra glaco. La aliaj ligiloj ĉe la maldekstra flanko de ĉi tiu ekrano permesos al ci kontroli ĉiun aspekton de la cia forumado. Ĉiu ekrano havos instrukciojn pri kiel uzi la ilojn.';
$lang['Main_index'] = 'Foruma Indekso';
$lang['Forum_stats'] = 'Forumaj Statistikoj';
$lang['Admin_Index'] = 'Administra Indekso';
$lang['Preview_forum'] = 'Malpostevida Forumo';

$lang['Click_return_admin_index'] = 'Klaku %sĈi tie%s por reiri al la Administra Indekso';

$lang['Statistic'] = 'Statistiko';
$lang['Value'] = 'Valolo';
$lang['Number_posts'] = 'Nombro da afiŝoj';
$lang['Posts_per_day'] = 'Afiŝoj tage';
$lang['Number_topics'] = 'Nombro da fadenoj';
$lang['Topics_per_day'] = 'Temoj tage';
$lang['Number_users'] = 'Nombro da uzantoj';
$lang['Users_per_day'] = 'Uzantoj tage';
$lang['Board_started'] = 'Forumaro komencita';
$lang['Avatar_dir_size'] = 'Grando de la avatara dosierujo';
$lang['Database_size'] = 'Grando de la datumbazo';
$lang['Gzip_compression'] ='Gzipa kompaktigo';
$lang['Not_available'] = 'Ne disponebla';

$lang['ON'] = 'AKTIVA'; // Ĉi tio estas por GZip-komprimado
$lang['OFF'] = 'MALAKTIVA';


//
// DB-Utilaĵoj
//
$lang['Database_Utilities'] = 'Datumbazaj Utilprogramoj';

$lang['Restore'] = 'Restaŭru';
$lang['Backup'] = 'Rezervu';
$lang['Restore_explain'] = 'Ĉi tio plenumos plenan restaŭron de ĉiuj phpBB-tabuloj el konservita dosiero. Se la cia servilo subtenas ĝin, ci povus alŝuti gzip-komprimitan tekstan dosieron, kaj ĝi aŭtomate malkompriniĝos. <b>ATENTIGO</b>: Ĉi tio superskribos ajnajn ekzistantajn datumojn. La restaŭro povus bozoni longan tempon por prilaboriĝi, ĉi tial bonvolu ne foriru de ĉi tiu paĝo ĝis ke ĝi plenumiĝos.';
$lang['Backup_explain'] = 'Ĉi tie ci povas rezervi ĉiujn ciajn phpBB-rilatajn datumojn. Se ci havas ankaŭ ajnajn aldonajn, alkutimiĝitajn tabulojn en la sama datumbazo kun phpBB kiujn ci volas rezervi, bonvolu enmetu la iliajn nomojn, apartigitaj de komoj, el la tekstujo Aldonaj Tabuloj ĉi-sube. Se la cia servilo subtenas ĝin, ci povos ankaŭ gzip-komprimi la dosieron por malgrandigi ĝin malpost elŝuto.';

$lang['Backup_options'] = 'Rezervadaj opcioj';
$lang['Start_backup'] = 'Ekrezervu';
$lang['Full_backup'] = 'Plena Rezervo';
$lang['Structure_backup'] = 'Nurstruktura rezervo';
$lang['Data_backup'] = 'Nurdatuma rezervo';
$lang['Additional_tables'] = 'Aldonaj tabuloj';
$lang['Gzip_compress'] = 'Gzip-komprimu dosieron';
$lang['Select_file'] = 'Elektu dosieron';
$lang['Start_Restore'] = 'Ekrestaŭru';

$lang['Restore_success'] = 'La datumbazo plensukcese restaŭriĝis.<br /><br />La cia forumaro devus esti je la stato en kiu ĝi estis kiam la rezervo fariĝis.';
$lang['Backup_download'] = 'La cia elŝuto komencos baldaŭ; bonvolu atendi ĝis ke ĝi komencos.';
$lang['Backups_not_supported'] = 'Bedaŭrinde la datumbazaj rezervoj ne estas subtenitaj nuntempe por la cia datumbaza sistemo.';

$lang['Restore_Error_uploading'] = 'Eraro alŝutante la rezervan dosieron';
$lang['Restore_Error_filename'] = 'Dosiernoma problemo; bonvolu provu alternativan dosieron';
$lang['Restore_Error_decompress'] = 'Ne povas malkomprimigi gzip-dosieron; bonvolu alŝuti platatektan version';
$lang['Restore_Error_no_file'] = 'Neniu dosieron alŝutiĝis';


//
// Aŭt-paĝoj
//
$lang['Select_a_User'] = 'Elektu uzanton';
$lang['Select_a_Group'] = 'Elektu grupon';
$lang['Select_a_Forum'] = 'Elektu forumon';
$lang['Auth_Control_User'] = 'Kontrolo de rajtigoj de uzantoj';
$lang['Auth_Control_Group'] = 'Kontrolo de rajtigoj de grupoj';
$lang['Auth_Control_Forum'] = 'Kontrolo de rajtigoj de forumoj';
$lang['Look_up_User'] = 'Serĉu uzanton';
$lang['Look_up_Group'] = 'Serĉu grupon';
$lang['Look_up_Forum'] = 'Serĉu forumon';

$lang['Group_auth_explain'] = 'Ĉi tie ci povas ŝanĝi la rajtigojn kaj moderistan staton atribuitan al ĉiu grupo da uzantoj. Ne forgesu, kiam ŝanĝante, ke personaj rajtigoj de uzantoj povus ankoraŭ ebligi al la uzanto eniri forumojn, ktp. Ci avertiĝos ĉi-okaze.';
$lang['User_auth_explain'] = 'Ĉi tie ci povas ŝanĝi la rajtigojn kaj moderistan staton atribuitan al ĉiu uzanto. Ne forgesu, kiam ŝanĝante, ke grupaj rajtigoj de uzantoj povus ankoraŭ ebligi al la uzanto eniri forumojn, ktp. Ci avertiĝos ĉi-okaze.';
$lang['Forum_auth_explain'] = 'Ĉi tie ci povas ŝanĝi la aŭtoritatajn nivelojn de ĉiu forumo. Ci havas kaj simplan kaj detalan metodojn por fari tion, kie la detala donas pli grandan kontrolon de ĉiu foruma funkciado. Memoru ke ŝanĝi la rajtigan nivelon de forumoj influos kiuj uzantoj povas agi en ili.';

$lang['Simple_mode'] = 'Simpla metodo';
$lang['Advanced_mode'] = 'Detala metodo';
$lang['Moderator_status'] = 'Moderista stato';

$lang['Allowed_Access'] = 'Permesita atingo';
$lang['Disallowed_Access'] = 'Malpermesita atingo';
$lang['Is_Moderator'] = 'Estas moderisto';
$lang['Not_Moderator'] = 'Ne estas moderisto';

$lang['Conflict_warning'] = 'Averto pri rajtiga konflikto';
$lang['Conflict_access_userauth'] = 'Ĉi tiu uzanto ankoraŭ havas atingajn rajtojn per grupa membreco. Ci povus voli ŝanĝi la grupajn rajtigojn aŭ forigi ĉi tiun uzanton de la grupo por plene malebligi ke ri havas atingajn rajtigojn. La grupoj koncedantaj la rajtigojn (kaj la koncernitaj forumoj) listiĝas ĉi-sube.';
$lang['Conflict_mod_userauth'] = 'Ĉi tiu uzanto ankoraŭ havas moderistajn rajtojn per grupa membreco. Ci povus voli ŝanĝi la grupajn rajtigojn aŭ forigi ĉi tiun uzanton de la grupo por plene malebligi ke ri havas moderistajn rajtigojn. La grupoj koncedantaj la rajtigojn (kaj la koncernitaj forumoj) listiĝas ĉi-sube.';

$lang['Conflict_access_groupauth'] = 'La sekvanta uzanto (aŭ uzantoj) ankoraŭ havas atingajn rajtojn al ĉi tiu forumo per la iliaj permesaj agordoj. Ci povus voli ŝanĝi la uzajn permesojn por plene malebligi al ili havi atingajn rajtojn. La uzantoj al kiuj estas konceditaj rajtoj (kaj la rilataj forumoj) listiĝas ĉi-sube.';
$lang['Conflict_mod_groupauth'] = 'La sekvanta uzanto (aŭ uzantoj) ankoraŭ havas moderistajn rajtojn al ĉi tiu forumo per la iliaj permesaj agordoj. Ci povus voli ŝanĝi la uzajn permesojn por plene malebligi al ili havi moderistajn rajtojn. La uzantoj al kiuj estas konceditaj rajtoj (kaj la rilataj forumoj) listiĝas ĉi-sube.';

$lang['Public'] = 'Publikaj';
$lang['Private'] = 'Privataj';
$lang['Registered'] = 'Registritaj';
$lang['Administrators'] = 'Administristoj';
$lang['Hidden'] = 'Kaŝitaj';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'ĈIUJ';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRIVATAJ';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Vidu';
$lang['Read'] = 'Legu';
$lang['Post'] = 'Afiŝu';
$lang['Reply'] = 'Respondu';
$lang['Edit'] = 'Redaktu';
$lang['Delete'] = 'Forviŝu';
$lang['Sticky'] = 'Gluita';
$lang['Announce'] = 'Anonco'; 
$lang['Vote'] = 'Voĉdonu';
$lang['Pollcreate'] = 'Kreu baloton';

$lang['Permissions'] = 'Permesoj';
$lang['Simple_Permission'] = 'Simplaj permesoj';

$lang['User_Level'] = 'Uzantnivelo'; 
$lang['Auth_User'] = 'Uzanto';
$lang['Auth_Admin'] = 'Administristo';
$lang['Group_memberships'] = 'Usulgrupaj membroj';
$lang['Usergroup_members'] = 'Ĉi tiu grupo havas la sekvantajn membrojn';

$lang['Forum_auth_updated'] = 'Forumaj permesoj ĝisdatiĝitaj';
$lang['User_auth_updated'] = 'Uzulaj permesoj ĝisdatiĝitaj';
$lang['Group_auth_updated'] = 'Grupaj permesoj ĝisdatiĝitaj';

$lang['Auth_updated'] = 'Permesoj ĝisdatiĝis';
$lang['Click_return_userauth'] = 'Klaku %sĉi tie%s por reiri al uzulaj permesoj';
$lang['Click_return_groupauth'] = 'Klaku %sĉi tie%s por reiri al grupaj permesoj';
$lang['Click_return_forumauth'] = 'Klaku %sĉi tie%s por reiri al forumaj permesoj';


//
// Malpermesigado (banning)
//
$lang['Ban_control'] = 'Malpermesiga kontrolo';
$lang['Ban_explain'] = 'Ĉi tie ci povas kontroli la malpermesigadon de uzantoj. Ci povas tion atingi malpermesigante kajaŭ specifan uzanton kajaŭ IP-adresaron aŭ gastigmaŝinnomojn. Ĉi tiuj metodoj malebligas ke uzanto eĉ atingu la indeksan paĝon de la cia forumaro. Por malebligi ke uzanto enregistru per malegala uzulnomo, ci povas ankaŭ specifi malpermesitan retpoŝtan adreson. Bonvolu rimarki ke nur malpermesigi retpoŝtan adreson ne malebligos ke tiu uzanto atingu aŭ afiŝu en la cia forumaro. Ci devus uzi unu el la du unuaj metodoj por akiri ĉi tion.';
$lang['Ban_explain_warn'] = 'Bonvolu rimarki ke enmeti IP-adresaron rezultas en tio, ke ĉiuj adresoj inter la komenco kaj la fino aldoniĝas al la malpermesiga listo. Provoj fariĝos por minimigi la nombron da adresoj aldonitaj al la datumbazo enkondukante ĵokerojn aŭtomate kie ĉi tio taŭgas. Se ci vere devas enmeti adresaron, provu restigi ĝin malgranda aŭ eĉ pli bone enmetu specifajn adresojn.';

$lang['Select_username'] = 'Elektu uzulnomon';
$lang['Select_ip'] = 'Elektu IP-adreson';
$lang['Select_email'] = 'Elektu retpoŝtan adreson';

$lang['Ban_username'] = 'Malpermesigu unu aŭ pli specifajn uzantojn';
$lang['Ban_username_explain'] = 'Ci povas malpermesigi plurajn uzantojn unuope uzante la taŭgan kombinaĵon de muso kaj klavaro por la cia komputilo kaj retfoliumilo';

$lang['Ban_IP'] = 'Malpermesigu unu aŭ pli IP-adresojn aŭ gastigmaŝinnomojn';
$lang['IP_hostname'] = 'IP-adresoj aŭ gastigmaŝinnomoj';
$lang['Ban_IP_explain'] = 'Por specifi plurajn malegalajn IP-adresojn aŭ gastigmaŝinnomojn apartigu ilin per komoj. Por specifi IP-adresaron, apartigu la komencon kaj la finon per streketo (-); por specifi ĵokeron, uzu steleton (*).';

$lang['Ban_email'] = 'Malpermesigu unu aŭ pli retpoŝtajn adresojn';
$lang['Ban_email_explain'] = 'Por specifi pli ol unu retpoŝtan adreson, apartigu ilin per komoj. Por specifi ĵokeran uzelnomon, uzu * kiel *@esperantomustdie.org';

$lang['Unban_username'] = 'Mal-malpermesigu unu aŭ pli specifajn uzantojn';
$lang['Unban_username_explain'] = 'Ci povas malmalpermesigi plurajn uzantojn unuope uzante la taŭgan kombinaĵon de muso kaj klavaro por la cia komputilo kaj retfoliumilo';

$lang['Unban_IP'] = 'Mal-malpermesigu unu aŭ pli IP-adresojn';
$lang['Unban_IP_explain'] = 'Ci povas malmalpermesigi plurajn IP-adresojn unuope uzante la taŭgan kombinaĵon de muso kaj klavaro por la cia komputilo kaj retfoliumilo';

$lang['Unban_email'] = 'Mal-malpermesigu unu aŭ pli retpoŝtajn adresojn';
$lang['Unban_email_explain'] = 'Ci povas malmalpermesigi plurajn retpoŝtajn adresojn unuope uzante la taŭgan kombinaĵon de muso kaj klavaro por la cia komputilo kaj retfoliumilo';

$lang['No_banned_users'] = 'Neniu malpermesita uzulnomo';
$lang['No_banned_ip'] = 'Neniu malpermesita IP-adreso';
$lang['No_banned_email'] = 'Neniu malpermesita retpoŝta adreso';

$lang['Ban_update_sucessful'] = 'La malpermesiga listo ĝisdatiĝis plensukcese';
$lang['Click_return_banadmin'] = 'Klaku %sĈi tie%s por reiri al la Malpermesiga kontrolo';


//
// Konfiguraĵo
//
$lang['General_Config'] = 'Ĝenerala konfiguraĵo';
$lang['Config_explain'] = 'La ĉi-suba formularo permesos al ci agordi ĉiujn ĝeneralajn forumarajn opciojn. Por Uzanta kaj Foruma konfiguraĵoj uzu la rilatajn ligilojn ĉe la maldekstra flanko.';

$lang['Click_return_config'] = 'Klaku %sĈi tie%s por reiri al la Ĝenerala konfiguraĵo';

$lang['General_settings'] = 'Ĝeneralaj forumaraj agordoj';
$lang['Server_name'] = 'Domajnnomo';
$lang['Server_name_explain'] = 'La domajnnomo el kiu ĉi tiu forumaro rulas';
$lang['Script_path'] = 'Skriptovojo';
$lang['Script_path_explain'] = 'La vojo kie phpBB2 estas rilate al la domajnnomo';
$lang['Server_port'] = 'Servila pordo';
$lang['Server_port_explain'] = 'La porto kie la servilo rulas, kutime 80. Ŝanĝu nur se malegala';
$lang['Site_name'] = 'Situa nomo';
$lang['Site_desc'] = 'Situa priskribo';
$lang['Board_disable'] = 'Malaktivigu forumaron';
$lang['Board_disable_explain'] = 'Ĉi tiu malakirebligos la forumaron por uzantoj. Administristoj kapablas atingi la Administristan panelon dum la forumaro estas malaktivigita.';
$lang['Acct_activation'] = 'Aktivigu kontan aktivadon';
$lang['Acc_None'] = 'Neniu'; // Ĉi tiuj tri estas la tipoj de aktivigado
$lang['Acc_User'] = 'Uzanto';
$lang['Acc_Admin'] = 'Administristo';

$lang['Abilities_settings'] = 'Bazaj agordoj uzantaj kaj forumaj';
$lang['Max_poll_options'] = 'Maksimuma nombro da balotaj opcioj';
$lang['Flood_Interval'] = 'Inundintervalo';
$lang['Flood_Interval_explain'] = 'Nombro da sekundoj dum kiuj uzanto devas atendi inter afiŝoj'; 
$lang['Board_email_form'] = 'Uzanta retpoŝto per forumaro';
$lang['Board_email_form_explain'] = 'Uzantoj sendas retpoŝton unu al la alia per ĉi tiu forumaro';
$lang['Topics_per_page'] = 'Temoj po unu paĝo';
$lang['Posts_per_page'] = 'Afiŝoj po unu paĝo';
$lang['Hot_threshold'] = 'Afiŝoj por populara sojlo';
$lang['Default_style'] = 'Defaŭlta stilo';
$lang['Override_style'] = 'Substituu la uzulan stilon';
$lang['Override_style_explain'] = 'Anstataŭigas la uzulan stilon per la defaŭlta';
$lang['Default_language'] = 'Defaŭlta lingvo';
$lang['Date_format'] = 'Datoformato';
$lang['System_timezone'] = 'Horzono de la sistemo';
$lang['Enable_gzip'] = 'Aktivigu GZip-kunpremado';
$lang['Enable_prune'] = 'Aktivigu foruman tondadon';
$lang['Allow_HTML'] = 'Permesu HTMLn';
$lang['Allow_BBCode'] = 'Permesu BBCoden';
$lang['Allowed_tags'] = 'Permesitaj HTMLaj etikedoj';
$lang['Allowed_tags_explain'] = 'Apartigu etikedojn per komoj';
$lang['Allow_smilies'] = 'Permesu ridmienojn';
$lang['Smilies_path'] = 'Konserva vojo de ridmienoj';
$lang['Smilies_path_explain'] = 'Vojo sub la cia phpBB-ĉefdosierujo, ekz. bildoj/ridmienoj';
$lang['Allow_sig'] = 'Permesu subskribojn';
$lang['Max_sig_length'] = 'Maksimuma longo de subskriboj';
$lang['Max_sig_length_explain'] = 'Maksimuma nombro da signoj en uzulaj subskriboj';
$lang['Allow_name_change'] = 'Permesu ŝanĝojn de uzulnomo';

$lang['Avatar_settings'] = 'Avataraj agordoj';
$lang['Allow_local'] = 'Aktivigu galeriajn avatarojn';
$lang['Allow_remote'] = 'Aktivigu forajn avatarojn';
$lang['Allow_remote_explain'] = 'Avataroj ligitaj de alia TTT-ejo';
$lang['Allow_upload'] = 'Aktivigu alŝuto de avataroj';
$lang['Max_filesize'] = 'Maksimuma dosiergrando de avataro';
$lang['Max_filesize_explain'] = 'Por alŝutitaj avataraj dosieroj';
$lang['Max_avatar_size'] = 'Maksimuma grando de avataro';
$lang['Max_avatar_size_explain'] = '(Alto x Larĝo en rastrumeroj)';
$lang['Avatar_storage_path'] = 'Avatara konservada vojo';
$lang['Avatar_storage_path_explain'] = 'Vojo sub la cia phpBB-ĉefdosierujo, ekz. bildoj/avataroj';
$lang['Avatar_gallery_path'] = 'Vojo al la galerio de avataroj';
$lang['Avatar_gallery_path_explain'] = 'Vojo sub la cia phpBB-ĉefdosierujo por malpostŝarĝitaj bildoj, ekz. bildoj/avataroj/galerio';

$lang['COPPA_settings'] = 'COPPA-Agordoj';
$lang['COPPA_fax'] = 'COPPA-Faksilnombro';
$lang['COPPA_mail'] = 'COPPA-Poŝtadreso';
$lang['COPPA_mail_explain'] = 'Ĉi tiu estas la poŝta adreso al kiu gepatroj sendos enregistrajn COPPA-formularojn';

$lang['Email_settings'] = 'Retpoŝtaj agordoj';
$lang['Admin_email'] = 'Administru retpoŝtan adreson';
$lang['Email_sig'] = 'Retpoŝta subskribo';
$lang['Email_sig_explain'] = 'Ĉi tiu teksto kunsendiĝos kun ĉiuj retleteroj kiujn la forumaro sendos';
$lang['Use_SMTP'] = 'Uzu SMTP-servilon por retpoŝto';
$lang['Use_SMTP_explain'] = 'Diru Jes se ci volas aŭ devas sendi retpoŝton per nomservilo anstataŭ la loka poŝtprogramo';
$lang['SMTP_server'] = 'Adreso de SMTP-servilo';
$lang['SMTP_username'] = 'SMTP-uzulnomo';
$lang['SMTP_username_explain'] = 'Enmetu uzulnomon nur se la cia SMTP-servilo postulas ĝin';
$lang['SMTP_password'] = 'SMTP-pasvorto';
$lang['SMTP_password_explain'] = 'Enmetu pasvorton nur se la cia SMTP-servilo postulas ĝin';

$lang['Disable_privmsg'] = 'Privata mesaĝado';
$lang['Inbox_limits'] = 'Maksimumaj mesaĝoj en leterkesto';
$lang['Sentbox_limits'] = 'Maksimumaj mesaĝoj en senditkesto';
$lang['Savebox_limits'] = 'Maksimumaj mesaĝoj en Konservokesto';

$lang['Cookie_settings'] = 'Kuketaj agordoj'; 
$lang['Cookie_settings_explain'] = 'Ĉi tiuj detaloj difinas kiel kuketoj sendiĝas al la foliumiloj de la ciaj uzantoj. Plejkaze la defaŭltaj valoroj por la kuketaj agordoj devus esti sufiĉaj, sed se ci bezonas ŝanĝi ilin, faru tion singarde -- malĝustaj agordoj povas malebligi atingon al uzantoj';
$lang['Cookie_domain'] = 'Kuketa domajno';
$lang['Cookie_name'] = 'Kuketa nomo';
$lang['Cookie_path'] = 'Kuketa vojo';
$lang['Cookie_secure'] = 'Sekuriga Kuketo';
$lang['Cookie_secure_explain'] = 'Se la cia servilo rulas per SSL, agordu ĉi tiun al aktivigita, alikaze lasu ĝin malaktivigita';
$lang['Session_length'] = 'Seanca daŭro [ sekundoj ]';

// Vida konfirmo
$lang['Visual_confirm'] = 'Aktivigu vidan konfirmon';
$lang['Visual_confirm_explain'] = 'Postulas ke uzantoj enmetu kodon difinitan de bildo kiam ili enregistras.';

//
// Foruma administrado
//
$lang['Forum_admin'] = 'Foruma administrado';
$lang['Forum_admin_explain'] = 'El ĉi tiu panelo ci povas aldoni, forviŝi, redakti, reordigi kaj resinkronigi kategoriojn kaj forumojn';
$lang['Edit_forum'] = 'Redaktu forumon';
$lang['Create_forum'] = 'Kreu novan forumon';
$lang['Create_category'] = 'Kreu novan kategorion';
$lang['Remove'] = 'Forigu';
$lang['Action'] = 'Ago';
$lang['Update_order'] = 'Ĝisdatigu ordon';
$lang['Config_updated'] = 'Foruma konfiguraĵo plensukcese ĝisdatigita';
$lang['Edit'] = 'Redaktu';
$lang['Delete'] = 'Forviŝu';
$lang['Move_up'] = 'Movu supren';
$lang['Move_down'] = 'Movu suben';
$lang['Resync'] = 'Resinkronigu';
$lang['No_mode'] = 'Neniu metodo agordiĝis';
$lang['Forum_edit_delete_explain'] = 'La formularo ĉi-sube permesos al ci agordi ĉiujn ĝeneralajn forumarajn opciojn. Por uzulaj kaj forumaj konfiguraĵoj uzu la rilatajn ligilojn ĉe la maldekstra flanko';

$lang['Move_contents'] = 'Movu ĉiujn enhavojn';
$lang['Forum_delete'] = 'Forviŝu forumon';
$lang['Forum_delete_explain'] = 'La formularo ĉi-sube permesos al ci forviŝi forumon (aŭ kategorion) kaj decidi kie ci volas meti ĉiujn temojn (aŭ forumojn) kiujn ĝi enhavis.';

$lang['Status_locked'] = 'Ŝlosita';
$lang['Status_unlocked'] = 'Malŝlosita';
$lang['Forum_settings'] = 'Ĝeneralaj forumaj agordoj';
$lang['Forum_name'] = 'Nomo de la forumo';
$lang['Forum_desc'] = 'Priskribo';
$lang['Forum_status'] = 'Stato de la forumo';
$lang['Forum_pruning'] = 'Aŭto-tondado';

$lang['prune_freq'] = 'Kontrolu aĝo de temoj ĉiu';
$lang['prune_days'] = 'Forigu temojn en kiuj oni ne afiŝis';
$lang['Set_prune_data'] = 'Ci aktivigis aŭto-tondado por ĉi tiu forumo, sed ne agordis frekvencon aŭ nombron da tagoj tondendajn. Bonvolu iri malantaŭen kaj fari tion.';

$lang['Move_and_Delete'] = 'Movu kaj forviŝu';

$lang['Delete_all_posts'] = 'Forviŝu ĉiujn afiŝojn';
$lang['Nowhere_to_move'] = 'Movenda nenien';

$lang['Edit_Category'] = 'Redaktu kategorion';
$lang['Edit_Category_explain'] = 'Uzu ĉi tiun formularon por redakti nomon de kategorio.';

$lang['Forums_updated'] = 'Forumaj and kategoriaj informoj plensukcese ĝisdatigitaj';

$lang['Must_delete_forums'] = 'Ci devas forviŝi ĉiujn forumojn malpost ke ci povas forviŝi ĉi tiun kategorion';

$lang['Click_return_forumadmin'] = 'Klaku %sĈi tie%s per reiri al Foruma administrado';


//
// Ridmiena administrado
//
$lang['smiley_title'] = 'Utilaĵo por redakti ridmienojn';
$lang['smile_desc'] = 'El ĉi tiu paĝo ci povas aldoni, forigi kaj redakti la mienvinjetojn aŭ ridmienojn kiujn la ciaj uzantoj povas uzi en la iliaj afiŝoj kaj privataj mesaĝoj.';

$lang['smiley_config'] = 'Konfiguraĵo de ridmienoj';
$lang['smiley_code'] = 'Ridmiena kodo';
$lang['smiley_url'] = 'Bilda dosiero de ridmieno';
$lang['smiley_emot'] = 'Sento de la ridmieno';
$lang['smile_add'] = 'Aldonu novan ridmienon';
$lang['Smile'] = 'Ridmieno';
$lang['Emotion'] = 'Sento';

$lang['Select_pak'] = 'Elektu pakaĵan (.pak) dosieron';
$lang['replace_existing'] = 'Anstataŭigu ekzistantan ridmienon';
$lang['keep_existing'] = 'Restigu ekzistantan ridmienon';
$lang['smiley_import_inst'] = 'Ci devus malzipigi la ridmienan pakaĵon kaj alŝuti ĉiujn dosierojn al la taŭga ridmiena dosierujo por la cia instalaĵo. Do elektu la ĝustajn informojn ĉi-formulare por importi la ridmienan pakaĵon.';
$lang['smiley_import'] = 'Importu ridmienan pakaĵon';
$lang['choose_smile_pak'] = 'Elektu ridmien-pakaĵan .pak dosieron';
$lang['import'] = 'Importu ridmienojn';
$lang['smile_conflicts'] = 'Kion farendas kaze de konfliktoj';
$lang['del_existing_smileys'] = 'Forviŝi ekzistantajn ridmienojn malpost importado';
$lang['import_smile_pack'] = 'Importu ridmienan pakaĵon';
$lang['export_smile_pack'] = 'Kreu ridmienan pakaĵon';
$lang['export_smiles'] = 'Por krei ridmienan pakaĵon de la ciaj nune instalataj ridmienoj, klaku %sĈi tie%s por elŝuti la dosieoron smiles.pak. Nomigu ĉi tiun dosieron konvene, certigante ke la finaĵo .pak restu. Do kreu zip-dosieron enhavantan ĉiujn ciajn ridmienajn bildojn plus ĉi tiun konfiguraĵan .pak dosieron.';

$lang['smiley_add_success'] = 'La ridmieno plensukcese aldoniĝis';
$lang['smiley_edit_success'] = 'La ridmieno plensukcese ĝisdatiĝis';
$lang['smiley_import_success'] = 'La ridmiena pakaĵo plensukcese importiĝis!';
$lang['smiley_del_success'] = 'La ridmieno plensukcese forviŝiĝis';
$lang['Click_return_smileadmin'] = 'Klaku %sĈi tie%s por reiri al Ridmiena administrado';


//
// Uzula administrado
//
$lang['User_admin'] = 'Uzula administrado';
$lang['User_admin_explain'] = 'Ĉi tie ci povas ŝanĝi la informojn de la ciaj uzantoj kaj iujn opciojn. Por modifi la permesojn de la uzantoj, bonvolu uzi la permesigan sistemon por uzantoj kaj grupoj.';

$lang['Look_up_user'] = 'Serĉu uzanton';

$lang['Admin_user_fail'] = 'Ne povis ĝisdatigi la profilon de la uzanto.';
$lang['Admin_user_updated'] = 'La profilo de la uzanto plensukcese ĝisdatiĝis.';
$lang['Click_return_useradmin'] = 'Klaku %sĈi tie%s por reiri al Uzula administrado';

$lang['User_delete'] = 'Forviŝu ĉi tiun uzanton';
$lang['User_delete_explain'] = 'Klaku ĉi tie por forviŝi ĉi tiun uzanton; ĉi tio ne malfareblas.';
$lang['User_deleted'] = 'Uzanto plensukcese forviŝiĝis.';

$lang['User_status'] = 'Uzanto estas aktiva';
$lang['User_allowpm'] = 'Povas sendi privatajn mesaĝojn';
$lang['User_allowavatar'] = 'Povas montri avataron';

$lang['Admin_avatar_explain'] = 'Ĉi tie ci povas vidi kaj forviŝi la nunan avataron de la uzanto.';

$lang['User_special'] = 'Specialaj nur-administristaj kampoj';
$lang['User_special_explain'] = 'Ĉi tiuj kampoj ne modifeblas fare de la uzantoj. Ĉi tie ci povas agordi la ilian staton kaj aliajn opciojn kiuj ne doniĝas al uzantoj.';


//
// Grupa administrado
//
$lang['Group_administration'] = 'Grupa administrado';
$lang['Group_admin_explain'] = 'El ĉi tiu panelo ci povas administri ĉiujn ciajn uzulgrupojn. Ci povas forviŝi, krei kaj redakti ekzistantajn grupojn. Ci povas elekti moderistojn, ŝalti mal/fermitan grupstaton kaj agordi la nomon kaj la priskribon de la grupo';
$lang['Error_updating_groups'] = 'Okazis eraro dum ĝisdatigante la grupojn';
$lang['Updated_group'] = 'La grupo plensukcese ĝisdatiĝis';
$lang['Added_new_group'] = 'La nova grupo plensukcese kreiĝis';
$lang['Deleted_group'] = 'La grupo plensukcese forviŝiĝis';
$lang['New_group'] = 'Kreu novan grupon';
$lang['Edit_group'] = 'Redaktu grupon';
$lang['group_name'] = 'Nomo de la grupo';
$lang['group_description'] = 'Priskribo de la grupo';
$lang['group_moderator'] = 'Moderisto de la grupo';
$lang['group_status'] = 'Grupstato';
$lang['group_open'] = 'Malfermita grupo';
$lang['group_closed'] = 'Fermita grupo';
$lang['group_hidden'] = 'Kaŝita grupo';
$lang['group_delete'] = 'Forviŝu grupon';
$lang['group_delete_check'] = 'Forviŝu ĉi tiun grupon';
$lang['submit_group_changes'] = 'Submetu ŝanĝojn';
$lang['reset_group_changes'] = 'Reŝargu ŝanĝojn';
$lang['No_group_name'] = 'Ci devas specifi nomon por ĉi tiu grupo';
$lang['No_group_moderator'] = 'Ci devas specifi moderiston por ĉi tiu grupo';
$lang['No_group_mode'] = 'Ci devas specifi metodon por ĉi tiu grupo, fermita aŭ male';
$lang['No_group_action'] = 'Neniu ago specifiĝis';
$lang['delete_group_moderator'] = 'Forviŝu la malnovan moderiston de la grupo?';
$lang['delete_moderator_explain'] = 'Se ci ŝanĝas la moderisto de la grupo, marku ĉi tiun butonon por forigi la malnovan moderiston el la grupo.  Alie, ne marku ĝin, kaj la uzanto iĝos regulan membron de la grupo.';
$lang['Click_return_groupsadmin'] = 'Klaku %sĈi tie%s por reiri al la Grupa administrado.';
$lang['Select_group'] = 'Elektu grupon';
$lang['Look_up_group'] = 'Serĉu grupon';


//
// Tondadadministrado
//
$lang['Forum_Prune'] = 'Foruma tondado';
$lang['Forum_Prune_explain'] = 'Ĉi tio forviŝos ajnan temon, en kiu oni ne afiŝis dum la nombro da tagoj kiun ci elektas. Se ci ne enmetas nombron ĉiuj temoj forviŝiĝos. Ĝi ne forigos temojn en kiuj balotoj ankoraŭ okazas, nek ĝi forigos anoncojn. Ci devos forigi tiujn temojn permane.';
$lang['Do_Prune'] = 'Faru tondon';
$lang['All_Forums'] = 'Ĉiuj forumoj';
$lang['Prune_topics_not_posted'] = 'Tondu temojn sen respondoj dum ĉi tiom da tagoj';
$lang['Topics_pruned'] = 'Temoj tonditaj';
$lang['Posts_pruned'] = 'Afiŝoj tonditaj';
$lang['Prune_success'] = 'Tondado de forumoj plensukcesis';


//
// Vorta cenzuro
//
$lang['Words_title'] = 'Vorta cenzuro';
$lang['Words_explain'] = 'El ĉi tiu panelo ci povas aldoni, redakti kaj forigi vortojn kiuj aŭtomate cenzuriĝis ĉe la ciaj forumoj. Aldone homoj ne havos permeson enregistri kun uzulnomoj enhavantaj ĉi tiujn vortojn. Ĵokeroj (*) akceptiĝas en la vorta kampo. Ekzemple, *pera* kongruos kun esperantokurso, pera* kongruos kun peranto, *pera kongruos kun espera.';
$lang['Word'] = 'Vorto';
$lang['Edit_word_censor'] = 'Redaktu vortan cenzuron';
$lang['Replacement'] = 'Anstataŭigado';
$lang['Add_new_word'] = 'Aldonu novan vorton';
$lang['Update_word'] = 'Ĝisdatigu vortan cenzuron';

$lang['Must_enter_word'] = 'Ci devas enmeti vorton kaj ĝian anstataŭigon';
$lang['No_word_selected'] = 'Neniu vorto elektita por redaktado';

$lang['Word_updated'] = 'La elektita vorta cenzuro plensukcese ĝisdatiĝis';
$lang['Word_added'] = 'La vorta cenzuro plensukcese aldoniĝis';
$lang['Word_removed'] = 'La elektita vorta cenzuro plensukcese forviŝiĝis';

$lang['Click_return_wordadmin'] = 'Klaku %sĈi tie%s per reiri al la Administrado de la vorta cenzuro';


//
// Amassendo
//
$lang['Mass_email_explain'] = 'Ĉi tie ci povas sendi retleteron al aŭ ĉiuj ciaj uzantoj aŭ ĉiuj uzantoj de specifa grupo.  Por fari tion, retletero sendiĝis al la donita administra retpoŝtadreso, kun blinda karbonkopio sendita al ĉiuj ricevantoj. Se ci sendas al granda grupo de homoj, bonvolu atendi post submeto kaj ne haltigu la paĝon meze. Estas normala por amassendo daŭri dum longa tempo, kaj ci informiĝos kiam la skripto finos.';
$lang['Compose'] = 'Komponu'; 

$lang['Recipients'] = 'Ricevantoj'; 
$lang['All_users'] = 'Ĉiuj uzantoj';

$lang['Email_successfull'] = 'La cia mesaĝo sendiĝis';
$lang['Click_return_massemail'] = 'Klaku %sĈi tie%s por reiri al la formularo por Amassendo';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Ranga administrado';
$lang['Ranks_explain'] = 'Uzante ĉi tiun formularon, ci povas aldoni, redakti, vidi kaj forviŝi rangojn. Ci povas ankaŭ krei agorditajn rangojn, kiuj aplikeblas al uzanto per la uzuladministrada utilaĵo';

$lang['Add_new_rank'] = 'Aldonu novan rangon';

$lang['Rank_title'] = 'Titolo de rango';
$lang['Rank_special'] = 'Agordu kiel speciala rango';
$lang['Rank_minimum'] = 'Minimumaj afiŝoj';
$lang['Rank_maximum'] = 'Maksimumaj afiŝoj';
$lang['Rank_image'] = 'Ranga bildo (Rilate al la phpBB2-ĉefdosierujo)';
$lang['Rank_image_explain'] = 'Uzu ĉi tion por difini malgrandan bildon rilata al la rango';

$lang['Must_select_rank'] = 'Ci devas elekti rangon';
$lang['No_assigned_rank'] = 'Neniu speciala rango atribuita';

$lang['Rank_updated'] = 'La rango plensukcese ĝisdatiĝis';
$lang['Rank_added'] = 'La rango plensukcese aldoniĝis';
$lang['Rank_removed'] = 'La rango plensukcese forviŝiĝis';
$lang['No_update_ranks'] = 'La rango plensukcese forviŝiĝis. Tamen, uzulkontoj uzantaj ĉi tiun rangon ne ĝisdatiĝis. Ci devos reagordi la rangojn de ĉi tiuj kontoj permane';

$lang['Click_return_rankadmin'] = 'Klaku %sĈi tie%s por reiri al Ranga administrado';


//
// Administrado de malpermesitaj uzulnomoj
//
$lang['Disallow_control'] = 'Kontrolo de malpermesitaj uzulnomoj';
$lang['Disallow_explain'] = 'Ĉi tie ci kontrolas uzulnomojn kiuj me permesiĝos uzi. Malpermesitaj uzulnomoj povas enhave ĵokeran signon kiel *.  Bonvolu rimarki ke ci ne permesiĝos specifi ajnan uzulnomon kiu jam enregistriĝis. Ci devas unue forviŝi tiun nomon kaj post malpermesi ĝin.';

$lang['Delete_disallow'] = 'Forviŝu';
$lang['Delete_disallow_title'] = 'Forigu malpermesitan uzulnomon';
$lang['Delete_disallow_explain'] = 'Ci povas forigi malpermesitan uzulnomon elektante la uzulnomon de ĉi tiu listo, kaj klakante ĉe submetu';

$lang['Add_disallow'] = 'Aldonu';
$lang['Add_disallow_title'] = 'Aldonu malpermesitan uzulnomon';
$lang['Add_disallow_explain'] = 'Ci povas malpermesi uzulnomon uzante la ĵokeran signon * por kongrui kun ajna signo';

$lang['No_disallowed'] = 'Neniu malpermesita uzulnomo';

$lang['Disallowed_deleted'] = 'La malpermesita uzulnomo plensukcese forviŝiĝis';
$lang['Disallow_successful'] = 'La malpermesita uzulnomo plensukcese aldoniĝis';
$lang['Disallowed_already'] = 'La nomo kiun ci enmetis ne povis malpermesiĝi. Ĝi aŭ jam ekzistas en la listo, ău ekzistas en la cenzura listo, aŭ kongruanta uzulnomo ekzistas.';

$lang['Click_return_disallowadmin'] = 'Klaku %sĈi tie%s por reiri al la administrado de malpermesitaj uzulnomoj';


//
// Stila administrado
//
$lang['Styles_admin'] = 'Stila administrado';
$lang['Styles_explain'] = 'Uzante ĉi tiun utilaĵon ci povas aldoni, forigi kaj administri stilojn (ŝablonojn kaj etosojn) disponeblajn al la ciaj uzantoj';
$lang['Styles_addnew_explain'] = 'La sekvanta listo enhavas ĉiujn etosojn disponeblajn por la ŝablonoj kiujn ci nune havas. La listeroj ne ankoraŭ instaliĝis en la phpBB-datumbazon. Por instali etoson, simple klaku sur la instalu-ligilon flanke de ero.';

$lang['Select_template'] = 'Elektu ŝablonon';

$lang['Style'] = 'Stilo';
$lang['Template'] = 'Ŝablono';
$lang['Install'] = 'Instalu';
$lang['Download'] = 'Elŝutu';

$lang['Edit_theme'] = 'Redaktu etoson';
$lang['Edit_theme_explain'] = 'En la ĉi-suba formularo ci povas redakti la agordojn por la elektita etoso';

$lang['Create_theme'] = 'Kreu etoson';
$lang['Create_theme_explain'] = 'Uzu la ĉi-suban formularon por krei novan etoson por elektita ŝablono. Kiam enmetante kolorojn (por kiuj ci devus uzi deksesuman notacion) ci devas ne enmeti la komenca #, t.e.. CCCCCC validas, #CCCCCC ne';

$lang['Export_themes'] = 'Eksportu etosojn';
$lang['Export_explain'] = 'Ĉi-panele ci povos eksporti la etosajn datumojn por elektita ŝablono. Elektu la ŝablonon de la ĉi-suba listo kaj la skripto kreos la etosan konfiguran dosieron, kaj provos konservi ĝin en la elektitan ŝablonan dosierujon. Se ĝi ne povas konservi la dosieron mem, ĝi donos al ci la opcion elŝuti ĝin. Por ke la skripto konservu la dosieron, ci devas doni skriban rajton al la TTT-servilo por la elektita ŝablona dosierujo. Por pluraj informoj pri ĉi tio, vidu la uzulgvidon de phpBB 2.';

$lang['Theme_installed'] = 'La elektita etoso plensukcese instaliĝis';
$lang['Style_removed'] = 'La elektita stilo foriĝis de la datumbazo. Por plene forigi ĉi tiun stilon de la cia sistemo, ci devas forviŝi la taŭgan stilon de la cia ŝablona dosierujo.';
$lang['Theme_info_saved'] = 'La etosaj informoj por la elektita ŝablono konserviĝis. Ci devus nun reigi la permesojn pri theme_info.cfg (kaj se aplikebla la elektita ŝablona dosierujo) nur legaj';
$lang['Theme_updated'] = 'La elektita etoso ĝisdatiĝis. Ci devus nun eksporti la novan etosan agordon';
$lang['Theme_created'] = 'Etoso kreita. Ci devus nun eksporti la etoson al la etosa konfigura dosiero por sekura konservado aŭ aliloka uzo';

$lang['Confirm_delete_style'] = 'Ĉu ci certas pri ke ci volas forviŝi ĉi tiun stilon?';

$lang['Download_theme_cfg'] = 'La eksportilo ne povis skribi la etosan konfiguran dosieron. Klaku la ĝi-suban butonon por elŝuti ĉi tiun dosieron per la cia retfoliumilo. Kiam ci elŝutos ĝin ci povos movi ĝin al la dosierujo enhavanta la ŝablonajn dosierojn. Ci povos tiam enpakigi la dosierojn por distribuado aŭ aliloka uzo se ci volas';
$lang['No_themes'] = 'La ŝablono kiun ci elektis ne havas etosojn alligitaj al si. Por krei novan etoson klaku ĉe la ligino Kreu Novan ĉe la maldekstra panelo';
$lang['No_template_dir'] = 'Ne povis malfermi la ŝablonan dosierujon. Ĝi povus estis nelegebla de la TTT-servilo aŭ ĝi povos ne ekzisti';
$lang['Cannot_remove_style'] = 'Ci ne povas forigi la stilon elektitan ĉar ĝi estas nune la foruma defaŭlto. Bonvolu ŝanĝi la defaŭltan stilon kaj provu denove.';
$lang['Style_exists'] = 'La elektita nomo de la stilo jam ekzistas, bonvolu iru malantaŭen kaj elektu malegalan nomon.';

$lang['Click_return_styleadmin'] = 'Klaku %sĈi tie%s por reiri al Stila administrado';

$lang['Theme_settings'] = 'Etosaj agordoj';
$lang['Theme_element'] = 'Etosero';
$lang['Simple_name'] = 'Simpla Nomo';
$lang['Value'] = 'Valoro';
$lang['Save_Settings'] = 'Konservaj agordoj';

$lang['Stylesheet'] = 'CSS-Stilfolio';
$lang['Background_image'] = 'Fona bildo';
$lang['Background_color'] = 'Fona koloro';
$lang['Theme_name'] = 'Nomo de la etoso';
$lang['Link_color'] = 'Koloro de Ligiloj';
$lang['Text_color'] = 'Koloro de teksto';
$lang['VLink_color'] = 'Koloro de vizitita ligilo';
$lang['ALink_color'] = 'Koloro de aktiva ligilo';
$lang['HLink_color'] = 'Koloro de ligilo je ŝvebo';
$lang['Tr_color1'] = 'Koloro 1 de tabela horizontalo';
$lang['Tr_color2'] = 'Koloro 2 de tabela horizontalo';
$lang['Tr_color3'] = 'Koloro 3 de tabela horizontalo';
$lang['Tr_class1'] = 'Klaso 1 de tabela horizontalo';
$lang['Tr_class2'] = 'Klaso 2 de tabela horizontalo';
$lang['Tr_class3'] = 'Klaso 3 de tabela horizontalo';
$lang['Th_color1'] = 'Koloro 1 de tabela ĉapo';
$lang['Th_color2'] = 'Koloro 2 de tabela ĉapo';
$lang['Th_color3'] = 'Koloro 3 de tabela ĉapo';
$lang['Th_class1'] = 'Klaso 1 de tabela ĉapo';
$lang['Th_class2'] = 'Klaso 2 de tabela ĉapo';
$lang['Th_class3'] = 'Klaso 3 de tabela ĉapo';
$lang['Td_color1'] = 'Koloro 1 de tabela ĉelo';
$lang['Td_color2'] = 'Koloro 2 de tabela ĉelo';
$lang['Td_color3'] = 'Koloro 3 de tabela ĉelo';
$lang['Td_class1'] = 'Klaso 1 de tabela ĉelo';
$lang['Td_class2'] = 'Klaso 2 de tabela ĉelo';
$lang['Td_class3'] = 'Klaso 3 de tabela ĉelo';
$lang['fontface1'] = 'Tipara fasono 1';
$lang['fontface2'] = 'Tipara fasono 2';
$lang['fontface3'] = 'Tipara fasono 3';
$lang['fontsize1'] = 'Tipara grando 1';
$lang['fontsize2'] = 'Tipara grando 2';
$lang['fontsize3'] = 'Tipara grando 3';
$lang['fontcolor1'] = 'Tipara koloro 1';
$lang['fontcolor2'] = 'Tipara koloro 2';
$lang['fontcolor3'] = 'Tipara koloro 3';
$lang['span_class1'] = 'Etenda klaso 1';
$lang['span_class2'] = 'Etenda klaso 2';
$lang['span_class3'] = 'Etenda klaso 3';
$lang['img_poll_size'] = 'Grando de balota bildo [px]';
$lang['img_pm_size'] = 'Grando de stato de privataj mesaĝoj [px]';


//
// Instalprocezo
//
$lang['Welcome_install'] = 'Bonvenon al la instalo de phpBB 2';
$lang['Initial_config'] = 'Baza Konfigurado';
$lang['DB_config'] = 'Datumbaza Konfigurado';
$lang['Admin_config'] = 'Administra Konfigurado';
$lang['continue_upgrade'] = 'Kiam ci elŝutos la ciajn konfigurdosierojn al la cia loka maŝino, ci povos premi la \'Kontinuu ĝisdatigon\'-butonon ĉi-sube por iri antaŭen kun la ĝisdatiga procezo. Bonvolu atendi alŝuti la konfigurdosieron ĝis ke la ĝisdatiga procezo estos plenumigita.';
$lang['upgrade_submit'] = 'Kontinuu ĝisdatigon';

$lang['Installer_Error'] = 'Eraro okazis dum instalado';
$lang['Previous_Install'] = 'Malposta instalaĵo troviĝis';
$lang['Install_db_error'] = 'Eraro okazis dum provo ĝisdatigi la datumbazon';

$lang['Re_install'] = 'La cia malposta instalaĵo estas ankoraŭ aktiva.<br /><br />Se ci deziras reinstali phpBB 2\'n ci devus klaki ĉe la Jes-butonon ĉi-sube. Bonvolu esti konscia ke fari tion neniigos ĉiujn ekzistantajn datumojn kaj neniu vicrisurco fariĝos! La administraj uzulnomo kaj pasvorto kiujn ci uzis por ensaluti en la forumaro rekreiĝos post la reinstalado, kaj neniu alia agordo konserviĝos.<br /><br />Pensu zorgeme malpost klaki ĉe Jes!';

$lang['Inst_Step_0'] = 'Dankon pro ke ci elektis phpBB 2\'n. Por plenumigi ĉi tiun instaladon bonvolu plenigi la postulatajn detalojn ĉi-sube. Bonvolu rimarki ke la datumbazo en kiun ci instalas devus jam ekzisti. Se ci instalas al datumbazo kiu uzas ODBC, ekz. MS Access, ci devus unue krei DSN\'on por ĝi malpost antaŭeniri.';

$lang['Start_Install'] = 'Ekinstalu';
$lang['Finish_Install'] = 'Finigi instaladon';

$lang['Default_lang'] = 'Defaŭlta forumara lingvo';
$lang['DB_Host'] = 'Nomo / DSN de Datumbaza servilo';
$lang['DB_Name'] = 'Nomo de la cia datumbazo';
$lang['DB_Username'] = 'Uzulnomo de la datumbazo';
$lang['DB_Password'] = 'Pasvorto de la datumbazo';
$lang['Database'] = 'La cia datumbazo';
$lang['Install_lang'] = 'Elektu lingvon por instalado';
$lang['dbms'] = 'Tipo de datumbazo';
$lang['Table_Prefix'] = 'Prefikso por tabeloj en la datumbazo';
$lang['Admin_Username'] = 'Administrista uzulnomo';
$lang['Admin_Password'] = 'Administrista pasvorto';
$lang['Admin_Password_confirm'] = 'Administrista pasvorto [ Konfirmo ]';

$lang['Inst_Step_2'] = 'La cia administrista uzulnomo kreiĝis. Ĉi-punkte la cia baza instalado plenumiĝis. Ci alportiĝos nun al ekrano, kiu permesos al ci administri la cian novan instaladon. Bonvolu kontroli la detalojn de la Ĝenerala konfiguraĵo kaj fari ajnajn necesajn ŝanĝojn. Dankon pro ke ci elektis phpBB 2\'n.';

$lang['Unwriteable_config'] = 'La cia konfigurdosiero estas neskribebla nune. Kopio de la konfigurdosiero elŝutiĝis al la cia komputilo kiam ci klakos ĉe la butono ĉi-sube. Ci devus alŝuti ĉi tiun dosieron al la sama dosierujo kiel phpBB 2. Kiam tio estos farita, ci devus ensaluti uzante la administristajn nomon kaj pasvorton, kiuj ci donis en la malposta formularo, kaj viziti la administran kontrolcentron (ligilo aperos funde de ĉiu ekrano post ensaluto) por kontroli la ĝeneralan konfiguraĵon. Dankon pro ke ci elektis phpBB 2\'n.';
$lang['Download_config'] = 'Elŝutu konfiguraĵon';

$lang['ftp_choose'] = 'Elektu elŝutan metodon';
$lang['ftp_option'] = '<br />Ĉar FTP-etendaĵoj estas aktiviĝitaj en ĉi tiu versio de PHP ci povus ankaŭ havi la opcion provi unue FTP-i aŭtomate la konfigurdosierujon en la ĝian lokon.';
$lang['ftp_instructs'] = 'Ci elektis FTP-i la dosieron al la konto enhavanta containing phpBB 2\'n aŭtomate. Bonvolu enmetu la ĉi-subajn informojn por faciligi ĉi tiun procezon. Rimarku ke la FTPa vojo devus esti la preciza vojo per FTP al la cia phpBB2-instalaĵo kiel se ci FTP-us al ĝi uzante ajnan normalan klienton.';
$lang['ftp_info'] = 'Enmetu la ciajn FTP-informojn';
$lang['Attempt_ftp'] = 'Provu FTP-i la konfigurdosieron en la ĝian lokon';
$lang['Send_file'] = 'Nur sendu la dosieron al mi kaj mi FTP-os ĝi permane';
$lang['ftp_path'] = 'FTPa vojo al phpBB 2';
$lang['ftp_username'] = 'La cia FTP-uzulnomo';
$lang['ftp_password'] = 'La cia FTP-pasvorto';
$lang['Transfer_config'] = 'Ekŝutu';
$lang['NoFTP_config'] = 'La provo FTP-i la dosieron en lokon malsukcesis. Bonvolu elŝuti la konfigurdosieron kaj FTP-i ĝin enloken permane.';

$lang['Install'] = 'Instalu';
$lang['Upgrade'] = 'Ĝisdatigu';


$lang['Install_Method'] = 'Elektu la cian instaladan metodon';

$lang['Install_No_Ext'] = 'La PHP-konfiguraĵo sur la cia servilo ne subtenas la tipon de datumbazo kiun ci elektis';

$lang['Install_No_PCRE'] = 'phpBB2 postulas la Perl-kongrua modulo por regulaj esprimoj por PHP, kiun la cian PHP-konfiguraĵo ŝajne ne subtenas!';

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