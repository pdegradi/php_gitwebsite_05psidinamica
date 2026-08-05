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
        'slug'  => '06-La-psicologia-dell-io',
        'title' => '06 La psicologia dell\'io',
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
        'slug'  => '08-Dalla-teoria-pulsionale-alla-svolta-relazionale',
        'title' => '08 Dalla teoria pulsionale alla svolta relazionale',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '09-La-teoria-intersoggettiva-e-linconscio-nella-psicoanalisi-contemporanea',
        'title' => '09 La teoria intersoggettiva e l\'inconscio nella psicoanalisi contemporanea',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '10-Psicoanalisi-ricerca-empirica-e-teoria-dellattaccamento',
        'title' => '10 Psicoanalisi, ricerca empirica e teoria dell\'attaccamento',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '11-Letologia-Lorenz-Harlow-e-la-teoria-dellattaccamento-di-Bowlby',
        'title' => '11 L\'etologia, Lorenz, Harlow e la teoria dell\'attaccamento di Bowlby',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '12-Mary-Ainsworth-la-Strange-Situation-e-i-modelli-operativi-interni',
        'title' => '12 Mary Ainsworth, la Strange Situation e i modelli operativi interni',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '13-I-modelli-operativi-interni-e-la-trasmissione-intergenerazionale-dellattaccamento',
        'title' => '13 I modelli operativi interni e la trasmissione intergenerazionale dell\'attaccamento',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '14-Il-metodo-ricostruttivo-linfant-observation-e-renè-spitz',
        'title' => '14 Il metodo ricostruttivo, l\'Infant Observation e René Spitz',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '15-Linfant-research-Louis-Sander-e-Daniel-Stern',
        'title' => '15 L\'Infant Research, Louis Sander e Daniel Stern',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '16-Il-modello-diadico-di-Beebe-e-Lachmann-e-gli-studi-di-Tronick',
        'title' => '16 Il modello diadico di Beebe e Lachmann e gli studi di Tronick',
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
        'slug'  => '18-Psicoanalisi-e-neuroscienze-il-sistema-nervoso',
        'title' => '18 Psicoanalisi e neuroscienze: il sistema nervoso',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '19-Psicoanalisi-e-neuroscienze-emozioni-memoria-e-amigdala',
        'title' => '19 Psicoanalisi e neuroscienze: emozioni, memoria e amigdala',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '20-Correlati-neurobiologici-dellattaccamento-e-psicofisiologia-del-sonno',
        'title' => '20 Correlati neurobiologici dell\'attaccamento e psicofisiologia del sonno',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '21-Il-sonno-REM-le-emozioni-e-lipotesi-di-Matthew-Walker',
        'title' => '21 Il sonno REM, le emozioni e l\'ipotesi di Matthew Walker',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '22-Lo-studio-dei-sogni-e-la-teoria-della-cura',
        'title' => '22 Lo studio dei sogni e la teoria della cura',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '23-La-teoria-della-cura-da-Freud-a-Strachey-e-la-Psicologia-del-Sé',
        'title' => '23 La teoria della cura: da Freud a Strachey e la Psicologia del Sé',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '24-Lazione-terapeutica-lattaccamento-in-clinica-e-la-diagnosi-in-psicologia-dinamica',
        'title' => '24 L\'azione terapeutica, l\'attaccamento in clinica e la diagnosi in psicologia dinamica',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '25-La-diagnosi-descrittiva-e-psicodinamica-Kernberg-e-la-SWAP',
        'title' => '25 La diagnosi descrittiva e psicodinamica: Kernberg e la SWAP',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '26-Il-PDM-le-neuroscienze-nella-diagnosi-e-il-progetto-RDoC',
        'title' => '26 Il PDM, le neuroscienze nella diagnosi e il progetto RDoC',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '27-La-ricerca-in-psicoterapia-validità-disegni-di-studio-e-metanalisi',
        'title' => '27 La ricerca in psicoterapia: validità, disegni di studio e metanalisi',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '28-Lefficacia-della-psicoterapia-dinamica-la-rassegna-di-Shedler',
        'title' => '28 L\'efficacia della psicoterapia dinamica: la rassegna di Shedler',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '29-Le-rassegne-sistematiche-la-piramide-dellevidenza-e-le-linee-guida-PRISMA',
        'title' => '29 Le rassegne sistematiche, la piramide dell\'evidenza e le linee guida PRISMA',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
    [
        'slug'  => '30-Un-esempio-di-rassegna-sistematica-il-sonno-in-gravidanza',
        'title' => '30 Un esempio di rassegna sistematica: il sonno in gravidanza',
        'date'  => '2026-08-05',
        'featured_image'  => '',
    ],
];

// Helper functions are required here so that every page which loads
// config.php automatically has access to them (e.g. format_article_date()
// used directly inside article files, before layout.php is included).
require_once __DIR__ . '/functions.php';
