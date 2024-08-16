<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'webdesignsun' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's}|GD0?dHZ%a7J]7sXGpWWK1vI[)r$Nz-(IqfW,;7D)wX^5KxJ,mW.gzSk>)O%O$' );
define( 'SECURE_AUTH_KEY',  'QvEfec^c%uCC{G= 2^~ebN&5#X7!uQkQ] zC6.%Ja ==V=^8FxBtK){$1K//tjeV' );
define( 'LOGGED_IN_KEY',    'kD*m`INs<Cr}+YI?/NS>rQtN]dL}?c;lW7_cL~h8L zyzEMJF#7]?~$>Hw)-{1&Z' );
define( 'NONCE_KEY',        ';?0+C,fdL/kbRQ7zJ!a)x[))mCWi]y*W#,=rKj/I;)bF(tfaZ/4-fXVsv](XR}pz' );
define( 'AUTH_SALT',        'tmBPb$2%r:)08?.LaP)>Z3lY1mZ5o^n7ks,GI*4TvR+E2m34# M1.:$|<@%rY9,L' );
define( 'SECURE_AUTH_SALT', ' s4cSX&y|PB{=AoW0tc^,;[dAadxA(kc<}#4WOnMuH9jc$2i&Lw<|0s.bSZ*u{S ' );
define( 'LOGGED_IN_SALT',   '1MYQre:K5[0Z?o{5GVw!;(HL|UL=rPm>56<SWL<?+3Dt /*VgvnRv3]hM Vuwuy?' );
define( 'NONCE_SALT',       'mR]d>xk@dLnR*hq:T3#CbQu:8z.3<X)bPNlUfjg|4plAB^qXX!$rnUHvO!5~MM?.' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
