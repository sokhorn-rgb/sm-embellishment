@extends('layouts.app')

@section('content')

{{-- Page Header --}}
<section class="bg-[#faf6f0] border-b border-stone-200/60 py-16 text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-3">
        <p class="text-xs font-sans tracking-widest text-[#9b7529] uppercase">
            <a href="{{ route('home') }}" class="hover:text-[#b38728] transition-colors">ទំព័រដើម</a> / សេវាកម្ម
        </p>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif text-[#241e17] tracking-tight">
            សេវាកម្មប៉ាក់ឌិន និងក្បូរក្បាច់ប្រណីត
        </h1>
        <div class="flex items-center justify-center gap-3 text-[#b38728] py-1">
            <span class="h-[1px] w-14 bg-gradient-to-r from-transparent via-[#b38728]/40 to-[#b38728]"></span>
            <svg class="w-4 h-4 text-[#b38728]" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5zm0 10c.8 3 2.5 4.5 5 5-2.5.5-4.2 2-5 5-.8-3-2.5-4.5-5-5 2.5-.5 4.2-2 5-5z" />
                <circle cx="12" cy="12" r="1.5" />
            </svg>
            <span class="h-[1px] w-14 bg-gradient-to-l from-transparent via-[#b38728]/40 to-[#b38728]"></span>
        </div>
        <p class="text-xs sm:text-sm text-stone-500 font-sans max-w-xl mx-auto pt-1 leading-relaxed">
            ពីការដាំគ្រាប់អង្កាំដ៏ល្អិត រហូតដល់ការប៉ាក់ខ្សែអំបោះមាស និងការច្នៃផ្កា 3D យើងផ្តល់ជូននូវសេវាកម្មយ៉ាងពេញលេញ ដើម្បីបំពេញគ្រប់តម្រូវការម៉ូដរបស់អ្នក។
        </p>
    </div>
</section>

{{-- Services Grid --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($services as $service)
            <div class="group bg-[#fdfcfb] rounded-sm p-8 border border-stone-200 hover:border-[#b38728] hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                <div>
                    {{-- Icon / Graphic --}}
                    <div class="w-12 h-12 rounded-full border border-[#b38728]/40 bg-stone-50 flex items-center justify-center mb-6 text-[#b38728] group-hover:border-[#b38728] transition-colors">
                        @if($service->thumbnail)
                            <img src="{{ asset('storage/' . $service->thumbnail) }}" alt="{{ $service->title }}" class="w-6 h-6 object-contain">
                        @else
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M12 21V9m0 0C10 5 6 4 4 6c-2 2-1 6 3 8 2.5 1.25 5 1 5-5zm0 0c2-4 6-5 8-3 2 2 1 6-3 8-2.5 1.25-5 1-5-5z"/></svg>
                        @endif
                    </div>

                    <h3 class="text-base sm:text-lg font-serif font-bold text-stone-900 mb-3 group-hover:text-[#b38728] transition-colors">
                        {{ $service->title }}
                    </h3>

                    <p class="text-xs text-stone-500 font-sans leading-relaxed mb-6">
                        {{ $service->short_description ?? Str::limit($service->description, 120) }}
                    </p>

                    @if($service->price_from)
                        <p class="text-xs font-sans font-semibold text-[#b38728] mb-4">
                            {{ $service->price_label ?? 'ចាប់ពី' }} ${{ number_format($service->price_from, 2) }}
                        </p>
                    @endif
                </div>

                <div class="pt-6 border-t border-stone-100">
                    <a href="{{ route('services.detail', $service->slug) }}" class="inline-flex items-center gap-2 text-xs font-sans font-semibold tracking-wider text-[#b38728] hover:text-[#28221a] transition-colors group-hover:gap-3">
                        <span>ស្វែងយល់បន្ថែម</span>
                        <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
            @empty
                @php
                    $demoServices = [
                        ['ប៉ាក់គ្រាប់អង្កាំដោយដៃ', 'ការដាំគ្រាប់អង្កាំកែវ និងគ្រាប់អង្កាំបំពង់សម្រាប់រ៉ូបមង្គលការ និងរ៉ូបដើរបង្ហាញម៉ូដ។'],
                        ['ការច្នៃម៉ូដផ្លាកស្ពាន់ & ផ្លាកភ្លឺ', 'ការរៀបចំផ្កាផ្លាកភ្លឺចែងចាំង រួមទាំងការដេរដោយដៃយ៉ាងស្មើស្អាត។'],
                        ['ប៉ាក់អំបោះសូត្រ និងអំបោះមាស', 'ក្បាច់ប៉ាក់ក្បូរក្បាច់បុរាណ និងសម័យ ដោយប្រើអំបោះសូត្រ និងខ្សែលោហៈមាស។'],
                        ['ការដាំត្បូងកែវ & គ្រាប់គុជ', 'ត្បូងកែវអូទ្រីសចែងចាំង និងគុជខ្យងធម្មជាតិ ដាំដោយដៃយ៉ាងរឹងមាំលើសាច់ក្រណាត់។'],
                        ['ច្នៃផ្កាផុស 3D', 'ការបង្កើតស្រទាប់ផ្កា 3D ពីក្រណាត់សូត្រ និងសាច់សំណាញ់បែបស្ថាបត្យកម្មទំនើប។'],
                        ['គម្រោងច្នៃម៉ូដពិសេសតាមបញ្ជា', 'ការអភិវឌ្ឍម៉ូដប៉ាក់ឌិនផ្តាច់មុខ ចាប់ពីគំនូសព្រាងរហូតដល់ការផលិតពេញលេញ។'],
                    ];
                @endphp
                @foreach($demoServices as $demo)
                <div class="bg-[#fdfcfb] rounded-sm p-8 border border-stone-200">
                    <div class="w-12 h-12 rounded-full border border-[#b38728]/40 bg-stone-50 flex items-center justify-center mb-6 text-[#b38728]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M12 21V9m0 0C10 5 6 4 4 6c-2 2-1 6 3 8 2.5 1.25 5 1 5-5zm0 0c2-4 6-5 8-3 2 2 1 6-3 8-2.5 1.25-5 1-5-5z"/></svg>
                    </div>
                    <h3 class="text-base sm:text-lg font-serif font-bold text-stone-900 mb-3">{{ $demo[0] }}</h3>
                    <p class="text-xs text-stone-500 font-sans leading-relaxed mb-6">{{ $demo[1] }}</p>
                    <a href="{{ route('contact') }}" class="text-xs font-sans font-semibold text-[#b38728]">ស្វែងយល់បន្ថែម →</a>
                </div>
                @endforeach
            @endforelse
        </div>

    </div>
</section>

{{-- CTA Section --}}
<section class="py-20 bg-[#faf6f0] border-t border-stone-200/60 text-center">
    <div class="max-w-3xl mx-auto px-4 space-y-4">
        <h2 class="text-2xl sm:text-3xl font-serif text-stone-900">ត្រូវការប៉ាក់ឌិនម៉ូដពិសេសផ្ទាល់ខ្លួន?</h2>
        <p class="text-xs sm:text-sm text-stone-500 font-sans max-w-md mx-auto leading-relaxed">ទាក់ទងមកយើងដើម្បីពិភាក្សាអំពីតម្រូវការជាក់លាក់របស់អ្នក និងទទួលបានការវាយតម្លៃតម្លៃឥតគិតថ្លៃ។</p>
        <div class="pt-2">
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-[#b38728] hover:bg-[#996e1b] text-white px-8 py-3.5 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all shadow-sm">
                ស្នើសុំតម្លៃ និងការពិគ្រោះ
            </a>
        </div>
    </div>
</section>

@endsection
