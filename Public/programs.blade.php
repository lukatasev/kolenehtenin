@include('partials.header')

<main class="w-full flex-grow">
    <!-- Header -->
    <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
        <div class="max-w-5xl mx-auto px-6 py-14">
            <h1 class="text-3xl font-semibold text-onSurface">{{ tr('programs.title') }}</h1>
        </div>
    </section>

    <!-- Konkurs Banner -->
    <section class="border-b border-surfaceContainer bg-primary/5">
        <div class="max-w-5xl mx-auto px-6 py-6">
            <div class="flex items-start gap-3">
                <i class="ti ti-info-circle text-primary text-[24px] mt-0.5"></i>
                <div>
                    <p class="text-sm font-medium text-onSurface">{{ tr('programs.konkurs_title') }}</p>
                    <a href="https://mon.gov.mk/mk-MK/odnosi-so-javnost/soopstenija/objaven-e-konkursot-za-upis-vo-sredni-ucilista-vo-ucebnata-2026-2027-godina" target="_blank" rel="noopener noreferrer" class="text-sm text-primary hover:underline mt-1 inline-block">{{ tr('programs.konkurs_link') }} &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 px-6 max-w-5xl mx-auto space-y-14">
        
        <!-- Електротехничка -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">{{ tr('programs.electro.title') }} &mdash; {{ tr('programs.electro.subtitle') }}</h2>
            
            <details class="border border-surfaceContainer group">
                <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <span class="text-base font-medium flex items-center gap-2">
                        <i class="ti ti-player-play text-onSurface/60"></i>
                        {{ tr('programs.watch_video') }}
                    </span>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-5 pb-5 border-t border-surfaceContainer">
                    <div class="aspect-video max-w-2xl mx-auto w-full mt-5">
                        <video controls class="w-full h-full object-contain rounded-sm bg-black">
                            <source src="/assets/videos/elektro.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </details>

            <details class="border border-surfaceContainer group">
                <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <div class="flex flex-col gap-3 flex-grow">
                        <span class="text-base font-medium">{{ tr('programs.electro.profiles.computer_tech.name') }}</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.years', ['n' => '4']) }}</span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ tr('programs.min_points', ['points' => '60']) }}</span>
                        </div>
                    </div>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
                    <p class="mb-2 font-medium text-onSurface">{{ tr('programs.trained_for') }}</p>
                    <ul class="list-disc pl-5 space-y-1 leading-relaxed">
                        @php $items = explode(';', tr('programs.electro.profiles.computer_tech.description')); @endphp
                        @foreach($items as $item)
                            @if(trim($item))
                            <li>{{ trim($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.electro.profiles.computer_tech.student_count') }} {{ tr('programs.students') }}</span>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.electro.profiles.computer_tech.class_count') }} {{ tr('programs.classes') }}</span>
                    </div>
                </div>
            </details>

            <details class="border border-surfaceContainer group">
                <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <div class="flex flex-col gap-3 flex-grow">
                        <span class="text-base font-medium">{{ tr('programs.electro.profiles.energetics.name') }}</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.years', ['n' => '4']) }}</span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ tr('programs.min_points', ['points' => '45']) }}</span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ tr('programs.dual_class') }}</span>
                        </div>
                    </div>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
                    <p class="mb-2 font-medium text-onSurface">{{ tr('programs.trained_for') }}</p>
                    <ul class="list-disc pl-5 space-y-1 leading-relaxed">
                        @foreach(explode(';', tr('programs.electro.profiles.energetics.description')) as $item)
                            @if(trim($item))
                            <li>{{ trim($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                    <p class="mt-3 font-medium text-onSurface">{{ tr('programs.partner_companies') }}</p>
                    <div class="mt-2 flex gap-4 items-center">
                        <img src="/assets/images/companies/tm_doo.png" alt="ТМ ДОО" class="h-8 w-auto object-contain">
                        <img src="/assets/images/companies/jp_hidrosistem_zletovica.png" alt="ЈП Хидросистем Злетовица" class="h-8 w-auto object-contain">
                        <img src="/assets/images/companies/jole_dooel.png" alt="ЈОЛЕ ДООЕЛ" class="h-8 w-auto object-contain">
                        <img src="/assets/images/companies/drvodekor_enterier.jpg" alt="Дрводекор Ентериер" class="h-8 w-auto object-contain">
                        <img src="/assets/images/companies/elektrodistribucija.jpg" alt="Електродистрибуција" class="h-8 w-auto object-contain">
                        <img src="/assets/images/companies/zdvil_lion.png" alt="ЗДВИЛ ЛИОН" class="h-8 w-auto object-contain">
                    </div>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.electro.profiles.energetics.student_count') }} {{ tr('programs.students') }}</span>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.electro.profiles.energetics.class_count') }} {{ tr('programs.classes') }}</span>
                    </div>
                </div>
            </details>

            <details class="border border-surfaceContainer group">
                <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <div class="flex flex-col gap-3 flex-grow">
                        <span class="text-base font-medium">{{ tr('programs.electro.profiles.electronics.name') }}</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.years', ['n' => '4']) }}</span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ tr('programs.min_points', ['points' => '50']) }}</span>
                        </div>
                    </div>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
                    <p class="mb-2 font-medium text-onSurface">{{ tr('programs.trained_for') }}</p>
                    <ul class="list-disc pl-5 space-y-1 leading-relaxed">
                        @foreach(explode(';', tr('programs.electro.profiles.electronics.description')) as $item)
                            @if(trim($item))
                            <li>{{ trim($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.electro.profiles.electronics.student_count') }} {{ tr('programs.students') }}</span>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.electro.profiles.electronics.class_count') }} {{ tr('programs.classes') }}</span>
                    </div>
                </div>
            </details>
        </div>

        <!-- Машинска -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">{{ tr('programs.machine.title') }} &mdash; {{ tr('programs.machine.subtitle') }}</h2>
            
            <details class="border border-surfaceContainer group">
                <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <span class="text-base font-medium flex items-center gap-2">
                        <i class="ti ti-player-play text-onSurface/60"></i>
                        {{ tr('programs.watch_video') }}
                    </span>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-5 pb-5 border-t border-surfaceContainer">
                    <div class="aspect-video max-w-2xl mx-auto w-full mt-5">
                        <video controls class="w-full h-full object-contain rounded-sm bg-black">
                            <source src="/assets/videos/mashinska.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </details>

            <details class="border border-surfaceContainer group">
                <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <div class="flex flex-col gap-3 flex-grow">
                        <span class="text-base font-medium">{{ tr('programs.machine.profiles.cnc.name') }}</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.years', ['n' => '4']) }}</span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ tr('programs.min_points', ['points' => '45']) }}</span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ tr('programs.dual_class') }}</span>
                        </div>
                    </div>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
                    <p class="mb-2 font-medium text-onSurface">{{ tr('programs.trained_for') }}</p>
                    <ul class="list-disc pl-5 space-y-1 leading-relaxed">
                        @foreach(explode(';', tr('programs.machine.profiles.cnc.description')) as $item)
                            @if(trim($item))
                            <li>{{ trim($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                    <p class="mt-3 font-medium text-onSurface">{{ tr('programs.partner_companies') }}</p>
                    <div class="mt-2 flex gap-4 items-center">
                        <img src="/assets/images/companies/tm_doo.png" alt="ТМ ДОО" class="h-8 w-auto object-contain">
                        <img src="/assets/images/companies/aktiva_doo.jpg" alt="АКТИВА ДОО" class="h-8 w-auto object-contain">
                    </div>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.machine.profiles.cnc.student_count') }} {{ tr('programs.students') }}</span>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.machine.profiles.cnc.class_count') }} {{ tr('programs.classes') }}</span>
                    </div>
                </div>
            </details>

            <details class="border border-surfaceContainer group">
                <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <div class="flex flex-col gap-3 flex-grow">
                        <span class="text-base font-medium">{{ tr('programs.machine.profiles.vehicles.name') }}</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.years', ['n' => '4']) }}</span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ tr('programs.min_points', ['points' => '45']) }}</span>
                        </div>
                    </div>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
                    <p class="mb-2 font-medium text-onSurface">{{ tr('programs.trained_for') }}</p>
                    <ul class="list-disc pl-5 space-y-1 leading-relaxed">
                        @foreach(explode(';', tr('programs.machine.profiles.vehicles.description')) as $item)
                            @if(trim($item))
                            <li>{{ trim($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.machine.profiles.vehicles.student_count') }} {{ tr('programs.students') }}</span>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.machine.profiles.vehicles.class_count') }} {{ tr('programs.classes') }}</span>
                    </div>
                </div>
            </details>

            <details class="border border-surfaceContainer group">
                <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <div class="flex flex-col gap-3 flex-grow">
                        <span class="text-base font-medium">{{ tr('programs.machine.profiles.mechanic.name') }}</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.years', ['n' => '3']) }}</span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ tr('programs.min_points', ['points' => '30']) }}</span>
                        </div>
                    </div>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
                    <p class="mb-2 font-medium text-onSurface">{{ tr('programs.trained_for') }}</p>
                    <ul class="list-disc pl-5 space-y-1 leading-relaxed">
                        @foreach(explode(';', tr('programs.machine.profiles.mechanic.description')) as $item)
                            @if(trim($item))
                            <li>{{ trim($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.machine.profiles.mechanic.student_count') }} {{ tr('programs.students') }}</span>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.machine.profiles.mechanic.class_count') }} {{ tr('programs.classes') }}</span>
                    </div>
                </div>
            </details>
        </div>

        <!-- Угостителско-туристичка -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">{{ tr('programs.hospitality.title') }} &mdash; {{ tr('programs.hospitality.subtitle') }}</h2>
            
            <details class="border border-surfaceContainer group">
                <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <span class="text-base font-medium flex items-center gap-2">
                        <i class="ti ti-player-play text-onSurface/60"></i>
                        {{ tr('programs.watch_video') }}
                    </span>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-5 pb-5 border-t border-surfaceContainer">
                    <div class="aspect-[9/16] max-w-sm mx-auto w-full mt-5">
                        <video controls class="w-full h-full object-contain rounded-sm bg-black">
                            <source src="/assets/videos/ugostitelstvo.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </details>

            <details class="border border-surfaceContainer group">
                <summary class="p-5 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <div class="flex flex-col gap-3 flex-grow">
                        <span class="text-base font-medium">{{ tr('programs.hospitality.profiles.waiter_cook.name') }}</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.years', ['n' => '3']) }}</span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ tr('programs.min_points', ['points' => '30']) }}</span>
                        </div>
                    </div>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-5 pb-5 pt-2 border-t border-surfaceContainer text-sm text-onSurface/70">
                    <p class="leading-relaxed">{{ tr('programs.hospitality.profiles.waiter_cook.description') }}</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.hospitality.profiles.waiter_cook.student_count') }} {{ tr('programs.students') }}</span>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ tr('programs.hospitality.profiles.waiter_cook.class_count') }} {{ tr('programs.classes') }}</span>
                    </div>
                </div>
            </details>
        </div>

    </section>
</main>

@include('partials.footer')