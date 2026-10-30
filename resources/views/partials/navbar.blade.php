{{-- Romantic Haute Couture & Atelier Navbar in Khmer --}}
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 {{ request()->routeIs('home') ? 'bg-transparent border-transparent shadow-none text-white' : 'bg-white/95 backdrop-blur-md border-b border-stone-200/60 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.04)] text-stone-800' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            {{-- Brand Logo with Khmer Golden Emblem --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <img src="{{ asset('images/logo.webp') }}" alt="ស្រីម៉ៅ​ មង្គល សម្អាងការ" class="h-10 sm:h-11 w-auto object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.35)] transition-transform group-hover:scale-105">
                <div class="flex flex-col">
                    <span id="nav-brand-title" class="text-base sm:text-lg font-fancy tracking-wide transition-colors {{ request()->routeIs('home') ? 'text-white group-hover:text-[#d4af37]' : 'text-[#231e17] group-hover:text-[#b38728]' }}">
                        ស្រីម៉ៅ​ មង្គល សម្អាងការ
                    </span>
                    <!-- <span id="nav-brand-subtitle" class="text-[9px] font-sans font-medium tracking-[0.16em] transition-colors {{ request()->routeIs('home') ? 'text-stone-300' : 'text-[#9b7529]' }}">
                        សិល្បៈប៉ាក់ឌិន & រ៉ូបមង្គលការ
                    </span> -->
                </div>
            </a>

            {{-- Centered Editorial Navigation Links in Khmer --}}
            <div class="hidden lg:flex items-center gap-7">
                <a href="{{ route('home') }}" class="nav-link text-xs font-sans font-medium tracking-wider transition-colors {{ request()->routeIs('home') ? 'text-[#d4af37] font-bold' : 'text-stone-600 hover:text-[#b38728]' }}">
                    ទំព័រដើម
                </a>
                <a href="{{ route('about') }}" class="nav-link text-xs font-sans font-medium tracking-wider transition-colors {{ request()->routeIs('about') ? (request()->routeIs('home') ? 'text-white font-bold' : 'text-[#b38728] font-bold') : (request()->routeIs('home') ? 'text-white/90 hover:text-[#d4af37]' : 'text-stone-600 hover:text-[#b38728]') }}">
                    អំពីយើង
                </a>
                <a href="{{ route('services') }}" class="nav-link text-xs font-sans font-medium tracking-wider transition-colors {{ request()->routeIs('services*') ? 'text-[#b38728] font-bold' : (request()->routeIs('home') ? 'text-white/90 hover:text-[#d4af37]' : 'text-stone-600 hover:text-[#b38728]') }}">
                    សេវាកម្ម
                </a>
                <a href="{{ route('portfolio') }}" class="nav-link text-xs font-sans font-medium tracking-wider transition-colors {{ request()->routeIs('portfolio*') ? 'text-[#b38728] font-bold' : (request()->routeIs('home') ? 'text-white/90 hover:text-[#d4af37]' : 'text-stone-600 hover:text-[#b38728]') }}">
                    ស្នាដៃ
                </a>
                <a href="{{ route('gallery') }}" class="nav-link text-xs font-sans font-medium tracking-wider transition-colors {{ request()->routeIs('gallery') ? 'text-[#b38728] font-bold' : (request()->routeIs('home') ? 'text-white/90 hover:text-[#d4af37]' : 'text-stone-600 hover:text-[#b38728]') }}">
                    វិចិត្រសាល
                </a>
                <a href="{{ route('blog') }}" class="nav-link text-xs font-sans font-medium tracking-wider transition-colors {{ request()->routeIs('blog*') ? 'text-[#b38728] font-bold' : (request()->routeIs('home') ? 'text-white/90 hover:text-[#d4af37]' : 'text-stone-600 hover:text-[#b38728]') }}">
                    អត្ថបទ
                </a>
                <a href="{{ route('contact') }}" class="nav-link text-xs font-sans font-medium tracking-wider transition-colors {{ request()->routeIs('contact') ? 'text-[#b38728] font-bold' : (request()->routeIs('home') ? 'text-white/90 hover:text-[#d4af37]' : 'text-stone-600 hover:text-[#b38728]') }}">
                    ទំនាក់ទំនង
                </a>
            </div>

            {{-- Right CTA Button: Inquire Now --}}
            <div class="hidden lg:flex items-center">
                <a href="{{ route('contact') }}" class="btn-shimmer inline-flex items-center justify-center bg-[#b38728] hover:bg-[#996e1b] text-white px-6 py-2.5 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all shadow-md hover:shadow-lg">
                    សាកសួរព័ត៌មាន
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-md transition-colors {{ request()->routeIs('home') ? 'text-white hover:bg-white/10' : 'text-stone-700 hover:bg-stone-100' }}" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>

        {{-- Mobile Drawer Menu --}}
        <div id="mobile-menu" class="hidden lg:hidden pb-6 border-t border-stone-200/80 pt-4 bg-white/95 backdrop-blur-md text-stone-800 rounded-b-md shadow-lg">
            <div class="flex flex-col gap-3 px-2">
                <a href="{{ route('home') }}" class="px-3 py-2 text-xs tracking-wider font-medium {{ request()->routeIs('home') ? 'text-[#b38728] font-bold' : 'text-stone-700' }}">ទំព័រដើម</a>
                <a href="{{ route('about') }}" class="px-3 py-2 text-xs tracking-wider font-medium {{ request()->routeIs('about') ? 'text-[#b38728] font-bold' : 'text-stone-700' }}">អំពីយើង</a>
                <a href="{{ route('services') }}" class="px-3 py-2 text-xs tracking-wider font-medium {{ request()->routeIs('services*') ? 'text-[#b38728] font-bold' : 'text-stone-700' }}">សេវាកម្ម</a>
                <a href="{{ route('portfolio') }}" class="px-3 py-2 text-xs tracking-wider font-medium {{ request()->routeIs('portfolio*') ? 'text-[#b38728] font-bold' : 'text-stone-700' }}">ស្នាដៃ</a>
                <a href="{{ route('gallery') }}" class="px-3 py-2 text-xs tracking-wider font-medium {{ request()->routeIs('gallery') ? 'text-[#b38728] font-bold' : 'text-stone-700' }}">វិចិត្រសាល</a>
                <a href="{{ route('blog') }}" class="px-3 py-2 text-xs tracking-wider font-medium {{ request()->routeIs('blog*') ? 'text-[#b38728] font-bold' : 'text-stone-700' }}">អត្ថបទ</a>
                <a href="{{ route('contact') }}" class="mt-2 text-center bg-[#b38728] text-white py-3 rounded-sm text-xs font-semibold tracking-wider">សាកសួរព័ត៌មាន</a>
            </div>
        </div>
    </div>
</nav>

{{-- Spacer for non-home pages so content is not hidden beneath fixed navbar --}}
@if(!request()->routeIs('home'))
    <div class="h-20"></div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const isHome = @json(request()->routeIs('home'));
        const nav = document.getElementById('navbar');
        const navBrandTitle = document.getElementById('nav-brand-title');
        const navBrandSubtitle = document.getElementById('nav-brand-subtitle');
        const navLogoCircle = document.getElementById('nav-logo-circle');
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const links = document.querySelectorAll('.nav-link');

        if (!isHome || !nav) return;

        function handleScroll() {
            if (window.scrollY > 30) {
                // Scrolled: solid luxury white with soft shadow
                nav.classList.add('bg-white/95', 'backdrop-blur-md', 'border-b', 'border-stone-200/60', 'shadow-[0_2px_15px_-3px_rgba(0,0,0,0.06)]');
                nav.classList.remove('bg-transparent', 'border-transparent', 'shadow-none');
                
                if (navBrandTitle) {
                    navBrandTitle.classList.add('text-[#231e17]');
                    navBrandTitle.classList.remove('text-white');
                }
                if (navBrandSubtitle) {
                    navBrandSubtitle.classList.add('text-[#9b7529]');
                    navBrandSubtitle.classList.remove('text-stone-300');
                }
                if (navLogoCircle) {
                    navLogoCircle.classList.add('border-[#b38728]/50', 'bg-[#fcf9f2]');
                    navLogoCircle.classList.remove('border-white/40', 'bg-white/10');
                }
                if (mobileBtn) {
                    mobileBtn.classList.add('text-stone-700', 'hover:bg-stone-100');
                    mobileBtn.classList.remove('text-white', 'hover:bg-white/10');
                }
                links.forEach(link => {
                    if (link.getAttribute('href') === @json(route('home'))) {
                        link.classList.add('text-[#b38728]');
                        link.classList.remove('text-[#d4af37]');
                    } else {
                        link.classList.add('text-stone-600', 'hover:text-[#b38728]');
                        link.classList.remove('text-white/90', 'hover:text-[#d4af37]');
                    }
                });
            } else {
                // At top of homepage: crystal clear transparent navbar
                nav.classList.remove('bg-white/95', 'backdrop-blur-md', 'border-b', 'border-stone-200/60', 'shadow-[0_2px_15px_-3px_rgba(0,0,0,0.06)]');
                nav.classList.add('bg-transparent', 'border-transparent', 'shadow-none');
                
                if (navBrandTitle) {
                    navBrandTitle.classList.remove('text-[#231e17]');
                    navBrandTitle.classList.add('text-white');
                }
                if (navBrandSubtitle) {
                    navBrandSubtitle.classList.remove('text-[#9b7529]');
                    navBrandSubtitle.classList.add('text-stone-300');
                }
                if (navLogoCircle) {
                    navLogoCircle.classList.remove('border-[#b38728]/50', 'bg-[#fcf9f2]');
                    navLogoCircle.classList.add('border-white/40', 'bg-white/10');
                }
                if (mobileBtn) {
                    mobileBtn.classList.remove('text-stone-700', 'hover:bg-stone-100');
                    mobileBtn.classList.add('text-white', 'hover:bg-white/10');
                }
                links.forEach(link => {
                    if (link.getAttribute('href') === @json(route('home'))) {
                        link.classList.remove('text-[#b38728]');
                        link.classList.add('text-[#d4af37]');
                    } else {
                        link.classList.remove('text-stone-600', 'hover:text-[#b38728]');
                        link.classList.add('text-white/90', 'hover:text-[#d4af37]');
                    }
                });
            }
        }

        window.addEventListener('scroll', handleScroll);
        handleScroll();
    });
</script>
