@include('partials.header')

<main class="w-full flex-grow">
    <!-- Header -->
    <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
        <div class="max-w-5xl mx-auto px-6 py-14">
            <h1 class="text-3xl font-semibold text-onSurface">За нас</h1>
            <p class="text-base text-onSurface/60 mt-2">Историја и традиција на нашето училиште.</p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 px-6 max-w-5xl mx-auto space-y-12">
        
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface">Историја</h2>
            <div class="text-onSurface/70 leading-relaxed space-y-4">
                <p>
                    Почетоците на ДСУ РЦСОО „Коле Нехтенин" датираат уште пред Втората светска војна, кога претставувало занаетчиско училиште во Штип. Со текот на годините, тоа се развивало и прилагодувало на индустриските потреби на времето. 
                </p>
                <p>
                    Во учебната 1965/66 година, официјално е основано како Металско училиште со практична настава, поставувајќи ги темелите за она што денес е водечки регионален центар за стручно образование.
                </p>
            </div>
        </div>

        <!-- Image -->
        <div class="w-full">
            <img src="/assets/images/school_photo1.jpg" alt="Училишна зграда" class="w-full h-72 object-cover rounded-sm">
        </div>

        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface">Инфраструктура</h2>
            <div class="text-onSurface/70 leading-relaxed space-y-4">
                <p>
                    Училиштето денес брои околу 800 ученици, распоредени во 28 паралелки. Наставата се одвива преку стручни програми од 3 и 4 години, нудејќи широк спектар на специјализации.
                </p>
                <p>
                    Располагаме со модерна инфраструктура која вклучува 14 класични училници, 9 специјализирани кабинети, спортска сала, како и машинска работилница опремена за изведување на врвна практична настава.
                </p>
            </div>
        </div>

        <div class="border border-surfaceContainer p-6">
            <h3 class="text-base font-semibold text-onSurface mb-2">Мисија</h3>
            <p class="text-onSurface/70 leading-relaxed">
                Градење на личности свесни за своите права и должности, стекнување со знаења и вештини како и стручни квалификации со кои ќе бидат конкурентна работна сила на пазарот на трудот.
            </p>
        </div>
            
    </section>
</main>

@include('partials.footer')
