<header class="w-full bg-surface border-b border-surfaceContainer">
    <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center gap-4">
        <a href="/home" class="flex items-center gap-3 shrink-0">
            <img src="/assets/images/logo.jpg" alt="{{ tr('school.name') }} Лого" class="h-9 w-auto rounded-sm object-contain">
            <div class="hidden sm:flex flex-col">
                <span class="text-base font-semibold text-onSurface leading-tight">{{ tr('school.name') }}</span>
                <span class="text-[11px] text-onSurface/50 tracking-wide">{{ tr('school.city') }}</span>
            </div>
        </a>
        
        <nav class="hidden lg:flex items-center gap-5 text-sm">
            <a href="/about" class="text-onSurface/70 hover:text-onSurface transition-colors whitespace-nowrap">{{ tr('nav.about') }}</a>
            <a href="/programs" class="text-onSurface/70 hover:text-onSurface transition-colors whitespace-nowrap">{{ tr('nav.programs') }}</a>
            <a href="/gallery" class="text-onSurface/70 hover:text-onSurface transition-colors whitespace-nowrap">{{ tr('nav.gallery') }}</a>
            <a href="/staff" class="text-onSurface/70 hover:text-onSurface transition-colors whitespace-nowrap">{{ tr('nav.staff') }}</a>
            <a href="/news" class="text-onSurface/70 hover:text-onSurface transition-colors whitespace-nowrap">{{ tr('nav.news') }}</a>
            <a href="/links" class="text-onSurface/70 hover:text-onSurface transition-colors whitespace-nowrap">{{ tr('nav.links') }}</a>
            <a href="/contact" class="text-onSurface/70 hover:text-onSurface transition-colors whitespace-nowrap">{{ tr('nav.contact') }}</a>
        </nav>
        
        <div class="flex items-center gap-3">
            <div class="hidden md:flex items-center gap-2 text-sm font-medium text-onSurface/60" aria-label="Language switcher">
                <a href="?lang=mk" class="hover:text-onSurface hover:underline">MK</a>
                <span class="text-onSurface/30">|</span>
                <a href="?lang=en" class="hover:text-onSurface hover:underline">EN</a>
                <span class="text-onSurface/30">|</span>
                <a href="?lang=tr" class="hover:text-onSurface hover:underline">TR</a>
                <span class="text-onSurface/30">|</span>
                <a href="?lang=sq" class="hover:text-onSurface hover:underline">SQ</a>
            </div>
            <a href="https://ednevnik.edu.mk" target="_blank" rel="noopener noreferrer" class="hidden md:flex items-center gap-1 text-primary text-sm hover:underline whitespace-nowrap">
                <i class="ti ti-login text-[16px]"></i>
                <span class="hidden lg:inline">{{ tr('nav.e_dnevnik') }}</span>
            </a>
            <button id="mobile-menu-btn" class="lg:hidden text-onSurface p-1">
                <i class="ti ti-menu-2"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-surfaceContainer">
        <nav class="flex flex-col px-4 py-3 gap-2 text-sm">
            <a href="/about" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">{{ tr('nav.about') }}</a>
            <a href="/programs" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">{{ tr('nav.programs') }}</a>
            <a href="/gallery" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">{{ tr('nav.gallery') }}</a>
            <a href="/staff" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">{{ tr('nav.staff') }}</a>
            <a href="/news" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">{{ tr('nav.news') }}</a>
            <a href="/links" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">{{ tr('nav.links') }}</a>
            <a href="/contact" class="text-onSurface/70 hover:text-onSurface transition-colors py-2">{{ tr('nav.contact') }}</a>
            <div class="flex gap-3 text-sm font-medium text-onSurface/60 py-2 border-t border-surfaceContainer mt-2">
                <a href="?lang=mk" class="hover:underline">MK</a>
                <span>|</span>
                <a href="?lang=en" class="hover:underline">EN</a>
                <span>|</span>
                <a href="?lang=tr" class="hover:underline">TR</a>
                <span>|</span>
                <a href="?lang=sq" class="hover:underline">SQ</a>
            </div>
            <a href="https://ednevnik.edu.mk" target="_blank" rel="noopener noreferrer" class="text-primary py-2">{{ tr('nav.e_dnevnik') }}</a>
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