<?php
/***************************************************************************
 *                          lang_faq.php [asturian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *   
 *   tradución al asturianu : Mikel González (mikelglez@iespana.es)
 *
 *   $Id: lang_faq.php,v 0.9 2002/03/05 16:42:08 Pato[100%Q]
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   Esta ye una aplicación de software llibre, pue re-distribuila y/o modificala
 *   enbaxu los terminos de la GNU (Llicencia Pública Xeneral), la cual foy publicá
 *   per la Free Software Foundation (Fundación del Software Llibre). Esto en la llicencia
 *   de la versión 2 o posterior.
 *
 ***************************************************************************/
 
// 
// Pa enxertar una entrada a les Entrugues Frecuentes namás meta una llinea col siguiente formatu:
// $faq[] = array("entruga", "rempuesta");
// Si quier separar una secion plumie $faq[] = array("--","Un testu de separtación pue dir equí si quier");
// Los enllaces creanse automaticamente :)
//
// NUN OLVIDE poner ; al final de cada llinia.
// NUN PONGA dobles comilles (") enes entraes de sus Entrugues Frecuentes, si ye absolutamente necesariu entos plumielo asi: \"testu\";
//
// Los temas ya entraes de les Entrugues Frecuentes apaecerán nel mesmu orden nel que tean n'esti archivu.
//

  
$faq[] = array("--","A propósito de la entrada (login) y rexistru");
$faq[] = array("¿Por qué nun soi quien a conectame?", "¿Rexistrárase primero? Tien que se rexistrar nel sistema primero de ser quien a entrar. ¿Bloqueáronlu de dalgún foru? (Si ye esto, apaez un mensaxe diciéndo-ylo). Si ye tal, contacte col alministrador del foru pa saber qué pasó. Si yá ta rexistráu y nun lu bloquearon, mire bien que la contraseña y el nome d'usuariu tán bien, ye'l problema mas corriente. Si ta seguru de que tán bien, contacte col alministrador, podía ser que'l foru tea mal configuráu y/o con dalgún fallu na programación.");
$faq[] = array("¿Por qué tengo que me rexistrar pa too?", "Nun hai nenguna obligación, la decisión ye de los alministradores y moderadores. Sicasí, rexistrase trai sinfinidiá de ventayes que nun tán disponibles como invitáu, talo qe tener los gráficos personalizaos (avatar), mensaxes privaos, suscripción a grupos d'usuarios, etc.... Son namás unos segundinos, y ye mui recomendable.");
$faq[] = array("¿Por qué la sesión d'usuariu termina de manera automático?", "Si nun s'activó la caxella entrar de manera automático de la que s'entra nun foru, los datos guárdense nuna cookie que s'elimina en saliendo de la páxina o al cabu d'un tiempu. Esto evita qu'esa cuenta la emplegue dalguién más. Pa que'l sistema lu reconoza de manera automático, nun tien más qu'activar la caxella mentada de la que se conecte. Sicasí, esto nun ye recomendable si aveza conectase al foru dende un ordinador públicu (cyber-café, biblioteca, facultá ...)");
$faq[] = array("¿Cómo evito apaecer nes llistes de veceros conectaos?", "Nel so perfil, atopará la opción ocultar estáu de conexón, n'activando esta opción namás va apaecer pa los alministradores, moderadores y pa usté mesmu, los demas usuarios nun tarán al tanto de la so presencia.");
$faq[] = array("¡Perdióseme la contraseña!", "Nun hai que se precupar, si nun da cola contraseña, siempre puede desactivala o cambiala. Nun hai más que dir a la páxina de rexistru y calcar n'<u>escaecí la contraseña</u>, siga les instruciones y entrará darréu.");
$faq[] = array("¡Rexistreme y nun son quien a conectame!", "Primero verifique los datos (alcuñu y contraseña). Si ye correcto hai dos posibles razones. Si'l Sistema de Protección Infantil (COPPA) ta activáu y de la que se rexistró elixó la opción <u>Soi menor de 13 años</u> entós hai que siguir les instrucciones que se-y dean p'activar la cuenta. N'otros casos l'alministrador rique activar les cuentes per acio d'un corréu lletrónicu, miré'l correu y confirme la suscripción. Dellos foros precisen una confirmación de rexistru. Si nun se tratara de nengún d'estos casos, contacte col alministrador del foru.");
$faq[] = array("Va tiempu que me rexistrara, pero agora nun soi quien a conectame", "Hai delles desplicaciones: Enxertó un alcuñu o contraseña incorrectos (verifique'l mensaxe que se-y unviara de la que se rexistró). Tamién pudo pasar que l'alministrador desaniciara la cuenta, esto ye corriente, si nun escribió nengún mensaxe l'alministrador esborra cuentes pa nun saturar la base datos. Si fuera asina, vuelva rexistrase y participe :)");


$faq[] = array("--","Preferencies d'usuariu y configuración");
$faq[] = array("¿Cómo puedo cambiar la configuración?", "Tolos sos datos y configuraciones (si ta rexistráu) tán arquivaes na nuestra base datos. Pa cambialos calque nel enllaz Perfil, davezo ta darriba la páxina.");
$faq[] = array("La hora nos foros ta mal.", "La hora ta bien, seique ta mirando la hora que correspuende a otra zona horaria, si fuera'l casu, con entrar nel perfil y elixir la zona horaria afayadiza (ex. Londres, París, Nueva York, Sydney, etc.) En cambiándolo, la hora tien qu'apaecer d'acorde cola so zona horaria. Si nun tuviera rexistráu yá ye hora de facelo :)");
$faq[] = array("Cambié la zona horaria pa esti perfil, pero la hora sigue tando mal.", "Si ta seguru de que la zona horaria ye correcta puede ser que sía por cuenta la hora de branu que s'aplica en dellos países.");
$faq[] = array("¡La mio llingua nun apaez ente les opciones!", "Esto puede ser porque l'alministrador nun instalara'l paquete d’esa llingua pal foru o porque naide nun despachara la so traducción :( si fuera tal, bien la podía entamarfsto, (dexuro que muncha xente-ylo diba agradecer), hai información nel sitiu web del grupu phpBB (Cinque nel enllaz abaxo nesta páxina).");
$faq[] = array("¿Cómo poner una imaxe embaxo'l mio alcuñu?", "Hai dos clases d'imaxes embaxo l’alcuñu, la primera ye’l rangu, que ta relacionada col númberu mensaxes escritos nesti foru (davezo son estrellines o bloques), y la segunda ye l'AVATAR, que ye un gráficu xeneralmente únicu y personal, l'alministrador decide si pueden usase o non, si se pueden usar puede añidilu al so perfil. Si nun existiera esta opción, contacte col alministrador y pída-y que la active :)");
$faq[] = array("¿Cómo cambio'l rangu?", "Nun se puede cambiar la clasificación directamente, yá que ta asociáu directamente col númberu mensaxes mandaos o col so estatus de moderador, alministrador o rangos especiales. Por favor, nun abuse mandando mensaxes innecesarios pa espolletar nel rangu.");
$faq[] = array("De la que calco nel enllaz de corréu, pídeme que me rexistre", "Pa ser quien a mandar un corréu lletrónicu a un veceru per acio d’un formulariu (si l'alministrador lu activó) precisa rexistrase en ficies d’evitar correos basura o mensaxes maliciosos d'usuarios anónimos.");


$faq[] = array("--","Publicamientu de mensaxes");
$faq[] = array("¿Cómo asoleyo un mensaxe nel foru?", "Fácil, rexístrese como miembru del foru (calcando nel enllaz de rexistru, xeneralmente no cimero de cada páxina), en rexistrándose, cinque onde diz <i>Unviar un mensaxe nuevu<i>, apaecerá un panel nel que puede publicar un mensaxe bien fácil :)");
$faq[] = array("¿Cómo edito o esborro un mensaxe?", "Si nun ye l'alministrador o’l moderador del foru, namás puede esborriar los mensaxes que mandó. Pa editar un mensaxe cinque n'editar, si dalguién yá contestara, apaecerá un textu menudu diciendo que cambió y cuántes veces, esto nun apaez si lu editara un moderador o l’alministraor (sicasí, les más de les veces dexen un mensaxe aclariándolo).");
$faq[] = array("¿Como añido una firma al mensaxe?", "P’axuntar una firma nos mensaxes, primero hai que la iguar; esto fáise modificando’l perfil. En faciéndolo, abasta con activar la opción <i>Axuntar firma</i> de la qu’escriba un mensaxe. Tamién se puede facer que tolos mensaxes lleven firma, activando esta opción nel perfil.");
$faq[] = array("¿Cómo facer una encuesta?", "Entamar una encuesta ye bien fácil, n’escomenzando con un tema nuevu, apaez la opción “Entamar una encuesta”, enxerta los datos de la encuesta, coses como’l titulu y les opciones, tamién existe la opción d’acutar el númberu de participantes (onde’l 0 ye illimitáu)");
$faq[] = array("¿Cómo edito o esborro una encuesta?", "Si entamó la encueta, puede editala de la mesma manera qu’un mensaxe, pero namás funciona si entá nun hai respuestes, si yá les hubiere, entóncenes, namá l’alministrador o los moderadores pueden editar o esborrar.");
$faq[] = array("¿Por qué nun puedo entrar en dalgún foru?", "Dellos foros tán acutaos a dellos grupos d'usuarios namás, pa velos, participar, editar, etc, precisa delles autorizaciones que namás l’alministrador del foru o un moderador puede asignar.");
$faq[] = array("¿Por qué nun puedo votar nes encuestes?", "Namás los miembros rexistraos pueden votar nes encuestes (pa evitar manipulación de resultaos), si tuviera rexistráu pero nun puede votar, ye posible que nun tea autorizáu a votar nesa encuesta :(");


$faq[] = array("--","Dándo-yos forma a los mensaxes y temes distintos");
$faq[] = array("¿Qué ye'l códigu BBCode?", "BBCode ye una implementación especial del HTML, BBCode emplégase d’acorde colo que determina l’alministrador, ye hermano al HTML, les etiquetes apaecen ete corchetes [ y ] pa más información puede restolar pel manual de BBCode, l'enllaz apaez de la que se publica un mensaxe.");
$faq[] = array("¿Puedo usar HTML?", "Depende de que l'alministrador active la opción y de qué etiquetes HTML tean activaes, munches etiquetes HTML podíen tracamundiar la estructura del mensaxe.");
$faq[] = array("¿Qué son los smileys?", "Smileys, emoticonos o iconos xestuales son gráficos menudos que se pueden emplegar pa expresar emociones, apaecen enxertando un códigu talo que: :) que quier dicir contentu, :( ye triste. La llista completa d’estos smileys apaez de la que se manda un mensaxe.");
$faq[] = array("¿Puedo mandar imaxes?", "Pueden axuntase imaxes a un mensaxe, enxertándoles directamente de la que s’escribe. Sicasí, pueden axuntase imaxes guardaes en dalgún servidor web, nun se pueden axuntar imaxes que tean guardaes nel so ordinador (a nun ser que sía un servidor accesible) nin imaxes guardaes en servidores que precisen contraseña p’acceder a ellos. Pa que se vea la imaxe, habrá emplegar [img] del códigu BBCode o la etiqueta html afechisca (si nun ta acutada).");
$faq[] = array("¿Qué son les anuncies?", "Les anuncies contienen información importante pa los usuarios.");
$faq[] = array("¿Qué son los temes importantes?", "Los temes Importantes apaecen embaxo de les anuncies y namás na primer páxina, ye información perimportante que convién lleer :)");
$faq[] = array("¿Qué son los temes trancaos o bloqueaos?", "Los temes trancaos o bloqueaos son puramente eso, temes nos que yá nun se pueden añidir mensaxes, talo que lo deciden l’alministrador o los moderadores.");


$faq[] = array("--","Nivel d'usuariu y grupos");
$faq[] = array("¿Qué son los alministradores?", "Los alministradores son los que tienen control sobre de tol foru, controlen permisos, moderadores y tola configuración.");
$faq[] = array("¿Qué son los moderadores?", "Los moderadores son la xente que tien el poder d'editar o esborrar foros, trancalos o abrilos. Ye l’alministrador el que los designa y tienen menos poder qu’ésti.");
$faq[] = array("¿Qué son los grupos d'usuarios?", "Los grupos d'usuarios ye una de les maneres nes que l’alministrador del foru pue atropar usuarios. Un usuariu puede pertenecer a dellos grupos distintos. Esto faise en ficies de conceder permisos colectivos sobre del foru (como facer que tol grupu sían moderadores).");
$faq[] = array("¿Cómu puedo pertenecer a un grupu d'usuarios?", "Calque en Grupos d'usuarios pa solicitar la inscripción, si lu acepten yá recibirá un corréu. Convién saber que non tolos grupos son abiertos.");
$faq[] = array("¿Cómo me faigo moderador d'un grupu d'usuarios?", "Namás l'alministrador puede asignar esi permisu, contacte con él :)");


$faq[] = array("--","Mensaxería privao");
$faq[] = array("¡Nun soi quien a mandar mensaxes privaos!", "Puede haber trés desplicaciones pa esto: O nun ta rexistráu, puede que nun tea conectáu o l’alministrador trancó’l sistema de mensaxería privao pa que nun sía quien a mandar mensaxes d’estos.");
$faq[] = array("Quiero evitar mensaxes privaos inesperaos.", "Contamos añidir la posibilidá d'ignorar mensaxes d’esti calter, pel momentu únvie un mensaxe al alministrador si recibe mensaxes inesperaos :(.");
$faq[] = array("¿Dalguién nesti foru recibió spam o correos maliciosos?", "El formulariu nesti tableru d’anuncies inclúi delles opciones pa conocer quién manda los mensaxes. Únvie’l corréu al alministrador, tal como-y llegó, incluyendo’l testeru y tolo demás, pa que pueda actuar d’acorde.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","A propósito de phpBB22");
$faq[] = array("¿Quien programó esti foru?", "Esta aplicación (na forma orixinal) producióla y asoleyóla’l <a href=\"http://www.phpbb.com/\" target=\"_blank\">Grupu phpBB</a> que tien acutaos los derechos d’autor. Fecho como GNU (Llicencia Pública Xeneral) ye de llibre distribución (cinque nel vínculu pa conocer más detalles)");
$faq[] = array("¿Por qué nun hai \"X\" nesti foru?", "Esti foru tien una llicencia del Grupu phpBB que lu escribió. Si-y avulta que precisa dalguna opción o característica nueva, visite phpbb.com pa ver lo que'l grupu phpBB tien que decir. Faiga'l favor de nun publicar mensaxes d'esti calter nos foros de phpBB.com, la xente de Sourceforge tien idees a esgaya y tán anovando la cosa tol tiempu en ficies d'ameyorar esti preséu.");
$faq[] = array("¿Con quién contacto a propósito d'abusos o usos illegales tocante a esti foru?", "L’alministrador del foru ye la persona con quien contactar nestos casos, si nun fuera quien a dar con él, puede contactar con ún de los moderadores. Si nun contestaran, contacte col propietariu del dominiu (faiga una busca whois) y si tuviera nun servidor de balder (talo que Yahoo, free.fr, f2s.com, etc.), habrá contactar col departamentu d'abusos d'esi serviciu. Entienda que phpBB Group nun tien control dalu sobre del foru y nun se puede facer responsable nin del foru nin del conteníu. Nun val pa nada contactar col grupu phpBB tocántenes a cuestiones llegales (como comentarios difamatorios, etc.) que nun tengan que ver col software phpBB o col sitiu phpbb.com directamente. Nel casu de contactar col grupu phpBB puede recibir una respuesta orisca o nun tener respuesta dala.");

//
// Equí finen les FAQ :)
//

?>