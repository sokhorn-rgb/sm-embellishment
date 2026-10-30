<?php

namespace App\Filament\Widgets;

use App\Models\Inquiry;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class InquiriesChart extends ChartWidget
{
    protected static ?int $sort = 3;

    protected ?string $heading = 'ស្ថិតិនៃការកក់ & សាកសួរក្នុងរយៈពេល ៦ ខែចុងក្រោយ (Inquiry Trends)';

    protected int|string|array $columnSpan = 'full';

    protected function getData(): array
    {
        $months = collect(range(5, 0))->map(function ($monthsAgo) {
            $date = Carbon::now()->subMonths($monthsAgo);

            return [
                'label' => $date->format('M Y'),
                'count' => Inquiry::whereYear('created_at', $date->year)
                    ->whereMonth('created_at', $date->month)
                    ->count(),
            ];
        });

        return [
            'datasets' => [
                [
                    'label' => 'ចំនួនការសាកសួរ (Inquiries)',
                    'data' => $months->pluck('count')->toArray(),
                    'fill' => 'start',
                    'borderColor' => '#b38728',
                    'backgroundColor' => 'rgba(179, 135, 40, 0.15)',
                    'tension' => 0.35,
                ],
            ],
            'labels' => $months->pluck('label')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
