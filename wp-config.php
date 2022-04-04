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
define( 'DB_NAME', 'test_task' );

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
define( 'AUTH_KEY',         'ud|:bH.Ozr=#Kc!t1>zc>xX;R3?>OV^S}_A%67JQ_?,D=dlyJ(O]6h9|~3?0A}mc' );
define( 'SECURE_AUTH_KEY',  '3JqxAzeowdsk?[U;5)5rw$y#Jp2?D#I!n CZ3:,AE7.1/eO-6:;$nT<g`!F;V;s8' );
define( 'LOGGED_IN_KEY',    ',)3vmZ[8j2Q&?e[u=>+TnOnC**YGJ|n%>5J##zF95[r@Qx+Il+Q:-?~O{/e;?9U@' );
define( 'NONCE_KEY',        'H`V`<j>q,DP(jX(Zg-wNw<Nxsj>O9`vsaF=`3l836,oDi8q;*wvB[Tvd[#p =*z2' );
define( 'AUTH_SALT',        '1eJuL_,5]@}P@_z1|~TrNIw!^%8)$xPWWtdnUp/M itP%Ax^p=Jn&*-8C,M<vvOO' );
define( 'SECURE_AUTH_SALT', 'xpU{>m9M]L-xgWDzvzUn6LOJmIq,[/44:$Gp}+!GVb gtIUz]q}ZzeGRGMpNr1t^' );
define( 'LOGGED_IN_SALT',   'zAPNOKS[;8G ~&PywEKz,gx&*xMCV>qPDUN&hFEp]q|#PN,[g~dPW>~>1Lrs*uK:' );
define( 'NONCE_SALT',       '8~^Gwn6(nPwm 7=:_2(40}|u~*@w(z`N<4)#|I]4cRV;ng7AsRRTNL4^JLsqyRec' );

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

define('FS_METHOD', 'direct');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
