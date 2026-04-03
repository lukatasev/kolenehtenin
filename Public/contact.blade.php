@include('partials.header')

<main class="w-full flex-grow">
    <!-- Header -->
    <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
        <div class="max-w-5xl mx-auto px-6 py-14">
            <h1 class="text-3xl font-semibold text-onSurface">Контакт</h1>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 px-6 max-w-5xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="space-y-8">
                <div class="flex items-start gap-3">
                    <span class="material-symbols-outlined text-onSurface/40 text-[22px] mt-0.5">location_on</span>
                    <div>
                        <h3 class="text-sm font-semibold text-onSurface uppercase tracking-wider mb-1">Адреса</h3>
                        <p class="text-onSurface/70">Булевар Гоце Делчев бр. 101<br>2000 Штип, Македонија</p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <span class="material-symbols-outlined text-onSurface/40 text-[22px] mt-0.5">call</span>
                    <div>
                        <h3 class="text-sm font-semibold text-onSurface uppercase tracking-wider mb-1">Телефон</h3>
                        <p class="text-onSurface/70">
                            <a href="tel:+38932391384" class="hover:text-onSurface transition-colors">+389 32 391 384</a><br>
                            <a href="tel:+38932607384" class="hover:text-onSurface transition-colors">+389 32 607 384</a>
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <span class="material-symbols-outlined text-onSurface/40 text-[22px] mt-0.5">mail</span>
                    <div>
                        <h3 class="text-sm font-semibold text-onSurface uppercase tracking-wider mb-1">Е-пошта</h3>
                        <p class="text-onSurface/70">
                            <a href="mailto:kontakt@kolenehtenin.edu.mk" class="hover:text-onSurface transition-colors">kontakt@kolenehtenin.edu.mk</a><br>
                            <a href="mailto:kontakt.kolenehtenin@gmail.com" class="hover:text-onSurface transition-colors">kontakt.kolenehtenin@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2962.5!2d22.195!3d41.735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDFCsDQ0JzA2LjAiTiAyMsKwMTEnNDIuMCJF!5e0!3m2!1sen!2smk!4v1" 
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    class="rounded-sm border border-surfaceContainer">
                </iframe>
            </div>
        </div>
    </section>
</main>

@include('partials.footer')
