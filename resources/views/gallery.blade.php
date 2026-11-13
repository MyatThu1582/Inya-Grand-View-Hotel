<x-layout title="Gallery • Inya Grand View Hotel">

    <!-- VISUAL PORTFOLIO / GALLERY SECTION -->
    <section 
        x-data="{
            lightboxOpen: false,
            activeIndex: 0,
            activeFilter: 'all',
            photos: [
                {
                    src: '{{ asset('images/lake-view.png') }}',
                    title: 'Aerial Estate & Inya Lakefront',
                    category: 'grounds',
                    featured: true
                },
                {
                    src: '{{ asset('images/room.png') }}',
                    title: 'Lakeside Afternoon High Tea',
                    category: 'dining',
                    featured: true
                },
                {
                    src: '{{ asset('images/room2.png') }}',
                    title: 'Panoramic Lake View Spa Bath',
                    category: 'suites',
                    featured: true
                },
                {
                    src: '{{ asset('images/room3.png') }}',
                    title: 'Heritage Concierge Library',
                    category: 'grounds',
                    featured: true
                },
                {
                    src: '{{ asset('images/food.png') }}',
                    title: 'Twilight Lounge Overlooking Shwedagon',
                    category: 'dining',
                    featured: true
                },
                {
                    src: '{{ asset('images/hotel-img.png') }}',
                    title: 'Private Jetty & Sunset Pier',
                    category: 'grounds',
                    featured: false
                },
                {
                    src: '{{ asset('images/food.png') }}',
                    title: 'Private Jetty & Sunset Pier',
                    category: 'grounds',
                    featured: false
                },
                {
                    src: '{{ asset('images/food2.png') }}',
                    title: 'Private Jetty & Sunset Pier',
                    category: 'grounds',
                    featured: false
                }
            ],
            openLightbox(index) {
                this.activeIndex = index;
                this.lightboxOpen = true;
            },
            nextPhoto() {
                this.activeIndex = (this.activeIndex + 1) % this.photos.length;
            },
            prevPhoto() {
                this.activeIndex = (this.activeIndex - 1 + this.photos.length) % this.photos.length;
            }
        }"
        @keydown.escape.window="lightboxOpen = false"
        @keydown.right.window="if(lightboxOpen) nextPhoto()"
        @keydown.left.window="if(lightboxOpen) prevPhoto()"
        class="w-full py-16 lg:py-24 bg-background"
    >
        <div class="max-w-7xl mx-auto px-gutter-mobile lg:px-margin">
            
            <!-- EDITORIAL HEADER ROW (Matches Screenshot) -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-10">
                <div>
                    <div class="flex items-center gap-3 mb-3">
                        <span class="w-8 h-[1px] bg-secondary"></span>
                        <span class="font-label-caps text-[11px] tracking-[0.22em] text-secondary uppercase font-semibold">
                            Visual Portfolio
                        </span>
                    </div>
                    <h1 class="font-headline-lg text-3xl sm:text-4xl lg:text-[42px] text-primary font-normal tracking-tight leading-tight">
                        Moments at Inya Grand View
                    </h1>
                </div>

                <!-- View Full Gallery Button -->
                <button 
                    type="button"
                    @click="openLightbox(0)"
                    class="self-start sm:self-end inline-flex items-center gap-2.5 px-5 py-3 bg-surface-container-lowest border border-outline-variant/60 hover:border-primary text-primary font-label-ui text-[11px] font-semibold uppercase tracking-[0.15em] transition-all shadow-2xs cursor-pointer"
                >
                    <span>View Full Gallery</span>
                    <span class="material-symbols-outlined text-[16px] text-secondary">photo_library</span>
                </button>
            </div>

            <!-- ASYMMETRICAL FEATURED BENTO GRID (1 Large Left + 4 Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-5">
                
                <!-- LEFT LARGE HERO PHOTO (6 Columns) -->
                <div 
                    @click="openLightbox(0)"
                    class="lg:col-span-6 relative group overflow-hidden cursor-pointer bg-surface-container h-[360px] sm:h-[440px] lg:h-[500px]"
                >
                    <img 
                        :src="photos[0].src" 
                        :alt="photos[0].title"
                        class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="text-white">
                            <span class="font-label-caps text-[10px] tracking-widest uppercase text-secondary-fixed block mb-1">Estate Grounds</span>
                            <p class="font-title-editorial text-lg" x-text="photos[0].title"></p>
                        </div>
                    </div>
                </div>

                <!-- RIGHT 2x2 PHOTO MATRIX (6 Columns) -->
                <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-5">
                    
                    <!-- Top Left -->
                    <div 
                        @click="openLightbox(1)"
                        class="relative group overflow-hidden cursor-pointer bg-surface-container h-[240px] lg:h-[240px]"
                    >
                        <img 
                            :src="photos[1].src" 
                            :alt="photos[1].title"
                            class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="font-title-editorial text-sm text-white" x-text="photos[1].title"></p>
                        </div>
                    </div>

                    <!-- Top Right -->
                    <div 
                        @click="openLightbox(2)"
                        class="relative group overflow-hidden cursor-pointer bg-surface-container h-[240px] lg:h-[240px]"
                    >
                        <img 
                            :src="photos[2].src" 
                            :alt="photos[2].title"
                            class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="font-title-editorial text-sm text-white" x-text="photos[2].title"></p>
                        </div>
                    </div>

                    <!-- Bottom Left -->
                    <div 
                        @click="openLightbox(3)"
                        class="relative group overflow-hidden cursor-pointer bg-surface-container h-[240px] lg:h-[240px]"
                    >
                        <img 
                            :src="photos[3].src" 
                            :alt="photos[3].title"
                            class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="font-title-editorial text-sm text-white" x-text="photos[3].title"></p>
                        </div>
                    </div>

                    <!-- Bottom Right -->
                    <div 
                        @click="openLightbox(4)"
                        class="relative group overflow-hidden cursor-pointer bg-surface-container h-[240px] lg:h-[240px]"
                    >
                        <img 
                            :src="photos[4].src" 
                            :alt="photos[4].title"
                            class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="font-title-editorial text-sm text-white" x-text="photos[4].title"></p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- SECONDARY EXPANDED GALLERY ARCHIVE (Filterable) -->
            <div class="mt-20 pt-14 border-t border-surface-container-highest">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                    <div>
                        <span class="font-label-caps text-xs tracking-widest text-secondary uppercase font-semibold block mb-1">
                            Complete Collection
                        </span>
                        <h2 class="font-headline-md text-2xl text-primary">Explore by Space</h2>
                    </div>

                    <!-- Filter Tabs -->
                    <div class="flex flex-wrap items-center gap-2">
                        <button 
                            type="button"
                            @click="activeFilter = 'all'"
                            :class="activeFilter === 'all' ? 'bg-primary text-white border-primary' : 'bg-surface-container-lowest text-on-surface-variant border-outline-variant/60 hover:border-primary'"
                            class="px-4 py-2 border text-xs font-label-ui uppercase tracking-wider transition-colors cursor-pointer"
                        >
                            All Moments
                        </button>
                        <button 
                            type="button"
                            @click="activeFilter = 'grounds'"
                            :class="activeFilter === 'grounds' ? 'bg-primary text-white border-primary' : 'bg-surface-container-lowest text-on-surface-variant border-outline-variant/60 hover:border-primary'"
                            class="px-4 py-2 border text-xs font-label-ui uppercase tracking-wider transition-colors cursor-pointer"
                        >
                            Estate &amp; Grounds
                        </button>
                        <button 
                            type="button"
                            @click="activeFilter = 'suites'"
                            :class="activeFilter === 'suites' ? 'bg-primary text-white border-primary' : 'bg-surface-container-lowest text-on-surface-variant border-outline-variant/60 hover:border-primary'"
                            class="px-4 py-2 border text-xs font-label-ui uppercase tracking-wider transition-colors cursor-pointer"
                        >
                            Suites &amp; Spa
                        </button>
                        <button 
                            type="button"
                            @click="activeFilter = 'dining'"
                            :class="activeFilter === 'dining' ? 'bg-primary text-white border-primary' : 'bg-surface-container-lowest text-on-surface-variant border-outline-variant/60 hover:border-primary'"
                            class="px-4 py-2 border text-xs font-label-ui uppercase tracking-wider transition-colors cursor-pointer"
                        >
                            Dining &amp; Lounge
                        </button>
                    </div>
                </div>

                <!-- 3-Column Filtered Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    <template x-for="(photo, idx) in photos" :key="idx">
                        <div 
                            x-show="activeFilter === 'all' || activeFilter === photo.category"
                            x-transition.opacity.duration.300ms
                            @click="openLightbox(idx)"
                            class="group relative overflow-hidden bg-surface-container h-64 cursor-pointer border border-surface-container-highest"
                        >
                            <img 
                                :src="photo.src" 
                                :alt="photo.title"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-between p-4 text-white">
                                <div>
                                    <span class="font-label-caps text-[10px] uppercase tracking-widest text-secondary-fixed block" x-text="photo.category"></span>
                                    <h3 class="font-title-editorial text-base" x-text="photo.title"></h3>
                                </div>
                                <span class="material-symbols-outlined text-lg text-white/80">fullscreen</span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

        </div>

        <!-- FULLSCREEN LIGHTBOX MODAL -->
        <div 
            x-show="lightboxOpen" 
            x-transition.opacity
            style="display: none;"
            class="fixed inset-0 z-50 bg-primary/95 backdrop-blur-md flex flex-col justify-between p-4 sm:p-8 text-white"
        >
            <!-- Top Bar -->
            <div class="flex items-center justify-between max-w-7xl w-full mx-auto">
                <div class="font-mono text-xs tracking-widest text-secondary-fixed">
                    <span x-text="String(activeIndex + 1).padStart(2, '0')"></span>
                    <span class="text-white/40 mx-1">/</span>
                    <span class="text-white/60" x-text="String(photos.length).padStart(2, '0')"></span>
                </div>
                <button 
                    type="button"
                    @click="lightboxOpen = false"
                    class="inline-flex items-center gap-1.5 px-3 py-1.5 border border-white/20 hover:border-white text-xs font-label-ui uppercase tracking-widest transition-colors cursor-pointer"
                >
                    <span>Close</span>
                    <span class="material-symbols-outlined text-base">close</span>
                </button>
            </div>

            <!-- Main Image Display -->
            <div class="relative flex-1 flex items-center justify-center my-4 overflow-hidden">
                <button 
                    type="button"
                    @click="prevPhoto()"
                    class="absolute left-2 sm:left-6 z-10 w-10 h-10 bg-primary/80 border border-white/20 hover:border-secondary-fixed flex items-center justify-center transition-colors cursor-pointer"
                >
                    <span class="material-symbols-outlined text-lg">west</span>
                </button>

                <img 
                    :src="photos[activeIndex].src" 
                    :alt="photos[activeIndex].title"
                    class="max-h-[72vh] max-w-full object-contain shadow-2xl border border-white/10"
                />

                <button 
                    type="button"
                    @click="nextPhoto()"
                    class="absolute right-2 sm:right-6 z-10 w-10 h-10 bg-primary/80 border border-white/20 hover:border-secondary-fixed flex items-center justify-center transition-colors cursor-pointer"
                >
                    <span class="material-symbols-outlined text-lg">east</span>
                </button>
            </div>

            <!-- Bottom Caption -->
            <div class="text-center max-w-2xl mx-auto">
                <span class="font-label-caps text-[10px] tracking-[0.2em] text-secondary-fixed uppercase block mb-1" x-text="photos[activeIndex].category"></span>
                <p class="font-title-editorial text-lg sm:text-xl" x-text="photos[activeIndex].title"></p>
            </div>
        </div>

    </section>

</x-layout>