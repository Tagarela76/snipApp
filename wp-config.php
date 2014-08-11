<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'snipapp_bd');

/** Имя пользователя MySQL */
define('DB_USER', 'snipapp_user');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Q56v&QOTs.Nb');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bMF]MicDEz/&rAl)!TXe~+jP?.s):9+:S1faPbhz-dt3<g=&bFz%~Fwt|:.3Nqdh');
define('SECURE_AUTH_KEY',  'Ex0J`Zbm_~UitqNvZE`Y7+o3P#=iv4<`:@I]04=TYHJh.>48!a8;uaX]5V$07-f!');
define('LOGGED_IN_KEY',    ',MPj]}GpR0B*|XKS&IZzK;*k_IAet,zayaJy,3,3GxSarIFmvww2?lXo$[R4zDaG');
define('NONCE_KEY',        'YYnh41H$`o]<mjZ@#-|u@@slwKb&OX>(@g*$=#3h;+?gvR-3uSg`6-Pq|9XU0P@]');
define('AUTH_SALT',        ',UE55,w49CmWY!Z^Z#JEhQv#hQ>n#u*C#{CD@%zlq=.44ljwE8Dm*Rz,K}LjQ|nH');
define('SECURE_AUTH_SALT', 'k]F1X_qYszWnd2!) 8fJ}$Rr>bWiOOT!9n=(14<n(8>)QT:0]N_|*5h9&BIAB&;6');
define('LOGGED_IN_SALT',   'AQm.L|j~^pYo|m{}X/<p[)qZ,lnF~17~A-(gjT0_]}()(f<z:[K^j8!%r@Dnp5](');
define('NONCE_SALT',       't|]R)kt/|`9|1cRa/OBR$JUjEz/nwIO;l1[2gz;r]mOCvpNqgp~T O[u}|[APi9G');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
