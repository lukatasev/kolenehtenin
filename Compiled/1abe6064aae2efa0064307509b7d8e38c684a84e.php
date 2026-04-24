<?php defined("INDLUCE_CHECK") || die("404"); ?><?php echo $this->runChild('partials.header'); ?>

<main class="w-full flex-grow">
 <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
 <div class="max-w-5xl mx-auto px-6 py-14">
 <h1 class="text-3xl font-semibold text-onSurface"><?php echo \htmlentities(tr('programs.title'), ENT_QUOTES, 'UTF-8', false); ?></h1>
 </div>
 </section>

 <section class="py-16 px-6 max-w-5xl mx-auto">
 <h2 class="text-xl font-semibold text-onSurface"><?php echo \htmlentities(tr('programs.electro.title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <p class="text-onSurface/70 mt-2"><?php echo \htmlentities(tr('programs.electro.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </section>
</main>

<?php echo $this->runChild('partials.footer'); ?>