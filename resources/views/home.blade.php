<x-layout title="Inya Grand View Hotel • Yangon, Myanmar">

    <!-- HERO SECTION WITH BACKGROUND CROSS-FADE CAROUSEL -->
    <section x-data="{
        activeSlide: 1,
        totalSlides: 3,
        timer: null,
        slides: [
            {
                title: 'Estate Architecture & Lakeside Grounds',
                subtitle: 'Front Drive & Fountain • Inya Lake Waters to the Rear',
                image: '{{ asset('images/Screenshot 2026-11-11 212243.png') }}'
            },
            {
                title: 'Serene Sunset Views Over Inya Lake',
                subtitle: 'Lakeside Sanctuary • Calm Waters & Garden Walks',
                image: '{{ asset('images/room.png') }}'
            },
            {
                title: 'Dignified Heritage & Modern Elegance',
                subtitle: 'Mayangone Estate • Exclusive Guest Accommodations',
                image: '{{ asset('images/Screenshot 2026-11-11 212858.png') }}'
            }
        ],
        init() {
            this.startAutoPlay();
        },
        startAutoPlay() {
            this.timer = setInterval(() => {
                this.next();
            }, 5000);
        },
        stopAutoPlay() {
            clearInterval(this.timer);
        },
        next() {
            this.activeSlide = this.activeSlide === this.totalSlides ? 1 : this.activeSlide + 1;
        },
        prev() {
            this.activeSlide = this.activeSlide === 1 ? this.totalSlides : this.activeSlide - 1;
        }
    }" @mouseenter="stopAutoPlay()" @mouseleave="startAutoPlay()"
        class="relative w-full min-h-[480px] lg:min-h-[550px] flex flex-col justify-between overflow-hidden bg-primary">
        
        <!-- BACKGROUND SLIDES (Cross-Fade Overlay) -->
        <template x-for="(slide, index) in slides" :key="index">
            <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out bg-cover bg-center"
                :class="activeSlide === index + 1 ? 'opacity-100 z-10' : 'opacity-0 z-0'"
                :style="`background-image: url('${slide.image}')`">
                <!-- Dark Editorial Gradient Overlay for readability -->
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-black/30"></div>
            </div>
        </template>

        <!-- HERO EDITORIAL CONTENT CONTAINER -->
        <div class="relative z-20 max-w-7xl w-full mx-auto px-gutter-mobile lg:px-margin pt-10 lg:pt-14 pb-6 my-auto">
            <div class="max-w-2xl text-white">
                <span
                    class="font-label-caps text-xs tracking-[0.25em] text-secondary-fixed uppercase font-semibold block mb-2 sm:mb-3">
                    Yangon, Myanmar
                </span>
                <h1
                    class="font-headline-xl text-3xl sm:text-4xl lg:text-[46px] leading-[1.12] tracking-tight font-medium mb-4">
                    An Exceptional Stay in Yangon.
                </h1>
                <p class="font-body-lg text-base sm:text-lg text-surface-variant/90 leading-relaxed mb-6">
                    Discover comfort, elegance, and a welcoming hospitality experience at Inya Grand View Hotel.
                </p>

                <div class="flex flex-wrap items-center gap-3">
                    <a href="#rooms"
                        class="inline-flex items-center justify-center px-6 py-2.5 rounded bg-primary-container hover:bg-primary-container/80 border border-primary-fixed-dim/30 text-white font-label-ui text-xs font-semibold uppercase tracking-widest transition-all">
                        Explore Rooms
                    </a>
                    <a href="#booking-search"
                        class="inline-flex items-center justify-center px-6 py-2.5 rounded border border-white/40 text-white hover:bg-white/10 font-label-ui text-xs font-semibold uppercase tracking-widest transition-all">
                        Book Your Stay
                    </a>
                </div>

                <!-- Dynamic Active Slide Caption -->
                <div class="mt-6 flex items-center gap-2 text-xs text-surface-variant/80">
                    <span class="material-symbols-outlined text-sm text-secondary-fixed">explore</span>
                    <span x-text="slides[activeSlide - 1].subtitle"></span>
                </div>
            </div>
        </div>

        <!-- CAROUSEL CONTROLS & COUNTER BADGE -->
        <div class="relative z-20 max-w-7xl w-full mx-auto px-gutter-mobile lg:px-margin pb-4 flex justify-end">
            <div
                class="bg-primary-container/80 backdrop-blur-md border border-primary-fixed/20 px-4 py-2 rounded flex items-center gap-4 text-white shadow-2xl">
                <!-- Counter Badge -->
                <div class="font-mono text-xs tracking-wider flex items-center gap-1">
                    <span class="font-bold text-secondary-fixed" x-text="String(activeSlide).padStart(2, '0')"></span>
                    <span class="opacity-50">/</span>
                    <span class="opacity-50" x-text="String(totalSlides).padStart(2, '0')"></span>
                </div>

                <!-- Indicator Line / Bars -->
                <div class="flex items-center gap-1.5">
                    <template x-for="i in totalSlides" :key="i">
                        <button @click="activeSlide = i" class="h-1 rounded-full transition-all duration-300"
                            :class="activeSlide === i ? 'w-6 bg-secondary-fixed' : 'w-2 bg-white/30 hover:bg-white/60'"></button>
                    </template>
                </div>

                <!-- Navigation Arrows -->
                <div class="flex items-center gap-2 border-l border-white/20 pl-3">
                    <button @click="prev()"
                        class="p-1 hover:text-secondary-fixed transition-colors flex items-center justify-center"
                        title="Previous Slide">
                        <span class="material-symbols-outlined text-sm">west</span>
                    </button>
                    <button @click="next()"
                        class="p-1 hover:text-secondary-fixed transition-colors flex items-center justify-center"
                        title="Next Slide">
                        <span class="material-symbols-outlined text-sm">east</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 1: COMPACT, ELEGANT BOOKING SEARCH BAR -->
    <section class="w-full bg-surface-container-low border-b border-surface-container-high py-8" id="booking-search">
        <div class="max-w-7xl mx-auto px-gutter-mobile lg:px-margin">
            <form id="hotel-search-form"
                class="bg-surface-container-lowest rounded-md border border-surface-container-highest p-4 lg:p-5 shadow-sm grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 items-end">
                <!-- Check-in -->
                <div>
                    <label
                        class="block font-label-caps text-[11px] text-secondary uppercase tracking-wider mb-1.5 font-semibold">Check-in</label>
                    <div
                        class="flex items-center border border-outline-variant/60 rounded px-3 py-2.5 bg-surface-bright">
                        <span class="material-symbols-outlined text-sm text-outline mr-2">calendar_today</span>
                        <input id="check-in-date"
                            class="w-full bg-transparent text-sm text-on-surface focus:outline-none" type="date"
                            value="2024-11-20" />
                    </div>
                </div>
                <!-- Check-out -->
                <div>
                    <label
                        class="block font-label-caps text-[11px] text-secondary uppercase tracking-wider mb-1.5 font-semibold">Check-out</label>
                    <div
                        class="flex items-center border border-outline-variant/60 rounded px-3 py-2.5 bg-surface-bright">
                        <span class="material-symbols-outlined text-sm text-outline mr-2">event</span>
                        <input id="check-out-date"
                            class="w-full bg-transparent text-sm text-on-surface focus:outline-none" type="date"
                            value="2024-11-24" />
                    </div>
                </div>
                <!-- Guests -->
                <div>
                    <label
                        class="block font-label-caps text-[11px] text-secondary uppercase tracking-wider mb-1.5 font-semibold">Guests</label>
                    <div
                        class="flex items-center border border-outline-variant/60 rounded px-3 py-2.5 bg-surface-bright">
                        <span class="material-symbols-outlined text-sm text-outline mr-2">group</span>
                        <select class="w-full bg-transparent text-sm text-on-surface focus:outline-none">
                            <option>1 Guest</option>
                            <option selected>2 Guests</option>
                            <option>3 Guests</option>
                            <option>4 Guests</option>
                        </select>
                    </div>
                </div>
                <!-- Room Type -->
                <div>
                    <label
                        class="block font-label-caps text-[11px] text-secondary uppercase tracking-wider mb-1.5 font-semibold">Room
                        Type</label>
                    <div
                        class="flex items-center border border-outline-variant/60 rounded px-3 py-2.5 bg-surface-bright">
                        <span class="material-symbols-outlined text-sm text-outline mr-2">bed</span>
                        <select class="w-full bg-transparent text-sm text-on-surface focus:outline-none">
                            <option>All Accommodations</option>
                            <option selected>Lake View (Rear Wing)</option>
                            <option>Courtyard Suite</option>
                            <option>Garden Deluxe</option>
                        </select>
                    </div>
                </div>
                <!-- Submit CTA -->
                <div>
                    <button type="submit"
                        class="w-full h-[45px] rounded bg-primary text-white hover:bg-primary-container font-label-ui text-xs font-semibold uppercase tracking-widest transition-colors flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-sm">search</span>
                        <span>Check Availability</span>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- SECTION 2: FEATURED ROOMS & SUITES -->
    <section class="w-full py-16 lg:py-24 bg-surface" id="rooms">
        <div class="max-w-7xl mx-auto px-gutter-mobile lg:px-margin">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span
                        class="font-label-caps text-xs tracking-widest text-secondary uppercase font-semibold">Accommodations</span>
                    <h2 class="font-headline-lg text-3xl md:text-4xl text-primary mt-1">Featured Rooms &amp; Suites</h2>
                </div>
                <p class="font-body-sm text-on-surface-variant max-w-md mt-2 md:mt-0">
                    Thoughtfully appointed sanctuaries with distinct perspectives across Inya Grand View Hotel.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- CARD 1 -->
                <div
                    class="bg-surface-container-lowest rounded-md border border-surface-container-highest overflow-hidden flex flex-col hover:border-secondary transition-colors">
                    <div class="relative h-64 w-full">
                        <img alt="Grand Deluxe Lake View Suite bedroom overlooking Inya Lake"
                            class="w-full h-full object-cover" src="{{ asset('images/room.png') }}" />
                        <span
                            class="absolute top-3 left-3 px-2.5 py-1 rounded bg-primary/90 text-white font-label-caps text-[10px] uppercase tracking-wider font-medium">
                            Lake View (Rear Facing)
                        </span>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <h3 class="font-headline-sm text-xl text-primary font-semibold mb-1">Grand Deluxe Lake View
                                Suite</h3>
                            <p class="font-body-sm text-on-surface-variant text-sm mb-4">Floor-to-ceiling glass opening
                                to a private teak balcony directly facing Inya Lake's serene waters.</p>
                            <div class="text-xs text-outline mb-6">Occupancy: Up to 2 Guests • 85 sqm</div>
                        </div>
                        <div class="pt-4 border-t border-surface-container-high flex items-center justify-between">
                            <div>
                                <span class="font-price-display text-xl text-primary font-bold">$380</span>
                                <span class="font-body-sm text-xs text-outline">/ night</span>
                            </div>
                            <button
                                class="reserve-btn px-4 py-2 rounded bg-primary text-white hover:bg-primary-container text-xs font-semibold uppercase tracking-wider transition-colors"
                                data-room="Grand Deluxe Lake View Suite" type="button">
                                Reserve
                            </button>
                        </div>
                    </div>
                </div>
                <!-- CARD 2 -->
                <div
                    class="bg-surface-container-lowest rounded-md border border-surface-container-highest overflow-hidden flex flex-col hover:border-secondary transition-colors">
                    <div class="relative h-64 w-full">
                        <img alt="Executive Courtyard Suite" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOaJuxcaiKdlc2YPYDCNdgZljODhOGfRL9-DL1-lYW-yKyQayNWEdogaSQB_f-XrJyUb_m4fFosy1ePVGl6K-IwiExWsY4tMuJ2q4xGCOcwhjvah0J3M-q_EsG_6BPIErH0-Ki41FvKK4Axljk2qJfXHJ92lq1hbZSxgIIn1__hK3DwaXLlNct9BfOaEt5XGeakiQkEbUlZF3_Js9Qk885LyqzvwTgJkwOfRAMFqY" />
                        <span
                            class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-high/90 text-on-surface font-label-caps text-[10px] uppercase tracking-wider font-medium">
                            Courtyard View (Front Facing)
                        </span>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <h3 class="font-headline-sm text-xl text-primary font-semibold mb-1">Executive Courtyard
                                Suite</h3>
                            <p class="font-body-sm text-on-surface-variant text-sm mb-4">Overlooks the grand palm-lined
                                approach and tiered fountain with soaring ceilings and teak wood detailing.</p>
                            <div class="text-xs text-outline mb-6">Occupancy: Up to 2 Guests • 65 sqm</div>
                        </div>
                        <div class="pt-4 border-t border-surface-container-high flex items-center justify-between">
                            <div>
                                <span class="font-price-display text-xl text-primary font-bold">$260</span>
                                <span class="font-body-sm text-xs text-outline">/ night</span>
                            </div>
                            <button
                                class="reserve-btn px-4 py-2 rounded bg-primary text-white hover:bg-primary-container text-xs font-semibold uppercase tracking-wider transition-colors"
                                data-room="Executive Courtyard Suite" type="button">
                                Reserve
                            </button>
                        </div>
                    </div>
                </div>
                <!-- CARD 3 -->
                <div
                    class="bg-surface-container-lowest rounded-md border border-surface-container-highest overflow-hidden flex flex-col hover:border-secondary transition-colors">
                    <div class="relative h-64 w-full">
                        <img alt="Garden Deluxe Room" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBspHH8l-ZVOobZKhJzT8hly5JpqCBmDd2rVGl-9bv91x40D8Z6OfBeqzPpYuHLGA3Gj2gzSb-enXHOkByVeQhoyyNnvuKe7e0ljah9haar8cMBmuzRtp-xWNNMFGJnLgycEI_9GzqwBrozVRrTifW5WYIGv8WbAEh5xzYVTTGD7ugepc-V9rAlrrkfWySRRhdXBGnxCrSt9ohkGlySlTERn663rh84kyOj8OEA2TY" />
                        <span
                            class="absolute top-3 left-3 px-2.5 py-1 rounded bg-surface-container-high/90 text-on-surface font-label-caps text-[10px] uppercase tracking-wider font-medium">
                            Garden View
                        </span>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <h3 class="font-headline-sm text-xl text-primary font-semibold mb-1">Garden Deluxe Room</h3>
                            <p class="font-body-sm text-on-surface-variant text-sm mb-4">Quiet retreat flanked by
                                tropical foliage, native jasmine gardens, and custom handcrafted furnishings.</p>
                            <div class="text-xs text-outline mb-6">Occupancy: Up to 2 Guests • 48 sqm</div>
                        </div>
                        <div class="pt-4 border-t border-surface-container-high flex items-center justify-between">
                            <div>
                                <span class="font-price-display text-xl text-primary font-bold">$190</span>
                                <span class="font-body-sm text-xs text-outline">/ night</span>
                            </div>
                            <button
                                class="reserve-btn px-4 py-2 rounded bg-primary text-white hover:bg-primary-container text-xs font-semibold uppercase tracking-wider transition-colors"
                                data-room="Garden Deluxe Room" type="button">
                                Reserve
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: ABOUT THE HOTEL -->
    <section class="w-full py-16 lg:py-24 bg-surface-container-low border-y border-surface-container-high" id="about">
        <div class="max-w-7xl mx-auto px-gutter-mobile lg:px-margin">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 flex flex-col">
                    <span
                        class="font-label-caps text-xs tracking-widest text-secondary uppercase font-semibold mb-2">Our
                        Story</span>
                    <h2 class="font-headline-lg text-3xl md:text-4xl text-primary font-medium mb-6">
                        Graceful Hospitality on the Banks of Inya
                    </h2>
                    <p class="font-body-md text-on-surface-variant leading-relaxed mb-4">
                        Set within the tranquil Mayangone district of Yangon, Inya Grand View Hotel seamlessly balances
                        dignified architectural heritage with contemporary luxury. Guests arrive through a stately
                        palm-lined drive and grand fountain courtyard before experiencing the peaceful seclusion that
                        defines our property.
                    </p>
                    <p class="font-body-md text-on-surface-variant leading-relaxed mb-8">
                        To the rear of the hotel lies the calm expanse of Inya Lake, offering sunset views, gentle
                        breezes, and quiet walking paths sheltered from city life. Whether visiting for business or
                        retreat, our dedicated team welcomes you with authentic Myanmar warmth.
                    </p>
                    <div>
                        <a class="inline-flex items-center gap-2 font-label-ui text-xs font-semibold text-primary uppercase tracking-widest hover:text-secondary transition-colors"
                            href="#rooms">
                            <span>Discover Accommodations</span>
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-6">
                    <div class="rounded-lg overflow-hidden shadow-md border border-surface-container-highest">
                        <img alt="Lobby reception lounge with teak furnishings at Inya Grand View Hotel"
                            class="w-full h-[380px] object-cover" src="{{ asset('images/unnamed.jpg') }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: FACILITIES -->
    <section class="w-full py-16 lg:py-24 bg-surface" id="facilities">
        <div class="max-w-7xl mx-auto px-gutter-mobile lg:px-margin">
            <div class="text-center max-w-xl mx-auto mb-14">
                <span
                    class="font-label-caps text-xs tracking-widest text-secondary uppercase font-semibold block mb-2">Hotel
                    Amenities</span>
                <h2 class="font-headline-lg text-3xl md:text-4xl text-primary font-medium">Curated Experiences</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 rounded-md bg-surface-container-lowest border border-surface-container-highest">
                    <span class="material-symbols-outlined text-secondary text-3xl mb-3">restaurant</span>
                    <h4 class="font-title-editorial text-lg text-primary font-semibold mb-2">Lakeside Dining</h4>
                    <p class="font-body-sm text-sm text-on-surface-variant leading-relaxed">Refined regional and
                        international dishes served with serene views of Inya Lake.</p>
                </div>
                <div class="p-6 rounded-md bg-surface-container-lowest border border-surface-container-highest">
                    <span class="material-symbols-outlined text-secondary text-3xl mb-3">spa</span>
                    <h4 class="font-title-editorial text-lg text-primary font-semibold mb-2">Ayurvedic Wellness</h4>
                    <p class="font-body-sm text-sm text-on-surface-variant leading-relaxed">Holistic herbal treatments
                        and restorative massages inspired by native traditions.</p>
                </div>
                <div class="p-6 rounded-md bg-surface-container-lowest border border-surface-container-highest">
                    <span class="material-symbols-outlined text-secondary text-3xl mb-3">sailing</span>
                    <h4 class="font-title-editorial text-lg text-primary font-semibold mb-2">Private Pier Excursions
                    </h4>
                    <p class="font-body-sm text-sm text-on-surface-variant leading-relaxed">Scenic morning and dusk
                        boating departures directly from our private hotel jetty.</p>
                </div>
                <div class="p-6 rounded-md bg-surface-container-lowest border border-surface-container-highest">
                    <span class="material-symbols-outlined text-secondary text-3xl mb-3">local_library</span>
                    <h4 class="font-title-editorial text-lg text-primary font-semibold mb-2">Concierge Library</h4>
                    <p class="font-body-sm text-sm text-on-surface-variant leading-relaxed">Quiet salon featuring
                        curated literature, business support, and personalized itineraries.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: LOCATION & CONTACT -->
    <section class="w-full py-16 lg:py-24 bg-surface-container-low border-t border-surface-container-high"
        id="location">
        <div class="max-w-7xl mx-auto px-gutter-mobile lg:px-margin">
            <div class="flex flex-col lg:flex-row gap-10 items-center">
                <!-- Location Details Column -->
                <div class="w-full lg:w-5/12 flex flex-col">
                    <span class="font-label-caps text-xs tracking-widest text-secondary uppercase font-semibold mb-2">
                        Location &amp; Access
                    </span>
                    <h2 class="font-headline-lg text-3xl text-primary font-medium mb-6">Tranquil Mayangone Estate</h2>

                    <div class="space-y-4 font-body-sm text-on-surface-variant mb-8">
                        <div class="flex items-start gap-3">
                            <span
                                class="material-symbols-outlined text-secondary text-xl flex-shrink-0 mt-0.5">location_on</span>
                            <div>
                                <strong class="text-on-surface block font-medium">Inya Grand View Hotel</strong>
                                <span>No. 37 Kaba Aye Pagoda Road, Mayangone Township, Yangon, Myanmar</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span
                                class="material-symbols-outlined text-secondary text-xl flex-shrink-0 mt-0.5">call</span>
                            <span>+95 (1) 966-8800</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span
                                class="material-symbols-outlined text-secondary text-xl flex-shrink-0 mt-0.5">mail</span>
                            <span>info@inyagrandview.com</span>
                        </div>
                    </div>

                    <div
                        class="p-4 rounded bg-surface border border-surface-container-highest text-xs text-on-surface-variant leading-relaxed">
                        <span class="text-primary font-semibold">Orientation Note:</span> Situated 20 minutes from
                        Yangon International Airport, facing the peaceful embassy approach road with direct rear
                        frontage along Inya Lake.
                    </div>
                </div>

                <!-- Map Visualization Column -->
                <div class="w-full lg:w-7/12">
                    <div class="bg-white p-4 border border-gold-500/30 shadow-xl">
                        <div class="relative w-full h-[350px] bg-cover bg-center overflow-hidden"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDzqMqlGTGXHJAyFe3TmBEiDAGjwvcE7d06md6Ceqn_u5DBVtZdXfZA4KBvhlZyDTFy6MVg-a6vAmfIJJ2_gSWqUQC0do1QM6pArJ0Q0iXqo5KFG5KLPKejasEmnQJcozuKuOM_J1pV6S4fq6YflH9ZCy9mxq-EdY3qDFLCSWxRvKOVWjwQkRM7Pj8dKqlH592jkImgcljNJbA-cHbVZ22AkIKz7R20-VH2HWJq0w4S')">

                            <!-- Location Pin Badge -->
                            <a href="https://www.google.com/maps/place/INYA+GRAND+VIEW+HOTEL/@16.8382899,96.1511459,800m/data=!3m2!1e3!4b1!4m6!3m5!1s0x30c1930004ded269:0xf6fa6353a117aa4f!8m2!3d16.8382848!4d96.1537208!16s%2Fg%2F11mdbvp6db?entry=ttu&g_ep=EgoyMDI2MTEwOS4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank" rel="noopener noreferrer"
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-emerald-800 text-white px-5 py-3 shadow-2xl border border-gold-500/50 flex items-center gap-3 hover:bg-emerald-900 transition-colors group cursor-pointer">

                                <!-- Spinning Icon & Pulse Indicator Container -->
                                {{-- <div class="relative flex items-center justify-center flex-shrink-0 w-5 h-5">
                                    <span
                                        class="absolute inline-flex h-full w-full rounded-full bg-gold-400/40 animate-ping"></span>
                                    <span
                                        class="material-symbols-outlined text-gold-400 text-lg animate-spin">progress_activity</span>
                                </div> --}}

                                <!-- Text Details -->
                                <div>
                                    <p
                                        class="text-xs uppercase font-serif tracking-wider text-gold-400 font-semibold group-hover:underline flex items-center gap-1">
                                        Inya Grand View Hotel
                                        <span class="material-symbols-outlined text-[14px]">open_in_new</span>
                                    </p>
                                    <p class="text-[11px] text-ivory-200">Kaba Aye Pagoda Rd, Mayangone, Yangon</p>
                                </div>
                            </a>

                            <!-- Geographical Coordinates Badge -->
                            <div
                                class="absolute bottom-4 left-4 bg-white/95 px-3 py-1.5 text-[11px] text-emerald-900 font-mono shadow border border-ivory-300">
                                16.8378° N, 96.1554° E · Inya Lake Shore
                            </div>
                        </div>

                        <!-- Services Notes Footer -->
                        <div class="pt-4 flex flex-wrap items-center justify-between text-xs text-charcoal/70 gap-3">
                            <span class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-gold-500">local_taxi</span>
                                Private Mercedes-Benz S-Class Limousines on Request
                            </span>
                            <span class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-gold-500">local_parking</span>
                                Complimentary Valet Parking for Hotel Guests
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>