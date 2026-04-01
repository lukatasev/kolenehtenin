@include('partials.header')

<main class="w-full flex-grow flex flex-col">
    <!-- Hero Section -->
    <section class="py-20 px-6 max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12 w-full">
        <div class="flex-1 space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surfaceContainer border border-surfaceContainer text-onSurface text-xs font-semibold tracking-wide">
                <span class="material-symbols-outlined text-[16px]">school</span>
                ДСУ РЦСОО „Коле Нехтенин“ - Штип
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-onSurface leading-tight tracking-tight">
                Вашата струка.<br>
                <span class="text-primary">Вашата иднина.</span>
            </h2>
            <p class="text-lg text-onSurface/70 max-w-lg leading-relaxed">
                Регионален центар за стручно образование и обука. Истражете ги можностите, усовршете ги своите вештини и бидете дел од успехот.
            </p>
            <div class="pt-4 flex flex-wrap gap-4">
                <a href="/programs" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-onPrimary font-semibold rounded-xl hover:opacity-90 transition-opacity">
                    Истражи насоки
                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                </a>
                <a href="/about" class="inline-flex items-center gap-2 px-6 py-3 bg-surfaceContainer text-onSurface font-semibold rounded-xl hover:bg-surfaceContainer/80 transition-colors">
                    Повеќе за нас
                </a>
            </div>
        </div>
        
        <!-- Hero Visual (Clean and Structured) -->
        <div class="flex-1 w-full bg-surface border border-surfaceContainer rounded-3xl overflow-hidden shadow-sm flex flex-col relative min-h-[350px]">
            <!-- Top cover image placeholder -->
            <div class="h-48 bg-surfaceContainer w-full flex items-center justify-center">
                <span class="material-symbols-outlined text-onSurface/20 text-[80px]">domain</span>
            </div>
            <!-- School Context Meta -->
            <div class="p-6 bg-surface flex flex-col gap-3 relative">
                <div class="absolute -top-10 left-6 w-20 h-20 bg-surface rounded-2xl p-2 shadow-sm border border-surfaceContainer flex items-center justify-center">
                    <img src="/assets/images/logo.jpg" alt="Logo" class="w-full h-full object-contain rounded-xl">
                </div>
                <div class="pt-10 flex flex-col gap-1">
                    <h3 class="font-bold text-lg leading-tight">60 Години Традиција</h3>
                    <p class="text-sm text-onSurface/70">Создаваме кадри кои го движат општеството напред преку практична настава и дуално образование.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Banner -->
    <section class="border-y border-surfaceContainer bg-surfaceContainer/20 py-10 px-6">
        <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="flex flex-col gap-2">
                <span class="material-symbols-outlined text-primary text-3xl">history_edu</span>
                <h4 class="font-bold text-onSurface text-lg">60+ Години</h4>
                <p class="text-onSurface/60 text-sm">Традиција и квалитет</p>
            </div>
            <div class="flex flex-col gap-2">
                <span class="material-symbols-outlined text-primary text-3xl">groups</span>
                <h4 class="font-bold text-onSurface text-lg">800 Ученици</h4>
                <p class="text-onSurface/60 text-sm">Во 28 паралелки</p>
            </div>
            <div class="flex flex-col gap-2">
                <span class="material-symbols-outlined text-primary text-3xl">work</span>
                <h4 class="font-bold text-onSurface text-lg">Дуално</h4>
                <p class="text-onSurface/60 text-sm">Вработување по завршување</p>
            </div>
            <div class="flex flex-col gap-2">
                <span class="material-symbols-outlined text-primary text-3xl">emoji_events</span>
                <h4 class="font-bold text-onSurface text-lg">Награди</h4>
                <p class="text-onSurface/60 text-sm">Државни признанија</p>
            </div>
        </div>
    </section>

    <!-- Programs Overview -->
    <section class="py-20 px-6 max-w-6xl mx-auto w-full">
        <div class="flex items-end justify-between mb-10">
            <div>
                <h2 class="text-3xl font-bold text-onSurface mb-2">Нашите Струки</h2>
                <p class="text-onSurface/60">Модерен пристап и практична настава.</p>
            </div>
            <a href="/programs" class="hidden md:flex items-center gap-2 text-sm font-semibold text-primary hover:underline">
                Види ги сите <span class="material-symbols-outlined text-[18px]">east</span>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Program Card -->
            <a href="/programs" class="group flex flex-col bg-surface border border-surfaceContainer rounded-2xl p-6 hover:shadow-lg hover:border-primary/30 transition-all">
                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-primary">bolt</span>
                </div>
                <h3 class="text-xl font-bold text-onSurface mb-3">Електротехничка</h3>
                <p class="text-sm text-onSurface/70 flex-grow mb-6">
                    Електротехничар за компјутерска техника, енергетичар и телекомуникации.
                </p>
                <div class="text-xs font-bold text-primary flex items-center gap-1">
                    <span class="material-symbols-outlined text-[16px]">list</span> 3 Профили
                </div>
            </a>

            <!-- Program Card -->
            <a href="/programs" class="group flex flex-col bg-surface border border-surfaceContainer rounded-2xl p-6 hover:shadow-lg hover:border-primary/30 transition-all">
                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-primary">precision_manufacturing</span>
                </div>
                <h3 class="text-xl font-bold text-onSurface mb-3">Машинска</h3>
                <p class="text-sm text-onSurface/70 flex-grow mb-6">
                    Техничар за компјутерско управување (CNC), мехатроника, заварување и машинство.
                </p>
                <div class="text-xs font-bold text-primary flex items-center gap-1">
                    <span class="material-symbols-outlined text-[16px]">list</span> 5 Профили
                </div>
            </a>

            <!-- Program Card -->
            <a href="/programs" class="group flex flex-col bg-surface border border-surfaceContainer rounded-2xl p-6 hover:shadow-lg hover:border-primary/30 transition-all">
                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-primary">restaurant_menu</span>
                </div>
                <h3 class="text-xl font-bold text-onSurface mb-3">Угостителска</h3>
                <p class="text-sm text-onSurface/70 flex-grow mb-6">
                    Врвно угостителство преку практика во реномирани објекти за Келнер-готвач.
                </p>
                <div class="text-xs font-bold text-primary flex items-center gap-1">
                    <span class="material-symbols-outlined text-[16px]">list</span> 1 Профил
                </div>
            </a>
        </div>
        <a href="/programs" class="md:hidden mt-6 flex items-center justify-center gap-2 text-sm font-semibold text-primary">
            Види ги сите <span class="material-symbols-outlined text-[18px]">east</span>
        </a>
    </section>

</main>

@include('partials.footer')
