<?php
require_once "Art/Load.php";
require_once "api/lang.php";

$route->get("index", "home");
$route->get("/home", "home");
$route->get("/about", "about");
$route->get("/programs", "programs");
$route->get("/news", "news");
$route->get("/contact", "contact");
$route->get("/staff", "staff");
$route->get("/gallery", "gallery");
$route->get("/links", "links");

$page = $route->render_url($_SERVER["REQUEST_URI"], $GLOBALS);

$currentUrl = $_SERVER["REQUEST_URI"];
$baseUrl = "https://kolenehtenin.tasev.me";
$pageTitle = tr('school.name') . " - " . tr('school.city');
$pageDescription = tr('school.description');

$pageMeta = [
    '/about' => ['title' => tr('about.title') . ' - ' . tr('school.name'), 'desc' => tr('about.subtitle')],
    '/programs' => ['title' => tr('programs.title') . ' - ' . tr('school.name'), 'desc' => tr('about.infrastructure_text')],
    '/news' => ['title' => tr('news.title') . ' - ' . tr('school.name'), 'desc' => tr('news.subtitle')],
    '/contact' => ['title' => tr('contact.title') . ' - ' . tr('school.name'), 'desc' => tr('about.title')],
    '/staff' => ['title' => tr('staff.title') . ' - ' . tr('school.name'), 'desc' => tr('staff.subtitle')],
    '/gallery' => ['title' => tr('gallery.title') . ' - ' . tr('school.name'), 'desc' => tr('gallery.subtitle')],
    '/links' => ['title' => tr('links.title') . ' - ' . tr('school.name'), 'desc' => tr('links.subtitle')],
];

foreach ($pageMeta as $path => $meta) {
    if (strpos($currentUrl, $path) === 0) {
        $pageTitle = $meta['title'];
        $pageDescription = $meta['desc'];
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo isset($_GET['lang']) ? substr($_GET['lang'], 0, 2) : 'mk'; ?>">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2/tabler-icons.min.css">
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss"><?php echo file_get_contents("assets/css/theme.css"); ?></style>

    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="author" content="<?php echo tr('footer.author'); ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($baseUrl . $currentUrl); ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo htmlspecialchars(tr('school.name')); ?>">
    <meta property="og:locale" content="<?php echo isset($_GET['lang']) ? substr($_GET['lang'], 0, 2) . '_' . strtoupper(substr($_GET['lang'], 0, 2)) : 'mk_MK'; ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "School",
        "name": "<?php echo htmlspecialchars(tr('school.name')); ?>",
        "description": "<?php echo htmlspecialchars(tr('school.description')); ?>",
        "url": "<?php echo $baseUrl; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Булевар Гоце Делчев бр. 101",
            "addressLocality": "<?php echo tr('school.city'); ?>",
            "postalCode": "2000",
            "addressCountry": "MK"
        },
        "telephone": "+38932391384",
        "email": "kontakt@kolenehtenin.edu.mk",
        "image": "<?php echo $baseUrl; ?>/assets/images/logo.jpg",
        "areaServed": {
            "@type": "State",
            "name": "North Macedonia"
        },
        "sameAs": [
            "https://www.facebook.com/skolenehtenin",
            "https://www.instagram.com/dsu_rcsoo_kole.nehtenin"
        ]
    }
    </script>
</head>
<body class="bg-surface text-onSurface scroll-smooth flex flex-col min-h-screen">
    <?php echo $page; ?>
</body>
</html>
