@php
// Pre-load programs translations
$splitDesc = function($desc) {
    return array_filter(array_map('trim', explode(';', $desc)));
};

$programs_data = [
    'electro' => [
        'title' => tr('programs.electro.title'),
        'subtitle' => tr('programs.electro.subtitle'),
        'video' => '/assets/videos/elektro.mp4',
        'profiles' => [
            'computer_tech' => [
                'name' => tr('programs.electro.profiles.computer_tech.name'),
                'description' => $splitDesc(tr('programs.electro.profiles.computer_tech.description')),
                'years' => 4,
                'points' => 60,
                'student_count' => tr('programs.electro.profiles.computer_tech.student_count'),
                'class_count' => tr('programs.electro.profiles.computer_tech.class_count'),
            ],
            'energetics' => [
                'name' => tr('programs.electro.profiles.energetics.name'),
                'description' => $splitDesc(tr('programs.electro.profiles.energetics.description')),
                'years' => 4,
                'points' => 45,
                'dual' => true,
                'student_count' => tr('programs.electro.profiles.energetics.student_count'),
                'class_count' => tr('programs.electro.profiles.energetics.class_count'),
                'partners' => ['tm_doo.png', 'jp_hidrosistem_zletovica.png', 'jole_dooel.png', 'drvodekor_enterier.jpg', 'elektrodistribucija.jpg', 'zdvil_lion.png'],
            ],
            'electronics' => [
                'name' => tr('programs.electro.profiles.electronics.name'),
                'description' => $splitDesc(tr('programs.electro.profiles.electronics.description')),
                'years' => 4,
                'points' => 50,
                'student_count' => tr('programs.electro.profiles.electronics.student_count'),
                'class_count' => tr('programs.electro.profiles.electronics.class_count'),
            ],
        ],
    ],
    'machine' => [
        'title' => tr('programs.machine.title'),
        'subtitle' => tr('programs.machine.subtitle'),
        'video' => '/assets/videos/mashinska.mp4',
        'profiles' => [
            'cnc' => [
                'name' => tr('programs.machine.profiles.cnc.name'),
                'description' => $splitDesc(tr('programs.machine.profiles.cnc.description')),
                'years' => 4,
                'points' => 45,
                'dual' => true,
                'student_count' => tr('programs.machine.profiles.cnc.student_count'),
                'class_count' => tr('programs.machine.profiles.cnc.class_count'),
                'partners' => ['tm_doo.png', 'aktiva_doo.jpg'],
            ],
            'vehicles' => [
                'name' => tr('programs.machine.profiles.vehicles.name'),
                'description' => $splitDesc(tr('programs.machine.profiles.vehicles.description')),
                'years' => 4,
                'points' => 45,
                'student_count' => tr('programs.machine.profiles.vehicles.student_count'),
                'class_count' => tr('programs.machine.profiles.vehicles.class_count'),
            ],
            'mechanic' => [
                'name' => tr('programs.machine.profiles.mechanic.name'),
                'description' => $splitDesc(tr('programs.machine.profiles.mechanic.description')),
                'years' => 3,
                'points' => 30,
                'student_count' => tr('programs.machine.profiles.mechanic.student_count'),
                'class_count' => tr('programs.machine.profiles.mechanic.class_count'),
            ],
        ],
    ],
    'hospitality' => [
        'title' => tr('programs.hospitality.title'),
        'subtitle' => tr('programs.hospitality.subtitle'),
        'video' => '/assets/videos/ugostitelstvo.mp4',
        'profiles' => [
            'waiter_cook' => [
                'name' => tr('programs.hospitality.profiles.waiter_cook.name'),
                'description' => $splitDesc(tr('programs.hospitality.profiles.waiter_cook.description')),
                'years' => 3,
                'points' => 30,
                'student_count' => tr('programs.hospitality.profiles.waiter_cook.student_count'),
                'class_count' => tr('programs.hospitality.profiles.waiter_cook.class_count'),
            ],
        ],
    ],
    'trained_for' => tr('programs.trained_for'),
    'watch_video' => tr('programs.watch_video'),
    'partner_companies' => tr('programs.partner_companies'),
    'years' => tr('programs.years'),
    'min_points' => tr('programs.min_points'),
    'dual_class' => tr('programs.dual_class'),
    'students' => tr('programs.students'),
    'classes' => tr('programs.classes'),
];
@endphp

@include('partials.header')

<main class="w-full flex-grow">
    <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
        <div class="max-w-5xl mx-auto px-6 py-14">
            <h1 class="text-3xl font-semibold text-onSurface">{{ tr('programs.title') }}</h1>
        </div>
    </section>

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

    <section class="py-16 px-6 max-w-5xl mx-auto space-y-14">
        <!-- Electro -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">{{ $programs_data['electro']['title'] }} &mdash; {{ $programs_data['electro']['subtitle'] }}</h2>
            
            <details class="border border-surfaceContainer group">
                <summary class="p-4 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <span class="text-base font-medium flex items-center gap-2">
                        <i class="ti ti-player-play text-onSurface/60"></i>
                        {{ $programs_data['watch_video'] }}
                    </span>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-4 pb-4 border-t border-surfaceContainer">
                    <div class="aspect-video max-w-2xl mx-auto w-full mt-4">
                        <video controls class="w-full h-full object-contain rounded-sm bg-black">
                            <source src="{{ $programs_data['electro']['video'] }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </details>
            
            @foreach($programs_data['electro']['profiles'] as $profile)
            <div class="border border-surfaceContainer p-5">
                <span class="text-base font-medium">{{ $profile['name'] }}</span>
                <div class="flex flex-wrap gap-2 mt-2">
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ $profile['years'] }} {{ str_replace(':n ', '', $programs_data['years']) }}</span>
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ str_replace(':points ', '', $programs_data['min_points']) }} {{ $profile['points'] }}</span>
                    @if(isset($profile['dual']))
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ $programs_data['dual_class'] }}</span>
                    @endif
                </div>
                <p class="text-sm text-onSurface/70 mt-3">{{ $programs_data['trained_for'] }}</p>
                <ul class="list-disc pl-5 mt-2 space-y-1 text-sm text-onSurface/70">
                    @foreach($profile['description'] as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
                @if(isset($profile['partners']))
                <p class="text-sm font-medium text-onSurface mt-3">{{ $programs_data['partner_companies'] }}</p>
                <div class="mt-2 flex gap-4 items-center flex-wrap">
                    @foreach($profile['partners'] as $partner)
                    <img src="/assets/images/companies/{{ $partner }}" alt="" class="h-8 w-auto object-contain">
                    @endforeach
                </div>
                @endif
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ $profile['student_count'] }} {{ $programs_data['students'] }}</span>
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ $profile['class_count'] }} {{ $programs_data['classes'] }}</span>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Machine -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">{{ $programs_data['machine']['title'] }} &mdash; {{ $programs_data['machine']['subtitle'] }}</h2>
            
            <details class="border border-surfaceContainer group">
                <summary class="p-4 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <span class="text-base font-medium flex items-center gap-2">
                        <i class="ti ti-player-play text-onSurface/60"></i>
                        {{ $programs_data['watch_video'] }}
                    </span>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-4 pb-4 border-t border-surfaceContainer">
                    <div class="aspect-video max-w-2xl mx-auto w-full mt-4">
                        <video controls class="w-full h-full object-contain rounded-sm bg-black">
                            <source src="{{ $programs_data['machine']['video'] }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </details>
            
            @foreach($programs_data['machine']['profiles'] as $profile)
            <div class="border border-surfaceContainer p-5">
                <span class="text-base font-medium">{{ $profile['name'] }}</span>
                <div class="flex flex-wrap gap-2 mt-2">
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ $profile['years'] }} {{ str_replace(':n ', '', $programs_data['years']) }}</span>
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ str_replace(':points ', '', $programs_data['min_points']) }} {{ $profile['points'] }}</span>
                    @if(isset($profile['dual']))
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ $programs_data['dual_class'] }}</span>
                    @endif
                </div>
                <p class="text-sm text-onSurface/70 mt-3">{{ $programs_data['trained_for'] }}</p>
                <ul class="list-disc pl-5 mt-2 space-y-1 text-sm text-onSurface/70">
                    @foreach($profile['description'] as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
                @if(isset($profile['partners']))
                <p class="text-sm font-medium text-onSurface mt-3">{{ $programs_data['partner_companies'] }}</p>
                <div class="mt-2 flex gap-4 items-center flex-wrap">
                    @foreach($profile['partners'] as $partner)
                    <img src="/assets/images/companies/{{ $partner }}" alt="" class="h-8 w-auto object-contain">
                    @endforeach
                </div>
                @endif
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ $profile['student_count'] }} {{ $programs_data['students'] }}</span>
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ $profile['class_count'] }} {{ $programs_data['classes'] }}</span>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Hospitality -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">{{ $programs_data['hospitality']['title'] }} &mdash; {{ $programs_data['hospitality']['subtitle'] }}</h2>
            
            <details class="border border-surfaceContainer group">
                <summary class="p-4 cursor-pointer flex items-center justify-between text-onSurface hover:bg-surfaceContainer/30 transition-colors">
                    <span class="text-base font-medium flex items-center gap-2">
                        <i class="ti ti-player-play text-onSurface/60"></i>
                        {{ $programs_data['watch_video'] }}
                    </span>
                    <span class="text-onSurface/40 group-open:rotate-180 transition-transform text-sm">&darr;</span>
                </summary>
                <div class="px-4 pb-4 border-t border-surfaceContainer">
                    <div class="aspect-[9/16] max-w-sm mx-auto w-full mt-4">
                        <video controls class="w-full h-full object-contain rounded-sm bg-black">
                            <source src="{{ $programs_data['hospitality']['video'] }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </details>
            
            @foreach($programs_data['hospitality']['profiles'] as $profile)
            <div class="border border-surfaceContainer p-5">
                <span class="text-base font-medium">{{ $profile['name'] }}</span>
                <div class="flex flex-wrap gap-2 mt-2">
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ $profile['years'] }} {{ str_replace(':n ', '', $programs_data['years']) }}</span>
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-sm">{{ str_replace(':points ', '', $programs_data['min_points']) }} {{ $profile['points'] }}</span>
                </div>
                <p class="text-sm text-onSurface/70 mt-3">
                    @foreach($profile['description'] as $item)
                    {{ $item }}
                    @endforeach
                </p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ $profile['student_count'] }} {{ $programs_data['students'] }}</span>
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-surfaceContainer text-onSurface text-xs font-semibold rounded-sm">{{ $profile['class_count'] }} {{ $programs_data['classes'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</main>

@include('partials.footer')