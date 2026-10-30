@extends('layouts.app')

@section('content')

{{-- Breadcrumb Header --}}
<section class="bg-[#faf6f0] border-b border-stone-200/60 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-3">
        <p class="text-xs font-sans tracking-widest text-[#9b7529] uppercase">
            <a href="{{ route('home') }}" class="hover:text-[#b38728] transition-colors">ទំព័រដើម</a>
            <span class="mx-2">/</span>
            <a href="{{ route('portfolio') }}" class="hover:text-[#b38728] transition-colors">ស្នាដៃ</a>
            <span class="mx-2">/</span>
            <span class="text-stone-700 font-semibold">{{ $portfolio->title }}</span>
        </p>
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <span class="text-[10px] font-sans font-semibold uppercase tracking-wider text-[#b38728] bg-[#b38728]/10 px-3 py-1 rounded-sm border border-[#b38728]/20 inline-block mb-3">
                    {{ $portfolio->category ?? 'សិល្បៈប៉ាក់ឌិនពិសេស' }}
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-[#241e17] tracking-tight">
                    {{ $portfolio->title }}
                </h1>
            </div>
            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 text-xs font-sans font-semibold tracking-wider text-[#b38728] hover:underline">
                ← ត្រឡប់ទៅស្នាដៃទាំងអស់
            </a>
        </div>
    </div>
</section>

{{-- Project Showcase --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Main Thumbnail Banner --}}
        <div class="rounded-sm overflow-hidden shadow-lg border border-stone-200 mb-16 aspect-[16/9] max-h-[600px] bg-stone-900">
            @if($portfolio->thumbnail_url)
                <img src="{{ $portfolio->thumbnail_url }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover">
            @else
                <div class="w-full h-full flex flex-col items-center justify-center bg-stone-900 p-8 text-center">
                    <div class="w-16 h-16 rounded-full border border-stone-600 flex items-center justify-center text-stone-300 mb-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M12 21V9m0 0C10 5 6 4 4 6c-2 2-1 6 3 8 2.5 1.25 5 1 5-5zm0 0c2-4 6-5 8-3 2 2 1 6-3 8-2.5 1.25-5 1-5-5z"/></svg>
                    </div>
                    <span class="text-lg font-serif text-stone-300">{{ $portfolio->title }}</span>
                </div>
            @endif
        </div>

        {{-- Project Details Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mb-16">
            {{-- Left 2 Columns: Description & Story --}}
            <div class="lg:col-span-2 space-y-6">
                <h2 class="text-2xl font-serif text-stone-900">អំពីការបង្កើតស្នាដៃនេះ</h2>
                <div class="text-xs sm:text-sm text-stone-600 font-sans leading-relaxed space-y-4">
                    @if($portfolio->description)
                        {!! nl2br(e($portfolio->description)) !!}
                    @else
                        <p>
                            ការបង្ហាញនូវភាពជាក់លាក់ និងការលះបង់យ៉ាងផ្ចិតផ្ចង់នៃស្នាដៃសិល្បៈ។ រាល់គ្រាប់អង្កាំ និងផ្លាកភ្លឺ ត្រូវបានដេរដោយដៃលើគ្រោងសម្លៀកបំពាក់ ដើម្បីទទួលបានសោភ័ណភាពដ៏ជ្រាលជ្រៅ និងចលនារស់រវើកនៅពេលដើរបង្ហាញម៉ូដ ឬក្នុងពិធីមង្គលការ។
                        </p>
                    @endif
                </div>
            </div>

            {{-- Right Column: Metadata Box --}}
            <div>
                <div class="bg-[#faf6f0] rounded-sm p-8 border border-stone-200 space-y-5">
                    <h3 class="text-base font-serif font-bold text-stone-900 pb-3 border-b border-stone-200">
                        ព័ត៌មានលម្អិតនៃគម្រោង
                    </h3>

                    @if($portfolio->client_name)
                    <div>
                        <p class="text-[10px] uppercase font-sans font-semibold text-stone-400">អតិថិជន / ម៉ាក</p>
                        <p class="text-sm font-sans font-semibold text-stone-900 mt-0.5">{{ $portfolio->client_name }}</p>
                    </div>
                    @endif

                    @if($portfolio->category)
                    <div>
                        <p class="text-[10px] uppercase font-sans font-semibold text-stone-400">ប្រភេទ</p>
                        <p class="text-sm font-sans font-semibold text-stone-900 mt-0.5">{{ ucfirst($portfolio->category) }}</p>
                    </div>
                    @endif

                    @if($portfolio->material)
                    <div>
                        <p class="text-[10px] uppercase font-sans font-semibold text-stone-400">វត្ថុធាតុដើមប្រើប្រាស់</p>
                        <p class="text-sm font-sans font-semibold text-stone-900 mt-0.5">{{ $portfolio->material }}</p>
                    </div>
                    @endif

                    @if($portfolio->completion_date)
                    <div>
                        <p class="text-[10px] uppercase font-sans font-semibold text-stone-400">កាលបរិច្ឆេទបញ្ចប់</p>
                        <p class="text-sm font-sans font-semibold text-stone-900 mt-0.5">{{ $portfolio->completion_date }}</p>
                    </div>
                    @endif

                    <div class="pt-3 border-t border-stone-200">
                        <a href="{{ route('contact') }}" class="w-full inline-flex items-center justify-center gap-2 bg-[#b38728] hover:bg-[#996e1b] text-white py-3 px-6 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all shadow-sm">
                            កុម្ម៉ង់ស្នាដៃស្រដៀងគ្នានេះ
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Gallery Images Grid (Close-ups) --}}
        @php
            $gallery = $portfolio->valid_gallery_images;
        @endphp
        @if(!empty($gallery))
        <div class="mt-16 pt-16 border-t border-stone-200">
            <h2 class="text-2xl font-serif text-stone-900 mb-8">ទិដ្ឋភាពលម្អិតជិតៗ</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($gallery as $img)
                    <div class="rounded-sm overflow-hidden shadow-sm hover:shadow-md transition-shadow aspect-square bg-stone-100 border border-stone-200">
                        <img src="{{ asset('storage/' . $img) }}" alt="Detail photo" class="w-full h-full object-cover">
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
