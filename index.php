<?php
define('FRAMEWORK_ENTRY', true);
require __DIR__ . '/includes/config.php';

ob_start();
?>
<section class="wrap-content">
    <h1><?= htmlspecialchars($site_name) ?></h1>
    <p><a class="btn btn-primary" href="/blog.php">Vai al blog &rarr;</a></p>
</section>
<?php
$content = ob_get_clean();

$page_title = $site_name;

// Example of optional SEO tags: omit the $seo array entirely on pages
// where you don't need them, and no SEO meta tags will be rendered.
$seo = [
    'description' => $site_description,
    'og_title'     => $site_name,
    'og_type'      => 'website',
    'og_image'     => '/assets/images/og-cover.svg',
];

require __DIR__ . '/includes/layout/layout.php';
