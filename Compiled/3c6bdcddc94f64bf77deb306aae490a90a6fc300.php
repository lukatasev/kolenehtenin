<?php defined("INDLUCE_CHECK") || die("404"); ?><?php
$months = [
 "01" => "Јануари", "02" => "Февруари", "03" => "Март",
 "04" => "Април", "05" => "Мај", "06" => "Јуни",
 "07" => "Јули", "08" => "Август", "09" => "Септември",
 "10" => "Октомври", "11" => "Ноември", "12" => "Декември"
];

function formatDate($date, $months) {
 $parts = explode("-", $date);
 $day = ltrim($parts[2], "0");
 $month = $months[$parts[1]];
 $year = $parts[0];
 return "$day $month, $year";
}
?>
<?php echo $this->runChild('partials.header'); ?>

<main class="w-full flex-grow">
 <!-- Header -->
 <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
 <div class="max-w-5xl mx-auto px-6 py-14">
 <h1 class="text-3xl font-semibold text-onSurface">Новости</h1>
 <p class="text-base text-onSurface/60 mt-2">Активности и постигнувања на учениците.</p>
 </div>
 </section>

 <!-- Content -->
 <section class="py-16 px-6 max-w-5xl mx-auto">
 <?php if (empty($news)): ?>
 <p class="text-onSurface/50 text-center py-12">Нема објавени новости.</p>
 <?php else: ?>
 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
 <?php foreach ($news as $article): ?>
 <div class="bg-surface border border-surfaceContainer overflow-hidden">
 <?php if (!empty($article["image"])): ?>
 <img src="<?php echo htmlspecialchars($article["image"]); ?>" alt="<?php echo htmlspecialchars($article["title"]); ?>" class="w-full h-48 object-cover object-top">
 <?php else: ?>
 <div class="w-full h-48 bg-surfaceContainer flex items-center justify-center">
 <span class="material-symbols-outlined text-onSurface/20 text-6xl">newspaper</span>
 </div>
 <?php endif; ?>
 <div class="p-5">
 <span class="text-xs text-onSurface/40 mb-2 block"><?php echo formatDate($article["date"], $months); ?></span>
 <h3 class="text-base font-semibold text-onSurface mb-2 leading-tight"><?php echo htmlspecialchars($article["title"]); ?></h3>
 <p class="text-sm text-onSurface/60 leading-relaxed">
 <?php echo htmlspecialchars($article["excerpt"]); ?>
 </p>
 <?php if (!empty($article["category"])): ?>
 <span class="inline-block mt-3 text-xs text-onSurface/40 uppercase tracking-wider"><?php echo htmlspecialchars($article["category"]); ?></span>
 <?php endif; ?>
 </div>
 </div>
 <?php endforeach; ?>
 </div>
 <?php endif; ?>
 </section>
</main>

<?php echo $this->runChild('partials.footer'); ?>
