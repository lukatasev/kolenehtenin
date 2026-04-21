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
                    <i class="ti ti-map-pin text-onSurface/40 text-[22px] mt-0.5"></i>
                    <div>
                        <h3 class="text-sm font-semibold text-onSurface uppercase tracking-wider mb-1">Адреса</h3>
                        <p class="text-onSurface/70">Булевар Гоце Делчев бр. 101<br>2000 Штип, Македонија</p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <i class="ti ti-phone text-onSurface/40 text-[22px] mt-0.5"></i>
                    <div>
                        <h3 class="text-sm font-semibold text-onSurface uppercase tracking-wider mb-1">Телефон</h3>
                        <p class="text-onSurface/70">
                            <a href="tel:+38932391384" class="hover:text-onSurface transition-colors">+389 32 391 384</a><br>
                            <a href="tel:+38932607384" class="hover:text-onSurface transition-colors">+389 32 607 384</a>
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <i class="ti ti-mail text-onSurface/40 text-[22px] mt-0.5"></i>
                    <div>
                        <h3 class="text-sm font-semibold text-onSurface uppercase tracking-wider mb-1">Е-пошта</h3>
                        <p class="text-onSurface/70">
                            <a href="mailto:kontakt@kolenehtenin.edu.mk" class="hover:text-onSurface transition-colors">kontakt@kolenehtenin.edu.mk</a><br>
                            <a href="mailto:kontakt.kolenehtenin@gmail.com" class="hover:text-onSurface transition-colors">kontakt.kolenehtenin@gmail.com</a>
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <i class="ti ti-share text-onSurface/40 text-[22px] mt-0.5"></i>
                    <div>
                        <h3 class="text-sm font-semibold text-onSurface uppercase tracking-wider mb-1">Социјални мрежи</h3>
                        <div class="flex gap-3 text-onSurface/70">
                            <a href="https://www.facebook.com/skolenehtenin" target="_blank" rel="noopener noreferrer" class="hover:text-onSurface transition-colors flex items-center gap-1">
                                <i class="ti ti-brand-facebook text-[20px]"></i>
                                Facebook
                            </a>
                            <a href="https://www.instagram.com/dsu_rcsoo_kole.nehtenin" target="_blank" rel="noopener noreferrer" class="hover:text-onSurface transition-colors flex items-center gap-1">
                                <i class="ti ti-brand-instagram text-[20px]"></i>
                                Instagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div>
            <iframe
                    src="https://www.google.com/maps?q=Bul.%20Goce%20Delchev%20101,%20Štip&output=embed"
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
