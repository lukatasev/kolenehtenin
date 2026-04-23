<?php
$months = [
    "01" => "Јануари", "02" => "Февруари", "03" => "Март",
    "04" => "Април", "05" => "Мај", "06" => "Јуни",
    "07" => "Јули", "08" => "Август", "09" => "Септември",
    "10" => "Октомври", "11" => "Ноември", "12" => "Декември"
];

$months_en = [
    "01" => "January", "02" => "February", "03" => "March",
    "04" => "April", "05" => "May", "06" => "June",
    "07" => "July", "08" => "August", "09" => "September",
    "10" => "October", "11" => "November", "12" => "December"
];

function formatDate($date, $months) {
    $parts = explode("-", $date);
    $day = ltrim($parts[2], "0");
    $month = $months[$parts[1]];
    $year = $parts[0];
    return "$day $month, $year";
}

function truncateExcerpt($text, $maxChars = 180) {
    $text = strip_tags($text);
    $text = trim($text);
    if (mb_strlen($text) > $maxChars) {
        $text = mb_substr($text, 0, $maxChars);
        $lastSpace = mb_strrpos($text, ' ');
        if ($lastSpace !== false) {
            $text = mb_substr($text, 0, $lastSpace);
        }
        $text .= "...";
    }
    return $text;
}

function formatExcerpt($text) {
    $escaped = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    return nl2br($escaped);
}

require_once __DIR__ . "/../api/db.php";
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 12;
$offset = ($page - 1) * $limit;

$lang = 'mk';
if (isset($_GET['lang'])) {
    $lang = strtolower(substr($_GET['lang'], 0, 2));
} elseif (isset($_COOKIE['lang'])) {
    $lang = strtolower(substr($_COOKIE['lang'], 0, 2));
}
if (!in_array($lang, ['mk','en','tr'])) $lang = 'mk';
$monthData = $lang === 'en' ? $months_en : $months;

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
$total_pages = (int)ceil($total / $limit);
$current_page = $page;
?>
@include('partials.header')

<main class="w-full flex-grow">
    <!-- Header -->
    <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
        <div class="max-w-5xl mx-auto px-6 py-14">
            <h1 class="text-3xl font-semibold text-onSurface">{{ tr('news.title') }}</h1>
            <p class="text-base text-onSurface/60 mt-2">{{ tr('news.subtitle') }}</p>
            <div class="flex gap-4 mt-4">
                <a href="https://www.facebook.com/skolenehtenin" target="_blank" rel="noopener noreferrer" class="text-sm text-onSurface/60 hover:text-onSurface flex items-center gap-1">
                    <i class="ti ti-brand-facebook text-[18px]"></i>
                    Facebook
                </a>
                <a href="https://www.instagram.com/dsu_rcsoo_kole.nehtenin" target="_blank" rel="noopener noreferrer" class="text-sm text-onSurface/60 hover:text-onSurface flex items-center gap-1">
                    <i class="ti ti-brand-instagram text-[18px]"></i>
                    Instagram
                </a>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 px-6 max-w-5xl mx-auto">
        <?php if (empty($news)): ?>
            <p class="text-onSurface/50 text-center py-12">{{ tr('news.no_news') }}</p>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($news as $article): ?>
                    <div class="bg-surface border border-surfaceContainer overflow-hidden">
                        <?php if (!empty($article["image_main"])): ?>
                            <img src="<?php echo htmlspecialchars($article["image_main"]); ?>" alt="<?php echo htmlspecialchars($article["title"]); ?>" class="w-full h-48 object-cover object-top">
                        <?php else: ?>
                            <div class="w-full h-48 bg-surfaceContainer flex items-center justify-center">
                                <i class="ti ti-news text-onSurface/20 text-6xl"></i>
                            </div>
                        <?php endif; ?>
                        <div class="p-5">
                            <span class="text-xs text-onSurface/40 mb-2 block"><?php echo formatDate($article["date"], $monthData); ?></span>
                            <h3 class="text-base font-semibold text-onSurface mb-2 leading-tight"><?php echo htmlspecialchars($article["title"]); ?></h3>
                            <p class="text-sm text-onSurface/60 leading-relaxed line-clamp-[6]">
                                <?php echo formatExcerpt(truncateExcerpt($article["excerpt"], 300)); ?>
                            </p>
                            <?php if (!empty($article["category"])): ?>
                                <span class="inline-block mt-3 text-xs text-onSurface/40 uppercase tracking-wider"><?php echo htmlspecialchars($article["category"]); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($total_pages > 1): ?>
                <div class="flex justify-center items-center gap-2 mt-12">
                    <?php if ($current_page > 1): ?>
                        <a href="/news?page=<?php echo $current_page - 1; ?>" class="px-4 py-2 text-sm border border-surfaceContainer rounded-sm hover:bg-surfaceContainer transition-colors text-onSurface/70 hover:text-onSurface">
                            &larr; {{ tr('news.previous') }}
                        </a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <?php if ($i === $current_page): ?>
                            <span class="px-4 py-2 text-sm bg-primary text-onPrimary font-medium rounded-sm"><?php echo $i; ?></span>
                        <?php else: ?>
                            <a href="/news?page=<?php echo $i; ?>" class="px-4 py-2 text-sm border border-surfaceContainer rounded-sm hover:bg-surfaceContainer transition-colors text-onSurface/70 hover:text-onSurface">
                                <?php echo $i; ?>
                            </a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if ($current_page < $total_pages): ?>
                        <a href="/news?page=<?php echo $current_page + 1; ?>" class="px-4 py-2 text-sm border border-surfaceContainer rounded-sm hover:bg-surfaceContainer transition-colors text-onSurface/70 hover:text-onSurface">
                            {{ tr('news.next') }} &rarr;
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </section>
</main>

@include('partials.footer')