@include('partials.header')

<main class="w-full flex-grow">
    <section class="flex flex-col items-center justify-center py-32 px-6 text-center">
        <h1 class="text-7xl font-semibold text-onSurface/10">404</h1>
        <h2 class="text-xl font-semibold text-onSurface mt-4">{{ tr('error.404_title') }}</h2>
        <p class="text-base text-onSurface/50 mt-2 max-w-md">{{ tr('error.404_message') }}</p>
        <a href="/home" class="mt-8 inline-flex items-center px-6 py-2.5 bg-primary text-onPrimary text-sm font-medium rounded-sm hover:opacity-90 transition-opacity">
            {{ tr('error.back_home') }}
        </a>
    </section>
</main>

@include('partials.footer')