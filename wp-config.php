<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'arina');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|&u?#u/NXu,v^DWM:Ws%@_v=pN`k|$k=(#?#1Vw&QySxaG %)B{V(bC[%?t@2i9U');
define('SECURE_AUTH_KEY',  'vmC(%UG* Nwjf6#?}x^}`BfVx+HQ1DLf2!M)W:6spIbx aFzZ>~DL]@=&!E_p*K:');
define('LOGGED_IN_KEY',    '?dU?S~wW_U}IbvbkVL&7Oe)4^C$oZ-#>YiHNp30^}>_RtxS]xu>$q2_{s<>%1{4N');
define('NONCE_KEY',        '(@k#Pm`NP-Yz<(#-Mri<08Y0N~Cym~1BMK4t0@3Z_Tt_.@1);/CF ek+?{+}<{sp');
define('AUTH_SALT',        'Ol>x-!8o,L/.)-G,Kn=k_-oN^4-9va]03 w@M#E!@Vc3j$<WeaW!hw5t;4on=23q');
define('SECURE_AUTH_SALT', '<KHMB+dqiS>g&/D{JH[&rSn>?aw3K_z(O)im=T&N4Za 7yCpHn!<2r$p+c#/8h+Q');
define('LOGGED_IN_SALT',   'n#VMWCMA_0DC3|~DpP}_aJr]@6]UlA3JqnVI5GQ!b%?+ZqVI$]!Rqh/A|ux*=ql4');
define('NONCE_SALT',       'g0r;qsxGG|a7]Rd@ _Vu^0OFv8K !T;tCB-nj[A]gUd8r(TF!Q_%`+{6g$3^{D*,');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
