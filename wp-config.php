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
define( 'DB_NAME', 'my' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']v)A??|Ey[Zr0cd]E5AR8VE3U%@kmY4~/+It._Y7SlzU$2(QE`$GsuasOx_~;0g0' );
define( 'SECURE_AUTH_KEY',  'DI5jG7|!jz^(yt|*rL{{9H5KVY}er#eL2[rR0#1*%*dR_7}5m[v0&,SC-xMb1Y>Q' );
define( 'LOGGED_IN_KEY',    'W2PrQEhGu#ijD[Y?^R Bh!N/sw-Eyis`aYJhdBF=JSgTr#$sGk2oD)f)MYMGt6-.' );
define( 'NONCE_KEY',        '~EQ>yzLDrfFTPok&L5B>n9J2>n^xFf(05C,YL9nyi$6[)!_eK3Z|iub>nyGe+M]B' );
define( 'AUTH_SALT',        'SI/m~,>$(4fi5p$wy`|)_wnB3}4VAqY8-Zm~`QF3N/z*K&x9LTcd,[C}Sf*-~<<H' );
define( 'SECURE_AUTH_SALT', 'P#@>xVo.FRJT}M~06w5S]aGxSM5N$^[KQPUZO*#G0fi]6^gfzDAa}5e; (ZY`fkS' );
define( 'LOGGED_IN_SALT',   '#F(G&W1H%$%(a&xbNknZ/b9]H7kr-1;Dh/Y>q/EC6I,Ew[Z_xczR;J0!_Tc-Zr,2' );
define( 'NONCE_SALT',       'yJ|+E`9z}j!W^;?ka]<?M:-tNy<+</OMNr&^7CwGctub(/Pb0yc6TjYa5TB1qfk;' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
