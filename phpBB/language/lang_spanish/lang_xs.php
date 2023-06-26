<?php

/***************************************************************************
 *                                lang_xs.php
 *                                -----------
 *   copyright            : (C) 2003 - 2007 Vjacheslav Trushkin
 *   support              : http://www.stsoftware.biz/forum
 *
 *   version              : 2.4.1
 *
 *   file revision        : 80
 *   project revision     : 83
 *   last modified        : 12 Mar 2007  10:28:52
 *   Spanish Language     : ThE KuKa (Raul) http://www.phpbb-es.com
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


$lang['Extreme_Styles'] = 'eXtreme Styles';
$lang['xs_title'] = 'eXtreme Styles MOD';

$lang['xs_file'] = 'Archivo';
$lang['xs_template'] = 'Plantilla';
$lang['xs_id'] = 'Identificación';
$lang['xs_style'] = 'Estilo';
$lang['xs_styles'] = 'Estilos';
$lang['xs_users'] = 'Usuarios';
$lang['xs_options'] = 'Opciones';
$lang['xs_comment'] = 'Comentario';
$lang['xs_upload_time'] = 'Fecha de subida';
$lang['xs_select'] = 'Seleccionar';

$lang['xs_continue'] = 'Continuar';        // button

$lang['xs_click_here_lc'] = 'Clic aquí';
$lang['xs_edit_lc'] = 'Editar';

/*
* navigation
*/
$lang['xs_config_shownav'] = array(
	'Configuration',
	'Install Styles',
	'Uninstall Styles',
	'Default Style',
	'Manage Cache',
	'Import Styles',
	'Export Styles',
	'Clone Styles',
	'Download Styles',
	'Edit Templates',
	'Edit Styles',
	'Export Database',
	'Check Updates',
	);

/*
* frame_top.tpl
*/
$lang['xs_menu_lc'] = 'Menú de eXtreme Styles MOD';
$lang['xs_support_forum_lc'] = 'Foro de soporte';
$lang['xs_download_styles_lc'] = 'Descargar Estilos';
$lang['xs_install_styles_lc'] = 'Instalar Estilos';

/*
* index.tpl
*/

$lang['xs_main_comment1'] = 'Este es el menú principal de modo eXtreme Styles. Hay bastantes funciones dentro de este interfaz, así que esta página está aquí como guía. Hay una explicación corta de cada función debajo de su nombre.<br /><br />Nota: Este Modo substituye la gerencia de los estilos del phpBB. Usted encontrará las funciones del phpBB del defecto en esta lista, pero ahora estas funciones se optimizan y tienen características adicionales.<br /><br />si tiene alguna duda visite el <a href="http://www.phpbbstyles.com" target="_blank">Foro de Soporte</a> donde podrá encontrar ayuda sobre este MOD.';
$lang['xs_main_comment2'] = 'El MOD eXtreme Styles permite a un administrador almacenar estilos enteros en archivos .style. Los estilos se almacenan en un archivo comprimido pequeño y haciendo éste ahorra el problema de descargar/subir muchos archivos. Se comprimen los archivos del estilo así que la descarga/subida es mucho más eficiente.';
$lang['xs_main_comment3'] = 'Todas las funciones de la gerencia de los estilos de phpBB se substituyen por el MOD eXtreme Styles.<br /><br /><a href="{URL}">Click aquí</a> para ver el menú.';
$lang['xs_main_title'] = 'Menú de navegación del eXtreme Styles';
$lang['xs_menu'] = 'Menú del eXtreme Styles';

$lang['xs_manage_styles'] = 'Administrar estilos';
$lang['xs_import_export_styles'] = 'Importar/Exportar estilos';
$lang['xs_install_uninstall_styles'] = 'Instalar/Desinstalar estilos';
$lang['xs_edit_templates'] = 'Editar plantillas';
$lang['xs_other_functions'] = 'Otras funciones';

$lang['xs_configuration'] = 'Configuración';
$lang['xs_configuration_explain'] = 'Esta característica le permite a usted cambiar la configuración de eXtreme Styles.';
$lang['xs_default_style'] = 'Estilo por defecto';
$lang['xs_default_style_explain'] = 'Esta característica le permite a usted cambiar el estilo por defecto del foro y cambiar usuarios de un estilo a otro.';
$lang['xs_manage_cache'] = 'Manejar el cache';
$lang['xs_manage_cache_explain'] = 'Esta característica le permite a usted manejar archivos cache.';
$lang['xs_import_styles'] = 'Importar estilos';
$lang['xs_import_styles_explain'] = 'Esta característica permite que usted descargue e instale archivos de estilo.';
$lang['xs_export_styles'] = 'Exportar estilos';
$lang['xs_export_styles_explain'] = 'Esta característica le permite a usted guardar un estilo de su foro como archivo .style y después pueda transferirlo fácilmente a otro foro o página web.';
$lang['xs_clone_styles'] = 'Clonar estilos';
$lang['xs_clone_styles_explain'] = 'Esta característica le permite a usted copiar rápidamente estilos o una plantilla entera.';
$lang['xs_download_styles'] = 'Descargar estilos';
$lang['xs_download_styles_explain'] = 'Esta característica permite que usted descargue e instale rápidamente estilos desde paginas web. Usted mismo puede configurar una lista de paginas web.';
$lang['xs_install_styles'] = 'Instalar estilos';
$lang['xs_install_styles_explain'] = 'Esta característica permite que usted instale los estilos que se han sido subidos a su foro.';
$lang['xs_uninstall_styles'] = 'Desinstalar estilos';
$lang['xs_uninstall_styles_explain'] = 'Esta característica le permite a usted quitar estilos de su foro.';
$lang['xs_edit_templates_explain'] = 'Esta característica le permite a usted editar archivos tpl en línea.';
$lang['xs_edit_styles_data'] = 'Editar datos del estilo';
$lang['xs_edit_styles_data_explain'] = 'Esta característica le permite a usted editar variables del estilo. Es utilizada por algunos estilos, pero la mayoría no lo usan y utilizas un archivo del css';
$lang['xs_export_styles_data'] = 'Exportar datos del estilo';
$lang['xs_export_styles_data_explain'] = 'Esta característica le permite a usted guardar variables del estilo al archivo theme_info.cfg.';
$lang['xs_check_for_updates'] = 'Comprobar actualizaciones';
$lang['xs_check_for_updates_explain'] = 'Esta característica permite que usted compruebe si hay versiones actualizadas de los estilos y de los MODs instalados en su foro.';

$lang['xs_set_configuration_lc'] = 'Fijar la configuración';
$lang['xs_set_default_style_lc'] = 'Fijar el estilo por defecto';
$lang['xs_manage_cache_lc'] = 'Administrar cache';
$lang['xs_import_styles_lc'] = 'Importar estilos';
$lang['xs_export_styles_lc'] = 'Exportar estilos';
$lang['xs_clone_styles_lc'] = 'Clonar estilos';
$lang['xs_uninstall_styles_lc'] = 'Desinstalar estilos';
$lang['xs_edit_templates_lc'] = 'Editar plantillas';
$lang['xs_edit_styles_data_lc'] = 'Editar datos del estilo';
$lang['xs_export_styles_data_lc'] = 'Exportar datos del estilo';
$lang['xs_check_for_updates_lc'] = 'Comprobar actualizaciones';

/*
* ftp.tpl, ftp functions
*/

$lang['xs_ftp_comment1'] = 'Para utilizar esta característica usted debe seleccionar el método para subir el archivo. Si usted selecciona FTP, la contraseña no será almacenada y eXtreme Styles le pedirá la contraseña cada vez que usted seleccione funciones que requieran el acceso al FTP. Si usted selecciona el sistema de ficheros local, debe asegurarse de que todos los directorios requeridos pueden ser escritos.';
$lang['xs_ftp_comment2'] = 'Para utilizar esta característica usted debe fijar los ajustes del FTP.  La contraseña no será almacenada y los eXtreme Styles le pedirá la contraseña cada vez que usted seleccione funciones que requieran el acceso al FTP.';
$lang['xs_ftp_comment3'] = 'Advertencia:  Las funciones del FTP están desactivadas en este servidor.  Usted no podrá utilizar la funcionalidad de eXtreme Styles que requieran el acceso al FTP.';

$lang['xs_ftp_title'] = 'Configuración FTP';

$lang['xs_ftp_explain'] = 'El FTP se utiliza para subir nuevos estilos.  Si usted desea importar debe configurar los ajustes del FTP. eXtreme Styles intentara auto detectar los ajustes, si es posible.';

$lang['xs_ftp_error_fatal'] = 'Las funciones del FTP esta desactivadas en este servidor.  No puede continuar.';
$lang['xs_ftp_error_connect'] = 'Error FTP: No se puede conectar con el { HOST }';
$lang['xs_ftp_error_login'] = 'Error FTP: No se pudo conectar';
$lang['xs_ftp_error_chdir'] = 'Error FTP: No puede cambiar el directorio a { DIR }';
$lang['xs_ftp_error_nonphpbbdir'] = 'Error FTP: Tienes marcado una carpeta inválida. No hay archivos phpBB en esta carpeta';
$lang['xs_ftp_error_noconnect'] = 'No puede conectar con el servidor FTP ';
$lang['xs_ftp_error_login2'] = 'Conexión o contraseña inválida del FTP';

$lang['xs_ftp_log_disabled'] = 'Las funciones FTP están desactivadas en este servidor. No se puede continuar.';
$lang['xs_ftp_log_connecting'] = 'Conectando con { HOST }';
$lang['xs_ftp_log_noconnect'] = 'No se pudo conectar con {HOST}';
$lang['xs_ftp_log_connected'] = 'Conectado. Identificándose en...';
$lang['xs_ftp_log_nologin'] = 'No se pudo la conectar como {USER}';
$lang['xs_ftp_log_loggedin'] = 'Identificado';
$lang['xs_ftp_log_end'] = 'Ejecución de la escritura finalizada';
$lang['xs_ftp_log_nopwd'] = 'Error:  No se puede recuperar el directorio actual';
$lang['xs_ftp_log_nomkdir'] = 'Error: No se puede crear el directorio {DIR}';
$lang['xs_ftp_log_mkdir'] = 'Directorio {DIR} creado';
$lang['xs_ftp_log_nochdir'] = 'Error: No se pudo cambiar el directorio a {DIR}';
$lang['xs_ftp_log_normdir'] = 'Error: No se pudo eliminar el directorio {DIR}';
$lang['xs_ftp_log_rmdir'] = 'Directorio {DIR} eliminado';
$lang['xs_ftp_log_chdir'] = 'Directorio cambiado a {DIR}';
$lang['xs_ftp_log_noupload'] = 'Error: No se pudo subir el archivo {FILE}';
$lang['xs_ftp_log_upload'] = 'Archivo {FILE} subido ';
$lang['xs_ftp_log_nochmod'] = 'Advertencia:  No se permite cambiar el CHMOD del archivo {FILE}';
$lang['xs_ftp_log_chmod'] = 'CHMOD del archivo {FILE} a {MODE}';
$lang['xs_ftp_log_invalidcommand'] = 'Error: Comando desconocido: {COMMAND}';
$lang['xs_ftp_log_chdir2'] = 'Cambiando directorio actual a {DIR}';
$lang['xs_ftp_log_nochdir2'] = 'No se pudo cambiar el directorio a {DIR}';

$lang['xs_ftp_config'] = 'Configuración FTP';
$lang['xs_ftp_select_method'] = 'Seleccionar método de subida';
$lang['xs_ftp_select_local'] = 'Utilice el sistema de ficheros local (ninguna configuración requerida)';
$lang['xs_ftp_select_ftp'] = 'Usar FTP (fije los ajustes de FTP abajo)';

$lang['xs_ftp_settings'] = 'Ajustes de FTP';
$lang['xs_ftp_host'] = 'Servidor FTP ';
$lang['xs_ftp_login'] = 'Usuario FTP';
$lang['xs_ftp_path'] = 'Ruta de phpBB en FTP';
$lang['xs_ftp_pass'] = 'Contraseña FTP';
$lang['xs_ftp_remotedir'] = 'Directorio remoto';

$lang['xs_ftp_host_guess'] = ' (Probablemente "{HOST}" [<a href="javascript: void()" onclick="{CLICK}">Fijar servidor</a>])';
$lang['xs_ftp_login_guess'] = ' (Probablemente  "{LOGIN}" [<a href="javascript: void()" onclick="{CLICK}">Fijar usuario</a>])';
$lang['xs_ftp_path_guess'] = ' (Probablemente  "{PATH}" [<a href="javascript: void()" onclick="{CLICK}">Fijar ruta</a>])';


/*
* config.tpl
*/

$lang['xs_config_updated'] = 'Configuración actualizada.';
$lang['xs_config_updated_explain'] = 'Usted necesita actualizar esta página para que la nueva configuración pueda tener efecto. <a href="{URL}">Click aquí</a > para actualizar la página.';
$lang['xs_config_warning'] = 'Advertencia:  el cache no pudo ser escrito.';
$lang['xs_config_warning_explain'] = 'No se puede escribir en el directorio cache.  eXtreme Styles puede intentar fijar este problema.<br/> <a href="{URL}">Click aquí</a > para intentar cambiar el modo de acceso al directorio cache .<br/> < Br/> si el cache no funciona en su servidor no se preocupe - eXtreme Styles<br /> muchas veces aumenta la velocidad del foro, incluso sin cache.';

$lang['xs_config_maintitle'] = 'Configuración de eXtreme Styles MOD';
$lang['xs_config_subtitle'] = 'Esta es la configuración para eXtreme Styles. Si usted no entiende lo que hacen ciertas variables, no las cambie.';
$lang['xs_config_title'] = 'Ajustes de eXtreme Styles MOD v{VERSION}';
$lang['xs_config_cache'] = 'Configuración del cache';

$lang['xs_config_navbar'] = 'Mostrar en el marco izquierdo:';
$lang['xs_config_navbar_explain'] = 'Puedes seleccionar objetos para mostrar en el marco de la izquierda del panel de administración';

$lang['xs_config_def_template'] = 'Directorio de la plantilla por defecto';
$lang['xs_config_def_template_explain'] = 'Si un archivo TPL requerido, no se encuentra en el directorio de la plantilla (que pudo suceder si usted programo el phpBB incorrectamente) entonces el sistema de la plantilla buscara el mismo archivo en un directorio relacionado (si la plantilla actual es "myPlantilla" y la escritura requiere el archivo "myPlantilla/myarchivo.tpl" y este archivo no esta allí, el sistema de la plantilla buscará ese archivo como "subSilver/myarchivo.tpl").  Marque esto, para inhabilitar esta característica.';

$lang['xs_config_check_switches'] = 'Compruebe los interruptores mientras se compila';
$lang['xs_config_check_switches_explain'] = 'Esta característica comprueba si hay errores en las plantillas. Apagándolo acelerará la compilación, pero el recopilador se podría saltar algunos errores en plantillas (si contenían errores.)<br /><br />El chequeo complejo comprobará las plantillas para saber si hay errores y fijará automáticamente todos los errores sabidos (hay pocos tipos sabidos en los diversos modos).  Los trabajos serán algo mas lentos que una simple comprobación.<br />< Br /> pero a veces las plantillas parecen apropiadas solamente cuando la comprobación del error esta desactivada;  esto sucede debido a la mala codificación del HTML -  contacte con quien escribió el archivo TPL si usted desea fijar los errores.<br /><br />Si la característica de cache esta desactivada, entonces no use esta opción, para una compilación más rápida.';
$lang['xs_config_check_switches_0'] = 'Apagado';
$lang['xs_config_check_switches_1'] = 'Chequeo complejo';
$lang['xs_config_check_switches_2'] = 'Chequeo simple';

$lang['xs_config_show_errors'] = 'Mostrar errores cuando los archivos se incluyen incorrectamente en archivos TPL';
$lang['xs_config_show_error_explain'] = 'Esta característica activa/desactiva errores en los archivos TPL que el usuario utilizó incorrectamente &lt;!-- INCLUDE filename --&gt;';

$lang['xs_config_tpl_comments'] = 'Agregue los nombres de fichero TPL en el HTML';
$lang['xs_config_tpl_comments_explain'] = 'Esta característica agrega comentarios al código HTML que permiten que los diseñadores del estilo detecten qué archivo TPL se esta mostrando.';

$lang['xs_config_use_cache'] = 'Usar cache';
$lang['xs_config_use_cache_explain'] = 'El cache se guarda en el disco y acelera el sistema de plantillas porque no habría necesidad de compilar la plantilla cada vez que se muestra .';

$lang['xs_config_auto_compile'] = 'Guardar cahe automáticamente';
$lang['xs_config_auto_compile_explain'] = 'Esto compilará automáticamente las plantillas que no se depositen y no se guarden en el directorio cache.';

$lang['xs_config_auto_recompile'] = 'Recopilación automática de cache';
$lang['xs_config_auto_recompile_explain'] = 'Esto recompilara automáticamente las plantillas si una plantilla fue cambiada.';

$lang['xs_config_php'] = 'Extensión de los nombres de archivo del cache';
$lang['xs_config_php_explain'] = 'Ésta es la extensión de archivos depositados.  Los archivos se almacenan en formato del PHP así que la extensión por defecto es "php". ';

$lang['xs_config_back'] = '<a href="{URL}">Clic aquí</a> para volver a la configuracion.';
$lang['xs_config_sql_error'] = 'No pudo actualizar la configuración general para {VAR}';

// Debug info
$lang['xs_debug_header'] = 'Elimine errores de información';
$lang['xs_debug_explain'] = 'Esto es para eliminar los errores de información. Utilizado para encontrar/examinar problemas al configurar el cache.';
$lang['xs_debug_vars'] = 'Variables de las plantillas';
$lang['xs_debug_tpl_name'] = 'Nombres de archivo de las plantillas:';
$lang['xs_debug_cache_filename'] = 'Nombres de archivo del cache:';
$lang['xs_debug_data'] = 'Elimine errores de los datos:';

$lang['xs_check_hdr'] = 'Comprobando cache para %s';
$lang['xs_check_filename'] = 'Error: nombre de archivo no valido';
$lang['xs_check_openfile1'] = 'Error: no se pudo abrir el archivo "%s". Intentara crear directorios...';
$lang['xs_check_openfile2'] = 'Error: no se pudo abrir el archivo "%s" por segunda vez. Dando para arriba...';
$lang['xs_check_nodir'] = 'Comprobando "%s" - ningún directorio como tal.';
$lang['xs_check_nodir2'] = 'Error: no se pudo crear el directorio "%s" - usted puede ser que necesite comprobar permisos.';
$lang['xs_check_createddir'] = 'Creado directorio "%s"';
$lang['xs_check_dir'] = 'Comprobando "%s" - el directorio existe.';
$lang['xs_check_ok'] = 'archivo abierto "%s" para escribir. Todo parece estar correcto.';
$lang['xs_error_demo_edit'] = 'Usted no puede editar archivos en modo demo';
$lang['xs_error_not_installed'] = 'eXtreme Styles MOD no esta instalado. Se olvido subir includes/template.php';

/*
* chmod
*/

$lang['xs_chmod'] = 'CHMOD';
$lang['xs_chmod_return'] = '<br /><br /><a href="{URL}">Clic aquí</a> para volver a la configuracion.';
$lang['xs_chmod_message1'] = 'Configuración cambiada.';
$lang['xs_chmod_error1'] = 'No se puede cambiar modo de acceso al directorio del cache';


/*
* default style
*/

$lang['xs_def_title'] = 'Fijar estilo por defecto';
$lang['xs_def_explain'] = 'Esta característica permite que usted cambie rápidamente el estilo del foro por defecto y también que cambie usuarios de un estilo a otro.';

$lang['xs_styles_set_default'] = 'Estilo por defecto determinado';
$lang['xs_styles_no_override'] = 'No elimine los ajustes del usuario';
$lang['xs_styles_do_override'] = 'Invalidar ajustes del usuario ';
$lang['xs_styles_switch_all'] = 'Cambiar a todos los usuarios a este estilo';
$lang['xs_styles_switch_all2'] = 'Cambiar a todos los usuarios a:';
$lang['xs_styles_defstyle'] = 'Estilo por defecto';
$lang['xs_styles_available'] = 'Estilos disponibles';
$lang['xs_styles_make_public'] = 'Hacer público el estilo';
$lang['xs_styles_make_admin'] = 'Hacer el estilo para el administrador únicamente';
$lang['xs_styles_users'] = 'Lista de usuarios';


/*
* cache management
*/

$lang['xs_manage_cache_explain2'] = 'Esta característica permite que usted compile o que quite los archivos depositados para los estilos.';
$lang['xs_clear_all_lc'] = 'Borrar todo';
$lang['xs_compile_all_lc'] = 'Compilar todo';
$lang['xs_clear_cache_lc'] = 'Borrar cache';
$lang['xs_compile_cache_lc'] = 'Compilar cache';
$lang['xs_cache_confirm'] = 'Si usted tiene muchos estilos puede suponer una gran carga al servidor. ¿Esta seguro que desea continuar?';

$lang['xs_cache_nowrite'] = 'Error: no puede tener acceso al directorio del cache';
$lang['xs_cache_log_deleted'] = 'Borrado {FILE}';
$lang['xs_cache_log_nodelete'] = 'Error: No se pudo borrar el archivo {FILE}';
$lang['xs_cache_log_nothing'] = 'Nada para suprimir para la plantilla {TPL}';
$lang['xs_cache_log_nothing2'] = 'Nada para suprimir en el directorio cache';
$lang['xs_cache_log_count'] = 'Borrado con éxito {NUM} archivos';
$lang['xs_cache_log_count2'] = 'Error al borrar {NUM} archivos';
$lang['xs_cache_log_compiled'] = 'Compilado: {NUM} archivos';
$lang['xs_cache_log_errors'] = 'Errores: {NUM}';
$lang['xs_cache_log_noaccess'] = 'Error: No se pudo acceder al directorio {DIR}';
$lang['xs_cache_log_compiled2'] = 'Compilado: {FILE}';
$lang['xs_cache_log_nocompile'] = 'Error al compilar: {FILE}';

/*
* export/import/download/clone
*/

$lang['xs_import_explain'] = 'Esta característica le permite importar estilos.  Puede también instalar y poner al día automáticamente los estilos.<br /><br />Nota: Si usted ha agregado cualquier MOD (además de eXtreme Styles MOD) a este foro, debe tener cuidado al importar estilos, porque los estilos quizás no sean compatibles con su foro. Usted puede instalar solamente los estilos que tienen las mismas modificaciones que los otros estilos que usted ha configurado en sus foros.';

$lang['xs_import_lc'] = 'Importar';
$lang['xs_list_files_lc'] = 'Lista de archivos';
$lang['xs_delete_file_lc'] = 'Borrar archivos';
$lang['xs_export_style_lc'] = 'Exportar estilo';

$lang['xs_import_no_cached'] = 'No hay estilos depositados (cache) a importar';
$lang['xs_add_styles'] = 'Agregar estilos';
$lang['xs_add_styles_web'] = 'Descargar desde web';
$lang['xs_add_styles_web_get'] = 'Consígalo';
$lang['xs_add_styles_copy'] = 'Copiar de un archivo local';
$lang['xs_add_styles_copy_get'] = 'Copiar';
$lang['xs_add_styles_upload'] = 'Subir desde su ordenador';
$lang['xs_add_styles_upload_get'] = 'Subir';

$lang['xs_export_style'] = 'Exportar estilo';
$lang['xs_export_style_explain'] = 'Esta característica le permite exportar un estilo como un solo archivo. Este archivo es muy pequeño - mas pequeño que un archivo .zip (porque esta compreso con gzip, que trabaja mejor que zip) y todos los estilos de su interior son un solo archivo. Alternadamente, es muy fácil transferir estilos de un foro a otro.<br /><br />Esta característica también permite que usted suba estilos exportados usando el FTP a un servidor. Este sistema permite que usted transfiera un estilo a otro foro rápidamente sin copiarlo manualmente.';

$lang['xs_export_style_title'] = 'Exportar plantilla "{TPL}"';
$lang['xs_export_tpl_name'] = 'Exportar como (nombre de plantilla)';
$lang['xs_export_style_names'] = 'Seleccionar estilo para exportar';
$lang['xs_export_style_name'] = 'Estilo a exportar (nombre de estilo)';
$lang['xs_export_style_comment'] = 'Comentar';
$lang['xs_export_where'] = 'Donde exportar';
$lang['xs_export_where_download'] = 'Descargar como archivo';
$lang['xs_export_where_store'] = 'Almacenar como archivo en el servidor';
$lang['xs_export_where_store_dir'] = 'Directorio';
$lang['xs_export_where_ftp'] = 'Subir vía FTP';
$lang['xs_export_filename'] = 'Exportar nombre de archivo';

$lang['xs_download_explain2'] = 'Esta característica permite que usted descargue y que instale rápidamente estilos directamente de diversas paginas web. Haga click en el enlace cerca del nombre del web y le volverán a dirigir a una página de las transferencias directas del estilo.<br /><br />Usted puede también manejar la lista de sitios web.';

$lang['xs_download_locations'] = 'Localizaciones de descarga directa';
$lang['xs_edit_link'] = 'Editar enlace';
$lang['xs_add_link'] = 'Agregar enlace';
$lang['xs_link_title'] = 'Titulo del enlace';
$lang['xs_link_url'] = 'URL del enlace';
$lang['xs_delete'] = 'Borrar';

$lang['xs_style_header_error_file'] = 'No se puede abrir el archivo local';
$lang['xs_style_header_error_server'] = 'Error en el servidor: ';
$lang['xs_style_header_error_invalid'] = 'Cabecera del fichero invalida';
$lang['xs_style_header_error_reason'] = 'Error al leer la cabecera del fichero: ';
$lang['xs_style_header_error_incomplete'] = 'El archivo esta incompleto';
$lang['xs_style_header_error_incomplete2'] = 'Tamaño de archivo no valido. Probablemente el archivo este incompleto.';
$lang['xs_style_header_error_invalid2'] = 'Archivo no valido. Presumiblemente, el archivo no sea compatible con eXtreme Styles o una versión inválida.';
$lang['xs_error_cannot_open'] = 'No se pudo abrir el archivo.';
$lang['xs_error_decompress_style'] = 'Error al descomprimir el archivo. Probablemente el archivo es corrupto.';
$lang['xs_error_cannot_create_file'] = 'No se puede crear el archivo "{FILE}"';
$lang['xs_error_cannot_create_tmp'] = 'No se puede crear temporalmente el archivo "{FILE}"';
$lang['xs_import_invalid_file'] = 'Archivo no valido';
$lang['xs_import_incomplete_file'] = 'Archivo incompleto';
$lang['xs_import_uploaded'] = 'Estilo subido.';
$lang['xs_import_installed'] = 'Estilo subido e instalado.';
$lang['xs_import_notinstall'] = 'Estilo subido, pero error al instalar (Error SQL).';
$lang['xs_import_notinstall2'] = 'Estilo subido, pero error al instalar: no se encontraron estilos en theme_info.cfg';
$lang['xs_import_notinstall3'] = 'Estilo subido, pero error al instalar: Ninguna entrada encontrada para "{STYLE}" en theme_info.cfg';
$lang['xs_import_notinstall4'] = 'Estilo subido, pero error al instalar: No se pudo obtener la información en themes_id';
$lang['xs_import_notinstall5'] = 'Estilo subido, pero error al instalar: No se pudo actualizar la tabla de estilos';
$lang['xs_import_nodownload'] = 'No se pudo descargar el estilo de {URL}';
$lang['xs_import_nodownload2'] = 'No se pudo copiar el estilo de {URL}';
$lang['xs_import_nodownload3'] = 'Archivo no subido.';
$lang['xs_import_uploaded2'] = 'Estilo descargado. Puede importarlo ahora.<br /><br /><a href="{URL}">Clic aquí</a> para importar estilo.';
$lang['xs_import_uploaded3'] = 'Estilo copiado. Puede importarlo ahora.<br /><br /><a href="{URL}">Clic aquí</a> para importar estilo.';
$lang['xs_import_uploaded4'] = 'Estilo subido. Puede importarlo ahora.<br /><br /><a href="{URL}">Clic aquí</a> para importar estilo.';
$lang['xs_export_no_open_dir'] = 'No se pudo abrir el directorio {DIR}';
$lang['xs_export_no_open_file'] = 'No se pudo abrir el archivo {FILE}';
$lang['xs_export_no_read_file'] = 'Error al leer el archivo {FILE}';
$lang['xs_no_theme_data'] = 'No se pudo conseguir los datos del estilo para la plantilla seleccionada';
$lang['xs_no_style_info'] = 'No se pudo conseguir información sobre el estilo';
$lang['xs_export_noselect_themes'] = 'Usted debe seleccionar por lo menos un estilo';
$lang['xs_export_error'] = 'No se pudo exportar la plantilla "{TPL}": ';
$lang['xs_export_error2'] = 'No se pudo exportar la plantilla "{TPL}": El estilo esta vacío';
$lang['xs_export_saved'] = 'El estilo se guardo como "{FILE}"';
$lang['xs_export_error_uploading'] = 'Error al subir archivo';
$lang['xs_export_uploaded'] = 'Archivo subido.';
$lang['xs_clone_taken'] = 'El nombre de este estilo ya esta usado.';
$lang['xs_error_new_row'] = 'No se pudo insertar una nueva fila en la tabla.';
$lang['xs_theme_cloned'] = 'Estilo copiado.';
$lang['xs_invalid_style_name'] = 'Nombre de estilo no valido.';
$lang['xs_clone_style_exists'] = 'Esta plantilla ya existe';
$lang['xs_clone_no_select'] = 'Usted debe seleccionar por lo menos un estilo para copiarlo.';
$lang['xs_no_themes'] = 'Estilo no encontrado en la base de datos.';

$lang['xs_import_back'] = '<a href="{URL}">Clic aquí</a> para volver a la página de importación de estilos.';
$lang['xs_import_back_download'] = '<a href="{URL}" target="main">Click aquí</a> para volver a las descargas.';
$lang['xs_export_back'] = '<a href="{URL}">Clic aquí</a> para volver a la página de exportación de estilos.';
$lang['xs_clone_back'] = '<a href="{URL}">Clic aquí</a> para volver a la página de copiado de estilos.';
$lang['xs_download_back'] = '<a href="{URL}">Clic aquí</a> para volver a la página de descargas.';

$lang['xs_import_tpl'] = 'Importar plantilla "{TPL}"';
$lang['xs_import_tpl_comment'] = 'Esta característica subirá la plantilla a su foro. Si la plantilla con este nombre existe ya en su foro, esta característica sobrescribirá automáticamente los archivos anteriores, así que puede también ser utilizada para actualizar estilos.<br /><br />Esta característica puede también instalar automáticamente estilos. Si usted desea instalar el estilo después de importarlo entonces seleccione uno o más estilos abajo.';
$lang['xs_import_tpl_filename'] = 'Nombre de archivo:';
$lang['xs_import_tpl_tplname'] = 'Nombre de plantilla:';
$lang['xs_import_tpl_comment2'] = 'Comentar:';
$lang['xs_import_select_styles'] = 'Seleccionar estilo a instalar:';
$lang['xs_import_install_def_lc'] = 'Haga el estilo por defecto del foro';
$lang['xs_import_install_style'] = 'Instalar estilo:';
$lang['xs_import'] = 'Importar';

$lang['xs_import_list_contents'] = 'Contenido del archivo: ';
$lang['xs_import_list_filename'] = 'Nombre de archivo: ';
$lang['xs_import_list_template'] = 'Plantilla: ';
$lang['xs_import_list_comment'] = 'Comentar: ';
$lang['xs_import_list_styles'] = 'Estilos: ';
$lang['xs_import_list_files'] = 'Archivos ({NUM}):';
$lang['xs_import_download_lc'] = 'Descargar archivos';
$lang['xs_import_view_lc'] = 'Ver archivo';
$lang['xs_import_file_size'] = '({NUM} bytes)';

$lang['xs_import_nogzip'] = 'Esta función requiere la compresión del gz, y eso no se apoya al parecer en este servidor.';
$lang['xs_import_nowrite_cache'] = 'No se pudo escribir en el cache. Esta función requiere que el cache pueda ser escrito. Compruebe la configuración del MOD.<br /><br /><a href="{URL1}">Click aquí</a> para hacer que se pueda escribir en el directorio cache.<br /><br /><a href="{URL2}">Click aquí</a> para volver a la pagina de importación.';

$lang['xs_import_download_warning'] = 'Esto le llevará a un sitio web externo donde usted puede descargar rápidamente estilos con solo algunos clicks, usando la característica de la importación de los estilos extremos.';

$lang['xs_clone_style'] = 'Clonar estilo';
$lang['xs_clone_style_explain'] = 'Esta característica permite que usted reproduzca rápidamente un estilo o plantilla entera.<br /><br />Advertencia: Si usted está copiando la plantilla cerciórese de el autor de la plantilla original permita que usted haga esto (a menos que sea subSilver - usted puede hacer lo que usted desee con subSilver).  Los autores permiten generalmente modificar sus estilos, pero el estilo modificado no debe ser distribuido.';
$lang['xs_clone_style_explain2'] = 'Esta característica permite que usted cree el nuevo estilo para una plantilla.  Esta característica no copiará ningún archivo - agregará la entrada en la base de datos para su nuevo estilo.  El viejo y el nuevo estilo compartirán las mismas plantillas.';
$lang['xs_clone_style_explain3'] = 'Incorpore el nombre para el nuevo estilo que usted va a crear y haga click en "Clonar/copiar.';
$lang['xs_clone_style_explain4'] = 'Esta característica permite que usted reproduzca la plantilla.  Usted puede también copiar todos los estilos asociados a esa plantilla.  Usted puede corregir más adelante con seguridad los archivos TPL para la plantilla nueva y la vieja plantilla no será afectada.';

$lang['xs_clone_style_lc'] = 'Copiar estilo';
$lang['xs_clone_style2'] = 'Copiar estilo "{STYLE}":';
$lang['xs_clone_style3'] = 'Copiar plantilla "{STYLE}"';
$lang['xs_clone_newdir_name'] = 'Nueva plantilla (directorio) nombre:';
$lang['xs_clone_select'] = 'Seleccionar estilos a copiar:';
$lang['xs_clone_select_explain'] = 'Debe seleccionar al menos un estilo para copiar.';
$lang['xs_clone_newname'] = 'Nuevo nombre de estilo:';


/*
* install/uninstall
*/
$lang['xs_install_styles_explain2'] = 'Ésta es una lista de los estilos subidos en su foro, pero no están instalados. Haga click en "Instalar" en el estilo que usted desea instalar, o seleccione varios estilos y haga click en el botón.';
$lang['xs_uninstall_styles_explain2'] = 'Ésta es una lista de los estilos que están instalados en su foro. Haga click en "Desinstalar" para quitar algunos estilos del foro.  La desinstalación es segura - todos los usuarios que emplean el estilo que está siendo desinstalado serán cambiados al estilo del foro por defecto.  También, la desinstalación suprimirá automáticamente el cache para ese estilo.';

$lang['xs_install'] = 'Instalar';
$lang['xs_install_lc'] = 'Instalar';
$lang['xs_uninstall'] = 'Desinstalar';
$lang['xs_remove_files'] = 'Borrar archivos';
$lang['xs_style_removed'] = 'Estilo borrado.';
$lang['xs_uninstall_lc'] = 'Desinstalar';
$lang['xs_uninstall2_lc'] = 'Desinstalar y borrar archivos';

$lang['xs_install_back'] = '<a href="{URL}">Clic aquí</a> para volver a la instalación de los estilos.';
$lang['xs_uninstall_back'] = '<a href="{URL}">Clic aquí</a> para volver a la desinstalación de los estilos.';
$lang['xs_goto_default'] = '<a href="{URL}">Clic aquí</a> para cambiar el estilo actual.';

$lang['xs_install_installed'] = 'Estilo instalado.';
$lang['xs_install_error'] = 'Error al instalar estilo.';
$lang['xs_install_none'] = 'No hay nuevos estilos para instalar. Todos los estilos disponibles están instalados ya.';

$lang['xs_uninstall_default'] = 'No puede borrar el estilo actual. Para cambiar el estilo actual <a href="{URL}">click aquí</a>.';

/*
* export theme_info.cfg
*/
$lang['xs_export_styles_data_explain2'] = 'Esta característica guarda los datos del estilo en el archivo theme_info.cfg. Puede ser utilizado para guardar la información de la base de datos antes de transferir estilos de un foro a otro.<br /><br />Nota: Si usted está utilizando la característica exportación de los estilos extremos para mover un estilo a otro foro usted no necesita guardar theme_info.cfg - se hace automáticamente por la característica de la exportación del estilo.';
$lang['xs_export_styles_data_explain3'] = 'Seleccione los estilos que quiere exportar.';

$lang['xs_export_data_back'] = '<a href="{URL}">Clic aquí</a> para volver a la página de los datos de la exportación del estilo.';
$lang['xs_export_style_data_lc'] = 'Exportar los datos del estilo';

$lang['xs_export_data_saved'] = 'Datos exportados.';

/*
* edit templates (file manager)
*/
$lang['xs_edit_template_comment1'] = 'Esta característica permite que usted edite plantillas. Solo se mostraran los archivos que pueden ser editados.';
$lang['xs_edit_template_comment2'] = 'Esta característica permite que usted edite plantillas.';
$lang['xs_edit_file_saved'] = 'El archivo se ha guardado.';
$lang['xs_edit_not_found'] = 'Archivo no encontrado.';
$lang['xs_edittpl_back_dir'] = '<a href="{URL}">Clic aquí</a> para volver al encargado del archivo.';

$lang['xs_fileman_browser'] = 'Editor de archivo';
$lang['xs_fileman_directory'] = 'Directorio:';
$lang['xs_fileman_dircount'] = 'Directorios ({COUNT}):';
$lang['xs_fileman_filter'] = 'Filtro';
$lang['xs_fileman_filter_ext'] = 'Muestre solamente los archivos con la extensión:';
$lang['xs_fileman_filter_content'] = 'Muestre solamente los archivos que contengan:';
$lang['xs_fileman_filter_clear'] = 'Limpiar Filtro';
$lang['xs_fileman_filename'] = 'Nombre de archivo';
$lang['xs_fileman_filesize'] = 'Tamaño';
$lang['xs_fileman_filetime'] = 'Modificación';
$lang['xs_fileman_options'] = 'Opciones';
$lang['xs_fileman_time_today'] = '(Hoy)';
$lang['xs_fileman_edit_lc'] = 'Editar';

$lang['xs_fileedit_search_nomatch'] = 'Entrada no encontrada';
$lang['xs_fileedit_search_match1'] = 'Sustituida una entrada';
$lang['xs_fileedit_search_matches'] = "sustituida ' + cuenta + ' entradas";
$lang['xs_fileedit_noundo'] = 'No hay nada que deshacer';
$lang['xs_fileedit_undo_complete'] = 'Restaurado el contenido antiguo';
$lang['xs_fileedit_edit_name'] = 'Editar archivo:';
$lang['xs_fileedit_location'] = 'Localización:';
$lang['xs_fileedit_reload_lc'] = 'Recargar archivo';
$lang['xs_fileedit_download_lc'] = 'Descargar archivo';
$lang['xs_fileedit_trim'] = 'Ajuste automáticamente los espacios del comienzo y el extremo del archivo.';
$lang['xs_fileedit_functions'] = 'Editar Funciones';
$lang['xs_fileedit_replace1'] = 'Sustituir ';
$lang['xs_fileedit_replace2'] = ' con ';
$lang['xs_fileedit_replace_first_lc'] = 'Sustituir la primera entrada';
$lang['xs_fileedit_replace_all_lc'] = 'Sustituir todas las entradas';
$lang['xs_fileedit_replace_undo_lc'] = 'Deshaga el reemplazo';
$lang['xs_fileedit_backups'] = 'Backups';
$lang['xs_fileedit_backups_save_lc'] = 'Guardar backup';
$lang['xs_fileedit_backups_show_lc'] = 'Mostrar contenidos';
$lang['xs_fileedit_backups_restore_lc'] = 'Restaurar';
$lang['xs_fileedit_backups_download_lc'] = 'Descargar';
$lang['xs_fileedit_backups_delete_lc'] = 'Borrar';
$lang['xs_fileedit_upload'] = 'Subir';
$lang['xs_fileedit_upload_file'] = 'Archivo subido:';

/*
* edit styles data (theme_info)
*/
$lang['xs_data_head_stylesheet'] = 'CSS Stylesheet';
$lang['xs_data_body_background'] = 'Imagen de fondo ';
$lang['xs_data_body_bgcolor'] = 'Color de fondo ';
$lang['xs_data_style_name'] = 'Nombre de estilo';
$lang['xs_data_body_link'] = 'Color del enlace';
$lang['xs_data_body_text'] = 'Color del texto';
$lang['xs_data_body_vlink'] = 'Color del enlace visitado';
$lang['xs_data_body_alink'] = 'Color del enlace activo';
$lang['xs_data_body_hlink'] = 'Color del enlace asomado';
$lang['xs_data_tr_color'] = 'Color de la fila de la Tabla %s';
$lang['xs_data_tr_class'] = 'Clase de la fila de la tabla %s';
$lang['xs_data_th_color'] = 'Color del encabezado de la tabla %s';
$lang['xs_data_th_class'] = 'Clase del encabezado de la tabla %s';
$lang['xs_data_td_color'] = 'Color de la célula de la tabla %s';
$lang['xs_data_td_class'] = 'Clase de la célula de la tabla %s';
$lang['xs_data_fontface'] = 'Cara de la fuente %s';
$lang['xs_data_fontsize'] = 'Tamaño de la fuente %s';
$lang['xs_data_fontcolor'] = 'Color de la fuente %s';
$lang['xs_data_span_class'] = 'Clase del palmo %s';
$lang['xs_data_img_size_poll'] = 'Tamaño de la imagen de la interrogación [px]';
$lang['xs_data_img_size_privmsg'] = 'Tamaño del mensaje del estado privado [px]';
$lang['xs_data_theme_public'] = 'Estilo publico (1 o 0)';
$lang['xs_data_unknown'] = 'La descripción no esta disponible (%s)';

$lang['xs_edittpl_error_updating'] = 'Error al actualizar el estilo.';
$lang['xs_edittpl_style_updated'] = 'Estilo actualizado.';
$lang['xs_invalid_style_id'] = 'Identidad de estilo invalida.';

$lang['xs_edittpl_back_edit'] = '<a href="{URL}">Clic aquí</a> para volver a editar.';
$lang['xs_edittpl_back_list'] = '<a href="{URL}">Clic aquí</a> para volver a la lista de estilos.';

$lang['xs_editdata_explain'] = 'Esta característica permite que usted edite los datos de la base de datos para los estilos instalados. Algunos estilos no hacen caso a los valores de la base de datos y utilizan archivos del CSS en lugar de otro, algunos estilos utilizan solamente algunos de valores de la base de datos.';
$lang['xs_editdata_var'] = 'Variable';
$lang['xs_editdata_value'] = 'Valor';
$lang['xs_editdata_comment'] = 'Comentario';

/*
* updates
*/

$lang['xs_updates'] = 'Actualizaciones';
$lang['xs_updates_comment'] = 'Esta característica comprueba si hay actualizaciones de algunos estilos y modos. Trabaja solamente con los artículos que tienen información relevante de la actualización.';
$lang['xs_updates_comment2'] = 'Éste es resultado del chequeo de la versión.';
$lang['xs_update_total1'] = 'Total: {NUM} artículos';
$lang['xs_update_info1'] = 'Esta característica del administrador comprobará si hay actualizaciones disponibles del phpBB, de ciertos modos, y de algunos estilos instalados en su foro.  Cuando encuentra actualizaciones disponibles le muestra el link donde usted puede descargar el archivo actualizado.<br /><br />Esta función requiere los zócalos para ser permitida. La mayoría de los anfitriones libres de la web no tienen esta característica, si este foro está en un anfitrión libre (como lycos) entonces que usted no podra utilizar la característica de la actualización, pero si este foro está en un servidor normal entonces todo estara disponible.<br /><br />Cuando usted haga click en "continúa", la escritura comprobará todo el software instalado en foro. Si su website es lento puede ser que tarde un cierto tiempo. Sea paciente y no haba click en "Parar" en su navegador si se retrasa el proceso. Si este servidor es lento o la actualización del website es lenta quizás no tenga tiempo (por PHP o tiempo de ejecución) - si sucede esto aumente el valor del time out.';
$lang['xs_update_name'] = 'Nombre';
$lang['xs_update_type'] = 'Tipo';
$lang['xs_update_current_version'] = 'Su versión';
$lang['xs_update_latest_version'] = 'La ultima versión';
$lang['xs_update_downloadinfo'] = 'URL de descarga';
$lang['xs_update_timeout'] = 'Cuenta atrás de la actualización de escritura (segundos):';
$lang['xs_update_continue'] = 'Continuar';


$lang['xs_update_total2'] = 'Errores: {NUM}';
$lang['xs_update_total3'] = 'Actualizaciones disponibles: {NUM} artículos';
$lang['xs_update_select1'] = 'Seleccione los artículos a actualizar';
$lang['xs_update_types'] = array(
		0 => 'Desconocido',
		1 => 'Estilo',
		2 => 'Mod',
		3 => 'phpBB'
		);
$lang['xs_update_fileinfo'] = 'Mas información';
$lang['xs_update_nothing'] = 'No hay nada para actualizar.';
$lang['xs_update_noupdate'] = 'Esta usando la ultima versión.';

$lang['xs_update_error_url'] = 'Error: No se puede recuperar el URL %s';
$lang['xs_update_error_noitem'] = 'Error: No hay información disponible sobre la actualizacion';
$lang['xs_update_error_noconnect'] = 'Error: No se puede conectar al servidor de actualizaciones';

$lang['xs_update_download'] = 'Descargar';
$lang['xs_update_downloadinfo2'] = 'Descargar/información';
$lang['xs_update_info'] = 'Sitio web';

$lang['xs_permission_denied'] = 'Permiso denegado';

$lang['xs_download_lc'] = 'Descargar';
$lang['xs_info_lc'] = 'Información';

/*
* style configuration
*/
$lang['Template_Config'] = 'Config. Plantilla';
$lang['xs_style_configuration'] = 'Configuración de Plantilla';

?>