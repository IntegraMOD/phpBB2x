<?php

/***************************************************************************
 *                            lang_admin.php [Lithuanian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1.2.1 2003/01/02 20:44:58 ProTON Exp $
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

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Pagrindinis';
$lang['Users'] = 'Vartotojai';
$lang['Groups'] = 'Grupës';
$lang['Forums'] = 'Diskusijos';
$lang['Styles'] = 'Stiliai';

$lang['Configuration'] = 'Konfigûracija';
$lang['Permissions'] = 'Teisës';
$lang['Manage'] = 'Valdymas';
$lang['Disallow'] = 'Vardø draudimas';
$lang['Prune'] = 'Valymas';
$lang['Mass_Email'] = 'El. paðto siuntimas';
$lang['Ranks'] = 'Rangai';
$lang['Smilies'] = 'Ðypsenëlës';
$lang['Ban_Management'] = 'Blokavimas';
$lang['Word_Censor'] = 'Cenzûra';
$lang['Export'] = 'Eksportuoti';
$lang['Create_new'] = 'Sukurti';
$lang['Add_new'] = 'Pridëti';
$lang['Backup_DB'] = 'Iðsaugoti DB';
$lang['Restore_DB'] = 'Atstatyti DB';


//
// Index
//
$lang['Admin'] = 'Administravimas';
$lang['Not_admin'] = 'Jûs neturite teisës administruoti ðios diskusijø lentos';
$lang['Welcome_phpBB'] = 'Sveiki atvykæ á phpBB administravimo meniu';
$lang['Admin_intro'] = 'Aèiû, kad naudojatës ðia diskusijø lenta. Ðiame puslapyje rasite visà dominanèià informacijà ir diskusijø lentos statistikà. Bet kada galite sugráþti á ðá puslapá paspaudæ <u>Pradþia</u> kairiajame ðone. Norëdami sugráþti á diskusijø lentos pagrindiná puslapá paspauskite phpBB logotipà (taip pat kairëje). Visos kitos nuorodos kairiajame meniu leis jûms valdyti kiekvienà diskusijø lentos elementà. Kiekviename puslapyje galite rasti maþytá apraðymà apie konfigûravimo árankius.';
$lang['Main_index'] = 'Pagr. puslapis';
$lang['Forum_stats'] = 'Diskusijø statistika';
$lang['Admin_Index'] = 'Pradþia';
$lang['Preview_forum'] = 'Perþiûrëti diskusijas';

$lang['Click_return_admin_index'] = 'Paspauskite %sèia%s, kad gráþtumëte á pradþià';

$lang['Statistic'] = 'Duomuo';
$lang['Value'] = 'Reikðmë';
$lang['Number_posts'] = 'Praneðimø skaièius';
$lang['Posts_per_day'] = 'Praneðimø per dienà';
$lang['Number_topics'] = 'Temø skaièius';
$lang['Topics_per_day'] = 'Temø per dienà';
$lang['Number_users'] = 'Vartotojø skaièius';
$lang['Users_per_day'] = 'Naujø vartotojø per dienà';
$lang['Board_started'] = 'Diskusijø lenta startavo';
$lang['Avatar_dir_size'] = 'Avatarø katalogo dydis';
$lang['Database_size'] = 'Duomenø bazës dydis';
$lang['Gzip_compression'] ='GZIP kompresija';
$lang['Not_available'] = 'Nëra duomenø';

$lang['ON'] = 'ÁJUNGTA'; // This is for GZip compression
$lang['OFF'] = 'IÐJUNGTA'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Duomenø bazës árankiai';

$lang['Restore'] = 'Atstatymas';
$lang['Backup'] = 'Iðsaugojimas';
$lang['Restore_explain'] = 'Ðiuo árankiu galite atstatyti visus phpBB diskusijø lentos duomenis ið iðsaugoto failo. Taip pat galite nusiøsti á serverá gzip metodu suspaustà tekstiná failà. Diskusijø lentos árankiai automatiðkai já iðarchyvuos. <b>DËMESIO</b> Ði operacija perraðys visus esamus duomenis. Tai gali uþtrukti pakankamai ilgai. Jokiu bûdu nieko nespauskite kol atstatymas visiðkai nebaigtas.';
$lang['Backup_explain'] = 'Èia jûs galite iðsaugoti visus diskusijø lentos duomenis. Jeigu jûsø phpBB duomenø bazëje yra papildomø lenteliø, kurias taip pat norite iðsaugoti, áraðykite jas á þemiau esanèià formà atskirtas kableliais. Galite pasinaudoti gzip suspaudimu. Tai sumaþins failo dydá.';

$lang['Backup_options'] = 'Iðsaugojimo parametrai';
$lang['Start_backup'] = 'Pradëti procesà';
$lang['Full_backup'] = 'Pilnas iðsaugojimas';
$lang['Structure_backup'] = 'Iðsaugoti tik struktûrà';
$lang['Data_backup'] = 'Iðsaugoti tik duomenis';
$lang['Additional_tables'] = 'Papildomos lentelës';
$lang['Gzip_compress'] = 'Panaudoti GZIP kompresijà';
$lang['Select_file'] = 'Pasirinkite failà';
$lang['Start_Restore'] = 'Pradëti procesà';

$lang['Restore_success'] = 'Atstatymo operacija sëkmingai baigta.<br /><br />Dabar jûsø diskusijø lenta turëtø bûti tokia, kokia ji buvo prieð iðsaugojimà.';
$lang['Backup_download'] = 'Failas tuojau pat bus atsiøstas, palaukite...';
$lang['Backups_not_supported'] = 'Iðsaugojimas neámanomas, dël jûsø naudojamos duomenø bazës sistemos tipo.';

$lang['Restore_Error_uploading'] = 'Failo nusiøsti nepavyko';
$lang['Restore_Error_filename'] = 'Neteisingas failo pavadinimas, pabandykite ið naujo';
$lang['Restore_Error_decompress'] = 'Negaliu iðkoduoti suspausto failo, nusiøskite nesuspaustà tekstiná failà';
$lang['Restore_Error_no_file'] = 'Jûs nenusiuntëte jokio failo';


//
// Auth pages
//
$lang['Select_a_User'] = 'Pasirinkite vartotojà';
$lang['Select_a_Group'] = 'Pasirinkite grupæ';
$lang['Select_a_Forum'] = 'Pasirinkite forumà';
$lang['Auth_Control_User'] = 'Vartotojø teisiø valdymas'; 
$lang['Auth_Control_Group'] = 'Grupiø teisiø valdymas'; 
$lang['Auth_Control_Forum'] = 'Diskusijø teisiø valdymas'; 
$lang['Look_up_User'] = 'Perþiûrëti vartotojà'; 
$lang['Look_up_Group'] = 'Perþiûrëti grupæ'; 
$lang['Look_up_Forum'] = 'Perþiûrëti forumà'; 

$lang['Group_auth_explain'] = 'Èia galite keisti grupiø teises ir jø moderatorius. Nepamirðkite, kad keièiant grupiø teises, atskirø vartotojø teisës vistiek leis jiems prieiti prie forumø ir t.t. Tokiu atveju jus apie tai perspës.';
$lang['User_auth_explain'] = 'Èia galite keisti vartotojø teises. Nepamirðkite, kad keièiant vartotojø teises, grupiø teisës vistiek leis jiems prieiti prie forumø ir t.t. Tokiu atveju jus apie tai perspës.';
$lang['Forum_auth_explain'] = 'Èia galite nustatyti, kokias teises reikia turëti, norint patekti á atskirus forumus. Tai galite padaryti dvejais reþimais: paprastu ir iðplëstu. Iðplëstas reþimas leis pasirinkti þymiai daugiau nustatymø.';

$lang['Simple_mode'] = 'Paprastas reþimas';
$lang['Advanced_mode'] = 'Iðplëstas reþimas';
$lang['Moderator_status'] = 'Moderatoriaus teisës';

$lang['Allowed_Access'] = 'Áleisti';
$lang['Disallowed_Access'] = 'Neáleisti';
$lang['Is_Moderator'] = 'Taip';
$lang['Not_Moderator'] = 'Ne';

$lang['Conflict_warning'] = 'Perspëjimas apie teisiø konfliktà';
$lang['Conflict_access_userauth'] = 'Ðis vartotojas vistiek turi priëjimà prie ðio forumo per savo grupës teises. Jûs galite pakeisti grupës teises arba paðalinti vartotojà ið tos grupës. Apaèioje galite matyti grupës teises á tam tikrus forumus.';
$lang['Conflict_mod_userauth'] = 'Ðis vartotojas vistiek turi moderatoriaus teises per savo grupës teises. Jûs galite pakeisti grupës teises arba paðalinti vartotojà ið tos grupës. Apaèioje galite matyti grupës teises á tam tikrus forumus.';

$lang['Conflict_access_groupauth'] = 'Vienas ið grupës vartotojø vis dar turi priëjimà prie ðio forumo per savo vartotojo teisiø nustatymus. Jûs turite pakeisti paèio vartotojo teises. Apaèioje galite matyti vartotojo teises á tam tikrus forumus.';
$lang['Conflict_mod_groupauth'] = 'Vienas ið grupës vartotojø vis dar turi moderatoriaus teises per savo vartotojo teisiø nustatymus. Jûs turite pakeisti paèio vartotojo teises. Apaèioje galite matyti vartotojo teises á tam tikrus forumus.';

$lang['Public'] = 'Vieðas';
$lang['Private'] = 'Privatus';
$lang['Registered'] = 'Registruotiems vartotojams';
$lang['Administrators'] = 'Administratoriams';
$lang['Hidden'] = 'slaptas';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'VISI';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRIV';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Matyti';
$lang['Read'] = 'Skaityti';
$lang['Post'] = 'Raðyti';
$lang['Reply'] = 'Atsakinëti';
$lang['Edit'] = 'Redaguoti';
$lang['Delete'] = 'Iðtrinti';
$lang['Sticky'] = 'Lipnus';
$lang['Announce'] = 'Anonsuoti'; 
$lang['Vote'] = 'Balsuoti';
$lang['Pollcreate'] = 'Kurti balsavimus';

$lang['Permissions'] = 'Teisës';
$lang['Simple_Permission'] = 'Paprastos teisës';

$lang['User_Level'] = 'Vartotojo tipas'; 
$lang['Auth_User'] = 'Paprastas vartotojas';
$lang['Auth_Admin'] = 'Administratorius';
$lang['Group_memberships'] = 'Vartotojas priklauso grupëms';
$lang['Usergroup_members'] = 'Ðiai grupei priklauso ðie vartotojai';

$lang['Forum_auth_updated'] = 'Forumo teisës sëkmingai pakeistos';
$lang['User_auth_updated'] = 'Vartotojo teisës sëkmingai pakeistos';
$lang['Group_auth_updated'] = 'Grupës teisës sëkmingai pakeistos';

$lang['Auth_updated'] = 'Teisës sëkmingai pakeistos';
$lang['Click_return_userauth'] = 'Paspauskite %sèia%s, norëdami gráþti á vartotojø teisiø nustatymo formà';
$lang['Click_return_groupauth'] = 'Paspauskite %sèia%s, norëdami gráþti á grupiø teisiø nustatymo formà';
$lang['Click_return_forumauth'] = 'Paspauskite %sèia%s, norëdami gráþti á forumø teisiø nustatymo formà';


//
// Banning
//
$lang['Ban_control'] = 'Blokavimas';
$lang['Ban_explain'] = 'Èia galite blokuoti vartotojus. Blokuoti galima pagal vartotojo vardà, pagal vienà arba kelis IP adresus, arba pagal interneto adresà. Tokiu bûdu netgi galite uþdrausti vartotojams pasiektá pagrindiná diskusijø lentos puslapá. Kad vartotojas neuþsiregistruotu kitu vardu, galite netgi blokuoti jo el. paðto adresà. Taèiau, ásidëmëkite, kad blokuodami tikrai el. paðto adresà, jûs neuþblokuosite paèio vartotojo. Paðto adreso blokavimà reikia derint su kuriuo nors ið pirmø blokavimo bûdø.';
$lang['Ban_explain_warn'] = '';

$lang['Select_username'] = 'Pasirinkite vartotojà';
$lang['Select_ip'] = 'Pasirinkite IP adresà';
$lang['Select_email'] = 'Pasirinkite el. paðto adresà';

$lang['Ban_username'] = 'Blokuoti vienà ar daugiau vartotojø vardø';
$lang['Ban_username_explain'] = 'Daugiau vartotojø vardø galite ávesti teisingai suþaidæ su klaviarûra ir pele';

$lang['Ban_IP'] = 'Blokuoti vienà ar daugiau IP adresø arba interneto vardø';
$lang['IP_hostname'] = 'IP adresai arba interneto vardai';
$lang['Ban_IP_explain'] = 'IP adresams ir internetiniams vardams atskirti naudokite kablelá. Taip pat galite pasirinkti blokuoti adresø grupæ. Tai daroma taip: pirmas_ip_adresas-antras_ip_adresas. Dalinëms reikðmëms apibûdinti naudokite *';

$lang['Ban_email'] = 'Blokuoti vienà ar daugiau el. paðto adresø';
$lang['Ban_email_explain'] = 'El. paðto adresai vienas nuo kito skiriami kableliais. Dalinëms reikðmëms apibûdinti naudokite *, pvz *@hotmail.com';

$lang['Unban_username'] = 'Atblokuoti vienà ar daugiau vartotojø';
$lang['Unban_username_explain'] = 'Galite atblokuoti daugiau nei vienà vartotojà teisingai suþaidæ su klaviatûra ir pele';

$lang['Unban_IP'] = 'Atblokuoti vienà ar daugiau IP adresø';
$lang['Unban_IP_explain'] = 'Galite atblokuoti daugiau nei vienà IP adresà teisingai suþaidæ su klaviatûra ir pele';

$lang['Unban_email'] = 'Atblokuoti vienà ar daugiau el. paðto adresø';
$lang['Unban_email_explain'] = 'Galite atblokuoti daugiau nei vienà el. paðto adresà teisingai suþaidæ su klaviatûra ir pele';

$lang['No_banned_users'] = 'Uþblokuotø vartotojø vardø nëra';
$lang['No_banned_ip'] = 'Uþblokuotø IP adresø nëra';
$lang['No_banned_email'] = 'Uþblokuotø el. paðto adresø nëra';

$lang['Ban_update_sucessful'] = 'Blokuotø adresø sàraðas sëkmingai pakeistas';
$lang['Click_return_banadmin'] = 'Paspauskite %sèia%s, norëdami gráþti á blokavimo valdymo formà';


//
// Configuration
//
$lang['General_Config'] = 'Pagrindiniai nustatymai';
$lang['Config_explain'] = 'Forma esanti þemiau leis jums keisti visus pagrindinius diskusijø lentos parametrus ir nustatymus. Atskirø vartotojø ir forumø nustatymus galima pasiekti per kairájá meniu.';

$lang['Click_return_config'] = 'Paspauskite %sèia%s, norëdami gráþti á pagrindinø nustatymø formà';

$lang['General_settings'] = 'Pagrindiniai diskusijø lentos nustatymai';
$lang['Server_name'] = 'Interneto vardas (domain)';
$lang['Server_name_explain'] = 'Pvz.: www.mano_firma.lt';
$lang['Script_path'] = 'Diskusijø lentos katalogas';
$lang['Script_path_explain'] = 'Pvz.: /diskusijos/';
$lang['Server_port'] = 'Serverio portas';
$lang['Server_port_explain'] = 'HTTP serverio portas, daþniausiai 80';
$lang['Site_name'] = 'Diskusijø lentos pavadinimas';
$lang['Site_desc'] = 'Diskusijø lentos apibûdinimas';
$lang['Board_disable'] = 'Iðjungti diskusijø lentà';
$lang['Board_disable_explain'] = 'Ðiuo parametru galite laikinai iðjungti diskusijø lentà. Neatsijunkite kol diskusijos yra iðjungtos, kitaip negalësite vël prisijungti!';
$lang['Acct_activation'] = 'Ájungti vartotojo vardo ir slaptaþodþio patvirtinimà';
$lang['Acc_None'] = 'Ne'; // These three entries are the type of activation
$lang['Acc_User'] = 'Taip, patvirtina vartotojas';
$lang['Acc_Admin'] = 'Taip, patvirtina administratorius';

$lang['Abilities_settings'] = 'Vartotojø ir diskusijø nustatymai';
$lang['Max_poll_options'] = 'Maksimalus balsavimo punktø skaièius';
$lang['Flood_Interval'] = 'Laiko tarpas tarp þinuèiø';
$lang['Flood_Interval_explain'] = 'Naudojamas apsaugai nuo per didelio srauto (flood)'; 
$lang['Board_email_form'] = 'El. paðto siuntimas diskusijø lentos sistema';
$lang['Board_email_form_explain'] = 'Vartotojai gali siøsti el. paðtà integruota sistema';
$lang['Topics_per_page'] = 'Temø viename puslapyje';
$lang['Posts_per_page'] = 'Þinuèiø viename puslapyje';
$lang['Hot_threshold'] = 'Þinuèiø populiariose temose';
$lang['Default_style'] = 'Pagrindinis stilius';
$lang['Override_style'] = 'Iðjungti vartotojø stilius';
$lang['Override_style_explain'] = 'Pakeièia vartotojø stilius pagrindiniu stiliumi';
$lang['Default_language'] = 'Pagrindinë kalba';
$lang['Date_format'] = 'Datos formatas';
$lang['System_timezone'] = 'Sistemos laiko juosta';
$lang['Enable_gzip'] = 'Ájungti GZIP kompresijà';
$lang['Enable_prune'] = 'Ájungti diskusijø valymà';
$lang['Allow_HTML'] = 'Leisti HTML';
$lang['Allow_BBCode'] = 'Leisti BBKodà';
$lang['Allowed_tags'] = 'Leistini HTML þymenys (tags)';
$lang['Allowed_tags_explain'] = 'Þymenys skiriami kableliais';
$lang['Allow_smilies'] = 'Leisti ðypsenëles';
$lang['Smilies_path'] = 'Ðypsenëliø katalogas';
$lang['Smilies_path_explain'] = 'Katalogas turi bûti nurodytas po phpBB pagrindinio katalogo, pvz. images/smilies';
$lang['Allow_sig'] = 'Leisti paraðus';
$lang['Max_sig_length'] = 'Maksimalus paraðo ilgis';
$lang['Max_sig_length_explain'] = 'Maksimalus simboliø skaièius vartotojø paraðuose';
$lang['Allow_name_change'] = 'Leisti keisti vartotojo vardà';

$lang['Avatar_settings'] = 'Avatarø nustatymai';
$lang['Allow_local'] = 'Ájungti avatarø galerijà';
$lang['Allow_remote'] = 'Ájungti nutolusius avatarus';
$lang['Allow_remote_explain'] = 'Ðie avatarai saugomi nutolusiame serveryje';
$lang['Allow_upload'] = 'Ájungti avatarø atsiuntimà';
$lang['Max_filesize'] = 'Maksimalus avataro dydis';
$lang['Max_filesize_explain'] = 'Galioja atsiunèiamiems avatarams';
$lang['Max_avatar_size'] = 'Maksimalus avataro paveikslëlio dydis';
$lang['Max_avatar_size_explain'] = '(aukðtis x ilgis pikseliais)';
$lang['Avatar_storage_path'] = 'Avatarø saugojimo katalogas';
$lang['Avatar_storage_path_explain'] = 'Katalogas turi bûti nurodytas po phpBB pagrindinio katalogo, pvz. images/avatars';
$lang['Avatar_gallery_path'] = 'Avatarø galerijos katalogas';
$lang['Avatar_gallery_path_explain'] = 'Katalogas turi bûti nurodytas po phpBB pagrindinio katalogo, pvz. images/avatars/gallery';

$lang['COPPA_settings'] = 'Vaikø apsaugos (COPPA) nustatymai';
$lang['COPPA_fax'] = 'Fakso numeris';
$lang['COPPA_mail'] = 'Paðto adresas';
$lang['COPPA_mail_explain'] = 'Paprasto paðto adresas, kur vaikø tëvai gali siøsti uþpildytas registracijos anketas';

$lang['Email_settings'] = 'El. paðto nustatymai';
$lang['Admin_email'] = 'Administratoriaus el. paðto adresas';
$lang['Email_sig'] = 'Administratoriaus paraðas';
$lang['Email_sig_explain'] = 'Ðis paraðas bus prikabintas prie visø laiðkø, siøstø per administratoriaus meniu';
$lang['Use_SMTP'] = 'Laiðkø siuntimui naudoti SMTP serverá';
$lang['Use_SMTP_explain'] = 'Jeigu ájungsite ðá parametrà, laiðkai bus sunèiami per SMTP serverá, o ne per standartinæ PHP <a href="http://www.php.net/mail" target=\"_other\">mail()</a> funkcijà';
$lang['SMTP_server'] = 'SMTP serverio adresas';
$lang['SMTP_username'] = 'SMTP vartotojo vardas';
$lang['SMTP_username_explain'] = 'Áraðykite tik tada, jeigu jûsø SMTP serveris to reikalauja';
$lang['SMTP_password'] = 'SMTP slaptaþodis';
$lang['SMTP_password_explain'] = 'Áraðykite tik tada, jeigu jûsø SMTP serveris to reikalauja';

$lang['Disable_privmsg'] = 'Asmeninës þinutës';
$lang['Inbox_limits'] = 'Maksimalus Inbox dydis';
$lang['Sentbox_limits'] = 'Maksimalus Sentbox dydis';
$lang['Savebox_limits'] = 'Maksimalus Savebox dydis';

$lang['Cookie_settings'] = 'Sausainëliø (cookie) nustatymai'; 
$lang['Cookie_settings_explain'] = 'Ðie parametrai nustato kaip sausainëliai bus sunèiami vartotojams. Pradiniai nustatymai tinka daugumai narðykliø, taèiau jeigu vis dëlto nusprendëte juos keisti, darykite tai atsargiai. Neteisingi nustatymai gali neleisti vartotojams prisijungti.';
$lang['Cookie_domain'] = 'Internetinis vardas (domain)';
$lang['Cookie_name'] = 'Sausainëlio pavadinimas';
$lang['Cookie_path'] = 'Katalogas kur galioja sausainëlis';
$lang['Cookie_secure'] = 'Saugus sausainëlis';
$lang['Cookie_secure_explain'] = 'Galima ájungti tik jeigu jûsø HTTP serveris dirba su SSL';
$lang['Session_length'] = 'Sesijos galiojimo laikas [ sekundëmis ]';
$lang['cookie_consent_enable'] = 'Enable cookie consent notice?';

//
// Forum Management
//
$lang['Forum_admin'] = 'Diskusijø administravimas';
$lang['Forum_admin_explain'] = 'Ðiame puslapyje galite kurti, trinti, redaguoti, rûðiuoti, ir sinchronizuoti diskusijø kategorijas bei forumus';
$lang['Edit_forum'] = 'Forumo redagavimas';
$lang['Create_forum'] = 'Sukurti naujà forumà';
$lang['Create_category'] = 'Sukurti naujà kategorijà';
$lang['Remove'] = 'Iðtrinti';
$lang['Action'] = 'Veiksmas';
$lang['Update_order'] = 'Keisti tvarkà';
$lang['Config_updated'] = 'Forumo parametrai sëkmingai pakeisti';
$lang['Edit'] = 'Keisti';
$lang['Delete'] = 'Iðtrinti';
$lang['Move_up'] = 'Aukðtyn';
$lang['Move_down'] = 'Þemyn';
$lang['Resync'] = 'Sinchronizuoti';
$lang['No_mode'] = 'Neávestas reþimas';
$lang['Forum_edit_delete_explain'] = '';

$lang['Move_contents'] = 'Perkelti visus duomenis á';
$lang['Forum_delete'] = 'Forumo trynimas';
$lang['Forum_delete_explain'] = '';

$lang['Status_locked'] = 'Uþrakintas';
$lang['Status_unlocked'] = 'Atrakintas';
$lang['Forum_settings'] = 'Pagrindiniai forumo nustatymai';
$lang['Forum_name'] = 'Forumo pavadinimas';
$lang['Forum_desc'] = 'Apibûdinimas';
$lang['Forum_status'] = 'Bûsena';
$lang['Forum_pruning'] = 'Automatinis valymas';

$lang['prune_freq'] = 'Tikrinti temø senumà kas';
$lang['prune_days'] = 'Iðtrinti temas, kuriose nebuvo raðoma';
$lang['Set_prune_data'] = 'Jûs ájungëte automatiná valymà, taèiau nenustatëte valymo daþnumo. Gráþkite atgal ir padarykite tai.';

$lang['Move_and_Delete'] = 'Perkelti ir/arba iðtrinti';

$lang['Delete_all_posts'] = 'Iðtrinti visas þinutes';
$lang['Nowhere_to_move'] = 'Nëra kur perkelti';

$lang['Edit_Category'] = 'Kategorijos redagavimas';
$lang['Edit_Category_explain'] = 'Èia galite pakeisti kategorijos pavadinimà.';

$lang['Forums_updated'] = 'Forumo ir/arba kategorijos parametrai pakeisti sëkmingai';

$lang['Must_delete_forums'] = 'Prieð trinant kategorijà, ið jos turi bûti iðtrinti visi forumai';

$lang['Click_return_forumadmin'] = 'Paspauskite %sèia%s, norëdami sugráþti á diskusijø administravimà';


//
// Smiley Management
//
$lang['smiley_title'] = 'Ðypsenëliø administravimas';
$lang['smile_desc'] = 'Èia galite pridëti, trinti ir redaguoti ðypsenëles, kurias diskusijø dalyviai naudoja þinutëse.';

$lang['smiley_config'] = 'Ðypsenëlës parametrai';
$lang['smiley_code'] = 'Ðypsenëlës kodas';
$lang['smiley_url'] = 'Paveikslëlis';
$lang['smiley_emot'] = 'Emocija';
$lang['smile_add'] = 'Pridëti naujà ðypsenëlæ';
$lang['Smile'] = 'Ðypsenëlë';
$lang['Emotion'] = 'Emocija';

$lang['Select_pak'] = 'Pasirinkite failà (.pak)';
$lang['replace_existing'] = 'Pakeisti egzistuojanèià ðypsenëles';
$lang['keep_existing'] = 'Palikti egzistuojanèias ðypsenëles';
$lang['smiley_import_inst'] = 'Iðarchyvuokite visas ðypsenëles ir nusiøskite jas á ðypsenëliø katalogà. Tada ðioje formoje pasirinkite teisingus parametrus ir áveskite naujas ðypsenëles á duomenø bazæ.';
$lang['smiley_import'] = 'Ðypsenëliø paketo ávedimas';
$lang['choose_smile_pak'] = 'Pasirinkite ðypsenëliø paketà (.pak)';
$lang['import'] = 'Ávesti ðypsenëles';
$lang['smile_conflicts'] = 'Kà daryti ðypsenëliø konflikto atveju?';
$lang['del_existing_smileys'] = 'Iðtrinkite egzistuojanèias ðypsenëles prieð ávedimà';
$lang['import_smile_pack'] = 'Ávesti ðypsenëliø paketà';
$lang['export_smile_pack'] = 'Sukurti ðypsenëliø paketà';
$lang['export_smiles'] = 'Norëdami sukurti ðypsenëliø paketà ið dabartiniø ðypsenëliø, spauskite %sèia%s. Failas turi bûti su .pak galûne. Tada sukurkite zip failà, á kurá ádëkite visas savo ðypsenëles bei ðá .pak failà.';

$lang['smiley_add_success'] = 'Ðypsenëlë sëkmingai pridëta';
$lang['smiley_edit_success'] = 'Ðypsenëlë sëkmingai pakeista';
$lang['smiley_import_success'] = 'Ðypsenëliø paketas sëkmingai áraðytas!';
$lang['smiley_del_success'] = 'Ðypsenëlë sëkmingai paðalinta';
$lang['Click_return_smileadmin'] = 'Paspauskite %sèia%s, norëdami sugráþti á ðypsenëliø administravimà';


//
// User Management
//
$lang['User_admin'] = 'Vartotojø valdymas';
$lang['User_admin_explain'] = 'Ðiame puslapyje galite keisti vartotojø informacijà ir specialius parametrus. Vartotojø teisës keièiamos per <u>Vartotojø teisiø</u> meniu.';

$lang['Look_up_user'] = 'Perþiûrëti vartotojà';

$lang['Admin_user_fail'] = 'Negaliu pakeisti vartotojo apraðymo.';
$lang['Admin_user_updated'] = 'Vartotojo apraðymas sëkmingai pakeistas.';
$lang['Click_return_useradmin'] = 'Paspauskite %sèia%s, norëdami gráþti á vartotojø valdymà';

$lang['User_delete'] = 'Iðtrinti ðá vartotojà';
$lang['User_delete_explain'] = 'Graþinti vartotojo nebus ámanoma.';
$lang['User_deleted'] = 'Vartotojas sëkmingai iðtrintas.';

$lang['User_status'] = 'Vartotojo vardas aktyvuotas';
$lang['User_allowpm'] = 'Gali siøsti privaèias þinutes';
$lang['User_allowavatar'] = 'Gali turëti avatarà';

$lang['Admin_avatar_explain'] = 'Èia galite matyti ir iðtrinti vartotojo avatarà.';

$lang['User_special'] = 'Specialûs laukai skirti tik administratoriams';
$lang['User_special_explain'] = 'Ðiuos laikus mato tik administratoriai. Èia galite keisti vartotojø bûsenà ir kitus specialius parametrus, kuriø negali modifikuoti pats vaartotojas.';
// Added for enhanced user management
$lang['User_lookup_explain'] = "Èia galite pasirinkti vartotojus, kuriuos norite administruoti.";
$lang['One_user_found'] = "Buvo rastas vienintelis vartotojas, puslapis tuojau pat persikraus";
$lang['Click_goto_user'] = "Paspauskite %sèia%s, norëdami redaguoti vartotojo apraðymà";
$lang['User_joined_explain'] = "Sintaksë identiðka PHP funkcijos <a href=\"http://www.php.net/strtotime\" target=\"_other\">strtotime()</a> sintaksei";


//
// Group Management
//
$lang['Group_administration'] = 'Grupiø valdymas';
$lang['Group_admin_explain'] = 'Ið èia galite valdyti visas varototjø grupes. Galite trinti, kurti, redaguoti esamas grupes. Taip pat galite pasirinkti grupiø moderatorius, atidaryti/uþdaryti grupæ, keisti grupës pavadinimà ir apibûdinimà.';
$lang['Error_updating_groups'] = 'Klaida keièiant grupiø informacijà';
$lang['Updated_group'] = 'Grupë sëkmingai pakeista';
$lang['Added_new_group'] = 'Nauja grupë sëkmingai sukurta';
$lang['Deleted_group'] = 'Grupë sëkmingai iðtrinta';
$lang['New_group'] = 'Sukurti naujà grupæ';
$lang['Edit_group'] = 'Grupës redagavimas';
$lang['group_name'] = 'Grupës pavadinimas';
$lang['group_description'] = 'Grupës apibûdinimas';
$lang['group_moderator'] = 'Grupës moderatorius';
$lang['group_status'] = 'Grupës bûsena';
$lang['group_open'] = 'Atvira grupë';
$lang['group_closed'] = 'Uþdara grupë';
$lang['group_hidden'] = 'Slapta grupë';
$lang['group_delete'] = 'Iðtrinti grupæ';
$lang['group_delete_check'] = 'Iðtrinti ðià grupæ';
$lang['submit_group_changes'] = 'Keisti';
$lang['reset_group_changes'] = 'Iðvalyti';
$lang['No_group_name'] = 'Áraðykite grupës pavadinimà';
$lang['No_group_moderator'] = 'Áraðykite grupës moderatoriø';
$lang['No_group_mode'] = 'Pasirinkite grupës bûsenà';
$lang['No_group_action'] = 'Nepasirinktas veiksmas';
$lang['delete_group_moderator'] = 'Paðalinti senà grupës moderatoriø?';
$lang['delete_moderator_explain'] = 'Visiðkai paðalina grupës moderatoriø ið grupës. Jeigu nepaþymësite ðio parametro, senasis moderatorius taps eiliniu grupës nariu.';
$lang['Click_return_groupsadmin'] = 'Paspauskite %sèia%s, norëdami sugráþti á grupiø valdymà.';
$lang['Select_group'] = 'Pasirinkite grupæ';
$lang['Look_up_group'] = 'Perþiûrëti grupæ';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Diskusijø valymas';
$lang['Forum_Prune_explain'] = 'Automatinë diskusijø valymo funkcija paðalina þinutes senesnes nei nurodytas laikotarpis. Automatinis valymas neiðtrina temø kuriose yra vis dar aktyvûs balsavimai. Taip pat paliekami anonsavimai. Ðias temas jums teks iðtrinti patiems.';
$lang['Do_Prune'] = 'Valyti';
$lang['All_Forums'] = 'Visi forumai';
$lang['Prune_topics_not_posted'] = 'Valyti temas kuriose nebuvo atsakymø';
$lang['Topics_pruned'] = 'Iðtrintø temø';
$lang['Posts_pruned'] = 'Iðtrintø þinuèiø';
$lang['Prune_success'] = 'Forumø valymas sëkmingai baigtas';


//
// Word censor
//
$lang['Words_title'] = 'Cenzûra';
$lang['Words_explain'] = 'Ðiame puslapyje galite pridëti, redaguoti ir iðtrinti þodþius, kurie bus automatiðkai cenzûruojami. Be to bus neleidþiama registruotis vardais, kuriuose yra cenzûruoti þodþiai. Keliø panaðiø reikðmiø apraðymui naudokite *, pvz: *test* atitiks detestable, test* - testing, *test - detest.';
$lang['Word'] = 'Þodis';
$lang['Edit_word_censor'] = 'Þodþio cenzûravimo redagavimas';
$lang['Replacement'] = 'Pakeisti á';
$lang['Add_new_word'] = 'Pridëti þodá';
$lang['Update_word'] = 'Pakeisti þodþio cenzûravimà';

$lang['Must_enter_word'] = 'Áraðykite ir þodá ir jo pakaitalà';
$lang['No_word_selected'] = 'Nepasirinkote þodþio';

$lang['Word_updated'] = 'Þodþio cenzûravimas sëkmingai pakeistas';
$lang['Word_added'] = 'Naujas cenzûruotas þodis sëkmingai pridëtas';
$lang['Word_removed'] = 'Þodis paðalintas ið cenzûruojamø þodþiø sàraðo';

$lang['Click_return_wordadmin'] = 'Paspauskite %sèia%s, norëdami sugráþti á cenzûros valdymà';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Èia galite iðsiøsti elektroniná laiðkà visiems diskusijø dalyviams arba tam tikrai dalyviø grupei. Jeigu raðote didelei varototjø grupei, bûkite kantrûs, nes siuntimo procesas gali uþtrukti ilgai. Neiðjunkite narðyklës lango kol sistema neparodë, kad siuntimas visiðkai baigtas.';
$lang['Compose'] = 'Laiðko raðymas'; 

$lang['Recipients'] = 'Gavëjai'; 
$lang['All_users'] = 'Visi vartotojai';

$lang['Email_successfull'] = 'Jûsø þinutë iðsiøsta';
$lang['Click_return_massemail'] = 'Paspauskite %sèia%s, norëdami sugráþti á el. paðto siuntimo formà';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Rangø valdymas';
$lang['Ranks_explain'] = 'Pasinaudodami ðia forma galite pridëti, trinti, perþiûrëti, bei iðtrinti esamus rangus. Taip pat galite kurti specialius rangus, kuriuos vartotojams priskirsite per vartotojø valdymo formà.';

$lang['Add_new_rank'] = 'Sukurti naujà rangà';

$lang['Rank_title'] = 'Rango pavadinimas';
$lang['Rank_special'] = 'Specialus rangas?';
$lang['Rank_minimum'] = 'Maþiausiai þinuèiø';
$lang['Rank_maximum'] = 'Daugiausiai þinuèiø';
$lang['Rank_image'] = 'Rango paveikslëlis (pvz: images/rank1.jpg)';
$lang['Rank_image_explain'] = 'Daþniausias maþas paveikslëlis';

$lang['Must_select_rank'] = 'Pasirinkite rangà';
$lang['No_assigned_rank'] = 'Pasirinkite ar rangas specialus';

$lang['Rank_updated'] = 'Rangas sëkmingai pakeistas';
$lang['Rank_added'] = 'Naujas rangas sëkmingai sukurtas';
$lang['Rank_removed'] = 'Rangas sëkmingai iðtrintas';
$lang['No_update_ranks'] = 'Rangas sëkmingai iðtrintas, taèiau vartotojø apraðymai, naudojanèiø ðá rangà nebuvo pakeisti. Tai jums teks padaryti patiems.';

$lang['Click_return_rankadmin'] = 'Paspauskite %sèia%s, norëdami gráþti á rangø valdymo formà';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Vartotojø vardø draudimas';
$lang['Disallow_explain'] = 'Ðiame puslapyje galite uþdrausti nepageidautinus vartotojø vardus. Panaðioms reikðmëms uþdrausti naudokite *. Taèiau jûs negalësite uþdrausti vardo, kuris jau yra uþregistruotas, todël ið pradþiø já iðtrinkite ir tik tada átraukite á draudþiamø vardø sàraðà.';

$lang['Delete_disallow'] = 'Iðtrinti';
$lang['Delete_disallow_title'] = 'Uþdrausto vardo paðalinimas';
$lang['Delete_disallow_explain'] = 'Pasirinkite vardà ið meniu ir paspauskite <i>Iðtrinti</i>';

$lang['Add_disallow'] = 'Pridëti';
$lang['Add_disallow_title'] = 'Naujas vardo draudimas';
$lang['Add_disallow_explain'] = 'Keletui panaðiø vardø apibûdinti naudokite *';

$lang['No_disallowed'] = 'Draudþiamø vardø nëra';

$lang['Disallowed_deleted'] = 'Uþdraustas vardas sëkmingai paðalintas ið draudþiamø vardø sàraðo';
$lang['Disallow_successful'] = 'Naujas draudþiamas vardas sëkmingai sukurtas';
$lang['Disallowed_already'] = 'Toks vardas jau uþregistruotas, arba uþdrautas per cenzûrà, arba jis jau uþdrautas.';

$lang['Click_return_disallowadmin'] = 'Paspauskite %sèia%s, norëdami gráþti á vardø draudimo formà';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Stiliø valdymas';
$lang['Styles_explain'] = 'Ðiame puslapyje rasite viskà kas susijæ su stiliais, jø kûrimu, trinimu, bei valdymu.';
$lang['Styles_addnew_explain'] = 'Ðiame sàraðe galite matyti visus stilius, kuriuos galite naudoti su savo trafaretais. Punktai sàraðe dar nëra ádiegti. Norëdami ádiegti, paspauskite <i>ádiegti</i> ðalia norimo stiliaus.';

$lang['Select_template'] = 'Pasirinkite trafaretà (template)';

$lang['Style'] = 'Stilius';
$lang['Template'] = 'Trafaretas (template)';
$lang['Install'] = 'Ádiegti';
$lang['Download'] = 'Parsisiøsti';

$lang['Edit_theme'] = 'Stiliaus redagavimas';
$lang['Edit_theme_explain'] = 'Formoje þemiau galite redaguoti stiliaus parametrus';

$lang['Create_theme'] = 'Sukurti stiliø';
$lang['Create_theme_explain'] = 'Forma þemiau galite sukurti naujà stiliø pagal pasirinktà trafaretà. Áraðant spalvas naudokite ðeðioliktainá kodà be # þenklo, pvz.: CCCCCC, bet ne #CCCCCC';

$lang['Export_themes'] = 'Stiliaus eksportavimas';
$lang['Export_explain'] = 'Ðiame skyriuje galite eksportuoti stiliaus duomenis pasirinktam trafaretui. Pasirinkite trafaretà ið sàraðo apaèioje ir sistema iðsaugos visus nustatymus trafareto kataloge. Jeigu failo iðsaugoti neámanoma (HTTP serveris neturi raðymo teisiø á minëtà katalogà), sistemà leis jums já parsisiøsti.';

$lang['Theme_installed'] = 'Pasirinktas stilius sëkmingai ádiegtas';
$lang['Style_removed'] = 'Stilius paðalintas ið duomenø bazës. Norëdami visiðkai paðalinti ðá stilø ið sistemos, iðtrinkite stiliaus failus ið trafaretø katalogo.';
$lang['Theme_info_saved'] = 'Stiliaus informacija pasirinktam trafaretui iðsaugota theme_info.cfg faile.';
$lang['Theme_updated'] = 'Stilius sëkmingai pakeistas. Dabar galite ekportuoti naujus stiliaus parametrus.';
$lang['Theme_created'] = 'Stilius sukurtas. Dabar galite ekportuoti stiliaus parametrus saugojimui.';

$lang['Confirm_delete_style'] = 'Ar tiktai norite iðtrinti ðá stiliø?';

$lang['Download_theme_cfg'] = 'Sistema negalëjo iðsaugoti failo. Parsisiuntimui paspauskite mygtukà apaèioje. Kai tik parsisiøsite failà, galite nusiøsti já á serverá tolesniam naudojimui.';
$lang['No_themes'] = 'Trafaretas kurá pasirinkote neturi susietø stiliø. Sukurkite nors vienà siliø.';
$lang['No_template_dir'] = 'Negaliu atidaryti trafaretø katalogo. HTTP serveris neturi skaitymo teisiø á já arba jis paprasèiausiai neegzistuoja.';
$lang['Cannot_remove_style'] = 'Jûs negalite perkelti ðio stiliaus, nes jis yra pagrindinis. Pakeiskite pagrindiná diskusijø lentos stiliø ir pabandykite dar kartà.';
$lang['Style_exists'] = 'Stilius tokiu pavadinimu jau yra, gráþkite ir pasirinkite kità pavadinimà.';

$lang['Click_return_styleadmin'] = 'Paspauskite %sèia%s, norëdami sugráþti á stiliø valdymo formà';

$lang['Theme_settings'] = 'Stiliaus parametrai';
$lang['Theme_element'] = 'Stiliaus elementas';
$lang['Simple_name'] = 'Pavadinimas';
$lang['Value'] = 'Reikðmë';
$lang['Save_Settings'] = 'Iðsaugoti pakeitimus';

$lang['Stylesheet'] = 'CSS stiliø trafaretas';
$lang['Background_image'] = 'Fono paveikslëlis';
$lang['Background_color'] = 'Fono spalva';
$lang['Theme_name'] = 'Stiliaus pavadinimas';
$lang['Link_color'] = 'Nuorodos spalva';
$lang['Text_color'] = 'Teksto spalva';
$lang['VLink_color'] = 'Aplankytos nuorodos spalva';
$lang['ALink_color'] = 'Aktyvios nuorodos spalva';
$lang['HLink_color'] = 'Uþvestos pele nuorodos spalva';
$lang['Tr_color1'] = 'Lentelës eilutës spalva 1';
$lang['Tr_color2'] = 'Lentelës eilutës spalva 2';
$lang['Tr_color3'] = 'Lentelës eilutës spalva 3';
$lang['Tr_class1'] = 'Lentelës eilutës klasë 1';
$lang['Tr_class2'] = 'Lentelës eilutës klasë 2';
$lang['Tr_class3'] = 'Lentelës eilutës klasë 3';
$lang['Th_color1'] = 'Lentelës virðaus (header) spalva 1';
$lang['Th_color2'] = 'Lentelës virðaus (header) spalva 2';
$lang['Th_color3'] = 'Lentelës virðaus (header) spalva 3';
$lang['Th_class1'] = 'Lentelës virðaus (header) klasë 1';
$lang['Th_class2'] = 'Lentelës virðaus (header) klasë 2';
$lang['Th_class3'] = 'Lentelës virðaus (header) klasë 3';
$lang['Td_color1'] = 'Lentelës celës spalva 1';
$lang['Td_color2'] = 'Lentelës celës spalva 2';
$lang['Td_color3'] = 'Lentelës celës spalva 3';
$lang['Td_class1'] = 'Lentelës celës klasë 1';
$lang['Td_class2'] = 'Lentelës celës klasë 2';
$lang['Td_class3'] = 'Lentelës celës klasë 3';
$lang['fontface1'] = 'Ðriftas 1';
$lang['fontface2'] = 'Ðriftas 2';
$lang['fontface3'] = 'Ðriftas 3';
$lang['fontsize1'] = 'Ðrifto dydis 1';
$lang['fontsize2'] = 'Ðrifto dydis 2';
$lang['fontsize3'] = 'Ðrifto dydis 3';
$lang['fontcolor1'] = 'Ðrifto spalva 1';
$lang['fontcolor2'] = 'Ðrifto spalva 2';
$lang['fontcolor3'] = 'Ðrifto spalva 3';
$lang['span_class1'] = 'Tarpo (span) klasë 1';
$lang['span_class2'] = 'Tarpo (span) klasë 2';
$lang['span_class3'] = 'Tarpo (span) klasë 3';
$lang['img_poll_size'] = 'Apklausos paveikslëliø dydis [piksel.]';
$lang['img_pm_size'] = 'Privaèiø þinuèiø paveikslëlio dydis [piksel.]';


//
// Install Process
//
$lang['Welcome_install'] = 'Sveiki atvykæ á phpBB ádiegimo puslapá';
$lang['Initial_config'] = 'Pagrindiniai nustatymai';
$lang['DB_config'] = 'Duomenø bazës nustatymai';
$lang['Admin_config'] = 'Administraciniai nustatymai';
$lang['continue_upgrade'] = 'Kai tik atsisiøsite senà konfigûraciná failà spauskite \'Tæsti atnaujinimà\' mygtukà. Ðá failà turësite nusiøsti atgal á serverá kai tik atnaujinimo procesas bus baigtas.';
$lang['upgrade_submit'] = 'Tæsti atnaujinimà';

$lang['Installer_Error'] = 'Diegimo metu ávyko klaida';
$lang['Previous_Install'] = 'Aptiktas senas ádiegimo procesas';
$lang['Install_db_error'] = 'Atnaujinant duomenø bazæ ávyko klaida';

$lang['Re_install'] = 'Jûs nebaigëte ankstesnio ádiegimo proceso. <br /><br />Jeigu norite ádiegti phpBB 2 ið naujo, paspauskite mygtukà Yes apaèioje. Ásidëmëkite kad taip jûs sunaikinsite visus senus duomenis, bei nustatymus.<br /><br />Prieð paspausdami Yes dar kartà pagalvokite ar teisingai elgiatës!';

$lang['Inst_Step_0'] = 'Dëkojame kad naudojatës phpBB 2. Uþpildykite þemiau esanèius laukus. Ásidëmëkite, kad duomenø bazë á kurià diegiate jau turi egzistuoti. Jeigu naudojate ODBC, pvz. MS Access, pats metas bûtø sukurti DSN savo duomenø bazei.';

$lang['Start_Install'] = 'Pradëti ádiegimà';
$lang['Finish_Install'] = 'Pabaigti ádiegimà';

$lang['Default_lang'] = 'Pagrindinë diskusijø lentos kalba';
$lang['DB_Host'] = 'Duomenø bazës serveris (DSN)';
$lang['DB_Name'] = 'Duomenø bazës pavadinimas';
$lang['DB_Username'] = 'Duombazës vartotojo vardas';
$lang['DB_Password'] = 'Duombazës slaptaþodis';
$lang['Database'] = 'Duomenø bazë';
$lang['Install_lang'] = 'Pasirinkite ádiegimo kalbà';
$lang['dbms'] = 'Duomenø bazës tipas';
$lang['Table_Prefix'] = 'Duomenø bazës lenteliø prefiksas';
$lang['Admin_Username'] = 'Administratoriaus vartotojo vardas';
$lang['Admin_Password'] = 'Administratoriaus slaptaþodis';
$lang['Admin_Password_confirm'] = 'Administratoriaus slaptaþodis [ dar kartà ]';

$lang['Inst_Step_2'] = 'Administratoriaus vartotojo vardas sukurtas. Pagrindiniø parametrø diegimas baigtas. Dabar galite pakeisti kai kuriuos papildomus pagrindinius parametrus. Dëkojame kad naudojatës phpBB 2.';

$lang['Unwriteable_config'] = 'Jûsø konfigûracijos failas yra tik skaitymui. Paspaudæ mygtukà apaèioje galite atsisiøsti jo kopijà. Jûs turite nusiøsti já á phpBB 2 pagrindiná katalogà. Tai padaræ prisijunkite su administratoriaus slaptaþodþiu prie diskusijø lentos ir aplankykite administratoriaus meniu, kur galësite pakeisti kai kuriuos papildomus nustatymus. Dëkojame kad naudojatës phpBB 2.';
$lang['Download_config'] = 'Atsisiøsti konfigûraciná failà';

$lang['ftp_choose'] = 'Pasirinkite atsisiuntimo bûdà';
$lang['ftp_option'] = '<br />Kadangi ðioje PHP versijoje yra ájungti FTP plëtiniai, galite pabandyti automatiðkai nusiøsti konfigûraciná failà á jo vietà..';
$lang['ftp_instructs'] = 'Jûs pasirinkote konfigûracinio failo siuntimà per FTP. Uþpildykite reikiamus laukus þemiau.';
$lang['ftp_info'] = 'Áveskite savo FTP duomenis';
$lang['Attempt_ftp'] = 'Pabandyti nusiøsti konfigûraciná failà á vietà';
$lang['Send_file'] = 'Tiesiog atsiøsti failà man ir að nusiøsiu já pats';
$lang['ftp_path'] = 'FTP kelias iki phpBB 2';
$lang['ftp_username'] = 'FTP vartotojo vardas';
$lang['ftp_password'] = 'FTP slaptaþodis';
$lang['Transfer_config'] = 'Pradëti procesà';
$lang['NoFTP_config'] = 'Nusiøsti failo nepavyko. Atsisiøskite konfigûraciná failà ir nusiøskite já á vietà patys.';

$lang['Install'] = 'Ádiegti';
$lang['Upgrade'] = 'Atnaujinti';


$lang['Install_Method'] = 'Pasirinkite ádiegimo bûdà';

$lang['Install_No_Ext'] = 'PHP konfigûracija nepalaiko jûsø pasirinkto duomenø bazës tipo';

$lang['Install_No_PCRE'] = 'phpBB2 reikalauja PCRE PHP modulio. Jûsø PHP konfigûracija nepalaiko ðio modulio!';

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