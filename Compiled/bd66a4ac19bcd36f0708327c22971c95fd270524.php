<?php defined("INDLUCE_CHECK") || die("404"); ?><footer class="bg-surface border-t border-surfaceContainer pt-12 pb-6 px-6 mt-auto">
 <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
 <div class="space-y-3">
 <div class="flex items-center gap-2 mb-2">
 <img src="/assets/images/logo.jpg" alt="Logo" class="h-7 w-auto rounded-sm object-contain">
 <h3 class="text-base font-semibold text-onSurface"><?php echo \htmlentities(tr('school.name'), ENT_QUOTES, 'UTF-8', false); ?></h3>
 </div>
 <p class="text-sm text-onSurface/60 max-w-xs leading-relaxed"><?php echo \htmlentities(tr('school.description'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 
 <div>
 <h4 class="text-xs font-semibold mb-3 text-onSurface uppercase tracking-wider"><?php echo \htmlentities(tr('footer.navigation'), ENT_QUOTES, 'UTF-8', false); ?></h4>
 <ul class="space-y-2 text-sm text-onSurface/60">
 <li><a href="/about" class="hover:text-onSurface transition-colors"><?php echo \htmlentities(tr('nav.about'), ENT_QUOTES, 'UTF-8', false); ?></a></li>
 <li><a href="/programs" class="hover:text-onSurface transition-colors"><?php echo \htmlentities(tr('nav.programs'), ENT_QUOTES, 'UTF-8', false); ?></a></li>
 <li><a href="/gallery" class="hover:text-onSurface transition-colors"><?php echo \htmlentities(tr('nav.gallery'), ENT_QUOTES, 'UTF-8', false); ?></a></li>
 <li><a href="/news" class="hover:text-onSurface transition-colors"><?php echo \htmlentities(tr('nav.news'), ENT_QUOTES, 'UTF-8', false); ?></a></li>
 <li><a href="/contact" class="hover:text-onSurface transition-colors"><?php echo \htmlentities(tr('nav.contact'), ENT_QUOTES, 'UTF-8', false); ?></a></li>
 </ul>
 </div>
 
 <div>
 <h4 class="text-xs font-semibold mb-3 text-onSurface uppercase tracking-wider"><?php echo \htmlentities(tr('contact.title'), ENT_QUOTES, 'UTF-8', false); ?></h4>
 <ul class="space-y-2 text-sm text-onSurface/60">
 <li>Бул. Гоце Делчев бр. 101, <?php echo \htmlentities(tr('school.city'), ENT_QUOTES, 'UTF-8', false); ?></li>
 <li>+389 32 391 384</li>
 <li>kontakt@kolenehtenin.edu.mk</li>
 </ul>
 
 </div>
 </div>
 
 <div class="max-w-5xl mx-auto pt-6 border-t border-surfaceContainer flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-onSurface/40">
 <p>&copy; <?php echo \htmlentities(date("Y"), ENT_QUOTES, 'UTF-8', false); ?> <?php echo \htmlentities(tr('school.name'), ENT_QUOTES, 'UTF-8', false); ?> - <?php echo \htmlentities(tr('school.city'), ENT_QUOTES, 'UTF-8', false); ?>. <?php echo \htmlentities(tr('footer.rights'), ENT_QUOTES, 'UTF-8', false); ?></p>
 <span><?php echo \htmlentities(tr('footer.created_by'), ENT_QUOTES, 'UTF-8', false); ?> <a href="https://tasev.me" target="_blank" rel="noopener noreferrer" class="hover:text-onSurface text-onSurface/60 transition-colors"><?php echo \htmlentities(tr('footer.author'), ENT_QUOTES, 'UTF-8', false); ?></a></span>
 </div>
</footer>