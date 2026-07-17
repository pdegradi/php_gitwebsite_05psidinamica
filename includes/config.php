<?php
/**
 * config.php
 * Shared variables, loaded by every page of the site.
 * This is an internal file: it must not be requested directly (see the
 * guard below), it is only meant to be required by entry-point pages.
 */

if (!defined('FRAMEWORK_ENTRY')) {
    http_response_code(403);
    die('Direct access is not permitted.');
}

/**
 * Debug mode: controls error visibility.
 * true  (development): every error is shown on screen.
 * false (production):  no error is ever shown, only logged.
 */
$app_debug = true;

error_reporting(E_ALL);
if ($app_debug) {
    ini_set('display_errors', '1');
} else {
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
    // ini_set('error_log', __DIR__ . '/../error.log'); // uncomment for a custom log file
}

$site_name        = "05psidinamica";
$site_description = "Un piccolo sito statico su misura.";
$site_lang = "it";


/**
 * Article sorting, used by blog.php.
 * $article_sort_by:    'title' or 'date'
 * $article_sort_order: 'asc' or 'desc'
 */
$article_sort_by    = 'title';
$article_sort_order = 'asc';

// Number of articles shown per page on blog.php.
$blog_page_size = 10;

/**
 * Database connection (MariaDB via PDO). Not used anywhere yet: the
 * framework has no database-backed page. Fill in real values and call
 * get_db_connection() (see includes/functions.php) when you need it.
 * Usage examples: includes/db-examples.php.
 */
$db_host    = '127.0.0.1';
$db_port    = 3306;
$db_name    = 'nome_database';
$db_user    = 'utente';
$db_pass    = 'password';
$db_charset = 'utf8mb4';

/**
 * Session lifetime, in minutes. Not used anywhere yet: call
 * start_app_session() (see includes/functions.php) when you need
 * sessions. Usage examples: includes/session-examples.php.
 */
$session_lifetime_minutes = 60;


$articles_folder = "articles";
$articles = [
    [
        'slug'  => '01-I-fondamenti-teorici-della-psicoanalisi-classica-Parte-prima',
        'title' => '01 I fondamenti teorici della psicoanalisi classica (Parte prima)',
        'date'  => '2026-07-01',
        'featured_image'  => '',
    ],
    [
        'slug'  => '02-I-fondamenti-teorici-della-psicoanalisi-classica-Parte-seconda',
        'title' => '02 I fondamenti teorici della psicoanalisi classica (Parte seconda)',
        'date'  => '2026-07-02',
        'featured_image'  => '',
    ],
    [
        'slug'  => '03-La-psicoanalisi-come-cura',
        'title' => '03 La psicoanalisi come cura',
        'date'  => '2026-07-03',
        'featured_image'  => '',
    ],
    [
        'slug'  => '04-La-teoria-psicoanalitica-di-Melanie-Klein',
        'title' => '04 La teoria psicoanalitica di Melanie Klein',    
        'date'  => '2026-07-04',
        'featured_image'  => '',
    ],
    [
        'slug'  => '05-La-scuola-inglese-delle-relazioni-oggettuali',
        'title' => '05 La scuola inglese delle relazioni oggettuali',
        'date'  => '2026-07-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '06-La-psicologia-dell-io',
        'title' => '06 La psicologia dell\'io',
        'date'  => '2026-07-06',
        'featured_image'  => '',
    ],
    [
        'slug'  => '07-Le-psicologie-dell-identità-e-del-Se',
        'title' => '07 Le psicologie dell\'identità e del Sé',
        'date'  => '2026-07-07',
        'featured_image'  => '',
    ]


    
];

// Helper functions are required here so that every page which loads
// config.php automatically has access to them (e.g. format_article_date()
// used directly inside article files, before layout.php is included).
require_once __DIR__ . '/functions.php';
