<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Inya Grand View Hotel • Yangon, Myanmar' }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet">

    <!-- Alpine.js for lightweight state management & carousel auto-fade -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Laravel Vite: CSS and JavaScript -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-background font-body-md text-on-surface antialiased">

    <!-- NAVIGATION HEADER -->
    <header
        class="sticky top-0 z-50 bg-surface/95 backdrop-blur-md border-b border-surface-container-highest shadow-md">
        <div
            class="max-w-7xl mx-auto px-gutter-mobile lg:px-margin h-20 flex items-center justify-between gap-space-md">
            <!-- Brand -->
            <a class="flex items-center gap-3 group" href="{{ route('home') }}">
                <!-- Logo Image -->
                <img src="{{ asset('images/logo.png') }}" alt="Inya Grand View Hotel Logo"
                    class="w-20 h-20 object-contain flex-shrink-0">

                <div class="flex flex-col">
                    <span
                        class="font-title-editorial text-xl md:text-[28px] text-primary font-semibold tracking-tight leading-none mb-1">
                        Inya Grand View
                    </span>
                    <span class="font-label-caps text-[11px] tracking-[0.3em] text-secondary uppercase font-medium">
                        Lakefront Sanctuary
                    </span>
                </div>
            </a>
            <!-- Primary Navigation -->
            <nav class="hidden lg:flex items-center gap-3">
                <a class="font-label-ui text-sm text-on-surface hover:text-primary transition-colors uppercase tracking-wider"
                    href="#about">About</a>
                {{-- <a
                    class="font-label-ui text-sm text-on-surface hover:text-primary transition-colors uppercase tracking-wider"
                    href="#">Accommodations</a> --}}
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                    <!-- Trigger Button -->
                    <button type="button" @click="open = !open"
                        class="inline-flex items-center gap-1 hover:text-primary transition-colors cursor-pointer py-2">
                        <span
                            class="font-label-ui text-sm text-on-surface hover:text-primary transition-colors uppercase tracking-wider">Accommodations</span>
                        <span class="material-symbols-outlined text-[16px] transition-transform duration-200"
                            :class="open ? 'rotate-180 text-primary' : ''">
                            expand_more
                        </span>
                    </button>

                    <!-- Dropdown Panel -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1" @click.outside="open = false"
                        style="display: none;" class="absolute left-0 top-full pt-2 w-72 z-50">
                        <div
                            class="bg-surface-container-lowest border border-surface-container-highest shadow-xl rounded-md overflow-hidden py-2">
                            <!-- Section Eyebrow -->
                            <div class="px-4 py-1.5 border-b border-surface-container-high mb-1">
                                <span
                                    class="font-label-caps text-[10px] tracking-[0.2em] text-secondary uppercase font-semibold">
                                    Suites &amp; Guest Rooms
                                </span>
                            </div>

                            <!-- Room Type 1 -->
                            <a href="#rooms" @click="open = false"
                                class="block px-4 py-2.5 hover:bg-surface-container-low transition-colors group">
                                <span
                                    class="font-headline-sm text-sm text-primary font-semibold block group-hover:text-secondary transition-colors">
                                    Grand Deluxe Lake View Suite
                                </span>
                                <span class="font-body-sm text-[11px] text-on-surface-variant block">
                                    85 sqm • Private Teak Balcony • Inya Lake
                                </span>
                            </a>

                            <!-- Room Type 2 -->
                            <a href="#rooms" @click="open = false"
                                class="block px-4 py-2.5 hover:bg-surface-container-low transition-colors group">
                                <span
                                    class="font-headline-sm text-sm text-primary font-semibold block group-hover:text-secondary transition-colors">
                                    Executive Courtyard Suite
                                </span>
                                <span class="font-body-sm text-[11px] text-on-surface-variant block">
                                    65 sqm • Fountain &amp; Palm Approach View
                                </span>
                            </a>

                            <!-- Room Type 3 -->
                            <a href="#rooms" @click="open = false"
                                class="block px-4 py-2.5 hover:bg-surface-container-low transition-colors group">
                                <span
                                    class="font-headline-sm text-sm text-primary font-semibold block group-hover:text-secondary transition-colors">
                                    Garden Deluxe Room
                                </span>
                                <span class="font-body-sm text-[11px] text-on-surface-variant block">
                                    48 sqm • Tropical Jasmine Garden Retreat
                                </span>
                            </a>

                            <!-- View All Footer Link -->
                            <div class="mt-1 pt-1.5 px-4 border-t border-surface-container-high">
                                <a href="#rooms" @click="open = false"
                                    class="inline-flex items-center justify-between w-full py-1.5 font-label-ui text-[11px] font-semibold uppercase tracking-wider text-primary hover:text-secondary transition-colors">
                                    <span>Compare All Rooms</span>
                                    <span class="material-symbols-outlined text-[15px]">east</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="font-label-ui text-sm text-on-surface hover:text-primary transition-colors uppercase tracking-wider"
                    href="#facilities">Facilities</a>
                <a class="font-label-ui text-sm text-on-surface hover:text-primary transition-colors uppercase tracking-wider"
                    href="{{ route('gallery') }}">Gallery</a>
                <a class="font-label-ui text-sm text-on-surface hover:text-primary transition-colors uppercase tracking-wider"
                    href="#">Reservation</a>
            </nav>
            <!-- Language Switcher & Direct CTA -->
            <div class="flex items-center gap-5">
                <div class="inline-flex items-center text-sm font-medium text-on-surface-variant font-label-caps">
                    <span class="text-primary font-bold cursor-pointer">EN</span>
                    <span class="mx-1.5 text-outline-variant">|</span>
                    <span class="hover:text-primary cursor-pointer transition-colors">မြန်မာ</span>
                </div>
                <a class="px-5 py-2.5 rounded bg-primary text-white hover:bg-primary-container text-sm font-semibold uppercase tracking-widest transition-all"
                    href="#booking-search">
                    Book Now
                </a>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="w-full">
        {{ $slot }}
    </main>

    <!-- MINIMALIST LUXURY FOOTER -->
    <footer class="w-full bg-surface-container border-t border-surface-container-highest text-on-surface py-12">
        <div class="max-w-7xl mx-auto px-gutter-mobile lg:px-margin">
            <div
                class="flex flex-col md:flex-row md:items-center justify-between gap-8 pb-8 border-b border-surface-container-high">
                <div class="flex items-center gap-4 md:gap-6">
                    <img src="{{ asset('images/logo.png') }}" alt="Inya Grand View Hotel Logo"
                        class="w-20 h-20 object-contain flex-shrink-0">
                    <div>
                        <span class="font-title-editorial text-xl text-primary font-semibold">Inya Grand View
                            Hotel</span>
                        <p class="font-body-sm text-sm text-on-surface-variant mt-1">Refined lakeside sanctuary in
                            Yangon,
                            Myanmar.</p>
                    </div>
                </div>
                <div
                    class="flex flex-wrap items-center gap-6 text-sm uppercase tracking-wider font-label-ui text-on-surface-variant">
                    <a class="hover:text-primary transition-colors" href="#about">About</a>
                    <a class="hover:text-primary transition-colors" href="#">Accommodations</a>
                    <a class="hover:text-primary transition-colors" href="#facilities">Facilities</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('gallery') }}">Gallery</a>
                    <a class="hover:text-primary transition-colors" href="">Reservation</a>
                </div>
                <div class="inline-flex items-center text-sm font-label-caps text-on-surface-variant">
                    <span class="text-primary font-bold">EN</span>
                    <span class="mx-2 text-outline-variant">|</span>
                    <span class="hover:text-primary cursor-pointer transition-colors">မြန်မာ</span>
                </div>
            </div>
            <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-outline">
                <p>&copy; {{ date('Y') }} Inya Grand View Hotel. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a class="hover:text-on-surface transition-colors" href="#">Privacy Policy</a>
                    <a class="hover:text-on-surface transition-colors" href="#">Terms of Stay</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>