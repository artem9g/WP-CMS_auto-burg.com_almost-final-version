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
 * * Настройки MySQL
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
define( 'DB_NAME', 'wp-auto-2' );

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
define( 'AUTH_KEY',         'v<qdy(j|xF!GJhzlea;|[9<OOF$#hk)j Xtm(iPCbqmQZPO`8)eIK|#}S%-}$V:;' );
define( 'SECURE_AUTH_KEY',  '%hR9.z(DRH9ecW.I?;xHffnZoj0/3wgVH9Bpd!})zz5igzem]I3?Cb;-}70gXbik' );
define( 'LOGGED_IN_KEY',    '5S/d>bQD3mDDDq8iMx$zze;k^wDDrGgd8se$vt*onP*wCg-0wsI Ln}%O DS$]@d' );
define( 'NONCE_KEY',        '=s1Y|)POYvwotD?9UVlOsvQx Zx}z%=e_>9MjZ+7?H_RLt$g9#f:Q_nzPjK|&,TT' );
define( 'AUTH_SALT',        'm-rZVhH@n+UJ&}_%9uF n-6Jhv:J,LSLkjH&w+|`DJ4B3u3p4;}[S/<rwNuxOcoP' );
define( 'SECURE_AUTH_SALT', '14],0MI7rBt!~M3|!=*{J$8>U4)xwiz{qMTBe~_7R7>=V(7tLgXi R%3G$1z&T8-' );
define( 'LOGGED_IN_SALT',   'OJpuD_Cjj^r0S?B^n,i-&;|2r1w=s]JQ.Bc5`6l%/!A3c6&sK|YH,T{%3CSfvWta' );
define( 'NONCE_SALT',       'rVUXzq.uzGz;d:JR>(XrPJ?1wgRFjGHyr~jWCt}Zu);~Ph<% GyxC@cZ&k9](h7h' );

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
