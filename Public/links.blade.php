@include('partials.header')

<main class="w-full flex-grow">
    <!-- Header -->
    <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
        <div class="max-w-5xl mx-auto px-6 py-14">
            <h1 class="text-3xl font-semibold text-onSurface">{{ tr('links.title') }}</h1>
            <p class="text-base text-onSurface/60 mt-2">{{ tr('links.subtitle') }}</p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 px-6 max-w-5xl mx-auto space-y-14">

        <!-- External Links -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">{{ tr('links.useful_links') }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <a href="https://bro.gov.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
                    <div class="flex items-center gap-3">
                        <i class="ti ti-building-community text-primary text-xl"></i>
                        <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.external.bro') }}</span>
                    </div>
                </a>
                <a href="http://matura.gov.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
                    <div class="flex items-center gap-3">
                        <i class="ti ti-certificate text-primary text-xl"></i>
                        <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.external.exam_center') }}</span>
                    </div>
                </a>
                <a href="https://ednevnik.edu.mk/Account/Login?ReturnUrl=%2f" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
                    <div class="flex items-center gap-3">
                        <i class="ti ti-book text-primary text-xl"></i>
                        <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.external.e_dnevnik') }}</span>
                    </div>
                </a>
                <a href="https://www.e-matematika.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
                    <div class="flex items-center gap-3">
                        <i class="ti ti-calculator text-primary text-xl"></i>
                        <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.external.e_math') }}</span>
                    </div>
                </a>
                <a href="https://e-ucebnici.mon.gov.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
                    <div class="flex items-center gap-3">
                        <i class="ti ti-book-2 text-primary text-xl"></i>
                        <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.external.e_books') }}</span>
                    </div>
                </a>
                <a href="https://massum.org/mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
                    <div class="flex items-center gap-3">
                        <i class="ti ti-users text-primary text-xl"></i>
                        <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.external.massum') }}</span>
                    </div>
                </a>
                <a href="https://mon.gov.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
                    <div class="flex items-center gap-3">
                        <i class="ti ti-building text-primary text-xl"></i>
                        <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.external.mon') }}</span>
                    </div>
                </a>
                <a href="https://www.csoo.edu.mk/" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-4 hover:bg-surfaceContainer/50 transition-colors group">
                    <div class="flex items-center gap-3">
                        <i class="ti ti-school text-primary text-xl"></i>
                        <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.external.csoo') }}</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Graduation Exams -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">{{ tr('links.graduation_exams') }}</h2>
            <p class="text-sm text-onSurface/60 -mt-2 mb-3">{{ tr('links.graduation_exams_subtitle') }}</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%90%D0%B2%D1%82%D0%BE%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0-%D0%B5%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B0%D1%80-%D0%B5%D0%BD%D0%B5%D1%80%D0%B3%D0%B5%D1%82%D0%B8%D1%87%D0%B0%D1%80.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.auto_energetics') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%90%D0%B2%D1%82%D0%BE%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0-%D0%B7%D0%B0-%D0%9A%D0%A2%D0%90.pdf" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.auto_hta') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%90%D0%B3%D0%B5%D0%BD%D1%86%D0%B8%D1%81%D0%BA%D0%BE-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B5%D1%9A%D0%B5.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.agency') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D1%81%D0%BA%D0%B8-%D1%98%D0%B0%D0%B7%D0%B8%D0%BA-%D0%B4%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.english') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2023/05/%D0%9F%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%B7%D0%B0-%D0%BF%D0%BE%D0%BB%D0%B0%D0%B3%D0%B0%D1%9A%D0%B5-%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0-%D0%BF%D0%BE-%D0%BF%D1%80%D0%B5%D0%B4%D0%BC%D0%B5%D1%82%D0%B8%D1%82%D0%B5-%D0%90%D1%83%D0%B4%D0%B8%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0-%D0%B8-%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0-%D1%98%D1%83%D0%BD%D0%B82023.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.audio_video') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%91%D0%B8%D0%B7%D0%BD%D0%B8%D1%81-%D0%B4%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.business') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%92%D0%BE%D0%B7%D0%B8%D0%BB%D0%B0-%D0%B8-%D0%BC%D0%B5%D1%85%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%98%D0%B0.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.vehicles') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%94%D0%B8%D0%B3%D0%B8%D1%82%D0%B0%D0%BB%D0%BD%D0%B0-%D0%B5%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%B8%D0%BA%D0%B0-%D0%B8-%D0%BC%D0%B8%D0%BA%D1%80%D0%BE%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D0%BE%D1%80%D0%B8.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.digital_electronics') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%94%D0%B8%D0%B3%D0%B8%D1%82%D0%B0%D0%BB%D0%BD%D0%B8-%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B8.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.digital_systems') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%95%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%B8%D1%87%D0%BD%D0%B8-%D0%B0%D0%BF%D0%B0%D1%80%D0%B0%D1%82%D0%B8-%D0%B8-%D1%83%D1%80%D0%B5%D0%B4%D0%B8.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.electrical_appliances') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%95%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0-%D0%BC%D0%B0%D1%88%D0%B8%D0%BD%D1%81%D0%BA%D0%B0-%D1%81%D1%82%D1%80%D1%83%D0%BA%D0%B0.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.electrical_machine') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%98%D0%B0-%D0%B4%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.history') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2023/05/%D0%91%D0%B0%D0%B7%D0%B5%D0%BD-%D0%BD%D0%B0-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%B7%D0%B0-%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D0%BD-%D0%BF%D1%80%D0%B5%D0%B4%D0%BC%D0%B5%D1%82-%D0%BF%D0%BE-%D0%BC%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0-%D0%B4%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0-%D0%96%D0%B0%D0%BA%D0%BB%D0%B8%D0%BD%D0%B0-1.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.math') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%B8%D1%80%D0%B0%D1%9A%D0%B5-%D0%B7%D0%B0-%D0%9A%D0%A2%D0%90.pdf" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.programming_hta') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%B8%D1%80%D0%B0%D1%9A%D0%B5-%D0%B7%D0%B0-%D0%BA%D0%BE%D0%BC%D0%BF%D1%98%D1%83%D1%82%D0%B5%D1%80%D1%81%D0%BA%D0%BE-%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D1%83%D0%B2%D0%B0%D0%BD%D0%B8-%D0%BC%D0%B0%D1%88%D0%B8%D0%BD%D0%B8.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.programming_cnc') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A2%D0%B5%D0%BB%D0%B5%D0%BA%D0%BE%D0%BC%D1%83%D0%BD%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%81%D0%BA%D0%B8-%D1%81%D0%BA%D0%BB%D0%BE%D0%BF%D0%BE%D0%B2%D0%B8-%D0%B8-%D1%83%D1%80%D0%B5%D0%B4%D0%B8.pdf" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.telecommunications') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A2%D0%B5%D1%80%D0%BC%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.thermo') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A2%D0%B5%D1%85%D0%BD%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%98%D0%B0-%D0%BD%D0%B0-%D0%BC%D0%BE%D1%82%D0%BE%D1%80%D0%BD%D0%B8-%D0%B2%D0%BE%D0%B7%D0%B8%D0%BB%D0%B0.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.vehicle_tech') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A4%D0%B8%D0%B7%D0%B8%D0%BA%D0%B0-%D0%B4%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B0-%D0%BC%D0%B0%D1%82%D1%83%D1%80%D0%B0.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.physics') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A5%D0%B8%D0%B4%D1%80%D0%BE%D0%BF%D0%BD%D0%B5%D0%B2%D0%BC%D0%B0%D1%82%D1%81%D0%BA%D0%B0-%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0.doc" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.hydro_pneumatic') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2021/05/%D0%9C%D0%B0%D1%82%D1%83%D1%80%D1%81%D0%BA%D0%B8-%D0%B8%D1%81%D0%BF%D0%B8%D1%82%D0%BD%D0%B8-%D0%BF%D1%80%D0%B0%D1%88%D0%B0%D1%9A%D0%B0-%D0%BF%D0%BE-%D0%A5%D0%BE%D1%82%D0%B5%D0%BB%D1%81%D0%BA%D0%BE-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B5%D1%9A%D0%B5.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.hotel') }}</span>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2023/04/Document-72.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group text-sm">
                    <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.graduation.macedonian') }}</span>
                </a>
            </div>
        </div>

        <!-- Awards -->
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3">{{ tr('links.awards') }}</h2>
            <p class="text-sm text-onSurface/60 -mt-2 mb-3">{{ tr('links.awards_subtitle') }}</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2017/03/%D0%9E%D1%81%D0%B2%D0%BE%D0%B5%D0%BD%D0%B8%D1%82%D0%B5-%D0%BD%D0%B0%D0%B3%D1%80%D0%B0%D0%B4%D0%B8-%D0%B8-%D0%BF%D1%80%D0%B8%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D1%98%D0%B0-2014-15.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group">
                    <div class="flex items-center gap-3">
                        <i class="ti ti-trophy text-primary text-lg"></i>
                        <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.awards_years.2014_15') }}</span>
                    </div>
                </a>
                <a href="https://kolenehtenin.edu.mk/wp-content/uploads/2017/03/%D0%9E%D1%81%D0%B2%D0%BE%D0%B5%D0%BD%D0%B8%D1%82%D0%B5-%D0%BD%D0%B0%D0%B3%D1%80%D0%B0%D0%B4%D0%B8-%D0%B8-%D0%BF%D1%80%D0%B8%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D1%98%D0%B0-2015-16.docx" target="_blank" rel="noopener noreferrer" class="border border-surfaceContainer p-3 hover:bg-surfaceContainer/50 transition-colors group">
                    <div class="flex items-center gap-3">
                        <i class="ti ti-trophy text-primary text-lg"></i>
                        <span class="text-onSurface group-hover:text-primary transition-colors">{{ tr('links.awards_years.2015_16') }}</span>
                    </div>
                </a>
            </div>
        </div>

    </section>
</main>

@include('partials.footer')