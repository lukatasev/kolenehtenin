@include('partials.header')

<main class="w-full flex-grow">
    <!-- Header -->
    <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
        <div class="max-w-5xl mx-auto px-6 py-14">
            <h1 class="text-3xl font-semibold text-onSurface">Вработени</h1>
            <p class="text-base text-onSurface/60 mt-2">Наставен кадар и стручна служба.</p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 px-6 max-w-5xl mx-auto space-y-14">

        <!-- Director -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">Директор</h2>
            <div class="border border-surfaceContainer p-5 flex flex-col sm:flex-row gap-5 items-start">
                <img src="/assets/images/vraboteni/jovanka_saleva.jpg" alt="Јованка Шалева" class="w-24 h-24 object-cover object-top rounded-sm shrink-0">
                <div class="flex flex-col gap-1">
                    <span class="text-base font-medium">Јованка Шалева</span>
                    <p class="text-sm text-onSurface/60 leading-relaxed">
                        Родена 1977 година, дипломиран професор по македонски јазик и литература на Филолошкиот факултет „Блаже Конески" при Универзитет „Св. Кирил и Методиј" во Скопје. Од 2015 година работи како професор по македонски јазик и литература во ДСУ РЦСОО „Коле Нехтенин"-Штип. На 14.2.2022 г. е именувана за директор.
                    </p>
                </div>
            </div>
        </div>

        <!-- Pedagogues -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">Педагози</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Весна Ивкова" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Дефектолог Весна Ивкова</span>
                        <span class="text-xs text-onSurface/50">Специјален едукатор и рехабилитатор</span>
                        <a href="mailto:vesna.ivkova@live.com" class="text-xs text-primary hover:underline">vesna.ivkova@live.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/slavica_gligorova.jpg" alt="Славица Глигоров" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Педагог Славица Глигоров</span>
                        <span class="text-xs text-onSurface/50">Електротехничка струка</span>
                        <a href="mailto:gligorovaslavica@gmail.com" class="text-xs text-primary hover:underline">gligorovaslavica@gmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Сузана Л. Ефтимова" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Педагог Сузана Л. Ефтимова</span>
                        <span class="text-xs text-onSurface/50">Машинска и Угостителско-туристичка струка</span>
                        <a href="mailto:suzanalazarova@yahoo.com" class="text-xs text-primary hover:underline">suzanalazarova@yahoo.com</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Electro -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">Електро актив</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/lupce_janevski.jpg" alt="Јаневски Љупче" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Јаневски Љупче</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:janevski2003@yahoo.com" class="text-xs text-primary hover:underline">janevski2003@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/sasko_jordev.jpg" alt="Јордев Сашко" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Јордев Сашко</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:s.jordev@yahoo.com" class="text-xs text-primary hover:underline">s.jordev@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/vlado_arsov.jpg" alt="Арсов Владо" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Арсов Владо</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:v.arsov@hotmail.com" class="text-xs text-primary hover:underline">v.arsov@hotmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/aleksandar_ivanov.jpg" alt="Иванов Александар" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Иванов Александар</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:perka1@yahoo.com" class="text-xs text-primary hover:underline">perka1@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/violeta_maksimovska.jpg" alt="Максимовска Виолета" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Максимовска Виолета</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:violetamaksimovska@hotmail.com" class="text-xs text-primary hover:underline">violetamaksimovska@hotmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/toni_maksimovski.jpg" alt="Максимовски Тони" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Максимовски Тони</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:t_maksimovski@yahoo.com" class="text-xs text-primary hover:underline">t_maksimovski@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Михајлов Стефан" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Михајлов Стефан</span>
                        <a href="mailto:stefanmihanj@gmail.com" class="text-xs text-primary hover:underline">stefanmihanj@gmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Пешевска Мартина" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Пешевска Мартина</span>
                        <a href="mailto:nikolovamartina@yahoo.com" class="text-xs text-primary hover:underline">nikolovamartina@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/zoran_pop_tomov.jpg" alt="Поп Томов Зоран" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Поп Томов Зоран</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:zpoptomov@yahoo.com" class="text-xs text-primary hover:underline">zpoptomov@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/despina_ristova_delipetreva.jpg" alt="Ристова Делипетрева Деспина" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Ристова Делипетрева Деспина</span>
                        <a href="mailto:despina.ristova@yahoo.com" class="text-xs text-primary hover:underline">despina.ristova@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/aleksandra_romanova_tasevski.jpg" alt="Романова Тасевски Александра" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Романова Тасевски Александра</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:acikaetf@yahoo.com" class="text-xs text-primary hover:underline">acikaetf@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/dejan_runcev.jpg" alt="Рунчев Дејан" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Рунчев Дејан</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:drunchev@gmail.com" class="text-xs text-primary hover:underline">drunchev@gmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Стефанов Душко" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Стефанов Душко</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:duskostefanov@yahoo.com" class="text-xs text-primary hover:underline">duskostefanov@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/ivana_stojanova.jpg" alt="Стојанова Ивана" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Стојанова Ивана</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по информатика</span>
                        <a href="mailto:ivana-stojanova@hotmail.com" class="text-xs text-primary hover:underline">ivana-stojanova@hotmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/juliana_taskova.jpg" alt="Ташкова Јулијана" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Ташкова Јулијана</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:jule_taskova@yahoo.com" class="text-xs text-primary hover:underline">jule_taskova@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/stojan_hadzi_nikolov.jpg" alt="Хаџи-Николов Стојан" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Хаџи-Николов Стојан</span>
                        <span class="text-xs text-onSurface/50">Дипл. инж. по електротехника</span>
                        <a href="mailto:hadinikolov@yahoo.com" class="text-xs text-primary hover:underline">hadinikolov@yahoo.com</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Machine -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">Машински актив</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/daniel_gorgievski.jpg" alt="Ѓорѓиевски Даниел" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Ѓорѓиевски Даниел</span>
                        <a href="mailto:gjorgievskidaniel86@yahoo.com" class="text-xs text-primary hover:underline">gjorgievskidaniel86@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/marijanco_jovanov.jpg" alt="Јованов Марјанчо" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Јованов Марјанчо</span>
                        <a href="mailto:marjanco.jovanov@yahoo.com" class="text-xs text-primary hover:underline">marjanco.jovanov@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/tamara_dimova.jpg" alt="Димова Тамара" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Димова Тамара</span>
                        <a href="mailto:tamara_dimova@live.com" class="text-xs text-primary hover:underline">tamara_dimova@live.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/tome_kolovski.jpg" alt="Коловски Томе" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Коловски Томе</span>
                        <span class="text-xs text-onSurface/50">Дипл. машински инженер</span>
                        <a href="mailto:kolovskitome@gmail.com" class="text-xs text-primary hover:underline">kolovskitome@gmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/boris_krlanski.jpg" alt="Крлански Борис" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Крлански Борис</span>
                        <span class="text-xs text-onSurface/50">Дипл. машински инженер</span>
                        <a href="mailto:krlanskiboris@yahoo.com" class="text-xs text-primary hover:underline">krlanskiboris@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/atanas_krstovski.jpg" alt="Крстовски Атанас" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Крстовски Атанас</span>
                        <a href="mailto:atanaskrstovski@yahoo.com" class="text-xs text-primary hover:underline">atanaskrstovski@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/igor_milev.jpg" alt="Милев Игор" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Милев Игор</span>
                        <span class="text-xs text-onSurface/50">Дипл. машински инженер</span>
                        <a href="mailto:igormilev76@gmail.com" class="text-xs text-primary hover:underline">igormilev76@gmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/aleksandar_naumov.jpg" alt="Наумов Александар" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Наумов Александар</span>
                        <span class="text-xs text-onSurface/50">Дипл. машински инженер</span>
                        <a href="mailto:al.naumov@yahoo.com" class="text-xs text-primary hover:underline">al.naumov@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/vencislav_panev.jpg" alt="Панев Венцислав" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Панев Венцислав</span>
                        <span class="text-xs text-onSurface/50">Дипл. машински инженер</span>
                        <a href="mailto:vencislavpanev@yahoo.com" class="text-xs text-primary hover:underline">vencislavpanev@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/tone_petrov.jpg" alt="Петров Тоне" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Петров Тоне</span>
                        <span class="text-xs text-onSurface/50">Дипл. машински инженер</span>
                        <a href="mailto:petrovtone@yahoo.com" class="text-xs text-primary hover:underline">petrovtone@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/dalibor_sazdov.jpg" alt="Саздов Далибор" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Саздов Далибор</span>
                        <a href="mailto:dalibor.sazdov@gmail.com" class="text-xs text-primary hover:underline">dalibor.sazdov@gmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/dragan_stankov.jpg" alt="Станков Драган" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Станков Драган</span>
                        <span class="text-xs text-onSurface/50">Дипл. машински инженер</span>
                        <a href="mailto:dr.stankov@yahoo.com" class="text-xs text-primary hover:underline">dr.stankov@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/zarko_hristovski.jpg" alt="Христовски Жарко" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Христовски Жарко</span>
                        <span class="text-xs text-onSurface/50">Дипл. машински инженер</span>
                        <a href="mailto:h.zarko@yahoo.com" class="text-xs text-primary hover:underline">h.zarko@yahoo.com</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hospitality -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">Угостителско-туристички актив</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/goran_antonievski.jpg" alt="Антониевски Горан" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Антониевски Горан</span>
                        <a href="mailto:goran.antonievski@yahoo.com" class="text-xs text-primary hover:underline">goran.antonievski@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Коцев Митко" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Коцев Митко</span>
                        <a href="mailto:kocev.mitko@yahoo.com" class="text-xs text-primary hover:underline">kocev.mitko@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/juliana_sazdova.jpg" alt="Саздова Јулијана" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Саздова Јулијана</span>
                        <a href="mailto:julijana.sazdova@yahoo.com" class="text-xs text-primary hover:underline">julijana.sazdova@yahoo.com</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Math/Science -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">Природно-математички актив</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/zoran_gorgiev.jpg" alt="Ѓоргиев Зоран" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Ѓоргиев Зоран</span>
                        <span class="text-xs text-onSurface/50">Дипломиран математичар</span>
                        <a href="mailto:zoranggg@yahoo.com" class="text-xs text-primary hover:underline">zoranggg@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/zaklina_atova.jpg" alt="Атова Жаклина" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Атова Жаклина</span>
                        <span class="text-xs text-onSurface/50">Дипломиран математичар</span>
                        <a href="mailto:zaki_atova@yahoo.com" class="text-xs text-primary hover:underline">zaki_atova@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/jordanka_ivanovska.jpg" alt="Ивановска Јорданка" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Ивановска Јорданка</span>
                        <a href="mailto:nikolova.jordanka@yahoo.com" class="text-xs text-primary hover:underline">nikolova.jordanka@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/vilma_ilievska.jpg" alt="Илиевска Вилма" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Илиевска Вилма</span>
                        <span class="text-xs text-onSurface/50">Дипломиран математичар</span>
                        <a href="mailto:vilmailievska@yahoo.com" class="text-xs text-primary hover:underline">vilmailievska@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/radmila_kasikova_filipova.jpg" alt="Кашикова Филипова Радмила" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Кашикова Филипова Радмила</span>
                        <a href="mailto:radmilakf@yahoo.com" class="text-xs text-primary hover:underline">radmilakf@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Кишишева Лидија" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Кишишева Лидија</span>
                        <a href="mailto:kisiseva@yahoo.com" class="text-xs text-primary hover:underline">kisiseva@yahoo.com</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- General -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">Општообразовен актив</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/ana_joveva_donev.jpg" alt="Јовева Ана" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Јовева Ана</span>
                        <a href="mailto:anaa_joveva@hotmail.com" class="text-xs text-primary hover:underline">anaa_joveva@hotmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/dragana_lubotenska.jpg" alt="Љуботенска Драгана" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Љуботенска Драгана</span>
                        <a href="mailto:draganabasarova@gmail.com" class="text-xs text-primary hover:underline">draganabasarova@gmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Андонова Иванова Силвана" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Андонова Иванова Силвана</span>
                        <a href="mailto:silvana.andonova@yahoo.com" class="text-xs text-primary hover:underline">silvana.andonova@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/zoran_arsov.jpg" alt="Арсов Зоран" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Арсов Зоран</span>
                        <a href="mailto:zoranarsov44@yahoo.com" class="text-xs text-primary hover:underline">zoranarsov44@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/suzana_arsova.jpg" alt="Арсова Сузана" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Арсова Сузана</span>
                        <a href="mailto:suzearsov@yahoo.com" class="text-xs text-primary hover:underline">suzearsov@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Донева Катерина" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Донева Катерина</span>
                        <a href="mailto:katerinadoneva1993@yahoo.com" class="text-xs text-primary hover:underline">katerinadoneva1993@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/violeta_zarinska.jpg" alt="Заринска Виолета" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Заринска Виолета</span>
                        <a href="mailto:vzorinska@yahoo.com" class="text-xs text-primary hover:underline">vzorinska@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/antonio_kirov.jpg" alt="Киров Антонио" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Киров Антонио</span>
                        <a href="mailto:vzorinska@yahoo.com" class="text-xs text-primary hover:underline">vzorinska@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/liljana_manova.jpg" alt="Манова Лилјана" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Манова Лилјана</span>
                        <a href="mailto:liljanamanova@yahoo.com" class="text-xs text-primary hover:underline">liljanamanova@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Митев Наташа" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Митев Наташа</span>
                        <a href="mailto:nategjorgjievska@gmail.com" class="text-xs text-primary hover:underline">nategjorgjievska@gmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/elizabeta_protogerova.jpg" alt="Протогерова Елизабета" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Протогерова Елизабета</span>
                        <a href="mailto:e.protogerova@yahoo.com" class="text-xs text-primary hover:underline">e.protogerova@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Самарџиски Методи" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Самарџиски Методи</span>
                        <a href="mailto:metodis66@gmail.com" class="text-xs text-primary hover:underline">metodis66@gmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Срцева Лазова Александра" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Срцева Лазова Александра</span>
                        <a href="mailto:aleksandrasrceva@hotmail.com" class="text-xs text-primary hover:underline">aleksandrasrceva@hotmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/katerina_marolova_stefanova.jpg" alt="Стефанова Катерина" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Стефанова Катерина</span>
                        <a href="mailto:katemstef@yahoo.com" class="text-xs text-primary hover:underline">katemstef@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Стоилова Сара" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Стоилова Сара</span>
                        <a href="mailto:sara_stoilova@yahoo.com" class="text-xs text-primary hover:underline">sara_stoilova@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/dance_toseva.jpg" alt="Тошева Данче" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Тошева Данче</span>
                        <a href="mailto:tosheva.danche@yahoo.com" class="text-xs text-primary hover:underline">tosheva.danche@yahoo.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/placeholder.svg" alt="Трендафилова Лидија" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Трендафилова Лидија</span>
                        <a href="mailto:lidija-marija@hotmail.com" class="text-xs text-primary hover:underline">lidija-marija@hotmail.com</a>
                    </div>
                </div>
                <div class="border border-surfaceContainer p-5 flex flex-col items-center text-center gap-2">
                    <img src="/assets/images/vraboteni/mirjana_gorgiev_ficorska.jpg" alt="Фичорска Мирјана" class="w-20 h-20 object-cover object-top rounded-sm cursor-pointer" data-lightbox>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-medium">Фичорска Мирјана</span>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>

@include('partials.footer')
