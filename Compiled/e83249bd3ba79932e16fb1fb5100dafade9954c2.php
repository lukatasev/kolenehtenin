<?php defined("INDLUCE_CHECK") || die("404"); ?><?php echo $this->runChild('partials.header'); ?>

<main class="w-full flex-grow">
 <!-- Hero -->
 <section class="border-b border-surfaceContainer">
 <div class="max-w-5xl mx-auto px-6 py-16 md:py-20">
 <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
 <div class="space-y-6">
 <h2 class="text-3xl md:text-4xl font-semibold text-onSurface leading-tight">
 ДСУ РЦСОО „Коле Нехтенин" - Штип
 </h2>
 <p class="text-base text-onSurface/70 leading-relaxed max-w-md">
 Регионален центар за стручно образование и обука. Создаваме кадри кои го движат општеството напред преку практична настава и дуално образование.
 </p>
 <div class="flex gap-4 pt-2">
 <a href="/programs" class="inline-flex items-center px-6 py-2.5 bg-primary text-onPrimary text-sm font-medium rounded-sm hover:opacity-90 transition-opacity">
 Погледни струки
 </a>
 <a href="/about" class="inline-flex items-center px-6 py-2.5 border border-surfaceContainer text-onSurface text-sm font-medium rounded-sm hover:bg-surfaceContainer transition-colors">
 За нас
 </a>
 </div>
 </div>
 
 <div class="w-full">
 <img src="/assets/images/school_photo1.jpg" alt="Училишна зграда" class="w-full h-72 md:h-80 object-cover rounded-sm">
 </div>
 </div>
 </div>
 </section>

 <!-- Stats -->
 <section class="border-b border-surfaceContainer bg-surfaceContainer/40">
 <div class="max-w-5xl mx-auto px-6 py-8">
 <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
 <div>
 <p class="text-2xl font-semibold text-onSurface">60+</p>
 <p class="text-sm text-onSurface/50 mt-1">Години традиција</p>
 </div>
 <div>
 <p class="text-2xl font-semibold text-onSurface">800</p>
 <p class="text-sm text-onSurface/50 mt-1">Ученици во 28 паралелки</p>
 </div>
 <div>
 <p class="text-2xl font-semibold text-onSurface">10</p>
 <p class="text-sm text-onSurface/50 mt-1">Стручни профили</p>
 </div>
 </div>
 </div>
 </section>

 <!-- Programs -->
 <section class="py-16 px-6 max-w-5xl mx-auto">
 <div class="flex items-end justify-between mb-10">
 <div>
 <h2 class="text-xl font-semibold text-onSurface">Струки</h2>
 <p class="text-sm text-onSurface/50 mt-1">Модерен пристап и практична настава.</p>
 </div>
 <a href="/programs" class="hidden md:flex items-center gap-1 text-sm text-primary hover:underline">
 Види ги сите &rarr;
 </a>
 </div>
 
 <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
 <a href="/programs" class="group flex flex-col bg-surface border border-surfaceContainer p-6 hover:border-primary/40 transition-colors">
 <h3 class="text-base font-semibold text-onSurface mb-2">Електротехничка</h3>
 <p class="text-sm text-onSurface/60 flex-grow mb-4 leading-relaxed">
 Електротехничар за компјутерска техника, енергетичар и телекомуникации.
 </p>
 <span class="text-xs text-primary">3 Профили</span>
 </a>

 <a href="/programs" class="group flex flex-col bg-surface border border-surfaceContainer p-6 hover:border-primary/40 transition-colors">
 <h3 class="text-base font-semibold text-onSurface mb-2">Машинска</h3>
 <p class="text-sm text-onSurface/60 flex-grow mb-4 leading-relaxed">
 Техничар за компјутерско управување (CNC), мехатроника, заварување и машинство.
 </p>
 <span class="text-xs text-primary">6 Профили</span>
 </a>

 <a href="/programs" class="group flex flex-col bg-surface border border-surfaceContainer p-6 hover:border-primary/40 transition-colors">
 <h3 class="text-base font-semibold text-onSurface mb-2">Угостителска</h3>
 <p class="text-sm text-onSurface/60 flex-grow mb-4 leading-relaxed">
 Врвно угостителство преку практика во реномирани објекти за Келнер-готвач.
 </p>
 <span class="text-xs text-primary">1 Профил</span>
 </a>
 </div>
 <a href="/programs" class="md:hidden mt-6 flex items-center justify-center gap-1 text-sm text-primary">
 Види ги сите &rarr;
 </a>
 </section>

 <!-- Recent News -->
 <?php 
 require_once __DIR__ . "/../api/db.php";
 $stmt = $pdo->query("
 SELECT id, slug, title, excerpt, date, image_main
 FROM news
 ORDER BY date DESC, id DESC
 LIMIT 3
 ");
 $recentNews = $stmt->fetchAll();
 ?>
 
 <?php if(!empty($recentNews)): ?>
 <section class="border-t border-surfaceContainer py-16 px-6 max-w-5xl mx-auto">
 <div class="flex items-end justify-between mb-8">
 <div>
 <h2 class="text-xl font-semibold text-onSurface">Новости</h2>
 <p class="text-sm text-onSurface/50 mt-1">Од училиштето и активностите.</p>
 </div>
 <a href="/news" class="hidden md:flex items-center gap-1 text-sm text-primary hover:underline">
 Сите новости &rarr;
 </a>
 </div>
 
 <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
 <?php $__currentLoopData = $recentNews; $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $news): $loop = $this->incrementLoopIndices();  ?>
 <a href="/news?article=<?php echo \htmlentities($news['slug'], ENT_QUOTES, 'UTF-8', false); ?>" class="group flex flex-col bg-surface border border-surfaceContainer overflow-hidden hover:border-primary/40 transition-colors">
 <?php if($news['image_main']): ?>
 <div class="w-full h-40 overflow-hidden">
 <img src="<?php echo \htmlentities($news['image_main'], ENT_QUOTES, 'UTF-8', false); ?>" alt="<?php echo \htmlentities($news['title'], ENT_QUOTES, 'UTF-8', false); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
 </div>
 <?php endif; ?>
 <div class="flex flex-col flex-grow p-5">
 <p class="text-xs text-onSurface/50 mb-2"><?php echo \htmlentities(date('d.m.Y', strtotime($news['date'])), ENT_QUOTES, 'UTF-8', false); ?></p>
 <h3 class="text-base font-semibold text-onSurface mb-2 group-hover:text-primary transition-colors line-clamp-2"><?php echo \htmlentities($news['title'], ENT_QUOTES, 'UTF-8', false); ?></h3>
 <?php if($news['excerpt']): ?>
 <p class="text-sm text-onSurface/60 flex-grow line-clamp-3"><?php echo \htmlentities($news['excerpt'], ENT_QUOTES, 'UTF-8', false); ?></p>
 <?php endif; ?>
 </div>
 </a>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </div>
 <a href="/news" class="md:hidden mt-6 flex items-center justify-center gap-1 text-sm text-primary">
 Сите новости &rarr;
 </a>
 </section>
 <?php endif; ?>

 <!-- School Gallery -->
 <section class="border-t border-surfaceContainer py-16 px-6 max-w-5xl mx-auto">
 <h2 class="text-xl font-semibold text-onSurface mb-8">Галерија</h2>
 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
 <img src="/assets/images/school_photo1.jpg" alt="Училиште" class="w-full h-60 object-cover rounded-sm">
 <img src="/assets/images/school_photo2.jpg" alt="Училиште" class="w-full h-60 object-cover rounded-sm">
 <img src="/assets/images/classroom1.jpg" alt="Училница" class="w-full h-60 object-cover rounded-sm">
 <img src="/assets/images/day_of_school1.jpg" alt="Денот во училиште" class="w-full h-60 object-cover rounded-sm">
 </div>
 <a href="/gallery" class="mt-6 inline-flex items-center px-6 py-2.5 bg-primary text-onPrimary text-sm font-medium rounded-sm hover:opacity-90 transition-opacity block max-w-xs">
 Погледнете ги сите снимки &rarr;
 </a>
 </section>

</main>

<?php echo $this->runChild('partials.footer'); ?>
