@include('partials.header')

<main class="w-full flex-grow">
    <!-- Header -->
    <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
        <div class="max-w-5xl mx-auto px-6 py-14">
            <h1 class="text-3xl font-semibold text-onSurface">Новости</h1>
            <p class="text-base text-onSurface/60 mt-2">Активности и постигнувања на учениците.</p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 px-6 max-w-5xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Article 1 -->
            <div class="bg-surface border border-surfaceContainer overflow-hidden">
                <img src="/assets/images/school_photo1.jpg" alt="Пролетни денови на училишен спорт" class="w-full h-48 object-cover">
                <div class="p-5">
                    <span class="text-xs text-onSurface/40 mb-2 block">11 Април, 2025</span>
                    <h3 class="text-base font-semibold text-onSurface mb-2 leading-tight">Пролетни денови на училишен спорт</h3>
                    <p class="text-sm text-onSurface/60 leading-relaxed">
                        Во организација на општина Штип и Сојузот на училишен спорт денес во СОУ „Коле Нехтенин" Штип започнуваат Пролетните денови на училишен спорт.
                    </p>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-surface border border-surfaceContainer overflow-hidden">
                <img src="/assets/images/school_photo2.jpg" alt="Посета на Лесновски манастир" class="w-full h-48 object-cover">
                <div class="p-5">
                    <span class="text-xs text-onSurface/40 mb-2 block">10 Април, 2025</span>
                    <h3 class="text-base font-semibold text-onSurface mb-2 leading-tight">Посета на Лесновски манастир</h3>
                    <p class="text-sm text-onSurface/60 leading-relaxed">
                        Успешно се реализираше посета на Лесновскиот манастир и Музејот на ретки минерали во Пробиштип од страна на нашите ученици од трета година.
                    </p>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-surface border border-surfaceContainer overflow-hidden">
                <img src="/assets/images/school_photo1.jpg" alt="Крводарителна акција" class="w-full h-48 object-cover">
                <div class="p-5">
                    <span class="text-xs text-onSurface/40 mb-2 block">10 Април, 2025</span>
                    <h3 class="text-base font-semibold text-onSurface mb-2 leading-tight">Крводарителна акција</h3>
                    <p class="text-sm text-onSurface/60 leading-relaxed">
                        Успешно спроведена крводарителна акција во соработка со Општинската организација на Црвен Крст-Штип каде зедоа учество голем број матуранти.
                    </p>
                </div>
            </div>

        </div>
    </section>
</main>

@include('partials.footer')
