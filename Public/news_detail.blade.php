<?php
require_once __DIR__ . "/../api/db.php";

function formatDateFull($date, $months) {
    $parts = explode("-", $date);
    $day = ltrim($parts[2], "0");
    $month = $months[$parts[1]];
    $year = $parts[0];
    return "$day $month, $year";
}

$slug = isset($arg->slug) ? $arg->slug : '';

if (empty($slug)) {
    http_response_code(404);
    echo "Not found";
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM news WHERE slug = :slug");
$stmt->execute(['slug' => $slug]);
$article = $stmt->fetch();

if (!$article) {
    http_response_code(404);
    echo "Article not found";
    exit;
}

$months = tr('months');
$images = [];
for ($i = 1; $i <= 5; $i++) {
    $key = "image_$i";
    if (!empty($article[$key])) {
        $images[] = $article[$key];
    }
}
?>
@include('partials.header')

<main class="w-full flex-grow">
    <!-- Back link -->
    <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
        <div class="max-w-5xl mx-auto px-6 py-4">
            <a href="/news" class="text-sm text-onSurface/60 hover:text-onSurface flex items-center gap-1">
                <i class="ti ti-arrow-left"></i>
                {{ tr('news.back') }}
            </a>
        </div>
    </section>

    <!-- Content -->
    <section class="py-12 px-6 max-w-4xl mx-auto">
        <article>
            <!-- Date & Category -->
            <div class="flex items-center gap-4 mb-4">
                <span class="text-sm text-onSurface/50"><?php echo formatDateFull($article["date"], $months); ?></span>
                <?php if (!empty($article["category"])): ?>
                    <span class="text-xs text-onSurface/40 uppercase tracking-wider"><?php echo htmlspecialchars($article["category"]); ?></span>
                <?php endif; ?>
            </div>

            <!-- Title -->
            <h1 class="text-3xl font-semibold text-onSurface mb-6"><?php echo htmlspecialchars($article["title"]); ?></h1>

            <!-- Main Image -->
            <?php if (!empty($article["image_main"])): ?>
                <img src="<?php echo htmlspecialchars($article["image_main"]); ?>" alt="<?php echo htmlspecialchars($article["title"]); ?>" class="w-full h-auto max-h-[500px] object-cover rounded-sm mb-8" data-lightbox>
            <?php endif; ?>

            <!-- Gallery Images -->
            <?php if (!empty($images)): ?>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-8">
                    <?php foreach ($images as $img): ?>
                        <img src="<?php echo htmlspecialchars($img); ?>" alt="" class="w-full h-40 object-cover rounded-sm cursor-pointer hover:opacity-80 transition-opacity" data-lightbox>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Content -->
            <div class="prose prose-sm max-w-none text-onSurface/80 leading-relaxed">
                <?php echo nl2br(htmlspecialchars($article["excerpt"])); ?>
            </div>
        </article>
    </section>
</main>

@include('partials.footer')