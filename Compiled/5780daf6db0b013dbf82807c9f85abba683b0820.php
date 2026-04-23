<?php defined("INDLUCE_CHECK") || die("404"); ?><?php echo $this->runChild('partials.header'); ?>

<main class="w-full flex-grow">
 <!-- Header -->
 <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
 <div class="max-w-5xl mx-auto px-6 py-14">
 <h1 class="text-3xl font-semibold text-onSurface"><?php echo \htmlentities(tr('about.title'), ENT_QUOTES, 'UTF-8', false); ?></h1>
 <p class="text-base text-onSurface/60 mt-2"><?php echo \htmlentities(tr('about.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 </section>

 <!-- Content -->
 <section class="py-16 px-6 max-w-5xl mx-auto space-y-12">
 
 <!-- Director Quote -->
 <div class="border border-surfaceContainer bg-surface p-6">
 <blockquote class="text-lg text-onSurface/80 italic leading-relaxed">
 <?php echo \htmlentities(tr('about.director_quote'), ENT_QUOTES, 'UTF-8', false); ?>

 </blockquote>
 <p class="text-sm text-onSurface/60 mt-4">— <?php echo \htmlentities(tr('about.director_name'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>

 <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface"><?php echo \htmlentities(tr('about.mission_title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <div class="text-onSurface/70 leading-relaxed space-y-4">
 <p><?php echo \htmlentities(tr('about.mission_text'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 </div>
 
 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface"><?php echo \htmlentities(tr('about.vision_title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <div class="text-onSurface/70 leading-relaxed space-y-4">
 <p><?php echo \htmlentities(tr('about.vision_text'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 </div>
 </div>

 <!-- Images -->
 <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
 <img src="/assets/images/school_photo1.jpg" alt="<?php echo \htmlentities(tr('school.name'), ENT_QUOTES, 'UTF-8', false); ?>" class="w-full h-56 object-cover rounded-sm cursor-pointer" data-lightbox>
 <img src="/assets/images/main_hall1.jpg" alt="<?php echo \htmlentities(tr('school.name'), ENT_QUOTES, 'UTF-8', false); ?>" class="w-full h-56 object-cover rounded-sm cursor-pointer" data-lightbox>
 </div>

 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface"><?php echo \htmlentities(tr('about.history_title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <div class="text-onSurface/70 leading-relaxed space-y-4">
 <p><?php echo \htmlentities(tr('about.history_text'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 </div>

 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface"><?php echo \htmlentities(tr('about.infrastructure_title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <div class="text-onSurface/70 leading-relaxed space-y-4">
 <p><?php echo \htmlentities(tr('about.infrastructure_text'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 </div>

 <!-- Stats -->
 <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
 <div class="border border-surfaceContainer bg-surface p-5 text-center">
 <p class="text-2xl font-semibold text-primary">60+</p>
 <p class="text-sm text-onSurface/60 mt-1"><?php echo \htmlentities(tr('about.stats.years_tradition'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 <div class="border border-surfaceContainer bg-surface p-5 text-center">
 <p class="text-2xl font-semibold text-primary">800+</p>
 <p class="text-sm text-onSurface/60 mt-1"><?php echo \htmlentities(tr('about.stats.students'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 <div class="border border-surfaceContainer bg-surface p-5 text-center">
 <p class="text-2xl font-semibold text-primary">28</p>
 <p class="text-sm text-onSurface/60 mt-1"><?php echo \htmlentities(tr('about.stats.classes'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 <div class="border border-surfaceContainer bg-surface p-5 text-center">
 <p class="text-2xl font-semibold text-primary">10+</p>
 <p class="text-sm text-onSurface/60 mt-1"><?php echo \htmlentities(tr('about.stats.profiles'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 </div>

 <!-- Socials -->
 <div class="border border-surfaceContainer bg-surface p-6">
 <h3 class="text-base font-semibold text-onSurface mb-4"><?php echo \htmlentities(tr('about.follow_us'), ENT_QUOTES, 'UTF-8', false); ?></h3>
 <div class="flex gap-4">
 <a href="https://www.facebook.com/skolenehtenin" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 px-4 py-2 bg-surfaceContainer hover:bg-primary/10 transition-colors rounded-sm">
 <i class="ti ti-brand-facebook"></i>
 Facebook
 </a>
 <a href="https://www.instagram.com/dsu_rcsoo_kole.nehtenin" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 px-4 py-2 bg-surfaceContainer hover:bg-primary/10 transition-colors rounded-sm">
 <i class="ti ti-brand-instagram"></i>
 Instagram
 </a>
 </div>
 </div>
 
 </section>
</main>

<?php echo $this->runChild('partials.footer'); ?>