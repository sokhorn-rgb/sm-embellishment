<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\HeroSection;
use App\Models\Inquiry;
use App\Models\MediaGallery;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\SeoSetting;
use App\Models\Service;
use App\Models\Testimonial;
use App\Services\TelegramService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $heroSections = HeroSection::where('is_active', true)->orderBy('sort_order')->get();
        $aboutSection = AboutSection::where('is_active', true)->first();
        $services = Service::where('is_active', true)->where('is_featured', true)->orderBy('sort_order')->take(6)->get();
        $portfolios = Portfolio::where('is_active', true)->where('is_featured', true)->orderBy('sort_order')->take(6)->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('sort_order')->take(6)->get();
        $seo = SeoSetting::forPage('home');
        $latestPosts = Post::where('status', 'published')
            ->with(['category', 'author'])
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('pages.home', compact(
            'heroSections',
            'aboutSection',
            'services',
            'portfolios',
            'testimonials',
            'seo',
            'latestPosts',
        ));
    }

    public function about(): View
    {
        $aboutSection = AboutSection::where('is_active', true)->first();
        $testimonials = Testimonial::where('is_active', true)->where('is_featured', true)->orderBy('sort_order')->take(3)->get();
        $seo = SeoSetting::forPage('about');

        return view('pages.about', compact('aboutSection', 'testimonials', 'seo'));
    }

    public function services(): View
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $seo = SeoSetting::forPage('services');

        return view('pages.services', compact('services', 'seo'));
    }

    public function serviceDetail(string $slug): View
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $relatedServices = Service::where('is_active', true)->where('id', '!=', $service->id)->take(3)->get();

        return view('pages.service-detail', compact('service', 'relatedServices'));
    }

    public function portfolio(): View
    {
        $portfolios = Portfolio::where('is_active', true)->orderBy('sort_order')->get();
        $categories = $portfolios->pluck('category')->unique()->filter();
        $seo = SeoSetting::forPage('portfolio');

        return view('pages.portfolio', compact('portfolios', 'categories', 'seo'));
    }

    public function portfolioDetail(string $slug): View
    {
        $portfolio = Portfolio::where('slug', $slug)->where('is_active', true)->firstOrFail();

        return view('pages.portfolio-detail', compact('portfolio'));
    }

    public function blog(): View
    {
        $posts = Post::where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->with(['category', 'author'])
            ->orderByDesc('published_at')
            ->paginate(9);
        $categories = PostCategory::where('is_active', true)->withCount('posts')->orderBy('sort_order')->get();
        $featuredPosts = Post::where('status', 'published')->where('is_featured', true)->take(3)->get();
        $seo = SeoSetting::forPage('blog');

        return view('pages.blog', compact('posts', 'categories', 'featuredPosts', 'seo'));
    }

    public function blogPost(string $slug): View
    {
        $post = Post::where('slug', $slug)->where('status', 'published')->with(['category', 'author'])->firstOrFail();
        $post->increment('view_count');
        $relatedPosts = Post::where('status', 'published')
            ->where('id', '!=', $post->id)
            ->where('post_category_id', $post->post_category_id)
            ->take(3)
            ->get();

        return view('pages.blog-post', compact('post', 'relatedPosts'));
    }

    public function contact(): View
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $seo = SeoSetting::forPage('contact');

        return view('pages.contact', compact('services', 'seo'));
    }

    public function submitInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'service_id' => 'nullable|exists:services,id',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $inquiry = Inquiry::create($validated);

        // Send instant notification to Telegram bot
        TelegramService::sendInquiryNotification($inquiry);

        return back()->with('success', 'អរគុណសម្រាប់ការទាក់ទងមកកាន់យើងខ្ញុំ! យើងនឹងឆ្លើយតបទៅលោកអ្នកក្នុងពេលឆាប់ៗនេះ។');
    }

    public function gallery(): View
    {
        $galleries = MediaGallery::where('is_active', true)->orderBy('sort_order')->get();
        $collections = $galleries->pluck('collection')->unique()->filter();
        $seo = SeoSetting::forPage('gallery');

        return view('pages.gallery', compact('galleries', 'collections', 'seo'));
    }
}
