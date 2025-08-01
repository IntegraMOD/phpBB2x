<?php

//see readme.txt for details

$lang['General'] = 'Загальне';
$lang['Users'] = 'Користувачі';
$lang['Groups'] = 'Групи';
$lang['Forums'] = 'Форум';
$lang['Styles'] = 'Стилізація';

$lang['Configuration'] = 'Конфігурація';
$lang['Permissions'] = 'Права';
$lang['Manage'] = 'Керування';
$lang['Disallow'] = 'Недозволені Ніки';
$lang['Prune'] = 'Автозачистка';
$lang['Mass_Email'] = 'Розсилка';
$lang['Ranks'] = 'Статуси';
$lang['Smilies'] = 'Смайлики';
$lang['Ban_Management'] = 'Бан';
$lang['Word_Censor'] = 'Цензура слів';
$lang['Export'] = 'Експорт';
$lang['Create_new'] = 'Створити';
$lang['Add_new'] = 'Додати';
$lang['Backup_DB'] = 'Копіювати Базу';
$lang['Restore_DB'] = 'Відновити Базу';
$lang['Status_locked'] = 'Заблоковано';
$lang['Status_unlocked'] = 'Не заблоковано';


//
// Index
//
$lang['Admin'] = 'Панель';
$lang['Not_admin'] = 'Ви не маєте прав на перебування тут';
$lang['Welcome_phpBB'] = 'Панель адміністратора';
$lang['Admin_intro'] = 'Панель надасть вам змогу редагувати будь-які налаштування форуму. До цієї сторінки можна потрапити натиснувши <u>Перейти до панелі адміністратора</u> на будь-якій сторінці форуму.';
$lang['Main_index'] = 'Перейти до форуму';
$lang['Forum_stats'] = 'Статистика форуму';
$lang['Admin_Index'] = 'Статистика';
$lang['Preview_forum'] = 'Переглянути форум';

$lang['Click_return_admin_index'] = '%sПерейти до панелі адміністратора%s';

$lang['Statistic'] = 'Статистика';
$lang['Number_posts'] = 'К-ть повідомлень';
$lang['Posts_per_day'] = 'Повідомлень на день';
$lang['Number_topics'] = 'К-ть тем';
$lang['Topics_per_day'] = 'Тем на день';
$lang['Number_users'] = 'К-ть учасників';
$lang['Users_per_day'] = 'Учасників на день';
$lang['Board_started'] = 'Форум запрацював';
$lang['Avatar_dir_size'] = 'Розмір директорії аватарів';
$lang['Database_size'] = 'Розмір бази даних';
$lang['Gzip_compression'] ='Gzip-компресія';
$lang['Not_available'] = 'Не доступно';

$lang['ON'] = 'увімкнено'; // This is for GZip compression
$lang['OFF'] = 'вимкнуто';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Утиліти баз даних';

$lang['Restore'] = 'Відновити';
$lang['Backup'] = 'Зкопіювати';
$lang['Restore_explain'] = 'Оновивши базу даних ви отримаєте ПОВНУ копію форуму того часу, коли вона була створена. Будьте уважні! Вся інформація перезаписується, тому перед оновленням зробіть копію бази даних!';
$lang['Backup_explain'] = 'Тут можна зкопіювати всю PhpBB конфігурацію (учасники, повідомлення, налаштування...). Постарайтесь робити копії якомога частіше!';

$lang['Backup_options'] = 'Опції';
$lang['Start_backup'] = 'Розпочати';
$lang['Full_backup'] = 'Повна копія';
$lang['Structure_backup'] = 'Копія лише структури';
$lang['Data_backup'] = 'Копія лише інформації';
$lang['Additional_tables'] = 'Додаткові таблиці';
$lang['Gzip_compress'] = 'Gzip-компресія';
$lang['Select_file'] = 'Виберіть файл';
$lang['Start_Restore'] = 'Розпочати відновлення';

$lang['Restore_success'] = 'Базу даних відновлено.';
$lang['Backup_download'] = 'Копіювання почнеться за кілька секунд. Зачекайте, будь-ласка.';
$lang['Backups_not_supported'] = 'Вибачте, але відновлення баз даних на цьому сервері не підтримується.';

$lang['Restore_Error_uploading'] = 'Помилка при отриманні файлу';
$lang['Restore_Error_filename'] = 'Помилка у назві файла, виберіть інший';
$lang['Restore_Error_decompress'] = 'Неможливо розпакувати файл, виберіть звичайний тип';
$lang['Restore_Error_no_file'] = 'Файл не отримано';


//
// Auth pages
//
$lang['Select_a_User'] = 'Виберіть учасника';
$lang['Select_a_Group'] = 'Виберіть групу';
$lang['Select_a_Forum'] = 'Виберіть форум';
$lang['Auth_Control_User'] = 'Керування правами користувачів';
$lang['Auth_Control_Group'] = 'Керування правами груп';
$lang['Auth_Control_Forum'] = 'Керування правами доступу до форумів';
$lang['Look_up_User'] = 'Вибрати учасника';
$lang['Look_up_Group'] = 'Вибрати групу';
$lang['Look_up_Forum'] = 'Вибрати форум';

$lang['Group_auth_explain'] = 'Тут ви можете редагувати права груп. Не забувайте, що змінюючи права групи, в силі все-одно залишаються права її учасника.';
$lang['User_auth_explain'] = 'Тут ви можете редагувати права учасників. Не забувайте, що змінюючи права учасника, в силі все-одно залишаються права його групи.';
$lang['Forum_auth_explain'] = 'Тут ви можете редагувати права доступу учасників до кожного форуму. Для цього можете користуватись спрощеним та звичайним режимами.';

$lang['Simple_mode'] = 'Спрощений режим';
$lang['Advanced_mode'] = 'Звичайний режим';
$lang['Moderator_status'] = 'Статус модератора';

$lang['Allowed_Access'] = 'Доступ дозволено';
$lang['Disallowed_Access'] = 'Доступ заборонено';
$lang['Is_Moderator'] = 'модератор';
$lang['Not_Moderator'] = 'не модератор';

$lang['Conflict_warning'] = 'Конфлікт при авторизації';
$lang['Conflict_access_userauth'] = 'Цей користувач досі має права для доступу на форум через свою групу. Для остаточної зміни доступу вилучте користувача з групи або є змініть її права.';
$lang['Conflict_mod_userauth'] = 'Цей користувач досі має права на модерування форуму через свою групу. Для остаточної зміни доступу вилучте користувача з групи або є змініть її права.';

$lang['Conflict_access_groupauth'] = 'Цей користувач (користувачі) досі має права для доступу на форум через свій користувацький статус. Для остаточної зміни доступу редагуйте особисті права користувача.';
$lang['Conflict_mod_groupauth'] = 'Цей користувач (користувачі) досі має права для модерування цього форуму через свій користувацький статус. Для остаточної зміни доступу редагуйте особисті права користувача.';

$lang['Public'] = 'Публічний';
$lang['Private'] = 'Приватний';
$lang['Registered'] = 'Для зареєстрованих';
$lang['Administrators'] = 'Адміністратори';
$lang['Hidden'] = 'Приховані';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'ВСІ';
$lang['Forum_REG'] = 'РЕЄСТР';
$lang['Forum_PRIVATE'] = 'ПРИВ';
$lang['Forum_MOD'] = 'МОД';
$lang['Forum_ADMIN'] = 'АДМ';

$lang['View'] = 'Перегляд';
$lang['Read'] = 'Читання';
$lang['Post'] = 'Писання';
$lang['Reply'] = 'Відповідання';
$lang['Edit'] = 'Редагування';
$lang['Delete'] = 'Витирання';
$lang['Sticky'] = 'Оголошення';
$lang['Announce'] = 'Анонсування';
$lang['Vote'] = 'Голосування';
$lang['Pollcreate'] = 'Створ. голосування';

$lang['Permissions'] = 'Права доступу';
$lang['Simple_Permission'] = 'Права доступу (спрощені)';

$lang['User_Level'] = 'Рівень користувача';
$lang['Auth_User'] = 'користувач';
$lang['Auth_Admin'] = 'адміністратор';
$lang['Group_memberships'] = 'Учасники групи';
$lang['Usergroup_members'] = 'Учасники цієї групи';

$lang['Forum_auth_updated'] = 'Права доступу до форуму оновлено';
$lang['User_auth_updated'] = 'Права доступу учасників оновлено';
$lang['Group_auth_updated'] = 'Права доступу груп оновлено';

$lang['Auth_updated'] = 'Права доступу оновлено';
$lang['Click_return_userauth'] = '%sПерейти до редагування прав користувачів%s';
$lang['Click_return_groupauth'] = '%sПерейти до редагування прав груп%s';
$lang['Click_return_forumauth'] = '%sПерейти до редагування прав доступу до форуму%s';


//
// Banning
//
$lang['Ban_control'] = 'Керування баном';
$lang['Ban_explain'] = 'Тут ви можете керувати баном користувачів. Можна заборонити доступ певним користувачам, IP-адресам... Ці методи не дають зайти забаненому учаснику на ваш форум. Заборонити повторну реєстрацію користувача можна заборонивши певний e-mail.';
$lang['Ban_explain_warn'] = 'Майте на увазі, що вибравши ранг IP-адрес, ви заблокуєте доступ на всі, починаючи з початкової і закінчивши кінцевою.';

$lang['Select_username'] = 'Виберіть логін';
$lang['Select_ip'] = 'Виберіть IP';
$lang['Select_email'] = 'Виберіть Email';

$lang['Ban_username'] = 'Бан одного або кількох учасників';
$lang['Ban_username_explain'] = 'Можете забанити кількох користувачів, утримуючи клавішу Ctrl';

$lang['Ban_IP'] = 'Бан IP-адрес';
$lang['IP_hostname'] = 'IP-адреси або хости';
$lang['Ban_IP_explain'] = 'Вводячи кілька IP-адрес чи хостів, виділяйте їх комами. Вибираючи ранг IP-адрес, використовуйте -, для будь-якого значення - *. Напр.: <font color=blue>123.45.67.89,123.44.55.1-255,123.45.*,*.ukrtel.net</font>';

$lang['Ban_email'] = 'Бан e-mail-адрес';
$lang['Ban_email_explain'] = 'Вводячи кілька e-mail-адрес, виділяйте їх комами. Для будь-якого значення використовуйте *, наприклад <font color=blue>*@hotmail.com</font>';

$lang['Unban_username'] = 'Відбанування учасника(ів)';
$lang['Unban_username_explain'] = 'Можете відбанити кількох користувачів, утримуючи клавішу Ctrl';

$lang['Unban_IP'] = 'Відбанування IP-адрес';
$lang['Unban_IP_explain'] = 'Можете відбанити кілька IP-адрес, утримуючи клавішу Ctrl';

$lang['Unban_email'] = 'Відбанування e-mail-адрес';
$lang['Unban_email_explain'] = 'Можете відбанити кілька e-mail-адрес, утримуючи клавішу Ctrl';

$lang['No_banned_users'] = 'пусто';
$lang['No_banned_ip'] = 'пусто';
$lang['No_banned_email'] = 'пусто';

$lang['Ban_update_sucessful'] = 'Список баннінгу оновлено';
$lang['Click_return_banadmin'] = '%sБан%s';


//
// Configuration
//
$lang['General_Config'] = 'Конфігурація';
$lang['Config_explain'] = 'На цій сторінці можна редагувати основні налаштування форуму.';

$lang['Click_return_config'] = '%sКонфігурація%s';

$lang['General_settings'] = 'Загальні налаштування форуму';
$lang['Server_name'] = 'Домен';
$lang['Server_name_explain'] = 'Домен, в якому знаходиться форум';
$lang['Script_path'] = 'Шлях до форуму';
$lang['Script_path_explain'] = 'Шлях до форуму після домену (виділяйте слешем з обох боків)';
$lang['Server_port'] = 'Порт сервера';
$lang['Server_port_explain'] = 'Можете визначити власний порт сервера';
$lang['Site_name'] = 'Ім\'я сайту';
$lang['Site_desc'] = 'Опис форуму сайту';
$lang['Board_disable'] = 'Вимкнути форум';
$lang['Board_disable_explain'] = 'Це зробить форум недоступним для користувачів. Можете вимкнути форум на час оновлення форуму чи відновлення баз даних для запобігання конфліктам. Не робіть логаут при цьому, ви не будете мати змоги увійти!';
$lang['Acct_activation'] = 'Активація аккаунту';
$lang['Acc_None'] = 'немає'; // These three entries are the type of activation
$lang['Acc_User'] = 'користувачем';
$lang['Acc_Admin'] = 'адміністратором';

$lang['Abilities_settings'] = 'Основні налаштування користувачів';
$lang['Max_poll_options'] = 'Максимальна кількість опцій для голосування';
$lang['Flood_Interval'] = 'Інтервал флудингу';

$lang['Flood_Interval_explain'] = 'Час (в секундах), протягом якого користувачу дозволяється писати одне повідомлення';
$lang['Board_email_form'] = 'Відсилання e-mail користувачами';
$lang['Board_email_form_explain'] = 'Відсилання користувачами e-mail\'ів іншим користувачам';
$lang['Topics_per_page'] = 'Тем на сторінку';
$lang['Posts_per_page'] = 'Повідомлень на сторінку';
$lang['Hot_threshold'] = 'Постів для популярних тем';
$lang['Default_style'] = 'Основна тема';
$lang['Override_style'] = 'Визначити тему для всіх користувачів';
$lang['Override_style_explain'] = 'Незважаючи на вибрану користувачами тему, заміняє її на обрану';
$lang['Default_language'] = 'Основна мова';
$lang['Date_format'] = 'Формат дати';
$lang['System_timezone'] = 'Часова зона';
$lang['Enable_gzip'] = 'Увімкнути GZip-компресію';
$lang['Enable_prune'] = 'Увімкнути видалення непопулярних тем';
$lang['Allow_HTML'] = 'Дозволити HTML';
$lang['Allow_BBCode'] = 'Дозволити BBCode';
$lang['Allowed_tags'] = 'Дозволені HTML-теги';
$lang['Allowed_tags_explain'] = 'Розділяйте теги комами';
$lang['Allow_smilies'] = 'Дозволити смайлики';
$lang['Smilies_path'] = 'Шлях до смайликів';
$lang['Smilies_path_explain'] = 'Шлях до графічних смайликів всередині phpBB (типу images/smilies)';
$lang['Allow_sig'] = 'Дозволити підписи';
$lang['Max_sig_length'] = 'Макс. довжина підпису';
$lang['Max_sig_length_explain'] = 'Максимальна кількість знаків у підписах користувачів';
$lang['Allow_name_change'] = 'Дозволити зміну імен користувачами';

$lang['Avatar_settings'] = 'Налаштування аватарів';
$lang['Allow_local'] = 'Дозволити галерею аватарів';
$lang['Allow_remote'] = 'Дозволити віддалені аватари';
$lang['Allow_remote_explain'] = 'Аватар щоразу завантажується з URL, який налаштовує користувач';
$lang['Allow_upload'] = 'Дозволити завантаження аватарів на форум';
$lang['Max_filesize'] = 'Максимальний розмір аватара';
$lang['Max_filesize_explain'] = 'Максимально дозволений розмір файла графічного аватара';
$lang['Max_avatar_size'] = 'Максимальні розміри аватара';
$lang['Max_avatar_size_explain'] = 'Висота на Ширину (в пікселях)';
$lang['Avatar_storage_path'] = 'Каталог збереження аватарів';
$lang['Avatar_storage_path_explain'] = 'Шлях, куди будуть завантажуватись аватари кристувачів (типу images/avatars)';
$lang['Avatar_gallery_path'] = 'Каталог галереї аватарів';
$lang['Avatar_gallery_path_explain'] = 'Шлях до галереї аватарів всередині phpBB (типу images/avatars/gallery)';

$lang['COPPA_settings'] = 'Налаштування COPPA';
$lang['COPPA_fax'] = 'COPPA Факс';
$lang['COPPA_mail'] = 'COPPA Адреса';
$lang['COPPA_mail_explain'] = 'За цією адресою будуть відіслані форми для COPPA (не для України ;)';

$lang['Email_settings'] = 'Налаштування email';
$lang['Admin_email'] = 'Адреса ел. пошти адміністратора';
$lang['Email_sig'] = 'Підпис до листів';
$lang['Email_sig_explain'] = 'Цей текст буде вкладено до кожного листа, відісланого через форум.';
$lang['Use_SMTP'] = 'Використовувати SMTP-сервер';
$lang['Use_SMTP_explain'] = 'Використовуйте дану функцію якщо хочете використовувати SMTP-сервер для відсилання листів. В іншому випадку буде використовуватись стандартна PHP-функція mail';
$lang['SMTP_server'] = 'Адреса SMTP-сервера';
$lang['SMTP_username'] = 'Логін до SMTP-сервера';
$lang['SMTP_username_explain'] = 'Вводьте логін лише якщо ваш сервер цього вимагає';
$lang['SMTP_password'] = 'Пароль до SMTP-сервера';
$lang['SMTP_password_explain'] = 'Вводьте пароль лише якщо ваш сервер цього вимагає';

$lang['Disable_privmsg'] = 'Приватні повідомлення';
$lang['Inbox_limits'] = 'Макс. к-ть повідомлень у каталозі вхідних повідомлень';
$lang['Sentbox_limits'] = 'Макс. к-ть повідомлень у каталозі вихідних повідомлень';
$lang['Savebox_limits'] = 'Макс. к-ть повідомлень у каталозі збережених повідомлень';

$lang['Cookie_settings'] = 'Налаштування Cookie';
$lang['Cookie_settings_explain'] = 'Ці налаштування вказують як саме cookie будуть відсилатись до користувачів. Будьте уважні, змінюючи ці опції: неправильні налаштування можуть призвести до неможливості увійти у форум.';
$lang['Cookie_domain'] = 'Домен Cookie';
$lang['Cookie_name'] = 'Ім\'я Cookie';
$lang['Cookie_path'] = 'Шлях Cookie';
$lang['Cookie_secure'] = 'Захищені Cookie';
$lang['Cookie_secure_explain'] = 'Якщо ваш сервер працює через SSL, увімкніть цю опцію, інакше - ні';
$lang['Session_length'] = 'Термін активності cookie [ секунд ]';


//
// Forum Management
//
$lang['Forum_admin'] = 'Адміністрування форуму';
$lang['Forum_admin_explain'] = 'З цієї панелі ви можете додавати, видаляти, редагувати категорії та форуми, змінювати їх порядок та ресинхронізувати';
$lang['Edit_forum'] = 'Редагувати форум';
$lang['Create_forum'] = 'Створити новий форум';
$lang['Create_category'] = 'Створити нову категорію';
$lang['Remove'] = 'Видалити';
$lang['Action'] = 'Дія';
$lang['Update_order'] = 'Оновити порядок';
$lang['Config_updated'] = 'Налаштування форуму пройшло успішно';
$lang['Edit'] = 'Редагувати';
$lang['Delete'] = 'Видалити';
$lang['Move_up'] = 'Догори';
$lang['Move_down'] = 'Донизу';
$lang['Resync'] = 'Ресинх.';
$lang['No_mode'] = 'Жодного режиму не вибрано';
$lang['Forum_edit_delete_explain'] = 'Нижчеподана форма дозволить вам налаштувати всі основні опції форуму.';

$lang['Move_contents'] = 'Перемістити вміст';
$lang['Forum_delete'] = 'Знищити форум';
$lang['Forum_delete_explain'] = 'Нижчеподана форма дозволить вам знищити форум (чи категорію) і вибрати, куди ви бажаєте перемістити теми (чи форуми) які він вміщає.';

$lang['Forum_settings'] = 'Основні налаштування форуму';
$lang['Forum_name'] = 'Назва форуму';
$lang['Forum_desc'] = 'Опис';
$lang['Forum_status'] = 'Статус';
$lang['Forum_pruning'] = 'Автозачистка';

$lang['prune_freq'] = 'Перевіряти вік тем';
$lang['prune_days'] = 'Видаляти теми, відповідей на які не було протягом';
$lang['Set_prune_data'] = 'Ви увімкнули автозачистку для цього форуму, проте не встановили частоту чи кількість днів для автозачистки. Будь-ласка, поверніться назад і зробіть відповідні зміни';

$lang['Move_and_Delete'] = 'Перемістити/видалити';

$lang['Delete_all_posts'] = 'Знищити всі повідомлення';
$lang['Nowhere_to_move'] = 'Немає куди перенести';

$lang['Edit_Category'] = 'Редагувати категорію';
$lang['Edit_Category_explain'] = 'Користуючись цією формою, ви зможете редагувати назву категорії.';

$lang['Forums_updated'] = 'Налаштування форумів та категорій успішно збережено';

$lang['Must_delete_forums'] = 'Перш ніж знищити категорію, вам необхідно знищити всі її форуми';

$lang['Click_return_forumadmin'] = '%sПерейти до адміністрування форуму%s';


//
// Smiley Management
//
$lang['smiley_title'] = 'Налаштування смайликів';
$lang['smile_desc'] = 'З цієї сторінки ви можете додавати, видаляти та редагувати смайлики, які ваші користувачі зможуть використовувати у повідомленнях.';

$lang['smiley_config'] = 'Налаштування смайликів';
$lang['smiley_code'] = 'Код смайлика';
$lang['smiley_url'] = 'Графічний файл смайлика';
$lang['smiley_emot'] = 'Емоція (пояснення смайлика)';
$lang['smile_add'] = 'Додати нового смайлика';
$lang['Smile'] = 'Смайлик';
$lang['Emotion'] = 'Емоція';

$lang['Select_pak'] = 'Виберіть пакет смайликів (.pak)';
$lang['replace_existing'] = 'Замінити одноіменні смайлики';
$lang['keep_existing'] = 'Залишити одноіменні смайлики';
$lang['smiley_import_inst'] = 'Вам слід розархівувати пакет смайликів і завантажити на сервер всі файли (у директорію смайликів) а потім ввести потрібну інформацію у цю форму.';
$lang['smiley_import'] = 'Імпортування пакету смайликів';
$lang['choose_smile_pak'] = 'Виберіть файл пакету смайликів (.pak)';
$lang['import'] = 'Імпортувати смайлики';
$lang['smile_conflicts'] = 'В разі конфлікту';
$lang['del_existing_smileys'] = 'Знищити присутні смайлики перед імпортуванням';
$lang['import_smile_pack'] = 'Імпортувати пакет смайликів';
$lang['export_smile_pack'] = 'Створити пакет смайликів';
$lang['export_smiles'] = 'Для створення пакету зі вже інстальованих у вас смайликів, завантажте %sавтоматично згенерований з ваших смайликів .pak-файл%s. Змінюючи його назву, впевніться у закінченні ".pak".  Потім створіть архів і помістіть туди ваші смайлики і .pak-файл.';

$lang['smiley_add_success'] = 'Смайлика додано!';
$lang['smiley_edit_success'] = 'Смайлика оновлено!';
$lang['smiley_import_success'] = 'Пакет смайликів встановлено!';
$lang['smiley_del_success'] = 'Смайлика видалено';
$lang['Click_return_smileadmin'] = '%sПовернутись до адміністрування смайликів%s';


//
// User Management
//
$lang['User_admin'] = 'Адміністрування користувачів';
$lang['User_admin_explain'] = 'Дана форма дозволяє змінювати налаштування користувачів, в тому числі й тих, які не може змінювати й сам користувач. Для налаштування прав доступу скористайтеся іншим лінком, "Права доступу".';

$lang['Look_up_user'] = 'Переглянути';

$lang['Admin_user_fail'] = 'Не можу оновити налаштування коритсувача.';
$lang['Admin_user_updated'] = 'Профіль користувача оновлено.';
$lang['Click_return_useradmin'] = '%sПерейти до адміністрування користувачів%s';

$lang['User_delete'] = 'Видалити користувача';
$lang['User_delete_explain'] = 'Клікніть тут для видалення користувача. Повернути назад буде неможливо!';
$lang['User_deleted'] = 'Дані про користувача витерто з бази даних.';

$lang['User_status'] = 'Користувач активний';
$lang['User_allowpm'] = 'Може відсилати приватні повідомлення';
$lang['User_allowavatar'] = 'Може користуватись аватаром';

$lang['Admin_avatar_explain'] = 'Тут можна переглянути і видалити аватар користувача.';

$lang['User_special'] = 'Спеціальні адміністраторські налаштування';
$lang['User_special_explain'] = 'Ці поля не можуть буди модифіковані користувачами.  Тут ви можете визначити їхній статус та деякі інші налаштування.';


//
// Group Management
//
$lang['Group_administration'] = 'Адміністрування груп';
$lang['Group_admin_explain'] = 'З цієї панелі ви можете налаштовувати групи користувачів, а саме: знищувати, створювати та редагувати їх. Ви можете визначити модератора групи, вибрати її статус (відкрита/закрита), встановити назву групи і її опис.';
$lang['Error_updating_groups'] = 'Не можу оновити конфігурацію груп';
$lang['Updated_group'] = 'Конфігурацю групи оновлено';
$lang['Added_new_group'] = 'Нову групу створено';
$lang['Deleted_group'] = 'Групу видалено';
$lang['New_group'] = 'Створити нову групу';
$lang['Edit_group'] = 'Редагувати групу';
$lang['group_name'] = 'Назва групи';
$lang['group_description'] = 'Опис групи';
$lang['group_moderator'] = 'Модератор групи';
$lang['group_status'] = 'Статус групи';
$lang['group_open'] = 'Відкрита група';
$lang['group_closed'] = 'Закрита група';
$lang['group_hidden'] = 'Прихована група';
$lang['group_delete'] = 'Видалити групу';
$lang['group_delete_check'] = 'Видалити цю групу';
$lang['submit_group_changes'] = 'Змінити';
$lang['reset_group_changes'] = 'Забрати зміни';
$lang['No_group_name'] = 'Вам потрібно вказати назву групи';
$lang['No_group_moderator'] = 'Вам потрібно вказати модератора цієї групи';
$lang['No_group_mode'] = 'Вам потрібно вказати тип групи (відкрита/закрита)';
$lang['No_group_action'] = 'Жодної дії не виконано';
$lang['delete_group_moderator'] = 'Позбавити прав діючого модератора?';
$lang['delete_moderator_explain'] = 'Якщо бажаєте позбавити прав модератора групи, активуйте сусідній чекбокс. Майте на увазі, користувача буде позбавлено прав керування групою і він стане звичайним її учасником.';
$lang['Click_return_groupsadmin'] = '%sПерейти до адміністрування груп%s';
$lang['Select_group'] = 'Вибрати групу';
$lang['Look_up_group'] = 'Переглянути';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Автозачистка';
$lang['Forum_Prune_explain'] = 'Ця панель допомагає видаляти теми, на які не надходили відповіді впродовж певного часу. Якщо ви не наберете цифри, всі теми будуть знищені. Не видаляються теми з активними голосуваннями і теми-анонси. При бажанні, вам необхідно буде видалити такі теми вручну.';
$lang['Do_Prune'] = 'Видалити';
$lang['All_Forums'] = 'Всі форуми';
$lang['Prune_topics_not_posted'] = 'Видалити неактивні теми впродовж';
$lang['Topics_pruned'] = 'Теми видалено';
$lang['Posts_pruned'] = 'Повідомлення видалено';
$lang['Prune_success'] = 'Зачистку форумів завершено';


//
// Word censor
//
$lang['Words_title'] = 'Цензура слів';
$lang['Words_explain'] = 'З цієї панелі ви можете додавати, видаляти та редагувати недозволені на вашому форумі слова. Окрім того, буде заборонено реєструвати імена, які містять такі слова. Універсальний замінник (*) працює як заміна будь якій кількості знаків, там де стоїть, тобто *тест* не дозволить писати слова, всередині яких зустрічається "тест", тест* - які починаються на "тест", *тест - закінчуються.';
$lang['Word'] = 'Слово';
$lang['Edit_word_censor'] = 'Редагування слова';
$lang['Replacement'] = 'Заміна';
$lang['Add_new_word'] = 'Додати нове слово';
$lang['Update_word'] = 'Оновити слово';

$lang['Must_enter_word'] = 'Вам потрібно вказати слово і його заміну';
$lang['No_word_selected'] = 'Для редагування не обрано слова';

$lang['Word_updated'] = 'Вибране слово було оновлене';
$lang['Word_added'] = 'Нове слово додане';
$lang['Word_removed'] = 'Слово видалене';

$lang['Click_return_wordadmin'] = '%sПовернутись до адміністрування цензури слів%s';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'За допомогою цієї функції ви можете розсилати листи зареєстрованим на форумі учасникам. Не зупиняйте роботу скрипта посеред виконання - на розсилку потрібен певний час і вас буде повідомлено про її завершення';
$lang['Compose'] = 'Поле для розсилки';

$lang['Recipients'] = 'Отримувачі';
$lang['All_users'] = 'Всі зареєстровані';

$lang['Email_successfull'] = 'Вашого листа розіслано';
$lang['Click_return_massemail'] = '%sПовернутись до сторінки розсилки%s';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Адміністрування статусів';
$lang['Ranks_explain'] = 'Ця панель дозволяє створювати, змінювати та знищувати статуси користувачів. Також ви можете створювати спеціальні статуси, які зможете призначати в панелі керування користувачів';

$lang['Add_new_rank'] = 'Додати новий статус';

$lang['Rank_title'] = 'Статус';
$lang['Rank_special'] = 'Спеціальний';
$lang['Rank_minimum'] = 'Мінімальна к-ть повідомлень';
$lang['Rank_maximum'] = 'Максимальна к-ть повідомлень';
$lang['Rank_image'] = 'Графічний файл статусу (відносно кореня форуму)';
$lang['Rank_image_explain'] = 'Використовується для того, щоб асоціювати зі статусом маленький графічний файл';

$lang['Must_select_rank'] = 'Вам потрібно вказати назву статусу';
$lang['No_assigned_rank'] = 'Статус не спеціальний';

$lang['Rank_updated'] = 'Статус оновлено';
$lang['Rank_added'] = 'Статус додано';
$lang['Rank_removed'] = 'Статус видалено';
$lang['No_update_ranks'] = 'Статус видалено, але статус користувачів, які його використовували не змінено. Вам необхідно вручну змінити налаштування їхніх статусів.';

$lang['Click_return_rankadmin'] = '%sПовернутись до адміністрування статусів%s';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Недозволені ніки';
$lang['Disallow_explain'] = 'Ця панель дозволяє визначити ніки, які кроистувачі не зможуть зареєструвати.  В них дозволяється використовувати замінник "*".  Майте на увазі, якщо ви впишете сюди існуючий нік, то він все-одно буде активним. Спочатку видаліть його';

$lang['Delete_disallow'] = 'Видалити';
$lang['Delete_disallow_title'] = 'Видалити заборонений нік';
$lang['Delete_disallow_explain'] = 'Виберіть потрібний нік і натисніть кнопку';

$lang['Add_disallow'] = 'Додати';
$lang['Add_disallow_title'] = 'Додати недозволений нік';
$lang['Add_disallow_explain'] = 'Модете використовувати "*" як замінник будь-якого символу';

$lang['No_disallowed'] = 'Немає заборонених ніків';

$lang['Disallowed_deleted'] = 'Недозволений нік видалено';
$lang['Disallow_successful'] = 'Недозволений нік додано';
$lang['Disallowed_already'] = 'Нік, який ви ввели не можна заборонити. Він або вже є у списку, або зареєстрований на користувача, або є в списку цензури';

$lang['Click_return_disallowadmin'] = '%sПерейти до адміністрування недозволених ніків%s';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Адміністрування тем (стилів)';
$lang['Styles_explain'] = 'З цієї панелі ви можете додавати, видаляти та налаштовувати стилі, які користувачі вашого форуму можуть використовувати';
$lang['Styles_addnew_explain'] = 'Наступний список показує всі невстановлені теми на вашому форумі. Для цього клікніть "інсталювати" нижче';

$lang['Select_template'] = 'Вибрати тему';

$lang['Style'] = 'Тема';
$lang['Template'] = 'Заготовка';
$lang['Install'] = 'Інсталювати';
$lang['Download'] = 'Отримати';

$lang['Edit_theme'] = 'Редагувати тему';
$lang['Edit_theme_explain'] = 'Ця панель дозволяє редагувати налаштування обраної теми';

$lang['Create_theme'] = 'Створити тему';
$lang['Create_theme_explain'] = 'Використовуйте нижчеподану форму для створення теми з заготовки. Вводьте кольори в шіснадцятковому RGB-форматі. Не ставте перед кожним кольором знак гратки "#" (CCCCCC - правильно, #CCCCCC - ні)';

$lang['Export_themes'] = 'Експорт тем';
$lang['Export_explain'] = 'З цієї панелі ви можете експортувати налаштування теми у окремий файл. Виберіть потрібну тему, натисніть кнопку і скрипт запише всі налаштування в окремий файл і спробує зберегти у директорії теми. Якщо ви не поставили права на запис в директорію тем, файл буде відіслано вам для скачування. Для того щоб поставити права на запис перегляньте файл допомого форуму, або розберіться з UNIX-командою "chmod".';

$lang['Theme_installed'] = 'Вибрану тему встановлено успішно';
$lang['Style_removed'] = 'Вибрану тему видалено з бази даних. Для повного видалення знищіть відповідну директорію у директорії тем';
$lang['Theme_info_saved'] = 'Налаштування теми для вибраної заготовки виконано. Вам слід забрати права на запис для файлу theme_info.cfg';
$lang['Theme_updated'] = 'Вибрану тему оновлено. Вам слід експортувати нові налаштування теми';
$lang['Theme_created'] = 'Тему створено. Вам слід експорувати налаштування теми в конфігураційний файл';

$lang['Confirm_delete_style'] = 'Ви справді бажаєте видалити обрану тему?';

$lang['Download_theme_cfg'] = 'Програма експорту не може зберегти налаштування теми у файлі. Слікніть по кнопці, що подана нижче для скачування цього файлу через браузер. Після того, як отримаєте цей файл, завантажте його на сервер, у директорію теми.';
$lang['No_themes'] = 'Файл заготовки, який ви обрали, не має відповідних файлів теми. Для створення нової теми виберіть "Створити" у лівій панелі';
$lang['No_template_dir'] = 'Не можу відкрити директорію тем. Можливо, до неї немає прав доступу, або вона не існує';
$lang['Cannot_remove_style'] = 'Ви не можете видалити тему, яка в налаштуванні форуму є головною. Замініть її на іншу і спробуйте ще раз.';
$lang['Style_exists'] = 'Така назва теми вже існує. Поверніться назад і виберіть інше ім\'я.';

$lang['Click_return_styleadmin'] = '%sПерейти до адміністрування тем%s';

$lang['Theme_settings'] = 'Налаштування теми';
$lang['Theme_element'] = 'Елемент теми';
$lang['Simple_name'] = 'Коментар';
$lang['Value'] = 'Значення';
$lang['Save_Settings'] = 'Зберегти';

$lang['Stylesheet'] = 'Файл стилів CSS';
$lang['Background_image'] = 'Графічний файл фону';
$lang['Background_color'] = 'Колір фону';
$lang['Theme_name'] = 'Назва теми';
$lang['Link_color'] = 'Колір лінків';
$lang['Text_color'] = 'Колір тексту';
$lang['VLink_color'] = 'Колір відвіданих лінків';
$lang['ALink_color'] = 'Колір активних лінків';
$lang['HLink_color'] = 'Колір наведених лінків';
$lang['Tr_color1'] = 'Колір рядка таблиці 1';
$lang['Tr_color2'] = 'Колір рядка таблиці 2';
$lang['Tr_color3'] = 'Колір рядка таблиці 3';
$lang['Tr_class1'] = 'Клас рядка таблиці 1';
$lang['Tr_class2'] = 'Клас рядка таблиці 2';
$lang['Tr_class3'] = 'Клас рядка таблиці 3';
$lang['Th_color1'] = 'Колір заголовка таблиці 1';
$lang['Th_color2'] = 'Колір заголовка таблиці 2';
$lang['Th_color3'] = 'Колір заголовка таблиці 3';
$lang['Th_class1'] = 'Клас комірки таблиці 1';
$lang['Th_class2'] = 'Клас заголовка таблиці 2';
$lang['Th_class3'] = 'Клас заголовка таблиці 3';
$lang['Td_color1'] = 'Колір комірки таблиці 1';
$lang['Td_color2'] = 'Колір комірки таблиці 2';
$lang['Td_color3'] = 'Колір комірки таблиці 3';
$lang['Td_class1'] = 'Клас комірки таблиці 1';
$lang['Td_class2'] = 'Клас комірки таблиці 2';
$lang['Td_class3'] = 'Клас комірки таблиці 3';
$lang['fontface1'] = 'Шрифт тексту 1';
$lang['fontface2'] = 'Шрифт тексту 2';
$lang['fontface3'] = 'Шрифт тексту 3';
$lang['fontsize1'] = 'Розмір шрифту 1';
$lang['fontsize2'] = 'Розмір шрифту 2';
$lang['fontsize3'] = 'Розмір шрифту 3';
$lang['fontcolor1'] = 'Колір шрифту 1';
$lang['fontcolor2'] = 'Колір шрифту 2';
$lang['fontcolor3'] = 'Колір шрифту 3';
$lang['span_class1'] = 'Клас 1';
$lang['span_class2'] = 'Клас 2';
$lang['span_class3'] = 'Клас 3';
$lang['img_poll_size'] = 'Розмір граф. файла голосування [px]';
$lang['img_pm_size'] = 'Розмір статусу приватних повідомлень [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Інсталяція phpBB-форуму';
$lang['Initial_config'] = 'Базові Установки';
$lang['DB_config'] = 'Конфігурація Бази Даних';
$lang['Admin_config'] = 'Конфігурація сервера/установки адміністратора';
$lang['continue_upgrade'] = 'Якщо ви маєте файл оновлення форуму - натисніть кнопку \'Оновити форум\'.  Будь-ласка, дочекайтесь до кінця оновлення!';
$lang['upgrade_submit'] = 'Оновити форум';

$lang['Installer_Error'] = 'Протягом інсталяції виникли проблеми';
$lang['Previous_Install'] = 'Знайдено попередню інсталяцію';
$lang['Install_db_error'] = 'При оновленні бази даних виявлено проблеми';

$lang['Re_install'] = 'Ваша попередня версія досі активна. <br /><br />Якщо ви бажаєте переінсталювати форум - тисніть кнопку \'Переінсталювати\'. Майте на увазі, що всі існуючі дані форуму будуть безповоротно знищені! Подумайте двічі перед тим, як переінсталювати форум!';

$lang['Inst_Step_0'] = 'Дякуємо за вибір phpBB 2. Для завершення інсталяції заповніть нижчеподані поля. Майте на увазі, що база даних, яку ви виберете, має існувати. Якщо ви збираєтесь використовувати ODBC, MS Access вам слід створити DSN перед продовженням інсталяції.';

$lang['Start_Install'] = 'Розпочати інсталяцію';
$lang['Finish_Install'] = 'Завершити інсталяцію';

$lang['Default_lang'] = 'Основна мова форуму';
$lang['DB_Host'] = 'Адреса сервера баз даних';
$lang['DB_Name'] = 'Ім\'я бази даних форуму';
$lang['DB_Username'] = 'Логін';
$lang['DB_Password'] = 'Пароль';
$lang['Database'] = 'Ваша база даних';
$lang['Install_lang'] = 'Виберіть мову інсталяції';
$lang['dbms'] = 'Тип бази даних';
$lang['Table_Prefix'] = 'Префікс імен таблиць';
$lang['Admin_Username'] = 'Адміністраторський логін';
$lang['Admin_Password'] = 'Адміністраторський пароль';
$lang['Admin_Password_confirm'] = 'Адміністраторський пароль [ підтвердження ]';

$lang['Inst_Step_2'] = 'Адміністраторський аккаунт створено.  Інсталяцію завершено. Зараз вас буде переправлено до адміністраторської панелі, де можна налаштувати форум.';

$lang['Unwriteable_config'] = 'Ваш файл захищено від запису. Копія цього файлу буде отримана після натискання відповідної кнопки. Вам слід перенести цей файл до каталогу форуму. Коли виконаєте це - зайдіть до адміністраторської панелі.';
$lang['Download_config'] = 'Завантажити файл';

$lang['ftp_choose'] = 'Виберіть метод скачування';
$lang['ftp_option'] = '<br />Якщо вибрано FTP, впевніться, що ваша версія PHP це підтримує.';
$lang['ftp_instructs'] = 'Ви вибрали автоматичне записування файлу на ваш веб-сервер через FTP.  Введіть додаткову інформацію для завершення процесу. FTP-шлях має бути точним (до вашого форуму).';
$lang['ftp_info'] = 'Введіть інформацію про FTP';
$lang['Attempt_ftp'] = 'Спроба переслати файл по FTP';
$lang['Send_file'] = 'Відішліть цей файл мені, а я сам його туди завантажу';
$lang['ftp_path'] = 'FTP-шлях до phpBB 2';
$lang['ftp_username'] = 'Логін FTP';
$lang['ftp_password'] = 'Пароль FTP';
$lang['Transfer_config'] = 'Почати пересилку';
$lang['NoFTP_config'] = 'Спроба переслати цей файл по FTP зазнала невдачі. Будь-ласка, виконайте цю операцію вручну.';

$lang['Install'] = 'інсталювати';
$lang['Upgrade'] = 'оновити';


$lang['Install_Method'] = 'Метод інсталяції';

$lang['Install_No_Ext'] = 'Ваш сервер не підтримує вибраної вами бази даних';

$lang['Install_No_PCRE'] = 'phpBB2 потрібен Perl-сумісний модуль, якого ваш сервер не підтримує!';

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