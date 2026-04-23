<?php defined("INDLUCE_CHECK") || die("404"); ?><?php echo $this->runChild('partials.header'); ?>

<main class="w-full flex-grow">
 <!-- Header -->
 <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
 <div class="max-w-5xl mx-auto px-6 py-14">
 <h1 class="text-3xl font-semibold text-onSurface"><?php echo \htmlentities(tr('links.title'), ENT_QUOTES, 'UTF-8', false); ?></h1>
 <p class="text-base text-onSurface/60 mt-2"><?php echo \htmlentities(tr('links.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 </section>

 <!-- Content -->
 <section class="py-16 px-6 max-w-5xl mx-auto space-y-14">

 <!-- External Links -->
 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3"><?php echo \htmlentities(tr('links.useful_links'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
 <a href="https://bro.gov.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
 <div class="flex items-center gap-3">
 <i class="ti ti-building-community text-primary text-xl"></i>
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.external.bro'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </a>
 <a href="http://matura.gov.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
 <div class="flex items-center gap-3">
 <i class="ti ti-certificate text-primary text-xl"></i>
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.external.exam_center'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </a>
 <a href="https://ednevnik.edu.mk/Account/Login?ReturnUrl=%2f" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
 <div class="flex items-center gap-3">
 <i class="ti ti-book text-primary text-xl"></i>
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.external.e_dnevnik'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </a>
 <a href="https://www.e-matematika.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
 <div class="flex items-center gap-3">
 <i class="ti ti-calculator text-primary text-xl"></i>
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.external.e_math'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </a>
 <a href="https://e-ucebnici.mon.gov.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
 <div class="flex items-center gap-3">
 <i class="ti ti-book-2 text-primary text-xl"></i>
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.external.e_books'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </a>
 <a href="https://massum.org/mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
 <div class="flex items-center gap-3">
 <i class="ti ti-users text-primary text-xl"></i>
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.external.massum'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </a>
 <a href="https://mon.gov.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
 <div class="flex items-center gap-3">
 <i class="ti ti-building text-primary text-xl"></i>
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.external.mon'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </a>
 <a href="https://www.csoo.edu.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
 <div class="flex items-center gap-3">
 <i class="ti ti-school text-primary text-xl"></i>
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.external.csoo'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </a>
 </div>
 </div>

 <!-- Graduation Exams -->
 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3"><?php echo \htmlentities(tr('links.graduation_exams'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <p class="text-sm text-onSurface/60 -mt-2 mb-3"><?php echo \htmlentities(tr('links.graduation_exams_subtitle'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%90%D0%B2%D1%82%D0%BE%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0-%D0%B5%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B0%D1%80-%D0%B5%D0%BD%D0%B5%D1%80%D0%B3%D0%B5%D1%82%D0%B8%D1%87%D0%B0%D1%80.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.auto_energetics'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%90%D0%B2%D1%82%D0%BE%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0-%D0%B7%D0%B0-%D0%9A%D0%A2%D0%90.pdf" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.auto_hta'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%90%D0%B3%D0%B5%D0%BD%D1%86%D0%B8%D1%81%D0%BA%D0%BE-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B5%D1%9A%D0%B5.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.agency'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D1%81%D0%BA%D0%B8-%D1%98%D0%B0%D0%B7%D0%B8%D0%BA-%D0%B4%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.english'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2023/05/%D0%9F%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%B7%D0%B0-%D0%BF%D0%BE%D0%BB%D0%B0%D0%B3%D0%B0%D1%9A%D0%B5-%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0-%D0%BF%D0%BE-%D0%BF%D1%80%D0%B5%D0%B4%D0%BC%D0%B5%D1%82%D0%B8%D1%82%D0%B5-%D0%90%D1%83%D0%B4%D0%B8%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0-%D0%B8-%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0-%D1%98%D1%83%D0%BD%D0%B82023.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.audio_video'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%91%D0%B8%D0%B7%D0%BD%D0%B8%D1%81-%D0%B4%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.business'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%92%D0%BE%D0%B7%D0%B8%D0%BB%D0%B0-%D0%B8-%D0%BC%D0%B5%D1%85%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%98%D0%B0.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.vehicles'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%94%D0%B8%D0%B3%D0%B8%D1%82%D0%B0%D0%BB%D0%BD%D0%B0-%D0%B5%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%B8%D0%BA%D0%B0-%D0%B8-%D0%BC%D0%B8%D0%BA%D1%80%D0%BE%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D0%BE%D1%80%D0%B8.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.digital_electronics'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%94%D0%B8%D0%B3%D0%B8%D1%82%D0%B0%D0%BB%D0%BD%D0%B8-%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B8.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.digital_systems'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%95%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%B8%D1%87%D0%BD%D0%B8-%D0%B0%D0%BF%D0%B0%D1%80%D0%B0%D1%82%D0%B8-%D0%B8-%D1%83%D1%80%D0%B5%D0%B4%D0%B8.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.electrical_appliances'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%95%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0-%D0%BC%D0%B0%D1%88%D0%B8%D0%BD%D1%81%D0%BA%D0%B0-%D1%81%D1%82%D1%80%D1%83%D0%BA%D0%B0.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.electrical_machine'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%98%D0%B0-%D0%B4%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.history'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2023/05/%D0%91%D0%B0%D0%B7%D0%B5%D0%BD-%D0%BD%D0%B0-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%B7%D0%B0-%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D0%BD-%D0%BF%D1%80%D0%B5%D0%B4%D0%BC%D0%B5%D1%82-%D0%BF%D0%BE-%D0%BC%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0-%D0%B4%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0-%D0%96%D0%B0%D0%BA%D0%BB%D0%B8%D0%BD%D0%B0-1.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.math'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%B8%D1%80%D0%B0%D1%9A%D0%B5-%D0%B7%D0%B0-%D0%9A%D0%A2%D0%90.pdf" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.programming_hta'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%B8%D1%80%D0%B0%D1%9A%D0%B5-%D0%B7%D0%B0-%D0%BA%D0%BE%D0%BC%D0%BF%D1%98%D1%83%D1%82%D0%B5%D1%80%D1%81%D0%BA%D0%BE-%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D1%83%D0%B2%D0%B0%D0%BD%D0%B8-%D0%BC%D0%B0%D1%88%D0%B8%D0%BD%D0%B8.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.programming_cnc'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A2%D0%B5%D0%BB%D0%B5%D0%BA%D0%BE%D0%BC%D1%83%D0%BD%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%81%D0%BA%D0%B8-%D1%81%D0%BA%D0%BB%D0%BE%D0%BF%D0%BE%D0%B2%D0%B8-%D0%B8-%D1%83%D1%80%D0%B5%D0%B4%D0%B8.pdf" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.telecommunications'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A2%D0%B5%D1%80%D0%BC%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.thermo'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A2%D0%B5%D1%85%D0%BD%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%98%D0%B0-%D0%BD%D0%B0-%D0%BC%D0%BE%D1%82%D0%BE%D1%80%D0%BD%D0%B8-%D0%B2%D0%BE%D0%B7%D0%B8%D0%BB%D0%B0.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.vehicle_tech'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A4%D0%B8%D0%B7%D0%B8%D0%BA%D0%B0-%D0%B4%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.physics'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A5%D0%B8%D0%B4%D1%80%D0%BE%D0%BF%D0%BD%D0%B5%D0%B2%D0%BC%D0%B0%D1%82%D1%81%D0%BA%D0%B0-%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.hydro_pneumatic'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A5%D0%BE%D1%82%D0%B5%D0%BB%D1%81%D0%BA%D0%BE-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B5%D1%9A%D0%B5.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.hotel'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2023/04/Document-72.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.graduation.macedonian'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </a>
 </div>
 </div>

 <!-- Awards -->
 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3"><?php echo \htmlentities(tr('links.awards'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <p class="text-sm text-onSurface/60 -mt-2 mb-3"><?php echo \htmlentities(tr('links.awards_subtitle'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2017/03/%D0%9E%D1%81%D0%B2%D0%BE%D0%B5%D0%BD%D0%B8%D1%82%D0%B5-%D0%BD%D0%B0%D0%B3%D1%80%D0%B0%D0%B4%D0%B8-%D0%B8-%D0%BF%D1%80%D0%B8%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D1%98%D0%B0-2014-15.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group">
 <div class="flex items-center gap-3">
 <i class="ti ti-trophy text-primary text-lg"></i>
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.awards_years.2014_15'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </a>
 <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2017/03/%D0%9E%D1%81%D0%B2%D0%BE%D0%B5%D0%BD%D0%B8%D1%82%D0%B5-%D0%BD%D0%B0%D0%B3%D1%80%D0%B0%D0%B4%D0%B8-%D0%B8-%D0%BF%D1%80%D0%B8%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D1%98%D0%B0-2015-16.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group">
 <div class="flex items-center gap-3">
 <i class="ti ti-trophy text-primary text-lg"></i>
 <span class="text-onSurface group-hover:text-primary transition-colors"><?php echo \htmlentities(tr('links.awards_years.2015_16'), ENT_QUOTES, 'UTF-8', false); ?></span>
 </div>
 </a>
 </div>
 </div>

 </section>
</main>

<?php echo $this->runChild('partials.footer'); ?>