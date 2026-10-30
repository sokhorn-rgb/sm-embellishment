<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Inquiries\InquiryResource;
use App\Models\Inquiry;
use Filament\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class RecentInquiries extends TableWidget
{
    protected static ?int $sort = 2;

    protected static ?string $heading = 'សារសាកសួរ & កក់ការពិគ្រោះយោបល់ថ្មីៗ (Recent Inquiries)';

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(Inquiry::query()->latest()->limit(5))
            ->paginated(false)
            ->columns([
                TextColumn::make('status')
                    ->label('ស្ថានភាព')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'in_progress' => 'info',
                        'completed' => 'success',
                        'archived' => 'gray',
                        default => 'primary',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'pending' => 'រង់ចាំពិនិត្យ',
                        'in_progress' => 'កំពុងដំណើរការ',
                        'completed' => 'រួចរាល់',
                        'archived' => 'រក្សាទុក',
                        default => $state,
                    }),

                TextColumn::make('name')
                    ->label('ឈ្មោះអតិថិជន')
                    ->weight('bold'),

                TextColumn::make('phone')
                    ->label('លេខទូរស័ព្ទ'),

                TextColumn::make('email')
                    ->label('អ៊ីមែល')
                    ->copyable(),

                TextColumn::make('service.title')
                    ->label('សេវាកម្មដែលចាប់អារម្មណ៍')
                    ->placeholder('ការសាកសួរទូទៅ')
                    ->badge(),

                TextColumn::make('created_at')
                    ->label('កាលបរិច្ឆេទ')
                    ->since(),
            ])
            ->recordActions([
                Action::make('view')
                    ->label('ពិនិត្យមើល')
                    ->icon('heroicon-m-eye')
                    ->url(fn (Inquiry $record): string => InquiryResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
