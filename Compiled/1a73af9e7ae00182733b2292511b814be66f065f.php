<?php defined("INDLUCE_CHECK") || die("404"); ?><?php echo $this->runChild('partials.header'); ?>

<main class="w-full flex-grow text-onSurface">
 <!-- Header -->
 <section class="bg-surfaceContainer/30 border-b border-surfaceContainer py-16 px-6">
 <div class="max-w-6xl mx-auto space-y-4">
 <h1 class="text-4xl md:text-5xl font-black">Контакт</h1>
 <p class="text-lg text-onSurface/70 max-w-2xl">Имате прашање? Слободно контактирајте нè преку формата или нашите броеви.</p>
 </div>
 </section>

 <!-- Content -->
 <section class="py-16 px-6 max-w-6xl mx-auto">
 <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
 
 <!-- Contact Info -->
 <div class="lg:col-span-2 space-y-8">
 <div class="bg-primary text-onPrimary rounded-3xl p-8 shadow-sm">
 <h2 class="text-2xl font-bold mb-8">Информации</h2>
 
 <div class="space-y-6">
 <div class="flex items-start gap-4">
 <span class="material-symbols-outlined text-onPrimary/80 mt-1">location_on</span>
 <div>
 <h4 class="font-bold text-sm text-onPrimary/80 uppercase tracking-wider mb-1">Адреса</h4>
 <p class="text-base leading-relaxed">Булевар Гоце Делчев бр. 101,<br>2000 Штип, Македонија</p>
 </div>
 </div>

 <div class="flex items-start gap-4">
 <span class="material-symbols-outlined text-onPrimary/80 mt-1">call</span>
 <div>
 <h4 class="font-bold text-sm text-onPrimary/80 uppercase tracking-wider mb-1">Телефон</h4>
 <p class="text-base leading-relaxed">+389 32 391 384<br>+389 32 607 384</p>
 </div>
 </div>

 <div class="flex items-start gap-4">
 <span class="material-symbols-outlined text-onPrimary/80 mt-1">mail</span>
 <div>
 <h4 class="font-bold text-sm text-onPrimary/80 uppercase tracking-wider mb-1">Е-пошта</h4>
 <p class="text-base">kontakt@kolenehtenin.edu.mk</p>
 </div>
 </div>
 </div>
 </div>
 </div>

 <!-- Contact Form -->
 <div class="lg:col-span-3 bg-surface border border-surfaceContainer rounded-3xl p-8 md:p-10 shadow-sm">
 <h2 class="text-2xl font-bold mb-2">Испратете порака</h2>
 <p class="text-onSurface/70 mb-8 text-sm">Пополнете ги полињата подолу и ние ќе ви одговориме во најбрз можен рок.</p>
 
 <form class="space-y-6">
 <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
 <div class="space-y-2">
 <label class="text-sm font-semibold text-onSurface">Име и Презиме</label>
 <input type="text" placeholder="Вашето име" class="w-full bg-surface border border-surfaceContainer rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-shadow">
 </div>
 <div class="space-y-2">
 <label class="text-sm font-semibold text-onSurface">Е-пошта</label>
 <input type="email" placeholder="example@email.com" class="w-full bg-surface border border-surfaceContainer rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-shadow">
 </div>
 </div>
 
 <div class="space-y-2">
 <label class="text-sm font-semibold text-onSurface">Наслов</label>
 <input type="text" placeholder="Наслов на пораката" class="w-full bg-surface border border-surfaceContainer rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-shadow">
 </div>

 <div class="space-y-2">
 <label class="text-sm font-semibold text-onSurface">Порака</label>
 <textarea rows="5" placeholder="Вашата порака..." class="w-full bg-surface border border-surfaceContainer rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-shadow resize-none"></textarea>
 </div>

 <div class="pt-2">
 <button type="button" class="bg-primary text-onPrimary font-bold px-8 py-3 rounded-xl hover:opacity-90 transition-opacity flex items-center gap-2">
 <span>Испрати</span>
 <span class="material-symbols-outlined text-[20px]">send</span>
 </button>
 </div>
 </form>
 </div>

 </div>
 </section>
</main>

<?php echo $this->runChild('partials.footer'); ?>
