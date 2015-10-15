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
//define('WP_CACHE', false); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '' ); //Added by WP-Cache Manager
define('DB_NAME', 'bvigroup_db');

/** Имя пользователя MySQL */
define('DB_USER', 'mindfld');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'medusa');

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
define('AUTH_KEY',         '@6-XX h{`?~y8}[jrjy<1ot`]5>^G~BzMJ<,)la1h?q~Yeqcre$*YQ|ov1m[$[JL');
define('SECURE_AUTH_KEY',  '5k`EY-*U`m*2/-a@)7d|1OPrlR~(V5N^@nq-n8+?]B,:>l1g]1d|H$04A|E-.%oA');
define('LOGGED_IN_KEY',    'X1hat|Aqd7`ySUd=gn>l|K0Z:YYa!5vl:MNWmc4On(tW06P5!Kke-M=$|81Y?B-=');
define('NONCE_KEY',        'o8>04e)9C/ugimO*; :C(|ug|`)4h+0 SCxN9yZ#wtw`ohQe&+ESiB(gI~ZQcV3Z');
define('AUTH_SALT',        '!K1a6!s[!:N}`CO*w|#6](Xq3cn~#})Qv;pRTfb>-Se.DI<pd^@r0C@H4<w~bprq');
define('SECURE_AUTH_SALT', '`a@pCk_BqvnSq+&-p`+*~4v._7>`bn*VDYYj_)%}6*IP#|gYZ@w t|3k<<K.8Asl');
define('LOGGED_IN_SALT',   'uuzfF|o%g~]Va*PJQMB#~j<U%S+FfzmI%5=0~j6);xl0Os_.!]=$Ka]h)3LJ|_@S');
define('NONCE_SALT',       'A7W<=-a*Sk!a-bFERmg<]s3maE=pq3D{rs6;x@D2|(3;%r{43%IA?^0OQN6|<Gt#');

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
