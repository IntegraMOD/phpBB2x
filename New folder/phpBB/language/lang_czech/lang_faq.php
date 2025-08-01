<?php
/***************************************************************************
 *                          lang_faq.php [czech]
 *                          --------------------
 *     characterset         : Windows-1250
 *     phpBB version        : 2.0.2
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     translation          : info@emilio.cz
 *     www                  : phpbb.atmplus.cz
 *
 *     $Id: lang_faq.php,v 1.1.2.1 2002/08/23 19:20:51 psotfx Exp $
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
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//


$faq[] = array("--","Registrace a pøihlášení");
$faq[] = array("Proè se nemohu pøihlásit ?", "Už jste se zaregistrovali ? Pøed pøihlášením je nutné se nejdøíve registrovat. Byla vám na fóru zakázána èinnost (v takovém pøípadì se tato skuteènost zobrazí) ? Pokud ano, kontaktujte administrátora a ptejte se na dùvody. Pokud jste se registrovali, nebyli jste z fóra vylouèeni a stále se nemùžete pøihlásit, znovu zkontrolujte pøihlašovací jméno a heslo. Obvykle toto bývá ten problém a pokud není, kontaktujte administrátora, možná má chybné nastavení fóra.");
$faq[] = array("Je vùbec potøeba se registrovat ?", "Nemusíte. Vše je na administrátorovi fóra, zda je potøeba se registrovat ke vkládání pøíspìvkù. Samozøejmì, že registrace vám dá pøístup k ostatním službám nedostupným anonymním uživatelùm, jako napø. postavièky, soukromé zprávy, emailování uživatelù, pøihlášení do skupin, atd. Vøele vám tedy registraci doporuèujeme. Zabere to jen pár chvil.");
$faq[] = array("Proè jsem automaticky odhlášen ?", "Pokud nezaškrtnete tlaèítko <i>Automatické pøihlášení</i>, když se pøihlásíte, budete pøihlášeni jen po dobu práce na fóru. Toto má zabránit zneužití vašeho úètu nìkým jiným. Abyste zùstali pøihlášeni, zaškrtnìte toto políèko, když se pøihlásíte.Toto ovšem nedoporuèujeme, když se pøihlašujete z veøejného poèítaèe, napø. v knihovnì, internetové kavárnì, univerzitì atd.");
$faq[] = array("Jak zabráním, aby se moje uživatelské jméno objevilo v seznamu právì pøihlášených ?", "Ve vašem nastavení najdete možnost <i>Ukrýt se pøi pøihlášení</i>, pokud tuto možnost <i>zvolíte</i> budete viditelní jen pro administrátory nebo sami sobì. Budete poèítáni jako ukrytý uživatel.");
$faq[] = array("Zapomnìl jsem heslo!", "Nepanikaøte! Vaše heslo mùžeme obnovit. V tomto pøípadì zmáèknìte na pøihlašovací stránce tlaèítko <u>Zapomnìl jsem svoje heslo</u>, pokraèujte dle instrukcí a témìø ihned budete pøihlášeni");
$faq[] = array("Zaregistroval jsem se, ale nemohu se pøihlásit!", "Nejprve zkontrolujte, že zadáváte správné uživatelské jméno a heslo. Pokud jsou v poøádku, pak se mohla odehrát jedna z následujících dvou vìcí. Pokud je umožnìna podpora COPPA a klikli jste pøi registraci na odkaz <u>Je mi ménì než 13 let</u>  budete muset následovat zaslané instrukce. Pokud toto není ten pøípad, pak váš úèet musí být aktivován. Nìkteré boardy potøebují aktivaci všech nových registrací, buï Vámi nebo administrátorem pøed tím, než se mùžete pøihlásit. Když jste registrovali, byli byste k tomuto vyzváni. Pokud vám byl zaslán e-mail, následujte instrukce v nìm obsažené, pokud jste tento email neobdrželi, ujistìte se, že vámi zadaná emailová adresa je platná ? Jeden dùvod, proè se aktivace používá je zmenšit možnost <i>èervených</i> uživatelù obtìžujících board anonymnì. Pokud si jste jisti, emailová adresa, kterou jste použili je platná, zkontaktujte administrátora boardu.");
$faq[] = array("V minulosti jsem se zaregistroval, ovšem nyní se nemohu pøihlásit ?!", "Nejpravdìpodobnìjší dùvody; zadali jste chybné uživatelské jméno nebo heslo (zkontrolujte email, který jste obdrželi, když jste se zaregistrovali) nebo administrátor z nìjakého dùvodu smazal váš úèet. Pokud je to ten druhý pøípad, pak jste možná nevložili žádný pøíspìvek ? Je to obvyklé, že pravidelnì se odstraòují uživatelé, kteøí nièím nepøispìli, aby se zmenšila velikost databáze. Zkuste se zaregistrovat znovu a zapojte se do diskuzí.");


$faq[] = array("--","Uživatelská nastavení ");
$faq[] = array("Jak zmìním svoje nastavení ?", "Všechna vaše nastavení (pokud jste registrováni) jsou uloženy v databázi. Ke zmìnì staèí zmáèknout tlaèítko odkazu <u>Profil</u> (obvykle se objevuje na horní èásti stránky, ale toto nemusí být ten pøípad). Takto si mùžete zmìnit veškerá svá nastavení.");
$faq[] = array("Èasy jsou špatnì!", "Èasy jsou témìø vždy v poøádku, ovšem to, co vidíte jsou èasy zobrazené v jiném èasovém pásmu než v tom, ve kterém se nacházíte. Pokud je to tak, zmìòte si èasové pásmo v profilu. Berte na vìdomí, že zmìnou èasového pásma a podobná nastavení mohou mìnit jen registrovaní uživatelé. Takže pokud nejste registrováni, toto je dobrý dùvod, proè tak uèinit!");
$faq[] = array("Zmìnil jsem èas. pásmo, ale je to stále špatnì!", "Jste si jisti, že jste zadali èas.pásmo správnì a pøesto se liší od toho správného, pak tou nejpravdìpodobnìjší odpovìdí je, že se jedná o letní èas. Fórum není stavìno na registrování rozdílù mezi standardním a letním èasem, takže se mùže jednat o 1 hodinový rozdíl.");
$faq[] = array("Mùj jazyk není na seznamu!", "Zøejmì administrátor nenainstaloval tento jazyk, nebo jej nikdo do tohoto jazyka zatím nepøeložil. Kontaktujte administrátora, pøípadnì si pøeklad vytvoøte sami. Pro více informací se podívejte na stránky phpBB Group");
$faq[] = array("Jak zobrazím obrázek pod uživ. jménem ?", "Možná, že jste zaregistrovali pøi prohlížení pøíspìvkù dva obrázky pod uživatelským jménem. Ten první je obrázek spojený s vaší úrovní, obvykle ve tvaru hvìzdièek nebo kostièek ukazující, kolik pøíspìvkù jste již pøidali, nebo vaší pozici ve fóru. Pod ním se mùže nacházet vìtší obrázek, známý jako \"postavièka\" (avatar), což je vlastnì unikátní obrázek každého uživatele. Záleží na administrátorovimini, zda postavièky povolí èi jak s nimi naloží (v jaké podobì se zobrazí). Pokud nemùžete využívat postavièky, pak právì tehdy toto administrátoøi zakázali, a vy byste se mìli zeptat na dùvody (vìøíme, že se šiknou!)");
$faq[] = array("Jak zmìní svoje zaøazení ?", "Obecnì vzato, svoje zaøazení zmìnit pøímo nemùžete (úrovnì se objevují pod vaším uživatelským jménem v tématech a na vašem profilu, což záleží na použitém vzhledu). Vìtšina nástìnek používají hodnocení úrovní k rozlišení poètu vámi pøidaných pøíspìvkù a k identifikaci urèitých uživatelù, napø. oznaèení moderátorù a administrátorù mùže mít zvláštní vzhled. Prosím, nezatìžujte board zbyteèným pøispívánímjen, abyste dosáhli vyšší úrovnì. Moderátor nebo administrátor pak mùže poèet vašich pøíspìvkù snížit.");
$faq[] = array("Když kliknu na emailový odkaz na uživatele, jsem vyzván k pøihlášení", "Pouze registrovaní uživatelé mohou posílat email lidem pøes nastavený emailový formuláø (pokud administrátor tuto možnost povolil). Toto umožòuje se zbavit otravných anonymních vzkazù.");


$faq[] = array("--","Vkládání pøíspìvkù");
$faq[] = array("Jak vložím téma do fóra ?", "Jednouše. Kliknìte na pøíslušné tlaèítko na obrazovce fóra nebo tématu. Možná bude nutné se registrovat, než budete moci pøispìt do diskuze, to, co vám je povoleno mùžete vidìt na spodní èásti fóra nebo tématu (Napø.<i>Mùžete pøidávat nová témata, Mùžete volit v anketách, atd.<i>)");
$faq[] = array("Jak zmìním nebo smažu pøíspìvek ?", "V pøípadì, že nejste moderátor nebo administrátor, tak mùžete upravovat nebo mazat jen svoje pøíspìvky. Mùžete upravit zprávu (nìkdy jen do omezeného èasu po pøispìní) kliknutím na tlaèítko <i>upravit</i>.  Pokud již nìkdo odpovìdìl na váš pøíspìvek, objeví se vám malinký výstup textíku pod pøíspìvkem, když se vrátíte k tématu, což ukazuje, kolikrát jste tento pøíspìvek upravovali. Toto se objeví, pokud nikdo neodpovídal, nebo pokud moderátor èi administrátor zmìnili pøíspìvek (mìli by zanechat vzkaz proè jej zmìnili). Normální uživatelé nemohou pøíspìvek smazat, pokud na nìj nìkdo již odpovìdìl.");
$faq[] = array("Jak pøidám podpis k mému pøíspìvku ?", "Pøidat podpis znamená, že si musíte nejdøív nìjaký vytvoøit. To udìláte pøes položku profil. Po vytvoøení si zkontrolujte položku <i>Pøidat podpis</i>. Mùžete rovnìž pøidat stejný podpis pro všechny vaše pøíspìvky zaškrtnutím pøíslušného políèka v profilu (je možné nepøidávat podpis k vybraným pøíspìvkùm odstranìním tohoto zaškrtnutí");
$faq[] = array("Jak vytvoøím anketu ?", "Vytvoøení ankety je jednoduché. Když pøidáte nový pøíspìvek (nebo upravovat první pøíspìvek, pokud mùžete) mìli byste vidìt tlaèítko <i>Pøidat anketu</i> pod hlavním oknem na pøidávání pøíspìvkù (pokud to nevidíte, zøejmì nemáte oprávnìní vytváøet ankety). Mìli byste zadat název ankety a pak alespoò 2 možnosti (nastavte napsáním název otázky a kliknìte na <i>Pøidat možnost</i>. Mùžete také pøidat èasový limit pro anketu, kde 0 znamená neomezenou volbu. Nastavením administrátora tak vznikne limit pro možnosti, které uvedete");
$faq[] = array("Jak zmìním nebo smažu anketu ?", "Je to stejné jako s pøíspìvky, ankety mohou být editovány pùvodním autorem, moderátorem nebo adminem. Editaci zahájíte kliknutím na první pøíspìvek v tématu (toto je vždy s anketou spojeno). Pokud nikdo zatím nehlasovat, pak uživatelé mohou vymazat nebo zmìnit položku v anketì, v pøípadì již uskuteènìné volby to tak mùže uèinit jen moderátor nebo admin. Toto by mìlo zabránit v manipulaci s výsledky ankety");
$faq[] = array("Proè se nemohu dostat k fóru ?", "Nìkterá fóra mohou být znepøístupnìna urèitým lidem èi skupinám. Ke ètení, prohlížení, èi pøispívat atd. potøebujete  zvláštní autorizaci, kterou mùže poskytnout jen moderátor a admin, takže kontaktujte je.");
$faq[] = array("Proè nemohu hlasovat v anketì ?", "Hlasovat mohou jen registrovaní uživatelé (aby nebyly zkresleny výsledky). Pokud jste registrováni a stále nemùžete volit, zøejmì nemáte oprávnìný pøístup.");


$faq[] = array("--","Formátování a typy pøíspìvkù");
$faq[] = array("Co je BBCode ?", "BBCode je zvláštní implementace HTML, kde použití BBCode je rozhodnutí administrátora (mùžete toto nepovolit pro jednotlivé pøíspìvky). BBCode sám o sobì je podobný stylem HTML, tagy jsou uzavøeny v hranatých závorkách [ a ] více než &lt; a &gt; a nabízí vìtší kontrolu nad tím, co a jak se zobrazí. Pro více informací o BBCode prohlédnìte si prùvodce.");
$faq[] = array("Mùžu používat HTML ?", "To závisí na tom, zda vám to administrátor povolí. Pokud to máte povoleno, zjistíte, že jen nìkteré tagy fungují. Což je <i>bezpeènostní</i> funkce, která zamezí zneužití nebo znièení vzhledu èi zpùsobení jiných problémù. Pokud je HTML povoleno mùžete je zase pøíspìvek od pøíspìvku tuto volbu zakázat.");
$faq[] = array("Co to jsou smajlíky ?", "Smajlíky, neboli Emotikony jsou malé grafické obrázky, které se používají k vyjádøení výrazu emocí za použití malého kódu, napø. :) znamená šastný, :( znamená smutný. Plný seznam smajlíkù si mùžete prohlédnout pøes pøíspìvkový formuláø. Prosím, zkuste tyto smajlíky nepøeužívat, aby se pøíspìvek nestal neèitelným. Moderátor mùže také pøípadnì váš pøíspìvek v tomto smìru zmìnit.");
$faq[] = array("Mohu pøidávat obrázky ?", "Obrázky se mohou zobrazovat ve vašich pøíspìvcích. Aèkoliv v souèasné dobì neexistuje žádná funkce k nahrání obrázkù pøímo na board. Z tohoto dùvodu musíte uvést na takový obrázek odkaz, napø. http://www.nekde-na-internetu.cz/muj-obrazek.gif. Nemùžete udìlat odkazy na obrázky na vlastním PC (pokud to není veøejnì pøístupná stanice) nebo obrázky za provìøujícími mechanismy, napø. schránky hotmail nebo yahoo, zaheslované odkazy, atd. K zobrazení obrázku použijte buï BBCode [img] tag nebo pøíslušné HTML (je-li povoleno).");
$faq[] = array("Co to jsou oznámení ?", "Oznámení èasto pøinášejí dùležité informace a mìli byste je èíst co nejdøíve. Oznámení se objevují na horní èásti každé stránky fóra, kde jsou uvedeny. Zda mùžete èi nemùžete pøispívat oznámeními záleží na dostupných povoleních, které jsou nastaveny administrátorem.");
$faq[] = array("Co to jsou pøilepená témata ?", "Pøilepená témata se objevují dole a pouze na první stránce. Jsou èasto velmi dùležitá, takže si je pøeètìte tam, kde jsou. Stejnì jako u oznámení rozhoduje administrátor, která povolení jsou potøeba k pøilepení takových témat v každém fóru.");
$faq[] = array("Co to jsou uzamèená témata ?", "Uzamèená témata jsou nastavena moderátorem nebo administrátorem. Nemùžete odpovídat na zamèená témata a každá taková anketa je automaticky ukonèena. Témata mohou být uzavøena z mnoha dùvodù.");


$faq[] = array("--","Uživatelské úrovnì a skupiny");
$faq[] = array("Kdo jsou administrátoøi ?", "Administrátoøi jsou lidé povìøení nejvyšší kontrolou nad celým fórem. Tito lidé mohou kontrolovat veškerý chod boardu vèetnì povolování, zakazování uživatelù, vytváøení uživatelských skupin nebo moderátorù, atd. Mají také všechny pravomoci moderátorù v celém fóru.");
$faq[] = array("Kdo jsou moderátoøi ?", "Moderátoøi jsou jednotlivci (nebo skupiny jednotlivcù), jejichž práce je starat se o chod boardù každý den. Mají právo upravovat nebo mazat pøíspìvky, zamykat/odmykat, pøesouvat, mazat a rozdìlovat témata, která spravují. Obecnì øeèeno, moderátoøi jsou od toho, aby lidé nepøispívali <i>mimo téma<i> nebo nepøidávali otravný materiál.");
$faq[] = array("Co jsou uživatelské skupiny ?", "Uživatelské skupiny jsou cestou, kterou administrátoøi mohou seskupovat uživatele. Každý uživatel mùže patøit do nìkolika skupin (to záleží i na ostatních boardech) a každé skupinì mùže být pøipsán individuální pøístup. To umožòuje administrátorùm snáze nastavit nìkolik uživatelù jako moderátory fóra, nebo jim dát pøístup na privátní fórum, atd.");
$faq[] = array("Jak se mohu zapojit do uživ. skupiny ?", "Pøipojit se do uživatelské skupiny staèí kliknout na odkaz uživatelské skupiny na titulku stránky (záleží na vzoru), a pak mùžete vidìt všechny skupiny. Ne všechny skupiny mají <i>otevøený pøístup</i>, nìkteré jsou uzavøené a nìkteré mají utajené èlenství. Pokud je board otevøený, mùžete zažádat o zaøazení kliknutím na pøíslušné tlaèítko. Moderátor uživatelské skupiny musí vaši žádost schválit, a mùže se vás zeptat na dùvody, proè chcete do skupiny vstoupit. Prosím, nenadávejte moderátorovi, pokud vaší žádosti nevyhoví. Má svùj dùvod.");
$faq[] = array("Jak se stanu moderátorem uživatelské skupiny ?", "Uživatelské skupiny jsou pùvodnì vytvoøeny adminem a mohou také ustanovit moderátora. Máte-li zájem vytvoøit uživatelskou skupinu, pak jako prvního kontaktujte administrátora soukromou zprávou.");


$faq[] = array("--","Soukromé zprávy");
$faq[] = array("Nemùžu posílat soukromé zprávy!", "Pro toto existují 3 dùvody. Nejste registrovaní nebo nejste pøihlášeni, administrátor znemožnil posílání soukromých zpráv pro celý board nebo to admin zakázal vám. Pokud toto je ten dùvod, zeptejte se admina, proè to tomu tak je.");
$faq[] = array("Dostávám nechtìné soukromé zprávy!", "Plánujeme pøidání seznamu ignorovaných v systému zasílání privátních zpráv. Nyní, pokus dostáváte takové vzkazy, kontaktujte svého admina, který má tu moc takovému uživateli zasílání zpráv zakázat.");
$faq[] = array("Dostal jsem spamový a obtížný mail od nìkoho z fóra!", "To je nám líto. Pøíspìvkové formuláøe obsahují obranné mechanismy, kterými se snažíme vystopovat takového uživatele. Mìli byste napsat administrátorovi a zaslat plnou kopii emailu, který jste obdrželi, což je velmi dùležité (kvùli hlavièce, která potøebné informace obsahuje). Oni pak mohou konat.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Záležitosti okolo phpBB 2");
$faq[] = array("Kdo napsal tento program ?", "Tento software (v její nemodifikované formì) je vytvoøen, zveøejnìn a chránìn autorskými právy <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Je dostupný pod the GNU General Public Licence a mùže být volnì distribuován. Pro více informací kliknìte <a href=\"http://www.phpbb.com/\" target=\"_blank\">zde</a>");
$faq[] = array("Proè není k dispozici funkce X ?", "Tento software byl napsán a licencován pøes phpBB Group. Máte-li dojem, že je potøeba pøidat nìjakou funkci, navštivte stránku phpbb.com a ovìøte si, co phpBB Group øekne. Prosím, nevkládejte tyto požadavky na fóru phpbb.com, the Group používá sourceforge ke zkoušení nových voleb. Prosím, proètìte si fóra a ovìøte si, zda už se nìco takového nezkoušelo a následujte pøíslušné instrukce.");
$faq[] = array("Koho mám kontaktovat ohlednì obtížných emailù nebo právních záležitostí boardu ?", "Mìli byste kontaktovat administrátora tohoto fóra. Když ho nemùžete najít, zkuste nejprve kontaktovat moderátora fóra a pøeptejte se na kontakt. Pokud se nic nedìje, kontaktujte majitele domény (zkuste vyhledat na \"whois\") nebo, pokud tato služba bìží na freeserveru (napø. yahoo, free.fr, f2s.com, atd.), management nebo oddìlení stížností takového provozovatele. Berte na vìdomí, že phpBB Group nemá vùbec žádnou moc a nemùže nijak ovlivnit to jak, kdo a kde spravuje board. Je tedy absolutnì bezpøedmìtné kontaktovat phpBB Group v jakékoliv právní záležitosti (nactiutrhání, pomluvy, atd.) nepøímo spojený s phpbb.com nebo se samotným software phpBB. Pokud zašlete email phpBB Group o použití softwaru tøetí stranou neoèekávejte žádnou odpovìï.");

//
// This ends the FAQ entries
//

?>