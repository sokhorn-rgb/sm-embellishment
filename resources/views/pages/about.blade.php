@extends('layouts.app')

@section('content')

{{-- Breadcrumb & Header --}}
<section class="bg-[#faf6f0] border-b border-stone-200/60 py-16 text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-3">
        <p class="text-xs font-sans tracking-widest text-[#9b7529] uppercase">
            <a href="{{ route('home') }}" class="hover:text-[#b38728] transition-colors">ទំព័រដើម</a> / អំពីយើង
        </p>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif text-[#241e17] tracking-tight">
            ប្រវត្តិ & សិល្បៈច្នៃម៉ូដរបស់យើង
        </h1>
        <div class="flex items-center justify-center gap-3 text-[#b38728] pt-2">
            <span class="h-[1px] w-14 bg-gradient-to-r from-transparent via-[#b38728]/40 to-[#b38728]"></span>
            <svg class="w-4 h-4 text-[#b38728]" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5zm0 10c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5z" />
                <circle cx="12" cy="12" r="1.5" />
            </svg>
            <span class="h-[1px] w-14 bg-gradient-to-l from-transparent via-[#b38728]/40 to-[#b38728]"></span>
        </div>
    </div>
</section>

{{-- Main About / Story Section --}}
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            {{-- Image Showcase --}}
            <div class="relative">
                <div class="relative z-10 rounded-sm overflow-hidden shadow-lg border border-stone-200/80 aspect-[4/3] bg-stone-100">
                    @if($aboutSection && $aboutSection->image_url)
                        <img src="{{ $aboutSection->image_url }}" alt="About SM Embellishment" class="w-full h-full object-cover">
                    @else
                        <img src="https://images.unsplash.com/photo-1544078751-58fee2d8a03b?auto=format&fit=crop&w=1000&q=80" alt="SM Embellishment Atelier" class="w-full h-full object-cover">
                    @endif
                </div>

                {{-- Floating Badge in Luxury Dark Gold Accent --}}
                <div class="absolute -bottom-6 -right-6 z-20 bg-[#1c1813] text-white p-6 rounded-sm shadow-xl border border-[#383025] hidden sm:block max-w-[210px] text-center">
                    <div class="text-3xl font-serif font-bold text-[#e2d9cb]">10+</div>
                    <div class="text-[11px] font-sans tracking-wider text-[#baa47c] mt-1 uppercase">ឆ្នាំនៃបទពិសោធន៍ប៉ាក់ឌិនកម្រិតខ្ពស់</div>
                </div>
            </div>

            {{-- Story Content --}}
            <div class="space-y-6">
                <span class="text-xs font-sans font-semibold tracking-wider text-[#9b7529] uppercase block">
                    អំពី អាទឺលីយេ SM Embellishment
                </span>
                
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif font-normal text-[#221d16] leading-snug">
                    {{ $aboutSection->title ?? 'ការប្តេជ្ញាចិត្តលើសិល្បៈប៉ាក់ឌិនដ៏ប្រណីត' }}
                </h2>

                <div class="text-xs sm:text-sm text-stone-600 font-sans leading-relaxed space-y-4">
                    @if($aboutSection && $aboutSection->content)
                        {!! nl2br(e($aboutSection->content)) !!}
                    @else
                        <p>
                            ដោយមានចំណង់ចំណូលចិត្តយ៉ាងជ្រាលជ្រៅលើក្បូរក្បាច់ដ៏ល្អិតល្អន់ SM Embellishment បានសហការជាមួយអ្នកច្នៃម៉ូដ ហាងកាត់ដេរសម្លៀកបំពាក់កម្រិតខ្ពស់ និងម៉ាកល្បីៗ ដើម្បីបង្កើតការតុបតែងលម្អលើផ្ទៃក្រណាត់ដោយដៃ ដែលបន្សល់ទុកនូវភាពលេចធ្លោមិនអាចបំភ្លេចបាន។
                        </p>
                        <p>
                            រាល់គ្រាប់អង្កាំ ត្បូងកែវ និងសរសៃអំបោះ ត្រូវបានរៀបចំឡើងដោយគិតគូរយ៉ាងល្អិតល្អន់ពីទម្ងន់ ចលនា និងពន្លឺចែងចាំង។ យើងរួមបញ្ចូលគ្នានូវបច្ចេកទេសប៉ាក់បុរាណ ជាមួយនឹងសោភ័ណភាពទាន់សម័យ ដើម្បីធ្វើឱ្យគ្រប់គំនិតម៉ូដក្លាយជាការពិត។
                        </p>
                    @endif
                </div>

                {{-- Highlights Grid --}}
                <div class="grid grid-cols-2 gap-6 pt-6 border-t border-stone-200">
                    <div class="space-y-1">
                        <h4 class="font-serif font-bold text-stone-900 text-base">ជាងជំនាញច្បាស់លាស់</h4>
                        <p class="text-xs text-stone-500 font-sans leading-relaxed">បទពិសោធន៍ជាច្រើនឆ្នាំក្នុងវិស័យប៉ាក់ឌិនកម្រិតខ្ពស់។</p>
                    </div>
                    <div class="space-y-1">
                        <h4 class="font-serif font-bold text-stone-900 text-base">វត្ថុធាតុដើមល្អឯក</h4>
                        <p class="text-xs text-stone-500 font-sans leading-relaxed">នាំចូលគ្រាប់អង្កាំ ត្បូង និងអំបោះពីដៃគូផ្គត់ផ្គង់អន្តរជាតិ។</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Values / Pillars in Khmer Art Style --}}
<section class="py-24 bg-[#fdfcfb] border-t border-stone-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <h2 class="text-xs sm:text-sm font-sans font-semibold tracking-wider text-[#28221a] uppercase">
                គោលការណ៍របស់យើង
            </h2>
            <div class="flex items-center justify-center gap-3 text-[#b38728] py-1">
                <span class="h-[1px] w-14 bg-gradient-to-r from-transparent via-[#b38728]/40 to-[#b38728]"></span>
                <svg class="w-4 h-4 text-[#b38728]" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5zm0 10c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5z" />
                    <circle cx="12" cy="12" r="1.5" />
                </svg>
                <span class="h-[1px] w-14 bg-gradient-to-l from-transparent via-[#b38728]/40 to-[#b38728]"></span>
            </div>
            <p class="text-xs sm:text-sm text-stone-500 font-sans">
                អ្វីដែលដឹកនាំរាល់ស្នាមដេរប៉ាក់របស់យើងឱ្យមានគុណតម្លៃខ្ពស់បំផុត
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Pillar 1: ក្បាច់ផ្កាចន្ទន៍ប្រណីត --}}
            <div class="group bg-white p-8 rounded-sm border border-stone-200 shadow-sm hover:border-[#b38728] hover:shadow-md transition-all text-center space-y-4">
                <div class="w-14 h-14 mx-auto flex items-center justify-center text-[#b38728] rounded-full bg-[#faf6ed] border border-[#e6d6ba] group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M24 4c2.5 5 5 7.5 10 10-5 2.5-7.5 5-10 10-2.5-5-5-7.5-10-10 5-2.5 7.5-5 10-10z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M24 44c2.5-5 5-7.5 10-10-5-2.5-7.5-5-10-10-2.5 5-5 7.5-10 10 5 2.5 7.5 5 10 10z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 24c5 2.5 7.5 5 10 10 2.5-5 5-7.5 10-10-5-2.5-7.5-5-10-10-2.5 5-5 7.5-10 10z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M44 24c-5 2.5-7.5 5-10 10-2.5-5-5-7.5-10-10 5-2.5 7.5-5 10-10 2.5 5 5 7.5 10 10z" />
                        <circle cx="24" cy="24" r="2.5" fill="currentColor" />
                    </svg>
                </div>
                <h3 class="text-sm font-serif font-bold text-stone-900 uppercase tracking-wider group-hover:text-[#b38728] transition-colors">សិល្បៈមិនចេះរសាត់</h3>
                <p class="text-xs text-stone-500 leading-relaxed font-sans">យើងចាត់ទុកគ្រប់សម្លៀកបំពាក់ដូចជាផ្ទាំងគំនូរសិល្បៈ ដោយគោរពតាមបច្ចេកទេសប្រពៃណី និងច្នៃប្រឌិតក្បាច់ថ្មីៗជានិច្ច។</p>
            </div>

            {{-- Pillar 2: ក្បាច់មង្កុដរាជវាំង --}}
            <div class="group bg-white p-8 rounded-sm border border-stone-200 shadow-sm hover:border-[#b38728] hover:shadow-md transition-all text-center space-y-4">
                <div class="w-14 h-14 mx-auto flex items-center justify-center text-[#b38728] rounded-full bg-[#faf6ed] border border-[#e6d6ba] group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M24 4l-4 12h8L24 4zM16 24h16l-2 8H18l-2-8z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 24c-4-3-8-1-10 3 4 1 7 4 8 7m18-10c4-3 8-1 10 3-4 1-7 4-8 7" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 36c4 2 12 3 24 0l-1 5c-7 2-15 2-22 0l-1-5z" />
                        <circle cx="24" cy="28" r="1.5" fill="currentColor" />
                    </svg>
                </div>
                <h3 class="text-sm font-serif font-bold text-stone-900 uppercase tracking-wider group-hover:text-[#b38728] transition-colors">ភាពជាក់លាក់ & ទំនុកចិត្ត</h3>
                <p class="text-xs text-stone-500 leading-relaxed font-sans">ពេលវេលាក្នុងវិស័យម៉ូដគឺសំខាន់បំផុត។ យើងប្រគល់ការងារដែលល្អឥតខ្ចោះទាន់ពេលវេលាកំណត់ជានិច្ច។</p>
            </div>

            {{-- Pillar 3: ក្បាច់ស្បៃសូត្រ & ដៃសិប្បករ --}}
            <div class="group bg-white p-8 rounded-sm border border-stone-200 shadow-sm hover:border-[#b38728] hover:shadow-md transition-all text-center space-y-4">
                <div class="w-14 h-14 mx-auto flex items-center justify-center text-[#b38728] rounded-full bg-[#faf6ed] border border-[#e6d6ba] group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M38 10L14 34m24-24l-4 4m4-4l-3-3c-.8-.8-2-.8-2.8 0l-1.4 1.4" />
                        <circle cx="37" cy="11" r="1" fill="currentColor" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 34c-4 4-8 2-8-2 0-6 8-8 12-6 5 2 8 8 6 13-2 5-8 7-13 4" />
                    </svg>
                </div>
                <h3 class="text-sm font-serif font-bold text-stone-900 uppercase tracking-wider group-hover:text-[#b38728] transition-colors">ភាពជាដៃគូសហការ</h3>
                <p class="text-xs text-stone-500 leading-relaxed font-sans">យើងធ្វើការយ៉ាងជិតស្និទ្ធជាមួយអ្នកច្នៃម៉ូដ ចាប់ពីដំណាក់កាលគំនូសព្រាង រហូតដល់ការបញ្ចប់លើឆាកដើរបង្ហាញម៉ូដ។</p>
            </div>
        </div>

    </div>
</section>

{{-- The Crafting Process in Khmer Art Style --}}
<section class="py-24 bg-white border-t border-stone-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <h2 class="text-xs sm:text-sm font-sans font-semibold tracking-wider text-[#28221a] uppercase">
                ដំណាក់កាលការងារ
            </h2>
            <div class="flex items-center justify-center gap-3 text-[#b38728] py-1">
                <span class="h-[1px] w-14 bg-gradient-to-r from-transparent via-[#b38728]/40 to-[#b38728]"></span>
                <svg class="w-4 h-4 text-[#b38728]" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5zm0 10c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5z" />
                    <circle cx="12" cy="12" r="1.5" />
                </svg>
                <span class="h-[1px] w-14 bg-gradient-to-l from-transparent via-[#b38728]/40 to-[#b38728]"></span>
            </div>
            <p class="text-xs sm:text-sm text-stone-500 font-sans">
                ដំណើរការបង្កើតឡើងយ៉ាងមានរបៀបរៀបរយ
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @php
                $steps = [
                    ['០១', 'ការពិគ្រោះយោបល់', 'ពិនិត្យគំនូសព្រាង រូបរាងសម្លៀកបំពាក់ សាច់ក្រណាត់ និងការជ្រើសរើសគ្រាប់អង្កាំ។'],
                    ['០២', 'ធ្វើតេស្តគំរូក្រណាត់', 'ផលិតគំរូតេស្តក្រណាត់ប៉ាក់ផ្ទាល់ដើម្បីផ្ញើជូនត្រួតពិនិត្យ មុននឹងចាប់ផ្តើមការងារធំ។'],
                    ['០៣', 'ការប៉ាក់ដោយដៃ', 'ជាងជំនាញចាប់ផ្តើមប៉ាក់ឌិន និងដាំគ្រាប់ត្បូងដោយដៃយ៉ាងផ្ចិតផ្ចង់បំផុត។'],
                    ['០៤', 'ការត្រួតពិនិត្យគុណភាព', 'ពិនិត្យរាល់ស្នាមដេរទាំងអស់ ដើម្បីធានាភាពរឹងមាំ និងសម្រស់ដ៏ល្អឥតខ្ចោះ។'],
                ];
            @endphp
            @foreach($steps as $step)
                <div class="relative p-7 rounded-sm bg-[#faf6f0] border border-stone-200 text-center space-y-2 group hover:border-[#b38728] hover:shadow-md transition-all">
                    {{-- Khmer Corner Kbach --}}
                    <div class="absolute top-2 left-2 text-[#b38728]/25 pointer-events-none">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 18V6a3 3 0 013-3h12M3 10c3 0 5-2 5-5M6 3c0 3 2 5 5 5"/>
                        </svg>
                    </div>
                    <span class="text-3xl font-serif font-bold text-[#b38728] block mb-2">{{ $step[0] }}</span>
                    <h3 class="text-sm font-serif font-bold text-stone-900 group-hover:text-[#b38728] transition-colors">{{ $step[1] }}</h3>
                    <p class="text-xs text-stone-500 font-sans leading-relaxed">{{ $step[2] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>

{{-- Client Testimonials --}}
@if($testimonials->isNotEmpty())
<section class="py-24 bg-[#faf6f0] border-t border-stone-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 space-y-2">
            <h2 class="text-xs sm:text-sm font-sans font-semibold tracking-wider text-[#28221a] uppercase">
                ការវាយតម្លៃពីអតិថិជន
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
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
                <div class="bg-white border border-stone-200 rounded-sm p-8 shadow-sm space-y-4">
                    <p class="text-stone-600 text-xs sm:text-sm font-serif italic leading-relaxed">"{{ $testimonial->content }}"</p>
                    <div class="pt-4 border-t border-stone-100">
                        <p class="text-stone-900 font-sans font-semibold text-xs">{{ $testimonial->client_name }}</p>
                        <p class="text-stone-400 font-sans text-[11px]">{{ $testimonial->client_position }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- CTA --}}
<section class="py-20 bg-white border-t border-stone-200/60 text-center">
    <div class="max-w-3xl mx-auto px-4 space-y-5">
        <h2 class="text-2xl sm:text-3xl font-serif text-stone-900">តោះចាប់ផ្តើមបង្កើតស្នាដៃដ៏អស្ចារ្យជាមួយគ្នា</h2>
        <p class="text-xs sm:text-sm text-stone-500 font-sans max-w-lg mx-auto leading-relaxed">ពិភាក្សាអំពីតម្រូវការម៉ូដសម្លៀកបំពាក់របស់អ្នក ជាមួយជាងជំនាញរបស់យើងឥឡូវនេះ។</p>
        <div class="pt-2">
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-[#b38728] hover:bg-[#996e1b] text-white px-8 py-3.5 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all shadow-sm">
                ទំនាក់ទំនងមកកាន់យើង
            </a>
        </div>
    </div>
</section>

@endsection
