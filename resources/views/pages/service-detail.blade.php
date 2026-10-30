@extends('layouts.app')

@section('content')

{{-- Breadcrumb Header --}}
<section class="bg-[#faf6f0] border-b border-stone-200/60 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-2">
        <p class="text-xs font-sans tracking-widest text-[#9b7529] uppercase">
            <a href="{{ route('home') }}" class="hover:text-[#b38728] transition-colors">ទំព័រដើម</a>
            <span class="mx-2">/</span>
            <a href="{{ route('services') }}" class="hover:text-[#b38728] transition-colors">សេវាកម្ម</a>
            <span class="mx-2">/</span>
            <span class="text-stone-700 font-semibold">{{ $service->title }}</span>
        </p>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-[#241e17] tracking-tight">
            {{ $service->title }}
        </h1>
    </div>
</section>

{{-- Service Details --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            {{-- Main Content (2 Columns) --}}
            <div class="lg:col-span-2">
                {{-- Hero Image --}}
                @if($service->thumbnail)
                    <div class="rounded-sm overflow-hidden shadow-md border border-stone-200 mb-10 aspect-[16/9]">
                        <img src="{{ asset('storage/' . $service->thumbnail) }}" alt="{{ $service->title }}" class="w-full h-full object-cover">
                    </div>
                @endif

                @if($service->short_description)
                    <p class="text-base sm:text-lg text-stone-800 font-serif leading-relaxed mb-8">
                        {{ $service->short_description }}
                    </p>
                @endif

                <div class="text-xs sm:text-sm text-stone-600 font-sans leading-relaxed space-y-5 mb-12">
                    @if($service->description)
                        {!! nl2br(e($service->description)) !!}
                    @else
                        <p>
                            សេវាកម្ម {{ $service->title }} របស់យើង ផ្តល់នូវភាពជាក់លាក់ និងសិល្បៈកែច្នៃកម្រិតខ្ពស់សម្រាប់រ៉ូបមង្គលការ កម្រងសម្លៀកបំពាក់ទាន់សម័យ និងម៉ូដសម្លៀកបំពាក់ពិសេស។ រាល់ព័ត៌មានលម្អិតទាំងអស់ ត្រូវបានគ្រោងទុកដោយគិតគូរពីគំនិតច្នៃប្រឌិតរបស់អ្នកជាចម្បង។
                        </p>
                        <p>
                            យើងជ្រើសរើសតែវត្ថុធាតុដើមគុណភាពខ្ពស់ប៉ុណ្ណោះ រួមមាន គ្រាប់អង្កាំកែវល្អិត ត្បូងអូទ្រីសចែងចាំង ផ្លាកភ្លឺ និងខ្សែអំបោះសូត្រល្អឯក។ ជាងជំនាញរបស់យើងមានបទពិសោធន៍ជាច្រើនឆ្នាំ ដើម្បីធានាបាននូវភាពរឹងមាំជាប់មាំ មិនរបូត មិនធ្លាក់ និងរក្សាភាពស្រស់ស្អាតជានិច្ច។
                        </p>
                    @endif
                </div>

                {{-- Capabilities Grid --}}
                <div class="bg-[#faf6f0] rounded-sm p-8 border border-stone-200 mb-12">
                    <h3 class="text-base sm:text-lg font-serif font-bold text-stone-900 mb-6">
                        លក្ខណៈពិសេសនៃសេវាកម្មនេះ
                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-start gap-3">
                            <div class="w-5 h-5 rounded-full bg-[#b38728]/15 text-[#b38728] flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-xs font-sans text-stone-700 font-medium">គំរូតេស្តក្រណាត់ប៉ាក់ផ្ទាល់</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-5 h-5 rounded-full bg-[#b38728]/15 text-[#b38728] flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-xs font-sans text-stone-700 font-medium">វត្ថុធាតុដើមគុណភាពខ្ពស់នាំចូល</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-5 h-5 rounded-full bg-[#b38728]/15 text-[#b38728] flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-xs font-sans text-stone-700 font-medium">ការផលិតគំរូសាកល្បងលម្អិត</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-5 h-5 rounded-full bg-[#b38728]/15 text-[#b38728] flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-xs font-sans text-stone-700 font-medium">ការត្រួតពិនិត្យគុណភាពម៉ត់ចត់</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sidebar (1 Column) --}}
            <div class="space-y-8">
                {{-- Quick Pricing / Quote Card in Luxury Gold & Atelier Bronze --}}
                <div class="relative bg-[#1c1813] text-white p-8 rounded-sm border border-[#383025] shadow-lg space-y-4">
                    {{-- Khmer Corner Filigree --}}
                    <div class="absolute top-2.5 left-2.5 text-[#b38728]/35 pointer-events-none">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 18V6a3 3 0 013-3h12M3 10c3 0 5-2 5-5M6 3c0 3 2 5 5 5"/>
                        </svg>
                    </div>
                    <div class="absolute top-2.5 right-2.5 text-[#b38728]/35 pointer-events-none scale-x-[-1]">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 18V6a3 3 0 013-3h12M3 10c3 0 5-2 5-5M6 3c0 3 2 5 5 5"/>
                        </svg>
                    </div>

                    <span class="text-[10px] font-sans font-semibold uppercase tracking-wider text-[#e2d9cb] bg-white/10 px-3 py-1 rounded-sm border border-white/15 inline-flex items-center gap-1.5">
                        <span>❖</span>
                        <span>ការប៉ាន់ស្មានតម្លៃ</span>
                    </span>

                    @if($service->price_from)
                        <div>
                            <p class="text-xs text-[#cec3b0] font-sans">{{ $service->price_label ?? 'តម្លៃចាប់ពី' }}</p>
                            <p class="text-3xl font-serif font-bold text-white mt-1">
                                ${{ number_format($service->price_from, 2) }}
                            </p>
                        </div>
                    @else
                        <h3 class="text-xl font-serif font-bold text-white">តម្លៃតាមគម្រោងជាក់ស្តែង</h3>
                        <p class="text-[#d6ccb9] text-xs font-sans leading-relaxed">កំណត់តម្លៃផ្អែកលើកម្រិតនៃភាពលម្អិត និងទំហំការងារសរុប។</p>
                    @endif

                    <p class="text-[#cec3b0] text-xs font-sans leading-relaxed pt-2">
                        ស្នើសុំការវាយតម្លៃគំរូដោយឥតគិតថ្លៃ ឬពិភាក្សាអំពីកាលវិភាគផលិតកម្មជាមួយក្រុមការងារយើង។
                    </p>

                    <div class="pt-2">
                        <a href="{{ route('contact') }}?service={{ $service->id }}" class="w-full inline-flex items-center justify-center gap-2 py-3 px-6 rounded-sm bg-white hover:bg-stone-100 text-[#1c1813] font-sans font-semibold text-xs tracking-wider transition-all shadow-sm">
                            សាកសួរអំពីសេវាកម្មនេះ
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Contact Info Box --}}
                <div class="bg-[#faf6f0] p-6 rounded-sm border border-stone-200 space-y-2">
                    <h4 class="font-serif font-bold text-stone-900 text-sm">ត្រូវការជំនួយបន្ទាន់?</h4>
                    <p class="text-xs text-stone-500 font-sans leading-relaxed">ទាក់ទងដោយផ្ទាល់ជាមួយប្រធានជាងជំនាញរបស់យើង សម្រាប់គម្រោងសម្លៀកបំពាក់បន្ទាន់។</p>
                    <a href="mailto:info@sm-embellishment.com" class="text-xs font-sans font-semibold text-[#b38728] hover:underline block pt-1">
                        info@sm-embellishment.com
                    </a>
                </div>
            </div>

        </div>

        {{-- Related Services --}}
        @if($relatedServices->isNotEmpty())
        <div class="mt-20 pt-16 border-t border-stone-200">
            <h2 class="text-2xl font-serif text-stone-900 mb-8">សេវាកម្មពាក់ព័ន្ធផ្សេងទៀត</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($relatedServices as $rel)
                    <a href="{{ route('services.detail', $rel->slug) }}" class="group bg-[#fdfcfb] p-6 rounded-sm border border-stone-200 hover:border-[#b38728] hover:shadow-md transition-all">
                        <h4 class="font-serif font-bold text-stone-900 group-hover:text-[#b38728] transition-colors mb-2">{{ $rel->title }}</h4>
                        <p class="text-xs text-stone-500 font-sans line-clamp-2 mb-4 leading-relaxed">{{ $rel->short_description ?? Str::limit($rel->description, 80) }}</p>
                        <span class="text-xs font-sans font-semibold text-[#b38728] inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                            ស្វែងយល់បន្ថែម →
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
