<?php defined("INDLUCE_CHECK") || die("404"); ?><?php echo $this->runChild('partials.header'); ?>

<?php 
$images = [
 "/assets/images/school_photo1.jpg",
 "/assets/images/school_photo2.jpg",
 "/assets/images/classroom1.jpg",
 "/assets/images/classroom2.jpg",
 "/assets/images/classroom_with_pcs.jpg",
 "/assets/images/day_of_school1.jpg",
 "/assets/images/day_of_school2.jpg",
 "/assets/images/main_hall1.jpg",
 "/assets/images/main_hall_from_above.jpg",
 "/assets/images/floor2hall.jpg",
];
 ?>

<main class="w-full flex-grow">
 <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
 <div class="max-w-5xl mx-auto px-6 py-14">
 <h1 class="text-3xl font-semibold text-onSurface"><?php echo \htmlentities(tr('gallery.title'), ENT_QUOTES, 'UTF-8', false); ?></h1>
 <p class="text-base text-onSurface/60 mt-2"><?php echo \htmlentities(tr('gallery.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 </section>

 <section class="py-12 px-6 max-w-5xl mx-auto">
 <?php if(!empty($images)): ?>
 <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
 <?php $__currentLoopData = $images; $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $img): $loop = $this->incrementLoopIndices();  ?>
 <div class="border border-surfaceContainer bg-surface overflow-hidden rounded-sm">
 <img src="<?php echo \htmlentities($img, ENT_QUOTES, 'UTF-8', false); ?>" alt="<?php echo \htmlentities(basename($img), ENT_QUOTES, 'UTF-8', false); ?>" class="w-full h-48 object-cover cursor-pointer" data-lightbox loading="lazy" />
 </div>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </div>
 <?php else: ?>
 <p class="text-onSurface/60 text-center py-12"><?php echo \htmlentities(tr('gallery.no_images'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <?php endif; ?>
 </section>
 
</main>

<?php echo $this->runChild('partials.footer'); ?>