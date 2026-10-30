<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO --}}
    <title>{{ $seo->meta_title ?? ($pageTitle ?? 'SM Embellishment - សិល្បៈប៉ាក់ឌិន និងក្បូរក្បាច់ប្រណីត') }}</title>
    <meta name="description" content="{{ $seo->meta_description ?? 'សេវាកម្មប៉ាក់ឌិន គ្រាប់អង្កាំ ត្បូង និងផ្កា 3D លំដាប់ខ្ពស់សម្រាប់រ៉ូបមង្គលការ និងម៉ូដសម្លៀកបំពាក់ទាន់សម័យ' }}">
    @if(!empty($seo->meta_keywords))
        <meta name="keywords" content="{{ $seo->meta_keywords }}">
    @endif
    @if(!empty($seo->og_title))
        <meta property="og:title" content="{{ $seo->og_title }}">
        <meta property="og:description" content="{{ $seo->og_description ?? '' }}">
        @if(!empty($seo->og_image))
            <meta property="og:image" content="{{ asset('storage/' . $seo->og_image) }}">
        @endif
    @endif
    @if(!empty($seo->canonical_url))
        <link rel="canonical" href="{{ $seo->canonical_url }}">
    @endif
    @if(!empty($seo->no_index) && $seo->no_index)
        <meta name="robots" content="noindex, nofollow">
    @endif

    {{-- Brand Favicon --}}
    <link rel="icon" type="image/webp" href="{{ asset('images/logo.webp') }}">

    {{-- Fonts (Khmer & Latin Luxury Pairing) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Kantumruy+Pro:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=Montserrat:wght@300;400;500;600;700&family=Noto+Serif+Khmer:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preload" href="{{ asset('fonts/kh-abc-fancy-italic.ttf') }}" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="{{ asset('fonts/kh-abc-fancy.ttf') }}" as="font" type="font/ttf" crossorigin>

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#faf7f2] text-[#221d16] font-sans antialiased selection:bg-[#b38728] selection:text-white">

    {{-- Silk Page Transition Overlay (Haute Couture Curtain) --}}
    <div id="silk-page-curtain" class="fixed inset-0 z-[99990] bg-[#1a1510] flex flex-col items-center justify-center pointer-events-none transition-transform duration-700 ease-[cubic-bezier(0.16,1,0.3,1)]" aria-hidden="true">
        {{-- Subtle Silk Texture / Ambient Glow --}}
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(212,175,55,0.18)_0%,rgba(26,21,16,0.98)_70%)] pointer-events-none"></div>
        <div class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-transparent via-[#d4af37] to-transparent opacity-75"></div>
        
        {{-- Center Atelier Crest & Monogram --}}
        <div class="relative z-10 text-center flex flex-col items-center space-y-3">
            <div class="w-16 h-16 rounded-full border border-[#b38728]/70 bg-black/40 backdrop-blur-md flex items-center justify-center text-[#d4af37] shadow-[0_0_30px_rgba(212,175,55,0.35)] animate-gold-halo">
                <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M24 4c2.5 5 5 7.5 10 10-5 2.5-7.5 5-10 10-2.5-5-5-7.5-10-10 5-2.5 7.5-5 10-10z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M24 44c2.5-5 5-7.5 10-10-5-2.5-7.5-5-10-10-2.5 5-5 7.5-10 10 5 2.5 7.5 5 10 10z" />
                    <circle cx="24" cy="24" r="3.5" fill="currentColor" fill-opacity="0.3" />
                </svg>
            </div>
            <div class="space-y-1">
                <span class="text-xs font-sans font-semibold uppercase tracking-[0.28em] text-gold-metallic block">
                    SM Embellishment
                </span>
                <span class="text-[9px] font-sans tracking-[0.2em] text-[#cec3b0] uppercase block">
                    Haute Couture Atelier
                </span>
            </div>
            {{-- Delicate Stitch Line --}}
            <div class="w-24 h-[1px] bg-gradient-to-r from-transparent via-[#b38728]/60 to-transparent mt-2"></div>
        </div>
    </div>

    {{-- Navigation --}}
    @include('partials.navbar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Haute Couture Floating Back-to-Top Button --}}
    <button id="back-to-top" 
            aria-label="Back to Top"
            class="fixed bottom-6 right-6 z-40 w-11 h-11 rounded-full bg-[#1c1813]/90 hover:bg-[#b38728] text-[#d4af37] hover:text-white border border-[#b38728]/40 shadow-lg backdrop-blur-sm transition-all duration-300 opacity-0 pointer-events-none translate-y-3 flex items-center justify-center group"
            onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <svg class="w-4 h-4 transition-transform group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>

    <script>
        window.addEventListener('scroll', () => {
            const btn = document.getElementById('back-to-top');
            if (!btn) return;
            if (window.scrollY > 400) {
                btn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-3');
                btn.classList.add('opacity-100', 'translate-y-0');
            } else {
                btn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-3');
                btn.classList.remove('opacity-100', 'translate-y-0');
            }
        });
    </script>

    {{-- Flash Messages --}}
    @if(session('success'))
        <div id="flash-message" class="fixed bottom-6 right-6 z-50 bg-green-600 text-white px-6 py-3 rounded-lg shadow-xl animate-fade-in-up">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('flash-message')?.remove();
            }, 5000);
        </script>
    @endif

    @stack('scripts')
</body>
</html>
