@include('partials.header')

<main class="w-full flex-grow">
    <!-- Header -->
    <section class="bg-surfaceContainer/30 border-b border-surfaceContainer py-16 px-6">
        <div class="max-w-4xl mx-auto space-y-4">
            <h1 class="text-4xl md:text-5xl font-black text-onSurface">За Нас</h1>
            <p class="text-lg text-onSurface/70">Запознајте се со богатата историја и традиција на нашето училиште.</p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 px-6 max-w-4xl mx-auto space-y-12">
        
        <div class="space-y-6">
            <div class="flex items-center gap-3 mb-6">
                <span class="material-symbols-outlined text-primary text-3xl">auto_stories</span>
                <h2 class="text-2xl font-bold text-onSurface">Нашата Историја</h2>
            </div>
            <div class="prose max-w-none text-onSurface/80 leading-relaxed text-base">
                <p class="mb-4">
                    Почетоците на ДСУ РЦСОО „Коле Нехтенин“ датираат уште пред Втората светска војна, кога претставувало занаетчиско училиште во Штип. Со текот на годините, тоа се развивало и прилагодувало на индустриските потреби на времето. 
                </p>
                <p>
                    Во учебната 1965/66 година, официјално е основано како Металско училиште со практична настава, поставувајќи ги темелите за она што денес е водечки регионален центар за стручно образование.
                </p>
            </div>
        </div>

        <div class="space-y-6">
            <div class="flex items-center gap-3 mb-6">
                <span class="material-symbols-outlined text-primary text-3xl">domain</span>
                <h2 class="text-2xl font-bold text-onSurface">Инфраструктура и Ученици</h2>
            </div>
            <div class="prose max-w-none text-onSurface/80 leading-relaxed text-base">
                <p class="mb-4">
                    Училиштето денес брои околу 800 ученици, распоредени во 28 паралелки. Наставата се одвива преку стручни програми од 3 и 4 години, нудејќи широк спектар на специјализации.
                </p>
                <p>
                    Располагаме со модерна инфраструктура која вклучува 14 класични училници, 9 специјализирани кабинети, спортска сала, како и машинска работилница опремена за изведување на врвна практична настава.
                </p>
            </div>
        </div>

        <div class="bg-primary/5 border border-primary/20 p-8 rounded-2xl md:flex gap-6 items-start mt-8">
            <span class="material-symbols-outlined text-primary text-4xl mb-4 md:mb-0">flag</span>
            <div>
                <h3 class="text-xl font-bold text-onSurface mb-3">Мисија</h3>
                <p class="text-onSurface/80 leading-relaxed m-0">
                    Градење на личности свесни за своите права и должности, стекнување со знаења и вештини како и стручни квалификации со кои ќе бидат конкурентна работна сила на пазарот на трудот.
                </p>
            </div>
        </div>
            
    </section>
</main>

@include('partials.footer')
