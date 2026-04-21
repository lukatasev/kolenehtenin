<?php defined("INDLUCE_CHECK") || die("404"); ?><header class="w-full bg-surface border-b border-surfaceContainer">
 <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">
 <a href="/home" class="flex items-center gap-3">
 <img src="/assets/images/logo.jpg" alt="Коле Нехтенин Лого" class="h-9 w-auto rounded-sm object-contain">
 <div class="flex flex-col">
 <h1 class="text-base font-semibold text-onSurface leading-tight">ДСУ РЦСОО „Коле Нехтенин"</h1>
 <span class="text-[11px] text-onSurface/50 tracking-wide">Штип</span>
 </div>
 </a>
 
 <nav class="hidden md:flex items-center gap-6 text-sm">
 <a href="/about" class="text-onSurface/70 hover:text-onSurface transition-colors">За нас</a>
 <a href="/programs" class="text-onSurface/70 hover:text-onSurface transition-colors">Струки</a>
 <a href="/gallery" class="text-onSurface/70 hover:text-onSurface transition-colors">Галерија</a>
 <a href="/staff" class="text-onSurface/70 hover:text-onSurface transition-colors">Вработени</a>
 <a href="/news" class="text-onSurface/70 hover:text-onSurface transition-colors">Новости</a>
 <a href="/contact" class="text-onSurface/70 hover:text-onSurface transition-colors">Контакт</a>
 </nav>
 
 <div class="flex items-center gap-4">
 <a href="https://ednevnik.edu.mk" target="_blank" rel="noopener noreferrer" class="hidden md:flex items-center gap-1 text-primary text-sm hover:underline">
 <i class="ti ti-login text-[18px]"></i>
 Е-Дневник
 </a>
 <button id="mobile-menu-btn" class="md:hidden text-onSurface">
 <i class="ti ti-menu-2"></i>
 </button>
 </div>
 </div>

 <!-- Mobile Menu -->
 <div id="mobile-menu" class="hidden md:hidden border-t border-surfaceContainer">
 <nav class="flex flex-col px-6 py-4 gap-4 text-sm">
 <a href="/about" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">За нас</a>
 <a href="/programs" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">Струки</a>
 <a href="/gallery" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">Галерија</a>
 <a href="/staff" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">Вработени</a>
 <a href="/news" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">Новости</a>
 <a href="/contact" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">Контакт</a>
 <a href="https://ednevnik.edu.mk" target="_blank" rel="noopener noreferrer" class="text-primary py-2">Е-Дневник</a>
 </nav>
 </div>
</header>

<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 bg-black/90 z-50 hidden flex items-center justify-center p-4">
 <button id="lightbox-close" class="absolute top-4 right-4 text-white/70 hover:text-white text-4xl">&times;</button>
 <img id="lightbox-img" src="" alt="" class="max-w-full max-h-[90vh] object-contain">
</div>

<script>
document.getElementById('mobile-menu-btn').addEventListener('click', function() {
 document.getElementById('mobile-menu').classList.toggle('hidden');
});

// Lightbox functionality
document.addEventListener('click', function(e) {
 if (e.target.tagName === 'IMG' && e.target.closest('[data-lightbox]')) {
 const lightbox = document.getElementById('lightbox');
 const img = document.getElementById('lightbox-img');
 img.src = e.target.src;
 lightbox.classList.remove('hidden');
 document.body.style.overflow = 'hidden';
 }
});

document.getElementById('lightbox-close').addEventListener('click', function() {
 document.getElementById('lightbox').classList.add('hidden');
 document.body.style.overflow = '';
});

document.getElementById('lightbox').addEventListener('click', function(e) {
 if (e.target.id === 'lightbox') {
 this.classList.add('hidden');
 document.body.style.overflow = '';
 }
});
</script>
