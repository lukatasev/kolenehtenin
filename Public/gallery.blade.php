@include('partials.header')

@php
$images = [
    "/assets/images/school_photo1.jpg",
    "/assets/images/school_photo2.jpg",
    "/assets/images/classroom1.jpg",
    "/assets/images/classroom2.jpg",
    "/assets/images/classroom_with_pcs.jpg",
    "/assets/images/day_of_school1.jpg",
    "/assets/images/day_of_school2.jpg",
    "/assets/images/main_hall1.jpg",
    "/assets/images/main_hall_from_above.jpg",
    "/assets/images/floor2hall.jpg",
];
@endphp

<main class="w-full flex-grow">
    <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
        <div class="max-w-5xl mx-auto px-6 py-14">
            <h1 class="text-3xl font-semibold text-onSurface">Галерија</h1>
            <p class="text-base text-onSurface/60 mt-2">Нашите фотографии од училиштето</p>
        </div>
    </section>

    <section class="py-12 px-6 max-w-5xl mx-auto">
        @if(!empty($images))
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($images as $img)
            <div class="border border-surfaceContainer bg-surface overflow-hidden rounded-sm">
                <img src="{{ $img }}" alt="{{ basename($img) }}" class="w-full h-48 object-cover cursor-pointer" data-lightbox loading="lazy" />
            </div>
            @endforeach
        </div>
        @else
        <p class="text-onSurface/60 text-center py-12">No images available</p>
        @endif
    </section>
    
</main>

@include('partials.footer')
