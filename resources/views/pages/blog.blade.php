@extends('layouts.app')

@section('content')

{{-- Page Header --}}
<section class="bg-[#faf6f0] border-b border-stone-200/60 py-16 text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-3">
        <p class="text-xs font-sans tracking-widest text-[#9b7529] uppercase">
            <a href="{{ route('home') }}" class="hover:text-[#b38728] transition-colors">ទំព័រដើម</a> / អត្ថបទ
        </p>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif text-[#241e17] tracking-tight">
            ទស្សនាវដ្តីសិល្បៈប៉ាក់ឌិន
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
            បច្ចេកទេសប៉ាក់ឌិន និន្នាការម៉ូដទាន់សម័យ និងចំណេះដឹងពីពិភពកាត់ដេរសម្លៀកបំពាក់កម្រិតខ្ពស់។
        </p>
    </div>
</section>

{{-- Blog Content Section --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Categories Pills --}}
        @if($categories->isNotEmpty())
        <div class="flex flex-wrap items-center justify-center gap-2 mb-14">
            <span class="text-xs font-sans font-bold text-stone-400 mr-2">ប្រធានបទ:</span>
            @foreach($categories as $cat)
                <span class="px-4 py-1 rounded-sm text-xs font-sans font-medium bg-[#faf6f0] text-stone-700 border border-stone-200">
                    {{ $cat->name }} ({{ $cat->posts_count }})
                </span>
            @endforeach
        </div>
        @endif

        {{-- Posts Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <article class="group bg-[#fdfcfb] rounded-sm border border-stone-200 overflow-hidden hover:border-[#b38728] hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                    <div>
                        {{-- Thumbnail --}}
                        <a href="{{ route('blog.post', $post->slug) }}" class="block relative aspect-[16/10] overflow-hidden bg-stone-100">
                            @if($post->thumbnail)
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                <div class="w-full h-full bg-stone-100 flex items-center justify-center">
                                    <svg class="w-10 h-10 text-stone-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                </div>
                            @endif

                            @if($post->category)
                                <span class="absolute top-3 left-3 bg-white/95 text-stone-800 text-[10px] font-sans font-semibold tracking-wider px-2.5 py-0.5 rounded-sm shadow-sm">
                                    {{ $post->category->name }}
                                </span>
                            @endif
                        </a>

                        {{-- Details --}}
                        <div class="p-6">
                            <div class="flex items-center gap-3 text-[11px] font-sans text-stone-400 mb-3">
                                <span>{{ $post->published_at ? $post->published_at->format('d/m/Y') : $post->created_at->format('d/m/Y') }}</span>
                                <span>•</span>
                                <span>{{ $post->author->name ?? 'អ្នករចនាម៉ូដ SM' }}</span>
                            </div>

                            <h3 class="text-base sm:text-lg font-serif font-bold text-stone-900 group-hover:text-[#b38728] transition-colors mb-3 line-clamp-2">
                                <a href="{{ route('blog.post', $post->slug) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>

                            <p class="text-xs text-stone-500 font-sans line-clamp-3 leading-relaxed mb-6">
                                {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 120) }}
                            </p>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-0">
                        <a href="{{ route('blog.post', $post->slug) }}" class="inline-flex items-center gap-2 text-xs font-sans font-semibold tracking-wider text-[#b38728] hover:underline group-hover:gap-3 transition-all">
                            <span>អានអត្ថបទពេញ</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </article>
            @empty
                @php
                    $demoArticles = [
                        ['ការវិលត្រឡប់នៃក្បាច់ប៉ាក់អំបោះមាសលើឆាកដើរបង្ហាញម៉ូដ', 'និន្នាការម៉ូដ', '២៤ តុលា ២០២៦', 'ស្វែងយល់ពីរបៀបដែលហាងកាត់ដេរល្បីៗកំពុងយកក្បាច់ប៉ាក់បុរាណមកច្នៃជាម៉ូដទាន់សម័យ។'],
                        ['ការថែទាំសម្លៀកបំពាក់ដាំគ្រាប់អង្កាំ និងត្បូងឱ្យបានគង់វង្ស', 'ការថែទាំ', '១៨ តុលា ២០២៦', 'វិធីសាស្ត្រងាយៗដើម្បីការពារកុំឱ្យដាច់សរសៃអំបោះ ឬស្រអាប់គ្រាប់ត្បូងក្នុងរយៈពេលយូរ។'],
                        ['ពីគំនូសព្រាងរហូតដល់ស្នាដៃសម្រេច៖ ដំណើរការច្នៃផ្កា 3D', 'រឿងរ៉ាវក្នុងហាង', '១០ តុលា ២០២៦', 'ទិដ្ឋភាពពីក្រោយឆាកនៃការច្នៃស្រទាប់ផ្កាសូត្រសម្រាប់រ៉ូបមង្គលការកូនក្រមុំដ៏ប្រណីត។'],
                    ];
                @endphp
                @foreach($demoArticles as $demo)
                <article class="bg-[#fdfcfb] rounded-sm border border-stone-200 overflow-hidden flex flex-col justify-between">
                    <div>
                        <div class="aspect-[16/10] bg-stone-100 flex items-center justify-center p-6 border-b border-stone-200">
                            <span class="text-xs font-sans font-bold text-stone-500 tracking-wider">{{ $demo[1] }}</span>
                        </div>
                        <div class="p-6">
                            <span class="text-[11px] font-sans text-stone-400 block mb-2">{{ $demo[2] }}</span>
                            <h3 class="text-base sm:text-lg font-serif font-bold text-stone-900 mb-2">{{ $demo[0] }}</h3>
                            <p class="text-xs text-stone-500 font-sans leading-relaxed">{{ $demo[3] }}</p>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <span class="text-xs font-sans font-semibold text-[#b38728]">មើលអត្ថបទសង្ខេប</span>
                    </div>
                </article>
                @endforeach
            @endforelse
        </div>

        {{-- Pagination --}}
        @if(method_exists($posts, 'links'))
        <div class="mt-16">
            {{ $posts->links() }}
        </div>
        @endif
    </div>
</section>

@endsection
