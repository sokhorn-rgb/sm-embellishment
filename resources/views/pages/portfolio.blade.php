@extends('layouts.app')

@section('content')

{{-- Page Header --}}
<section class="bg-[#faf6f0] border-b border-stone-200/60 py-16 text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-3">
        <p class="text-xs font-sans tracking-widest text-[#9b7529] uppercase">
            <a href="{{ route('home') }}" class="hover:text-[#b38728] transition-colors">ទំព័រដើម</a> / ស្នាដៃ
        </p>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif text-[#241e17] tracking-tight">
            កម្រងស្នាដៃប៉ាក់ឌិនឆ្នើមៗ
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
            បណ្តុំស្នាដៃសិល្បៈប៉ាក់ឌិនដោយដៃ រ៉ូបមង្គលការ និងសម្លៀកបំពាក់ដើរបង្ហាញម៉ូដកម្រិតខ្ពស់។
        </p>
    </div>
</section>

{{-- Gallery Section with Category Filter --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Category Filter Pills --}}
        <div class="flex flex-wrap items-center justify-center gap-2.5 mb-14">
            <button
                type="button"
                onclick="filterPortfolio('all')"
                class="portfolio-filter-btn px-6 py-2 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all bg-[#b38728] text-white shadow-sm"
                data-category="all"
            >
                ស្នាដៃទាំងអស់
            </button>
            @foreach($categories as $category)
                <button
                    type="button"
                    onclick="filterPortfolio('{{ Str::slug($category) }}')"
                    class="portfolio-filter-btn px-6 py-2 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all bg-stone-100 text-stone-700 hover:bg-stone-200"
                    data-category="{{ Str::slug($category) }}"
                >
                    {{ ucfirst($category) }}
                </button>
            @endforeach
        </div>

        {{-- Masonry Grid --}}
        <div class="gallery-masonry" id="portfolio-grid">
            @forelse($portfolios as $index => $item)
                <div class="portfolio-item group overflow-hidden rounded-sm relative mb-6 break-inside-avoid shadow-sm hover:shadow-lg transition-all duration-300" data-category="{{ Str::slug($item->category) }}">
                    <a href="{{ route('portfolio.detail', $item->slug) }}" class="block relative overflow-hidden rounded-sm bg-stone-900 {{ $index % 3 === 0 ? 'aspect-[4/5]' : ($index % 3 === 1 ? 'aspect-square' : 'aspect-[3/4]') }}">
                        @if($item->thumbnail_url)
                            <img
                                src="{{ $item->thumbnail_url }}"
                                alt="{{ $item->title }}"
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-stone-800 to-stone-900 flex items-center justify-center p-8 group-hover:scale-105 transition-transform duration-700">
                                <div class="w-14 h-14 rounded-full border border-stone-500/30 flex items-center justify-center text-stone-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M12 21V9m0 0C10 5 6 4 4 6c-2 2-1 6 3 8 2.5 1.25 5 1 5-5zm0 0c2-4 6-5 8-3 2 2 1 6-3 8-2.5 1.25-5 1-5-5z"/></svg>
                                </div>
                            </div>
                        @endif
                        
                        {{-- Dark Gradient Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent opacity-85 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                            @if($item->category)
                                <span class="text-stone-300 text-[10px] font-sans font-semibold uppercase tracking-wider mb-1">{{ $item->category }}</span>
                            @endif
                            <h3 class="text-white text-base sm:text-lg font-serif font-bold">{{ $item->title }}</h3>
                            @if($item->client_name)
                                <p class="text-stone-300 text-xs font-sans mt-1">អតិថិជន: {{ $item->client_name }}</p>
                            @endif
                        </div>
                    </a>
                </div>
            @empty
                @php
                    $demoItems = [
                        ['រ៉ូបរាត្រីប៉ាក់អង្កាំកែវ', 'រ៉ូបរាត្រីសមោសរ', 'aspect-[4/5]'],
                        ['ស្បៃកូនក្រមុំដាំគុជខ្យង', 'រ៉ូបមង្គលការ', 'aspect-square'],
                        ['ក្បាច់ប៉ាក់ខ្សែអំបោះមាសលើអាវកាក់', 'កាត់ដេរជាន់ខ្ពស់', 'aspect-[3/4]'],
                        ['ស្រទាប់ផ្កា 3D លើរ៉ូបព្រះនាង', 'ផ្កាផុស 3D', 'aspect-square'],
                        ['រ៉ូបរាត្រីដាំត្បូងអូទ្រីសចែងចាំង', 'រ៉ូបរាត្រីសមោសរ', 'aspect-[4/5]'],
                        ['ឈុតសម្លៀកបំពាក់ដើរបង្ហាញម៉ូដ', 'កាត់ដេរជាន់ខ្ពស់', 'aspect-[3/4]'],
                    ];
                @endphp
                @foreach($demoItems as $demo)
                <div class="portfolio-item group overflow-hidden rounded-sm relative mb-6 break-inside-avoid">
                    <div class="relative overflow-hidden rounded-sm {{ $demo[2] }} bg-stone-100 border border-stone-200 flex items-center justify-center p-8 text-center">
                        <div>
                            <span class="text-[10px] font-sans uppercase font-bold tracking-wider text-stone-400 block mb-1">{{ $demo[1] }}</span>
                            <h3 class="text-base font-serif font-bold text-stone-800">{{ $demo[0] }}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
            @endforelse
        </div>
    </div>
</section>

<script>
function filterPortfolio(category) {
    const buttons = document.querySelectorAll('.portfolio-filter-btn');
    buttons.forEach(btn => {
        if (btn.dataset.category === category) {
            btn.className = 'portfolio-filter-btn px-6 py-2 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all bg-[#b38728] text-white shadow-sm';
        } else {
            btn.className = 'portfolio-filter-btn px-6 py-2 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all bg-stone-100 text-stone-700 hover:bg-stone-200';
        }
    });

    const items = document.querySelectorAll('.portfolio-item');
    items.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>

@endsection
