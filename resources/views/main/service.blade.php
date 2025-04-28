<x-layouts.main>
    <!-- ...::: Breadcrumb Section Start :::... -->
    <section class="section-breadcrumb">
        <!-- Breadcrumb Background -->
        <div class="bg-black">
            <!-- Breadcrumb Space -->
            <div class="breadcrumb-space">
                <!-- Section Container -->
                <div class="container">
                    <div class="breadcrumb-block">
                        <h1>Layanan</h1>
                        <!-- Breadcrumb Nav -->
                        <ul class="breadcrumb-nav">
                            <li>
                                <a href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li>Layanan</li>
                        </ul>
                        <!-- Breadcrumb Nav -->
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Breadcrumb Space -->
        </div>
        <!-- Breadcrumb Background -->
    </section>
    <!-- ...::: Breadcrumb Section End :::... -->

    <!-- ...::: Service Section Start :::... -->
    <section class="section-service">
        <!-- Section Background -->
        <div class="bg-colorIvory">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container">
                    <!-- Section Block -->
                    <div class="section-block mx-auto mb-10 max-w-[650px] text-center md:mb-[60px] xl:mb-20 xl:max-w-[856px]">
                        <h2 class="jos">
                            Layanan Profesional Jasa Pembuatan Website
                            <span>
                                <img src="{{ asset('assets/img/elemnts/shape-light-lime-5-arms-star.svg') }}" alt="shape-light-lime-5-arms-star" width="74" height="70" class="relative inline-block h-auto w-8 after:bg-black md:w-10 lg:w-[57px] animate-spin animate-infinite" />
                            </span>
                        </h2>
                    </div>
                    <!-- Section Block -->

                    <!-- Service List -->
                    <ul class="grid grid-cols-1 gap-[30px] lg:grid-cols-2">
                        @forelse($services as $index => $service)
                            <!-- Service Item -->
                            <li class="{{ $index === 0 ? 'jos group/team-item' : 'jos' }}" data-jos_delay="{{ number_format($index * 0.3, 1) }}">
                                <div class="shadow-bg group h-full">
                                    <div class="flex h-full flex-col items-start overflow-hidden rounded-[20px] border-2 border-black bg-colorIvory p-[30px] transition duration-300 group-hover:bg-colorLightLime">
                                        <flux:icon name="{{ $service->icon }}" width="64" height="70" class="h-[70px]! w-auto!" />
                                        <h4 class="mb-[15px] mt-[30px]">{{ $service->title }}</h4>
                                        <p class="mb-7">
                                            {{ $service->description }}
                                        </p>
                                        <a href="{{ route('services.show', $service->slug) }}" class="mt-auto inline-block translate-x-0 transition-all duration-300 group-hover:translate-x-5">
                                            <img src="{{ asset('assets/img/icons/icon-black-arrow-right.svg') }}" alt="icon-black-arrow-right" width="34" height="28" />
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="col-span-2 text-center py-10">
                                <p>No services available at the moment.</p>
                            </li>
                        @endforelse
                    </ul>
                    <!-- Service List -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
        <!-- Section Background -->
    </section>
    <!-- ...::: Service Section end :::... -->

    <!-- ...::: Text Slider Section Start :::... -->
    <div class="section-text-slider">
        <div class="bg-black py-5">
            <div class="horizontal-slide-from-right-to-left flex items-center gap-x-6">
                <!-- Text Slider Item Text-->
                <div class="whitespace-nowrap font-syne text-[35px] font-bold leading-none tracking-[1px] text-colorLightLime">
                    Let's create new experiences
                </div>
                <!-- Text Slider Item Text -->
                <!-- Text Slider Separator Icon -->
                <div class="h-10 min-w-[42px]">
                    <img src="assets/img/elemnts/shape-light-lime-5-arms-star.svg" alt="shape-light-lime-5-arms-star" width="74" height="70" class="h-10 w-auto" />
                </div>
                <!-- Text Slider Separator Icon -->
                <!-- Text Slider Item Text-->
                <div class="whitespace-nowrap font-syne text-[35px] font-bold leading-none tracking-[1px] text-colorLightLime">
                    Let's create new experiences
                </div>
                <!-- Text Slider Item Text -->
                <!-- Text Slider Separator Icon -->
                <div class="h-10 min-w-[42px]">
                    <img src="assets/img/elemnts/shape-light-lime-5-arms-star.svg" alt="shape-light-lime-5-arms-star" width="74" height="70" class="h-10 w-auto" />
                </div>
                <!-- Text Slider Separator Icon -->
                <!-- Text Slider Item Text-->
                <div class="whitespace-nowrap font-syne text-[35px] font-bold leading-none tracking-[1px] text-colorLightLime">
                    Let's create new experiences
                </div>
                <!-- Text Slider Item Text -->
                <!-- Text Slider Separator Icon -->
                <div class="h-10 min-w-[42px]">
                    <img src="assets/img/elemnts/shape-light-lime-5-arms-star.svg" alt="shape-light-lime-5-arms-star" width="74" height="70" class="h-10 w-auto" />
                </div>
                <!-- Text Slider Separator Icon -->
                <!-- Text Slider Item Text-->
                <div class="whitespace-nowrap font-syne text-[35px] font-bold leading-none tracking-[1px] text-colorLightLime">
                    Let's create new experiences
                </div>
                <!-- Text Slider Item Text -->
                <!-- Text Slider Separator Icon -->
                <div class="h-10 min-w-[42px]">
                    <img src="assets/img/elemnts/shape-light-lime-5-arms-star.svg" alt="shape-light-lime-5-arms-star" width="74" height="70" class="h-10 w-auto" />
                </div>
                <!-- Text Slider Separator Icon -->
                <!-- Text Slider Item Text-->
                <div class="whitespace-nowrap font-syne text-[35px] font-bold leading-none tracking-[1px] text-colorLightLime">
                    Let's create new experiences
                </div>
                <!-- Text Slider Item Text -->
                <!-- Text Slider Separator Icon -->
                <div class="h-10 min-w-[42px]">
                    <img src="assets/img/elemnts/shape-light-lime-5-arms-star.svg" alt="shape-light-lime-5-arms-star" width="74" height="70" class="h-10 w-auto" />
                </div>
                <!-- Text Slider Separator Icon -->
                <!-- Text Slider Item Text-->
                <div class="whitespace-nowrap font-syne text-[35px] font-bold leading-none tracking-[1px] text-colorLightLime">
                    Let's create new experiences
                </div>
                <!-- Text Slider Item Text -->
                <!-- Text Slider Separator Icon -->
                <div class="h-10 min-w-[42px]">
                    <img src="assets/img/elemnts/shape-light-lime-5-arms-star.svg" alt="shape-light-lime-5-arms-star" width="74" height="70" class="h-10 w-auto" />
                </div>
                <!-- Text Slider Separator Icon -->
            </div>
        </div>
    </div>
    <!-- ...::: Text Slider Section End :::... -->

    <!-- ...::: Process Section Start :::... -->
    <section class="section-process">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container">
                <!-- Process Area -->
                <div class="grid grid-cols-1 items-center gap-y-10 lg:grid-cols-2 lg:gap-x-8 xl:grid-cols-[1fr_minmax(0,0.67fr)] xxl:gap-x-[72px]">
                    <!-- Process Area Left Block - Section Block -->
                    <div class="section-block text-center lg:text-start">
                        <h2 class="jos">
                            Our
                            <span>
                                        high-quality
                                        <img src="assets/img/elemnts/shape-light-lime-5-arms-star.svg" alt="shape-light-lime-5-arms-star" width="74" height="70" class="relative inline-block h-auto w-8 after:bg-black md:w-10 lg:w-[57px]" />
                                    </span>
                            working processes
                        </h2>
                        <div class="jos mt-6">
                            <p class="section-para">
                                We focus at every stage on effective communication and
                                collaboration between the client and ensuring that the
                                final design meets the client's objectives and
                                expectations.
                            </p>

                            <p class="section-para">
                                It is important to note that these are simplified steps,
                                and the actual work process may vary depending on the
                                complexity of the project.
                            </p>
                        </div>
                    </div>
                    <!-- Process Area Left Block - Section Block -->

                    <!-- Process Area Right Block - Accordion -->
                    <!-- Accordion List -->
                    <ul class="jos flex flex-col gap-y-6">
                        <!-- Accordion Item -->
                        <li class="accordion-item-style-1 accordion-item active">
                            <!-- Accordion Header -->
                            <div class="accordion-header text-ColorBlack flex items-center justify-between gap-6 text-xl font-semibold">
                                <button class="flex-1 text-left font-syne text-2xl font-bold leading-[1.4] md:text-3xl">
                                    01/ Project idea
                                </button>
                                <div class="accordion-icon">
                                    <img src="assets/img/icons/icon-black-arrow-less-down.svg" alt="icon-black-arrow-less-down" />
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    The process starts with a detailed discussion with the
                                    client to understand their idea & goals.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item-style-1 accordion-item">
                            <!-- Accordion Header -->
                            <div class="accordion-header text-ColorBlack flex items-center justify-between gap-6 text-xl font-semibold">
                                <button class="flex-1 text-left font-syne text-2xl font-bold leading-[1.4] md:text-3xl">
                                    02/ Brainstorming
                                </button>
                                <div class="accordion-icon">
                                    <img src="assets/img/icons/icon-black-arrow-less-down.svg" alt="icon-black-arrow-less-down" />
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    The process starts with a detailed discussion with the
                                    client to understand their idea & goals.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item-style-1 accordion-item">
                            <!-- Accordion Header -->
                            <div class="accordion-header text-ColorBlack flex items-center justify-between gap-6 text-xl font-semibold">
                                <button class="flex-1 text-left font-syne text-2xl font-bold leading-[1.4] md:text-3xl">
                                    03/ Launch
                                </button>
                                <div class="accordion-icon">
                                    <img src="assets/img/icons/icon-black-arrow-less-down.svg" alt="icon-black-arrow-less-down" />
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    The process starts with a detailed discussion with the
                                    client to understand their idea & goals.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                    </ul>
                    <!-- Accordion List -->
                    <!-- Process Area Right Block - Accordion -->
                </div>
                <!-- Process Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!-- ...::: Process Section End :::... -->

    <!-- ...::: FAQ Section Start :::... -->
    <section class="section-faq">
        <!-- Section Space -->
        <div class="section-space-bottom">
            <!-- Section Container -->
            <div class="container">
                <!-- Section Block -->
                <div class="section-block mx-auto mb-10 max-w-[650px] text-center md:mb-[60px] xl:mb-20 xl:max-w-[856px]">
                    <h2 class="jos">
                        These FAQs help
                        <span>
                                    <img src="assets/img/elemnts/shape-light-lime-5-arms-star.svg" alt="shape-light-lime-5-arms-star" width="74" height="70" class="relative inline-block h-auto w-8 after:bg-black md:w-10 lg:w-[57px]" />
                                </span>
                        clients learn about us
                    </h2>
                </div>
                <!-- Section Block -->

                <!-- FAQ Area -->
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 lg:grid-cols-2">
                    <!-- FAQ List -->
                    <ul class="flex flex-col gap-y-10">
                        <!-- FAQ Item -->
                        <li class="jos flex flex-col gap-y-4">
                            <!-- FAQ Header Block -->
                            <h4 class="relative pl-10 before:absolute before:left-0 before:top-1 before:h-[30px] before:w-[30px] before:bg-[url(../img/icons/icon-lightlime-question.svg)]">
                                What services does agency offer?
                            </h4>
                            <!-- FAQ Header Block -->
                            <!-- FAQ Body -->
                            <div class="ml-10 text-[#0C0C0C]">
                                <p>
                                    Clients often seek to understand the range of design
                                    services an agency provides, such as graphic design, web
                                    design, branding.
                                </p>
                            </div>
                            <!-- FAQ Body -->
                        </li>
                        <!-- FAQ Item -->
                        <!-- FAQ Item -->
                        <li class="jos flex flex-col gap-y-4">
                            <!-- FAQ Header Block -->
                            <h4 class="relative pl-10 before:absolute before:left-0 before:top-1 before:h-[30px] before:w-[30px] before:bg-[url(../img/icons/icon-lightlime-question.svg)]">
                                What is your design process like?
                            </h4>
                            <!-- FAQ Header Block -->
                            <!-- FAQ Body -->
                            <div class="ml-10 text-[#0C0C0C]">
                                <p>
                                    Explaining the design agency's process from initial
                                    concept to final delivery helps clients understand what
                                    to expect.
                                </p>
                            </div>
                            <!-- FAQ Body -->
                        </li>
                        <!-- FAQ Item -->
                        <!-- FAQ Item -->
                        <li class="jos flex flex-col gap-y-4">
                            <!-- FAQ Header Block -->
                            <h4 class="relative pl-10 before:absolute before:left-0 before:top-1 before:h-[30px] before:w-[30px] before:bg-[url(../img/icons/icon-lightlime-question.svg)]">
                                How much does design work cost?
                            </h4>
                            <!-- FAQ Header Block -->
                            <!-- FAQ Body -->
                            <div class="ml-10 text-[#0C0C0C]">
                                <p>
                                    The cost of our design services varies depending on the
                                    scope of the project. We provide customized quotes after
                                    discussing requirements.
                                </p>
                            </div>
                            <!-- FAQ Body -->
                        </li>
                        <!-- FAQ Item -->
                    </ul>
                    <!-- FAQ List -->

                    <!-- FAQ List -->
                    <ul class="flex flex-col gap-y-10">
                        <!-- FAQ Item -->
                        <li class="jos flex flex-col gap-y-4">
                            <!-- FAQ Header Block -->
                            <h4 class="relative pl-10 before:absolute before:left-0 before:top-1 before:h-[30px] before:w-[30px] before:bg-[url(../img/icons/icon-lightlime-question.svg)]">
                                What's your design process like?
                            </h4>
                            <!-- FAQ Header Block -->
                            <!-- FAQ Body -->
                            <div class="ml-10 text-[#0C0C0C]">
                                <p>
                                    Our design process typically involves discovery, concept
                                    development, design, revisions based on feedback, and
                                    finalization.
                                </p>
                            </div>
                            <!-- FAQ Body -->
                        </li>
                        <!-- FAQ Item -->
                        <!-- FAQ Item -->
                        <li class="jos flex flex-col gap-y-4">
                            <!-- FAQ Header Block -->
                            <h4 class="relative pl-10 before:absolute before:left-0 before:top-1 before:h-[30px] before:w-[30px] before:bg-[url(../img/icons/icon-lightlime-question.svg)]">
                                How do you handle user feedback?
                            </h4>
                            <!-- FAQ Header Block -->
                            <!-- FAQ Body -->
                            <div class="ml-10 text-[#0C0C0C]">
                                <p>
                                    We value client feedback and work closely with you to
                                    make sure user happy with the final design. We offer a
                                    specific number of revisions.
                                </p>
                            </div>
                            <!-- FAQ Body -->
                        </li>
                        <!-- FAQ Item -->
                        <!-- FAQ Item -->
                        <li class="jos flex flex-col gap-y-4">
                            <!-- FAQ Header Block -->
                            <h4 class="relative pl-10 before:absolute before:left-0 before:top-1 before:h-[30px] before:w-[30px] before:bg-[url(../img/icons/icon-lightlime-question.svg)]">
                                Can we see samples of your work?
                            </h4>
                            <!-- FAQ Header Block -->
                            <!-- FAQ Body -->
                            <div class="ml-10 text-[#0C0C0C]">
                                <p>
                                    Yes, we're proud to showcase a portfolio of our previous
                                    projects. You can find examples of our work on our
                                    website or view our portfolio.
                                </p>
                            </div>
                            <!-- FAQ Body -->
                        </li>
                        <!-- FAQ Item -->
                    </ul>
                    <!-- FAQ List -->
                </div>
                <!-- FAQ Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!-- ...::: FAQ Section End :::... -->
</x-layouts.main>
