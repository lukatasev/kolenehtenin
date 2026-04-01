@include('partials.header')

<main class="w-full flex-grow text-onSurface">
    <!-- Header -->
    <section class="bg-surfaceContainer/30 border-b border-surfaceContainer py-16 px-6">
        <div class="max-w-6xl mx-auto space-y-4">
            <h1 class="text-4xl md:text-5xl font-black">Новости</h1>
            <p class="text-lg text-onSurface/70 max-w-2xl">Бидете во тек со сите активности, настани и постигнувања на учениците.</p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 px-6 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Article 1 -->
            <div class="bg-surface border border-surfaceContainer rounded-3xl overflow-hidden flex flex-col hover:shadow-lg transition-all group">
                <div class="h-48 bg-surfaceContainer flex items-center justify-center relative overflow-hidden">
                    <span class="material-symbols-outlined text-[80px] text-primary/50 group-hover:scale-110 transition-transform duration-500">sports_score</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <span class="text-xs font-semibold tracking-wider uppercase text-primary mb-3">11 Април, 2025</span>
                    <h3 class="text-xl font-bold mb-3 leading-tight">Пролетни денови на училишен спорт</h3>
                    <p class="text-sm text-onSurface/70 mb-6 flex-grow leading-relaxed">
                        Во организација на општина Штип и Сојузот на училишен спорт денес во СОУ „Коле Нехтенин" Штип започнуваат Пролетните денови на училишен спорт.
                    </p>
                    <a href="#" class="inline-flex items-center gap-1 text-primary font-bold text-sm hover:underline">
                        Прочитај повеќе <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-surface border border-surfaceContainer rounded-3xl overflow-hidden flex flex-col hover:shadow-lg transition-all group">
                <div class="h-48 bg-surfaceContainer flex items-center justify-center relative overflow-hidden">
                    <span class="material-symbols-outlined text-[80px] text-primary/50 group-hover:scale-110 transition-transform duration-500">museum</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <span class="text-xs font-semibold tracking-wider uppercase text-primary mb-3">10 Април, 2025</span>
                    <h3 class="text-xl font-bold mb-3 leading-tight">Посета на Лесновски манастир</h3>
                    <p class="text-sm text-onSurface/70 mb-6 flex-grow leading-relaxed">
                        Успешно се реализираше посета на Лесновскиот манастир и Музејот на ретки минерали во Пробиштип од страна на нашите ученици од трета година.
                    </p>
                    <a href="#" class="inline-flex items-center gap-1 text-primary font-bold text-sm hover:underline">
                        Прочитај повеќе <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-surface border border-surfaceContainer rounded-3xl overflow-hidden flex flex-col hover:shadow-lg transition-all group">
                <div class="h-48 bg-surfaceContainer flex items-center justify-center relative overflow-hidden">
                    <span class="material-symbols-outlined text-[80px] text-primary/50 group-hover:scale-110 transition-transform duration-500">volunteer_activism</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <span class="text-xs font-semibold tracking-wider uppercase text-primary mb-3">10 Април, 2025</span>
                    <h3 class="text-xl font-bold mb-3 leading-tight">Крводарителна акција</h3>
                    <p class="text-sm text-onSurface/70 mb-6 flex-grow leading-relaxed">
                        Успешно спроведена крводарителна акција во соработка со Општинската организација на Црвен Крст-Штип каде зедоа учество голем број матуранти.
                    </p>
                    <a href="#" class="inline-flex items-center gap-1 text-primary font-bold text-sm hover:underline">
                        Прочитај повеќе <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
            </div>

        </div>
    </section>
</main>

@include('partials.footer')
