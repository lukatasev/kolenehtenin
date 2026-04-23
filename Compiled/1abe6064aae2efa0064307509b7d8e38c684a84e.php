<?php defined("INDLUCE_CHECK") || die("404"); ?><?php echo $this->runChild('partials.header'); ?>

<main class="w-full flex-grow">
 <!-- Header -->
 <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
 <div class="max-w-5xl mx-auto px-6 py-14">
 <h1 class="text-3xl font-semibold text-onSurface"><?php echo \htmlentities(tr('programs.title'), ENT_QUOTES, 'UTF-8', false); ?></h1>
 </div>
 </section>

 <!-- Konkurs Banner -->
 <section class="border-b border-surfaceContainer bg-primary/5">
 <div class="max-w-5xl mx-auto px-6 py-6">
 <div class="flex items-start gap-3">
 <i class="ti ti-info-circle text-primary text-[24px] mt-0.5"></i>
 <div>
 <p class="text-sm font-medium text-onSurface"><?php echo \htmlentities(tr('programs.konkurs_title'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <a href="https://mon.gov.mk/mk-MK/odnosi-so-javnost/soopstenija/objaven-e-konkursot-za-upis-vo-sredni-ucilista-vo-ucebnata-2026-2027-godina" target="_blank" rel="noopener noreferrer" class="text-sm text-primary hover:underline mt-1 inline-block"><?php echo \htmlentities(tr('programs.konkurs_link'), ENT_QUOTES, 'UTF-8', false); ?> &rarr;</a>
 </div>
 </div>
 </div>
 </section>

 <!-- Content -->
 <section class="py-16 px-6 max-w-5xl mx-auto space-y-14">
 
 <!-- Електротехничка -->
 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3"><?php echo \htmlentities(tr('programs.electro.title'), ENT_QUOTES, 'UTF-8', false); ?> &mdash; <?php echo \htmlentities(tr('programs.electro.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 
 <details class="border border-surfaceContainer group">
 <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
 <span class="text-base font-medium flex items-center gap-2">
 <i class="ti ti-player-play text-onSurface/60"></i>
 <?php echo \htmlentities(tr('programs.watch_video'), ENT_QUOTES, 'UTF-8', false); ?>

 </span>
 <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
 </summary>
 <div class="px-5 pb-5 border-t border-surfaceContainer">
 <div class="aspect-video max-w-2xl mx-auto w-full mt-5">
 <video controls class="w-full h-full object-contain rounded-sm bg-black">
 <source src="/assets/videos/elektro.mp4" type="video/mp4">
 </video>
 </div>
 </div>
 </details>

 <details class="border border-surfaceContainer group">
 <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
 <div class="flex flex-col gap-3 flex-grow">
 <span class="text-base font-medium"><?php echo \htmlentities(tr('programs.electro.profiles.computer_tech.name'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <div class="flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.years', ['n' => '4']), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.min_points', ['points' => '60']), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
 </summary>
 <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
 <p class="mb-2 font-medium text-onSurface"><?php echo \htmlentities(tr('programs.trained_for'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <ul class="list-disc pl-5 space-y-1 leading-relaxed">
 <?php  $items = explode(';', tr('programs.electro.profiles.computer_tech.description'));  ?>
 <?php $__currentLoopData = $items; $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $item): $loop = $this->incrementLoopIndices();  ?>
 <?php if(trim($item)): ?>
 <li><?php echo \htmlentities(trim($item), ENT_QUOTES, 'UTF-8', false); ?></li>
 <?php endif; ?>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </ul>
 <div class="mt-4 flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.electro.profiles.computer_tech.student_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.students'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.electro.profiles.computer_tech.class_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.classes'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 </details>

 <details class="border border-surfaceContainer group">
 <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
 <div class="flex flex-col gap-3 flex-grow">
 <span class="text-base font-medium"><?php echo \htmlentities(tr('programs.electro.profiles.energetics.name'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <div class="flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.years', ['n' => '4']), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.min_points', ['points' => '45']), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.dual_class'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
 </summary>
 <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
 <p class="mb-2 font-medium text-onSurface"><?php echo \htmlentities(tr('programs.trained_for'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <ul class="list-disc pl-5 space-y-1 leading-relaxed">
 <?php $__currentLoopData = explode(';', tr('programs.electro.profiles.energetics.description')); $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $item): $loop = $this->incrementLoopIndices();  ?>
 <?php if(trim($item)): ?>
 <li><?php echo \htmlentities(trim($item), ENT_QUOTES, 'UTF-8', false); ?></li>
 <?php endif; ?>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </ul>
 <p class="mt-3 font-medium text-onSurface"><?php echo \htmlentities(tr('programs.partner_companies'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <div class="mt-2 flex gap-4 items-center">
 <img src="/assets/images/companies/tm_doo.png" alt="ТМ ДОО" class="h-8 w-auto object-contain">
 <img src="/assets/images/companies/jp_hidrosistem_zletovica.png" alt="ЈП Хидросистем Злетовица" class="h-8 w-auto object-contain">
 <img src="/assets/images/companies/jole_dooel.png" alt="ЈОЛЕ ДООЕЛ" class="h-8 w-auto object-contain">
 <img src="/assets/images/companies/drvodekor_enterier.jpg" alt="Дрводекор Ентериер" class="h-8 w-auto object-contain">
 <img src="/assets/images/companies/elektrodistribucija.jpg" alt="Електродистрибуција" class="h-8 w-auto object-contain">
 <img src="/assets/images/companies/zdvil_lion.png" alt="ЗДВИЛ ЛИОН" class="h-8 w-auto object-contain">
 </div>
 <div class="mt-4 flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.electro.profiles.energetics.student_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.students'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.electro.profiles.energetics.class_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.classes'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 </details>

 <details class="border border-surfaceContainer group">
 <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
 <div class="flex flex-col gap-3 flex-grow">
 <span class="text-base font-medium"><?php echo \htmlentities(tr('programs.electro.profiles.electronics.name'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <div class="flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.years', ['n' => '4']), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.min_points', ['points' => '50']), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
 </summary>
 <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
 <p class="mb-2 font-medium text-onSurface"><?php echo \htmlentities(tr('programs.trained_for'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <ul class="list-disc pl-5 space-y-1 leading-relaxed">
 <?php $__currentLoopData = explode(';', tr('programs.electro.profiles.electronics.description')); $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $item): $loop = $this->incrementLoopIndices();  ?>
 <?php if(trim($item)): ?>
 <li><?php echo \htmlentities(trim($item), ENT_QUOTES, 'UTF-8', false); ?></li>
 <?php endif; ?>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </ul>
 <div class="mt-4 flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.electro.profiles.electronics.student_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.students'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.electro.profiles.electronics.class_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.classes'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 </details>
 </div>

 <!-- Машинска -->
 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3"><?php echo \htmlentities(tr('programs.machine.title'), ENT_QUOTES, 'UTF-8', false); ?> &mdash; <?php echo \htmlentities(tr('programs.machine.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 
 <details class="border border-surfaceContainer group">
 <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
 <span class="text-base font-medium flex items-center gap-2">
 <i class="ti ti-player-play text-onSurface/60"></i>
 <?php echo \htmlentities(tr('programs.watch_video'), ENT_QUOTES, 'UTF-8', false); ?>

 </span>
 <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
 </summary>
 <div class="px-5 pb-5 border-t border-surfaceContainer">
 <div class="aspect-video max-w-2xl mx-auto w-full mt-5">
 <video controls class="w-full h-full object-contain rounded-sm bg-black">
 <source src="/assets/videos/mashinska.mp4" type="video/mp4">
 </video>
 </div>
 </div>
 </details>

 <details class="border border-surfaceContainer group">
 <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
 <div class="flex flex-col gap-3 flex-grow">
 <span class="text-base font-medium"><?php echo \htmlentities(tr('programs.machine.profiles.cnc.name'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <div class="flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.years', ['n' => '4']), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.min_points', ['points' => '45']), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.dual_class'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
 </summary>
 <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
 <p class="mb-2 font-medium text-onSurface"><?php echo \htmlentities(tr('programs.trained_for'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <ul class="list-disc pl-5 space-y-1 leading-relaxed">
 <?php $__currentLoopData = explode(';', tr('programs.machine.profiles.cnc.description')); $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $item): $loop = $this->incrementLoopIndices();  ?>
 <?php if(trim($item)): ?>
 <li><?php echo \htmlentities(trim($item), ENT_QUOTES, 'UTF-8', false); ?></li>
 <?php endif; ?>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </ul>
 <p class="mt-3 font-medium text-onSurface"><?php echo \htmlentities(tr('programs.partner_companies'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <div class="mt-2 flex gap-4 items-center">
 <img src="/assets/images/companies/tm_doo.png" alt="ТМ ДОО" class="h-8 w-auto object-contain">
 <img src="/assets/images/companies/aktiva_doo.jpg" alt="АКТИВА ДОО" class="h-8 w-auto object-contain">
 </div>
 <div class="mt-4 flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.machine.profiles.cnc.student_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.students'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.machine.profiles.cnc.class_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.classes'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 </details>

 <details class="border border-surfaceContainer group">
 <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
 <div class="flex flex-col gap-3 flex-grow">
 <span class="text-base font-medium"><?php echo \htmlentities(tr('programs.machine.profiles.vehicles.name'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <div class="flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.years', ['n' => '4']), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.min_points', ['points' => '45']), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
 </summary>
 <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
 <p class="mb-2 font-medium text-onSurface"><?php echo \htmlentities(tr('programs.trained_for'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <ul class="list-disc pl-5 space-y-1 leading-relaxed">
 <?php $__currentLoopData = explode(';', tr('programs.machine.profiles.vehicles.description')); $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $item): $loop = $this->incrementLoopIndices();  ?>
 <?php if(trim($item)): ?>
 <li><?php echo \htmlentities(trim($item), ENT_QUOTES, 'UTF-8', false); ?></li>
 <?php endif; ?>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </ul>
 <div class="mt-4 flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.machine.profiles.vehicles.student_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.students'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.machine.profiles.vehicles.class_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.classes'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 </details>

 <details class="border border-surfaceContainer group">
 <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
 <div class="flex flex-col gap-3 flex-grow">
 <span class="text-base font-medium"><?php echo \htmlentities(tr('programs.machine.profiles.mechanic.name'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <div class="flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.years', ['n' => '3']), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.min_points', ['points' => '30']), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
 </summary>
 <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
 <p class="mb-2 font-medium text-onSurface"><?php echo \htmlentities(tr('programs.trained_for'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <ul class="list-disc pl-5 space-y-1 leading-relaxed">
 <?php $__currentLoopData = explode(';', tr('programs.machine.profiles.mechanic.description')); $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $item): $loop = $this->incrementLoopIndices();  ?>
 <?php if(trim($item)): ?>
 <li><?php echo \htmlentities(trim($item), ENT_QUOTES, 'UTF-8', false); ?></li>
 <?php endif; ?>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </ul>
 <div class="mt-4 flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.machine.profiles.mechanic.student_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.students'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.machine.profiles.mechanic.class_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.classes'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 </details>
 </div>

 <!-- Угостителско-туристичка -->
 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3"><?php echo \htmlentities(tr('programs.hospitality.title'), ENT_QUOTES, 'UTF-8', false); ?> &mdash; <?php echo \htmlentities(tr('programs.hospitality.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 
 <details class="border border-surfaceContainer group">
 <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
 <span class="text-base font-medium flex items-center gap-2">
 <i class="ti ti-player-play text-onSurface/60"></i>
 <?php echo \htmlentities(tr('programs.watch_video'), ENT_QUOTES, 'UTF-8', false); ?>

 </span>
 <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
 </summary>
 <div class="px-5 pb-5 border-t border-surfaceContainer">
 <div class="aspect-[9/16] max-w-sm mx-auto w-full mt-5">
 <video controls class="w-full h-full object-contain rounded-sm bg-black">
 <source src="/assets/videos/ugostitelstvo.mp4" type="video/mp4">
 </video>
 </div>
 </div>
 </details>

 <details class="border border-surfaceContainer group">
 <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
 <div class="flex flex-col gap-3 flex-grow">
 <span class="text-base font-medium"><?php echo \htmlentities(tr('programs.hospitality.profiles.waiter_cook.name'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <div class="flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.years', ['n' => '3']), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.min_points', ['points' => '30']), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
 </summary>
 <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
 <p class="leading-relaxed"><?php echo \htmlentities(tr('programs.hospitality.profiles.waiter_cook.description'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <div class="mt-4 flex flex-wrap gap-2">
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.hospitality.profiles.waiter_cook.student_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.students'), ENT_QUOTES, 'UTF-8', false); ?></span>
 <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm"><?php echo \htmlentities(tr('programs.hospitality.profiles.waiter_cook.class_count'), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('programs.classes'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </div>
 </details>
 </div>

 </section>
</main>

<?php echo $this->runChild('partials.footer'); ?>