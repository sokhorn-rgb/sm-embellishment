<?php

namespace App\Filament\Widgets;

use App\Models\Inquiry;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Service;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $pendingInquiries = Inquiry::where('status', 'pending')->count();
        $totalPortfolios = Portfolio::count();
        $featuredPortfolios = Portfolio::where('is_featured', true)->count();
        $activeServices = Service::where('is_active', true)->count();
        $publishedPosts = Post::where('status', 'published')->count();

        // 7-day inquiry trend sparkline
        $inquiriesLast7Days = collect(range(6, 0))->map(function ($daysAgo) {
            return Inquiry::whereDate('created_at', now()->subDays($daysAgo)->toDateString())->count();
        })->toArray();

        // 7-day portfolio additions sparkline
        $portfoliosLast7Days = collect(range(6, 0))->map(function ($daysAgo) {
            return Portfolio::whereDate('created_at', now()->subDays($daysAgo)->toDateString())->count();
        })->toArray();

        return [
            Stat::make('សារកក់ & ពិគ្រោះយោបល់ថ្មី', $pendingInquiries)
                ->description($pendingInquiries > 0 ? 'ត្រូវការការឆ្លើយតបជាបន្ទាន់' : 'គ្មានសាររង់ចាំឆ្លើយតបឡើយ')
                ->descriptionIcon($pendingInquiries > 0 ? 'heroicon-m-envelope-open' : 'heroicon-m-check-badge')
                ->chart($inquiriesLast7Days)
                ->color($pendingInquiries > 0 ? 'warning' : 'success'),

            Stat::make('ស្នាដៃច្នៃម៉ូដ & រ៉ូបមង្គលការ', $totalPortfolios)
                ->description("{$featuredPortfolios} ស្នាដៃលេចធ្លោ (Featured)")
                ->descriptionIcon('heroicon-m-sparkles')
                ->chart($portfoliosLast7Days)
                ->color('success'),

            Stat::make('សេវាកម្មប៉ាក់ឌិនសកម្ម', $activeServices)
                ->description('សេវាកម្មកំពុងបង្ហាញលើគេហទំព័រ')
                ->descriptionIcon('heroicon-m-scissors')
                ->color('primary'),

            Stat::make('អត្ថបទប្លុក & ព័ត៌មានម៉ូដ', $publishedPosts)
                ->description('អត្ថបទត្រូវបានបោះពុម្ពផ្សាយ')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('info'),
        ];
    }
}
