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
$blog_page_size = 33;

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
        'slug'  => '06-La-psicologia-dell-Io',
        'title' => '06 La psicologia dell\'Io',
        'date'  => '2026-07-06',
        'featured_image'  => '',
    ],
    [
        'slug'  => '07-Le-psicologie-dell-identità-e-del-Se',
        'title' => '07 Le psicologie dell\'identità e del Sé',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '08-Dalle-pulsioni-alle-relazioni',
        'title' => '08 Dalle pulsioni alle relazioni',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '09-La-teoria-intersoggettiva-e-la-concezione-della-mente-nella-psicoanalisi-contemporanea',
        'title' => '09 La teoria intersoggettiva e la concezione della mente nella psicoanalisi contemporanea',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '10-Psicoanalisi-e-psicologia-empirica',
        'title' => '10 Psicoanalisi e psicologia empirica',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '11-La-teoria-dellattaccamento',
        'title' => '11 La teoria dell\'attaccamento',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '12-Le-prime-ricerche-sullattaccamento',
        'title' => '12 Le prime ricerche sull\'attaccamento',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '13-La-ricerca-contemporanea-sullattaccamento',
        'title' => '13 La ricerca contemporanea sull\'attaccamento',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '14-Losservazione-del-bambino-in-psicoanalisi',
        'title' => '14 L\'osservazione del bambino in psicoanalisi',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '15-Infant-research',
        'title' => '15 Infant research',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '16-La-regolazione-emotiva-nella-prima-infanzia',
        'title' => '16 La regolazione emotiva nella prima infanzia',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '17-La-regolazione-del-sonno-nella-prima-infanzia',
        'title' => '17 La regolazione del sonno nella prima infanzia',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '18-Psicoanalisi-e-neuroscienze-introduzione-al-sistema-nervoso',
        'title' => '18 Psicoanalisi e neuroscienze - introduzione al sistema nervoso',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '19-Psicoanalisi-e-neuroscienze-emozioni-e-memoria',
        'title' => '19 Psicoanalisi e neuroscienze - emozioni e memoria',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '20-Correlati-neurobiologici-dellattaccamento',
        'title' => '20 Correlati neurobiologici dell\'attaccamento',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '21-La-psicofisiologia-del-sonno-dai-sogni-al-sonno-REM',
        'title' => '21 La psicofisiologia del sonno - dai sogni al sonno REM',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '22-Lo-studio-dei-sogni-dal-sonno-REM-ai-sogni',
        'title' => '22 Lo studio dei sogni - dal sonno REM ai sogni',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '23-La-teoria-della-cura',
        'title' => '23 La teoria della cura',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '24-Lazione-terapeutica-nella-psicoanalisi-contemporanea',
        'title' => '24 L\'azione terapeutica nella psicoanalisi contemporanea',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '25-La-diagnosi-in-Psicologia-dinamica-Parte-I',
        'title' => '25 La diagnosi in Psicologia dinamica (Parte I)',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '26-La-diagnosi-in-Psicologia-dinamica-Parte-II',
        'title' => '26 La diagnosi in Psicologia dinamica (Parte II)',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '27-La-ricerca-in-psicoterapia',
        'title' => '27 La ricerca in psicoterapia',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '28-La-ricerca-in-psicoterapia-dinamica',
        'title' => '28 La ricerca in psicoterapia dinamica',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '29-Le-rassegne-sistematiche',
        'title' => '29 Le rassegne sistematiche',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '30-Interventi-per-migliorare-la-qualità-del-sonno-in-gravidanza-un-esempio-di-rassegna-sistematica',
        'title' => '30 Interventi per migliorare la qualità del sonno in gravidanza - un esempio di rassegna sistematica',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
];

// Helper functions are required here so that every page which loads
// config.php automatically has access to them (e.g. format_article_date()
// used directly inside article files, before layout.php is included).
require_once __DIR__ . '/functions.php';
