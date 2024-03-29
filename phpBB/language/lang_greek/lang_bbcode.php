<?php
/***************************************************************************
 *                         lang_bbcode.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3 2001/12/18 01:53:26 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
 
// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Εισαγωγή");
$faq[] = array("Τι είναι το BBCode?", "Το BBCode είναι μια ιδική παραλαγή της HTML. Η χρήση της ή η μη χρήση της ορίζετε από τον διαχειριστή του συστήματος. Μπορείτε να την απενεργοποιείτε κατά βούληση κάθε φορά που συντάσσετε ένα μήνυμα. Το BBCode είναι παρόμοιο στην δομή της με την HTML, οι εντολές της περικλείονται σε αγκύλες [ and ] αντί του  &lt; and &gt; Και προσφέρει μεγαλύτερο έλεγχο στο τι και το πώς θα εμφανίζετε στην σελίδα. Ανάλογα με την περιβολή που χρησιμοποιείτε, θα βρείτε την επιλογή ενεργοποίησης της στην φόρμα σύνταξης ενός μηνύματος, καθώς και κουμπιά μορφοποίησης της εγγραφής σας. Ακόμα και η ύπαρξη αυτόν τον κουμπιών δεν μπορεί να αντικαταστήσει την πληρότητα του παρακάτω βοηθήματος.");

$faq[] = array("--","Μορφοποίηση Κειμένου");

$faq[] = array("Πώς να κάνω το κείμενο μου έντονο, πλάγιο και υπογραμμισμένο", "Το BBCode περιλαμβάνει εντολές οι οποίες επιτρέπουν με γρήγορο τρόπο να αλλάξουμε τον βασικό χαρακτήρα του κειμένου. Αυτό το πετυχαίνουμε με τους εξής τρόπους: <ul><li>Για να πετύχετε έντονο κείμενο περικλείστε το με τα <b>[b][/b]</b>, πχ. <br /><br /><b>[b]</b>Γειά σας<b>[/b]</b><br /><br />θα εμφανίζετε: <b>Γειά σας</b></li><li>Για υπογραμμισμένο κείμενο χρησιμοποιήστε <b>[u][/u]</b>, για παράδειγμα:<br /><br /><b>[u]</b>Καλή μέρα<b>[/u]</b><br /><br />θα εμφανίζετε: <u>Καλή μέρα</u></li><li>Για πλάγια γραφή <b>[i][/i]</b>, π.χ.<br /><br />Αυτό είναι <b>[i]</b>Καταπληκτικό!<b>[/i]</b><br /><br />θα εμφανισθεί ως: Αυτό είναι <i>Καταπληκτικό!</i></li></ul>");

$faq[] = array("Πώς να αλλάξω το χρώμα και το μέγεθος του κειμένου", "Για να επεξεργασθείτε το χρώμα και το μέγεθος του κειμένου χρησιμοποιήστε τις ακόλουθες εντολές. Να έχετε υπόψη ότι η τελική εμφάνιση εξαρτάτε και από το λειτουργικό και το πρόγραμμα περιήγησης που χρησιμοποιείται: <ul><li>Όπως προαναφέραμε για να χρωματίσετε ή να αλλάξετε το μέγεθος του κειμένου περικλείστε το με τις ανάλογες εντολές <b>[color=][/color]</b>. Μπορείτε να χρησιμοποιήσετε ένα χρώμα με την τυποποιημένη ονομασία του (Αγγλικά red, blue, yellow, κλπ.) ή σε δεκαεξαδική μορφή π.χ. #FFFFFF, #000000. Για παράδειγμα εάν θέλετε κόκκινο κείμενο συντάξτε με τον ακόλουθο τρόπο:<br /><br /><b>[color=red]</b>Γεια σας!<b>[/color]</b><br /><br />ή<br /><br /><b>[color=#FF0000]</b>Για σας!<b>[/color]</b><br /><br />και τα δύο θα εμφανίσουν: <span style=\"color:red\"> Γεια σας!</span></li><li>Ο ορισμός μεγέθους της γραμματοσειράς γίνετε μα παρόμοιο τρόπο χρησιμοποιώντας τις εντολές <b>[size=][/size]</b>. Η εντολή εξαρτάτε από την δομή του συστήματος, όμως η προτεινόμενη μέθοδος είναι να ορίζετε αριθμητικό μέγεθος που αντιστοιχεί σε εικονοστοιχεία, αρχίζοντας με το 1 (τόσο μικρό που δεν γίνετε ορατό στην οθόνη) μέχρι το 29 (πολύ μεγάλο μέγεθος). Παράδειγμα:<br /><br /><b>[size=9]</b>ΜΙΚΡΟ<b>[/size]</b><br /><br />εμφανίζετε ως: <span style=\"font-size:9px\">ΜΙΚΡΟ</span><br /><br />και αντίστοιχα:<br /><br /><b>[size=24]</b>ΜΕΓΑΛΟ!<b>[/size]</b><br /><br />εμφανίζετε: <span style=\"font-size:24px\">ΜΕΓΑΛΟ!</span></li></ul>");
$faq[] = array("Μπορώ να συνδυάσω τις εντολές;", "Βεβαίως, για παράδειγμα μπορείτε να γράψετε:<br /><br /><b>[size=18][color=red][b]</b>ΠΡΟΣΟΧΗ!<b>[/b][/color][/size]</b><br /><br />εμφανίζετε: <span style=\"color:red;font-size:18px\"><b> ΠΡΟΣΟΧΗ!</b></span><br /><br />Δεν συνιστούμε την αλόγιστη χρήση του άνω παραδείγματος για να μην επιβαρύνετε την αναγνωσιμότητα του κειμένου σας! Να θυμάστε πως πάντα, οι εντολές πρέπει να τερματίζονται σωστά. Για παράδειγμα, η παρακάτω σύνταξη είναι εσφαλμένη:<br /><br /><b>[b][u]</b>Λάθος σύνταξης<b>[/b][/u]</b>");

$faq[] = array("--","Παράθεση κειμένου και εμφάνιση σταθερού-πλάτους κειμένου");
$faq[] = array("Παράθεση κειμένου σε απάντηση μηνύματος", "Υπάρχουν δύο τύποι παράθεσης, με αναφορά  και χωρίς.<ul><li>Όταν ενεργοποιείτε την εντολή παράθεσης κειμένου σε μια απάντηση σας θα προσέξατε ότι το κείμενο σας στο παράθυρο του μηνύματος εσωκλείστηκε σε<b>[quote=\"\"][/quote]</b> πλαίσιο. Με αυτόν τον τρόπο είναι δυνατό να κάνουμε την παράθεση με αναφορά σε πρόσωπο ή ότι άλλο θέλετε εσείς! Ως παράδειγμα, για να παραθέσουμε ένα μικρό κομμάτι κείμενου - Ο Κος Κανένας έγραψε - θα γράψετε:<br /><br /><b>[quote=\" Κος Κανένας \"]</b>Το κείμενο - Ο Κος Κανένας έγραψε - τοποθετείτε εδώ<b>[/quote]</b><br /><br />Το αποτέλεσμα είναι να προστεθεί αυτόματα το Ο Κος Κανένας έγραψε: πριν το κυρίως κείμενο. Να θυμάστε πως πάντα <b>πρέπει</b> να συμπεριλαμβάνετε τα \" \" γύρω από το όνομα της παράθεσης, δεν είναι προαιρετικά!</li><li>Ο δεύτερος τύπος είναι να παραθέτουμε το κείμενο ως έχει. Και επιτυγχάνετε με τις <b>[quote][/quote]</b> εντολές. Αυτό θα εμφανίσει απλά το, Παράθεση: πριν το κυρίως κείμενο.</li></ul>");
$faq[] = array("Εμφάνιση κώδικα ή σταθερού-πλάτους κείμενο", "Εάν θέλετε να εμφανίσετε κώδικα ή οτιδήποτε χρειάζεται σταθερό πλάτος π.χ. Courier γραμματοσειρά πρέπει να περικλείσετε το κείμενο σας με την εντολή <b>[code][/code]</b>, π.χ.<br /><br /><b>[code]</b>echo \"Αυτό είναι ένα τμήμα κώδικα\";<b>[/code]</b><br /><br />Όλες οι εντολές που χρησιμοποιήσατε, ενδιάμεσα της εντολής <b>[code][/code]</b>, εμφανίζονται στην οθόνη αναλλοίωτες.");

$faq[] = array("--","Δημιουργία λίστας");
$faq[] = array("Δημιουργία λίστας χωρίς αρίθμηση", "Το BBCode υποστηρίζει δύο τύπους λίστας με αρίθμηση ή με κουκκίδες. Οι εντολές αυτές είναι πανομοιότυπες με τις αντίστοιχες εντολές της HTML. Μια λίστα με κουκκίδες εμφανίζει τις γραμμές του κειμένου την μία κάτω από την άλλη έχοντας μπροστά της μια κουκκίδα. Η δημιουργία της επιτυγχάνεται με την εντολή <b>[list][/list]</b> διαχωρίζοντας το κάθε τμήμα της λίστας με το <b>[*]</b>. Ως παράδειγμα, θέλουμε μια λίστα με τα αγαπημένα μας χρώματα:<br /><br /><b>[list]</b><br /><b>[*]</b>Κόκκινο<br /><b>[*]</b>Μπλε<br /><b>[*]</b>Κίτρινο<br /><b>[/list]</b><br /><br />Θα εμφανίζετε ως εξής: <ul><li>Κόκκινο</li><li>Μπλε</li><li>Κίτρινο</li></ul>");
$faq[] = array("Δημιουργία λίστας με αρίθμηση", "Ο δεύτερος τύπος αρίθμησης σου δίνει τον έλεγχο στο τι εμφανίζεται στην αρχή της γραμμής της λίστας. Οι εντολή που χρησιμοποιούμε είναι η <b>[list=1][/list]</b> για να έχουμε αριθμητικό πρόθεμα ή αντίστοιχα <b>[list=a][/list]</b> για να έχουμε αλφαβητικό πρόθεμα. Χρησιμοποιούμε όπως και στην λίστα χωρίς αρίθμηση τις εντολές <b>[*]</b>για να ορίσουμε τα τμήματα του κειμένου τα οποία δημιουργούν την λίστα. Για παράδειγμα:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Να πληρώσω τον λογαριασμό<br /><b>[*]</b>Να αγοράσω γάλα του παιδιού<br /><b>[*]</b>Να πετάξω τον υπολογιστή μου<br /><b>[/list]</b><br /><br />θα εμφανίσει το ακόλουθο:<ol type=\"1\"><li> Να πληρώσω τον λογαριασμό </li><li> Να αγοράσω γάλα του παιδιού </li><li> Να πετάξω τον υπολογιστή μου </li></ol> Και για αλφαβητικό πρόθεμα:<br /><br /><b>[list=a]</b><br /><b>[*]</b> Να πληρώσω τον λογαριασμό <br /><b>[*]</b> Να αγοράσω γάλα του παιδιού <br /><b>[*]</b> Να πετάξω τον υπολογιστή μου <br /><b>[/list]</b><br /><br />παράγει<ol type=\"a\"><li>Να πληρώσω τον λογαριασμό</li><li>Να αγοράσω γάλα του παιδιού</li><li>Να πετάξω τον υπολογιστή μου</li></ol>");

$faq[] = array("--", "Δημιουργία Συνδέσμων");
$faq[] = array("Σύνδεσμος για άλλη διεύθυνση", " Ο BBCode της phpBB υποστηρίζει διάφορους τρόπους δημιουργίας συνδέσμων (URLs).<ul><li>Ο πρώτος από αυτούς χρησιμοποιεί τις εντολές <b>[url=][/url]</b> , οτιδήποτε και αν πληκτρολογήσετε μετά το = θα το αναγκάσει να συμπεριφέρεται ως σύνδεσμος (URL). Ως παράδειγμα, για να δημιουργήσουμε σύνδεσμο για το phpBB.com χρησιμοποιήστε:<br /><br /><b>[url=http://www.phpbb.com/]</b>Επισκεφτείτε την ομάδα phpBB!<b>[/url]</b><br /><br />Αυτή η γραμμή θα εμφανιστεί ως, <a href=\"http://www.phpbb.com/\" target=\"_blank\"> Επισκεφτείτε την ομάδα phpBB!</a> Θα προσέξετε ότι ο σύνδεσμος ανοίγει ένα νέο παράθυρο, με αυτόν τον τρόπο ο χρήστης μπορεί να συνεχίσει την περιήγηση του στο Forum εφόσον το επιθυμεί.</li><li>Εάν θέλετε ο σύνδεσμος να εμφανίζετε πλήρης συντακτικά, απλά γράψτε:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br /> Αυτή η γραμμή θα εμφανιστεί ως, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Επιπρόσθετα οι δυνατότητες του phpBB προσφέρουν μια δυνατότητα η οποία ονομάζετε <i>Magic Links</i>, με αυτήν την δυνατότητα μπορούμε να μετατρέψουμε τις συντακτικά σωστά γραμμένες τοποθεσίες σε σύνδεσμο (URL) χωρίς να χρειάζεται να ορίζουμε επιπλέον εντολές ούτε καν το πρόθεμα http://. Για παράδειγμα γράφοντας www.phpbb.com μέσα στο μήνυμα σας αυτόματα σας οδηγεί στη διεύθυνση <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> ως σύνδεσμος διαβάζοντας το μήνυμα σας.</li><li>Η δυνατότητα αυτή εφαρμόζετε με τον ίδιο ακριβός τρόπο και για τις email διευθύνσεις, για παράδειγμα:<br /><br /><b>[email]</b>no_one@domain.gr<b>[/email]</b><br /><br />το οποίο εμφανίζει <a href=\"emailto:no_one@domain.gr\">no_one@domain.gr</a> ή απλά γράψτε no_one@domain.gr στο μήνυμα σας το οποίο θα μετατρέπετε αυτόματα σε σύνδεσμο όταν διαβάζετε το μήνυμα σας.</li></ul>Όπως με όλες τις εντολές του BBCode μπορείτε να πλαισιώσετε τον σύνδεσμό σας με εικόνα συνδυάζοντας τις εντολές μεταξύ τους χρησιμοποιώντας την εντολή <b>[img][/img]</b> (αναλύετε εκτενέστερα παρακάτω), <b>[b][/b]</b>, κλπ. Να θυμάστε πάντα να τερματίζετε τις εντολές σας, όπως επισημάναμε και παραπάνω. Όπως και με τις εντολές μορφοποίησης, φροντίζετε για την ορθή ακολουθία των εντολών [αρχή] και [τέλος], για παράδειγμα:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />δεν <u>είναι</u> σωστή, ως αποτέλεσμα το μήνυμα σας μπορεί να διαγραφή, γι' αυτό προσέχετε.");

$faq[] = array("--", "Εμφάνιση εικόνων στα μηνύματα σας");
$faq[] = array("Προσθήκη εικόνας στο μήνυμα σας", "Το BBCode της phpBB ενσωματώνει εντολή για να μπορείτε να συμπεριλάβετε μια εικόνα σε ένα μήνυμα σας. Όμως, πρέπει να θυμάστε δύο σημαντικά πράγματα, πολύ χρήστες δεν επιθυμούν την εμφάνιση πολλών εικόνων στριμωγμένες σ' ένα μήνυμα, και το δεύτερο να υπάρχει αυτή η εικόνα ήδη σε κάποια τοποθεσία του διαδικτύου (δεν μπορεί να χρησιμοποιηθεί μια εικόνα αποθηκευμένη τοπικά στο μηχάνημα σας, εκτός και εάν είναι διακομιστής!). Αυτήν την στιγμή δεν υπάρχει η δυνατότητα να φυλάσσονται οι εικόνες σας στον διακομηστή ο οποίος φιλοξενεί το phpBB (αυτή η δυνατότητα θα υλοποιηθεί σε μελλοντική έκδοση του λογισμικού phpBB). Για να την εμφανίσετε λοιπόν την εικόνα πρέπει να περικλείσετε την διεύθυνση (URL) η οποία αντιστοιχεί στην εικόνα με την εντολή <b>[img][/img]</b>. Για παράδειγμα:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br /> Όπως θα παρατηρήσατε στο τμήμα της URL παραπάνω, μπορείτε να κάνετε την εικόνα ενεργό σύνδεσμο <b>[url][/url]</b> εάν το επιθυμείτε, π.χ.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />παράγει:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Λοιπά Θέματα");
$faq[] = array("Μπορώ να χρησιμοποιήσω άλλες εντολές;", " Δυστυχώς όχι, όχι στην παρούσα έκδοση phpBB 2.0. Μελετούμε πως μπορούμε να προσφέρουμε τις εντολές με ελεύθερα δομημένο τρόπο σε μελλοντική καίρια αναβάθμιση του κώδικα του forum");

//
// This ends the BBCode guide entries
//

?>