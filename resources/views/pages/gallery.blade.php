@extends('layouts.app')

@section('content')

{{-- Page Header --}}
<section class="bg-[#faf6f0] border-b border-stone-200/60 py-16 text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-3">
        <p class="text-xs font-sans tracking-widest text-[#9b7529] uppercase">
            <a href="{{ route('home') }}" class="hover:text-[#b38728] transition-colors">ទំព័រដើម</a> / វិចិត្រសាល
        </p>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif text-[#241e17] tracking-tight">
            វិចិត្រសាលរូបភាពសិល្បៈប៉ាក់ឌិន
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
            ដំណើរទស្សនារូបភាពសិល្បៈប៉ាក់ឌិន បច្ចេកទេសដេរប៉ាក់កម្រិតខ្ពស់ និងសកម្មភាពក្នុងអាទឺលីយេរបស់យើង។
        </p>
    </div>
</section>

{{-- Gallery Masonry Section --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Collection Filters --}}
        @if($collections->isNotEmpty())
        <div class="flex flex-wrap items-center justify-center gap-2.5 mb-14">
            <button
                type="button"
                onclick="filterGallery('all')"
                class="gallery-filter-btn px-6 py-2 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all bg-[#b38728] text-white shadow-sm"
                data-collection="all"
            >
                រូបភាពទាំងអស់
            </button>
            @foreach($collections as $col)
                <button
                    type="button"
                    onclick="filterGallery('{{ Str::slug($col) }}')"
                    class="gallery-filter-btn px-6 py-2 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all bg-stone-100 text-stone-700 hover:bg-stone-200"
                    data-collection="{{ Str::slug($col) }}"
                >
                    {{ ucfirst($col) }}
                </button>
            @endforeach
        </div>
        @endif

        {{-- Masonry Grid --}}
        <div class="gallery-masonry" id="gallery-grid">
            @forelse($galleries as $index => $item)
                <div
                    class="gallery-card group overflow-hidden rounded-sm relative mb-6 break-inside-avoid cursor-pointer shadow-sm hover:shadow-lg transition-all duration-300"
                    data-collection="{{ Str::slug($item->collection) }}"
                    onclick="openLightbox('{{ asset('storage/' . $item->file_path) }}', '{{ e($item->title) }}')"
                >
                    <div class="relative overflow-hidden rounded-sm bg-stone-900 {{ $index % 4 === 0 ? 'aspect-[4/5]' : ($index % 4 === 1 ? 'aspect-square' : ($index % 4 === 2 ? 'aspect-[3/4]' : 'aspect-[16/10]')) }}">
                        @if($item->file_url)
                            <img
                                src="{{ $item->file_url }}"
                                alt="{{ $item->title ?? 'Embellishment craft' }}"
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-stone-800 to-stone-900 flex items-center justify-center p-8 group-hover:scale-105 transition-transform duration-700">
                                <div class="w-12 h-12 rounded-full border border-stone-600 flex items-center justify-center text-stone-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M12 21V9m0 0C10 5 6 4 4 6c-2 2-1 6 3 8 2.5 1.25 5 1 5-5zm0 0c2-4 6-5 8-3 2 2 1 6-3 8-2.5 1.25-5 1-5-5z"/></svg>
                                </div>
                            </div>
                        @endif

                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent opacity-85 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            @if($item->title || $item->collection)
                                <div>
                                    @if($item->collection)
                                        <span class="text-[10px] uppercase text-stone-300 font-sans font-semibold tracking-wider block mb-1">{{ $item->collection }}</span>
                                    @endif
                                    @if($item->title)
                                        <h4 class="text-white text-base font-serif font-bold">{{ $item->title }}</h4>
                                    @endif
                                    @if($item->description)
                                        <p class="text-xs text-stone-300 mt-1 line-clamp-2 font-sans">{{ $item->description }}</p>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                @php
                    $demoImages = [
                        ['រូបភាពជិតៗនៃអំបោះមាស', 'ប៉ាក់ឌិន', 'aspect-[4/5]'],
                        ['ការដាំគ្រាប់ស្វារ៉ូវស្គីលម្អិត', 'ដាំគ្រាប់អង្កាំ', 'aspect-square'],
                        ['ក្បាច់ប៉ាក់ស្បៃកូនក្រមុំ', 'រ៉ូបមង្គលការ', 'aspect-[3/4]'],
                        ['រលកផ្លាកភ្លឺចែងចាំង', 'ផ្លាកភ្លឺ', 'aspect-[16/10]'],
                        ['ការដេរស្រទាប់ផ្កា 3D', 'កាត់ដេរជាន់ខ្ពស់', 'aspect-[4/5]'],
                        ['សកម្មភាពលើតុជាងប៉ាក់', 'ទិដ្ឋភាពក្នុងហាង', 'aspect-square'],
                    ];
                @endphp
                @foreach($demoImages as $demo)
                <div class="gallery-card group overflow-hidden rounded-sm relative mb-6 break-inside-avoid">
                    <div class="relative overflow-hidden rounded-sm {{ $demo[2] }} bg-stone-100 border border-stone-200 flex items-center justify-center p-8 text-center">
                        <div>
                            <span class="text-[10px] font-sans uppercase font-bold tracking-wider text-stone-400 block mb-1">{{ $demo[1] }}</span>
                            <span class="text-sm font-serif font-bold text-stone-800">{{ $demo[0] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            @endforelse
        </div>
    </div>
</section>

{{-- Lightbox Modal --}}
<div id="lightbox-modal" class="fixed inset-0 z-50 bg-black/90 backdrop-blur-md hidden flex items-center justify-center p-4" onclick="closeLightbox()">
    <div class="relative max-w-5xl max-h-[90vh] flex flex-col items-center" onclick="event.stopPropagation()">
        <button type="button" onclick="closeLightbox()" class="absolute -top-12 right-0 text-white/70 hover:text-white p-2">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <img id="lightbox-img" src="" alt="Enlarged view" class="max-h-[80vh] w-auto rounded-sm shadow-2xl object-contain">
        <p id="lightbox-caption" class="text-white text-sm font-serif font-medium mt-4 text-center"></p>
    </div>
</div>

<script>
function filterGallery(col) {
    const buttons = document.querySelectorAll('.gallery-filter-btn');
    buttons.forEach(btn => {
        if (btn.dataset.collection === col) {
            btn.className = 'gallery-filter-btn px-6 py-2 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all bg-[#b38728] text-white shadow-sm';
        } else {
            btn.className = 'gallery-filter-btn px-6 py-2 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all bg-stone-100 text-stone-700 hover:bg-stone-200';
        }
    });

    const cards = document.querySelectorAll('.gallery-card');
    cards.forEach(card => {
        if (col === 'all' || card.dataset.collection === col) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

function openLightbox(src, caption) {
    document.getElementById('lightbox-img').src = src;
    document.getElementById('lightbox-caption').textContent = caption || '';
    document.getElementById('lightbox-modal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('lightbox-modal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}
</script>

@endsection
