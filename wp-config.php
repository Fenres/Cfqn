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
define( 'DB_NAME', '030-22_88032' );

/** Имя пользователя базы данных */
define( 'DB_USER', '030-22_88032' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '39fab8adfbdb5208aea0' );

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
define( 'AUTH_KEY',         'LNl!ne&Pn4iwx?5.Nt2$|p7A]%~u|1IqEzswpC[658wrVvi#>tK{pcSO!Q})9;>]' );
define( 'SECURE_AUTH_KEY',  '#SGSBapF7og!:Ae%1VIpoSlcQzP-FUCe+zBAS=L9nVJ?$^-m&uEdxx1K(4lA>c ~' );
define( 'LOGGED_IN_KEY',    '>1XrY3vP#^qX^;K[4~5zc&>O$C1u`c&7aZ:t0 T[#lR_Fc1U?r?@Pi6KX~]-p+WL' );
define( 'NONCE_KEY',        'x/LX^/2KY%M]9}AN|K~w;` )G{=_1-Vt<9Vjkj*VZ|UY]QFHA2*3@$R8/ea z;E;' );
define( 'AUTH_SALT',        'MZmDQ]9jMETSqt&USy)dD*MZQ?1-jX[P.H.ZUx:U*Am]u)4RV;Uj{`X}4Su;))3z' );
define( 'SECURE_AUTH_SALT', 'N5a=FtLjY[y_i`C#*bt[}WFgX3x}a ]2ht.T+;U1Yk1k{$z.(%jv#>p!@xj2%wRb' );
define( 'LOGGED_IN_SALT',   'dF^xtv;M.l[7;/v5n[!%^M*wyj%NJ.bcYd2.*kD%l4 +q5<?h$AKGe]:4I8?jOe7' );
define( 'NONCE_SALT',       '.6K5w#G}ngr=w`POkj(dqdvVE{{#Yu`scT=a[cM&V$BCeF#}bETjL6bfRlU6iM:0' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'TBy3H_';


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