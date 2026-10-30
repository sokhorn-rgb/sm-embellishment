@extends('layouts.app')

@section('content')

{{-- Page Header --}}
<section class="bg-[#faf6f0] border-b border-stone-200/60 py-16 text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-3">
        <p class="text-xs font-sans tracking-widest text-[#9b7529] uppercase">
            <a href="{{ route('home') }}" class="hover:text-[#b38728] transition-colors">ទំព័រដើម</a> / ទំនាក់ទំនង
        </p>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif text-[#241e17] tracking-tight">
            ទំនាក់ទំនងមកកាន់យើង
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
            យើងរីករាយនឹងសហការ និងពិភាក្សាអំពីគម្រោងច្នៃម៉ូដប៉ាក់ឌិនដ៏វិសេសវិសាលរបស់អ្នក។
        </p>
    </div>
</section>

{{-- Contact Content --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            {{-- Left Column: Info --}}
            <div class="space-y-6">
                <span class="text-xs font-sans font-semibold tracking-wider text-[#9b7529] uppercase block">
                    ព័ត៌មានទំនាក់ទំនង
                </span>
                
                <h2 class="text-2xl sm:text-3xl font-serif font-normal text-[#221d16] leading-snug">
                    ត្រូវការព័ត៌មានបន្ថែម? <br>
                    <span class="italic font-serif">សូមទាក់ទងមកកាន់យើងខ្ញុំ</span>
                </h2>

                <p class="text-xs sm:text-sm text-stone-500 font-sans leading-relaxed mb-8">
                    សេវាកម្មប៉ាក់ឌិនដ៏ទូលំទូលាយ ដែលបង្កើតឡើងដើម្បីធ្វើឱ្យគ្រប់ចក្ខុវិស័យម៉ូដរបស់អ្នកក្លាយជាការពិត ប្រកបដោយភាពប្រណីត និងសិល្បៈច្បាស់លាស់។
                </p>

                <div class="space-y-6 pt-4">
                    {{-- Phone --}}
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full border border-stone-200 bg-[#faf6f0] flex items-center justify-center text-[#b38728] shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-sans font-semibold text-stone-900">លេខទូរស័ព្ទ</p>
                            <p class="text-xs font-sans text-stone-500 mt-0.5">+855 23 888 999 / +855 12 345 678</p>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full border border-stone-200 bg-[#faf6f0] flex items-center justify-center text-[#b38728] shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-sans font-semibold text-stone-900">អ៊ីមែលផ្លូវការ</p>
                            <p class="text-xs font-sans text-stone-500 mt-0.5">info@sm-embellishment.com</p>
                        </div>
                    </div>

                    {{-- Address --}}
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full border border-stone-200 bg-[#faf6f0] flex items-center justify-center text-[#b38728] shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-sans font-semibold text-stone-900">អាសយដ្ឋានអាទឺលីយេ</p>
                            <p class="text-xs font-sans text-stone-500 mt-0.5">អាគារអាទឺលីយេ លេខ ១០៨ វិថី ២៤០ ដូនពេញ រាជធានីភ្នំពេញ</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Column: Form with Khmer Art Styling --}}
            <div class="relative bg-[#faf6f0] p-8 sm:p-10 rounded-sm border border-stone-200 shadow-sm">
                {{-- Khmer Corner Kbach Filigree --}}
                <div class="absolute top-2.5 left-2.5 text-[#b38728]/30 pointer-events-none">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 18V6a3 3 0 013-3h12M3 10c3 0 5-2 5-5M6 3c0 3 2 5 5 5"/>
                    </svg>
                </div>
                <div class="absolute top-2.5 right-2.5 text-[#b38728]/30 pointer-events-none scale-x-[-1]">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 18V6a3 3 0 013-3h12M3 10c3 0 5-2 5-5M6 3c0 3 2 5 5 5"/>
                    </svg>
                </div>

                <h3 class="text-xl sm:text-2xl font-serif text-stone-900 mb-2">ផ្ញើសារមកកាន់យើង</h3>
                <p class="text-xs text-stone-500 font-sans mb-8 leading-relaxed">
                    សូមបំពេញព័ត៌មានខាងក្រោម ដើម្បីទាក់ទង ឬស្នើសុំការពិគ្រោះយោបល់ឥតគិតថ្លៃ។
                </p>

                <form action="{{ route('contact.submit') }}" method="POST" class="flex flex-col gap-4">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <input
                                type="text"
                                name="name"
                                placeholder="ឈ្មោះរបស់អ្នក *"
                                value="{{ old('name') }}"
                                class="w-full px-4 py-3 rounded-sm border border-stone-200 bg-white text-xs font-sans placeholder-stone-400 focus:outline-none focus:border-[#b38728] focus:ring-1 focus:ring-[#b38728] transition-all"
                                required
                            >
                            @error('name') <p class="text-red-500 text-[11px] font-sans mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <input
                                type="text"
                                name="subject"
                                placeholder="ប្រធានបទ"
                                value="{{ old('subject') }}"
                                class="w-full px-4 py-3 rounded-sm border border-stone-200 bg-white text-xs font-sans placeholder-stone-400 focus:outline-none focus:border-[#b38728] focus:ring-1 focus:ring-[#b38728] transition-all"
                            >
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <input
                                type="email"
                                name="email"
                                placeholder="អាសយដ្ឋានអ៊ីមែល *"
                                value="{{ old('email') }}"
                                class="w-full px-4 py-3 rounded-sm border border-stone-200 bg-white text-xs font-sans placeholder-stone-400 focus:outline-none focus:border-[#b38728] focus:ring-1 focus:ring-[#b38728] transition-all"
                                required
                            >
                            @error('email') <p class="text-red-500 text-[11px] font-sans mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <input
                                type="tel"
                                name="phone"
                                placeholder="លេខទូរស័ព្ទ"
                                value="{{ old('phone') }}"
                                class="w-full px-4 py-3 rounded-sm border border-stone-200 bg-white text-xs font-sans placeholder-stone-400 focus:outline-none focus:border-[#b38728] focus:ring-1 focus:ring-[#b38728] transition-all"
                            >
                        </div>
                    </div>

                    @if($services->isNotEmpty())
                    <div>
                        <select name="service_id" class="w-full px-4 py-3 rounded-sm border border-stone-200 bg-white text-xs font-sans text-stone-600 focus:outline-none focus:border-[#b38728] focus:ring-1 focus:ring-[#b38728] transition-all">
                            <option value="">ជ្រើសរើសសេវាកម្មដែលអ្នកចាប់អារម្មណ៍ (ស្រេចចិត្ត)</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ (old('service_id') == $service->id || request('service') == $service->id) ? 'selected' : '' }}>{{ $service->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif

                    <div>
                        <textarea
                            name="message"
                            rows="5"
                            placeholder="សរសេរសារ ឬព័ត៌មានលម្អិតអំពីគម្រោងរបស់អ្នកនៅទីនេះ... *"
                            class="w-full px-4 py-3 rounded-sm border border-stone-200 bg-white text-xs font-sans placeholder-stone-400 focus:outline-none focus:border-[#b38728] focus:ring-1 focus:ring-[#b38728] transition-all resize-none"
                            required
                        >{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-[11px] font-sans mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="w-full bg-[#b38728] hover:bg-[#996e1b] text-white py-3.5 rounded-sm text-xs font-sans font-semibold tracking-wider transition-all shadow-sm">
                        ផ្ញើសារឥឡូវនេះ
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
