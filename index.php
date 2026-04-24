<?php
// error_reporting(E_ERROR | E_PARSE);
// ini_set('display_errors', '0');

require_once "Art/Load.php";
require_once "api/lang.php";

$route->get("index", "home");
$route->get("/home", "home");
$route->get("/about", "about");
$route->get("/programs", "programs");
$route->get("/news/:slug", "news_detail");
$route->get("/news", "news");
$route->get("/contact", "contact");
$route->get("/staff", "staff");
$route->get("/gallery", "gallery");
$route->get("/links", "links");

$page = $route->render_url($_SERVER["REQUEST_URI"], $GLOBALS);
?>
<!DOCTYPE html>
<html lang="mk">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2/tabler-icons.min.css">
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss"><?php echo file_get_contents("assets/css/theme.css"); ?></style>

    <title>ДСУ РЦСОО „Коле Нехтенин" - Штип</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-surface text-onSurface scroll-smooth flex flex-col min-h-screen">
    <?php echo $page; ?>
</body>
</html>