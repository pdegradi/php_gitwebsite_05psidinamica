<?php
define('FRAMEWORK_ENTRY', true);
require __DIR__ . '/../includes/config.php';

[
    'title'          => $article_title,
    'date'           => $article_date,
    'featured_image' => $featured_image
] = get_current_article_data($articles);

ob_start();
?>



<?php
$article_body = ob_get_clean();

require __DIR__ . '/../includes/layout/layout-article.php';
