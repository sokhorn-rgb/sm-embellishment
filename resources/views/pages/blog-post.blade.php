@extends('layouts.app')

@section('content')

{{-- Breadcrumb Header --}}
<section class="bg-[#faf6f0] border-b border-stone-200/60 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-3">
        <p class="text-xs font-sans tracking-widest text-[#9b7529] uppercase">
            <a href="{{ route('home') }}" class="hover:text-[#b38728] transition-colors">ទំព័រដើម</a>
            <span class="mx-2">/</span>
            <a href="{{ route('blog') }}" class="hover:text-[#b38728] transition-colors">អត្ថបទ</a>
            <span class="mx-2">/</span>
            <span class="text-stone-700 font-semibold">{{ $post->title }}</span>
        </p>

        @if($post->category)
            <span class="text-[10px] font-sans font-semibold uppercase tracking-wider text-[#b38728] bg-[#b38728]/10 px-3 py-0.5 rounded-sm border border-[#b38728]/20 inline-block">
                {{ $post->category->name }}
            </span>
        @endif

        <h1 class="text-2xl sm:text-3xl md:text-4xl font-serif text-[#241e17] leading-snug tracking-tight">
            {{ $post->title }}
        </h1>

        <div class="flex items-center gap-3 pt-4 border-t border-stone-200 text-xs font-sans text-stone-500">
            <span>{{ $post->author->name ?? 'អ្នករចនាម៉ូដ SM' }}</span>
            <span>•</span>
            <span>{{ $post->published_at ? $post->published_at->format('d/m/Y') : $post->created_at->format('d/m/Y') }}</span>
            <span>•</span>
            <span>ទស្សនា {{ $post->view_count }} ដង</span>
        </div>
    </div>
</section>

{{-- Article Body --}}
<article class="py-16 md:py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Feature Image --}}
        @if($post->thumbnail)
            <div class="rounded-sm overflow-hidden shadow-md mb-12 aspect-[16/9] max-h-[500px]">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
            </div>
        @endif

        @if($post->excerpt)
            <p class="text-base sm:text-lg text-stone-800 font-serif leading-relaxed mb-10 pb-8 border-b border-stone-200 italic">
                {{ $post->excerpt }}
            </p>
        @endif

        <div class="text-xs sm:text-sm text-stone-700 font-sans leading-relaxed space-y-6">
            {!! nl2br(e($post->content)) !!}
        </div>

        {{-- Tags --}}
        @php
            $tags = is_array($post->tags) ? $post->tags : (json_decode($post->tags, true) ?? []);
        @endphp
        @if(!empty($tags))
        <div class="mt-12 pt-8 border-t border-stone-200 flex flex-wrap gap-2 items-center">
            <span class="text-xs font-sans font-bold text-stone-400 mr-2">ស្លាកពាក្យគន្លឹះ:</span>
            @foreach($tags as $tag)
                <span class="text-xs bg-[#faf6f0] text-stone-700 px-3 py-1 rounded-sm border border-stone-200 font-sans">
                    #{{ $tag }}
                </span>
            @endforeach
        </div>
        @endif

        {{-- Back Navigation --}}
        <div class="mt-12 pt-8 border-t border-stone-200 flex justify-between items-center text-xs font-sans font-semibold">
            <a href="{{ route('blog') }}" class="text-stone-700 hover:text-[#b38728] transition-colors">
                ← ត្រឡប់ទៅទំព័រអត្ថបទ
            </a>
            <a href="{{ route('contact') }}" class="text-[#b38728] hover:underline">
                ទំនាក់ទំនងកុម្ម៉ង់ម៉ូដ →
            </a>
        </div>
    </div>
</article>

{{-- Related Articles --}}
@if($relatedPosts->isNotEmpty())
<section class="py-16 bg-[#faf6f0] border-t border-stone-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-serif text-stone-900 mb-8">អត្ថបទដែលទាក់ទង</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($relatedPosts as $rel)
                <a href="{{ route('blog.post', $rel->slug) }}" class="group bg-white rounded-sm p-6 border border-stone-200 hover:border-[#b38728] hover:shadow-md transition-all">
                    <span class="text-[11px] font-sans text-stone-400 block mb-2">{{ $rel->published_at ? $rel->published_at->format('d/m/Y') : '' }}</span>
                    <h3 class="text-base font-serif font-bold text-stone-900 group-hover:text-[#b38728] transition-colors mb-2 line-clamp-2">
                        {{ $rel->title }}
                    </h3>
                    <p class="text-xs text-stone-500 font-sans line-clamp-2 leading-relaxed">{{ $rel->excerpt ?? Str::limit(strip_tags($rel->content), 80) }}</p>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
