<?php defined("INDLUCE_CHECK") || die("404"); ?><?php echo $this->runChild('partials.header'); ?>

<main class="w-full flex-grow">
 <section class="flex flex-col items-center justify-center py-32 px-6 text-center">
 <h1 class="text-7xl font-semibold text-onSurface/10">404</h1>
 <h2 class="text-xl font-semibold text-onSurface mt-4">Страницата не е пронајдена</h2>
 <p class="text-base text-onSurface/50 mt-2 max-w-md">
 Страницата што ја барате не постои или е преместена.
 </p>
 <a href="/home" class="mt-8 inline-flex items-center px-6 py-2.5 bg-primary text-onPrimary text-sm font-medium rounded-sm hover:opacity-90 transition-opacity">
 Назад на почетна
 </a>
 </section>
</main>

<?php echo $this->runChild('partials.footer'); ?>
