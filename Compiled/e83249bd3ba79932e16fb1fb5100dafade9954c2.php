<?php defined("INDLUCE_CHECK") || die("404"); ?><?php echo $this->runChild('partials.header'); ?>
<main class="w-full flex-grow">
 <!-- Hero -->
 <section class="border-b border-surfaceContainer">
 <div class="max-w-5xl mx-auto px-6 py-16 md:py-20">
 <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
 <div class="space-y-6">
 <h2 class="text-3xl md:text-4xl font-semibold text-onSurface leading-tight">
 <?php echo \htmlentities(tr('school.name'), ENT_QUOTES, 'UTF-8', false); ?> - <?php echo \htmlentities(tr('school.city'), ENT_QUOTES, 'UTF-8', false); ?>

 </h2>
 <p class="text-base text-onSurface/70 leading-relaxed max-w-md"><?php echo \htmlentities(tr('school.description'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <div class="flex gap-4 pt-2">
 <a href="/programs" class="inline-flex items-center px-6 py-2.5 bg-primary text-onPrimary text-sm font-medium rounded-sm hover:opacity-90 transition-opacity">
 <?php echo \htmlentities(tr('home.view_programs'), ENT_QUOTES, 'UTF-8', false); ?>

 </a>
 <a href="/about" class="inline-flex items-center px-6 py-2.5 border border-surfaceContainer text-onSurface text-sm font-medium rounded-sm hover:bg-surfaceContainer transition-colors">
 <?php echo \htmlentities(tr('home.about_us'), ENT_QUOTES, 'UTF-8', false); ?>

 </a>
 </div>
 </div>
 
 <div class="w-full">
 <img src="/assets/images/school_photo1.jpg" alt="<?php echo \htmlentities(tr('school.name'), ENT_QUOTES, 'UTF-8', false); ?>" class="w-full h-72 md:h-80 object-cover rounded-sm">
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
 <p class="text-sm text-onSurface/50 mt-1"><?php echo \htmlentities(tr('home.stats.years_tradition'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 <div>
 <p class="text-2xl font-semibold text-onSurface">800</p>
 <p class="text-sm text-onSurface/50 mt-1"><?php echo \htmlentities(tr('home.stats.students_classes', ['n' => '28']), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 <div>
 <p class="text-2xl font-semibold text-onSurface">10</p>
 <p class="text-sm text-onSurface/50 mt-1"><?php echo \htmlentities(tr('home.stats.profiles'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 </div>
 </div>
 </section>

 <!-- Programs -->
 <section class="py-16 px-6 max-w-5xl mx-auto">
 <div class="flex items-end justify-between mb-10">
 <div>
 <h2 class="text-xl font-semibold text-onSurface"><?php echo \htmlentities(tr('home.programs.title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <p class="text-sm text-onSurface/50 mt-1"><?php echo \htmlentities(tr('home.programs.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 <a href="/programs" class="hidden md:flex items-center gap-1 text-sm text-primary hover:underline">
 <?php echo \htmlentities(tr('home.programs.view_all'), ENT_QUOTES, 'UTF-8', false); ?> &rarr;
 </a>
 </div>
 
 <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
 <a href="/programs" class="group flex flex-col bg-surface border border-surfaceContainer p-6 hover:border-primary/40 transition-colors">
 <h3 class="text-base font-semibold text-onSurface mb-2"><?php echo \htmlentities(tr('home.programs.electro.title'), ENT_QUOTES, 'UTF-8', false); ?></h3>
 <p class="text-sm text-onSurface/60 flex-grow mb-4 leading-relaxed"><?php echo \htmlentities(tr('home.programs.electro.description'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <span class="text-xs text-primary"><?php echo \htmlentities(tr('home.programs.electro.profiles', ['n' => '3']), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>

 <a href="/programs" class="group flex flex-col bg-surface border border-surfaceContainer p-6 hover:border-primary/40 transition-colors">
 <h3 class="text-base font-semibold text-onSurface mb-2"><?php echo \htmlentities(tr('home.programs.machine.title'), ENT_QUOTES, 'UTF-8', false); ?></h3>
 <p class="text-sm text-onSurface/60 flex-grow mb-4 leading-relaxed"><?php echo \htmlentities(tr('home.programs.machine.description'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <span class="text-xs text-primary"><?php echo \htmlentities(tr('home.programs.machine.profiles', ['n' => '6']), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>

 <a href="/programs" class="group flex flex-col bg-surface border border-surfaceContainer p-6 hover:border-primary/40 transition-colors">
 <h3 class="text-base font-semibold text-onSurface mb-2"><?php echo \htmlentities(tr('home.programs.hospitality.title'), ENT_QUOTES, 'UTF-8', false); ?></h3>
 <p class="text-sm text-onSurface/60 flex-grow mb-4 leading-relaxed"><?php echo \htmlentities(tr('home.programs.hospitality.description'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <span class="text-xs text-primary"><?php echo \htmlentities(tr('home.programs.hospitality.profiles', ['n' => '1']), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 </div>
 <a href="/programs" class="md:hidden mt-6 flex items-center justify-center gap-1 text-sm text-primary">
 <?php echo \htmlentities(tr('home.programs.view_all'), ENT_QUOTES, 'UTF-8', false); ?> &rarr;
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
 <h2 class="text-xl font-semibold text-onSurface"><?php echo \htmlentities(tr('home.news.title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <p class="text-sm text-onSurface/50 mt-1"><?php echo \htmlentities(tr('home.news.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 <a href="/news" class="hidden md:flex items-center gap-1 text-sm text-primary hover:underline">
 <?php echo \htmlentities(tr('home.news.view_all'), ENT_QUOTES, 'UTF-8', false); ?> &rarr;
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
 <?php echo \htmlentities(tr('home.news.view_all'), ENT_QUOTES, 'UTF-8', false); ?> &rarr;
 </a>
 </section>
 <?php endif; ?>

 <!-- Partner Companies -->
 <section class="border-t border-surfaceContainer py-16 px-6 max-w-5xl mx-auto">
 <h2 class="text-xl font-semibold text-onSurface"><?php echo \htmlentities(tr('home.partners.title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <p class="text-sm text-onSurface/50 mt-1 mb-8"><?php echo \htmlentities(tr('home.partners.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <div class="flex gap-8 overflow-x-auto pb-4">
 <div class="flex flex-col items-center gap-2 flex-shrink-0">
 <img src="/assets/images/companies/tm_doo.png" alt="ТМ ДОО" class="h-16 w-auto object-contain">
 <span class="text-xs text-onSurface/60">ТМ ДОО</span>
 </div>
 <div class="flex flex-col items-center gap-2 flex-shrink-0">
 <img src="/assets/images/companies/aktiva_doo.jpg" alt="АКТИВА ДОО" class="h-16 w-auto object-contain">
 <span class="text-xs text-onSurface/60">АКТИВА ДОО</span>
 </div>
 <div class="flex flex-col items-center gap-2 flex-shrink-0">
 <img src="/assets/images/companies/jp_hidrosistem_zletovica.png" alt="ЈП Хидросистем Злетовица" class="h-16 w-auto object-contain">
 <span class="text-xs text-onSurface/60">ЈП Хидросистем Злетовица</span>
 </div>
 <div class="flex flex-col items-center gap-2 flex-shrink-0">
 <img src="/assets/images/companies/jole_dooel.png" alt="ЈОЛЕ ДООЕЛ" class="h-16 w-auto object-contain">
 <span class="text-xs text-onSurface/60">ЈОЛЕ ДООЕЛ</span>
 </div>
 <div class="flex flex-col items-center gap-2 flex-shrink-0">
 <img src="/assets/images/companies/drvodekor_enterier.jpg" alt="Дрводекор Ентериер" class="h-16 w-auto object-contain">
 <span class="text-xs text-onSurface/60">Дрводекор Ентериер</span>
 </div>
 <div class="flex flex-col items-center gap-2 flex-shrink-0">
 <img src="/assets/images/companies/elektrodistribucija.jpg" alt="Електродистрибуција" class="h-16 w-auto object-contain">
 <span class="text-xs text-onSurface/60">Електродистрибуција</span>
 </div>
 <div class="flex flex-col items-center gap-2 flex-shrink-0">
 <img src="/assets/images/companies/zdvil_lion.png" alt="ЗДВИЛ ЛИОН" class="h-16 w-auto object-contain">
 <span class="text-xs text-onSurface/60">ЗДВИЛ ЛИОН</span>
 </div>
 </div>
 </section>

 <!-- School Gallery -->
 <section class="border-t border-surfaceContainer py-16 px-6 max-w-5xl mx-auto">
 <div class="flex items-end justify-between mb-8">
 <div>
 <h2 class="text-xl font-semibold text-onSurface"><?php echo \htmlentities(tr('gallery.title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <p class="text-sm text-onSurface/50 mt-1"><?php echo \htmlentities(tr('gallery.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 <a href="/gallery" class="hidden md:flex items-center gap-1 text-sm text-primary hover:underline">
 <?php echo \htmlentities(tr('home.gallery.view_all'), ENT_QUOTES, 'UTF-8', false); ?> &rarr;
 </a>
 </div>
 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
 <img src="/assets/images/school_photo1.jpg" alt="<?php echo \htmlentities(tr('school.name'), ENT_QUOTES, 'UTF-8', false); ?>" class="w-full h-60 object-cover rounded-sm cursor-pointer" data-lightbox>
 <img src="/assets/images/school_photo2.jpg" alt="<?php echo \htmlentities(tr('school.name'), ENT_QUOTES, 'UTF-8', false); ?>" class="w-full h-60 object-cover rounded-sm cursor-pointer" data-lightbox>
 <img src="/assets/images/classroom1.jpg" alt="<?php echo \htmlentities(tr('school.name'), ENT_QUOTES, 'UTF-8', false); ?>" class="w-full h-60 object-cover rounded-sm cursor-pointer" data-lightbox>
 <img src="/assets/images/day_of_school1.jpg" alt="<?php echo \htmlentities(tr('school.name'), ENT_QUOTES, 'UTF-8', false); ?>" class="w-full h-60 object-cover rounded-sm cursor-pointer" data-lightbox>
 </div>
 <a href="/gallery" class="md:hidden mt-6 flex items-center justify-center gap-1 text-sm text-primary">
 <?php echo \htmlentities(tr('home.gallery.view_all'), ENT_QUOTES, 'UTF-8', false); ?> &rarr;
 </a>
 </section>

</main>

<?php echo $this->runChild('partials.footer'); ?>