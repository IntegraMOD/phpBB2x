<?php
/***************************************************************************
 *                         lang_bbcode.php [esperanto]
 *                            -------------------
 *   begin                : Mardo la 28a de oktobro, 2003
 *   copyright            : (C) 2004 Federico Zenith
 *   email                : zenith@chemeng.ntnu.no
 *
 *   $Id: $
 *
 *
 ***************************************************************************/

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
  
$faq[] = array("--","Enkonduko");
$faq[] = array("Kjo estas BBCode?", "BBCode estas speciala realigo de HTML. Ĉu ci povas fakte uzi BBCode'n en la ciaj afiŝoj ĉe la forumo determiniĝas de la administristo. Aldone, ci povas malaktivigi BBCode'n je afiŝa bazo per la afiŝa formularo. BBCode mem estas stile simila al HTML: etikedoj ĉirkaŭfermiĝas de rektaj krampoj, [ kaj ], anstataŭ &lt; kaj &gt;, kaj ĝi donas pli grandan kontrolon pri kio kaj kiel io montriĝas. Depende de la ŝablono kiun ci uzan ci povus percepti ke aldoni BBCode al la ciaj afiŝoj fariĝas multe pli facile per alklakebla interfaco supre la mesaĝa areo en la afiŝa formularo. Eĉ per tio ci povos percepti la sekvantan gvidon utila.");

$faq[] = array("--","Formigo de Teksto");
$faq[] = array("Kiel krei grasan, kursivan kaj substrekitan tekston", "BBCode enhavas etikedojn por permesi al ci rapide ŝanĝi la bazan stilon de la cia teksto. Ĉi tiu fariĝas per la sekvantaj manieroj: <ul><li>Por grasigi teksteron ĉirkaŭfermi ĝin en <b>[b][/b]</b>, ekz. <br /><br /><b>[b]</b>Saluton<b>[/b]</b><br /><br />iĝos <b>Saluton</b></li><li>Por substrekigo uzu <b>[u][/u]</b>, ekzemple:<br /><br /><b>[u]</b>Bonan  matenon<b>[/u]</b><br /><br />iĝas <u>Bonan matenon</u></li><li>Por kursivigi tekston uzu <b>[i][/i]</b>, ekz.<br /><br />Ĉi tio estas <b>[i]</b>Bonega!<b>[/i]</b><br /><br />donus Ĉi tio estas <i>Bonega!</i></li></ul>");
$faq[] = array("Kiel ŝanĝi la koloron aŭ la grandon de la teksto", "Por ŝanĝi la koloron aŭ grandon de la cia teksto uzeblas la sekvantaj etikedoj. Memoru ke kiel la eliro aperas dependos de la foliumilo kaj sistemo de la uzantoj: <ul><li>Ŝanĝi la koloron de teksto fariĝas ĉirkaŭfermante ĝin en <b>[color=][/color]</b>. Ci povas specifi aŭ rekonatan kolornomon en la angla (ekz. red, blue, yellow, ktp.) aŭ la deksesuman tri-eran alternativon, ekz. #FFFFFF, #000000. Ekzemple, por krei ruĝan tekston ci povus uzi:<br /><br /><b>[color=red]</b>Saluton!<b>[/color]</b><br /><br />or<br /><br /><b>[color=#FF0000]</b>saluton!<b>[/color]</b><br /><br />ambaŭ donos <span style=\"color:red\">Saluton!</span></li><li>Ŝanĝi la grandon de la teksto fariĝas per simila maniero, uzante <b>[size=][/size]</b>. Ĉi tiu etikedo dependas de la ŝablono kiun ci uzas, sed la rekomendita formato estas nombra valoro reprezentanta la grando de la teksto per rastrumeroj, komencante el 1 (tiel malgranda ke ci ne vidos ĝin) ĝis 29 (tre granda). Ekzemple:<br /><br /><b>[size=9]</b>MALGRANDA<b>[/size]</b><br /><br />estos ĝenerale <span style=\"font-size:9px\">MALGRANDA</span><br /><br />dum:<br /><br /><b>[size=24]</b>GRANDEGA!<b>[/size]</b><br /><br />estos <span style=\"font-size:24px\">GRANDEGA!</span></li></ul>");
$faq[] = array("Ĉu mi povas kombini formatigajn etikedojn?", "Jes, kompreneble ci povas; ekzemple por havi ies atenton ci povus skribi:<br /><br /><b>[size=18][color=red][b]</b>RIGARDU MIN!<b>[/b][/color][/size]</b><br /><br />ĉi tio elirigos <span style=\"color:red;font-size:18px\"><b>RIGARDU MIN!</b></span><br /><br />Tamen, ni ne rekomendas ke ci elirigos multan tekston kiu ĉi tiel aperas! Memoru ke la respondeco estas de ci, la afiŝanto, certigi ke la etikedoj estu ĝuste fermitaj. Ekzemple, la sekvanta estas malĝusta:<br /><br /><b>[b][u]</b>Ĉi tio estas malĝusta<b>[/b][/u]</b>");

$faq[] = array("--","Citi kaj elirigi egallarĝan tekston");
$faq[] = array("Citi tekston en respondoj", "Estas du manieroj per kiuj ci povas citi tekston: kun referenco aŭ sen.<ul><li>Kiam ci uzas la funckion Citu por respondi al afiŝo ĉe la forumaro, ci devus rimarki ke la afiŝan tekston aldoniĝas al la mesaĝa fenestro cirkaŭfermita en bloko de <b>[quote=\"\"][/quote]</b>. Ĉi tiu metodo permesas al ci citi kun referenco al homo aŭ io ajn kion ci deziras enmeti. Ekzemple, por citi teksteron kiun Sr.o Ajno skribis, ci enmetus:<br /><br /><b>[quote=\"Sr.o Ajno\"]</b>La teksto kiun Sr.o Ajno skribis devus skribiĝi ĉi tie<b>[/quote]</b><br /><br />La rezultanta eliro aŭtomate aldonos: Sr.o Ajno skribis: malpost la teksto. Memoru ke ci <b>devas</b> inkluzivi la citilojn \"\" ĉirkaŭ la nomo kiun ci citas -- ili ne estas opciaj.</li><li>La dua metodo permesas al ci blinde citi ion. Por uzi ĉi tion ĉirkaŭfermu la tekston en <b>[quote][/quote]</b>-etikedoj. Kiam ci vidas la mesaĝon, ĝi simple montros: Citaĵo: malpost la teksto mem.</li></ul>");
$faq[] = array("Elira kodo aŭ egallarĝaj datumoj", "Se ci volas elirigi koderon aŭ fakte ion ajn kiu bezonas egallarĝon per Courier-tipa tiparo, ci devus ĉirkaŭfermi la tekston en <b>[code][/code]</b>-etikedoj, ekz.<br /><br /><b>[code]</b>echo \"Ĉi tiu estas iom da kodo\";<b>[/code]</b><br /><br />Ĉiu formatado uzita ene de <b>[code][/code]</b>-etikedoj reteniĝas kiam ĝi vidos ĝin poste.");

$faq[] = array("--","Generi listojn");
$faq[] = array("Krei Ne-ordigitan liston", "BBCode subtenas du tipojn da listoj, neordigitaj kaj ordigitaj. Ili estas baze la samaj kiel en HTML. Neordigita listo elirigas ĉiun eron en la cia listo sinsekve unu post la alia, deŝovante ĉiun per bula signo. Por krei neordigitan liston ci uzas <b>[list][/list]</b> kaj difinas ĉiun eron ene de la listo uzante <b>[*]</b>. Ekzemple, por listigi la ciajn favoratajn kolorojn ci devus uzi:<br /><br /><b>[list]</b><br /><b>[*]</b>Ruĝo<br /><b>[*]</b>Bluo<br /><b>[*]</b>Flavo<br /><b>[/list]</b><br /><br />Ĉi tio generus la sekvantan liston:<ul><li>Ruĝo</li><li>Bluo</li><li>Flavo</li></ul>");
$faq[] = array("Krei ordigitan liston", "La dua tipo de listo, ordigita listo, donas al ci kontrolon pri kio eliriĝas malpost ĉiu ero. Por krei ordigitan liston ci uzas <b>[list=1][/list]</b> por krei nombrigitan liston aŭ alternative <b>[list=a][/list]</b> por alfabeta listo. Kiel je la ordigita listo, eroj specifiĝas uzante <b>[*]</b>. Ekzemple:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Iru al la vendejo<br /><b>[*]</b>Aĉetu novan komputilon<br /><b>[*]</b>Ĵuru al la komputilo kiam ĝi kraŝas<br /><b>[/list]</b><br /><br />generu la sekvantan:<ol type=\"1\"><li>Iru al la vendejo</li><li>Aĉetu novan komputilon</li><li>Ĵuru al la komputilo kiam ĝi kraŝas</li></ol>Dum por alfabeta listo ci uzus:<br /><br /><b>[list=a]</b><br /><b>[*]</b>La unua ebla respondo<br /><b>[*]</b>La dua ebla respondo<br /><b>[*]</b>La tria ebla respondo<br /><b>[/list]</b><br /><br />donante<ol type=\"a\"><li>La unua ebla respondo</li><li>La dua ebla respondo</li><li>La tria ebla respondo</li></ol>");

$faq[] = array("--", "Krei ligilojn");
$faq[] = array("Ligi al alia situo", "La BBCode de phpBB subtenas nombron da manieroj por krei URI-ojn, Unuformajn Risurcajn Indikilojn, pli bone konatajn kiel URLoj.<ul><li>La unua de ĉi tiuj uzas la <b>[url=][/url]</b>-etikedon; ĉion ajn kiun ci entajpas post la signo = kaŭzos ke la enhavoj de la etikedo agu kiel URL. Ekzemple, por ligi al phpBB.com ci uzus:<br /><br /><b>[url=http://www.phpbb.com/]</b>Vizitu phpBB'n!<b>[/url]</b><br /><br />Ĉi tio kreus la sekantan ligilon, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Vizitu phpBB'n!</a> Ci rimarkos ke la ligilo malfermiĝas en nova fenestro, tiel la uzantoj povas kontinui foliumi la forumojn se ili volas.</li><li>Se ci volas ke la URL mem montriĝu kiel la ligilo, ci povas fari ĉi tion simple uzante:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Ĉi tiu generus la sekvantan ligilon: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Aldone, phpBB havas ion nomatan <i>Magiaj ligiloj</i> kiu farigos ajnan sintakse ĝustan URL'on ligilo sen ke ci bezonos specifi ajnan etikedon aŭ eĉ la enkondukantan http://. Ekzemple tajpi www.phpbb.com en la cian mesaĝon aŭtomate elirigos <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> kiam ci vidas la mesaĝon.</li><li>La sama afero aplikas egale al retpoŝtaj adresoj; ci povas aŭ specifi adreson eksplicite, kiel:<br /><br /><b>[email]</b>neniu@domajno.eo<b>[/email]</b><br /><br />kiu eliriĝos <a href=\"emailto:neniu@domajno.eo\">neniu@domajno.eo</a> aŭ ci povas simple tajpi neniu@domajno.eo en la cian mesaĝon, kaj ĝi aŭtomate konvertiĝos kiam ci vidas.</li></ul>Kiel je ĉiuj BBCode-etikedoj ci povas ĉirkaŭfermi URL'ojn ĉirkaŭ ajnaj aliaj etikedoj kiel <b>[img][/img]</b> (vidu sekvantan enskribigon), <b>[b][/b]</b>, ktp. Kiel kun la formatigajn etikedojn estas cia tasko certigi pri la ĝusta ordo de malfermo kaj fermo de etikedoj. Ekzemple:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /><u>ne</u> ĝustas, kiu povus kaŭzi ke la cia afiŝo forviŝiĝos, do atentu.");

$faq[] = array("--", "Montri bildojn en afiŝoj");
$faq[] = array("Aldoni bildon en afiŝo", "La BBCode de phpBB enhavas etikedon por inkluzivi bildojn en la ciaj afiŝoj. Du tre gravaj aferoj memorendaj uzante ĉi tiu etikedon estas: multaj uzantoj ne ŝatas multajn bildojn montrigitajn en afiŝoj, kaj, due, la bildo kiun ci montras devas jam esti havebla ĉe la Interreto (ĝi ne povas ekzisti nur ĉe la cia komputilo, ekzemple, krom se ci laboras ĉe TTT-servilo!). Estas nuntempe neniu maniero konservi bildojn loke kun phpBB (oni atendas ke ĉi ĉiuj aferoj ripariĝos en la sekvanta eldono de phpBB). Por montri bildon, ci devas ĉirkaŭfermi la URL'on indikantan al la  bildon por <b>[img][/img]</b>-etikedoj. Ekzemple:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Kiel rimarkita en la URLa sekcia ĉi-supre, ci povas ĉirkaŭfermi bildon en <b>[url][/url]</b>-etikedon se ci volas, ekz.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />generus:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Aliaj aferoj");
$faq[] = array("Ĉu mi povas aldoni la miajn etikedojn?", "Ne, bedaŭrinde ne rekte en phpBB 2.0. Ni provos oferi agordeblajn BBCode-etikedojn por la sekvanta ĉefversio.");

//
// Ĉi tie finas la BBCode-gvido
//

?>