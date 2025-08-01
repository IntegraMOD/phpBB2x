<?php

/***************************************************************************
 *                            lang_admin.php [Dutch]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.4.2.1 2002/05/27 11:58:06 psotfx Exp $
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
$lang['General'] = 'Algemeen Beheer';
$lang['Users'] = 'Gebruikers Beheer';
$lang['Groups'] = 'Groeps Beheer';
$lang['Forums'] = 'Forum Beheer';
$lang['Styles'] = 'Stijlen Beheer';

$lang['Configuration'] = 'Configuratie';
$lang['Permissions'] = 'Permissies';
$lang['Manage'] = 'Management';
$lang['Disallow'] = 'Niet Toegestane Namen';
$lang['Prune'] = 'Pruning';
$lang['Mass_Email'] = 'Bulk E-mail';
$lang['Ranks'] = 'Ranks';
$lang['Smilies'] = 'Smilies';
$lang['Ban_Management'] = 'Ban Beheer';
$lang['Word_Censor'] = 'Woord Censuur';
$lang['Export'] = 'Exporteren';
$lang['Create_new'] = 'Aanmaken';
$lang['Add_new'] = 'Toevoegen';
$lang['Backup_DB'] = 'Backup Database';
$lang['Restore_DB'] = 'Herstel Database';


//
// Index
//
$lang['Admin'] = 'Beheer';
$lang['Not_admin'] = 'Je bent niet bevoegd om dit forum te beheren!';
$lang['Welcome_phpBB'] = 'Welkom bij phpBB';
$lang['Admin_intro'] = 'Bedankt dat je phpBB gekozen hebt als je forum software. Dit scherm geeft je een kort overzicht van de verschillende statistieken van je forum. Je kan op deze pagina terug komen door te klikken op de <u>Beheerder Index</u> link in het linker vlak. Om terug te gaan naar de index van je board, kun je op het phpBB logo klikken dat ook in het linker vlak staat. Met de andere links aan de linkerkant van dit scherm kun je elk aspect van je forum beheren, elk scherm geeft uitleg over het gebruik van de tools.';
$lang['Main_index'] = 'Forum Index';
$lang['Forum_stats'] = 'Forum Statistieken';
$lang['Admin_Index'] = 'Beheerder Index';
$lang['Preview_forum'] = 'Preview Forum';

$lang['Click_return_admin_index'] = 'Klik %shier%s om terug te gaan naar de Beheerder Index';

$lang['Statistic'] = 'Statistieken';
$lang['Value'] = 'Waarde';
$lang['Number_posts'] = 'Aantal berichten';
$lang['Posts_per_day'] = 'Berichten per dag';
$lang['Number_topics'] = 'Aantal onderwerpen';
$lang['Topics_per_day'] = 'Onderwerpen per dag';
$lang['Number_users'] = 'Aantal gebruikers';
$lang['Users_per_day'] = 'Gebruikers per dag';
$lang['Board_started'] = 'Forum gestart';
$lang['Avatar_dir_size'] = 'Avatar directory formaat';
$lang['Database_size'] = 'Database formaat';
$lang['Gzip_compression'] ='Gzip compressie';
$lang['Not_available'] = 'Niet beschikbaar';

$lang['ON'] = 'AAN'; // This is for GZip compression
$lang['OFF'] = 'UIT';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Database Utilities';

$lang['Restore'] = 'Restore';
$lang['Backup'] = 'Backup';
$lang['Restore_explain'] = 'Dit herstelt alle phpBB tabellen volledig vanuit een opgeslagen bestand. Als je server het ondersteunt, kun je een met gzip gecomprimeerd tekst bestand uploaden, dit wordt automatisch uitgepakt. <b>WAARSCHUWING</B> Dit overschrijft alle bestaande data. De \'restore\' actie kan geruime tijd in beslag nemen, ga niet van deze pagina weg voordat hij is afgerond.';
$lang['Backup_explain'] = 'Hier kun je alle aan phpBB gerelateerde data opslaan. Als je extra tabellen hebt aangemaakt in dezelfde database als phpBB, die je ook wilt opslaan, voer dan hun namen in, gescheiden door komma\'s, in het \'extra tabellen\' tekstvak hieronder. Als je server het ondersteunt, kun je het bestand eerst met gzip comprimeren voordat je hem download.';

$lang['Backup_options'] = 'Backup opties';
$lang['Start_backup'] = 'Start backup';
$lang['Full_backup'] = 'Volledige backup';
$lang['Structure_backup'] = 'Alleen structuur backup';
$lang['Data_backup'] = 'Alleen data backup';
$lang['Additional_tables'] = 'Extra tabelllen';
$lang['Gzip_compress'] = 'Gzip comprimeer bestand';
$lang['Select_file'] = 'Selecteer een bestand';
$lang['Start_Restore'] = 'Start Restore';

$lang['Restore_success'] = 'De database is succesvol hersteld.<br /><br />Je forum zou terug moeten zijn in dezelfde staat als op het moment dat je de backup maakte.';
$lang['Backup_download'] = 'Je download begint over enkele ogenblikken, wacht totdat hij gestart is AUB.';
$lang['Backups_not_supported'] = 'Sorry, maar database backups worden momenteel niet ondersteund voor jouw database systeem';

$lang['Restore_Error_uploading'] = 'Fout in het uploaden van het backup bestand';
$lang['Restore_Error_filename'] = 'Probleem met de bestandsnaam, probeer een ander bestand';
$lang['Restore_Error_decompress'] = 'Kan geen gzip bestand decomprimeren, upload een plain tekst versie';
$lang['Restore_Error_no_file'] = 'Er is geen bestand ge-upload';


//
// Auth pages
//
$lang['Select_a_User'] = 'Selecteer een gebruiker';
$lang['Select_a_Group'] = 'Selecteer een groep';
$lang['Select_a_Forum'] = 'Selecteer een forum';
$lang['Auth_Control_User'] = 'Gebruikers permissies beheer';
$lang['Auth_Control_Group'] = 'Groep permissies beheer';
$lang['Auth_Control_Forum'] = 'Forum permissies beheer';
$lang['Look_up_User'] = 'Zoek een gebruiker';
$lang['Look_up_Group'] = 'Zoek een groep';
$lang['Look_up_Forum'] = 'Zoek een forum';

$lang['Group_auth_explain'] = 'Hier kun je de permissies en moderator status veranderen die zijn toegewezen aan elke gebruikersgroep. Vergeet niet dat, wanneer je groeps permissies verandert, individuele gebruikers permissies de gebruiker nog steeds toegang kunnen geven tot forums e.d. Je krijgt een waarschuwing wanneer dit het geval is.';
$lang['User_auth_explain'] = 'Hier kun je de permissies en moderator status veranderen die zijn toegewezen aan elke individuele gebruiker. Vergeet niet dat, wanneer je gebruikers permissies verandert, groeps permissies de gebruiker nog steeds toegang kunnen geven tot forums e.d. Je krijgt een waarschuwing wanneer dit het geval is.';
$lang['Forum_auth_explain'] = 'Hier kun je het authorisatie niveau van elk forum aanpassen. Je hebt hiervoor een eenvoudige en een geavanceerde methode, de geavanceerde methode geeft je meer invloed op elke forum actie. Denk eraan dat wanneer je het permissie niveau van forums aanpast, dit invloed heeft op welke gebruikers bepaalde acties daarbinnen kunnen uitvoeren.';

$lang['Simple_mode'] = 'Eenvoudige Modus';
$lang['Advanced_mode'] = 'Geavanceerde Modus';
$lang['Moderator_status'] = 'Moderator status';

$lang['Allowed_Access'] = 'Geef toegang';
$lang['Disallowed_Access'] = 'Weiger toegang';
$lang['Is_Moderator'] = 'Is moderator';
$lang['Not_Moderator'] = 'Geen moderator';

$lang['Conflict_warning'] = 'Autorisatie conflict waarschuwing';
$lang['Conflict_access_userauth'] = 'Deze gebruiker heeft nog toegang tot dit forum via een groep waarvan hij/zij deel uit maakt. Je kunt de groepspermissies aanpassen om volledig te voorkomen dat hij/zij toegangsrechten heeft. De groepspermissies (en de forums waarom het gaat) staan hieronder opgesomd.';
$lang['Conflict_mod_userauth'] = 'Deze gebruiker heeft nog moderator rechten op dit forum via een groep waarvan hij/zij deel uit maakt. Je kunt de groeps permissies aanpassen om volledig te voorkomen dat hij/zij moderator rechten heeft. De rechten (en de forums waarom het gaat) staan hieronder opgesomd.';

$lang['Conflict_access_groupauth'] = 'De volgende gebruiker (of gebruikers) heeft nog toegang tot dit forum via hun gebruikers permissies. Je kunt de gebruikers permissies aanpassen om volledig te voorkomen dat hij/zij toegangsrechten heeft. De gebruikers rechten (en de forums waarom het gaat) staan hieronder opgesomd.';
$lang['Conflict_mod_groupauth'] = 'De volgende gebruiker (of gebruikers) heeft nog moderator rechten op dit forum via hun gebruikers permissies. Je kunt de gebruikers permissies aanpassen om volledig te voorkomen dat hij/zij moderator rechten heeft. De gebruikers rechten (en de forums waarom het gaat) staan hieronder opgesomd.';

$lang['Public'] = 'Openbaar';
$lang['Private'] = 'Priv&eacute;';
$lang['Registered'] = 'Geregistreerd';
$lang['Administrators'] = 'Beheerders';
$lang['Hidden'] = 'Verborgen';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'ALL';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRIV&Eacute;';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'BEHEER';

$lang['View'] = 'Bekijk';
$lang['Read'] = 'Lees';
$lang['Post'] = 'Verstuur';
$lang['Reply'] = 'Antwoord';
$lang['Edit'] = 'Bewerk';
$lang['Delete'] = 'Verwijder';
$lang['Sticky'] = 'Sticky';
$lang['Announce'] = 'Aankondigen';
$lang['Vote'] = 'Stemmen';
$lang['Pollcreate'] = 'Poll aanmaken';

$lang['Permissions'] = 'Permissies';
$lang['Simple_Permission'] = 'Eenvoudige permissies';

$lang['User_Level'] = 'Gebruikers niveau';
$lang['Auth_User'] = 'Gebruiker';
$lang['Auth_Admin'] = 'Beheerder';
$lang['Group_memberships'] = 'Gebruikersgroep lidmaatschap';
$lang['Usergroup_members'] = 'Deze groep heeft de volgende leden';

$lang['Forum_auth_updated'] = 'Forum permissies ge-update';
$lang['User_auth_updated'] = 'Gebruikers permissies ge-updated';
$lang['Group_auth_updated'] = 'Groeps permissies ge-update';

$lang['Auth_updated'] = 'Permissies zijn ge-update';
$lang['Click_return_userauth'] = 'Klik %shier%s om terug te gaan naar Gebruikers Permissies';
$lang['Click_return_groupauth'] = 'Klik %shier%s om terug te gaan naar Groeps Permissies';
$lang['Click_return_forumauth'] = 'Klik %shier%s om terug te gaan naar Forum Permissies';


//
// Banning
//
$lang['Ban_control'] = 'Ban Beheer';
$lang['Ban_explain'] = 'Hier kun je het verbannen van gebruikers beheren. Je kunt dit bereiken door een specifieke gebruiker, een persoon of een reeks van IP adressen of hostnamen te verbannen. Deze methode zorgt ervoor dat de gebruiker niet eens de index pagina van je forum kan bereiken. Om te voorkomen dat de gebruiker zich onder een andere gebruikersnaam registreert kun je ook verbannen e-mailadressen specificeren. Denk eraan dat het verbannen van alleen een e-mail adres niet voorkomt dat een gebruiker in kan loggen en berichten kan plaatsen op je forum. Daarvoor moet je een van de eerste twee methoden gebruiken.';
$lang['Ban_explain_warn'] = 'Denk eraan dat bij het invoeren van een IP-reeks alle adresssen tussen het begin en einde op de verban-lijst staan. Er wordt geprobeerd om het aantal adressen in de database te minimaliseren door, waar mogelijk, automatisch wildcards toe te passen. Als je echt een reeks in wilt voeren, probeer hem dan klein te houden. Of beter nog, vermeld een specifiek adres.';

$lang['Select_username'] = 'Selecteer een gebruikersnaam';
$lang['Select_ip'] = 'Selecteer een IP';
$lang['Select_email'] = 'Selecteer een e-mailadres';

$lang['Ban_username'] = 'Ban een of meer specifieke gebruikers';
$lang['Ban_username_explain'] = 'Je kunt meerdere gebruikers in een keer bannen door de juiste combinatie van muis en toetsenbord voor jouw computer en browser';

$lang['Ban_IP'] = 'Ban een of meer IP adressen of hostnamen';
$lang['IP_hostname'] = 'IP adressen of hostnamen';
$lang['Ban_IP_explain'] = 'Om meerdere IP\'s of hostnamen in te voeren dien je ze te scheiden met komma\'s. Om een IP-reeks in te voeren zet je een liggend streepje (-) tussen het begin en het eind. Om een wildcard aan te geven gebruik je *';

$lang['Ban_email'] = 'Verban een of meer e-mailadressen';
$lang['Ban_email_explain'] = 'Om meerdere e-mailadressen in te voeren dien je ze te scheiden met komma\'s. Om een wildcard aan te geven gebruik je *, bijvoorbeeld *@hotmail.com';

$lang['Unban_username'] = 'On-verban een of meer specifieke gebruikers';
$lang['Unban_username_explain'] = 'Je kunt meerdere gebruikers in een keer on-verbannen door de juiste combinatie van muis en toetsenbord voor jouw computer en browser';

$lang['Unban_IP'] = 'On-verban een of meer IP adressen';
$lang['Unban_IP_explain'] = 'Je kunt meerdere IP adressen in een keer on-verbannen door de juiste combinatie van muis en toetsenbord voor jouw computer en browser';

$lang['Unban_email'] = 'On-verban een of meer e-mailadressen';
$lang['Unban_email_explain'] = 'Je kunt meerdere e-mailadressen in een keer on-verbannen door de juiste combinatie van muis en toetsenbord voor jouw computer en browser';

$lang['No_banned_users'] = 'Geen verbannen gebruikersnamen';
$lang['No_banned_ip'] = 'Geen verbannen IP-adressen';
$lang['No_banned_email'] = 'Geen verbannen e-mailadressen';

$lang['Ban_update_sucessful'] = 'De verbanlijst is succesvol ge-update';
$lang['Click_return_banadmin'] = 'Klik %shier%s om terug te gaan naar Verban Beheer';


//
// Configuration
//
$lang['General_Config'] = 'Algemene configuratie';
$lang['Config_explain'] = 'Met het formulier hieronder kun je alle algemene forum opties aanpassen. Voor gebruikers en forum configuratie gebruik je de links aan de linkerkant.';

$lang['Click_return_config'] = 'Klik %shier%s om terug te gaan naar Algemene Configuratie';

$lang['General_settings'] = 'Algemene Forum Instellingen';
$lang['Server_name'] = 'Domeinnaam';
$lang['Server_name_explain'] = 'Het domein naam van de server (b.v. www.phpbb.nl)';
$lang['Script_path'] = 'Script pad';
$lang['Script_path_explain'] = 'Het pad waar phpBB geinstalleerd is (b.v. /phpBB/)';
$lang['Server_port'] = 'Server Poort';
$lang['Server_port_explain'] = 'De poort waarop de HTTP server draait, normaal 80.';
$lang['Site_name'] = 'Site naam';
$lang['Site_desc'] = 'Site omschrijving';
$lang['Board_disable'] = 'Forum uitschakelen';
$lang['Board_disable_explain'] = 'Dit maakt het forum onbereikbaar voor gebruikers. Log niet uit wanneer je het forum uitschakelt, je kunt namelijk niet meer inloggen!';
$lang['Acct_activation'] = 'Account activering aanzetten';
$lang['Acc_None'] = 'Geen'; // These three entries are the type of activation
$lang['Acc_User'] = 'Gebruiker';
$lang['Acc_Admin'] = 'Beheerder';

$lang['Abilities_settings'] = 'Gebruikers en Forum Basis Instellingen';
$lang['Max_poll_options'] = 'Max aantal peiling (poll) opties';
$lang['Flood_Interval'] = 'Flood Interval';
$lang['Flood_Interval_explain'] = 'Aantal seconden die een gebruiker moet wachten tussen twee posts';
$lang['Board_email_form'] = 'Gebruiker e-mail via board';
$lang['Board_email_form_explain'] = 'Gebruikers kunnen elkaar e-mail sturen via dit board';
$lang['Topics_per_page'] = 'Onderwerpen Per Pagina';
$lang['Posts_per_page'] = 'Berichten Per Pagina';
$lang['Hot_threshold'] = 'Aantal berichten voor een populair onderwerp';
$lang['Default_style'] = 'Standaard stijl';
$lang['Override_style'] = 'Negeer gebruiker stijl';
$lang['Override_style_explain'] = 'Vervang gebruiker stijl door de standaard';
$lang['Default_language'] = 'Standaard taal';
$lang['Date_format'] = 'Datum formaat';
$lang['System_timezone'] = 'Tijdzone van het systeem';
$lang['Enable_gzip'] = 'GZip Compressie aanzetten';
$lang['Enable_prune'] = 'Forum Pruning aanzetten';
$lang['Allow_HTML'] = 'HTML toestaan';
$lang['Allow_BBCode'] = 'BBCode toestaan';
$lang['Allowed_tags'] = 'Toegestane HTML tags';
$lang['Allowed_tags_explain'] = 'Tags scheiden met komma\'s';
$lang['Allow_smilies'] = 'Smilies toestaan';
$lang['Smilies_path'] = 'Smilies Opslag Map';
$lang['Smilies_path_explain'] = 'Map onder je phpBB root dir, bijv. images/smilies';
$lang['Allow_sig'] = 'Handtekening toestaan';
$lang['Max_sig_length'] = 'Maximale lengte van handtekening';
$lang['Max_sig_length_explain'] = 'Maximaal aantal karakters in handtekening van gebruikers';
$lang['Allow_name_change'] = 'Gebruikersnaam wijzigingen toestaan';

$lang['Avatar_settings'] = 'Avatar Instellingen';
$lang['Allow_local'] = 'Gallery avatars toestaan';
$lang['Allow_remote'] = 'Externe avatars toestaan';
$lang['Allow_remote_explain'] = 'Avatars waarnaar gelinked wordt vanaf een andere website';
$lang['Allow_upload'] = 'Avatar uploading toestaan';
$lang['Max_filesize'] = 'Maximale avatar bestandsgrootte';
$lang['Max_filesize_explain'] = 'Voor ge-uploade avatar bestanden';
$lang['Max_avatar_size'] = 'Maximale avatar afmetingen';
$lang['Max_avatar_size_explain'] = '(Hoogte x breedte in pixels)';
$lang['Avatar_storage_path'] = 'Avatar opslag map';
$lang['Avatar_storage_path_explain'] = 'Map onder phpBB root dir, bijv. images/avatars';
$lang['Avatar_gallery_path'] = 'Avatar gallery map';
$lang['Avatar_gallery_path_explain'] = 'Map onder phpBB root dir voor-geladen afbeeldingen, bijv. images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA instellingen';
$lang['COPPA_fax'] = 'COPPA fax nummer';
$lang['COPPA_mail'] = 'COPPA postadres';
$lang['COPPA_mail_explain'] = 'Dit is het postadres waar ouders COPPA registratie formulieren naar toe sturen';

$lang['Email_settings'] = 'E-mail Instellingen';
$lang['Admin_email'] = 'Beheerder e-mailadres';
$lang['Email_sig'] = 'E-mail handtekening';
$lang['Email_sig_explain'] = 'Deze tekst wordt toegevoegd aan alle emails die het forum verstuurt';
$lang['Use_SMTP'] = 'Gebruik SMTP server voor e-mail';
$lang['Use_SMTP_explain'] = 'Vul \'ja\' in als de e-mail via een benoemde server wilt of moet versturen in plaats van de \'local mail\' functie';
$lang['SMTP_server'] = 'SMTP server adres';
$lang['SMTP_username'] = 'SMTP gebruikersnaam';
$lang['SMTP_username_explain'] = 'Vul alleen een gebruikersnaam in als dit nodig is';
$lang['SMTP_password'] = 'SMTP wachtwoord';
$lang['SMTP_password_explain'] = 'Vul alleen een wachtwoord in als dit nodig is';

$lang['Disable_privmsg'] = 'Priv&eacute; berichten';
$lang['Inbox_limits'] = 'Max berichten in Inbox';
$lang['Sentbox_limits'] = 'Max berichten in Sentbox';
$lang['Savebox_limits'] = 'Max berichten in Savebox';

$lang['Cookie_settings'] = 'Cookie instellingen';
$lang['Cookie_settings_explain'] = 'Deze bepalen hoe een cookie, die aan een browser gestuurd wordt, is gedefinieerd. In de meeste gevallen voldoen de standaard instellingen. Als je ze toch moet aanpassen let dan goed op, door foute instellingen kunnen gebruikers mogelijk niet meer inloggen.';
$lang['Cookie_domain'] = 'Cookie domein';
$lang['Cookie_name'] = 'Cookie naam';
$lang['Cookie_path'] = 'Cookie pad';
$lang['Cookie_secure'] = 'Cookie secure [ https ]';
$lang['Cookie_secure_explain'] = 'Zet deze optie alleen aan als je server gebruik maakt van SSL';
$lang['Session_length'] = 'Sessie lengte [ seconds ]';
$lang['cookie_consent_enable'] = 'Enable cookie consent notice?';

// Visual Confirmation
$lang['Visual_confirm'] = 'Visuele bevestiging aanzetten';
$lang['Visual_confirm_explain'] = 'Gebruikers dienen een code uit een plaatje in te vullen bij registratie.';

//
// Forum Management
//
$lang['Forum_admin'] = 'Forum Beheer';
$lang['Forum_admin_explain'] = 'Vanaf dit paneel kun je categorieen en forums toevoegen, verwijderen, reorganiseren en opnieuw synchroniseren';
$lang['Edit_forum'] = 'Bewerk forum';
$lang['Create_forum'] = 'Maak een nieuw forum aan';
$lang['Create_category'] = 'Maak een nieuwe categorie aan';
$lang['Remove'] = 'Verwijder';
$lang['Action'] = 'Actie';
$lang['Update_order'] = 'Volgorde updaten';
$lang['Config_updated'] = 'Forum configuratie succesvol ge-update';
$lang['Edit'] = 'Bewerk';
$lang['Delete'] = 'Verwijder';
$lang['Move_up'] = 'Schuif omhoog';
$lang['Move_down'] = 'Schuif omlaag';
$lang['Resync'] = 'Hersync';
$lang['No_mode'] = 'Er was geen modus gezet';
$lang['Forum_edit_delete_explain'] = 'Met het formulier hieronder kun je alle algemene forumopties aanpassen. Voor gebruikers en forum configuraties kun je de links aan de linkerkant gebruiken';

$lang['Move_contents'] = 'Verplaats alle inhoud';
$lang['Forum_delete'] = 'Verwijder forum';
$lang['Forum_delete_explain'] = 'Met het formulier hieronder kun je een forum (of categorie) verwijderen en bepalen waarheen je alle onderwerpen (of forums) wilt verplaatsen.';

$lang['Forum_settings'] = 'Algemene Forum Instellingen';
$lang['Forum_name'] = 'Forum naam';
$lang['Forum_desc'] = 'Omschrijving';
$lang['Forum_status'] = 'Forum status';
$lang['Forum_pruning'] = 'Auto-pruning';

$lang['prune_freq'] = 'Check de leeftijd van een topic elke';
$lang['prune_days'] = 'Verwijder topics waarin niets gepost is over';
$lang['Set_prune_data'] = 'Je hebt auto-prune aangezet voor dit forum, maar hebt geen frequentie of aantal dagen aan gegeven. ga AUB terug en doe dit alsnog';

$lang['Move_and_Delete'] = 'Verplaats en verwijder';

$lang['Delete_all_posts'] = 'Verwijder alle posts';
$lang['Nowhere_to_move'] = 'Geen plek om naartoe te verplaatsen';

$lang['Edit_Category'] = 'Bewerk Categorie';
$lang['Edit_Category_explain'] = 'Gebruik dit formulier om de naam van een categorie aan te passen.';

$lang['Forums_updated'] = 'Forum en categorie informatie succesvol ge-update';

$lang['Must_delete_forums'] = 'Je moet alle forums verwijderen voordat je deze categorie kunt verwijderen';

$lang['Click_return_forumadmin'] = 'Klik %shier%s om terug te gaan naar Forum Beheer';


//
// Smiley Management
//
$lang['smiley_title'] = 'Smilies Bewerken';
$lang['smile_desc'] = 'Vanaf deze pagina kun je de emoticons of smileys, die gebruikers in hun posts of priv&eacute; berichten kunnen gebruiken, toevoegen, verwijderen en bewerken.';

$lang['smiley_config'] = 'Smiley configuratie';
$lang['smiley_code'] = 'Smiley code';
$lang['smiley_url'] = 'Smiley grafisch bestand';
$lang['smiley_emot'] = 'Smiley emotie';
$lang['smile_add'] = 'Voeg een nieuwe smiley toe';
$lang['Smile'] = 'Smile';
$lang['Emotion'] = 'Emotie';

$lang['Select_pak'] = 'Selecteer Pack (.pak) Bestand';
$lang['replace_existing'] = 'Vervang bestaande smiley';
$lang['keep_existing'] = 'Houd bestaande smiley';
$lang['smiley_import_inst'] = 'Je moet het smiley pakket unzippen en alle bestanden uploaden naar de juiste smiley directory voor jouw installatie. Selecteer vervolgens de juiste informatie in dit formulier om het smiley pack te importeren.';
$lang['smiley_import'] = 'Smiley Pack importeren';
$lang['choose_smile_pak'] = 'Kies een Smile Pack .pak bestand';
$lang['import'] = 'Importeer Smileys';
$lang['smile_conflicts'] = ' Wat moet er gedaan worden in geval van een conflict';
$lang['del_existing_smileys'] = 'Verwijder bestaande smileys voor het importeren';
$lang['import_smile_pack'] = 'Importeer Smiley Pack';
$lang['export_smile_pack'] = 'Maak Smiley Pack aan';
$lang['export_smiles'] = 'Om een smiley pack aan te maken met je huidige geinstalleerde smileys, kun je %shier%s klikken om het smiles.pak bestand te downloaden. Hernoem het bestand naar een geschikte naam, maar houd de .pak extensie. Maak vervolgens een zip bestand aan met al je smiley plaatjes plus dit .pak configuratie bestand.';

$lang['smiley_add_success'] = 'De smiley is succesvol toegevoegd';
$lang['smiley_edit_success'] = 'De smiley is succesvol ge-update';
$lang['smiley_import_success'] = 'Het Smiley Pack is succesvol geimporteerd!';
$lang['smiley_del_success'] = 'De smiley is succesvol verwijderd';
$lang['Click_return_smileadmin'] = 'Klik %shier%s om terug te gaan naar Smiley Beheer';


//
// User Management
//
$lang['User_admin'] = 'Gebruikers beheer';
$lang['User_admin_explain'] = 'Hier kun je informatie en bepaalde specifieke opties van gebruikers aanpassen. Als je de gebruikers permissies wilt aanpassen dien je het gebruiker en groeps permissie systeem te gebruiken.';

$lang['Look_up_user'] = 'Zoek gebruiker';

$lang['Admin_user_fail'] = 'Gebruikers profiel kon niet ge-update worden.';
$lang['Admin_user_updated'] = 'Gebruikersprofiel is succesvol ge-update';
$lang['Click_return_useradmin'] = 'Klik %shier%s om terug te gaan naar gebruikers beheer';

$lang['User_delete'] = 'verwijder deze gebruiker.';
$lang['User_delete_explain'] = 'Klik hier om deze gebruiker te verwijderen, dit kan niet ongedaan worden gemaakt.';
$lang['User_deleted'] = 'Gebruiker is succesvol verwijderd.';

$lang['User_status'] = 'Gebruiker is actief';
$lang['User_allowpm'] = 'Kan prive berichten versturen';
$lang['User_allowavatar'] = 'Kan avatar weergeven';

$lang['Admin_avatar_explain'] = 'Hier kun je de huidige avatar van de gebruiker bekijken en verwijderen.';

$lang['User_special'] = 'Speciale alleen-beheerder velden';
$lang['User_special_explain'] = 'Deze velden kunnen niet worden aangepast door gebruikers. Hier kun je hun status instellen en andere opties die niet beschikbaar zijn voor gebruikers.';


//
// Group Management
//
$lang['Group_administration'] = 'Groep Beheer';
$lang['Group_admin_explain'] = 'Vanaf dit paneel kun je al je gebruikersgroepen beheren, je kunt: verwijderen aanmaken en bestaande groepen bewerken. je kunt moderatoren kiezen, groep open/gesloten status wijzigen en de groepsnaam en omschrijving opgeven';
$lang['Error_updating_groups'] = 'Er heeft zich een fout voorgedaan tijdens het updaten van de groepen';
$lang['Updated_group'] = 'De groep is succesvol ge-update';
$lang['Added_new_group'] = 'De nieuwe groep is succesvol aangemaakt';
$lang['Deleted_group'] = 'De groep is succesvol verwijderd';
$lang['New_group'] = 'Maak een nieuwe groep';
$lang['Edit_group'] = 'Bewerk groep';
$lang['group_name'] = 'Groep naam';
$lang['group_description'] = 'Groep omschrijving';
$lang['group_moderator'] = 'Groep moderator';
$lang['group_status'] = 'Groep status';
$lang['group_open'] = 'Open groep';
$lang['group_closed'] = 'Gesloten groep';
$lang['group_hidden'] = 'Verborgen groep';
$lang['group_delete'] = 'Verwijder groep';
$lang['group_delete_check'] = 'Deze groep verwijderen';
$lang['submit_group_changes'] = 'Wijzigingen bevestigen';
$lang['reset_group_changes'] = 'Herstel wijzigingen';
$lang['No_group_name'] = 'Je moet een naam opgeven voor deze groep';
$lang['No_group_moderator'] = 'Je moet een moderator aangeven voor deze groep';
$lang['No_group_mode'] = 'Je moet de staat van deze groep aangeven, open of gesloten';
$lang['No_group_action'] = 'Geen actie opgegeven';
$lang['delete_group_moderator'] = 'De oude groeps moderator verwijderen?';
$lang['delete_moderator_explain'] = 'Selecteer dit veld als je tijdens het wijzigen van een groepsmoderator wilt dat de oude moderator verwijderd wordt. Als je dit niet selecteert wordt de oude moderator gewoon een lid van de groep.';
$lang['Click_return_groupsadmin'] = 'Klik %shier%s om terug te gaan naar Groep beheer.';
$lang['Select_group'] = 'Selecteer een groep';
$lang['Look_up_group'] = 'Zoek een groep';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Forum Prune';
$lang['Forum_Prune_explain'] = 'Dit verwijdert elk onderwerp waarop geen reactie is geweest in het aantal dagen dat je aangeeft. Als je geen nummer invoert worden alle onderwerpen verwijderd. Dit verwijdert geen onderwerpen waarin nog peilingen (polls) lopen, ook verwijdert het geen aankondigingen. Die onderwerpen dien je handmatig te verwijderen.';
$lang['Do_Prune'] = 'Voer prune uit';
$lang['All_Forums'] = 'Alle forums';
$lang['Prune_topics_not_posted'] = 'Prune onderwerpen zonder reacties in bepaald aantal dagen';
$lang['Topics_pruned'] = 'Onderwerpen ge-pruned';
$lang['Posts_pruned'] = 'Berichten ge-pruned';
$lang['Prune_success'] = 'Pruning van de forums is succesvol afgerond';


//
// Word censor
//
$lang['Words_title'] = 'Woord Censurering';
$lang['Words_explain'] = 'Op dit paneel kun je woorden toevoegen, bewerken en verwijderen die automatisch op alle forums gecensureerd worden. Bovendien kunnen gebruikers zich niet registreren met een gebruikersnaam waarin zo\'n woord voorkomt. Wildcards (*) worden geaccepteerd in het woord veld, bijv. *pik* komt overeen met Lopikkerwaard, pik* met pikant en *pik met hospik.';
$lang['Word'] = 'Woord';
$lang['Edit_word_censor'] = 'Bewerk censuur woord';
$lang['Replacement'] = 'Vervangen door';
$lang['Add_new_word'] = 'Nieuw woord toevoegen';
$lang['Update_word'] = 'Woord censuur updaten';

$lang['Must_enter_word'] = 'Je moet een woord en de vervanging daarvoor opgeven';
$lang['No_word_selected'] = 'Geen woord geselecteerd om te bewerken';

$lang['Word_updated'] = 'Het geselecteerde censuur woord is succesvol ge-update';
$lang['Word_added'] = 'Het censuur woord is succesvol toegevoegd';
$lang['Word_removed'] = 'Het geselecteerde censuur woord is succesvol verwijderd';

$lang['Click_return_wordadmin'] = 'Klik %shier%s om terug te gaan naar Censuur Woorden Beheer';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Hier kun je e-mail sturen aan al je gebruikers, of aan gebruikers uit een specifieke groep. Hiervoor wordt een e-mail verstuurd aan het beheerders e-mailadres dat opgegeven is, met een \'blind carbon copy\' aan alle ontvangers. Als je een grote groep wilt e-mailen, wees dan geduldig na het verzenden en stop de pagina niet halverwege. Het is normaal dat massa e-mail geruime tijd in beslag neemt, je krijgt een melding wanneer het script is afgerond.';
$lang['Compose'] = 'Opstellen';

$lang['Recipients'] = 'Ontvangers';
$lang['All_users'] = 'Alle gebruikers';

$lang['Email_successfull'] = 'Je bericht is verzonden';
$lang['Click_return_massemail'] = 'Klik %shier%s om terug te gaan naar het massa e-mail formulier';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Rang Beheer';
$lang['Ranks_explain'] = 'Met dit formulier kun je rangen toevoegen, bewerken, bekijken en verwijderen. Je kunt ook aangepaste rangen aanmaken die toegepast kunnen worden via de gebruikers beheer faciliteit';

$lang['Add_new_rank'] = 'Nieuwe rang toevoegen';

$lang['Rank_title'] = 'Rang titel';
$lang['Rank_special'] = 'Als speciale rang instellen';
$lang['Rank_minimum'] = 'Minimum Berichten';
$lang['Rank_maximum'] = 'Maximum Berichten';
$lang['Rank_image'] = 'Rang afbeelding';
$lang['Rank_image_explain'] = 'Gebruik dit om een klein plaatje aan een rang te verbinden';

$lang['Must_select_rank'] = 'Je moet een rang selecteren';
$lang['No_assigned_rank'] = 'Geen speciale rang toegewezen';

$lang['Rank_updated'] = 'De rang is succesvol ge- update';
$lang['Rank_added'] = 'De rang is succesvol toegevoegd';
$lang['Rank_removed'] = 'De rang is succesvol verwijderd';
$lang['No_update_ranks'] = 'De rang is succesvol verwijderd, maar de gebruikers die deze rang gebruikten zijn niet aangepast. Je zal dit handmatig moeten veranderen.';

$lang['Click_return_rankadmin'] = 'Klik %shier%s om terug te gaan naar Rang Beheer';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Geweigerde gebruikersnaam beheer';
$lang['Disallow_explain'] = 'Hier kun je bepalen welke gebruikersnamen niet gebruikt mogen worden. Geweigerde gebruikersnamen mogen het wildcard karakter * bevatten. Denk eraan dat je geen gebruikersnaam kunt specficeren die al geregistreerd is, je moet die eerst verwijderen en dan weigeren';

$lang['Delete_disallow'] = 'Verwijderen';
$lang['Delete_disallow_title'] = 'Verwijder een geweigerde gebruikersnaam';
$lang['Delete_disallow_explain'] = 'Je kunt een geweigerde gebruikersnaam verwijderen door de naam in deze lijst te selecteren en op bevestigen te klikken';

$lang['Add_disallow'] = 'Toevoegen';
$lang['Add_disallow_title'] = 'Voeg een geweigerde gebruikersnaam toe';
$lang['Add_disallow_explain'] = 'Je kunt een gebruikersnaam weigeren door gebruik te maken van het wildcard karakter * om een willekeurig ander karakter te vervangen';

$lang['No_disallowed'] = 'Geen geweigerde gebruikersnamen';

$lang['Disallowed_deleted'] = 'De geweigerde gebruikersnaam is succesvol verwijderd';
$lang['Disallow_successful'] = 'De geweigerde gebruikersnaam is succesvol toegevoegd';
$lang['Disallowed_already'] = 'De naam die je ingevoerd hebt kon niet worden toegevoegd aan de lijst. Hij staat er al in of er is een bestaande gebruikersnaam aanwezig';

$lang['Click_return_disallowadmin'] = 'Klik %shier%s om terug te gaan naar Geweigerde Gebruikersnaam beheer';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Stijlen Beheer';
$lang['Styles_explain'] = 'Met dit onderdeel kun je de stijlen (templates en thema\'s) beheren die beschikbaar zijn voor je gebruikers';
$lang['Styles_addnew_explain'] = 'De volgende lijst bevat alle thema\'s die momenteel beschikbaar zijn voor de templates die je hebt. De onderdelen op deze lijst zijn nog niet geinstalleerd in de phpBB database. Omze te installeren kun je simpelweg klikken op de \'installeer\' link naast de vermelding';

$lang['Select_template'] = 'Selecteer een Template';

$lang['Style'] = 'Stijl';
$lang['Template'] = 'Template';
$lang['Install'] = 'Installeer';
$lang['Download'] = 'Download';

$lang['Edit_theme'] = 'Bewerk Thema';
$lang['Edit_theme_explain'] = 'In dit formulier kun je de instellingen van het geselecteerde thema bewerken';

$lang['Create_theme'] = 'Thema aanmaken';
$lang['Create_theme_explain'] = 'Gebruk dit formulier om een nieuw thema aan te maken voor een geselecteerd template. Wanneer je kleuren toevoegt (waarvoor je de hexadecimale schrijfwijze moet gebruiken) moet je het voorafgaande # weglaten, bijv. CCCCCC is bruikbaar, #CCCCCC niet';

$lang['Export_themes'] = 'Thema\'s exporteren';
$lang['Export_explain'] = 'In dit venster kun je de data van een bepaald thema voor een geselecteerd template exporteren. Selecteer het template uit de lijst hieronder en het script zal het configuratie bestand van het thema aanmaken en proberen dit op te slaan in de map van het geselecteerde template. Als het bestand niet kan worden opgeslagen krijg je de mogelijkheid om het te downloaden. Om het bestand op te kunnen slaan met het script, dient de webserver schrijf rechten te hebben in de map van het geselecteerde template. Zie, voor meer informatie hierover, de phpBB2 user guide.';

$lang['Theme_installed'] = 'Het geselecteerde thema is succesvol ge-installeerd';
$lang['Style_removed'] = 'De geselecteerde stijl is verwijderd uit de database. Om de stijl volledig van je systeem te verwijderen moet je de betreffende bestanden verwijderen uit je templates map.';
$lang['Theme_info_saved'] = 'De thema informatie voor het geselecteerde template is opgeslagen. Je dient nu de permissies op \'theme_info.cfg (en indien van toepassing, de map van het geselecteerde template) terug te zetten naar alleen-lezen (read-only)';
$lang['Theme_updated'] = 'Het geselecteerde thema is ge-update. Je dient nu de nieuwe thema instellingen te exporteren';
$lang['Theme_created'] = 'Thema aangemaakt. Je dient nu het thema op te slaan in het thema configuratie bestand om veilig ergens anders te bewaren';

$lang['Confirm_delete_style'] = 'Weet je zeker dat je deze stijl wilt verwijderen?';

$lang['Download_theme_cfg'] = 'De \'exporter\' kon niet schrijven naar het thema informatie bestand. Klik op de knop hieronder om dit bestand via je browser te downloaden. Wanneer je het gedownload hebt, kun je het verplaatsen naar de map waarin de template bestanden staan. Je kunt de bestanden vervolgens verpakken voor distributie of ergens anders gebruiken';
$lang['No_themes'] = 'Aan het template dat je geselecteerd hebt zijn geen thema\'s verbonden. Om een nieuw thema taan te maken, klik je op \'Maak nieuw thema\' in het vlak aan de linkerkant';
$lang['No_template_dir'] = 'Kon de template map niet openen. Het kan mogelijk niet gelezen worden door de webserver of de map bestaat niet';
$lang['Cannot_remove_style'] = 'Je kunt deze stijl niet verwijderen aangezien het de standaard is voor het forum. Verander AUB de standaard stijl en probeer het opnieuw.';
$lang['Style_exists'] = 'De naam die je opgegeven hebt voor de stijl bestaat al, ga terug en kies een andere naam.';

$lang['Click_return_styleadmin'] = 'Klik %shier%s om terug te gaan naar stijl Beheer';

$lang['Theme_settings'] = 'Thema Instellingen';
$lang['Theme_element'] = 'Thema Element';
$lang['Simple_name'] = 'Eenvoudige naam';
$lang['Value'] = 'Waarde';
$lang['Save_Settings'] = 'Sla Instellingen Op';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Background_image'] = 'Achtergrond afbeelding';
$lang['Background_color'] = 'Achtergrond kleur';
$lang['Theme_name'] = 'Thema naam';
$lang['Link_color'] = 'Link Kleur';
$lang['Text_color'] = 'Tekst Kleur';
$lang['VLink_color'] = 'Bekeken Link Kleur';
$lang['ALink_color'] = 'Actieve Link Kleur';
$lang['HLink_color'] = 'Zweef Link Kleur';
$lang['Tr_color1'] = 'Tabel Rij Kleur 1';
$lang['Tr_color2'] = 'Tabel Rij Kleur 2';
$lang['Tr_color3'] = 'Tabel Rij Kleur 3';
$lang['Tr_class1'] = 'Tabel Rij Klasse 1';
$lang['Tr_class2'] = 'Tabel Rij Klasse 2';
$lang['Tr_class3'] = 'Tabel Rij Klasse 3';
$lang['Th_color1'] = 'Tabel Kop Kleur 1';
$lang['Th_color2'] = 'Tabel Kop Kleur 2';
$lang['Th_color3'] = 'Tabel Kop Kleur 3';
$lang['Th_class1'] = 'Tabel Kop Klasse 1';
$lang['Th_class2'] = 'Tabel Kop Klasse 2';
$lang['Th_class3'] = 'Tabel Kop Klasse 3';
$lang['Td_color1'] = 'Tabel Cel Kleur 1';
$lang['Td_color2'] = 'Tabel Cel Kleur 2';
$lang['Td_color3'] = 'Tabel Cel Kleur 3';
$lang['Td_class1'] = 'Tabel Cel Klasse 1';
$lang['Td_class2'] = 'Tabel Cel Klasse 2';
$lang['Td_class3'] = 'Tabel Cel Klasse 3';
$lang['fontface1'] = 'Font 1';
$lang['fontface2'] = 'Font 2';
$lang['fontface3'] = 'Font 3';
$lang['fontsize1'] = 'Font Grootte 1';
$lang['fontsize2'] = 'Font Grootte 2';
$lang['fontsize3'] = 'Font Grootte 3';
$lang['fontcolor1'] = 'Font Kleur 1';
$lang['fontcolor2'] = 'Font Kleur 2';
$lang['fontcolor3'] = 'Font Kleur 3';
$lang['span_class1'] = 'Span Klasse 1';
$lang['span_class2'] = 'Span Klasse 2';
$lang['span_class3'] = 'Span Klasse 3';
$lang['img_poll_size'] = 'Polling Afbeelding grootte [px]';
$lang['img_pm_size'] = 'Priv&eacute; bericht Status grootte [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Welkom bij de phpBB2 installatie';
$lang['Initial_config'] = 'Basis Configuratie';
$lang['DB_config'] = 'Database Configuratie';
$lang['Admin_config'] = 'Beheer Configuratie';
$lang['continue_upgrade'] = 'Zodra je het config bestand naar je lokale computer hebt gedownload, kan je op de \'Vervolg Upgrade\' knop hieronder klikken om verder te gaan met de upgrade. Wacht met het uploaden van het config bestand tot de upgrade voltooid is.';
$lang['upgrade_submit'] = 'Vervolg Upgrade';

$lang['Installer_Error'] = 'Er is een fout opgetreden tijdens de installatie';
$lang['Previous_Install'] = 'Een vorige installatie is gevonden';
$lang['Install_db_error'] = 'Er is een fout opgetreden tijdens het updaten van de database';

$lang['Re_install'] = 'Je vorige installatie is nog actief. <br /><br />Als je phpBB2 opnieuw wilt installeren, klik dan op de knop hieronder. LET OP: hiermee vernietig je alle bestaande data, er worden geen backups gemaakt! De gebruikersnaam en het wachtwoord van de beheerder die je gebruikte om op je forum in te loggen worden opnieuw aangemaakt na de her-installatie, geen enkele andere instelling wordt bewaard. <br /><br />Denk goed na voordat je op \'Ja\' drukt!';

$lang['Inst_Step_0'] = 'Bedankt dat je voor phpBB2 hebt gekozen. Vul, om de installatie te voltooien, de gegevens in die hieronder gevraagd worden. Denk eraan dat de database waarnaar je installeert al dient te bestaan. Wanneer je installeert op een database die ODBC gebruikt (bijv. MS Access) dien je eerst een DSN aan te maken voordat je verder gaat.';

$lang['Start_Install'] = 'Start Installatie';
$lang['Finish_Install'] = 'Rond Installation af';

$lang['Default_lang'] = 'Standaard forum taal';
$lang['DB_Host'] = 'Database Server Hostnaam / DSN';
$lang['DB_Name'] = 'Jouw Database Naam';
$lang['DB_Username'] = 'Database Gebruikersnaam';
$lang['DB_Password'] = 'Database Wachtwoord';
$lang['Database'] = 'Jouw Database';
$lang['Install_lang'] = 'Kies taal voor Installatie';
$lang['dbms'] = 'Database Type';
$lang['Table_Prefix'] = 'Prefix voor tabellen in database';
$lang['Admin_Username'] = 'Beheerder gebruikersnaam';
$lang['Admin_Password'] = 'Beheerders wachtwoord';
$lang['Admin_Password_confirm'] = 'Beheerders wachtwoord [ Bevestig ]';

$lang['Inst_Step_2'] = 'Je beheerders gebruikersnaam is aangemaakt, nu is je basis installatie compleet. Je komt nu in een scherm waarmee je je nieuwe installatie kunt inrichten. Zorg ervoor dat je de algemene configuratie details controleert en de vereiste vranderingen aanbrengt. Bedankt dat je voor phpBB2 hebt gekozen.';

$lang['Unwriteable_config'] = 'Je config bestand is onschrijfbaar op dit moment. Een kopie van het config bestand wordt gedownload als je op de knop hieronder klikt. Je dient dit bestand te uploaden naar dezelfde directory als phpBB2. Wanneer dat gedaan is dien je in te loggen, met de beheerder naam en bijbehorend wachtwoord, die je in het vorige formulier hebt opgegeven, en het beheerder controle centrum op te zoeken (er verschijnt een link onderin elk scherm wanneer je ingelogd bent) om de algemene configuratie te controleren. Bedankt dat je voor phpBB2  hebt gekozen.';
$lang['Download_config'] = 'Download Config';

$lang['ftp_choose'] = 'Kies Download Methode';
$lang['ftp_option'] = '<br />Aangezien FTP extensies toegestaan zijn in deze versie van PHP kun je ook de eerst mogelijkheid krijgen om te proberen het config bestand automatisch naar de juiste plek te FTP-en.';
$lang['ftp_instructs'] = 'Je hebt ervoor gekozen om het bestand automatisch naar het account, waarin phpBB2 staat, te ftp-en. Vul hieronder de voor dit proces benodigde informatie in. Denk eraan dat het FTP pad het exacte pad naar je phpBB2 installaties moet zijn, zoals je het met een normale client zou ftp-en.';
$lang['ftp_info'] = 'Voer je FTP Informatie in';
$lang['Attempt_ftp'] = 'Probeer het config bestand naar de juiste plek te ftp-en';
$lang['Send_file'] = 'Stuur mij gewoon het bestand toe en dan ftp ik hem handmatig';
$lang['ftp_path'] = 'FTP pad naar phpBB 2';
$lang['ftp_username'] = 'Je FTP Gebruikersnaam';
$lang['ftp_password'] = 'Je FTP Wachtwoord';
$lang['Transfer_config'] = 'Start Overdracht';
$lang['NoFTP_config'] = 'De poging om het config bestand naar de juiste plek te FTP-en is mislukt. Download het config bestand en FTP het handmatig naar de juiste plek.';

$lang['Install'] = 'Installeer';
$lang['Upgrade'] = 'Upgrade';


$lang['Install_Method'] = 'Kies je installatie methode';

$lang['Install_No_Ext'] = 'Je PHP configuratie ondersteunt geen database systeem dat phpBB kan gebruiken.';

$lang['Install_No_PCRE'] = 'phpBB2 heeft de Perl-Compatible Regular Expressions Module voor PHP nodig. Deze is niet actief in je PHP installatie.';

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
// Stop Forum Spam
//
$lang['sfs_enable'] = 'StopForumSpam-controle bij registratie inschakelen';
$lang['sfs_enable_explain'] = 'Gebruikt de API van stopforumspam.com om gebruikersnaam, e-mail en IP te controleren bij registratie.';

//
// That's all Folks!
// -------------------------------------------------

?>
