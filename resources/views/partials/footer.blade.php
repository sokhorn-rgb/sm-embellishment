{{-- Romantic Atelier Footer in Khmer --}}
<footer class="bg-[#1c1813] text-[#e2d9cb] pt-20 pb-10 border-t border-[#2d271f]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-6 pb-16 border-b border-[#383025]">
            
            {{-- Column 1: Brand & Bio (Col-span 4) --}}
            <div class="lg:col-span-4 space-y-5">
                <a href="{{ route('home') }}" class="group inline-flex items-center gap-3.5 transition-transform duration-300">
                    <img src="{{ asset('images/logo.webp') }}" alt="ស្រីម៉ៅ​ មង្គល សម្អាងការ" class="h-12 sm:h-14 w-auto object-contain filter drop-shadow-[0_2px_8px_rgba(212,175,55,0.3)] transition-all duration-500 group-hover:scale-105 group-hover:drop-shadow-[0_4px_16px_rgba(212,175,55,0.6)]">
                    <div>
                        <h4 class="text-base sm:text-lg font-fancy font-normal tracking-wide text-white leading-tight transition-colors duration-300 group-hover:text-[#f3e5ab]">ស្រីម៉ៅ​ មង្គល សម្អាងការ</h4>
                    </div>
                </a>

                <p class="text-xs sm:text-sm text-[#d6ccb9] leading-relaxed max-w-sm font-sans">
                    សេវាកម្មច្នៃម៉ូដប៉ាក់ឌិន និងក្បូរក្បាច់ដោយដៃកម្រិតខ្ពស់ សម្រាប់ហាងកាត់ដេរល្បីៗ អ្នករចនាម៉ូដ និងពិធីមង្គលការដ៏វិសេសវិសាល ដែលផ្តល់តម្លៃលើភាពល្អប្រណីត និងសោភ័ណភាពមិនចេះរសាត់។
                </p>

                {{-- Social Icons with Luxury Hover Glow --}}
                <div class="flex items-center gap-3 pt-2">
                    <a href="#" class="w-9 h-9 rounded-full border border-[#6e5524]/80 text-[#e2d9cb] hover:text-[#f3e5ab] hover:border-[#b38728] hover:bg-[#b38728]/15 hover:scale-110 hover:shadow-[0_0_14px_rgba(212,175,55,0.4)] transition-all duration-300 flex items-center justify-center text-xs" aria-label="Instagram">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full border border-[#6e5524]/80 text-[#e2d9cb] hover:text-[#f3e5ab] hover:border-[#b38728] hover:bg-[#b38728]/15 hover:scale-110 hover:shadow-[0_0_14px_rgba(212,175,55,0.4)] transition-all duration-300 flex items-center justify-center text-xs" aria-label="Pinterest">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345-.09.375-.293 1.199-.334 1.365-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.546.535 6.627 0 12-5.373 12-12 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full border border-[#6e5524]/80 text-[#e2d9cb] hover:text-[#f3e5ab] hover:border-[#b38728] hover:bg-[#b38728]/15 hover:scale-110 hover:shadow-[0_0_14px_rgba(212,175,55,0.4)] transition-all duration-300 flex items-center justify-center text-xs" aria-label="Facebook">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Column 2: ស្វែងយល់ (Col-span 2) --}}
            <div class="lg:col-span-2 sm:col-span-1 space-y-4">
                <h5 class="text-xs font-semibold tracking-wider text-white mb-6 font-sans relative inline-block group/h">
                    ស្វែងយល់
                    <span class="block w-6 h-[1.5px] bg-[#b38728] mt-2 transition-all duration-300 group-hover/h:w-10"></span>
                </h5>
                <ul class="space-y-3 text-xs tracking-wide font-medium text-[#cec3b0]">
                    <li>
                        <a href="{{ route('home') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>ទំព័រដើម</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>អំពីយើង</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>សេវាកម្ម</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>ស្នាដៃ</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>វិចិត្រសាល</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>អត្ថបទ</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>ទំនាក់ទំនង</span>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 3: សេវាកម្ម (Col-span 3) --}}
            <div class="lg:col-span-3 sm:col-span-1 space-y-4">
                <h5 class="text-xs font-semibold tracking-wider text-white mb-6 font-sans relative inline-block group/h">
                    សេវាកម្មចម្បង
                    <span class="block w-6 h-[1.5px] bg-[#b38728] mt-2 transition-all duration-300 group-hover/h:w-10"></span>
                </h5>
                <ul class="space-y-3 text-xs text-[#cec3b0]">
                    <li>
                        <a href="{{ route('services') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>ប៉ាក់ឌិនរ៉ូបមង្គលការ & កាត់ដេរជាន់ខ្ពស់</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>ការបង្កប់ត្បូង និងគ្រាប់អង្កាំដោយដៃ</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>ក្បាច់ប៉ាក់ខ្សែអំបោះមាស និងប្រាក់</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>ច្នៃផ្កាផុស 3D និងស្រទាប់សំពត់កូនក្រមុំ</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="group/link flex items-center gap-1.5 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1.5">
                            <span class="w-0 h-[1.5px] bg-[#b38728] transition-all duration-300 group-hover/link:w-3"></span>
                            <span>គំរូតេស្តក្រណាត់រហ័ស (Swatch Sampling)</span>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 4: ទំនាក់ទំនង (Col-span 3) --}}
            <div class="lg:col-span-3 space-y-4">
                <h5 class="text-xs font-semibold tracking-wider text-white mb-6 font-sans relative inline-block group/h">
                    ទំនាក់ទំនង
                    <span class="block w-6 h-[1.5px] bg-[#b38728] mt-2 transition-all duration-300 group-hover/h:w-10"></span>
                </h5>
                <ul class="space-y-4 text-xs text-[#cec3b0]">
                    <li>
                        <a href="mailto:info@sm-embellishment.com" class="group/link flex items-start gap-3 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5 transition-transform duration-300 group-hover/link:scale-110 group-hover/link:text-[#f3e5ab]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span class="break-all">info@sm-embellishment.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+85523888999" class="group/link flex items-start gap-3 hover:text-[#f3e5ab] transition-all duration-300 hover:translate-x-1">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5 transition-transform duration-300 group-hover/link:scale-110 group-hover/link:text-[#f3e5ab]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>+855 23 888 999</span>
                        </a>
                    </li>
                    <li class="group/link flex items-start gap-3 hover:text-[#f3e5ab] transition-all duration-300">
                        <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5 transition-transform duration-300 group-hover/link:scale-110 group-hover/link:text-[#f3e5ab]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>អាគារអាទឺលីយេ លេខ ១០៨ វិថី ២៤០ ដូនពេញ រាជធានីភ្នំពេញ</span>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Bottom Copyright Bar --}}
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-[#b38728]">
            <p>&copy; {{ date('Y') }} SM Embellishment Atelier. រក្សាសិទ្ធិគ្រប់យ៉ាង។</p>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-[#f3e5ab] hover:underline underline-offset-4 decoration-[#b38728] transition-all duration-300">គោលការណ៍ឯកជនភាព</a>
                <a href="#" class="hover:text-[#f3e5ab] hover:underline underline-offset-4 decoration-[#b38728] transition-all duration-300">លក្ខខណ្ឌប្រើប្រាស់</a>
            </div>
        </div>

    </div>
</footer>
