<?php
require_once "Art/Load.php";

$route->get("index", function($vars) {
    require_once __DIR__ . "/api/db.php";
    
    $stmt = $pdo->query("
        SELECT id, slug, title, excerpt, date, image_main
        FROM news
        ORDER BY date DESC, id DESC
        LIMIT 3
    ");
    $recentNews = $stmt->fetchAll();
    
    return $route->render("home", ["recentNews" => $recentNews]);
});
$route->get("/home", function($vars) {
    require_once __DIR__ . "/api/db.php";
    
    $stmt = $pdo->query("
        SELECT id, slug, title, excerpt, date, image_main
        FROM news
        ORDER BY date DESC, id DESC
        LIMIT 3
    ");
    $recentNews = $stmt->fetchAll();
    
    return $route->render("home", ["recentNews" => $recentNews]);
});
$route->get("/about", "about");
$route->get("/programs", "programs");
$route->get("/news", function($vars) {
    require_once __DIR__ . "/api/db.php";
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $limit = 12;
    $offset = ($page - 1) * $limit;

    $stmt = $pdo->prepare("
        SELECT id, slug, title, excerpt, content, date, category, source_url,
               image_main, image_2, image_3, image_4, image_5
        FROM news
        ORDER BY date DESC, id DESC
        LIMIT :limit OFFSET :offset
    ");
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $news = $stmt->fetchAll();

    $totalStmt = $pdo->query("SELECT COUNT(*) FROM news");
    $total = (int)$totalStmt->fetchColumn();

    return $route->render("news", [
        "news" => $news,
        "current_page" => $page,
        "total_pages" => (int)ceil($total / $limit),
    ]);
});
$route->get("/contact", "contact");
$route->get("/staff", "staff");

$page = $route->render_url($_SERVER["REQUEST_URI"], $GLOBALS);
?>
<!DOCTYPE html>
<html lang="mk">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
