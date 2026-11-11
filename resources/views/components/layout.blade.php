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
    <header class="sticky top-0 z-50 bg-surface/95 backdrop-blur-md border-b border-surface-container-highest">
        <div
            class="max-w-7xl mx-auto px-gutter-mobile lg:px-margin h-20 flex items-center justify-between gap-space-md">
            <!-- Brand -->
            <a class="flex items-center gap-3 group" href="{{ route('home') }}">
                <!-- Logo Image -->
                <img src="{{ asset('images/logo.png') }}" alt="Inya Grand View Hotel Logo"
                    class="w-20 h-20 object-contain flex-shrink-0">

                <!-- Brand Text Stack -->
                <div class="flex flex-col">
                    <span
                        class="font-title-editorial text-xl md:text-3xl text-primary font-semibold tracking-tight">Inya
                        Grand View Hotel</span>
                    <span class="font-label-caps text-[11px] tracking-[0.3em] text-secondary uppercase">Yangon •
                        Lakefront Sanctuary</span>
                </div>
            </a>
            <!-- Primary Navigation -->
            <nav class="hidden lg:flex items-center gap-4">
                <a class="font-label-ui text-sm text-on-surface hover:text-primary transition-colors uppercase tracking-wider"
                    href="#about">About</a>
                <a class="font-label-ui text-sm text-on-surface hover:text-primary transition-colors uppercase tracking-wider"
                    href="#rooms">Rooms &amp; Suites</a>
                <a class="font-label-ui text-sm text-on-surface hover:text-primary transition-colors uppercase tracking-wider"
                    href="#facilities">Facilities</a>
                <a class="font-label-ui text-sm text-on-surface hover:text-primary transition-colors uppercase tracking-wider"
                    href="#gallery">Gallery</a>
                <a class="font-label-ui text-sm text-on-surface hover:text-primary transition-colors uppercase tracking-wider"
                    href="#location">Location</a>
            </nav>
            <!-- Language Switcher & Direct CTA -->
            <div class="flex items-center gap-5">
                <div class="inline-flex items-center text-xs font-medium text-on-surface-variant font-label-caps">
                    <span class="text-primary font-bold cursor-pointer">EN</span>
                    <span class="mx-1.5 text-outline-variant">|</span>
                    <span class="hover:text-primary cursor-pointer transition-colors">မြန်မာ</span>
                </div>
                <a class="px-5 py-2.5 rounded bg-primary text-white hover:bg-primary-container text-xs font-semibold uppercase tracking-widest transition-all"
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
                <div>
                    <span class="font-title-editorial text-xl text-primary font-semibold">Inya Grand View Hotel</span>
                    <p class="font-body-sm text-xs text-on-surface-variant mt-1">Refined lakeside sanctuary in Yangon,
                        Myanmar.</p>
                </div>
                <div
                    class="flex flex-wrap items-center gap-6 text-xs uppercase tracking-wider font-label-ui text-on-surface-variant">
                    <a class="hover:text-primary transition-colors" href="#about">About</a>
                    <a class="hover:text-primary transition-colors" href="#rooms">Rooms &amp; Suites</a>
                    <a class="hover:text-primary transition-colors" href="#facilities">Facilities</a>
                    <a class="hover:text-primary transition-colors" href="#">Gallery</a>
                    <a class="hover:text-primary transition-colors" href="#location">Location</a>
                </div>
                <div class="inline-flex items-center text-xs font-label-caps text-on-surface-variant">
                    <span class="text-primary font-bold">EN</span>
                    <span class="mx-2 text-outline-variant">|</span>
                    <span class="hover:text-primary cursor-pointer transition-colors">မြန်မာ</span>
                </div>
            </div>
            <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-outline">
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