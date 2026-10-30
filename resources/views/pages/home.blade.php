@extends('layouts.app')

@section('content')

@php
    $hero = $heroSections->first();

    // Curated Romantic Haute Couture & Bridal Atelier Copy Pool
    $atelierStories = [
        [
            'heading_main' => 'ក្ដីស្រមៃនៃថ្ងៃមង្គលការ',
            'heading_sub' => 'ត្រូវបានបង្កើតឡើងយ៉ាងល្អឥតខ្ចោះ',
            'description' => 'សិល្បៈប៉ាក់ឌិនរ៉ូបមង្គលការ និងសម្លៀកបំពាក់កាត់ដេរកម្រិតខ្ពស់ ដោយរួមបញ្ចូលគ្នានូវក្បូរក្បាច់ខ្មែរប្រពៃណី និងសោភ័ណភាពទាន់សម័យ។ យើងផ្ចិតផ្ចង់លើគ្រប់គ្រាប់អង្កាំ និងត្បូងពេជ្រ ដើម្បីឱ្យអ្នកក្លាយជាតួឯកដ៏ត្រចះត្រចង់បំផុតក្នុងថ្ងៃពិសេស។',
            'button_text' => 'ពិភាក្សាអំពីគម្រោងរបស់អ្នក',
        ],
        [
            'heading_main' => 'សិល្បៈច្នៃម៉ូដប៉ាក់ឌិនដោយដៃ',
            'heading_sub' => 'សម្រិតសម្រាំងគ្រប់ព័ត៌មានលម្អិត',
            'description' => 'ពីក្បាច់ផ្ការំដួល ផ្កាចន្ទន៍ រហូតដល់ការបង្កប់គ្រាប់ត្បូងគ្រីស្តាល់ចែងចាំង អាទឺលីយេ SM Embellishment បង្កើតឡើងនូវស្នាដៃវិចិត្រលើសម្លៀកបំពាក់ ដែលឆ្លុះបញ្ចាំងពីភាពថ្លៃថ្នូរ និងភាពទាក់ទាញមិនចេះរសាត់។',
            'button_text' => 'ស្វែងយល់ពីស្នាដៃរបស់យើង',
        ],
        [
            'heading_main' => 'រចនាសម្ព័ន្ធនៃភាពប្រណីត',
            'heading_sub' => 'សោភ័ណភាពសិល្បៈមិនចេះរសាត់',
            'description' => 'យើងប្តេជ្ញាចិត្តច្នៃសម្លៀកបំពាក់កូនក្រមុំ និងរ៉ូបរាត្រីសមោសរ ឱ្យក្លាយជាផ្ទាំងទស្សនីយភាពដ៏អស្ចារ្យ។ រាល់ស្នាមដេរប៉ាក់ និងសរសៃអំបោះមាស គឺដើម្បីភាពលេចធ្លោរបស់អ្នក។',
            'button_text' => 'ទស្សនាកម្រងស្នាដៃ',
        ],
        [
            'heading_main' => 'គំនិតច្នៃម៉ូដរបស់អ្នក',
            'heading_sub' => 'ត្រូវបានបង្កើតឡើងយ៉ាងប្រណីត',
            'description' => 'សេវាកម្មប៉ាក់ឌិន និងក្បូរក្បាច់ដោយដៃកម្រិតខ្ពស់ សម្រាប់ហាងកាត់ដេរល្បីៗ អ្នករចនាម៉ូដ និងពិធីមង្គលការដ៏វិសេសវិសាល ដែលផ្តល់តម្លៃលើភាពផ្ចិតផ្ចង់ និងសិល្បៈមិនចេះរសាត់។',
            'button_text' => 'កក់ការពិគ្រោះយោបល់',
        ],
        [
            'heading_main' => 'សិល្បៈប៉ាក់ឌិនបែបខ្មែរជាន់ខ្ពស់,',
            'heading_sub' => 'ឆ្លុះបញ្ចាំងពីតម្លៃនៃក្តីស្រឡាញ់',
            'description' => 'បន្ស៉ំនូវក្បាច់ផ្ការំដួលមាស និងការដាំគ្រាប់ត្បូងអូទ្រីសដោយដៃសុទ្ធសាធ ដើម្បីបង្កើតនូវរ៉ូបអាពាហ៍ពិពាហ៍ក្នុងក្តីស្រមៃ ដែលពោរពេញដោយភាពថ្លៃថ្នូរ និងមន្តស្នេហ៍មិនអាចកាត់ថ្លៃបាន។',
            'button_text' => 'ពិភាក្សាជាមួយប្រធានជាង',
        ],
    ];

    // Pick a random poetic title and content pairing on each refresh
    $currentStory = $atelierStories[array_rand($atelierStories)];
@endphp

{{-- ============================================= --}}
{{-- 1. HERO SECTION (100% Fullscreen Bridal/Couture in Khmer) --}}
{{-- ============================================= --}}
<section class="relative w-full h-screen min-h-[100dvh] max-h-screen flex items-center bg-[#161310] overflow-hidden pt-16 sm:pt-20">
    {{-- Hero Background Image with Soft Warm Vignette & Radiant Golden Sun --}}
    <div class="absolute inset-0 z-0 w-full h-full">
        <img src="{{ $hero?->background_image ? asset('storage/' . $hero->background_image) : asset('images/hero-bg.jpg') }}" 
             alt="SM Embellishment Atelier" 
             class="w-full h-full object-cover object-[78%_25%] sm:object-center lg:object-[82%_25%] filter brightness-[0.85] contrast-[1.05] transition-transform duration-1000 scale-100 hover:scale-[1.02]">
        
        {{-- Luxury Editorial Gradient Overlays --}}
        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/55 to-black/20 lg:from-black/80 lg:via-black/35 lg:to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>
        <div class="absolute inset-0 bg-[#261f17]/20 mix-blend-multiply"></div>
    </div>

    {{-- Falling Golden Romduol Flowers Canvas (Snow-drop Effect) --}}
    <canvas id="romduol-canvas" class="absolute inset-0 z-10 w-full h-full pointer-events-none"></canvas>

    {{-- Hero Content --}}
    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16 w-full">
        <div class="max-w-4xl lg:max-w-5xl space-y-6">
            
            {{-- Romantic Haute Couture Headline (Poetic Luxury Khmer Copy - KH ABC FANCY 11 Italic) --}}
            <h1 class="font-fancy font-normal text-white tracking-tight flex flex-col gap-2 lg:gap-4">
                <span class="text-4xl sm:text-6xl md:text-7xl lg:text-[70px] text-white leading-[1.1] lg:leading-[1.15] drop-shadow-md">
                    {{ $currentStory['heading_main'] }}
                </span>
                <span class="text-2xl sm:text-3xl md:text-4xl lg:text-[38px] italic font-fancy text-gold-metallic leading-[1.25] drop-shadow-sm">
                    {{ $currentStory['heading_sub'] }}
                </span>
            </h1>

            {{-- Editorial Subtitle --}}
            <p class="text-sm sm:text-base text-stone-200/90 leading-relaxed font-sans font-light max-w-xl">
                {{ $currentStory['description'] }}
            </p>

            {{-- Primary Action Button --}}
            <div class="pt-4 flex items-center gap-6">
                <a href="{{ route('contact') }}" class="btn-shimmer inline-flex items-center justify-center bg-[#b38728] hover:bg-[#996e1b] text-white px-8 py-3.5 rounded-full text-xs font-sans font-semibold tracking-wider transition-all shadow-md hover:shadow-lg">
                    {{ $currentStory['button_text'] }}
                </a>
            </div>

        </div>
    </div>

    {{-- Downward Scroll Prompt --}}
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-1.5 text-white/70 hover:text-white transition-colors cursor-pointer group" onclick="document.getElementById('pillars-section')?.scrollIntoView({behavior: 'smooth'})">
        <span class="text-[9px] font-sans tracking-[0.2em] uppercase text-stone-300/80 group-hover:text-white transition-colors">ស្វែងយល់បន្ថែម</span>
        <svg class="w-4 h-4 text-[#b38728] animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
    </div>
</section>

{{-- ============================================= --}}
{{-- STYLE 3: THE GOLDEN THREAD CONNECTOR 1 (Hero to Pillars) --}}
{{-- ============================================= --}}
<div class="relative w-full h-14 -mt-7 z-30 pointer-events-none flex items-center justify-center overflow-hidden">
    <svg class="w-full max-w-4xl h-14" viewBox="0 0 1000 60" fill="none" preserveAspectRatio="none">
        <defs>
            <linearGradient id="threadGoldGrad1" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#b38728" stop-opacity="0" />
                <stop offset="20%" stop-color="#d4af37" stop-opacity="0.75" />
                <stop offset="50%" stop-color="#fff4c2" stop-opacity="1" />
                <stop offset="80%" stop-color="#d4af37" stop-opacity="0.75" />
                <stop offset="100%" stop-color="#b38728" stop-opacity="0" />
            </linearGradient>
        </defs>
        <path d="M 50 30 Q 250 55, 480 30 T 950 30" stroke="url(#threadGoldGrad1)" stroke-width="1.8" class="golden-thread-stitch" />
        {{-- Golden Embroidery Needle & Thread Eye --}}
        <g transform="translate(490, 30)" class="animate-needle-glint">
            <path d="M -18 -4 L 14 -1 L 20 0 L 14 1 L -18 4 Z" fill="url(#threadGoldGrad1)" />
            <ellipse cx="-11" cy="0" rx="3" ry="0.9" fill="#1c1813" />
            <circle cx="0" cy="0" r="2.5" fill="#fff5cc" />
        </g>
    </svg>
</div>

{{-- ============================================= --}}
{{-- 2. PILLARS / ICONS ("យើងប៉ាក់ឌិន, អ្នកជាតួឯកដ៏ត្រចះត្រចង់") --}}
{{-- ============================================= --}}
<section id="pillars-section" class="py-28 bg-silk-alabaster relative overflow-hidden border-b border-[#e8ddcb]/70">
    {{-- Ambient Gold Glow Orb --}}
    <div class="ambient-gold-glow -top-32 left-1/2 -translate-x-1/2 opacity-70"></div>
    <div class="ambient-gold-glow -bottom-32 -right-20 opacity-40"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Title with Delicate Diamond Divider --}}
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-3">
            <h2 class="text-xs sm:text-sm font-sans font-semibold tracking-wider text-gold-metallic uppercase">
                យើងប៉ាក់ឌិន, អ្នកជាតួឯកដ៏ត្រចះត្រចង់
            </h2>
            
            {{-- Khmer Stylized Kbach Phka Chan Divider --}}
            <div class="flex items-center justify-center gap-3 text-[#b38728] py-1">
                <span class="h-[1px] w-14 bg-gradient-to-r from-transparent via-[#b38728]/40 to-[#b38728]"></span>
                <svg class="w-5 h-5 text-[#b38728]" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5zm0 10c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5z" />
                    <circle cx="12" cy="12" r="1.8" />
                </svg>
                <span class="h-[1px] w-14 bg-gradient-to-l from-transparent via-[#b38728]/40 to-[#b38728]"></span>
            </div>

            <p class="text-xs sm:text-sm text-stone-600 font-sans leading-relaxed pt-1">
                ពីរ៉ូបមង្គលការកូនក្រមុំដ៏ប្រណីត រហូតដល់កម្រងសម្លៀកបំពាក់ដើរបង្ហាញម៉ូដលំដាប់អន្តរជាតិ យើងបង្កើតសិល្បៈប៉ាក់ឌិនដោយដៃដែលឆ្លុះបញ្ចាំងពីតម្លៃ និងភាពលេចធ្លោរបស់អ្នក។
            </p>
        </div>

        {{-- 4 Khmer Traditional Art Style Pillars inside Glass Couture Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-7 text-center">
            
            {{-- Pillar 1: ក្បាច់ផ្កាចន្ទន៍ (Kbach Phka Chan - Royal Khmer Star Jasmine Motif) --}}
            <div class="glass-couture rounded-2xl p-7 text-center space-y-4 group">
                <div class="w-16 h-16 mx-auto flex items-center justify-center text-[#b38728] rounded-full bg-white/80 border border-[#e6d6ba] shadow-sm group-hover:scale-110 group-hover:border-[#b38728] group-hover:shadow-[0_4px_16px_rgba(179,135,40,0.25)] transition-all duration-300">
                    <svg class="w-9 h-9" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M24 4c2.5 5 5 7.5 10 10-5 2.5-7.5 5-10 10-2.5-5-5-7.5-10-10 5-2.5 7.5-5 10-10z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M24 44c2.5-5 5-7.5 10-10-5-2.5-7.5-5-10-10-2.5 5-5 7.5-10 10 5 2.5 7.5 5 10 10z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 24c5 2.5 7.5 5 10 10 2.5-5 5-7.5 10-10-5-2.5-7.5-5-10-10-2.5 5-5 7.5-10 10z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M44 24c-5 2.5-7.5 5-10 10-2.5-5-5-7.5-10-10 5-2.5 7.5-5 10-10 2.5 5 5 7.5 10 10z" />
                        <circle cx="24" cy="24" r="3.5" fill="currentColor" fill-opacity="0.25" />
                        <circle cx="24" cy="24" r="1.5" fill="currentColor" />
                    </svg>
                </div>
                <h3 class="text-xs font-semibold tracking-wider text-[#231e17] font-sans group-hover:text-[#b38728] transition-colors">
                    ក្បូរក្បាច់ផ្កាចន្ទន៍ប្រណីត
                </h3>
                <p class="text-xs text-stone-500 leading-relaxed font-sans">
                    រាល់គ្រាប់អង្កាំ ត្បូង និងសរសៃអំបោះ ត្រូវបានសម្រិតសម្រាំងតាមទម្រង់ម៉ូដ និងចំណូលចិត្តរបស់អ្នក។
                </p>
            </div>

            {{-- Pillar 2: ក្បាច់ផ្ការំដួលក្បូរបុរាណ (Khmer Royal Romduol Blossom) --}}
            <div class="glass-couture rounded-2xl p-7 text-center space-y-4 group">
                <div class="w-16 h-16 mx-auto flex items-center justify-center text-[#b38728] rounded-full bg-white/80 border border-[#e6d6ba] shadow-sm group-hover:scale-110 group-hover:border-[#b38728] group-hover:shadow-[0_4px_16px_rgba(179,135,40,0.25)] transition-all duration-300">
                    <svg class="w-9 h-9" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M24 6c0 0-4 7-8 12 5 2 11 2 16 0-4-5-8-12-8-12z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 32c0 0 8-1 13-5-2-5-5-10-10-10-2 5-3 15-3 15z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M40 32c0 0-8-1-13-5 2-5 5-10 10-10 2 5 3 15 3 15z" />
                        <circle cx="24" cy="25" r="7" stroke-linecap="round" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M24 18v7m0 0l-5 4m5-4l5 4" />
                        <circle cx="24" cy="25" r="2.2" fill="currentColor" fill-opacity="0.3" />
                    </svg>
                </div>
                <h3 class="text-xs font-semibold tracking-wider text-[#231e17] font-sans group-hover:text-[#b38728] transition-colors">
                    ក្បាច់ផ្ការំដួលតាមតម្រូវការ
                </h3>
                <p class="text-xs text-stone-500 leading-relaxed font-sans">
                    គំនិតច្នៃក្បូរក្បាច់ថ្មីៗ និងការធ្វើតេស្តគំរូក្រណាត់ផ្ទាល់ ដើម្បីធានាថាប្លែក និងទាក់ទាញបំផុត។
                </p>
            </div>

            {{-- Pillar 3: ក្បាច់មង្កុដរាជនីខ្មែរ (Royal Khmer Mokot / Bridal Crown Filigree) --}}
            <div class="glass-couture rounded-2xl p-7 text-center space-y-4 group">
                <div class="w-16 h-16 mx-auto flex items-center justify-center text-[#b38728] rounded-full bg-white/80 border border-[#e6d6ba] shadow-sm group-hover:scale-110 group-hover:border-[#b38728] group-hover:shadow-[0_4px_16px_rgba(179,135,40,0.25)] transition-all duration-300">
                    <svg class="w-9 h-9" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M24 4v7m-3 5h6m-5 4h4" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M24 4l-4 12h8L24 4z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 24h16l-2 8H18l-2-8z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 24c-4-3-8-1-10 3 4 1 7 4 8 7m18-10c4-3 8-1 10 3-4 1-7 4-8 7" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 36c4 2 12 3 24 0l-1 5c-7 2-15 2-22 0l-1-5z" />
                        <circle cx="24" cy="28" r="1.5" fill="currentColor" />
                    </svg>
                </div>
                <h3 class="text-xs font-semibold tracking-wider text-[#231e17] font-sans group-hover:text-[#b38728] transition-colors">
                    ក្បាច់មង្កុដប្រណីតឥតខ្ចោះ
                </h3>
                <p class="text-xs text-stone-500 leading-relaxed font-sans">
                    ការប៉ាក់ដោយដៃពីជាងជំនាញច្បាស់លាស់ ធានាភាពស្មើ និងភាពជាប់មាំលើគ្រប់សាច់ក្រណាត់។
                </p>
            </div>

            {{-- Pillar 4: ក្បាច់ស្បៃសូត្រ & អំបោះមាស (Khmer Sacred Sbai & Golden Embroidery Needle & Thread) --}}
            <div class="glass-couture rounded-2xl p-7 text-center space-y-4 group">
                <div class="w-16 h-16 mx-auto flex items-center justify-center text-[#b38728] rounded-full bg-white/80 border border-[#e6d6ba] shadow-sm group-hover:scale-110 group-hover:border-[#b38728] group-hover:shadow-[0_4px_16px_rgba(179,135,40,0.25)] transition-all duration-300">
                    <svg class="w-9 h-9" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M38 10L14 34m24-24l-4 4m4-4l-3-3c-.8-.8-2-.8-2.8 0l-1.4 1.4" />
                        <circle cx="37" cy="11" r="1" fill="currentColor" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 34c-4 4-8 2-8-2 0-6 8-8 12-6 5 2 8 8 6 13-2 5-8 7-13 4" />
                        <circle cx="8" cy="30" r="1.5" fill="currentColor" />
                        <circle cx="18" cy="40" r="1.5" fill="currentColor" />
                    </svg>
                </div>
                <h3 class="text-xs font-semibold tracking-wider text-[#231e17] font-sans group-hover:text-[#b38728] transition-colors">
                    ក្បាច់ស្បៃសូត្រយូរអង្វែង
                </h3>
                <p class="text-xs text-stone-500 leading-relaxed font-sans">
                    យើងបង្កើតស្នាដៃសិល្បៈលើសម្លៀកបំពាក់ ដែលរក្សាភាពស្រស់ស្អាតនិងចែងចាំងយូរអង្វែង។
                </p>
            </div>

        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- STYLE 3: THE GOLDEN THREAD CONNECTOR 2 (Pillars to Services) --}}
{{-- ============================================= --}}
<div class="relative w-full h-12 -my-6 z-20 pointer-events-none flex items-center justify-center overflow-hidden">
    <svg class="w-full max-w-3xl h-12" viewBox="0 0 800 40" fill="none">
        <path d="M 20 20 Q 220 38, 400 20 T 780 20" stroke="url(#threadGoldGrad1)" stroke-width="1.6" class="golden-thread-stitch" />
        <circle cx="400" cy="20" r="3.5" fill="#d4af37" stroke="#fff4c2" stroke-width="1.5" />
    </svg>
</div>

{{-- ============================================= --}}
{{-- 3. OUR SERVICES (3 Cinematic Atmospheric Image Cards) --}}
{{-- ============================================= --}}
<section class="py-28 bg-silk-champagne relative overflow-hidden border-t border-[#e8ddcb]/80">
    {{-- Ambient Light Drops --}}
    <div class="ambient-gold-glow -bottom-36 -left-20 opacity-60"></div>
    <div class="ambient-gold-glow -top-20 -right-20 opacity-50"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Header --}}
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <h2 class="text-xs sm:text-sm font-sans font-semibold tracking-wider text-gold-metallic uppercase">
                សេវាកម្មរបស់យើង
            </h2>
            <div class="flex items-center justify-center gap-3 text-[#b38728] py-1">
                <span class="h-[1px] w-14 bg-gradient-to-r from-transparent via-[#b38728]/40 to-[#b38728]"></span>
                <svg class="w-4 h-4 text-[#b38728]" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5zm0 10c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5z" />
                    <circle cx="12" cy="12" r="1.5" />
                </svg>
                <span class="h-[1px] w-14 bg-gradient-to-l from-transparent via-[#b38728]/40 to-[#b38728]"></span>
            </div>
        </div>

        {{-- 3 Services Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            {{-- Service Card 1 --}}
            <a href="{{ route('services') }}" class="group relative aspect-[3/4] rounded-2xl overflow-hidden bg-stone-900 shadow-xl border border-[#b38728]/25 hover:border-[#b38728] transition-all duration-500 hover:-translate-y-2.5 hover:shadow-[0_24px_50px_-10px_rgba(179,135,40,0.38)] luxury-card-sheen block cursor-pointer">
                <img src="https://images.unsplash.com/photo-1544078751-58fee2d8a03b?auto=format&fit=crop&w=800&q=80" alt="Full Couture Planning" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 filter brightness-[0.82] group-hover:brightness-[0.96]">
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent flex flex-col justify-end p-5 sm:p-6 text-center text-white">
                    <div class="glass-couture-dark rounded-2xl p-5 text-center transform transition-all duration-500 group-hover:-translate-y-1">
                        <div class="w-11 h-11 mx-auto mb-3 rounded-full border border-[#b38728]/60 bg-black/50 backdrop-blur-sm flex items-center justify-center text-[#d4af37] group-hover:bg-[#b38728] group-hover:text-white group-hover:border-[#ffd700] group-hover:scale-110 group-hover:shadow-[0_0_16px_rgba(212,175,55,0.6)] transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M19 5l-9 9m9-9l-3 3m3-3l-2-2a2 2 0 00-2.8 0L9.8 4.6M10 14c-3 3-6 1-6-2 0-4 6-5 9-4 4 1 6 6 4 10-2 4-6 5-10 3"/></svg>
                        </div>
                        <h3 class="text-sm sm:text-base font-semibold tracking-wider mb-2 font-sans text-white group-hover:text-[#ffd700] transition-colors duration-300">
                            ប៉ាក់ឌិនកាត់ដេរកម្រិតខ្ពស់
                        </h3>
                        <p class="text-xs text-stone-300 font-sans leading-relaxed mb-4 max-w-xs mx-auto group-hover:text-white transition-colors duration-300">
                            យើងគ្រប់គ្រងរាល់ដំណើរការ ចាប់តាំងពីគំនូសព្រាងម៉ូដដំបូង រហូតដល់ការប៉ាក់សម្រេចជាស្ថាពរ។
                        </p>
                        <div class="inline-flex items-center justify-center gap-2 text-xs font-sans font-semibold tracking-wider text-[#e6d6ba] group-hover:text-[#ffd700] transition-colors py-1 px-3.5 rounded-full border border-white/10 group-hover:border-[#b38728]/60 group-hover:bg-white/5">
                            <span>ស្វែងយល់បន្ថែម</span>
                            <span class="group-hover:translate-x-1.5 transition-transform duration-300 font-bold">→</span>
                        </div>
                    </div>
                </div>
            </a>

            {{-- Service Card 2 --}}
            <a href="{{ route('services') }}" class="group relative aspect-[3/4] rounded-2xl overflow-hidden bg-stone-900 shadow-xl border border-[#b38728]/25 hover:border-[#b38728] transition-all duration-500 hover:-translate-y-2.5 hover:shadow-[0_24px_50px_-10px_rgba(179,135,40,0.38)] luxury-card-sheen block cursor-pointer">
                <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=800&q=80" alt="Bridal & Crystal Embellishment" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 filter brightness-[0.82] group-hover:brightness-[0.96]">
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent flex flex-col justify-end p-5 sm:p-6 text-center text-white">
                    <div class="glass-couture-dark rounded-2xl p-5 text-center transform transition-all duration-500 group-hover:-translate-y-1">
                        <div class="w-11 h-11 mx-auto mb-3 rounded-full border border-[#b38728]/60 bg-black/50 backdrop-blur-sm flex items-center justify-center text-[#d4af37] group-hover:bg-[#b38728] group-hover:text-white group-hover:border-[#ffd700] group-hover:scale-110 group-hover:shadow-[0_0_16px_rgba(212,175,55,0.6)] transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M12 3l3 4.5L12 12 9 7.5 12 3zm0 9l5 9H7l5-9zm8-4.5l-3 4.5 4 4.5 2-9h-3zm-16 0l3 4.5-4 4.5-2-9h3z"/></svg>
                        </div>
                        <h3 class="text-sm sm:text-base font-semibold tracking-wider mb-2 font-sans text-white group-hover:text-[#ffd700] transition-colors duration-300">
                            ដាំគ្រាប់អង្កាំ & ត្បូងរ៉ូបកូនក្រមុំ
                        </h3>
                        <p class="text-xs text-stone-300 font-sans leading-relaxed mb-4 max-w-xs mx-auto group-hover:text-white transition-colors duration-300">
                            ការដាំត្បូងអូទ្រីស គ្រាប់អង្កាំថ្លៃថ្នូរ និងគុជខ្យងធម្មជាតិ យ៉ាងផ្ចិតផ្ចង់លើរ៉ូប និងស្បៃកូនក្រមុំ។
                        </p>
                        <div class="inline-flex items-center justify-center gap-2 text-xs font-sans font-semibold tracking-wider text-[#e6d6ba] group-hover:text-[#ffd700] transition-colors py-1 px-3.5 rounded-full border border-white/10 group-hover:border-[#b38728]/60 group-hover:bg-white/5">
                            <span>ស្វែងយល់បន្ថែម</span>
                            <span class="group-hover:translate-x-1.5 transition-transform duration-300 font-bold">→</span>
                        </div>
                    </div>
                </div>
            </a>

            {{-- Service Card 3 --}}
            <a href="{{ route('services') }}" class="group relative aspect-[3/4] rounded-2xl overflow-hidden bg-stone-900 shadow-xl border border-[#b38728]/25 hover:border-[#b38728] transition-all duration-500 hover:-translate-y-2.5 hover:shadow-[0_24px_50px_-10px_rgba(179,135,40,0.38)] luxury-card-sheen block cursor-pointer">
                <img src="https://images.unsplash.com/photo-1537633552985-df8429e8048b?auto=format&fit=crop&w=800&q=80" alt="Custom Swatches" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 filter brightness-[0.82] group-hover:brightness-[0.96]">
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent flex flex-col justify-end p-5 sm:p-6 text-center text-white">
                    <div class="glass-couture-dark rounded-2xl p-5 text-center transform transition-all duration-500 group-hover:-translate-y-1">
                        <div class="w-11 h-11 mx-auto mb-3 rounded-full border border-[#b38728]/60 bg-black/40 backdrop-blur-sm flex items-center justify-center text-[#d4af37] group-hover:bg-[#b38728] group-hover:text-white group-hover:border-[#ffd700] group-hover:scale-110 group-hover:shadow-[0_0_16px_rgba(212,175,55,0.6)] transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M7 6a3 3 0 100 6 3 3 0 000-6zm0 0l11 11m-11 1a3 3 0 100-6 3 3 0 000 6zm0 0l11-11M14 10l3-3m-1 7l2 2"/></svg>
                        </div>
                        <h3 class="text-sm sm:text-base font-semibold tracking-wider mb-2 font-sans text-white group-hover:text-[#ffd700] transition-colors duration-300">
                            ផលិតគំរូតេស្តក្រណាត់រហ័ស
                        </h3>
                        <p class="text-xs text-stone-300 font-sans leading-relaxed mb-4 max-w-xs mx-auto group-hover:text-white transition-colors duration-300">
                            ផ្ញើជូនគំរូតេស្តក្រណាត់ប៉ាក់ផ្ទាល់ក្នុងរយៈពេល ៤៨ ម៉ោង ដើម្បីឱ្យអ្នករចនាម៉ូដត្រួតពិនិត្យមុនកាត់ដេរ។
                        </p>
                        <div class="inline-flex items-center justify-center gap-2 text-xs font-sans font-semibold tracking-wider text-[#e6d6ba] group-hover:text-[#ffd700] transition-colors py-1 px-3.5 rounded-full border border-white/10 group-hover:border-[#b38728]/60 group-hover:bg-white/5">
                            <span>ស្វែងយល់បន្ថែម</span>
                            <span class="group-hover:translate-x-1.5 transition-transform duration-300 font-bold">→</span>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- 4. FEATURED STORIES / PORTFOLIO (Warm Silk Ivory Background) --}}
{{-- ============================================= --}}
<section class="py-28 bg-silk-ivory relative overflow-hidden border-t border-[#e8ddcb]/80">
    {{-- Ambient Light Drops --}}
    <div class="ambient-gold-glow -top-32 left-1/4 opacity-40"></div>
    <div class="ambient-gold-glow -bottom-32 right-10 opacity-35"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            {{-- Left Column: Editorial Text (Col-span 4) inside subtle glass container --}}
            <div class="lg:col-span-4 space-y-6">
                <span class="text-xs font-sans font-semibold tracking-wider text-[#9b7529] uppercase block">
                    ស្នាដៃឆ្នើមៗរបស់យើង
                </span>
                
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif font-normal text-[#221d16] leading-snug">
                    ដំណើររឿងមិនចេះរសាត់ <br>
                    <span class="italic font-serif text-gold-metallic">ត្រូវបានច្នៃឡើងយ៉ាងស្រស់ស្អាត</span>
                </h2>

                <p class="text-xs sm:text-sm text-stone-600 font-sans leading-relaxed">
                    ស្វែងយល់ពីស្នាដៃកាត់ដេរ និងប៉ាក់ឌិនជាក់ស្តែង សម្រាប់ពិធីមង្គលការ និងកម្មវិធីដើរបង្ហាញម៉ូដធំៗ ដែលយើងមានកិត្តិយសបានសហការផលិត។
                </p>

                <div class="pt-2">
                    <a href="{{ route('portfolio') }}" class="btn-shimmer inline-flex items-center justify-center bg-[#b38728] hover:bg-[#996e1b] text-white px-8 py-3.5 rounded-full text-xs font-sans font-semibold tracking-wider transition-all shadow-md hover:shadow-lg">
                        មើលស្នាដៃទាំងអស់
                    </a>
                </div>
            </div>

            {{-- Right Column: 3 Side-by-Side Gallery Cards (Col-span 8) --}}
            <div class="lg:col-span-8">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                    
                    {{-- Picture 1 --}}
                    <a href="{{ route('portfolio') }}" class="group aspect-[3/4] rounded-2xl overflow-hidden bg-stone-200 shadow-md relative cursor-pointer border-2 border-transparent hover:border-[#b38728] hover:-translate-y-3 hover:shadow-[0_20px_35px_-8px_rgba(179,135,40,0.35),0_10px_20px_-5px_rgba(0,0,0,0.15)] transition-all duration-500 ease-out block">
                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=600&q=80" alt="Bridal Embroidery" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 filter group-hover:brightness-[1.04]">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-5">
                            <span class="text-[10px] font-sans font-semibold tracking-widest text-[#e6d6ba] uppercase transform translate-y-3 group-hover:translate-y-0 transition-transform duration-500">
                                Haute Couture
                            </span>
                            <p class="text-xs sm:text-sm font-serif text-white font-medium flex items-center justify-between mt-1 transform translate-y-3 group-hover:translate-y-0 transition-transform duration-500 delay-75">
                                <span>ក្បាច់ប៉ាក់រ៉ូបមង្គលការ</span>
                                <span class="w-7 h-7 rounded-full bg-[#b38728] text-white flex items-center justify-center text-xs shadow-md">→</span>
                            </p>
                        </div>
                    </a>

                    {{-- Picture 2 --}}
                    <a href="{{ route('portfolio') }}" class="group aspect-[3/4] rounded-2xl overflow-hidden bg-stone-200 shadow-md relative cursor-pointer border-2 border-transparent hover:border-[#b38728] hover:-translate-y-3 hover:shadow-[0_20px_35px_-8px_rgba(179,135,40,0.35),0_10px_20px_-5px_rgba(0,0,0,0.15)] transition-all duration-500 ease-out block">
                        <img src="https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?auto=format&fit=crop&w=600&q=80" alt="Runway Table & Gown" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 filter group-hover:brightness-[1.04]">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-5">
                            <span class="text-[10px] font-sans font-semibold tracking-widest text-[#e6d6ba] uppercase transform translate-y-3 group-hover:translate-y-0 transition-transform duration-500">
                                Atelier Fashion
                            </span>
                            <p class="text-xs sm:text-sm font-serif text-white font-medium flex items-center justify-between mt-1 transform translate-y-3 group-hover:translate-y-0 transition-transform duration-500 delay-75">
                                <span>ក្បាច់ប៉ាក់ដើរបង្ហាញម៉ូដ</span>
                                <span class="w-7 h-7 rounded-full bg-[#b38728] text-white flex items-center justify-center text-xs shadow-md">→</span>
                            </p>
                        </div>
                    </a>

                    {{-- Picture 3 --}}
                    <a href="{{ route('portfolio') }}" class="group aspect-[3/4] rounded-2xl overflow-hidden bg-stone-200 shadow-md relative cursor-pointer border-2 border-transparent hover:border-[#b38728] hover:-translate-y-3 hover:shadow-[0_20px_35px_-8px_rgba(179,135,40,0.35),0_10px_20px_-5px_rgba(0,0,0,0.15)] transition-all duration-500 ease-out block">
                        <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?auto=format&fit=crop&w=600&q=80" alt="Couture Floral Setting" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 filter group-hover:brightness-[1.04]">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-5">
                            <span class="text-[10px] font-sans font-semibold tracking-widest text-[#e6d6ba] uppercase transform translate-y-3 group-hover:translate-y-0 transition-transform duration-500">
                                Royal Craftsmanship
                            </span>
                            <p class="text-xs sm:text-sm font-serif text-white font-medium flex items-center justify-between mt-1 transform translate-y-3 group-hover:translate-y-0 transition-transform duration-500 delay-75">
                                <span>ផ្កាផុស 3D & គ្រាប់អង្កាំ</span>
                                <span class="w-7 h-7 rounded-full bg-[#b38728] text-white flex items-center justify-center text-xs shadow-md">→</span>
                            </p>
                        </div>
                    </a>

                </div>

                <div class="flex items-center justify-end gap-2.5 mt-6">
                    <button class="w-9 h-9 rounded-full border border-stone-300 bg-white hover:bg-[#b38728] hover:border-[#b38728] hover:text-white text-stone-600 flex items-center justify-center transition-all duration-300 text-sm shadow-sm" aria-label="Previous">
                        ‹
                    </button>
                    <button class="w-9 h-9 rounded-full border border-stone-300 bg-white hover:bg-[#b38728] hover:border-[#b38728] hover:text-white text-stone-600 flex items-center justify-center transition-all duration-300 text-sm shadow-sm" aria-label="Next">
                        ›
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- STYLE 3: THE GOLDEN THREAD CONNECTOR 3 (Portfolio to Pricing) --}}
{{-- ============================================= --}}
<div class="relative w-full h-12 -my-6 z-20 pointer-events-none flex items-center justify-center overflow-hidden">
    <svg class="w-full max-w-3xl h-12" viewBox="0 0 800 40" fill="none">
        <path d="M 50 20 Q 300 38, 480 20 T 750 20" stroke="url(#threadGoldGrad1)" stroke-width="1.6" class="golden-thread-stitch" />
        <circle cx="480" cy="20" r="3.5" fill="#d4af37" stroke="#fff4c2" stroke-width="1.5" />
    </svg>
</div>


{{-- ============================================= --}}
{{-- 5. PRICING TIERS SECTION (Couture Glassmorphism & Champagne Atmosphere) --}}
{{-- ============================================= --}}
<section class="py-28 bg-silk-champagne relative overflow-hidden border-t border-[#e8ddcb]/80" id="pricing">
    {{-- Ambient Light Drops --}}
    <div class="ambient-gold-glow -top-32 right-1/4 opacity-50"></div>
    <div class="ambient-gold-glow -bottom-32 -left-20 opacity-45"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Header with Delicate Diamond Divider --}}
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <h2 class="text-xs sm:text-sm font-sans font-semibold tracking-wider text-gold-metallic uppercase">
                កញ្ចប់តម្លៃ និងសេវាកម្ម
            </h2>
            <div class="flex items-center justify-center gap-3 text-[#b38728] py-1">
                <span class="h-[1px] w-14 bg-gradient-to-r from-transparent via-[#b38728]/40 to-[#b38728]"></span>
                <svg class="w-4 h-4 text-[#b38728]" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5zm0 10c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5z" />
                    <circle cx="12" cy="12" r="1.5" />
                </svg>
                <span class="h-[1px] w-14 bg-gradient-to-l from-transparent via-[#b38728]/40 to-[#b38728]"></span>
            </div>
            <p class="text-xs sm:text-sm text-stone-600 font-sans leading-relaxed">
                តម្លៃប្រកបដោយតម្លាភាព ផ្អែកលើទំហំ និងកម្រិតនៃភាពផ្ចិតផ្ចង់នៃការងារកាត់ដេរសម្លៀកបំពាក់របស់អ្នក។
            </p>
        </div>

        {{-- 3 Pricing Cards Grid with Couture Glassmorphism --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
            
            {{-- Plan 1: Boutique Capsule (Glass Couture) --}}
            <div class="group relative glass-couture rounded-3xl p-8 sm:p-9 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-serif font-bold text-stone-900 group-hover:text-[#b38728] transition-colors">កញ្ចប់ទូទៅ</h3>
                        <span class="text-[10px] font-sans font-semibold uppercase tracking-wider text-stone-600 px-3 py-1 rounded-full bg-white/80 border border-[#e8ddcb]">
                            Capsule
                        </span>
                    </div>
                    <p class="text-xs text-stone-500 font-sans leading-relaxed mb-6">
                        ស័ក្តិសមសម្រាប់អ្នករចនាម៉ូដថ្មីថ្មោង ឬការផលិតគំរូដំបូងដែលត្រូវការភាពផ្ចិតផ្ចង់។
                    </p>

                    <div class="mb-6 pb-6 border-b border-[#e8ddcb]/70">
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl sm:text-4xl font-serif font-bold text-gold-metallic">$450</span>
                            <span class="text-xs text-stone-500 font-sans">/ ក្នុងមួយគម្រោង</span>
                        </div>
                        <p class="text-[11px] text-stone-400 font-sans mt-1">តម្លៃចាប់ផ្តើមសម្រាប់គំរូ ឬឈុតតូច</p>
                    </div>

                    {{-- Features List --}}
                    <ul class="space-y-3.5 text-xs text-stone-600 font-sans mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>ផលិតគំរូសាកល្បងរហូតដល់ ៣ ឈុត</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>ប៉ាក់គ្រាប់អង្កាំ និងផ្លាកភ្លឺដោយដៃ</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>រយៈពេលបញ្ចប់ពី ៧ ដល់ ១០ ថ្ងៃ</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>ពិគ្រោះយោបល់លើក្រណាត់ និងពណ៌ឥតគិតថ្លៃ</span>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('contact') }}" class="w-full inline-flex items-center justify-center gap-2 py-3.5 px-6 rounded-full bg-white/90 hover:bg-[#b38728] hover:text-white text-stone-800 border border-[#e8ddcb] hover:border-[#b38728] font-sans font-semibold text-xs tracking-wider transition-all shadow-sm hover:shadow-md">
                    ជ្រើសរើសកញ្ចប់នេះ
                </a>
            </div>

            {{-- Plan 2: Atelier Runway (Featured Glass Couture Gold) --}}
            <div class="group relative glass-couture-gold rounded-3xl p-8 sm:p-9 flex flex-col justify-between transform lg:-translate-y-3">
                {{-- Khmer Corner Kbach Filigree (Top Left & Top Right) --}}
                <div class="absolute top-3 left-3 text-[#b38728]/35 pointer-events-none">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 18V6a3 3 0 013-3h12M3 10c3 0 5-2 5-5M6 3c0 3 2 5 5 5"/>
                    </svg>
                </div>
                <div class="absolute top-3 right-3 text-[#b38728]/35 pointer-events-none scale-x-[-1]">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 18V6a3 3 0 013-3h12M3 10c3 0 5-2 5-5M6 3c0 3 2 5 5 5"/>
                    </svg>
                </div>

                {{-- Popular Badge with Khmer Ornament --}}
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
                    <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-[10px] font-sans font-semibold tracking-wider uppercase bg-[#b38728] text-white shadow-md animate-gold-halo">
                        <span>❖</span>
                        <span>ពេញនិយមបំផុត</span>
                    </span>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-4 mt-1">
                        <h3 class="text-lg font-serif font-bold text-stone-900 group-hover:text-[#996e1b] transition-colors">កញ្ចប់អស្ចារ្យ</h3>
                        <span class="text-[10px] font-sans font-semibold uppercase tracking-wider text-[#b38728] px-3 py-1 rounded-full bg-[#b38728]/15 border border-[#b38728]/30">
                            Runway
                        </span>
                    </div>
                    <p class="text-xs text-stone-600 font-sans leading-relaxed mb-6">
                        ការប៉ាក់ក្បូរក្បាច់ច្រើនជាន់ ផ្កាផុស 3D និងការដាំគ្រាប់ត្បូងអូទ្រីសចែងចាំង។
                    </p>

                    <div class="mb-6 pb-6 border-b border-[#b38728]/25">
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl sm:text-4xl font-serif font-bold text-gold-metallic">$1,250</span>
                            <span class="text-xs text-stone-500 font-sans">/ ក្នុងមួយគម្រោង</span>
                        </div>
                        <p class="text-[11px] text-[#b38728] font-sans mt-1">កញ្ចប់ពេញលេញ ជាមួយប្រធានជាងជំនាញផ្ទាល់</p>
                    </div>

                    {{-- Features List --}}
                    <ul class="space-y-3.5 text-xs text-stone-700 font-sans mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span class="font-medium">សម្រាប់សម្លៀកបំពាក់រហូតដល់ ១០ ឈុត</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>បច្ចេកទេសផ្កាផុស 3D & ដាំត្បូងកម្រិតខ្ពស់</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>រយៈពេលបញ្ចប់រហ័សពី ៤ ដល់ ៥ ថ្ងៃ</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>កែសម្រួលការរចនាដោយគ្មានដែនកំណត់</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>ជាងជំនាញជាន់ខ្ពស់មើលការខុសត្រូវផ្ទាល់</span>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('contact') }}" class="btn-shimmer w-full inline-flex items-center justify-center gap-2 py-3.5 px-6 rounded-full bg-[#b38728] hover:bg-[#996e1b] text-white font-sans font-semibold text-xs tracking-wider transition-all shadow-md hover:shadow-lg">
                    កក់សេវាកម្មឥឡូវនេះ
                </a>
            </div>

            {{-- Plan 3: Haute Couture Bespoke (Glass Couture) --}}
            <div class="group relative glass-couture rounded-3xl p-8 sm:p-9 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-serif font-bold text-stone-900 group-hover:text-[#b38728] transition-colors">កញ្ចប់ពិសេស</h3>
                        <span class="text-[10px] font-sans font-semibold uppercase tracking-wider text-stone-600 px-3 py-1 rounded-full bg-white/80 border border-[#e8ddcb]">
                            Bespoke
                        </span>
                    </div>
                    <p class="text-xs text-stone-500 font-sans leading-relaxed mb-6">
                        សម្រាប់ហាងកាត់ដេរលំដាប់កំពូល រ៉ូបកូនក្រមុំ និងម៉ាកម៉ូដអន្តរជាតិ។
                    </p>

                    <div class="mb-6 pb-6 border-b border-[#e8ddcb]/70">
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl sm:text-4xl font-serif font-bold text-gold-metallic">តាមការចរចា</span>
                        </div>
                        <p class="text-[11px] text-stone-400 font-sans mt-1">ផ្អែកលើកម្រិតនៃភាពលម្អិត និងកម្រិតសាច់ក្រណាត់</p>
                    </div>

                    {{-- Features List --}}
                    <ul class="space-y-3.5 text-xs text-stone-600 font-sans mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>ការផលិតតាមការបញ្ជាទិញពិសេសគ្មានដែនកំណត់</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>គ្រាប់អង្កាំកម្រ គុជខ្យងធម្មជាតិ & ខ្សែអំបោះមាស</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>សេវាកម្មបន្ទាន់ពិសេសក្នុងរយៈពេល ៤៨ ម៉ោង</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>កិច្ចសន្យារក្សាការសម្ងាត់ម៉ូដផ្តាច់មុខ (NDA)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-[#b38728] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>ពិភាក្សាផ្ទាល់ជាមួយប្រធានជាងជំនាញ</span>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('contact') }}" class="w-full inline-flex items-center justify-center gap-2 py-3.5 px-6 rounded-full bg-white/90 hover:bg-[#b38728] hover:text-white text-stone-800 border border-[#e8ddcb] hover:border-[#b38728] font-sans font-semibold text-xs tracking-wider transition-all shadow-sm hover:shadow-md">
                    ស្នើសុំការពិគ្រោះយោបល់
                </a>
            </div>

        </div>

    </div>
</section>

{{-- ============================================= --}}
{{-- STYLE 3: THE GOLDEN THREAD CONNECTOR 4 (Pricing to Testimonials) --}}
{{-- ============================================= --}}
<div class="relative w-full h-12 -my-6 z-20 pointer-events-none flex items-center justify-center overflow-hidden">
    <svg class="w-full max-w-3xl h-12" viewBox="0 0 800 40" fill="none">
        <path d="M 30 20 Q 240 2, 400 20 T 770 20" stroke="url(#threadGoldGrad1)" stroke-width="1.6" class="golden-thread-stitch" />
        <circle cx="400" cy="20" r="3.5" fill="#d4af37" stroke="#fff4c2" stroke-width="1.5" />
    </svg>
</div>

    </div>
</section>


{{-- ============================================= --}}
{{-- 6. KIND WORDS / TESTIMONIAL (Couture Glass Capsule & Silk Alabaster) --}}
{{-- ============================================= --}}
<section class="py-32 bg-silk-alabaster relative overflow-hidden border-t border-[#e8ddcb]/80">
    {{-- Ambient Light Drops --}}
    <div class="ambient-gold-glow top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-70"></div>

    {{-- Traditional Khmer Filigree Vine Flourish (Left) --}}
    <div class="absolute left-4 lg:left-10 top-1/2 -translate-y-1/2 text-[#b38728]/25 pointer-events-none hidden md:block animate-float-lux">
        <svg class="w-32 h-72" viewBox="0 0 100 220" fill="none" stroke="currentColor" stroke-width="1.4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M30 210c8-35 2-65-15-95 18-5 32 10 30 28-2-32 15-62 35-82-8 20-3 42-12 55 18-18 25-42 18-68-15 15-32 20-45 18 10-18 20-42 12-62-10 12-22 22-38 20" />
            <circle cx="45" cy="140" r="2.5" fill="currentColor" />
            <circle cx="68" cy="110" r="2" fill="currentColor" />
            <circle cx="48" cy="65" r="2.2" fill="currentColor" />
            <circle cx="28" cy="20" r="1.8" fill="currentColor" />
        </svg>
    </div>
    {{-- Traditional Khmer Filigree Vine Flourish (Right) --}}
    <div class="absolute right-4 lg:right-10 top-1/2 -translate-y-1/2 text-[#b38728]/25 pointer-events-none hidden md:block scale-x-[-1] animate-float-lux" style="animation-delay: -2s;">
        <svg class="w-32 h-72" viewBox="0 0 100 220" fill="none" stroke="currentColor" stroke-width="1.4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M30 210c8-35 2-65-15-95 18-5 32 10 30 28-2-32 15-62 35-82-8 20-3 42-12 55 18-18 25-42 18-68-15 15-32 20-45 18 10-18 20-42 12-62-10 12-22 22-38 20" />
            <circle cx="45" cy="140" r="2.5" fill="currentColor" />
            <circle cx="68" cy="110" r="2" fill="currentColor" />
            <circle cx="48" cy="65" r="2.2" fill="currentColor" />
            <circle cx="28" cy="20" r="1.8" fill="currentColor" />
        </svg>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        
        {{-- Floating Glassmorphism Quote Capsule --}}
        <div class="glass-couture rounded-3xl p-8 sm:p-12 md:p-14 border border-[#b38728]/35 shadow-2xl space-y-6 relative">
            <h2 class="text-xs sm:text-sm font-sans font-semibold tracking-wider text-gold-metallic uppercase">
                ចំណាប់អារម្មណ៍ពីអតិថិជន
            </h2>

            <div class="flex items-center justify-center gap-3 text-[#b38728] py-1">
                <span class="h-[1px] w-14 bg-gradient-to-r from-transparent via-[#b38728]/40 to-[#b38728]"></span>
                <svg class="w-4 h-4 text-[#b38728]" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5zm0 10c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5z" />
                    <circle cx="12" cy="12" r="1.5" />
                </svg>
                <span class="h-[1px] w-14 bg-gradient-to-l from-transparent via-[#b38728]/40 to-[#b38728]"></span>
            </div>

            <div class="py-2">
                <p class="text-base sm:text-lg md:text-xl font-serif text-[#241e17] leading-relaxed max-w-2xl mx-auto">
                    <span class="text-3xl sm:text-4xl font-serif text-gold-metallic mr-1.5">“</span>
                    SM Embellishment បានធ្វើឱ្យកម្រងស្នាដៃលើឆាកដើរបង្ហាញម៉ូដរបស់យើងក្លាយជាការពិត។ ការយកចិត្តទុកដាក់លើរាល់ព័ត៌មានលម្អិត ភាពច្នៃប្រឌិត និងស្នាដៃដេរដោយដៃដ៏ផ្ចិតផ្ចង់របស់ពួកគេ គឺលើសពីអ្វីដែលយើងបានស្រមៃ។ យើងពិតជាពេញចិត្តជាខ្លាំង!
                    <span class="text-3xl sm:text-4xl font-serif text-gold-metallic ml-1.5">”</span>
                </p>
            </div>

            <p class="text-xs font-sans font-semibold tracking-wider uppercase text-stone-500">
                — អេមីលី & ជេមស៍, ហាងច្នៃម៉ូដជាន់ខ្ពស់
            </p>

            <div class="flex items-center justify-center gap-2 pt-2">
                <span class="w-1.5 h-1.5 rounded-full bg-[#b38728]"></span>
                <span class="w-1.5 h-1.5 rounded-full bg-stone-300"></span>
                <span class="w-1.5 h-1.5 rounded-full bg-stone-300"></span>
            </div>
        </div>

    </div>
</section>

{{-- ============================================= --}}
{{-- STYLE 3: THE GOLDEN THREAD CONNECTOR 5 (Testimonials to CTA) --}}
{{-- ============================================= --}}
<div class="relative w-full h-12 -my-6 z-20 pointer-events-none flex items-center justify-center overflow-hidden">
    <svg class="w-full max-w-3xl h-12" viewBox="0 0 800 40" fill="none">
        <path d="M 40 20 Q 260 38, 420 20 T 760 20" stroke="url(#threadGoldGrad1)" stroke-width="1.6" class="golden-thread-stitch" />
        <circle cx="420" cy="20" r="3.5" fill="#d4af37" stroke="#fff4c2" stroke-width="1.5" />
    </svg>
</div>

{{-- ============================================= --}}
{{-- 7. CALL TO ACTION (Split Banner with Silk Cashmere & Glass Framing) --}}
{{-- ============================================= --}}
<section class="py-24 bg-silk-cashmere border-t border-[#e8ddcb]/80 overflow-hidden relative">
    {{-- Ambient Light Drops --}}
    <div class="ambient-gold-glow -top-28 -left-20 opacity-50"></div>
    <div class="ambient-gold-glow -bottom-28 -right-20 opacity-50"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center min-h-[380px]">
            
            {{-- Left Text in Glass Couture Framing --}}
            <div class="lg:col-span-6 glass-couture rounded-3xl p-8 sm:p-12 border border-[#b38728]/35 shadow-xl space-y-6">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif font-normal text-[#221d16] leading-tight">
                    ចាប់ផ្តើមរៀបចំ <br>
                    <span class="italic font-serif text-gold-metallic">ភាពស្រស់ស្អាតរបស់អ្នក</span>
                </h2>

                <p class="text-xs sm:text-sm text-stone-600 font-sans leading-relaxed max-w-md">
                    យើងរីករាយនឹងស្តាប់នូវគំនិតច្នៃប្រឌិតរបស់អ្នក និងជួយបង្កើតសិល្បៈប៉ាក់ឌិនដែលស័ក្តិសមបំផុតសម្រាប់អ្នក។
                </p>

                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="btn-shimmer inline-flex items-center justify-center bg-[#b38728] hover:bg-[#996e1b] text-white px-8 py-3.5 rounded-full text-xs font-sans font-semibold tracking-wider transition-all shadow-md hover:shadow-lg">
                        ទាក់ទងមកយើងឥឡូវនេះ
                    </a>
                </div>
            </div>

            {{-- Right Image with Soft Gradient Fade --}}
            <div class="lg:col-span-6 h-full relative min-h-[360px] flex items-center justify-end">
                <div class="relative w-full h-[380px] overflow-hidden rounded-3xl shadow-xl border border-[#b38728]/30">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=1200&q=80" alt="Bridal Couture" class="w-full h-full object-cover object-center transition-transform duration-700 hover:scale-105">
                    <div class="absolute inset-y-0 left-0 w-36 bg-gradient-to-r from-black/40 via-transparent to-transparent lg:hidden"></div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('romduol-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    
    const flowerImg = new Image();
    flowerImg.src = "{{ asset('images/romduol-gold.webp') }}";
    
    let width = 0;
    let height = 0;
    let particles = [];
    let animationFrameId = null;
    
    function resize() {
        const parent = canvas.parentElement;
        width = canvas.width = parent ? parent.offsetWidth : window.innerWidth;
        height = canvas.height = parent ? parent.offsetHeight : window.innerHeight;
    }
    
    function createParticle(initial = false) {
        // Size between 14px and 32px for realistic depth-of-field
        const size = Math.random() * 18 + 14;
        return {
            x: Math.random() * width,
            y: initial ? Math.random() * height : -size - Math.random() * 30,
            size: size,
            speedY: Math.random() * 0.85 + 0.55,      // Gentle romantic snow-like descent
            speedX: (Math.random() - 0.5) * 0.4,       // Slight wind drift
            sway: Math.random() * Math.PI * 2,         // Sine sway phase
            swaySpeed: Math.random() * 0.015 + 0.008,  // Sway frequency
            swayWidth: Math.random() * 1.6 + 0.8,      // Sway amplitude
            rotation: Math.random() * Math.PI * 2,     // 2D spin angle
            rotationSpeed: (Math.random() - 0.5) * 0.018,
            flip: Math.random() * Math.PI * 2,         // 3D tumbling flip
            flipSpeed: Math.random() * 0.02 + 0.01,
            opacity: Math.random() * 0.45 + 0.55       // 0.55 to 1.0 opacity
        };
    }
    
    function init() {
        resize();
        const isMobile = window.innerWidth < 768;
        const count = isMobile ? 18 : 32;
        particles = [];
        for (let i = 0; i < count; i++) {
            particles.push(createParticle(true));
        }
    }
    
    function update() {
        ctx.clearRect(0, 0, width, height);
        
        for (let i = 0; i < particles.length; i++) {
            const p = particles[i];
            
            p.y += p.speedY;
            p.sway += p.swaySpeed;
            p.x += Math.sin(p.sway) * p.swayWidth + p.speedX;
            p.rotation += p.rotationSpeed;
            p.flip += p.flipSpeed;
            
            // Render golden Romduol flower with 3D tumble & gold ambient glow
            ctx.save();
            ctx.translate(p.x, p.y);
            ctx.rotate(p.rotation);
            ctx.scale(Math.cos(p.flip) * 0.55 + 0.45, 1);
            ctx.globalAlpha = p.opacity;
            
            // Soft golden aura shadow
            ctx.shadowColor = 'rgba(212, 175, 55, 0.45)';
            ctx.shadowBlur = 5;
            
            ctx.drawImage(flowerImg, -p.size / 2, -p.size / 2, p.size, p.size);
            ctx.restore();
            
            // Reset when flower reaches the bottom or drifts far offscreen
            if (p.y > height + p.size + 15 || p.x < -p.size - 25 || p.x > width + p.size + 25) {
                particles[i] = createParticle(false);
            }
        }
        
        animationFrameId = requestAnimationFrame(update);
    }
    
    if (flowerImg.complete) {
        init();
        update();
    } else {
        flowerImg.onload = function () {
            init();
            update();
        };
    }
    
    window.addEventListener('resize', function () {
        resize();
    });
});
</script>
@endpush
