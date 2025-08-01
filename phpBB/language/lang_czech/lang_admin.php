<?php
/***************************************************************************
 *                            lang_admin.php [Czech]
 *                            ----------------------
 *     characterset         : Windows-1250
 *     phpBB version        : 2.0.2
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     translation          : azu@atmplus.cz
 *                          : emilio@emilio.cz
 *     www                  : http://phpbb.atmplus.cz
 *
 *     $Id: lang_admin.php,v 1.1.2.1 2002/08/23 19:20:51 psotfx Exp $
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
$lang['General'] = "Obecné";
$lang['Users'] = "Uživatelé";
$lang['Groups'] = "Skupiny";
$lang['Forums'] = "Fórum";
$lang['Styles'] = "Styly";

$lang['Configuration'] = "Konfigurace";
$lang['Permissions'] = "Svolení";
$lang['Manage'] = "Administrace";
$lang['Disallow'] = "Nepovolená jména";
$lang['Prune'] = "Proèištìní";
$lang['Mass_Email'] = "Hromadný e-mail";
$lang['Ranks'] = "Hodnocení";
$lang['Smilies'] = "Emotikony (smajlíky)";
$lang['Ban_Management'] = "Zakázání vstupu";
$lang['Word_Censor'] = "Cenzura slov";
$lang['Export'] = "Exportovat";
$lang['Create_new'] = "Vytvoøit";
$lang['Add_new'] = "Pøidat";
$lang['Backup_DB'] = "Zálohovat databázi";
$lang['Restore_DB'] = "Obnovit databázi";


//
// Index
//
$lang['Admin'] = "Administrace";
$lang['Not_admin'] = "Nemáte oprávnìní k administraci tohoto fóra";
$lang['Welcome_phpBB'] = "Vítejte na phpBB";
$lang['Admin_intro'] = "Dìkujeme že jste si zvolil(a) phpBB jako øešení pro vaše fórum. Tato stránka slouží k rychlému zobrazení rùzných statistik vašeho fóra. Pokud se budete chtít vrátit zpìt na tuto stránku kliknìte na odkaz <u>Obsah administrace</u> v levém panelu. Pro návrat na obsah vašeho fóra, kliknìte na logo fóra umístìném též na levém panelu. Ostatní odkazy na levém panelu této stránky vás dovedou k jednotlivým položkám možného nastavení fóra dle vašich požadavkù, každá stránka obsahuje návod jak použít danou funkci.";
$lang['Main_index'] = "Obsah fóra";
$lang['Forum_stats'] = "Statistiky fóra";
$lang['Admin_Index'] = "Obsah administrace";
$lang['Preview_forum'] = "Náhled na fórum";

$lang['Click_return_admin_index'] = "Kliknìte %szde%s pro návrat na obsah administrace";

$lang['Statistic'] = "Statistiky";
$lang['Value'] = "Hodnota";
$lang['Number_posts'] = "Poèet pøíspìvkù";
$lang['Posts_per_day'] = "Pøíspìvkù za den";
$lang['Number_topics'] = "Poèet témat";
$lang['Topics_per_day'] = "Témat za den";
$lang['Number_users'] = "Poèet uživatelù";
$lang['Users_per_day'] = "Uživatelù za den";
$lang['Board_started'] = "Fórum spuštìno";
$lang['Avatar_dir_size'] = "Velikost adresáøe s obrázky postavièek";
$lang['Database_size'] = "Velikost databáze";
$lang['Gzip_compression'] ="GZIP komprese";
$lang['Not_available'] = "Nedostupné";

$lang['ON'] = "Ano"; // This is for GZip compression
$lang['OFF'] = "Ne";


//
// DB Utils
//
$lang['Database_Utilities'] = "Databázové nástroje";

$lang['Restore'] = "Obnovení";
$lang['Backup'] = "Zálohování";
$lang['Restore_explain'] = "Tato funkce je urèena k úplnému obnovení všech databázových tabulek phpBB fóra z uložených souborù. Jestliže to váš server podporuje, mùžete použít GZIP komprimované textové soubory a ty pak budou automaticky dekomprimovány. <b>POZOR</b> Tímto budou pøepsána veškerá existující data. Obnovení potøebuje delší èas na zpracování, proto prosím neodcházejte z této stránky dokud nebude vše dokonèeno.";
$lang['Backup_explain'] = "Tato funkce je urèena ke kompletní záloze dat phpBB fóra. Jestliže používáte nìkteré další tabulky spoleènì s phpBB databází, doporuèujeme je též zazálohovat, zadejte proto prosím názvy tabulek a oddìlte je oddìlovaèem (,). Jestliže to váš server podporuje, mùžete použít GZIP kompresy dat pro zmenšení velikosti souborù pøed jejich stažením do vašeho poèítaèe.";

$lang['Backup_options'] = "Nastavení zálohy";
$lang['Start_backup'] = "Spustit zálohování";
$lang['Full_backup'] = "Kompletní záloha";
$lang['Structure_backup'] = "Zálohovat pouze strukturu";
$lang['Data_backup'] = "Zálohovat pouze data";
$lang['Additional_tables'] = "Další tabulky";
$lang['Gzip_compress'] = "GZIP komprese souborù";
$lang['Select_file'] = "Zvolit soubor";
$lang['Start_Restore'] = "Spustit obnovení";

$lang['Restore_success'] = "Databáze byla úspìšnì obnovena.<br><br>Vaše fórum by nyní mìlo být ve stavu pøed provedením zálohy.";
$lang['Backup_download'] = "Prosím vyèkejte zaèátku stahování";
$lang['Backups_not_supported'] = "Lituji, ale zálohování databáze není v souèasné dobì ve vešem databázovém systému podporováno";

$lang['Restore_Error_uploading'] = "Vyskytla se chyba pøi nahrávání souboru zálohy";
$lang['Restore_Error_filename'] = "Vyskytl se problém s názvem souboru, zkuste jiný";
$lang['Restore_Error_decompress'] = "Nebylo možné dekomprimovat GZIP soubor, použijte textový soubor";
$lang['Restore_Error_no_file'] = "Nebyl nahrán žádný soubor";


//
// Auth pages
//
$lang['Select_a_User'] = "Zvolit uživatele";
$lang['Select_a_Group'] = "Zvolit skupinu";
$lang['Select_a_Forum'] = "Zvolit fórum";
$lang['Auth_Control_User'] = "Uživatelská oprávnìní";
$lang['Auth_Control_Group'] = "Oprávnìní skupiny";
$lang['Auth_Control_Forum'] = "Oprávnìní fóra";
$lang['Look_up_User'] = "Zvolit uživatele";
$lang['Look_up_Group'] = "Zvolit skupinu";
$lang['Look_up_Forum'] = "Zvolit fórum";

$lang['Group_auth_explain'] = "Zde mùžete mìnit oprávnìní a pøiøadit moderování skupinì uživatelù. Nezapomeòte pøed zmìnou oprávnìní aby skupina oprávnìných mìla stále povolen vstup uživatele na fórum.";
$lang['User_auth_explain'] = "Zde mùžete mìnit oprávnìní a pøiøadit moderování zvolenému uživateli. Nezapomeòte pøed zmìnou oprávnìní aby skupina oprávnìných mìla stále povolen vstup uživatele na fórum.";
$lang['Forum_auth_explain'] = "Zde mùžete nastavit úroveò zabezpeèení fóra. Mùžete zvolit základní nebo rozšíøený mód pro tuto èinnost. Rozšíøený mód nabízí mnohem vìtší škálu možností pro nastavení fóra. Pamatujte, že pøed zmìnou zabezpeèení fóra by se na fóru nemìli provádìt jiné operace.";

$lang['Simple_mode'] = "Základní režim";
$lang['Advanced_mode'] = "Rozšíøený režim";
$lang['Moderator_status'] = "Moderátor";

$lang['Allowed_Access'] = "Pøístup povolen";
$lang['Disallowed_Access'] = "Pøístup zamítnout";
$lang['Is_Moderator'] = "Je moderátorem";
$lang['Not_Moderator'] = "Není moderátorem";

$lang['Conflict_warning'] = "Varování, autorizaèní konflikt";
$lang['Conflict_access_userauth'] = "Tento uživatel má požadovaná pøístupová práva k tomuto fóru pøes èlenství ve skupinì. Mùžete povolit oprávnìní skupinì nebo odstranit tohoto uživatele ze skupiny pro úplné zabránìní požadovaných pøístupových práv.";
$lang['Conflict_mod_userauth'] = "Tento moderátorská má požadovaná práva pro toto fórum pøes èlenství ve skupinì. Mùžete povolit oprávnìní skupinì nebo odstranit tohoto uživatele ze skupiny pro úplné zabránìní požadovaných pøístupových práv.";
$lang['Conflict_access_groupauth'] = "Následující uživatel (uživatelé) mají požadovaná práva pro toto fórum pøes jejich nastavené oprávnìní. Mùžete povolit oprávnìní skupinì nebo odstranit tohoto uživatele ze skupiny pro úplné zabránìní požadovaných pøístupových práv.";
$lang['Conflict_mod_groupauth'] = "Následující uživatel (uživatelé) mají požadovaná práva pro toto fórum pøes jejich nastavené oprávnìní. Mùžete povolit oprávnìní skupinì nebo odstranit tohoto uživatele ze skupiny pro úplné zabránìní požadovaných pøístupových práv.";

$lang['Public'] = "Veøejný";
$lang['Private'] = "Soukromý";
$lang['Registered'] = "Registrovaný";
$lang['Administrators'] = "Administrátor";
$lang['Hidden'] = "skrytý";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "Všichni";
$lang['Forum_REG'] = "Registrovaní";
$lang['Forum_PRIVATE'] = "Soukromý";
$lang['Forum_MOD'] = "Moderátor";
$lang['Forum_ADMIN'] = "Administrátor";

$lang['View'] = "Zobrazit";
$lang['Read'] = "Èíst";
$lang['Post'] = "Odeslat";
$lang['Reply'] = "Odpovìdìt";
$lang['Edit'] = "Upravit";
$lang['Delete'] = "Odstranit";
$lang['Sticky'] = "Dùležité";
$lang['Announce'] = "Oznámení";
$lang['Vote'] = "Hlasování";
$lang['Pollcreate'] = "Hlas pøidán";

$lang['Permissions'] = "Oprávnìní";
$lang['Simple_Permission'] = "Základní oprávnìní";

$lang['User_Level'] = "Uživatelská úroveò";
$lang['Auth_User'] = "Uživatel";
$lang['Auth_Admin'] = "Administrátor";
$lang['Group_memberships'] = "Èlenství uživatelské skupiny";
$lang['Usergroup_members'] = "Tato skupina má následující èleny";

$lang['Forum_auth_updated'] = "Oprávnìní fóra aktualizováno";
$lang['User_auth_updated'] = "Uživatelské oprávnìní aktualizováno";
$lang['Group_auth_updated'] = "Oprávnìní skupiny aktualizováno";

$lang['Auth_updated'] = "Oprávnìní bylo aktualizováno";
$lang['Click_return_userauth'] = "Kliknìte %szde%s pro návrat do uživatelského oprávnìní";
$lang['Click_return_groupauth'] = "Kliknìte %szde%s pro návrat do oprávnìní skupiny";
$lang['Click_return_forumauth'] = "Kliknìte %szde%s pro návrat na oprávnìní fóra";


//
// Banning
//
$lang['Ban_control'] = "Zakázání vstupu";
$lang['Ban_explain'] = "Zde mùžete zakázat vstup zvoleným uživatelùm. Mùžete zakázat konkrétního uživatele nebo rozsah IP adres nebo jméno poèítaèe. Touto metodou ochráníte vaše fórum proti vstupu nežádoucích uživatelù na stránky fóra. Proti registraci uživatele pod jiným jménem mùžete zakázat jeho e-mailovou adresu.";
$lang['Ban_explain_warn'] = "Dávejte si prosím pozor pøi zadávání rozsahu IP adres zda jsou všechny adresy od zaèátku do konce v seznamu. Doporuèuje se aby byl seznam uložených IP adres v databázi co nejmenší, proto se pokuste radìji použít znaku \"*\" pro specifikaci namísto zadávání rozsahu IP adres. Pokud je pøesto nutno zadat rozsah IP adres, pokuste se aby byl seznam co nejkratší.";

$lang['Select_username'] = "Zvolte uživatele";
$lang['Select_ip'] = "Zvolte IP";
$lang['Select_email'] = "Zvolte e-mailovou adresu";

$lang['Ban_username'] = "Zakázání vstupu zadaným uživatelùm";
$lang['Ban_username_explain'] = "Chcete-li pøidat do zakázaných nìkterého uživatele, zadejte zde jeho jméno, pøípadnì jej vyhledejte ze seznamu registrovaných uživatelù.";

$lang['Ban_IP'] = "Zakázání vstupu dle IP adresy nebo jména poèítaèe";
$lang['IP_hostname'] = "IP adresa nebo jméno poèítaèe";
$lang['Ban_IP_explain'] = "Zde mùžete zadat název poèítaèe, èi IP adresy, kterým chcete zakázat vstup. Jednotlivé adresy èi jména od sebe oddìlte oddìlovèem. Chcete-li zadat rozsah IP adres, oddìlte je od sebe znakem \"-\". Mùžete použít i znak \"*\" pro nahrazení èásti øetìzce.";

$lang['Ban_email'] = "Zakázání vstupu dle e-mailových adres";
$lang['Ban_email_explain'] = "Zde mùžete zadat seznam emailových adres, kterým chcete zamezit vstup, jednotlivé adresy od sebe oddìlte oddìlovaèem. Mùžete použít i znak \"*\" pro nahrazení èásti adresy, napø. *@hotmail.com";

$lang['Unban_username'] = "Vyjmutí uživatelù ze seznamu zakázaných";
$lang['Unban_username_explain'] = "Jestliže chcete vyjmout nìkteré uživatele z tohoto seznamu, oznaète je pomocí myši èi klávesnice a potvrïte odesláním.";

$lang['Unban_IP'] = "Vyjmutí IP adres ze seznamu zakázaných";
$lang['Unban_IP_explain'] = "Jestliže chcete vyjmout nìkteré IP adresz z tohoto seznamu, oznaète je pomocí myši èi klávesnice a potvrïte odesláním.";

$lang['Unban_email'] = "Vyjmutí e-mailových adres ze seznamu zakázaných";
$lang['Unban_email_explain'] = "Jestliže chcete vyjmout nìkteré e-mailové adresy z tohoto seznamu, oznaète je pomocí myši èi klávesnice a potvrïte odesláním.";

$lang['No_banned_users'] = "Žádní zakázaní uživatelé";
$lang['No_banned_ip'] = "Žádné zakázané IP adresy";
$lang['No_banned_email'] = "Žádné zakázané e-mail adresy";

$lang['Ban_update_sucessful'] = "Seznam zakázaných uživatelù byl úspìšnì aktualizován";
$lang['Click_return_banadmin'] = "Kliknìte %szde%s pro návrat do ovládacího panelu zakázaní vstupu";


//
// Configuration
//
$lang['General_Config'] = "Konfigurace";
$lang['Config_explain'] = "Níže uvedené položky vám umožní nastavit fórum dle vašich požadavkù. Pro nastavení uživatelù a fóra používejte odkazy v levé èásti stránky.";

$lang['Click_return_config'] = "Kliknìte %szde%s pro návrat do konfigurace";

$lang['General_settings'] = "Obecné nastavení fóra";
$lang['Server_name'] = "Jméno domény";
$lang['Server_name_explain'] = "Doménové jméno tohoto fóra bìží na";
$lang['Script_path'] = "Cesta ke skriptùm";
$lang['Script_path_explain'] = "Cesta ke skriptùm phpBB, relativní umístìní v doménì";
$lang['Server_port'] = "Port serveru";
$lang['Server_port_explain'] = "Port na kterém bìží váš server, standardnì 80";
$lang['Site_name'] = "Jméno fóra";
$lang['Site_desc'] = "Popis fóra";
$lang['Board_disable'] = "Zablokovat fórum";
$lang['Board_disable_explain'] = "Tímto znepøístupníte fórum pro uživatele. Neodhlašujte se pokud jste znepøístupnil fórum, jinak se nebudete moci nalogovat zpìt!";

$lang['Acct_activation'] = "Zpùsob aktivace úètu";
$lang['Acc_None'] = "Žádný"; // These three entries are the type of activation
$lang['Acc_User'] = "Uživatelem";
$lang['Acc_Admin'] = "Administrátorem";

$lang['Abilities_settings'] = "Základní nastavení pro uživatele a fórum";
$lang['Max_poll_options'] = "Maximální hodnota pøi hlasování";
$lang['Flood_Interval'] = "Ochranný interval";
$lang['Flood_Interval_explain'] = "Poèet vteøin, po které musí uživatel poèkat mezi pøíspìvky";
$lang['Board_email_form'] = "E-mail uživatele pøes toto fórum";
$lang['Board_email_form_explain'] = "Umožòuje zasílání e-mailù jiným uživatelùm pøes toto fórum";
$lang['Topics_per_page'] = "Témat na stránku";
$lang['Posts_per_page'] = "Pøíspìvkù na stránku";
$lang['Hot_threshold'] = "Pøíspìvky do pøípustné hranice";
$lang['Default_style'] = "Výchozí vzhled";
$lang['Override_style'] = "Nahradit uživatelem zvolený vzhled";
$lang['Override_style_explain'] = "Použije výchozí vzhled namísto zvoleného uživatelem";
$lang['Default_language'] = "Výchozí jazyk";
$lang['Date_format'] = "Formát datumu";
$lang['System_timezone'] = "Èasové pásmo fóra";
$lang['Enable_gzip'] = "Povolit GZIP kompresi";
$lang['Enable_prune'] = "Povolit proèištìní fóra";
$lang['Allow_HTML'] = "Povolit HTML";
$lang['Allow_BBCode'] = "Povolit znaèky";
$lang['Allowed_tags'] = "Povolené HTML znaèky";
$lang['Allowed_tags_explain'] = "oddìlte znaèky oddìlovaèem (,)";
$lang['Allow_smilies'] = "Povolit emotikony (smajlíky)";
$lang['Smilies_path'] = "Cesta k umístìní smajlíkù";
$lang['Smilies_path_explain'] = "Cesta mimo váš phpBB koøenový adresáø, pø.: images/smilies";
$lang['Allow_sig'] = "Povolit podpisy";
$lang['Max_sig_length'] = "Maximální délka podpisu";
$lang['Max_sig_length_explain'] = "Maximální poèet znakù uživatelova podpisu";
$lang['Allow_name_change'] = "Povolit zmìnu uživatelského jména";

$lang['Avatar_settings'] = "Nastavení obrázkù postavièek";
$lang['Allow_local'] = "Povolit galerii postavièek";
$lang['Allow_remote'] = "Povolit vzdálené obrázky postavièek";
$lang['Allow_remote_explain'] = "Obrázek postavièky propojen na jiný WWW server";
$lang['Allow_upload'] = "Povolit pøihrávání obrázkù postavièek";
$lang['Max_filesize'] = "Maximální velikost souboru s obrázkem postavièky";
$lang['Max_filesize_explain'] = "Pro pøihrávání souborù obrázkù postavièek";
$lang['Max_avatar_size'] = "Maximální rozmìry obrázku postavièky";
$lang['Max_avatar_size_explain'] = "(výška x šíøka v bodech)";
$lang['Avatar_storage_path'] = "Cesta k ukládání obrázkù postavièek";
$lang['Avatar_storage_path_explain'] = "Cesta mimo váš phpBB koøenový adresáø, pø.: images/avatars";
$lang['Avatar_gallery_path'] = "Cesta ke galerii obrázkù postavièek";
$lang['Avatar_gallery_path_explain'] = "Cesta mimo váš phpBB koøenový adresáø pro pøednastavené obrázky, pø.: images/avatars/gallery";

$lang['COPPA_settings'] = "COPPA nastavení";
$lang['COPPA_fax'] = "COPPA faxové èíslo";
$lang['COPPA_mail'] = "COPPA mailové adresy";
$lang['COPPA_mail_explain'] = "Toto je seznam adres na které budou rodièe zasílat COPPA registraèní formuláø";

$lang['Email_settings'] = "Nastavení e-mailù";
$lang['Admin_email'] = "Administrátorova e-mailová adresa:";
$lang['Email_sig'] = "Podpis e-mailu";
$lang['Email_sig_explain'] = "Tento text bude pøipojen ke všem e-mailùm odeslaným z tohoto fóra";

$lang['Use_SMTP'] = "Použít SMTP Server pro e-mail";
$lang['Use_SMTP_explain'] = "Zvolte Ano jestliže chcete odesílat e-maily pøes jméno serveru namísto lokální mail funkce.";
$lang['SMTP_server'] = "Adresa SMTP serveru";
$lang['SMTP_username'] = "SMTP úèet";
$lang['SMTP_username_explain'] = "Zadejte pouze v pøípadì, že to váš SMTP server vyžaduje";
$lang['SMTP_password'] = "SMTP heslo";
$lang['SMTP_password_explain'] = "Zadejte pouze v pøípadì, že to váš SMTP server vyžaduje";

$lang['Disable_privmsg'] = "Soukromé zprávy";
$lang['Inbox_limits'] = "Max. poèet pøíspìvkù ve složce doruèené";
$lang['Sentbox_limits'] = "Max. poèet pøíspìvkù ve složce odeslané";
$lang['Savebox_limits'] = "Max. poèet pøíspìvkù ve složce uložené";

$lang['Cookie_settings'] = "Nastavení Cookie";
$lang['Cookie_settings_explain'] = "Toto detailní nastavení definuje jak budou zasílány cookies ve vašem prohlížeèi. Doporuèujeme ponechat výchozí hodnoty nastavení cookie ale je možno zmìnit hodnoty dle vašich požadavkù, nastavení se projeví až po pøíštím pøihlášení.";
$lang['Cookie_domain'] = "Doména Cookie";
$lang['Cookie_name'] = "Jméno Cookie";
$lang['Cookie_path'] = "Cesta k Cookie";
$lang['Cookie_secure'] = "Zabezpeèení Cookie";
$lang['Cookie_secure_explain'] = "Jestliže váš server bìží pøes SSL nastavte na povoleno, jesliže ne tak nastavte zakázáno";
$lang['Session_length'] = "Délka platnosti Session [ vteøin ]";
$lang['cookie_consent_enable'] = 'Enable cookie consent notice?';

//
// Forum Management
//
$lang['Forum_admin'] = "Administratce fóra";
$lang['Forum_admin_explain'] = "Z tohoto panelu mùžete pøidávat, odstranit, upravovat, tøídit a synchronizovat kategorie a fóra";
$lang['Edit_forum'] = "Úprava fóra";
$lang['Create_forum'] = "Vytvoøit nové fórum";
$lang['Create_category'] = "vytvoøit novou kategorii";
$lang['Remove'] = "Vyjmout";
$lang['Action'] = "Akce";
$lang['Update_order'] = "Aktualizovat instrukce";
$lang['Config_updated'] = "Zmìna konfigurace fóra byla úspìšnì provedena";
$lang['Edit'] = "Upravit";
$lang['Delete'] = "Odstranit";
$lang['Move_up'] = "pøesunout nahoru";
$lang['Move_down'] = "pøesunout dolu";
$lang['Resync'] = "Synchronizovat";
$lang['No_mode'] = "Mód nebyl pøiøazen";
$lang['Forum_edit_delete_explain'] = "Níže uvedený formuláø vám umožní úpravy obecného nastavení fóra. Pro nastavení uživatelù a fóra používejte odkazy v levé èásti stránky.";

$lang['Move_contents'] = "Pøesunout veškerý obsah";
$lang['Forum_delete'] = "Odstranit fórum";
$lang['Forum_delete_explain'] = "Níže uvedený formuláø vám umožní odstranit fóra èi kategorie a rozhodnout kam chcete dát všechna témata která jsou v nìm obsaženy.";

$lang['Status_locked'] = 'Zamknuto';
$lang['Status_unlocked'] = 'Odemknuto';
$lang['Forum_settings'] = "Obecné nastavení fóra";
$lang['Forum_name'] = "Jméno fóra";
$lang['Forum_desc'] = "Popis";
$lang['Forum_status'] = "Stav fóra";
$lang['Forum_pruning'] = "Automatické proèištìní";

$lang['prune_freq'] = "Kontrolovat starší témata každých";
$lang['prune_days'] = "Odstranit témata která jsou starší";
$lang['Set_prune_data'] = "Chcete nastavit povolení automatického proèištìní tohoto fóra, ale nemáte nastavenu èetnost nebo poèet dní. Vrate se prosím zpìt a zadejte požadované hodnoty.";

$lang['Move_and_Delete'] = "Pøesunout a odstranit";

$lang['Delete_all_posts'] = "Odstranit všechny pøíspìvky";
$lang['Nowhere_to_move'] = "Sem to nelze pøesunout";

$lang['Edit_Category'] = "Úprava kategorie";
$lang['Edit_Category_explain'] = "Použijte rento formuláø pro úpravu jména kategorie.";

$lang['Forums_updated'] = "Fórum a informace o skupinì byly aktualizovány";

$lang['Must_delete_forums'] = "Musíte odstranit všechna fóra ještì pøed odstranìním této kategorie";

$lang['Click_return_forumadmin'] = "Kliknìte %szde%s pro návrat do administrace fóra";


//
// Smiley Management
//
$lang['smiley_title'] = "Úprava emotikon (smajlíkù)";
$lang['smile_desc'] = "Na této stránce mùžete pøidávat, odebírat a upravovat emotikony (smajlíky), které mohou Vaši uživatelé používat v pøíspìvcích a soukromých zprávách.";

$lang['smiley_config'] = "Nastavení smajlíku";
$lang['smiley_code'] = "Kód smajlíku";
$lang['smiley_url'] = "Grafický soubor smajlíku";
$lang['smiley_emot'] = "Výraz smajlíku";
$lang['smile_add'] = "Pøidej nový smajlík";
$lang['Smile'] = "Smajlík";
$lang['Emotion'] = "Výraz";

$lang['Select_pak'] = "Vyberte (.pak) soubor";
$lang['replace_existing'] = "Nahradit dosavadní smajlík";
$lang['keep_existing'] = "Keep Existing Smiley";
$lang['smiley_import_inst'] = "Rozbalte kolekci smajlíkù a nahrajte všechny soubory do pøíslušného adresáøe smajlíkù pro instalaci.  Pak vyberte správnou informaci v tomto formuláøi k importování kolekce smajlíkù.";
$lang['smiley_import'] = "Import kolekce smajlíkù";
$lang['choose_smile_pak'] = "Vyberte soubor smajlíkù (.pak)";
$lang['import'] = "Importuj smajlíky";
$lang['smile_conflicts'] = "Co udìlat v pøípadì konfliktù ?";
$lang['del_existing_smileys'] = "Pøed importováním smažte dosavadní smajlíky";
$lang['import_smile_pack'] = "Importovat kolekci smajlíkù";
$lang['export_smile_pack'] = "Vytvoøit kolekci smajlíkù";
$lang['export_smiles'] = "Pokud chcete vytvoøit kolekci smajlíkù z dosud užívaných smajlíkù, kliknìte %szde%s a stáhnìte soubor smiles.pak. Pojmenujte tento pøíslušný soubor, ale nezapomeòte zachovat pøíponu (.pak). Pak vytvoøte komprimovaný soubor všech vašich smajlíkù i s vaším souborem nastavení .pak";

$lang['smiley_add_success'] = "Smajlík byl úspìšnì pøidán !";
$lang['smiley_edit_success'] = "Smajlík byl úspìšnì zmìnìn !";
$lang['smiley_import_success'] = "Soubor smajlíkù byl úspìšnì importován !";
$lang['smiley_del_success'] = "Smajlík byl úspìšnì odstranìn";
$lang['Click_return_smileadmin'] = "Kliknìte %szde%s k návratu na administraci smajlíkù";


//
// User Management
//
$lang['User_admin'] = "Uživatelská administrace";
$lang['User_admin_explain'] = "Zde mùžete zmìnit informaci o uživateli a nìkterá specifická nastavení. K úpravì práv použijte uživatele a skupinový povolovací systém.";

$lang['Look_up_user'] = "Zvolit uživatele";

$lang['Admin_user_fail'] = "Nelze zmìnit nastavení uživatele.";
$lang['Admin_user_updated'] = "Zmìna nastavení uživatele probìhla úspìšnì.";
$lang['Click_return_useradmin'] = "Kliknìte %szde%s k návratu do Uživatelské administrace";

$lang['User_delete'] = "Odstranit tohoto uživatele";
$lang['User_delete_explain'] = "Zde smažete tohoto uživatele. Nelze vzít zpìt !";
$lang['User_deleted'] = "Uživatel úspìšnì odstranìn.";

$lang['User_status'] = "Uživatel je aktivní";
$lang['User_allowpm'] = "Mùže posílat soukromé zprávy";
$lang['User_allowavatar'] = "Mùže zobrazovat postavièky";

$lang['Admin_avatar_explain'] = "Zde mùžete vidìt a odstranit souèasnou uživatelovu postavièku.";

$lang['User_special'] = "Zvláštní oblasti administrátorských nastavení";
$lang['User_special_explain'] = "Tyto oblasti nemùžou být upravovány uživateli. Zde mùžete nastavit jejich zaøazení a další oblasti, které nejsou uživatelùm pøiøazeny.";


//
// Group Management
//
$lang['Group_administration'] = "Skupinová administrace";
$lang['Group_admin_explain'] = "Z tohoto panelu mùžete spravovat všechny uživatelské skupiny, mùžete odstranit, vytvoøit a mìnit souèasné skupiny. Mùžete vybírat moderátory, zamknout otevøené/uzavøené skupiny a nastavit jméno a popis skupiny";
$lang['Error_updating_groups'] = "Pøi nahrávání skupin došlo k chybì";
$lang['Updated_group'] = "Skupina byla úspìšnì nahrána";
$lang['Added_new_group'] = "Nová skupina byla úspìšnì vytvoøena";
$lang['Deleted_group'] = "Skupina byla úspìšnì odstranìna";
$lang['New_group'] = "Vytvoøit novou skupinu";
$lang['Edit_group'] = "Zmìnit skupinu";
$lang['group_name'] = "Jméno skupiny";
$lang['group_description'] = "Popis skupiny";
$lang['group_moderator'] = "Moderátor skupiny";
$lang['group_status'] = "Nastavení skupiny";
$lang['group_open'] = "Otevøená skupina";
$lang['group_closed'] = "Uzavøená skupina";
$lang['group_hidden'] = "Skrytá skupina";
$lang['group_delete'] = "odstranit skupinu";
$lang['group_delete_check'] = "odstranit tuto skupinu";
$lang['submit_group_changes'] = "Odeslat zmìny";
$lang['reset_group_changes'] = "Obnovit zmìny";
$lang['No_group_name'] = "Musíte zadat jméno pro tuto skupinu";
$lang['No_group_moderator'] = "Musíte zadat moderátora pro tuto skupinu";
$lang['No_group_mode'] = "Musíte zadat nastavení této skupiny, otevøená nebo uzavøená.";
$lang['No_group_action'] = "Nebyla vybrána žádná akce";
$lang['delete_group_moderator'] = "odstranit moderátora pùvodní skupiny ?";
$lang['delete_moderator_explain'] = "Pokud mìníte moderátora skupiny, zatrhnìte toto políèko k odstranìní pùvodního moderátora z této skupiny.  V opaèném pøípadì se tento uživatel stane bìžným èlenem této skupiny.";
$lang['Click_return_groupsadmin'] = "Kliknìte %sude%s k návratu do Skupinové administrace.";
$lang['Select_group'] = "Vyberte skupinu";
$lang['Look_up_group'] = "Vyhledejte skupinu";


//
// Prune Administration
//
$lang['Forum_Prune'] = "Proèištìní fóra";
$lang['Forum_Prune_explain'] = "Tato funkce odstraní všechna témata, ke kterým nebyly pøidány pøíspìvky za Vámi zadaný poèet dní. Pokud nezadáte poèet dní, pak budou odstranìna všechna témata. nebudou odstranìna témata, v nichž bìží hlasování a stejnì tak se neodstraní oznámení. Tato témata budete muset odstranit ruènì.";
$lang['Do_Prune'] = "Proèistit";
$lang['All_Forums'] = "Všechna fóra";
$lang['Prune_topics_not_posted'] = "Proèistit témata bez odpovìdi starší";
$lang['Topics_pruned'] = "Témata proèištìna";
$lang['Posts_pruned'] = "Pøíspìvky proèištìny";
$lang['Prune_success'] = "Proèištìní fór probìhlo úspìšnì.";


//
// Word censor
//
$lang['Words_title'] = "Slovní cenzura";
$lang['Words_explain'] = "Z tohoto kontrolního panelu mùžete pøidat, zmìnit a odstranit slova, která budou automaticky cenzurována na vašich fórech. Stejnì tak nebude možné zaregistrovat uživatelská jména obsahující tyto výrazy. Hvìzdièku (*) lze použít za èást slova, takže napø. výraz 'test' vyhledá výraz 'protestovat', test* potom 'testovat' a *test slovo 'protest'.";
$lang['Word'] = "Slovo";
$lang['Edit_word_censor'] = "Zmìòte slovní cenzuru";
$lang['Replacement'] = "Náhrada";
$lang['Add_new_word'] = "Pøidejte nové slovo";
$lang['Update_word'] = "Nahrajte slovní cenzuru";

$lang['Must_enter_word'] = "Musíte vložit slovo a jeho náhradu";
$lang['No_word_selected'] = "K úpravì nebylo vybráno žádné slovo";

$lang['Word_updated'] = "Vybraná slovo bylo úspìšnì nahráno do cenzury";
$lang['Word_added'] = "Slovo bylo úspìšnì pøidáno do cenzury";
$lang['Word_removed'] = "Cenzurované slovo bylo úspìšnì odstranìno";

$lang['Click_return_wordadmin'] = "Kliknìte %szde%s k návratu do Administrace slovní cenzury";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Odtud mùžete zaslat vzkaz jakémukoliv uživateli nebo všem z vybrané skupiny. Stane se tak zasláním e-mailu na zadanou administrátorskou adresu, pøièemž uživatelùm bude zaslána slepá kopie. Pokud zasíláte vzkaz vìtší skupinì, prosím, mìjte chvilku strpení a nezastavujte akci, když se provádí. Je zcela bìžné, že hromadná korespondence trvá delší dobu a budete upozornìni, když se akce dokonèí";
$lang['Compose'] = "Napsat";

$lang['Recipients'] = "Pøíjemci";
$lang['All_users'] = "Všichni uživatelé";

$lang['Email_successfull'] = "Vaše zpráva byla odeslána";
$lang['Click_return_massemail'] = "Kliknìte %szde%s k návratu na formuláø Hromadné korespondence";


//
// Ranks admin
//
$lang['Ranks_title'] = "Administrace hodnocení";
$lang['Ranks_explain'] = "Tímto formuláøem pøidáváte, mìníte, prohlížíte a mažete hodnocení. Mùžete rovnìž vytvoøit vlastní nastavení hodnocení, která mohou být pøiøazena pøes funkci nastavení uživatele.";

$lang['Add_new_rank'] = "Pøidat nové hodnocení";

$lang['Rank_title'] = "Název hodnocení";
$lang['Rank_special'] = "Nastavit jako zvláštní hodnocení";
$lang['Rank_minimum'] = "Minimální poèet pøíspìvkù";
$lang['Rank_maximum'] = "Maximální poèet pøíspìvkù";
$lang['Rank_image'] = "Obrázek hodnocení";
$lang['Rank_image_explain'] = "Použijte tuto funkci k definování malého obrázku spojeného s daným hodnocením. Cesta mimo váš phpBB koøenový adresáø a název souboru, pø.: images/ranks/images1.gif";

$lang['Must_select_rank'] = "Musíte vybrat hodnocení";
$lang['No_assigned_rank'] = "Nebylo zadáno žádné zvláštní hodnocení";

$lang['Rank_updated'] = "Hodnocení bylo úspìšnì zmìnìno";
$lang['Rank_added'] = "Hodnocení bylo úspìšnì pøidáno";
$lang['Rank_removed'] = "Hodnocení bylo úspìšnì zrušeno";
$lang['No_update_ranks'] = "Hodnocení byla úspìšnì odstranìno, ovšem uživatelské úèty s tímto hodnocením se nezmìnily. Bude zapotøebí tato hodnocení upravit ruènì";

$lang['Click_return_rankadmin'] = "Kliknìte %szde%s na návrat do Administrace hodnocení";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Správa nepovolených uživatelských jmen";
$lang['Disallow_explain'] = "Zde mùžete spravovat uživatelská jména, která nebudou povolena k použití.  Nepovolená uživatelská jména mohou obsahovat \*\.  Upozoròujeme, že nebudete moci urèit již registrované uživatelské jméno. Nejdøíve ho musíte odstranit a následnì jej nepovolit";

$lang['Delete_disallow'] = "odstranit";
$lang['Delete_disallow_title'] = "Odstranit nepovolené uživatelské jméno";
$lang['Delete_disallow_explain'] = "Mùžete odstranit nepovolené uživatelské jméno tak, že jej vyberete ze seznamu a zmáèknete tlaèítko Odstranit";

$lang['Add_disallow'] = "Pøidat";
$lang['Add_disallow_title'] = "Pøidat nepovolené uživatelské jméno";
$lang['Add_disallow_explain'] = "Mùžete zakázat nìkterá nepovolená uživatelská jména. Tato jména si nebude moci žádný uživatel zaregistrovat. Mùžete použít i znak \"*\" pro nahrazení èásti jména";

$lang['No_disallowed'] = "Žádná nepovolená uživatelská jména";

$lang['Disallowed_deleted'] = "Nepovolené uživatelské jméno bylo úspìšnì odstranìno";
$lang['Disallow_successful'] = "Nepovolené uživatelské jméno bylo úspìšnì pøidáno";
$lang['Disallowed_already'] = "Jméno, které jste zadali, nemùže být zakázáno. Buï se již vyskytuje v tomto seznamu nebo v seznamu cenzurovaných slov, nebo existuje totožné uživatelské jméno";

$lang['Click_return_disallowadmin'] = "Kliknìte %szde%s pro návrat do Administrace nastavení nepovolených uživatelských jmen";


//
// Styles Admin
//
$lang['Styles_admin'] = "Administrace stylù";
$lang['Styles_explain'] = "Zde mùžete pøidávat, odebírat a spravovat styly (vzory a motivy) dostupné pro vaše uživatele";
$lang['Styles_addnew_explain'] = "Tento seznam obsahuje všechny motivy, které jsou dostupné pro vzory, které nyní máte. Èásti na tomto seznamu ještì nebyly nainstalovány do odpovídající databáze phpBB. Pro nainstalování kliknìte na instalaèní odkaz vedle zadání";

$lang['Select_template'] = "Vybrat vzor";

$lang['Style'] = "Styl";
$lang['Template'] = "Vzor";
$lang['Install'] = "Nainstalovat";
$lang['Download'] = "Stáhnout";

$lang['Edit_theme'] = "Upravit motiv";
$lang['Edit_theme_explain'] = "Ve spodním formuláøi mùžete upravovat nastavení pro zvolený vzor";

$lang['Create_theme'] = "Vytvoøit motiv";
$lang['Create_theme_explain'] = "Ve spodním formuláøi mùžete vytvoøit nový motiv. Pøi zadávání barev (pro které použijete hexadecimální hodnoty) neuvádìjte znak #, tzn. hodnota CCCCCC je platná, #CCCCCC nikoliv";

$lang['Export_themes'] = "Exportovat motivy";
$lang['Export_explain'] = "V tomto panelu mùžete exportovat zadání motivu pro zvolený vzor. Vyberte vzor ze spodního výbìru a skript vytvoøí konfiguraèní soubor motiv a bude jej chtít uložit do vybraného adresáøe vzorù. Pokud se mu to nepodaøí, nabídne vám možnost soubor stáhnout na disk. Aby se mohl soubor uložit, je nutné, aby byl zapisovatelný pøístup pro pøíslušný adresáø. Pro více informací se podívejte na uživatelský manuál k phpBB 2.";

$lang['Theme_installed'] = "Vybraný motiv byl úspìšnì nainstalován";
$lang['Style_removed'] = "Vybraný styl byl odstranìn z databáze. K plnému odstranìní tohoto stylu ze systému musíte odstranit pøíslušný styl z adresáøe vzorù.";
$lang['Theme_info_saved'] = "Informace ke zvolenému vzoru byly uloženy. Teï nastavte povolení na theme_info.cfg (a také vybraného adresáøi vzorù) na 'jen ke ètení'";
$lang['Theme_updated'] = "Vybraný motiv byl zmìnìn. Vyexportujte nyní nastavení nového motivu";
$lang['Theme_created'] = "Motiv vytvoøen. Vyexportujte nyní nový motiv do konfiguraèního souboru kvùli bezpeènému uložení nebo použití pro jiné pøípady";

$lang['Confirm_delete_style'] = "Jste si jisti, ,že chcete odstranit tento styl";

$lang['Download_theme_cfg'] = "Nelze zapisovat do informací konfiguraèního souboru. Kliknìte na spodní tlaèítko ke stažení souboru vaším prohlížeèem. Až jej stáhnete, mùžete jej pøesunout do adresáøe obsahujícího soubory vzorù. Pak mùžete zabalit soubory pro distribuci nebo použít jinde, když chcete";
$lang['No_themes'] = "Ke vzoru, který jste vybrali, se nevážou žádné motivy. Nový motiv vytvoøíte kliknutím na 'Vytvoøit nové' na levé stranì panelu";
$lang['No_template_dir'] = "Nelze otevøít adresáø se vzory. Možná, že jej nelze pøes server èíst nebo neexistuje";
$lang['Cannot_remove_style'] = "Nelze odstranit vybraný styl, je-li stanoven jako pùvodní pro fórum. Zmìòte, prosím,  pùvodní styl a zkuste to znovu.";
$lang['Style_exists'] = "Jméno stylu již existuje. Prosím vrate se a zvolte jiné jméno.";

$lang['Click_return_styleadmin'] = "Kliknìte %szde%s k návratu do Administrace stylù";

$lang['Theme_settings'] = "Nastavení motivu";
$lang['Theme_element'] = "Souèást vzoru";
$lang['Simple_name'] = "Jednoduchý název";
$lang['Value'] = "Hodnota";
$lang['Save_Settings'] = "Ulož nastavení";

$lang['Stylesheet'] = "Zadání stylu CSS";
$lang['Background_image'] = "Obrázek pozadí";
$lang['Background_color'] = "Barva pozadí";
$lang['Theme_name'] = "Jméno motivu";
$lang['Link_color'] = "Barva odkazu";
$lang['Text_color'] = "Barva textu";
$lang['VLink_color'] = "Barva navštíveného odkazu";
$lang['ALink_color'] = "Barva aktivního odkazu";
$lang['HLink_color'] = "Hover Link Colour";
$lang['Tr_color1'] = "Barva øádku tabulky 1";
$lang['Tr_color2'] = "Barva øádku tabulky 2";
$lang['Tr_color3'] = "Barva øádku tabulky 3";
$lang['Tr_class1'] = "Tøída øádku tabulky 1";
$lang['Tr_class2'] = "Tøída øádku tabulky 2";
$lang['Tr_class3'] = "Tøída øádku tabulky 3";
$lang['Th_color1'] = "Barva titulu tabulky 1";
$lang['Th_color2'] = "Barva titulu tabulky 2";
$lang['Th_color3'] = "Barva titulu tabulky 3";
$lang['Th_class1'] = "Table Header Class 1";
$lang['Th_class2'] = "Table Header Class 2";
$lang['Th_class3'] = "Table Header Class 3";
$lang['Td_color1'] = "Barva buòky tabulky 1";
$lang['Td_color2'] = "Barva buòky tabulky 2";
$lang['Td_color3'] = "Barva buòky tabulky 3";
$lang['Td_class1'] = "Table Cell Class 1";
$lang['Td_class2'] = "Table Cell Class 2";
$lang['Td_class3'] = "Table Cell Class 3";
$lang['fontface1'] = "Vzhled písma 1";
$lang['fontface2'] = "Vzhled písma 2";
$lang['fontface3'] = "Vzhled písma 3";
$lang['fontsize1'] = "Velikost písma 1";
$lang['fontsize2'] = "Velikost písma 2";
$lang['fontsize3'] = "Velikost písma 3";
$lang['fontcolor1'] = "Barva písma 1";
$lang['fontcolor2'] = "Barva písma 2";
$lang['fontcolor3'] = "Barva písma 3";
$lang['span_class1'] = "Rozpìtí tøíd 1";
$lang['span_class2'] = "Rozpìtí tøíd 2";
$lang['span_class3'] = "Rozpìtí tøídy 3";
$lang['img_poll_size'] = "Velikost obrázku pro hlasování [v pixelech]";
$lang['img_pm_size'] = "Velikost obrázku pro soukromou zprávu [v pixelech]";


//
// Install Process
//
$lang['Welcome_install'] = "Vítejte v instalaci phpBB 2";
$lang['Initial_config'] = "Základní nastavení";
$lang['DB_config'] = "Nastavení databáze";
$lang['Admin_config'] = "Administrátorské nastavení";
$lang['continue_upgrade'] = "Po té, co jste stáhli konfiguraèní soubor na váš disk mùžete spodním tlaèítkem 'Pokraèovat v instalaci novìjší verze'.Poèkejte s nahráním konfiguraèního souboru dokud není ukonèena instalace novìjší verze.";
$lang['upgrade_submit'] = "Pokraèujte v instalování novìjší verze";

$lang['Installer_Error'] = "Bìhem instalace se objevila chyba";
$lang['Previous_Install'] = "Byla nalezena pøedešlá instalace";
$lang['Install_db_error'] = "Bìhem nahrávání novìjší instalace databáze se objevila chyba";

$lang['Re_install'] = "Vaše pøedešlá instalace je stále aktivní. <br /><br />Pokud si pøejete pøeinstalovat phpBB 2, pokraèujte tlaèítkem 'Ano'. Uvìdomte se, prosím, že v tomto pøípadì se znièí veškerá data; nedojde k zálohování. Administrátorské uživatelské jméno a heslo, které jste používali k nalogování budou po reinstalaci pøedìlány, žádná další nastavení nebudou zachována.<br /><br />Zamyslete se pozornì pøed zmáèknutím tlaèítka 'Ano'!";

$lang['Inst_Step_0'] = "Thank you for choosing phpBB 2. In order to complete this install please fill out the details requested below. Please note that the database you install into should already exist. If you are installing to a database that uses ODBC, e.g. MS Access you should first create a DSN for it before proceeding.";

$lang['Start_Install'] = "Zaèít instalaci";
$lang['Finish_Install'] = "Ukonèit instalaci";

$lang['Default_lang'] = "Pùvodní jazyk boardu";
$lang['DB_Host'] = "Database Server Hostname / DSN";
$lang['DB_Name'] = "Název vaší databáze";
$lang['DB_Username'] = "Uživatelské jméno databáze";
$lang['DB_Password'] = "Heslo databáze";
$lang['Database'] = "Vaše databáze";
$lang['Install_lang'] = "Vyberte jazyk pro instalaci";
$lang['dbms'] = "Typ databáze";
$lang['Table_Prefix'] = "Pøedpona pro tabulky v databázi";
$lang['Admin_Username'] = "Administrátorské uživ. jméno";
$lang['Admin_Password'] = "Administrátorské heslo";
$lang['Admin_Password_confirm'] = "Administrátorské heslo [ Potvrdit ]";

$lang['Inst_Step_2'] = "Vaše uživatelské jméno bylo vytvoøeno. V tomto momentu je základní instalace u konce. Nyní budete pøeneseni na další èást, která vám umožní další administraci nové instalace. Zkontrolujte, prosím, detaily Obecných preferencí a udìlejte nezbytné zmìny. Díky, že jste si vybrali phpBB 2.";

$lang['Unwriteable_config'] = "Na váš konfiguraèní soubor nelze nyní zapisovat. Kopie tohoto souboru bude stažena, když kliknete tlaèítko dole. Posléze nahrajte tento soubor do adresáøe phpBB 2. Poté se pøihlašte jako administrátor s heslem, které jste zadali v pøedchozím formuláøi a navštivte administrátorské centrum (odkaz se objeví ve spodní èásti každé stránky poté, co se nalogujete) a zkontrolujte obecnou konfiguraci. Díky, že jste si vybrali phpBB 2.";
$lang['Download_config'] = "Stáhnout konfiguraèní soubor";

$lang['ftp_choose'] = "Vyberte si zpùsob stáhnutí";
$lang['ftp_option'] = "<br />Vzhledem k tomu, že je v této verzi umožnìn rozšíøený pøenos php mùže vám být dán prostor nejdøíve pøenést váš konfiguraèní soubor automaticky.";
$lang['ftp_instructs'] = "Vybrali jste automatickou volbu pøenosu. Zadejte, prosím, informace k uskuteènìní tohoto procesu. Prosím, pamatujte na to, že cesta pøenosu má být pøesnì taková, jakou byste zadávali cestu pøes jakéhokoliv bìžného klienta.";
$lang['ftp_info'] = "Zadejte vaše informace pøenosu FTP";
$lang['Attempt_ftp'] = "Pokus o pøenos konfiguraèního souboru na místo";
$lang['Send_file'] = "Pošlete mi soubor a já jej pøenesu sám";
$lang['ftp_path'] = "Cesta FTP na phpBB";
$lang['ftp_username'] = "Vaše uživatelské jméno FTP";
$lang['ftp_password'] = "Vaše heslo FTP";
$lang['Transfer_config'] = "Zaèít pøenos";
$lang['NoFTP_config'] = "Pokus pøenést soubor na místo selhal. Prosím, stáhnìte a pak nahrajte konfiguraèní soubor sami.";

$lang['Install'] = "Instalovat";
$lang['Upgrade'] = "Inovovat verzi";

$lang['Install_Method'] = "Vyberte druh instalace";

$lang['Install_No_Ext'] = "Nastavení php na vašem serveru nepodporuje databázi, kterou jste zvolili";

$lang['Install_No_PCRE'] = "phpBB2 požaduje the Perl-Compatible Regular Expressions Module pro php, což vaše konfigurace php zøejmì nepodporuje!";

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